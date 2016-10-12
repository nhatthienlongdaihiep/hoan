<?php

$id = $_GET['id'] ; 

if (isset($_POST['Upload'])){ s

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



$upload = move_uploaded_file($_FILES['myfile']['tmp_name'],$path.$_FILES['myfile']['name'] ) ;

	$query = mysql_query("UPDATE `user_info` SET `Image` = '$name'  WHERE `ID` = $id ");
	if ($query) {
		header('location:bai14.php');
	     
	}


}


}

?>

<h1>Upload file</h1>
 
<title> Upload file trên PHP</title>


<form action = "bai15.php?id=<?= $id ?>" method = "POST" enctype="multipart/form-data" name = 'id'>


Chọn File : <input type="file" name="myfile" size = "20"/><br />
 <input type="submit" value="Upload" name ="Upload" ></form>


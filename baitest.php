<?php
	include ("bai8.php") ;
	$myfile 	= addslashes(file_get_contents($_FILES['myfile']['tmp_name'])) ; 
	$myfile_name = addslashes($_FILES['myfile']['name']) ; 

	$sql = "INSERT INTO `user_info`(`Username`,`Image`) VALUES('$myfile_name', '$myfile')" ; 

	if (mysql_query($sql))
	{

		echo "Thành công " ; 

	}

	else {
		echo "Lỗi " ; 
	}

?>
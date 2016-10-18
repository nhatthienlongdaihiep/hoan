<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
?> 


<?php
include"bai8.php";

$pS = $_POST['partialState'] ; 

$query = mysql_query("SELECT * FROM `states` WHERE `name` LIKE '%$pS%' ");


while ($query1 = mysql_fetch_array($query) ) {

	echo '<div>'.$query1['name'].'</div>';
	echo '<div>'.$query1['id'].'</div>';
	echo '<div>'.$query1['abbr'].'</div>';




  	# code...
  }  




?>
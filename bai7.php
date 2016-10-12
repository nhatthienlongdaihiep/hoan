<?php

require 'bai8.php';
$query = "SELECT * FROM `user_info`" ;

if ($query_run = mysql_query($query))
{
	echo "Xuất dữ liệu";
	$query_execute = mysql_fetch_array($query_run);

	 foreach( $query_execute as $k => $vl ){
		echo $vl;
		echo '</br>';
	 }

	//echo '<pre>';
	//print_r($query_execute);
	//echo '</pre>';

	// while()
	// {
	// 	echo $query_execute['Name'];
	// }
}	

else 
{
	echo " Ko xuất dữ liệu dc ";
}

?>
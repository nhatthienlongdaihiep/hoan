<?php
	$dbhost = 'localhost' ;
	$username = 'root' ;
	$password = '' ;
	$db = 'Student';
	
$conn = mysql_connect("$dbhost", "$username","$password") ;
 mysql_connect("$dbhost", "$username","$password") ; 
 
 
 mysql_select_db($db) ;
 echo("On !!!") ;



 ?>
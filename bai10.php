<?php

require 'bai8.php';
$query = "SELECT * FROM `user_info`" ;

 $query_run = mysql_query($query);
 ?>
<table  cellpadding="5" cellspacing="5" width="70%" >


<html>
<head>
<style>
table,tr,th,td 
{
	border : 1px solid grey   ;
}
</style>
<tr>
	<html>
     <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <title>Bảng số liệu </title>
     </head>
	<td><strong>ID</strong></td>
	<td><strong>Username</strong>></td>
	<td><strong>Surname</strong>></td>
	<td><strong>Password</strong>></td>
	
	
	<form action="bai10.php" method = "POST" name = "Thao tác">
	<ul>
	<td><strong>Thao tác </strong></td>
	<td><strong>Hành động </strong></td>
	</ul>
	</form>
	
    
	
	
	
</tr>







<?php

	
	
	while($query_ex =mysql_fetch_assoc($query_run))
	{ ?>
		<tr>

	<td><?php echo $query_ex['ID'];?></td>
	<td><?php echo $query_ex['Username'];?></td>
	<td><?php echo $query_ex['Surname'];?></td>
	<td><?php echo $query_ex['Password'];?></td>
	<td> <a href="bai12fixdb.php">Sửa</a></td>
	<td> <a href="bai13.php">Xoá</a></td>

	
</tr>


	<?php } ?>

	


	</table>
	</head>
	</html>


	



	





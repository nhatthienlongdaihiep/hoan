<?php
session_start();
require "bai8.php";

$sql = "INSERT INTO `user_info`(`ID`,`Surname`, `Username`, `Password`) VALUES (['ID'],['Surname'],['Username'],['Password'])";
 
// Thực hiện thêm record
if ($conn->query($sql) === TRUE) {
    echo " Sửa thành công";
} else {
    echo "Lỗi: " . $sql . "<br>" . $conn->error;
}



	 /*$q = mysql_query("UPDATE `user_info` SET `ID` = [ 'ID' ],

  		`Surname` = [ 'Surname'],
  		`Username` = [ 'Username' ],
  		`Password` = [ 'Password' ]= WHERE 1");


while($row =$q)
	{ ?>
		

	<td><?php echo $q['Thao tác'];?></td>
	

	
</tr>


	<?php } ?>*/

?>
<?php


include 'bai8.php';
$query = "SELECT * FROM `user_info` " ;
if (isset($_POST['search'])) {

  $search_term = mysql_real_escape_string($_POST['search_box']);
  $query .= " WHERE `Username` = '$search_term' " ; 
  $query .= " OR  `ID` = '$search_term' " ;
  $query .= " OR  `Surname` = '$search_term' " ;
}
//echo $query ; die;

 $query_run = mysql_query($query);


 
 ?>



<?php

  
  
  while($query_ex =mysql_fetch_array($query_run))
  { ?>
    <tr>

  <td><?php echo $query_ex['ID'];?></td>
  <td><?php echo $query_ex['Username'];?></td>
  <td><?php echo $query_ex['Surname'];?></td>
  <td><?php echo $query_ex['Password'];?></td>
  

  
  
</tr>


  <?php } ?>

  


  </table>
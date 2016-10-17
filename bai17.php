<?php


include 'bai8.php';

$query = "SELECT * FROM `user_info` " ;
if (isset($_POST['search'])) {

  $search_term = mysql_real_escape_string($_POST['search_box']);
  $query .= " WHERE `Username` = '$search_term' LIKE '%".$_POST["search"]."%' " ; 
  
}
//echo $query ; die;

 $query_run = mysql_query($query);
 $row = mysql_num_rows($query_run);


 
 ?>



<?php

if ($row >  0 ) 
{
    

    ?> <h4 align="center">Search Result</h4>  
      <div class="table-responsive">  </div>
      <table class="table table bordered"> 

    <tr><td><strong>Username</strong></td></tr>

 <?php while($query_ex =mysql_fetch_array($query_run))
  { ?>
    <tr>

  
  <td><?php echo $query_ex['Username'];?></td>
  <td><?php echo $query_ex['ID']; ?></td>
     </tr>

    <?php } ?> 
 <?php } ?>  


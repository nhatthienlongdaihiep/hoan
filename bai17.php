<?php


include 'bai8.php';
$query = "SELECT * FROM `user_info`" ;
if (isset($_POST['search'])) {

  $search_term = mysql_real_escape_string($_POST['search_box']);
  $query .= " WHERE `Username` = '$search_term' " ; 
  $query .= " OR  `ID` = '$search_term' " ;
  $query .= " OR  `Surname` = '$search_term' " ;
}
//echo $query ; die;

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
     <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

    <form name = "search_form" method = "POST" action ="bai17.php">

  Search : <input type="text" name="search_box" value=""/>
    <input type="submit" name = "search" value="Tìm kiếm">
    </form>
     <script language="javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script language="javascript">
            function load_ajax()
{
    // URL
    var url = "bai1.php";
 
    // Data
    var data = {
        search : $('#search').val()
    };
 
    // Success Function
    var success = function (result){
        $('#result').html(result);
    };
 
    // Result Type
    var dataType = 'text';
 
    // Send Ajax
    $.post(url, data, success, dataType);
}
        </script>

    <title>Tìm kiếm người thân </title>
  <td><strong>ID</strong></td>
  <td><strong>Username</strong></td>
  <td><strong>Surname</strong></td>
  <td><strong>Password</strong></td>
  
  
  







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
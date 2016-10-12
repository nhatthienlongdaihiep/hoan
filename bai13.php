 <?php
 session_start();
 include "bai8.php";

 //$id_edit = $_GET['Id']; 
  //echo "Id".$id_edit;



 
  if ($_POST){
/*---------*/

  
 $user     = $_POST ['Username'] ;
  $surname  = $_POST ['Surname'] ;
  



    

    //check pass db 
  $sql1 =  ("SELECT * FROM user_info WHERE 'Username' = '$username'  ") or die ("");
  
  $query = mysql_query( $sql1 ) or die (" Ko khớp ");
  $row = mysql_num_rows($query); 
  $data  = mysql_fetch_array($query);
  $id = $data['Id'] ;
  if ($row = 0 ) 
  {  
    echo "MK ko khớp ";
    }

  else {
          $_SESSION["user_id"] = $id ;
        $q = mysql_query("DELETE FROM `user_info` WhERE `ID` = 5 ");
         

        echo "Xoá thành công". $id ; 
        
    
     
  }



 


/*-------*/
  }else{?>

      <html>
     <head>
    <form method="POST" onsubmit="return confirm('Are you sure you want to delete this case?');">
    <input type="hidden" name="METHOD" value="DELETE">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <button type="submit" size = "50">Delete</button>
</form>
   
   </body>
    </html>  
    <?php } ?>
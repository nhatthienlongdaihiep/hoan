 <?php
 session_start();
 include "bai8.php";


  $id_edit = $_GET['ID']; 
  echo "ID".$id_edit;

 
  if ($_POST){
/*---------*/

  
  $user     = $_POST ['Username'] ;
  $oldpass  = $_POST ['Password'] ;
  $newpass  = $_POST ['newpassword'];
  $rp       = $_POST ['confirm'];
  

  



    

    //check pass db 
  $sql1 =  ("SELECT * FROM user_info WHERE 'Username' = '$username' ") or die ("");
  
  $query = mysql_query( $sql1 ) or die (" Ko khớp ");
  $row = mysql_num_rows($query); 
  $data  = mysql_fetch_array($query);
  $id = $data['ID'] ;
  if ($row = 0 ) 
  {  
    echo "MK ko khớp ";
    }

  else {
          $_SESSION["user_id"] = $id ;
        $q = mysql_query("UPDATE `user_info` SET 'Username' = '$username'AND`Password`='$newpass' WHERE `ID` = $id ");
         

        echo "Đổi mật khẩu thành công". $id ; 
        
    
     
  }



 


/*-------*/
  }else{?>

      <html>
     <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <title>Thay đổi số liệu </title>
     </head>
    <body>
    <h1>Dữ liệu mới </h1>
    <form  method="GET" action="bai12fixdb.php">
          <td> Điền Id:</td>
          <td><input type="readonly" size="10" name="ID"></td></form>
  
        
   
   
    <form action  method="POST" action="bai12fixdb.php">
    <table>
    <tr>
    <td>Điền User cũ:</td>
    <td><input type="text" size="10" name='Username'></td>
    </tr>
    <tr>
    <td>Điền mật khẩu cũ:</td>
    <td><input type="password" size="10" name="Password"></td>
    </tr>
  <tr>
    <td>Điền mật khẩu mới :</td>
    <td><input type="password" size="10" name="newpassword"></td>
    </tr>
    <tr>
   <td>Điền lại mật khẩu mới :</td>
   <td><input type="password" size="10" name="confirm"></td>
    </tr>
    </table>
    <p><input type="submit" value="Thay đổi">
    </form>
   <p><a href="">Home</a>
   
   </body>
    </html>  
    <?php } ?>

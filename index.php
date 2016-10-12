<!DOCTYPE html>
<html>
    <head>
        <title></title>
       <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <form method="POST">
            Username: <input type="text" name="username" value=""/> <br/>
            password: <input type="password" name="password" value=""/><br/>
            <input type="submit" name="form_click" value="Gửi Dữ Liệu"/><br/>
            <?php

                require 'bai8.php';
$query = "SELECT * FROM `user_info`" ;

if ($query_run = mysql_query($query))
{

    echo("Hiện dữ liệu ") .'<br>';
;   
    while($query_ex =mysql_fetch_assoc($query_run))
    {
        echo '<pre>';
        print_r($query_ex);
        echo '</pre>';

    }

}
else 
{
    echo("Ko hiện dc ");
}

?>
                if (isset($_POST['form_click'])){
                    echo 'Tên đăng nhập là: ' . $_POST['username'];
                    echo '<br/>';
                    echo 'Mật khẩu là: ' . $_POST['password'];
                }
           ?>
        </form>
    </body>
</html>
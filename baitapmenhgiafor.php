<html>
   
   <head>
      <title>Demo chương trình PHP</title>
       
   </head>
   <body>
       <?php
    //số tiền nạp vào    
    $user = 200;

    $a = array(10,20,50,100,200,500);
    //đếm số lượng phần tử của mảng
    $n = count($a);
    $km = 0;
    for($i = 0; $i < $n; $i++)
    {
        
        //nếu phần tử mảng nhỏ hơn 50 thì bỏ  
        if( $a[$i] < 50  && $a[$i] == $user )
        {
            continue;
        }
        elseif ( $a[$i] >= 50 && $a[$i] == $user ) //nếu phần tử lớn hơn bằng 50 thì bỏ qua
        { 
            $km = $user*0.5;
            echo 'So tien khuyen mai :'. $km.'</br>';
            echo 'Co the khuyen mai : '.$a[$i].'</br>';
            echo 'Tong tien nhan duoc :'. ($user + $km) ;
            break;
        }
        
    }

    if ($km == 0)
    {
      echo 'Menh gia khong KM:'. $user; 
    }



       ?>
   </body>
</html>   
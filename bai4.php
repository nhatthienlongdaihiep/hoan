
<?php
$a = array( array( 'trai' => 'dao', 'sl'=> 1 ),  array( 'trai' => 'cam', 'sl'=> 4 ), array( 'trai' => 'man', 'sl'=> 2 ), array( 'trai' => 'dua', 'sl'=> 5 ) );


 

echo '<pre>';
print_r( $a );
echo '</pre>';
//Nối  khoảng với các trai trong array 
$trai = ('');
// Tạo tổng liên kết trong sl 
$tong = (0) ;



foreach($a as $k => $v){
	$trai = $trai.$v['trai'].' ,';
	$tong = ($tong + $v['sl']);   
    echo "'Loại trái cây :$trai <br/>";
    echo "'Tổng số lượng các loại :$tong <br/>";
} 

echo '<pre>';
print_r( $trai );
print_r( $tong );
echo '</pre>';
         
?>
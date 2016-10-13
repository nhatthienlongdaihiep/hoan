<?php
$a = array("1"=>"b", "2"=>"y", "3"=>"h", "4"=>"j", "5"=>"e", "6"=>"t", "7"=>"u", "8"=>"q");
//krsort($a);

$new = array_slice($a, 1 , 5);

echo '<pre>';
print_r( $new );
echo '</pre>';

/*
foreach ($a as $x => $value) {
echo 'Se la :'.$x.'</br>','Va la :'.$value;
echo'</br>';
print_r(array_slice($a, 3,7, true));
}
*/
?>
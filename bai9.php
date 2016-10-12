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
<table border="0" cellpadding="5" cellspacing="5" width="70%" >
<tr>

	<td></td>




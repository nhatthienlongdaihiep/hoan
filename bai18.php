<!DOCTYPE html>
<html>
<head>
		<script type ="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
       <script type="text/javascript">

			function getStates(value) {

		$.post("bai19.php" ,{partialState:value} , function (data){
			$("#results").html(data) ;
		});

	}
					 
			
	




</script>
		f

	<title></title>
</head>
<body>
			<input type="text" onkeyup="getStates(this.value)"/>

			<br>

			<dir id = "results"> </dir>

</body>
</html>		
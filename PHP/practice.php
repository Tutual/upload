<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PHP</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<h1 class="text-center text-white">PHP</h1>
	<?php
		function Addition($num1, $num2)
		{
			$sum = $num1 + $num2;
			echo"<p class='text-success font-weight-bold text-center'>The sum is = $sum</p>";
		}
		echo'The text here.<br/>';	
		echo"The text here. ";	
		echo'The text here.';
		$x = 5;
		$y = 6;
		Addition($x, $y);
	?>
</body>
</html>
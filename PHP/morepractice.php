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
		echo"<p class='text-success font-weight-bold text-center'>Today Date:</p>";
		echo date("d/m/y");
		echo"<br>";
		echo date("d.m.Y");
		echo"<br>";
		echo date("d/M/Y");
		echo"<br>";
		echo date("d/F/Y");
		echo"<br>";
		echo date("d-M-Y (l)");
		echo"<br>";
		echo date("d-M-Y (l) h:m:s");
		echo"<br>";
		echo date("d-M-Y (l) H:m:s");

	?>
</body>
</html>
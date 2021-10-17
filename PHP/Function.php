<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>function parameter</title>
</head>
<body>
	<?php
	function Addition($x,$y,$z){
		$sum=$x+$y+$z;
		echo"The sum is $sum<br/>";
	}
	echo"Parameter pass<br/>";
	$a=10;$b=45;$c=30;
	echo"the values are $a,$b,$c<br/>";
	Addition($a,$b,$c);
	?>
</body>
</html>
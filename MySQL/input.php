<?php
	$con = mysql_connect("localhost", "root", "");
	if (!$con) {
		die('Could not connect: ' . mysql_error());
	}
	mysql_select_db("input_db");

	$id = $_POST["id"];
	$name = $_POST["user"];
	$address = $_POST["Address"];

	$query = "INSERT INTO users (id, name, address) VALUES('$id', '$name', '$address')";

	$result = mysql_query($query);

	if ($result) {
		echo "<br/>Input data is succeed";
	}
	else{
		echo "<br/>Input data is fail";
	}
?>
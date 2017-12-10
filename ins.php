<?php
	$mysqli = mysqli_connect("localhost:3306", "root", "root", "ordersDB");
	$item = $_POST["stringI"];
	$price = $_POST["price"];
	$tableNum = $_POST["tableNum"];
	$ins = "INSERT INTO ordersDB.order(nameMeal, price, tableNum) VALUES ('$item', $price, $tableNum);";
	echo $ins;
	mysqli_query($mysqli, $ins);
	//echo ($mysqli->error);
	echo "Complete!";
?>
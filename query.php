<?php 
	$mysqli = mysqli_connect("localhost:3306", "root", "root", "ordersDB");
	if ($mysqli->connect_error) {
		die('Connect Error: ' . $mysqli->connect_error);
	}
	$tableNum = $_GET["tableNum"];
	$qrymaxtn = "SELECT MAX(tableNum) AS mtn FROM ordersDB.order;";
	$resultmtn = mysqli_query($mysqli, $qrymaxtn);
	while($row3 = mysqli_fetch_array($resultmtn)) {
		$int1 = settype($row3["mtn"], "integer");
	}
	echo "<p id = 'title'><u>Orders for table ".$tableNum.": </u></p>";
	$qry = "SELECT nameMeal, price FROM ordersDB.order WHERE tableNum=$tableNum;";
	$result = mysqli_query($mysqli, $qry);
	echo "<ul>";
	while($row = mysqli_fetch_array($result)) { 
		echo("<li><p>".$row["nameMeal"]." -- ".$row["price"]."</p></li>"); 
	}
	echo "</ul>";
	$qrytotalprice = "SELECT SUM(price) AS total FROM ordersDB.order WHERE tableNum = $tableNum;";
	$result2 = mysqli_query($mysqli, $qrytotalprice);

	while($row2 = mysqli_fetch_array($result2)) {
		$string = number_format($row2["total"],2);
	}
	echo "<p>Total: ".$string."</p>";
	mysqli_close($mysqli);

?>

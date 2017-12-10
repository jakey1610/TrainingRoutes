<?php 
	$mysqli = mysqli_connect("localhost:3306", "root", "root", "ordersDB");
	if ($mysqli->connect_error) {
		die('Connect Error: ' . $mysqli->connect_error);
	}
	$tableNum = 1;
	echo "<p>Orders for table ".$tableNum.": </p>";
	$qry = "SELECT nameMeal, price FROM ordersDB.order WHERE tableNum=$tableNum;";
	$result = mysqli_query($mysqli, $qry);
	//echo($result);
	while($row = mysqli_fetch_array($result)) echo("<p>".$row["nameMeal"]." ".$row["price"]."</p>");
	//$qrytotalprice = $mysqli->prepare('SELECT SUM(price) FROM order WHERE table = ?');
	//echo $qrytotalprice->execute(array($tableNum));
	mysqli_close($mysqli);
?>

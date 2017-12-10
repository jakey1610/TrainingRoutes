<?php 
	$mysqli = mysqli_connect("localhost:3306", "root", "root", "ordersDB");
	if ($mysqli->connect_error) {
		die('Connect Error: ' . $mysqli->connect_error);
	}

	$qrymaxtn = "SELECT MAX(tableNum) AS mtn FROM ordersDB.order;";
	$resultmtn = mysqli_query($mysqli, $qrymaxtn);
	while($row3 = mysqli_fetch_array($resultmtn)) {
		$string1 = $row3["mtn"];
	}
	//for($tableNum = 1; $tableNum <= 2; $tableNum){
		echo "<p>Orders for table ".$tableNum.": </p>";
		$qry = "SELECT nameMeal, price FROM ordersDB.order WHERE tableNum=$tableNum;";
		$result = mysqli_query($mysqli, $qry);
		while($row = mysqli_fetch_array($result)) { 
			echo("<p>".$row["nameMeal"]." -- ".$row["price"]."</p>"); 
		}
		$qrytotalprice = "SELECT SUM(price) AS total FROM ordersDB.order WHERE tableNum = $tableNum;";
		$result2 = mysqli_query($mysqli, $qrytotalprice);

		while($row2 = mysqli_fetch_array($result2)) {
			$string = number_format($row2["total"],2);
		}
		echo "<p>Total: ".$string."</p>";
		mysqli_close($mysqli);
	.//}
?>

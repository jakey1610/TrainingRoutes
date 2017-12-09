<?php 
	$mysqli = new mysqli_connect("localhost", "username", "password", "dbname");
	$table = 1;
	echo "<div style = 'color: red; size: 20;' Orders for table " + $table + ": </div>";
	$qry = mysqli->prepare('SELECT name, price, calories FROM order WHERE table = ?');
	$qry->execute(array($table));
	while($row = $qry->fetch(PDO::FETCH_ASSOC)) echo($row);
	$qrytotalprice = mysqli->prepare('SELECT SUM(price) FROM order WHERE table = ?');
	echo $qrytotalprice->execute(array($table));
?>
<?php
	$db = mysqli_connect("localhost", "username", "password", "dbname");
	function atodb($a){
		$ins = mysqli->execute("INSERT (?) INTO order");
	}
?>
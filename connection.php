<?php

$conn = "";

try {
	$servername = "localhost";
	$dbname = "organ_donation";
	$username = "root";
	$password = "";

	$conn = new PDO(
		"mysql:host=$servername; dbname=organ_donation",
		$username, $password
	);
	
$conn->setAttribute(PDO::ATTR_ERRMODE,
					PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}

?>

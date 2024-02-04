<?php
	$servername= "localhost";
	$username = "root";
	$password = "";
	$dbname= "organ_donation_system";

	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_errno) {
	printf("Connect failed: %s\n", $conn->connect_error);
	exit();
	}
?>
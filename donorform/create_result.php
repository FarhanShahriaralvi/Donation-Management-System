<?php

	$d_id = $_GET["donor_id"];

	$d_name = $_GET["donor_name"];

	$d_age = $_GET["donor_age"];

	$d_gender = $_GET["donor_gender"];
	
	$d_contact = $_GET["donor_contact"];

	$d_email = $_GET["donor_email"];

	$d_address = $_GET["donor_address"];

	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "INSERT INTO donor VALUES ( '$d_id', '$d_name', '$d_age', '$d_gender','$d_contact','$d_email','$d_address' )" )

		or die("Can not execute query");



	echo "Record inserted:<br> donor_id = $d_id<br> donor_name = $d_name <br>donor_age = $d_age <br>donor_gender= $d_gender<br>donor_contact= $d_contact<br> donor_email = $d_email<br> donor_address = $d_address";



	echo "<p><a href=read.php> READ all records </a>";

?>
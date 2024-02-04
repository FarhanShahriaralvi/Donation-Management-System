<?php

	$h_id = $_GET["hospital_ID"];

	$h_name= $_GET["hospital_name"];

	$h_branch = $_GET["branch"];

	$h_contact = $_GET["hospital_contact"];
	
	$h_email = $_GET["hospital_email"];

	$h_address= $_GET["hospital_address"];

	$h_charge=$_GET['hospital_charge'];


	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "INSERT INTO hospital VALUES ( '$h_id', '$h_name', '$h_branch', '$h_contact','$h_email','$h_address','$h_charge' )" )

		or die("Can not execute query");



	echo "Record inserted:";



	echo "<p><a href=read.php>READ all records</a>";

?>
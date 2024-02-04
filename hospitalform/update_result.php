<?php

	$h_id = $_GET["hospital_ID"];

	$h_name = $_GET["hospital_name"];

	$h_branch = $_GET["branch"];

	$h_contact = $_GET["hospital_contact"];
	
	$h_email = $_GET["hospital_email"];
	
	$h_address = $_GET["hospital_address"];

	$h_charge=$_GET['hospital_charge'];


	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	$query 	= "UPDATE hospital SET hospital_ID='$h_id' ,hospital_name='$h_name', branch= '$h_branch', hospital_contact='$h_contact' , hospital_email='$h_email',hospital_address='$h_address',hospital_charge='$h_charge' WHERE hospital_ID = $h_id";



	mysqli_query( $connect, $query )

		or die("Can not execute query");


	echo "Record inserted:<br> hospital_ID = $h_id<br> hospital_name = $h_name <br> branch = $h_branch <br> hospital_contact= $h_contact <br> hospital_email= $h_email <br> hospital_address= $h_address <br> hospital_charge= $h_charge <br>";



	echo "<p><a href=read.php>READ all records</a>";

?>
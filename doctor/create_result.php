<?php

	$d_id = $_GET["doctor_ID"];

	$d_name= $_GET["doctor_name"];

	$d_age= $_GET["doctor_age"];

	$d_gender= $_GET["doctor_gender"];

	$d_contact = $_GET["doctor_contact"];
	
	$d_email = $_GET["doctor_email"];

	$d_address= $_GET["doctor_address"];

	$d_h_id= $_GET["d_h_ID"];

	$d_fee = $_GET["doctor_fee"];

	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "INSERT INTO doctor VALUES ( '$d_id','$d_name', '$d_age', '$d_gender' ,'$d_contact','$d_email','$d_address', '$d_h_id','$d_fee' )" )

		or die("Can not execute query");



	echo "Record inserted:<br> doctor_ID = $d_id<br> doctor_name = $d_name <br> doctor_age= $d_age <br> doctor_gender= $d_gender <br> doctor_contact= $d_contact <br> doctor_email= $d_email <br> doctor_address= $d_address <br> d_h_ID= $d_h_id <br> doctor_fee= $d_fee";



	echo "<p><a href=read.php>READ all records</a>";

?>
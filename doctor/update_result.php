<?php

	$doc_id = $_GET["doctor_ID"];

	$doc_name = $_GET["doctor_name"];

	$doc_age = $_GET["doctor_age"];

	$doc_gender = $_GET["doctor_gender"];

	$doc_contact = $_GET["doctor_contact"];
	
	$doc_email = $_GET["doctor_email"];
	
	$doc_address = $_GET["doctor_address"];

	$d_h_id = $_GET["d_h_ID"];

	$doc_fee = $_GET["doctor_fee"];


	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	$query 	= "UPDATE doctor SET doctor_ID='$doc_id' ,doctor_name='$doc_name', doctor_age= '$doc_age', doctor_gender='$doc_gender',doctor_contact='$doc_contact' , doctor_email='$doc_email',doctor_address='$doc_address',d_h_ID='$d_h_id',doctor_fee='$doc_fee' WHERE doctor_ID = $doc_id";



	mysqli_query( $connect, $query )

		or die("Can not execute query");


	echo "<p>Record updated:<br> doctor_id=$doc_id <br> doctor_name = $doc_name <br> doctor_age=$doc_age <br> doctor_gender=$doc_gender <br> doctor_contact= $doc_contact<br> doctor_email= $doc_email <br> doctor_address= $doc_address <br> d_h_ID= $d_h_id <br> doctor_fee=$doc_fee <br>";



	echo "<p><a href=read.php>READ all records</a>";

?>
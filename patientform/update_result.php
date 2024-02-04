<?php

	$p_id = $_GET["patient_id"];

	$p_name = $_GET["patient_name"];

	$p_age = $_GET["patient_age"];

	$p_gender = $_GET["patient_gender"];

	$p_contact = $_GET["patient_contact"];

	$p_email = $_GET["patient_email"];
	
	$p_address = $_GET["patient_address"];

	$p_d_id = $_GET["p_d_ID"];

	$p_h_id = $_GET["p_h_ID"];

	$p_o_id = $_GET["patient_organ_id"];


	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");

	$query 	= "UPDATE patient_form SET patient_id='$p_id' ,patient_name='$p_name', patient_age= '$p_age', patient_gender='$p_gender' ,patient_contact = '$p_contact',patient_email= '$p_email',patient_address= '$p_address',p_d_id= '$p_d_id',p_h_id= '$p_h_id',patient_organ_id= '$p_o_id' WHERE patient_id= $p_id";



	mysqli_query( $connect, $query )

		or die("Can not execute query");


	echo "Record inserted:<br> patient_id = $p_id <br> patient_name =$p_name  <br> patient_age = $p_age <br> patient_gender= $p_gender <br> patient_contact = $p_contact <br> patient_email= $p_email <br> patient_address= $p_address <br> p_d_id= $p_d_id <br> p_h_id= $p_h_id <br> patient_organ_id= $p_o_id ";
	
	echo "<p><a href=read.php>READ all records</a>";

?>
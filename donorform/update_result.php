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



	$query 	= "UPDATE donor SET donor_id='$d_id' ,donor_name='$d_name', donor_age= '$d_age', donor_gender='$d_gender',donor_contact='$d_contact' , donor_email='$d_email',donor_address='$d_address' WHERE donor_id = $d_id";



	mysqli_query( $connect, $query )

		or die("Can not execute query");


	echo "<p>Record updated:<br> donor_id=$d_id <br> donor_name = $d_name <br> donor_age=$d_age <br> donor_gender=$d_gender <br> donor_contact= $d_contact<br>  donor_email= $d_email <br> donor_address= $d_address <br>";



	echo "<p><a href=read.php>READ all records</a>";

?>
<?php

	$patient = $_GET["patient_id"];

	require_once('db_connect.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");



	
	$results = mysqli_query( $connect, "SELECT * FROM doctor WHERE doctor_ID = (SELECT p_d_id FROM patient_form WHERE patient_id = $patient)" )
		or die("Can not execute query");

	echo "<table border> \n";
	echo "<th>doctor_ID</th> <th>doctor_name</th> <th>doctor_age</th> <th>doctor_gender</th> <th>doctor_contact</th> <th>doctor_email</th> <th>doctor_address</th> <th>d_h_ID</th> \n";

	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $doctor_ID</td>";
		echo "<td> $doctor_name </td>";
		echo "<td> $doctor_age </td>";
		echo "<td> $doctor_gender </td>";
		echo "<td> $doctor_contact</td>";
		echo "<td> $doctor_email </td>";
		echo "<td> $doctor_address</td>";
		echo "<td> $d_h_ID</td>";
		echo "</tr> \n";
	}

	echo "</table> \n";

	
?>
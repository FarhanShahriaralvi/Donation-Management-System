<?php

	$expense_id = $_GET["expense_id"];

	$e_p_id= $_GET["e_p_id"];

	$e_d_id = $_GET["e_d_id"];

	$e_h_id = $_GET["e_h_id"];
	
	$e_o_id = $_GET["e_o_id"];

	


	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "INSERT INTO expense VALUES ( '$expense_id', '$e_p_id', '$e_d_id', '$e_h_id','$e_o_id' )" )

		or die("Can not execute query");



	echo "Record inserted:<br> expense_id = $expense_id<br> e_p_id = $e_p_id <br> e_d_id = $e_d_id <br> e_h_id= $e_h_id <br> e_o_id= $e_o_id";



	echo "<p><a href=read.php>READ all records</a>";

?>
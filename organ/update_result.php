<?php

	$o_id = $_GET["organ_id"];

	$o_name= $_GET["organ_name"];

	$o_bloodgrp= $_GET["organ_bloodgroup"];

	$organ_quantity= $_GET["organ_quantity"];

	$o_h_ID = $_GET["o_h_ID"];
	
	$o_donor_ID = $_GET["o_donor_ID"];

	$o_expense = $_GET["o_expense"];

	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");

	$query 	= "UPDATE organ SET organ_id = '$o_id' ,organ_name = '$o_name', organ_bloodgroup= '$o_bloodgrp', organ_quantity= '$organ_quantity' ,o_h_ID= '$o_h_ID',o_donor_ID= '$o_donor_ID',o_expense= '$o_expense' WHERE organ_id = $o_id";



	mysqli_query( $connect, $query )

		or die("Can not execute query");



	echo "Record inserted:<br> organ_id = $o_id<br> organ_name = $o_name <br> organ_bloodgroup= $o_bloodgrp <br> organ_quantity= $organ_quantity <br> o_h_ID= $o_h_ID <br> o_donor_ID= $o_donor_ID <br> o_expense= $o_expense ";



	echo "<p><a href=read.php>READ all records</a>";

?>
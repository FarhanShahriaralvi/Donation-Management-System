<?php	$expense_id = $_GET["expense_id"];	require_once('db_connect.php');	$connect = mysqli_connect( HOST, USER, PASS, DB )		or die("Can not connect");	mysqli_query( $connect, "DELETE FROM expense WHERE expense_id=$expense_id" )		or die("Can not execute query");	echo "Record deleted<br>";	echo "<p><a href=read.php>READ all records</a>";	?>
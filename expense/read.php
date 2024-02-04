<?php
	require_once('db_connect.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	
	$results = mysqli_query( $connect, "SELECT * FROM expense" )
		or die("Can not execute query");

	echo "<table border> \n";
	echo "<th>expense_id</th> <th>e_p_id</th> <th>e_d_id</th> <th>e_h_id</th> <th>e_o_id</th> <th>Delete</th> <th>Update</th> \n";

	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $expense_id </td>";
		echo "<td> $e_p_id </td>";
		echo "<td> $e_d_id </td>";
		echo "<td> $e_h_id</td>";
		echo "<td> $e_o_id</td>";
		
		echo "<td> <a href = 'delete.php?expense_id=$expense_id'> Delete </a> </td>";
		echo "<td> <a href = 'update_input.php?expense_id=$expense_id'> Update </a> </td>";
		echo "</tr> \n";
	}

	echo "</table> \n";

	
?>
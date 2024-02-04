<html>
	<head>
		<title>patient Site</title>

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
		 <meta charset = "utf-8">
        
        <link rel="stylesheet" type="text/css" href="css/patientform_design.css">
	</head>
	

	<body>
		
		 <form action = "" method = "get">
	<div class="form">
	
	<h1 align="center">Patient Table</h1></div>

	<?php

	require_once('db_connect.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	
	$results = mysqli_query( $connect, "SELECT * FROM patient_form" )
		or die("Can not execute query");

	
	echo "<table class='ui celled striped unstackable  collapsing table' style='margin: 0 auto;'> \n";
	echo "<thead><tr><th>patient_id</th> <th>patient_name</th> <th>patient_age</th> <th>patient_gender</th> <th>patient_contact</th> <th>patient_email</th> <th>patient_address</th> <th>p_d_id</th> <th>p_h_id</th> <th>patient_organ_id</th> <th>Delete</th> <th>Update</th> </tr> </thead>  <tbody> \n";

	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $patient_id </td>";
		echo "<td> $patient_name </td>";
		echo "<td> $patient_age </td>";
		echo "<td> $patient_gender</td>";
		echo "<td> $patient_contact</td>";
		echo "<td> $patient_email</td>";
		echo "<td> $patient_address</td>";
		echo "<td> $p_d_ID</td>";
		echo "<td> $p_h_ID</td>";
		echo "<td> $patient_organ_id</td>";
		echo "<td> <a href = 'delete.php?patient_id=$patient_id'> Delete </a> </td>";
		echo "<td> <a href = 'update_input.php?patient_id=$patient_id'> Update </a> </td>";
		echo "</tr> \n";
	}
	echo "</tbody>";

	echo "</table> \n";

	
?>
	</form>

</body>
</html>
<html>
	<head>
		<title>doctor Site</title>

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
		 <meta charset = "utf-8">
        
        <link rel="stylesheet" type="text/css" href="css/doctorform_design.css">
	</head>
	

	<body>
		
		 <form action = "" method = "get">
	<div class="form">
	
	<h1 align="center">Doctor Table</h1></div>

<?php


	require_once('db_connect.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");



	
	$results = mysqli_query( $connect, "SELECT * FROM doctor" )
		or die("Can not execute query");

	echo "<table class='ui celled striped unstackable  collapsing table' style='margin: 0 auto;'> \n";
	echo "<thead><tr><th>doctor_ID</th> <th>doctor_name</th> <th>doctor_age</th> <th>doctor_gender</th> <th>doctor_contact</th> <th>doctor_email</th> <th>doctor_address</th> <th>d_h_ID</th> <th>doctor_fee</th> <th>Delete</th> <th>Update</th> </tr> </thead>  <tbody> \n";

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
		echo "<td> $doctor_fee</td>";
		echo "<td> <a href = 'delete.php?doctor_ID=$doctor_ID'> Delete </a> </td>";
		echo "<td> <a href = 'update_input.php?doctor_ID=$doctor_ID'> Update </a> </td>";
		echo "</tr> \n";
	}
	echo "</tbody>";

	echo "</table> \n";

	
?>
	</form>

</body>
</html>
<html>
	<head>
		<title>hospital Site</title>

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
		 <meta charset = "utf-8">
        
        <link rel="stylesheet" type="text/css" href="css/hospitalform_design.css">
	</head>
	

	<body>
		
		 <form action = "" method = "get">
	<div class="form">
	
	<h1 align="center">Hospital Table</h1></div>
	<?php
	require_once('db_connect.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	
	$results = mysqli_query( $connect, "SELECT * FROM hospital" )
		or die("Can not execute query");

	echo "<table class='ui celled striped unstackable  collapsing table' style='margin: 0 auto;'> \n";
	echo "<thead><tr><th>hospital_ID</th> <th>hospital_name</th> <th>branch</th> <th>hospital_contact</th> <th>hospital_email</th> <th>hospital_address </th> <th>hospital_charge </th> <th>Delete</th> <th>Update</th> </tr> </thead>  <tbody> \n";

	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $hospital_ID </td>";
		echo "<td> $hospital_name </td>";
		echo "<td> $branch </td>";
		echo "<td> $hospital_contact</td>";
		echo "<td> $hospital_email</td>";
		echo "<td> $hospital_address</td>";
		echo "<td> $hospital_charge</td>";
		echo "<td> <a href = 'delete.php?hospital_ID=$hospital_ID'> Delete </a> </td>";
		echo "<td> <a href = 'update_input.php?hospital_ID=$hospital_ID'> Update </a> </td>";
		echo "</tr> \n";
	}
	echo "</tbody>";

	echo "</table> \n";

	
?>
</form>

</body>
</html>
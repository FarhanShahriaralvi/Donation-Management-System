<html>
	<head>
		<title>donor Site</title>

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
		 <meta charset = "utf-8">
        
        <link rel="stylesheet" type="text/css" href="css/donorform_design.css">
	</head>
	

	<body>
		
		 <form action = "" method = "get">
	<div class="form">
	
	<h1 align="center">Donor Table</h1></div>


<?php
	require_once('db_connect.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	
	$results = mysqli_query( $connect, "SELECT * FROM donor" )
		or die("Can not execute query");

	echo "<table class='ui celled striped unstackable  collapsing table' style='margin: 0 auto;'> \n";
	echo "<thead><tr><th>donar_id</th> <th>donor_name</th> <th>donor_age</th> <th>donor_gender</th> <th>donor_contact</th> <th>donor_email</th> <th>donor_address</th> <th>Delete</th> <th>Update</th> </tr> </thead>  <tbody> \n";

	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $donor_id </td>";
		echo "<td> $donor_name </td>";
		echo "<td> $donor_age </td>";
		echo "<td> $donor_gender</td>";
		echo "<td> $donor_contact</td>";
		echo "<td> $donor_email</td>";
		echo "<td> $donor_address</td>";
		echo "<td> <a href = 'delete.php?donor_id=$donor_id'> Delete </a> </td>";
		echo "<td> <a href = 'update_input.php?donor_id=$donor_id'> Update </a> </td>";
		echo "</tr> \n";
	}
	echo "</tbody>";
	echo "</table> \n";

	
?>
	</form>

</body>
</html>
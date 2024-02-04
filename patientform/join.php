<html>
	<head>
		<title>Total Cost Site</title>

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
		 <meta charset = "utf-8">
        
        <link rel="stylesheet" type="text/css" href="css/patientform_design.css">
	</head>
	

	<body>
		
		 <form action = "" method = "get">
	<div class="form">
	
	<h1 align="center">Patient Details Table</h1></div>
<?php

	$p_id = $_GET["patient_id"];

	require_once('db_connect.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	
	$results = mysqli_query( $connect, "SELECT p.patient_name,h.hospital_name,h.branch,d.doctor_name,o.organ_name,o.o_expense,d.doctor_fee,h.hospital_charge,(o.o_expense+d.doctor_fee+h.hospital_charge) AS total_cost
FROM doctor AS d INNER JOIN hospital AS h
ON d.d_h_ID = h.hospital_ID
INNER JOIN organ AS o
ON h.hospital_ID = o.o_h_ID
INNER JOIN patient_form AS p
ON o.organ_id = p.patient_organ_id

WHERE p.patient_id = $p_id" )
		or die("Can not execute query");

	echo "<table class='ui celled striped unstackable  collapsing table' style='margin: 0 auto;'> \n";
	echo "<thead><tr><th>patient_name</th> <th>hospital_name</th> <th>branch</th> <th>doctor_name</th> <th>organ_name</th> <th>o_expense</th> <th>doctor_fee</th> <th>hospital_charge</th> <th>total_cost</th> </tr> </thead>  <tbody> \n";

	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $patient_name </td>";
		echo "<td> $hospital_name </td>";
		echo "<td> $branch </td>";
		echo "<td> $doctor_name</td>";
		echo "<td> $organ_name</td>";
		echo "<td> $o_expense</td>";
		echo "<td> $doctor_fee</td>";
		echo "<td> $hospital_charge</td>";
		echo "<td> $total_cost</td>";

		echo "</tr> \n";
	}
	echo "</tbody>";

	echo "</table> \n";

	
?>
</form>

</body>
</html>
<html>
	<head>
		<title>Organ Site</title>

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
		 <meta charset = "utf-8">
        
        <link rel="stylesheet" type="text/css" href="css/organform_design.css">
	</head>
	

	<body>
		
		 <form action = "" method = "get">
	<div class="form">
	
	<h1 align="center">Organ Table</h1></div>
<?php
	require_once('db_connect.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	
	$results = mysqli_query( $connect, "SELECT * FROM organ" )
		or die("Can not execute query");

	echo "<table class='ui celled striped unstackable  collapsing table' style='margin: 0 auto;'> \n";
	echo "<thead><tr><th>organ_id</th> <th>organ_name</th> <th>organ_bloodgroup</th> <th>organ_quantity</th> <th>o_h_IDt</th> <th>o_donor_ID </th> <th>o_expense</th> <th>Delete</th> <th>Update</th> </tr> </thead> <tbody> \n";

	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $organ_id </td>";
		echo "<td> $organ_name </td>";
		echo "<td> $organ_bloodgroup </td>";
		echo "<td> $organ_quantity </td>";
		echo "<td> $o_h_ID</td>";
		echo "<td> $o_donor_ID </td>";
		echo "<td> $o_expense</td>";
		echo "<td> <a href = 'delete.php?organ_id=$organ_id'> Delete </a> </td>";
		echo "<td> <a href = 'update_input.php?organ_id=$organ_id'> Update </a> </td>";
		echo "</tr> \n";
	}
	echo "</tbody>";

	echo "</table> \n";

	
?>
</form>

</body>
</html>
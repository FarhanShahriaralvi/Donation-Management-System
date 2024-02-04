<?php

require("dbcon.php");

$query = "SELECT * FROM patient_form";
if ($result = $conn->query($query)) 
{

	while ($row = $result->fetch_assoc()) {
	
		printf("<p> %s </p>", $row["patient_id"]);
	}
	$result->free();
}
else
{
	printf("No record found!");
}


$conn->close();
?>
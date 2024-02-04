<?php

require("dbcon.php");

$query = "SELECT * FROM patient_form";
if ($result = $conn->query($query)) 
{

	while ($row = $result->fetch_assoc()) 
	{
		printf("<p>%s %s</p>", $row["patient_id"], $row['patient_name']);
	}
	$result->free();
}
else
{
	printf("No record found!");
}

$conn->close();
?>
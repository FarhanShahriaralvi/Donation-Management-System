<?php

require("dbcon.php");

$query = "SELECT * FROM hospital";
if ($result = $conn->query($query)) 
{
	
	while ($row = $result->fetch_assoc()) {
	
		printf("<p> %s </p>", $row["hospital_ID"]);
	}
	$result->free();
}
else
{
	printf("No record found!");
}


$conn->close();
?>
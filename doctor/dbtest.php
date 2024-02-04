<?php

require("dbcon.php");

$query = "SELECT * FROM doctor";
if ($result = $conn->query($query)) 
{
	
	while ($row = $result->fetch_assoc()) {
	
		printf("<p> %s </p>", $row["doctor_ID"]);
	}
	$result->free(); 
}
else
{
	printf("No record found!");
}


$conn->close();
?>
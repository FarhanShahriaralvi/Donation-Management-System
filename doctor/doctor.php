<?php

require("dbcon.php");

$query = "SELECT * FROM doctor";
if ($result = $conn->query($query)) 
{
	
	while ($row = $result->fetch_assoc()) 
	{
		printf("<p>%s %s</p>", $row["doctor_ID"], $row['doctor_name']);
	}
	$result->free();
}
else
{
	printf("No record found!");
}

$conn->close();
?>
<?php

require("dbcon.php");

$query = "SELECT * FROM hospital";
if ($result = $conn->query($query)) 
{

	while ($row = $result->fetch_assoc()) 
	{
		printf("<p>%s %s</p>", $row["hospital_ID"], $row['hospital_name']);
	}
	$result->free();
}
else
{
	printf("No record found!");
}

$conn->close();
?>
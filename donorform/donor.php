<?php

require("dbcon.php");

$query = "SELECT * FROM donor";
if ($result = $conn->query($query)) 
{
	
	while ($row = $result->fetch_assoc()) 
	{
		printf("<p>%s %s</p>", $row["donor_id"], $row['donor_name']);
	}
	$result->free();
}
else
{
	printf("No record found!");
}


$conn->close();
?>
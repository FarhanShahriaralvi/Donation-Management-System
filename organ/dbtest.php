<?php

require("dbcon.php");

$query = "SELECT * FROM organ";
if ($result = $conn->query($query)) 
{

	while ($row = $result->fetch_assoc()) {
	
		printf("<p> %s </p>", $row["organ_ID"]);
	}
	$result->free();
}
else
{
	printf("No record found!");
}



$conn->close();
?>
<?php

require("dbcon.php");

$query = "SELECT * FROM donar";
if ($result = $conn->query($query)) 
{
	
	while ($row = $result->fetch_assoc()) {
	
		printf("<p> %s </p>", $row["donar_id"]);
	}
	$result->free();
}
else
{
	printf("No record found!");
}



$conn->close();
?>
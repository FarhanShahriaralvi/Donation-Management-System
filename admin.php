<?php
	if(isset($_GET['submit1']))
		{
	header('Location:hospitalform/hospitalform.php');
}
else if(isset($_GET['submit2']))
{
	header('Location:doctor/doctorform.php');
}
else if(isset($_GET['submit3']))
{
	header('Location:patientform/patientform.php');
}else if(isset($_GET['submit4']))
{
	header('Location:organ/organform.php');
}else if(isset($_GET['submit5']))
{
	header('Location:edit.php');
}else if(isset($_GET['submit6']))
{
	header('Location:search.php');
}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>
				HOSPITAL SERVER
		
		</title>
		<link rel="stylesheet" type="text/css" href="css/design.css">
	</head>
	<body>
		<header>
			<div class="main">
				<div class="logo">
					<img src="1.png">
				</div><br>
				
						<div class="t1">
							<h1>
								WELCOME TO<br>
								HOSPITAL SERVER
								
							</h1>
						</div>
						
							<div class="button">
            				<form name="form1" action="" method="get">
            					<input type="submit" name="submit1" value="Hospital">
            					<input type="submit" name="submit2" value="Doctor">
            					<input type="submit" name="submit3" value="Patient">
            					<input type="submit" name="submit4" value="Organ">
            					<input type="submit" name="submit5" value="Edit">
						<input type="submit" name="submit6" value="Search">
            				</form>
            			</div>
        				
			</div>
		</header>	
	</body>
</html>	



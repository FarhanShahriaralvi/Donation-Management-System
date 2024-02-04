<?php
	if(isset($_GET['submit1']))
		{
	header('Location:hospitalform/read.php');
}
else if(isset($_GET['submit2']))
{
	header('Location:doctor/read.php');
}
else if(isset($_GET['submit3']))
{
	header('Location:patientform/read.php');
}else if(isset($_GET['submit4']))
{
	header('Location:organ/read.php');
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
								 EDIT
								
							</h1>
						</div>
						
							<div class="button">
            				<form name="form1" action="" method="get">
            					<input type="submit" name="submit1" value="Hospital">
            					<input type="submit" name="submit2" value="Doctor">
            					<input type="submit" name="submit3" value="Patient">
            					<input type="submit" name="submit4" value="Organ">
            					
            				</form>
            			</div>
        				
			</div>
		</header>	
	</body>
</html>	



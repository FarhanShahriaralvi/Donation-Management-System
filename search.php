<?php
	if(isset($_GET['submit1']))
{
	header('Location:patientform/result.php');
}else if(isset($_GET['submit2']))
{
	header('Location:organ/result.php');
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
								SEARCH WITH
								
							</h1>
						</div>
						
							<div class="button">
            				<form name="form1" action="" method="get">
    
            					<input type="submit" name="submit1" value="Patient">
            					<input type="submit" name="submit2" value="Organ">
            					
            				</form>
            			</div>
        				
			</div>
		</header>	
	</body>
</html>	

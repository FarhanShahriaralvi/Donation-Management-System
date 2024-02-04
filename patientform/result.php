<?php
	//$p_id = $_GET["patient_id"];
	//echo "$p_id";

	if(isset($_GET['submit1']))
{

	header('Location:p_insert.php');

}
else if(isset($_GET['submit2']))
{
	header('Location:doc_insert.php');
}else if(isset($_GET['submit3']))
{
	header('Location:join_insert.php');
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
								
								TO SEARCH
								
							</h1>
						</div>

				
				
							<div class="button">		
							
            				<form name="form1" action="" method="get">
    
            					<input type="submit" name="submit1" value="PATIENT">
            					
            					<input type="submit" name="submit2" value="DOCTOR">

            					<input type="submit" name="submit3" value="All Details">

            				</form>
            				</div>
            			
        				
			</div>
		</header>	
	</body>
</html>	

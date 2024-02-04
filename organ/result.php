<?php
	
	if(isset($_GET['submit1']))
{
	header('Location:h_insert.php');
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
				<br>
				
						<div class="t1">
							<h1>
								TO SEARCH
								
							</h1>
						</div>
						
							<div class="button">
            				<form name="form1" action="" method="get">
    
            					<input type="submit" name="submit1" value="HOSPITAL">
            					
            					
            				</form>
            			</div>
        				
			</div>
		</header>	
	</body>
</html>	

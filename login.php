<?php


if(isset($_GET['submit'])) {

 $uname = $_GET['user'];
 $pass = $_GET['pass'];
$error  = "Please Provide Valid Information....!!!!!!.";
 



  if($uname =='admin' && $pass=='admin1234'){
  
    header("location: admin.php");
  
  }
  else{
    echo $error;
    
  }
 }
    
?>

<html>
<head>
  
<title> Login </title>
 <link rel="stylesheet" type="text/css" href="css/login.css">

<body>
  
  <div class ="loginbox">
    
    <form action="" method="get">  
      <h1>Login Here</h1></br>
          <p> UserName</p>
          <input type="text" name ="user" value="" required>
          <p>Password:</p>
          <input type="Password" name="pass" value="" required></br>
            <button class="button" name="submit" value="submit">Login</button>
         </form>
     </div>
  </body>
  </head>
  </html>
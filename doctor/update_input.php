<?php
	$doc_id = $_GET["doctor_ID"];


?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset = "utf-8">
        <title>Update Doctor</title>
        <link rel="stylesheet" type="text/css" href="css/doctorform_design.css">
        
    </head>

    <body>
        <div class="main">
            <div class="form">
        
                <h1 align="center">Update Doctor Form</h1>
                <form action = "update_result.php" method = "get">
                <fieldset>
                <legend>Doctor Personal Info</legend>
                <label for = "doctor_ID">Doctor_ID</label>:<br>
                <input type="text" id = "doctor_ID" name = "doctor_ID" value="<?php echo $doc_id; ?>">
                <br>
            
                <label for = "doctor_name">Doctor_Name:   </label><br>
                <input type="text" id = "doctor_name" name = "doctor_name">
                <br>
                
                <label for = "doctor_age">Doctor_age</label>:<br>
                <input type="text" id = "doctor_age" name = "doctor_age">
                <br>
                <label for = "doctor_gender">Doctor_Gender</label>:
                <input type="radio" id = "doctor_gender" name = "doctor_gender" value ="Male"> Male
                <input type="radio" id = "doctor_gender" name = "doctor_gender" value ="Female"> Female
                <input type="radio" id = "doctor_gender" name = "doctor_gender" value ="Other"> Other
                <br>
                
                <label for = "doctor_contact">Doctor_contact</label>:<br>
                <input type="text" id = "doctor_contact" name = "doctor_contact">
                <br>

                <label for = "doctor_email">Doctor_email</label>:<br>
                <input type="text" id = "doctor_email" name = "doctor_email" placeholder = "example@mail.com">
                <br>
            
                <label for = "doctor_address">Doctor_address</label>:<br>
                <input type="text" id = "doctor_address" name = "doctor_address">
                <br>
                
                <label for = "d_h_ID">Doctor_hospital_id</label>:<br>
                <input type="text" id = "d_h_ID" name = "d_h_ID">
                <br>

                <label for = "doctor_fee">Doctor_Fee</label>:<br>
                <input type="text" id = "doctor_fee" name = "doctor_fee">
                <br>
                
            
            
                </fieldset><br>
                
                
                <input type="submit" value="Update">


                    
                <br>
                </form>
            </div>
        </div>
        
    
    </body>
</html>

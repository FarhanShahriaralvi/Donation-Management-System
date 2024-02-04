
<!DOCTYPE html>

<html>
    <head>
        <meta charset = "utf-8">
        <title>Hospital</title>
        <link rel="stylesheet" type="text/css" href="css/hospitalform_design.css">
        
    </head>

    <body>
        <div class="main">
            <div class="form">
        
                <h1 align="center">Hospital Form</h1>
                <form action = "create_result.php" method = "get">
                <fieldset>
                <legend>Hospital Info</legend>
            
                <label for = "hospital_ID">Hospital_ID:   </label><br>
                <input type="text" id = "hospital_ID" name = "hospital_ID">
                <br>
            
                
            
                <label for = "hospital_name">Hospital_name</label>:<br>
                <input type="text" id = "hospital_name" name = "hospital_name">
                <br>
            
                <label for = "branch">Branch</label>:<br>
                <input type="text" id = "branch" name = "branch"
                >
                <br>
                <label for = "hospital_contact">Hospital_Contact</label>:<br>
                <input type="text" id = "hospital_contact" name = "hospital_contact">
                <br>
                <label for = "hospital_email">Hospital_Email</label>:<br>
                <input type="text" id = "hospital_email" name = "hospital_email"placeholder = "example@mail.com">
                <br>
            
        
                
                <label for="hospital_address">Hospital Address :</label><br>
                <input type="text" id="hospital_address" name="hospital_address">
                <br>
                <label for="hospital_charge">Hospital Charge :</label><br>
                <input type="text" id="hospital_charge" name="hospital_charge">
                <br>
                </fieldset>
                
                    <input type="submit" value="Submit to register">


                    
                <br>
                </form>
            </div>
        </div>
        
    
    </body>
</html>
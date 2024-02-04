
<!DOCTYPE html>

<html>
    <head>
        <meta charset = "utf-8">
        <title>Update Patient</title>
        <link rel="stylesheet" type="text/css" href="css/patientform_design.css">
        
    </head>

    <body>
        <div class="main">
            <div class="form">
        
                <h1 align="center">Update Patient Form</h1>
                <form action = "update_result.php" method = "get">
                <fieldset>
                <legend>patient Personal Info</legend>
                <label for = "patient_id">patient_ID</label>:<br>
                <input type="text" id = "patient_id" name = "patient_id">
                <br>
            
                <label for = "patient_name">patient_Name:   </label><br>
                <input type="text" id = "patient_name" name = "patient_name">
                <br>
                
                <label for = "patient_age">patient_age</label>:<br>
                <input type="text" id = "patient_age" name = "patient_age">
                <br>
                <label for = "patient_gender">Patient_Gender</label>:
                <input type="radio" id = "patient_gender" name = "patient_gender" value ="Male"> Male
                <input type="radio" id = "patient_gender" name = "patient_gender" value ="Female"> Female
                <input type="radio" id = "patient_gender" name = "patient_gender" value ="Other"> Other
                <br>
                
                <label for = "patient_contact">patient_contact</label>:<br>
                <input type="text" id = "patient_contact" name = "patient_contact">
                <br>

                <label for = "patient_email">patient_email</label>:<br>
                <input type="text" id = "patient_email" name = "patient_email" placeholder = "example@mail.com">
                <br>
            
                <label for = "patient_address">Patient_address</label>:<br>
                <input type="text" id = "patient_address" name = "patient_address">
                <br>
                <label for = "p_d_ID">patient_doctor_id</label>:<br>
                <input type="text" id = "p_d_ID" name = "p_d_ID">
                <br>
                <label for = "p_h_ID">patient_hospital_id</label>:<br>
                <input type="text" id = "p_h_ID" name = "p_h_ID">
                <br>
                <label for = "patient_organ_id">patient_organ_id</label>:<br>
                <input type="text" id = "patient_organ_id" name = "patient_organ_id">
                <br>
            
            
                </fieldset><br>
                
                
                <input type="submit" value="Update">


                    
                <br>
                </form>
            </div>
        </div>
        
    
    </body>
</html>

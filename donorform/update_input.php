
<!DOCTYPE html>

<html>
    <head>
        <meta charset = "utf-8">
        <title>Update Donor</title>
        <link rel="stylesheet" type="text/css" href="css/donorform_design.css">
        
    </head>

    <body>
        <div class="main">
            <div class="form">
        
                <h1 align="center">Update Donor Form</h1>
                <form action = "update_result.php" method = "get">
                <fieldset>
                <legend>Donor Personal Info</legend>

                <label for = "donor_id">Donor_ID</label>:<br>
                <input type="text" id = "donor_id" name = "donor_id">
                <br>
            
                <label for = "donor_name">Donor_Name:   </label><br>
                <input type="text" id = "donor_name" name = "donor_name">
                <br>
                <label for = "donor_age">donor_age</label>:<br>
                <input type="text" id = "donor_age" name = "donor_age">
                <br>

                <label for = "donor_gender">Gender</label>:
                <input type="radio" id = "donor_gender" name = "donor_gender" value ="Male"> Male
                <input type="radio" id = "donor_gender" name = "donor_gender" value ="Female"> Female
                <input type="radio" id = "donor_gender" name = "donor_gender" value ="Other"> Other
                <br>

                <label for = "donor_contact">Donor_Contact</label>:<br>
                <input type="text" id = "donor_contact" name = "donor_contact">
                <br>

                <label for = "donor_email">Email</label>:<br>
                <input type="text" id = "donor_email" name = "donor_email"
                placeholder = "example@mail.com">
                <br>
                
            
            
                </fieldset><br>
                <fieldset>
                <legend>Donor Address</legend>
                <label for = "c">Donor_Address</label>:<br>
                <input type="text" id = "donor_address" name = "donor_address">
                <br>
                </fieldset>
                
                    <input type="submit" value="Update">


                    
                <br>
                </form>
            </div>
        </div>
        
    
    </body>
</html>
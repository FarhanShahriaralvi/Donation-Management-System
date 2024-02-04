<!DOCTYPE html>

<html>
    <head>
        <meta charset = "utf-8">
        <title>Organ</title>
        <link rel="stylesheet" type="text/css" href="css/organform_design.css">
        
    </head>

    <body>
        <div class="main">
            <div class="form">
        
                <h1 align="center">Organ Form</h1>
                <form action = "create_result.php" method = "get">
                <fieldset>
                <legend>Organ Info</legend>
                <label for = "organ_id">Organ_ID</label>:<br>
                <input type="text" id = "organ_id" name = "organ_id">
                <br>
            
                <label for = "organ_name">Organ_Name:   </label><br>
                <input type="text" id = "organ_name" name = "organ_name">
                <br>
                
                <label for = "organ_bloodgroup">Organ_bloodgroup</label>:<br>
                <input type="text" id = "organ_bloodgroup" name = "organ_bloodgroup">
                <br>
                
                <label for = "organ_quantity">Organ_quantity</label>:<br>
                <input type="text" id = "organ_quantity" name = "organ_quantity">
                <br>

                <label for = "o_h_ID">O_H_ID</label>:<br>
                <input type="text" id = "o_h_ID" name = "o_h_ID" >
                <br>
            
                <label for = "o_donor_ID">O_Donor_ID</label>:<br>
                <input type="text" id = "o_donor_ID" name = "o_donor_ID">
                <br>
                
                <label for = "o_expense">O_Expense</label>:<br>
                <input type="text" id = "o_expense" name = "o_expense">
                <br>
                
            
            
                </fieldset><br>
                
                
                <input type="submit" value="Submit to register">


                    
                <br>
                </form>
            </div>
        </div>
        
    
    </body>
</html>

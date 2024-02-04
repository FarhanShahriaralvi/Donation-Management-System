
<!DOCTYPE html>

<html>
    <head>
        <meta charset = "utf-8">
        <title>Expense</title>
        <link rel="stylesheet" type="text/css" href="css/expense_design.css">
        
    </head>

    <body>
        <div class="main">
            <div class="form">
        
                <h1 align="center">Expense Form</h1>
                <form action = "create_result.php" method = "get">
                <fieldset>
            
                <label for = "expense_id">expense_id:   </label><br>
                <input type="text" id = "expense_id" name = "expense_id">
                <br>
            
                
            
                <label for = "e_p_id">e_p_id</label>:<br>
                <input type="text" id = "e_p_id" name = "e_p_id">
                <br>
            
                <label for = "e_d_id">e_d_id</label>:<br>
                <input type="text" id = "e_d_id" name = "e_d_id"
                >
                <br>
                <label for = "e_h_id">e_h_id</label>:<br>
                <input type="text" id = "e_h_id" name = "e_h_id">
                <br>
                <label for = "e_o_id">e_o_id</label>:<br>
                <input type="text" id = "e_o_id" name = "e_o_id">
                <br>
            
            
                </fieldset><br>
                
                
                    <input type="submit" value="Submit to register">


                    
                <br>
                </form>
            </div>
        </div>
        
    
    </body>
</html>
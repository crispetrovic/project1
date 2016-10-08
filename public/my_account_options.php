<?php
    // configuration
    require("../includes/config.php");
    
    // if the deactivation form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
            // remove user's email, username, and password
            CS50::query("DELETE FROM users WHERE id = ?", $_SESSION["id"]);
            
             // redirect user
             render("deactivation_confirmation.php");
    }
    
    // if form not submitted
    else
    {
        
        // render my account
        render("my_account.php", ["title" => "My Account"]);
    }
    
?>
    
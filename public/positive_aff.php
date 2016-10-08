<!DOCTYPE html>
<title> Positive Affirmation </title>

<?php    

    // configuration
    require("../includes/config.php"); 
    
    // if the form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // validate user input
        if (empty($_POST["affirmation"]))
        {
            apologize("Enter a feel-good affirmation.");
        }
        else
        {
            // update user's coping plan history
            CS50::query("INSERT INTO personal_aff (user_id,affirmation) VALUES (?,?)",$_SESSION["id"],$_POST["affirmation"]);
                
            // redirect to user's resources page
            redirect("/resources.php");
        }
    }
            
            
    else
    {
        // render coping plan page
        render("positive_aff_page.php", ["title" => "Create A Positive Affirmation"]);
    }
?>
<!DOCTYPE html>
<title> Coping Plan </title>

<?php    

    // configuration
    require("../includes/config.php"); 
    
    // if the form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // validate user input
        if (empty($_POST["feeling"]))
        {
            apologize("Enter a feeling.");
        }
        else if (empty($_POST["plan"]))
        {
            apologize("Create a coping plan.");
        }
        
            else
            {
                // update user's coping plan history
                CS50::query("INSERT INTO coping_plan (user_id,feeling,plan) VALUES (?,?,?)",$_SESSION["id"],$_POST["feeling"],$_POST["plan"]);
                    
                // redirect to user's resources page
                redirect("/resources.php");
            }
    }
            
            
    else
    {
        // query feelings
        $rows =	CS50::query("SELECT feeling FROM feelings");
        
        // create array into which feelings will be stored
        $feelings = [];
        
        // for each feeling in database
        foreach ($rows as $row)	
        {   
            // store feeling
            $feeling = $row["feeling"];
            
            // insert feeling into the new array
            $feelings[] = $feeling;       
        }
        
        // render coping plan page
        render("coping_plan_page.php", ["title" => "Create A Coping Plan", "feelings" => $feelings]);
    }
?>
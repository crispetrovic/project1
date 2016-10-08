<!DOCTYPE html>
<title> Feeling Analysis </title>

<?php    

    // configuration
    require("../includes/config.php"); 
    
    // if the form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // validate user input
        if (empty($_POST["feeling"]))
        {
            apologize("Select a feeling.");
        }
        else if (empty($_POST["why1"]))
        {
            apologize("Enter a thoughtful reason.");
        }
        else if (empty($_POST["why2"]))
        {
            apologize("Enter a thoughtful reason.");
        }
        else if (empty($_POST["why3"]))
        {
            apologize("Enter a thoughtful reason.");
        }
        else if (empty($_POST["why4"]))
        {
            apologize("Enter a thoughtful reason.");
        }
        else if (empty($_POST["why5"]))
        {
            apologize("Enter a thoughtful reason.");
        }
            else
            {
                // update user's coping plan history
                CS50::query("INSERT INTO root_cause (user_id,feeling,why1,why2,why3,why4,why5) VALUES (?,?,?,?,?,?,?)",$_SESSION["id"],$_POST["feeling"],$_POST["why1"],$_POST["why2"],$_POST["why3"],$_POST["why4"],$_POST["why5"]);
                    
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
        render("root_cause.php", ["title" => "Feeling Analysis", "feelings" => $feelings]);
    }
?>
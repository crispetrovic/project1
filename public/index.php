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
        else if (empty($_POST["location"]))
        {
            apologize("Provide your general location. Where are you?");
        }
        else if (empty($_POST["event"]))
        {
            apologize("Describe what happened.");
        }
        else if (empty($_POST["tool"]))
        {
            apologize("Choose an action.");
        }
        else 
        {
            
            // add to user's feeling history
            CS50::query("INSERT INTO history (user_id,feeling,location,event,tool) VALUES (?,?,?,?,?)",$_SESSION["id"],$_POST["feeling"],$_POST["location"],$_POST["event"],$_POST["tool"]);
                
            // redirect to coping plan form, if selected
            if($_POST["tool"] == 'create a coping plan')
            {
                redirect("/coping_plan.php");
            }
            
            // redirect to positive affirmation form, if selected
            else if($_POST["tool"] == 'create a positive affirmation')
            {
                redirect("/positive_aff.php");
            }
            
            // redirect to analysis form, if selected
            else if($_POST["tool"] == 'analyze this feeling further')
            {
                redirect("/feeling_analysis.php");
            }
            
            // redirect resources, if selected
            else if($_POST["tool"] == 'just log this entry, please')
            {
                redirect("/resources.php");
            }
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
        
        // query locations
        $rows =	CS50::query("SELECT location FROM locations");
        
        // create array into which feelings will be stored
        $locations = [];
        
        // for each location in database
        foreach ($rows as $row)	
        {   
            // store location
            $location = $row["location"];
            
            // insert location into the new array
            $locations[] = $location;       
        }    
        
        // query tools
        $rows =	CS50::query("SELECT tool FROM tools");
        
        // create array into which tools will be stored
        $tools = [];
        
        // for each tool in database
        foreach ($rows as $row)	
        {   
            // store tool
            $tool = $row["tool"];
            
            // insert tool into the new array
            $tools[] = $tool;       
        } 
            
        // render home page questionnaire
        render("home.php", ["title" => "Home", "feelings" => $feelings, "locations" => $locations, "tools" => $tools]);
    }

?> 

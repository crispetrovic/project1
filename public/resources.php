<!DOCTYPE html>
<title> Resources </title>
<body>
<?php
    
    // configuration 
    require("../includes/config.php");   
    
    // if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // validate user input
        if (empty($_POST["resources"]))
        {
            apologize("Select a resource.");
        }
        
        else
        {
            // redirect based on selection
            if($_POST["resources"] == 'my coping plans')
            {
                redirect("/coping_plan_history.php");
            }
            if($_POST["resources"] == 'my positive affirmations')
            {
                redirect("/positive_aff_history.php");
            }
            if($_POST["resources"] == 'my feeling analyses')
            {
                redirect("/root_cause_history.php");
            }
        }
        
    }
        
    // if form not submitted
    else
    {
       // query resources
        $rows =	CS50::query("SELECT resource FROM resources");
        
        // create array into which resources will be stored
        $resources = [];
        
        // for each resource in database
        foreach ($rows as $row)	
        {   
            // store resource
            $resource = $row["resource"];
            
            // insert resource into the new array
            $resources[] = $resource;       
        }
            
        // render resources option
        render("my_resources.php", ["title" => "My Resources", "resources" => $resources]);
    }
    
?>


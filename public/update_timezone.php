<?php
    // configuration
    require("../includes/config.php");
    
    // if the deactivation form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
            // update user's timezone
            CS50::query("UPDATE users SET timezone='$timezone' WHERE id=$id");
            
             // redirect user
             render("timezone_change_conf.php");
    }
    
    // if form not submitted
    else
    {
        // query timezones
        $rows =	CS50::query("SELECT timezone FROM timezones");
        
        // create array into which timezones will be stored
        $timezones = [];
        
        // for each timezone in database
        foreach ($rows as $row)	
        {   
            // store timezones
            $timezone = $row["timezone"];
            
            // insert timezone into the new array
            $timezones[] = $timezone;       
        }
        
        // render my account
        render("update_timezone_page.php", ["title" => "My Timezone", "timezones" => $timezones]);
    }
    
?>
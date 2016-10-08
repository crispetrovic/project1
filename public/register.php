<?php

    // configuration
    require("../includes/config.php");

    // else if user reached page via POST (as by submitting a form via POST)
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // validate registration
        if (empty($_POST["email"]))
        {
            apologize("You must provide a valid email address.");
        }
        if (empty($_POST["username"]))
        {
            apologize("You must provide a username.");
        }
        if (empty($_POST["first_name"]))
        {
            apologize("You must provide your first name.");
        }
        if (empty($_POST["last_name"]))
        {
            apologize("You must provide your last name.");
        }
        if (empty($_POST["timezone"]))
        {
            apologize("You must provide your timezone.");
        }
        if (empty($_POST["password"]))
        {
            apologize("You must provide a password.");
        }
        // compare hash of user's confirmation input to hash of user's password input
        if ($_POST["confirmation"] != $_POST["password"])
        {
            apologize("Your passwords do not match. Try again.");
        }
        
        // query database for email address
        $rows = CS50::query("SELECT * FROM users WHERE email = ?", $_POST["email"]);
        
        // if email already exists
        if (count($rows) === 1)
        {
            apologize("That email address is already registered. Please try again.");
        }
            
        // query database for username
        $registered = CS50::query("SELECT * FROM users WHERE username = ?", $_POST["username"]);
        
        // if user already exists
        if (count($registered) === 1)
        {
            apologize("That username is already taken. Please try again.");
        }
        
            else
            {
                $hash = crypt($_POST["password"]);
                
                CS50::query("INSERT INTO users (email,username,first_name,last_name,timezone,hash) VALUES(?,?,?,?,?,?)",$_POST["email"],$_POST["username"],$_POST["first_name"],$_POST["last_name"],$timezone,$hash);
                
                
                    $rows = CS50::query("SELECT LAST_INSERT_ID() AS id");
                    $id = $rows[0]["id"];
                    $_SESSION["id"] = $id;
                    redirect("./");
                    
            }
          
    }
    
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
        
        // else render register form
        render("register_form.php", ["title" => "Register", "timezones" => $timezones]);
    }
?>
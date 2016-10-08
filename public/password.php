<!DOCTYPE html>
<?php
    // configuration
    require("../includes/config.php"); 
	
    // if form submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
    	    // apologize to user per circumstance
		    if (empty($_POST["password"]))
		    {
		        apologize("Enter a new password.");
		    }
		    if (empty($_POST["confirmation"]))
		    {
		        apologize("Confirm your new password.");
		    }
		    if($_POST["password"] != $_POST["confirmation"])
			{
				apologize("Password does not match confirmation.");
			}
	
		    // generate new encrypted password
			$hash = crypt($_POST["password"]);
			$id = $_SESSION["id"];
			
			// update user account with new password        
			CS50::query("UPDATE users SET hash='$hash' WHERE id=$id"); 
			render("password_reset.php");
				
	}
	
	else
	{
		render("reset_password.php", ["title" => "Change Password"]);
	}
?>
<?php

    // configuration
    require("../includes/config.php"); 

    // log out current user, if any
    logout();
    
    session_destroy();
    $_SESSION['userSession'] = false;
    
    
    // redirect user
    redirect("/register.php");
    
?>

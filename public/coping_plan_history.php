<!DOCTYPE html>
<title> Coping Plan History </title>

<?php

    // call configuration
    require("../includes/config.php");  
    
    // create array into which all coping plan history info will be stored
    $table = CS50::query("SELECT * FROM coping_plan WHERE user_id = ?", $_SESSION["id"]);
    
    // render coping plan history page
    render("coping_plan_history_request.php", ["title" => "My Coping Plans", "table" => $table]);
   
?>
<!DOCTYPE html>
<title> Positive Affirmation History </title>

<?php

    // call configuration
    require("../includes/config.php");  
    
    // create array into which all positive affirmation history info will be stored
    $table = CS50::query("SELECT * FROM personal_aff WHERE user_id = ?", $_SESSION["id"]);
    
    // render coping plan history page
    render("positive_aff_history_request.php", ["title" => "My Positive Affirmations", "table" => $table]);
   
?>
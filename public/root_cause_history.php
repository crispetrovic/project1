<!DOCTYPE html>
<title> Feeling Analyses History </title>

<?php

    // call configuration
    require("../includes/config.php");  
    
    // create array into which all root cause (aka feeeling analyses) history info will be stored
    $table = CS50::query("SELECT * FROM root_cause WHERE user_id = ?", $_SESSION["id"]);
    
    // render analyses history page
    render("root_cause_history_request.php", ["title" => "My Feeling Analyses", "table" => $table]);
   
?>
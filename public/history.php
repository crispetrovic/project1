<!DOCTYPE html>
<title> History </title>

<?php

    // call configuration
    require("../includes/config.php");  
    
    $serverTimeZone = 'UTC';
    // assume the user is in the server timezone by default
    $userTimeZone = $serverTimeZone;
    
    // create array into which all history info will be stored
    $table = CS50::query("SELECT * FROM history WHERE user_id = ?", $_SESSION["id"]);
    $users = CS50::query("SELECT id, timezone FROM users WHERE id = ?", $_SESSION['id']);
    if (count($users)) {
        // use the user's actual timezone instead of the server timezone
        $userTimeZone = $users[0]['timezone'];
    }

    // loop over each row and convert the datetime field FROM the server's
    // timezone TO the user's time zone
    foreach ($table as &$row) {
        $dateTime = new DateTime($row['datetime'], new DateTimeZone($serverTimeZone));
        $dateTime->setTimezone(new DateTimeZone($userTimeZone));
        $row['formatted_date_time'] = $dateTime->format('D, M d, Y, h:i a');
    }
    
    // render history form
    render("history_request.php", ["title" => "My Feelings", "table" => $table]);
    
   
?>



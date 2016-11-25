<?php
  $q=$_GET["q"];
  $dbuser="";
  $dbname="";
  $dbpass="";
  $dbserver="";

  //Start session
    session_start();
    //Read user's session (if it is set)
    if (isset($_SESSION['id']))
      $id = $_SESSION['id'];

  $sql_query = mysql_query("SELECT feeling FROM history WHERE user_id = '$id'");


  $con = mysql_connect($dbserver,$dbuser,$dbpass);
  if (!$con){ die('Could not connect: ' . mysql_error()); }
  mysql_select_db($dbname, $con);
  $result = mysql_query($sql_query);
  $total_rows = mysql_num_rows($result);
  while($row = mysql_fetch_array($result)){
    $data = mysql_fetch_assoc($result))
    $json = json_encode($data);

    echo $json;
     }
 


  mysql_close($con);
?>

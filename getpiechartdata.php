<?php
  $q=$_GET["q"];
  $dbuser="crissapetrovic";
  $dbname="final_project";
  $dbpass="v1kCjsvLYytrBTGV";
  $dbserver="127.0.0.1";
  
  //Start session
    session_start();
    //Read user's session (if it is set)
    if (isset($_SESSION['id']))
      $id = $_SESSION['id'];

  $sql_query = "SELECT feeling FROM history WHERE user_id = '$id'";

  $con = mysql_connect($dbserver,$dbuser,$dbpass);
  if (!$con){ die('Could not connect: ' . mysql_error()); }
  mysql_select_db($dbname, $con);
  $result = mysql_query($sql_query);
  /* testing
      *
      {"id":"username","label":"Feeling","type":"string"}
      *
      */
  echo "{ \"cols\": [ {\"id\":\"feeling\",\"label\":\"Feeling\",\"type\":\"string\"\} ]";
  $total_rows = mysql_num_rows($result);
  $row_num = 0;
  while($row = mysql_fetch_array($result)){
    $row_num++;
    if ($row_num == $total_rows){
      echo "{\"c\":[{\"v\":\"" . $row['feeling'] . "\"}";
    } else {
      echo "{\"c\":[{\"v\":\"" . $row['feeling'] . "\"}";
    }
  }
  echo " ] }";
  mysql_close($con);
?>

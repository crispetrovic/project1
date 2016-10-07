<?php
  $q=$_GET["q"];
  $dbuser="crissapetrovic";
  $dbname="final_project";
  $dbpass="v1kCjsvLYytrBTGV";
  $dbserver="127.0.0.1";

  $sql_query = "SELECT feeling FROM history WHERE user_id = '$id'";

  $con = mysql_connect($dbserver,$dbuser,$dbpass);
  if (!$con){ die('Could not connect: ' . mysql_error()); }
  mysql_select_db($dbname, $con);
  $result = mysql_query($sql_query);

  echo "{ \"cols\": [ {\"id\":\"\",\"label\":\"Feeling\", \"type\":\"string\"\} ], \"rows\": [ ";

  $total_rows = mysql_num_rows($result);
  while($row = mysql_fetch_array($result)){
    echo "{\"c\":[{\"v\":\"" . $row['feeling'] . "\"}";
  }

  echo " ] }";
  mysql_close($con);
?>
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
  
   

  
    
  /*
  * original example given for use
  *
  $data = [
    'foo' => 1,
    'bar' => true,
    'baz' => [
        'a',
        1.3,
        null
    ]
  ];
  *
  */


  
  $total_rows = mysql_num_rows($result);
  while($row = mysql_fetch_array($result)){
    $data = mysql_fetch_assoc($result))

    $json = json_encode($data);

    echo $json;
  }

  
  mysql_close($con);
?>
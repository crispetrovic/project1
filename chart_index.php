<?php
session_start();
   
require("../views/header.php");

?>

    <html>
<head>
<html>
<head>
  <!--Load the AJAX API-->
  <script type="text/javascript" src="http://www.google.com/jsapi"></script>
  <script type="text/javascript" src="/js/jquery-1.11.3.min.js"></script>
  <script type="text/javascript">

  // Load the Visualization API and the piechart,table package.
  google.load('current', {'packages':['corechart']});

  function drawItems(num) {
    var jsonPieChartData = $.ajax({
      url: "getpiechartdata.php",
      data: "q="+num,
      dataType:"json",
      async: false
    }).responseText;

    var jsonTableData = $.ajax({
      url: "gettabledata.php",
      data: "q="+num,
      dataType:"json",
      async: false
    }).responseText;

    // Create our data table out of JSON data loaded from server.
    var piechartdata = new google.visualization.DataTable(jsonPieChartData);
    var tabledata = new google.visualization.DataTable(jsonTableData);

    // Instantiate and draw our pie chart, passing in some options.
    var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
    chart.draw(piechartdata, {
      width: 700,
      height: 500,
      chartArea: { left:"5%",top:"5%",width:"90%",height:"90%" }
    });

    // Instantiate and draw our table, passing in some options.
    var table = new google.visualization.Table(document.getElementById('table_div'));
    table.draw(tabledata, {showRowNumber: true, alternatingRowStyle: true});
  }

  </script>
</head>

<body>
  <form>
  <select name="users" onchange="drawItems(this.value)">
  <option value="">Select your username:</option>
  <?php
    //Connect to database
    $con = mysql_connect('mysql.trackmyfeelings.com','cypetrovic','80nVQ!aBDfE9#72i');
    mysql_select_db('emotionally_empowered');
      
    //Start session
    session_start();
    //Read user's session (if it is set)
    if (isset($_SESSION['id']))
      $id = $_SESSION['id'];
    
    // Create a Query
    $sql_query = "SELECT id, username FROM users WHERE id = '$id'";
    // Execute query
    $result = mysql_query($sql_query);
    
    while ($row = mysql_fetch_array($result)){
    echo '<option value='. $row['id'] . '>'. $row['username'] .'</option>';
    }  
        
    mysql_close($con);
  ?>
  </select>
  </form>
  <div id="chart_div"></div>
  <div id="table_div"></div>
</body>
</html>
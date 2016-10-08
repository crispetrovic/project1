<?php
require('../fpdf/mysql_table.php');


class PDF extends PDF_MySQL_Table
{
function Header()
{
    //Title
    $this->SetFont('Arial','',18);
    $this->Cell(0,6,'History Data',0,1,'C');
    $this->Ln(10);
    //Ensure table header is output
    parent::Header();
}
}

//Connect to database
mysql_connect('127.0.0.1','crissapetrovic','v1kCjsvLYytrBTGV');
mysql_select_db('final_project');

//Start session
session_start();
//Read user's session (if it is set)
if (isset($_SESSION['id']))
  $user_id = $_SESSION['id'];
  

$pdf=new PDF();
$pdf->AddPage();
//First table: specify 4 columns
$pdf->AddCol('datetime',52,'Date/Time');
$pdf->AddCol('feeling',25,'Feeling');
$pdf->AddCol('location',45,'Location');
$pdf->AddCol('event',75,'Event');
$prop=array('HeaderColor'=>array(188,252,255),
            'color1'=>array(234,217,254),
            'color2'=>array(217,238,254),
            'padding'=>2);
            $Auth_OpenID_OPENID_PROTOCOL_FIELDS;
            
    $serverTimeZone = 'UTC';
    // assume the user is in the server timezone by default
    $userTimeZone = $serverTimeZone;
    
    // create array into which all history info will be stored
    $table = "SELECT * FROM history WHERE user_id = $user_id";
    $userTZ = "SELECT timezone FROM users WHERE id = $user_id";
    

    // loop over each row and convert the datetime field FROM the server's
    // timezone TO the user's time zone
    foreach ($table as &$data) {
        $dateTime = new DateTime($row['datetime'], new DateTimeZone($serverTimeZone));
        $dateTime->setTimezone(new DateTimeZone($userTZ));
        $row['formatted_date_time'] = $dateTime->format('D, M d, Y, h:i a');
    }


$pdf->Table("SELECT DATE_FORMAT(datetime, '%a, %b %d, %Y (%l:%i %p)') datetime, feeling, location, event FROM history WHERE user_id = '$user_id'", $prop);


$pdf->Output();


?>
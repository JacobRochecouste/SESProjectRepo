<?php
// to fix the output data error
ob_start();
// DO NOT TOUCH LINE 5 
require('vendor/webeweb/fpdf-library/fpdf.php');

// Database Connection
$dbhost='db4free.net';
$dbuser='siteuser';
$dbpass='securepassword';
$dbname='telehealth';

$dbc = new mysqli($dbhost, $dbuser, $dbpass, $dbname)
or die('Could not connect %s\n'. $dbc->connect_error);

//Data
$formid = $_GET['FormID'];

//Query the Database
//$query = "SELECT * FROM MedSubscriptions WHERE FormID = '$formid'";
$query = mysqli_query($dbc, "SELECT * FROM MedSubscriptions WHERE FormID = '$formid'");
//$query = mysqli_query($dbc, "SELECT * FROM MedSubscriptions WHERE FormID = '".$_GET['FormID']."'");
$report = mysqli_fetch_array($query);

//Page Setup
$pdf = new FPDF('P', 'mm', 'A4');
$pdf->AddPage();

$pdf->Image('TeleHealth_Logo.png',180,15,15,15);

// Form ID
$pdf->SetFont('Arial','B',30);
$pdf->Cell(46,23,'Report  #',0,0);
$pdf->Cell(50,23, $report['FormID'],0,1);

$pdf->SetFont('Arial','B',18);
$pdf->Cell(60,40, $report['CreationDate'],0,0);
$pdf->Cell(120,120, $report['PatFirstName']);

// Output the PDF
$pdf->Output();

// to fix the output data error
ob_end_flush();
?>
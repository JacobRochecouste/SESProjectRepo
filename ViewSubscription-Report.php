<?php
// to fix the output data error
ob_start();
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

//$query = "SELECT * FROM MedSubscriptions WHERE FormID = '$formid'";
$query = mysqli_query($dbc, "SELECT * FROM MedSubscriptions WHERE FormID = '$formid'");
//$query = mysqli_query($dbc, "SELECT * FROM MedSubscriptions WHERE FormID = '".$_GET['FormID']."'");
$report = mysqli_fetch_array($query);

$pdf = new FPDF('P', 'mm', 'A4');
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'Hello World!');
$pdf->Cell(40,30, $report['FormID']);

// Output the PDF
$pdf->Output();

// to fix the output data error
ob_end_flush();
?>
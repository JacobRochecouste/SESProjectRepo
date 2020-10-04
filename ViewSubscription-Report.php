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

$pdf->SetFont('Arial','B',14);
$pdf->Cell(0,0, $report['CreationDate'],0,1);

$pdf->Ln(8);

$pdf->SetFont('Arial','B',18);
$pdf->Cell(53,10, 'Consultion Type: ',0,0);
$pdf->SetFont('Arial','',18);
$pdf->Cell(30,10, $report['ConsultType'],0,1);

$pdf->SetFont('Arial','',18);
$pdf->Cell(34,10, 'First Name: ',0,0);
$pdf->SetFont('Arial','',17);
$pdf->Cell(10,10, $report['PatFirstName'],0,1);
$pdf->SetFont('Arial','',18);
$pdf->Cell(34,10, 'Last Name: ',0,0);
$pdf->SetFont('Arial','',17);
$pdf->Cell(10,10, $report['PatLastName'],0,1);

$pdf->Ln(12);
$pdf->SetFont('Arial','B',24);
$pdf->Cell(10,10, 'Consultation Contents:',0,1);

$pdf->SetFont('Arial','B',18);
$pdf->Cell(10,10, 'Summary:',0,1);
$pdf->SetFont('Arial','',14);
$pdf->MultiCell(0,6, $report['ConsultationSummary'],'J');
$pdf->Ln(4);

$pdf->SetFont('Arial','B',18);
$pdf->Cell(10,10, 'Remarks:',0,1);
$pdf->SetFont('Arial','',14);
$pdf->MultiCell(0,6, $report['DocNotes'],'J');
$pdf->Ln(4);

$pdf->SetFont('Arial','B',18);
$pdf->Cell(10,10, 'Treatment:',0,1);
$pdf->SetFont('Arial','',14);
$pdf->MultiCell(0,6, $report['TreatmentMethod'],'J');
$pdf->Ln(6);

$pdf->SetFont('Arial','I',14);
$pdf->Cell(44,10, 'Report made by Dr. ',0,0);
$pdf->Cell(0,10, $report['DocLastName'],0,1);
$pdf->SetFont('Arial','B',14);
$pdf->Cell(16,10, 'Email: ',0,0);
$pdf->SetFont('Arial','',14);
$pdf->Cell(0,10, $report['DocEmail'],0,1);
$pdf->SetFont('Arial','B',14);
$pdf->Cell(37,10, 'Phone Number: ',0,0);
$pdf->SetFont('Arial','',14);
$pdf->Cell(0,10, $report['DocPhoneNo'],0,1);

// Output the PDF
$pdf->Output();

// to fix the output data error
ob_end_flush();
?>
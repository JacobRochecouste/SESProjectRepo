<?php
session_start(); 

$dbhost='db4free.net';
$dbuser='siteuser';
$dbpass='securepassword';
$dbname='telehealth';

$dbc = new mysqli($dbhost, $dbuser, $dbpass, $dbname)
or die('Could not connect %s\n'. $dbc->connect_error);

require('fpdf.php');

$pdf = new FPDF('P', 'mm', 'A4');

$pdf->AddPage();

// Font of the Page
$pdf->SetFont('Arial', 'B', 14);

$pdf->Cell(40,10,'Hello World!');
$pdf->Output();



?>
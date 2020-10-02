<?php

$dbhost='db4free.net';
$dbuser='siteuser';
$dbpass='securepassword';
$dbname='telehealth';

$dbc = new mysqli($dbhost, $dbuser, $dbpass, $dbname)
or die('Could not connect %s\n'. $dbc->connect_error);

$query = "SELECT * FROM MedSubscriptions WHERE FormID ='".$_GET['FormID']."'";
$report = mysqli_fetch_array($query);

// This to load mpdf
require_once __DIR__ . '/vendor/autoload.php';

// Take the variables from the form
$patfirstname = $_GET['PatFirstName'];
$patlastname = $_GET['PatLastName'];
$patemail = $_GET['PatEmail'];
$docfirstname = $_GET['DocFirstName'];
$doclastname = $_GET['DocLastName'];
$docemail = $_GET['DocEmail'];
$docphone = $_GET['DocPhoneNo'];
$docid = $_GET['DocID'];
$consulttype = $_GET['ConsultType'];
$consultsummary = $_GET['ConsultationSummary'];
$docnotes = $_GET['DocNotes'];
$treatmentmethod = $_GET['TreatmentMethod'];
$reportdate = $_GET['CreationDate'];

// MPDF Instance
$mpdf = new \Mpdf\Mpdf();

$data = '';

$data .= '<h1> Consultation Report </h1>';
$data .= '<strong> Patient: </strong>'. $patfirstname + $patlastname .'<br>';

?>
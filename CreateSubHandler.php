<?php
session_start();
$dbhost='db4free.net';
$dbuser='siteuser';
$dbpass='securepassword';
$dbname='telehealth';

$dbc = new mysqli($dbhost, $dbuser, $dbpass, $dbname)
or die('Could not connect %s\n'. $dbc->connect_error);

$patFname = $_GET['patFirstName'];
$patLname = $_GET['patLastName'];
$patEmail = $_GET['patEmail'];
$docFname = $_SESSION["FName"];
$docLname = $_SESSION["LName"];
$docEmail = $_SESSION["email"];
$docPhone = $_SESSION["PhoneNo"];
$docID = $_SESSION["DocID"];
$consType = $_GET['radioOption'];
$bookID = $_GET['bookingID'];
$cdSum = $_GET['cdSummary'];
$docNotes = $_GET['doctorsNotes'];
$treatMethod = $_GET['treatmentMethod'];

$query = "INSERT INTO MedSubscriptions (PatFirstName, PatLastName, PatEmail, DocFirstName, DocLastName, DocEmail, DocPhoneNo, DocID, ConsultType, BookingID, ConsultationSummary, DocNotes, TreatmentMethod, CreationDate) VALUES ('$patFname', '$patLname', '$patEmail', '$docFname', '$docLname', '$docEmail', '$docPhone', '$docID', '$consType', '$bookID','$cdSum', '$docNotes', '$treatMethod', CURRENT_DATE)";
if($dbc->query($query) === TRUE)
{
    header("Location: DoctorCreateSubscription-Success.php");    
}
else
{
    // $errMsg = "Form Creation Failed: " . addslashes($dbc->error);
    header("Location: DoctorCreateSubscription-Fail.php");
    // echo "<script type='text/javascript'>alert('$errMsg');</script>";
}


?>
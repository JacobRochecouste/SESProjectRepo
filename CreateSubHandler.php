<?php

$dbhost='db4free.net';
$dbuser='siteuser';
$dbpass='securepassword';
$dbname='telehealth';

$dbc = new mysqli($dbhost, $dbuser, $dbpass, $dbname)
or die('Could not connect %s\n'. $dbc->connect_error);

$patFname = $_GET['patFirstName'];
$patLname = $_GET['patLastName'];
$patEmail = $_GET['patEmail'];
$docFname = $_GET['docFirstName'];
$docLname = $_GET['docLastName'];
$docEmail = $_GET['docEmail'];
$docPhone = $_GET['docPhoneNum'];
$docID = $_GET['docID'];
$consType = $_GET['radioOption'];
$sesID = $_GET['sessionID'];
$cdSum = $_GET['cdSummary'];
$docNotes = $_GET['doctorsNotes'];
$treatMethod = $_GET['treatmentMethod'];

$query = "INSERT INTO MedSubscriptions (SessionID, PatFirstName, PatLastName, PatEmail, DocFirstName, DocLastName, DocEmail, DocPhoneNo, DocID, ConsultType, ConsultationSummary, DocNotes, TreatmentMethod) VALUES ('$sesID', '$patFname', '$patLname', '$patEmail', '$docFname', '$docLname', '$docEmail', '$docPhone', '$docID', '$consType', '$cdSum', '$docNotes', '$treatMethod')";
if($dbc->query($query) === TRUE)
{
    header("Location: DoctorCreateSubscription-Success.php");
    echo "<script>alert('Form Creation Successful');</script>";
}
else
{
    header("Location: DoctorCreateSubscription-Fail.php");
    echo "<script>alert('Form Creation Failed" . $dbc->error . "');</script>";
}


?>
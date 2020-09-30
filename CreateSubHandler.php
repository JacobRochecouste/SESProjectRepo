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

$query = "INSERT INTO MedSubscriptions (FormID, PatFirstName, PatLastName, PatEmail, DocFirstName, DocLastName, DocEmail, DocPhoneNo, DocID, ConsultType, ConsultationSummary, DocNotes, TreatmentMethod, CreationDate) VALUES ('$sesID', '$patFname', '$patLname', '$patEmail', '$docFname', '$docLname', '$docEmail', '$docPhone', '$docID', '$consType', '$cdSum', '$docNotes', '$treatMethod', CURRENT_DATE)";
if($dbc->query($query) === TRUE)
{
    echo "<script>alert('Form Creation Successful');</script>";
    include("DoctorCreateSubscription-Success.php");    
}
else
{
    $errMsg = "Form Creation Failed: " . addslashes($dbc->error);
    include("DoctorCreateSubscription-Fail.php");
    echo "<script type='text/javascript'>alert('$errMsg');</script>";
}


?>
<?php

$dbhost='db4free.net';
$dbuser='siteuser';
$dbpass='securepassword';
$dbname='telehealth';

$dbc = new mysqli($dbhost, $dbuser, $dbpass, $dbname)
or die('Could not connect %s\n'. $dbc->connect_error);

$enquiryType = $_GET['radioOpt'];
$userFname = $_GET['userFirstName'];
$userLname = $_GET['userLastName'];
$userEmail = $_GET['userEmail'];
$userPhone = $_GET['userPhone'];
$msgSummary = $_GET['msgSummary'];

$query = "INSERT INTO Enquiry (EnquiryType, UserFirstName, UserLastName, UserEmail, UserPhoneNo, EnquiryMessage, EnquiryDate) VALUES ('$enquiryType', '$userFname', '$userLname', '$userEmail', '$userPhone', '$msgSummary', CURRENT_DATE)";
if($dbc->query($query) === TRUE)
{
    header("Location: EnquiryPage-Success.php");
}
else
{
    $_SESSION["Error"] = "Enquiry Creation Failed: Please try again.";
    header("Location: EnquiryPage.php");
}
?>
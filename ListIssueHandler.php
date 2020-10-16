<?php
session_start();
$dbhost='db4free.net';
$dbuser='siteuser';
$dbpass='securepassword';
$dbname='telehealth';

$dbc = new mysqli($dbhost, $dbuser, $dbpass, $dbname)
or die('Could not connect %s\n'. $dbc->connect_error);

$IDName = $_GET['drugSummary'];
$IssueNote = $_GET['issueSummary'];
$docid = $_SESSION['DocID'];
$firstname = $_SESSION['FName'];
$lastname = $_SESSION['LName'];
$email = $_SESSION['email'];
$phonenumber = $_SESSION['PhoneNo'];

$query = "INSERT INTO IssueList (IDName, IssueNote, DocFirstName, DocLastName, DocEmail, DocPhoneNo, DocID, CreationDate) VALUES ('$IDName', '$IssueNote', '$firstname', '$lastname', '$email', '$phonenumber', '$docid', CURRENT_DATE)";
if($dbc->query($query) === TRUE)
{
    $_SESSION['Success'] = "Successfully Submitted Report";
    header("Location: DoctorViewDrugsList.php");
}
else
{
    $_SESSION['Failed'] = "Failed to Submit Report";
    header("Location: DoctorViewDrugsList.php");
}
$dbc->close()
?>
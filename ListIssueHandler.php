<?php

$dbhost='db4free.net';
$dbuser='siteuser';
$dbpass='securepassword';
$dbname='telehealth';

$dbc = new mysqli($dbhost, $dbuser, $dbpass, $dbname)
or die('Could not connect %s\n'. $dbc->connect_error);

$IDName = $_GET['drugSummary'];
$IssueNote = $_GET['issueSummary'];

$query = "INSERT INTO IssueList (IDName, IssueNote) VALUES ('$IDName', '$IssueNote')";
if($dbc->query($query) === TRUE)
{
    echo "<script>alert('Issue Succesfully Notified');</script>";
    include("DoctorViewDrugsList.php");
}
else
{
    echo "Incorrectly Filled Form Request";
}
?>
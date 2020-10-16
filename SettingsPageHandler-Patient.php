<?php
session_start();
$dbhost='db4free.net';
$dbuser='siteuser';
$dbpass='securepassword';
$dbname='telehealth';

$dbc = new mysqli($dbhost, $dbuser, $dbpass, $dbname)
or die('Could not connect %s\n'. $dbc->connect_error);

$patEmail=$_SESSION['email'];
$firstname = $_GET['patFirstName'];
$lastname= $_GET['patLastName'];
$email= $_GET['patEmail'];
$phoneno= $_GET['patPhone'];
$address= $_GET['patAddr'];

$query = "UPDATE Users SET FirstName='$firstname', LastName='$lastname', Email='$email', PhoneNo='$phoneno', Address='$address' WHERE Email='$patEmail'";
if($dbc->query($query) === TRUE)
{
    $_SESSION['Success'] = "Successfully updated user details";
    $_SESSION["email"]=$patEmail;
    $_SESSION["FName"]=$firstname;
    $_SESSION["LName"]=$lastname;
    $_SESSION["PhoneNo"]=$phoneno;
    header("Location: UserSettingPage-Patient.php");

} 
else 
{
    $_SESSION['Failed'] = "Users details failed to update";
    include("UserSettingPage-Patient.php");
}
$dbc->close()
?>
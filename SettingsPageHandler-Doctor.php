<?php
session_start();
$dbhost='db4free.net';
$dbuser='siteuser';
$dbpass='securepassword';
$dbname='telehealth';

$dbc = new mysqli($dbhost, $dbuser, $dbpass, $dbname)
or die('Could not connect %s\n'. $dbc->connect_error);

$docEmail=$_SESSION['email'];
$firstname = $_GET['docFirstName'];
$lastname= $_GET['docLastName'];
$email= $_GET['docEmail'];
$phoneno= $_GET['docPhone'];
$address= $_GET['docAddr'];
$pass= MD5($_GET['docPass']);
$type = 'doctor';
$doctorid = $_GET['docID'];

$query = "UPDATE Users SET FirstName='$firstname', LastName='$lastname', Email='$docEmail', PhoneNo='$phoneno', Address='$address', DoctorID='$doctorid' WHERE Email='$docEmail'";
if($dbc->query($query) === TRUE)
{
    $_SESSION['Success'] = "Successfully updated User Details";
    $_SESSION["email"]=$docEmail;
    $_SESSION["FName"]=$firstname;
    $_SESSION["LName"]=$lastname;
    $_SESSION["UserType"]=$type;
    $_SESSION["DocID"]=$doctorid;
    $_SESSION["PhoneNo"]=$phoneno;
    header("Location: UserSettingPage-Doctor.php");

} 
else 
{
    $_SESSION['Failed'] = "Users Details failed to Update";
    include("UserSettingPage-Doctor.php");
}
$dbc->close()
?>
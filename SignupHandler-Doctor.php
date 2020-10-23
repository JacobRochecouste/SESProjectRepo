<?php
session_start();
$dbhost='db4free.net';
$dbuser='siteuser';
$dbpass='securepassword';
$dbname='telehealth';

$dbc = new mysqli($dbhost, $dbuser, $dbpass, $dbname)
or die('Could not connect %s\n'. $dbc->connect_error);

$firstname = $_GET['FirstName'];
$lastname= $_GET['LastName'];
$email= $_GET['Email'];
$phoneno= $_GET['PhoneNo'];
$address= $_GET['Address'];
$pass= MD5($_GET['Password']);
$type = 'doctor';
$doctorid = $_GET['DoctorID'];

$query = "INSERT INTO Users (FirstName, LastName, Email, PhoneNo, Address, Pass, UserType, DoctorID) VALUES ('$firstname', '$lastname', '$email', '$phoneno', '$address', '$pass', '$type', '$doctorid')";
if($dbc->query($query) === TRUE)
{
    //echo "<script>alert('Registration Successful');</script>";
    header("Location: Signup-Success.php");

} 
else 
{
    $_SESSION["Error"] = "Sign Up Failure: Database is not responding";
    header("Location: SignupDoctorPage.php"); 
}

$dbc->close()
?>
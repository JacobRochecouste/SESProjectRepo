<?php

$dbhost='localhost';
$dbuser='site';
$dbpass='securepassword';
$dbname='TeleHealth';

$dbc = new mysqli($dbhost, $dbuser, $dbpass, $dbname)
or die('Could not connect %s\n'. $dbc->connect_error);

$firstname = $_GET['FirstName'];
$lastname= $_GET['LastName'];
$email= $_GET['Email'];
$phoneno= $_GET['PhoneNo'];
$address= $_GET['Address'];
$pass= MD5($_GET['Password']);
$type = 'doctor';
$doctorid = $_GET['DoctorID']

$query = "INSERT INTO Users (UserID, FirstName, LastName, Email, PhoneNo, Address, Pass, UserType, DoctorID) VALUES (NULL, '$firstname', '$lastname', '$email', '$phoneno', '$address', '$pass', '$type', '$doctorid')";
if($dbc->query($query) === TRUE)
{
    echo "Sign Up Successful";
} 
else 
{
    echo "Sign up Failed " . $dbc->error;    
}

$dbc->close()
?>
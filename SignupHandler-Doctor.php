<?php

$dbhost='localhost';
$dbuser='site';
$dbpass='securepassword';
$dbname='TeleHealth';

$dbc = new mqsqli($dbhost, $dbuser, $dbpass, $dbname)
or die('Could not connect %s\n'. $dbc->connect_error);

$firstname = $_POST['FirstName'];
$lastname= $_POST['LastName'];
$email= $_POST['Email'];
$phoneno= $_POST['PhoneNo'];
$address= $_POST['Address'];
$pass= $_POST['Pass'];
$type = 'doctor';
$doctorid = $_POST['DoctorID']

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
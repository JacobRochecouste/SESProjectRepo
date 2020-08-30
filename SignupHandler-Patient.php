<?php

$dbhost='localhost';
$dbuser='site';
$dbpass='securepassword';
$dbname='TeleHealth';

$dbc = new mysqli($dbhost, $dbuser, $dbpass, $dbname)
or die('Could not connect %s\n'. $dbc->connect_error);

$firstname = $_POST['FirstName'];
$lastname= $_POST['LastName'];
$email= $_POST['Email'];
$phoneno= $_POST['PhoneNo'];
$address= $_POST['Address'];
$pass= $_POST['Password'];
$type = 'patient';

$query = "INSERT INTO Users (UserID, FirstName, LastName, Email, PhoneNo, Address, Password, UserType, DoctorID) VALUES (NULL, '$firstname', '$lastname', '$email', '$phoneno', '$address', '$password', '$type', NULL)";
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


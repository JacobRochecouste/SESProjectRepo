<?php

$dbhost='localhost';
$dbuser='site';
$dbpass='securepassword';
$dbname='TeleHealth';

$dbc = new mqsqli($dbhost, $dbuser, $dbpass, $dbname)
or die('Could not connect %s\n'. $dbc->connect_error);

$username = $_POST['Email'];
$password = $_POST['Pass'];

$query = "SELECT * FROM 'Users' WHERE 'Email'='$username' AND 'Pass'='$password'";
$result = mysqli_query($dbc, $query);

if(mysqli_num_rows($result) == 1)
{
    while($row = $result->fetch_assoc())
    {
        $firstname=$row['FirstName'];
        $firstname=$row['FirstName'];
        $usertype=$row['UserType'];
        if($usertype=="patient")
        {
            include("PatientHome.html");
        }
        elseif($usertype=="doctor")
        {
            include("DoctorHome.html");
        }
            
    }
}
else
{
    echo "Incorrect Username or Password";
}


?>
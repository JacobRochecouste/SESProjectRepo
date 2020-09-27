<?php

$dbhost='db4free.net';
$dbuser='siteuser';
$dbpass='securepassword';
$dbname='telehealth';

$dbc = new mysqli($dbhost, $dbuser, $dbpass, $dbname)
or die('Could not connect %s\n'. $dbc->connect_error);

$username = $_GET['Uname'];
$password = $_GET['Pass'];

$query = "SELECT * FROM Users WHERE Email='$username' AND Pass=MD5('$password')";
$result = mysqli_query($dbc, $query);

if(mysqli_num_rows($result) == 1)
{
    while($row = $result->fetch_assoc())
    {
        $firstname=$row['FirstName'];
        $lastname=$row['LastName'];
        $usertype=$row['UserType'];
        session_start();
        $_SESSION["email"]=$username;
        $_SESSION["FName"]=$firstname;
        $_SESSION["LName"]=$lastname;
        $_SESSION["LoggedIn"]=true;
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
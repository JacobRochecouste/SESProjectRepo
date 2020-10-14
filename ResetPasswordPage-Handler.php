<?php
session_start();
$dbhost='db4free.net';
$dbuser='siteuser';
$dbpass='securepassword';
$dbname='telehealth';

$dbc = new mysqli($dbhost, $dbuser, $dbpass, $dbname)
or die('Could not connect %s\n'. $dbc->connect_error);

$userEmail = $_GET['userEmail'];
$userFName = $_GET['userFName'];
$userLName = $_GET['userLName'];

$query = "SELECT * FROM Users WHERE Email='$userEmail'";
$result = mysqli_query($dbc,$query);

if(mysqli_num_rows($result) == 1)
{
    while($row = $result->fetch_assoc())
    {
        $email = $row['Email'];
        $firstname = $row['FirstName'];
        $lastname = $row['LastName'];
        if ( $userFName == $firstname && $userLName == $lastname) {
            header("Location: ResetPasswordChangePage.php");
        }
        else {
            $_SESSION["Error"] = "Database Check: First Name '" . $userFName . " or Last Name '" . $userLName . "' do not match the stored values.";
            header("Location: ResetPasswordPage.php");
        }
    }
}
else {
    $_SESSION["Error"] = "Database Check: Email '" . $userEmail . "' is incorrect.";
	header("Location: ResetPasswordPage.php");
}  
$dbc->close()
?>
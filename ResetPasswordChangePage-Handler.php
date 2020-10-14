<?php
session_start();
$dbhost='db4free.net';
$dbuser='siteuser';
$dbpass='securepassword';
$dbname='telehealth';

$dbc = new mysqli($dbhost, $dbuser, $dbpass, $dbname)
or die('Could not connect %s\n'. $dbc->connect_error);

$pass = $_GET['pass'];
$email = $_GET['email'];

$query = "UPDATE Users SET Pass = '$pass' WHERE Pass='$email'";
if($dbc->query($query) === TRUE) {
    $_SESSION['Success'] = "Successfully updated User Details";
    header("Location: successpage.php");
}
else {
    $_SESSION['Failed'] = "Password failed to Update";
    include("ResetPasswordChangePage.php");
}  
$dbc->close()
?>
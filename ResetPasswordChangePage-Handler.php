<?php
session_start();
$dbhost='db4free.net';
$dbuser='siteuser';
$dbpass='securepassword';
$dbname='telehealth';

$dbc = new mysqli($dbhost, $dbuser, $dbpass, $dbname)
or die('Could not connect %s\n'. $dbc->connect_error);

$pass = MD5($_GET['pass']);
$email = $_SESSION['email'];

$query = "UPDATE Users SET Pass = '$pass' WHERE Email='$email'";
if($dbc->query($query) === TRUE) {
    header("Location: ResetPasswordSuccessPage.php");
}
else {
    $_SESSION['Failed'] = "Password failed to update, please try again.";
    header("Location: ResetPasswordChangePage.php");
}  
$dbc->close()
?>
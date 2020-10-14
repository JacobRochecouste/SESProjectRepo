<?php 
session_start();

$dbhost='db4free.net';
$dbuser='siteuser';
$dbpass='securepassword';
$dbname='telehealth';

$dbc = new mysqli($dbhost, $dbuser, $dbpass, $dbname)
or die('Could not connect %s\n'. $dbc->connect_error); 
$patemail = $_SESSION["email"];

$sqlValue = "SELECT * FROM Users WHERE Email='$patemail'";
$resultValue = mysqli_query($dbc,$sqlValue);


// was trying to find the session stuff to see if pass and address were there and nope rip
echo '<pre>';
var_dump($_SESSION);
echo '</pre>';

if (mysqli_num_rows($resultValue) >= 1) {
	while($row = $resultValue->fetch_assoc()) {
		$firstname = $row['FirstName'];
		$lastname = $row['LastName'];
		$phonenumber = $row['PhoneNo'];
		$address = $row['Address'];
		$email = $row['Email'];
		$password = $row['Pass'];
		$patientid = $row['PatientID'];
	}
}
	
$firstname = $_GET['patFirstName'];
$lastname = $_GET['patLastName'];
$phonenumber = $_GET['patPhone'];
$email = $_GET['patEmail'];
$address = $_GET['patAddr'];
$password = MD5($_GET['patPass']);
$patientid = $_GET['PatID'];
	
//if($_SERVER["REQUEST_METHOD"] == "POST"){
if(isset($_GET['submit'])) {
	if (empty($firstname) || empty($lastname) || empty($email) || empty($password) || empty($patientid)) { 
	$message = "Please fill in all the required fields"; 
	}
} else { 
	$sql = "UPDATE Users SET FirstName='$firstname', LastName='$lastname', Email='$email', PhoneNo='$phonenumber', Address='$address', Pass='$password', PatientID='$patientid' WHERE Email='$patemail'";
	//$result = mysqli_query($dbc,$sql);
	//if (mysqli_num_rows($result) == 1) {
	//Pass
	//	$query = "INSERT INTO Users (FirstName, LastName, Email, PhoneNo, Address, Pass, PatientID) VALUES ('$firstname', '$lastname', '$email', '$phonenumber', '$address', '$password', '$patientid')";
	//	if ($dbc->query($query) === TRUE) {
	//		$message = "Your account details were sucessfully updated"; 
	//	} else {
	//		$message = "Oops :/ \n An error occured updating your account details, please try again.";
	//	}
	//	
	//}
} 
?>
<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta>
        <link rel="stylesheet" type="text/css" href="stylesheet1.css">
        <link rel="icon" type="image/x-icon" href="favicon.ico"/>
        <title> Account Settings </title>
    </head>

    <body>

        <!-- Navigation Menu -->
        <div class="navBar">
		    <a id="homeLink" href="LandingPage.php">Home</a>
	    	<a id="aboutLink" href="AboutPage.php">About</a>
    		<a id="servicesLink" href="ServicesPage.php">Services</a>
    		<a id="emergenciesLink" href="EmergenciesPage.php">Emergencies</a>
            <a id="title" class="title" style="width: 26%; float: middle; margin-left: 295px;"><b>TeleHealth</b></a>
		    <a id="logoutLink" href="LogoutHandler.php" style="float:right">Log Out</a>
            <a id="patHome" class="active" href="PatientHome.php" style="float:right;"><?php echo $_SESSION["FName"]," ",$_SESSION["LName"];?></a>
        </div>

        <!--Content of Page-->
        <br>
        <div class="patEdit">
            <form class="patForm" method="get" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                <label id="editLbl"><b> Account Settings</b></label>
                <hr>
                <label class="editTxt"> You can use this page to update any errors you made to your settings! </label>
                <br><br>	
                <label id="editLabels"><b>First Name</b></label>
                <br>
                    <input type="text" id="patFirstName" name="patFirstName" value="<?php echo $firstname ?>" required>
                <br><br>		
                <label id="editLabels"><b>Last Name</b></label>
                <br>
                    <input type="text" id="patLastName" name="patLastName" value="<?php echo $lastname ?>" required>
                <br><br>	
                <label id="editLabels"><b>Email</b></label>
                <br>
                    <input type="email" id="patEmail" name="patEmail" value="<?php echo $email ?>" required>
                <br><br>
                <label id="editLabels"><b>Phone Number</b></label>
                <br>
                    <input type="tel" id="patPhone" name="patPhone" value="<?php echo $phonenumber ?>" required>
                <br><br>
                <label id="editLabels"><b>Address</b></label>
                <br>
                    <input type="text" id="patAddr" name="patAddr" value="<?php echo $address ?>" required>
                <br><br>
                <label id="editLabels"><b>Password</b></label>
                <br>
                    <input type="password" id="patPass" name="patPass" value="<?php echo $password ?>" required>
                <br><br>
                    <label id="editLabels"><b>Patient ID</b> </label>
                <br>
                    <input type="text" id="patID" name="patID" value="<?php echo $patid ?>" required>
                <br><br>
                <table class="patBtnTable">
                    <tr>
                        <td align="left"> <button class="buttonRounded clearBtn" type="reset"> Clear </button> </td>
                        <td align="right"> <button class="buttonRounded updateBtn" type="submit"> Submit </button> </td>
                    </tr>
                </table>
            </form>
        </div>
        <br><br><br><br>
    </body>

</html>
<?php 
unset($_SESSION["Error"]);
?>
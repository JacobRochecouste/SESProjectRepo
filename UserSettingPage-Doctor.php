<?php 
session_start();

$dbhost='db4free.net';
$dbuser='siteuser';
$dbpass='securepassword';
$dbname='telehealth';

$dbc = new mysqli($dbhost, $dbuser, $dbpass, $dbname)
or die('Could not connect %s\n'. $dbc->connect_error); 
$docemail = $_SESSION["email"];

$sqlValue = "SELECT * FROM Users WHERE Email='$docemail'";
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
		$doctorid = $row['DoctorID'];
	}
}
	
$firstname = $_GET['docFirstName'];
$lastname = $_GET['docLastName'];
$phonenumber = $_GET['docPhone'];
$email = $_GET['docEmail'];
$address = $_GET['docAddr'];
$password = MD5($_GET['docPass']);
$doctorid = $_GET['docID'];
	
//if($_SERVER["REQUEST_METHOD"] == "POST"){
if(isset($_GET['submit'])) {
	if (empty($firstname) || empty($lastname) || empty($email) || empty($password) || empty($doctorid)) { 
	$message = "Please fill in all the required fields"; 
	}
} else { 
	$sql = "UPDATE Users SET FirstName='$firstname', LastName='$lastname', Email='$email', PhoneNo='$phonenumber', Address='$address', Pass='$password', DoctorID='$doctorid' WHERE Email='$docemail'";
	//$result = mysqli_query($dbc,$sql);
	//if (mysqli_num_rows($result) == 1) {
	//Pass
	//	$query = "INSERT INTO Users (FirstName, LastName, Email, PhoneNo, Address, Pass, DoctorID) VALUES ('$firstname', '$lastname', '$email', '$phonenumber', '$address', '$password', '$doctorid')";
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
		    <a id="contactLink" href="ContactPage.php">Contact Us</a>
		    <a id="createSub" href="DoctorCreateSubscription.php">Create Subscription</a>
            <a id="drugsTable" href="DoctorViewDrugsList.php" target="_blank">View Drugs</a>
		    <a id="logoutLink" href="LogoutHandler.php" style="float:right">Log Out</a>
    		<a id="docHome" href="DoctorHome.php" style="float: right;"><?php echo $_SESSION["FName"]," ",$_SESSION["LName"];?></a>
    	</div>

        <!--Content of Page-->
        <br>
        <div class="docEdit">
            <form class="docForm" method="get" action="<?php echo $_SERVER['PHP_SELF'] ?>">
				<label id="editLbl"><b> Account Settings</b></label>
				<hr>
				<label class="editTxt"> You can use this page to update any errors you made to your settings! </label>
				<br><br>	
				<label id="editLabels"><b>First Name</b></label>
				<br>
					<input type="text" id="docFirstName" name="docFirstName" value="<?php echo $firstname ?>" required>
				<br><br>		
				<label id="editLabels"><b>Last Name</b></label>
				<br>
					<input type="text" id="docLastName" name="docLastName" value="<?php echo $lastname ?>" required>
				<br><br>	
				<label id="editLabels"><b>Email</b></label>
				<br>
					<input type="email" id="docEmail" name="docEmail" value="<?php echo $email ?>" required>
				<br><br>
				<label id="editLabels"><b>Phone Number</b></label>
				<br>
					<input type="tel" id="docPhone" name="docPhone" value="<?php echo $phonenumber ?>" required>
				<br><br>
				<label id="editLabels"><b>Address</b></label>
				<br>
					<input type="text" id="docAddr" name="docAddr" value="<?php echo $address ?>" required>
				<br><br>
				<label id="editLabels"><b>Password</b></label>
				<br>
					<input type="password" id="docPass" name="docPass" value="<?php echo $password ?>" required>
				<br><br>
				<label id="editLabels"><b>Doctor ID</b> </label>
				<br>
					<input type="text" id="docID" name="docID" value="<?php echo $doctorid ?>" required>
				<br><br>
				<table class="docBtnTable">
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
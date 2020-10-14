<?php 
session_start();

$dbhost='db4free.net';
$dbuser='siteuser';
$dbpass='securepassword';
$dbname='telehealth';

$dbc = new mysqli($dbhost, $dbuser, $dbpass, $dbname)
or die('Could not connect %s\n'. $dbc->connect_error); 
$docEmail = $_SESSION["email"];

$sqlValue = "SELECT * FROM Users WHERE Email='$docEmail'";
$resultValue = mysqli_query($dbc,$sqlValue);

if (mysqli_num_rows($resultValue) == 1) {
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
			<a id="logoutLink" href="LogoutHandler.php" style="float:right">Log Out</a>
			<a id="docHome" class="active" href="DoctorHome.php" style="float: right;"><?php echo $_SESSION["FName"]," ",$_SESSION["LName"];?></a>
			<a id="title" class="title" style="width: 26%; float: middle; margin-left: 295px;"><b>TeleHealth</b></a>
		</div>

        <!--Content of Page-->
        <br>
        <div class="docEdit">
            <form class="docForm" method="get" action="SettingsPageHandler-Doctor.php">
				<label id="editLbl"><b> Account Settings</b></label>
				<hr>
				<label class="editTxt"> You can use this page to update any errors you made to your settings! </label>
				<br><br>
				<?php 
					if(isset($_SESSION['Success']))
					{
						$msg = $_SESSION['Success'];
						echo "<label id='success'>$msg </label><br><br>";
					}
					if(isset($_SESSION['Failed']))
					{
						$msg = $_SESSION['Failed'];
						echo "<label id='errorUpdate'>$msg </label><br><br>";
					}
				?>	
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
				<!-- Temporary comment out while dealing with password -->
				<!-- <label id="editLabels"><b>Password</b></label>
				<br>
					<input type="password" id="docPass" name="docPass">
				<br><br> -->
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

		<!-- Footer Menu -->
		<div class="footerBar">
			<a id="FAQLink" href="FAQPage.php" style="margin-left: 630px;">FAQ</a>
			<a id="contactLink" href="ContactPage.php">Contact Us</a>
			<a id="creditLink" href="CreditPage.php">Credits</a>
			<a style="float:right" class="copyRight"> &copy; 2020 TeleHealth </a>
		</div>

    </body>

</html>
<?php 
unset($_SESSION["Success"]);
unset($_SESSION["Failure"]);
?>
<?php
session_start();
if(!isset($_SESSION["LoggedIn"]) || $_SESSION["LoggedIn"] !== true){
    header("location: LoginPage.php");
    exit;
}
if(!isset($_SESSION["UserType"]) || $_SESSION["UserType"] !== "doctor"){
    header("location: PatientHome.php");
    exit;
}
?>
<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
	
	<head>
		<meta>
		<link rel="stylesheet" type="text/css" href="stylesheet1.css">
		<link rel="icon" type="image/x-icon" href="favicon.ico"/>
		<title>Home</title>
	</head>

	<body>
	
		<!-- Navigation Menu -->
		<div class="navBar">
			<a id="homeLink" href="LandingPage.php">Home</a>
			<a id="servicesLink" href="ServicesPage.php">Services</a>
			<a id="emergenciesLink" href="EmergenciesPage.php">Emergencies</a>
			<a id="createSub" href="DoctorCreateSubscription.php">Create Subscription</a>
			<a id="drugsTable" href="DoctorViewDrugsList.php" target="_blank">View Drugs</a>
			<a id="logoutLink" href="LogoutHandler.php" style="float:right">Log Out</a>
			<a id="docHome" class="active" href="DoctorHome.php" style="float: right;"><?php echo $_SESSION["FName"]," ",$_SESSION["LName"];?></a>
			<a id="title" class="title" href="DoctorHome.php" style="width: 26%; float: middle"><b>TeleHealth</b></a>
		</div>

		<!--Content of Page-->
		<div class="parallaxDoc">
			<br><br><br> 
			<h1>Welcome Dr. <?php echo $_SESSION["FName"]," ",$_SESSION["LName"];?>!</h1>
			<h3>What would you like to do?</h3>
			<br><br>
          
				<div class="docHomeButtons" align="center">
				<button class="button" onclick="location.href='https://my.setmore.com/calendar#weekly/r88971600744316499/05102020'">View the Setmore Booking Page</button>
				<br><br><br>
				<button class="button" onclick="location.href='DoctorCreateSubscription.php'">Create a Subscription</button>
				<br><br><br>
				<button class="button" onclick="location.href='DoctorViewDrugsList.php'" target="_blank">View the Drug Inventory</button>
				<br><br><br>
				<button class="button" onclick="location.href='http://localhost:3000/'">Start a Chat with a Patient</button>
				</div>

				<!-- can use either white or orange text for the placeholder text i dont mind either I quite like the orange, the white is a little off, up to you though.-->
		</div>

		<!-- Footer Menu -->
		<div class="navBar">
			<a id="homeLink" href="LandingPage.php" style="margin-left: 630px;">Home</a>
			<a id="aboutLink" href="AboutPage.php">About</a>
			<a id="servicesLink" href="ServicesPage.php">Services</a>
			<a id="contactLink" href="ContactPage.php">Contact Us</a>
			<a class="copyRight"> &copy; 2020 TeleHealth </a>
		</div> 
		
	</body>

</html>
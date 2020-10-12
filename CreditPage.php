<?php 
session_start();
?>
<!DOCTYPE html>

<html lang="en">

	<head>
		<meta>
		<link rel="stylesheet" type="text/css" href="stylesheet1.css">
		<link rel="icon" type="image/x-icon" href="favicon.ico"/>
		<title> Team Credits </title>
	</head>

	<body>

		<!-- Navigation Menu -->
		<div class="navBar">
			<a id="homeLink" href="LandingPage.php">Home</a>
			<a id="aboutLink" href="AboutPage.php">About</a>
			<a id="servicesLink" href="ServicesPage.php">Services</a>
			<a id="emergenciesLink" href="EmergenciesPage.php">Emergencies</a>
			<a id="contactLink" href="ContactPage.php">Contact Us</a>
			<?php
			if(!isset($_SESSION["LoggedIn"]) || $_SESSION["LoggedIn"] !== true)
			{	
				echo '<a id="loginLink" href="LoginPage.php" style="float:right">Log In</a>';
				echo '<a id="signupLink" href="SignupUserTypePage.html" style="float:right">Sign Up</a>';
			}
			else
			{
				if(!isset($_SESSION["UserType"]) || $_SESSION["UserType"] !== "patient")
				{
					echo '<a id="createSub" href="DoctorCreateSubscription.php">Create Subscription</a>';
					echo '<a id="drugsTable" href="DoctorViewDrugsList.php">View Drugs</a>';
				}
				if(!isset($_SESSION["UserType"]) || $_SESSION["UserType"] !== "doctor")
				{
					echo '<a id="viewSub" href="PatientViewSubscription.php">View Subscriptions</a>';
				}
				echo '<a id="logoutLink" href="LogoutHandler.php" style="float:right">Log Out</a>';
				echo '<a id="docHome" href="DoctorHome.php" style="float: right;">', $_SESSION["FName"]," ",$_SESSION["LName"], '</a>';
			}
			?>

		</div>

		<!--Content of Page-->
		<br><br><br><br>	
			<form class="mpForm" align="center">
				<label id="creditspLbl"><b> Software Engineering Studio 1A  </b></label>
				<br><br>
				<label id="creditsSLbl"><b> Group 2's Members  </b></label>
				<br><br><br><br>
				<label id="mpText"> 
					Jacob Rochecouste - Project Leader and Scrum Master
					<br><br>
					Justin Chin Wei Kit - Developer
					<br><br>
					Ivan David - Developer
					<br><br>
					Richie Nguyen - Developer
					<br><br>
					William Susanto - Documentation
				</label>
			</form>
		<br><br><br><br>

		<!-- Footer Menu -->
		<div class="footerBar">
			<a id="FAQLink" href="FAQPage.php" style="margin-left: 630px;">FAQ</a>
			<a id="creditLink" class="active" href="CreditPage.php">Credits</a>
			<a style="float:right" class="copyRight"> &copy; 2020 TeleHealth </a>
		</div> 		
	</body>

</html>

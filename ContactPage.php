<?php
session_start();
?>
<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
	
	<head>	
		<meta>
		<link rel="stylesheet" type="text/css" href="stylesheet1.css">
		<title>TeleHealth</title>
	</head>
	
	<body>

		<!--Logo-->
		<span class="logoDiv">
			<a id="homePage" href="LandingPage.php">
				<img src="TeleHealth_logo.png" alt="TeleHealth Logo" style="width:200px;height:200px;">
			</a>
		</span>



		<!-- Navigation Menu -->
		<div class="navBar">
			<a id="homeLink" href="LandingPage.php">Home</a>
			<a id="aboutLink" href="AboutPage.php">About</a>
			<a id="servicesLink" href="ServicesPage.php">Services</a>
			<a id="emergenciesLink" href="EmergenciesPage.php">Emergencies</a>
			<a id="contactLink" class="active" href="ContactPage.php">Contact Us</a>
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
		<div class="parallax">
			<br><br><br><br>	
			<form class="mpForm" id="landingPForm" align="center">
				
				<label id="cpLbl"><b> Contacts List </b></label>
				<br>
				<label id="mpText">
					<br><b>Telephone</b> - 0412345678 <br>
						<b> Emergency (24/7) Hotline </b> - 0412345909 <br>
						<b>Email</b> - telehealthsupport@tele.health.au <br>
					</label>
					<br><br>
				<label id="mpHText"> <u><b>Developer Specific</b></u> </label>
				<label id="mpText">
					<br><b>Telephone</b> - 0412345679 <br>
						<b>Email</b> - telehealthdev@tele.health.au <br>
					</label>
					<br><br>
				<label id="mpHText"> <u><b>Where to to find us?</b></u> </label> <br><br>
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3312.232515169314!2d151.1981017!3d-33.8836651!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5aa7383337c73213!2sUTS%20Faculty%20of%20Engineering%20and%20IT!5e0!3m2!1sen!2sau!4v1588215213583!5m2!1sen!2sau" width="400px" height="250px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
				<br><br>
				<label id="mpHText"> <u><b> Contact a Doctor</b></u> </label>
				<label id="mpText">
					<br>If you want to speak to a doctor, <br> please <a href="SignupUserTypePage.html">sign up</a> or <a href="LoginPage.php">log in</a> <br> to the website and book an appointment.
					</label>
			</form>
		</div>

	</body>

</html>
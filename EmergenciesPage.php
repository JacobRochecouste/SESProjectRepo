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
			<a id="emergenciesLink" class="active" href="EmergenciesPage.php">Emergencies</a>
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
				}
				echo '<a id="logoutLink" href="LogoutHandler.php" style="float:right">Log Out</a>';
				echo '<a id="docHome" href="DoctorHome.php" style="float: right;">', $_SESSION["FName"]," ",$_SESSION["LName"], '</a>';
			}
			?>
		</div>

		<!--Content of Page-->
		<div class="parallax">
		<br><br><br><br>	
			<form class="mpForm" id="landingPForm" align="justify">
				<label id="epLbl"><b> Emergency Situation </b></label>
				<br><br>
				<label id="mpHText"><u><b> Advise: </b></u></label>
				<label id="mpText">
					<br>In an immediate emergency we suggset contacting 000 first A.S.A.P </label>
					<br><br>
				<label id="mpHText"><u><b> Methods We Offer: </b></u></label>
				<label id="mpText">
					<br><b>Urgent Cases:</b> <br>  
					We require you to <a href=LoginPage.php>sign in</a> with your account first or to create an account if you do not have one. Please click <a href="SignupUserTypePage.html">here to proceed</a>.</label>
					<br><br>
				<label id="mpHText"><u><b> Contact Details: </b></u></label>
				<label id="mpText">
					<br><b>Telephone</b> - 0412345678 <br>
						<b> Emergency (24/7) Hotline </b> - 0412345909 <br>
						<b>Email</b> - telehealthsupport@tele.health.au <br>
						<b>Others</b> - Please refer to the <a href="ContactPage.php">Contact Us</a> page for more details.
						</label>
					<br><br>
			</form>
		</div>

	</body>

</html>

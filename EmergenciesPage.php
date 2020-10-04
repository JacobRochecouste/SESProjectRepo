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
				<img src="TeleHealth_logo.png" alt="TeleHealth Logo" style="width:150px;height:150px;">
			</a>
		</span>
		
		<!--Title Bar-->
		<h1 class="title">Emergency</h1>
	
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
	
			<br><br>
			<br><br>	

			<p class="divmessage" style="font-family:Arial;font-size:26px;text-align:center;margin: 0px 0px 30px 0px;padding:75px;background-color:#DCDCDC;size:700px 400px">
				<b>In an emergency, always call 000.</b>
				<br>
				<br>
				<b>If the situation is not critical, but you still need assistance,<br> please contact us through the following information:</b>
				<br><br><b>Telephone</b> - (711) 265-9193
				<br><b>Email</b> - telehealth@hotmail.com
				<br><b>For appointments, please <a href="SignupUserTypePage.html">sign up</a> or <a href="LoginPage.php">log in</a> first to continue!</b>
			</p>
	
		</div>
	
	</body>

</html>

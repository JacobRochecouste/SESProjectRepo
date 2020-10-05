<?php 
session_start();
?>
<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
	
	<head>
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

		<!--Title Bar-->
		<h1 class="title">Provided Services</h1>
	
		<!-- Navigation Menu -->

		<div class="navBar">
			<a id="homeLink" href="LandingPage.php">Home</a>
			<a id="aboutLink" href="AboutPage.php" >About</a>
			<a id="servicesLink" class="active" href="ServicesPage.php" >Services</a>
			<a id="emergenciesLink" href="EmergenciesPage.php" >Emergencies</a>
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
		
			<p class="divmessage" style="font-family:Arial;font-size:26px;text-align:center;margin: 0px 0px 30px 0px;padding:75px;background-color:#ffffff;size:700px 400px">
				<u><b>Our Services</b></u>
				<br><br>
				<b>We provide:</b>
				<br><br>
				<b>Healthcare services</b> - We direct you to the quality healthcare services you deserve.
				<br>
				<b>Online consultations</b> - Find a doctor to communicate with anytime, anywhere.
				<br>
				<b>Help Centre</b> - Need a question answered? Just ask our help line <a href="ContactPage.php">here!</a>
				<br>
				<b>State-of-the-art software</b> - We always keep Telehealth updated with security and stability, so there's no need to worry about lost information.
			</p>	

		</div>	
	
	</body>

</html>

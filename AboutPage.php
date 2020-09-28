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
		<span class="logoDiv">
			<a id="homePage" href="LandingPage.php">
				<img src="TeleHealth_logo.png" alt="TeleHealth Logo" style="width:150px;height:150px;">
			</a>
		</span>
	<h1 class="title">Welcome to TeleHealth</h1>
	
		<!-- Navigation Menu -->

	<div class="navBar">
		<a id="homeLink" href="LandingPage.php">Home</a>
		<a id="aboutLink" class="active" href="AboutPage.php" >About</a>
		<a id="servicesLink" href="ServicesPage.php" >Services</a>
		<a id="emergenciesLink" href="EmergenciesPage.php" >Emergencies</a>
		<a id="contactLink" href="ContactPage.php">Contact Us</a>
		<?php
		if(!isset($_SESSION["LoggedIn"]) || $_SESSION["LoggedIn"] !== true)
		{
			echo '<a id="loginLink" href="LoginPage.html" style="float:right">Log In</a>';
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

	<div class="parallax">
	
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>


	<span class="logtable">
	<img src="LandingLaptopImage.jpg" alt="Landing Laptop Image" style="width:650px;height:392px;margin:0px 0px 0px 0px;">
	</span>
	
	
	<p class="divmessage" style="font-family:Arial;font-size:30px;text-align:left;margin: 0px 0px 30px 0px;padding:75px;background-color:#DCDCDC; size:700px 400px">
		<u><b>Our Vision:</b></u>
		To ensure that medical help is available anytime, anywhere in the world.
	<br>
	<br>
		<u><b>Our Mission:</b></u>
		To give people in faraway areas hope for an improved medical system through online consultations, appointments and prescriptions for medicine.
	</p>
	<br>

	</div>

	<body>
</html>

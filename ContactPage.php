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
		<h1 class="title">Welcome to TeleHealth</h1>

		<!-- Navigation Menu -->
		<div class="navBar">
			<a id="homeLink" href="LandingPage.php">Home</a>
			<a id="aboutLink" href="AboutPage.php" >About</a>
			<a id="servicesLink" href="ServicesPage.php" >Services</a>
			<a id="emergenciesLink" href="EmergenciesPage.php" >Emergencies</a>
			<a id="contactLink" class="active" href="ContactPage.php">Contact Us</a>
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

		<!--Body of Website Here-->
		<div class="parallax">
		<br>
		<br>
		<br>
		<br>
		<br>

		<p class="divmessage" style="font-family:Arial;font-size:26px;text-align:center;margin: 0px 0px 30px 0px;padding:75px;background-color:#DCDCDC;size:700px 400px">
		<b>Contact Us:</b>
		<br><b>Telephone</b> - (711) 265-9193
		<br><b>Email</b> - telehealth@hotmail.com
		<br>
		<br><b>If you want to speak to a doctor, please sign up/log in to Telehealth and book an appointment.</b>
		</p>

		</div>

		<br>
		<br>
		<br>
		<br>
		<br>

	</body>

</html>
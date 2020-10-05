<?php 
session_start();
?>
<!DOCTYPE html>

<html lang="en">

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
			<a id="homeLink" class="active" href="LandingPage.php">Home</a>
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
				}
				echo '<a id="logoutLink" href="LogoutHandler.php" style="float:right">Log Out</a>';
				echo '<a id="docHome" href="DoctorHome.php" style="float: right;">', $_SESSION["FName"]," ",$_SESSION["LName"], '</a>';
			}
			?>

		</div>

		<!--Content of Page-->
		<div class="parallax">
		<br><br>
		
		<span class="logtable">
			<img src="doctor.jpg" alt="Doctor Image" style="width:650px;height:386px;margin:75px 0px 0px 0px;">
		</span>
		<br>
		<p class="divmessage" style="font-family:Arial;font-size:26px;text-align:center;margin: 18px 0px 0px 0px;padding:75px;background-color:#ffffff;size:700px 400px">
			<u><b>Welcome to Telehealth!</b></u>
			<br> - We help provide you with the best quality healthcare and consultations anytime, anywhere.
			<br> - With a wide range of doctors and medical personnel from all around the country, we aim to bring a better healthcare system for all.
			<br> - Join us <a href="SignupUserTypePage.html">now!</a>

			<br>
			<br>
		</p>
		
		</div>	

	</body>

</html>

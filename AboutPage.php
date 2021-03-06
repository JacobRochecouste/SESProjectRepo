﻿<?php
session_start();
?>
<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

	<head>
		<meta>
		<link rel="stylesheet" type="text/css" href="stylesheet1.css">
		<link rel="icon" type="image/x-icon" href="favicon.ico"/>
		<title>About</title>
	</head>

	<body>

		<!-- Navigation Menu -->
		<div class="navBar">
			<a id="homeLink" href="LandingPage.php">Home</a>
			<a id="aboutLink" class="active" href="AboutPage.php">About</a>
			<a id="servicesLink" href="ServicesPage.php">Services</a>
			<a id="emergenciesLink" href="EmergenciesPage.php">Emergencies</a>
			<a id="title" class="title" style="width: 26%; float: middle; margin-left: 295px;"><b>TeleHealth</b></a>
			<?php
			if(!isset($_SESSION["LoggedIn"]) || $_SESSION["LoggedIn"] !== true)
			{
				echo '<a id="loginLink" href="LoginPage.php" style="float:right">Log In</a>';
				echo '<a id="signupLink" href="SignupUserTypePage.html" style="float:right">Sign Up</a>';
			}
			else
			{
				echo '<a id="logoutLink" href="LogoutHandler.php" style="float:right">Log Out</a>';
				echo '<a id="docHome" href="DoctorHome.php" style="float: right;">', $_SESSION["FName"]," ",$_SESSION["LName"], '</a>';
			}
			?>

		</div>

		<!--Content of Page-->
		<div class="parallax">
		<br><br><br><br>	
			<form class="mpForm" id="landingPForm" align="justify">
				<label id="apLbl"><b> About Us  </b></label>
				<br><br>
				<label id="mpHText"> <u><b>Our Vision:</b></u> </label>
				<label id="mpText">
					<br>To ensure that medical help is available anytime, anywhere in the world. </label>
					<br><br>
				<label id="mpHText"> 
					<u><b>Our Mission:</b></u> </label>
				<label id="mpText">
					<br>To give people in faraway areas hope for an improved medical system through online consultations, appointments and prescriptions for medicine. </label>
					<br><br>
				<label id="mpHText"> 
					<u><b>Additional Info:</b></u> </label>
					<br>
				<label id="mpText">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec felis turpis, vulputate quis placerat nec, pellentesque at lectus. Curabitur mattis dui mi, nec viverra velit rutrum quis. Mauris eget leo massa. Donec rutrum lectus nec diam suscipit pretium. Aenean auctor justo arcu, ut congue quam ultrices quis. Duis accumsan nisl at lectus lacinia porta. Integer at fermentum nisl. In aliquam semper efficitur. Nam nec velit lobortis, accumsan nibh id, accumsan nisi. Morbi at orci fermentum, aliquam eros non, sollicitudin turpis.

					Mauris semper eleifend ante et iaculis. In pulvinar id ex et pretium. Nam placerat ante blandit, congue massa a, aliquam felis. Cras dignissim massa ut rutrum maximus. Duis ut accumsan mauris. Vestibulum elementum purus nec dolor fermentum, ornare tempor quam ornare. Nam elementum accumsan efficitur.
				</label>
			</form>
		</div>

		<!-- Footer Menu -->
		<div class="footerBar">
			<a id="FAQLink" href="FAQPage.php">FAQ</a>
			<a id="contactLink" href="ContactPage.php">Contact Us</a>
			<a id="creditLink" href="CreditPage.php">Credits</a>
			<a style="float:right" class="copyRight"> &copy; 2020 TeleHealth </a>
		</div> 

	<body>

</html>

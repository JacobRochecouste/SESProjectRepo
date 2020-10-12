<?php 
session_start();
?>
<!DOCTYPE html>

<html lang="en">

	<head>
		<meta>
		<link rel="stylesheet" type="text/css" href="stylesheet1.css">
		<link rel="icon" type="image/x-icon" href="favicon.ico"/>
		<title>TeleHealth</title>
	</head>

	<body>

		<!-- Navigation Menu -->
		<div class="navBar">
			<a id="homeLink" class="active" href="LandingPage.php">Home</a>
			<a id="aboutLink" href="AboutPage.php">About</a>
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
				<label id="mpLbl"><b> Welcome to Telehealth!  </b></label>
				<hr>
				<br>
				<label id="mpText"> 
					As one of the best Healthcare Service Providers in the market, TeleHealth is the embodiement of proven expertise! 
					Boasting medical personnel and doctors from different disciplines and varying tecniques all for you! <br> 
					Our service understands the importance of our customers well-being and thus we take every situation very seriously with detailed
					yet simple procedures for you to follow. We do not discriminate our patients and our medical team will treat you with the
					utmost respect.
					<br>
					It does not matter if we are dealing with the elderly, the disabled or people affected by the coronavirus 
					as our service supports various selectable consultation modes through the website during the booking process.
					<br><br>
					Our ultimate goal is to revolutionize TeleHealth as a better healthcare system.
					<br><br>
					Join us today! By clicking on this <a href="SignupUserTypePage.html">link!</a>
					<br><br>
					Have a question? Feel free to contact us <a href=ContactPage.php>here! </a>
				</label>
			</form>
		</div>

		<!-- Footer Menu -->
		<div class="footerBar">
			<a id="FAQLink" href="FAQPage.php" style="margin-left: 630px;">FAQ</a>
			<a id="contactLink" href="ContactPage.php">Contact Us</a>
			<a id="creditLink" href="CreditPage.php">Credits</a>
			<a style="float:right" class="copyRight"> &copy; 2020 TeleHealth </a>
		</div> 

	</body>

</html>

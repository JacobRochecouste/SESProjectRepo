<?php 
session_start();
?>
<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
	
	<head>
		<link rel="stylesheet" type="text/css" href="stylesheet1.css">
		<link rel="icon" type="image/x-icon" href="favicon.ico"/>
		<title>Services</title>

	</head>

	<body>

		<!-- Navigation Menu -->
		<div class="navBar">
			<a id="homeLink" href="LandingPage.php">Home</a>
			<a id="aboutLink" href="AboutPage.php">About</a>
			<a id="servicesLink" class="active" href="ServicesPage.php">Services</a>
			<a id="emergenciesLink" href="EmergenciesPage.php" >Emergencies</a>
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
				<label id="spLbl"><b> Provided Services  </b></label>
				<br><br>
				<label id="mpHText"><u><b> Healthcare: </b></u></label>
				<label id="mpText">
					<br>We direct you to the quality healthcare services you deserve. </label>
					<br><br>
				<label id="mpHText"><u><b> Online Consultations: </b></u></label>
				<label id="mpText">
					<br>Find a doctor to communicate with anytime, anywhere. </label>
					<br><br>
				<label id="mpHText"><u><b> Support Team: </b></u></label>
				<label id="mpText">
					<br>Need a question answered? Something you don't understand? <br>
					Our amazing on demand support team can be found <a href="ContactPage.php">here!</a> </label>
					<br><br>
				<label id="mpHText"><u><b> Urgent Consultations: </b></u></label>
				<label id="mpText">
					<br> Need help urgently? Book an appointment immediately with one of our dedicated doctors. </label>
					<br><br>
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

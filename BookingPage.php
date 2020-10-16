<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
	
<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="stylesheet1.css">
		<link rel="icon" type="image/x-icon" href="favicon.ico"/>
		<title>Bookings</title>

	</head>

		<body>
			<div class="navBar">
				<a id="homeLink" href="LandingPage.php">Home</a>
	    		<a id="aboutLink" href="AboutPage.php">About</a>
    			<a id="servicesLink" href="ServicesPage.php">Services</a>
				<a id="emergenciesLink" href="EmergenciesPage.php">Emergencies</a>
				<a id="title" class="title" style="width: 26%; float: middle; margin-left: 295px;"><b>TeleHealth</b></a>
				<a id="logoutLink" href="LogoutHandler.php" style="float:right">Log Out</a>
				<a id="patHome" class="active" href="PatientHome.php" style="float:right;"><?php echo $_SESSION["FName"]," ",$_SESSION["LName"];?></a>
			</div>
        
			<div class="parallax">

				<br>
				<!--Setmore Booking Service Embed-->
				<iframe src="https://telehealth3623.setmore.com" scrolling="no" width="95%" height="100%" frameborder="0"></iframe>

			</div>
			<!-- Footer Menu -->
			<div class="footerBar">
				<a id="FAQLink" href="FAQPage.php">FAQ</a>
				<a id="contactLink" href="ContactPage.php">Contact Us</a>
				<a id="creditLink" href="CreditPage.php">Credits</a>
				<a style="float:right" class="copyRight"> &copy; 2020 TeleHealth </a>
			</div> 	
			
	</body>

</html>
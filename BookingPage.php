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
        <span class="logoDiv">
			<a id="homePage" href="LandingPage.php">
				<img src="TeleHealth_logo.png" alt="TeleHealth Logo" style="width:150px;height:150px;">
			</a>
		</span>

        <h1 class="title">Welcome to TeleHealth</h1>

        <div class="navBar">
		    <a id="homeLink" href="LandingPage.php">Home</a>
	    	<a id="aboutLink" href="AboudPage.php">About</a>
    		<a id="servicesLink" href="ServicesPage.php">Services</a>
    		<a id="emergenciesLink" href="EmergenciesPage.php">Emergencies</a>
		    <a id="contactLink" href="ContactPage.php">Contact Us</a>
            <a id="viewSub" href="PatientViewSubscription.php">View Subscriptions</a>
		    <a id="logoutLink" href="LogoutHandler.php" style="float:right">Log Out</a>
            <a id="patHome" class="active" href="PatientHome.php" style="float:right;"><?php echo $_SESSION["FName"]," ",$_SESSION["LName"];?></a>
		</div>
        
		<div class="parallax">

            <br> <br> <br><br>
                <!--Setmore Booking Service Embed-->
            <iframe src="https://telehealth3623.setmore.com" scrolling="no" width="100%" height="100%" frameborder="0"></iframe>

        </div>
</body>
</html>
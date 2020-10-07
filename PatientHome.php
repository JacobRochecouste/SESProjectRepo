<?php
session_start();
if(!isset($_SESSION["LoggedIn"]) || $_SESSION["LoggedIn"] !== true){
    header("location: LoginPage.html");
    exit;
}
if(!isset($_SESSION["UserType"]) || $_SESSION["UserType"] !== "patient"){
    header("location: DoctorHome.php");
    exit;
}
?>
<!DOCTYPE html>

<html lang="en">

    <head>

        <meta>
			<link rel="stylesheet" type="text/css" href="stylesheet1.css">
			<title>TeleHealth</title>
    
	    <title>TeleHealth</title>

        <script src="https://maps.google.com/maps/api/js?sensor=false"></script>
        <script src="SiteJavascript.js"></script>
        <script>
            function initialize() {
                var mapOptions = {
                    center: new google.maps.LatLng(-34.397, 150.644),
                    zoom: 8,
                    mapTypeId: google.maps.MapTypeId.SMALL
                };
                var map = new google.maps.Map(document.getElementById('map_canvas'),
                mapOptions);
            }
        </script>
    </head>

    <body>

        <!--Logo-->
        <span class="logoDiv">
			<a id="homePage" href="LandingPage.php">
				<img src="TeleHealth_logo.png" alt="TeleHealth Logo" style="width:150px;height:150px;">
			</a>
		</span>

        <!--Title Bar-->
        <h1 class="title">Hello!</h1>

        <!-- Navigation Menu -->
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
            <br> <br> <br>
                <h1>Welcome <?php echo $_SESSION["FName"]," ",$_SESSION["LName"];?></h1>
            <br>
            <br><br>
            <br>
            <div id="embedMap" class="container1" style="width:100%">
                <!--Google map will be embedded here-->
                <img src="LocationImage.jpg" alt="Image" style="width:100%"> 
                <button class="btn" type="button" onclick="initialize();">Find Medical Clinics Near Me</button>
                <div id="map_canvas"></div>
            </div>

            <div class="container2">
                <img src="BookingIcon.png" alt="Image" style="width:100%"> 
                <a class="btn" type="button" href="BookingPage.php">Make a Booking</a>
            </div>
    </body>
</html>
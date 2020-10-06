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
        <meta charset="utf-8">

        <link rel="stylesheet" type="text/css" href="stylesheet1.css">
	    <title>TeleHealth</title>

        <script src="https://maps.google.com/maps/api/js?sensor=false"></script>
        <script src="SiteJavascript.js"></script>
        <script>
            function showPosition() {
                if(navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(showMap, showError);
                } else {
                    alert("Sorry, your browser does not support HTML5 geolocation.");
                }
            }
 
         // Define callback function for successful attempt
        function showMap(position) {
            // Get location data
            lat = position.coords.latitude;
            long = position.coords.longitude;
            var latlong = new google.maps.LatLng(lat, long);
    
            var myOptions = {
                center: latlong,
                zoom: 16,
                mapTypeControl: true,
                navigationControlOptions: {
                    style:google.maps.NavigationControlStyle.SMALL
                }
            }
    
                var map = new google.maps.Map(document.getElementById("embedMap"), myOptions);
                var marker = new google.maps.Marker({ position:latlong, map:map, title:"You are here!" });
            }
 
            // Define callback function for failed attempt
            function showError(error) {
                if(error.code == 1) {
                    result.innerHTML = "You've decided not to share your position, but it's OK. We won't ask you again.";
                } else if(error.code == 2) {
                    result.innerHTML = "The network is down or the positioning service can't be reached.";
                } else if(error.code == 3) {
                    result.innerHTML = "The attempt timed out before it could get the location data.";
                } else {
                    result.innerHTML = "Geolocation failed due to unknown error.";
                }
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

        <!--Content of Page-->
		<div class="parallax">
            <br> <br> <br>
            <h1>Welcome <?php echo $_SESSION["FName"]," ",$_SESSION["LName"];?></h1>
            <button type="button" onclick="showPosition();" style="width=100px; height=150px;">Find Medical Clinics Near Me</button>
            <br
            <div id="embedMap" style="width: 600px; height: 600px;align: center">
            <!--Google map will be embedded here-->
            </div>
            <br> <br> <br> <br> <br> <br> <br> <br> <br>
            <iframe src="https://telehealth3623.setmore.com" scrolling="no" width="100%" height="100%" frameborder="0"></iframe>
        </div>

	    <br><br>
	    <br><br>
	    <br><br>
	    <br>

    </body>

</html>
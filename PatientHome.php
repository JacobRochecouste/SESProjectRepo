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

        <script>
            function myMap() {
                var mapProp= {
                    center:new google.maps.LatLng(-33.86984543,151),
                    zoom:10,
                };
                var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
                
                var ClinicPos = {lat: -33.883665,lng: 151.200807);
                var marker = new google.maps.Marker({
                    position: ClinicPos,
                    map: map,
                    title: 'Medical Clinic'
                });
             }   
        </script>

        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDYWvsmEcY5HF_GSj1bx07SFDjX4Ud_dsQ"></script>

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
            <div id="googleMap" class="container1" style="width:50%; height: 800px;margin:50px">
                <!--Google map will be embedded here -->
                <img src="LocationImage.jpg" alt="Image" style="width:100%"> 
                <button class="btn" type="button" onclick="myMap();">Find Medical Clinics Near Me</button>
               
            </div>
            <!--
            <div class="container2">
                <img src="BookingIcon.png" alt="Image" style="width:100%"> 
                <a class="btn" type="button" href="BookingPage.php">Make a Booking</a>
            </div>
            -->
    </body>
</html>
<?php
session_start();
if(!isset($_SESSION["LoggedIn"]) || $_SESSION["LoggedIn"] !== true){
    header("location: LoginPage.php");
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
            <link rel="icon" type="image/x-icon" href="favicon.ico"/>
			<title>Home</title>
    
	    <title>TeleHealth</title>

        <script>
            function myMap() {
                var mapProp= {
                    center:new google.maps.LatLng(-33.95,151),
                    zoom:11,
                };
                var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
                
                var Clinic1Pos = {lat: -33.883665,lng: 151.200807};
                var Clinic2Pos = {lat: -33.921141,lng: 150.927306};
                var Clinic3Pos = {lat: -34.066099,lng: 150.825935};
                var Clinic4Pos = {lat: -33.811958,lng: 151.006155};
                var Clinic5Pos = {lat: -33.803899,lng: 151.289648};
                var Clinic6Pos = {lat: -33.901553,lng: 151.016362};
                var Clinic7Pos = {lat: -34.032817,lng: 151.058590};

                var marker1 = new google.maps.Marker({
                    position: Clinic1Pos,
                    map: map,
                    title: 'Medical Clinic'
                });

                var marker2 = new google.maps.Marker({
                    position: Clinic2Pos,
                    map: map,
                    title: 'Medical Clinic'
                });

                var marker3 = new google.maps.Marker({
                    position: Clinic3Pos,
                    map: map,
                    title: 'Medical Clinic'
                });

                var marker4 = new google.maps.Marker({
                    position: Clinic4Pos,
                    map: map,
                    title: 'Medical Clinic'
                });

                var marker5 = new google.maps.Marker({
                    position: Clinic5Pos,
                    map: map,
                    title: 'Medical Clinic'
                });

                var marker6 = new google.maps.Marker({
                    position: Clinic6Pos,
                    map: map,
                    title: 'Medical Clinic'
                });

                var marker7 = new google.maps.Marker({
                    position: Clinic7Pos,
                    map: map,
                    title: 'Medical Clinic'
                });

             }   
        </script>

        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDYWvsmEcY5HF_GSj1bx07SFDjX4Ud_dsQ"></script>

    </head>

    <body onLoad="myMap()">

        <!-- Navigation Menu -->
        <div class="navBar">
		    <a id="homeLink" href="LandingPage.php">Home</a>
	    	<a id="aboutLink" href="AboutPage.php">About</a>
    		<a id="servicesLink" href="ServicesPage.php">Services</a>
    		<a id="emergenciesLink" href="EmergenciesPage.php">Emergencies</a>
            <a id="title" class="title" style="width: 26%; float: middle; margin-left: 175px;"><b>TeleHealth</b></a>
		    <a id="logoutLink" href="LogoutHandler.php" style="float:right">Log Out</a>
            <a id="patHome" class="active" href="PatientHome.php" style="float:right;"><?php echo $_SESSION["FName"]," ",$_SESSION["LName"];?></a>
        </div>
            
            <div id="googleMap" style="width:100%; height: 100%;">
               <!-- Google map will be embedded here-->
            
		<!-- Footer Menu -->
		<div class="footerBar">
			<a id="FAQLink" href="FAQPage.php" style="margin-left: 630px;">FAQ</a>
            <a id="contactLink" href="ContactPage.php">Contact Us</a>
            <a id="creditLink" href="CreditPage.php">Credits</a>
			<a style="float:right" class="copyRight"> &copy; 2020 TeleHealth </a>
		</div> 

    </body>
    
</html>
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
                    center:new google.maps.LatLng(-33.86984543,151),
                    zoom:10,
                };
                var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
                
                var ClinicPos = {lat: -33.883665,lng: 151.200807};
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

        <!-- Navigation Menu -->
        <div class="navBar">
		    <a id="homeLink" href="LandingPage.php">Home</a>
	    	<a id="aboutLink" href="AboutPage.php">About</a>
    		<a id="servicesLink" href="ServicesPage.php">Services</a>
    		<a id="emergenciesLink" href="EmergenciesPage.php">Emergencies</a>
		    <a id="contactLink" href="ContactPage.php">Contact Us</a>
            <a id="viewSub" href="PatientViewSubscription.php">View Subscriptions</a>
		    <a id="logoutLink" href="LogoutHandler.php" style="float:right">Log Out</a>
            <a id="patHome" class="active" href="PatientHome.php" style="float:right;"><?php echo $_SESSION["FName"]," ",$_SESSION["LName"];?></a>
            <a id="title" class="title" href="DoctorHome.php" style="width: 18%; float: middle"><b>TeleHealth</b></a>
        </div>

        
        <div class="parallax">
            <br><br><br>
            <h1>Welcome <?php echo $_SESSION["FName"]," ",$_SESSION["LName"];?>!</h1>
            <h3>What would you like to do?</h3>
            <br><br>
                
                <div class="patHomeButtons" align="center">
				    <button class="button" onclick="location.href='https://my.setmore.com/calendar#weekly/r88971600744316499/05102020'">View the Setmore Booking Page</button>
				    <br><br><br>
				    <button class="button" onclick="location.href='BookingPage.php'">Make a Booking</button>
				    <br><br><br>
				    <button class="button" onclick="location.href='PatientViewSubscription.php'">View your Medical Reports</button>
				    <br><br><br>
				    <button class="button" onclick="location.href='http://localhost:3000/'">Start a Chat with a Doctor</button>
                    <br><br><br>
                    <button class="button" onclick="location.href='EnquiryPage.php'">Make an Enquiry</button>
				</div>

            <!-- <div id="googleMap" class="container1" style="width:800px; height: 800px;">
                Google map will be embedded here
                <img src="LocationImage.jpg" alt="Image" style="width:100%"> 
                <button class="btn" type="button" onclick="myMap();">Find Medical Clinics Near Me</button>
               don't delete this one' -->
        </div>
            
		<!-- Footer Menu -->
		<div class="footerBar">
			<a id="FAQLink" href="FAQPage.php" style="margin-left: 630px;">FAQ</a>
			<a id="creditLink" href="CreditPage.php">Credits</a>
			<a style="float:right" class="copyRight"> &copy; 2020 TeleHealth </a>
		</div> 

    </body>
    
</html>
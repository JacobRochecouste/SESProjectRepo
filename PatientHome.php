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
    </head>

    <body>

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

        
        <div class="parallax">
            <br><br><br>
            <h1>Welcome <?php echo $_SESSION["FName"]," ",$_SESSION["LName"];?>!</h1>
            <h3>What would you like to do?</h3>
            <br><br>
                
                <div class="patHomeButtons" align="center">
				    <button class="button" onclick="location.href='LocationsPage.php'">Find Clinics Near Me</button>
				    <br><br><br>
				    <button class="button" onclick="location.href='BookingPage.php'">Make a Booking</button>
				    <br><br><br>
				    <button class="button" onclick="location.href='PatientViewSubscription.php'">View your Medical Reports</button>
				    <br><br><br>
				    <button class="button" onclick="location.href='http://localhost:3000/'">Start a Chat with a Doctor</button>
                    <br><br><br>
                    <button class="button" onclick="location.href='EnquiryPage.php'">Make an Enquiry</button>
				</div>
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
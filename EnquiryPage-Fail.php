<?php 
session_start();
?>
<!DOCTYPE html>

<html lang="en">

	<head>
		<meta>
		<link rel="stylesheet" type="text/css" href="stylesheet1.css">
		<link rel="icon" type="image/x-icon" href="favicon.ico"/>
		<title> Creation Failed! </title>
	</head>

	<body>

		<!--Logo-->
		<span class="logoDiv">
			<a id="homePage" href="LandingPage.php">
				<img src="TeleHealth_logo.png" alt="TeleHealth Logo" style="width:200px;height:200px;">
			</a>
		</span>

		<!-- Navigation Menu -->
		<div class="navBar">
			<a id="homeLink" href="LandingPage.php">Home</a>
			<a id="aboutLink" href="AboutPage.php">About</a>
			<a id="servicesLink" href="ServicesPage.php">Services</a>
			<a id="emergenciesLink" href="EmergenciesPage.php">Emergencies</a>
			<a id="contactLink" href="ContactPage.php">Contact Us</a>
			<?php
			if(!isset($_SESSION["LoggedIn"]) || $_SESSION["LoggedIn"] !== true)
			{	
				echo '<a id="loginLink" href="LoginPage.php" style="float:right">Log In</a>';
				echo '<a id="signupLink" href="SignupUserTypePage.html" style="float:right">Sign Up</a>';
			}
			else
			{
				if(!isset($_SESSION["UserType"]) || $_SESSION["UserType"] !== "patient")
				{
					echo '<a id="createSub" href="DoctorCreateSubscription.php">Create Subscription</a>';
					echo '<a id="drugsTable" href="DoctorViewDrugsList.php">View Drugs</a>';
				}
				if(!isset($_SESSION["UserType"]) || $_SESSION["UserType"] !== "doctor")
				{
					echo '<a id="viewSub" href="PatientViewSubscription.php">View Subscriptions</a>';
				}
				echo '<a id="logoutLink" href="LogoutHandler.php" style="float:right">Log Out</a>';
				echo '<a id="docHome" href="DoctorHome.php" style="float: right;">', $_SESSION["FName"]," ",$_SESSION["LName"], '</a>';
			}
			?>

		</div>
        
        <br><br><br><br>
        
        <!--Content of Page-->
        <div class="enquiryFormStatusF" align="justify">
            <form class="enquiryStatus">
                <label id="failLbl"><b> Submission Failed! ( ╯°□°)╯ ┻━━┻ </b></label>
                <br><br>
                <label id="statusPText"> An error has occured and your enquiry was not submitted, please return to the 
                <a href="EnquiryPage.php"> enquiry form</a> 
                and complete it once again. Common causes of error may include: </label>
                <ul id="reasonsList">
                    <li> Server is not responding </li>
                    <li> Server is currently overloaded </li>
					<li> There is an issue with the database </li>
                    <li> Text areas overloaded with words and cannot be stored </li>
                </ul>
                <label id="statusPText">Should the problem persist, please notify us using the details located in the 
                <a href="ContactPage.php"> contacts page</a>, we will attempt to fix the issue with immediate efforts. </label>
                <label id="statusPText"> <br><br>We greatly apologise for any inconveniences caused. </label>
            </form>
        </div>

    </body>

</html>
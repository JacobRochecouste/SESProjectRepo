<?php
session_start();
if(!isset($_SESSION["LoggedIn"]) || $_SESSION["LoggedIn"] !== true){
    header("location: LoginPage.html");
    exit;
}
if(!isset($_SESSION["UserType"]) || $_SESSION["UserType"] !== "doctor"){
    header("location: PatientHome.php");
    exit;
}
?>
<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
	
	<head>
		
			<meta>
			<link rel="stylesheet" type="text/css" href="stylesheet1.css">
			<title>TeleHealth</title>

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
			<a id="aboutLink" href="AboutPage.php">About</a>
			<a id="servicesLink" href="ServicesPage.php">Services</a>
			<a id="emergenciesLink" href="EmergenciesPage.php">Emergencies</a>
			<a id="contactLink" href="ContactPage.php">Contact Us</a>
			<a id="createSub" href="DoctorCreateSubscription.php">Create Subscription</a>
			<a id="drugsTable" href="DoctorViewDrugsList.php" target="_blank">View Drugs</a>
			<a id="logoutLink" href="LogoutHandler.php" style="float:right">Log Out</a>
			<a id="docHome" class="active" href="DoctorHome.php" style="float: right;"><?php echo $_SESSION["FName"]," ",$_SESSION["LName"];?></a>
		</div>

	<div class="navBar">
		<a id="homeLink" href="LandingPage.php">Home</a>
		<a id="aboutLink" href="AboutPage.php" >About</a>
		<a id="servicesLink" href="ServicesPage.php" >Services</a>
		<a id="emergenciesLink" href="EmergenciesPage.php" >Emergencies</a>
		<a id="contactLink" href="ContactPage.php">Contact Us</a>
		<a id="createSub" href="DoctorCreateSubscription.php">Create Subscription</a>
		<a id="logoutLink" href="LogoutHandler.php" style="float:right">Log Out</a>
		<a id="docHome" class="active" href="DoctorHome.php" style="float: right;"><?php echo $_SESSION["FName"]," ",$_SESSION["LName"];?></a>
	</div>

	<div class="parallax">
			<br> <br> <br> 
			<h1>Welcome Dr. <?php echo $_SESSION["FName"]," ",$_SESSION["LName"];?></h1>
            <br> <br> <br> <br>
           
			<div style="display: inline-block;">
			<form  action="https://my.setmore.com/calendar#weekly/r65041600744361542/05102020">

				<input type="submit" value="Go to Booking Page" style="background-color: gray; 
																		border: 2px white;
																		padding: 60px 60px;
																		color: #e6e6e6;
																		margin: 0px 200px;
																		cursor: pointer;
																		font-size: 30px;
																		display: inline-block;"
																		
																		

				/>

			</form>
			</div>

			<div style="display: inline-block">
			<form  action="DoctorCreateSubscription.php">

				<input type="submit" value="Create Subscription" style="background-color: gray; 
																		border: 2px white;
																		padding: 60px 60px;
																		color: #e6e6e6;
																		margin: 0px 200px;
																		cursor: pointer;
																		font-size: 30px;
																		"
																		

				/>

			</form>
			</div>

        </div>
	</body>
</html>
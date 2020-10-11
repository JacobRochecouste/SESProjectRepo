<?php
session_start();
if(!isset($_SESSION["LoggedIn"]) || $_SESSION["LoggedIn"] !== true){
    header("location: LoginPage.php");
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
			<link rel="icon" type="image/x-icon" href="favicon.ico"/>
			<title>Home</title>
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

		<!--Content of Page-->
		<div class="parallax">
			<br><br><br> 
			<h1>Welcome Dr. <?php echo $_SESSION["FName"]," ",$_SESSION["LName"];?></h1>
			<h3>What would you like to do?</h3>
			<br><br>
           
			<!-- 
			<div style="display: inline-block;">

				<form  action="https://my.setmore.com/calendar#weekly/r65041600744361542/05102020">

					<input type="submit" value="Setmore Booking Page" target="_blank" style="background-color: gray; 
																			border: 2px white;
																			padding: 60px 60px;
																			color: #e6e6e6;
																			margin: 0px 200px;
																			cursor: pointer;
																			font-size: 30px;
																			display: inline-block;
																			width: 500px"
					/>

				</form>
			</div>

			<div style="display: inline-block">
				<form  action="DoctorCreateSubscription.php">

				<input type="submit" value="Create Subscription" style="background-color: gray; 
																		border: 2px white;
																		padding: 60px 0px;
																		color: #e6e6e6;
																		margin: 0px 50px;
																		cursor: pointer;
																		font-size: 30px;
																		width: 500px;
																		"
																		

				/>

			</form>
			</div>
			<br><br><br>
			<div style="display: inline-block">
			<form  action="DoctorViewDrugsList.php">

				<input type="submit" value="View Drugs Inventory" target="_blank" style="background-color: gray;
																		border: 2px white;
																		padding: 60px 0px;
																		color: #e6e6e6;
																		margin: 0px 200px;
																		cursor: pointer;
																		font-size: 30px;
																		width: 500px;
																		"
																		

				/>

			</form>
			</div>
			<div style="display: inline-block">
			<form  action="DoctorCreateSubscription.php">

				<input type="submit" value="Create Chat with Patient" style="background-color: gray;
																		border: 2px white;
																		padding: 60px 0px;
																		color: #e6e6e6;
																		margin: 0px 50px;
																		cursor: pointer;
																		font-size: 30px;
																		width: 500px;
																		"
				/>

				</form>
				</div>
				-->
				<div class="docHomeButtons" align="center">
				<button class="button">View the Setmore Booking Page</button>
				<br><br><br>
				<button class="button">Create a Subscription</button>
				<br><br><br>
				<button class="button">View the Drug Inventory</button>
				<br><br><br>
				<button class="button">Start a Chat with a Patient</button>
				</div>
				<!-- can use either white or orange text for the placeholder text i dont mind either-->

        </div>

	</body>

</html>
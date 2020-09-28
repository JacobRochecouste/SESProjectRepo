<?php
session_start();
if(!isset($_SESSION["LoggedIn"]) || $_SESSION["LoggedIn"] !== true){
    header("location: LoginPage.html");
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
	<span class="logoDiv">
		<img src="TeleHealth_logo.png" alt="TeleHealth Logo" style="width:150px;height:150px;">
	</span>
	<h1 class="title">Welcome to TeleHealth</h1>
	
		<!-- Navigation Menu -->

	<div class="navBar">
		<a id="homeLink" href="#home">Home</a>
		<a id="aboutLink" href="#About" >About</a>
		<a id="servicesLink" href="#Services" >Services</a>
		<a id="emergenciesLink" href="#emergencies" >Emergencies</a>
		<a id="contactLink" href="#contact">Contact Us</a>
		<a id="logoutLink" href="LogoutHandler.php" style="float:right">Log Out</a>
		<a id="docHome" href="DoctorHome.php" style="float: right;"><?php echo $_SESSION["FName"]," ",$_SESSION["LName"];?></a>
		
	</div>

	<br>
	<br>
	<br>
	<br>
	<br>

	<div class="parallax">
			<br> <br> <br> 
			<h1>Welcome Dr. <?php echo $_SESSION["FName"]," ",$_SESSION["LName"];?></h1>
            <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
            <iframe src="https://telehealth3623.setmore.com/jacob" scrolling="no" width="100%" height="100%" frameborder="0"></iframe>
        
            
        </div>

	

	<script type="text/javascript">
	// Button Functions

	document.getElementById("homeLink").onclick = function () {
		location.href = "LandingPage.html"
	};

	document.getElementById("aboutLink").onclick = function () {
		location.href = "AboutPage.html"
	};

	document.getElementById("servicesLink").onclick = function () {
		location.href = "ServicesPage.html"
	};

	document.getElementById("emergenciesLink").onclick = function () {
		location.href = "EmergenciesPage.html"
	};

	document.getElementById("contactLink").onclick = function () {
		location.href = "ContactPage.html"
	};

	document.getElementById("signupLink").onclick = function () {
		location.href = "SignupUserTypePage.html"
	};

	document.getElementById("loginLink").onclick = function () {
		location.href = "LoginPage.html"
	};	

	</script>


	</body>
</html>
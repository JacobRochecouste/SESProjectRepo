<?php 
session_start();
?>
<!DOCTYPE html>

<html lang="en">

	<head>
		<meta>
		<link rel="stylesheet" type="text/css" href="stylesheet1.css">
		<link rel="icon" type="image/x-icon" href="favicon.ico"/>
		<title> Enquiry Form </title>
	</head>

	<body>

		<!-- Navigation Menu -->
		<div class="navBar">
			<a id="homeLink" href="LandingPage.php">Home</a>
			<a id="aboutLink" href="AboutPage.php">About</a>
			<a id="servicesLink" href="ServicesPage.php">Services</a>
			<a id="emergenciesLink" href="EmergenciesPage.php">Emergencies</a>
			<a id="title" class="title" style="width: 26%; float: middle; margin-left: 295px;"><b>TeleHealth</b></a>
			<?php
			if(!isset($_SESSION["LoggedIn"]) || $_SESSION["LoggedIn"] !== true)
			{	
				echo '<a id="loginLink" href="LoginPage.php" style="float:right">Log In</a>';
				echo '<a id="signupLink" href="SignupUserTypePage.html" style="float:right">Sign Up</a>';
			}
			else
			{
				echo '<a id="logoutLink" href="LogoutHandler.php" style="float:right">Log Out</a>';
				echo '<a id="docHome" href="DoctorHome.php" style="float: right;">', $_SESSION["FName"]," ",$_SESSION["LName"], '</a>';
			}
			?>

		</div>

		<!--Content of Page-->
		<br>
		<div class="enquiryPage">
			<form class="enquiryForm" method="get" action="EnquiryHandler.php" align="justify">
				<label id="enquiryLbl"><b> Enquiry Form </b> </label>
                <hr>
                <label id="enquiryTxt">
                    Please use this form to list your concerns or for any other agenda.
					<br>
					Please select the appropriate enquiry type for this request.
                </label>
                <br><br>
				<label id="enquiryLabels"><b> What was the consultation type for the session? <br> Please select accordingly from the options below:</b></label>
                <div>
                    <label class="radio-inline">
                        <input type="radio" name="radioOpt" value="General" required> General Enquiry </label>
                    <label class="radio-inline">
                        <input type="radio" name="radioOpt" value="Emergency" required> Emergency Enquiry </label>
					<label class="radio-inline">
                        <input type="radio" name="radioOpt" value="Feedback" required> Feedback Enquiry </label>
                </div>
				<br>
				<label id="eqLabels" for="userFirstName"><b>First Name</b></label> 
                <br>
                    <input type="text" name="userFirstName" id="userFirstName" placeholder="Enter your First Name" required>
                <br><br>
                <label id="eqLabels" for="userLastName"><b>Last Name</b></label> 
                <br>
                    <input type="text" name="userLastName" id="userLastName" placeholder="Enter your Last Name" required>
                <br><br>
                <label id="eqLabels" for="userEmail"><b>Email</b></label> 
                <br>
                    <input type="email" name="userEmail" id="userEmail" placeholder="Enter your e-mail" required>
				<br><br>
				<label id="eqLabels" for="patEmail"><b>Phone Number</b></label> 
                <br>
                    <input type="text" name="userPhone" id="userPhone" placeholder="Enter your phone number" required>
				<br><br>
                <label id="enquiryLabels" for="drugID"><b>Enquiry Content</b></label> 
                <br>
                    <textarea id="msgSummary" name="msgSummary" placeholder="Write your enquiry message here" style="height:150px" required></textarea>
                <br><br>
                <table class="createEnquiryForm">
                    <tr>
                        <td align="left"> <button class="buttonRounded clearBtn" type="reset"> Clear </button> </td>
                        <td align="right"> <button class="buttonRounded submitBtn" type="submit"> Submit </button> </td>
                    </tr>
                </table>
			</form>
		</div>
		<br><br><br><br>
		<!-- Footer Menu -->
		<div class="footerBar">
			<a id="FAQLink" href="FAQPage.php" style="margin-left: 630px;">FAQ</a>
			<a id="contactLink" href="ContactPage.php">Contact Us</a>
			<a id="creditLink" href="CreditPage.php">Credits</a>
			<a style="float:right" class="copyRight"> &copy; 2020 TeleHealth </a>
		</div> 		
	</body>

</html>

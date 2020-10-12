<?php 
session_start();
?>
<!DOCTYPE html>

<html lang="en">

	<head>
		<meta>
		<link rel="stylesheet" type="text/css" href="stylesheet1.css">
		<link rel="icon" type="image/x-icon" href="favicon.ico"/>
		<title> Frequently Asked Questions </title>
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
		<div class="faqForm">
			<form class="qForm" align="justify">
				<label id="faqpLbl"><b> Frequently Asked Questions  </b></label>
				<hr>
				<br>
				<label id="qpHText"><b> What are your working hours? </b></label>
				<br><br>
				<label id="qpText"> 
					TeleHealth medical services are in general open 10 hours a day for you to get in touch with your doctors.
					TeleHealth will however, operate 24/7 in general after our working ours to ensure we are able 
					to dispatch help for those in need such as Urgent Cases which may come in later.
					The exception to this will be doctor's working in specialized fields who have their own specific working hours, 
					as such they will require appropriate bookings to be made in advance.
					<ul class="reasonsList">
						<li> <b>Monday:</b> 08:00 - 18:00 </li>
						<li> <b>Tuesday:</b> 08:00 - 18:00</li>
						<li> <b>Wednesday:</b> 08:00 - 18:00</li>
						<li> <b>Thursday:</b> 08:00 - 18:00</li>
						<li> <b>Friday:</b> 08:00 - 18:00</li>
						<li> <b>Saturday:</b> 08:00 - 15:30</li>
						<li> <b>Sunday:</b> 08:00 - 14:30</li>
					</ul>
				</label>
				<label id="qpHText"><b> How can I get in touch with a doctor? </b></label>
				<br><br>
				<label id="qpText"> 
					There are 2 ways for you to do that, you can either sign up <a href=SignupUserTypePage.html>here!</a>
					and make an account to chat with a doctor or call us using the number "0412345678" or our hotline "0412345909".
					You can find more details at the contacts page right <a href="ContactPage.php">here</a>.
				</label>
				<br><br>
				<label id="qpHText"><b> How do I make a booking? </b></label>
				<br><br>
				<label id="qpText"> 
					The only option we provide is for you to sign up with us first using this link <a href=SignupUserTypePage.html>here!</a>
				</label>
				<br><br>
				<label id="qpHText"><b> Must I really make a booking? </b></label>
				<br><br>
				<label id="qpText"> 
					Yes.
				</label>
				<br><br>
				<label id="qpHText"><b> Am I able to cancel or change my booking once it's made? </b></label>
				<br><br>
				<label id="qpText"> 
					Unfortunately, we do not have a direct option for you to cancel or change a booking, 
					the alternative we provide however is for you to either: 
					<br><br>
					(a) Inform us using the numbers listed earlier.
					<br>
					(b) Submit an <a href="EnquiryPage.php">enquiry form</a>.
					<br><br>
					Please note that if you choose option (b), we humbly request for you to give at least a 1 or 2 hours
					notice before the scheduled session if you wish to cancel or reschedule as our doctor's 
					must schedule their resources accordingly.
				</label>
				<br><br>
				<label id="qpHText"><b> Do I need to prepare anything for the session? </b></label>
				<br><br>
				<label id="qpText"> 
					Yes, we require you to bring your identity card and any insurance forms you may own
					as you are able to claim it.
				</label>
				<br><br>
				<label id="qpHText"><b> How is the session held? </b></label>
				<br><br>
				<label id="qpText"> 
					It will be held through a phone call, video call or TeleHealth's chat service.
				</label>
				<br><br>
				<label id="qpHText"><b> What happens after a session is completed? </b></label>
				<br><br>
				<label id="qpText"> 
					Once your session with your doctor is complete, he or she will be able to create a medical report form
					tailored specifically to the session held. You may view this report by navigating first to your profile's
					home page and then proceed to the <b>View Subscriptions</b> page.
					Please note that the doctor will create the report anywhere between 1-24 hours after the session. 
					Should you not receive the report, please contact firstly, the doctor and then us.
				</label>
				<br><br>
				<label id="qpHText"><b> Is the report downloadable? </b></label>
				<br><br>
				<label id="qpText"> 
					Yes, when you are in the subscriptions page, it will show you a summary of any reports 
					any doctor has created for you in the past and to be. At the bottom of the page you will
					notice there is a button to select and generate the report you wish to view.
					The generated report will be in a PDF format for you to download.
				</label>
				<br><br>
			</form>
		</div>
		<br><br><br><br>
		<!-- Footer Menu -->
		<div class="footerBar">
			<a id="FAQLink" href="FAQPage.php" class="active" style="margin-left: 630px;">FAQ</a>
			<a id="contactLink" href="ContactPage.php">Contact Us</a>
			<a id="creditLink" href="CreditPage.php">Credits</a>
			<a style="float:right" class="copyRight"> &copy; 2020 TeleHealth </a>
		</div> 
	</body>

</html>

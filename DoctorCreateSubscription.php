<?php 
session_start();
?>
<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta>
        <link rel="stylesheet" type="text/css" href="stylesheet1.css">
        <link rel="icon" type="image/x-icon" href="favicon.ico"/>
        <title> Create Subscription </title>
    </head>

    <body>

        <!-- Navigation Menu -->
        <div class="navBar">
		    <a id="homeLink" href="LandingPage.php">Home</a>
		    <a id="aboutLink" href="AboutPage.php">About</a>
	    	<a id="servicesLink" href="ServicesPage.php">Services</a>
		    <a id="emergenciesLink" href="EmergenciesPage.php">Emergencies</a>
		    <a id="title" class="title" style="width: 26%; float: middle; margin-left: 295px;"><b>TeleHealth</b></a>
		    <a id="logoutLink" href="LogoutHandler.php" style="float:right">Log Out</a>
    		<a id="docHome" href="DoctorHome.php" style="float: right;"><?php echo $_SESSION["FName"]," ",$_SESSION["LName"];?></a>
    	</div>

        <!--Content of Page-->
        <div class="parallax" style="height: 1600px;">
        <br>
        <div class="createSub">
            <form class="subForm" method="get" action="CreateSubHandler.php">
                <label id="subFormLbl"><b> Post-Consultation Subscription Form </b> </label>
                <hr>
                <?php 
                if(isset($_SESSION["Error"]))
                {
                    $error = $_SESSION["Error"];
                    echo "<br><span id='errorEmail'>$error</span><br><br>";
                }
                ?>
                <label id="pcsfLabelTxt">
                    This form is to be created and fully filled out upon completion of a medical consultation with a patient.
                    <br>
                    The form should contain various descriptions and details the patient should be informed about.
                    <br>
                    Every field within this subscription form must be filled out. 
                    <br>
                    If there is nothing to note of in the consultation details section please write N/A.
                    <br>
                    Your detail's as a doctor will be instantly filled out so you do not have to worry about those and focus on the rest!
                    <br>
                </label>
                <br>
                <label for="patientsDetails" id="patientsDetails"><b> Patients Details </b></label>
                <hr>
                <label id="pdLabels" for="patFirstName"><b>First Name</b></label> 
                <br>
                    <input type="text" name="patFirstName" id="patFirstName" placeholder="Enter the Patient's First Name" required>
                <br><br>
                <label id="pdLabels" for="patLastName"><b>Last Name</b></label> 
                <br>
                    <input type="text" name="patLastName" id="patLastName" placeholder="Enter the Patient's Last Name" required>
                <br><br>
                <label id="pdLabels" for="patEmail"><b>Email</b></label> 
                <br>
                    <input type="email" name="patEmail" id="patEmail" placeholder="Enter the Patient's e-mail" required>
                <br><br><br>

                <label for="consultationDetails" id="consultationDetails"><b> Consultation Details </b></label>
                <hr>
                <label id="consultationPText"><b> What was the consultation type for the session? <br> Please select accordingly from the options below:</b></label>
                <div>
                    <label class="radio-inline">
                        <input type="radio" name="radioOption" value="General" required> General Consultation </label>
                    <label class="radio-inline">
                        <input type="radio" name="radioOption" value="Follow-Up" required> Follow-Up Consultation </label>
                    <label class="radio-inline">
                        <input type="radio" name="radioOption" value="Emergency" required> Emergency Consultation </label>
                </div>
                <br>
                <label id="pdLabels"><b> Booking ID </b></label> 
                <br>
                    <input type="text" name="bookingID" id="bookingID" placeholder="Enter the Booking ID of the Session" required>
                <br><br>

                <label id="consultationText" for="cdSummary"><b> Consultation Discussion Summary </b></label>
					<textarea id="cdSummary" name="cdSummary" placeholder="Write the consultation summary here" style="height:150px" required></textarea>
						
				<label id="consultationText" for="doctorsNotes"><b> Doctor's Notes </b></label>
					<textarea id="doctorsNotes" name="doctorsNotes" placeholder="Write your notes here in layman terms" style="height:150px" required></textarea>
						
				<label id="consultationText" for="treatmentMethod"><b> Recommended Treatment Method(s) </b></label>
					<textarea id="treatmentMethod" name="treatmentMethod" placeholder="Write your recommended treament methods here including frequency or length of usage for medicine or drugs" style="height:150px" required></textarea>
                <br><br>
                <table class="tableCreateSub">
                    <tr>
                        <td align="left"> <button class="buttonRounded cancelBtn" type="reset" onclick="location.href='DoctorHome.php'"> Cancel </button> </td>
                        <td align="right"> <button class="buttonRounded submitBtn" type="submit"> Submit </button> </td>
                    </tr>
                </table>
            </form>
        </div>
        <br><br><br><br>
        </div>
		<!-- Footer Menu -->
		<div class="footerBar">
			<a id="FAQLink" href="FAQPage.php">FAQ</a>
            <a id="contactLink" href="ContactPage.php">Contact Us</a>
            <a id="creditLink" href="CreditPage.php">Credits</a>
			<a style="float:right" class="copyRight"> &copy; 2020 TeleHealth </a>
		</div> 
    </body>

</html>
<?php 
unset($_SESSION["Error"]);
?>
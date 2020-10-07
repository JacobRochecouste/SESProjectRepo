<?php 
session_start();
?>
<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta>
        <link rel="stylesheet" type="text/css" href="stylesheet1.css">
        <title> Create Subscription </title>
    </head>

    <body>
        
        <!--Logo--> 
        <span class="logoDiv">
            <a id="homePage" href="LandingPage.php">
                <img src="TeleHealth_logo.png" alt="TeleHealth Logo" style="width:150px;height:150px;">
            </a>
        </span>

        <!--Title Bar-->
        <h1 class="title"> Create Patient Subscription</h1>

        <!-- Navigation Menu -->
        <div class="navBar">
		    <a id="homeLink" href="LandingPage.php">Home</a>
		    <a id="aboutLink" href="AboutPage.php">About</a>
	    	<a id="servicesLink" href="ServicesPage.php">Services</a>
		    <a id="emergenciesLink" href="EmergenciesPage.php">Emergencies</a>
		    <a id="contactLink" href="ContactPage.php">Contact Us</a>
		    <a id="createSub" class="active" href="DoctorCreateSubscription.php">Create Subscription</a>
            <a id="drugsTable" href="DoctorViewDrugsList.php" target="_blank">View Drugs</a>
		    <a id="logoutLink" href="LogoutHandler.php" style="float:right">Log Out</a>
    		<a id="docHome" href="DoctorHome.php" style="float: right;"><?php echo $_SESSION["FName"]," ",$_SESSION["LName"];?></a>
    	</div>

        <!--Content of Page-->
        <br>
        <div class="createSub">
            <form class="subForm" method="get" action="CreateSubHandler.php">
                <label id="subFormLbl"><b> Post-Consultation Subscription Form </b> </label>
                <hr>
                <label id="pcsfLabelTxt">
                    This form is to be created and fully filled out upon completion of a medical consultation with a patient.
                    <br>
                    The form should contain various descriptions and details the patient should be informed about.
                    <br>
                    Every field within this subscription form must be filled out. 
                    <br>
                    If there is nothing to note of in the consultation details section please write N/A.
                    <br>
                </label>
                <br>
                <!--my label for subFormLbl at line 36, idk how to center it help me please w-->
                <!--basically I want the text Post-Consultation Subscription Form to be centered that^-->

                <!--Patient Details Section-->
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

                <!--Doctor's Details Section-->
                <label for="doctorsDetails" id="doctorsDetails"><b> Doctor's Details </b></label>
				<hr>		
				<label id="pdLabels" for="docFirstName"><b> Doctor's First Name </b></label>
                <br>
					<input type="text" id="docFirstName" name="docFirstName" placeholder="Enter your First Name" required>
                    <br><br>	
				<label id="pdLabels" for="docLastName"><b>Last Name</b></label>
                <br>
                    <input type="text" id="docLastName" name="docLastName" placeholder="Enter your Last Name" required>
                    <br><br>	
				<label id="pdLabels" for="docEmail"><b>Email</b></label>
                <br>
                    <input type="email" id="docEmail" name="docEmail" placeholder="Enter your e-mail" required>
                    <br><br>		
				<label id="pdLabels" for="docPhoneNum"><b>Phone Number</b></label>
                <br>
                    <input type="tel" id="docPhoneNum" name="docPhoneNum" placeholder="Enter your Phone Number" required>
                    <br><br>
                <label id="pdLabels"><b> Doctor's ID </b></label> 
                <br>
                    <input type="text" name="docID" id="docID" placeholder="Enter your Doctors ID" required>

                <br><br><br>

                <!--Consultation Details Section-->
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
    </body>

</html>
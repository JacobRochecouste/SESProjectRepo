<?php
session_start();
?>
<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta>
        <link rel="stylesheet" type="text/css" href="stylesheet1.css">
        <title> Medicine Inventory</title>
    </head>

    <body>
        <!--Logo--> 
        <span class="logoDiv">
            <a id="homePage" href="LandingPage.php">
                <img src="TeleHealth_logo.png" alt="TeleHealth Logo" style="width:150px;height:150px;">
            </a>
        </span>

        <!--Title Bar-->
        <h1 class="title"> Medicine Inventory </h1>

        <!-- Navigation Menu -->
        <div class="navBar">
		    <a id="homeLink" href="LandingPage.php">Home</a>
		    <a id="aboutLink" href="AboutPage.php" >About</a>
	    	<a id="servicesLink" href="ServicesPage.php" >Services</a>
		    <a id="emergenciesLink" href="EmergenciesPage.php" >Emergencies</a>
		    <a id="contactLink" href="ContactPage.php">Contact Us</a>
		    <a id="createSub" href="DoctorCreateSubscription.php">Create Subscription</a>
            <a id="drugsTable" class="active" href="DoctorViewDrugsList.php">View Drugs</a>
		    <a id="logoutLink" href="LogoutHandler.php" style="float:right">Log Out</a>
    		<a id="docHome" href="DoctorHome.php" style="float: right;"><?php echo $_SESSION["FName"]," ",$_SESSION["LName"];?></a>
    	</div>

        <!--Content of Page-->
        <div class="drugsList" id="drugsList">
			<br>
            <table align="center">
                <tr>
                    <th colspan="9"><label for="drugsListTitle" id="drugsListTitle"><h2><b> Drugs Inventory List </b></h2></label></th>
                </tr>
                <t>
                    <th> Drug ID </th>
                    <th> Drug Name </th>
                    <th> Prescription Cause </th>
                    <th> Drug Dosage </th>
                    <th> Frequency </th>
                    <th> Drug Type </th>
                    <th> Side Effects </th>
                    <th> Price </th>
                    <th> Amount </th>
                </t>
                <?php
                if(mysqli_num_rows($result) >= 1)
                while($row = $result->fetch_assoc())
                ?>
                    <tr>
                        <td> drugid here </td>
                        <td> drug name here </td>
                        <td> cause here </td>
                        <td> dosage here </td>
                        <td> frequency here </td>
                        <td> type here (pill, cream, liquid, etc) </td>
                        <td> effect here </td>
                        <td> price here (price per default dosage amt)</td>
                        <td> amount here (availability)</td>
                    </tr>
            </table>
            <br><br>
            <label id="drugsListNote" for="drugsListNote"><b> Note: These values are purely the standard the drug comes in and is by no means the final prescription! </b></label>
        </div>
        <br><br>
        <div class="drugsListIssue">
            <form class="issueForm" method="get" action="ListIssueHandler.php">
                <label id="issueFormLbl"><b> Drugs Inventory Issue Form </b> </label>
                <hr>
                <label id="ifLabelTxt">
                    The purpose of this form is to inform the team about any errors found
                    in the Drug's List Table.
                    <br>
                    Should an error be discovered, please fill in the details within this form
                    with sufficient detail.
                </label>
                <br><br>
                <label id="issueLabels" for="drugID"><b>Drug ID and Name</b></label> 
                <br>
                    <textarea id="drugSummary" name="drugSummary" placeholder="Separate each drug by a new line, format it as ID-Name" style="height:150px" required></textarea>
                <br><br>
                <label id="issueLabels" for="issueText"><b>Issues Found</b></label> 
                <br>
                    <textarea id="issueSummary" name="issueSummary" placeholder="Please note the issues found here" style="height:150px" required></textarea>
                <br><br>
                <table class="createIssueForm">
                    <tr>
                        <td align="left"> <button class="buttonRounded clearBtn" type="reset"> Clear </button> </td>
                        <td align="right"> <button class="buttonRounded submitBtn" type="submit"> Submit </button> </td>
                    </tr>
                </table>
            </form>
        </div>

    </body>

</html>
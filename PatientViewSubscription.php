﻿<?php
session_start(); 

$dbhost='db4free.net';
$dbuser='siteuser';
$dbpass='securepassword';
$dbname='telehealth';

$dbc = new mysqli($dbhost, $dbuser, $dbpass, $dbname)
or die('Could not connect %s\n'. $dbc->connect_error);
	
$patfirstname = $_SESSION["FName"];
$patlastname = $_SESSION["LName"];

$query = "SELECT * FROM MedSubscriptions WHERE PatFirstName ='$patfirstname' AND PatLastName = '$patlastname'";
$result = mysqli_query($dbc, $query);
?>
<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta>
        <link rel="stylesheet" type="text/css" href="stylesheet1.css">
        <title> View Subscription </title>
    </head>

    <body>

        <!--Logo--> 
        <span class="logoDiv">
            <a id="homePage" href="LandingPage.php">
                <img src="TeleHealth_logo.png" alt="TeleHealth Logo" style="width:150px;height:150px;">
            </a>
        </span>

        <!--Title Bar-->
        <h1 class="title"> View Subscriptions </h1>

        <!-- Navigation Menu -->
        <div class="navBar">
		    <a id="homeLink" href="LandingPage.php">Home</a>
		    <a id="aboutLink" href="AboutPage.php" >About</a>
	    	<a id="servicesLink" href="ServicesPage.php" >Services</a>
		    <a id="emergenciesLink" href="EmergenciesPage.php" >Emergencies</a>
		    <a id="contactLink" href="ContactPage.php">Contact Us</a>
		    <a id="viewSub" class="active" href="PatientViewSubscription.php">View Subscriptions</a>
		    <a id="logoutLink" href="LogoutHandler.php" style="float:right">Log Out</a>
    		<a id="docHome" href="DoctorHome.php" style="float: right;"><?php echo $_SESSION["FName"]," ",$_SESSION["LName"];?></a>
    	</div>

        <!--Content of Page-->
        <div class="viewPatientSubscriptions" id="viewPatientSubscriptions" align="center">
			<br>
            <table align="center">
                <tr>
                    <th colspan="5"><label for="viewSubTitle" id="viewSubTitle"><h2><b> Medical Subscriptions </b></h2></label></th>
                </tr>
                <t>
                    <th> Form ID </th>
                    <th> Booking ID </th>
                    <th> Consultation Type </th>
                    <th> Date </th>
                    <th> Consulted By </th>
                </t>
                <?php
                if(mysqli_num_rows($result) >= 1)
                {
                    while($row = $result->fetch_assoc())
                    {
                        echo '<tr>
                        <td>' . $row['FormID'] . '</td>
                        <td>' . $row['BookingID'] . '</td>
                        <td>' . $row['ConsultType'] . '</td>
                        <td>' . $row['CreationDate'] . '</td>
                        <td>Dr. ' . $row['DocFirstName'] . ' ' . $row['DocLastName'] . '</td>
                        </tr>';
                    }
                }
                else
                {
                    echo '<tr>
                        <td>N/A</td>
                        <td>N/A</td>
                        <td>N/A</td>
                        <td>N/A</td>
                        <td>N/A</td>
                        </tr>';
                }
                ?>
            </table>
            <br><br>
            <label id="viewReportLbl" for="viewReportLbl"> Select a report to generate! </label>
            <br><br>
            <form method='get' action='ViewSubscription-Report.php'>
                <select name='FormID'>
                    <option> Select a form </option>
                    <?php
                        $query = mysqli_query($dbc, "SELECT * FROM MedSubscriptions WHERE PatFirstName ='$patfirstname' AND PatLastName = '$patlastname'");
                        while($form = mysqli_fetch_array($query)) {
                            echo "<option value='".$form['FormID']."'>".$form['FormID']."</option>";
                        } 
                    ?>
                </select>
                <br><br>
                <button class="buttonSmall generateBtn" type='submit'> Generate File </button>
        </div>

    </body>

</html>
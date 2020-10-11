<?php
session_start(); 

$dbhost='db4free.net';
$dbuser='siteuser';
$dbpass='securepassword';
$dbname='telehealth';

$dbc = new mysqli($dbhost, $dbuser, $dbpass, $dbname)
or die('Could not connect %s\n'. $dbc->connect_error);
	
$patEmail = $_SESSION["email"];

$query = "SELECT * FROM MedSubscriptions WHERE PatEmail ='$patEmail'";
$result = mysqli_query($dbc, $query);
?>
<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta>
        <link rel="stylesheet" type="text/css" href="stylesheet1.css">
        <link rel="icon" type="image/x-icon" href="favicon.ico"/>
        <title> View Subscription </title>
    </head>

    <body>

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
                        $result = mysqli_query($dbc, $query);
                        while($form = mysqli_fetch_array($result)) {
                            echo "<option value='".$form['FormID']."'>".$form['FormID']."</option>";
                        } 
                    ?>
                </select>
                <br><br>
                <button class="buttonSmall generateBtn" type='submit'> Generate File </button>
        </div>
		<!-- Footer Menu -->
		<div class="footerBar">
			<a id="FAQLink" href="FAQPage.php" style="margin-left: 630px;">FAQ</a>
			<a id="creditLink" href="CreditPage.php">Credits</a>
			<a class="copyRight"> &copy; 2020 TeleHealth </a>
		</div> 
    </body>

</html>
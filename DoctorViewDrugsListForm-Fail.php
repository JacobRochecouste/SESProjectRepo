<?php 
session_start();
?>
<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta>
        <link rel="stylesheet" type="text/css" href="stylesheet1.css">
        <link rel="icon" type="image/x-icon" href="favicon.ico"/>
        <title> Creation Failed! </title>
    </head>

    <body>
        <!-- Navigation Menu -->
        <div class="navBar">
            <a id="homeLink" href="LandingPage.php">Home</a>
            <a id="aboutLink" href="AboutPage.php">About</a>
            <a id="servicesLink" href="ServicesPage.php">Services</a>
            <a id="emergenciesLink" href="EmergenciesPage.php">Emergencies</a>
            <a id="contactLink" href="ContactPage.php">Contact Us</a>
            <a id="createSub" href="DoctorCreateSubscription.php">Create Subscription</a>
            <a id="drugsTable" class="active" href="DoctorViewDrugsList.php" target="_blank">View Drugs</a>
            <a id="logoutLink" href="LogoutHandler.php" style="float:right">Log Out</a>
            <a id="docHome" href="DoctorHome.php" style="float: right;"><?php echo $_SESSION["FName"]," ",$_SESSION["LName"];?></a>
        </div>
        
        <br><br><br><br>
        
        <!--Content of Page-->
        <div class="subFormStatusF" align="justify">
            <form class="formStatus">
                <label id="failLbl"><b> Submission Failed! </b></label>
                <br><br>
                <label id="statusPText"> An error has occured and your report was not submitted, please return to the 
                <a href="DoctorViewDrugsList.php"> drugs inventory page</a> 
                and complete the form once again. Common causes of error may include: </label>
                <ul id="reasonsList">
                    <li> Server is not responding </li>
                    <li> Server is currently overloaded </li>
                    <li> Text areas overloaded with words and cannot be stored </li>
                </ul>
                <label id="statusPText">Should the problem persist, please notify us using the details located in the 
                <a href="ContactPage.php"> contacts page</a>, we will attempt to fix the issue with immediate efforts. </label>
                <label id="statusPText"> <br><br>We greatly apologise for any inconveniences caused. </label>
            </form>
        </div>
		<!-- Footer Menu -->
		<div class="footerBar">
			<a id="FAQLink" href="FAQPage.php" style="margin-left: 630px;">FAQ</a>
			<a id="creditLink" href="CreditPage.php">Credits</a>
			<a class="copyRight"> &copy; 2020 TeleHealth </a>
		</div> 
    </body>

</html>
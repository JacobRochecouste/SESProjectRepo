<?php 
session_start();
?>
<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta>
        <link rel="stylesheet" type="text/css" href="stylesheet1.css">
        <link rel="icon" type="image/x-icon" href="favicon.ico"/>
        <title> Creation Succesful! </title>
    </head>

    <body>

        <!--Logo-->
        <span class="logoDiv">
            <a id="homePage" href="LandingPage.php">
                <img src="TeleHealth_logo.png" alt="TeleHealth Logo" style="width:150px;height:150px;">
            </a>
        </span>

        <!--Title Bar-->
        <h1 class="title"> Drug Issue Report </h1>

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
        <div class="subFormStatusS" align="justify">
            <form class="formStatus">
                <label id="successLbl"><b> Report Submitted! </b></label>
                <br><br>
                <label id="statusPText"> The report has been submitted and saved, you may now return to your <a href="DoctorHome.php">home page</a> or
                continue viewing the <a href="DoctorViewDrugsList.php"> Drugs Inventory List</a> and perform other actions. </label>
            </form>
        </div>

    </body>

</html>
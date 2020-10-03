﻿<?php 
session_start();
?>
<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta>
        <link rel="stylesheet" type="text/css" href="stylesheet1.css">
        <title> Creation Failed! </title>
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
            <a id="aboutLink" href="AboutPage.php" >About</a>
            <a id="servicesLink" href="ServicesPage.php" >Services</a>
            <a id="emergenciesLink" href="EmergenciesPage.php" >Emergencies</a>
            <a id="contactLink" href="ContactPage.php">Contact Us</a>
            <a id="createSub" class="active" href="DoctorCreateSubscription.php">Create Subscription</a>
            <a id="logoutLink" href="LogoutHandler.php" style="float:right">Log Out</a>
            <a id="docHome" href="DoctorHome.php" style="float: right;"><?php echo $_SESSION["FName"]," ",$_SESSION["LName"];?></a>
        </div>

        <br><br><br><br>

        <!--Body of Website Here-->
        <div class="subFormStatusF" align="justify">
            <form class="formStatus">
                <label id="failLbl"><b> Form Creation Failed! ( ╯°□°)╯ ┻━━┻ </b></label>
                <br><br>
                <label id="statusPText"> An error has occured and your document was not submitted, please return to the 
                <a href="DoctorCreateSubscription.html"> form creation page</a> 
                and complete the form once again. Common causes of error may include: </label>
                <ul id="reasonsList">
                    <li> Incorrectly Entered Patient ID </li>
                    <li> Incorrectly Entered Doctor ID</li>
                    <li> Consultation Session ID did not exist </li>
                    <li> Server is not responding </li>
                    <li> Server is currently overloaded </li>
                    <li> Entered Details does not match Database Details Stored </li>
                </ul>
                <label id="statusPText">Should the problem persist, please notify us using the details located in the 
                <a href="ContactPage.html"> contacts page</a>, we will attempt to fix the issue with immediate efforts. </label>
                <label id="statusPText"> <br><br>We greatly apologise for any inconveniences caused. </label>
            </form>
        </div>

    </body>

</html>
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
        <!-- Navigation Menu -->
        <div class="navBar">
            <a id="homeLink" href="LandingPage.php">Home</a>
            <a id="aboutLink" href="AboutPage.php" >About</a>
            <a id="servicesLink" href="ServicesPage.php" >Services</a>
            <a id="emergenciesLink" href="EmergenciesPage.php" >Emergencies</a>
            <a id="title" class="title" style="width: 26%; float: middle; margin-left: 295px;"><b>TeleHealth</b></a>
            <a id="logoutLink" href="LogoutHandler.php" style="float:right">Log Out</a>
            <a id="docHome" href="DoctorHome.php" style="float: right;"><?php echo $_SESSION["FName"]," ",$_SESSION["LName"];?></a>
        </div>
        
        <!--Content of Page-->
        <div class="parallax">
        <br><br><br><br><br><br><br><br><br>
        <div class="subFormStatusS" align="justify">
            <form class="formStatus">
                <label id="successLbl"><b> Form Creation Succesful! </b></label>
                <br><br>
                <label id="statusPText"> The form has been created and saved, you may now return to your <a href="DoctorHome.php">home page</a> and perform other actions. </label>
            </form>
        </div>
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
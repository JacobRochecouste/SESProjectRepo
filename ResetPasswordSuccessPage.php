<?php
session_start();
?>
<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta>
        <link rel="stylesheet" type="text/css" href="stylesheet1.css">
        <link rel="icon" type="image/x-icon" href="favicon.ico"/>
        <title> Password Reset </title>
    </head>

    <body class="loginStyle">

        <!--Logo-->
        <span class="logoDiv">
            <a id="homePage" href="LandingPage.php">
                <img src="TeleHealth_logo.png" alt="TeleHealth Logo" style="width:150px;height:150px;">
            </a>
        </span>

        <br><br><br><br>
        <br><br><br><br>
        <br><br><br><br>
        <br><br><br><br>

        <div class="changeStatusS">
            <form class="changeStatus">
                <label id="successLbl"><b> Password Change Successful! </b></label>
                <br><br>
                <label id="statusPText"> Your password has been successfully change
                and you may now use it to login to the website using the link <a href="DoctorHome.php">here</a>.</label>
            </form>
        </div>

	    <!-- Footer Menu -->
	    <div class="footerBar">
		    <a id="FAQLink" href="FAQPage.php" style="margin-left: 630px;">FAQ</a>
            <a id="contactLink" href="ContactPage.php">Contact Us</a>
            <a id="creditLink" href="CreditPage.php">Credits</a>
		    <a style="float:right" class="copyRight"> &copy; 2020 TeleHealth </a>
	    </div> 

    </body>

</html>
<?php 
unset($_SESSION["Error"]);
?>
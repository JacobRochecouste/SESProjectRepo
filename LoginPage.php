<?php 
session_start();
?>
<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta>
        <link rel="stylesheet" type="text/css" href="stylesheet1.css">
        <link rel="icon" type="image/x-icon" href="favicon.ico"/>
        <title> User Login </title>
    </head>
    
    <body class="loginStyle">
        
        <!--Logo--> 
        <span class="logoDiv">
            <a id="homePage" href="LandingPage.php">
                <img src="TeleHealth_logo.png" alt="TeleHealth Logo" style="width:150px;height:150px;">
            </a>
        </span>

        <br><br><br><br>
        <br><br><br>
        <br><br><br>
        <br><br><br>

        <!--Content of Page-->
        <div class="loginPage">
            <form id="loginForm" method="get" action="LoginHandler.php">
                <label id="loginFormLbl"><b> Email Address: </b><br></label>
                <input type="email" name="Uname" id='Uname' placeholder="Email Address" required>
                <br><br>
                <label id="loginFormLbl"><b> Password: </b><br></label>
                <input type="Password" name="Pass" id="Pass" placeholder="Password" required>
                <br><br>
                <?php 
                if(isset($_SESSION["Error"]))
                {
                    $error = $_SESSION["Error"];
                    echo "<span id='errorLogin'>$error</span><br>";
                }
                ?>
                <button type="submit" class="buttonLog logInBtn"> Log In </button>
                <br><br>
                <input type="checkbox" id="cbox">
                <span>Remember Me</span>
                <br><br>
                Forgotten your Password? Click <a href="ResetPasswordPage.php">here</a>!
            </form>
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
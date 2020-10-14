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
        <br><br><br>
        <br><br><br>
        <br><br><br>

        <div class="changePassword">
            <form class="changeForm" method="get" action="ResetPasswordChangePage-Handler.php">
                <label id="changeLbl"><b> Enter your Password </b></label>
                <hr>
                <?php 
                if(isset($_SESSION["Error"]))
                {
                    $error = $_SESSION["Error"];
                    echo "<br><span id='error'> $error </span><br><br>";
                }
                ?>
                <label id="changeLabel"><b> New Password </b></label>
                <br>
                    <input type="password" name="pass" id="pass" placeholder="Enter your new password choice" title="Must contain at least 8 characters, with one uppercase letter, one lowercase letter, and one number" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
                <br><br>
                <label id="changeLabel"><b> Confirm Password </b></label>
                <br>
                    <input type="password" name="confirm" id="confirm" placeholder="Confirm your password here" required>
                <br><br>

                <table class="resetFormTable">
                    <tr>
                        <td align="left"> <button class="buttonRounded cancelBtn" type="reset" onclick="location.href='LoginPage.php'"> Cancel </button> </td>
                        <td align="right"> <button class="buttonRounded submitBtn" type="submit" onclick="return passValidate()"> Submit </button> </td>
                    </tr>
                </table>
            </form>
        </div>

	    <!-- Footer Menu -->
	    <div class="footerBar">
		    <a id="FAQLink" href="FAQPage.php" style="margin-left: 630px;">FAQ</a>
            <a id="contactLink" href="ContactPage.php">Contact Us</a>
            <a id="creditLink" href="CreditPage.php">Credits</a>
		    <a style="float:right" class="copyRight"> &copy; 2020 TeleHealth </a>
	    </div> 

        <script type="text/javascript">
	    // Password Validation
        function passValidate() {
            var password = document.getElementById("pass").value;
            var confirm = document.getElementById("confirm").value;
            if (password != confirm) {
                alert("Passwords do not match.");
                return false;
            }
            return true;
        };
        </script>

    </body>

</html>
<?php 
unset($_SESSION["Error"]);
?>
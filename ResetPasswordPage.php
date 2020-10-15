<?php
session_start();
//$dbhost='db4free.net';
//$dbuser='siteuser';
//$dbpass='securepassword';
//$dbname='telehealth';

//$dbc = new mysqli($dbhost, $dbuser, $dbpass, $dbname)
//or die('Could not connect %s\n'. $dbc->connect_error);

//if(isset($_POST['submit']))
//{
    //$user_id = $_POST['userEmail'];
    //$result = mysqli_query($dbc,"SELECT * FROM Users where Email ='" . $_POST['userEmail'] . "'");
    //$row = mysqli_fetch_assoc($result);
	//$fetch_user_id=$row['Email'];
	//$email_id=$row['Email'];
	//$password=$row['Pass'];
	//if($user_id==$fetch_user_id) {
				//$to = $email_id;
                //$subject = "Password";
                //$txt = "Your password is : $password.";
                //$headers = "From: telehealthsupport@tele.health.au" . "\r\n" .
                //"CC: telehealthdev@tele.health.au";
                //mail($to,$subject,$txt,$headers);
			//}
				//else{
					//echo 'invalid User Email';
				//}
//}
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

        <div class="resetPassword">
            <form class="resetForm" method="get" action="ResetPasswordPage-Handler.php">
                <label id="passwordLbl"><b> Enter your Details </b></label>
                <hr>
                <?php 
                if(isset($_SESSION["Error"]))
                {
                    $error = $_SESSION["Error"];
                    echo "<br><span id='errorRPP'>$error </span><br><br>";
                }
                ?>
                <label id="resetLabel"><b> Email </b></label>
                <br>
                    <input type="email" name="userEmail" id="userEmail" placeholder="Email" required>
                <br><br>
                <label id="resetLabel"><b> First Name </b></label>
                <br>
                    <input type="text" name="userFName" id="userFName" placeholder="Your first name" required>
                <br><br>
                <label id="resetLabel"><b> Last Name </b></label>
                <br>
                    <input type="text" name="userLName" id="userLName" placeholder="Your last name" required>
                <br><br>

                <table class="resetFormTable">
                    <tr>
                        <td align="left"> <button class="buttonRounded backBtn" type="reset" onclick="location.href='LoginPage.php'"> Back </button> </td>
                        <td align="right"> <button class="buttonRounded continueBtn" type="submit"> Continue </button> </td>
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

    </body>

</html>
<?php 
unset($_SESSION["Error"]);
?>
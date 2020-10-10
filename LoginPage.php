<?php 
session_start();
?>
<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta>
        <link rel="stylesheet" type="text/css" href="stylesheet1.css">
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
                <input type="text" name="Uname" id='Uname' placeholder="Email Address" required>
                <br><br>
                <label id="loginFormLbl"><b> Password: </b><br></label>
                <input type="Password" name="Pass" id="Pass" placeholder="Password" required>
                <br><br>
                <?php 
                if(isset($_SESSION["Error"]))
                {
                    $error = $_SESSION["Error"];
                    echo "<span id='error'>$error</span><br>";
                }
                ?>
                <input type="submit" name="log" id="log" value="Log In">
                <br><br>
                <input type="checkbox" id="cbox">
                <span>Remember Me</span>
                <br><br>
                Forgotten your Password? Click <a href="ResetPasswordPage.php">here</a>!
            </form>
        </div>

    </body>

</html>
<?php 
unset($_SESSION["Error"]);
?>
<?php
require('connection.php');
session_start();
if (isset($_COOKIE['email_username']) && isset($_COOKIE['password'])) {
    $id = $_COOKIE['email_username'];
    $pass = $_COOKIE['password'];
} else {
    $id = "";
    $pass = "";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="loginUI.css">
    <link rel="stylesheet" href="style.css">
    <title>Modern Login Page</title>
</head>

<body>

    <div class="popup-container" id="forgot-popup">
        <div class="forgot popup">
            <form method="POST" action="forgotpassword.php">
                <h2>
                    <span>RESET PASSWORD</span>
                    <button type="reset" onclick="closeForgotPopup()">X</button>
                </h2>
                <input type="text" placeholder="E-mail" name="email">
                <button type="submit" class="reset-btn" name="send-reset-link">SEND LINK</button>
            </form>
        </div>
    </div>

    <div class="container" id="container">

        <div class="form-container sign-up">
            <form method="POST" action="login_register.php">
                <h1>Create Account</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>or use your email for registeration</span>
                <input type="text" placeholder="Username" name="username">
                <input type="email" placeholder="E-mail" name="email">
                <input type="password" id="paswword" placeholder="Password" name="password" required>
                <button name="register">Sign Up</button>
            </form>
        </div>

        <div class="form-container sign-in">
            <form method="POST" action="login_register.php">
                <h1>Sign In</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>or use your email password</span>
                <input type="text" placeholder="E-mail or Username" name="email_username" value="<?php echo $id ?>">
                <input type="password" placeholder="Password" name="password" value="<?php echo $pass ?>">
                <label style="display:flex;flex-direction:row;align-items:center;margin-bottom:7px;font-size:14px;">
                    <input type="checkbox" name="remember_me" checked style="width:15px;height: 15px; margin: 0;margin-right: 5px;">Remember me
                </label>
                <button type="button" onclick="forgotPopup()">Forgot Password ?</button>
                <button type="submit" name="login">LOGIN</button>
            </form>
        </div>

        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Welcome Back!</h1>
                    <p>Enter your personal details to use all of site features</p>
                    <button class="hidden" id="login">Sign In</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Welcome, Friend!</h1>
                    <p>Enter your personal details to use all of site features</p>
                    <button class="hidden" id="register">Sign Up</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        function forgotPopup(){
            document.getElementById('container').style.display = 'none';
            document.getElementById('forgot-popup').style.display = 'block';
        }

        function closeForgotPopup(){
            document.getElementById('forgot-popup').style.display = 'none';
            document.getElementById('container').style.display = 'block';
        }

    </script>

    <script src="loginUI.js"></script>
</body>

</html>
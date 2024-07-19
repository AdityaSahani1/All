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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User - Login and Register</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h2>Event Fusion Hub</h2>
        <nav>
            <a href="#">HOME</a>
            <a href="#">BLOG</a>
            <a href="#">CONTACT</a>
            <a href="#">ABOUT</a>
        </nav>
        <?php

        if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
            echo "
            <div class='user'>
            $_SESSION[username] - <a href='logout.php'>LOGOUT</a>
            </div>
            ";
        } else {
            echo "
            <div class='sign-in-up'> 
            <a href='loginUI.php'>
            <button type='button'>Getting Started</button> 
        </div> </a>
            ";
        }

        ?>

    </header>
    
    <?php
    if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
        echo "<h1 style='text-align:center; margin-top:200px;'> Welcome to the website - $_SESSION[username]</h1>";
    }
    ?>

</body>

</html>
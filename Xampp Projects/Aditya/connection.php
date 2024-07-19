<?php
define("DB_HOST", "sql313.infinityfree.com");
define("DB_USER", "if0_34869131");
define("DB_PASSWORD", "imiYVFL8l2r4s");
define("DB_NAME", "if0_34869131_user_db");

$con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if(mysqli_connect_error()) {
    error_log("Connection failed: " . mysqli_connect_error());
    echo "<script> alert('Sorry, there was an issue connecting to the database.');</script>";
    exit();
}
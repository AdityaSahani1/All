<?php
$fname=$_REQUEST["fname"];
$lname=$_REQUEST["lname"];
$uname=$_REQUEST["uname"];
$email=$_REQUEST["email"];
$password=$_REQUEST["password"];
$conpasword=$_REQUEST["conpassword"];
$gender=$_REQUEST["gender"];
echo $fname;
echo $lname;
echo $uname;
echo $email;
echo $password;
echo $conpasword;
echo $gender;
//include("email.php");
include("conn.php");
$query="insert into profile(id,fname,lname,uname,email,password,conpass,gender,status) values('','".$fname."','".$lname."','".$uname."','".$email."','".$password."','".$conpasword."','".$gender."','".notactive."')";
mysql_query($query);?>
<!--<script type="text/javascript">
window.location.href= "profile.php";-->
</script>


<?php
session_start();
$emailid=$_POST["textfield"];
$_SESSION['email']=$emailid;
$password=$_POST["textfield2"]; 
  
/*$con = mysql_connect("localhost","root","");
if (!$con)
 {
die('Could not connect: ' . mysql_error());
}
mysql_select_db("documentation", $con);*/
include("conn.php");
$q="SELECT * FROM profile WHERE email='".$emailid."'"; 
$r1=mysql_query($q) ;

while($r2=mysql_fetch_array($r1))
{
$dbpassword=$r2['password'];
$_SESSION["fname"]=$r2['fname'];
//$dbstatus=$r2['status'];
} 	

if(($password==$dbpassword)) //&& $dbstatus=='active'
header("location:display.php");
else
{

  ?>
 <script language="javascript" type="text/javascript">window.location.href="login.php"; alert("please login as a valid user or your profile is not approved");</script><?php 
}
mysql_close($con);
?>

<?php
session_start();
include ("connection.php");
$txtuid=$_REQUEST['txtuid'];
$txtpwd=$_REQUEST['txtpwd'];
$rs = mysql_query("select * from useradmin where userName = '$txtuid'");
if(mysql_num_rows($rs) == 0)
{
	header("Location:index.php?flag=FAILED");
	exit();
}
else
{
	$row=mysql_fetch_array($rs);
	$ucd=$row['userName'];
	$pwd=$row['password'];
	if($txtpwd==$pwd)
	{
		header("Location:reviewdetails.php?flag=success");
		exit();
	}
	//else{
	
		?>
	
	
	
<?php }
?>




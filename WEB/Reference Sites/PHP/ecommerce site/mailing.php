<?php session_start();
     
include ("conn.php");
if(isset($_POST['Submit']))
{
    if($_POST['email']!=null)
	  { 
 
      //$userName=$_POST['user'];
	  $emailId=$_POST['email'];
       //$password=$row['password'];
	   //echo $password;

$query="select password from signup where email='".$emailId."' ";
    
$res=mysql_query($query,$link);
if($res)
     { 
$row=mysql_fetch_array($res);
		 //echo '<br>'."Pwd=".$row['password'];
//--------mail-------------------------------------		
		$to = $emailId;
		$email="support@srishtis.com";
 
$subject = "Personalized mail";

 
$random_hash = md5(date('r', time()));
 
$headers = "From:$email\r\nReply-To:$email ";

 
$headers .= "\r\nContent-Type: text/html; boundary=\"PHP-alt-".$random_hash."\"";
 
//$bodymsg="Name:" . $userName;
//$bodymsg .="<br>";
$bodymsg  ="Thanks for contacting . Please find below your account password ";
$bodymsg .="<br>";
$bodymsg .="<br>";

$bodymsg .="your password is:" . $row['password'] ;




  
  if (mail($to,$subject, $bodymsg,$headers ) )
		 { 
		 
		//'<br>'."Please Check Your email";
		header("Location:forgotpassword.php?status=send&emailId=".$emailId."");
		//echo  '<p class="style1" style="color:#000099;padding-left:325px;padding-top:75px;">Password is sent to your email <a href="index.php"> click here</a> to continue</p>';
		
		 }
	   else  if (mail($to,$subject, $bodymsg,$headers ) )
	     {
		 header("Location:forgotpassword.php?status=notsend&emailId=".$emailId."");
	    //  echo  '<p class="style1" style="color:#000099;padding-left:325px;padding-top:75px;" >Sorry <a href="index.php">click here</a>  to go to the main page</p>';
	     }
	 
		  } 
	   }
   //}
}
?>

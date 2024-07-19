<? include("header3.php");?>
<table width="968" border="0" cellpadding="0" cellspacing="0">     		
<tr>
<td><div align="center" style="font-size: medium; font-weight: bold; color: #FF0000">
  please enter your mail id</div></td>
<td>
  
      <div align="left">
        <input type="text" name="mail" />
    </div></td><td>
    
      <!--<div align="left">
        <input type="submit" value="submit" />
      </div>--></td></tr>
  </table>
<p>
  <?
  if(isset($_POST['submit']))
  {
   $to =$_REQUEST["mail"];
  $idd="select * from profile where  email='".$to."'";
  $re=mysql_query($idd);
  while($ree=mysql_fetch_array($re))
  {
  $pass=$ree['password'];
  }
  
  $to =$_REQUEST["mail"];
$subject = "PASSWORD RECOVEREY";
$message = '
<html>
<table width="641" height="350" border="0" cellpadding="2" cellspacing="7" >
                    <tr>
                      <td width="181"><div align="center">your user name is </div></td>
                      <td colspan="2">'.$name.' </td>
                    </tr>
                    <tr>
                      <td><div align="center" >password</div></td>
                      <td colspan="2">'.$pass.'</td>
                    </tr>
					</table>';
					$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
mail($to,$subject,$message,$headers);
echo "MAIL SENT";
}
?> 
</p>
<p>&nbsp;</p>
<p>&nbsp;</p><div align="center">
        <input type="submit" name="submit" value="SUBMIT" size="59" />
      </div>

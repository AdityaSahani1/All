<? session_start(); ?>
<html>
<head>
<title>Music Review | Forgot Password</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
body {
	background-color: #666;
}
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
}
-->
</style>
<script type="text/javascript">
<!--
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
<script language="javascript" src="./isValidEmail.js"></script>

<SCRIPT language=JavaScript type=text/JavaScript>

function validate()
{
    valid=true;
	 if (document.form1.email.value == "")
{
        alert("Email Id must be entered.");
       valid=false ;
    }
	else if(!isValidEmail(document.form1.email.value) )
	{
	alert("Invalid Email Id.");
	 return false;
	}


return valid;
}


</SCRIPT>
<link rel="stylesheet" href="Common.css" type="text/css" media="screen">
<link rel="stylesheet" href="common_print.css" type="text/css" media="print">
	 <style type="text/css">
<!--
.style2 {color: #666666}
-->

.new {
width:10em;
font-family:Arial;

}

.style3 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}

.style10 {color: #000000}
.style20 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; color: #FFFFFF}
a:link
{
font-family: Arial, Helvetica, sans-serif;
font-size: 12px;
color: #FF0000; 
}

a:hover
{
font-family: Arial, Helvetica, sans-serif;
font-size: 12px;
color: #0099FF; 
}

a:visited
{
font-family: Arial, Helvetica, sans-serif;
font-size: 12px;
color: #666666; 
}
     .style21 {font-size: 14px}
     </style>
</head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" onLoad="MM_preloadImages('images/index_alt_bttns_05.jpg','images/index_alt_bttns_06.jpg','images/index_alt_bttns_07.jpg','images/index_alt_bttns_08.jpg','images/index_alt_bttns_09.jpg')">
<!-- Save for Web Slices (PMR_FINISH_SLICED2.psd) -->
<table width="800" height="1189" border="0" align="center" cellpadding="0" cellspacing="0" id="Table_01">
	<tr>
		<td colspan="2">
			<img src="images/publish_01.jpg" width="36" height="91" alt=""></td>
		<td colspan="5">
			<!--<img src="images/publish_02.jpg" width="728" height="91" alt="">-->
			<div style="width:728; height:91; background-color: #FFFFFF">
			<div align="right" class="style1" style="padding-right:20px; padding-top:70px;">
		<? if($_SESSION['username']!="")
			{ ?>
			<span class="style20"><span class="style2"><span class="style10">Welcome, <? echo $_SESSION['username'];  ?> &nbsp;&nbsp;</span>&nbsp;&nbsp;&nbsp;</span>&nbsp;&nbsp;&nbsp;</span><span class="style10 style3"><a href="signout.php" style="text-decoration:none">Sign out</a></span>		<?  } ?>	</div>
			</div>
			</td>
		<td colspan="2">
			<img src="images/publish_03.jpg" width="36" height="91" alt=""></td>
	</tr>
	<tr>
		<td colspan="9">
			<img src="images/publish_04.jpg" width="800" height="148" alt=""></td>
	</tr>
	<tr>
		<td colspan="3"><a href="publish.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('publish','','images/index_alt_bttns_05.jpg',1)"><img src="images/alt_bttns_05.jpg" name="publish" width="266" height="24" border="0"></a></td>
		<td><a href="browse.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('browse','','images/index_alt_bttns_06.jpg',1)"><img src="images/alt_bttns_06.jpg" name="browse" width="191" height="24" border="0"></a></td>
		<td><a href="venues.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('venues','','images/index_alt_bttns_07.jpg',1)"><img src="images/alt_bttns_07.jpg" name="venues" width="111" height="24" border="0"></a></td>
		<td><a href="bands.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('bands','','images/index_alt_bttns_08.jpg',1)"><img src="images/alt_bttns_08.jpg" name="bands" width="101" height="24" border="0"></a></td>
		<? if(!isset($_SESSION['username']))
		{ ?>
		<td colspan="3">
		
		<a href="login.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('login','','images/index_alt_bttns_09.jpg',1)"><img src="images/index_09.jpg" name="login" width="131" height="24" border="0"></a></td>
		<? } else {
		?>
		<td colspan="3">
		
		<a href="#" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('login','','images/index_alt_bttns_09.jpg',1)"><img src="images/index_09.jpg" name="login" width="131" height="24" border="0"></a></td><? } ?>
	</tr>
	<tr>
		<td colspan="9">
			<img src="images/publish_10.jpg" width="800" height="30" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="images/publish_11.jpg" width="24" height="981" alt=""></td>
		<td colspan="7">
			<!--<img src="images/publish_12.jpg" width="751" height="681" alt="">-->
			<div style=" background-color:#FFFFFF; width:751px; height:981px">
			
		<div align="center" style="padding-top:100px;">
			<div  style="
		margin-top:1px;
	padding:10px;
	">
 <p class="style5 style41">&nbsp;<span class="style7">Your password will be mailed to the email . &nbsp;Please enter email below</span></p>
  <p><span class="story style5 style6" style="vertical-align:top">
    <?
    $sa=$_REQUEST['status'];
	//echo "ddddd".$sa;
	if($sa=="send")
	{
	echo "<p  style='color: #FF0000'>Password is sent to your email. Please check your mail.</p>";
	}
	else if($sa=="notsend")
	{
	echo "<p  style='color: #FF0000'>Sorry. /p>";
	}
	?>
  </span></p>
  <form id="form1" name="form1" method="post" action="mailing.php " onSubmit="return validate ();">
<table width="41%" height="156" border="1" align="center" cellspacing="0" bordercolor="#999999">
<tr>
<td height="154">
<div id="welcome" class="post">
		  
			
          <div style="vertical-align:top" class="story">
            <table width="325" height="111" align="center" border="0">
              <tr><td width="272" height="87"><table width="343" height="56" align="center" border="0">
              <tr><td width="337" height="52"><table width="324" height="44" align="center" border="0">
              <!--<tr>
    <td width="122" align="left"><strong>Username: </strong></td>
    <td width="223"><input type="text" id="userName" class="new" name="userName" />    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>-->
              <tr>
                <td width="82" height="40" align="left"><span class="style5"><strong>E-mail : </strong></span></td>
                <td width="196"><input name="email" type="text" id="email" size="30" />                </td>
              </tr>
              
            </table></td>
              </tr>
            </table>
                                     
                  
                  <div align="center">
                    <input type="submit"  class="buttonSubmit" value="Submit" name="Submit" />
                  </div></td>
              </tr>
              <tr>
                <td height="18">&nbsp;</td>
              </tr>
          </table>
            </div>
	  </div></td>
    </tr>
    </table>
<p>&nbsp;</p>
</form>
            </div>
			
		
			  </div>
		  </div>
			
			
			
			
			
	  </td>
		<td>
			<img src="images/publish_13.jpg" width="25" height="981" alt=""></td>
	</tr>
	<tr>
		<td colspan="9">
			<img src="images/publish_14.jpg" width="800" height="214" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="images/spacer.gif" width="24" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="12" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="230" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="191" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="111" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="101" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="95" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="11" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="25" height="1" alt=""></td>
	</tr>
</table>
<!-- End Save for Web Slices -->
</body>
</html>
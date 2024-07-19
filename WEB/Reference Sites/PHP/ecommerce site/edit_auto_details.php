<?php 
session_start();
include("connection.php");
$id=$_GET['id'];
//$_SESSION['id']=$idd;

/*$_SESSION['color']=$_POST['color'];
$_SESSION['size']=$_POST['size'];
$_SESSION['width']=$_POST['width'];

$_SESSION['price']=$_POST['price'];
$_SESSION['sex']=$_POST['sex'];
$_SESSION['brand']=$_POST['brand'];
$color=$_SESSION['color'];
$size=$_SESSION['size'];
$width=$_SESSION['width'];
$price=$_SESSION['price'];
$sex=$_SESSION['sex'];
$brand=$_SESSION['brand'];//echo "id is::".$id;
*/





$query="SELECT * FROM ecommerce where id='".$id."'";
		   $rs=mysql_query($query);
		   while($res1=mysql_fetch_array($rs))
		   {
		   $idd=$res1['id'];
						   $product=$res1['product'];
						   $size=$res1['size'];
						   $price=$res1['price'];
						   $color=$res1['color'];
						   $description=$res1['description'];
						   $catagory=$res1['catagory'];
						    $style=$res1['style'];
						   $brand=$res1['brand'];
						   $count=$res1['count'];
						   $image=$res1['image'];
		   
}
		   //$saledate=$row['auto_saledate'];
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Welcome to Admin</title>
<link href="css/stylesheet.css" rel="stylesheet" type="text/css" media="all" />
<style type="text/css">
<!--
.style1 {color: #333333}
.style3 {color: #FFFFFF}
-->
</style>
    <script type="text/javascript" src="genre.js" ></script>

	<script type="text/javascript" src="city.js" ></script>

	<script type="text/javascript" src="www.js" ></script>

	<script language="JavaScript" src="calendar_us.js"></script>
   <link rel="stylesheet" href="calenda.css">
	<script type="text/javascript">
	var name = new Array();
	name[0]= "images/star2.gif";
	if(document.images)
	{
		var ss = new Image();
		ss.src = name[0];		
	}			
</script>
<Script language=javascript>
var flag1=0;

function selstar(val)
{
//alert(flag1);
	if(flag1==0)
	{
		for(var x=1;x<=val;x++)
		{
			document['i'+x].src="images/star2.gif";
		}
	}
}

function remstar(val)
{
//alert(flag1);
	if(flag1==0)

	{
		for(var x=1;x<=val;x++)
		{
			document['i'+x].src="images/star1.gif";
		}
	}
}

function setrate(val)
{
//alert(flag1);
flag1=1;
	for(var x=1;x<=val;x++)
	{
		document['i'+x].src="images/star2.gif";
	}
	
	if(flag1==1)
	{	
		for(var x=1;x<=val;x++)
		document['i'+x].src="images/star2.gif";
		
		for(var x=val+1;x<=5;x++)
		document['i'+x].src="images/star1.gif";
		
	}
document.form.ratingband.value=val;
}

var flag2=0;
function sel2(val2)
{
	if(flag2==0)
	{
	for(var y=1;y<=val2;y++)
	   {
		document['j'+y].src="images/star2.gif";
	   }
	}
}
function rem2(val2)
{
	if(flag2==0)
	{
	for(var y=1;y<=val2;y++)
	  {
		document['j'+y].src="images/star1.gif";
	  }
	}
}

function set2(val2)
{
flag2=1;
for(var y=1;y<=val2;y++)
	{
		document['j'+y].src="images/star2.gif";
	}
	
if(flag2==1)
	{	
		for(var y=1;y<=val2;y++)
		document['j'+y].src="images/star2.gif";
		
		for(var y=val2+1;y<=5;y++)
		document['j'+y].src="images/star1.gif";
		
	}
document.form.ratingvenue.value=val2;
      }
     </script>
</head>

<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="center" valign="top" class="body_bg"><table width="780" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td align="center" valign="top"><table width="758" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td align="center" valign="top" class="main_table"><table width="779" border="0" align="center" cellpadding="0" cellspacing="0" class="inside_table">
              <tr>
                <td width="777" align="left" valign="top"><table width="768" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="768" align="left" valign="top" class="header-image"></td>
                  </tr>
                  <tr>
                    <td align="left" valign="top"><table width="756" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td width="1" align="left" valign="top"><img src="images/menu_left.gif" alt="" width="1" height="34" /></td>
                          <td align="left" valign="top" class="menu_bg"><table width="350" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td width="107" height="34" align="center" valign="middle"><a href="home.php" class="menu_link" style="color:#FFFFFF;">Homepage</a></td>
                                <td width="146" align="center" valign="middle">&nbsp;</td>
                                <td width="32" align="center" valign="middle">&nbsp;</td>
                                <td width="32" align="center" valign="middle">&nbsp;</td>
                                <td width="33" align="center" valign="middle">&nbsp;</td>
                              </tr>
                          </table></td>
                          <td width="120" align="left" valign="top"><a href="signout.php" style="text-decoration:none"><img src="images/menu_right.gif" alt="" width="120" height="34" border="0" /></a></td>
                        </tr>
                    </table></td>
                  </tr>
                </table></td>
              </tr>
            </table></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td align="center" valign="top"><table width="758" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td align="center" valign="top" class="main_table"><table width="756" border="0" cellpadding="0" cellspacing="0" class="inside_table">
              <tr>
                <td align="left" valign="top"><table width="756" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td align="left" class="body_padding"><table width="736" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td width="180" align="left" valign="top">&nbsp;</td>
                          <td width="10" align="left" valign="top">&nbsp;</td>
                          <td align="left" valign="top">
                          
                          
                          <form name="form" id="form" action="edit_details_complete.php" method="post" enctype="multipart/form-data" onSubmit="return validate();">
                          <input type="hidden" name="auto_id" value="<?php echo $idd; ?>" />
                            <table width="620"  border="0">
               			<tr>
                			<td width="66" align="right"><span class="style3">&nbsp;</span></td>
         					<td width="270">&nbsp;</td>
         					<td width="270">&nbsp;</td>
               			</tr>
               			<tr>
                			<td align="right">&nbsp;</td>
         					<td>&nbsp;</td>
         					<td><script language="javascript">									
									new tcal ({'formname': 'form', 'controlname': 'sdate'});
								</script>							</td>
      					</tr>
	  					<tr>
              				<td align="right"><span class="style3">&nbsp;</span></td>
		  					<td>&nbsp;</td>
		  					<td>&nbsp;</td>
	  					</tr>
	  					<tr>
              				<td align="right"><span class="style3">Product Id&nbsp;</span></td>
        					<td><input type="text" id="line" name="product" class="formField" tabindex="1" value="<?php echo $product; ?>" /></td>
        					<td>&nbsp;</td>
      					</tr>
	  					<tr>
                			<td align="right"><span class="style3"><span class="alert style3">* </span>size&nbsp;
                			    </div>
                			</span></td>
        					<td><input type="text" id="bandname" name="size" value="<?php echo $size; ?>" class="formField"   tabindex="5" /></td>
        					<td>&nbsp;</td>
      					</tr>
	   					<tr>
               				<td align="right"><span class="alert style3">* </span><span class="style3">price&nbsp;</span></td>
        					<td><input type="text" id="city2" name="price" value="<?php echo $price; ?>" class="formField" tabindex="8" /></td>
        					<td>
				
			   					<p>&nbsp;</p>			   					</td>
      					</tr>
	  					<tr>
              				<td align="right"><span class="alert style3">* </span><span class="style3">color&nbsp;</span></td>
        					<td><input type="text" id="venue" name="color" class="formField" value="<?php echo $color; ?>" tabindex="10" /></td>
        					<td></span></td>
						</tr>	
  						<tr>
    						<td align="right" valign="top"><span class="style3">description&nbsp;</span></td>
							 
							
    						<td valign="top"><input type="text" id="venue2" name="description" class="formField" value="<?php echo $description; ?>" tabindex="10" /></td>
    						<td valign="top"><div></div>										  </td>
  						</tr>					
               			<tr>
                			<td align="right" valign="top">catagory</td>
                            <td><input type="text" id="venue3" name="catagory" class="formField" value="<?php echo $catagory; ?>" tabindex="10" /></td>
                            <td>&nbsp;</td>
               			</tr>
                        
                        
                        
                        
                        
                        
                        
               				<tr><td align="right"><span class="alert style3">* </span><span class="style3">style&nbsp;</span></td>
        					  <td><input type="text" id="city3" name="style" value="<?php echo $style; ?>" class="formField" tabindex="8" /></td>
        					  <td>
				
			   					<p>&nbsp;</p>			   					</td>
      					</tr>
                        
    
               				<tr><td align="right"><span class="alert style3">* </span><span class="style3">brand&nbsp;</span></td>
        					  <td><input type="text" id="city4" name="brand" value="<?php echo $brand; ?>" class="formField" tabindex="8" /></td>
        					  <td>
				
			   					<p>&nbsp;</p>			   					</td>
      					</tr> 
                        
                        
               				<tr><td align="right"><span class="alert style3">* </span><span class="style3">count&nbsp;</span></td>
        					  <td><input type="text" id="city5" name="count" value="<?php echo $count; ?>" class="formField" tabindex="8" /></td>
        					  <td>
				
			   					<p>&nbsp;</p>			   					</td>
      					</tr>
                        
                        
                      
               				<!--tr><td rowspan="2" align="right"><span class="alert style3">*image</span></td>
        					  <td height="34"><input type="text" id="city" name="image" value="<?php echo $image; ?>" class="formField" tabindex="8" /></td>
        					  <td>
				
			   					<p>upload<input type="file"</p>			   					</td>
      					</tr>    <tr>
      					      <td>&nbsp;</td>
      					      <td>&nbsp;</td>
    					      </tr-->                   
						<tr>
						
                			<td align="right" valign="top">&nbsp;</td>
							<td valign="top">&nbsp;</td>
							<td valign="top"><div></div>										  </td>
  						</tr>
  						<tr>
                			<td align="right" valign="top"><span class="style3">&nbsp;</span></td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
  						</tr>
					</table>
					
					<div style="padding-left:35px;">						
						<p><img src="images/silverPixel.gif" width="610" height="1" alt="" align="center" vspace="5" /></p>
						<p><img src="images/silverPixel.gif" width="610" height="1" alt="" align="center" vspace="5" /></p>
												  					
						<div style="padding-right:100px; padding-top:10px; text-align:right;">
							<input type="submit"  class="buttonSubmit" value="Edit Your Details" name="Submit" tabindex="36" />
						</div>
					</div>
				</form>


</td>
                        </tr>
                    </table></td>
                  </tr>
                </table></td>
              </tr>
            </table></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td align="left" valign="top"><table width="796" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="22" align="left" valign="top"><img src="images/footer_left.gif" alt="" width="22" height="29" /></td>
            <td width="602" align="left" valign="middle" bgcolor="#505050" style="border-top:1px solid #CC0000; padding-left:12px;"><br />
              © Srishi Innovative Computer Systems.</td>
            <!--
We request you retain the full web design copyright notice below including the link to http://www.sarkis-webdesign.com
This not only gives respect to the large amount of time given freely by the designer but also helps build interest, traffic and use of template. If you cannot (for good reason) retain the full design copyright we request you at least leave in place the image Web designer - Sarkis, with linked to http://www.sarkis-webdesign.com. Good luck!

Web designer Sarkis
// -->
            <td width="172" align="left" valign="top"><a href="http://www.sarkis-webdesign.com" title="Website Design" target="_blank"><img src="images/website-design.gif" alt="Website Design" width="175" height="29" border="0" /></a></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>

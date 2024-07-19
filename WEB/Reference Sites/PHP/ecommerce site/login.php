<?php
session_start();
include("header3.php");?>
 <script type="text/javascript">
 function sendPword() {	
            if (document.getElementById("textfield").value == "") {
                alert("Please enter your email address");
                document.getElementById("textfield").focus();
            }
            else if (confirm("Would you like us to send the password to the email you provided?")) {
                document.form1.action ="mailing.php";
                document.form1.submit();
            }
        }
</script>
<style type="text/css">
<!--
.style1 {
	color: #FF0000;
	font-size: 12px;
	font-weight: bold;
}
.style2 {color: #FF0000}
.style4 {color: #00FF00}
.style5 {color: #666666; }
.style6 {font-size: 12px; font-weight: bold; color: #000000;}
-->
</style>

<form name="form1" action="userlogindbchk.php" method="post"  onsubmit="return validate()">
 
  
    <!--<div align="center" style="position:absolute; top:184px; left:278px; width: 473px;">-->
  

  <table width="23%" border="0" bordercolor="#000000" align="center" style="position:absolute; left: 297px; top: 229px; top:150px; left:278px; width: 473px;"><tr><td></td><td><div align="left" class="style1">LOGIN</div></td>
  </tr>
  
<tr>

      <td width="14%" height="44" align="right"><div align="center" ><strong>Email ID </strong></div></td>
<td width="86%">
                
                  <input type="text" name="textfield" size="20"/>
              </td>
            </tr>
            <tr>
              <td height="41" valign="middle"><div align="center" class="style6">Password</div></td>
<td>
                
                  <input name="textfield2" type="password" size="20"/>
              </td>
            </tr>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <tr>
              <td height="33">&nbsp;</td>
              <td>
                <div align="left">
                  <input type="submit" name="Submit" value=" Submit " />
                </div></td>
            </tr>
        <tr><td></td><td><!--<div style="padding-top:10px; padding-bottom:5px; padding-left:35px;">-->&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <div align="left" class="style1">password recovery??                                    </div>
        <!--</div>--></td></tr>
  <tr><td></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;          <div align="left"><a href="mail.php" class="style5">fogot your passord</a></div></td></tr> </table><!--</div>-->
  <table width="27%" height="415" border="0" align="left" bordercolor="#000000">
<tr>
              <td width="14%" height="44" align="right"><div align="center" class="style2 style4"><!--Email ID--> </div></td>
              <td width="86%">
                
                  <!--<input type="text" name="textfield" size="20"/>-->
              </td>
    </tr>
            <tr>
              <td height="41" valign="middle"><div align="center" class="style5"><!--Password--></div></td>
              <td>
                
                  <!--<input name="textfield2" type="password" size="20"/>-->
              </td>
            </tr>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <tr>
              <td height="33">&nbsp;</td>
              <td>
                <div align="left">
                  <!--<input type="submit" name="Submit" value=" Submit " />-->
                </div></td>
            </tr>
        <tr><td><div style="padding-top:10px; padding-bottom:5px; padding-left:35px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <!--password recovery??-->
          </div></td></tr>
  <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;          <!--<input type="button" value="Email my Password " class="formField" onClick="sendPword();" />--></td></tr> </table>
          
</form>
                                <?php
								$email=$_POST['textfield'];
								$_SESSION['email']=$email;?>
								
								
								
								 </LI>
            </UL>
          </DIV>			
        </DIV>
      </DIV>
      <!--/DO NOT REMOVE/-->
      <!-- End SiteCatalyst code version: H.19.3. -->
<DIV id="footer">
  <DIV class="navigation"><!-- SEO Implementation url rewriting start -->
    <!-- SEO Implementation url rewriting end--> 
    <UL class="link-list">
          <!-- SEO Implementation url rewriting start -->
	</UL>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<P class="instruction"></P>
  </DIV>
</DIV>
</BODY></HTML>
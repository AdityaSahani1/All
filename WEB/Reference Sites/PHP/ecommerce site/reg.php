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
  

 
<table border="0" cellspacing="0" cellpadding="0" align="center"> 
						<tr> 
							<td> 
								<table border="0" cellspacing="0" cellpadding="0"> 
									<tr> 
										<td class="sectionTitle" style="font-size:14px"> 
											<b>CREATE AN ACCOUNT WITH METRO SHOES. </b> 
										</td> 
									</tr> 
									<tr> 
										<td style="height: 10px"> 
										</td> 
									</tr> 
									<tr> 
										<td class="hilite"> 
											*Required Fields</td> 
									</tr> 
								</table> 
								 <table border="0" cellspacing="0" cellpadding="0"> 
									
									<tr> 
										<td style="height: 5px"> 
										</td> 
									</tr> 
									<tr> 
										<td> 
											<b>First Name* </b> 
										</td> 
										<td style="padding-left: 20px"> 
										</td> 
										<td> 
											<b>Last Name* </b> 
										</td> 
									</tr> 
									<tr> 
										<td style="height: 5px"> 
										</td> 
									</tr> 
									<tr> 
										<td> 
											<input name="fname" type="text" id="ctl00_cphPageContent_txtFirstName" class="textBox" style="width:200px;" /> 
											
										</td> 
										<td style="padding-left: 20px"> 
										</td> 
										<td> 
											<input name="lname" type="text" id="ctl00_cphPageContent_txtLastName" class="textBox" style="width:200px;" />
									</tr> 
									<tr> 
										<td style="height: 5px"> 
										</td> 
									</tr> 
									<tr> 
										<td> 
											<b>User Name* </b> 
										</td> 
										<td style="padding-left: 20px"> 
										</td> 
										<td> 
											<b>Email Address * </b> 
										</td> 
									</tr> 
									<tr> 
										<td style="height: 5px"> 
										</td> 
									</tr> 
									<tr> 
										<td> 
											<input name="uname" type="text" maxlength="255" id="ctl00_cphPageContent_txtLogin" class="textBox" style="width:200px;" />
										</td> 
										<td style="padding-left: 20px"> 
										</td> 
										<td> 
											<input name="email" type="text" maxlength="255" id="ctl00_cphPageContent_txtEmailID" class="textBox" style="width:200px;" /> 
											</td> 
									</tr> 
									<tr> 
										<td style="height: 5px"> 
										</td> 
									</tr> 
									<tr> 
										<td> 
											<b>Create Password* </b> 
										</td> 
										<td style="padding-left: 20px"> 
										</td> 
										<td> 
											<b>Re-type Password* </b> 
										</td> 
									</tr> 
									<tr> 
										<td style="height: 5px"> 
										</td> 
									</tr> 
									<tr> 
										<td> 
											<input name="password" type="password" maxlength="15" id="ctl00_cphPageContent_txtNewPassword" class="textBox" style="width:200px;" /> 
											</td> 
										<td style="padding-left: 20px"> 
										</td> 
										<td> 
											<input name="conpassword" type="password" maxlength="15" id="ctl00_cphPageContent_txtConfirmPassword" class="textBox" style="width:200px;" />
										</td> 
									</tr> 
									<tr> 
										<td> 
											
										</td> 
									</tr> 
									<tr> 
										<td style="height: 5px"> 
										</td> 
									</tr> 
									<tr> 
										<td colspan="3" style="vertical-align: bottom;"> 
											<b>Gender :
												<input id="ctl00_cphPageContent_rbMale" type="radio" name="gender" value="rbMale" checked="checked" /> 
												Male
												<input id="ctl00_cphPageContent_rbFemale" type="radio" name="gender" value="rbFemale" /> 
												Female </b> 
										</td> 
									</tr> 
									<tr> 
										<td style="height: 5px"> 
										</td> 
									</tr>
                                     <tr>
                      <td height="24" valign="top"><span class="style11 style23 style26"><strong><span class="style5 style22 ">*</span></strong>Verification Code</span></td>
          <td valign="top">:</td>
          <td>
            <iframe style="width:145px; height:75px;" src="capcha.php"></iframe><br />
            
            <input type="text" name="user_security_code" id="user_security_code"  class="new" /></td>
        </tr>
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                     
									<tr> 
										<td colspan="3"> 
											<b> 
												<input id="ctl00_cphPageContent_chkStatus" type="checkbox" name="ctl00$cphPageContent$chkStatus" /> 
												I have read and accept all <a id="aTermsConditions" href="javascript:void(0)" onclick="window.open('TermsConditions.php','','width=600,height=580,scrollbars=yes')"

													style="color: #CF0E15; text-decoration: none" onmouseover="SetUnderLine();" onmouseout="RemoveUnderLine();"> 
													Terms &amp; Conditions</a></b></td> 
									</tr> 
									<tr> 
										<td style="height: 5px"> 
										</td> 
									</tr> 
									<tr> 
										<td colspan="3"> 
											 
										</td> 
									</tr> 
									<tr> 
										<td style="height: 25px"> 
										</td> 
									</tr> 
                                   <tr> <td><input type="reset" class="buttonImg" name="reset" id="reset" value="Reset" /> </td>
               <td>         <input type="submit"  class="buttonSubmit" value="Submit" name="Submit" /></td></tr>
								</table></form>	


<!--</div>-->
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
	
	<P class="instruction"></P>
  </DIV>
</DIV>
</BODY></HTML>
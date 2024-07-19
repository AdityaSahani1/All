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


<form name="form1" method="post">
<input type="hidden" name="pid" />
<input type="hidden" name="command" />
	<div style="margin:0px auto; width:600px;" >
    <div style="padding-bottom:10px">
    	<h1 align="center">&nbsp;</h1>
    	<h1 align="center">&nbsp;</h1>
    	<h1 align="center">Your Shopping Cart</h1>
    	<input type="button" value="Continue Shopping" onClick="window.location='index2.php'" />
    </div>
    	<div style="color:#F00"><?=$msg?></div>
    	<p>&nbsp;</p>
    	<p>&nbsp;</p>
    	<p>&nbsp;</p>
    	<p>&nbsp;</p>
    	<p>&nbsp;</p>
    	<p>&nbsp;</p>
    	<p>&nbsp;</p>
    	<table border="0" cellpadding="5px" cellspacing="1px" style="font-family:Verdana, Geneva, sans-serif; font-size:11px; background-color:#E1E1E1" width="100%">
    	<?
			if(is_array($_SESSION['cart'])){
            	echo '<tr bgcolor="#FFFFFF" style="font-weight:bold"><td>Serial</td><td>Name</td><td>Price</td><td>Qty</td><td>Amount</td><td>Options</td></tr>';
				$max=count($_SESSION['cart']);
				for($i=0;$i<$max;$i++){
					$pid=$_SESSION['cart'][$i]['productid'];
					$q=$_SESSION['cart'][$i]['qty'];
					$pname=get_product_name($pid);
					if($q==0) continue;
			?>
            		<tr bgcolor="#FFFFFF"><td><?=$i+1?></td><td><?=$pname?></td>
                    <td>$ <?=get_price($pid)?></td>
                    <td><input type="text" name="product<?=$pid?>" value="<?=$q?>" maxlength="3" size="2" /></td>                    
                    <td>$ <?=get_price($pid)*$q?></td>
                    <td><a href="javascript:del(<?=$pid?>)">Remove</a></td></tr>
            <?					
				}
			?>
				<tr><td><b>Order Total: $<?=get_order_total()?></b></td><td colspan="5" align="right"><input type="button" value="Clear Cart" onClick="clear_cart()"><input type="button" value="Update Cart" onClick="update_cart()"><input type="button" value="Place Order" onClick="window.location='billing.php'"></td></tr>
			<?
            }
			else{
				echo "<tr bgColor='#FFFFFF'><td>There are no items in your shopping cart!</td>";
			}
		?>
        </table>
    </div>
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
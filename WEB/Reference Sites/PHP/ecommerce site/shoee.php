<?php 
session_start();
include("header4.php");

include("includes/functions.php");
if($_REQUEST['command']=='add' && $_REQUEST['productid']>0){
		$pid=$_REQUEST['productid'];
	
		addtocart($pid,1);?>
	<script type="text/javascript">window.location.href="shoppingcart.php";</script>
		<? exit();
	}

include("conn.php");
$id=$_GET['id'];
?>
<?php 
//include("conn.php");
$q="select * from subtrend where id='$id'";
$rew=mysql_query($q);
while($row=mysql_fetch_array($rew))
{
 $st="upload/".$row['image'];
 echo"<div align='left'>";
 echo "<img src =$st width=150 height=150>";echo"</div>";
 }?>
<style type="text/css">
<!--
.style1 {font-size: 12px}
.style3 {color: #990000}
.style4 {color: #FF0000}
-->
</style>
 <script language="javascript">
	function addtocart(pid){
		document.form1.productid.value=pid;
		document.form1.command.value='add';
		document.form1.submit();
	}
</script><form name="form1">
	<input type="hidden" name="productid" />
    <input type="hidden" name="command" />
</form>
<div align="center" style="position:absolute; top:448px; left:410px;">
<table width="256" border="0" valign="top">
  <tr>
   <td><div align="center" class="style4" >
     <div align="left">DESCRIPITION</div>
   </div></td>
<?

$image="select * from subtrend where id='$id' ";
$idd=mysql_query($image);
while($row=mysql_fetch_array($idd))
{?>

<td><div align="center">
  <p>&nbsp;</p>
  <?php echo $row['description'];?></div></td></tr>

 
<tr><td><div align="left">choose a colour</div></td>

<td><div align="center">
  <p>&nbsp;    </p>
  <p>
    <select name="colour">
      <option>black</option>
      <option>blue</option>
      <option>red</option>
    </select>
    </p>
</div></td></tr>
<tr><td><div align="left">choose a size</div></td>

<td><div align="center">
  <p>&nbsp;    </p>
  <p>
    <select name="colour">
      <option>4</option>
      <option>5</option>
      <option>6</option>
    </select>
    </p>
</div></td></tr>
<tr><td></td>
<td><div align="center">
  <p>&nbsp;    </p>
  <p>
    <input type="button" value="Add to Cart" onClick="addtocart(<?=$row['id']?>)" />
    </p><? }?>
</div></td></tr></table></div>
          <!--<div align="center" style="position:absolute; top:417px; left:0px;">-->
  <table align="left"><tr><td valign="top">NAME</td>

<td><span class="style3 style1">PRICE</span></td>

</tr>

<?

$image="select * from subtrend where id='$id' ";
$idd=mysql_query($image);
while($row=mysql_fetch_array($idd))
{?>
<tr>
<td><?php echo $row['name'];?></td>

<td><?php echo $row['price'];?></td>

 <? }?>
 </tr></table><!--</div>-->




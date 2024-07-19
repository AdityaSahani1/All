<?php 
include("header4.php");
include("conn.php");
$id=$_GET['id'];?>




<?php 
//include("conn.php");
$q="select * from ecommerce where id='$id'";
$rew=mysql_query($q);
while($row=mysql_fetch_array($rew))
{
 $st="upload/".$row['image'];
 echo"<div align='left'>";
 echo "<img src =$st width=150 height=300>";echo"</div>";
 }?> 
 
<style type="text/css">
<!--
.style1 {
	font-size: 16px;
	font-weight: bold;
}
.style3 {font-size: 14px; font-weight: bold; }
-->
</style>
 <div align="center">gggg</div>
<table><tr><h3><td><span class="style3">NAME</span></td>
</h3><td><span class="style1"><!--size--></span></td>
<td><span class="style3">PRICE</span></td>
<td><span class="style3">DESCRIPITION</span></td>
</tr>

<?

$image="select * from ecommerce where id='$id' ";
$idd=mysql_query($image);
while($row=mysql_fetch_array($idd))
{?>
<tr>
<td><?php echo $row['name'];?></td>
<td><?php //echo $row['size'];?></td>
<td><?php echo $row['price'];?></td>

<td><?php echo $row['description'];?></td></tr></table>


 <? }?>



<?

//$image="select * from ecommerce where id='$id' ";
//$idd=mysql_query($image);
//while($row=mysql_fetch_array($idd))
//{?>




















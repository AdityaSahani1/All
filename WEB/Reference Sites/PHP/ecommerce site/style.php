<?php 
include("header3.php");
include("conn.php");
$id=$_GET['id'];?>




<?php 
//include("conn.php");
$q="select * from style s,ecommerce e where (s.style=e.style )and( s.id=$id)";
$rew=mysql_query($q);
while($row=mysql_fetch_array($rew))
{
 $st="upload/".$row['image'];
 echo"<div align='left'>";
 echo "<img src =$st width=100 height=100>";echo"</div>";
 }?> 
<table><tr><h3><td>name</td></h3><td>size</td><td>price</td><td>colour</td><td>description</td></tr>
<?

$image="select * from style s,ecommerce e where (s.style=e.style) and( s.id=$id)";
$idd=mysql_query($image);
while($row=mysql_fetch_array($idd))
{?>
<tr>
<td><?php echo $row['name'];?></td>
<td><?php echo $row['size'];?></td>
<td><?php echo $row['price'];?></td>
<td><?php echo $row['color'];?></td>
<td><?php echo $row['name'];?></td></tr>



















<? 

}?>
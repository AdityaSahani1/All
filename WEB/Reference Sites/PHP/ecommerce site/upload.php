<?php 
include("conn.php");
$q="sselect * from ecommerce where catagory='women'";
$rew=mysql_query($q);
while($row=mysql_fetch_array($rew))
{
 $st="upload/".$row['image'];
 
 echo"img src =$st width=100 height=100>";
 }?> 















<?php for($i=0;$i<2;$i++)
{
  ?> <tr>
   <? for($j=0;$j<3;$j++)
   {
   ?>
        <td>
                <table>
                    <tr> 
                         <td align="left" valign="top" >
                             <a href="#"> 
                              <img src="upload/" width="88" height="88" border="0" class="pic-bod" />
                              </a>
                          </td>
                    </tr>
                    <tr>
                           <td align="left" valign="top" >
                             <a href="#" class="link-ar">
                               <? echo $t["profile_name"]?>  
                             </a>
                           </td>
                    </tr>
                 </table> 
             </td>

      <?
   } 
   ?>
   </tr>
<? }
?>

<?php 
				$img="select * from ecommerce where catagory='women'";
				$im=mysql_query($img);
				while($ree=mysql_fetch_array($im))
				{?><td><?
				

 $st="upload/".$ree['image'];?>
 
 
 
 <a href="shoe1.php?id=<?php echo $ree[0];?>"><?php echo"<img src =$st width=100 height=100>"?>;
<?
 }?><!-- <table><tr><h3><td>name</td></h3><td>size</td><td>price</td><td>colour</td><td>description</td></tr>-->
<?
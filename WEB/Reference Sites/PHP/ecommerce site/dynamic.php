<?php 
include("conn.php");
$q="select * from ecommerce where catagory='women'";
$rew=mysql_query($q);
while($row=mysql_fetch_array($rew))
{
 $st="upload/".$row['image'];
 echo $st;
  for($i=0;$i<2;$i++)
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
                              <img src="$st" width="88" height="88" border="0" class="pic-bod" />
                              </a>
                          </td>
                    </tr>
                    <tr>
                           <td align="left" valign="top" >
                             <a href="#" class="link-ar">
                               <? //echo $t["profile_name"]?>  
                             </a>
                           </td>
                    </tr>
                 </table> 
             </td>

      <?
   } 
   ?>
   </tr>
<? }}
?>

















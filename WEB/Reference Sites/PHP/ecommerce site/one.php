<?php
session_start();
$_SESSION['product']=$_POST['product'];
$_SESSION['size']=$_POST['size'];
$_SESSION['price']=$_POST['price'];

$_SESSION['color']=$_POST['color'];
$_SESSION['description']=$_POST['description'];
$_SESSION['catagory']=$_POST['catagory'];
$_SESSION['style']=$_POST['style'];

$_SESSION['brand']=$_POST['brand'];
$_SESSION['count']=$_POST['count'];
$_SESSION['image']=$_POST['image'];

$product=$_SESSION['product'];
$size=$_SESSION['size'];
$price=$_SESSION['price'];
$color=$_SESSION['color'];
$description=$_SESSION['description'];
$catagory=$_SESSION['catagory'];
$style=$_SESSION['style'];
$brand=$_SESSION['brand'];
$count=$_SESSION['count'];
$image=$_SESSION['image'];

include("connection.php");
$filename=basename($_FILES["resume"]["name"]);
$ext=substr($filename,strrpos($filename,'.')+1);

if(($ext=='txt')||($ext=='doc')||($ext=='jpg'))
{
if($_FILES["resume"]["error"]>0)
{
 echo "file not uploaded successfully!!!";
}
else
{
 move_uploaded_file($_FILES["resume"]["tmp_name"],"upload/".$_FILES["resume"]["name"]);
}
}
else
{
?>
<script language="javascript">
alert ("wrong file!!! Please upload correct file again!!!")
</script>
<?php
}?>







<?

mysql_query("insert into ecommerce values('','".$product."','".$size."','".$price."','".$color."','".$description."','".$catagory."','".$style."','".$brand."','".$count."','".$filename."')") or die(mysql_error());

 
 
?>


<? $id=$_REQUEST['id'];
//$status=$_REQUEST['txtstatus'];
include("connection.php");
$query="delete from userdetails where id='".$id."'";
mysql_query($query);
 header("Location:home.php");
 ?>


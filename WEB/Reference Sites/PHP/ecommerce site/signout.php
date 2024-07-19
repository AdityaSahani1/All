<?php 
session_start();
session_destroy();
//session_unregister('so_cuserId');
header("Location:index.php");
?>

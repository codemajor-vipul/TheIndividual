<?php 
session_start();
$SESSION['email']='';
header("location: https://localhost/theindividual.php");
session_destroy();

?>
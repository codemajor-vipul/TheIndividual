<?php 
$local='127.0.0.1';
$db='test';
$user='root';
$password='';
$conn= mysqli_connect($local,$user,$password,$db) or die('couldn\'t connect');
$p="ALTER TABLE `posts` ADD COLUMN `createTime` varchar(20)";
$conn->query($p);
?>
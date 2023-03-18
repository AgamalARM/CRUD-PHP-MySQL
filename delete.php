<?php
require_once('config.php');

$id = $_GET['id'];
$sql = "DELETE FROM `users` WHERE `users`.`id` = '$id' ";
$result = $conn->query($sql);


header("location: index.php");
?>


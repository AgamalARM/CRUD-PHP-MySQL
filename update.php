<?php
require_once('config.php');

if ($_POST['update']) {
    $id = $_POST['user_id'];
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    $sql = "UPDATE `users` SET `firstname` = '$first_name ', `lastname` = '$last_name', `email` = '$email', `password` = '$password' , `gender` = '$gender' WHERE `users`.`id` = $id";
    $conn->query($sql);
}



header("location: index.php");

<?php

require_once "connect.php";
require_once "update2.php";

$id = $_POST['id'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];

mysqli_query($connect, "UPDATE `formpeople` 
SET `firstname` = '$firstname', `lastname` = '$lastname', `email` = '$email', `password` = '$password' 
WHERE `formpeople`.`id` = '$id'");

?>




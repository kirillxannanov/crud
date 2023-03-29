<?php

require_once "connect.php";

$del_id = $_GET['id'];
$del = mysqli_query($connect, "DELETE FROM `formpeople` WHERE `formpeople`.`id` = '$del_id'");

header('Location: /select.php');




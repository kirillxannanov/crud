<?php

require_once "connect.php";


$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];


if ($firstname && $lastname && $email && $password) {
    $result = mysqli_query($connect,"INSERT INTO `formpeople` (`id`, `firstname`, `lastname`, `email`, `password`) 
                VALUES (NULL, '$firstname', '$lastname', '$email', '$password')");
}




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="creat.php" method="post">
    <label>
        FirstName
        <input type="text" name="firstname"  required>
    </label>

    <br>

    <label>
        LastName
        <input type="text" name="lastname" required>
    </label>

    <br>

    <label>
        Email
        <input type="email" name="email" required>
    </label>

    <br>

    <label>
        Password
        <input type="password" name="password" required>
    </label>

    <br>

    <input type="submit" name="submit">

    <a href="select.php">table</a>
</form>
</body>
</html>

<?php

require_once "connect.php";


$upd_id = $_GET['id'];
$upd = mysqli_query($connect,"SELECT * FROM `formpeople` WHERE `id`= '$upd_id'");
$upd = mysqli_fetch_assoc($upd);




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title2</title>
</head>
<body>
<form action="update.php" method="post">

    <label>
        id
        <input type="hidden" name="id" value="<?= $upd_id ?>" required>
    </label>

    <label>
        FirstName
        <input type="text" name="firstname" value="<?= $upd['firstname'] ?>" required>
    </label>

    <br>

    <label>
        LastName
        <input type="text" name="lastname" value="<?= $upd['lastname'] ?>" required>
    </label>

    <br>

    <label>
        Email
        <input type="email" name="email" value="<?= $upd['email'] ?>" required>
    </label>

    <br>

    <label>
        Password
        <input type="password" name="password" value="<?= $upd['password'] ?>" required>
    </label>

    <br>

    <input type="submit" name="submit">

    <a href="select.php">table</a>
</form>
</body>
</html>





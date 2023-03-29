<?php
require_once "connect.php";

$selects = mysqli_query($connect, "SELECT * FROM `formpeople`");
$selects = mysqli_fetch_all($selects);


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Document</title>
</head>
<body>
<table>
    <tr>
        <th>id</th>
        <th>firstname</th>
        <th>lastname</th>
        <th>email</th>
        <th>password</th>
    </tr>

    <?php
    foreach ($selects as $select) {
        ?>
        <tr>
            <td><?= $select[0] ?></td>
            <td><?= $select[1] ?></td>
            <td><?= $select[2] ?></td>
            <td><?= $select[3] ?></td>
            <td><?= $select[4] ?></td>
            <td><a href="update.php?id=<?= $select[0]?>">update</a></td>
            <td><a href="delete.php?id=<?= $select[0]?>">delete</a></td>


        </tr>
        <?php
    }
    ?>

</table>
<a href="creat.php">form</a>
</body>
</html>

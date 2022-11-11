<?php
    require_once '../config/connect.php';
    $id = $_GET['id'];
    
    $good = mysqli_query($connect,"SELECT * FROM `goods` WHERE `id` = $id");

    $good = mysqli_fetch_assoc($good);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="edit.php" method="POST">
    <input type="hidden" value="<?= $id ?>" name="id">
    <input  value="<?= $good['title'] ?>" name="title" type="text" required> <br>
    <input value="<?= $good['description'] ?>" name="description" type="text"> <br>
    <input   value="<?= $good['price'] ?>" name="price" type="number" step="0.01" required > <br>
    <button>Изменить товар</button>    
</form>
    
</body>
</html>
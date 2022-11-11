
<?php
require_once '../config/connect.php';

    $id = $_POST['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    if(!$description){
        $description = 'Описания нет';
    };
    $price = $_POST['price'];
    mysqli_query($connect,"UPDATE `goods` SET `title` = '$title',`description` = '$description', `price` = '$price' WHERE `id` = '$id'");

    header('Location:../index.php');
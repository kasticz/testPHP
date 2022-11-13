
<?php
require_once '../config/connect.php';

    $id = $_POST['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    if(!$description){
        $description = 'Описания нет';
    };
    $price = $_POST['price'];

    echo $id,$title,$description,$price;
    pg_query($connect,"UPDATE users SET title = '$title',description = '$description', price = '$price' WHERE id = '$id'");


    header('Location:../index.php');

    
    pg_close($connect);
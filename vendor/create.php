
<?php
require_once '../config/connect.php';

    $title = $_POST['title'];
    $description = $_POST['description'];
    if(!$description){
        $description = 'Описания нет';
    };
    $price = $_POST['price'];

    pg_insert($connect, "users",$_POST);

    header('Location:../index.php');

    
    pg_close($connect);
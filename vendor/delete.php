
<?php
require_once '../config/connect.php';

    $id = $_GET['id'];
    // mysqli_query($connect,"DELETE FROM `comment` WHERE `good_id` = '$id'");
    mysqli_query($connect,"DELETE FROM `goods` WHERE `id` = '$id'");

    header('Location:../index.php');
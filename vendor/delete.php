
<?php
require_once '../config/connect.php';

    $id = $_GET['id'];
    pg_query($connect,"DELETE FROM users WHERE id = '$id'");

    header('Location:../index.php');
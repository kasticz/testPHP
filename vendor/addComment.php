
<?php
require_once '../config/connect.php';

    $id = $_POST['id'];
    $comment = $_POST['comment'];


    mysqli_query($connect,"INSERT INTO `comments` (`id`,`good_id`,`comment`) VALUES (NULL,'$id','$comment') ");

  

    header("Location:../vendor/view.php?id=$id");
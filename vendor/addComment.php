
<?php
require_once '../config/connect.php';

    $id = $_POST['user_id'];


    pg_insert($connect,"comments",$_POST);
    pg_close($connect);
  

    header("Location:../vendor/view.php?id=$id");
    

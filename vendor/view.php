<?php
    require_once '../config/connect.php';
    $id = $_GET['id'];
    
    $good = mysqli_query($connect,"SELECT * FROM `goods` WHERE `id` = $id");

    $good = mysqli_fetch_assoc($good);

    $comments = mysqli_query($connect,"SELECT `comment` FROM `comments`  as `c` LEFT JOIN `goods` as `g` ON g.id = c.good_id WHERE g.id = $id" );
    $comments = mysqli_fetch_all($comments);

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

    <h2><?= $good['title']?></h2>   
    <p><?= $good['description']?></p>

    <h3>Цена: <?= $good['price']?> </h3>
    <hr>
    <form action="addComment.php" method="POST">
        <input value="<?= $id ?>" name="id"" type="hidden">
        <textarea name="comment" cols="35" rows="10"></textarea>
        <br>
        <input value="Отправить" type="submit">        
    </form>
    <hr>
    <h3>Комментарии</h3>
    <ul><?php 
    foreach($comments as $comment){
        ?>
        <li><?= $comment[0] ?></li>
        <?php        
    }
    ?></ul>

    
</body>
</html>
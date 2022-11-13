
<?php 
    require_once 'config/connect.php';

    $goods = pg_query($connect,"SELECT * FROM users");

    $goods = pg_fetch_all($goods);

    usort($goods,fn($a,$b)=> $a['id'] - $b['id']);
    

    pg_close($connect);

   










?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= 'Новая страница'; ?></title>
</head>
<body>

<table>
    <tr>
        <th>id</th>
        <th>Название</th>
        <th>Описание</th>
        <th>Цена</th>
        <th>&#9998;</th>
    </tr>
    <?php
    foreach($goods as $item){
        ?>        
            <tr>
                <td> <?=  $item['id'] ?> </td>
                <td> <?=  $item['title']  ?></td>
                <td> <?=  $item['description'] ?></td>
                <td> <?=  $item['price']  ?></td>
                <td><a method="GET" href="vendor/update.php?id=<?=  $item['id'] ?>">Обновить</a></td>          
                <td><a method="GET" href="vendor/delete.php?id=<?=  $item['id'] ?>">Удалить</a></td>  
                <td><a method="GET" href="vendor/view.php?id=<?=  $item['id'] ?>">Просмотр</a></td>         
            </tr>
             <br>    
        <?php   
    }
    ?>
</table>

<form action="vendor/create.php" method="POST">
    <input  placeholder="Название" name="title" type="text" required> <br>
    <input placeholder="Описание" name="description" type="text"> <br>
    <input   placeholder="Цена" name="price" type="number" step="0.01" required > <br>
    <button>Создать товар</button>    
</form>


    
</body>
</html>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Главная</title>
 </head>
 <body>

 <h1><?= $pageHeader ?></h1>

 <br><br>
 <form action="" method="post">
     <input type="text" name="task" placeholder="Опишите новую задачу">
     <input type="submit" value="Добавить">
</form>

    <?php foreach ($tasks as $task):?>
        <div>
    <?= $task->getDescription() ?> [Done]
        </div>
    <?php endforeach;?>
     
 </body>
 </html>



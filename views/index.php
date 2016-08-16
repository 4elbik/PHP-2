<!DOCTYPE html>
<html>
    <head lang="ru">
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <title>Новостной портал At Monent</title>
    </head>
    <body>
        <h2>Свежие новости на At Monent:</h2>
        <?php foreach ($items as $item): ?>
        <h4><a href="index.php?id=<?php echo $item['id']; ?>"><?php echo $item['title']; ?></a> - <em><?php echo $item['date']; ?></em></h4>
        <!--<?php echo $item['description']; ?><br /><br />-->
        <?php endforeach; ?>
    <a href="/add_news.php" class="add">Добавить новость</a>

    </body>
</html>
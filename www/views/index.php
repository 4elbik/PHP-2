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
        <h4><?php echo $item['title']; ?></h4>
        <?php echo $item['description']; ?><br /><br />
        <?php endforeach; ?>
    </body>
</html>
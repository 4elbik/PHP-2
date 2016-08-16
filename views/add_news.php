<!DOCTYPE html>
<html>
<head lang="ru">
    <meta charset="utf-8" />
    <link rel="stylesheet" href="style.css" />
    <title>Новостной портал At Monent</title>
</head>
<body>
<h2>Добавление довости</h2>

<form action="/add_news.php" method="post">
    <label>
        Название:
        <input type="text" name="title" />
    </label><br />
    <label>
        Описание:<br />
        <textarea name="description" cols="32" rows="6"></textarea>
    </label><br />
    <label>
        Выберите дату:
        <input type="date" name="date" />
    </label><br />
    <input type="submit" />
</form>
<a href="/">Вернуться назад к новостям</a>

</body>
</html>
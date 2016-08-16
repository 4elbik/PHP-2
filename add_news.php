<?php

//Ещё один контроллер для добавления новостей

include __DIR__ . '/models/news.php';

if (!empty($_POST)) {
    $data = [];
    foreach ($_POST as $key => $value) {
        $data[$key] = $value;
    }

    //var_dump($data);die;
}

if (isset($data['title']) && isset($data['description']) && isset($data['date'])) {
    News_insert($data);
    header('Location: /');
}


include __DIR__ . '/views/add_news.php';


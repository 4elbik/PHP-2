<?php

//Ещё один контроллер для добавления новостей

if (!empty($_POST)) {
    $data = [];
    if (!empty($_POST['title'])) {
        $data['title'] = $_POST['title'];
    }
    if (!empty($_POST['description'])) {
        $data['description'] = $_POST['description'];
    }

    var_dump($data);
}

include __DIR__ . '/views/add_news.php';


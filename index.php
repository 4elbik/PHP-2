<?php

require __DIR__ . '/models/news.php';

$items = News_getAll();

if (empty($_GET['id'])) {
    include __DIR__ . '/views/index.php';
} else {
    $item = $_GET['id'];
    $items = get_news($item);
    include __DIR__ . '/views/news.php';
}

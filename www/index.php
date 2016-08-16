<?php

define('__DIR__', 'G:/WebServers/home/PHP-2.local/www');

require __DIR__ . '/models/news.php';

$items = News_getAll();

include __DIR__ . '/views/index.php';

<?php

require_once __DIR__ . '/../functions/sql.php';


function News_getAll()
{
    $news = new Use_db();
    $query = 'SELECT * FROM news ORDER BY date DESC';
    return $news->sql_query($query);
}

function News_insert($arr)
{
    $news = new Use_db();
    $query = 'INSERT INTO news(title, description, date) 
              VALUES("'.$arr['title'].'","'.$arr['description'].'","'.$arr['date'].'")';
    $news->sql_exec($query);
}

function get_one_news($id)
{
    $news = new Use_db();
    $query = 'SELECT * FROM news WHERE id='.(int)$id.'';
    return $news->sql_query($query);
}
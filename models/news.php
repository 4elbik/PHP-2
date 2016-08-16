<?php

require_once __DIR__ . '/../functions/sql.php';

function News_getAll()
{
    $query = 'SELECT * FROM news ORDER BY date DESC';
    return sql_query($query);
}

function News_insert($arr)
{
    $query = 'INSERT INTO news(title, description, date) 
              VALUES("'.$arr['title'].'","'.$arr['description'].'","'.$arr['date'].'")';
    sql_exec($query);
}
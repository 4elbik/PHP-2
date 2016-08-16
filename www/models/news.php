<?php

require_once __DIR__ . '/../functions/sql.php';

function News_getAll()
{
    connect_db();
    $query = 'SELECT * FROM news';
    return sql_query($query);
}

function News_insert()
{

}
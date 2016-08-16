<?php

function connect_db()
{
    mysql_connect('localhost', 'root', '');
    mysql_select_db('php_2');
}

function sql_query($query)
{
    connect_db();
    $res = mysql_query($query);

    while (false !== $row = mysql_fetch_assoc($res)) {
        $ret[] = $row;
    }
    return $ret;
}

function sql_exec($query)
{
    connect_db();
    $res = mysql_query($query);
}
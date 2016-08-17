<?php

class Use_db {
    public function __construct($host = 'localhost', $user = 'root', $pass = '', $table = 'php_2')
    {
        mysql_connect($host, $user, $pass);
        mysql_select_db($table);
    }

    public function sql_query($query)
    {
        /*
         * Метод получения данных из БД
         */

        $res = mysql_query($query);


        while (false !== $row = mysql_fetch_assoc($res)) {
            $ret[] = $row;
        }
        return $ret;
    }

    public function sql_exec($query)
    {
        /*
         * Метод для записи, добавления, удаления данных из БД
         */

        mysql_query($query);
    }
}


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
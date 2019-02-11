<?php

//    $mysqli = new mysqli('localhost', 'my_user', 'my_password', 'my_db');

    $dsn = 'mysql:dbname=test2;host=localhost';
    $pdo = new PDO($dsn, 'dev', 'dev');

    var_dump($pdo);

    $msql = new mysqli('localhost', 'dev', 'dev', 'test2');

    var_dump($msql);
?>
<?php
    $dbHost = 'localhost';
    $dbUser = 'root';
    $dbPassword = '';
    $dbName = 'fooddelivery';

    $link = new mysqli($dbHost, $dbUser, $dbPassword, $dbName);

    if ($link->connect_error) {
        die("Ошибка подключения: " . $link->connect_error);
    }
?>
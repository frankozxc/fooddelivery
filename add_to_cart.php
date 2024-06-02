<?php
    session_start();
    include 'vendor/components/core.php';
    $link->query("INSERT INTO `basket`(`imagepath`,`name`, `desc`, `price`) VALUES ('{$_POST['imagepath']}', '{$_POST['order']}', '{$_POST['desc']}', '{$_POST['price']}')");
    header("Location: ". $_SERVER['HTTP_REFERER']);
?>
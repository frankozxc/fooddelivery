<?php
    session_start();
    include 'vendor/components/core.php';
    $id = $_GET['id'];

    $link -> query("DELETE FROM `basket` WHERE `id` = '{$id}'");
    header("Location: ". $_SERVER['HTTP_REFERER']);
?>
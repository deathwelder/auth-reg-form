<?php
    session_start();
    require_once 'connect.php';

    $connect = mysqli_connect('localhost', 'root', '', 'test');

    $comment = $_POST['random'];
    $comment_1 = $_POST['comment'];
    $ok = $_POST['ok'];
    $neok = $_POST['neok'];
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    $d = $_POST['d'];
    $e = $_POST['e'];
    $f = $_POST['f'];


    mysqli_query($connect, "INSERT INTO `data` (`id`, `comment`, `comment_1`, `radio_ok`, `radio_neok`, `a`, `b`, `c`, `d`, `e`, `f` ) VALUES (NULL, '$comment', '$comment_1', '$ok', '$neok', '$a', '$b', '$c', '$d', '$e', '$f')" );

    $_SESSION['message'] = 'Спасибо за отзыв!';
    header('Location: ../index.php');





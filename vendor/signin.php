<?php

    session_start();
    require_once 'connect.php';

    $connect = mysqli_connect('localhost', 'root', '', 'test');
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password' ");
    if (mysqli_num_rows($check_user) > 0) {

        $user = mysqli_fetch_assoc($check_user);

        $_SESSION['user'] = [
            "id" => $user['id'],
            "full_name" => $user['full_name'],
        ];

        header('Location: ../profile.php');

    } else {
        $_SESSION['message'] = 'Пользователь не найден!';
        header('Location: ../index.php');
    }

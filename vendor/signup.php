<?php
    session_start();
    require_once 'connect.php';
    $connect = mysqli_connect('localhost', 'root', '', 'test');


    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];

    if ($password === $password_confirm) {
        $password = md5($password);

        mysqli_query($connect, "INSERT INTO `users` (`id`, `full_name`, `login`, `email`, `password`) VALUES (NULL, '$full_name', NULL, '$email', '$password')" );

        $_SESSION['message'] = 'Регистрация прошла успешно!';
        header('Location: ../index.php');
    } else {
        $_SESSION['message'] = 'Пароли не совпадают';
        header('Location: ../register.php');
    }
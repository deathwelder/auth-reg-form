<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>

    <form action="vendor/signin.php" method="post">
        <label>Email</label>
        <input type="email" name="email" placeholder="Введите почту">
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите пароль">
        <button type="submit">Войти</button>
        <p>
            <a href="register.php">регистрация</a>
        </p>
        <?php
        if(isset($_SESSION['message'])) {
            echo '<p class=msg> ' . $_SESSION['message'] . ' </p>';
        }
        unset($_SESSION['message']);
        ?>
    </form>

</body>
</html>
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

    <form>
        <p>Привет, <?= $_SESSION['user']['full_name'] ?></p>

        <input type="text" name="random" placeholder="Введите текст">

        <p><b>Введите ваш отзыв:</b></p>
        <p><textarea name="comment"></textarea></p>


        <p><input name="ok" type="radio" value="ok"> Ок</p>
        <p><input name="neok" type="radio" value="neok"> Не ок</p>


        <p><input type="checkbox" name="a" value="a"> вариант a</p>
        <p><input type="checkbox" name="b" value="b"> вариант b</p>
        <p><input type="checkbox" name="c" value="c"> вариант c</p>
        <p><input type="checkbox" name="d" value="d"> вариант d</p>
        <p><input type="checkbox" name="e" value="e"> вариант e</p>

        <select>
            <option>Вариант f</option>
            <option>Вариант g</option>
        </select>

        <p></p>
        <button type="submit">Отправить</button>
        <input type="reset">
    </form>

</body>
</html>
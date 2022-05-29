<?php

var_dump($_GET);
echo $_GET['login'];

$login = !empty($_GET['login']) ? $_GET['login'] : 'логин не передан!';
$password = !empty($_GET['password']) ? $_GET['password'] : 'пароль не передан!';
?>
<html>
    <head>
        <title>Знакомство с GET-запросами</title>
    </head>
    <body>
        <p>
            Переданный логин: <?= $login ?>
            <br>
            Переданный пароль: <?= $password ?>
        </p>
    </body>
</html>

<?php
    echo "<h3>Работа с формами</h3>";
?>
<html>
    <head>
        <title>Форма входа</title>
    </head>
    <body>
        <form action="/login.php" method="get">
            <label>
                Логин <input type="text" name="login">
            </label>
            <br>
            <label>
                Пароль <input type="password" name="password">
            </label>
            <br>
            <input type="submit" value="Войти">
        </form>
    </body>
</html>
<?php
    echo "<h3>POST-запросы в PHP</h3>";
?>
<html>
    <head>
        <title>Форма входа</title>
    </head>
    <body>
        <form action="/login.php" method="post">
            <label>
                Логин <input type="text" name="login">
            </label>
            <br>
            <label>
                Пароль <input type="password" name="password">
            </label>
            <br>
            <input type="submit" value="Войти">
        </form>
    </body>
</html>
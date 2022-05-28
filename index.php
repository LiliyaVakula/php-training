<?php

// echo 'Hello world!';

// var_dump(123);
var_dump($_GET);
echo $_GET['arg1'];

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
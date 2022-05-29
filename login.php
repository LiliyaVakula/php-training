<?php
$login = $_GET['login'] ?? '';
$password = $_GET['password'] ?? '';

if ($login === 'admin' && $password === 'Pa$$w0rd') {
    $authResult = 'Авторизация прошла успешно';
} else if($login !== 'admin') {
    $authResult = 'Логин неверный';
} else {
    $authResult = 'Пароль неверный';
}
?>
<html>
  <head>
      <title>Результат авторизации</title>
  </head>
  <body>
      <?= $authResult ?>
  </body>
</html>

<!-- // $login = !empty($_GET['login']) ? $_GET['login'] : '';
// $password = !empty($_GET['password']) ? $_GET['password'] : '';

// if ($login === 'admin' && $password === 'Pa$$w0rd') {
//     $isAuthorized = true;
// } else {
//     $isAuthorized = false;
// }
// ?>
// <html>
//   <head>
//       <title>Результат авторизации</title>
//   </head>
//   <body>
//     <p>
//         <?= $isAuthorized ? 'Логин и пароль верные!' : 'Неправильный логин или пароль' ?>
//     </p>
//   </body>
// </html> -->

<!-- <?php
    echo "<h3>POST-запросы в PHP</h3>";
?> -->
<?php
$login = !empty($_POST['login']) ? $_POST['login'] : '';
$password = !empty($_POST['password']) ? $_POST['password'] : '';
?>
<html>
  <head>
      <title>Обработка POST-запроса</title>
  </head>
  <body>
    <p>
        Переданный login: <?= $login ?>
        <br>
        Переданный password: <?= $password ?>
    </p>
  </body>
</html>

<?php
  echo "<h2>МАССИВЫ</h2>";
  echo "<h3>Многомерные массивы</h3>";
    $article = [
      'title' => 'Название статьи',
      'text' => 'Текст статьи',
      'author' => [
          'first_name' => 'Иван',
          'last_name' => 'Иванов'
      ]
    ];
?>
  <html>
  <head>
    <title><?= $article['title'] ?></title>
  </head>
  <body>
  <h1><?= $article['title'] ?></h1>
  <p><?= $article['text'] ?></p>
  <p><?= $article['author']['first_name'] . ' ' . $article['author']['last_name'] ?></p>
  </body>
  </html>
<?php
  echo "<h3>Нумерованные массивы</h3>";
  $fruits = ['apple', 'orange', 'grape'];

  echo $fruits[0], '<br>';
  // Для удаления элементов массива используется конструкция unset. Давайте удалим элемент с индексом 2:

  $fruits = ['apple', 'orange', 'grape'];

  $fruits[] = 'mango';

  unset($fruits[2]);

  var_dump($fruits);
  echo '<br>';


  echo "<h3>Ассоциативные массивы</h3>";
    
  $article = [
      'title' => 'Название статьи',
      'text' => 'Текст статьи',
      'author' => 'Автор статьи'
  ];
?>
    <html>
    <head>
        <title><?= $article['title'] ?></title>
    </head>
    <body>
    <h1><?= $article['title'] ?></h1>
    <p><?= $article['text'] ?></p>
    <p><?= $article['author'] ?></p>
    </body>
    </html>


  <?php
    echo "<h2>ЦИКЛЫ</h2>";
    $carsSpeeds = [
      95,
      140,
      78
    ];

    $sumOfSpeeds = 0;
    $countOfCars = 0;

    foreach ($carsSpeeds as $speed) {
        $sumOfSpeeds += $speed;
        $countOfCars ++;
    }

    $averageSpeed = $sumOfSpeeds / $countOfCars;
    echo '<br>';

    echo 'Средняя скорость движения по трассе: ' . $averageSpeed;

    echo "<h3>While: самый простой цикл в PHP</h3>";
    // выглядит так:
    // while (условие) {
    //   какие-то действия ;
    // }

    $i = 2;

    while ($i < 100000) {
        echo $i;
        $i *= 2;
        echo '<br>';
    }
  
    echo "<h3>Цикл for: работаем с числами</h3>";
    //   for (expr1; expr2; expr3) {
    //     //loop body
    // } expr1 - переменная; expr2 - условие; expr3 - действие;

      for ($i = 0; $i < 100; $i++) {
        echo $i;
        echo '<br>';
    }
    // или можно записать так, резудьтат тот же:
      $i = 0;
      for (; $i < 100; $i++) {
          echo $i;
          // echo '<br>';
      }

    // $i = 0;
    // for (; $i < 100;) {
    //     echo $i++;
    //     echo '<br>';
    // } -третий вариант решения

    echo "<h3>Найти все чётные числа от 1 до 50 и вывести их</h3>";
      for ($i = 1;$i <= 50;$i++) {
        if ($i % 2 === 0) {
            echo $i;
            echo ' ';
        }
    }
    echo '<br>';

    echo "<h3>Создать массив из 50 случайных значений</h3>";
    $randomValues = [];

    for ($i = 1;$i <= 50;$i++) {
        $randomValues[] = mt_rand();
    }
    
    var_dump($randomValues);
    echo '<br>';

    echo "<h3>Посчитать сумму чисел от 1 до 1000</h3>";
    $sum = 0;
    for ($i = 1;$i <= 1000;$i++) {
        $sum += $i;
    }
    
    echo $sum;
    echo '<br>';


    echo "<h2>Операторы break и continue в PHP</h2>";
    echo "<h3>Пример использования break</h3>";
    $array = [2, 3, 6, 1, 23, 2, 56, 7, 1, 15]; 
    // массив
    $number = 1;
    // число
    // Перед циклом мы создали переменную $isNumberFound, которая будет хранить информацию о том, найдено ли число в массиве или нет. Изначально она равна false.
    $isNumberFound = false;
    foreach ($array as $item) {
        echo 'Сравниваем с числом элемент ' . $item . '<br>';
        if ($item === $number) {
            $isNumberFound = true;
            break;
        }
    }

    echo $isNumberFound ? 'Число найдено' : 'Число не найдено';
    // break; - находит число и останавливает работу цикла

    echo "<h3>Пример использования continue</h3>";  
      for ($i = 1; $i <= 20; $i++) {
        if ($i % 3 === 0) {
            continue;
        }
    
        echo $i;
        echo ' ';
    }

    echo "<h3>Проверка существования ключа в массиве</h3>";
    // функция array_key_exists($key, $array)-проверяет есть ключ в массиве или нет
    $array = [
      'login' => 'admin'
    ];
    
    if (array_key_exists('password', $array)) {
        echo $array['password'];
    } else {
        echo 'Ключ "password" в массиве не найден';
    }
    echo "<br/>";

    echo "<h3>Проверка существования значения</h3>";
    // in_array($needle, $array)- проверяет есть значение в массиве или нет. $needle – это то, что ищется, $array – массив, в котором ищем.
    $numbers = [
      1,
      0,
      7,
      4
    ];
    
    if (in_array(7, $numbers)) {
    echo 'В массиве есть число 7.';
    echo "<br/>";
  }

  echo "<h3>Объединение массивов</h3>";
  // функция array_merge($array1, $array2) - объединяет два массива в один.
  $articlesFromIvan = [
  'Статья 1',
  'Статья 2'
  ];

  $articlesFromMaria = [
    'Статья 3',
    'Статья 4'
  ];

  $allArticles = array_merge($articlesFromIvan, $articlesFromMaria);

  var_dump($allArticles);
  echo "<br/>";

  // implode -- Объединяет элементы массива в строку
  $array = [1, 3, 2];
  sort($array);
  $string = implode(":", $array);
  echo $string;
  echo "<br/>";

  // array_slice() возвращает последовательность элементов массива array, определённую параметрами offset и length.
  $array = [1,2,3,4,5];
  $array1 = array_slice($array,1,3);
  var_dump($array1);
  ?>
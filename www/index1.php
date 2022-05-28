<?php
  echo "Hello, world";
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Пример встраивания PHP в HTML</title>
</head>
<body>
  <h1>Пример встраивания PHP в HTML</h1>

  2 + 2 = <?php echo 2 + 2; ?> <br />

  <?php
    echo $x = 2, "<br />";
    $x = 2 + 3;
    $y = ($x * 2) / ($x - 1);
    echo $y, "<br />";

    $sum = 5 + 10;
    echo "сумма 5 и 10 = $sum", "<br />";

    $str = "hello";
    echo $str, "<br />";

    $float = 3.25;
    echo $float, "<br />";


    echo "<h2>Типы данных в PHP</h2>";
      $var = 123; // целое число (integer)
      echo 'Значение переменной: ' . $var, "<br />";
      $var = 'string'; //строка (string)
      echo 'Значение переменной: $var', "<br />";
      $var = 3.14; //дробное число (float)
      echo "Значение переменной: $var", "<br />";
      $x = 1;
      echo $x + '2', "<br />";

    echo "<h2>Операторы в PHP</h2>";
    
      var_dump(5/2); //функция
      echo '<br>';

      $result = 2 < 4;
      var_dump($result);
      echo '<br>';

      $result = 2 + 2 * 2;
      var_dump($result);

    echo "<h3>Арифметические операторы</h3>";
      $a = 6;
      $b = 3;

      // Сложение
      var_dump($a + $b);

      // Вычитание
      var_dump($a - $b);

      // Умножение
      var_dump($a * $b);

      // Деление
      var_dump($a / $b);

      // Остаток от деления
      var_dump($a % 4);

      // Возведение в степень
      var_dump($a ** 2);

    echo "<h3>Операторы присваивания</h3>";
      $x = 5;
      $y = 7;
      
      $y += $x;
      
      var_dump($y);

      echo "<h3>Операторы сравнения</h3>";
        $x = 2;
        $y = '2';
        
        var_dump($x == $y); //проверка на равенство
        var_dump($x === $y); //проверка на тождественное равенство
        var_dump($x != $y); //проверка на неравенство
        var_dump($x !== $y); //проверка на тождественное неравенство

        $x = 2;
        $y = 4;

        var_dump($x > $y); // $x больше $y
        var_dump($x < $y); // $x меньше $y
        var_dump($x >= $y); // $x больше или равно $y
        var_dump($x <= $y); // $x меньше или равно $y

          echo "<h3>Spaceship</h3>";
          //Логика у этого оператора следующая:
          // $a <=> $b
          // Если $a > $b, вернёт 1
          // Если $a == $b, вернёт 0
          // Если $a < $b, вернёт -1

          var_dump(2 <=> 4);
          var_dump(2 <=> 2);
          var_dump(5 <=> 3);

        echo "<h3>Инкремент и декремент</h3>";
          $i = 5;

          $x = $i++; //постфиксный инкремент  // Сначала переменной $x присвоили текущее значение $i (5), затем $i увеличили на 1 (6)
          $y = ++$i; //префиксный инкремент  // Сначала переменную $i увеличим на 1 (7), затем присвоили новое значение переменной $y (7)
          $z = $i--; // Сначала $z присвоили значение $i (7), затем уменьшили $i на 1 (6)
          
          var_dump($x);
          var_dump($y);
          var_dump($z);
          var_dump($i);

        echo "<h3>Логические операторы</h3>";
          var_dump(true && true); // Результат: true
          var_dump(true && false); // Результат: false
          var_dump(true || true); // Результат: true
          var_dump(true || false); // Результат: true
          var_dump(false || true); // Результат: true
          var_dump(!true); // Результат: false
          var_dump(!false); // Результат: true
          var_dump(false xor true); // Результат: true
          var_dump(true xor true); // Результат: false
          var_dump(true xor false); // Результат: true
          var_dump(false xor false); // Результат: false


          $x = 14;

          $isEven = $x % 2 == 0;

          var_dump($isEven);

          $isMoreThan10 = $x > 10;

          var_dump($isMoreThan10);

          $isEvenAndMoreThan10 = $isEven && $isMoreThan10;

          var_dump($isEvenAndMoreThan10);
          //одной строкой так:
          $x = 14;

          $isEvenAndMoreThan10 = $x % 2 == 0 && $x > 10;

          echo "<h3>Строковый оператор конкатенации</h3>";
          $string1 = 'Привет';
          $string2 = 'мир!';

          echo $string1 . ', ' . $string2;
          //Привет, мир!

  ?>

  <?php

    echo "<h2>Условие if - elseif - else</h2>";

    if (true) {
      echo 'Условие выполнено';
    }

    echo "
      <pre>
    if (5 > 1) {
    echo '5 > 1';
    }
      </pre>
    ";

    if (5 > 3) {
      echo "5 больше 11";
    } elseif (5 > 2) {
      echo "5 больше";
    } else {
      echo "5 меньше";
    }

    $x = 15;

    if ($x > 10) {
        echo 'Число больше 10';
    } else {
        echo 'Число меньше либо равно 10';
    }

    if ($x > 10) {
      echo 'Число больше 10';
    } elseif ($x == 10) {
      echo 'Число равно 10';
    } else {
      echo 'Число меньше 10';
    }

    echo "<h2>Условие switch - default: - break;</h2>";
    $x = 1;

    switch ($x) {
        case 1:
            echo 'Число равно 1';
            break;
        case 2:
            echo 'Число равно 2';
            break;
        default:
            echo 'Число не равно ни 1, ни 2';
    }

    // break прерывает набор условий, не забывайте указывать его;
    // секция default будет выполнена, если не выполнилось ни одно из условий. Она может и вовсе отсутствовать;
    // несколько case-ов могуть быть записаны подряд, тогда код в секции выполнится при выполнении хотя бы одного из условий.

    // вычисляем четное или нечетное

    $x = 4;

    if ($x % 2 == 0) {
        echo 'Число чётное', "<br />";
    } else {
        echo 'Число нечётное', "<br />";
    }

    // модуль
    $x = -7;

    if ($x >= 0) {
      echo 'Модуль числа: ' . $x, "<br />";
    } else {
      echo 'Модуль числа: ' . -$x, "<br />";
    }

    // тернарный оператор

    $x = -4;

    $mod = $x >= 0 ? $x : -$x;

    echo 'Модуль: ' . $mod, "<br />";

?>

<?php
    echo "<h2>ФУНКЦИИ</h2>";
    // cos. - косинус найти
    echo cos(3.14), "<br />";

    // str_replace. -в строке заменить одни символы другими
    $string = 'abracadabra';

    echo str_replace('a', 'o', $string), "<br />";

    // пример функции
    function getSum($x, $y)
    {
        return $x + $y;
    }  
    // теперь можно её вызвать и посмотреть на результат её работы
    $a = 5;
    $b = 10;

    echo getSum($a, $b) . '<br>';
    echo getSum(-3, 4), '<br>';

    // & - передача параметров по ссылке
    function plus5(&$x)
    {
        $x = $x + 5;
    }

    $a = 3;

    plus5($a);

    echo $a;

    // тайп-хинтинг (type hinting) в PHP 7
        function letSum(int $x, int $y)
    {
        var_dump($x);
        var_dump($y);

        return $x + $y;
    }

    echo letSum(5, 10), '<br>';
    // результат: int 5 int 10  15

    // уберем тип из аргумента
        function betSum($x, $y)
    {
        var_dump($x);
        var_dump($y);

        return $x + $y;
    }

    echo betSum(12.5, 10), '<br>';
    // результат: float 12.5 int 10  22.5

    // declare(strict_types=1);- строгая типизация, указывается перед началом функции

  echo "<h3>ФУНКЦИИ без аргументов</h3>";
    echo 'Случайное число: ' . rand(), '<br>';

    function getSinOfRandom()
    {
        return sin(rand());
    }

    echo 'Синус случайного числа: ' . getSinOfRandom(), '<br>';

    // функция, которая будет возвращать большее из двух переданных чисел
    function getMax(int $x, int $y)
    {
        if ($x > $y) {
            return $x;
        } else {
            return $y;
        }
    }

    $a = 5;
    $b = 8;

    echo 'Наибольшее число: ' . getMax($a, $b), '<br>';

  echo "<h3>Рекурсивные функции</h3>";
    function power(int $x, int $n)
    {
        var_dump($x, $n);
        // Если сейчас степень равна единице, то возвращаем само это число
        if ($n == 1) {
            return $x;
        }
    
        // В остальных случаях - умножаем число на возведённое в степень n - 1 и возвращаем его
        return $x * power($x, $n - 1);
    }
    
    echo 'Результат: ' . power(2, 3), '<br>';

    // сумма всех чисел от 1 до 5
    function getSumOfNumbersFromZero(int $n)
    {
        // Если сейчас 1, то просто возвращаем 1
        if ($n == 1) {
            return 1;
        }

        // В остальных случаях - прибавляем текущее число к сумме всех предыдущих
        return $n + getSumOfNumbersFromZero($n - 1);
    }

    echo 'Результат: ' . getSumOfNumbersFromZero(5), '<br>';

  
?>



</body>
</html>


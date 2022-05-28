<?php
var_dump(!1);//Очевидно, так как 1 это true - bool(false))
echo '<br>';
var_dump(!0);//0 воспринимается как false - bool(true)
echo '<br>';
var_dump(!true);//Очевидно, обратное значение true это false - bool(false))
echo '<br>';
var_dump(2 && 3);//Оба значения не false - bool(true)
echo '<br>';
var_dump(5 && 0);//Второе значение 0 - bool(false)
echo '<br>';
var_dump(3 || 0);//Хотя бы один из операндов (3) true - bool(true)
echo '<br>';
var_dump(5 / 1);//Деление дает целое число - int(5)
echo '<br>';
var_dump(1 / 5);//Деление дает дробное число - float(0,2)
echo '<br>';
var_dump(5 + '5string');//Если строка начинается с верного числового значения, будет использовано это значение  - int(10)
echo '<br>';
var_dump('5' == 5);//Во всех трех следующих случаях работает преобразование строк в числа - bool(true)
echo '<br>';
var_dump('05' == 5);// bool(true)
echo '<br>';
var_dump('05' == '5');//bool(true)
echo '<br>';

//вариант 2:
  $x = !1;
  $y = !0;
  $a = !true;
  $b = 2 && 3;
  $c = 5 && 0;
  $z = 3 || 0;
  $n = 5 / 1;
  $m = 1 / 5;
  $h = 5 + '5string';
  $f = '5' == 5;
  $k = '05' == 5;
  $l = '05' == '5';

  var_dump($x);
  echo '<br>';
  var_dump($y);
  echo '<br>';
  var_dump($a);
  echo '<br>';
  var_dump($b);
  echo '<br>';
  var_dump($c);
  echo '<br>';
  var_dump($z);
  echo '<br>';
  var_dump($n);
  echo '<br>';
  var_dump($m);
  echo '<br>';
  var_dump($h);
  echo '<br>';
  var_dump($f);
  echo '<br>';
  var_dump($k);
  echo '<br>';
  var_dump($l);
  echo '<br>';

?>

<?php
if ('string') {
  echo 'Условие выполнилось', "<br />";
}

if (0) {
echo 'Условие выполнилось', "<br />";
}

if (null) {
  echo 'Условие выполнилось', "<br />";
}

if (5) {
  echo 'Условие выполнилось', "<br />";
}


$x = 235;
echo $x % 2 === 0 ? 'четное' : 'нечетное', "<br />";

?>

<?php
// Напишите функцию, которая будет принимать на вход 3 аргумента с типом float и возвращать минимальное значение.
function getMin(float $a, float $b, float $c)
{
    if ($a < $b && $a < $c) {
        return $a;
    }
    if ($b < $c) {
        return $b;
    }
    return $c;
}
$x = 9;
$y = 10;
$z = 11;

echo 'Минимальное значение: ' . getMin($x, $y, $z), "<br />";

// Напишите функцию, которая принимает на вход два аргумента по ссылкам и умножает каждый из них на 2
function x2(&$x, &$y) {
  $x *= 2;
  $y *= 2;
} 

$a = 5;
$b = 20;

echo "Первое число: $a. Второе число: $b. <br/>";

x2($a, $b);

echo "Первое число после выполнения функции: $a. Второе число после выполнения функции: $b. <br/>";

// Напишите функцию, считающую факториал числа (произведение целых чисел от единицы до переданного). Реализуйте с помощью рекурсии.Напишите функцию, которая будет выводить на экран целые числа от 0 до
function factorial(int $x)
{
    if ($x === 0) {
        return 1;
    }
    return $x * factorial($x - 1);
}
echo factorial(5), "<br/>";

// Напишите функцию, которая будет выводить на экран целые числа от 0 до переданного значения
function numbers(int $x) {
  if ($x === 0) {
      echo $x;
      return;
  }
  numbers($x - 1);
  echo ', ' . $x;
}
numbers(5);

// домашка "МАССИВЫ" - Создайте массив с тремя уровнями вложенности. После создания массива добавьте новые элементы на самом глубоком уровне вложенности отдельным выражением.
$automobiles = [
  'Car' => 'BMW',
  'Model' => 'X5',
  'Engine' => [
      'Type' => 'Diesel',
      'Volume' => '1.8',
      'Power' => [
          'Horse' => '180',
          'Kilowatts' => '132'
      ]
  ]
];

$automobiles['Engine']['Power']['Newton metre'] = '132';

?>
<html>
<head>
  <title><?= $automobiles['Car'] ?></title>
</head>
<body>
<h1>Автомобиль: <?= $automobiles['Car'] ?></h1>
<h2>Модель: <?= $automobiles['Model'] ?></h2>
<p>Тип двигателя: <?= $automobiles['Engine']['Type'] ?></p>
<p>Лошадиных сил: <?= $automobiles['Engine']['Power']['Horse'] ?></p>
<p>Ньютон метров: <?= $automobiles['Engine']['Power']['Newton metre'] ?></p>
</body>
</html>

<!-- С помощью цикла while создайте массив, содержащий чётные числа от 345 до 357. Затем выведите элементы массива с помощью цикла foreach. -->
<?php
    $arr = [];
    $i = 345;

    while ($i <= 357) {
      if ($i % 2 == 0) {
        $arr[] = $i;
    }
      $i++;
  }
    foreach ($arr as $value) {
      echo $value . ', ';
      echo '<br>';
  }
    echo '<br>';
  // Запустите следующий код:

  //   while (true) {
  //   echo 1;
  // } 
  // к чему это привело?

  $a = 0;
  $b = 1;

  for(;$a<=100000;)
  {
      echo $a.'<br>';
      $b = $b + $a;
      $a = $b - $a;   
  }

  // напишите функцию, принимающую на вход 2 аргумента - массив и какое-либо значение. Функция возвращает true, если переданное значение присутствует в массиве и false - если нет

  function valueCount($array, $value) {
    $result = 0;
    foreach($array as $temp) {
        if($temp == $value) {
            $result++;
        }
    }
    echo "value found {$result} times";
  }

  $exampleArr = [1, 2, 1, 3];

  valueCount($exampleArr, 1);
  echo "<br/>";
  // вариант 2:
  $arr = [];

  for ($i = 1; $i <=20; $i++){
      $arr[] = $i;
  }

  function searchNumbersInArray($arr, $num){

    foreach ($arr as $value){
        if ($value === $num){
            return true;
        }
    }
    return false;
  }

  echo searchNumbersInArray($arr, $num = 10)? 'число найдено - '. $num : 'число не найдено';
  echo "<br/>";

  // напишите функцию, принимающую на вход 2 аргумента - массив и какое-либо значение. Функция возвращает число вхождений числа в массив. Например: для массива [1, 2, 1, 3] число вхождений числа "1" будет равно двум

  $array = [1, 1, 3, 4, 5];

  function findMatch ($array, $value) {
      $i = 0;
  
      foreach ($array as $item) {
          if ($value == $item) {
              $i++;
          }
      }
  
      return $i;
  };
  
  echo findMatch($array, 1);
  echo "<br/>";
?>
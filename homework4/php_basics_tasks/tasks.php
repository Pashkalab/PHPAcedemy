<?php
$name = "Паша";
$age = 19;

echo "Меня зовут: " . $name . "<br>";
echo  "Мне " . $age . " лет<br>";

if($age>=18 && $age<=59){
    echo "Вам еще работать и работать";
} else if ($age<18 && $age>=0) {
echo "Вам еще рано работать";
} elseif ($age>59){
    echo "Вам пора на пенсию";
} elseif ( $age < 0 || is_int($age)){
    echo "Неизвестный возраст";
}
echo "<hr>";
echo "ddddddddddddddddddddddddddd";

$day = 0;

switch ($day) {
    case ($day>=1 && $day<=5):
        echo "Это рабочий день";
        break;
    case ($day>=6 && $day<=7):
        echo "Это выходной день";
        break;
    default:
        echo "Неизвестный день";
}


echo "<hr>";

$s = 20;
$t = 5;

echo "км/час: " . $v = $s/$t;
echo "<br>м/сек: " . $v * 1000/3600;

echo "<hr>";

$foo = 'bar';
$bar = 10;
echo $$foo;

echo "<hr>";

$a = 29;
$b = 0;
$operator = "%";
switch ($operator){
    case "+":
        echo $a + $b;
        break;
    case "-":
        echo $a - $b;
        break;
    case "*":
        echo $a * $b;
        break;
    case "/":
        if ($b != 0) {
        echo $a / $b;
        } else echo "На ноль делить нельзя!";
        break;
    case "%":
        if ($b != 0) {
            echo $a % $b;
        } else echo "Нельзя искать остаток от деления на ноль!";
        break;
}

echo "<hr>";

$a = 2;
$b = 7;
if ($a > $b){
    echo "Max: " . $a;
} elseif ($b > $a) {
    echo "Max: " . $b;
} else echo "Числа равны";

echo "<hr>";

$a = "78";
$b = 78;
if ($a == $b) {
    echo "Равны<br>";
} else echo "не равны<br>";



if ($a === $b) {
    echo "эквивалентны<br>";
} else echo "не эквивалентны<br>";

var_dump($a == $b);

echo "<hr>";

$a = 20;
$b = 0;
$c =-20;

var_dump( (bool)$a, (bool)$b, (bool)$c );
echo "<br>Так как false это ноль, то привидение к bool из переменной b делает ноль, а true это все остальное кроме нуля, значит переменные a и c приводятся к true";

echo "<hr>";

$a = "Hello!";

echo $a . "<br>";
print $a . "<br>";
printf($a);

echo "<hr>";

echo "Коментарии:";
//$a = 5;
/*$a = 65;*/
#$a = 69;



/*<?= ?> эта конструкция заменяет <?php echo ?>';*/

echo "<hr>";

define("DAYS_COUNT", 7);
echo DAYS_COUNT . "<br>";
const MONTH_COUNT = 12;
echo MONTH_COUNT;
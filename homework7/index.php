<?php

$x = 6;
function bool($x) {
    $x =  $x%2 + 1;
    var_dump((bool)$x);
}
bool($x);

echo "<hr>";

echo "Обмен значением двух переменных: <br>";
$a = 1;
$b = 2;

function reverse($a, $b)
{
    echo $a . " ";
    echo $b . "<br>";

    $a = $a + $b;
    $b = $a - $b;
    $a = $a - $b;

    echo $a . " ";
    echo $b;
}

reverse($a, $b);

echo "<hr>";

$a = 3.5;
$b = 25.9999;
function maxFunc($a, $b)
{
    if ((is_double($a) || is_int($a)) && (is_double($b) || is_int($b))) {
        if ($a > $b) {
            echo "MAX: " . $a;
        } elseif ($a < $b) {
            echo "MAX: " . $b;
        } else echo "Числа равны";
    } else echo "Одна из переменных не число";
}

maxFunc($a, $b);

echo "<hr>";

function maxFuncTer($a, $b)
{
    if ((is_double($a) || is_int($a)) && (is_double($b) || is_int($b))) {
        $c = ($a > $b) ? $a : $b;
        echo "MAX: " . $c;
    } else echo "Одна из переменных не число";
}

maxFuncTer($a, $b);

echo "<hr>";

$a = 30.6;
$b = 20;
function maxSwitch($a, $b)
{
    if ((is_double($a) || is_int($a)) && (is_double($b) || is_int($b))) {
        switch ($a > $b) {
            case true:
                echo "MAX: " . $a;
                break;
            case false:
                switch ($a < $b) {
                    case true :
                        echo "MAX: " . $b;
                        break;
                    default:
                        echo "Числа равны";
                }

        }
    } else echo "Одна из переменных не число";
}

maxSwitch($a, $b);

echo "<hr>";
function prostFor()
{
    $prostoe = true;
    for ($i = 2; $i <= 100; $i++) {
        for ($j = 2; $j < $i; $j++) {
            if ($i % $j == 0) {
                $prostoe = false;
                break;
            }
        }
        if ($prostoe) echo $i . " ";
        $prostoe = true;
    }
}

prostFor();

echo "<hr>";

function prostWhile()
{
    $prostoe = true;
    $i = 2;
    while ($i <= 100) {
        $j = 2;
        while ($j < $i) {
            if ($i % $j == 0) {
                $prostoe = false;
                break;
            }
            $j++;
        }
        if ($prostoe) echo $i . " ";
        $prostoe = true;
        $i++;
    }
}

prostWhile();

echo "<hr>";

function del_by_3()
{
    $arr = array(1, 3, 5, 9, 7, 15, 26, 999, 84, 55);
    foreach ($arr as $num) {
        if ($num % 3 == 0) {
            echo $num . " ";
        }
    }
}

del_by_3();

echo "<hr>";

function firstProst()
{
    for ($i = 200; $i <= 400; $i++) {
        $prostoe = true;
        for ($j = 2; $j < $i; $j++) {
            if ($i % $j == 0) {
                $prostoe = false;
                break;
            }
        }
        if ($prostoe) {
            echo $i;
            break;
        }
    }
}

firstProst();

echo "<hr>";

echo "задание №1 <br>";

$x = 5;

$n = 5;
function func1($x, $n)
{
    $result = $x;
    for ($i = 1; $i < $n; $i++) {
        $result *= $x;
    }
    echo $result;
}

func1($x, $n);

echo "<hr>";


echo "задание №2 <br>";

$p = 6;

function func2($p)
{
    $result = 1;
    for ($j = 2; $j <= $p; $j++) {
        $result *= $j;
    }
    echo $result;
}

func2($p);

echo "<hr>";

echo "задание №3 <br>";

$x = 10;
function func3($x)
{
    $result = 0;
    $a = 1;
    while (!($x < $result)) {
        $result += 1 / $a;
        $a++;
    }
    echo $result;
}

func3($x);

echo "<hr>";

echo "задание №4 <br>";

$n = 256;
function func4($n)
{
    for ($q = 1; $q <= sqrt($n); $q++) {
        if ($n % $q ** 2 == 0 && $n % $q ** 3 != 0) {
            echo $q . "<br>";
        }
    }
}

func4($n);

echo "<hr>";

echo "задание №5 <br>";

$string = "(((()(())))))" ;

function func5($string)
{
    $arr = str_split($string, 1);
    $count = 0;
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] == "(") {
            $count++;
        }
        if ($arr[$i] == ")") {
            $count--;
        }
        if ($count < 0) {
            break;
        }
    }
    if ($count == 0) {
        echo "Скобки расставлены правильно";
    } else echo "Скобки расставлены не правильно";
}

func5($string);

echo "<hr>";

echo "задание №6 <br>";

$words  = "привет кот прикол собака";

function func6($words)
{
    echo $words . "<br>";
    $arr = explode(" ", $words);
    print_r($arr);
}

func6($words);

echo "<hr>";

echo "задание №7 <br>";

$arr = array('+380675999482', '+380935568541', '+380775536987');

function func7($arr)
{
    $string = implode(", ", $arr);
    echo $string;
}

func7($arr);

echo "<hr>";

echo "задание №8 <br>";

$string = "Hello world" ;

function func8($string)
{
    echo implode('', array_unique(str_split($string)));
}

func8($string);
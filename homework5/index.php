<?php

$a = 3.5;
$b = 25.9999;
if ((is_double($a) || is_int($a)) && (is_double($b) || is_int($b))) {
    if ($a > $b) {
        echo "MAX: " . $a;
    } elseif ($a < $b) {
        echo "MAX: " . $b;
    } else echo "Числа равны";
} else echo "Одна из переменных не число";

echo "<hr>";

$a = 3.5;
$b = 25.9999;
if ((is_double($a) || is_int($a)) && (is_double($b) || is_int($b))) {
    $c = ($a > $b) ? $a : $b;
    echo "MAX: " . $c;
}else echo "Одна из переменных не число";

echo "<hr>";

$a = 30.6;
$b = 20;
if ((is_double($a) || is_int($a)) && (is_double($b) || is_int($b))) {
    switch ($a > $b) {
        case true: echo "MAX: " . $a; break;
        case false:
            switch ($a < $b) {
            case true :echo "MAX: " . $b; break;
                default: echo "Числа равны";
            }

    }
}else echo "Одна из переменных не число";

echo "<hr>";

$prostoe = true;
for($i = 2; $i <= 100; $i++) {
    for ($j = 2; $j < $i; $j++) {
        if ($i % $j == 0) {
            $prostoe = false;
            break;
        }
    }
    if($prostoe) echo $i." ";
    $prostoe = true;

}

echo "<hr>";

$prostoe = true;
$i=2;
while ($i<=100) {
    $j=2;
    while ($j<$i) {
       if ($i % $j == 0) {
           $prostoe = false;
           break;
       }
       $j++;
    }
    if($prostoe) echo $i." ";
    $prostoe = true;
    $i++;
}

echo "<hr>";

$arr = array(1, 3, 5, 9, 7, 15, 26, 999, 84, 55);
foreach($arr as $num) {
    if($num % 3 == 0) {
        echo $num." ";
    }
}

echo "<hr>";

$a = 4.5;
$b = 25.9999;
if ($a > $b) :
    echo "MAX: " . $a;
 elseif ($a < $b):
    echo "MAX: " . $b;
 else: echo "Числа равны";
endif;

echo "<br>";

$prostoe = true;
for($i = 2; $i <= 100; $i++) :
    for ($j = 2; $j < $i; $j++) :
        if ($i % $j == 0) :
            $prostoe = false;
            break;
        endif;
    endfor;
    if($prostoe) echo $i." ";
    $prostoe = true;
endfor;

echo "<br>";

$prostoe = true;
$i=2;
while ($i<=100) :
    $j=2;
    while ($j<$i) :
        if ($i % $j == 0) :
            $prostoe = false;
            break;
        endif;
        $j++;
    endwhile;
    if($prostoe) echo $i." ";
    $prostoe = true;
    $i++;
endwhile;

echo "<br>";

$arr = array(1, 3, 5, 9, 7, 15, 26, 999, 84, 55);
foreach($arr as $num) :
    if($num % 3 == 0) :
        echo $num." ";
    endif;
endforeach;

echo "<hr>";

for($i = 200; $i <= 400; $i++) {
    $prostoe = true;
    for ($j = 2; $j < $i; $j++) {
        if ($i % $j == 0) {
            $prostoe = false;
            break;
        }
    }
    if($prostoe) {
        echo $i;
        break;
    }
}

echo "<hr>";


echo "ksdks";

$abc = array(1, 2, 3);
foreach ($abc as &$item){
    $item = 2 * $item;
}
print_r($abc);

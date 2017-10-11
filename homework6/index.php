<?php

echo "задание №1 <br>";

$x = 5;

$n = 5;
$result = 5;
for ($i = 1; $i < $n; $i++){
    $result *= $x;
}
echo $result;


echo "<hr>";
echo "задание №2 <br>";

$p = 56;
$result = 1;
for ($j = 2; $j <= $p; $j++){
    $result*=$j;
}
echo $result;

echo "<hr>";
echo "задание №3 <br>";


$x = 10;
$result = 0;
$a=1;
while (!($x<$result)){
    $result += 1/$a;
    $a++;
}
echo $result;

echo "<hr>";
echo "задание №4 <br>";

$n = 256;

for ($q = 1; $q <= sqrt($n); $q++){
    if($n % $q**2==0 && $n % $q**3!=0){
        echo $q . "<br>";
    }
}

echo "<hr>";
echo "задание №5 <br>";

$string = "((((()(())))))" ;
$arr = str_split($string, 1);

$count = 0;
for ($i = 0; $i < count($arr); $i++){
    if ($arr[$i]=="("){
        $count++;
    }
    if ($arr[$i]==")"){
        $count--;
    }
    if ($count < 0) {
        break;
    }
}
if ($count == 0) {
    echo "Скобки расставлены правильно";
} else echo "Скобки расставлены не правильно";


echo "<hr>";
echo "задание №6 <br>";

$words  = "привет кот прикол собака";
echo $words . "<br>";
$arr = explode(" ", $words);
print_r($arr);

echo "<hr>";
echo "задание №7 <br>";

$arr = array('+380675999482', '+380935568541', '+380775536987');
$string = implode(", ", $arr);

echo $string;

echo "<hr>";
echo "задание №8 <br>";


$string = "Hello world" ;

echo implode('', array_unique(str_split($string)));
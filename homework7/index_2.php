<?php

function func($x, $n){
    if ($n === 0) return 1;
    elseif ($n>0) {
        return $x * $x ** ($n - 1);
    } else {
        $n = -$n;
        return  1 / ($x * $x ** ($n - 1));
    }
}
echo func(2, -5);

echo "<hr>";

echo "Факториал:";
function factorial($p) {
    if ($p === 0) return 1;
    else return $p*factorial($p-1);
}
echo factorial(7);

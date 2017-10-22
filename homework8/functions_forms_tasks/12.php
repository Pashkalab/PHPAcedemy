<?php
$string = "А Васька слушает да ест. А воз и ныне там. А вы друзья как ни садитесь, все в музыканты не годитесь. А король-то — голый. А ларчик просто открывался. А там хоть трава не расти.";
function func($string)
{
    $string = explode('.', $string);
    array_pop($string);
    $string = array_reverse($string);
    $string = implode(". ", $string);
    $string = $string . ".";
    echo $string;
}
func($string);
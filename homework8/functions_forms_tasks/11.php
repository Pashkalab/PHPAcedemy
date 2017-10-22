<?php
$string = "a Васька слушает да ест. a воз и ныне там. a вы друзья как ни садитесь, все в музыканты не годитесь. a король-то — голый. a ларчик просто открывался. a там хоть трава не расти.";
function func($string)
{
    $string = explode('. ', $string);

    foreach ($string as &$item){
        $item = ucfirst($item);
    }
    $string = implode(". ", $string);

    echo $string;
}
func($string);

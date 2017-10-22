<?php
function formIsValid()
{
    return !empty($_POST['text1']);
}

function requestPost($key)
{
    if (isset($_POST[$key])) {
        return $_POST[$key];
    }

    return null;
}

if ($_POST) {
    if (formIsValid()) {
        $message = 'все сделано';
        func(requestPost("text1"));
    }else {
        $message = 'что то введено неправильно';
    }
}
function func($string)
{
    $string = explode(' ', $string);
    $string = array_count_values($string);
    $arr = [];
    foreach ($string as $key => $value) {
        if ($value < 2) {
            array_push($arr, $key);
        }
    }
    $arr = implode(",", $arr);
    echo $arr;
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method='post'>
    <h2>Введите слова</h2>
    <textarea name="text1" placeholder='Введите слова'></textarea>
    <br>
    <input type="submit" value="Submit"/>

</form>
</body>
</html>
<?php
function formIsValid()
{
    return !empty($_POST['number1'])&&
        !empty($_POST['number2']);
}

function requestPost($key)
{
    if (isset($_POST[$key])) {
        return $_POST[$key];
    }

    return null;
}
function requestGet($key)
{
    if (isset($_GET[$key])) {
        return $_GET[$key];
    }

    return null;
}

$message = requestGet('message');
if ($_POST) {
    if (formIsValid()) {
        $message = 'все сделано';
        reverse(requestPost("number1"), requestPost("number2"));
    }else {
        $message = 'что то введено неправильно';
    }
}
function reverse($a, $b)
{
    $a = $a + $b;
    $b = $a - $b;
    $a = $a - $b;
    return array($a, $b);
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
    <h2>Обмен значениями без третей переменной</h2>
    <p><?=$message?></p>
    <input type="number" name="number1" placeholder='Введите число1' value='' > <br>
    <input type="number" name="number2" placeholder='Введите число2' value='' > <br>
    <input type="submit" value="Submit"/><br>

</form>
</body>
</html>

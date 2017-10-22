<?php
function formIsValid()
{
    return !empty($_POST['number1']);
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
        func2(requestPost('number1'));
    }else {
        $message = 'что то введено неправильно';
    }
}

function func2($p)
{
    $result = 1;
    for ($j = 2; $j <= $p; $j++) {
        $result *= $j;
    }
    echo $result;
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
    <h2>Найдите факториал</h2>
    <p><?=$message?></p>
    <input type="number" name="number1" placeholder='Введите первое число' value='' > <br>
    <input type="submit" value="Submit"/>
</form>
</body>
</html>

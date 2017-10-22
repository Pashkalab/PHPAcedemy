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
        func5(requestPost('number1'));
    }else {
        $message = 'что то введено неправильно';
    }
}


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
    <h2>Введите строку из скобок</h2>
    <p><?=$message?></p>
    <input type="text" name="number1" placeholder='Введите первое число' value='' > <br>
    <input type="submit" value="Submit"/>
    <h2><? ?></h2>
</form>
</body>
</html>

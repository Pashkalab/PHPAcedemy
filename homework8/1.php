<?php
function formIsValid()
{
    return !empty($_POST['number']);
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
        bool(requestPost('number'));
    }else {
        $message = 'что то введено неправильно';
    }
}
function bool($x) {
    $x =  $x%2 ;
    if ($x == 0){
        $x = "Число делиться на 2";
    } else $x = "Число не делиться на 2";
    echo $x;
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
    <h2>Проверить или делиться на 2</h2>
    <p><?=$message?></p>
    <input type="number" name="number" placeholder='Введите число' value='' > <br>
    <input type="submit" value="Submit"/>

</form>
</body>
</html>

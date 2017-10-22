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
    $string = preg_split('//', $string, -1, PREG_SPLIT_NO_EMPTY);
    $string = array_reverse($string);
    $string = implode("", $string);
    echo $string;
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
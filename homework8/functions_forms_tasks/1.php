<?php
function formIsValid()
{
    return !empty($_POST['text1']) &&
        !empty($_POST['text2']);
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
$arr = [];
$message = requestGet('message');
if ($_POST) {
    if (formIsValid()) {
        $message = 'все сделано';
        $arr = getCommonWords(requestPost('text1'), requestPost('text2'));
    }else {
        $message = 'что то введено неправильно';
    }
}

function getCommonWords($a, $b)
{
    $arr1 = [];
    $c = $a. " " . $b;
    $arr = explode(" ", $c);
    foreach ((array_count_values ($arr)) as $key => $val)
    {
        if ($val > 1) {
            array_push($arr1, $key);
        }
    }
     return $arr1;
}
$string = implode(" ", $arr);
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
    <p><?=$message?></p>
    <textarea name="text1" placeholder='Введите слова'></textarea>
    <textarea name="text2" placeholder='Введите слова'></textarea>
<br>
    <input type="submit" value="Submit"/>
<p><?=$string?></p>
</form>
</body>
</html>

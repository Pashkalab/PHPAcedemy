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
function requestGet($key)
{
    if (isset($_GET[$key])) {
        return $_GET[$key];
    }

    return null;
}
$string = "";
$message = requestGet('message');
if ($_POST) {
    if (formIsValid()) {
        $message = 'все сделано';
        $string = det3(requestPost('text1'));
    }else {
        $message = 'что то введено неправильно';
    }
}
function det3($text)
{
    $arr = array_flip(explode(' ', $text));
print_r($arr);
    foreach ($arr as $word => $length) {
        $arr[$word] = mb_strlen($word);
    }
    echo "<br>";
    print_r($arr);

    asort($arr);

    echo "<br>";
    print_r($arr);

    $result = array_slice($arr, -3, 3);
    echo "<br>";
    print_r($result) ;
    $result = array_keys($result);
    return implode(" ", $result);
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
<p><?=$string?></p>
</form>
</body>
</html>

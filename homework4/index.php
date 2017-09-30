<?php
 $countries = array("Ukraine", "England", "USA", "Canada", "France");
 print_r($countries);

 echo "<hr>";

 $countries = array("Ukraine" => "Kiev", "England" => "London", "USA" => "Washington", "Canada" => "Ottawa", "France" => "Paris");
 print_r($countries);

 echo "<hr>";

 $book1 = array("style" => "novel in verse", "author" => "Pushkin", "name" => "Eugene Onegin", "price" => 540);
 $book2 = array("style" => "philosophical novel", "author" => "Dostoevsky", "name" => "Idiot", "price" => 640);
 $book3 = array("style" => "poem", "author" => "Mayakovsky", "name" => "Passport", "price" => 365);
 $list = array($book1, $book2, $book3);
 print_r($list);

 echo "<hr>";

define('FIRST', "Ukraine");
define('SECOND', "USA");
define('THIRD', "Canada");
$countries_define = array(FIRST, SECOND, THIRD);
print_r($countries_define);

echo "<hr>";

$hello = "hay";
$hay = "privet";
$privet = "ky";
$ky = "good_morning";
$good_morning = "I do it!!!";
echo $$$$$hello;

echo "<hr>";

?>
<form method="get" name="registration" autocomplete="on" action="index.php" accept-charset="UTF-8">
    <table>
        <tr>
            <td><label for="login">Имя:</label></td>
            <td><input type="text" name="login" id="login" placeholder="Укажите ваше имя" /></td>
        </tr>
        <tr>
            <td><label for="email">Email:</label></td>
            <td><input type="email" name="email" id="email" placeholder="Укажите ваш email" /></td>
        </tr>
        <tr>
            <td><label for="hone">Телефон:</label></td>
            <td><input type="phone" name="phone" id="phone" placeholder="Укажите ваш телефон" /></td>
        </tr>
        <tr>
            <td><input type="submit"></td>
        </tr>
    </table>
</form>

<?php
 print_r($_GET);

 echo "<hr>";
 ?>

<form method="post" name="registration" autocomplete="on" action="index.php" accept-charset="UTF-8">
    <table>
        <tr>
            <td><label for="login">Имя:</label></td>
            <td><input type="text" name="login" id="login" placeholder="Укажите ваше имя" /></td>
        </tr>
        <tr>
            <td><label for="email">Email:</label></td>
            <td><input type="email" name="email" id="email" placeholder="Укажите ваш email" /></td>
        </tr>
        <tr>
            <td><label for="hone">Сообщение:</label></td>
            <td><textarea placeholder="Укажите ваше сообщение"></textarea></td>
        </tr>
        <tr>
            <td><input type="submit"></td>
        </tr>
    </table>
</form>

<?php
echo $str  = serialize($_POST);

echo "<hr>";

$seconds = 365 * 24 *60 *60;
echo $seconds . " in year<br>";
echo  $seconds % 2;

echo "<hr>";

$number = 1 . 2 . 3 . 4 . 5;
echo  $number;

echo "<hr>";

$veriable = false && true || false && true || !false && true;
var_dump($veriable);
echo "<br>";
$x = 6;
$x1 =  $x%2 + 1;
var_dump((bool)$x1);

echo "<hr>";

echo "Обмен значением двух переменных: <br>";
$a = 1;
$b = 2;

echo $a . " ";
echo $b . "<br>";

$a = $a + $b;
$b = $a - $b;
$a = $a - $b;

echo $a . " ";
echo $b;
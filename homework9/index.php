<?php

include 'functions.php';

session_start();



$securityNumber = rand(1000, 9999);
$message = requestGet('message');
if($_SESSION['if'] != 1  || !isset($_SESSION['if'])) {

    $_SESSION["number"] = $securityNumber;

}
else {
    $_SESSION['if'] = 0;

}
$editMode = null;

echo "<br>";
echo $_SESSION['number'];

if (requestGet('action') == 'delete' && requestGet('id')) {

    $result = deleteComment(requestGet('id'));
    $message = $result === false ? 'Error deleting' : 'Deleted';

   redirect('/PHPAcedemy/homework9/?message=' . $message);
}

if (requestGet('action') == 'edit' && requestGet('id')) {

    $editMode = requestGet('id');

    if ($_POST) {
        var_dump($_POST);
        die('saving message');
    }

}

$z = requestPost('user_security_number');
//$z1 = requestPost('security_number');


if ($_POST) {

    if (formIsValid()) {
        if ( $z == $_SESSION["number"]) {
            $comment = createComment($_POST);
            $result = save($comment);
            $message = $result === false ? 'Error saving' : 'Saved';
            redirect('/PHPAcedemy/homework9/?message=' . $message);
            $_SESSION["if"] = 0;
        }
        else {

            $message = 'Captcha error';
           // redirect('/PHPAcedemy/homework9/?message=' . $message);
            $_SESSION["if"] = 1;
        }
    } else $message = 'Form is not valid';
}

$comments = loadComments();

include 'layout.phtml';





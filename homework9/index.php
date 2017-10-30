<?php

include 'functions.php';

$message = requestGet('message');
$securityNum = requestGet('user_security_number');
$securityNumber = rand(1000, 9999);



if (requestGet('action') == 'delete' && requestGet('id')) {

    $result = deleteComment(requestGet('id'));
    $message = $result === false ? 'Error deleting' : 'Deleted';

   redirect('/PHPAcedemy/homework9/?message=' . $message);
}

if (requestGet('action') == 'edit' && requestGet('id')) {

    $result = editComment(requestGet('id'));
    //$message = $result === false ? 'Error saving' : 'Saved';

   redirect('/PHPAcedemy/homework9/?message=' . $message);
}

$z = md5(requestPost('user_security_number'));
$z1 = requestPost('security_number');


if ($_POST) {

    if (formIsValid()) {
        if ( $z == $z1) {
            $comment = createComment($_POST);
            $result = save($comment);
            $message = $result === false ? 'Error saving' : 'Saved';
            redirect('/PHPAcedemy/homework9/?message=' . $message);
        }
        else {

            $message = 'Captcha error';
           // redirect('/PHPAcedemy/homework9/?message=' . $message);
        }
    } else $message = 'Form is not valid';
}

$comments = loadComments();

include 'layout.phtml';





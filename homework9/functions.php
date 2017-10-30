<?php

define('COMMENTS_STORAGE', 'comments.txt');
define('BAD',[' сука ',' блять ',' хуй ', 'хуй ', ' хуй', ' блять', 'блять ', ' сука', 'сука ']);

function bad_words($comment){
    foreach ($comment as $key=>$value){
        $comment[$key]=str_replace(BAD, ' **** ', $value);
    }
    return $comment;
}

function loadComments()
{
    $contents = @file_get_contents(COMMENTS_STORAGE);
    
    if ($contents === false) {
        // may throw some error
        return [];
    }
    
    if (empty($contents)) {
        return [];
    }
    
    $comments = @unserialize($contents);
    
    if ($comments === false) {
        http_response_code(500);
        die('System error');
    }
    
    return $comments;
}

function save(array $comment) 
{
    $comments = loadComments();
    $comment = bad_words($comment);
    $comments[] = $comment;

    $str = serialize($comments);
    
    return file_put_contents(
        COMMENTS_STORAGE, 
        $str
    );
}

function deleteComment($id) {

    $contents = @file_get_contents(COMMENTS_STORAGE);
    $comments = @unserialize($contents);
    $max = max(array_keys($comments))+1;
    for ($i = 0; $i < $max; $i++) {
        if ($comments[$i]["id"] == $id) {
            unset($comments[$i]);
        }
    }

    $str = serialize($comments);
    return file_put_contents(
        COMMENTS_STORAGE,
        $str
    );
}

function editComment($id) {
    $contents = @file_get_contents(COMMENTS_STORAGE);
    $comments = @unserialize($contents);
    $max = max(array_keys($comments))+1;
    for ($i = 0; $i < $max; $i++) {
        if ($comments[$i]["id"] == $id) {
            $_POST['name'] = $comments[$i]["name"];
        }
    }

}

function getValue(array $array, $key)
{
    if (isset($array[$key])) {
        return $array[$key];
    }
    
    return null;
}

function createComment(array $data)
{
    return [
        'id' => rand(10000, 99999),
        'name' => getValue($data, 'name'), // $data['name']
        'email' => getValue($data, 'email'),
        'message' => getValue($data, 'message'),
        'created' => date('Y-m-d H:i:s'),
    ];
}

function formIsValid() 
{
    return !empty($_POST['name']) && 
           !empty($_POST['email']) && 
           !empty($_POST['message'])
    ;  
}

function redirect($to)
{
    header("Location: {$to}");
    die;
}

function requestPost($key)
{
    return getValue($_POST, $key);
}

function requestGet($key)
{
    return getValue($_GET, $key);
}
<?php
use parallel\Events\Input;

function Token($str)
{
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

function createToken()
{
    if(!isset($_SESSION['token'])) {
        $_SESSION['token'] = bin2hex(random_bytes(30));
    }
}

function validateToken()
{
    if(empty($_SESSION['token']) || $_SESSION['token'] !== filter_input(INPUT_GET, 'token'))
     {
         exit('不正なアクセス');
     }
}

session_start();
?>
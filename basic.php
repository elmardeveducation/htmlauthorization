<?php
$user='Elmar';
$password='123456';
if (isset($_SERVER["HTTP_AUTHORIZATION"])&&($_SERVER['REQUEST_METHOD']=='POST')) {
    $auth = $_SERVER["HTTP_AUTHORIZATION"];
    $auth_array = explode(" ", $auth);
    $un_pw = explode(":", base64_decode($auth_array[1]));
    $un = $un_pw[0];
    $pw = $un_pw[1];
    echo 'username='.$un.' and password='.$pw;
}
else{
    echo 'ACCESS DENIED';
}
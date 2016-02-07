<?php
session_start();
//如果服务器端的$_SESSION['name']不为空，即说明该用户已登陆，向cookie中写入信息
if(!empty($_SESSION['name'])){
    echo 'blakkba';
    setcookie('name','cyy');
    print_r($_COOKIE);
    $_COOKIE['aa'] = "hehe";
    print_r($_COOKIE);
}
<?php

function checkUser(){
    if(isset($_COOKIE['user'])){
        $user =  $_COOKIE['user'];
    }
    else{
        header('Location: auth.php');
    }
}

function logout(){
    setcookie('user', '', time() + (-86400 * 30), "/");
    header('Location: auth.php');
}

?>
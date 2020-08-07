<?php

function checkUser($con){
    if(isset($_COOKIE["user"])){
        $user =  $_COOKIE['user'];

        $sql = "SELECT * FROM `users` WHERE `id` = $user and `status` = 1 "; 
        $result = mysqli_query($con, $sql);
        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
            $userData = array(
                "userId"=> $user,
                "userName"=> $row['name'],
                "userEmail"=> $row['email'],
                "userType"=> $row['type'],
                "permission" => $row['permission'],
                "image" => $row['img']
            );
            return $userData;
        }
        else{
            logout();
            header('Location: auth.php');
        }

    }
    else{
        logout();
        header('Location: auth.php');
    }
}

function logout(){
    setcookie('user', '', time() + (-86400 * 30), "/");
    header('Location: auth.php');
}


function login($email, $password, $con){
    $sql = "SELECT * FROM `users` WHERE `email` = '$email' and `password` = '$password' AND `status` = 1"; 
    $result = mysqli_query($con, $sql);
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        setcookie('user', $row['id'], time() + (86400 * 30), "/");
        header('Location: index.php');
    }
    else{
        header('Location: auth.php?error=true');
    }
}   
?>
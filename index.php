<?php 
    include_once 'config/db.php';
    include_once 'config/authHandle.php';

    $userData = checkUser($con);
    
    echo $userData['userName'];
    
?>
<?php 

include_once 'db.php';

if(isset($_GET['To']) && isset($_GET['id'])){
    $id = $_GET['id'];
    $to = $_GET['To'];

    $sql = "UPDATE `users` SET `status`= $to WHERE `id` = $id";
    $result = mysqli_query($con, $sql);

    header('location: ../users.php');
}
else{
    echo "Worng Call";
}
?>
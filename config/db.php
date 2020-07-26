<?php
ob_start();

$servername = "localhost";
$username = "admin";
$password = "qwerty";
$database = "phpadminpanel";

// Create connection
$con = new mysqli($servername, $username, $password, $database);

// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}
//echo "Connected successfully";
?>
<?php
ob_start();

$servername = "localhost";
$username = "adminpanel";
$password = "Ky8*2iv2";
$database = "adminpanel";

// Create connection
$con = new mysqli($servername, $username, $password, $database);

// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}
//echo "Connected successfully";
?>
<?php

$servername = "192.168.56.117";
$username = "ecomuser";
$password = "ecompassword";
$db = "ecommerece";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>

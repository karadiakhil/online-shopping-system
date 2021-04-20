<?php

$servername = "devops.cqmdt0h7v6tb.eu-west-1.rds.amazonaws.com";
$username = "admin";
$password = "admin123";
$db = "onlineshop";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>

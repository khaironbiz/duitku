<?php
$server_host = $_SERVER['SERVER_NAME'];
if($server_host == "localhost") {
    $servername = "localhost";
    $database   = "market";
    $username   = "root";
    $password   = "";
}else{
    $servername = "localhost";
    $database   = "tsicoid_market";
    $username   = "tsicoid_khairon";
    $password   = "@Sql250909#";
}


// Create connection

$connect    = mysqli_connect($servername, $username, $password, $database);

// Check connection

if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

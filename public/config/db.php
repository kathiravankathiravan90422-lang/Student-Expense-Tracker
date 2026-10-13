<?php

$host = "db01.dbhost.dev";
$user = "user_452hwcmws";
$password = "p452hwcmws";
$database = "db_452hwcmws";
$port = 5051;

$conn = new mysqli($host, $user, $password, $database,$port);

if ($conn->connect_error) {
    die("Database Connection Failed: " . $conn->connect_error);
}

$conn->set_charset("utf8mb4");

?>
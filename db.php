<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "emisonics";

$conn = new mysqli($host, $user, $pass, $dbname);

if($conn->connect_error) {
    die("connection failed:" . $conn->connect_error);
}
?>
<?php
$servername = "localhost";
$username = "Carlos";
$password = "karloz1998";
$db = "PHPCarlos";

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>
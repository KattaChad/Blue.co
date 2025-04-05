<?php
$host = 'localhost';
$user = 'root';
$password = '1234';
$db = 'BLUECO';

$conn = new mysqli($host, $user, $password, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<?php

$servername = "localhost";
$username = "root";
$password = "789512346";
$db = "aptech_php_15_ss4";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";

$sql = 'SELECT * FROM users WHERE email="' . $_POST['email'] . '" and password="' . $_POST['password'] . '"';
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo '<p style="color:green">Dang nhap thanh cong</p>';
} else {
    echo '<p style="color:red">Dang nhap that bai</p>';
}

$conn->close();

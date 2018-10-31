<?php

// Create connection
include 'test_connect.php';
$conn = connect();

$sql = 'SELECT * FROM users WHERE email="' . $_POST['email'] . '" and password="' . $_POST['password'] . '"';
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo '<p style="color:green">Dang nhap thanh cong</p>';
} else {
    echo '<p style="color:red">Dang nhap that bai</p>';
}

$conn->close();

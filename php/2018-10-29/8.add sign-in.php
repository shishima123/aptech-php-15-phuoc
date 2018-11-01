<?php

// include 'test_connect.php';
// $conn = connect();
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

$username = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

// echo "Connected successfully";
$sql = "INSERT INTO users (name, email, password)
VALUES ('$username', '$email', '$password')";

if ($conn->query($sql) === true) {
    echo "Sign-in susscess";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

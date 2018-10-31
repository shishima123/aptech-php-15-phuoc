<?php
$servername = "localhost";
$username = "root";
$password = "789512346";
// $db = "aptech_php_15_ss3";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";
$sql = "CREATE DATABASE aptech_php_15_ss4";
if ($conn->query($sql) === true) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}
$conn->close();

<?php

include 'test_connect.php';
$conn = connect();

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

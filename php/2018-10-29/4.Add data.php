<?php
include 'test_connect.php';
$conn = connect();

// echo "Connected successfully";
$sql = "INSERT INTO users (name, email, password)
VALUES ('Phuoc', 'Phuoc@example.com', '12345'),
('Deo', 'doe@example.com', '12345'),
('start', 'start@example.com', '12345'),
('sss', 'sss@example.com', '12345'),
('qqq', 'qqq@example.com', '12345')
";

if ($conn->query($sql) === true) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

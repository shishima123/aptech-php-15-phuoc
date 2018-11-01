<?php
$servername = "localhost";
$username = "root";
$password = "789512346";
$db = "abc";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// kiem tra dang nhap
$sql = "SELECT id, lastname,email,password FROM MyGuests";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // var_dump($_POST);
    $y = 0;

    foreach ($result as $x => $x_value) {
        if ($_POST['email'] === $x_value['email'] & $_POST['password'] === $x_value['password']) {
            $y = 1;
            break;
        }
    }
    _print_result();
} else {
    echo "0 results";
}

function _print_result()
{
    if ($GLOBALS['y'] === 1) {
        echo "Dang nhap thanh cong";
    } else {
        echo "Dang nhap that bai";
    }
}

$conn->close();

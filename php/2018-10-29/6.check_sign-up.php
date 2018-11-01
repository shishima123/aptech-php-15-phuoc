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

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

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
        echo '<p style="color:green">Dang nhap thanh cong</p>';
    } else {
        echo '<p style="color:red">Dang nhap that bai</p>';
    }
}

$conn->close();

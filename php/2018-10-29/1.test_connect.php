<?php
function connect()
{

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
    return $conn;
}

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

// Create database

// create table
// $sql = "CREATE TABLE MyGuests (
// id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
// firstname VARCHAR(30) NOT NULL,
// lastname VARCHAR(30) NOT NULL,
// email VARCHAR(50),
// reg_date TIMESTAMP
// )";

// insert data
// $sql = "INSERT INTO MyGuests (firstname, lastname, email)
// VALUES ('John', 'Doe', 'john@example.com')";

// if ($conn->query($sql) === true) {
//     $last_id = $conn->insert_id; // last auto_crement
//     echo "New record created successfully. Last inserted ID is: " . $last_id;
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }

// select trong sql
// $sql = "SELECT id, firstname, lastname FROM MyGuests";
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
//     // output data of each row
//     while ($row = $result->fetch_assoc()) {
//         echo "id: " . $row["id"] . " - Name: " . $row["firstname"] . " " . $row["lastname"] . "<br>";
//     }
// foreach ($result as $x => $x_value) {
        // echo $x;
        // echo "<br>";
        // echo $x_value;
        // echo "<br>";
        // var_dump($x_value);
        // echo "<br>";
        // echo $x_value["lastname"];
        // echo "<br>";
        // echo $x_value['email'];
        // echo $x_value['lastname'];
    // }
// } else {
//     echo "0 results";
// }

// kiem tra dang nhap
$sql = "SELECT id, lastname,email,password FROM MyGuests";
$result = $conn->query($sql);
echo "<br>";
if ($result->num_rows > 0) {
    // var_dump($_POST);
    echo "<br>";
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
        echo "Dang nhap that bai<br>";
        // Header("Location: ./form.php");
    }
}




$conn->close();
?>
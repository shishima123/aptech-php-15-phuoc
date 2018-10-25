<?php
var_dump($_POST);
if ($_POST['email'] === "a@gmail.com" & $_POST['password'] === "") {
    // $_SERVER['REQUEST_METHOD'] == "GET";


} else {
    Header("Location: ./form.php");
}


?>
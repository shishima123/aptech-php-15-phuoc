<!DOCTYPE html>
    <html>
    <head>
    </head>
    <body>
    <form action = "<?php echo $_SERVER[" PHP_SELF "] ?>" method = "post" >
    Name : <input type = "text" name = "name" >
    <br >
    Project : <input type = "text" name = "project" >
    <br >
    <button type = "submit" > Submit </button >
    <br>
    </form >
    </body >
    </html >
    <?php
    // if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $project = $_POST["project"];
    echo "Your name is $name and name of your project is $project";
    // }
    ?>
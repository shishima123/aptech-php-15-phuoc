<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap4.css">
</head>

<body>
    <div class="container">
        <div class="row" style="height:100vh">
            <div class="col-12 d-flex justify-content-center align-items-center">
                <form class="d-flex flex-column align-items-center" action="add sign-in.php" method="POST">

                    Name:<input class="mb-3" type="text" name="name" placeholder="UserName">

                    Email:<input class="mb-3" type="email" name="email" placeholder="Email">

                    Password: <input class="mb-3" type="password" name="password" placeholder="Password">

                    <button class="btn badge-primary" type="submit">Sign-in</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>

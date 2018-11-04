<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Table-User</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap4.css')}}">
</head>

<body>
    <div class="container mt-3 border-bottom">
        <div class="row">
            <div class="col-2 d-flex justify-content-center align-items-center">
                <button class="btn btn-primary">Home</button>
            </div>
            <div class="col-10 d-flex justify-content-center align-items-center ">
                <h1 class="font-weight-bold">LARAVEL CRUD USERS DEMO
                </h1>
            </div>
        </div>
    </div>

    <div class="container my-2">
        <div class="row">
            <div class="col-12">
                <span class="badge badge-success text-uppercase text-left">index page</span>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
foreach ($users as $user) {
    echo '<tr class="text-center">';
    echo '<th scope="row">' . $user->id . '</th>';
    echo '<td>' . $user->name . '</td>';
    echo '<td>' . $user->email . '</td>';
    echo '<td class="d-flex justify-content-around align-items-center">';
    echo '<form action="' . $user->id . '" method="get"><button class="btn btn-sm btn-primary rounded-0">Show</button>';
    echo '</form><form action="" method="get"><button class="btn btn-sm btn-warning rounded-0">Edit</button>';
    echo '</form><form action="" method="get"><button class="btn btn-sm btn-danger rounded-0">Delete</button></form></td></tr>';
}
// var_dump($users);
?>
                    </tbody>
                </table>
                <div class="d-flex justify-content-center">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#" rel="prev">«</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#" rel="next">»</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container mb-5">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center">
                    <span class="text-uppercase text-muted">
                        laravel crud users demo
                    </span>
                    <form action="create-user" method="get">
                        <button type="submit" class="btn btn-info text-uppercase font-weight-bold rounded-0">
                            create an user
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
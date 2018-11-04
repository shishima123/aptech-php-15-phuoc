<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap4.css')}}">
</head>
<body>
  <div class="container my-3">
  <div class="d-flex flex-row">
    <div class="col-12 px-0">
      <div class="d-flex flex-row align-items-center">
        <div class="col-1 pl-0">
          <form action="http: //localhost/aptech-php-15-phuoc/php/2018-11-02/mvc-ss6/public/
" method="get">
            <button class="btn btn-primary rounded-0 font-weight-bold">Home</button>
          </form>
        </div>
        <div class="col-10">
          <h1 class="text-center font-weight-bold text-uppercase">laravel crud users demo</h1>
        </div>
        <div class="col-1"></div>
      </div>
    </div>
  </div>
</div>
  <hr>
 <div class="container">
  <div class="row">
    <div class="col-12">
      <span class="badge badge-success text-uppercase text-left">show page</span>
    </div>
  </div>
</div>
<div class="container mt-3">
  <div class="row">
    <div class="col-12">

      <table class="table table-hover table-bordered">
        <thead class="">
          <tr class="text-center">
            <th scope="col" class="">#</th>
            <th scope="col" class="">Name</th>
            <th scope="col" class="">Email</th>
            <th scope="col" class="">Password</th>
            <!-- <th scope="col" class="">Created Date</th>
            <th scope="col" class="">Updated Date</th> -->
            <th scope="col" class="">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr class="text-center">
          <?php
echo '<th scope="row">' . $users[0]->id . '</th>';
echo '<td>' . $users[0]->name . '</td>';
echo '<td>' . $users[0]->email . '</td>';
echo '<td>' . $users[0]->password . '</td>';
echo '<td class="d-flex border-0 align-items-center"><form action="#" method="get"><button class="btn btn-sm btn-warning mx-2 rounded-0">Edit</button></form><form action="#" method="post"><input type="hidden" name="_method" value="delete"><button class="btn btn-sm btn-danger mx-2 rounded-0">Delete</button></form></td>';
// var_dump($users);
 ?>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
  <hr>
  <div class="container mb-5">
  <div class="row">
    <div class="col-12">
      <div class="d-flex justify-content-between align-items-center">
        <span class="text-uppercase text-muted">
      laravel crud users demo
    </span>
        <form action="https://namcoi.com/projects/laravel-crud/users/create" method="get">
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

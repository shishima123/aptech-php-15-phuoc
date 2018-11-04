<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Create-user</title>
  <link rel="stylesheet" href="{{asset('css/bootstrap4.css')}}">
</head>

<body>
  <div class="container my-3">
    <div class="d-flex flex-row">
      <div class="col-12 px-0">
        <div class="d-flex flex-row align-items-center">
          <div class="col-1 pl-0">
            <form action="#" method="get">
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
 
  <div class="container">
    <div class="row">
      <div class="col-12">
        <span class="badge badge-success text-uppercase text-left">create page</span>
      </div>
    </div>
  </div>

  <div class="container mt-3">
    <div class="d-flex flex-row">
      <div class="col-12 px-0">
        <form action="#" method="post">
          <div class="form-group ">
            <label class="text-uppercase font-weight-bold" for="name">name</label>
            <input type="text" class="form-control rounded-0" id="name" placeholder="Name" name="name">
          </div>
          <div class="form-group ">
            <label class="text-uppercase font-weight-bold" for="email">email</label>
            <input type="email" class="form-control rounded-0" id="email" placeholder="Email" name="email">
          </div>
          <div class="form-group ">
            <label class="text-uppercase font-weight-bold" for="password">password</label>
            <input type="password" class="form-control rounded-0" id="password" placeholder="Password" name="password">
          </div>
          <div class="form-group ">
            <button type="submit" class="btn btn-danger text-uppercase rounded-0 font-weight-bold">
              confirm
            </button>
          </div>
        </form>
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
          <form action="#" method="get">
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
@extends('master')
@section('tittle','List User')
@section('page-description','INDEX PAGE')
@section('table')
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
    echo '</form><form action="'.$user->id.'/edit'.'" method="get"><button class="btn btn-sm btn-warning rounded-0">Edit</button>';
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
@endsection
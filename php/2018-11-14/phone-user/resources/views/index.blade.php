<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/bs4.css') }}">
</head>

<body>
    <Form action="{{ asset('user') }}" method="POST" class="mt-5 d-flex justify-content-center">
        {{ csrf_field() }}
        Name:<input id="name_input" type="text" name='name' class="mx-2 text-center" value="">
        Phone Number:<input id="phone_number_input" type="text" name='phone_number' class="mx-2 text-center">
        <button id='btn_create' type="submit" class="btn btn-success mx-2">Create</button>
        {{-- <button type="submit" class="btn btn-secondary" formaction="{{ asset('2') }}">Edit</button>
        {{ method_field('PUT') }} --}}
    </Form>
<div class="">

</div>
    <div class="w-100 d-flex justify-content-center mt-5">
        <table class="table table-bordered table-striped table-hover text-center w-75">
            <tr>
                <th scope="col">id</th>
                <th scope="col">Name</th>
                <th scope="col">Phone</th>
                <th scope="col">Action</th>
            </tr>
            @foreach ($users as $user)
            <tr>
                <th id="{{ $user->id }}" scope="row">{{ $user->id }}</th>
                <td>{{ $user->name }}</td>
                <td>{{ $user->phone->phone_number }}</td>

                <td class="d-flex justify-content-around">
                    <form action="{{ $user->id }}" method="GET">
                        <button class="btn btn-primary">Show</button>
                    </form>
                    <button id="btn_edit_{{ $user->id }}" class="btn btn-warning">Edit</button>

                    <form action="{{ asset('user/'.$user->id) }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script>
        $("button").click(function () {
            if (this.id != 'btn_create') {
                var lastChar = this.id.slice(9);
                var url = window.location.href + '/edit/' + lastChar;
                $.get(url, function (data, status) {
                    $("#name_input").val(data.name);
                    $("#phone_number_input").val(data.phone.phone_number);
                    $("#btn_create").html('Save');
                });
            }
        });
    </script>
</body>

</html>
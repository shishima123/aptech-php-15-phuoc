<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/bs4.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    {{-- phải có thẻ meta này để ko bị laravel báo lỗi thiếu token --}}
</head>

<body>

    <Form action="" method="POST" class="mt-5 d-flex justify-content-center" id="form_login">
        Name:<input id="name_input" type="text" name='name' class="mx-2 text-center" value="">
        Phone Number:<input id="phone_number_input" type="text" name='phone_number' class="mx-2 text-center">
        <button id="btn_create" type="submit" class="btn btn-success mx-2">Create</button>
        {{-- <button type="submit" class="btn btn-secondary" formaction="{{ asset('2') }}">Edit</button>
        {{ method_field('PUT') }} --}}
    </Form>
    {{-- <div class="">

    </div> --}}
    <div class="w-100 d-flex justify-content-center mt-5">
        <table class="table table-bordered table-striped table-hover text-center w-75">
            <tr id="table">
                <th scope="col">id</th>
                <th scope="col">Name</th>
                <th scope="col">Phone</th>
                <th scope="col">Action</th>
            </tr>
            @foreach ($users as $user)
            <tr>
                <th id="{{ $user->id }}" scope="row">{{ $user->id }}</th>
                <td>{{ $user->name }}</td>
                @if(!!$user->phone)
                <td>{{ $user->phone->phone_number }}</td>
                @else
                <td>no phone number</td>
                @endif
                <td class="d-flex justify-content-around">
                    <form action="{{ $user->id }}" method="GET">
                        <button class="btn btn-primary">Show</button>
                    </form>
                    <form action="" method="GET">
                        <button id="btn_edit_{{ $user->id }}" class="btn btn-warning">Edit</button>
                    </form>

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
        $(document).delegate("button", "click", function (e) {
            if (this.id.includes("btn_edit_")) {
                e.preventDefault();
                var lastChar = this.id.slice(9);
                var url = window.location.href + '/edit/' + lastChar;
                // var k = $.Deferred()
                $.ajax({
                    async: false,
                    method: "GET",
                    url: url,
                    success: function (data) {
                        console.log(data)
                        $("#name_input").val(data.name);
                        $("#phone_number_input").val(data.phone.phone_number);
                    }
                });
                // k.resolve();
                // return k.promise();
            }
        });

        $('#btn_create').click(function (e) {
            e.preventDefault();
            // var l = $.Deferred()
            var url = window.location.href;
            // var data = $('form#form_login').serialize(); //lấy tất cả dữ liệu trong form
            $.ajaxSetup({ //Khai báo token csrf cho
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                async: false,
                'url': url,
                // data: data,
                data: {
                    'name': $("#name_input").val(),
                    'phone_number': $("#phone_number_input").val(),
                },
                'type': 'POST',
                success: function (data) {

                    $("#table").after('<tr><th id="' + data.id + '" scope="row">' + data.id +
                        '</th><td>' + data.name + '</td>@if(!!$user->phone)<td>' + data.phone.phone_number +
                        '</td>@else<td>no phone number</td>@endif<td class="d-flex justify-content-around"><form action="' +
                        data.id +
                        '" method="GET"><button class="btn btn-primary">Show</button></form><button id="btn_edit_' +
                        data.id +
                        '" class="btn btn-warning">Edit</button><form action="' + window.location
                        .href + '/' + data.id +
                        '" method="POST">{{ csrf_field() }}{{ method_field("DELETE") }}<button class="btn btn-danger">Delete</button></form></td></tr>'
                    );
                    // console.log(data);
                    // document.open();
                    // document.write(data);
                    // document.close();
                }
            });
            // l.resolve();
            // return l.promise();
        });
        var url = window.location.href + '/edit/170';
        console.log(url);
        $.ajax({
            // async: false,
            method: "GET",
            url: url,
            success: function (data) {
                console.log(data)
            }
        });
    </script>
</body>

</html>
{{-- viet function in du lieu ra bang bang jquery,dung append do cac kieu
dung oop de viet
luc return data ve thi return json chu ko return ca file html --}}
<!DOCTYPE html>
<html>

<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <script language="javascript" src="http://code.jquery.com/jquery-2.0.0.min.js"></script>
    <script language="javascript">
        function load_ajax(){

                $.ajax({
                url : "connect-ajax.php",
                    type : "post",
                    dataType:"json",
                    data : {
                        var username = $('#username').val();
                        var email = $('#email').val();
                    },
                    success : function (result){
                        $('#result').html(result);
                        console.log(username);
                    }
                });
            }
        </script>
</head>

<body>
    <form method="POST">
        Email: <input id="email" type="email" name="email" placeholder="Email">
        <br>
        Password: <input id="password" type="password" name="password" placeholder="Password">
        <br>
        <br>
        <button type="submit" name="clickme" id="clickme" onclick="load_ajax()" value="Click Me">Dang nhap</button>
        <div id="result">
        </div>
    </form>
</body>

</html>

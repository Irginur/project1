<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
    <style>
        body{
            background: url('{{asset('img/flat,750x,075,f-pad,750x1000,f8f8f8.jpg')}}')
        }
       h2{
        text-align: center;
        color:rgb(5, 126, 255);
       }
       form {
        /* background: url('{{asset('img/5242273.jpg')}}'); */
            margin: 250px auto;
            width: 400px;
            padding: 10px;
            /* border: 1px solid #ccc; */
            
        }
        input[type=email], input[type=password] {
            margin: 5px;
            width: 100%;
            padding: 10px;
            margin-left: 55px;
            /* background: rgba(155, 154, 154, 0.5); */
            /* border:0px; width: 100%; */
        }
        input[type=submit] {
            margin: 0px ;
            float: left;
            padding: 2px;
            width: 90px;
            border: 1px solid #ffffff;
            color: #ffffff;
            background: blue;
        }
        a{
            margin-left: 54px
        }
    </style>
</head>
<body>
    <form action="{{ url('user/Auth') }}" method="post">
        <h2>Login</h2>
        @csrf
        <table>
            <tr>
                <td><input type="email" name="email" id="email" placeholder="Email"></td>
            </tr>
            <tr>
                <td><input type="password" name="password" id="password" placeholder="Password"></td>
            </tr>
            <tr>
                <td><a href="user/add" class="text-light btn btn-outline-light btn-primary">REGISTRASI</a></td>
                <td colspan="2"><input type="submit" value="LOGIN"></td>
            </tr>
        </table>
    </form>
</body>
</html>
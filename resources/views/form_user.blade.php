<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
<style>
    form {
        margin: 250px auto;
    width: 400px;
    padding: 10px;
    border: 1px solid #ccc;
    
}
input[type=email], input[type=password],input[type=text] {
    margin: 5px auto;
    width: 100%;
    padding: 10px;
    margin-left: 75px;
}
input[type=submit] {
    margin: 1px;
    float: right;
    padding: 5px;
    width: 150px;
    border: 15px solid #fff;
    color: #fff;
    background: rgb(42, 0, 196);
    cursor: pointer;
}
a{
            padding: 5px;
            margin-left: 54px;
        }
</style>

<form action="{{ $action }} " method="post">
    @csrf
    <table>
        <tr>
            {{-- <td>id</td> --}}
            <td><input type="text" name="id" id="id" value="{{ $user->id }}" placeholder="Masukan Id"></td>
        </tr>
        <tr>
            {{-- <td>nama</td> --}}
            <td><input type="text" name="name" id="name" value="{{ $user->name }}" placeholder="Masukan Nama"></td>
        </tr>
        <tr>
            {{-- <td>email</td> --}}
            <td><input type="email" name="email" id="email" value="{{ $user->email }}" placeholder="Masukan Email"></td>
        </tr>
        <tr>
                {{-- <td valign="top">password</td> --}}
                <td> <input type="password" name="password" id="password" value="{{ $user->password }}" placeholder="Masukan Password"></td>
        </tr>
        <tr>
            <td>
                <a href="/" class="text-white btn btn-outline-light btn-primary">KELUAR</a>
            </td>
            <td colspan="2">
                <input type="submit" value="{{ $tombol }}">
            </td>
        </tr>
    </table>
</form>
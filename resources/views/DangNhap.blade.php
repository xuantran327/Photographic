<!DOCTYPE html>
<html>

<head>
    <title>{{ $title }}</title>
    <link rel="shortcut icon" href="/img/download.png" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/myStyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body class="text-dark" id="bgImage">
    <div style="border-radius: 50px" class="bg-white text-center p-5 ml-auto mx-auto login-box radius-10 margin-auto">
        <h1>LOGIN</h1>
        @include('alert')
        <form action="/admin/users/login/store" method="POST" class="mt-5">
            <input type="text" id="taikhoan" name="email" placeholder="Tài khoản" class="form-control pl-3 pr-2 my-2 mx-auto width-300">
            <input type="password" id="matkhau" name="password" placeholder="Mật khẩu" class="form-control pl-3 pr-2 my-2 mx-auto width-300">
            <div><button type="submit" class="btn btn-primary" id="login-btn" style="border-radius: 100px;margin: 9px"><b>Đăng nhập</b></button></div>
            <a href=""><button type="button" class="btn btn-danger" style="border-radius: 100px">Quên Mật Khẩu?</button></a>
            @csrf
        </form>
        <div class="mt-3"><b>Hoặc đăng nhập bằng</b><br>
            <button class="btn pt-1 pb-2 border-none btn-1 mt-3 mb-2 text-light bg-primary width-300">
                    <i class="fa fa-facebook-square"></i> <b>Tài khoản Facebook</b>
                </button><br>
            <button class="btn pt-1 pb-2 border-none btn-1 mt-2 mb-3 text-light bg-danger width-300">
                    <i class="fa fa-google"></i> <b>Tài khoản Google</b>
                </button><br>
        </div>
        <div><a href="{{ route('DangKi') }}" class="text-dark text-decoration-none"><b>Bạn chưa có tài khoản? Đăng ký</b><br></div>
        </div>
    </body>
</html>

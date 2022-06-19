<!DOCTYPE html>
<html>
    <head>
        <title>Sign up</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="shortcut icon" href="/img/download.png" type="image/x-icon">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/myStyle.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
    <body class="text-dark" id="bgImage">
        <div style="border-radius: 50px" class="bg-white text-center p-3 ml-auto mx-auto login-box margin-auto">
            <h1 class="mt-1">Sign up</h1>
            <form action="{{ route('process') }}" method="POST" class="mt-5">
                @csrf
                @include("alert")
                Name: <input type="text" id="tentaikhoan" name="name" placeholder="name" class="form-control pl-3 pr-2 my-2 mx-auto width-300">
               Email: <input type="text" id="taikhoanmoi" name="email" placeholder="Email" class="form-control pl-3 pr-2 my-2 mx-auto width-300">
                Password: <input type="password" id="matkhaumoi" name="password" placeholder="Password"
                        class="form-control pl-3 pr-2 my-2 mx-auto width-300">
                {{-- <input type="date" id="ngaysinh" name="ngaysinh" class="form-control pl-3 pr-2 my-2 mx-auto width-300"
                        data-toggle="tooltip" title="Thiết lập ngày sinh của bạn"> --}}
                        Confirm Password :<input type="password" id="matkhaumoi" name="Confirm Password" placeholder="Confirm Password"
                        class="form-control pl-3 pr-2 my-2 mx-auto width-300">
                <div><button type="submit" class="btn btn-danger" style="border-radius: 100px"><b>Tiếp tục</b></button></div>
            </form>
            <div class="mt-3"><b>Hoặc đăng ký bằng</b><br>
                <button class="btn pt-1 pb-2 border-none btn-1 mt-3 mb-1 text-light bg-primary width-300">
                    <i class="fa fa-facebook-square"></i> <b>Tài khoản Facebook</b>
                </button><br>
                <button class="btn pt-1 pb-2 border-none btn-1 mt-1 mb-3 text-light bg-danger width-300">
                    <i class="fa fa-google"></i> <b>Tài khoản Google</b>
                </button><br>
            </div>
            <div><a href="{{ route('DangNhap') }}" class="text-dark text-decoration-none"><b>Bạn đã có tài khoản? Đăng nhập</b><br></div>
        </div>
        <script>
            $(document).ready(function(){
                $('[data-toggle="tooltip"]').tooltip();
            });
        </script>
    </body>
</html>

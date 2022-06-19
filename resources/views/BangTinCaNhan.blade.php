<!DOCTYPE html>
<html>
    <head>
        <title>Bảng tin cá nhân</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="shortcut icon" href="/img/download.png" type="image/x-icon">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/myStyle.css">
        <link rel="stylesheet" href="/css/gallery.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
            integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    </head>
    <body class="bg-light" onresize="resizeFunc()">
        <!-- Thanh điều hướng -->
        <nav class="container-fluid bg-light sticky-top">
            <!-- Nút logo -->
            <a href="{{ route('main') }}" class="btn btn-light rounded-circle float-left px-0">
                <i class="fas fa-home"></i>
            </a>
            <!-- Ô tìm kiếm -->
            <form action="#" method="GET" class="form-group form-inline ml-3 border-0 float-left">
                <div class="input-group" id="input-group">
                    <input id="text1" type="text" class="form-control bg-gray border-0 border-radius-4 pl-3" placeholder="Tìm kiếm">
                    <div class="input-group-prepend" id="select-prepend">
                        <span class="input-group-text bg-gray border-0" style="padding-top:6px;padding-bottom:6px;">
                            <div style="background-color:rgb(216,216,216);width:1.5px;height:100%"></div>
                        </span>
                        <select id="select" name="type" class="form-control input-group-text bg-gray border-0 pr-4 text-black">
                            <option value="1" class="font-weight-bold my-2 bg-light">Tất cả các ghim</option>
                            <option value="2" class="my-2 bg-light">Video</option>
                            <option value="3" class="my-2 bg-light">Mọi người</option>
                            <option value="4" class="my-2 bg-light">Bảng</option>
                            <option value="5" class="font-weight-bold my-2 bg-light">Ghim của bạn</option>
                        </select>
                    </div>
                </div>
            </form>
            <!-- Nút thông báo -->
            <div class="dropdown nav-dropdown">
                <button href="#" class="btn btn-light button rounded-circle float-left px-0 ml-3" data-toggle="dropdown">
                    <i class="fas fa-bell"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right radius-10 py-3 bg-light" style="width:410px;padding-right:1.95rem;">
                    <div style="width:100%;"><div class="radius-10 py-0 px-2 mx-3 list-item-1">
                        <div class="pt-1 pb-3 mx-auto"><b class="text-black">Thông báo</b></div>
                    </div></div>
                    <!-- Danh sách thông báo -->
                    <div class="cursor-default"><div class="radius-10 py-0 px-2 mx-3 list-item-1 pt-2">
                        <div class="email-list" style="height:400px;">
                            <a href="#"><div class="mr-2 pr-2 radius-10 email-list-item my-1 cursor-pointer"><div class="py-1 list-item-1 mx-3" style="display:block;">
                                <span>Bạn có 99 ý tưởng mới đang chờ!</span><br>
                                <span class="text-muted">1 tuần</span><br>
                                <div class="my-2 mr-3 notification-img">
                                    <img src="/img/thumb-350-1039573.jpg" alt="D2bqT3aU4AIGaMd.jfif" class="radius-10 cropped" style="width:100%;height:150px;">
                                </div>
                            </div></div></a>
                            <a href="#"><div class="mr-2 pr-2 radius-10 email-list-item my-1 cursor-pointer"><div class="py-1 list-item-1 mx-3" style="display:block;">
                                <span>Bạn có 99 ý tưởng mới đang chờ!</span><br>
                                <span class="text-muted">1 tuần</span><br>
                                <div class="my-2 mr-3 notification-img">
                                    <img src="/img/thumb-350-1039573.jpg" alt="D2bqT3aU4AIGaMd.jfif" class="radius-10 cropped" style="width:100%;height:150px;">
                                </div>
                            </div></div></a>
                            <a href="#"><div class="mr-2 pr-2 radius-10 email-list-item my-1 cursor-pointer"><div class="py-1 list-item-1 mx-3" style="display:block;">
                                <span>Bạn có 99 ý tưởng mới đang chờ!</span><br>
                                <span class="text-muted">1 tuần</span><br>
                                <div class="my-2 mr-3 notification-img">
                                    <img src="/img/thumb-350-1039573.jpg" alt="D2bqT3aU4AIGaMd.jfif" class="radius-10 cropped" style="width:100%;height:150px;">
                                </div>
                            </div></div></a>
                        </div>
                    </div></div>
                </div>
            </div>
            <!-- Nút hộp thư -->
            <div class="dropdown nav-dropdown">
                <button href="#" id="#" class="btn btn-light button rounded-circle float-left px-0" style="#" data-toggle="dropdown">
                    <i class="fas fa-comment-dots"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right radius-10 py-3 bg-light" style="width:410px;padding-right:1.95rem;">
                    <div style="width:100%;"><div class="radius-10 py-0 px-2 mx-3 list-item-1">
                        <div class="pt-1 pb-3 mx-auto"><b class="text-black">Hộp thư đến</b></div>
                        <!-- Nút Tùy chọn trong dropdown Hộp thư -->
                        <div class="dropdown option-dropdown" style="position:fixed;right:1rem;">
                            <button class="btn btn-light button rounded-circle px-0" style="margin:0;" data-toggle="dropdown">
                                <i class="fas fa-ellipsis-h"></i>
                                <div class="dropdown-menu dropdown-menu-right radius-10 py-3 bg-light" id="option-dropdown-menu" style="width:250px;padding-right:1.95rem;">
                                    <!-- Đánh dấu tất cả là đã đọc -->
                                    <div><div class="radius-10 py-0 px-2 mx-3 list-item-1 hover">
                                        <div class="py-1"><b>Đánh dấu tất cả là đã đọc</b></div>
                                    </div></div>
                                </div>
                            </button>
                        </div>
                    </div></div>
                     <!-- Tìm tên người nhận -->
                    <div><div class="radius-10 py-2 px-2 mx-3 list-item-1">
                        <input type="text" onkeyup="#" style="width:100%;height:40px;border-radius:20px;" class="form-control bg-gray border-0 border-radius-4 pl-3"  placeholder="Tìm kiếm theo tên hoặc email">
                    </div></div>
                    <!-- Danh sách người nhận -->
                    <div class="cursor-default"><div class="radius-10 py-0 px-2 mx-3 list-item-1 pt-2">
                        <div class="email-list" style="height:400px;">
                            <div class="mr-2 pr-2 radius-10 email-list-item my-1 cursor-pointer"><div class="py-1 list-item-1">
                                <div class="mx-2" style="width:60px;">
                                    <img src="{{ session()->get('users')->img; }}" alt="taeyeon.jpg" style="#" class="rounded-circle">
                                </div>
                                <div style="width:200px;" class="#">
                                    <div class="#"><b>{{session()->get('users')->name;}}</b></div>
                                    <div class="text-dark"> {!! session()->get('users')->email; !!}</div>
                                </div>
                                <div>
                                    <b><input class="send-btn-1 mr-2 mt-1" type="button" value="Gửi"></b>
                                </div>
                            </div></div>
                            <div class="mr-2 pr-2 radius-10 email-list-item my-1 cursor-pointer"><div class="py-1 list-item-1">
                                <div class="mx-2" style="width:60px;">
                                    <img src="{{ session()->get('users')->img; }}" alt="taeyeon.jpg" style="#" class="rounded-circle">
                                </div>
                                <div style="width:200px;" class="#">
                                    <div class="#"><b>{{session()->get('users')->name;}}</b></div>
                                    <div class="text-dark">{{session()->get('users')->email;}}</div>
                                </div>
                                <div>
                                    <b><input class="send-btn-1 mr-2 mt-1" type="button" value="Gửi"></b>
                                </div>
                            </div></div>
                            <div class="mr-2 pr-2 radius-10 email-list-item my-1 cursor-pointer"><div class="py-1 list-item-1">
                                <div class="mx-2" style="width:60px;">
                                    <img src="{{ session()->get('users')->img; }}" alt="taeyeon.jpg" style="#" class="rounded-circle">
                                </div>
                                <div style="width:200px;" class="#">
                                    <div class="#"><b>{{session()->get('users')->name;}}</b></div>
                                    <div class="text-dark"> {!! session()->get('users')->email; !!}</div>
                                </div>
                                <div>
                                    <b><input class="send-btn-1 mr-2 mt-1" type="button" value="Gửi"></b>
                                </div>
                            </div></div>
                            <div class="mr-2 pr-2 radius-10 email-list-item my-1 cursor-pointer"><div class="py-1 list-item-1">
                                <div class="mx-2" style="width:60px;">
                                    <img src="{{ session()->get('users')->img; }}" alt="taeyeon.jpg" style="#" class="rounded-circle">
                                </div>
                                <div style="width:200px;" class="#">
                                    <div class="#"><b>{{session()->get('users')->name;}}</b></div>
                                    <div class="text-dark"> {!! session()->get('users')->email; !!}</div>
                                </div>
                                <div>
                                    <b><input class="send-btn-1 mr-2 mt-1" type="button" value="Gửi"></b>
                                </div>
                            </div></div>
                            <div class="mr-2 pr-2 radius-10 email-list-item my-1 cursor-pointer"><div class="py-1 list-item-1">
                                <div class="mx-2" style="width:60px;">
                                    <img src="{{ session()->get('users')->img; }}" alt="taeyeon.jpg" style="#" class="rounded-circle">
                                </div>
                                <div style="width:200px;" class="#">
                                    <div class="#"><b>{{session()->get('users')->name;}}</b></div>
                                    <div class="text-dark"> {!! session()->get('users')->email; !!}</div>
                                </div>
                                <div>
                                    <b><input class="send-btn-1 mr-2 mt-1" type="button" value="Gửi"></b>
                                </div>
                            </div></div>
                            <div class="mr-2 pr-2 radius-10 email-list-item my-1 cursor-pointer"><div class="py-1 list-item-1">
                                <div class="mx-2" style="width:60px;">
                                    <img src="{{ session()->get('users')->img; }}" alt="taeyeon.jpg" style="#" class="rounded-circle">
                                </div>
                                <div style="width:200px;" class="#">
                                    <div class="#"><b>{{session()->get('users')->name;}}</b></div>
                                    <div class="text-dark"> {!! session()->get('users')->email; !!}</div>
                                </div>
                                <div>
                                    <b><input class="send-btn-1 mr-2 mt-1" type="button" value="Gửi"></b>
                                </div>
                            </div></div>
                            <div class="mr-2 pr-2 radius-10 email-list-item my-1 cursor-pointer"><div class="py-1 list-item-1">
                                <div class="mx-2" style="width:60px;">
                                    <img src="{{ session()->get('users')->img; }}" alt="taeyeon.jpg" style="#" class="rounded-circle">
                                </div>
                                <div style="width:200px;" class="#">
                                    <div class="#"><b>{{session()->get('users')->name;}}</b></div>
                                    <div class="text-dark"> {!! session()->get('users')->email; !!}</div>
                                </div>
                                <div>
                                    <b><input class="send-btn-1 mr-2 mt-1" type="button" value="Gửi"></b>
                                </div>
                            </div></div>
                            <div class="mr-2 pr-2 radius-10 email-list-item my-1 cursor-pointer"><div class="py-1 list-item-1">
                                <div class="mx-2" style="width:60px;">
                                    <img src="{{ session()->get('users')->img; }}" alt="taeyeon.jpg" style="#" class="rounded-circle">
                                </div>
                                <div style="width:200px;" class="#">
                                    <div class="#"><b>{{session()->get('users')->name;}}</b></div>
                                    <div class="text-dark"> {!! session()->get('users')->email; !!}</div>
                                </div>
                                <div>
                                    <b><input class="send-btn-1 mr-2 mt-1" type="button" value="Gửi"></b>
                                </div>
                            </div></div>
                            <div class="mr-2 pr-2 radius-10 email-list-item my-1 cursor-pointer"><div class="py-1 list-item-1">
                                <div class="mx-2" style="width:60px;">
                                    <img src="{{ session()->get('users')->img; }}" alt="taeyeon.jpg" style="#" class="rounded-circle">
                                </div>
                                <div style="width:200px;" class="#">
                                    <div class="#"><b>{{session()->get('users')->name;}}</b></div>
                                    <div class="text-dark"> {!! session()->get('users')->email; !!}</div>
                                </div>
                                <div>
                                    <b><input class="send-btn-1 mr-2 mt-1" type="button" value="Gửi"></b>
                                </div>
                            </div></div>
                        </div>
                    </div></div>
                </div>
            </div>
            <!-- Nút avatar -->
            <a href="{{ route('users') }}" id="avatar" class="btn rounded-circle float-left p-0 ml-2 mr-3" style="margin-top:13px;padding-top:0;">
                <img src="{{ session()->get('users')->img; }}"  alt="taeyeon.jpg" class="rounded-circle m-0" style="#">
            </a>
            <!-- Nút dropdown -->
            <div class="dropdown float-left px-0 pt-3 bg-light">
                <button class="btn btn-light rounded-circle dropdown-toggle" type="button" data-toggle="dropdown"></button>
                <ul class="dropdown-menu dropdown-menu-right radius-10 py-3 bg-light" style="rigth:0;width:350px;">
                    <!-- Bảng tin cá nhân -->
                    <li class="mx-3"><a href="{{ route('users') }}"><div class="radius-10 py-1 list-item-1">
                        <div class="mr-3">
                            <img src="{{ session()->get('users')->img; }}" alt="taeyeon.jpg" style="width:80px;height:80px;" class="rounded-circle">
                        </div>
                        <div style="width:250px;" class="pt-2">
                            <div class="mt-1"><b>{{session()->get('users')->name;}}</b></div>
                            <div class="text-dark">Xem bảng tin cá nhân</div>
                        </div>
                    </div></a></li>
                    <li class="dropdown-divider mx-3"></li>
                    <!-- Trợ giúp và hỗ trợ -->
                    <li class="mx-3"><a href="{{ route('help') }}"><div class="radius-10 py-0 list-item-1">
                        <div class="mr-1">
                            <div class="rounded-circle button1" style="text-align:center;background-color:rgb(248,249,250);"><i class="fa fa-question-circle"></i></div>
                        </div>
                        <div class="pt-2"><b>Trợ giúp & hỗ trợ</b></div>
                    </div></a></li>
                    <!-- Điều khoản và quyền riêng tư -->
                    <li class="mx-3"><a href="DieuKhoan.html"><div class="radius-10 py-0 list-item-1">
                        <div class="mr-1">
                            <div class="rounded-circle button1" style="text-align:center;background-color:rgb(248,249,250);padding-left:9px;padding-top:7px;">
                                <i class="fa fa-lock"></i>
                            </div>
                        </div>
                        <div class="pt-2"><b>Điều khoản & quyền riêng tư</b></div>
                    </div></a></li>
                    <!-- Đăng xuất -->
                    <li class="mx-3"><a href="{{ route('DangNhap') }}"><div class="radius-10 py-0 list-item-1">
                        <div class="mr-1">
                            <div class="rounded-circle button1" style="text-align:center;background-color:rgb(248,249,250);"><i class="fas fa-sign-out-alt"></i></div>
                        </div>
                        <div class="pt-2"><b>Đăng xuất</b></div>
                    </div></a></li>
                    <li class="dropdown-divider mx-3"></li>
                    <!-- Giới thiệu -->
                    <li class="mx-3"><a href="{{ route('blog') }}"><div class="radius-10 py-0 list-item-1">
                        <div class="mr-1">
                            <div class="rounded-circle button1" style="text-align:center;background-color:rgb(248,249,250);"><i class="fas fa-info-circle"></i></div>
                        </div>
                        <div class="pt-2"><b>Giới thiệu về chúng tôi</b></div>
                    </div></a></li>
                </ul>
            </div>
        </nav>
        <!-- Phần thân -->
        <div class="container-fluid">
            <div style="text-align:center;">
                <div style="width:120px;height:120px;" class="mx-auto">
                    <img src="{{ session()->get('users')->img; }}" alt="taeyeon.jpg" class="rounded-circle my-2" style="width:100%;height:100%;">
                </div>
                <h2 class="mt-4"><b>{{session()->get('users')->name;}}</b></h2>
                <p class="mb-2">{!! session()->get('users')->email; !!}</p>
                <p>999 người đang theo dõi</p>
            </div>
            <div class="mb-2">
                <!-- Nút Thông tin cá nhân -->
                <button onclick="window.location.href='ThongTinCaNhan.html'" class="btn btn-light float-left rounded-circle button2 ml-4" style="margin-top:-6px;"><i class="fas fa-pen"></i></button>
                <!-- Nút Gửi -->
                <div class="dropdown send-dropdown dropright display-inline-flex">
                    <button class="btn rounded-circle float-left btn-light dropdown button2" data-toggle="dropdown" style="margin-top:-6px;">
                        <i class="fa fa-send"></i>
                        <div class="dropdown-menu radius-10 py-3 bg-light" style="width:410px;padding-right:1.95rem;">
                            <!-- Gửi ghim ảnh -->
                            <span><div class="radius-10 py-0 px-2 mx-3 list-item-1">
                                <div class="pt-1 pb-3 mx-auto"><b>Gửi ghim này</b></div>
                            </div></span>
                            <div><div class="radius-10 py-0 px-2 mx-3 list-item-1 pb-4">
                                {{-- <div class="py-1 px-auto" style="display:inline-flex;" align="center">
                                    <div align="center" class="pr-2 send-item">
                                        <div class="px-auto">
                                            <img src="/img/facebook_logo.png" alt="facebook_logo.png" class="rounded-circle mx-auto send-img">
                                        </div>
                                        <div class="px-auto">Facebook</div>
                                    </div>
                                    <div align="center" class="px-2 send-item">
                                        <div class="px-auto">
                                            <img src="/img/instagram-logo.png" alt="instagram-logo.png" class="rounded-circle mx-auto send-img">
                                        </div>
                                        <div class="px-auto">Instagram</div>
                                    </div>
                                    <div align="center" class="px-2 send-item">
                                        <div class="px-auto">
                                            <img src="/img/email-logo.png" alt="email-logo.png" class="rounded-circle mx-auto send-img">
                                        </div>
                                        <div class="px-auto">Email</div>
                                    </div>
                                    <div align="center" class="pl-2 send-item">
                                        <div class="px-auto">
                                            <img src="/img/link-logo.jpg" alt="link-logo.jpg" class="rounded-circle mx-auto send-img">
                                        </div>
                                        <div class="px-auto">Sao chép liên kết</div>
                                    </div> --}}
                                </div>
                            </div></div>
                            <!-- Tìm tên người nhận -->
                            <div><div class="radius-10 py-2 px-2 mx-3 list-item-1">
                                <input type="text" style="width:100%;height:40px;border-radius:20px;" class="form-control bg-gray border-0 border-radius-4 pl-3"  placeholder="Tên hoặc email">
                            </div></div>
                            <!-- Danh sách người nhận -->
                            <div class="cursor-default"><div class="radius-10 py-0 px-2 mx-3 list-item-1 pt-2">
                                <div class="email-list">
                                    <div class="mr-2 pr-2 radius-10 email-list-item my-1 cursor-pointer"><div class="py-1 list-item-1">
                                        <div class="mx-2" style="width:60px;">
                                            <img src="{{ session()->get('users')->img; }}" alt="taeyeon.jpg" style="#" class="rounded-circle">
                                        </div>
                                        <div style="width:200px;" class="#">
                                            <div class="#"><b>{{session()->get('users')->name;}}</b></div>
                                            <div class="text-dark"> {!! session()->get('users')->email; !!}</div>
                                        </div>
                                        <div>
                                            <b><input class="send-btn-1 mr-2 mt-1" type="button" value="Gửi"></b>
                                        </div>
                                    </div></div>
                                    <div class="mr-2 pr-2 radius-10 email-list-item my-1 cursor-pointer"><div class="py-1 list-item-1">
                                        <div class="mx-2" style="width:60px;">
                                            <img src="{{ session()->get('users')->img; }}" alt="taeyeon.jpg" style="#" class="rounded-circle">
                                        </div>
                                        <div style="width:200px;" class="#">
                                            <div class="#"><b>{{session()->get('users')->name;}}</b></div>
                                            <div class="text-dark"> {!! session()->get('users')->email; !!}</div>
                                        </div>
                                        <div>
                                            <b><input class="send-btn-1 mr-2 mt-1" type="button" value="Gửi"></b>
                                        </div>
                                    </div></div>
                                    <div class="mr-2 pr-2 radius-10 email-list-item my-1 cursor-pointer"><div class="py-1 list-item-1">
                                        <div class="mx-2" style="width:60px;">
                                            <img src="{{ session()->get('users')->img; }}" alt="taeyeon.jpg" style="#" class="rounded-circle">
                                        </div>
                                        <div style="width:200px;" class="#">
                                            <div class="#"><b>{{session()->get('users')->name;}}</b></div>
                                            <div class="text-dark"> {!! session()->get('users')->email; !!}</div>
                                        </div>
                                        <div>
                                            <b><input class="send-btn-1 mr-2 mt-1" type="button" value="Gửi"></b>
                                        </div>
                                    </div></div>
                                    <div class="mr-2 pr-2 radius-10 email-list-item my-1 cursor-pointer"><div class="py-1 list-item-1">
                                        <div class="mx-2" style="width:60px;">
                                            <img src="{{ session()->get('users')->img; }}" alt="taeyeon.jpg" style="#" class="rounded-circle">
                                        </div>
                                        <div style="width:200px;" class="#">
                                            <div class="#"><b>{{session()->get('users')->name;}}</b></div>
                                            <div class="text-dark"> {!! session()->get('users')->email; !!}</div>
                                        </div>
                                        <div>
                                            <b><input class="send-btn-1 mr-2 mt-1" type="button" value="Gửi"></b>
                                        </div>
                                    </div></div>
                                </div>
                            </div></div>
                        </div>
                    </button>
                </div>
                <!-- Nút Thêm -->
                <div class="dropdown dropleft">
                    <button class="btn float-right btn-light rounded-circle button2" data-toggle="dropdown" style="margin-top:-45px;">
                        <i class="fas fa-plus"></i>
                        <div class="dropdown-menu radius-10 py-3 bg-light dropdown-menu-left" style="width:150px;padding-right:1rem;">
                            <h5 class="dropdown-header">Tạo</h5>
                            <div class="hover ml-3 radius-10" onclick="window.location.href='TaoGhim.html'"><div class="radius-10 py-0 px-2 mr-3 list-item-1">
                                <div class="py-1"><b>Ghim</b></div>
                            </div></div>
                            <div class="hover ml-3 radius-10"><div class="radius-10 py-0 px-2 mr-3 list-item-1" data-toggle="modal" data-target="#myModal" id="openModal">
                                <div class="py-1"><b>Bảng</b></div>
                            </div></div>
                        </div>
                    </button>
                    <!-- Modal của chức năng Thêm bảng -->
                    <div class="modal fade" id="myModal">
                        <div class="modal-dialog">
                            <div class="modal-content margin-auto-2" style="border-radius:30px;">
                                <div class="modal-header border-bottom-0">
                                    <h4 class="modal-title my-2 mx-auto"><b>Tạo bảng</b></h4>
                                </div>
                                <form action="#" method="POST">
                                    <div class="modal-body">
                                    <div class="mx-2">
                                        <label class="control-label" for="name">Tên</label>
                                        <input id="name" name="name" type="text" class="form-control px-3 has-error has-feedback" placeholder='Như "Nơi nên đi" hoặc "Món ăn nên làm"'></input>
                                        <div class="form-check my-4">
                                            <label class="form-check-label" for="private">
                                                <input type="checkbox" class="form-check-input" id="private" name="option" value="private">
                                                <div>
                                                    <p class="my-0"><b>Giữ bí mật bảng này</b></p>
                                                    <p class="my-0">Để chỉ bạn và các cộng tác viên mới có thể thấy bảng này.</p>
                                                    <a class="my-0 text-black" href="TroGiup.html"><b>Tìm hiểu thêm</b></a>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="modal-footer border-top-0">
                                        <button type="button" class="btn-1 btn btn-gray" data-dismiss="modal"><b>Hủy</b></button>
                                        <button onclick="checkTableName()" type="submit" class="btn-1 btn btn-danger mr-2"><b>Tạo</b></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Sắp xếp -->
                <div class="dropdown dropleft">
                    <button class="btn float-right btn-light rounded-circle button2"  data-toggle="dropdown" style="margin-top:-45px;margin-right:40px;">
                        <i class="fas fa-sort"></i>
                        <div class="dropdown-menu radius-10 py-3 bg-light dropdown-menu-left" style="width:150px;padding-right:1.95rem;">
                            <h5 class="dropdown-header">Sắp xếp theo</h5>
                            <a href="#"><div class="radius-10 py-0 px-2 mx-3 list-item-1">
                                <div class="py-1 display-inline-flex">
                                    <b>A đến Z</b>
                                    <div style="position:fixed;right:22px;display:none;"><i class="fa fa-check"></i></div>
                                </div>
                            </div></a>
                            <a href="#"><div class="radius-10 py-0 px-2 mx-3 list-item-1">
                                <div class="py-1 display-inline-flex">
                                    <b>Z đến A</b>
                                    <div style="position:fixed;right:22px;"><i class="fa fa-check"></i></div>
                                </div>
                            </div></a>
                        </div>
                    </button>
                </div>
            </div>
            <div class="container-fluid" id="content">
                <div class="row">
                    <div class="col-xl-2 col-lg-3 col-md-4 col-6">
                        <a href="{{ route('GhimAnh') }}"><div class="pr-2 radius-10 email-list-item cursor-pointer"><div class="py-2 list-item-1" style="display:block;">
                            <div class="notification-img ml-2">
                                <img src="/img/thumb-350-1039015.jpg" alt="D2bqT3aU4AIGaMd.jfif" class="radius-10 cropped" style="width:100%;height:150px;">
                            </div>
                            <h5 class="ml-2 mb-0 text-black mt-1"><b>Tất cả các ghim</b></h5>
                            <span class="text-muted ml-2">999 ghim</span><br>
                        </div></div></a>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-6">
                        <a href="#"><div class="pr-2 radius-10 email-list-item cursor-pointer"><div class="py-2 list-item-1" style="display:block;">
                            <div class="notification-img ml-2">
                                <img src="/img/thumb-350-1039573.jpg" alt="D2bqT3aU4AIGaMd.jfif" class="radius-10 cropped" style="width:100%;height:150px;">
                            </div>
                            <h5 class="ml-2 mb-0 text-black mt-1"><b>Nội dung tôi đã lưu</b></h5>
                            <span class="text-muted ml-2">999 ghim</span><br>
                        </div></div></a>
                    </div>
                </div>
            </div>
            <div id="loading" style="text-align:center;" class="py-5 hidden">
                <div class="spinner-border text-dark"></div>
                <div style="font-size:30px;"><b>Đang tải thêm các bảng...</b></div>
            </div>
        </div>
        <!-- Nút trợ giúp -->
        <button class="btn btn-light" id="help-button"><a href="{{ route('help') }}"><i class="fa fa-question"></i></a></button>
        <!-- Nút tạo ghim -->
        <button class="btn btn-light" id="add-button"><a href="TaoGhim.html"><i class="fas fa-plus"></i></a></button>
        <!-- Nút trở về đầu trang -->
        <button onclick="topFunction()" id="up-button" class="btn btn-light hidden"><i class="fas fa-angle-double-up"></i></button>
        <!-- Phần Javascript -->
        <script src="/js/myScript.js"></script>
        <script src="/js/galleryGrid.js"></script>
        <script language="javascript" src="/js/tableLoadmoreAjax.js"></script>
        <script>
            /* Giữ cho dropdown của nút Send, Hộp thư, Thông báo luôn bật khi click vào phần bên trong của dropdown-menu */
            $('.send-dropdown .dropdown-menu').on('click', function(event){
                event.stopPropagation();
            });
            $('.nav-dropdown .dropdown-menu').on('click', function(event){
                event.stopPropagation();
            });
        </script>
        <script>
            /* Mở/Đóng dropdown của nút Tùy chọn bên trong dropdown của nút Hộp thư khi rê chuột */
            var option_dropdown_menu = document.getElementById("option-dropdown-menu");
            $('.option-dropdown').on('mouseover', function(){
                option_dropdown_menu.style.display = "block";
            });
            $('.option-dropdown').on('mouseout', function(e){
                option_dropdown_menu.style.display = "none";
            });
        </script>
        <script>
            /* Mở modal popup khi tạo ghim */
            $('#openModal').on('click', function(event){
                $('#myModal').modal('show');
            });
        </script>
        <script>
            /* Hiển thị alert khi chưa/đã nhập tên bảng */
            $(document).ready(function(){
                $("form").submit(function(e){
                if (checkTableName() == false) {
                    alert("Đừng quên đặt tên cho bảng của bạn!");
                    e.preventDefault();
                } else {
                    alert("Tạo bảng thành công!");
                }
                });
            });
    </script>
    </body>
</html>

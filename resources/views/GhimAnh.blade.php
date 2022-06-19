<!DOCTYPE html>
<html>
    <head>
        <title>Ghim ảnh</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        <link rel="stylesheet" href="/css/myStyle.css">
        <link rel="stylesheet" href="/css/gallery.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
            integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstdap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstdap/4.5.2/js/bootstdap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
            <style>
                .dropbtn:hover, .dropbtn:focus {
  background-color: #3e8e41;
}
                #hanh img {
                    width: 100%;
                    min-height: 200px;
                    border-radius: 15px;
                    margin-bottom: 20px;
                }
                .activeimg{
                    display: block;

                }
                .hiddenimg{
                    display: none;
                }
            </style>
    </head>
    <body class="bg-light" onresize="resizeFunc()">
        <!-- Thanh điều hướng -->
        <nav class="container-fluid bg-light sticky-top">
            <!-- Nút logo -->
            <a href="{{ route('main') }}" class="btn btn-light rounded-circle float-left px-0">
                <i class="fas fa-home"></i>
            </a>
            <!-- Ô tìm kiếm -->
            <form action="#" method="GET" class="form-inline ml-3 border-0 float-left">
                <input id="text" type="text" class="form-control bg-gray border-0 border-radius-4 pl-3 mr-3" placeholder="Tìm kiếm">
            </form>
            <!-- Nút thông báo -->
            <div class="dropdown nav-dropdown">
                <button href="#" class="btn btn-light button rounded-circle float-left px-0" data-toggle="dropdown">
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
                                    <img src="{{ session()->get('users')->img; }}" alt="D2bqT3aU4AIGaMd.jfif" class="radius-10 cropped" style="width:100%;height:150px;">
                                </div>
                            </div></div></a>
                            <a href="#"><div class="mr-2 pr-2 radius-10 email-list-item my-1 cursor-pointer"><div class="py-1 list-item-1 mx-3" style="display:block;">
                                <span>Bạn có 99 ý tưởng mới đang chờ!</span><br>
                                <span class="text-muted">1 tuần</span><br>
                                <div class="my-2 mr-3 notification-img">
                                    <img src="/img/9.jpg" alt="D2bqT3aU4AIGaMd.jfif" class="radius-10 cropped" style="width:100%;height:150px;">
                                </div>
                            </div></div></a>
                            <a href="#"><div class="mr-2 pr-2 radius-10 email-list-item my-1 cursor-pointer"><div class="py-1 list-item-1 mx-3" style="display:block;">
                                <span>Bạn có 99 ý tưởng mới đang chờ!</span><br>
                                <span class="text-muted">1 tuần</span><br>
                                <div class="my-2 mr-3 notification-img">
                                    <img src="/img/9.jpg" alt="D2bqT3aU4AIGaMd.jfif" class="radius-10 cropped" style="width:100%;height:150px;">
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
                                    <div class="#"><b>{{ session()->get('users')->name; }}</b></div>
                                    <div class="text-dark">{{ session()->get('users')->email; }}</div>
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
                                    <div class="#"><b>{{ session()->get('users')->name; }}</b></div>
                                    <div class="text-dark">{{ session()->get('users')->email; }}</div>
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
                                    <div class="#"><b>{{ session()->get('users')->name; }}</b></div>
                                    <div class="text-dark">{{ session()->get('users')->email; }}</div>
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
                                    <div class="#"><b>{{ session()->get('users')->name; }}</b></div>
                                    <div class="text-dark">{{ session()->get('users')->email; }}</div>
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
                                    <div class="#"><b>{{ session()->get('users')->name; }}</b></div>
                                    <div class="text-dark">{{ session()->get('users')->email; }}</div>
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
                                    <div class="#"><b>{{ session()->get('users')->name; }}</b></div>
                                    <div class="text-dark">{{ session()->get('users')->email; }}</div>
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
                                    <div class="#"><b>{{ session()->get('users')->name; }}</b></div>
                                    <div class="text-dark">{{ session()->get('users')->email; }}</div>
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
                                    <div class="#"><b>{{ session()->get('users')->name; }}</b></div>
                                    <div class="text-dark">{{ session()->get('users')->email; }}</div>
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
                                    <div class="#"><b>{{ session()->get('users')->name; }}</b></div>
                                    <div class="text-dark">{{ session()->get('users')->email; }}</div>
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
                            <div class="mt-1"><b>{{ session()->get('users')->name; }}</b></div>
                            <div class="text-dark">Xem bảng tin cá nhân</div>
                        </div>
                    </div></a></li>
                    <li class="dropdown-divider mx-3"></li>
                    <!-- Trợ giúp và hỗ trợ -->
                    <li class="mx-3"><a href="{{ route('help') }}"><div class="radius-10 py-0 list-item-1">
                        <div class="mr-1">
                            <div class="rounded-circle button"><i class="fa fa-question-circle"></i></div>
                        </div>
                        <div class="pt-2"><b>Trợ giúp & hỗ trợ</b></div>
                    </div></a></li>
                    <!-- Điều khoản và quyền riêng tư -->
                    <li class="mx-3"><a href="DieuKhoan.html"><div class="radius-10 py-0 list-item-1">
                        <div class="mr-1">
                            <div class="rounded-circle button" style="padding-top:7px;">
                                <i class="fa fa-lock"></i>
                            </div>
                        </div>
                        <div class="pt-2"><b>Điều khoản & quyền riêng tư</b></div>
                    </div></a></li>
                    <!-- Đăng xuất -->
                    <li class="mx-3"><a href="{{ route('DangNhap') }}"><div class="radius-10 py-0 list-item-1">
                        <div class="mr-1">
                            <div class="rounded-circle button"><i class="fas fa-sign-out-alt"></i></div>
                        </div>
                        <div class="pt-2"><b>Đăng xuất</b></div>
                    </div></a></li>
                    <li class="dropdown-divider mx-3"></li>
                    <!-- Giới thiệu -->
                    <li class="mx-3"><a href="{{ route('blog') }}"><div class="radius-10 py-0 list-item-1">
                        <div class="mr-1">
                            <div class="rounded-circle button"><i class="fas fa-info-circle"></i></div>
                        </div>
                        <div class="pt-2"><b>Giới thiệu về chúng tôi</b></div>
                    </div></a></li>
                </ul>
            </div>
        </nav>
        <!-- Phần thân -->
        <!-- Phần thông tin ảnh -->
        <div class="container">
            <div class="media mt-3 radius-30 info p-0" style="height:auto;" id="info">
                <div class="col-lg-6 align-self-center" style="#">
                    <div id="image-info" class="d-block mx-2">
                        <img src="/img/9.jpg" alt="taeyeon.jpg" class="radius-30 my-4">
                        <!-- Nút xem ảnh hoặc trang web chứa hình ảnh đó-->
                        <button onclick="window.location.href='/img/9.jpg'" id="image-button" class="px-4"><b><i class="fa fa-arrows-alt"></i> facebook.com</b></button>
                    </div>
                </div>
                <div class="col-lg-6 pt-lg-5 pb-5 pt-4">
                    <div class="mx-2">
                        <div>
                            <div class="ml-lg-1 ml-4">
                                <!-- Nút thao tác ghim -->
                                <div class="dropdown float-left">
                                    <button class="btn btn-light float-left rounded-circle button dropdown" data-toggle="dropdown">
                                        <i style="font-size: 171%" class="fas fa-ellipsis-h"></i>
                                        <div class="dropdown-menu radius-10 py-3 bg-light" style="width:250px;padding-right:1.95rem;">
                                            <a href="#"><div class="radius-10 py-0 px-2 mx-3 list-item-1">
                                                <div class="py-1"><b>Ẩn ghim</b></div>
                                            </div></a>
                                            <a href="#"><div class="radius-10 py-0 px-2 mx-3 list-item-1">
                                                <div class="py-1"><b>Tải xuống hình ảnh</b></div>
                                            </div></a>
                                        </div>
                                    </button>
                                </div>
                                <!-- Nút send -->
                                <div class="dropdown send-dropdown-2 float-left">
                                    <button class="btn btn-light float-left rounded-circle button dropdown" data-toggle="dropdown" style="#">
                                        <i style="font-size: 171%" class="fa fa-send"></i>
                                        <div class="dropdown-menu radius-10 py-3 bg-light" style="width:410px;padding-right:1.95rem;">
                                            <!-- Gửi ghim ảnh -->
                                            <span><div class="radius-10 py-0 px-2 mx-3 list-item-1">
                                                <div class="pt-1 pb-3 mx-auto"><b>Gửi ghim này</b></div>
                                            </div></span>
                                            <div><div class="radius-10 py-0 px-2 mx-3 list-item-1 pb-4">
                                                <div class="py-1 px-auto" style="display:inline-flex;" align="center">
                                                    <div align="center" class="pr-2 send-item">
                                                        <div class="px-auto">
                                                            <img src="/img/facebook_logo.png" alt="facebook_logo.png" class="rounded-circle mx-auto send-image">
                                                        </div>
                                                        <div class="px-auto">Facebook</div>
                                                    </div>
                                                    <div align="center" class="px-2 send-item">
                                                        <div class="px-auto">
                                                            <img src="/img/instagram-logo.png" alt="instagram-logo.png" class="rounded-circle mx-auto send-image">
                                                        </div>
                                                        <div class="px-auto">Instagram</div>
                                                    </div>
                                                    <div align="center" class="px-2 send-item">
                                                        <div class="px-auto">
                                                            <img src="/img/email-logo.png" alt="email-logo.png" class="rounded-circle mx-auto send-image">
                                                        </div>
                                                        <div class="px-auto">Email</div>
                                                    </div>
                                                    <div align="center" class="pl-2 send-item">
                                                        <div class="px-auto">
                                                            <img src="/img/link-logo.jpg" alt="link-logo.jpg" class="rounded-circle mx-auto send-image">
                                                        </div>
                                                        <div class="px-auto">Sao chép liên kết</div>
                                                    </div>
                                                </div>
                                            </div></div>
                                            <!-- Tìm tên người nhận -->
                                            <div><div class="radius-10 py-2 px-2 mx-3 list-item-1">
                                                <input type="text" onkeyup="#" style="width:100%;height:40px;border-radius:20px;" class="form-control bg-gray border-0 border-radius-4 pl-3"  placeholder="Tên hoặc email">
                                            </div></div>
                                            <!-- Danh sách người nhận -->
                                            <div class="cursor-default"><div class="radius-10 py-0 px-2 mx-3 list-item-1 pt-2">
                                                <div class="email-list">
                                                    <div class="mr-2 pr-2 radius-10 email-list-item my-1 cursor-pointer"><div class="py-1 list-item-1">
                                                        <div class="mx-2" style="width:60px;">
                                                            <img src="{{ session()->get('users')->img; }}" alt="taeyeon.jpg" style="#" class="rounded-circle">
                                                        </div>
                                                        <div style="width:200px;" class="#">
                                                            <div class="#"><b>{{ session()->get('users')->name; }}</b></div>
                                                            <div class="text-dark">{{ session()->get('users')->email; }}</div>
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
                                                            <div class="#"><b>{{ session()->get('users')->name; }}</b></div>
                                                            <div class="text-dark">{{ session()->get('users')->email; }}</div>
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
                                                            <div class="#"><b>{{ session()->get('users')->name; }}</b></div>
                                                            <div class="text-dark">{{ session()->get('users')->email; }}</div>
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
                                                            <div class="#"><b>{{ session()->get('users')->name; }}</b></div>
                                                            <div class="text-dark">{{ session()->get('users')->email; }}</div>
                                                        </div>
                                                        <div>
                                                            <b><input class="send-btn-1 mr-2 mt-1" type="button" value="Gửi"></b>
                                                        </div>
                                                    </div></div>
                                                </div>
                                            </div></div>
                                        </div>
                                    </button>
                                    <!-- Nút copy link -->
                                    <button onclick="copyLink()" id="copy-buton" class="btn btn-light float-left rounded-circle button float-left"><i style="font-size: 171%" class="fas fa-link"></i></button>
                                    <div class="wrap1">
                                            <button style="font-size: 18px;color:white" class=" btn btn-danger float-left button1 float-left">Lưu</button>
                                      </div>
                                </div>
                                <!-- <button onclick="#" id="save-button-1" class="float-right text-decoration-none" style="margin-top:20px;margin-right:-12px;"><b>Lưu</b></button> -->

                            </div>
                            <div style="clear:both;" class="ml-lg-1 ml-4">
                                <a href="#" class="text-black font-size-13" style="text-decoration:underline;">facebook.com</a>
                                <!-- Tiêu đề ảnh -->
                                <a href="#" class="text-decoration-none text-dark"><h1><b>Lan Tỏa Cảm Hứng Của Bạn!</b></h1></a>
                                <!-- Nội dung vắn tắt của ảnh -->
                                <p class="font-size-13 mr-4">Bài đăng được thực hiện bởi: {{ session()->get('users')->email;}}</p>
                                <!-- Phần bình luận và nhập bình luận -->
                                <div class="mt-4 d-inline-flex">
                                    <h5><b>Nhận xét</b></h5>
                                    <!-- Nút hiển thị/ẩn bình luận -->
                                    <button id="comment-display" class="btn btn-light rounded-circle button" style="margin-top:-6px;" data-toggle="collapse" data-target="#comment"><i class="fa fa-caret-down"></i></button>
                                </div>
                                <div id="comment" class="collapse in">
                                    <p class="font-size-13 mt-3 hidden" id="comment-note">Chia sẻ phản hồi, đặt câu hỏi hoặc để lại cảm nghĩ</p>
                                    <!-- Bình luận của người khác -->
                                    <div class="media my-3 comment-item">
                                        <img src="{{ session()->get('users')->img; }}" alt="taeyeon.jpg" class="rounded-circle avatar">
                                        <div class="media-body">
                                            <div class="border radius-10 bg-white mr-3 ml-2 px-3 py-2">
                                                <h6 class="mb-0"><a href="#" class="text-black"><b>{{ session()->get('users')->name; }}</b></a> <span class="text-dark">1 tuần</span></h6>
                                                <p class="my-0">I love you so much <3</p>
                                            </div>
                                            <div class="ml-3 mt-1 text-dark d-inline-flex">
                                                <!-- Thả tym <3 -->
                                                <button class="btn btn-default p-0 px-1 rounded heart-button"><i class="fa fa-heart-o"></i> <span class="heart-count"><b>6</b></span></button>
                                                <!-- Phần reply bình luận -->
                                                <button class="btn btn-default p-0 px-1 rounded-circle ml-1 reply-comment-button"><i class="fas fa-comment" data-toggle="collapse" data-target="#reply-comment-1"></i></button>
                                            </div>
                                            <div id="reply-comment-1" class="collapse ml-3 mt-1 reply-comment">
                                                <div class="media my-3">
                                                    <img src="{{ session()->get('users')->img; }}" alt="taeyeon.jpg" class="rounded-circle avatar">
                                                    <div class="media-body mr-4">
                                                        <form action="#" method="POST" id="comment-form-1">
                                                            <!-- Textbox nhập bình luận -->
                                                            <textarea name="comment" class="form-control mx-2 radius-10 comment-text" placeholder="Thêm nhận xét" style="width:100%;"></textarea>
                                                        </form>
                                                        <div class="my-2">
                                                            <!-- Submit bình luận -->
                                                            <button class="btn btn-danger button radius-20 float-right hidden comment-submit" style="width:95px;margin-right:-7px;" type="submit" form="comment-form-1" disabled><b>Đã xong</b></button>
                                                            <!-- Hủy bình luận -->
                                                            <button class="btn btn-gray button radius-20 float-right mr-2 hidden comment-cancel" style="width:60px;"><b>Hủy</b></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="media my-3 comment-item">
                                        <img src="{{ session()->get('users')->img; }}" alt="taeyeon.jpg" class="rounded-circle avatar">
                                        <div class="media-body">
                                            <div class="border radius-10 bg-white mr-3 ml-2 px-3 py-2">
                                                <h6 class="mb-0"><a href="#" class="text-black"><b>{{ session()->get('users')->name; }}</b></a> <span class="text-dark">1 tuần</span></h6>
                                                <p class="my-0">I love you so much <3</p>
                                            </div>
                                            <div class="ml-3 mt-1 text-dark d-inline-flex">
                                                <button class="btn btn-default p-0 px-1 rounded heart-button"><i class="fa fa-heart-o"></i> <span class="heart-count"><b>6</b></span></button>
                                                <button class="btn btn-default p-0 px-1 rounded-circle ml-1 reply-comment-button"><i class="fas fa-comment" data-toggle="collapse" data-target="#reply-comment-2"></i></button>
                                            </div>
                                            <div id="reply-comment-2" class="collapse ml-3 mt-1 reply-comment">
                                                <div class="media my-3">
                                                    <img src="{{ session()->get('users')->img; }}" alt="taeyeon.jpg" class="rounded-circle avatar">
                                                    <div class="media-body mr-4">
                                                        <form action="#" method="POST" id="comment-form-2">
                                                            <!-- Textbox nhập bình luận -->
                                                            <textarea name="comment" class="form-control mx-2 radius-10 comment-text" placeholder="Thêm nhận xét" style="width:100%;"></textarea>
                                                        </form>
                                                        <div class="my-2">
                                                            <!-- Submit bình luận -->
                                                            <button class="btn btn-danger button radius-20 float-right hidden comment-submit" style="width:95px;margin-right:-7px;" type="submit" form="comment-form-2" disabled><b>Đã xong</b></button>
                                                            <!-- Hủy bình luận -->
                                                            <button class="btn btn-gray button radius-20 float-right mr-2 hidden comment-cancel" style="width:60px;"><b>Hủy</b></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Phần nhập bình luận -->
                                    <div class="media my-3">
                                        <img src="{{ session()->get('users')->img; }}" alt="taeyeon.jpg" class="rounded-circle avatar">
                                        <div class="media-body mr-4">
                                            <form action="#" method="POST" id="comment-form">
                                                <!-- Textbox nhập bình luận -->
                                                <textarea name="comment" class="form-control mx-2 radius-10" id="comment-text" placeholder="Thêm nhận xét" style="width:100%;" oninput="submitButton()" onclick="displayCommentBtn()"></textarea>
                                            </form>
                                            <div class="my-2">
                                                <!-- Submit bình luận -->
                                                <button class="btn btn-danger button radius-20 float-right hidden" id="comment-submit" style="width:95px;margin-right:-7px;" type="submit" form="comment-form" disabled><b>Đã xong</b></button>
                                                <!-- Hủy bình luận -->
                                                <button class="btn btn-gray button radius-20 float-right mr-2 hidden" id="comment-cancel" style="width:60px;" onclick="cancelComment()"><b>Hủy</b></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Phần các ghim tương tự -->
        <div class="container-fluid" style="clear:left;">
            <h4 class="text-center pt-4"><b>Thêm các ghim tương tự</b></h4>
            <!-- Phần chứa ảnh -->
                <div class="row" id="hanh">
                    <div class="col-md-2" id="col1">
                        <script>
                            const onhoverimg = (t) => {
                                $(t).find(".icon").addClass("activeimg").removeClass("hiddenimg");
                            }
                            const unhoverimg = (t) => {
                                $(t).find(".icon").addClass("hiddenimg").removeClass("activeimg");
                            }
                        </script>
                        <script>
                            const onhoverIn = (e)=>{
                                console.log("over");

                            }
                            const onhoverOut = (e)=>{
                                console.log("out");
                            }
                        </script>
                    </div>
                    <div class="col-md-2" id="col2">

                    </div>
                    <div class="col-md-2" id="col3">

                    </div>
                    <div class="col-md-2" id="col4">

                    </div>
                    <div class="col-md-2" id="col5">

                    </div>
                    <div class="col-md-2" id="col6">

                    </div>
                </div>
            </div>
        </div>
        <!-- Nút trở về Trang chủ -->
        <button class="btn btn-light" id="back-button" onclick="window.location.href='{{ route('main') }}'"><i class="fa fa-chevron-left"></i></button>
        <!-- Nút trợ giúp -->
        <button class="btn btn-light" id="help-button"><a href="{{ route('help') }}"><i class="fa fa-question"></i></a></button>
        <!-- Nút tạo ghim -->
        <button class="btn btn-light" id="add-button"><a href="TaoGhim.html"><i class="fas fa-plus"></i></a></button>
        <!-- Nút trở về đầu trang -->
        <button onclick="topFunction()" id="up-button" class="btn btn-light hidden"><i class="fas fa-angle-double-up"></i></button>
        <!-- Phần Javascript -->
        <script src="/js/myScript.js"></script>
        <script src="/js/galleryGrid.js"></script>
        <script type="text/javascript" src="/js/btnDisplay.js"></script>
        <script language="javascript" src="/js/pinLoadmoreAjax.js"></script>
        <script src="/js/dropdownDisplay.js"></script>
        <script src="/js/comment.js"></script>
        <script>
            /* Sao chép liên kết ảnh */
            $(document).ready(function(){
                $('#copy-buton').on('click', function(){
                    alert("Đã sao chép liên kết!");
                });
            });
        </script>
        <script>
            // Get the button, and when the user clicks on it, execute myFunction
            document.getElementById("mybutton").onclick = function() {myFunction()};

            /* myFunction toggles between adding and removing the show class, which is used to hide and show the dropdown content */
            function myFunction() {
              document.getElementById("myDropdown").classList.toggle("show");
            }
            </script>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
            AOS.init();
            var skip = 1;
            var termSearch = ""
            var animate = "zoom-in-up"
            function showdetail(url,event){
               event.stopPropagation();
                window.location.href = url;


            }
            function loadimg (response) {
                var res = JSON.parse(response)
                $.each(res.data, function (indexInArray, item) {
                                        // console.log(item);
                                        var rheight = Math.floor(Math.random() * 300) + 200;
                                        var img = `<img style="height:${rheight}px;" loading="lazy" src="${item.url}" alt="">`

                                        var content = `<div data-aos="${animate}">
                                        <a href="/detail/${item.id}"><div onmouseover="onhoverimg(this)" onmouseout="unhoverimg(this)" style="position: relative;cursor:zoom-in">
                            ${img}
                            <div class = "icon hiddenimg"  style="position: absolute;width: 100%;height: ${rheight}px;background: rgba(214, 192, 192, 0.425);z-index: 3;left: 0;top: 0;border-radius: 15px">
                                <button style="border-radius: 15px;top: 7px;position: absolute;right: 9px;width: 27%;height: 52px;" type="button" class="btn btn-danger">Save</button>
                                <div style="display: flex;position: absolute;bottom: 10px;width: 100%;justify-content:space-between;align-items: center;padding: 12px">
                                <button style ="border-radius: 100%;" type="button" class="btn btn-light"><i class="fab fa-facebook"></i></button>
                                <button style="border-radius: 100%" type="button" class="btn btn-danger"><i class="fas fa-paper-plane"></i></i></button>
                                <button style="border-radius: 100%;" type="button" class="btn btn-danger"><i class="fas fa-ellipsis-h"></i></button>
                                </div>
                            </div>
                        </div></a>
                                        </div>
                                        `
                                        $('#col'+(indexInArray % 7)).append(content);

                                });
                                skip+=1;

            }
            $(document).ready(function() {
                $.ajax({
                            type: "GET",
                            url: "/test",
                            data: {page:skip,termSearch:termSearch},
                            dataType: "text",
                            success: function (response) {
                                // console.log(response);
                                loadimg(response)

                            }
                        });
                $(".search").change(function (e) {
                    e.preventDefault();
                    console.log(e.target.value);
                    for (let index = 1; index < 8; index++){
                        $("#col" + (index % 7)).html("");
                    }
                    termSearch = String(e.target.value)
                    skip = 1;
                    $.ajax({
                            type: "GET",
                            url: "/test",
                            data: {page:skip,termSearch:termSearch},
                            dataType: "text",
                            success: function (response) {
                                // console.log(response);
                                loadimg(response)

                            }
                        });
                });
                $(window).scroll(function() {

                    // for (i = 1; i <= 20; i++) {
                    //     console.log(i % 10)
                    //     $("#col" + (i % 7)).append('<img src="/img/' + (i % 10) + '.jpg" alt="">');

                    // }
                    var height = $(window).scrollTop();
                    var screen = $(document).height();
                    // console.log(screen,height);
                    // $.ajax({
                    //         type: "GET",
                    //         url: "/test",
                    //         data: {page:skip},
                    //         dataType: "text",
                    //         success: function (response) {
                    //             console.log(response);
                    //         }
                    //     });
                    if(height+500>screen*0.6){
                        $.ajax({
                            type: "GET",
                            url: "/test",
                            data: {page:skip,termSearch:termSearch},
                            dataType: "text",
                            success: function (response) {
                                // console.log(response);
                                loadimg(response)


                            }
                        });
                    }

                });
            });
        </script>

    </body>
</html>

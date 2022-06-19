<!DOCTYPE html>
<html>
    <head>
        <title>Trung tâm Trợ giúp</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/myStyle.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
            integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstdap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </head>
    <body class="bg-light" onresize="resizeFunc()">
        <!-- Thanh điều hướng -->
        <nav class="container-fluid sticky-top bg-light-blue">
            <div class="container" style="height:100%;">
                <div class="row" style="height:100%;">
                    <a href="{{ route('help') }}" class="float-left d-inline-flex text-navy text-decoration-none col-4" style="#">
                        <i class="fas fa-home"></i>&ensp;<span class="bold" id="logo">Trung tâm Trợ giúp</span>
                    </a>
                    <div class="col-4" style="height:100%;">
                        <!-- Click vào nút Tổng quan thì chuyển sang chế độ tổng quan và nút Doanh nghiệp biến mất (khi width nhỏ) -->
                        <div class="dropdown float-left d-lg-block d-none" style="height:100%;">
                            <button class="bg-transparent text-navy bold border-0 focus-none" style="height:100%;" data-toggle="dropdown" onclick="#">Tổng quan</button>
                            <div class="dropdown-menu help-dropdown-menu bg-light-blue border-0" style="margin-top:0px;margin-left:-20px;border-radius:0;width:320px;">
                                <a href="{{ route('about') }}" class="dropdown-item">Bắt đầu</a>
                                <a href="#" class="dropdown-item">Quản lý tài khoản</a>
                                <a href="#" class="dropdown-item">Tìm và lưu</a>
                                <a href="#" class="dropdown-item">Tạo và chỉnh sửa</a>
                                <a href="#" class="dropdown-item">Kết nối, cộng tác và chia sẻ</a>
                                <a href="#" class="dropdown-item">Quyền riêng tư, an toàn và pháp lý</a>
                            </div>
                        </div>
                        <!-- Click vào nút Doanh nghiệp thì chuyển sang chế độ doanh nghiệp và nút Tổng quan biến mất (khi width nhỏ) -->
                        <div class="dropdown float-right" style="height:100%;">
                            <button class="bg-transparent text-navy bold border-0 focus-none" style="height:100%;" data-toggle="dropdown" onclick="#">Doanh nghiệp</button>
                            <div class="dropdown-menu help-dropdown-menu dropdown-menu-right bg-light-blue border-0 text-right" style="margin-top:0px;margin-right:-20px;border-radius:0;width:200px;">
                                <a href="#" class="dropdown-item">Bắt đầu</a>
                                <a href="#" class="dropdown-item">Tạo nội dung</a>
                                <a href="#" class="dropdown-item">Tạo một cửa hàng</a>
                                <a href="#" class="dropdown-item">Quảng cáo</a>
                                <a href="#" class="dropdown-item">Theo dõi</a>
                                <a href="#" class="dropdown-item">Báo cáo</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <button class="float-right bg-transparent focus-none border-0 text-navy mr-2" style="font-size:25px;padding-top:15px;" onclick="#">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Phần thân -->
        <div class="container-fluid">
            <div class="text-center my-5">
                <h1 class="text-navy display-3">Lấy lại cảm hứng</h1>
                <form action="#" method="get" class="px-sm-5">
                    <input type="text" name="search" class="form-control rounded-pill bg-light mt-5 mx-auto" id="help-search">
                </form>
            </div>
            <div class="container" id="help-content">
                <div class="row">
                    <div class="col-md-4 col-6 mb-5">
                        <i class="fas fa-arrow-right"></i>
                        <h2 class="mb-4 mt-2">Bắt đầu</h2>
                        <ul>
                            <li class="mb-3"><a href="#">Thêm widget</a></li>
                            <li class="mb-3"><a href="#">Nâng cấp ứng dụng</a></li>
                            <li class="mb-3"><a href="{{ route('blog') }}">Giới thiệu</a></li>
                            <li class="mb-3"><a href="#">Tương tác với Ghim ý tưởng</a></li>
                        </ul>
                        <a href="{{ route('about') }}" class="see-more" style="text-decoration:underline;">Xem thêm</a>
                    </div>
                    <div class="col-md-4 col-6 mb-5">
                        <i class="fas fa-cog"></i>
                        <h2 class="mb-4 mt-2">Quản lý tài khoản và tùy chọn</h2>
                        <ul>
                            <li class="mb-3"><a href="#">Xóa email của bạn khỏi tài khoản của người khác</a></li>
                            <li class="mb-3"><a href="#">Chỉnh sửa cài đặt thông báo</a></li>
                            <li class="mb-3"><a href="#">Xác thực hai yếu tố</a></li>
                            <li class="mb-3"><a href="#">Đăng nhập và đăng xuất</a></li>
                        </ul>
                        <a href="#" class="see-more" style="text-decoration:underline;">Xem thêm</a>
                    </div>
                    <div class="col-md-4 col-6 mb-5">
                        <i class="fa fa-search"></i>
                        <h2 class="mb-4 mt-2">Tìm và lưu</h2>
                        <ul>
                            <li class="mb-3"><a href="#">Tải ảnh xuống</a></li>
                            <li class="mb-3"><a href="#">Lưu Ghim với nút trình duyệt</a></li>
                            <li class="mb-3"><a href="#">Sự cố với nút trình duyệt</a></li>
                            <li class="mb-3"><a href="#">Thêm Ghim từ web</a></li>
                        </ul>
                        <a href="#" class="see-more" style="text-decoration:underline;">Xem thêm</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-6 mb-5">
                        <i class="fas fa-pen"></i>
                        <h2 class="mb-4 mt-2">Tạo và chỉnh sửa</h2>
                        <ul>
                            <li class="mb-3"><a href="#">Tạo Ghim từ ảnh của bạn</a></li>
                            <li class="mb-3"><a href="#">Sửa hoặc xóa một Ghim</a></li>
                            <li class="mb-3"><a href="#">Sắp xếp các bảng</a></li>
                            <li class="mb-3"><a href="#">Tạo bảng</a></li>
                        </ul>
                        <a href="#" class="see-more" style="text-decoration:underline;">Xem thêm</a>
                    </div>
                    <div class="col-md-4 col-6 mb-5">
                        <i class="fa fa-users"></i>
                        <h2 class="mb-4 mt-2">Kết nối, cộng tác và chia sẻ</h2>
                        <ul>
                            <li class="mb-3"><a href="#">Tìm và theo dõi người khác</a></li>
                            <li class="mb-3"><a href="#">Tạo và quản lý bảng nhóm</a></li>
                            <li class="mb-3"><a href="#">Gửi Ghim, bảng hoặc hồ sơ</a></li>
                            <li class="mb-3"><a href="#">Gửi tin nhắn</a></li>
                        </ul>
                        <a href="#" class="see-more" style="text-decoration:underline;">Xem thêm</a>
                    </div>
                    <div class="col-md-4 col-6 mb-5">
                        <i class="fas fa-shield-alt"></i>
                        <h2 class="mb-4 mt-2">Quyền riêng tư, an toàn và pháp lý</h2>
                        <ul>
                            <li class="mb-3"><a href="#">Các quảng cáo được cá nhân hóa</a></li>
                            <li class="mb-3"><a href="#">Chặn hoặc hủy chặn</a></li>
                            <li class="mb-3"><a href="#">Truy cập, chỉnh sửa hoặc xóa dữ liệu cá nhân</a></li>
                            <li class="mb-3"><a href="#">Cá nhân hóa và dữ liệu</a></li>
                        </ul>
                        <a href="#" class="see-more" style="text-decoration:underline;">Xem thêm</a>
                    </div>
                </div>
            </div>
            <!-- Bài viết nổi bật -->
            <div class="row pb-5" style="background-color:rgb(255,228,193);">
                <div class="container pb-4">
                    <h1 class="text-navy display-3 text-center my-5">Bài viết nổi bật</h1>
                    <div id="accordion">
                        <div class="card">
                            <div class="card-header py-4">
                                <a class="card-link" data-toggle="collapse" href="#collapseOne">
                                    Chỉnh sửa hồ sơ của bạn<span class="float-right collapse-icon"><i class="fas fa-minus"></i></span>
                                </a>
                            </div>
                            <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Chỉnh sửa ảnh, tên người dùng, hồ sơ của bạn và các nội dung khác để chia sẻ thông tin chi tiết về bản thân với mọi người.</p>
                                    <button class="rounded-pill btn-navy py-3 px-5" onclick="window.location.href='#'">Chỉnh sửa hồ sơ của bạn</button>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header py-4">
                                <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                                    Chia sẻ cảm nghĩ về Ghim ý tưởng<span class="float-right collapse-icon"><i class="fas fa-plus"></i></span>
                                </a>
                            </div>
                            <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Cảm nghĩ là một Ghim ý tưởng được tạo để phản hồi một Ghim ý tưởng khác. Hãy thêm cảm nghĩ để người tạo (và mọi người) biết bạn nghĩ gì về ý tưởng của họ.</p>
                                    <button class="rounded-pill btn-navy py-3 px-5" onclick="window.location.href='#'">Khám phá cảm nghĩ</button>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header py-4">
                                <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
                                    Tạo phần bảng<span class="float-right collapse-icon"><i class="fas fa-plus"></i></span>
                                </a>
                            </div>
                            <div id="collapseThree" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Sử dụng phần bảng để sắp xếp các Ghim.</p>
                                    <button class="rounded-pill btn-navy py-3 px-5" onclick="window.location.href='#'">Thêm phần bảng</button>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header py-4">
                                <a class="card-link" data-toggle="collapse" href="#collapseFour">
                                    Khám phá bảng tin nhà<span class="float-right collapse-icon"><i class="fas fa-plus"></i></span>
                                </a>
                            </div>
                            <div id="collapseFour" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Bảng tin nhà của bạn là nơi bạn khám phá các Ghim từ những người và bảng bạn theo dõi. Nhấp vào tab Xem để khám phá các Ghim ý tưởng hay nhất, phù hợp nhất với bạn.</p>
                                    <button class="rounded-pill btn-navy py-3 px-5" onclick="window.location.href='#'">Tìm những ý tưởng mới</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mẹo -->
            <div class="row bg-navy">
                <div class="container text-light-blue pb-5">
                    <h1 class="display-3 text-center my-5">Mẹo</h1>
                    <div id="myCarosel" class="carousel slide pb-4" data-ride="carousel">
                        <!-- Indicators -->
                        <ul class="carousel-indicators">
                            <li data-target="#myCarosel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarosel" data-slide-to="1"></li>
                            <li data-target="#myCarosel" data-slide-to="2"></li>
                            <li data-target="#myCarosel" data-slide-to="3"></li>
                            <li data-target="#myCarosel" data-slide-to="4"></li>
                        </ul>
                        <!-- The slideshow -->
                        <div class="carousel-inner">
                            <div class="carousel-item active pt-4">
                                Khám phá các ý tưởng lấy cảm hứng từ bất cứ thứ gì xung quanh bạn với
                                <a href="#" class="text-light-blue" style="text-decoration:underline;">Lens</a>. Từ thanh tìm kiếm, hãy
                                nhấn vào <i class="fas fa-camera"></i>, sau đó chụp một ảnh.
                            </div>
                            <div class="carousel-item pt-4">
                                Dễ dàng lưu các Ghim từ khắp nơi trên web bằng
                                <a href="#" class="text-light-blue" style="text-decoration:underline;">Nút trình duyệt Happy Image</a>.
                            </div>
                            <div class="carousel-item pt-4">
                                <a href="#" class="text-light-blue" style="text-decoration:underline;">Tạo Ghim ý tưởng</a> để kể câu chuyện của
                                bạn và chia sẻ ý tưởng với mọi người theo cách hấp dẫn hơn.
                            </div>
                            <div class="carousel-item pt-4">
                                Bạn có thể <a href="#" class="text-light-blue" style="text-decoration:underline;">mua các sản phẩm bạn thấy
                                trên Happy Image</a>. Chỉ cần tìm Ghim sản phẩm và nhấn vào đó để truy cập trang web của nhà bán lẻ.
                            </div>
                            <div class="carousel-item pt-4">
                                <a href="#" class="text-light-blue" style="text-decoration:underline;">Thêm widget Happy Image</a> và lấy cảm
                                hứng ngay từ màn hình chính của điện thoại.
                            </div>
                        </div>
                        <!-- Left and right controls -->
                        <a class="carousel-control-prev" href="#myCarosel" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#myCarosel" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Khám phá thêm trên Happy Image -->
            <div class="row bg-light-blue pb-5">
                <div class="container text-navy pb-4">
                    <h1 class="display-3 text-center my-5">Khám phá thêm</h1>
                    <div class="row" id="row1" style="background-color:rgb(113,232,253);">
                        <div class="col-md-6 p-0 text-center" style="height:400px;">
                            <div class="pt-5" id="discover-btn-1">
                                <h2 class="mt-5 bold" style="#">Newsroom</h2>
                                <p style="font-size:20px;" class="mt-4 mx-5">Khám phá các tính năng mới và sản phẩm ra mắt</p>
                                <button class="rounded-pill btn-navy py-3 px-5" style="font-size:20px;" onclick="window.location.href='#'">Tìm hiểu thêm</button>
                            </div>
                            <img src="/img/9.jpg" class="cropped hidden" id="discover-img-1" style="width:100%;height:100%;">
                        </div>
                        <div class="col-md-6 p-0 text-center" style="height:400px;">
                            <div class="pt-5 hidden" id="discover-btn-2">
                                <h2 class="mt-5 bold" style="#">Newsroom</h2>
                                <p style="font-size:20px;" class="mt-4 mx-5">Khám phá các tính năng mới và sản phẩm ra mắt</p>
                                <button class="rounded-pill btn-navy py-3 px-5" style="font-size:20px;" onclick="window.location.href='#'">Tìm hiểu thêm</button>
                            </div>
                            <img src="/img/9.jpg" class="cropped" id="discover-img-2" style="width:100%;height:100%;">
                        </div>
                    </div>
                    <div class="row" style="background-color:rgb(255,139,160);">
                        <div class="col-md-6 p-0 text-center" style="height:400px;">
                            <img src="/img/8.jpg" class="cropped" style="width:100%;height:100%;">
                        </div>
                        <div class="col-md-6 p-0 text-center" style="height:400px;">
                            <div class="pt-5">
                                <h2 class="mt-5 bold" style="#">Predicts</h2>
                                <p style="font-size:20px;" class="mt-4 mx-5">Xem dự đoán về các xu hướng hàng đầu trên Happy Image cho năm tới</p>
                                <button class="rounded-pill btn-navy py-3 px-5" style="font-size:20px;" onclick="window.location.href='#'">Khám phá các xu hướng</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Nhận một tài khoản trên Happy Image -->
            <div class="row" style="background-color:rgb(255,228,193);">
                <div class="container text-navy pb-5">
                    <h1 class="display-3 text-center my-5">Nhận một tài khoản</h1>
                    <div class="pb-4 text-center">
                        <button class="rounded-pill btn-navy py-3 px-5 mr-4" style="font-size:20px;" onclick="window.location.href='{{ route('DangNhap') }}'">Đăng nhập</button>
                        <button class="rounded-pill btn-navy-1 py-3 px-5 ml-1" style="font-size:20px;" onclick="window.location.href='{{ route('DangKi') }}'">Đăng ký</button>
                    </div>
                </div>
            </div>
            <!-- Bạn vẫn cần trợ giúp? -->
            <div class="row bg-navy py-lg-4 py-5">
                <div class="container text-center">
                    <div class="px-auto d-sm-inline-flex">
                        <h2 class="text-light-blue display-4 mx-3" style="font-weight:400;">Bạn vẫn cần trợ giúp?</h2>
                        <button class="rounded-pill btn-navy-2 py-3 px-5 mx-3" onclick="window.location.href='#'">Liên hệ với chúng tôi</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer -->
        <div class="footer py-5" style="background-color:rgb(233,215,190);">
            <div class="container text-navy">
                <div class="row pb-4">
                    <div class="col-md-5">
                        <a href="TrangChu.html" style="color:navy;font-family:'Comic Sans MS';font-size:30px;" class="bold">Happy Image</a>
                        <p class="pt-5">Ngôn ngữ</p>
                        <div style="width:100%;" class="pr-md-5 pb-5">
                            <select class="form-control text-navy radius-10">
                                <option>Tiếng Việt</option>
                                <option>English</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="row">
                            <div class="col-md-4 col-6">
                                <h6 class="bold">Giới thiệu</h6>
                                <ul style="#" class="p-0 list-unstyled">
                                    <li class="my-3"><a href="{{ route('blog') }}" class="text-navy">Happy Image là gì</a></i>
                                    <li class="my-3"><a href="#" class="text-navy">Trang Happy Image</a></i>
                                    <li class="my-3"><a href="#" class="text-navy">Blog kỹ thuật</a></i>
                                    <li class="my-3"><a href="#" class="text-navy">Hướng dẫn thương hiệu</a></i>
                                    <li class="my-3"><a href="#" class="text-navy">Nghề nghiệp</a></i>
                                    <li class="my-3"><a href="{{ route('help') }}" class="text-navy">Trung tâm trợ giúp</a></i>
                                    <li class="my-3"><a href="#" class="text-navy">Happy Image Labs</a></i>
                                </ul>
                            </div>
                            <div class="col-md-4 col-6">
                                <h6 class="bold">Chính sách của chúng tôi</h6>
                                <ul class="p-0 list-unstyled">
                                    <li class="my-3"><a href="#" class="text-navy">Bản quyền</a></i>
                                    <li class="my-3"><a href="#" class="text-navy">Quảng cáo được cá nhân hóa</a></i>
                                    <li class="my-3"><a href="#" class="text-navy">Điều khoản dịch vụ</a></i>
                                    <li class="my-3"><a href="#" class="text-navy">Quyền riêng tư</a></i>
                                </ul>
                            </div>
                            <div class="col-md-4 col-6">
                                <h6 class="bold">Thông tin khác</h6>
                                <ul class="p-0 list-unstyled">
                                    <li class="my-3"><a href="#" class="text-navy">Dành cho doanh nghiệp</a></i>
                                    <li class="my-3"><a href="#" class="text-navy">Dành cho nhà phát triển</a></i>
                                    <li class="my-3"><a href="#" class="text-navy">Dành cho báo chí</a></i>
                                    <li class="my-3"><a href="#" class="text-navy">Dành cho nhà đầu tư</a></i>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row pl-3">
                    © Happy Image 2021
                </div>
            </div>
        </div>
        <!-- Phần Javascript -->
        <script src="../js/myScript.js"></script>
        <script>
            $(document).ready(function(){
                $("#accordion .collapse").on('show.bs.collapse', function(){
                    let index = $('#accordion .collapse').index(this);
                    let collapse_icon = document.getElementsByClassName("collapse-icon")[index];
                    collapse_icon.innerHTML = '<i class="fas fa-minus"></i>';
                });
                $("#accordion .collapse").on('hide.bs.collapse', function(){
                    let index = $('#accordion .collapse').index(this);
                    let collapse_icon = document.getElementsByClassName("collapse-icon")[index];
                    collapse_icon.innerHTML = '<i class="fas fa-plus"></i>';
                });
            });
        </script>
        <script>
            $(document).ready(function(){
                let width = window.innerWidth;
                if (width<768) {
                    if (!($('#discover-btn-1').hasClass('hidden'))) $('#discover-btn-1').addClass('hidden');
                    if ($('#discover-img-1').hasClass('hidden')) $('#discover-img-1').removeClass('hidden');
                    if (!($('#discover-img-2').hasClass('hidden'))) $('#discover-img-2').addClass('hidden');
                    if ($('#discover-btn-2').hasClass('hidden')) $('#discover-btn-2').removeClass('hidden');
                } else {
                    if (!($('#discover-img-1').hasClass('hidden'))) $('#discover-img-1').addClass('hidden');
                    if ($('#discover-btn-1').hasClass('hidden')) $('#discover-btn-1').removeClass('hidden');
                    if (!($('#discover-btn-2').hasClass('hidden'))) $('#discover-btn-2').addClass('hidden');
                    if ($('#discover-img-2').hasClass('hidden')) $('#discover-img-2').removeClass('hidden');
                }
                $(window).resize(function(){
                    let width = window.innerWidth;
                    if (width<768) {
                        if (!($('#discover-btn-1').hasClass('hidden'))) $('#discover-btn-1').addClass('hidden');
                        if ($('#discover-img-1').hasClass('hidden')) $('#discover-img-1').removeClass('hidden');
                        if (!($('#discover-img-2').hasClass('hidden'))) $('#discover-img-2').addClass('hidden');
                        if ($('#discover-btn-2').hasClass('hidden')) $('#discover-btn-2').removeClass('hidden');
                    } else {
                        if (!($('#discover-img-1').hasClass('hidden'))) $('#discover-img-1').addClass('hidden');
                        if ($('#discover-btn-1').hasClass('hidden')) $('#discover-btn-1').removeClass('hidden');
                        if (!($('#discover-btn-2').hasClass('hidden'))) $('#discover-btn-2').addClass('hidden');
                        if ($('#discover-img-2').hasClass('hidden')) $('#discover-img-2').removeClass('hidden');
                    }
                });
            });
        </script>
    </body>
</html>

<!DOCTYPE html>
<html>
    <head>
        <title>Bắt đầu</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/myStyle.css">
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
                            <button style="height:82%;border-radius: 16px;margin-top: 13px;width: 138px;background-color: rgb(250, 142, 142)" data-toggle="dropdown" onclick="#"><b>Tổng quan</b></button>
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
                            <button style="height:82%;border-radius: 16px;margin-top: 13px;width: 138px;background-color: rgb(250, 142, 142)" data-toggle="dropdown" onclick="#"><b>Doanh nghiệp</b></button>
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
                        <div class="dropdown">
                            {{-- <button class="float-right rounded-pill btn-navy px-3 py-1 mt-3" data-toggle="dropdown">Xuân</button> --}}
                            <div class="dropdown-menu dropdown-menu-right help-dropdown-menu border-0 bg-light-blue" style="margin-top:18px;border-radius:0;margin-right:-20px;">
                                <a href="#" class="dropdown-item text-right">Thiết lập</a>
                                <a href="{{ route('main') }}" class="dropdown-item text-right">Trang chủ</a>
                                <a href="#" class="dropdown-item text-right">Điều khoản và quyền riêng tư</a>
                                <a href="{{ route('DangNhap') }}" class="dropdown-item text-right">Đăng xuất</a>
                            </div>
                        </div>
                        <button class="float-right bg-transparent focus-none border-0 text-navy mr-2" style="font-size:25px;padding-top:15px;" onclick="#">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Phần thân -->
        <div class="container-fluid">
            <div class="row">
                <div class="container text-center text-navy py-5 px-sm-5">
                    <h1 style="background-color: black;border-radius: 50px;color: white" class="display-3 text-center mb-5">Bắt đầu</h1>
                    <div class="px-5">
                        <p style="font-size:18px;" class="mx-5">Xem giới thiệu tổng quan chuyên sâu về Happy Image, thiết lập hồ sơ của bạn, cũng như khám phá các tính năng và công cụ.</p>
                    </div>
                </div>
            </div>
            <div class="row pb-5">
                <div class="container text-navy" id="start-list">
                    <div class="row my-5">
                        <div class="col-sm-5"><h3>Giới thiệu về Happy Image</h3></div>
                        <div class="col-sm-7">
                            <div class="row pt-md-1">
                                <div class="col-md-6">
                                    <a href="{{ route('blog') }}" class="text-navy">Giới thiệu về Happy Image</a>
                                </div>
                                <div class="col-md-6">
                                    <a href="#" class="text-navy">Nhận một tài khoản Happy Image</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row my-5">
                        <div class="col-sm-5"><h3>Khám phá ý tưởng</h3></div>
                        <div class="col-sm-7">
                            <div class="row pt-md-1">
                                <div class="col-md-6">
                                    <a href="#" class="text-navy">Khám phá ý tưởng trên Happy Image</a>
                                </div>
                                <div class="col-md-6">
                                    <a href="#" class="text-navy">Khám phá bảng tin nhà</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row my-5">
                        <div class="col-sm-5"><h3>Tương tác với một Ghim</h3></div>
                        <div class="col-sm-7">
                            <div class="row pt-md-1">
                                <div class="col-md-6">
                                    <a href="#" class="text-navy">Phản ứng</a>
                                </div>
                                <div class="col-md-6">
                                    <a href="#" class="text-navy">Thêm hoặc quản lý nhận xét trên một Ghim</a>
                                </div>
                            </div>
                            <div class="row pt-md-1">
                                <div class="col-md-6">
                                    <a href="#" class="text-navy">Chia sẻ cảm nghĩ về Ghim ý tưởng</a>
                                </div>
                                <div class="col-md-6">
                                    <a href="#" class="text-navy">Xem Happy Image TV</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row my-5">
                        <div class="col-sm-5"><h3>Thiết lập hồ sơ</h3></div>
                        <div class="col-sm-7">
                            <div class="row pt-md-1">
                                <div class="col-md-6">
                                    <a href="#" class="text-navy">Tìm hồ sơ của bạn</a>
                                </div>
                                <div class="col-md-6">
                                    <a href="#" class="text-navy">Chỉnh sửa hồ sơ của bạn</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row my-5">
                        <div class="col-sm-5"><h3>Happy Image và thiết bị của bạn</h3></div>
                        <div class="col-sm-7">
                            <div class="row pt-md-1">
                                <div class="col-md-6">
                                    <a href="#" class="text-navy">Nâng cấp ứng dụng Happy Image</a>
                                </div>
                                <div class="col-md-6">
                                    <a href="#" class="text-navy">Thêm widget Happy Image</a>
                                </div>
                            </div>
                            <div class="row pt-md-1">
                                <div class="col-md-6">
                                    <a href="#" class="text-navy">Bật trình đọc màn hình cho Happy Image</a>
                                </div>
                                <div class="col-md-6">
                                    <a href="#" class="text-navy">Happy Image Lite</a>
                                </div>
                            </div>
                            <div class="row pt-md-1">
                                <div class="col-md-6">
                                    <a href="#" class="text-navy">Chế độ tối</a>
                                </div>
                                <div class="col-md-6">
                                    <a href="#" class="text-navy">Cấp quyền trong iOS</a>
                                </div>
                            </div>
                            <div class="row pt-md-1">
                                <div class="col-md-6">
                                    <a href="#" class="text-navy">Cấp quyền trên Android</a>
                                </div>
                                <div class="col-md-6">
                                    <a href="#" class="text-navy">Chuyển hướng đến App Store, Play Store hoặc Amazon</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row my-5">
                        <div class="col-sm-5"><h3>Tính năng và công cụ</h3></div>
                        <div class="col-sm-7">
                            <div class="row pt-md-1">
                                <div class="col-md-6">
                                    <a href="#" class="text-navy">Tương tác với Ghim ý tưởng</a>
                                </div>
                                <div class="col-md-6">
                                    <a href="#" class="text-navy">Video trên Happy Image</a>
                                </div>
                            </div>
                            <div class="row pt-md-1">
                                <div class="col-md-6">
                                    <a href="#" class="text-navy">Mua Ghim sản phẩm</a>
                                </div>
                                <div class="col-md-6">
                                    <a href="#" class="text-navy">Sử dụng chức năng Thử</a>
                                </div>
                            </div>
                            <div class="row pt-md-1">
                                <div class="col-md-6">
                                    <a href="#" class="text-navy">Bảng bí mật</a>
                                </div>
                            </div>
                        </div>
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
        <script src="/js/myScript.js"></script>
    </body>
</html>

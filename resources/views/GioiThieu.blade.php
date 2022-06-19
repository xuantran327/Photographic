<!DOCTYPE html>
<html>
    <head>
        <title>Giới thiệu về Happy Image</title>
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
                    <a href="{{ route('help') }}"  class="float-left d-inline-flex text-navy text-decoration-none col-4" style="#">
                        <i class="fas fa-home"></i>&ensp;<span class="bold" id="logo">Trung tâm Trợ giúp</span>
                    </a>
                    <div class="col-4" style="height:100%;">
                        <!-- Click vào nút Tổng quan thì chuyển sang chế độ tổng quan và nút Doanh nghiệp biến mất-->
                        <div class="dropdown float-left d-lg-block d-none" style="height:100%;">
                            <button  style="height:82%;border-radius: 16px;margin-top: 13px;width: 138px;background-color: rgb(250, 142, 142)" data-toggle="dropdown" onclick="#"><b>Tổng quan</b></button>
                            <div class="dropdown-menu help-dropdown-menu bg-light-blue border-0" style="margin-top:0px;margin-left:-20px;border-radius:0;width:320px;">
                                <a href="{{ route('about') }}" class="dropdown-item">Bắt đầu</a>
                                <a href="#" class="dropdown-item">Quản lý tài khoản</a>
                                <a href="#" class="dropdown-item">Tìm và lưu</a>
                                <a href="#" class="dropdown-item">Tạo và chỉnh sửa</a>
                                <a href="#" class="dropdown-item">Kết nối, cộng tác và chia sẻ</a>
                                <a href="#" class="dropdown-item">Quyền riêng tư, an toàn và pháp lý</a>
                            </div>
                        </div>
                        <!-- Click vào nút Doanh nghiệp thì chuyển sang chế độ doanh nghiệp và nút Tổng quan biến mất-->
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
                            {{-- <button class="float-right rounded-pill btn-navy px-3 py-1 mt-3" data-toggle="dropdown"><img src="" alt="" srcset=""></button> --}}
                            <div class="dropdown-menu dropdown-menu-right help-dropdown-menu border-0 bg-light-blue" style="margin-top:18px;border-radius:0;margin-right:-20px;">
                                <a href="#" class="dropdown-item text-right">Thiết lập</a>
                                <a href="TrangChu.html" class="dropdown-item text-right">Trang chủ</a>
                                <a href="#" class="dropdown-item text-right">Điều khoản và quyền riêng tư</a>
                                <a href="#" class="dropdown-item text-right">Đăng xuất</a>
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
            <!-- Header -->
            <div class="row py-5 bg-navy">
                <div style="background-color: black;border-radius: 59px" class="container text-center">
                    <h1 style="color:white" class="text-light-blue display-3 my-5">Giới thiệu về Happy Image</h1>
                </div>
            </div>
            <!-- Nội dung -->
            <div class="container">
                <div class="row py-5">
                    <div class="col-md-8 col-12 text-navy text-justify" style="font-size:20px;">
                        <h2 class="display-5 mx-3 my-4 bold">Happy Image là gì?</h2>
                        <p class="ml-3">Happy Image là một công cụ khám phá trực quan để tìm kiếm ý tưởng như công thức nấu ăn, cảm hứng về nhà cửa và phong cách, v.v.</p>
                        <p class="ml-3">Với hàng tỷ Ghim trên Happy Image, bạn sẽ luôn tìm thấy ý tưởng để khơi nguồn cảm hứng. Khi bạn khám phá các Ghim
                            mình yêu thích, hãy lưu chúng vào bảng để giữ cho các ý tưởng của bạn được sắp xếp và dễ tìm. Bạn cũng có thể tạo
                            Ghim để chia sẻ ý tưởng với những người khác trên Happy Image.</p>
                        <h2 class="display-5 mx-3 my-4 bold">Duyệt qua bảng tin nhà của bạn</h2>
                        <p class="ml-3"><a href="#" class="text-navy"><u>Bảng tin nhà</u></a> là nơi mà bạn sẽ
                            tìm thấy các Ghim, những người và doanh nghiệp chúng tôi nghĩ rằng bạn sẽ thích, dựa trên hoạt động gần đây của
                            bạn. Chúng tôi cũng sẽ hiển thị cho bạn Ghim từ những người và bảng mà bạn chọn theo dõi.</p>
                        <p class="ml-3">Bạn cũng có thể tìm kiếm Ghim bằng cách nhập từ khóa vào thanh tìm kiếm. Hãy thử nhập "tiệc sinh
                            nhật" vào thanh tìm kiếm để xem các ý tưởng trang trí tiệc sinh nhật, công thức nấu ăn cho bữa tiệc và ý tưởng
                            quà tặng sinh nhật.</p>
                        <h2 class="display-5 mx-3 my-4 bold">Khám phá ý tưởng</h2>
                        <p class="ml-3">Sử dụng <a href="#" class="text-navy"><u>thanh tìm kiếm</u></a> để khám
                            phá ý tưởng, con người và xu hướng. Khám phá các chủ đề được đề xuất hoặc tìm kiếm các chủ đề của riêng bạn.
                            Nhấn vào Hồ sơ trên trang tìm kiếm để khám phá những người tạo, con người và thương hiệu dựa trên tìm kiếm của
                            bạn. Sử dụng camera để tìm ý tưởng phù hợp với ảnh của bạn và thu hẹp kết quả làm đẹp theo phạm vi màu da hoặc
                            kiểu tóc.</p>
                        <h2 class="display-5 mx-3 my-4 bold">Lưu, chia sẻ và mua sắm Ghim</h2>
                        <p class="ml-3">Ghim là các dấu trang mà mọi người sử dụng để lưu nội dung mà họ yêu thích trên Pinterest. Ghim có
                            thể là hình ảnh, video hoặc sản phẩm.</p>
                        <p class="ml-3">Nếu nhấp qua Ghim, thì bạn có thể truy cập trang web để tìm hiểu cách làm hoặc nơi mua món đồ trong
                            Ghim. Khi phát hiện Ghim bạn thích, hãy nhấp vào nút <b>Lưu</b> màu đỏ để lưu vào bảng của bạn. Bạn đã thử công
                            thức làm bánh sinh nhật hoàn hảo? Hãy <a href="#" class="text-navy"><u>thêm
                            nhận xét</u></a> để cho mọi người biết kết quả hoặc thêm các mẹo hữu ích.</p>
                        <p class="ml-3">Đôi khi bạn sẽ tìm thấy một Ghim mà bạn biết bạn mình sẽ thích. Nhấp vào <i class="fa fa-send"></i>
                            để gửi Ghim trực tiếp cho một người bạn hoặc một nhóm trong tin nhắn để lan tỏa cảm hứng. Bạn cũng có thể sử
                            dụng tin nhắn để trò chuyện với bạn bè. Bạn có thể xem tin nhắn bằng cách nhấp vào <i class="fas fa-comment-dots"></i>
                            trên máy tính hoặc bằng cách nhấn vào <i class="fas fa-comment-dots"></i>, sau đó nhấn vào <b>Tin nhắn</b> trên
                            thiết bị di động.</p>
                        <p class="ml-3">Bạn cũng có thể tìm kiếm các sản phẩm trên Happy Image để mua. Chỉ cần
                            <a href="#" class="text-navy"><u>tìm Ghim sản phẩm</u></a> và nhấp vào đó để truy
                            cập trang web của nhà bán lẻ.</p>
                        <h2 class="display-5 mx-3 my-4 bold">Tạo Ghim</h2>
                        <p class="ml-3">Tải hình ảnh lên từ máy tính hoặc thiết bị di động để
                            <a href="#" class="text-navy"><u>tạo Ghim</u></a>. Bạn cũng có thể tạo và lưu Ghim
                            từ <a href="#" class="text-navy"><u>hình ảnh bạn tìm thấy trên mạng</u></a>. Thêm
                            tiêu đề và mô tả cho mỗi Ghim bạn tạo và liên kết trang web nếu có. Bạn có thể
                            <a href="#" class="text-navy"><u>chỉnh sửa thông tin của Ghim</u></a> bất kỳ lúc nào
                            và di chuyển Ghim vào bất kỳ bảng nào.</p>
                        <p class="ml-3">Bạn có thể <a href="#" class="text-navy"><u>tạo Ghim ý tưởng</u></a> để
                            quay nhiều video, thêm hình ảnh, danh sách và văn bản tùy chỉnh trong một Ghim duy nhất. Sử dụng Ghim ý tưởng để
                            tạo hướng dẫn từng bước hoặc sắp xếp một bộ sưu tập ý tưởng.</p>
                        <h2 class="display-5 mx-3 my-4 bold">Tạo bảng</h2>
                        <p class="ml-3">Ghim bạn lưu nằm trong các bảng của bạn. Bạn có thể đặt tên cho bảng và
                            <a href="#" class="text-navy"><u>sắp xếp chúng vào hồ sơ</u></a> theo cách bạn muốn.
                            Mời người khác trên Happy Image cộng tác trên <a href="#" class="text-navy"><u>Bảng
                            nhóm</u></a> để tìm thấy nhiều ý tưởng hơn nữa.</p>
                        <p class="ml-3">Để sắp xếp các Ghim của bạn trong bảng, hãy
                            <a href="#" class="text-navy"><u>tạo các phần bảng</u></a>. Thêm phần "Trang trí"
                            hoặc "Trò chơi cho bữa tiệc" vào bảng Tiệc sinh nhật của bạn để sắp xếp các ý tưởng tương tự ở cùng một nơi.
                            Sắp xếp các Ghim của bạn theo bất kỳ cách nào phù hợp với bạn. Bạn cũng có thể
                            <a href="#" class="text-navy"><u>thêm ghi chú</u></a> để tạo danh sách kiểm tra hoặc các lời nhắc khác.</p>
                        <p class="ml-3">Nếu bạn muốn giữ các Ghim của mình ở chế độ riêng tư hoặc đang tổ chức một bữa tiệc sinh nhật bất
                            ngờ, bạn có thể đặt bảng là <a href="#" class="text-navy"><u>bí mật</u></a>. Chỉ có bạn và bất cứ ai bạn mời
                            mới có thể xem các bảng bí mật của bạn.</p>
                        <h2 class="display-5 mx-3 my-4 bold">Xem hồ sơ của bạn</h2>
                        <p class="ml-3">Tìm tất cả các Ghim bạn lưu, bảng bạn tạo và Ghim bạn thử trong <a href="#" class="text-navy"><u>hồ
                            sơ của bạn</u></a>. Bạn cũng có thể xem <a href="#" class="text-navy"><u>ai đang theo dõi bạn</u></a>, cũng như
                            các bảng và những người bạn theo dõi. Bất cứ ai cũng có thể xem hồ sơ của bạn, nhưng bảng bí mật sẽ luôn ẩn.
                            Chỉ bạn mới có thể thấy bảng bí mật khi xem hồ sơ của chính mình.</p>
                    </div>
                    <div class="col-md-4 d-md-block d-none pl-5 text-navy">
                        <h3 class="bold">Các bài viết khác</h3>
                        <div id="accordion-1">
                            <div class="card">
                                <div class="card-header py-3">
                                    <a class="card-link" data-toggle="collapse" href="#collapseOne">
                                        Giới thiệu về Happy Image<span class="float-right collapse-icon"><i class="fas fa-minus"></i></span>
                                    </a>
                                </div>
                                <div id="collapseOne" class="collapse show" data-parent="#accordion-1">
                                    <div class="card-body">
                                        <ul class="list-unstyled">
                                            <li class="mb-2"><a href="{{ route('blog') }}" class="text-navy"><u>Giới thiệu về Happy Image</u></a></i>
                                            <li class="mt-2"><a href="#" class="text-navy">Nhận một tài khoản Happy Image</a></i>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header py-3">
                                    <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                                        Khám phá ý tưởng<span class="float-right collapse-icon"><i class="fas fa-plus"></i></span>
                                    </a>
                                </div>
                                <div id="collapseTwo" class="collapse" data-parent="#accordion-1">
                                    <div class="card-body">
                                        <ul class="list-unstyled">
                                            <li class="mb-2"><a href="#" class="text-navy">Khám phá ý tưởng trên Happy Image</a></i>
                                            <li class="mt-2"><a href="#" class="text-navy">Khám phá bảng tin nhà</a></i>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header py-3">
                                    <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
                                        Tương tác với một Ghim<span class="float-right collapse-icon"><i class="fas fa-plus"></i></span>
                                    </a>
                                </div>
                                <div id="collapseThree" class="collapse" data-parent="#accordion-1">
                                    <div class="card-body">
                                        <ul class="list-unstyled">
                                            <li class="mb-2"><a href="#" class="text-navy">Phản ứng</a></i>
                                            <li class="my-2"><a href="#" class="text-navy">Thêm hoặc quản lý nhận xét trên một Ghim</a></i>
                                            <li class="my-2"><a href="#" class="text-navy">Chia sẻ cảm nghĩ về Ghim ý tưởng</a></i>
                                            <li class="mt-2"><a href="#" class="text-navy">Xem Happy Image TV</a></i>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header py-3">
                                    <a class="card-link" data-toggle="collapse" href="#collapseFour">
                                        Thiết lập hồ sơ<span class="float-right collapse-icon"><i class="fas fa-plus"></i></span>
                                    </a>
                                </div>
                                <div id="collapseFour" class="collapse" data-parent="#accordion-1">
                                    <div class="card-body">
                                        <ul class="list-unstyled">
                                            <li class="mb-2"><a href="#" class="text-navy">Tìm hồ sơ của bạn</a></i>
                                            <li class="mt-2"><a href="#" class="text-navy">Chỉnh sửa hồ sơ của bạn</a></i>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header py-3">
                                    <a class="card-link" data-toggle="collapse" href="#collapseFive">
                                        Happy Image và thiết bị của bạn<span class="float-right collapse-icon"><i class="fas fa-plus"></i></span>
                                    </a>
                                </div>
                                <div id="collapseFive" class="collapse" data-parent="#accordion-1">
                                    <div class="card-body">
                                        <ul class="list-unstyled">
                                            <li class="mb-2"><a href="#" class="text-navy">Nâng cấp ứng dụng Happy Image</a></i>
                                            <li class="my-2"><a href="#" class="text-navy">Thêm widget Happy Image</a></i>
                                            <li class="my-2"><a href="#" class="text-navy">Bật trình đọc màn hình cho Happy Image</a></i>
                                            <li class="my-2"><a href="#" class="text-navy">Happy Image Lite</a></i>
                                            <li class="my-2"><a href="#" class="text-navy">Chế độ tối</a></i>
                                            <li class="my-2"><a href="#" class="text-navy">Cấp quyền trong iOS</a></i>
                                            <li class="my-2"><a href="#" class="text-navy">Cấp quyền trên Android</a></i>
                                            <li class="mt-2"><a href="#" class="text-navy">Chuyển hướng đến App Store, Play Store hoặc Amazon</a></i>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header py-3">
                                    <a class="card-link" data-toggle="collapse" href="#collapseSix">
                                        Tính năng và công cụ<span class="float-right collapse-icon"><i class="fas fa-plus"></i></span>
                                    </a>
                                </div>
                                <div id="collapseSix" class="collapse" data-parent="#accordion-1">
                                    <div class="card-body">
                                        <ul class="list-unstyled">
                                            <li class="mb-2"><a href="#" class="text-navy">Tương tác với Ghim ý tưởng</a></i>
                                            <li class="my-2"><a href="#" class="text-navy">Video trên Happy Image</a></i>
                                            <li class="my-2"><a href="#" class="text-navy">Mua Ghim sản phẩm</a></i>
                                            <li class="my-2"><a href="#" class="text-navy">Sử dụng chức năng Thử</a></i>
                                            <li class="mt-2"><a href="#" class="text-navy">Bảng bí mật</a></i>
                                        </ul>
                                    </div>
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
            <!-- Đánh giá độ hữu ích của bài viết -->
            <div class="row bg-light-blue py-lg-4 py-5">
                <div class="container text-center" id="rate">
                    <!-- Question -->
                    <div class="px-auto" id="question-rate">
                        <h2 class="text-navy display-4 mx-3" style="font-weight:400;">Bài viết này có hữu ích không?</h2>
                        <div class="d-sm-inline-block d-block my-auto mx-sm-3">
                            <button class="btn rounded-circle p-0 px-1 text-navy" style="font-size:40px;" id="btn-smile"><i class="fa fa-smile-o"></i></button>
                            <button class="btn rounded-circle p-0 px-1 text-navy" style="font-size:40px;" id="btn-frown"><i class="fa fa-frown"></i></button>
                        </div>
                    </div>
                    <!-- Góp ý cải thiện khi frown -->
                    <div class="row hidden" id="frown-rate">
                        <div class="col-lg-7">
                            <h2 class="text-navy display-4" style="font-weight:400;">Chúng tôi có thể cải thiện bài viết này bằng cách nào?</h2>
                        </div>
                        <div class="col-lg-5 rate">
                            <form action="#" method="post">
                                <div class="col-lg-8 py-auto float-left">
                                    <textarea class="form-control radius-20 my-lg-auto my-3"></textarea>
                                </div>
                                <div class="col-lg-4 float-left">
                                    <input type="submit" value="Gửi đi" class="form-control btn btn-navy-1 rounded-pill my-lg-auto" style="height:60px;">
                                </div>
                            </form>
                        </div>
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
            var rate = document.getElementById('rate');
            var smile_btn = document.getElementById('btn-smile');
            var frown_btn = document.getElementById('btn-frown');
            /* Khi click vào nút mặt cười gần phần footer */
            smile_btn.onclick = function(){
                rate.innerHTML = '<h2 class="text-navy display-4 mx-3" style="font-weight:400;">Cảm ơn bạn đã cho chúng tôi biết.</h2>';
            };
            /* Khi click vào nút mặt buồn */
            frown_btn.onclick = function(){
                if (!($('#question-rate').hasClass('hidden'))) $('#question-rate').addClass('hidden');
                if ($('#frown-rate').hasClass('hidden')) $('#frown-rate').removeClass('hidden');
            };
        </script>
        <script>
            $(document).ready(function(){
                $("#accordion-1 .collapse").on('show.bs.collapse', function(){
                    let index = $('#accordion-1 .collapse').index(this);
                    let collapse_icon = document.getElementsByClassName("collapse-icon")[index];
                    collapse_icon.innerHTML = '<i class="fas fa-minus"></i>';
                });
                $("#accordion-1 .collapse").on('hide.bs.collapse', function(){
                    let index = $('#accordion-1 .collapse').index(this);
                    let collapse_icon = document.getElementsByClassName("collapse-icon")[index];
                    collapse_icon.innerHTML = '<i class="fas fa-plus"></i>';
                });
            });
        </script>
    </body>
</html>

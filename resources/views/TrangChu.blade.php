<!DOCTYPE html>
<html>
    <head>
        <title>{{ $title }}</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="shortcut icon" href="/img/download.png" type="image/x-icon">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        <link rel="stylesheet" href="/css/myStyle.css">
        <link rel="stylesheet" href="/css/gallery.css">
        <link rel="stylesheet" href="/css/hanhStyle.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
            integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="/script/myScript.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstdap/4.5.2/js/bootstdap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
            <style>
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
            <a href="{{ route('main') }}" id="#" class="btn btn-light rounded-circle float-left px-0" style="#">
                <i class="fas fa-home"></i>
            </a>
            <!-- Ô tìm kiếm -->
            <form action="#" method="GET" class="form-inline ml-3 border-0 float-left">
                <input id="text" type="text" class="form-control bg-gray border-0 border-radius-4 pl-3 search" placeholder="Tìm kiếm">
            </form>
            <!-- Nút thông báo -->
            <a href="#" id="#" class="btn btn-light rounded-circle float-left ml-3 px-0" style="#">
                <i class="fas fa-bell"></i>
            </a>
            <!-- Nút hộp thư -->
            <a href="#" id="#" class="btn btn-light rounded-circle float-left px-0" style="#">
                <i class="fas fa-comment-dots"></i>
            </a>
            <!-- Nút avatar -->
            <a href="{{ route('users') }}" id="avatar" class="btn rounded-circle float-left p-0 ml-2 mr-3" style="margin-top:13px;padding-top:0;">
                <img src="{{ session()->get('users')->img; }}"  alt="" class="rounded-circle m-0" style="#">
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
                            <div class="rounded-circle button1" style="text-align:center;padding-left:9px;padding-top:7px;background-color:rgb(248,249,250);">
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
                <div class="row" id="hanh">
                    <div class="col-md-2" id="col1">
                        {{-- <div onmouseover="onhoverimg(this)" onmouseout="unhoverimg(this)" style="position: relative;">
                            <img src="/img/thumb-350-852186.jpg" alt="">
                            <div class = "icon hiddenimg"  style="position: absolute;width: 100%;height: 92%;background: rgba(214, 192, 192, 0.425);z-index: 3;left: 0;top: 0;border-radius: 15px">
                                <button style="border-radius: 15px;top: 7px;position: absolute;right: 9px;width: 27%;height: 52px;" type="button" class="btn btn-danger">Save</button>
                                <div style="display: flex;position: absolute;bottom: 10px;width: 100%;justify-content:space-between;align-items: center;padding: 12px">
                                <button type="button" class="btn btn-light"><i class="fab fa-facebook"></i></button>
                                <button style="" type="button" class="btn btn-light"><i class="far fa-share-square"></i></button>
                                <button style="border-radius: 100%;" type="button" class="btn btn-light"><i class="fas fa-ellipsis-h"></i></button>
                                </div>
                            </div>
                        </div> --}}
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
                    <div  class="col-md-2" id="col5">

                    </div>
                    <div class="col-md-2" id="col6">

                    </div>
                </div>
            </div>

        </div>
        <!-- Nút trợ giúp -->
        <button class="btn btn-light" id="help-button"><a href="{{ route('help') }}"><i class="fa fa-question"></i></a></button>
        <!-- Nút tạo ghim -->
        <button class="btn btn-light" id="add-button"><a href="TaoGhim.html"><i class="fas fa-plus"></i></a></button>
        <!-- Nút trở về đầu trang -->
        <button onclick="topFunction()" id="up-button" class="btn btn-light hidden"><i class="fas fa-angle-double-up"></i></button>
        <script>
            /* Thiết lập chiều dài Ô tìm kiếm sau khi load trang */
            var x = window.innerWidth;
            document.getElementById("text").style.width = (x-306)+"px";
        </script>
        <script src="/js/myScript.js"></script>
        <script>
            /* Hiển thị nút trở về đầu trang khi scroll xuống 20px */
            //window.onscroll = function() {
            //     scrollFunction()
            // };
        </script>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
            <script>
                AOS.init();
                var skip = 1;
                var termSearch = "";
                var animate = "zoom-in-up";
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
                    $('.search').change(function (e) {
                        e.preventDefault();
                        console.log(e.target.value);
                        for (let index = 1; index < 8; index++){
                            $('#col' + (index % 7)).html("");
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

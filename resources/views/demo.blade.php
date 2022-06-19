<!doctype html>
<html lang="en">

<head>
    <title> Happy Image</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="/img/download.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="/css/demo.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>

<body>
    <div class="row">
        <div class="col-md-6">
            <i style="font-size: 25px;color: red;margin: 15px" class="fas fa-icons"> Happy Image</i>
        </div>
        <div class="col-md-3" style="font-size: 16px;padding-top: 17px;">
            <a href="" style="color:black;font-family: 'Font Awesome 6 Free';">About</a>
            <a href="" style="color:black;font-family: 'Font Awesome 6 Free';margin-left: 25px">Business</a>
            <a href="" style="color:black;font-family: 'Font Awesome 6 Free';margin-left: 25px">Blog</a>
        </div>
        <div class="col-md-3" style="padding-top: 10px">
            <a href="{{ route ('DangNhap')}}" style="color:black;font-family: 'Font Awesome 6 Free';margin-right: 20px"><button type="button"
                    class="btn btn-danger">Log in</button></a>
            <a href="{{ route('DangKi') }}" style="color:black;font-family: 'Font Awesome 6 Free';margin-right: 20px"><button type="button"
                    class="btn btn-outline-danger">Sign up</button></a>
        </div>
    </div>
    <div>
        <h1 style="text-align: center;font-size: 53px">Get Your Next</h1>
        <!--Carousel Wrapper-->
        <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
            <!--Indicators-->
            <ol class="carousel-indicators">
                <li id="data1" style="background:greenyellow;border-radius: 100px;" data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
                <li id="data2" style="background:greenyellow;border-radius: 100px;" data-target="#carousel-example-1z" data-slide-to="1"></li>
                <li id="data3" style="background: greenyellow;border-radius: 100px;" data-target="#carousel-example-1z" data-slide-to="2"></li>
            </ol>
            <!--/.Indicators-->
            <!--Slides-->
            <div class="carousel-inner" role="listbox">
                <!--First slide-->
                <div class="carousel-item active">
                    <div data-aos-duration="2000" data-aos="fade-up">
                        <p style="text-align: center;font-size: 53px;color: orange;">Weeknight dinner idea</p>
                    </div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-2 col1">
                                <div data-aos-duration="2000" data-aos="fade-up">
                                    <img src="/img/thumb-350-1506.jpg" alt="">
                                        <div style="padding: 15px;" data-aos-duration="1000" data-aos="fade-right">
                                            <img src="/img/thumb-350-1494.jpg" alt="">
                                        </div>


                                </div>
                            </div>
                            <div class="col-md-2 col2">
                                <div data-aos-duration="2200" data-aos="fade-up">
                                    <img src="/img/thumb-350-2957.jpg" alt="">
                                    <div style="padding: 15px;" data-aos-duration="2200" data-aos="fade-right">
                                        <img src="/img/thumb-350-2956.jpg" alt="">
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-2 col3">
                                <div data-aos-duration="1900" data-aos="fade-up">
                                    <img src="/img/thumb-350-333634.jpg" alt="">
                                    <div style="padding: 15px;" data-aos-duration="1900" data-aos="fade-right">
                                        <img src="/img/thumb-350-76821.webp" alt="">
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-2 col3">
                                <div data-aos-duration="1900" data-aos="fade-up">
                                    <img src="/img/thumb-350-3584.jpg" alt="">
                                    <div style="padding: 15px;" data-aos-duration="1900" data-aos="fade-right">
                                        <img src="/img/thumb-350-153783.jpg" alt="">
                                    </div>

                                </div>

                            </div>
                            <div class="col-md-2 col2">
                                <div data-aos-duration="2200" data-aos="fade-up">
                                    <img src="/img/thumb-350-4074.jpg" alt="">
                                    <div style="padding: 15px;" data-aos-duration="2200" data-aos="fade-right">
                                        <img src="/img/thumb-350-346118.jpg" alt="">

                                    </div>

                                </div>

                            </div>
                            <div class="col-md-2 col1">
                                <div data-aos-duration="2000" data-aos="fade-up">
                                    <img src="/img/thumb-350-1493.jpg" alt="">
                                    <div style="padding: 15px;" data-aos-duration="2000" data-aos="fade-right">
                                        <img src="/img/thumb-350-421534.jpg" alt="">
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!--/First slide-->
                <!--Second slide-->
                <div class="carousel-item">
                    <div>
                        <div data-aos-duration="2000" data-aos="fade-down">
                        <p style="text-align: center;font-size: 53px;color: rgb(186, 130, 238);">Stalight Galaxy idea</p>
                    </div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-2 col1">
                                <div class="aos-animate" data-aos-duration="2000" data-aos="fade-up">
                                    <img src="/img/thumb-350-1039017.jpg" alt="">
                                    <div style="padding: 15px;" data-aos-duration="1000" data-aos="fade-right">
                                        <img src="/img/thumb-350-606841.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 col2">
                                <div data-aos-duration="2200" data-aos="fade-up">
                                    <img src="/img/thumb-350-1066705.jpg" alt="">
                                    <div style="padding: 15px;" data-aos-duration="1000" data-aos="fade-right">
                                        <img src="/img/thumb-350-601973.webp" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 col3">
                                <div data-aos-duration="1900" data-aos="fade-up">
                                    <img src="/img/thumb-350-1067342.jpg" alt="">
                                    <div style="padding: 15px;" data-aos-duration="1000" data-aos="fade-right">
                                        <img src="/img/thumb-350-852186.webp" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 col3">
                                <div data-aos-duration="1900" data-aos="fade-up">
                                    <img src="/img/thumb-350-1052046.jpg" alt="">
                                    <div style="padding: 15px;" data-aos-duration="1000" data-aos="fade-right">
                                        <img src="/img/thumb-350-934278.jpg" alt="">
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-2 col2">
                                <div data-aos-duration="2200" data-aos="fade-up">
                                    <img src="/img/thumb-350-1039015.jpg" alt="">
                                    <div style="padding: 15px;" data-aos-duration="1000" data-aos="fade-right">
                                        <img src="/img/thumb-350-1041847.jpg" alt="">
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-2 col1">
                                <div data-aos-duration="2000" data-aos="fade-up">
                                    <img src="/img/thumb-350-1018627.jpg" alt="">
                                    <div style="padding: 15px;" data-aos-duration="1000" data-aos="fade-right">
                                        <img src="/img/thumb-350-1140272.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    </div>
                <!--/Second slide-->
                <!--Third slide-->
                <div class="carousel-item">
                    <div data-aos-duration="2000" data-aos="fade-up">
                        <p style="text-align: center;font-size: 53px;color:rgb(255, 20, 51);">Life in beautiful</p>
                    </div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-2 col1">
                                <div class="aos-animate" data-aos-duration="2000" data-aos="fade-up">
                                    <img src="/img/thumbbig-10054.webp" alt="">
                                    <div style="padding: 15px;" data-aos-duration="1000" data-aos="fade-right">
                                        <img src="/img/thumb-350-234007.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 col2">
                                <div data-aos-duration="2200" data-aos="fade-up">
                                    <img src="/img/thumbbig-11814.webp" alt="">
                                    <div style="padding: 15px;" data-aos-duration="1000" data-aos="fade-right">
                                        <img src="/img/thumb-350-242209.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 col3">
                                <div data-aos-duration="1900" data-aos="fade-up">
                                    <img src="/img/thumbbig-45345.webp" alt="">
                                    <div style="padding: 15px;" data-aos-duration="1000" data-aos="fade-right">
                                        <img src="/img/thumb-350-299658.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 col3">
                                <div data-aos-duration="1900" data-aos="fade-up">
                                    <img src="/img/thumbbig-379064.webp" alt="">
                                    <div style="padding: 15px;" data-aos-duration="1000" data-aos="fade-right">
                                        <img src="/img/thumb-350-208617.jpg" alt="">
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-2 col2">
                                <div data-aos-duration="2200" data-aos="fade-up">
                                    <img src="/img/thumbbig-647090.webp" alt="">
                                    <div style="padding: 15px;" data-aos-duration="1000" data-aos="fade-right">
                                        <img src="/img/thumb-350-275367.jpg" alt="">
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-2 col1">
                                <div data-aos-duration="2000" data-aos="fade-up">
                                    <img src="/img/thumbbig-520988.webp" alt="">
                                    <div style="padding: 15px;" data-aos-duration="1000" data-aos="fade-right">
                                        <img src="/img/thumb-350-331087.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/Third slide-->
            </div>
            <!--/.Slides-->
            <!--Controls-->
            <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            <!--/.Controls-->
        </div>
        <!--/.Carousel Wrapper-->
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
        $(document).ready(function () {

            $("#data1").click(function (e) {
                e.preventDefault();
                $(".col1 div").removeClass("aos-animate").addClass("aos-init").addClass("aos-animate");
                $(".col2 div").removeClass("aos-animate").addClass("aos-init").addClass("aos-animate");
                $(".col3 div").removeClass("aos-animate").addClass("aos-init").addClass("aos-animate");

            });

        });


    </script>

</body>

</html>

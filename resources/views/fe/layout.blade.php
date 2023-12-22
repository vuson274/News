<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>News HTML-5 Template </title>
    <meta name="description" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('/assets/img/favicon.ico')}}">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/ticker-style.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/slicknav.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/style.css')}}">
</head>

<body>

<!-- Preloader Start -->
<!-- <div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="preloader-circle"></div>
            <div class="preloader-img pere-text">
                <img src="assets/img/logo/logo.png" alt="">
            </div>
        </div>
    </div>
</div> -->
<!-- Preloader Start -->

<header>
    <!-- Header Start -->
    <div class="header-area">
        <div class="main-header ">
{{--            <div class="header-top black-bg d-none d-md-block">--}}
{{--                <div class="container">--}}
{{--                    <div class="col-xl-12">--}}
{{--                        <div class="row d-flex justify-content-between align-items-center">--}}
{{--                            <div class="header-info-left">--}}
{{--                                <ul>--}}
{{--                                    <li><img src="assets/img/icon/header_icon1.png" alt="">34ºc, Sunny </li>--}}
{{--                                    <li><img src="assets/img/icon/header_icon1.png" alt="">Tuesday, 18th June, 2019</li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                            <div class="header-info-right">--}}
{{--                                <ul class="header-social">--}}
{{--                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>--}}
{{--                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>--}}
{{--                                    <li> <a href="#"><i class="fab fa-pinterest-p"></i></a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
            <div class="header-mid d-none d-md-block">
                <div class="container">
                    <div class="row d-flex align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-3 col-lg-3 col-md-3">
                            <div class="logo">
                                <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9 col-md-9">
                            <div class="header-banner f-right ">
                                <img src="assets/img/hero/header_card.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-10 col-lg-10 col-md-12 header-flex">
                            <!-- sticky -->
                            <div class="sticky-logo">
                                <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                            </div>
                            <!-- Main-menu -->
                            <div class="main-menu d-none d-md-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="{{route('home')}}">Home</a></li>
                                        <li><a href="#">Category</a></li>
                                        <li><a href="about.html">About</a></li>
                                        <li><a href="latest_news.html">Latest News</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                        <li><a href="#">Pages</a>
                                            <ul class="submenu">
                                                <li><a href="elements.html">Element</a></li>
                                                <li><a href="blog.html">Blog</a></li>
                                                <li><a href="single-blog.html">Blog Details</a></li>
                                                <li><a href="details.html">Categori Details</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-4" style="display: flex; align-items: center">
                            <div class="header-right-btn f-right d-none d-lg-block">
                                <i class="fas fa-search special-tag"></i>
                                <div class="search-box">
                                    <form action="#">
                                        <input id="search" type="text" placeholder="Search">
                                    </form>
                                </div>
                                <div id="show_search" style="position: absolute; width: 500px; right: 20%">
                                    <div class="list-group" id="show-list" style="overflow: auto;">
                                        <!-- Here autocomplete list will be display -->
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div style="display: block; padding-left: 10px;">
                                    <a style="color: black;" href="{{route('show.login')}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664z"/>
                                        </svg></a>
                                </div>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-md-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>
    @yield('content_web')
<footer>
    <!-- Footer Start-->
    <div class="footer-area footer-padding fix">
        <div class="container">
            <div class="row d-flex justify-content-between">
                <div class="col-xl-5 col-lg-5 col-md-7 col-sm-12">
                    <div class="single-footer-caption">
                        <div class="single-footer-caption">
                            <!-- logo -->
                            <div class="footer-logo">
                                <a href="index.html"><img src="assets/img/logo/logo2_footer.png" alt=""></a>
                            </div>
                            <div class="footer-tittle">
                                <div class="footer-pera">
                                    <p>Suscipit mauris pede for con sectetuer sodales adipisci for cursus fames lectus tempor da blandit gravida sodales  Suscipit mauris pede for con sectetuer sodales adipisci for cursus fames lectus tempor da blandit gravida sodales  Suscipit mauris pede for sectetuer.</p>
                                </div>
                            </div>
                            <!-- social -->
                            <div class="footer-social">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4  col-sm-6">
                    <div class="single-footer-caption mt-60">
                        <div class="footer-tittle">
                            <h4>Newsletter</h4>
                            <p>Heaven fruitful doesn't over les idays appear creeping</p>
                            <!-- Form -->
                            <div class="footer-form" >
                                <div id="mc_embed_signup">
                                    <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                          method="get" class="subscribe_form relative mail_part">
                                        <input type="email" name="email" id="newsletter-form-email" placeholder="Email Address"
                                               class="placeholder hide-on-focus" onfocus="this.placeholder = ''"
                                               onblur="this.placeholder = ' Email Address '">
                                        <div class="form-icon">
                                            <button type="submit" name="submit" id="newsletter-submit"
                                                    class="email_icon newsletter-submit button-contactForm"><img src="assets/img/logo/form-iocn.png" alt=""></button>
                                        </div>
                                        <div class="mt-10 info"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-5 col-sm-6">
                    <div class="single-footer-caption mb-50 mt-60">
                        <div class="footer-tittle">
                            <h4>Instagram Feed</h4>
                        </div>
                        <div class="instagram-gellay">
                            <ul class="insta-feed">
                                <li><a href="#"><img src="assets/img/post/instra1.jpg" alt=""></a></li>
                                <li><a href="#"><img src="assets/img/post/instra2.jpg" alt=""></a></li>
                                <li><a href="#"><img src="assets/img/post/instra3.jpg" alt=""></a></li>
                                <li><a href="#"><img src="assets/img/post/instra4.jpg" alt=""></a></li>
                                <li><a href="#"><img src="assets/img/post/instra5.jpg" alt=""></a></li>
                                <li><a href="#"><img src="assets/img/post/instra6.jpg" alt=""></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer-bottom aera -->
    <div class="footer-bottom-area">
        <div class="container">
            <div class="footer-border">
                <div class="row d-flex align-items-center justify-content-between">
                    <div class="col-lg-6">
                        <div class="footer-copy-right">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="footer-menu f-right">
                            <ul>
                                <li><a href="#">Terms of use</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End-->
</footer>

<!-- JS here -->

<!-- All JS Custom Plugins Link Here here -->
<script src="{{asset('/assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="{{asset('/assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
<script src="{{asset('/assets/js/popper.min.js')}}"></script>
<script src="{{asset('/assets/js/bootstrap.min.js')}}"></script>
<!-- Jquery Mobile Menu -->
<script src="{{asset('/assets/js/jquery.slicknav.min.js')}}"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="{{asset('/assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('/assets/js/slick.min.js')}}"></script>
<!-- Date Picker -->
<script src="{{asset('/assets/js/gijgo.min.js')}}"></script>
<!-- One Page, Animated-HeadLin -->
<script src="{{asset('/assets/js/wow.min.js')}}"></script>
<script src="{{asset('/assets/js/animated.headline.js')}}"></script>
<script src="{{asset('/assets/js/jquery.magnific-popup.js')}}"></script>

<!-- Breaking New Pluging -->
<script src="{{asset('/assets/js/jquery.ticker.js')}}"></script>
<script src="{{asset('/assets/js/site.js')}}"></script>

<!-- Scrollup, nice-select, sticky -->
<script src="{{asset('/assets/js/jquery.scrollUp.min.js')}}"></script>
<script src="{{asset('/assets/js/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('/assets/js/jquery.sticky.js')}}"></script>

<!-- contact js -->
<script src="{{asset('/assets/js/contact.js')}}"></script>
<script src="{{asset('/assets/js/jquery.form.js')}}"></script>
<script src="{{asset('/assets/js/jquery.validate.min.js')}}"></script>
<script src="{{asset('/assets/js/mail-script.js')}}"></script>
<script src="{{asset('/assets/js/jquery.ajaxchimp.min.js')}}"></script>

<!-- Jquery Plugins, main Jquery -->
<script src="{{asset('/assets/js/plugins.js')}}"></script>
<script src="{{asset('/assets/js/main.js')}}"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
<script>
    $(document).on('keyup','#search',function (e){
        var searchText = $(this).val();
        if (searchText != ""){
            $.ajax({
                url: "{{ route('search') }}",
                method: "get",
                data: {
                    name: searchText,
                },
                success: function (response) {
                    let result =  response.map(value =>{
                        return  '<a href="/post/'+value.id+'" class="list-group-item list-group-item-action border-1"><img style="width: 10%;" src="" alt=""> &ensp;' +value.title+'</a>'
                    })
                    $("#show-list").html(result);
                },
            });
        }else {
            $("#show-list").html("");
        }
    });
</script>
</body>
</html>
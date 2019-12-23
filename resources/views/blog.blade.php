<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>بیت کوین</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Appt is a Modern, Responsive App Landing HTML template">
    <meta name="keywords" content="App, Technology, business, responsive, multipurpose, onepage, corporate, clean">
    <meta name="author" content="bitspeck">

    <link rel="shortcut icon" type="image/x-icon" href="/site-assets/images/fav-icon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- all css here -->
    <!-- Bootstrap css -->
    <link href="/site-assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="/site-assets/css/bootstrap.rtl.min.css" rel="stylesheet">

    <!--Font Awesome css -->
    <link href="/site-assets/css/font-awesome.min.css" rel="stylesheet">
    <!-- Owl Carousel css -->
    <link href="/site-assets/css/owl.carousel.css" rel="stylesheet">
    <link href="/site-assets/css/owl.carousel.min.css" rel="stylesheet">
    <!-- Site css -->
    <link href="/site-assets/css/swiper.css" rel="stylesheet">
    <link href="/site-assets/css/YouTubePopUp.css" rel="stylesheet">
    <link rel="stylesheet" href="/site-assets/css/animated-headlines.css">
    <link rel="stylesheet" href="/site-assets/css/shortcode/shortcodes.css">
    <!-- Site css -->
    <link href="/site-assets/css/main.css" rel="stylesheet">
    <link href="/site-assets/css/rtl.css" rel="stylesheet">

    <!-- Responsive css -->
    <link href="/site-assets/css/responsive.css" rel="stylesheet">
    <link href="/site-assets/css/custom.css" rel="stylesheet">
    <style>
        #questions a:hover {
            color: initial !important;
        }
    </style>
</head>

<body id="home">
<!-- Preloader starts-->
<div id="loading">
    <div class="load-circle"><span class="one"></span></div>
</div>
<!-- Preloader ends -->

<!-- Navigation area starts -->
<div class="menu-area navbar-fixed-top">
    <div class="container">
        <div class="row">

            <!-- Navigation starts -->
            <div class="col-md-12">
                <div class="mainmenu">
                    <div class="navbar navbar-nobg">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="/site-assets/index.html">
                                <img src="/site-assets/images/logo.png" class="img-responsive" alt="img">
                            </a>
                            <button type="button" class="navbar-toggle" data-toggle="collapse"
                                    data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="navbar-collapse collapse">
                            <nav>
                                <ul class="nav navbar-nav navbar-left">
                                    <li class="active"><a class="smooth_scroll" href="#slider-bg">خانه</a>
                                    </li>
                                    <li><a class="smooth_scroll" href="#price"> قیمت ارز ها</a></li>
                                    <li><a class="smooth_scroll" href="#about-us"> درباره ما</a></li>
                                    <li><a class="smooth_scroll" href="#feature">ویژگی ها</a></li>
                                    <li><a class="smooth_scroll" href="#questions">سوالات متداول</a></li>
                                    <li><a  href="/blog">بلاگ</a></li>
                                    <li><a class="smooth_scroll" href="#contact">تماس</a></li>
                                    @if(!Auth::check())
                                        <li><a href="/login">ورود</a></li>
                                    @else
                                        <li>
                                            <a href={{$panel_address}}>پنل کاربری</a>
                                        </li>
                                    @endif
                                </ul>
                            </nav>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Navigation ends -->

        </div>
    </div>
</div>
<!-- Navigation area ends -->

<footer class="copyright-area">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="copyright-text text-center">
                    <p>کپی رایت &copy; 2020. تمامی حقوق محفوط است</p>
                </div>
            </div>
            <a class="smooth_scroll" href="/site-assets/#home" id="scroll-to-top"><i class="fa fa-angle-up"></i></a>
        </div>
    </div>
</footer>
<!-- copyright area ends -->

<!-- all js here -->
<script src="/site-assets/js/jquery-1.12.4.min.js"></script>

<!-- Bootstrap js-->
<script src="/site-assets/js/bootstrap.min.js"></script>

<!-- Owl Carousel js -->
<script src="/site-assets/js/owl.carousel.min.js"></script>

<!-- Waypoint js -->
<script src="/site-assets/js/waypoints.js"></script>
<script src="/site-assets/js/counter.js"></script>
<script src="/site-assets/js/plugins.js"></script>
<!-- Ajax Mailchimp js -->
<script src="/site-assets/js/swiper.min.js"></script>
<script src="/site-assets/js/YouTubePopUp.jquery.js"></script>
<!-- Ajax Mailchimp js -->
<script src="/site-assets/js/jquery.ajaxchimp.min.js"></script>
<!-- swiper js -->
<script src="/site-assets/js/swiper.min.js"></script>
<!-- main js -->
<script src="/site-assets/js/custom.js"></script>

<script>
    $(document).ready(function () {
        $('#questions a').click(function () {
            var tag = $('#questions a span');
            tag.removeClass('glyphicon-minus').addClass('glyphicon-plus');
            $(this).find('span').toggleClass('glyphicon-minus').toggleClass('glyphicon-plus');

        });
    });
</script>
</body>

</html>

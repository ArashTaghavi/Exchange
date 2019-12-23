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
                                        <li><a href="/login">ورود / ثبت نام</a></li>
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

<!-- Slider Area Start -->
<div class="background-area" id="slider-bg">
    <div class="slider-full-carousel owl-carousel">
        <div class="single-carousel" style="background-image: url('/site-assets/images/banner-still.jpg');">
            <div class="banner-content ">
                <div class="container">
                    <div class="background-content">
                        <div class="banner-image hand bnr-sm-none">
                            <div class="watch">
                                <img src="/site-assets/images/home-2-slider-1.png" class="img-responsive" alt="img">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-9 col-md-9">
                                <div class="text-content-wrapper slider">
                                    <div class="hero-text">
                                        <h1 class="title2 cd-headline clip is-full-width">بازار معاملاتی ارزهای
                                            دیجیتال<br><br>
                                            <span class="cd-words-wrapper">
														<b class="is-visible">خرید و فروش امن</b>
														<b>پشتیبانی شبانه روزی</b>
														<b>سرعت بالا</b>
													</span>
                                        </h1>
                                        <p>
                                            با خرید و فروش ارز در سایت بیت کوین، دغدغه های امنیتی و وصول نقدینگی را
                                            نخواهید داشت.
                                        </p>
                                        <a href="/site-assets/#" class="hero-btn">دانلود</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-carousel" style="background-image: url('/site-assets/images/banner-still.jpg');">
            <div class="banner-content ">
                <div class="container">
                    <div class="background-content">
                        <div class="banner-image hand bnr-sm-none">
                            <div class="watch">
                                <img src="/site-assets/images/home-2-slider-2.png" class="img-responsive" alt="img">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-9 col-md-9">
                                <div class="text-content-wrapper slider">
                                    <div class="hero-text">
                                        <h1 class="title2 cd-headline clip is-full-width">بازار معاملاتی ارزهای
                                            دیجیتال<br><br>
                                            <span class="cd-words-wrapper">
                          <b class="is-visible">خرید و فروش امن</b>
                          <b>پشتیبانی شبانه روزی</b>

                          <b>سرعت بالا</b>
                        </span>
                                        </h1>
                                        <p> با خرید و فروش ارز در سایت بیت کوین، دغدغه های امنیتی و وصول نقدینگی را
                                            نخواهید داشت.
                                        </p>
                                        <a href="/site-assets/#" class="hero-btn">دانلود اپلیکیشن</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-carousel" style="background-image: url('/site-assets/images/banner-still.jpg');">
            <div class="banner-content ">
                <div class="container">
                    <div class="background-content">
                        <div class="banner-image hand bnr-sm-none">
                            <div class="watch">
                                <img src="/site-assets/images/home-2-slider-3.png" class="img-responsive" alt="img">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-9 col-md-9">
                                <div class="text-content-wrapper slider">
                                    <div class="hero-text">
                                        <h1 class="title2 cd-headline clip is-full-width">
                                            بازار معاملاتی ارز های دیجیتال
                                            <br><br>
                                            <span class="cd-words-wrapper">
                          <b class="is-visible">خرید و فروش امن</b>
                          <b>پشتیبانی شبانه روزی</b>
                          <b>سرعت بالا</b>
                        </span>
                                        </h1>
                                        <p> با خرید و فروش ارز در سایت بیت کوین، دغدغه های امنیتی و وصول نقدینگی را
                                            نخواهید داشت.
                                        </p>
                                        <a href="/site-assets/#" class="hero-btn">دانلود</a>
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
<!-- Slider Area End -->


<!-- Price -->
<section id="price" class="price section-big">
    <div class="container">
        <div class="section-title">
            <h2>قیمت ارز های موجود</h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="panel">
                    <div class="panel-title">
                        <img src="/site-assets/images/btc.png" alt="">
                        <h4>بیت کوین</h4>
                    </div>
                    <div class="panel-body text-center">
                        <div class="row">
                            <div class="col-sm-6">خرید از سایت</div>
                            <div class="col-sm-6">
                                92,344,657
                                تومان
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">فروش به سایت</div>
                            <div class="col-sm-6">
                                93,554,651
                                تومان
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <a href="" class="bttn-default ">انجام معامله</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel">
                    <div class="panel-title">
                        <img src="/site-assets/images/eth.png" alt="">
                        <h4>اتریوم</h4>
                    </div>
                    <div class="panel-body text-center">
                        <div class="row">
                            <div class="col-sm-6">خرید از سایت</div>
                            <div class="col-sm-6">
                                92,344,657
                                تومان
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">فروش به سایت</div>
                            <div class="col-sm-6">
                                93,554,651
                                تومان
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <a href="" class="bttn-default ">انجام معامله</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel">
                    <div class="panel-title">
                        <img src="/site-assets/images/usdt.png" alt="">
                        <h4>تتر</h4>
                    </div>
                    <div class="panel-body text-center">
                        <div class="row">
                            <div class="col-sm-6">خرید از سایت</div>
                            <div class="col-sm-6">
                                92,344,657
                                تومان
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">فروش به سایت</div>
                            <div class="col-sm-6">
                                93,554,651
                                تومان
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <a href="" class="bttn-default ">انجام معامله</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <br>
        <div class="row">
            <div class="col-xs-6 col-md-3 col-md-offset-2">
                <div class="form-group">
                    <select name="" id="" class="form-control">
                        <option value="">بیت کوین</option>
                        <option value="">اتریوم</option>
                        <option value="">تتر</option>
                    </select>
                </div>
            </div>
            <div class="col-xs-6 col-md-3">
                <div class="form-group">
                    <select name="" id="" class="form-control">
                        <option value="">بیت کوین</option>
                        <option value="">اتریوم</option>
                        <option value="">تتر</option>
                    </select>
                </div>
            </div>
            <div class="col-xs-3 col-md-2">
                <div class="form-group">
                    <button class="btn btn-xs btn-warning"
                            style="border-radius: 3px;background: linear-gradient(to right, #0987f4, #003073)">تبدیل
                    </button>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Price -->


<!-- About area Start -->
<section id="about-us" class="about section-big">
    <div class="container">
        <div class="section-title">
            <h2> درباره <span>بیت کوین ایران</span></h2>
            <p>
                اکسچنج غیرمتمرکز بیت کوین ایران نسخه اولیه ای از پروژه ای بلند مدت و با قابلیت هایی فراتر از یک پلتفرم
                خرید و فروش ساده است؛ تیم بیت کوین ایران بصورت مداوم با آپدیت های نرم افزاری در راستای رسیدن به این مهم
                قدم بر میدارد و امیدواریم قادر به ایجاد یک پلتفرم غیرمتمرکز جامع در سطح بین المللی و برای استفاده تمام
                کاربران باشیم.
            </p>
        </div>
        <div class="row about-content">
            <div class="col-md-7 col-xs-12 col-sm-6 row-image">
                <div class="about-img">
                    <img class="img-responsive" src="/site-assets/images/about-image.png" alt="img">
                </div>
            </div>
            <div class="col-md-5 col-xs-12 col-sm-6 row-text">
                <div class="common-pera about-text">
                    <div class="common-pera about-span">
                        <p>
                            اکسچنج غیرمتمرکز بیت کوین ایران نسخه اولیه ای از پروژه ای بلند مدت و با قابلیت هایی فراتر از
                            یک پلتفرم خرید و فروش ساده است؛ تیم بیت کوین ایران بصورت مداوم با آپدیت های نرم افزاری در
                            راستای رسیدن به این مهم قدم بر میدارد و امیدواریم قادر به ایجاد یک پلتفرم غیرمتمرکز جامع در
                            سطح بین المللی و برای استفاده تمام کاربران باشیم.
                        </p>
                    </div>
                </div>
                {{--  <div class="discription">
                      <ul>
                          <li><i class="fa fa-angle-double-left"></i>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم است.
                          </li>
                          <li><i class="fa fa-angle-double-left"></i>چاپگرها و متون بلکه روزنامه و مجله در ستون و
                              سطرآنچنان که لازم است
                          </li>
                          <li><i class="fa fa-angle-double-left"></i>برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع
                              با هدف بهبود ابزارهای کاربردی می باشد.
                          </li>
                          <li><i class="fa fa-angle-double-left"></i>تابهای زیادی در شصت و سه درصد گذشته، حال و آینده
                              شناخت فراوان جامعه و متخصصان را می طلبد.
                          </li>
                          <li><i class="fa fa-angle-double-left"></i>نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی
                              الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد.
                          </li>
                          <li><i class="fa fa-angle-double-left"></i> می توان امید داشت که تمام و دشواری موجود در ارائه
                              راهکارها و شرایط سخت تایپ به پایان رسد .
                          </li>

                      </ul>
                  </div>--}}
                <div class="button-group store-buttons">
                    <a href="/site-assets/#" class="btn btn-style-2 btn-bordered-grad">
                        <i class="fa fa-android"></i>
                        <p class="dsp-tc">دانلود از
                            <br> <span>Google Store</span></p>
                    </a>
                    <a href="/site-assets/#" class="btn btn-style-2 btn-bordered-grad">
                        <i class="fa fa-apple"></i>
                        <p class="dsp-tc">دانلود از
                            <br> <span>App Store</span></p>
                    </a>
                </div>
                <div class="clr"></div>
            </div>
        </div>
    </div>
</section>
<!-- About area end -->

<!-- feature area starts -->
<section id="feature" class="feature-area section-big">
    <div class="container">

        <div class="row">
            <!-- section-title -->
            <div class="section-title">
                <h2>ویژگی های <span>بیت کوین ایران</span></h2>
                <p>برخی از ویژگی های مهم سایت بیت کوین ایران در قسمت زیر آورده شده است.</p>
            </div>
        </div>

        <div class="row feature-inner about-content">
            <div class="col-md-4 hidden-xs hidden-sm">
                <!-- feture-mobile -->
                <div class="feture-mobile">
                    <img src="/site-assets/images/banner-phone.png" class="img-responsive" alt="img">
                </div>
            </div>
            <div class="col-md-8 col-sm-12">
                <div class="col-sm-6">

                    <!--single-feature-->
                    <div class="single-feature single-feature-squre">
                        <div class="icon">
                            <div class="icon-cell">
                                <img src="/site-assets/images/clean-design-.png" alt="">
                            </div>
                        </div>
                        <h3>تنوع ارزهای پشتیبانی شده
                        </h3>
                        <p>
                            شبکه بیت کوین ایران از تکنولوژی جدیدی تحت عنوان "اینترنت بلاکچین ها" در هسته خود استفاده می
                            کند که امکان پشتیبانی از تعداد بیشماری رمزارز را برای شبکه بیت کوین ایران فراهم می سازد.
                        </p>
                    </div>
                </div>
                <div class="col-sm-6 feature-sm">

                    <!--single-feature-->
                    <div class="single-feature feature-top single-feature-squre">
                        <div class="icon">
                            <div class="icon-cell">
                                <img src="/site-assets/images/retina-ready.png" alt="">
                            </div>
                        </div>
                        <h3>کیف پول امن</h3>
                        <p>
                            دارایی های کاربر در یک کیف پول امن در بلاکچین بیت کوین ایران ذخیره می شوند که به دلیل
                            استفاده از بلاکچین در زیرساخت بیت کوین ایران دسترسی به این داده ها برای اشخاص ثالت(سوم شخص)
                            غیر ممکن می باشد.
                        </p>
                    </div>
                </div>
                <div class="col-sm-6">

                    <!--single-feature-->
                    <div class="single-feature single-feature-squre">
                        <div class="icon">
                            <div class="icon-cell">
                                <img src="/site-assets/images/pixel-perfect.png" alt="">
                            </div>
                        </div>
                        <h3>کنترل بر دارایی</h3>
                        <p>
                            کیف پول کاربر فقط با عبارت seed که فقط در اختیار خود کاربر قرار داده شده است قابل استفاده
                            است و در صورت نگهداری صحیح از این عبارت حتی مدیریت بیت کوین ایرام نیز به دارایی های کاربر
                            دسترسی نخواهند داشت.
                        </p>
                    </div>
                </div>
                <div class="col-sm-6">

                    <!--single-feature-->
                    <div class="single-feature feature-top single-feature-squre">
                        <div class="icon">
                            <div class="icon-cell">
                                <img src="/site-assets/images/responsive.png" alt="">
                            </div>
                        </div>
                        <h3>انتقال داخلی</h3>
                        <p>
                            امکان انتقال موجودی بدون کسر کارمزد و بصورت آنی بین کاربران بیت کوین ایران یکی دیگر از
                            مزایای استفاده از "اینترنت بلاکچین ها" در شبکه بیت کوین ایران می باشد.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- feature area ends -->

<!-- Questions -->
<section id="questions" style="background: #f5f9fc" class="feature-area section-big">
    <div class="container">
        <div class="section-title">
            <h2>سوالات متداول</h2>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                    <span class="glyphicon glyphicon glyphicon-minus">
                            </span>آیا میتوانیم در اندروید استفاده کنیم؟</a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <p>در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت
                                    تایپ به پایان رسد .</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                    <span class="glyphicon glyphicon glyphicon-plus">
                            </span>چگونه برنامه را دریافت کنیم؟</a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود
                                    طراحی اساسا مورد استفاده قرار گیرد.</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                    <span class="glyphicon glyphicon-plus">
                            </span>آیا پشتیبانی آنلاین وجود دارد؟</a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود
                                    طراحی اساسا مورد استفاده قرار گیرد.</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                                    <span class="glyphicon glyphicon-plus"></span>
                                    آیا برای استفاده نیاز به خرید لایسنس است؟
                                </a>
                            </h4>
                        </div>
                        <div id="collapseFour" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود
                                    طراحی اساسا مورد استفاده قرار گیرد.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</section>
<!-- Questions -->

<!-- Contact  area Start -->
<section id="contact" class="our-contact section-big">
    <div class="container">
        <div class="row">
            <div class="section-title">
                <h2>با ما در <span>ارتباط </span>باشید</h2>
            </div>
            <div class="col-xl-6 col-lg-6 col-sm-6 contact-img">
                <img src="/site-assets/images/contact-mobile.png" class="img-responsive con-phone" alt="img">
            </div>
            <div class="col-xl-6 col-lg-6 col-sm-6">
                <div class="contact-form form3">
                    <div id="form-messages"></div>
                    <form id="contact-form" action="http://demo.jamalgh.ir/appto/demo/php/contact.php" method="post">
                        <input name="name" type="text" required placeholder="نام شما:">
                        <input name="email" type="email" required placeholder="ایمیل:">

                        <textarea name="message" required id="message" cols="30" rows="10"
                                  placeholder="متن پیام :"></textarea>
                        <div class="store-buttons text-center">
                            <button type="submit" class='bttn-default' name="submit" value="ارسال">ارسال</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="sub-contact" class="section-big">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="contact-logo">
                    <img src="/site-assets/images/logo.png" class="img-responsive" alt="img">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="text-icon-box">
                        <div class="box-icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <h4>تماس با ما</h4>
                        <p>+009 123 456 789</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 col-xs-12">
                    <div class="text-icon-box">
                        <div class="box-icon">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <h4>مکان</h4>
                        <p>ایران - تهران - خیابان انقلاب</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 col-xs-12">
                    <div class="text-icon-box">
                        <div class="box-icon">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <h4>ایمیل</h4>
                        <p>appt@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-md-offset-2 col-xs-12 text-center">
                <div class="cont-icon">
                    <h4>ما را دنبال کنید</h4>
                    <ul>
                        <li><a href="/site-assets/#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="/site-assets/#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="/site-assets/#"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="/site-assets/#"><i class="fa fa-behance"></i></a></li>
                        <li><a href="/site-assets/#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- Contact  area end -->

<!-- copyright area starts -->
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

<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Vendor styles -->
    <link rel="stylesheet"
          href="/dashboard-assets/vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="/dashboard-assets/vendors/bower_components/animate.css/animate.min.css">
    <link rel="stylesheet" href="/dashboard-assets/vendors/sweetalert/dist/sweetalert.css">

    <!-- App styles -->
    <link rel="stylesheet" href="/dashboard-assets/css/app.min.css">
    <link rel="stylesheet" href="/dashboard-assets/css/custom.css">


    <script src="/dashboard-assets/vendors/sweetalert/dist/sweetalert.min.js"></script>
    <style>
        h2, p {
            font-family: IRANSans !important;
        }
    </style>
</head>

<body data-sa-theme="2">
@if($errors->any())
    <script type="text/javascript">
        swal({
            title: 'پیام سیستم',
            text: "{{ $errors->first()  }}",
            type: 'error',
            showConfirmButton: true,
            timer: 5000
        });
    </script>
@endif
<div class="login">
    <!-- Login -->
    <div class="login__block active" id="l-login">
        <div class="login__block__header">
            <i class="zmdi zmdi-account-circle"></i>
            ورود به پنل کاربری
            <div class="actions actions--inverse login__block__actions">
                <div class="dropdown">
                    <i data-toggle="dropdown" class="zmdi zmdi-more-vert actions__item"></i>

                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" data-sa-action="login-switch" data-sa-target="#l-register"
                           href="/dashboard-assets/default.htm">ساخت حساب کاربری</a>
                        <a class="dropdown-item" data-sa-action="login-switch" data-sa-target="#l-forget-password"
                           href="/dashboard-assets/default.htm">فراموشی رمز عبور</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="login__block__body">
            <form action="" method="post" action="{{route('doLogin')}}">
                @csrf
                <div class="form-group">
                    <input type="text" name="mobile" class="form-control text-center"
                           placeholder="آدرس ایمیل یا شماره مویابل"
                           autocomplete>
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control text-center" placeholder="رمز عبور">
                </div>
                <button class="btn btn--icon login__block__btn">
                    <i class="zmdi zmdi-long-arrow-right"></i>
                </button>
            </form>
        </div>
    </div>

    <!-- Register -->
    <div class="login__block" id="l-register">
        <div class="login__block__header">
            <i class="zmdi zmdi-account-circle"></i>
            ساختن حساب کاربری
            <div class="actions actions--inverse login__block__actions">
                <div class="dropdown">
                    <i data-toggle="dropdown" class="zmdi zmdi-more-vert actions__item"></i>

                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" data-sa-action="login-switch" data-sa-target="#l-login"
                           href="/dashboard-assets/default.htm">قبلا حساب کاربری داشته اید؟</a>
                        <a class="dropdown-item" data-sa-action="login-switch" data-sa-target="#l-forget-password"
                           href="/dashboard-assets/default.htm">رمز عبور را فراموش کرده اید؟</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="login__block__body">
            <form action="{{route('doRegister')}}" method="POST">
                @csrf
                <div class="form-group">
                    <input type="number" maxlength="11" class="form-control text-center" name="mobile" placeholder="موبایل">
                </div>
                <button class="btn btn--icon login__block__btn">
                    <i class="zmdi zmdi-plus"></i>
                </button>
            </form>
        </div>
    </div>

    <!-- Forgot Password -->
    <div class="login__block" id="l-forget-password">
        <div class="login__block__header">
            <i class="zmdi zmdi-account-circle"></i>
            فراموشی رمز عبور

            <div class="actions actions--inverse login__block__actions">
                <div class="dropdown">
                    <i data-toggle="dropdown" class="zmdi zmdi-more-vert actions__item"></i>

                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" data-sa-action="login-switch" data-sa-target="#l-login"
                           href="/dashboard-assets/default.htm">Already have an account?</a>
                        <a class="dropdown-item" data-sa-action="login-switch" data-sa-target="#l-register"
                           href="/dashboard-assets/default.htm">Create an account</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="login__block__body">
            <p class="mb-5">Lorem ipsum dolor fringilla enim feugiat commodo sed ac lacus.</p>

            <div class="form-group">
                <input type="text" class="form-control text-center" placeholder="آدرس ایمیل">
            </div>

            <a href="/dashboard-assets/index.html" class="btn btn--icon login__block__btn"><i
                        class="zmdi zmdi-check"></i></a>
        </div>
    </div>
</div>

<!-- Older IE warning message -->
<!--[if IE]>
<div class="ie-warning">
    <h1>?????!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade to any of the following web browsers to
        access this website.</p>

    <div class="ie-warning__downloads">
        <a href="/dashboard-assets/http://www.google.com/chrome">
            <img src="/dashboard-assets/img/browsers/chrome.png" alt="">
        </a>

        <a href="/dashboard-assets/https://www.mozilla.org/en-US/firefox/new">
            <img src="/dashboard-assets/img/browsers/firefox.png" alt="">
        </a>

        <a href="/dashboard-assets/http://www.opera.com/default.htm">
            <img src="/dashboard-assets/img/browsers/opera.png" alt="">
        </a>

        <a href="/dashboard-assets/https://support.apple.com/downloads/safari">
            <img src="/dashboard-assets/img/browsers/safari.png" alt="">
        </a>

        <a href="/dashboard-assets/https://www.microsoft.com/en-us/windows/microsoft-edge">
            <img src="/dashboard-assets/img/browsers/edge.png" alt="">
        </a>

        <a href="/dashboard-assets/http://windows.microsoft.com/en-us/internet-explorer/download-ie">
            <img src="/dashboard-assets/img/browsers/ie.png" alt="">
        </a>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
<!-- Javascript -->
<!-- Vendors -->
<script src="/dashboard-assets/vendors/bower_components/jquery/dist/jquery.min.js"></script>
<script src="/dashboard-assets/vendors/bower_components/popper.js/dist/umd/popper.min.js"></script>
<script src="/dashboard-assets/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>


<!-- App functions and actions -->
<script src="/dashboard-assets/js/app.min.js"></script>
</body>
</html>
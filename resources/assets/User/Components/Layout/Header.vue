<template>
    <header class="header">
        <div class="navigation-trigger hidden-xl-up" data-sa-action="aside-open" data-sa-target=".sidebar">
            <i class="zmdi zmdi-menu"></i>
        </div>

        <div class="logo hidden-sm-down">
            <h1><a href="index.html">مدیریت کاربری</a></h1>
        </div>

        <form class="search">
            <div class="search__inner">
                <input type="text" class="search__text" placeholder="متن جستجو خود را وارد نمایید...">
                <i class="zmdi zmdi-search search__helper" data-sa-action="search-close"></i>
            </div>
        </form>

        <ul class="top-nav">
            <li class="hidden-xl-up"><a href="default.htm" data-sa-action="search-open"><i class="zmdi zmdi-search"></i></a>
            </li>

            <li class="dropdown">
                <a href="default.htm" data-toggle="dropdown" class="top-nav__notify"><i class="zmdi zmdi-email"></i></a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu--block">
                    <div class="dropdown-header">
                        پیام ها

                        <div class="actions">
                            <a href="messages.html" class="actions__item zmdi zmdi-plus"></a>
                        </div>
                    </div>

                    <div class="listview listview--hover">
                        <a href="default.htm" class="listview__item">
                            <img src="/dashboard-assets/demo/img/profile-pics/1.jpg" class="listview__img" alt="">

                            <div class="listview__content">
                                <div class="listview__heading">
                                    علی احمدی <small>12:01 بعد از ظهر</small>
                                </div>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ </p>
                            </div>
                        </a>

                        <a href="default.htm" class="listview__item">
                            <img src="/dashboard-assets/demo/img/profile-pics/2.jpg" class="listview__img" alt="">

                            <div class="listview__content">
                                <div class="listview__heading">
                                    رضا حسینی
                                    <small>02:45 بعد ازظهر</small>
                                </div>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ </p>
                            </div>
                        </a>

                        <a href="default.htm" class="listview__item">
                            <img src="/dashboard-assets/demo/img/profile-pics/3.jpg" class="listview__img" alt="">

                            <div class="listview__content">
                                <div class="listview__heading">
                                    محمد محمدی
                                    <small>08:21 بعد ازظهر</small>
                                </div>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                    گرافیک است. </p>
                            </div>
                        </a>

                        <a href="default.htm" class="listview__item">
                            <img src="/dashboard-assets/demo/img/profile-pics/4.jpg" class="listview__img" alt="">

                            <div class="listview__content">
                                <div class="listview__heading">
                                    محمد محمدی
                                    <small>08:43 بعد ازظهر</small>
                                </div>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                    گرافیک است. </p>
                            </div>
                        </a>

                        <a href="default.htm" class="listview__item">
                            <img src="/dashboard-assets/demo/img/profile-pics/5.jpg" class="listview__img" alt="">

                            <div class="listview__content">
                                <div class="listview__heading">
                                    محمد محمدی
                                    <small>11:32 بعد ازظهر</small>
                                </div>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                    گرافیک است. </p>
                            </div>
                        </a>

                        <a href="default.htm" class="view-more">مشاهده تمام پیام ها</a>
                    </div>
                </div>
            </li>

            <li class="dropdown top-nav__notifications">
                <a href="default.htm" data-toggle="dropdown" class="top-nav__notify">
                    <i class="zmdi zmdi-notifications"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu--block">
                    <div class="dropdown-header">
                        نوتیفیکیشن

                        <div class="actions">
                            <a href="default.htm" class="actions__item zmdi zmdi-check-all"
                               data-sa-action="notifications-clear"></a>
                        </div>
                    </div>

                    <div class="listview listview--hover">
                        <div class="listview__scroll scrollbar-inner">
                            <a href="default.htm" class="listview__item">
                                <img src="/dashboard-assets/demo/img/profile-pics/1.jpg" class="listview__img" alt="">

                                <div class="listview__content">
                                    <div class="listview__heading">دارا رضوی</div>
                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ </p>
                                </div>
                            </a>

                            <a href="default.htm" class="listview__item">
                                <img src="/dashboard-assets/demo/img/profile-pics/2.jpg" class="listview__img" alt="">

                                <div class="listview__content">
                                    <div class="listview__heading">رضا حسینی</div>
                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ </p>
                                </div>
                            </a>

                            <a href="default.htm" class="listview__item">
                                <img src="/dashboard-assets/demo/img/profile-pics/3.jpg" class="listview__img" alt="">

                                <div class="listview__content">
                                    <div class="listview__heading">محمد محمدی</div>
                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                        گرافیک است. </p>
                                </div>
                            </a>

                            <a href="default.htm" class="listview__item">
                                <img src="/dashboard-assets/demo/img/profile-pics/4.jpg" class="listview__img" alt="">

                                <div class="listview__content">
                                    <div class="listview__heading">محمد محمدی</div>
                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                        گرافیک است. </p>
                                </div>
                            </a>

                            <a href="default.htm" class="listview__item">
                                <img src="/dashboard-assets/demo/img/profile-pics/5.jpg" class="listview__img" alt="">

                                <div class="listview__content">
                                    <div class="listview__heading">محمد محمدی</div>
                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                        گرافیک است. </p>
                                </div>
                            </a>

                            <a href="default.htm" class="listview__item">
                                <img src="/dashboard-assets/demo/img/profile-pics/1.jpg" class="listview__img" alt="">

                                <div class="listview__content">
                                    <div class="listview__heading">دارا رضوی</div>
                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ </p>
                                </div>
                            </a>

                            <a href="default.htm" class="listview__item">
                                <img src="/dashboard-assets/demo/img/profile-pics/2.jpg" class="listview__img" alt="">

                                <div class="listview__content">
                                    <div class="listview__heading">رضا حسینی</div>
                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ </p>
                                </div>
                            </a>

                            <a href="default.htm" class="listview__item">
                                <img src="/dashboard-assets/demo/img/profile-pics/3.jpg" class="listview__img" alt="">

                                <div class="listview__content">
                                    <div class="listview__heading">محمد محمدی</div>
                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                        گرافیک است. </p>
                                </div>
                            </a>
                        </div>

                        <div class="p-1"></div>
                    </div>
                </div>
            </li>

            <li class="dropdown hidden-xs-down">
                <a href="default.htm" data-toggle="dropdown"><i class="zmdi zmdi-check-circle"></i></a>

                <div class="dropdown-menu dropdown-menu-right dropdown-menu--block" role="menu">
                    <div class="dropdown-header">وظایف</div>

                    <div class="listview listview--hover">
                        <a href="default.htm" class="listview__item">
                            <div class="listview__content">
                                <div class="listview__heading">گزارش بررسی خطاهای سایت</div>

                                <div class="progress mt-1">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 25%"
                                         aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </a>

                        <a href="default.htm" class="listview__item">
                            <div class="listview__content">
                                <div class="listview__heading">اکستنشن های گوگل کروم</div>

                                <div class="progress mt-1">
                                    <div class="progress-bar bg-warning" style="width: 43%" aria-valuenow="43"
                                         aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </a>

                        <a href="default.htm" class="listview__item">
                            <div class="listview__content">
                                <div class="listview__heading">پروژه های شبکه های اجتماعی</div>

                                <div class="progress mt-1">
                                    <div class="progress-bar bg-success" style="width: 20%" aria-valuenow="20"
                                         aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </a>

                        <a href="default.htm" class="listview__item">
                            <div class="listview__content">
                                <div class="listview__heading">ادمین بوت استرپ</div>

                                <div class="progress mt-1">
                                    <div class="progress-bar bg-info" style="width: 60%" aria-valuenow="60"
                                         aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </a>

                        <a href="default.htm" class="listview__item">
                            <div class="listview__content">
                                <div class="listview__heading">اپلیکیشن یوتیوب</div>

                                <div class="progress mt-1">
                                    <div class="progress-bar bg-danger" style="width: 80%" aria-valuenow="80"
                                         aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </a>

                        <a href="default.htm" class="view-more">مشاهده تمام وظایف</a>
                    </div>
                </div>
            </li>

            <li class="dropdown hidden-xs-down">
                <a href="default.htm" data-toggle="dropdown"><i class="zmdi zmdi-apps"></i></a>

                <div class="dropdown-menu dropdown-menu-right dropdown-menu--block" role="menu">
                    <div class="row app-shortcuts">
                        <a class="col-4 app-shortcuts__item" href="default.htm">
                            <i class="zmdi zmdi-calendar"></i>
                            <small class="">تقویم</small>
                        </a>
                        <a class="col-4 app-shortcuts__item" href="default.htm">
                            <i class="zmdi zmdi-file-text"></i>
                            <small class="">فایل ها</small>
                        </a>
                        <a class="col-4 app-shortcuts__item" href="default.htm">
                            <i class="zmdi zmdi-email"></i>
                            <small class="">ایمیل</small>
                        </a>
                        <a class="col-4 app-shortcuts__item" href="default.htm">
                            <i class="zmdi zmdi-trending-up"></i>
                            <small class="">گزارش ها</small>
                        </a>
                        <a class="col-4 app-shortcuts__item" href="default.htm">
                            <i class="zmdi zmdi-view-headline"></i>
                            <small class="">خبر</small>
                        </a>
                        <a class="col-4 app-shortcuts__item" href="default.htm">
                            <i class="zmdi zmdi-image"></i>
                            <small class="">گالری</small>
                        </a>
                    </div>
                </div>
            </li>

            <li class="dropdown hidden-xs-down">
                <a href="default.htm" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

                <div class="dropdown-menu dropdown-menu-right">
                    <a href="default.htm" class="dropdown-item" data-sa-action="fullscreen">تمام صفحه</a>
                    <a href="default.htm" class="dropdown-item">پاک کردن حافظه لوکال</a>
                    <a href="default.htm" class="dropdown-item">تنظیمات</a>
                </div>
            </li>

            <li class="hidden-xs-down">
                <a href="default.htm" class="top-nav__themes" data-sa-action="aside-open" data-sa-target=".themes"><i
                        class="zmdi zmdi-palette"></i></a>
            </li>
        </ul>

        <div class="clock hidden-md-down">
            <div class="time">
                <span class="time__hours"></span>
                <span class="time__min"></span>
                <span class="time__sec"></span>
            </div>
        </div>
    </header>
</template>
<script>
    export default {

    }
</script>
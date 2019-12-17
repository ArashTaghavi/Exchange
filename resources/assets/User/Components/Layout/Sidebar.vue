<template>
    <aside class="sidebar">
        <div class="scrollbar-inner">

            <div class="user">
                <div class="user__info" data-toggle="dropdown">
                    <img class="user__img" src="/dashboard-assets/demo/img/profile-pics/8.jpg" alt="">
                    <div>
                        <div class="user__name">رضا حسینی</div>
                        <div class="user__email">malinda-h@gmail.com</div>
                    </div>
                </div>

                <div class="dropdown-menu">
                    <a class="dropdown-item" href="default.htm">مشاهده پروفایل</a>
                    <a class="dropdown-item" href="default.htm">تنظیمات</a>
                    <a class="dropdown-item" href="default.htm">خروج</a>
                </div>
            </div>

            <ul class="navigation">
                <li class="navigation__active">
                    <router-link to="/"><i class="zmdi zmdi-home"></i>داشبورد</router-link>
                </li>


                <li class="@@typeactive">
                    <router-link to="profile">
                        <i class="zmdi zmdi-account"></i>
                        پروفایل
                    </router-link>
                </li>

                <li class="@@widgetactive">
                    <router-link to="documents">
                        <i class="zmdi zmdi-file"></i>
                        مدارک
                    </router-link>
                </li>
                <li class="@@widgetactive">
                    <router-link to="cards">
                        <i class="zmdi zmdi-card"></i>
                        مدیریت کارت ها
                    </router-link>
                </li>
                <li class="@@widgetactive">
                    <router-link to="orders">
                        <i class="zmdi zmdi-collection-text"></i>
                        سفارشات
                    </router-link>
                </li>
                <li class="@@widgetactive">
                    <router-link to="financial">
                        <i class="zmdi zmdi-trending-up"></i>
                        گزارشات مالی
                    </router-link>
                </li>
                <li class="@@widgetactive">
                    <router-link to="change-password">
                        <i class="zmdi zmdi-lock"></i>
                        تغییر کلمه عبور
                    </router-link>
                </li>
            </ul>
        </div>
    </aside>
</template>
<script>
    export default {}
</script>
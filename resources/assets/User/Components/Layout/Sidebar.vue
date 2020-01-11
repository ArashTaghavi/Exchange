<template>
    <aside class="sidebar">
        <div class="scrollbar-inner">

            <div class="user">
                <div class="user__info" data-toggle="dropdown">
                    <img class="user__img" src="/dashboard-assets/demo/img/profile-pics/8.jpg" alt="">
                    <div>
                        <div class="user__name">{{user.first_name}} {{user.last_name}}</div>
                        <div class="user__email">{{user.email}}</div>
                    </div>
                </div>

                <div class="dropdown-menu">
                    <a class="dropdown-item" href="default.htm">مشاهده پروفایل</a>
                    <a class="dropdown-item" href="default.htm">تنظیمات</a>
                    <a class="dropdown-item" href="/logout">خروج</a>
                </div>
            </div>

            <ul class="navigation">
                <li class="navigation__active">
                    <router-link to="/"><i class="zmdi zmdi-home"></i>احراز هویت</router-link>
                </li>


                <li class="@@typeactive">
                    <router-link to="/profile">
                        <i class="zmdi zmdi-account"></i>
                        پروفایل
                    </router-link>
                </li>
                <li class="navigation__sub @@variantsactive">
                    <a href="default.htm"><i class="zmdi zmdi-view-week"></i>خرید و فروش</a>

                    <ul>
                        <li class="@@sidebaractive"><router-link to="/buy-and-sell">ثبت خرید و فروش</router-link></li>
                        <li class="@@boxedactive"><router-link to="/sell-orders">لیست فروش</router-link></li>
                        <li class="@@hiddensidebarboxedactive"><router-link to="/buy-orders">لیست خرید</router-link></li>
                    </ul>
                </li>

                <li class="@@widgetactive">
                    <router-link to="/documents">
                        <i class="zmdi zmdi-file"></i>
                        مدارک
                    </router-link>
                </li>
                <li class="@@widgetactive">
                    <router-link to="/cards">
                        <i class="zmdi zmdi-card"></i>
                        مدیریت کارت ها
                    </router-link>
                </li>
                <li class="@@widgetactive">
                    <router-link to="/financial">
                        <i class="zmdi zmdi-trending-up"></i>
                        گزارشات مالی
                    </router-link>
                </li>
                <li class="@@widgetactive">
                    <router-link to="/change-password">
                        <i class="zmdi zmdi-lock"></i>
                        تغییر کلمه عبور
                    </router-link>
                </li>
                <li class="@@widgetactive">
                    <a href="/logout">
                        <i class="zmdi zmdi-arrow-out"></i>
                        خروج
                    </a>
                </li>
            </ul>
        </div>
    </aside>
</template>
<script>
    export default {
        data() {
            return {
                user: {}
            }
        },
        created() {
            this.user = JSON.parse(localStorage.getItem('USER_INFORMATION'));
        }
    }
</script>
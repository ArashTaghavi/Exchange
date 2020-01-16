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
                    <router-link to="/"><i class="zmdi zmdi-home"></i>داشبورد</router-link>
                </li>


                <li class="@@typeactive">
                    <router-link to="/profile">
                        <i class="zmdi zmdi-account"></i>
                        پروفایل
                    </router-link>
                </li>

                <li class="@@widgetactive">
                    <router-link to="/users">
                        <i class="zmdi zmdi-file"></i>
                        کاربران
                    </router-link>
                </li>
                <li class="@@widgetactive">
                    <router-link to="/currencies">
                        <i class="zmdi zmdi-card"></i>
                        مدیریت ارز ها
                    </router-link>
                </li>
                <li class="@@widgetactive">
                    <router-link to="/currency-equalities">
                        <i class="zmdi zmdi-card"></i>
                        برابری ارز ها
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
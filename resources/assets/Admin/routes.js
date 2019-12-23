import Dashboard from './Components/Dashboard/Index';

import Profile from './Components/Profile/Index';
import ChangePassword from './Components/Profile/ChangePassword';


// ================= Users =================
import Users from './Components/Users/Index';
import UserDetail from './Components/Users/Detail';
import UserBuyOrders from './Components/Users/BuyOrders';
import UserSellOrders from './Components/Users/SellOrders';
import UserCards from './Components/Users/Cards';
import UserDocuments from './Components/Users/Documents';
// ================= Users =================

// ================= Currencies =================
import Currencies from './Components/Currencies/Index';
import CurrencyCreate from './Components/Currencies/Create';
import CurrencyEdit from './Components/Currencies/Edit';
// ================= Currencies =================


export default [
    {path: '/', name: 'داشبورد', component: Dashboard},
    {path: '/profile', name: 'پروفایل', component: Profile},
    {path: '/change-password', name: 'تغییر کلمه عبور', component: ChangePassword},


    // ============================ Users ============================
    {path: '/users', name: 'لیست کاربران', component: Users},
    {path: '/user/:id/detail', name: 'جزییات کاربر', component: UserDetail},
    {path: '/user/:id/buy-orders', name: 'گزارش خرید کاربر', component: UserBuyOrders},
    {path: '/user/:id/sell-orders', name: 'گزارش فروش کاربر', component: UserSellOrders},
    {path: '/user/:id/cards', name: 'کارت ها', component: UserCards},
    {path: '/user/:id/documents', name: 'مدارک', component: UserDocuments},
    // ============================ Users ============================

    // ============================ Currencies ============================
    {path: '/currencies', name: 'لیست ارزها', component: Currencies},
    {path: '/currencies/create', name: 'ثبت ارز', component: CurrencyCreate},
    {path: '/currencies/:id/edit', name: 'ویرایش ارز', component: CurrencyEdit},

    // ============================ Currencies ============================


]

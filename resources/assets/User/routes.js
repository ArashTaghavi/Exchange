import Dashboard from './Components/Dashboard/Index';

import Profile from './Components/Profile/Index';
import ChangePassword from './Components/Profile/ChangePassword';

import Financial from './Components/Financial/Index';


// =================== Documents ===================
import Documents from './Components/Documents/Index';
import DocumentCreate from './Components/Documents/Create';
import DocumentEdit from './Components/Documents/Edit';
// =================== Documents ===================

// =================== Cards ===================
import Cards from './Components/Cards/Index';
import CardCreate from './Components/Cards/Create';
import CardEdit from './Components/Cards/Edit';
// =================== Cards ===================

// =================== Buy Orders ===================
import BuyOrders from './Components/BuyOrders/Index';
import BuyOrderCreate from './Components/BuyOrders/Create';
import BuyOrderEdit from './Components/BuyOrders/Edit';
import BuyOrderDetail from './Components/BuyOrders/Detail';
// =================== Buy Orders ===================

// =================== Sell Orders ===================
import SellOrders from './Components/SellOrders/Index';
import SellOrderCreate from './Components/SellOrders/Create';
import SellOrderEdit from './Components/SellOrders/Edit';
import SellOrderDetail from './Components/SellOrders/Detail';
// =================== Sell Orders ===================

export default [
    {path: '/', name: 'داشبورد', component: Dashboard},
    {path: '/profile', name: 'پروفایل', component: Profile},
    {path: '/change-password', name: 'تغییر کلمه عبور', component: ChangePassword},

    // =================== Documents ===================
    {path: '/documents', name: 'لیست مدارک', component: Documents},
    {path: '/documents/create', name: 'بارگذاری مدرک', component: DocumentCreate},
    {path: '/documents/:id/edit', name: 'ویرایش مدرک', component: DocumentEdit},
    // =================== Documents ===================

    // =================== Cards ===================
    {path: '/cards', name: 'لیست کارت', component: Cards},
    {path: '/cards/create', name: 'ثبت کارت', component: CardCreate},
    {path: '/cards/:id/edit', name: 'ویرایش کارت', component: CardEdit},
    // =================== Cards ===================

    // =================== Buy Orders ===================
    {path: '/buy-orders', name: 'لیست سفارشات خرید', component: BuyOrders},
    {path: '/buy-orders/create', name: 'ثبت سفارش خرید', component: BuyOrderCreate},
    {path: '/buy-orders/:id/edit', name: 'ویرایش سفارش خرید', component: BuyOrderEdit},
    {path: '/buy-orders/:id/detail', name: 'جزییات سفارش خرید', component: BuyOrderDetail},
    // =================== Buy Orders ===================

    // =================== Sell Orders ===================
    {path: '/sell-orders', name: 'لیست سفارشات فروش', component: SellOrders},
    {path: '/sell-orders/create', name: 'ثبت سفارش فروش', component: SellOrderCreate},
    {path: '/sell-orders/:id/edit', name: 'ویرایش سفارش فروش', component: SellOrderEdit},
    {path: '/sell-orders/:id/detail', name: 'جزییات سفارش فروش', component: SellOrderDetail},
    // =================== Sell Orders ===================

    {path: '/financial', name: 'گزارشات مالی', component: Financial},


]
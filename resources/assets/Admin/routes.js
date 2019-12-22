import Dashboard from './Components/Dashboard/Index';

import Profile from './Components/Profile/Index';
import ChangePassword from './Components/Profile/ChangePassword';

import Users from './Components/Users/Index';


export default [
    {path: '/', name: 'داشبورد', component: Dashboard},
    {path: '/profile', name: 'پروفایل', component: Profile},
    {path: '/change-password', name: 'تغییر کلمه عبور', component: ChangePassword},


    // ============================ Users ============================
    {path: '/users', name: 'لیست کاربران', component: Users}
    // ============================ Users ============================


]
import Dashboard from './Components/Dashboard/Index';

import Profile from './Components/Profile/Index';

import Documents from './Components/Documents/Index';
import DocumentCreate from './Components/Documents/Create';
import DocumentEdit from './Components/Documents/Edit';

export default [
    {path: '/', component: Dashboard},
    {path: '/profile', component: Profile},

    {path: '/documents', name: 'لیست مدارک', component: Documents},
    {path: '/documents/create', name: 'بارگذاری مدرک', component: DocumentCreate},
    {path: '/documents/:id/edit', name: 'ویرایش مدرک', component: DocumentEdit},


]
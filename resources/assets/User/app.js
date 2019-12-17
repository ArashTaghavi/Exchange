import Vue from 'vue';
import VueRouter from 'vue-router';

// ==================  Handler & Helper ==================
import UiHandler from '../common/Mixins/UiHandler';
import NotifyHandler from '../common/Mixins/NotifyHandler';
import './Helper/Axios';

Vue.mixin(UiHandler);
Vue.mixin(NotifyHandler);


// ================== Packages  ==================
import moment from 'moment-jalali';
import routes from './routes';


// ================== Use  ==================
Vue.use(axios);
Vue.use(VueRouter);


// ================== VueRouter Config ==================
let router = new VueRouter({
    routes,
    mode: 'history',
    base: 'user-dashboard/'
});
Vue.router = router;

//  ================== Components  ==================
Vue.component('submit', () => import('./../common/Components/SubmitButton'));
Vue.component('cropper-portlet', () => import('./../common/Components/CropperPortlet'));
Vue.component('portlet-button', () => import('./../common/Components/PortletButton'));
Vue.component('portlet-file-input', () => import('./../common/Components/PortletFileInput'));
Vue.component('cropper-portlet', () => import('./../common/Components/CropperPortlet'));
Vue.component('cropper-tools', () => import('./../common/Components/CropperTools'));
Vue.component('ui-button', () => import('./../common/Components/UiButton'));

//  ================== Run Application  ==================
import App from './App.vue';

window.Vue = Vue;

window.app = new Vue({
    el: '#app',
    router,
    components: {App},
    render: h => h(App)
});
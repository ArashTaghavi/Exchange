<template>
    <card :title="`${$route.name}`" :active_loading="false">
        <!-- <div class="row">
             <div class="col-md-12 alert alert-danger">
                 کاربر گرامی برای ادامه کار لازم است مواردی که با ضربدر قرمز مشخص شده اند را بررسی کنید.
                 <ul class="list-group">
                     <li class="list-group-item" :key=index v-for="(requirement,index) in requirements">
                         <i class="zmdi zmdi-check text-success ml-2 icon" v-if="icon(requirement.id)"></i>
                         <i class="zmdi zmdi-close text-danger ml-2 icon"
                            v-if="!icon(requirement.id) && requirement.level===1"></i>
                         <i class="zmdi zmdi-alert-circle-o text-warning ml-2 icon"
                            v-if="!icon(requirement.id) && requirement.level===0"></i>
                         <router-link :to=requirement.link>{{requirement.title}}</router-link>
                     </li>
                 </ul>
             </div>
         </div>-->
        <div class="row mb-3 nav-menu" ref="nav-menu">
            <div class="col-md-3 text-center">
                <img src="/dashboard-assets/img/Start1.png" id="Start1" @click="componentStyle('Start',$event)"
                     style="width:20%"
                     alt="start">
                <p class="mt-2">شروع</p>
            </div>
            <div class="col-md-3 text-center">
                <img src="/dashboard-assets/img/Account.png" id="Account1" @click="componentStyle('Account',$event)"
                     style="width:20%"
                     alt="credit-card">
                <p class="mt-2">حساب بانکی</p>
                <span class="badge badge-success btn--icon-text" v-if="status.card"><i class="zmdi zmdi-check"> </i> تایید شده </span>
                <span class="badge badge-warning btn--icon-text" v-else><i class="zmdi zmdi-alert-circle-o"></i> در انتظار تایید </span>

            </div>
            <div class="col-md-3 text-center">
                <img src="/dashboard-assets/img/Document.png" id="Document1" @click="componentStyle('Document',$event)"
                     style="width:20%"
                     alt="document">
                <p class="mt-2">مدارک</p>
                <span class="badge badge-success btn--icon-text" v-if="status.document"><i class="zmdi zmdi-check"> </i> تایید شده </span>
                <span class="badge badge-warning btn--icon-text" v-else><i class="zmdi zmdi-alert-circle-o"></i> در انتظار تایید </span>

            </div>
            <div class="col-md-3 text-center">
                <img src="/dashboard-assets/img/Phone.png" id="Phone1" @click="componentStyle('Phone',$event)"
                     style="width:20%"
                     alt="call">
                <p class="mt-2">تلفن ثابت</p>
                <span class="badge badge-success btn--icon-text" v-if="status.phone"><i class="zmdi zmdi-check"> </i> تایید شده </span>
                <span class="badge badge-warning btn--icon-text" v-else><i class="zmdi zmdi-alert-circle-o"></i> در انتظار تایید </span>

            </div>
        </div>
        <div class="row">
            <component :is="selected_component"></component>
        </div>
    </card>
</template>


<script>
    import Start from './Start';
    import Account from './Account';
    import Document from './Document';
    import Phone from './Phone';

    export default {
        data() {
            return {
                requirements: [],
                user_requirements: [],
                selected_component: 'Start',
                status: {
                    phone: false,
                    card: false,
                    document: false
                }
            }
        },
        created() {
            this.authRequirements();
            this.userInfo();
        },
        methods: {
            afterFetchItem(data) {
                this.requirements = data.data;
                axios.get('/dashboard/user-requirements')
                    .then(response => this.user_requirements = response.data)
                   .catch(error => this.errorNotify(error));
            },
            authRequirements() {
                axios.get('/dashboard/requirements')
                    .then(response => this.afterFetchItem(response))
                    .catch(error => this.errorNotify(error));
            },
            componentStyle(component, event) {

                /*

                 let img = $('.nav-menu').find('img').toArray();

                 img.forEach(val => {
                     console.log(val.attr('id'));
                 });*/
                let src = "/dashboard-assets/img/";
                event.target.src = `${src}${component}1.png`;
                this.selected_component = component;
            },
            userInfo() {
                axios.get('/dashboard/user-info').then(response => {
                    this.status['phone'] = response.data.phone_status;
                    this.status['card'] = response.data.card_status;
                    this.status['document'] = response.data.document_status;
                })
                    .catch(error => this.errorNotify(error));
            },
        },

        components: {
            Start, Account, Document, Phone
        }


    }
</script>
<style>
    .icon {
        font-size: 18px;
    }

    .nav-menu img {
        cursor: pointer;
    }
</style>
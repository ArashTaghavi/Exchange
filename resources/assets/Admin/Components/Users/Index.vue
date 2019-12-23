<template>
    <card :title="`${$route.name}`">
        <div class="row">
            <div class="col-md-4">
                <input type="text" class="form-control" v-model="search_value" @keypress.enter="handleSearch()"
                       placeholder="برای جستجو، پس از وارد کردن عبارت دکمه اینتر را بزنید.">
            </div>
            <div class="col-md-1">
                <icon-btn v-if="doing_search" type="success" icon="redo" @click="resetSearch">بازنشانی</icon-btn>
            </div>
        </div>
        <div class="row" v-if="users.length>0">
            <table class="table table-hover mb-0 table-responsive">
                <thead>
                <tr>
                    <th>نام</th>
                    <th>موبایل</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="user in users">
                    <td>{{user.first_name}} {{user.last_name}}</td>
                    <td>{{user.mobile}}</td>
                    <td>
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown"
                                    aria-expanded="false">
                                عملیات
                            </button>
                            <div class="dropdown-menu" x-placement="bottom-start"
                                 style="position: absolute; transform: translate3d(0px, 33px, 0px); top: 0px; left: 0px; will-change: transform;text-align:center">
                                <detail-btn :to="`user/${user.id}`"></detail-btn>
                                <icon-btn type="danger" icon="stop" v-if="user.is_block==0"
                                          @click="handleBlock(user.id)">انسداد
                                </icon-btn>
                                <icon-btn type="success" icon="pause" v-if="user.is_block==1"
                                          @click="handleBlock(user.id)">رفع
                                    انسداد
                                </icon-btn>
                                <link-btn type="secondary" icon="file" :to="`/user/${user.id}/documents`"> مدارک
                                </link-btn>
                                <link-btn type="warning" icon="money" :to="`/user/${user.id}/buy-orders`"> خرید ها
                                </link-btn>
                                <link-btn type="success" icon="money" :to="`/user/${user.id}/sell-orders`"> فروش ها
                                </link-btn>
                                <link-btn type="info" icon="card" :to="`/user/${user.id}/cards`">کارت ها
                                </link-btn>
                            </div>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>

        </div>
        <not-found v-else/>
    </card>


</template>
<script>
    export default {
        data() {
            return {
                users: [],
                search_value: '',
                doing_search: false
            }
        },
        created() {
            this.getUsers();
        },
        methods: {
            handleDelete(id) {
                axios.delete(`/buy-orders/${id}`)
                    .then(response => {
                        this.successNotify(response);
                        this.getUsers();
                    })
                    .catch(error => this.errorNotify(error));
            },
            getUsers() {
                axios.get(`/users`)
                    .then(response => this.users = response.data)
                    .catch(error => this.errorNotify(error));
            },
            handleBlock(id) {
                this.deleteConfirm()
                    .then(confirm => {
                        if (confirm) {
                            axios.get(`/users/block/${id}`)
                                .then(response => this.getUsers())
                                .catch(error => this.errorNotify(error));
                        }
                    });
            },
            handleSearch() {
                axios.get(`/users/search/${this.search_value}`)
                    .then(response => {
                        this.users = response.data;
                        this.doing_search = true;
                    })
                    .catch(error => this.errorNotify(error));
            },
            resetSearch() {
                this.search_value = '';
                this.getUsers();
                this.doing_search = false;
            }
        }
    }
</script>

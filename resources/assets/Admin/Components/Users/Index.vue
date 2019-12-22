<template>
    <card :title="`${$route.name}`">
        <div class="row" v-if="users.length>0">
            <table class="table table-hover mb-0 table-responsive">
                <thead>
                <tr>
                    <th>نام</th>
                    <th>ایمیل</th>
                    <th>عملیات</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="user in users">
                    <td>{{user.first_name}} {{user.last_name}}</td>
                    <td>{{user.email}}</td>
                    <td>
                        <detail-btn :to="`users/${user.id}`"></detail-btn>
                        <icon-btn type="danger" icon="stop" v-if="user.is_block==0" @click="handleBlock(user.id)">انسداد
                        </icon-btn>
                        <icon-btn type="success" icon="pause" v-if="user.is_block==1" @click="handleBlock(user.id)">رفع
                            انسداد
                        </icon-btn>
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
                users: []
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
                axios.get('/users')
                    .then(response => this.users = response.data)
                    .catch(error => this.errorNotify(error));
            },
            handleBlock(id) {
                this.deleteConfirm()
                    .then(confirm => {
                        if (confirm) {
                            axios.get(`/users/block/${id}`)
                                .then(response => this.getUsers())
                                .catch(error => this.errorNotify(error.response.data.message));
                        }
                    });
            },
            status(status) {
                switch (status) {
                    case 0:
                        return '<span class="badge badge-danger btn--icon-text"><i class="zmdi zmdi-close-circle-o"></i> تایید نشده </span>';
                    case 1:
                        return '<span class="badge badge-info btn--icon-text"><i class="zmdi zmdi-alert-circle-o"></i> در انتظار پرداخت </span>';
                    case 2:
                        return '<span class="badge badge-warning btn--icon-text"><i class="zmdi zmdi-alert-circle-o"></i> در انتظار بررسی </span>';
                    default :
                        return '<span class="badge badge-success btn--icon-text"><i class="zmdi zmdi-assignment-check"></i> پرداخت شده </span>';
                }
            }
        },
    }
</script>
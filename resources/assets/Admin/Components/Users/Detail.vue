<template>
    <card :title="`${$route.name}`">
        <div class="row">
            <table class="table table-responsive">
                <thead>
                <tr>
                    <th>نام</th>
                    <th>نام خانوادگی</th>
                    <th>نام پدر</th>
                    <th>کد ملی</th>
                    <th>ایمیل</th>
                    <th>عضویت</th>
                    <th>وضعیف</th>
                </tr>
                </thead>
            <tbody>
            <tr>
                <td>{{user.first_name}}</td>
                <td>{{user.last_name}}</td>
                <td>{{user.father_name}}</td>
                <td>{{user.national_code}}</td>
                <td>{{user.email}}</td>
                <td>{{jDate(user.created_at)}}</td>
                <td>{{user.is_block ===1 ? 'مسدود' :'فعال'}}</td>
            </tr>
            </tbody>
            </table>
            <p>
                آدرس : {{user.address}}
            </p>
            <div class="col-md-4 offset-4">
                <img :src="`${profile_image}`" width="100%" alt="">
            </div>
        </div>
    </card>
</template>

<script>
    export default {
        data() {
            return {
                user: {}
            }
        },
        created() {
            axios.get(`/users/detail/${this.$route.params.id}`)
                .then(response => this.user = response.data)
                .catch(error => this.errorNotify(error));
        },
        methods:{
            jDate(date){
                return moment(date).format('jYYYY/jM/jD');
            }
        }
    }
</script>

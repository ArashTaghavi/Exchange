<template>
    <card :title="`${$route.name}`" :active_loading=false>
        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label for="password">کلمه عبور جدید</label>
                    <input type="password" v-model="form.password" id="password"
                           class="form-control form-control-sm" placeholder="کلمه عبور جدید">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="password_confirmation">تکرار کلمه عبور جدید</label>
                    <input type="password" v-model="form.password_confirmation" id="password_confirmation"
                           class="form-control form-control-sm" placeholder="تکرار کلمه عبور جدید">
                </div>
            </div>
            <submit @click="handleSubmit"/>
        </div>
    </card>
</template>

<script>
    export default {
        methods: {
            handleSubmit() {
                axios.post('/profile/change-password', this.form)
                    .then(response => {
                        this.successNotify(response);
                        this.emptyForm();
                    })
                    .catch(error => this.errorNotify(error));
            }
        }
    }
</script>
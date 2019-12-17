<template>
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">مشخصات شخصی</h4>
            <h6 class="card-subtitle">لطفا تمامی فیلد های درخواستی را بصورت دقیق پر کنید.</h6>
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="first_name">نام</label>
                        <input type="text" v-model="form.first_name" id="first_name"
                               class="form-control form-control-sm" placeholder="نام">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="last_name">نام خانوادگی</label>
                        <input type="text" v-model="form.last_name" id="last_name" class="form-control form-control-sm"
                               placeholder="نام خانوادگی">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="father_name">نام پدر</label>
                        <input type="text" v-model="form.father_name" id="father_name"
                               class="form-control form-control-sm" placeholder="نام پدر">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="national_code">کد ملی</label>
                        <input type="text" v-model="form.national_code" id="national_code"
                               class="form-control form-control-sm" placeholder="کد ملی">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="email">ایمیل</label>
                        <input type="text" id="email" v-model="form.email" class="form-control form-control-sm"
                               placeholder="ایمیل">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="address">آدرس</label>
                        <textarea id="address" v-model="form.address" class="form-control form-control-sm"
                                  placeholder="آدرس"></textarea>
                    </div>
                </div>
                <div class="col-md-12 text-right mt-3">
                    <div class="form-group">
                        <cropper-portlet v-model="form.profile_image" title="تصویر شاخص" place="right"/>
                    </div>
                </div>
                <submit @click="handleSubmit"/>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        created() {
            axios.get('/profile')
                .then(response => this.form = response.data)
                .catch(error => this.errorNotify(error));

        },
        methods: {
            handleSubmit() {
                axios.put('/profile', this.form)
                    .then(response => this.successNotify(response))
                    .catch(error => this.errorNotify(error));
            }
        }
    }
</script>
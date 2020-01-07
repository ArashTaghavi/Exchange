<template>

    <div class="col-md-12 text-center">
        <p class="mb-3">شماره ثابت خود را وارد کنید، سپس از طریق آن با شماره همراه پشتیبانی xxxxxxxx تماس بگیرید
        </p>
        <card title="تلفن ثابت" :active_loading="false">
            <div class="row">
                <div class="col-md-4">

                    <div class="form-group">
                        <label for="phone">
                            ورود شماره تلفن با کد شهرستان مانند نمونه
                        </label>
                        <input type="text" v-model="form.phone" id="phone" class="form-control form-control-sm"
                               placeholder="مثال : 0214455667788">
                    </div>


                </div>
                <submit @click="handleSubmit"/>
            </div>
        </card>


    </div>


</template>

<script>
    export default {
        methods: {
            handleSubmit() {
                axios.put(`/dashboard/user-set-phone`, this.form)
                    .then(response => this.successNotify(response))
                    .catch(error => this.errorNotify(error));
            }
        }
    }
</script>
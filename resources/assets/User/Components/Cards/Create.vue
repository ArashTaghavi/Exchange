<template>
    <card :title="`${$route.name}`" :active_loading=false>
        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label for="bank_name">نام بانک</label>
                    <input type="text" v-model="form.bank_name" id="bank_name"
                           class="form-control form-control-sm" placeholder="نام بانک را اینجا وارد نمایید.">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="card_no">شماره کارت</label>
                    <input type="text" v-model="form.card_no" id="card_no"
                           class="form-control form-control-sm" placeholder="شماره کارت را اینجا وارد نمایید.">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="account_no">شماره حساب</label>
                    <input type="text" v-model="form.account_no" id="account_no"
                           class="form-control form-control-sm" placeholder="شماره حساب را اینجا وارد نمایید.">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="sheba_no">شبا</label>
                    <input type="text" v-model="form.sheba_no" id="sheba_no"
                           class="form-control form-control-sm" placeholder="شماره شبای را اینجا وارد نمایید.">
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
                axios.post('/cards', this.form)
                    .then(response => {
                        this.successNotify(response);
                        this.$router.push('/cards')
                    })
                    .catch(error => this.errorNotify(error));
            }
        }
    }
</script>
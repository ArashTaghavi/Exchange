<template>
    <card :title="`${$route.name}`" :active_loading=false>
        <div class="row">
            <div class="col-md-3">
                <label for="title">عنوان</label>
                <input type="text" class="form-control form-control-sm" v-model="form.title" id="title">
            </div>
            <div class="col-md-3">
                <label for="symbol">نماد</label>
                <input type="text" class="form-control form-control-sm" v-model="form.symbol" id="symbol">
            </div>
            <div class="col-md-3">
                <label for="wage">کارمزد</label>
                <input type="text" class="form-control form-control-sm" v-model="form.wage" id="wage"
                       placeholder="لطفا بصورت صحیح و یا اعشاری با / وارد کنید."
                >
            </div>
            <submit @click="handleSubmit"/>
        </div>
    </card>
</template>

<script>
    export default {
        data() {
            return {
                currency: {}
            }
        },
        methods: {
            handleSubmit() {
                axios.post('/currencies', this.form)
                    .then(response => {
                        this.successNotify(response);
                        this.$router.push('/currencies')
                    })
                    .catch(error => this.errorNotify(error));
            }
        }
    }
</script>

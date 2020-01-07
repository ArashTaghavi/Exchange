<template>
    <card :title="`${$route.name}`" :active_loading=false>
        <div class="row">
            <div class="col-md-3">
                <label for="currency_id_from">ارز مبدا</label>
                <select name="" id="currency_id_from" v-model="form.currency_id_from"
                        class="form-control form-control-sm">
                    <option v-for="(currency,index) in currencies" :key=index :value=currency.id>{{currency.title}}
                    </option>
                </select>
            </div>
            <div class="col-md-3">
                <label for="currency_id_to">ارز مبدا</label>
                <select name="" id="currency_id_to" v-model="form.currency_id_to" class="form-control form-control-sm">
                    <option v-for="(currency,index) in currencies" :key=index :value=currency.id>{{currency.title}}
                    </option>
                </select>
            </div>
            <div class="col-md-3">
                <label for="ratio">ضریب برابری</label>
                <input type="text" id="ratio" v-model="form.ratio" class="form-control form-control-sm">
            </div>
            <submit @click="handleSubmit"/>
        </div>
    </card>
</template>

<script>
    export default {
        data() {
            return {
                currencies: {}
            }
        },
        created() {
            this.getCurrencies();
        },
        methods: {
            getCurrencies() {
                axios.get('/currencies')
                    .then(response => this.currencies = response.data)
                    .catch(error => this.errorNotify(error));
            },
            handleSubmit() {
                axios.post('/currency-equalities', this.form)
                    .then(response => {
                        this.successNotify(response);
                        this.$router.push('/currency-equalities')
                    })
                    .catch(error => this.errorNotify(error));
            }
        }
    }
</script>

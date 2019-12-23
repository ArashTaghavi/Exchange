<template>
    <card :title="`${$route.name}`" :active_loading=false>
        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label for="amount">مقدار</label>
                    <input type="number" v-model="form.amount" id="amount"
                           class="form-control form-control-sm" placeholder="مقدار ارز را وارد نمایید.">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="currency_id">نوع ارز</label>
                    <select class="form-control form-control-sm" v-model="form.currency_id" id="currency_id">
                        <option>یک گزینه را انتخاب نمایید</option>
                        <option :value=currency.id :key=index v-for="(currency,index) in currencies">{{currency.title}}
                            ({{currency.symbol}})
                        </option>
                    </select>
                </div>
            </div>
            <submit @click="handleSubmit"/>
        </div>
    </card>
</template>

<script>
    export default {
        data() {
            return {
                currencies: []
            }
        },
        created() {
            axios.get('/helper/currencies')
                .then(response => this.currencies = response.data)
                .catch(error => this.errorNotify(error));
        },
        methods: {
            handleSubmit() {
                axios.post('/sell-orders', this.form)
                    .then(response => {
                        this.successNotify(response);
                        this.$router.push('/sell-orders')
                    })
                    .catch(error => this.errorNotify(error));
            }
        }
    }
</script>

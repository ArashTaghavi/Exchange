<template>
    <card :title="`${$route.name}`" :active_loading=false>
        <div class="row" v-if="form.status!==3">
            <div class="col-md-3">
                <div class="form-group">
                    <label for="amount">مبلغ</label>
                    <input type="number" v-model="form.amount" id="amount"
                           class="form-control form-control-sm" placeholder="مبلغ را به تومان وارد نمایید..">
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
        <div class="alert alert-warning text-center" v-else>
            <h6>پرداخت شما انجام شده و امکان ویرایش سفارش خود را ندارید.</h6>
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

            axios.get(`/buy-orders/${this.$route.params.id}`)
                .then(response => this.form = response.data)
                .catch(error => this.errorNotify(error))
        },
        methods: {
            handleSubmit() {
                axios.put(`/buy-orders/${this.$route.params.id}`, this.form)
                    .then(response => {
                        this.successNotify(response);
                        this.$router.push('/buy-orders')
                    })
                    .catch(error => this.errorNotify(error));
            }
        }
    }
</script>

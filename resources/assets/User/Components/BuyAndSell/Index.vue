<template>
    <card :title="$route.name" v-if="currencies.length>0">
        <div class="row">
            <div class="col-md-3 currency_box"
                 v-for="(currency,index) in currencies" :key=index>
                <div class="card">
                    <div class="card-body text-center">
                        <h3 class="card-title">{{currency.title}} ({{currency.symbol}})</h3>
                        <p>
                            <b>خرید از ما : </b>
                            {{currency.sell}}
                        </p>
                        <p>
                            <b>فروش به ما : </b>
                            {{currency.buy}}
                        </p>
                        <p>
                            <b>موجودی : </b>
                            {{currency.balance}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <!-- Account Type ==> Rial(Sheba) Or Currency No -->
                    <label for="exchange_type">نوع سفارش</label>
                    <select id="exchange_type" class="form-control form-control-sm"
                            @change="handleAccountTypeChange($event)"
                            v-model="form.exchange_type">
                        <option value="1">خرید از ما</option>
                        <option value="2">فروش به ما</option>
                    </select>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="currency_id">ارز</label>
                    <select id="currency_id" @change="handleCurrencyChange" class="form-control form-control-sm"
                            v-model="form.currency_id">
                        <option v-for="(currency,index) in currencies" :key=index :value=currency.id>
                            {{currency.title}}
                        </option>
                    </select>
                </div>
            </div>
            <div class="col-md-3" v-if="form.exchange_type==2">
                <div class="form-group">
                    <label for="cards">کارت بانکی</label>
                    <select id="cards" v-model="form.card_id"
                            class="form-control form-control-sm">
                        <option v-for="(card,index) in cards" :key=index :value=card.id>
                            {{card.bank_name}}
                        </option>
                    </select>
                </div>
            </div>
            <!-- <div class="col-md-3" v-if="form.exchange_type==2">
                 <div class="form-group">
                     <label for="sheba_no">شماره شبا</label>
                     <input type="text" id="sheba_no"
                            class="form-control form-control-sm" :value="sheba_no">
                 </div>
             </div>-->
            <div class="col-md-3" v-if="form.exchange_type==1">
                <div class="form-group">
                    <label for="public_key">شماره حساب ارزی</label>
                    <input type="text" id="public_key"
                           class="form-control form-control-sm" v-model="form.public_key">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="amount">مبلغ ارزی</label>
                    <input type="text" id="amount"
                           class="form-control form-control-sm" v-model="form.amount" @keyup="calculatePaymentAmount">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="payment_amount">مبلغ قابل پرداخت</label>
                    <input type="text" id="payment_amount"
                           class="form-control form-control-sm" disabled v-model="payment_amount">
                </div>
            </div>

            <submit @click="handleSubmit"/>
        </div>
        <div class="row">

        </div>
    </card>
    <card :title="$route.name" v-else>
        <not-found/>
    </card>

</template>


<script>
    export default {
        data() {
            return {
                currencies: [],
                cards: [],
                /*sheba_no: '',*/
                payment_amount: 0,

            }
        },
        created() {
            this.getCurrencies();
            this.getCards();
        },
        methods: {
            getCurrencies() {
                axios.get('/helper/currencies')
                    .then(response => this.currencies = response.data)
                    .catch(error => this.errorNotify(error));
            },
            getCards() {
                axios.get('/cards/approved/card')
                    .then(response => this.cards = response.data)
                    .catch(error => this.errorNotify(error));
            },
            handleAccountTypeChange(event) {
                this.form.exchange_type = event.target.value;
                this.form.amount = 0;
                this.payment_amount = 0;
            },
            /* handleCardChange(event) {
                 axios.get(`/cards/${event.target.value}`)
                     .then(response => this.sheba_no = response.data.sheba_no)
                     .catch(error => this.errorNotify(error));
             },*/
            calculatePaymentAmount() {
                axios.get(`/helper/calculate-payment-amount/${this.form.amount}/${this.form.currency_id}/${this.form.exchange_type}`)
                    .then(response => this.payment_amount = response.data)
                    .catch(error => this.errorNotify(error));
            },
            handleCurrencyChange() {
                this.form.amount = 0;
                this.payment_amount = 0;
            },
            handleSubmit() {
                axios.post('/helper/buy-and-sell', this.form)
                    .then(response => {
                        this.successNotify(response);
                        this.form.amount = 0;
                        this.payment_amount = 0;
                        this.form = {}
                    })
                    .catch(error => this.errorNotify(error));
            },

        }
    }
</script>

<style>
    .select {
        background: green;
    }
</style>
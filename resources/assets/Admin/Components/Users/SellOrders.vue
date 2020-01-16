<template>
    <card :title="`${$route.name}`">
        <div class="row mb-2">
            <div class="col-md-2">
                <icon-btn style="width:100%" type="info" @click="search(1)">در انتظار پرداخت</icon-btn>
            </div>
            <div class="col-md-2">
                <icon-btn style="width:100%" type="danger" @click="search(0)">تایید نشده</icon-btn>
            </div>
            <div class="col-md-2">
                <icon-btn style="width:100%" type="warning" @click="search(2)">در انتظار بررسی</icon-btn>
            </div>
            <div class="col-md-2">
                <icon-btn style="width:100%" type="success" @click="search(3)">پرداخت شده</icon-btn>
            </div>
            <div class="col-md-2">
                <icon-btn style="width:100%" type="info" @click="getSellOrders()">همه</icon-btn>
            </div>
        </div>
        <div class="row" v-if="sell_orders.length>0">
            <div class="col-md-4" v-for="(sell_order,index) in sell_orders" :key=index>
                <div class="card">
                    <icon-btn type="success" style="position:absolute;left:5px;top:5px" v-if="sell_order.status==2"
                              icon="check" @click="handleStatus(sell_order.id,1)">تایید
                    </icon-btn>
                    <icon-btn type="danger" style="position:absolute;left:70px;top:5px" v-if="sell_order.status==2"
                              icon="close" @click="handleStatus(sell_order.id,0)">رد
                    </icon-btn>
                    <icon-btn type="info" style="position:absolute;left:5px;top:5px" v-if="sell_order.status==1"
                              icon="check" @click="handleStatus(sell_order.id,3)">پرداخت
                    </icon-btn>
                    <div class="card-body">
                        <p>نوع ارز : {{sell_order.currency.title}} ({{sell_order.currency.symbol}})</p>
                        <p>مبلغ خریداری شده : {{sell_order.amount}} تومان</p>
                        <p>تاریخ درخواست :
                            {{jDate(sell_order.created_date)}}
                        </p>
                        <p v-html=status(sell_order.status) class="text-center">
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <not-found v-else/>
    </card>


</template>
<script>
    export default {
        data() {
            return {
                sell_orders: []
            }
        },
        created() {
            this.getSellOrders();
        },
        methods: {
            getSellOrders() {
                axios.get(`/users/sell-orders/${this.$route.params.id}`)
                    .then(response => this.sell_orders = response.data)
                    .catch(error => this.errorNotify(error));
            },
            status(status) {

                if (status == 0)
                    return '<span class="badge badge-danger btn--icon-text"><i class="zmdi zmdi-close-circle-o"></i> تایید نشده </span>';

                else if (status == 1)
                    return '<span class="badge badge-info btn--icon-text"><i class="zmdi zmdi-alert-circle-o"></i> در انتظار پرداخت </span>';

                else if (status == 2)
                    return '<span class="badge badge-warning btn--icon-text"><i class="zmdi zmdi-alert-circle-o"></i> در انتظار بررسی </span>';

                else
                    return '<span class="badge badge-success btn--icon-text"><i class="zmdi zmdi-assignment-check"></i> پرداخت شده </span>';

            },
            search(status) {
                axios.get(`/users/sell-order-search/${this.$route.params.id}/${status}`)
                    .then(response => this.sell_orders = response.data)
                    .catch(error => this.errorNotify(error));
            },
            handleStatus(id, status) {
                axios.get(`/users/sell-order-status/${id}/${status}`)
                    .then(response => this.getSellOrders())
                    .catch(error => this.errorNotify(error));
            },
            jDate(date) {
                return moment(date).format('jYYYY/jM/jD');
            }
        }
    }
</script>

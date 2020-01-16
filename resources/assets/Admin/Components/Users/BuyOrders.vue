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
                <icon-btn style="width:100%" type="info" @click="getBuyOrders()">همه</icon-btn>
            </div>
        </div>
        <div class="row" v-if="buy_orders.length>0">
            <div class="col-md-4" v-for="(buy_order,index) in buy_orders" :key=index>
                <div class="card">
                    <icon-btn type="success" style="position:absolute;left:5px;top:5px" v-if="buy_order.status==2"
                              icon="check" @click="handleStatus(buy_order.id,1)">تایید
                    </icon-btn>
                    <icon-btn type="danger" style="position:absolute;left:70px;top:5px" v-if="buy_order.status==2"
                              icon="close" @click="handleStatus(buy_order.id,0)">رد
                    </icon-btn>
                    <icon-btn type="info" style="position:absolute;left:5px;top:5px" v-if="buy_order.status==1"
                              icon="check" @click="handleStatus(buy_order.id,3)">پرداخت
                    </icon-btn>
                    <div class="card-body">
                        <p>نوع ارز : {{buy_order.currency.title}} ({{buy_order.currency.symbol}})</p>
                        <p>مبلغ خریداری شده : {{buy_order.amount}} تومان</p>
                        <p>تاریخ درخواست :
                            {{jDate(buy_order.created_date)}}
                        </p>
                        <p v-html=status(buy_order.status) class="text-center">
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
                buy_orders: []
            }
        },
        created() {
            this.getBuyOrders();
        },
        methods: {
            getBuyOrders() {
                axios.get(`/users/buy-orders/${this.$route.params.id}`)
                    .then(response => this.buy_orders = response.data)
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
                axios.get(`/users/buy-order-search/${this.$route.params.id}/${status}`)
                    .then(response => this.buy_orders = response.data)
                    .catch(error => this.errorNotify(error));
            },
            handleStatus(id, status) {
                axios.get(`/users/buy-order-status/${id}/${status}`)
                    .then(response => this.getBuyOrders())
                    .catch(error => this.errorNotify(error));
            },
            jDate(date) {
                return moment(date).format('jYYYY/jM/jD');
            }
        }
    }
</script>

<template>
    <card title="لیست سفارشات خرید">
        <div class="row" v-if="buy_orders.length>0">
            <table class="table table-hover mb-0 table-responsive">
                <thead>
                <tr>
                    <th>مبلغ پرداختی</th>
                    <th>نوع ارز</th>
                    <th>وضعیت</th>
                    <th>عملیات</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="buy_order in buy_orders">
                    <td>{{buy_order.amount}}</td>
                    <td>{{buy_order.currency.title}} ({{buy_order.currency.symbol}})</td>
                    <td v-html=status(buy_order.status)></td>
                    <td>
                        <div v-if="buy_order.status !==3">
                            <edit-btn :to="`buy-orders/${buy_order.id}`"/>
                            <delete-btn :id=buy_order.id></delete-btn>
                        </div>
                        <router-link v-else :to="`buy-orders/${buy_order.id}/detail`">
                            <button class="btn btn-sm btn-outline-primary btn--icon-text m-1">
                                <i class="zmdi zmdi-file-text"></i>
                                جزییات
                            </button>
                        </router-link>

                    </td>
                </tr>
                </tbody>
            </table>
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
            handleDelete(id) {
                axios.delete(`/buy-orders/${id}`)
                    .then(response => {
                        this.successNotify(response);
                        this.getBuyOrders();
                    })
                    .catch(error => this.errorNotify(error));
            },
            getBuyOrders() {
                axios.get('/buy-orders')
                    .then(response => this.buy_orders = response.data)
                    .catch(error => this.errorNotify(error));
            },
            status(status) {
                switch (status) {
                    case 0:
                        return '<span class="badge badge-danger btn--icon-text"><i class="zmdi zmdi-close-circle-o"></i> تایید نشده </span>';
                    case 1:
                        return '<span class="badge badge-info btn--icon-text"><i class="zmdi zmdi-alert-circle-o"></i> در انتظار پرداخت </span>';
                    case 2:
                        return '<span class="badge badge-warning btn--icon-text"><i class="zmdi zmdi-alert-circle-o"></i> در انتظار بررسی </span>';
                    default :
                        return '<span class="badge badge-success btn--icon-text"><i class="zmdi zmdi-assignment-check"></i> پرداخت شده </span>';
                }
            }
        },
    }
</script>
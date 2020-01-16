<template>
    <card :title="`${$route.name}`">
        <div class="row" v-if="sell_orders.length>0">
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
                <tr v-for="sell_order in sell_orders">
                    <td>{{sell_order.amount}}</td>
                    <td>{{sell_order.currency.title}} ({{sell_order.currency.symbol}})</td>
                    <td v-html=status(sell_order.status)></td>
                    <td>
                        <div v-if="sell_order.status !==3">
                            <edit-btn :to="`sell-orders/${sell_order.id}`"/>
                            <delete-btn :id=sell_order.id></delete-btn>
                        </div>
                        <router-link v-else :to="`sell-orders/${sell_order.id}/detail`">
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
                sell_orders: []
            }
        },
        created() {
            this.getBuyOrders();
        },
        methods: {
            handleDelete(id) {
                axios.delete(`/sell-orders/${id}`)
                    .then(response => {
                        this.successNotify(response);
                        this.getBuyOrders();
                    })
                    .catch(error => this.errorNotify(error));
            },
            getBuyOrders() {
                axios.get('/sell-orders')
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
        },
    }
</script>
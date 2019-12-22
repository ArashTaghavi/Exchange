<template>
    <card title="جزییات سفارش خرید">
        <div class="row" v-if="Object.entries(buy_order).length>0">

        </div>
        <div class="alert alert-warning text-center" v-else>
            <h6>جزییات سفارش، پس از اتمام مرحله پرداخت نمایش داده می شود.</h6>
        </div>
    </card>
</template>

<script>
    export default {
        data() {
            return {
                buy_order: {}
            }
        },
        created() {
            axios.get(`/buy-orders/detail/${this.$route.params.id}`)
                .then(response => this.buy_order = response.data)
                .catch(error => this.errorNotify(error));
            console.log(this.buy_order);
        },
    }
</script>
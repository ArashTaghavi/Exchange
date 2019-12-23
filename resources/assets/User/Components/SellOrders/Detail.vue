<template>
    <card title="جزییات سفارش فروش">
        <div class="row" v-if="Object.entries(sell_order).length>0">

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
                sell_order: {}
            }
        },
        created() {
            axios.get(`/sell-orders/detail/${this.$route.params.id}`)
                .then(response => this.sell_order = response.data)
                .catch(error => this.errorNotify(error));
        },
    }
</script>
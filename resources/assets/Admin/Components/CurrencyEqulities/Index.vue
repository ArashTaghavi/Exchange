<template>
    <card :title="`${$route.name}`">
        <add-btn to="currency-equalities"/>

        <div class="row" v-if="currency_equalities.length>0">
            <table class="table table-hover mb-0 table-responsive">
                <thead>
                <tr>
                    <th>ارز مبدا</th>
                    <th>ارز مقصد</th>
                    <th>ضریب برابری</th>
                    <th>عملیات</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="currency_equality in currency_equalities">
                    <td>{{currency_equality.currency_from.title}}</td>
                    <td>{{currency_equality.currency_to.title}}</td>
                    <td>{{currency_equality.ratio}}</td>
                    <td>
                        <edit-btn :to="`currency-equalities/${currency_equality.id}`"/>
                        <delete-btn :id=currency_equality.id></delete-btn>
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
                currency_equalities: [],
            }
        },
        created() {
            this.getCurrencyEqualities();
        },
        methods: {
            handleDelete(id) {
                axios.delete(`/currency-equalities/${id}`)
                    .then(response => {
                        this.successNotify(response);
                        this.getCurrencyEqualities();
                    })
                    .catch(error => this.errorNotify(error));
            },

            getCurrencyEqualities() {
                axios.get(`/currency-equalities`)
                    .then(response => this.currency_equalities = response.data)
                    .catch(error => this.errorNotify(error));
            },
        }
    }
</script>

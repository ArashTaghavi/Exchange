<template>
    <card :title="`${$route.name}`">
        <add-btn to="currencies"/>

        <div class="row" v-if="currencies.length>0">
            <table class="table table-hover mb-0 table-responsive">
                <thead>
                <tr>
                    <th>عنوان</th>
                    <th>کارمزد</th>
                    <th>عملیات</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="currency in currencies">
                    <td>{{currency.title}} ({{currency.symbol}})</td>
                    <td>{{currency.wage}}</td>
                    <td>
                        <edit-btn :to="`currencies/${currency.id}`"/>
                        <delete-btn :id=currency.id></delete-btn>
                        <icon-btn type="danger" icon="close" v-if="currency.active==0"
                                  @click="handleActive(currency.id)">غیر فعال
                        </icon-btn>
                        <icon-btn type="success" icon="check" v-if="currency.active==1"
                                  @click="handleActive(currency.id)">
                            فعال
                        </icon-btn>
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
                currencies: [],
            }
        },
        created() {
            this.getCurrencies();
        },
        methods: {
            handleDelete(id) {
                axios.delete(`/currencies/${id}`)
                    .then(response => {
                        this.successNotify(response);
                        this.getCurrencies();
                    })
                    .catch(error => this.errorNotify(error));
            },
            handleActive(id) {
                this.deleteConfirm()
                    .then(confirm => {
                        if (confirm) {
                            axios.get(`/currencies/active/${id}`)
                                .then(response => this.getCurrencies())
                                .catch(error => this.errorNotify(error));
                        }
                    });
            },
            getCurrencies() {
                axios.get(`/currencies`)
                    .then(response => this.currencies = response.data)
                    .catch(error => this.errorNotify(error));
            },
        }
    }
</script>

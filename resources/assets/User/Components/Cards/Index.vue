<template>
    <card title="کارت ها">
        <add-btn to="cards"/>
        <div class="row" v-if="cards.length>0">
            <table class="table table-hover mb-0 table-responsive">
                <thead>
                <tr>
                    <th>نام بانک</th>
                    <th>شماره کارت</th>
                    <th>وضعیت</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="card in cards">
                    <td>{{card.bank_name}}</td>
                    <td>{{card.card_no}}</td>
                    <td v-html=approved(card.approved)></td>
                    <td>
                        <edit-btn :to="`cards/${card.id}`"/>
                        <delete-btn :id=card.id></delete-btn>
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
                cards: []
            }
        },
        created() {
            this.getCards();
        },
        methods: {
            handleDelete(id) {
                axios.delete(`/cards/${id}`)
                    .then(response => {
                        this.successNotify(response);
                        this.getCards();
                    })
                    .catch(error => this.errorNotify(error));
            },
            getCards() {
                axios.get('/cards')
                    .then(response => this.cards = response.data)
                    .catch(error => this.errorNotify(error));
            },
            approved(approved) {
                switch (approved) {
                    case 0:
                        return '<span class="badge badge-danger btn--icon-text"><i class="zmdi zmdi-close-circle-o"></i> تایید نشده </span>';
                    case 1:
                        return '<span class="badge badge-success btn--icon-text"><i class="zmdi zmdi-assignment-check"></i> تایید شده </span>';
                    default :
                        return '<span class="badge badge-warning btn--icon-text"><i class="zmdi zmdi-alert-circle-o"></i> در انتظار تایید </span>';
                }
            }
        },
    }
</script>
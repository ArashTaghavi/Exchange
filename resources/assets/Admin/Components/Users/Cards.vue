<template>
    <card :title="`${$route.name}`">
        <div class="row mb-2">
            <div class="col-md-2">
                <icon-btn style="width:100%" type="success" @click="search(1)">تایید شده</icon-btn>
            </div>
            <div class="col-md-2">
                <icon-btn style="width:100%" type="danger" @click="search(0)">تایید نشده</icon-btn>
            </div>
            <div class="col-md-2">
                <icon-btn style="width:100%" type="warning" @click="search(2)">در انتظار تایید</icon-btn>
            </div>
            <div class="col-md-2">
                <icon-btn style="width:100%" type="info" @click="getCards()">همه</icon-btn>
            </div>

        </div>
        <div class="row" v-if="cards.length>0">
            <div class="col-md-4" v-for="(card,index) in cards" :key=index>
                <div class="card">
                    <icon-btn type="success" style="position:absolute;left:5px;top:5px" v-if="card.approved===2"
                              icon="check" @click="handleApproved(card.id,1)">تایید
                    </icon-btn>
                    <icon-btn type="danger" style="position:absolute;left:70px;top:5px" v-if="card.approved===2"
                              icon="check" @click="handleApproved(card.id,0)">رد
                    </icon-btn>
                    <div class="card-body">
                        <p>نام بانک :
                            {{card.bank_name}}
                        </p>
                        <p>
                            شماره کارت :
                            {{card.card_no}}
                        </p>
                        <p>
                            شماره حساب :
                            {{card.account_no}}
                        </p>
                        <p>
                            شماره شبا :
                            {{card.sheba_no}}
                        </p>
                        <p class="text-center" v-html=approved(card.approved)></p>

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
                cards: [],
            }
        },
        created() {
            this.getCards();
        },
        methods: {
            getCards() {
                axios.get(`/users/cards/${this.$route.params.id}`)
                    .then(response => this.cards = response.data)
                    .catch(error => this.errorNotify(error));
            },
            search(approve) {
                axios.get(`/users/card-search/${this.$route.params.id}/${approve}`)
                    .then(response => this.cards = response.data)
                    .catch(error => this.errorNotify(error));
            },
            handleApproved(id, confirmation) {
                axios.get(`/users/card-approved/${id}/${confirmation}`)
                    .then(response => this.getCards())
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
            },
            jDate(date) {
                return moment(date).format('jYYYY/jM/jD');
            },

        },
    }
</script>

<template>
    <div class="row">
        <div class="col-md-12">
            <ul class="list-group">
                <li class="list-group-item">
                    * حساب بانکی شما باید به نام خودتان باشد و استفاده از کارت بانکی ای که به نام خودتان نیست خلاف
                    قوانین
                    سایت
                    است.
                </li>
                <li class="list-group-item">
                    * واریز و برداشت تنها از طریق حساب (های) بانکی تائید شده مقدوراست.

                </li>
                <li class="list-group-item"> * اگر در بین حساب های تائید شده خود حساب بانک ملت داشته باشید، تسویه حساب
                    های بالای
                    یک میلیون تومان، صرف نظر
                    از انتخاب حساب پیش فرض شما، به آن حساب واریز خواهد شد.
                </li>
            </ul>
            <card title="ثبت کارت بانکی" :active_loading=false>
                <div class="row">
                    <div class="col-md-12 m-3">
                        <h6 class="text-warning">مالک کارت باید با اطلاعات نام و نام خانوادگی وارد شده در قسمت پروفایل و کارت ملی بارگذاری شده یکسان باشد.</h6>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="bank_name">نام بانک</label>
                            <input type="text" v-model="form.bank_name" id="bank_name"
                                   class="form-control form-control-sm" placeholder="نام بانک را اینجا وارد نمایید.">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="card_no">شماره کارت</label>
                            <input type="text" v-model="form.card_no" id="card_no"
                                   class="form-control form-control-sm" placeholder="شماره کارت را اینجا وارد نمایید.">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="account_no">شماره حساب</label>
                            <input type="text" v-model="form.account_no" id="account_no"
                                   class="form-control form-control-sm" placeholder="شماره حساب را اینجا وارد نمایید.">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="sheba_no">شبا</label>
                            <input type="text" v-model="form.sheba_no" id="sheba_no"
                                   class="form-control form-control-sm" placeholder="شماره شبای را اینجا وارد نمایید.">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="is_default">
                            تنظیم به عنوان کارت پیش فرض
                        </label>
                        <input type="checkbox" v-model="form.is_default" id="is_default">
                    </div>
                    <submit @click="handleSubmit"/>
                </div>
            </card>
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
                        <td>{{card.bank_name}}
                        {{card.is_default==1 ? '( پیش فرض )' : ''}}
                        </td>
                        <td>{{card.card_no}}</td>
                        <td v-html=approved(card.approved)></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

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
            handleSubmit() {
                axios.post('/cards', this.form)
                    .then(response => {
                        this.successNotify(response);
                        this.$parent.$parent.selected_component = 'Document';
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
        }
    }
</script>

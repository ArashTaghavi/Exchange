<template>
    <div class="row">
        <div class="col-md-12">
            <ul class="list-group">
                <li class="list-group-item">
                    * لطفا دو تصویر مانند نمونه های ذیل ارسال کنید.
                </li>
                <li class="list-group-item">
                    * در تصویر اول چهره شما به همراه متن احرازهویت

                </li>
                <li class="list-group-item">
                    * در تصویر دوم متن احراز هویت به همراه سه کارت شناسایی شما باید بصورت واضح مشخص باشد. (کارت ملی ،
                    گواهینامه
                    رانندگی + کارت بانکی)
                </li>
                <li class="list-group-item">

                </li>
                <li class="list-group-item">
                    * تاریخ انقضا و cvv2 کارت بانکی خود را بپوشانید.

                </li>
            </ul>
            <card title="بارگذاری مدرک" :active_loading=false>
                <div class="row">
                    <div class="col-md-6">
                        <img src="/site-assets/images/document1.png" alt="1">
                    </div>
                    <div class="col-md-6">
                        <img src="/site-assets/images/document2.png" alt="2">
                    </div>
                    <div class="col-md-12 text-right mt-3">
                        <div class="form-group">
                            <cropper-portlet v-model="form.profile_image" title="تصویر مدرک" place="right"/>
                        </div>
                    </div>
                    <submit @click="handleSubmit"/>
                    <div class="col-md-3" v-for="document in documents">
                        <i class="zmdi zmdi-close icon-delete" @click="handleDelete(document.id)"></i>
                        <img :src="`${document.profile_image}`" style="width:100%" :alt="`${document.id}`">
                    </div>
                </div>
            </card>
        </div>
    </div>

</template>

<script>
    export default {
        data() {
            return {
                documents: []
            }
        },
        created() {
            this.getDocuments();
        },
        methods: {
            handleSubmit() {
                axios.post('/documents', this.form)
                    .then(response => this.afterSubmit(response))
                    .catch(error => this.errorNotify(error));
            },
            getDocuments() {
                axios.get('/documents')
                    .then(response => this.documents = response.data)
                    .catch(error => this.errorNotify(error));
            },
            afterSubmit(response) {
                this.successNotify(response);
                this.getDocuments();
                this.form = {
                    profile_image: null
                }
            },
            handleDelete(id) {
                this.deleteConfirm()
                    .then(confirm => {
                        if (confirm) {
                            axios.delete(`/documents/${id}`)
                                .then(response => {
                                    this.getDocuments();
                                    this.successNotify(response);
                                })
                                .catch(error => this.errorNotify(error));
                        }
                    });
            }
        },


    }
</script>
<style>
    .icon-delete {
        cursor: pointer;
        position: absolute;
        top: 5px;
        left: 25px;
        color: red;
        font-size: 15px;
        font-weight: bolder;
    }
</style>
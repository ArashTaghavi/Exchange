<template>
    <card :title="`${$route.name}`">
        <div class="row" v-if="documents.length>0">
            <div class="col-md-4" v-for="(document,index) in documents" :key=index>
                <div class="card">
                    <icon-btn type="success" style="position:absolute;left:5px;top:5px" v-if="document.approved==2"
                              icon="check" @click="handleApproved(document.id,1)">تایید
                    </icon-btn>
                    <icon-btn type="danger" style="position:absolute;left:70px;top:5px" v-if="document.approved==2"
                              icon="close" @click="handleApproved(document.id,0)">رد
                    </icon-btn>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <p class="text-center">
                                    {{document.title}}
                                </p>
                                <a :href="`${document.profile_image}`" target="_blank">
                                    <img :src="`${document.profile_image}`" width="80%" class="img-thumbnail" :alt="`${document.id}`">
                                </a>
                            </div>
                            <div class="col-md-12 mt-2">
                                <p class="text-center" v-html="approved(document.approved)"></p>
                            </div>
                        </div>


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
                documents: [],
            }
        },
        created() {
            this.getDocuments();
        },
        methods: {
            getDocuments() {
                axios.get(`/users/documents/${this.$route.params.id}`)
                    .then(response => this.documents = response.data)
                    .catch(error => this.errorNotify(error));
            },
            handleApproved(id, confirmation) {
                axios.get(`/users/document-approved/${id}/${confirmation}`)
                    .then(response => this.getDocuments())
                    .catch(error => this.errorNotify(error));
            },
            approved(approved) {
                if (approved == 0)
                    return '<span class="badge badge-danger btn--icon-text"><i class="zmdi zmdi-close-circle-o"></i> تایید نشده </span>';
                else if (approved == 1)
                    return '<span class="badge badge-success btn--icon-text"><i class="zmdi zmdi-assignment-check"></i> تایید شده </span>';
                else
                    return '<span class="badge badge-warning btn--icon-text"><i class="zmdi zmdi-alert-circle-o"></i> در انتظار تایید </span>';

            },
            jDate(date) {
                return moment(date).format('jYYYY/jM/jD');
            },

        },
    }
</script>

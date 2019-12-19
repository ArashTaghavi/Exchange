<template>
    <card title="مدارک" sub_title="لطفا برای تسریع روند تایید مدارک، مدارک خود را طبق فرمت خواسته شده بارگذاری نمایید.">
        <add-btn to="documents"/>
        <div class="row" v-if="documents.length>0">
            <table class="table table-hover mb-0">
                <thead>
                <tr>
                    <th>عنوان</th>
                    <th>وضعیت</th>
                    <th>عملیات</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="document in documents">
                    <td>{{document.title}}</td>
                    <td v-html=approved(document.approved)></td>
                    <td>
                        <edit-btn :to="`documents/${document.id}`"/>
                        <delete-btn :id=document.id></delete-btn>
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
                documents: []
            }
        },
        created() {
            this.getDocuments();
        },
        methods: {
            handleDelete(id) {
                axios.delete(`/documents/${id}`)
                    .then(response => {
                        this.successNotify(response);
                        this.getDocuments();
                    })
                    .catch(error => this.errorNotify(error));
            },
            getDocuments() {
                axios.get('/documents')
                    .then(response => this.documents = response.data)
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
        computed: {}
    }
</script>
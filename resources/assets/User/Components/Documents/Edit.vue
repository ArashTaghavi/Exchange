<template>
    <card title="ویرایش مدرک">
        <div class="row">
            <div class="col-md-12 text-right mt-3">
                <div class="form-group">
                    <cropper-portlet v-model="form.profile_image" title="تصویر مدرک" place="right"/>
                </div>
            </div>
            <submit @click="handleSubmit"/>
        </div>
    </card>
</template>

<script>
    export default {
        created() {
            axios.get(`/documents/${this.$route.params.id}`)
                .then(response => this.form = response.data)
                .catch(error => this.errorNotify(error))
        },
        methods: {
            handleSubmit() {
                axios.put(`/documents/${this.$route.params.id}`,this.form)
                    .then(response => {
                        this.successNotify(response);
                        this.$router.push('/documents')
                    })
                    .catch(error => this.errorNotify(error));
            }
        }
    }
</script>
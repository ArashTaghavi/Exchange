<template>
    <card title="ویرایش مدرک">
        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label for="title">عنوان مدرک</label>
                    <input type="text" v-model="form.title" id="title"
                           class="form-control form-control-sm" placeholder="عنوان مدرک را اینجا وارد نمایید..">
                </div>
            </div>
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
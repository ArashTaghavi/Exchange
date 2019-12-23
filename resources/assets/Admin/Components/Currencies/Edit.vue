<template>
    <card :title="`${$route.name}`">
        <div class="row">
            <div class="col-md-3">
                <label for="title">عنوان</label>
                <input type="text" class="form-control form-control-sm" v-model="form.title" id="title">
            </div>
            <div class="col-md-3">
                <label for="symbol">نماد</label>
                <input type="text" class="form-control form-control-sm" v-model="form.symbol" id="symbol">
            </div>
            <div class="col-md-3">
                <label for="wage">کارمزد</label>
                <input type="text" class="form-control form-control-sm" v-model="form.wage" id="wage"
                       placeholder="لطفا بصورت صحیح و یا اعشاری با / وارد کنید."
                >
            </div>
            <submit @click="handleSubmit"/>
        </div>
    </card>
</template>

<script>
    export default {
        created() {
            axios.get(`/currencies/get/${this.$route.params.id}`)
                .then(response => this.form = response.data)
                .catch(error => this.errorNotify(error));
        },
        methods: {
            handleSubmit() {
                axios.put(`/currencies/${this.$route.params.id}`, this.form)
                    .then(response => {
                        this.successNotify(response);
                        this.$router.push('/currencies')
                    })
                    .catch(error => this.errorNotify(error));
            }
        }
    }
</script>

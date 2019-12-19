<template>
    <button class="btn btn-sm btn-outline-danger btn--icon-text" @click.prevent="handleDelete()">
        <i class="zmdi zmdi-delete"></i>
        حذف
    </button>
</template>

<script>
    let vm = new Vue();

    export default {
        props: {
            id: {
                type: Number,
                default: 0
            }
        },
        methods: {
            handleDelete() {
                this.deleteConfirm()
                    .then(confirm => {
                        if (confirm) {
                            this.$parent.$parent.handleDelete(this.id);
                        }
                    });
            }
        }

    }
</script>
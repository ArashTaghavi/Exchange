<template>
    <router-link  :to="`${to}/edit`">
        <button class="btn btn-sm btn-outline-info btn--icon-text m-1">
            <i class="zmdi zmdi-edit"></i>
            ویرایش
        </button>
    </router-link>
</template>

<script>
    export default {
        props: {
            to: {
                type: String,
                default: ''
            }
        }

    }
</script>
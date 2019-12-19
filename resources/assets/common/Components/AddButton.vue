<template>
    <div class="actions">
        <router-link :to="`${to}/create`">
            <button class="btn btn-sm btn-outline-success btn--icon-text">
                <i class="zmdi zmdi-plus"></i>
                افزودن
            </button>
        </router-link>
    </div>
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
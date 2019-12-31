<template>
    <router-link :to=to>
        <button :class="`btn btn-sm btn-outline-${type} btn--icon-text m-1`">
            <i :class="`zmdi zmdi-${icon}`"></i>
            <slot></slot>
        </button>
    </router-link>
</template>

<script>
    export default {
        props: {
            icon: {
                type: String,
                default: ''
            },
            type: {
                type: String,
                default: 'success'
            },
            to: {
                type: String,
                default: ''
            }
        }

    }
</script>

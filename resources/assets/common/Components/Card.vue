<template>
    <div class="card">
        <loading v-if="loading && active_loading"/>
        <div class="card-body">
            <h4 class="card-title">{{title}}</h4>
            <h6 class="card-subtitle hidden-xs-down">{{sub_title}}</h6>
            <slot></slot>
        </div>
    </div>
</template>
<script>
    export default {
        name: "Card",
        props: {
            title: {
                type: String,
                default: ''
            },
            sub_title: {
                type: String,
                default: ''
            },
            active_loading: {
                type: Boolean,
                default: true
            }

        },
        updated() {
            this.loading = false;
        }
    }
</script>
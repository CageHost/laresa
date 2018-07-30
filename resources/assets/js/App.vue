<template>
    <!-- TODO: vuex that user -->
    <DefaultLayout :authUser="this.user">
        <router-view :authUser="this.user"></router-view>
    </DefaultLayout>
</template>

<script>
    import DefaultLayout from './layouts/Default.vue'

    export default {
        components: {
            DefaultLayout,
        },
        // TODO: why function
        data: () => ({
            user: false,
            drawer: null
        }),
        created: function() {
            if (window.user.name) {
                this.user = window.user
            }
        },
        methods: {
            showHideDrawer: function() {
                // TODO: hack, stop using breakpoints for mobile
                // TODO: isMobile https://vuetifyjs.com/en/layout/breakpoints
                if (this.drawer && this.$vuetify.breakpoint.mdAndUp) {
                    this.drawer = !this.drawer
                }
            }
        }
    }
</script>

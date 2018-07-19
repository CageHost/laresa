<template>
    <GuestLayout>
            <md-app-content>
                    <h1 class="md-headline">Put on your gaming socks!</h1>
                    <p class="md-subheading">or if you got noob socks, check the prize shop...</p>
                    <div class="filler">
                        <router-view></router-view>
                    </div>
            </md-app-content>
    </GuestLayout>
</template>

<style lang="scss" scoped>
    .md-headline {
        font-weight: bold;
    }

    .filler {
        min-height: 1200px;
    }
</style>

<script>
    import GuestLayout from './layouts/GuestLayout.vue'

    export default {
        /* TODO: why is name? */
        name: 'App',
        components:{
            GuestLayout,
        },
        created: function () {
            console.log(this)
        }
    }
</script>

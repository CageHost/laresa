<template>
    <div v-if="this.user.name">
        <!-- TODO: DRY -->
        <DefaultLayout>
                <md-app-content>
                        <h1 class="md-headline">Put on your gaming socks {{this.user.name}}!</h1>
                        <p class="md-subheading">or if your socks are noob, check the prize shop...</p>
                        <div class="filler">
                            <router-view></router-view>
                        </div>
                </md-app-content>
        </DefaultLayout>
    </div>
    <div v-else>
        <GuestLayout>
                <md-app-content>
                        <h1 class="md-headline">Put on your gaming socks noob!</h1>
                        <p class="md-subheading">or if your socks are noob, check the prize shop...</p>
                        <div class="filler">
                            <router-view></router-view>
                        </div>
                </md-app-content>
        </GuestLayout>
    </div>
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
    import DefaultLayout from './layouts/DefaultLayout.vue'

    export default {
        data() {
            return {
                user: {}
            }
        },
        /* TODO: why is name? */
        name: 'App',
        components:{
            GuestLayout,
            DefaultLayout,
        },
        created: function () {
            console.log(window.user)
            this.user = window.user
        }
    }
</script>

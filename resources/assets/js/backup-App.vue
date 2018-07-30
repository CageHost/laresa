<template>
    <div v-if="this.user">
        <!-- TODO: DRY -->
        <DefaultLayout>
            <md-app-content>
                <div class="filler">
                    <router-view :authUser="this.user"></router-view>
                </div>
            </md-app-content>
        </DefaultLayout>
    </div>
    <div v-else>
        <GuestLayout>
            <md-app-content>
                <div class="md-layout md-gutter">
                    <div class="md-layout-item">
                        <div class="filler">
                            <router-view :authUser="false"></router-view>
                        </div>
                    </div>
                    <div class="md-layout-item md-size-25 sidebar">
                        <Login/>
                    </div>
                </div>
            </md-app-content>
        </GuestLayout>
    </div>
</template>

<style lang="scss" scoped>
    .filler {
        min-height: 1200px;
    }

    .sidebar {
        min-width: 200px;
        // background: #ccc;
    }
</style>

<script>
    import GuestLayout from './layouts/GuestLayout.vue'
    import DefaultLayout from './layouts/DefaultLayout.vue'

    import Login from './components/Login.vue'

    export default {
        /* TODO: why name? */
        name: 'App',
        data() {
            return {
                user: false
            }
        },
        components:{
            GuestLayout,
            DefaultLayout,
            Login,
        },
        created: function () {
            if (window.user.name) {
                this.user = window.user
            }
        }
    }
</script>

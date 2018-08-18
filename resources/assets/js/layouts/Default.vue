<template>
    <v-app class="esa-app">
        <v-navigation-drawer app right temporary
        v-model="drawer"
        v-resize="showHideDrawer">
            <v-list>
                <v-list-tile to="/">
                    <v-list-tile-content >
                        <v-list-tile-title class="text-xs-right">Home</v-list-tile-title>
                    </v-list-tile-content>
                    <v-list-tile-action>
                        <v-icon>home</v-icon>
                    </v-list-tile-action>
                </v-list-tile>
                <v-list-tile to="/games">
                    <v-list-tile-content>
                        <v-list-tile-title class="text-xs-right">Games</v-list-tile-title>
                    </v-list-tile-content>
                    <v-list-tile-action>
                        <v-icon>gamepad</v-icon>
                    </v-list-tile-action>
                </v-list-tile>
            </v-list>
        </v-navigation-drawer>

        <v-toolbar app dark prominent extended scroll-toolbar-off-screen scroll-threshold="0"
        class="esa-app-toolbar">
            <v-toolbar-title slot="extension">
                <router-link to="/">
                    <div class="hidden-md-and-up"><span>ESA</span></div>
                    <div class="hidden-sm-and-down">
                        <span>eS</span>port<span>A</span>lliance
                    </div>
                </router-link>
            </v-toolbar-title>
            <v-spacer slot="extension"></v-spacer>
            <v-btn icon slot="extension" class="hidden-md-and-up ma-0"
            @click.stop="drawer = !drawer">
                <v-icon>menu</v-icon>
            </v-btn>
            <v-toolbar-items slot="extension" class="hidden-sm-and-down">
                <v-btn to="/games" flat>Games</v-btn>
                <v-btn to="/events" flat>Events</v-btn>
                <v-btn to="/teams" flat>Teams</v-btn>
                <v-btn flat>Prizes</v-btn>
                <v-btn v-if="this.authUser" href="/logout" flat>Logout</v-btn>
                <v-btn v-else to="/login" flat>Login</v-btn>
            </v-toolbar-items>
        </v-toolbar>

        <v-content>
            <div class="filler">
                <slot/>
            </div>
        </v-content>
        <v-footer app></v-footer>
    </v-app>
</template>

<script>
export default {
    //TODO: why name?
    name: 'DefaultLayout',

    props: {
        authUser: {}
    },

    data: () => ({
        user: false,
        drawer: null
    }),

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

<style lang="scss" scoped>
    .esa-app {
        // min-width: 600px;
    }

    .esa-app-toolbar {
        // max-width: 1400px;
    }

    .filler {
        height: 9000px;
    }

    .v-toolbar__title {
        font-size: 200%;
        letter-spacing: 3px;

        span {
            color: red;
        }

        a {
            color: inherit;
            text-decoration: none;
        }
    }

    .v-toolbar__extension>.v-toolbar__title {
        margin-left: 0 !important;
    }
</style>

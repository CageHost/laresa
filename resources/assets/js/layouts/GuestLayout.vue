<template>
<div class="page-container">
    <md-app md-mode="flexible" md-waterfall>
        <md-app-toolbar class="md-large md-primary">
            <div class="md-toolbar-row">
                <div class="md-toolbar-section-end">
                    <md-menu class="esa-medium-down-hide">
                        <router-link to="/games"><md-button>Games</md-button></router-link>
                        <router-link to="/events"><md-button>Events</md-button></router-link>
                        <router-link to="/"><md-button>Teams</md-button></router-link>
                        <router-link to="/"><md-button>Prizes</md-button></router-link>
                        <router-link to="/login"><md-button>Login</md-button></router-link>
                    </md-menu>
                    <md-button class="md-icon-button esa-medium-up-hide" @click="menuVisible = !menuVisible">
                        <md-icon>menu</md-icon>
                    </md-button>
                </div>
            </div>

            <div class="md-toolbar-row">
                <div id="title" class="md-display-1"><span>eS</span>port<span>A</span>lliance</div>
            </div>
        </md-app-toolbar>

        <md-app-drawer class="md-right" :md-active.sync="menuVisible">
            <md-toolbar class="md-transparent" md-elevation="0">
                Navigation
            </md-toolbar>
            <md-list>
                <md-list-item>
                    <span class="md-list-item-text">
                        <router-link :to="{name: 'games'}">Games</router-link>
                    </span>
                    <md-icon>games</md-icon>
                </md-list-item>

                <md-list-item>
                    <span class="md-list-item-text">
                        <router-link to="events">Events</router-link>
                    </span>
                    <md-icon>calendar_today</md-icon>
                </md-list-item>
            </md-list>
        </md-app-drawer>

        <slot/>

    </md-app>
</div>
</template>

<script>
export default {
    name: 'GuestLayout',
    data: () => ({
        menuVisible: false
    }),
    created: function () {
        console.log(this)
    }
}
</script>

<style lang="scss" scoped>
.md-app {
    max-height: 100vh;
    border: 1px solid rgba(#000, .12);
}

.md-app-toolbar {
    height: 196px;
}

// Demo purposes only
.md-drawer {
    width: 230px;
    max-width: calc(100vw - 125px);
}

#title {
    margin-left: 0;

    span {
        color: red;
    }
}

.filler {
    height: 1200px;
}
</style>

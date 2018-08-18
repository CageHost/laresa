<template>
    <div fluid v-if="this.game" class="pa-0">

        <v-jumbotron dark :src="game.bgimage" height="200px">
            <!--<v-container fill-height>
                <v-layout align-center>
                    <v-flex text-xs-center>
                        <h3 class="display-3">{{game.name}}</h3>
                    </v-flex>
                </v-layout>
            </v-container> -->
        </v-jumbotron>

        <v-toolbar dense color="red darken-1">
            <v-toolbar-title>Games / Doom</v-toolbar-title>

            <v-spacer></v-spacer>
            <v-tabs class="esa-tabs" color="red darken-1" right>
                <v-tab href="#tab-2">
                Events
                <v-icon>calendar_today</v-icon>
                </v-tab>

                <v-tab href="#tab-1">
                Teams
                <v-icon>people</v-icon>
                </v-tab>

                <v-tab href="#tab-3">
                Players
                <v-icon>person</v-icon>
                </v-tab>

                <v-tabs-slider color="orange"></v-tabs-slider>
            </v-tabs>

            <v-btn small class="orange">Play</v-btn>

        </v-toolbar>

        <v-container fluid grid-list-xl>
            <v-layout wrap>
                <v-flex md6>
                    <v-toolbar dense color="red darken-1">
                        <v-toolbar-title>Featured Events</v-toolbar-title>
                        <v-spacer></v-spacer>
                        <v-btn icon><v-icon>expand_less</v-icon></v-btn>
                    </v-toolbar>

                    <v-container fluid grid-list-md class="pl-0 pr-0">
                        <v-layout wrap>
                            <v-flex>
                                <v-card light class="game-card" raised>
                                    <v-card-media
                                    src="/images/games/bg/doom.jpg"
                                    height="100px"
                                    >
                                    </v-card-media>
                                    <v-card-title primary-title class="pt-3 headline">
                                        <h3 class="headline">Event 1</h3>
                                    </v-card-title>
                                </v-card>
                            </v-flex>

                            <v-flex>
                                <v-card class="game-card" raised>
                                    <v-card-media
                                    src="/images/games/bg/doom.jpg"
                                    height="100px"
                                    >
                                    </v-card-media>
                                    <v-card-title primary-title class="pt-3 headline">
                                        <h3 class="headline">Event 2</h3>
                                    </v-card-title>
                                </v-card>
                            </v-flex>

                            <v-flex xs12>
                                <v-card>
                                <v-list>
                                    <v-list-group>
                                        <v-list-tile avatar slot="activator">
                                            <v-list-tile-avatar tile color="blue lighten-2" size="48">
                                                <v-icon>account_circle</v-icon>
                                            </v-list-tile-avatar>

                                            <v-list-tile-content>
                                                <v-list-tile-title>Event 3</v-list-tile-title>
                                                <v-list-tile-sub-title>It's going down</v-list-tile-sub-title>
                                            </v-list-tile-content>

                                            <v-list-tile-action>
                                                <v-chip label color="transparent" text-color="black">
                                                    <v-icon color="red darken-2">calendar_today</v-icon>
                                                    <span class="pl-2 font-weight-black">09/28/2018</span>
                                                </v-chip>
                                            </v-list-tile-action>
                                        </v-list-tile>

                                        <v-list-tile>
                                            Can't put much here
                                        </v-list-tile>
                                    </v-list-group>
                                </v-list>
                                </v-card>

                                <v-card raised class="mt-4">
                                    <v-expansion-panel popout>
                                    <v-expansion-panel-content>
                                        <div slot="header">
                                            <v-list-tile-avatar tile color="blue lighten-2" size="32">
                                                <v-icon>account_circle</v-icon>
                                            </v-list-tile-avatar>
                                        </div>
                                        <div slot="header">
                                            <h3>Event 5</h3>
                                        </div>
                                        <v-card>
                                            <v-card-media
                                            src="/images/games/bg/doom.jpg"
                                            height="180px" contain
                                            ></v-card-media>
                                            <v-card-text>
                                                Anything goes
                                            </v-card-text>
                                        </v-card>
                                    </v-expansion-panel-content>
                                    </v-expansion-panel>
                                </v-card>

                            </v-flex>
                        </v-layout>
                    </v-container>
                </v-flex>

                <v-flex>
                    <v-container fluid grid-list-md class="pa-0">
                        <v-card>
                            <v-toolbar dense color="red darken-1">
                                <v-toolbar-title>Featured Teams</v-toolbar-title>
                                <v-spacer></v-spacer>
                                <v-btn icon><v-icon>expand_less</v-icon></v-btn>
                            </v-toolbar>

                            <v-list two-line>
                                <v-list-tile avatar @click="" ripple>
                                    <v-list-tile-avatar tile color="green lighten-1" size="48">
                                        <v-icon large color="blue darken-1">adb</v-icon>
                                    </v-list-tile-avatar>

                                    <v-list-tile-content>
                                        <v-list-tile-title>Wowiors</v-list-tile-title>
                                        <v-list-tile-sub-title>We are Warrios of WoW</v-list-tile-sub-title>
                                    </v-list-tile-content>

                                    <v-list-tile-action>
                                        <v-chip label color="yellow lighten-2" text-color="black">
                                            <v-icon color="red darken-2">people</v-icon>
                                            <span class="pl-2 font-weight-black">12</span>
                                        </v-chip>
                                    </v-list-tile-action>

                                    <v-list-tile-action>
                                        <v-chip label color="yellow lighten-2" text-color="black">
                                            <v-icon color="red darken-2">signal_cellular_alt</v-icon>
                                            <span class="pl-2 font-weight-black">2nd</span>
                                        </v-chip>
                                    </v-list-tile-action>
                                </v-list-tile>

                                <v-list-tile avatar>
                                    <v-list-tile-avatar tile color="red" size="48">
                                        <v-icon large>traffic</v-icon>
                                    </v-list-tile-avatar>

                                    <v-list-tile-content>
                                        <v-list-tile-title>Rage Quitters</v-list-tile-title>
                                        <v-list-tile-sub-title>We troll noobs and quit!</v-list-tile-sub-title>
                                    </v-list-tile-content>

                                    <v-list-tile-action>
                                        <v-chip label color="yellow lighten-2" text-color="black">
                                            <v-icon color="red darken-2">people</v-icon>
                                            <span class="pl-2 font-weight-black">7</span>
                                        </v-chip>
                                    </v-list-tile-action>

                                    <v-list-tile-action>
                                        <v-chip label color="yellow lighten-2" text-color="black">
                                            <v-icon color="red darken-2">signal_cellular_alt</v-icon>
                                            <span class="pl-2 font-weight-black">37th</span>
                                        </v-chip>
                                    </v-list-tile-action>
                                </v-list-tile>
                            </v-list>
                        </v-card>
                    </v-container>

                </v-flex>
            </v-layout>
        </v-container>

    </div>
</template>

<script>
  export default {
    data() {
      return {
        game: false
      }
    },
    mounted() {
      axios.get('/lapi/game/' + this.$route.params.alias).then(response => {
        console.log(response.data)
        this.game = response.data
      }).catch(e => {
        this.errors.push(e)
        debugger
      })
    }
  }
</script>

<style scoped>
    .esa-sidebar {
        background: #333;
    }

    .esa-tabs {
        width: auto;
    }
</style>

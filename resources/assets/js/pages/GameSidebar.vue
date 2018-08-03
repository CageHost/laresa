<template>
    <v-container fill-height fluid v-if="this.game" class="pa-0">
    <v-layout align-content-start>

        <v-flex class="esa-sidebar" xs3>

            <v-navigation-drawer width="100%">
                <v-toolbar raised color="primary">
                <v-list>
                <v-list-tile>
                <v-list-tile-title class="title">
                    Game: {{this.game.name}}
                </v-list-tile-title>
                </v-list-tile>
                </v-list>
                </v-toolbar>

                <v-list dark class="pa-0">
                    <v-list-tile to="/">
                        <v-list-tile-action>
                        <v-icon color="red">people</v-icon>
                        </v-list-tile-action>
                        <v-list-tile-content>
                        <v-list-tile-title>Teams</v-list-tile-title>
                        </v-list-tile-content>
                        <v-list-tile-action>
                            <v-chip small color="black" text-color="yellow">12</v-chip>
                        </v-list-tile-action>
                    </v-list-tile>

                    <v-divider></v-divider>

                    <v-list-tile to="/">
                        <v-list-tile-action>
                        <v-icon color="red">calendar_today</v-icon>
                        </v-list-tile-action>
                        <v-list-tile-content>
                        <v-list-tile-title>Events</v-list-tile-title>
                        </v-list-tile-content>
                        <v-list-tile-action>
                            <v-chip small color="black" text-color="yellow">37</v-chip>
                        </v-list-tile-action>
                    </v-list-tile>
                </v-list>
            </v-navigation-drawer>

        </v-flex>

        <v-flex xs12>
            <v-jumbotron dark :src="game.bgimage">
            <v-container>
            <v-layout align-center>
            <v-flex text-xs-center>
                <h3 class="display-3">{{game.name}}</h3>
            </v-flex>
            </v-layout>
            </v-container>
            </v-jumbotron>

            <v-toolbar dense color="red">
                <v-toolbar-title>Doom</v-toolbar-title>

                <v-spacer></v-spacer>

                <v-tabs class="esa-tabs" color="red" right dark>
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

                    <v-tabs-slider color="yellow"></v-tabs-slider>
                </v-tabs>

                <v-btn small class="success">Play</v-btn>

            </v-toolbar>
        </v-flex>

    <!-- <v-flex fill-height>
        <v-layout fill-height>
            <v-flex>
                <v-tabs
                right
                color="red lighten-2"
                dark
                icons-and-text
                >
                <v-tabs-slider color="yellow"></v-tabs-slider>

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

                <v-tab-item
                v-for="i in 3"
                :id="'tab-' + i"
                :key="i"
                >
                <v-card flat>
                <v-card-text>{{ text }}</v-card-text>
                </v-card>
                </v-tab-item>
                </v-tabs>
            </v-flex>
        </v-layout>
    </v-flex> -->

    </v-layout>
    </v-container>
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
</style>

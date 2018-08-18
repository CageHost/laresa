<template>
    <div>
        <!-- <v-jumbotron :gradient="gradient" height="140px" dark>
            <v-container fill-height>
                <v-layout>
                    <v-flex text-xs-center>
                        <h1 class="display-3 pt-0">{{event.name}}</h1>
                    </v-flex>
                </v-layout>
            </v-container>
        </v-jumbotron> -->

        <v-container fluid class="esa-container" fill-height grid-list-xl>
            <v-layout class="wrap">

                <!-- <v-flex sm12>
                    <v-toolbar flat dense dark>
                        <v-toolbar-title class="headline">{{event.name}}</v-toolbar-title>
                    </v-toolbar>
                </v-flex> -->

                <v-flex sm12 md4 xl3>
                    <v-toolbar flat dense dark>
                        <v-toolbar-title class="body-3">Tournament Match</v-toolbar-title>
                    </v-toolbar>
                    <v-list>
                        <!-- <v-subheader>Tournament Match<v-spacer></v-spacer>3/7</v-subheader> -->
                        <v-list-group class="pt-2">
                            <v-list-tile slot="activator">

                                <v-list-tile-avatar tile size="42" color="grey lighten-3">
                                    <v-icon large color="green darken-2">calendar_today</v-icon>
                                </v-list-tile-avatar>

                                <v-list-tile-content>
                                    <v-list-tile-title>9/28/2018</v-list-tile-title>
                                    <v-list-tile-sub-title>7:00 PM EST</v-list-tile-sub-title>
                                </v-list-tile-content>

                                <v-list-tile-action>
                                    <v-btn icon color="blue" small to="/">
                                        <v-icon small color="white darken-1">save</v-icon>
                                    </v-btn>
                                </v-list-tile-action>
                            </v-list-tile>

                            <v-list-tile class="pa-1">
                                <v-list-tile-action class="card-list-date">
                                    <v-chip label color="transparent" text-color="black">
                                        <v-icon color="red darken-2">calendar_today</v-icon>
                                        <span class="font-weight-black pl-1 pr-2">9/29/2018</span>
                                        <v-icon color="red darken-2">alarm</v-icon>
                                        <span class="font-weight-black pl-1">7:00 PM</span>
                                    </v-chip>
                                </v-list-tile-action>

                                <v-list-tile-content></v-list-tile-content>

                                <v-list-tile-action>
                                    <v-btn icon color="purple" small to="/">
                                        <v-icon small color="white darken-1">tv</v-icon>
                                    </v-btn>
                                </v-list-tile-action>
                            </v-list-tile>

                            <v-subheader>Recurring Event: 3/7</v-subheader>

                        </v-list-group>
                    </v-list>

                    <v-list>
                        <v-divider></v-divider>
                        <v-subheader>Game</v-subheader>
                        <v-list-tile two-line to="/" v-for="game in event.games" :key="game.id">
                            <v-list-tile-avatar tile size="42">
                                <img :src="game.image">
                            </v-list-tile-avatar>

                            <v-list-tile-content>
                                <v-list-tile-title>{{game.name}}</v-list-tile-title>
                                <v-list-tile-sub-title>Tournament</v-list-tile-sub-title>
                            </v-list-tile-content>
                        </v-list-tile>
                    </v-list>


                    <v-list>
                        <v-divider></v-divider>
                        <v-subheader>Participants</v-subheader>
                        <v-list-group v-for="team in event.teams" :key="team.id">
                            <v-list-tile avatar @click="" ripple slot="activator">
                                <v-list-tile-avatar tile size="42">
                                    <img :src="team.image">
                                </v-list-tile-avatar>

                                <v-list-tile-content>
                                    <v-list-tile-title>{{ team.name }}</v-list-tile-title>
                                </v-list-tile-content>

                                <v-list-tile-action class="card-list-teamrank">
                                    <v-chip label color="transparent" text-color="black" class="mr-0">
                                        <v-icon color="red darken-2">signal_cellular_alt</v-icon>
                                        <span class="pl-2 font-weight-black">{{ team.points }}</span>
                                    </v-chip>
                                </v-list-tile-action>

                            </v-list-tile>
                            <v-list-tile class="list-tile-expand">
                                <v-list-tile-content class="list-tile-content pb-2 pt-2">

                                    <v-layout>
                                        <v-list-tile-avatar class="flex">
                                            <img :src="team.image">
                                        </v-list-tile-avatar>
                                        <v-list-tile-avatar class="flex">
                                            <img :src="team.image">
                                        </v-list-tile-avatar>
                                        <v-list-tile-avatar class="flex">
                                            <img :src="team.image">
                                        </v-list-tile-avatar>
                                    </v-layout>
                                </v-list-tile-content>
                            </v-list-tile>
                        </v-list-group>
                    </v-list>

                    <v-list>
                        <v-divider></v-divider>
                        <v-subheader>Where</v-subheader>
                        <v-list-tile>
                            Your Mom's House
                        </v-list-tile>
                    </v-list>
                </v-flex>

                <v-flex sm12 md8 xl7 class="esa-flex-content">
                    <v-toolbar dense class="esa-toolbar-invisible" color="red darken-1">
                        <v-toolbar-title class="display-1">
                            {{ event.name }}
                        </v-toolbar-title>
                        <v-chip icon small label color="ml-4 red darken-4 white--text pa-0">
                            <h3>3</h3></v-chip>
                        </v-toolbar-title>
                        <v-spacer></v-spacer>

                        <v-btn icon small class="green darken-2 white--text">
                            <v-icon small color="">add</v-icon>
                        </v-btn>
                        <v-btn icon small class="purple darken-2 white--text">
                            <v-icon small color="">tv</v-icon>
                        </v-btn>
                        <v-btn icon small class="blue darken-2 white--text">
                            <v-icon small color="">save</v-icon>
                        </v-btn>

                        <v-menu bottom left>
                            <v-btn small slot="activator" class="yellow darken-2 black--text">
                                Manage<v-icon>expand_more</v-icon>
                            </v-btn>

                            <v-list dark>
                            <v-list-tile>
                                <v-list-tile-title>Edit Event</v-list-tile-title>
                            </v-list-tile>
                            <v-list-tile>
                                <v-list-tile-title>Some really long thing</v-list-tile-title>
                            </v-list-tile>
                            </v-list>
                        </v-menu>
                        <!-- <v-btn small class="purple darken-2 white--text">Watch</v-btn>
                        <v-btn small class="green darken-2 white--text">Save</v-btn>
                        -->

                        <!--
                        <v-btn icon small class="green darken-2 white--text">
                            <v-icon small>person_add</v-icon>
                        </v-btn>
                        <v-btn icon small class="purple darken-2 white--text">
                            <v-icon small color="">tv</v-icon>
                        </v-btn>
                        <v-btn icon small class="blue darken-2 white--text">
                            <v-icon small color="">save</v-icon>
                        </v-btn>
                        -->
                    </v-toolbar>

                    <v-jumbotron :src="event.bgimage" height="200px">
                    </v-jumbotron>

                    <v-tabs class="esa-tabs" color="lighten-4">
                        <v-tab href="#tab-2">
                        <v-icon class="pr-2">calendar_today</v-icon>
                        Overview
                        </v-tab>

                        <v-tab href="#tab-1">

                        <v-icon class="pr-2">people</v-icon>
                        Standings
                        </v-tab>

                        <v-tabs-slider color="red"></v-tabs-slider>
                    </v-tabs>

                    <v-card class="mt-4 mb-4 pa-4">
                        {{event.description}}
                    </v-card>

                    <h5 class="text-xs-center title font-italic">
                        Round 1
                    </h5>

                    <v-container grid-list-lg class="pa-0 mt-4">
                        <v-layout row wrap>
                            <v-flex xs12 sm6 lg4 v-for="team in event.teams" :key="team.id">
                                <v-card>
                                    <v-layout row wrap class="justify-center" justify-space-around>
                                        <v-flex class="align-end" xs4 v-for="team in event.teams" :key="team.id">
                                            <v-card>
                                                Team
                                            </v-card>
                                        </v-flex>
                                    </v-layout>
                                </v-card>
                            </v-flex>
                        </v-layout>
                    </v-container>

                    <v-container grid-list-lg class="pa-0 mt-4">
                        <h5 class="text-xs-center pa-2 title font-italic">
                            Teams
                        </h5>
                    <v-layout row wrap>
                        <v-flex xs12 sm6 lg4 v-for="team in event.teams" :key="team.id">
                            <v-card>
                                <v-card-media
                                class="justify-start
                                align-start"
                                :src="team.image"
                                height="200px"
                                ></v-card-media>

                                <v-card-title primary-title class="pa-2 headline">
                                    <div>
                                        {{ team.name }}
                                    </div>
                                </v-card-title>

                                <v-card-actions class="justify-end align-end">
                                    <v-icon color="red darken-2">people</v-icon>
                                    <span class="font-weight-black pl-1 pr-2">5 Players</span>
                                    <v-icon color="red darken-2">star</v-icon>
                                    <span class="font-weight-black pl-1">1st Place</span>
                                </v-card-actions>

                                <v-card-actions class="justify-end">
                                    <v-btn color="success">Bet</v-btn>
                                    <v-btn color="red">Info</v-btn>
                                </v-card-actions>
                            </v-card>
                        </v-flex>

                        <v-flex sm6 v-for="team in event.teams" :key="team.id">
                            <v-card>
                                <v-layout class="mt-0 justify-start">
                                    <v-flex xs4 class="pr-0 pt-0 pb-0">
                                        <v-card-media
                                        :src="team.image"
                                        height="100px"
                                        ></v-card-media>
                                        </v-flex>

                                        <v-flex xs8 class="pl-0 pt-0 pb-0">
                                        <v-card-title primary-title>
                                            <div>
                                            <div class="headline">{{team.name}}</div>
                                            <div class="caption">{{team.description}}</div>
                                            </div>
                                        </v-card-title>
                                    </v-flex>
                                </v-layout>

                                <v-divider></v-divider>

                                <v-card-actions class="justify-end">
                                    <v-btn small color="success">Bet</v-btn>
                                    <v-btn small color="red">Info</v-btn>
                                </v-card-actions>
                            </v-card>

                        </v-flex>
                    </v-layout>
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
                event: {},
                date: "2018-9-28",
                time: null,
                gradient: 'to top, black, red'
            }
        },
        mounted() {
            axios.get('/lapi/event/' + this.$route.params.alias).then(response => {
                console.log(response.data)
                this.event = response.data
            }).catch(err => {
                console.log(err)
            })
        }
    }
</script>

<style scoped lang="scss">
    .esa-sidebar {
        background: #ccc;
    }
	.game-card a {
        text-decoration: none;
    }

    .game-card .headline {
        letter-spacing: 2px !important;
        text-shadow: 1px 1px 2px #000;
    }

    .v-avatar--tile {
        overflow: hidden;
    }

    .v-avatar--tile img {
        width: auto;
    }

    .card-list-date  {
        span {
            line-height: 24px;
        }
    }

    .team-expand-header {
        height: auto;
    }
</style>

<style>
    .esa-flex-content.flex {
        // max-width: 1000px;
    }
    .esa-container.fluid {
        max-width: 1200px;
    }
    .esa-toolbar-invisible .v-toolbar__content {
        // padding: 16px 0;
    }

    .list-tile-expand .v-list__tile {
        height: auto;
    }

    .team-expand-content .v-expansion-panel__header {
        height: auto;
    }

    .event-teams-card .v-toolbar__content {
        padding: 0 16px;
    }

    .card-list-date .v-chip__content {
        padding-left: 0;
    }

    .card-list-teamrank .v-chip__content {
        padding-right: 0;
    }

    .event-teams-card .v-list__tile__content .v-list__tile__title {
        // max-width: 100px;
        text-overflow: ellipses;
    }

    .event-teams-card {
        overflow: hidden;
    }

    // TODO: deprecated: ?
    .event-teams-card .v-list .v-list__tile .v-list__tile__action:first-child .v-chip__content {
        padding-left: 0;
    }
</style>

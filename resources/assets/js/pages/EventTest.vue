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

        <v-container fluid fill-height class="pa-0">
            <v-layout wrap>

                <v-flex class="esa-sidebar" sm12 md4 lg3>
                    <v-list>
                        <v-subheader>Event</v-subheader>
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
                        <v-list-group>
                            <v-list-tile slot="activator">

                                <v-list-tile-avatar size="42">
                                    <v-icon large color="blue">my_location</v-icon>
                                </v-list-tile-avatar>


                                <v-list-tile-content>3 Days, 2 hours</v-list-tile-content>

                                <v-list-tile-action>
                                    <v-btn icon color="green" small to="/">
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

                        </v-list-group>
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

                            <v-list-tile>
                                Can't put much here
                            </v-list-tile>

                        </v-list-group>
                    </v-list>
                </v-flex>

                <v-flex sm6 md5 lg6>
                    <v-jumbotron :src="event.bgimage" height="200px">
                    </v-jumbotron>
                    <v-container>{{event.description}}</v-container>
                </v-flex>

                <!-- <v-flex sm6 md4 lg3>
                    <v-card class="event-teams-card">
                        <v-toolbar dense color="red darken-1" class="ma-0 pa-0">
                            <v-toolbar-title>Overview</v-toolbar-title>
                            <v-spacer></v-spacer>
                            <v-btn icon><v-icon>expand_less</v-icon></v-btn>
                        </v-toolbar>

                            <v-layout column>
                                <v-flex>
                                    <v-list>
                                        <v-subheader>Who</v-subheader>
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

                                            <v-list-tile>
                                                Can't put much here
                                            </v-list-tile>

                                        </v-list-group>
                                    </v-list>


                                    <v-list two-line>
                                        <v-divider></v-divider>
                                        <v-subheader>What</v-subheader>
                                        <v-list-tile to="/" v-for="game in event.games" :key="game.id">
                                            <v-list-tile-avatar size="42">
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
                                        <v-subheader>When</v-subheader>

                                        <v-list-group>
                                            <v-list-tile slot="activator">

                                                <v-list-tile-avatar size="42">
                                                    <v-icon large color="blue">my_location</v-icon>
                                                </v-list-tile-avatar>

                                                <v-list-tile-action class="card-list-date">
                                                    <v-chip label color="transparent" text-color="black" class="ml-0">
                                                        <v-icon color="red darken-2">calendar_today</v-icon>
                                                        <span class="font-weight-black pl-1 pr-2">9/29/2018</span>
                                                    </v-chip>
                                                </v-list-tile-action>

                                                <v-list-tile-content></v-list-tile-content>

                                                <v-list-tile-action>
                                                    <v-btn icon color="purple" small to="/">
                                                        <v-icon small color="white darken-1">tv</v-icon>
                                                    </v-btn>
                                                </v-list-tile-action>
                                            </v-list-tile>

                                            <v-list-tile class="pa-1">
                                                <v-list-tile-action class="card-list-date">
                                                    <v-chip label color="transparent" text-color="black">
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

                                                <v-list-tile-action>
                                                    <v-btn icon color="success" small to="/">
                                                        <v-icon small color="white darken-1">save</v-icon>
                                                    </v-btn>
                                                </v-list-tile-action>
                                            </v-list-tile>

                                        </v-list-group>
                                    </v-list>

                                </v-flex>
                            </v-layout>
                    </v-card>
                </v-flex> -->

                <!-- <v-flex sm6 md4 lg3>
                    <div>
                        <v-date-picker full-width v-model="date" readonly show-current></v-date-picker>
                        <v-time-picker full-width
                        v-model="time"
                        type="month"
                        width="290"
                        class="mt-3"
                        ></v-time-picker>
                    </div>
                </v-flex> -->

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
</style>

<style>
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

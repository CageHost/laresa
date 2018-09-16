<template>
    <div>
        <v-container fluid grid-list-lg class="pa-0 ma-0">
            <v-layout wrap>

                <!-- <v-flex class="esa-flex-auto hidden-md-and-down">
                    <v-navigation-drawer>
                        <v-toolbar flat>
                            <v-list>
                            <v-list-tile>
                            <v-list-tile-title class="title">
                            Teams
                            </v-list-tile-title>
                            </v-list-tile>
                            </v-list>
                        </v-toolbar>

                        <v-divider></v-divider>

                        <v-list dense class="pt-0">
                            <v-list-tile>
                                <v-list-tile-content>
                                    <v-btn color="success">Create Team</v-btn>
                                </v-list-tile-content>
                            </v-list-tile>

                            <v-list-tile>
                                <v-list-tile-action>
                                    <v-icon>plus_one</v-icon>
                                </v-list-tile-action>

                                <v-list-tile-content>
                                    <v-list-tile-title>Create Team</v-list-tile-title>
                                </v-list-tile-content>
                            </v-list-tile>
                        </v-list>
                    </v-navigation-drawer>
                </v-flex> -->

                <v-flex md3 pr-0>
                    <v-toolbar class="red">
                        <v-toolbar-title>Teams Menu</v-toolbar-title>
                    </v-toolbar>
                    <v-card>
                        <v-list>
                            <v-list-tile to="/teams/create">
                                <v-list-tile-action>
                                    <v-icon color="success">group_add</v-icon>
                                </v-list-tile-action>
                                <v-list-tile-content>
                                    <span class="green--text">Create Team</span>
                                </v-list-tile-content>
                            </v-list-tile>

                            <v-list-tile to="/teams">
                                <v-list-tile-action>
                                    <v-icon>group</v-icon>
                                </v-list-tile-action>

                                <v-list-tile-content>
                                    <v-list-tile-title>My Teams</v-list-tile-title>
                                </v-list-tile-content>
                            </v-list-tile>
                        </v-list>
                    </v-card>
                </v-flex>

                <v-flex md9>
                    <v-container>

                        <v-layout wrap>
                            <v-flex xs12 sm8>
                                <v-text-field
                                v-model="search"
                                label="Search"
                                append-icon="search"
                                outline
                                hide-details
                                ></v-text-field>
                            </v-flex>

                            <v-flex sm4>
                                <v-btn to="/teams/create" class="create-button" color="success"
                                 large block outline>
                                    <v-icon left>group_add</v-icon> Create Team
                                </v-btn>
                            </v-flex>
                        </v-layout>

                        <v-data-iterator
                        :items="teams"
                        :search="search"
                        :rows-per-page-items="[8,20,100]"
                        content-tag="v-layout"
                        row
                        wrap
                        >
                            <v-flex
                            slot="item"
                            slot-scope="props"
                            xs6 sm4 md4 lg3
                            >
                            <v-card :to="'team/' + props.item.alias" class="game-card" dark color="grey darken-4" raised ripple>
                                <v-card-media
                                    :src="props.item.bgimage"
                                    height="120px"
                                    >
                                </v-card-media>

                                <v-card-title fluid  primary-title class="pa-2 headline justify-center">
                                    {{ props.item.name }}
                                </v-card-title>
                            </v-card>
                            </v-flex>
                            <v-alert slot="no-results" :value="true" color="error" icon="warning"
                            class="ma-2">
                            Your search for "{{ search }}" found no results.
                            </v-alert>
                        </v-data-iterator>
                    </v-container>
                </v-flex>
            </v-layout>
        </v-container>
    </div>
</template>

<script>
    export default {
        data: () => ({
            teams: [],
            search: '',
        }),
        mounted() {
            axios.get('/lapi/teams').then(response => {
                // TODO: response error handling
                this.teams = response.data
            }).catch(error => {
                console.log(error)
            })
        }
    }
</script>

<style scoped>
    .esa-flex-auto {
        flex: 0 0 auto;
        /* TODO: irrelevant if sibling is not flex */
        margin-right: -16px;
    }

    .game-card .headline {
        font-size: 18px !important;
        letter-spacing: 1px !important;
        text-shadow: 1px 1px 2px #000;
    }

    .create-button {
        margin-top: 0;
        height: 58px;
    }
</style>

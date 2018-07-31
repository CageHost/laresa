<template>
    <v-container fluid grid-list-lg >
        <v-layout justify-center wrap>
            <v-flex v-for="game in games" :key="game.id" xs12 sm6 md4 lg3>
                <v-card class="game-card" dark color="grey darken-4" raised>
                    <router-link :to="'game/'+game.alias">
                        <v-card-media
                        :src="game.bgimage"
                        height="180px"
                        >
                        <v-container fill-height class="pb-0">
                            <v-layout fill-height justify-end align-end>
                                <v-card-actions>
                                    <!-- TODO: numbers center on icons? -->
                                    <v-btn fab flat dark small :ripple="false">
                                        4<v-icon dark>calendar_today</v-icon>
                                    </v-btn>
                                    <v-btn fab flat dark small :ripple="false">
                                        12<v-icon dark>people</v-icon>
                                    </v-btn>
                                    <v-btn fab flat dark small :ripple="false">
                                        37<v-icon color="red">favorite</v-icon>
                                    </v-btn>
                                </v-card-actions>
                            </v-layout>
                      </v-container>
                    </v-card-media>
                    </router-link>

                    <v-card-title primary-title class="pt-3 headline">
                        <h3 class="headline">{{ game.name }}</h3>
                    </v-card-title>
                </v-card>
            </v-flex>
        </v-layout>
    </v-container>
</template>

<script>
    export default {
        data() {
            return {
                games: []
            }
        },
        mounted() {
            axios.get('/lapi/games').then(response => {
                this.games = response.data
                console.log(this.games)
            }).catch(e => {
                this.errors.push(e)
            })
        }
    }
</script>

<style scoped>
	.game-card a {
        text-decoration: none;
    }

    .game-card .headline {
        letter-spacing: 2px !important;
        text-shadow: 1px 1px 2px #000;
    }
</style>

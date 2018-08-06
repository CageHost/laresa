<template>
    <v-container fluid grid-list-lg >
        <v-layout justify-center wrap>
            <v-flex v-for="team in teams" :key="team.id" xs6 sm4 md3 lg2>
                <v-card :to="'team/'+team.alias" class="game-card" dark color="grey darken-4"
                raised ripple>
                    <v-card-media
                        :src="team.bgimage"
                        height="120px"
                        >
                    </v-card-media>

                    <v-card-title fluid  primary-title class="pa-2 headline justify-center">
                        {{ team.name }}
                    </v-card-title>
                </v-card>
            </v-flex>
        </v-layout>
    </v-container>
</template>

<script>
    export default {
        data: () => ({
            teams: []
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
    .game-card .headline {
        font-size: 18px !important;
        letter-spacing: 1px !important;
        text-shadow: 1px 1px 2px #000;
    }
</style>

<template>
    <v-container fluid>
        <v-layout align-center justify-center>
            <v-flex xs12>
                <h1 class="md-headline">Put on your gaming socks {{this.authOrNoob}}!</h1>
                <p class="md-subheading">or if you got noob socks, check out the prize shop...</p>
            </v-flex>
        </v-layout>
    </v-container>
</template>

<script>
    export default {
        name: 'Home',
        props: {
            authUser: {}
        },
        computed: {
            authOrNoob: function() {
                if (this.authUser) {
                    return this.authUser.name
                } else {
                    return 'noob'
                }
            }
        },
        created: function () {
            //
        }
    }
</script>

<style lang="scss" scoped>
    .md-headline {
        font-weight: bold;
    }
</style>

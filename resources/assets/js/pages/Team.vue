<template>
    <h1>{{team.name}}</h1>
</template>

<script>
    export default {
        data() {
            return {
                team: {}
            }
        },
        mounted() {
            axios.get('/lapi/team/' + this.$route.params.alias).then(response => {
                console.log(response.data)
                this.team = response.data
            }).catch(err => {
                console.log(err)
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

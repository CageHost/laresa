<template>
    <h1>{{event.name}}</h1>
</template>

<script>
    export default {
        data() {
            return {
                event: {}
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

<style scoped>
	.game-card a {
        text-decoration: none;
    }

    .game-card .headline {
        letter-spacing: 2px !important;
        text-shadow: 1px 1px 2px #000;
    }
</style>

<template>
    <div v-if="this.game">
        <v-jumbotron dark :src="game.bgimage">
        <v-container fill-height>
        <v-layout align-center>
        <v-flex text-xs-center>
            <h3 class="display-3">{{game.name}}</h3>
        </v-flex>
        </v-layout>
        </v-container>
        </v-jumbotron>
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

<template>
  <div>
    <v-container fluid>
        <v-layout align-center justify-center>
            <v-flex xs12 sm8 md4>
                <Login/>
            </v-flex>
        </v-layout>
    </v-container>
  </div>
</template>

<script>
    import Login from '../components/Login.vue'
    
    export default {
        components: {
            Login
        },
        data: () => ({
            drawer: null
        }),

    }
</script>

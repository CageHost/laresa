<template>
    <v-container>
        <h1 class="header text-xs-right red--text">Create Team</h1>
        <h3 class="text-xs-center mb-4">Tell us about yourselves...</h3>

        <v-spacer></v-spacer>
        <h1 class="text-xs-right"></h1>
        <v-form ref="form" v-model="valid" lazy-validation>
                <v-text-field
                v-model="name"
                :rules="nameRules"
                :counter="10"
                label="Team Name"
                required
                outline
                ></v-text-field>

            <v-input>
                <v-select
                v-model="select"
                :items="items"
                :rules="[v => !!v || 'Do you even game bro?']"
                label="Games Played"
                multiple
                required
                outline
                ></v-select>
            </v-input>

            <v-btn
            :disabled="!valid"
            @click="submit"
            color="success"
            >
            Create Team
            </v-btn>
            <v-btn class="right" @click="clear">Clear Form</v-btn>
        </v-form>
    </v-container>
</template>

<script>
  import axios from 'axios'

  export default {
    data: () => ({
      valid: true,
      name: '',
      nameRules: [
        v => !!v || 'How shall we summon thee?',
        v => (v && v.length <= 10) || 'Name must be less than 10 characters'
      ],
      email: '',
      emailRules: [
        v => !!v || 'E-mail is required',
        // TODO: this is a beautiful line
        v => /.+@.+/.test(v) || 'E-mail must be valid'
      ],
      select: null,
      items: [
        'Doom (PC)',
        'Quake Champions (PC)',
        'Halo (PC)',
        'Age of Empires 2 (PC)'
      ],
      checkbox: false
    }),

    methods: {
      submit () {
        if (this.$refs.form.validate()) {
            let data = new FormData();
            data.append('name', this.name);

            axios.post('/lapi/teams/create', data).then(response => {
                // console.log(response.data)
                //TODO: vuex success message
                this.$router.push('/teams')
            }).catch(e => {
                this.errors.push(e)
                debugger
            })
        }
      },
      clear () {
        this.$refs.form.reset()
      }
    }
  }
</script>

<style lang="scss" scoped>
    .md-headline {
        font-weight: bold;
    }
</style>

<template>
    <v-card dark class="elevation-12">
        <v-toolbar color="primary">
            <v-toolbar-title>
                <v-btn outline>Login</v-btn>
            </v-toolbar-title>
            <v-spacer></v-spacer>
            <v-toolbar-title>
                <v-btn>Register</v-btn>
            </v-toolbar-title>
        </v-toolbar>
        <v-container fluid grid-list-md>
            <v-form ref="form" v-model="valid" lazy-validation>
                <v-text-field
                    v-model="name"
                    :rules="nameRules"
                    label="Username"
                    required
                ></v-text-field>
                <v-text-field
                    v-model="email"
                    :rules="emailRules"
                    label="E-mail"
                    required
                    ></v-text-field>
                <v-layout row>
                    <v-flex>
                        <v-btn class="primary"
                            block
                            :disabled="!valid"
                            @click="submit"
                            >
                            Login
                        </v-btn>
                    </v-flex>
                </v-layout>
                <v-divider class="my-2"/>
                <v-layout row wrap>
                    <v-flex class="xs6">
                        <v-btn href="/auth/google" block color="red darken-1">Google</v-btn>
                    </v-flex>
                    <v-flex class="xs6">
                        <v-btn block color="blue darken-1">Facebook</v-btn>
                    </v-flex>
                    <v-flex class="xs6">
                        <v-btn block color="purple">Twitch</v-btn>
                    </v-flex>
                    <v-flex class="xs6">
                        <v-btn block color="light-blue">Twitter</v-btn>
                    </v-flex>
                </v-layout>
            </v-form>
        </v-container>
    </v-card>
</template>
<script>
import axios from 'axios'

export default {
    data: () => ({
        valid: true,
        name: '',
        nameRules: [
            v => !!v || 'Name is required',
            v => (v && v.length >= 4) || 'Name must be more than 3 characters'
        ],
        email: '',
        emailRules: [
            v => !!v || 'E-mail is required',
            v => /.+@.+/.test(v) || 'E-mail must be valid'
        ],
    }),
    methods: {
        submit () {
            if (this.$refs.form.validate()) {
                /*
                axios.post('/api/submit', {
                name: this.name,
                email: this.email,
                })
                */
            }
        },
        clear () {
            this.$refs.form.reset()
        }
    }
}
</script>

<style scoped>
    .v-toolbar__title button {
        margin-left: 0;
        margin-right: 0;
    }
    .v-card__actions {
        padding: 0 24px 24px 24px;
    }
</style>

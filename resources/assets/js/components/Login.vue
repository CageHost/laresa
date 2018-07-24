<template>
<div class="md-layout">
    <div class="md-layout-item md-size-100">
        <form novalidate @submit.prevent="validateBeforeSubmit">
            <md-card>
                <md-card-content>
                <md-field :class="isValid('email')">
                <label for="email">Email</label>
                <md-input v-model="form.email" v-validate="'required|email'" type="email" name="email" id="email" autocomplete="email" />
                <span class="md-error" v-show="errors.has('email')">{{ errors.first('email') }}</span>
                </md-field>

                <div class="md-layout md-gutter">
                    <div class="md-layout-item md-size-100">
                        <md-button type="submit" class="md-raised" :disabled="!true">Login</md-button>
                    </div>
                    <div class="md-layout-item">
                        <md-button href="/auth/google" class="md-raised md-accent">Google</md-button>
                    </div>
                    <div class="md-layout-item">
                        <md-button href="/auth/facebook" class="md-raised md-primary">Facebook</md-button>
                    </div>
                </div>
                </md-card-content>
                <md-progress-bar md-mode="indeterminate" v-if="sending" />
            </md-card>
            <md-snackbar>The user was saved with success!</md-snackbar>
        </form>
    </div>
</div>
</template>

<script>
  export default {
    name: 'Login',
    data: () => ({
        // email: '',
        form: {
            email: '',
        },
        sending: false,
    }),
    methods: {
        submitForm () {
            this.$validator.validateAll()
        },
        validateBeforeSubmit() {
            this.sending = true
            // TODO: fix bug errors clear after submit
            this.$validator.validateAll().then((result) => {
                if (!result) {
                    // eslint-disable-next-line
                    console.log('error');
                } else {
                    console.log(result)
                    console.log('valid');
                }
                window.setTimeout(() => {
                    this.sending = false
                }, 1000)
                console.log(this.errors.first('email'))
            });
            console.log(this.errors)
        },
        isValid ($fieldName) {
            if (this.errors.has($fieldName)) {
                return 'md-invalid'
            }
        }
    }
  }
</script>

<style lang="scss" scoped>
    .md-card {
        margin: 0;
    }
    .md-input {
        overflow: hidden;
    }
    .md-progress-bar {
        position: absolute;
        top: 0;
        right: 0;
        left: 0;
    }
    .md-button {
        margin: 0;
        width: 100%;
    }
    .md-card-content .md-layout-item {
        margin-top: 4px;
        margin-bottom: 4px;
    }
</style>

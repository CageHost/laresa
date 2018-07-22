<template>
  <div>
    <form novalidate class="md-layout md-alignment-top-center" @submit.prevent="validateBeforeSubmit">
      <md-card class="md-layout-item md-size-50 md-small-size-100">
        <md-card-header>
          <div class="md-title">Login</div>
        </md-card-header>

        <md-card-content>
          <md-field :class="isValid('email')">
            <label for="email">Email</label>
            <md-input v-model="form.email" v-validate="'required|email'" type="email" name="email" id="email" autocomplete="email" />
            <span class="md-error" v-show="errors.has('email')">{{ errors.first('email') }}</span>
          </md-field>
        </md-card-content>

        <md-progress-bar md-mode="indeterminate" v-if="sending" />

        <md-card-actions>
          <md-button href="/auth/google" class="md-raised md-accent">Google</md-button>
          <md-button href="/auth/facebook" class="md-raised md-primary">Facebook</md-button>
          <md-button type="submit" class="md-raised" :disabled="!true">Login</md-button>
        </md-card-actions>
      </md-card>

      <md-snackbar>The user was saved with success!</md-snackbar>
    </form>
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
            // this.sending = true
            // TODO: fix bug errors clear after submit
            this.$validator.validateAll().then((result) => {
                if (!result) {
                    // eslint-disable-next-line
                    console.log('error');
                } else {
                    console.log(result)
                    alert('Form Submitted!');
                }
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
  .md-progress-bar {
    position: absolute;
    top: 0;
    right: 0;
    left: 0;
  }
</style>

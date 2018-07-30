window.Vue = require('vue');

import Vuetify from 'vuetify';

import router from './router.js'

// import colors from 'vuetify/es5/util/colors'

Vue.use(Vuetify, {
    theme: {
        // primary: colors.red.base,
        primary: '#F44336',
        // secondary: '#333',
        // accent: '#333',
        // error: '#333',
        // info: '#333',
        // success: '#333',
        // warning: '#333'
    }
})


import App from './App.vue'

const app = new Vue({
    el: '#app',
    router,
    ...App
});

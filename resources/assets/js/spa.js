window.Vue = require('vue');

import VueMaterial from 'vue-material';
// import VueRouter from 'vue-router';

import router from './router.js'

// import 'vue-material/dist/vue-material.min.css'
// import 'vue-material/dist/theme/default-dark.css'

Vue.use(VueMaterial)
// Vue.use(VueRouter)

import App from './App.vue'

const app = new Vue({
    el: '#app',
    router,
    ...App
});

import Vue from 'vue';
import VueRouter from 'vue-router';

import Games from './pages/Games'
import Events from './pages/Events'

Vue.use(VueRouter)

const routes = [
    {
        path: '/games',
        name: 'games',
        component: Games,
    },
    {
        path: '/events',
        name: 'events',
        component: Events,
    },
]

const router = new VueRouter({
  mode: 'history',
  routes,
});

export default router;

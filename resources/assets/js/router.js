import Vue from 'vue';
import VueRouter from 'vue-router';

import Login from './pages/Login'
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
    {
        path: '/login',
        name: 'login',
        component: Login,
        beforeEnter: (to, from, next) => {
            if (window.user.name) {
                next('/home')
            }
            next()
        }
    },
]

const router = new VueRouter({
  mode: 'history',
  routes,
});

export default router;

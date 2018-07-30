import Vue from 'vue';
import VueRouter from 'vue-router';

import Home from './pages/Home'
import Login from './pages/Login'

Vue.use(VueRouter)

const routes = [
    {
        path: '/',
        name: 'home',
        component: Home,
    },
    {
        path: '/login',
        name: 'login',
        component: Login,
        beforeEnter: (to, from, next) => {
            if (window.user.name) {
                next('/')
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

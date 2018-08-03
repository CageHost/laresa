import Vue from 'vue';
import VueRouter from 'vue-router';

import Home from './pages/Home'
import Login from './pages/Login'
import Games from './pages/Games'
import GamePage from './pages/Game'

Vue.use(VueRouter)

const routes = [
    {
        path: '/',
        name: 'home',
        component: Home,
    },
    {
        path: '/games',
        name: 'games',
        component: Games,
    },
    { path: '/game/:alias', component: GamePage },
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

router.beforeEach(function (to, from, next) {
    window.scrollTo(0, 0)
    next()
})

export default router;

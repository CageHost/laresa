import Vue from 'vue';
import VueRouter from 'vue-router';

import Home from './pages/Home'
import Login from './pages/Login'
import Games from './pages/Games'
import GamePage from './pages/Game'
import Events from './pages/Events'
import EventPage from './pages/Event'
import Teams from './pages/Teams'
import TeamPage from './pages/Team'

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
    {
        path: '/games',
        name: 'games',
        component: Games,
    },
    { path: '/game/:alias', component: GamePage },
    {
        path: '/events',
        name: 'events',
        component: Events,
    },
    { path: '/event/:alias', component: EventPage },
    {
        path: '/teams',
        name: 'teams',
        component: Teams,
    },
    { path: '/team/:alias', component: TeamPage },
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

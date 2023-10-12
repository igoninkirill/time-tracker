import { createRouter, createWebHistory } from 'vue-router'
import Login from '../views/Login.vue';
import Dashboard from '../views/Dashboard.vue'
import auth from '../middleware/auth.js'

const routes = [
    {
        path: '/login',
        component: Login,
        meta: {
            layout: 'auth',
            middleware: [auth]
        }
    },
    {
        path: '/dashboard',
        component: Dashboard,
        meta: {
            layout: 'system',
            middleware: [auth]
        }
    }
]

const router = createRouter({
    history: createWebHistory(),
    routes,
})

router.beforeEach((to, from, next) => {
    if (to.meta.middleware) {
        to.meta.middleware.forEach(middleware => {
            middleware(to, from, next)
        })
    } else {
        next()
    }
})

export default router

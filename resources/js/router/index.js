import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

const routes = [
    {
        path: '/dashboard',
        name: 'dashboard',
        component: require('../components/Dashboard.vue').default
    },
    {
        path: '/users',
        name: 'users',
        component: require('../components/Users.vue').default
    },
    {
        path: '/profile/:id',
        name: 'profile',
        component: require('../components/Profile.vue').default
    },
    {
        path: '/customers',
        name: 'customers',
        component: require('../components/Customers.vue').default
    },
]

export default new VueRouter({
    mode: 'history',
    routes,
})
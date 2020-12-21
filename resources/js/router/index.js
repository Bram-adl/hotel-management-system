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
        path: '/profile',
        name: 'profile',
        component: require('../components/Profile.vue').default
    },
    {
        path: '/profile/:username',
        name: 'profile_detail',
        component: require('../components/ProfileDetail.vue').default
    },
]

export default new VueRouter({
    mode: 'history',
    routes,
})
import VueRouter from "vue-router"
import Home from './views/Home.vue'
import Product from './views/Product.vue'

const routes = [
    {
        path: '/',
        name: 'home',
        component: Home
    },
    {
        path: '/products',
        name: 'products',
        component: Product
    },
]

const router = new VueRouter({
    mode: 'history',
    routes
})

export default router

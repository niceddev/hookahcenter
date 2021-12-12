import VueRouter from "vue-router"
import App from './views/App.vue'
import Product from './views/Product.vue'

const routes = [
    {
        path: '/',
        name: 'home',
        component: App
    },
    {
        path: '/product',
        name: 'product.index',
        component: Product
    },
]

const router = new VueRouter({
    routes
})

export default router

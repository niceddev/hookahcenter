import VueRouter from 'vue-router'
import Main from "../views/Main";
import Product from "../views/Product";

const routes = [
    {
        path: '/',
        name: 'main',
        component: Main
    },
    {
        path: '/products',
        name: 'products',
        component: Product
    }
]

const router = new VueRouter({
    mode: 'history',
    scrollBehavior(){
        return { y:0 }
    },
    routes
})

export default router

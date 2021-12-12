import 'bootstrap/dist/css/bootstrap.css'
import Vue from 'vue'
import VueRouter from 'vue-router'
import router from './router'
import { library } from '@fortawesome/fontawesome-svg-core'
import { fab } from '@fortawesome/free-brands-svg-icons'
import { fas } from '@fortawesome/free-solid-svg-icons'
import { FontAwesomeIcon } from "@fortawesome/vue-fontawesome"

import App from './views/App.vue'
import Product from './views/Product.vue'

library.add( fas, fab )
Vue.component('fa', FontAwesomeIcon)

Vue.use(VueRouter)

new Vue({
    el: '#app',
    components: { App, Product },
    router,
});

import 'bootstrap/dist/js/bootstrap'

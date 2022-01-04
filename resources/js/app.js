import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap/dist/js/bootstrap'
import Vue from 'vue'
import Vuex from 'vuex'
import store from './store/index'
import VueRouter from 'vue-router'
import router from './router'
import { library } from '@fortawesome/fontawesome-svg-core'
import { fab } from '@fortawesome/free-brands-svg-icons'
import { fas } from '@fortawesome/free-solid-svg-icons'
import { FontAwesomeIcon } from "@fortawesome/vue-fontawesome"

import Home from './views/Home.vue'
import Product from './views/Product.vue'

library.add( fas, fab )
Vue.component('fa', FontAwesomeIcon)

Vue.use(Vuex)
Vue.use(VueRouter)
window.axios = require('axios');

new Vue({
    el: '#app',
    components: {
        Home,
        Product,
    },
    store,
    router,
});



import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap/dist/js/bootstrap'
import Vue from 'vue'
import Vuex from 'vuex'
import VueRouter from 'vue-router'
import store from './store/index'
import router from './router/index'
import { library } from '@fortawesome/fontawesome-svg-core'
import { fab } from '@fortawesome/free-brands-svg-icons'
import { fas } from '@fortawesome/free-solid-svg-icons'
import { FontAwesomeIcon } from "@fortawesome/vue-fontawesome"
import App from './App.vue'

library.add( fas, fab )
Vue.component('fa', FontAwesomeIcon)

Vue.use(VueRouter)
Vue.use(Vuex)
window.axios = require('axios');

new Vue({
    el: '#app',
    components: {
        App
    },
    store,
    router
});



require('./bootstrap');


import Vue from 'vue';
import Vuex from 'vuex';
import 'es6-promise/auto';
import VueRouter from 'vue-router';
import VueToast from 'vue-toast-notification';
import 'vue-toast-notification/dist/theme-default.css';
import './utility/filters';

Vue.use(Vuex);
Vue.use(VueRouter);

import AppLayout from "./app/App";
import store from './store/store';
import router from "./router/router";

const app = new Vue({
    el: '#app',
    name: 'App',
    router,
    store,
    components: {
        AppLayout,
    }
});

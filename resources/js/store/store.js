import Vue from 'vue';
import Vuex from 'vuex';
import createPersistedState from "vuex-persistedstate";


import state from './state.js';
import mutations from './mutations.js';
import actions from './actions.js';
import getters from './getters.js'

Vue.use(Vuex);

const store = new Vuex.Store({
    // plugins: [createPersistedState({
    //     storage: window.localStorage,
    //     key: 'aws-pilot',
    // })],
    state,
    mutations,
    actions,
    getters,
});

export default store;

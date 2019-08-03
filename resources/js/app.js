import Vue from 'vue';
import VueRouter from 'vue-router';
Vue.use(VueRouter);

import { routes } from './router';
import { loggy } from './_functions';
import store from './store';
const router = new VueRouter({ routes });

router.beforeEach((to, from, next) => {
    let _auth = JSON.parse(localStorage.getItem("auth")) || store.getters.auth;
    let isLoggedIn = _auth && _auth.isLoggedIn;
    loggy(isLoggedIn, 2);
    if(to.matched.some(record => record.meta.requiresAuth)){
        if(!isLoggedIn)
            next({ name: 'signin' });
        else
            next();
    }else  if(to.matched.some(record => !record.meta.requiresAuth)){
        if(isLoggedIn)
            next({ name: 'home' });
        else
            next();
    }else
        next();
});

Vue.config.productionTip = false;

import App from './_views/App';
const app = new Vue({
    el: '#app',
    components: { App },
    router,
    store
});
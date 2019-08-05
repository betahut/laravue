import Vue from 'vue';
import Vuex from 'vuex';
import authModule from './_store/_modules/_auth';
import ftpModule from './_store/_modules/_ftp';
// import productsModule from './modules/products';

Vue.use(Vuex);

export default new Vuex.Store({
    modules: {
        auth: authModule,
        ftp: ftpModule
    },
});
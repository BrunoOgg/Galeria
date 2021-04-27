
require('./bootstrap');
window.Vue = require('vue').default;

import routes from './routes';
import VueRouter from 'vue-router';
Vue.use(VueRouter);

const router = new VueRouter({
    routes: routes
});

Vue.component('spinner', require('vue-simple-spinner'));

import App from './app.vue';

const app = new Vue({
    el: '#app',
    router,
    render:h => h(App)
});

/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
import Vue from 'vue';
import VueRouter from 'vue-router';
Vue.config.debug = true;

window.axios = require('axios');
window.axios.defaults.baseURL = 'api';
axios.defaults.headers.common = {
    'X-CSRF-TOKEN': Laravel.csrfToken,
    'X-Requested-With': 'XMLHttpRequest',
    'Authorization': 'Bearer ' + Laravel.apiToken,
};
console.log('Token', Laravel.apiToken, 'Laravel', Laravel );

import Errors from './classes/Errors';
import Form from './classes/Form';

window.Form = Form;
window.Errors = Errors;
let token = document.head.querySelector('meta[name="csrf-token"]');

if (token) {
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}

import routes from './routes';

const router = new VueRouter({
    mode: 'history',
    root: 'app',
    routes
});
// const router = new VueRouter({
//     routes,
//     linkActiveClass: 'is-active',
//     mode: 'history'
// })
//router.mode = 'html5';

// router.beforeEach(function (to, from, next) {
//     // if (to.meta.adminOnly && ! Suggestive.isAdmin) {
//     //     console.error('Going to Admin Only');
//     //     return next(false);
//     // }
//     //
//     // if (to.path == '/' && Suggestive.isAdmin) {
//     //     return next('/admin-dashboard');
//     // }
//
//     // Catch vue-router bug
//     if (to.path == '') {
//         return next('/');
//     }
//
//     return next();
// });
Vue.use(VueRouter);
console.log('sassss');
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

//EVENTING SYSTEM
//this.$root.$emit or this.$root.$on, that is the same thing of instantiate Vue as an Event.
window.EventBus = new Vue();

//main instance
var App = new Vue({

    router,

}).$mount("#app");


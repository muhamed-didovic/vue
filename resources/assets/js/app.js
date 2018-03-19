/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */


require('./bootstrap');
import router from './routes';
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

//EVENTING SYSTEM
//this.$root.$emit or this.$root.$on, that is the same thing of instantiate Vue as an Event.
window.EventBus = new Vue();

//main instance
const app = new Vue({
    el: '#app',
    //important rule to use routes
    router,
    mounted() {
        console.log('main mounted');
    }
});

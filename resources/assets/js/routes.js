// "use strict";
//
// import Vue from 'vue'
// import Router from 'vue-router'
//
// Vue.use(Router)
//
// let routes = [

// ];
// //
// // export default new VueRouter({
// //     hashbang: false,
// //     //abstract: true,
// //     history: true,
// //     mode: 'html5',
// //     //linkActiveClass: 'active',
// //     transitionOnLoad: true,
// //     root: '/'
// //     routes,
// //     linkActiveClass: 'is-active'
// //});
//
// let router = new VueRouter({
//     mode: 'history', //removes # (hashtag) from url
//     base: '/',
//     fallback: true, //router should fallback to hash (#) mode when the browser does not support history.pushState
//     // routes: [
//     //     { path: '*', require('../components/pages/NotFound.vue') },
//     //
//     // ]
//     routes
// })
// export default router

export default [
    //{ path: '*', component: require('./views/NothingView')},
    {
        path: '/modal',
        name: 'Modal',
        component: require('./views/ModalView')
    },

    {
        path: '/todo',
        name: 'todo',
        component: require('./views/TodoView')
    },
    {
        path: '/example',
        name: 'Example',
        component: require('./views/ExampleView')
    },
    {
        path: '/scoped-slot',
        component: require('./views/ScopedSlotView')
    },
    {
        path: '/custom-input',
        component: require('./views/CustomInputView')
    },
    {
        path: '/shared',
        component: require('./views/SharedView')
    },
    {
        path: '/forms',
        component: require('./views/FormsView')
    },
    {
        path: '/tasks',
        component: require('./views/TasksView')
    },
    {
        path: '/tabs',
        component: require('./views/TabsView')
    },
    {
        path: '/coupon',
        component: require('./views/CouponView')
    },
    {
        path: '/named',
        component: require('./views/NamedSlotView')
    },
    {
        path: '/stream',
        name: 'Stream',
        component: require('./views/StreamView')
    },
    {
        path: '/progress',
        component: require('./views/ProgressView')
    },
];
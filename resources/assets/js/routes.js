"use strict";

import VueRouter from 'vue-router';

let routes = [
    {
        path: '/modal',
        component: require('./views/ModalView')
    },

    {
        path: '/todo',
        component: require('./views/TodoView')
    },
    //
    // {
    //     path: '/contact',
    //     component: require('./views/Contact')
    // }
];

export default new VueRouter({
    routes,
    linkActiveClass: 'is-active'
});
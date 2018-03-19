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
    {
        path: '/example',
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
        path: '/progress',
        component: require('./views/ProgressView')
    },
];

export default new VueRouter({
    routes,
    linkActiveClass: 'is-active'
});
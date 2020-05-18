import Vue from 'vue';
import VueRouter from 'vue-router';

// ROUTES
import Home from '../pages/Home';
import AppLayout from '../layouts/AppLayout';
import Blog from '../pages/Posts/index';

Vue.use(VueRouter);

const routes = [
    {
        path: '/',
        component: AppLayout,
        children: [
            {
                path: '/',
                component: Home,
                name: 'homePage',

            },
            {
                path: '/blog',
                component: Blog,
                name: 'blogPage'
            }
        ]   
    },
];

const router = new VueRouter({
    mode: 'history',
    base: process.env.BASE_URL,
    routes
});

export default router
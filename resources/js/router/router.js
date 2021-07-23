import VueRouter from 'vue-router';
import {
    HomePage,
} from '../app/pages/index';

const routes = [
    {
        path: '/',
        alias: '/',
        component: HomePage,
        name: 'home',
        props: route => ({rSlug: route.params.slug}),
    },
]

const mode = 'history';
const router = new VueRouter({
    routes,
    mode,
});

router.beforeEach((to, from, next) => {
    next();
})

export default router;

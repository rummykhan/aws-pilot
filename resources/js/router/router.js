import VueRouter from 'vue-router';
import {
    HomePage,
    EnvironmentPage,
    ProjectPage,
} from '../app/pages/index';

import * as URL from "../app/network/urls/urls";

const routes = [
    {
        path: URL.URL_HOME.url,
        component: HomePage,
        name: URL.URL_HOME.name,
        //props: route => ({name: route.params.slug}),
    },
    {
        path: URL.URL_ENV.url,
        component: EnvironmentPage,
        name: URL.URL_ENV.name,
        //props: route => ({name: route.params.slug}),
    },
    {
        path: URL.URL_PROJECTS_LIST.url,
        component: ProjectPage,
        name: URL.URL_PROJECTS_LIST.name,
        //props: route => ({name: route.params.slug}),
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

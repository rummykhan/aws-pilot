const APP_URL = window.SETTING_APP_URL;
const BASE_URL = window.SETTING_BASE_URL;

const decorateUrlWithLocale = (url) => {
    return `${url}?app_locale=${window.locale}`;
};

const makeUrl = (slug, url) => {
    return decorateUrlWithLocale(`${BASE_URL}/${slug}${url}`);
}

const routeUrl = (url, name) => {
    return {
        url,
        name
    };
}

const URL_HOME = routeUrl('/', 'home');
const URL_ENV = routeUrl('/environments/index', 'list-environments');
const URL_PROJECTS_LIST = routeUrl('/projects/index', 'list-projects');

export {
    makeUrl,
    BASE_URL,
    APP_URL,
    URL_PROJECTS_LIST,
    URL_HOME,
    URL_ENV,
}

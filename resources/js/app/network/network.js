import Api from "./api/api";
import {
    makeUrl,
    URL_HOME
} from "./urls/urls";

const helloWorldGet = (slug) => {
    return Api.get(makeUrl(slug, URL_HOME));
}

const helloWorldPost = (slug, data) => {
    return Api.post(makeUrl(slug, URL_HOME), data);
}

export {
    helloWorldGet,
    helloWorldPost
};

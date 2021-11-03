import Entity from "./entity";
import {ModelTypes} from "./data";


/**
 *
 * @property {string} type
 * @property {string} permissionFilePath
 * @property {string} loginUser
 *
 * @property {string} environmentId
 *
 * @property {WebServer} items
 *
 */
class Server extends Entity {

    hasOne() {
        return {
            'webServer': ModelTypes.MODEL_TYPE_WEB_SERVER,
        };
    }
}

export default Server;

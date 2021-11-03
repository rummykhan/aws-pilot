import Entity from "./entity";
import {ModelTypes} from "./data";

/**
 *
 * @property {string} name
 * @property {string} stage
 *
 * @property {Server[]} servers
 * @property {Project[]} projects
 *
 */
class Environment extends Entity {

    hasMany() {
        return {
            'servers': ModelTypes.MODEL_TYPE_SERVER,
            'projects': ModelTypes.MODEL_TYPE_PROJECT,
        }
    }
}

export default Environment;

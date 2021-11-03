import Entity from "./entity";
import {ModelTypes} from "./data";

/**
 *
 * @property {string} name
 * @property {string} environmentId
 *
 * @property {Server[]} servers
 *
 */
class Project extends Entity {

    hasOne() {
        return {
            'syncLink': ModelTypes.MODEL_TYPE_SYNC_LINK
        };
    }

    hasMany() {
        return {
            'workspaces': ModelTypes.MODEL_TYPE_WORKSPACE,
        }
    }
}

export default Project;

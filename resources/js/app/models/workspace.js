import Entity from "./entity";
import {ModelTypes} from "./data";

/**
 * @property {string} type
 * @property {string} serverId
 * @property {string} projectId
 *
 * @property {string} name
 * @property {string} workingDirectory
 * @property {string} gitId
 *
 * @property {Server} server
 * @property {Git} git
 *
 */
class Workspace extends Entity {

    hasOne() {
        return {
            'git': ModelTypes.MODEL_TYPE_GIT,
            'server': ModelTypes.MODEL_TYPE_SERVER,
        };
    }
}

export default Workspace;

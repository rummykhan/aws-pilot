import Base from "./base";

/**
 * @property id
 *
 * @property created_at
 * @property updated_at
 */
class Entity extends Base {

    getId() {
        return this.id;
    }

    /** Model helper methods */
    fromNow() {
        return moment(this.created_at).fromNow();
    }

    getCreatedAt() {
        return moment(this.created_at).format('YY-MM-DD HH:mm:ss');
    }
}

export default Entity;

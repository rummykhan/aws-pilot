import ModelHelper from "../../utility/ModelHelper";

class Base {

    constructor(attributes) {

        for (let key in attributes) {
            this[key] = attributes[key];
        }

        this['original'] = attributes;

        this.hasOneRelations = this.hasOne();
        this.hasManyRelations = this.hasMany();

        this.loadRelations();
    }

    /** Relations */
    hasOne() {
        return {};
    }

    hasMany() {
        return {};
    }


    /** Base class to load relations */
    loadRelations() {
        this.__loadRelations();
    }

    __loadRelations() {

        this.__loadHasOneRelations();
        this.__loadHasManyRelations();
    }

    __loadHasOneRelations() {

        if (!this.hasOwnProperty('hasOneRelations')) {
            return;
        }

        for (let key in this['hasOneRelations']) {

            // if model has this key as relation..
            if (!this.hasOwnProperty(key)) {
                continue;
            }

            this.__loadHasOneRelation(this, this['hasOneRelations'], key);
        }
    }

    __loadHasOneRelation(object, hasOneRelations, key) {
        this[key] = ModelHelper.jsonToEntity(object[key], hasOneRelations[key]);
    }

    __loadHasManyRelations() {
        if (!this.hasOwnProperty('hasManyRelations')) {
            return;
        }

        for (let key in this['hasManyRelations']) {

            // if model has this key as relation..
            if (!this.hasOwnProperty(key)) {
                continue;
            }

            this.__loadHasManyRelation(this, this['hasManyRelations'], key);
        }
    }

    __loadHasManyRelation(object, hasManyRelations, key) {
        this[key] = ModelHelper.jsonToEntities(object[key], hasManyRelations[key]);
    }

}

export default Base;

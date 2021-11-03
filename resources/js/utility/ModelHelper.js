import {ModelTypes} from "./data";
import {Customer, Order, Store, Seller, PickUpPerson, ShippingAddress, OrderItem} from '../models/index';

class ModelHelper {

    static jsonToEntities(dataModels, modelType) {

        const models = [];
        for (let i = 0; i < dataModels.length; i++) {

            const model = ModelHelper.jsonToEntity(dataModels[i], modelType);

            if (null === model) {
                continue;
            }

            models.push(model);

        }
        return models;
    }

    static jsonToEntity(dataModel, modelType) {

        switch (modelType) {

            case ModelTypes.MODEL_TYPE_ORDER:
                return ModelHelper.createOrder(dataModel);

            case ModelTypes.MODEL_TYPE_CUSTOMER:
                return ModelHelper.createCustomer(dataModel);

            case ModelTypes.MODEL_TYPE_STORE:
                return ModelHelper.createStore(dataModel);

            case ModelTypes.MODEL_TYPE_SELLER:
                return ModelHelper.createSeller(dataModel);

            case ModelTypes.MODEL_TYPE_PICK_UP_PERSON:
                return ModelHelper.createPickUpPerson(dataModel);

            case ModelTypes.MODEL_TYPE_SHIPPING_ADDRESS:
                return ModelHelper.createShippingAddress(dataModel);

            case ModelTypes.MODEL_TYPE_ORDER_ITEM:
                return ModelHelper.createOrderItem(dataModel);
        }

        return null;
    }

    static createOrder(attributes) {
        return new Order(attributes);
    }

    static createCustomer(attributes) {
        return new Customer(attributes);
    }

    static createStore(attributes) {
        return new Store(attributes);
    }

    static createSeller(attributes) {
        return new Seller(attributes);
    }

    static createPickUpPerson(attributes) {
        return new PickUpPerson(attributes);
    }

    static createShippingAddress(attributes) {
        return new ShippingAddress(attributes);
    }

    static createOrderItem(attributes) {
        return new OrderItem(attributes);
    }
}

export default ModelHelper;

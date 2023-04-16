var config = {
    "map": {
        "*": {
            questionReview : 'Candela_OrderAttributes/js/question-review'
        }
    },
    config: {
        mixins: {
            'Magento_Paypal/js/order-review': {
                'Candela_OrderAttributes/js/mixin/order-review-mixin': true
            },
            'Magento_Checkout/js/model/shipping-save-processor/payload-extender': {
                'Candela_OrderAttributes/js/model/shipping-save-processor/payload-extender-mixin': true
            },
            'Magento_Checkout/js/view/shipping': {
                'Candela_OrderAttributes/js/view/shipping-mixin': true
            }
        }
    }
};

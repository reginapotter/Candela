define([
    'jquery',
    'uiComponent',
    'Magento_Ui/js/form/element/abstract',
    'Magento_Ui/js/lib/validation/validator',
    'Magento_Ui/js/form/element/select'
], function ($, Component, Abstract, validator, Select) {
    'use strict';

    return Select.extend({
        defaults: {
            template: 'Candela_OrderAttributes/attributes-block',
            candela_options: checkoutConfig.attributes.requiredFirst,
            candela_options_two: checkoutConfig.attributes.requiredSecond,
            candela_options_three: checkoutConfig.attributes.requiredThird,
            optionsFirst: '',
            optionsSecond: '',
            optionsThird: ''
        },

        initialize: function () {
            this._super();
            return this;
        },


        initObservable: function () {

            this._super()
                .observe([
                    'candela_options',
                    'candela_options_two',
                    'candela_options_three'
                ]);
            return this;
        },

        getEnabled: function () {
            return window.checkoutConfig.attributes.enabled;
        },

        getArea: function () {
            return window.checkoutConfig.attributes.area;
        },

        getFirstRequired: function () {
            let required = window.checkoutConfig.attributes.requiredFirst;
            let intRequired= parseInt(required);
            if (intRequired === 1) {
                return intRequired;
            }
        },
        getSecondRequired: function () {
            let required = window.checkoutConfig.attributes.requiredSecond;
            let intRequired= parseInt(required);
            if (intRequired === 1) {
                return intRequired;
            }
        },
        getThirdRequired: function () {
            let required = window.checkoutConfig.attributes.requiredThird;
            let intRequired= parseInt(required);
            if (intRequired === 1) {
                return intRequired;
            }
        },
        getFirstQuestion: function () {
            return window.checkoutConfig.attributes.firstQuestion;
        },
        getSecondQuestion: function () {
            return window.checkoutConfig.attributes.secondQuestion;
        },
        getThirdQuestion: function () {
            return window.checkoutConfig.attributes.thirdQuestion;
        },
        getFirstOptions: function () {
            return _.map(window.checkoutConfig.attributes.optionsFirst, function (value, key) {
                return {
                    'value': key,
                    'label': value
                }
            });
        },
        getSecondOptions: function () {
            return _.map(window.checkoutConfig.attributes.optionsSecond, function (value, key) {
                return {
                    'value': key,
                    'label': value
                }
            });
        },
        getThirdOptions: function () {
            return _.map(window.checkoutConfig.attributes.optionsThird, function (value, key) {
                return {
                    'value': key,
                    'label': value
                }
            });
        },
        afterRender: function () {
            if (this.getFirstRequired() === 1) {
                $('#candela_options').on('change', function() {
                    var customer_class = $(this).find(":selected").val(),
                        error = $('#error-message-one');
                    if (customer_class === '') {
                        error.html('This is a required field.');
                        $('#candela_options').focus();
                        error.show();
                    } else {
                        error.hide();
                    }
                });
            }
        },
        afterRenderSecond: function () {
            if (this.getSecondRequired() === 1) {
                $('#candela_options_two').on('change', function () {
                    var customer_class = $(this).find(":selected").val(),
                        error = $('#error-message-two');
                    if (customer_class === '') {
                        error.html('This is a required field.');
                        $('#candela_options_two').focus();
                        error.show();
                    } else {
                        error.hide();
                    }
                });
            }
        },
        afterRenderThird: function () {
            if (this.getThirdRequired() === 1) {
                $('#candela_options_three').on('change', function () {
                    var customer_class = $(this).find(":selected").val(),
                        error = $('#error-message-three');
                    if (customer_class === '') {
                        error.html('This is a required field.');
                        $('#candela_options_three').focus();
                        error.show();
                    } else {
                        error.hide();
                    }
                });
            }
        }
    });
});

/**
 *
 * moved the code from view/frontend/web/js/model/shipping-save-processor/default.js in the older version
 * into this payload extender to avoid conflict with other modules
 */
 /*global define,alert*/
define([
    'jquery',
    'mage/utils/wrapper'
], function(
    $, wrapper
) {
    'use strict';

    return function (payloadExtender) {
        return wrapper.wrap(payloadExtender, function (originalAction, payload) {
            payload = originalAction(payload);

            let firstQuestion = window.checkoutConfig.attributes.firstQuestion;
            let secondQuestion = window.checkoutConfig.attributes.secondQuestion;
            let thirdQuestion = window.checkoutConfig.attributes.thirdQuestion;
            let candela_options = $('#candela_options').val();
            let candela_options_two = $('#candela_options_two').val();
            let candela_options_three = $('#candela_options_three').val();

            if (firstQuestion) {
                let extend = {
                    'candela_question': firstQuestion,
                    'candela_question_two': secondQuestion,
                    'candela_question_three': thirdQuestion,
                    'candela_options': candela_options,
                    'candela_options_two': candela_options_two,
                    'candela_options_three': candela_options_three,
                };

                payload.addressInformation.extension_attributes = _.extend(
                    payload.addressInformation.extension_attributes,
                    extend
                );
            }

            return payload;
        });
    };
});

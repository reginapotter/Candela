define([
    'jquery',
    'Magento_Ui/js/form/element/abstract',
    'Candela_Blog/js/tag-it-custom'
], function (jQuery, Abstract) {
    'use strict';

    return Abstract.extend({
        initialize: function () {
            this._super();
            var allTags = this.tags, input = "input[name='" + this.inputName + "']";
            jQuery.async(input, (function(){
                jQuery(input).tagit({
                    availableTags: allTags
                });
            }));

            return this;
        }
    });
});

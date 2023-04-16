define(['jquery'], function($) {
    'use strict';
    return function(widget) {
        $.widget('mage.orderReview', widget, {
            _submitOrder: function() {
                var first_required = $('#candela_options_0').prop('required');
                var second_required = $('#candela_options_1').prop('required');
                var third_required = $('#candela_options_2').prop('required');

                if ($('#field_div_0').length) {
                    var selected_value = $('#candela_options_0').val();
                    var error = $('#error_message_0');
                    if (selected_value.length === 0 && first_required === true) {
                        error.html('This field is required');
                        error.show();
                        $('#candela_options_0').focus();
                        return false;
                    } else {
                        error.hide();
                    }
                }
                if ($('#field_div_1').length) {
                    var selected_value = $('#candela_options_1').val();
                    var error = $('#error_message_1');
                    if (selected_value.length === 0 && second_required === true) {
                        error.html('This field is required');
                        error.show();
                        $('#candela_options_1').focus();
                        return false;
                    } else {
                        error.hide();
                    }
                }
                if ($('#field_div_2').length) {
                    var selected_value = $('#candela_options_2').val();
                    var error = $('#error_message_2');
                    if (selected_value.length === 0 && third_required === true) {
                        error.html('This field is required');
                        error.show();
                        $('#candela_options_2').focus();
                        return false;
                    } else {
                        error.hide();
                    }
                }
                if (this._validateForm()) {
                    this.element.find(this.options.updateOrderSelector).fadeTo(0, 0.5).end().find(this.options.waitLoadingContainer).show().end().submit();
                    this._updateOrderSubmit(true);
                }
            }
        });
        return $.mage.orderReview;
    }
});

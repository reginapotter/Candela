/**
 *
 */
define([
    'jquery'
], function($) {
    'use strict';
    $.widget('mage.questionReview', {

        _create: function () {

            var url = $('#question-fields-form').attr('action');

            if ($('#field_div_0').length) {
                $('.select_question_0').change(function () {
                    var selectedVal = $(this).children('option:selected').val();
                    var selectedOption = $(this).children('option:selected').text();
                    setTimeout(function () {
                        var error = $('#error_message_0');
                        var first_required = $('#candela_options_0').prop('required');
                        if (selectedVal.length === 0 && first_required === true) {
                            error.html('This field is required');
                            error.show();
                        } else {
                            error.hide();
                            var first_question = $('#question_title_0').text();
                            jQuery.ajax({
                                url: url,
                                type: 'POST',
                                data: {first_question: first_question, first_option: selectedOption},
                                showLoader: true,
                                cache: false,
                            });
                        }
                    }, 30);
                    return false;
                });
            }

            if ($('#field_div_1').length) {
                $('.select_question_1').change(function () {
                    var selectedVal = $(this).children('option:selected').val();
                    var selectedOption = $(this).children('option:selected').text();
                    setTimeout(function () {
                        var error = $('#error_message_1');
                        var second_required = $('#candela_options_1').prop('required');
                        if (selectedVal.length === 0 && second_required === true) {
                            error.html('This field is required');
                            error.show();
                        } else {
                            error.hide();
                            var second_question = $('#question_title_1').text();
                            jQuery.ajax({
                                url: url,
                                type: 'POST',
                                data: {second_question: second_question, second_option: selectedOption},
                                showLoader: true,
                                cache: false,
                            });
                        }
                    }, 30);
                    return false;
                });
            }

            if ($('#field_div_2').length) {
                $('.select_question_2').change(function () {
                    var selectedVal = $(this).children('option:selected').val();
                    var selectedOption = $(this).children('option:selected').text();

                    setTimeout(function () {
                        var error = $('#error_message_2');
                        var third_required = $('#candela_options_2').prop('required');
                        if (selectedVal.length === 0 && third_required === true) {
                            error.html('This field is required');
                            error.show();
                        } else {
                            error.hide();
                            var third_question = $('#question_title_2').text();
                            jQuery.ajax({
                                url: url,
                                type: 'POST',
                                data: {third_question: third_question, third_option: selectedOption},
                                showLoader: true,
                                cache: false,
                            });
                        }
                    }, 30);
                    return false;
                });
            }
        }
    });
    return $.mage.questionReview;
});

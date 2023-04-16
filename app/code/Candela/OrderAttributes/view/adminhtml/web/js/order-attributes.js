/**
 *
 */
define([
    'jquery',
    'jquery/ui',
], function ($) {
    'use strict';

    $.widget('mage.orderAttributes', {

        _create: function () {

            var saveUrl = this.options.url;

            if ($("#field_div_0").length) {
                $(".select_question_0").change(function () {
                    var selectedOption = $(this).children("option:selected").text();
                    var selectedVal = $(this).children("option:selected").val();
                    var first_question = $("#question_title_0").text();
                    jQuery.ajax({
                        url: saveUrl,
                        type: "POST",
                        data: {first_question: first_question, first_option: selectedOption},
                        showLoader: true,
                        cache: false,
                    });
                    if (selectedVal.length !== 0) {
                        $('.submit-button').prop("disabled", false);
                        $('.submit-button').removeClass("disabled");
                    }
                });
            }

            if ($("#field_div_1").length) {
                $(".select_question_1").change(function () {
                    var selectedOption = $(this).children("option:selected").text();
                    var selectedVal = $(this).children("option:selected").val();
                    var second_question = $("#question_title_1").text();
                    jQuery.ajax({
                        url: saveUrl,
                        type: "POST",
                        data: {second_question: second_question, second_option: selectedOption},
                        showLoader: true,
                        cache: false,
                    });
                    if (selectedVal.length !== 0) {
                        $('.submit-button').prop("disabled", false);
                        $('.submit-button').removeClass("disabled");
                    }
                });
            }

            if ($("#field_div_2").length) {
                $(".select_question_2").change(function () {
                    var selectedOption = $(this).children("option:selected").text();
                    var selectedVal = $(this).children("option:selected").val();
                    var third_question = $("#question_title_2").text();
                    jQuery.ajax({
                        url: saveUrl,
                        type: "POST",
                        data: {third_question: third_question, third_option: selectedOption},
                        showLoader: true,
                        cache: false,
                    });
                    if (selectedVal.length !== 0) {
                        $('.submit-button').prop("disabled", false);
                        $('.submit-button').removeClass("disabled");
                    }
                });
            }
        }
    });
    return $.mage.orderAttributes;
});

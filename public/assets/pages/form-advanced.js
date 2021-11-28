/*
 Template Name: Veltrix - Responsive Bootstrap 4 Admin Dashboard
 Author: Themesbrand
 File: Form Advanced Components Init
 */



!function($) {
    "use strict";

    var AdvancedForm = function() {};
    
    AdvancedForm.prototype.init = function() {
        //creating various controls

        //colorpicker start
        $('.colorpicker-default').colorpicker({
            format: 'hex'
        });
        $('.colorpicker-rgba').colorpicker();

        $('#colorpicker-horizontal').colorpicker({
            color: "#88cc33",
            horizontal: true
        });
        $('#colorpicker-color-pattern').colorpicker({
            colorSelectors: {
                'black': '#000000',
                'white': '#ffffff',
                'red': '#FF0000',
                'default': '#777777',
                'primary': '#337ab7',
                'success': '#5cb85c',
                'info': '#5bc0de',
                'warning': '#f0ad4e',
                'danger': '#d9534f'
            }
        });

        $('.colorpicker-large').colorpicker({
            customClass: 'colorpicker-2x',
            sliders: {
                saturation: {
                    maxLeft: 200,
                    maxTop: 200
                },
                hue: {
                    maxTop: 200
                },
                alpha: {
                    maxTop: 200
                }
            }
        });

        // Date Picker
        jQuery('#datepicker').datepicker();
        jQuery('#datepicker-inline').datepicker();
        jQuery('#datepicker-multiple').datepicker({
            numberOfMonths: 3,
            showButtonPanel: true
        });
        
        jQuery('#datepicker').datepicker();
        jQuery('#datepicker-autoclose').datepicker({
            autoclose: true,
            todayHighlight: true
        });
        jQuery('#datepicker-multiple-date').datepicker({
            format: "mm/dd/yyyy",
            clearBtn: true,
            multidate: true,
            multidateSeparator: ","
        });
        jQuery('#date-range').datepicker({
            toggleActive: true
        });

        //Bootstrap-MaxLength
        $('input#defaultconfig').maxlength({
            warningClass: "badge badge-info",
            limitReachedClass: "badge badge-warning"
        });

        $('input#thresholdconfig').maxlength({
            threshold: 20,
            warningClass: "badge badge-info",
            limitReachedClass: "badge badge-warning"
        });

        $('input#moreoptions').maxlength({
            alwaysShow: true,
            warningClass: "badge badge-success",
            limitReachedClass: "badge badge-danger"
        });

        $('input#alloptions').maxlength({
            alwaysShow: true,
            warningClass: "badge badge-success",
            limitReachedClass: "badge badge-danger",
            separator: ' out of ',
            preText: 'You typed ',
            postText: ' chars available.',
            validate: true
        });

        $('textarea#textarea').maxlength({
            alwaysShow: true,
            warningClass: "badge badge-info",
            limitReachedClass: "badge badge-warning"
        });

        $('input#placement').maxlength({
            alwaysShow: true,
            placement: 'top-left',
            warningClass: "badge badge-info",
            limitReachedClass: "badge badge-warning"
        });

        //Bootstrap-TouchSpin
        $(".vertical-spin").TouchSpin({
            verticalbuttons: true,
            verticalupclass: 'ion-plus-round',
            verticaldownclass: 'ion-minus-round',
            buttondown_class: 'btn btn-primary',
            buttonup_class: 'btn btn-primary'
        });

        $("input[name='demo1']").TouchSpin({
            min: 0,
            max: 100,
            step: 0.1,
            decimals: 2,
            boostat: 5,
            maxboostedstep: 10,
            postfix: '%',
            buttondown_class: 'btn btn-primary',
            buttonup_class: 'btn btn-primary'
        });
        $("input[name='demo2']").TouchSpin({
            min: -1000000000,
            max: 1000000000,
            stepinterval: 50,
            maxboostedstep: 10000000,
            prefix: '$',
            buttondown_class: 'btn btn-primary',
            buttonup_class: 'btn btn-primary'
        });
        $("input[name='demo3']").TouchSpin({
            buttondown_class: 'btn btn-primary',
            buttonup_class: 'btn btn-primary'
        });
        $("input[name='demo3_21']").TouchSpin({
            initval: 40,
            buttondown_class: 'btn btn-primary',
            buttonup_class: 'btn btn-primary'
        });
        $("input[name='demo3_22']").TouchSpin({
            initval: 40,
            buttondown_class: 'btn btn-primary',
            buttonup_class: 'btn btn-primary'
        });

        $("input[name='demo5']").TouchSpin({
            prefix: "pre",
            postfix: "post",
            buttondown_class: 'btn btn-primary',
            buttonup_class: 'btn btn-primary'
        });
        $("input[name='demo0']").TouchSpin({
            buttondown_class: 'btn btn-primary',
            buttonup_class: 'btn btn-primary'
        });

        // Select2
        $(".select2").select2();

        $(".select2-limiting").select2({
            maximumSelectionLength: 2
        });
    },
    //init
    $.AdvancedForm = new AdvancedForm, $.AdvancedForm.Constructor = AdvancedForm
}(window.jQuery),

//initializing
function ($) {
    "use strict";
    $.AdvancedForm.init();
}(window.jQuery);
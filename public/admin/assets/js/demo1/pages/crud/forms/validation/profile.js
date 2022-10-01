// Class definition

var KTFormControls = function () {
    // Private functions
    
    var demo1 = function () {
        $( "#kt_form_1" ).validate({
            // define validation rules
            rules: {
                user_name: {
                    required: true 
                },
                mobile_number: {
                    required: true,
                    digits: true,
                    minlength: 10,
                    maxlength: 10
                },
                phone_number: {
                    required: false,
                    digits: true,
                    minlength: 10,
                    maxlength: 10
                },
                email: {
                    required: true,
                    email: true,
                },
                gender: {
                    required: true,
                },
                age: {
                    required: true,
                    digits: true,
                    minlength: 1,
                    maxlength: 3
                },
                country_code: {
                    required: true,
                    digits: true
                },
                country_code_info: {
                    required: true
                },
            },
            
            //display error alert on form submit  
            invalidHandler: function(event, validator) {     
                var alert = $('#kt_form_1_msg');
                alert.removeClass('kt--hide').show();
                KTUtil.scrollTop();
            },

            submitHandler: function (form) {
                form[0].submit(); // submit the form
            }
        });       
    }

    var demo2 = function () {
        $( "#kt_form_2" ).validate({
            // define validation rules
            rules: {
                current_password: {
                    required: true 
                },
                new_password: {
                    required: true,
                    minlength: 8
                },
                confirm_password: {
                    required: true,
                    equalTo: new_password,
                    minlength: 8
                }
            },
            
            //display error alert on form submit  
            invalidHandler: function(event, validator) {     
                var alert = $('#kt_form_1_msg');
                alert.removeClass('kt--hide').show();
                KTUtil.scrollTop();
            },

            submitHandler: function (form) {
                form[0].submit(); // submit the form            
            }
        });       
    }

    return {
        // public functions
        init: function() {
            demo1(); 
            demo2();
        }
    };
}();

jQuery(document).ready(function() {    
    KTFormControls.init();
});
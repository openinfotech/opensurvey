var FormValidation = function() {


    // validation using icons
    var handleValidation2 = function() {
        // for more info visit the official plugin documentation: 
        // http://docs.jquery.com/Plugins/Validation

        var form2 = $('#create_survey');
        var error2 = $('.alert-danger', form2);
        var success2 = $('.alert-success', form2);

        form2.validate({
            errorElement: 'span', //default input error message container
            errorClass: 'help-block help-block-error', // default input error message class
            focusInvalid: false, // do not focus the last invalid input
            ignore: "", // validate all fields including form hidden input
            rules: {
                Title: {
                    minlength: 2,
                    required: true
                },
                Description: {
                    minlength: 2,
                    required: true
                },
                Survey_Category: {
                    required: true,
                },
                Template: {
                    required: true,
                },
                Language: {
                    required: true,
                }
            },
            invalidHandler: function(event, validator) { //display error alert on form submit              
                success2.hide();
                error2.show();
                Metronic.scrollTo(error2, -200);
            },
            errorPlacement: function(error, element) { // render error placement for each input type
                var icon = $(element).parent('.input-icon').children('i');
                icon.removeClass('fa-check').addClass("fa-warning");
                icon.attr("data-original-title", error.text()).tooltip({'container': 'body'});
            },
            highlight: function(element) { // hightlight error inputs
                $(element)
                        .closest('.form-group').removeClass("has-success").addClass('has-error'); // set error class to the control group   
            },
            unhighlight: function(element) { // revert the change done by hightlight

            },
            success: function(label, element) {
                var icon = $(element).parent('.input-icon').children('i');
                $(element).closest('.form-group').removeClass('has-error').addClass('has-success'); // set success class to the control group
                icon.removeClass("fa-warning").addClass("fa-check");
            },
            submitHandler: function(form) {


//                $.post(
//                        'http://localhost/opensurvey/public/survey/create',
//                        form.serialize(),
//                        function(data) {
//                            //do something with data/response returned by server
//                            console.log(data);
//                        },
//                        'json'
//                        );



                success2.show();
                error2.hide();
            }
        });
        form2.submit(function(event) {

            $.ajax({
                type: "POST",
                url: form2.attr('action'),
                data: form2.serialize(),
                cache: false,
                success: function(Data) {
                    if (Data.success == '1')
                    {
                        window.location = Data.Redirect_URL;
//                        var icon = $('input').parent('.input-icon').children('i');
//                        $('input').closest('.form-group').removeClass('has-error').addClass('has-success'); // set success class to the control group
//                        icon.removeClass("fa-warning").addClass("fa-check");
//
//                        var icon = $('textarea').parent('.input-icon').children('i');
//                        $('textarea').closest('.form-group').removeClass('has-error').addClass('has-success'); // set success class to the control group
//                        icon.removeClass("fa-warning").addClass("fa-check");
//
//                        success2.find('p').show();
//                        error2.hide();
                    } else {
                        if (Data.Title != '')
                        {
                            var icon = $('#Title').parent('.input-icon').children('i');
                            icon.removeClass('fa-check').addClass("fa-warning");
                            icon.attr("data-original-title", Data.Title).tooltip({'container': 'body'});
                            $('#Title').closest('.form-group').removeClass("has-success").addClass('has-error'); // set error class to the control group   

                            success2.hide();
                            error2.show();
                        }
                        if (Data.Description != '')
                        {
                            var icon = $('#Description').parent('.input-icon').children('i');
                            icon.removeClass('fa-check').addClass("fa-warning");
                            icon.attr("data-original-title", Data.Title).tooltip({'container': 'body'});
                            $('#Description').closest('.form-group').removeClass("has-success").addClass('has-error'); // set error class to the control group   

                            success2.hide();
                            error2.show();
                        }
                    }
                    console.log(Data);
                }
            });
            event.preventDefault();
            return false;
        });

    }


    var handleWysihtml5 = function() {
        if (!jQuery().wysihtml5) {

            return;
        }

        if ($('.wysihtml5').size() > 0) {
            $('.wysihtml5').wysihtml5({
                "stylesheets": ["assets/global/plugins/bootstrap-wysihtml5/wysiwyg-color.css"]
            });
        }
    }

    return {
        //main function to initiate the module
        init: function() {

            handleWysihtml5();
            handleValidation2();

        }

    };

}();
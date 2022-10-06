var Service = function () {

    var initAdd = function () {
        $("#kt_form_1").submit(function(e) {
            e.preventDefault();
        }).validate({
            rules: {
                title:{
                    required: true,
                },
                slug:{
                    required: true,
                },
            },
            submitHandler: function(form) {
                form.submit();
            }
        });

        //CKEditorInit();
        $('[type="file"]').dropify();
        //Done
        $("body").on("click", ".app-development-btn-remove", function() {
            $(this).parents(".hide_app_development").remove();
        });
        // remove Servce app  filde data

        $("body").on("click", ".service-btn-remove", function() {
            $(this).parents(".hide_service").remove();
        });

         // remove FAQ filde data
        $("body").on("click", ".faq-btn-remove", function() {
            $(this).parents(".hide_faq").remove();
        });


    };

    var initEdit = function () {
        $("#kt_form_1").submit(function(e) {
            e.preventDefault();
        }).validate({
            rules: {
                title:{
                    required: true,
                },
                slug:{
                    required: true,
                },
            },
            submitHandler: function(form) {
                form.submit();
            }
        });

        //CKEditorInit();
        // image uplade file
        $('[type="file"]').dropify();


        $("body").on("click", ".app-development-btn-delete", function() {
            $(this).parents(".delete_app_development").remove();
        });

        // remove Servce app  filde data
        $("body").on("click", ".service-btn-delete", function() {
            $(this).parents(".delete_service").remove();
        });

        $("body").on("click", ".faq-btn-delete", function() {
            $(this).parents(".delete_faq").remove();
        });


        function servicedeleteActoin(id) {
            var dd = $(this).value();
            console.log(dd);
            // $(this).parents(".hide_faq").remove();
            swal.fire({
                title: "Delete?",
                text: "Please ensure and then confirm! ",
                type: "warning",
                showCancelButton: !0,
                confirmButtonText: "Yes",
                cancelButtonText: "No",
                reverseButtons: !0
            }).then(function(e) {
                if (e.value === true) {
                    $.ajax({
                        url: "{{ url('admin/service/serviceapp') }}/" + id,
                        type: "DELETE",
                        data: {
                            _token: "{{ csrf_token() }}"
                        },
                        success: function(data) {
                            if (data.status == 200) {
                                swal.fire({
                                    title: "Deleted !",
                                    text: data.message,
                                    buttonsStyling: true,
                                    confirmButtonText: "Ok",
                                }).then(function(data) {

                                });
                            } else {
                                swal.fire({
                                    title: "Erorrs!",
                                    text: data.message,
                                    buttonsStyling: true,
                                    confirmButtonText: "Ok",
                                })
                            }
                        },
                        error: function(request, message, error) {
                            swal.fire({
                                title: error,
                                text: message,
                                buttonsStyling: true,
                                confirmButtonText: "Ok",
                            })
                        }
                    });
                }
            });

        }

    };

    var datatableInit = function () {

        // deleteSingleData();

        $('#users').DataTable({
            searching: true,
            processing: true,
            ajax: aurl+"service",
            columns: [{
                    data: 'DT_RowIndex'
                },
                {
                    data: 'title',
                    name: 'title',
                },
                {
                    data: 'created_at',
                    name: 'created_at',
                },
                {
                    data: 'status',
                    name: 'status',
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false
                },
            ],
        });
    };

    return{
        initAdd: function () {
            initAdd();
        },
        initEdit: function () {
            initEdit();
        },
        initView: function () {
            datatableInit();
        },


    };
}();


function CKEditorInit() {
    $('.summernote').each(function (i, el) {
        ClassicEditor.create(el, {
            heading: {

            },

            toolbar: {
                items: ['undo','redo','|',
                    'heading','|',
                    'blockQuote','bold','italic','underline','|',
                    'fontSize','bulletedList','numberedList','alignment','outdent','indent','|',
                    'strikethrough','superscript','subscript','|',
                    'fontBackgroundColor','fontColor','|',
                    'link','insertTable','horizontalLine','|',
                    'code','|',
                    'imageUpload',
                    'mediaEmbed' ]
            },
            language: 'en',
            image: {
                toolbar: [
                    'imageTextAlternative',
                    'imageStyle:inline',
                    'imageStyle:block',
                    'imageStyle:side'
                ]
            },
            table: {
                contentToolbar: [
                    'tableColumn',
                    'tableRow',
                    'mergeTableCells'
                ]
            },
            licenseKey: '',
        }).then( editor => {
            editor.ui.view.editable.element.style.height = '200px';
        } )
            .catch( error => {
                console.error( error );
            } );
    })
}

function CKEditInit(){
    ClassicEditor
        .create( document.querySelector( 'textarea.summernote:last-child'),{
            toolbar: {
                items: ['undo','redo','|',
                    'heading','|',
                    'blockQuote','bold','italic','underline','|',
                    'fontSize','bulletedList','numberedList','alignment','outdent','indent','|',
                    'strikethrough','superscript','subscript','|',
                    'fontBackgroundColor','fontColor','|',
                    'link','insertTable','horizontalLine','|',
                    'code','|',
                    'imageUpload',
                    'mediaEmbed' ]
            },
            language: 'en',
            image: {
                toolbar: [
                    'imageTextAlternative',
                    'imageStyle:inline',
                    'imageStyle:block',
                    'imageStyle:side'
                ]
            },
            table: {
                contentToolbar: [
                    'tableColumn',
                    'tableRow',
                    'mergeTableCells'
                ]
            },
            licenseKey: '',
        } )
        .then( editor => {
            editor.ui.view.editable.element.style.height = '200px';
            window.editor = editor;
        } )
        .catch( error => {
            console.log(error);
            console.error( error );
        } );
}



CKEditorInit();

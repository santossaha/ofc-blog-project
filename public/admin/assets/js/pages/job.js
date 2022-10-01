


var JobManagement = function () {

    var initAdd = function () {
        $("#kt_form_1").submit(function(e) {
            e.preventDefault();
        }).validate({
            ignore: [],
            rules: {
                name: {
                    required: true,
                },
                opening: {
                    required: true,
                },
                experience: {
                    required: true,
                },
                skill: {
                    required: true,
                },

            },
            submitHandler: function(form) {
                form.submit();
            }
        });


        // image uplade file
        $('[type="file"]').dropify();

        $('.select').select2();

        //Done
        $("body").on("click", ".app-development-btn-remove", function() {
            $(this).parents(".hide_app_development").remove();
        });

        //Done
        $("body").on("click", ".service-btn-remove", function() {
            $(this).parents(".hide_service").remove();
        });

        // Done
        $("body").on("click", ".faq-btn-remove", function() {
            $(this).parents(".hide_faq").remove();
        });

        // Done
        $("body").on("click", ".expertise-btn-remove", function() {
            $(this).parents(".hide_expertise").remove();
        });

    };

    var initEdit = function () {


        $("body").on("click", ".service-btn-delete", function() {
            $(this).parents(".delete_service").remove();
        });

        $("body").on("click", ".app-development-btn-delete", function() {
            $(this).parents(".delete_app_development").remove();
        });

        $("body").on("click", ".expertise-btn-delete", function() {
            $(this).parents(".delete_expertise").remove();
        });

        $("body").on("click", ".faq-btn-delete", function() {
            $(this).parents(".delete_faq").remove();
        });

    };

    var datatableInit = function () {

        // deleteSingleData();

        var table = $('#users').DataTable({
            searching: true,
            processing: true,
            ajax: aurl+"job-management",
            columns: [
                {
                data: 'DT_RowIndex'
                },
                {
                    data: 'name',
                    name: 'name',
                },
                 {
                     data: 'opening',
                     name: 'opening',
                 },
                {
                    data: 'experience',
                    name: 'experience',
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

    $(document).ready(function() {
        if (document.querySelector('.select') !== null) {
            $('.select').select2();
            $('[type="file"]').dropify();
        }
    });

    CKEditorInit();
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





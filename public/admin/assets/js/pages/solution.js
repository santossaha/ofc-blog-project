


var Solution = function () {

    var initAdd = function () {
        $("#kt_form_1").submit(function(e) {
            e.preventDefault();
        }).validate({
            ignore: [],
            rules: {
                title: {
                    required: true,
                },
                about_description: {
                    required: true,
                    minlength: 10
                },
                second_description: {
                    required: true,
                    minlength: 10
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
        $("body").on("click", ".feature-list-btn-remove", function() {
            $(this).parents(".hide_feature_list").remove();
        });

        //Done
        $("body").on("click", ".solution-btn-remove", function() {
            $(this).parents(".hide_solution").remove();
        });

        // Done
        $("body").on("click", ".faq-btn-remove", function() {
            $(this).parents(".hide_faq").remove();
        });

        // Done
        $("body").on("click", ".screenshot-btn-remove", function() {
            $(this).parents(".hide_screenshot").remove();
        });

    };

    var initEdit = function () {


        $("body").on("click", ".solution-btn-delete", function() {
            $(this).parents(".delete_solution").remove();
        });

        $("body").on("click", ".feature-btn-delete", function() {
            $(this).parents(".delete_feature").remove();
        });

        $("body").on("click", ".screenshot-btn-delete", function() {
            $(this).parents(".delete_screenshot").remove();
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
            // ajax: "{{ route('admin.solution.index') }}",
            ajax: aurl+"solution",
            columns: [
                {
                data: 'DT_RowIndex'
                },
                {
                    data: 'title',
                    name: 'title',
                },
                // {
                //     data: 'title',
                //     name: 'title',
                // },
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

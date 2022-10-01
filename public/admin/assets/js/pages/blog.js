
var Blog = function () {
    var initAdd = function () {
        $("#kt_form_1").submit(function(e) {
            e.preventDefault();
        }).validate({
            rules: {
                title: {
                    required: true,
                },
                slug: {
                    required: true,
                },
                meta_title: {
                    required: true,
                },
                meta_keyword: {
                    required: true,
                },
                meta_description: {
                    required: true,
                },
                meta_robots: {
                    required: true,
                },
                image_title: {
                    required: true,
                },
                image_alt: {
                    required: true,
                },
                front_image_title: {
                    required: true,
                },
                front_image_alt: {
                    required: true,
                },
                publish_date: {
                    required: true,
                },
                publish_by: {
                    required: true,
                },
                description: {
                    required: true,
                },
                'category_id[]': {
                    required: true,
                },
            },
            submitHandler: function(form) {
                form.submit();
            }
        });

        //$('.summernote').summernote({height: 200});

        // image uplade file
    };


    var datatableInit = function () {
        // deleteSingleData();

        $('#users').DataTable({
            searching: true,
            processing: true,
            ajax: aurl+"blog",
            columns: [{
                    data: 'DT_RowIndex'
                },
                {
                    data: 'title',
                    name: 'title',
                },
                {
                    data: 'category',
                    name: 'category',
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
                }],
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
        initView: function () {
            datatableInit();
        },

    };
}();



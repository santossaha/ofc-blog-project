var Testimonial = function () {

    var initAdd = function () {
        $("#kt_form_1").submit(function(e) {
            e.preventDefault();
        }).validate({
            rules: {
                name: {
                    required: true,
                },
                short_title: {
                    required: true,

                },
                description: {
                    required: true,

                },
            },
            submitHandler: function(form) {
                form.submit();
            }
        });
        //Init CkEditer function
        CKEditorInit();
        // image uplade file
        $('[type="file"]').dropify();
    };

    var initEdit = function () {
        $("#kt_form_1").submit(function(e) {
            e.preventDefault();
        }).validate({
            rules: {
                name: {
                    required: true,
                },
                short_title: {
                    required: true,

                },
                description: {
                    required: true,

                },
            },
            submitHandler: function(form) {
                form.submit();
            }
        });

        //Init CkEditer function
        CKEditorInit();
        $('[type="file"]').dropify();

    };

    var datatableInit = function () {

        // deleteSingleData();

        $('#users').DataTable({
            searching: true,
            processing: true,
            // ajax: "{{ route('admin.testimonial.index') }}",
            ajax: aurl+"testimonial",
            columns: [{
                    data: 'DT_RowIndex'
                },
                {
                    data: 'name',
                    name: 'name',
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
                }
            ],
        });
    };

    $(document).ready(function() {
        if (document.querySelector('.select') !== null) {
            $('[type="file"]').dropify();
        }
    });
    //CKEditorInit();
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

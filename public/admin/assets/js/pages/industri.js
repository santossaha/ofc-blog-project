var Industri = function () {

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
                // description: {
                //     required: true,
                // },
                short_description: {
                    required: true,
                },
            },
            submitHandler: function(form) {
                form.submit();
            }
        });

        $('.summernote').summernote({height: 200});
        // image uplade file
        $('[type="file"]').dropify();
    };

    var datatableInit = function () {
        
        // deleteSingleData();

        var table = $('#users').DataTable({
            searching: true,
            processing: true,
            ajax: aurl+'industri',
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
        initView: function () {
            datatableInit();
        },

    };
}();
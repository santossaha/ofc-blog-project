var Page = function () {

    var initAddEdit = function () {
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
                meta_robots: {
                    required: true,
                },
                meta_keyword: {
                    required: true,
                },
                meta_description: {
                    required: true,
                },
            },
            submitHandler: function(form) {
                form.submit();
            }
        });
    };

    var datatableInit = function () {

        // deleteSingleData();

        $('#users').DataTable({
            searching: true,
            processing: true,
            ajax: aurl+"page",
            columns: [{
                    data: 'DT_RowIndex'
                },
                {
                    data: 'title',
                    name: 'title',
                },
                {
                    data: 'meta_title',
                    name: 'meta_title',
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
            initAddEdit();
        },
        initView: function () {
            datatableInit();
        },

    };
}();

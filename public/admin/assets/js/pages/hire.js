var Hire = function () {

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
            },
            submitHandler: function(form) {
                form.submit();
            }
        });

        $('.summernote').summernote({height: 150});
        // image uplade file
        $('[type="file"]').dropify();

        $("body").on("click", ".feature-btn-remove", function() {
            $(this).parents(".hide_feature").remove();
        });

        $("body").on("click", ".schedule-btn-remove", function() {
            $(this).parents(".hide_schedule").remove();
        });

        $("body").on("click", ".faq-btn-remove", function() {
            $(this).parents(".hide_faq").remove();
        });
    };

    var initEdit = function () {

        $("body").on("click", ".schedule-btn-delete", function() {
            $(this).parents(".delete_schedule").remove();
        });

        $("body").on("click", ".feature-btn-delete", function() {
            $(this).parents(".delete_feature").remove();
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
            ajax: aurl+'hire',
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
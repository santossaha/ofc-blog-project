
var Portfolio = function () {

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
                platform: {
                    required: true,
                },
                language: {
                    required: true,
                },
                db: {
                    required: true,
                },
                tools: {
                    required: true,
                },
                about_description: {
                    required: true,
                },
                process_description: {
                    required: true,
                },
                challenges_description: {
                    required: true,
                },
                alt_tag: {
                    required: true,
                },
                's_title[]': {
                    required: true,
                },
            },
            submitHandler: function(form) {
                form.submit();
            }
        });

        // image uplade file
        $('[type="file"]').dropify();

        $("body").on("click", ".screenshot-btn-remove", function() {
            $(this).parents(".hide_screenshot").remove();
        });

        $("body").on("click", ".solution-btn-remove", function() {
            var val= $(this).parents(".hide_solution");
            $(this).parents(".hide_solution").remove();
        });

    };

    var initEdit = function () {
        $("body").on("click", ".solution-btn-delete", function() {
            $(this).parents(".delete_solution").remove();
        });

        $(document).ready(function() {
            $(document).on('click', '.delete_screenshot', function() {
                var id = $(this).attr('data-id');
                var selClsss = $(this).attr('data-class');
                swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    type: 'warning',
                    showCancelButton: true,
                    animation: false,
                    customClass: 'animated tada',
                    confirmButtonText: 'Yes, delete it!'
                }).then(function(result) {
                    if (result.value) {
                        $.ajax({
                            url: id,
                            success: function(result) {
                                if (result.status == 200) {
                                    toastr.success(result.message);
                                    $(document).find('.'+selClsss).remove();
                                    //$("+selClsss+").remove();
                                } else {
                                    toastr.error(result.message);
                                }
                            }
                        });
                    }
                });
            });

        });

    };

    var datatableInit = function () {
        var table = $('#users').DataTable({
            searching: true,
            processing: true,
            // ajax: "{{ route('admin.portfolio.index') }}",
            ajax: aurl+"portfolio",
            columns: [
                {
                data: 'DT_RowIndex'
                },
                {
                    data: 'title',
                    name: 'title',
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


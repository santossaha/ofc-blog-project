var DevelopmentType = function () {

    var initAdd = function () {
        $("#kt_form_1").submit(function(e) {
            e.preventDefault();
        }).validate({
            rules: {
                name: {
                    required: true,
                },
            },
            submitHandler: function(form) {
                form.submit();
            }
        });
    };

    var initEdit = function () {
        $("#kt_form_1").submit(function(e) {
            e.preventDefault();
        }).validate({
            rules: {
                name: {
                    required: true,
                },
            },
            submitHandler: function(form) {
                form.submit();
            }
        });
    };

    var datatableInit = function () {
        $('#users').DataTable({
            searching: true,
            processing: true,
            ajax: aurl+"development-type",
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

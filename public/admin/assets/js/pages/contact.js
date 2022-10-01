var Contact = function () {
    var datatableInit = function () {
        var table = $('#users').DataTable({
            searching: true,
            processing: true,
            ajax: aurl+'contact',
            columns: [{
                    data: 'DT_RowIndex'
                },
                {
                    data: 'name',
                    name: 'name',
                },
                {
                    data: 'email',
                    name: 'email',
                },
                {
                    data: 'phone',
                    name: 'phone',
                },
                {
                    data: 'company_name',
                    name: 'company_name',
                },
                {
                    data: 'created_at',
                    name: 'created_at',
                },
                {
                    data: 'type',
                    name: 'type',
                },
                 {
                     data: 'spam',
                     name: 'spam',
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
            //initAdd();
        },
        initEdit: function () {
            //initEdit();
        },
        initView: function () {
            datatableInit();
        },

    };
}();

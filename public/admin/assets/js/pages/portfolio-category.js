var PortfolioCategory = function () {

    var initAdd = function () {
        $("#kt_form_1").submit(function(e) {
            e.preventDefault();
        }).validate({
            rules: {
                name:{
                  required:true,
                },
                sort_name:{
                  required:true,
                },
                slug:{
                  required:true,
                },
            },
            submitHandler: function(form) {
                form.submit();
            }
        });
    };

    var datatableInit = function () {

        // deleteSingleData(); 
        
        var table = $('#users').DataTable({
            searching: true,
            processing: true,
            ajax: aurl+"portfolio-category",
            columns: [{
                    data: 'DT_RowIndex'
                },
                {
                    data: 'name',
                    name: 'name',
                },
                {
                    data: 'sort_name',
                    name: 'sort_name',
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
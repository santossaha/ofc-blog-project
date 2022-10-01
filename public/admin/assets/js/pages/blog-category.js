var BlogCategory = function () {

    var initAdd = function () {
        $("#kt_form_1").submit(function(e) {
            e.preventDefault();
        }).validate({
            rules: {
              name:{
                required:true,
              },
              slug:{
                required:true,
              },
              meta_title:{
                required:true,
              },
              meta_description:{
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
        //Datatable
        var table = $('#users').DataTable({
            searching: true,
            processing: true,
            // ajax: "{{ route('admin.testimonial.index') }}",
            ajax: aurl+"blog-category",
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

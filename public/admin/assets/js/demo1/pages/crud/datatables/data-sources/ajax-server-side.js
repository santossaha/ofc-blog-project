"use strict";
var KTDatatablesDataSourceAjaxServer = function() {

    var initTable1 = function() {
        var table = $('#player');

        // begin first table
        table.DataTable({
            responsive: true,
            searchDelay: 500,
            processing: true,
            serverSide: true,
            ajax: "{{ route('player') }}",
            columns: [
                { data: 'id' },
                { data: 'f_name' },
                { data: 'l_name' },
                { data: 'actions' },
            ],

        });
    };

    return {

        //main function to initiate the module
        init: function() {
            initTable1();
        },

    };

}();

jQuery(document).ready(function() {
    KTDatatablesDataSourceAjaxServer.init();
});
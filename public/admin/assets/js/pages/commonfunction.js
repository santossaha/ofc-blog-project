var Toastr = function() {
    
    return {
        init: function(type, title, message) {
            toastr.options = {
                "closeButton": false,
                "debug": false,
                "newestOnTop": false,
                "progressBar": false,
                "positionClass": "toast-top-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            };
            toastr[type](message, title);
        }
    };
}();

function ajaxcall(url, data, callback) {
    //  App.startPageLoading();
    var rtrn = $.ajax({
        type: 'POST', url: url, data: data,
        success: function(result) {
            //   App.stopPageLoading();
            callback(result);
        }
    });
    return rtrn;
}

function showToster(status, message) {
    toastr.options = {closeButton: true, progressBar: true, showMethod: 'slideDown', timeOut: 4000};
    if (status == 'success') {
        toastr.success(message, 'Success');
    }
    if (status == 'error') {
        toastr.error(message, 'Fail');
    }
}

// function deleteSingleData(URL, parentID) {
//     $('body').on('click', '.delete', function() {
//         var dataid = $(this).attr('data-id');
//         $('.yes-sure').attr('data-id', dataid);
//     });

//     $('.yes-sure').click(function() {
//         var dataid = $(this).attr('data-id');
//         //alert(parentID)
//         if (parentID) {
//             window.location = (URL + parentID + '/' + dataid);
//         } else {
//             window.location = (URL + dataid);
//         }
//     });
// }

$(document).ready(function() {

    // $('.summernote').validate({ ignore: ":hidden:not(#CommentText),.note-editable.panel-body" });

    // $('form').each(function () {
    //     if ($(this).data('validator'))
    //         $(this).data('validator').settings.ignore = ".note-editor *";
    // });

    // var v = $('#kt_form_1').validate({
    //     ignore: ":hidden:not(.summernote),.note-editable.panel-body"
    // });
      
    // var myElement = $('.summernote');
      
    // myElement.summernote({
    //     callbacks: {
    //       onChange: function(contents, $editable) {
    //         myElement.val(myElement.summernote('isEmpty') ? "" : contents);
    //         v.element(myElement);
    //       }
    //     }
    // });

    $('body').on('click', '.single-delete', function() {
        var delete_url = $(this).attr('data-delete-url-id');
        swal.fire({
            title: "Delete?",
            text: "Please ensure and then confirm!",
            type: "warning",
            showCancelButton: !0,
            confirmButtonText: "Yes",
            cancelButtonText: "No",
            reverseButtons: !0
        }).then(function(e) {
            if (e.value === true) {
                $.ajax({
                    url: delete_url,
                    type: "DELETE",
                    data: {
                        // _token: "{{ csrf_token() }}"
                        _token:$('meta[name="csrf-token"]').attr("content")
                    },
                    success: function(data) {
                        if (data.status == 200) {
                            swal.fire({
                                title: "Deleted !",
                                text: data.message,
                                buttonsStyling: true,
                                confirmButtonText: "Ok",
                            }).then(function(data) {
                                $("#users").DataTable().ajax.reload(null, false);
                            });
                        } else {
                            swal.fire({
                                title: "Erorrs!",
                                text: data.message,
                                buttonsStyling: true,
                                confirmButtonText: "Ok",
                            })
                        }
                    },
                    error: function(request, message, error) {
                        swal.fire({
                            title: error,
                            text: message,
                            buttonsStyling: true,
                            confirmButtonText: "Ok",
                        })
                    }
                });
            }
        });
    });

    $(document).on('click', '.status_change', function() {
        var id = $(this).attr('data-id');
        $.ajax({
            url: id,
            type: 'GET',
            success: function(result) {
                if (result.status == true) {
                    toastr.success(result.Message);
                    $("#users").DataTable().ajax.reload(null, false);
                } else {
                    toastr.error(result.Message);
                }
            }
        });
    });
});

// function deleteSingleData() {
//     $('body').on('click', '.single-delete', function() {
//         var delete_url = $(this).attr('data-delete-url-id');
//         swal.fire({
//             title: "Delete?",
//             text: "Please ensure and then confirm!",
//             type: "warning",
//             showCancelButton: !0,
//             confirmButtonText: "Yes",
//             cancelButtonText: "No",
//             reverseButtons: !0
//         }).then(function(e) {
//             if (e.value === true) {
//                 $.ajax({
//                     url: delete_url,
//                     type: "DELETE",
//                     data: {
//                         // _token: "{{ csrf_token() }}"
//                         _token:$('meta[name="csrf-token"]').attr("content")
//                     },
//                     success: function(data) {
//                         if (data.status == 200) {
//                             swal.fire({
//                                 title: "Deleted !",
//                                 text: data.message,
//                                 buttonsStyling: true,
//                                 confirmButtonText: "Ok",
//                             }).then(function(data) {
//                                 $("#users").DataTable().ajax.reload(null, false);
//                             });
//                         } else {
//                             swal.fire({
//                                 title: "Erorrs!",
//                                 text: data.message,
//                                 buttonsStyling: true,
//                                 confirmButtonText: "Ok",
//                             })
//                         }
//                     },
//                     error: function(request, message, error) {
//                         swal.fire({
//                             title: error,
//                             text: message,
//                             buttonsStyling: true,
//                             confirmButtonText: "Ok",
//                         })
//                     }
//                 });
//             }
//         });
//     });
// }

// function statusActiveDeactive() {
//     $(document).on('click', '.status_change', function() {
//         var id = $(this).attr('data-id');
//         $.ajax({
//             url: id,
//             type: 'GET',
//             success: function(result) {
//                 if (result.status == true) {
//                     toastr.success(result.Message);
//                     $("#users").DataTable().ajax.reload(null, false);
//                 } else {
//                     toastr.error(result.Message);
//                 }
//             }
//         });
//     });
// }
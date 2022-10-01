@extends('admin.layouts.include.auth')
<x-layout.index title="Testimonil" :route="route('admin.testimonil.create')">
    <th> # </th>
    <th>Name</th>
    <th>Status </th>
    <th>Action </th>
</x-layout.index>

@section('url')
    url: "{{ url('admin/testimonil') }}/" + id,
@endsection
@section('script')
    <script src="{{ asset('admin/assets/vendors/custom/datatables/datatables.bundle.min.js') }}" type="text/javascript">
    </script>
    <script type="text/javascript">
        $(function() {
            var table = $('#users').DataTable({
                searching: true,
                processing: true,
                ajax: "{{ route('admin.testimonil.index') }}",
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
    </script>
    <script type="text/javascript">
        function deleteConfirmation(id) {
            swal.fire({
                title: "Delete?",
                text: "Please ensure and then confirm!",
                type: "warning",
                showCancelButton: !0,
                confirmButtonText: "Yes, delete it",
                cancelButtonText: "No, cancel!",
                reverseButtons: !0
            }).then(function(e) {
                    if (e.value === true) {
                        var token = $('meta[name="csrf-token"]').attr('content');
                        $.ajax({
                            url: "{{ url('/testimonil') }}/" + id,
                            type: 'DELETE',
                            data: {
                                _token: token
                            },
                            dataType: 'JSON',
                            success: function(results) {

                                swal.fire({
                                    title: "Deleted !",
                                    text: results.message,
                                    buttonsStyling: true,
                                    confirmButtonText: "Your file has been deleted.",
                                }).then(function(result) {
                                    window.location.reload();
                                })
                            }
                        });

                    } else {
                        e.dismiss;
                    }
                },
                function(dismiss) {
                    return false;
                })
        }
    </script>
    @include('admin.layouts.include.destory')
@endsection

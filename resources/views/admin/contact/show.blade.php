@extends('admin.layouts.include.master')
@section('title')
    View Contact Us
@endsection
@section('content')
    <div class="kt-portlet">
        <div class="kt-portlet__head">
            <div class="kt-portlet__head-label">
                <h3 class="kt-portlet__head-title">
                    View Contact Us
                </h3>
            </div>
            <div class="kt-portlet__head-toolbar">
                <div class="kt-portlet__head-wrapper">
                    <div class="kt-portlet__head-actions">

                        <a href="{{route('admin.contact.index')}}" class="btn btn-brand btn-elevate btn-icon-sm">
                            <i class="la la-arrow-left"></i>
                            Back
                        </a>

                    </div>
                </div>
            </div>
        </div>

        <div class="kt-portlet__body">
            <table class="table data-table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
                <tbody>
                    <tr>
                        <th>Name</th>
                        <td>{{ $contact->name }}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{ $contact->email }}</td>
                    </tr>

                    <tr>
                        <th>Country</th>
                        <td>{{ $contact->country }}</td>
                    </tr>

                    <tr>
                        <th>Phone Number</th>
                        <td>{{ $contact->phone }}</td>
                    </tr>
                    <tr>
                        <th>Company Name</th>
                        <td>{{ $contact->company_name }}</td>
                    </tr>
                    {{-- <tr>
                        <th>Company Year</th>
                        <td>{{ $contact->company_year }}</td>
                    </tr> --}}
                    <tr>
                        <th>Website</th>
                        <td>{{ $contact->website }}</td>
                    </tr>
                    <tr>
                        <th>Project Type</th>
                        <td>{{ $contact->project_type }}</td>
                    </tr>

                    <tr>
                        <th>Project Description</th>
                        <td>{{ $contact->project_description }}</td>
                    </tr>

                    <tr>
                        <th>Skype ID</th>
                        <td>{{ $contact->skype_id }}</td>
                    </tr>

                    <tr>
                        <th>Country</th>
                        <td>{{ $contact->country }}</td>
                    </tr>

                    <tr>
                        <th>IP Address</th>
                        <td>{{ $contact->ip_address }}</td>
                    </tr>

                    <tr>
                        <th>Type</th>
                        <td>{{ $contact->type }}</td>
                    </tr>

                    <tr>
                        <th>Marketing Tips</th>
                        <td>{{ ($contact->marketing_tips) ? "Allow" : "Not Allow" }}</td>
                    </tr>

                    <tr>
                        <th>Created At</th>
                        <td>{{ date('Y-m-d H:i:s',strtotime($contact->created_at)) }}</td>
                    </tr>
                    @if($contact->file)
                    <tr>
                        <th>File</th>
                        <td><a href="{{ asset('sitebucket/contact/'.$contact->file) }}" download>Download</a></td>
                    </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection

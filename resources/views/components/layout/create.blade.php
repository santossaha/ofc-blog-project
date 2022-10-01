@section('title')
    {{ $title }} {{ isset($data) ? 'Update' : 'Create' }}
@endsection
@section('style')
    <link rel="stylesheet" href="{{ asset('admin/assets/css/demo1/dropify.min.css') }}" />
    <link href="{{ asset('admin/assets/css/demo1/summernote.min.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="kt-portlet">
        <div class="kt-portlet__head">
            <div class="kt-portlet__head-label">
                <h3 class="kt-portlet__head-title">
                    {{ $title }}
                </h3>
            </div>
        </div>
        <form action="{{ $action }}" class="kt-form kt-form--label-right" id="kt_form_1" method="POST"
            enctype="multipart/form-data">
            @csrf
            @isset($data)
                @method('PATCH')
            @endisset
            <div class="kt-portlet__body">
                {{ $slot }}
            </div>
            <div class="kt-portlet__foot">
                <div class="kt-form__actions">
                    <div class="row">
                        <div class="col-lg-9 ml-lg-auto">
                            <button type="submit" class="btn btn-brand btn-bold mr-2">{{ isset($data)?'Update':'Create' }}</button>
                            <x-back-button :route="$backroute" class="btn-secondary" />
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

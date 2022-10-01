<div class="form-group row">
    <label class="col-form-label col-lg-2 col-sm-12">{{ $lable }} </label>
    <div class="col-lg-{{$size ?? 9}} col-md-{{$size ?? 9}} col-sm-12">
        <input type="{{ $type??'text' }}" class="form-control @error($name) is-invalid @enderror"
            value="{{ $value }}" name="{{ $name }}"
            accept="{{ $accept ?? ''}}"
            placeholder="{{ $place??"Enter " }}"
           @if(!blank($defaultImage))
            data-default-file="{{$defaultImage}}"
            @endif
            {{ $atrMultiple}}
            >
    </div>
</div>

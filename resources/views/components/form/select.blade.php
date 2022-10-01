<div class="form-group row">
    <label class="col-form-label col-lg-2 col-sm-12">{{ $lable}} </label>
    <div class="col-lg-9 col-md-9 col-sm-12">
        <select name="{{ $name}}" id="select" class="form-control" {{ $multiple}}>
            @foreach ($options as  $value)
                <option value="{{ $value->id }}" >{{ $value->name }}</option>
            @endforeach
        </select>
    </div>
</div>

<div class="form-group row">
    <label class="col-form-label col-lg-2 col-sm-12">{{ $lable }} </label>
    <div class="col-lg-9 col-md-9 col-sm-12">
        <textarea class="summernote form-control" name="{{ $name }}">{{ $value??' ' }}</textarea>
    </div>
</div>

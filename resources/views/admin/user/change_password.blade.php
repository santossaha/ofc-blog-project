@extends('admin.layouts.include.master')
@section('title')
    Setting - Change Password
@endsection
@section('stype')
    <style>
        .login_oueter {
            width: 360px;
            max-width: 100%;
        }

        .logo_outer {
            text-align: center;
        }

        .logo_outer img {
            width: 120px;
            margin-bottom: 40px;
        }

    </style>
@endsection

@section('content')
    <div class="kt-grid__item kt-grid__item--fluid kt-app__content">
        <div class="row">
            <div class="col-xl-12">
                <div class="kt-portlet kt-portlet--height-fluid">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title"> Change Password<small></small></h3>
                        </div>
                    </div>
                    <form id="password_update" class="kt-form kt-form--label-right"
                        action="{{ route('admin.change-password.update', Auth::id()) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="kt-portlet__body">
                            <div class="kt-section kt-section--first">
                                <div class="kt-section__body">
                                    <div class="form-group row">
                                        <label
                                            class="col-xl-3 col-lg-3 col-3 col-form-label">Current Password</label>
                                        <div class="col-lg-9 col-xl-6 col-9">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1"><i
                                                            class="fas fa-lock"></i></span>
                                                </div>
                                                <input type="password"
                                                    class="input form-control  @error('current_password') is-invalid @enderror"
                                                    id="current_password" required="true" aria-label="current_password"
                                                    aria-describedby="basic-addon1" value="{{ old('current_password') }}"
                                                    name="current_password"
                                                    placeholder="Current Password" />
                                                <div class="input-group-append">
                                                    <span class="input-group-text" onclick="password_show_hide();">
                                                        <i class="fas fa-eye" id="show_eye1"></i>
                                                        <i class="fas fa-eye-slash d-none" id="hide_eye1"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        <label for="current_password" class="error" id="current_password-error"></label>

                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label
                                            class="col-xl-3 col-lg-3 col-form-label">New Password</label>
                                        <div class="col-lg-9 col-xl-6">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1"><i
                                                            class="fas fa-lock"></i></span>
                                                </div>
                                                <input type="password" value="{{ old('password') }}"
                                                    class="input form-control @error('password') is-invalid @enderror"
                                                    name="password" id="password_new"  aria-label="password"
                                                    aria-describedby="basic-addon1"
                                                    placeholder="New Password" />
                                                <div class="input-group-append">
                                                    <span class="input-group-text" onclick="passwordcheck();">
                                                        <i class="fas fa-eye" id="show_eye2"></i>
                                                        <i class="fas fa-eye-slash d-none" id="hide_eye2"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        <label for="password_new" class="error" id="password_new-error"></label>

                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label
                                            class="col-xl-3 col-lg-3 col-form-label">Verify Password</label>
                                        <div class="col-lg-9 col-xl-6">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1"><i
                                                            class="fas fa-lock"></i></span>
                                                </div>
                                                <input type="password" name="password_confirmation"
                                                    class="input form-control" id="password_confirmation" required="true"
                                                    value="{{ old('password_confirmation') }}" aria-label="password"
                                                    aria-describedby="basic-addon1"
                                                    placeholder="Verify Password" />
                                                <div class="input-group-append">
                                                    <span class="input-group-text" onclick="password_confirmation();">
                                                        <i class="fas fa-eye" id="show_eye3"></i>
                                                        <i class="fas fa-eye-slash d-none" id="hide_eye3"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        <label for="password_confirmation" class="error" id="password_confirmation-error"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="kt-portlet__foot">
                            <div class="kt-form__actions">
                                <div class="row">
                                    <div class="col-lg-3 col-xl-3">
                                    </div>
                                    <div class="col-lg-9 col-xl-9">
                                        <button type="submit"
                                            class="btn btn-brand btn-bold">Update</button>&nbsp;
                                        <x-back-button :route="url()->previous()" class="btn-secondary" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="{{ asset('admin/assets/vendors/general/jquery-validation/dist/jquery.validate.js') }}"></script>
    <script src="{{ asset('admin/assets/vendors/general/toastr/build/toastr.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/js/pages/profile.js') }}" type="text/javascript" ></script>
@endsection

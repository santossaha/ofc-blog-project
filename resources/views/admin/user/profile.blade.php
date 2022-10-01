@extends('admin.layouts.include.master')
@section('title')
    Setting - Profile
@endsection
@php
    $user = Auth::user();
@endphp
@section('content')
    <div class="kt-grid__item kt-grid__item--fluid kt-app__content">
        <div class="row">
            <div class="col-xl-12">
                <div class="kt-portlet">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">Personal Information <small>
                                Update your personal information </small></h3>
                        </div>

                    </div>
                    <form class="kt-form kt-form--label-right" action="{{ route('admin.profile.update') }}"
                        method="POST">
                        @csrf
                        @if ($user)
                            @method('PATCH')
                        @endif
                        <div class="kt-portlet__body">
                            <div class="kt-section kt-section--first">
                                <div class="kt-section__body">
                                    <div class="row">
                                        <label class="col-xl-3"></label>
                                        <div class="col-lg-9 col-xl-6">
                                            <h3 class="kt-section__title kt-section__title-sm">
                                                User Info:
                                            </h3>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label
                                            class="col-xl-3 col-lg-3 col-form-label">Name</label>
                                        <div class="col-lg-9 col-xl-6">
                                            <input class="form-control @error('name') is-invalid @enderror" type="text"
                                                name="name" value="{{  $user->name }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label
                                            class="col-xl-3 col-lg-3 col-form-label"> Email Address </label>
                                        <div class="col-lg-9 col-xl-6">
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span class="input-group-text"><i
                                                            class="la la-at"></i></span></div>
                                                <input type="email"
                                                    class="form-control @error('email') is-invalid @enderror"
                                                    value="{{  $user->email }}" name="email"
                                                    placeholder="{{ __('validation.attributes.email') }}"
                                                    aria-describedby="basic-addon1" disabled>
                                            </div>
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
                                            class="btn btn-brand btn-bold ">{{  $user ? 'Update' : 'Submit' }}
                                        </button>&nbsp;
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



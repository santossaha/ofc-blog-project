@extends('admin.layouts.include.master')
@section('title','Dashboard')
@section('subheader')
    <h3 class="kt-subheader__title">
        {{ __('lable.dashboard') }}
    </h3>
    <div class="kt-subheader__breadcrumbs">
        <a href="{{ route('admin.dashboard') }}" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
    </div>
@endsection
@section('style')
   {{-- <x-velidation.velidation_css/>--}}
@endsection

@section('content')
    <div class="kt-portlet__body kt-portlet__body--fit">
        <div class="kt-widget17">
            <div class="kt-widget17__stats mt-0">
                <div class="kt-widget17__items">

                    <div class="kt-widget17__item">
                        <a href="{{ route('admin.blog.index') }}">
                            <span class="kt-widget17__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="24px" height="24px" viewBox="0 0 24 24" version="1.1"
                                    class="kt-svg-icon kt-svg-icon--brand">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect id="bound" x="0" y="0" width="24" height="24" />
                                        <path
                                            d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z"
                                            id="Combined-Shape" fill="#000000" />
                                        <rect id="Rectangle-Copy-2" fill="#000000" opacity="0.3"
                                            transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519) "
                                            x="16.3255682" y="2.94551858" width="3" height="18" rx="1" />
                                    </g>
                                </svg> </span>
                            <span class="kt-widget17__subtitle">
                            {{-- {{ $service }}--}}
                            </span>
                            <span class="kt-widget17__desc">
                                Blog
                            </span>
                        </a>
                    </div>

                    <div class="kt-widget17__item">
                        <a href="{{ route('admin.solution.index') }}">
                            <span class="kt-widget17__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="24px" height="24px" viewBox="0 0 24 24" version="1.1"
                                    class="kt-svg-icon kt-svg-icon--warning">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect id="bound" x="0" y="0" width="24" height="24" />
                                        <path
                                            d="M12.7037037,14 L15.6666667,10 L13.4444444,10 L13.4444444,6 L9,12 L11.2222222,12 L11.2222222,14 L6,14 C5.44771525,14 5,13.5522847 5,13 L5,3 C5,2.44771525 5.44771525,2 6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,13 C19,13.5522847 18.5522847,14 18,14 L12.7037037,14 Z"
                                            id="Combined-Shape" fill="#000000" opacity="0.3" />
                                        <path
                                            d="M9.80428954,10.9142091 L9,12 L11.2222222,12 L11.2222222,16 L15.6666667,10 L15.4615385,10 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 L9.80428954,10.9142091 Z"
                                            id="Combined-Shape" fill="#000000" />

                                    </g>
                                </svg> </span>
                            <span class="kt-widget17__subtitle">
                                {{--{{ $blog }}--}}
                            </span>
                            <span class="kt-widget17__desc">
                              Solution
                            </span>
                        </a>
                    </div>

                    <div class="kt-widget17__item">
                        <a href="{{ route('admin.technology.index') }}">
                            <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo8/dist/../src/media/svg/icons/Files/File.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <polygon points="0 0 24 0 24 24 0 24"/>
                                        <path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                        <rect fill="#000000" x="6" y="11" width="9" height="2" rx="1"/>
                                        <rect fill="#000000" x="6" y="15" width="5" height="2" rx="1"/>
                                    </g>
                                </svg>
                            </span>
                            <span class="kt-widget17__subtitle">
                            {{-- {{ $portfolio }}--}}
                            </span>
                            <span class="kt-widget17__desc">
                                Technology
                            </span>
                        </a>
                    </div>

                    <div class="kt-widget17__item">
                        <a href="{{ route('admin.portfolio.index') }}">
                            <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo8/dist/../src/media/svg/icons/Media/Equalizer.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24"/>
                                <rect fill="#000000" opacity="0.3" x="13" y="4" width="3" height="16" rx="1.5"/>
                                <rect fill="#000000" x="8" y="9" width="3" height="11" rx="1.5"/>
                                <rect fill="#000000" x="18" y="11" width="3" height="9" rx="1.5"/>
                                <rect fill="#000000" x="3" y="13" width="3" height="7" rx="1.5"/>
                            </g>
                        </svg><!--end::Svg Icon--></span>
                            <span class="kt-widget17__subtitle">
                             {{--{{ $industri }}--}}
                            </span>
                            <span class="kt-widget17__desc">
                                Portfolio
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    {{--<x-velidation.velidation_js/>--}}
@endsection

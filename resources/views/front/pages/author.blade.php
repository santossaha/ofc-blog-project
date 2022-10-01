@extends('front.layouts.default')
@section('title', $page->meta_title)
@section('meta')
    <meta name="description" content="{{ $page->meta_description }}" />
    <meta name="keywords" content="{{ $page->meta_keyword }}">
    <meta name="robots" content="{{ $page->meta_robots }}" />
    <link rel="canonical" href="{{ url()->current() }}" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="{{ $page->meta_title }}" />
    <meta property="og:description" content="{{ $page->meta_description }}" />
    <meta name="keywords" content="{{ $page->meta_keyword }}">
    <meta property="article:modified_time" content="2018-12-27T08:53:36+00:00" />
    <meta property="og:image" content="{{ asset('front/images/') }}/logo-black.jpg" />
    <meta property="og:image:width" content="750" />
    <meta property="og:image:height" content="375" />
    <meta name="twitter:card" content="summary_large_image" />
    @include('front.layouts.includes.aboutus')
@endsection
@section('content')
@push('css')
<link rel="stylesheet" href="{{ asset('front/css/author.css') }}">
@endpush
    <!-- Banner Section start-->
    <section class="banner_inner">
        <div class="banner_inner_shadow"><img src="../front/images/banner-inner-shadow.png" alt="banner-inner-shadow" />
        </div>
        <div class="banner_inner_img">
            <img src="../front/images/banner-inner.jpg" alt="banner-inner" />
        </div>
    </section>
    <!-- Banner Section end-->

    <!-- author info sectopn start -->

    <section class="author_info_top">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-3 col-md-4">
                    <img src="../front/images/jignen-pandya.jpg" alt="jignen-pandya-img" />
                </div>
                <div class="col-12 col-lg-6 col-md-7">
                    <h1 class="text-white">Jignen Pandya</h1>
                    <h3 class="text-white mt-4">Business Manager (Global Sales) at Expert App Devs</h3>
                    <p class="text-white">Responsible for creating a sales funnel, attracting top-of-the-funnel customers,
                        and converting the target market.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- author main section start -->
    <section class="author_main">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-9 offset-lg-3 col-md-8 offset-md-4">
                    <div class="d-flex align-items-center justify-content-between author_main_margin">
                        <div class="social-icon">
                            <ul>
                                <li><a rel="nofollow" target="_blank" title="mail"
                                        href="mailto:jignen.pandya@expertappdevs.com">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="14"
                                            height="17">
                                            <path
                                                d="M464 64C490.5 64 512 85.49 512 112C512 127.1 504.9 141.3 492.8 150.4L275.2 313.6C263.8 322.1 248.2 322.1 236.8 313.6L19.2 150.4C7.113 141.3 0 127.1 0 112C0 85.49 21.49 64 48 64H464zM217.6 339.2C240.4 356.3 271.6 356.3 294.4 339.2L512 176V384C512 419.3 483.3 448 448 448H64C28.65 448 0 419.3 0 384V176L217.6 339.2z"
                                                fill="#ffad0b" />
                                        </svg> </a></li>
                                <li><a rel="nofollow" target="_blank" title="linkedin"
                                        href="https://www.linkedin.com/in/jignen-pandya-556678215/">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="14"
                                            height="17">
                                            <path
                                                d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"
                                                fill="#ffad0b" />
                                        </svg> </a></li>
                                <li><a rel="nofollow" target="_blank" title="quora"
                                        href="https://www.quora.com/profile/Jignen-Pandya">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="14"
                                            height="17">
                                            <path
                                                d="M440.5 386.7h-29.3c-1.5 13.5-10.5 30.8-33 30.8-20.5 0-35.3-14.2-49.5-35.8 44.2-34.2 74.7-87.5 74.7-153C403.5 111.2 306.8 32 205 32 105.3 32 7.3 111.7 7.3 228.7c0 134.1 131.3 221.6 249 189C276 451.3 302 480 351.5 480c81.8 0 90.8-75.3 89-93.3zM297 329.2C277.5 300 253.3 277 205.5 277c-30.5 0-54.3 10-69 22.8l12.2 24.3c6.2-3 13-4 19.8-4 35.5 0 53.7 30.8 69.2 61.3-10 3-20.7 4.2-32.7 4.2-75 0-107.5-53-107.5-156.7C97.5 124.5 130 71 205 71c76.2 0 108.7 53.5 108.7 157.7.1 41.8-5.4 75.6-16.7 100.5z"
                                                fill="#ffad0b" />
                                        </svg></a></li>
                            </ul>
                        </div>
                        <!-- Tab panes -->
                    </div>
                </div>
    </section>
    <!-- author main section end -->
    <section class="section-space py-4">
        <div class="container">
            <div class="row">
                @foreach ($blogs as $blog)
                    <div class="col-lg-4 col-sm-6 mt-sm-3 mb-sm-3  mt-2 mb-2 blog_div"
                        data-url="{{ route('blog.detail', $blog->slug) }}">
                        <div class="card blog-box">
                            <a class="card-img blog_sec_img" href="{{ route('blog.detail', $blog->slug) }}"
                                target="_blank">
                                {{-- <img class="card-img-top"  src="{{ asset('sitebucket/blog') }}/{{ $blog->front_image }}" alt="{{ $blog->front_image_alt }}" title="{{ $blog->front_image_title }}" width="360" height="138"> --}}
                                <img class="card-img-top" src="{{ asset('sitebucket/blog') }}/{{ $blog->image }}"
                                    alt="{{ $blog->front_image_alt }}" title="{{ $blog->front_image_title }}"
                                    width="360" height="138">
                            </a>
                            <div class="card-body">
                                <h6><span
                                        class="icon icon-calendar"></span>{{ date('F d, Y', strtotime($blog->publish_date)) }}
                                    &nbsp;<i class="fas fa-circle"
                                        style="font-size: 3px;vertical-align: middle;margin-bottom: 2px;"></i>&nbsp;
                                    {{ getEstimateReadingTime($blog->description) }}
                                </h6>
                                <h4><a href="{{ route('blog.detail', $blog->slug) }}">{{ $blog->title }}</a></h4>
                                {{-- <p>{!! substr(html_entity_decode(strip_tags($blog->description)), 0, 100) . ' ...' !!}</p> --}}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection

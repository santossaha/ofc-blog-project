@extends('front.layouts.default')
@section('title', $page->meta_title)
@section('meta')
    <meta name="description" content="{{ $page->meta_description }}" />
    <meta name="keywords" content="{{ $page->meta_keyword }}">
    <meta name="robots" content="{{ $page->meta_robots }}" />
    <link rel="canonical" href="{{ url()->current() }}" />
    <meta property="og:url" content="{{ url()->current() }}" />
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
    <link rel="preload" as="image" href="{{ asset('front') }}/images/bg-shape3.png" />
@endsection
@push('css')
    <style>
        .pagination a.current {
            background: #b71a69;
            color: #fff;
        }

    </style>
@endpush
@section('content')
    <!--comfort security part start-->
    <section class="sub-heading light-bg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a title="Home" href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Solutions</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-7">
                    <h1>Solutions</h1>
                    <div class="title-text">
                        <p>We offer much more than just IT. Yes, we provide varied solutions to meet your growing and
                            ever-changing business needs.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-space pb-0">
        <div class="container">
            <div class="row">
                @foreach ($solution as $item)
                    <div class="col-lg-4 col-sm-6 mt-sm-3 mb-sm-3  mt-2 mb-2">
                        <div class="card solutions-list-box">
                            <div class="card-body">
                                <h6>{{ $item->sub_title }}</h6>
                                <h4>{{ $item->title }}</h4>
                                <div class="tags">
                                    <ul>
                                        @foreach ($item->technology as $st)
                                            <li>{{ $st->name }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                <p>{!! substr(html_entity_decode(strip_tags($item->about_description)), 0, 100) . '...' !!}</p>
                                <div>
                                    <a class="more-btn" href="{{ route('solution.detail', $item->slug) }}"> Explore
                                        more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="section-space">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <h2>Need a consultation?</h2>
                    <div class="title-text">
                        <p class="margin-none">We are here to serve you. Just drop in your queries, and we will get back
                            to you.</p>
                    </div>
                </div>
                <div class="col-md-3 mt-3 text-md-right">
                    <a title="Contact Us" class="btn btn-danger" href="{{ route('contact-us') }}">Contact Us</a>
                </div>
            </div>
        </div>
    </section>
@endsection

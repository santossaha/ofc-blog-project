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
    {{-- @include('front.layouts.includes.schema') --}}
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
                            <li class="breadcrumb-item">Technology</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-7">
                    <h1>Our Technology Expertise</h1>
                    <div class="title-text">
                        <p>Expert App Devs is an emerging mobile app development company that aims at catapulting the growth
                            of your business with a perfect blend of technology and expertise to spoil you for choice.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-space pt-4 technology-list">
        <div class="container">
            <div class="row flex-wrap align-items-center app-dev-list five-icon">
                @foreach ($technology as $tech)
                    <div class="icon">
                        <a title="{{ $tech->title }}" class="platforms-logo"
                            href="{{ route('technology.detail', $tech->slug) }}">
                            <img src="{{ asset('sitebucket/technology/' . $tech->image) }}" alt="{{ $tech->title }}" width="64" height="64">
                            <span>{{ $tech->short_title }}</span>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="section-space border-top">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <h2>Need a consultation?</h2>
                    <div class="title-text">
                        <p class="margin-none">Do you have any queries hitting your mind? Write to us and we will be on
                            our toes to get you instant solutions and transform your dreams into real-time amazing mobile
                            applications.</p>
                    </div>
                </div>
                <div class="col-md-3 mt-3 text-md-right">
                    <a title="Contact Us" class="btn btn-danger" href="{{ route('contact-us') }}">Contact Us</a>
                </div>
            </div>
        </div>
    </section>
@endsection

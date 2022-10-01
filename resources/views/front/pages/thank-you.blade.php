@extends('front.layouts.default')
@section('title', $page->detail->meta_title)
@section('meta')
    <meta name="description" content="{{ $page->detail->meta_description }}" />
    <meta name="keywords" content="{{ $page->detail->meta_keyword }}">
    <meta name="robots" content="{{ $page->detail->meta_robots }}" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="{{ $page->detail->meta_title }}" />
    <meta property="og:description" content="{{ $page->detail->meta_description }}" />
    <meta name="keywords" content="{{ $page->detail->meta_keyword }}">
    {{-- <meta property="og:url" content="{{ route('services') }}" /> --}}
    <meta property="article:modified_time" content="2018-12-27T08:53:36+00:00" />
    <meta property="og:image" content="{{ asset('front/images/') }}/logo-black.jpg" />
    <meta property="og:image:width" content="750" />
    <meta property="og:image:height" content="375" />
    <meta name="twitter:card" content="summary_large_image" />
    {{-- {{-- @include('front.layouts.includes.schema') --}} --}}
@endsection
@section('content')
    <section class="sub-heading light-bg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a title="Home" href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item">Thank You</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-7">
                    <h1>Thank You</h1>
                    {{-- <div class="title-text"><p>Virtual reality is an emerging trend in the entertainment sector. A form of 3-D image which can be explored interactively by manipulation of keys or the mouse.</p></div> --}}
                </div>
            </div>
        </div>
    </section>
    <section class="section-space cms-page privacy-policy-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="thankyou-wrapper text-center">
                        <h3>Your message has been sent successfully.</h3>
                        <div class="list-type-thankyou">
                            <ul class="list-unstyled">
                                <li>
                                    <a
                                        href="mailto:{{ session()->has('job') ? 'job@expertappdevs.com' : 'sales@expertappdevs.com' }} "><span><i
                                                class="fa fa-envelope"></i></span>
                                        {{ session()->has('job') ? 'job@expertappdevs.com' : 'sales@expertappdevs.com' }}
                                    </a>
                                </li>
                                <li><a href="tel:+917016166822"> <span><i class="fas fa-phone"></i></span> +91
                                        701-616-6822</a>
                                </li>
                            </ul>
                        </div>
                        <p class="mb-0"> Follow us on <a href="https://twitter.com/ExpertAppDevs" title="Twitter"
                                target="_blank">Twitter</a> and like us on <a target="_blank" title="facebook"
                                href="https://www.facebook.com/ExpertAppDevs">Facebook</a> to keep up to date with all our
                            news and annoucements. {{ session()->has('job') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@extends('front.layouts.default')
@section('title', $page->detail->meta_title)
@section('meta')
    <meta name="description" content="{{ $page->detail->meta_description }}" />
    <meta name="keywords" content="{{ $page->detail->meta_keyword }}">
    <meta name="robots" content="{{ $page->detail->meta_robots }}" />
    <link rel="canonical" href="{{ url()->current() }}" />
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
    <link rel="preload" as="image" href="{{ asset('front') }}/images/bg-shape3.png" />
@endsection
@section('content')
    <section class="sub-heading light-bg default_page_con">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a title="Home" href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Sitemap</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-7">
                    <h1>Sitemap</h1>
                </div>
            </div>
            <div class="default_page_content section-space">
                <div class="row">
                    <div class="col-md-3">
                        <div class="wsp-container list-type">
                            <h2 class="wsp-pages-title mb-4">Our Company</h2>
                            <ul class="wsp-pages-list">
                                <li class="page_item page-item-6"><a href="{{ route('home') }}">Home</a>
                                </li>
                                <li class="page_item page-item-139"><a href="{{ route('solution') }}">Solutions</a></li>
                                {{-- <li class="page_item page-item-139"><a href="{{ route('services') }}">Services</a></li> --}}
                                <li class="page_item page-item-139"><a href="{{ route('technology') }}">Technology</a>
                                </li>
                                <li class="page_item page-item-247"><a href="{{ route('portfolio') }}">Portfolio</a></li>
                                <li class="page_item page-item-292"><a href="{{ route('blog') }}">Insight</a></li>
                                <li class="page_item page-item-371"><a href="{{ route('about-us') }}">About Us</a></li>
                                <li class="page_item page-item-371"><a href="{{ route('career') }}">Career</a></li>
                                <li class="page_item page-item-371"><a href="{{ route('holiday') }}">Holiday</a></li>
                                <li class="page_item page-item-216"><a href="{{ route('contact-us') }}">Contact Us</a>
                                </li>
                                <li class="page_item page-item-38"><a href="{{ route('privacy-policy') }}">Privacy
                                        Policy</a></li>
                                <li class="page_item page-item-42 current_page_item"><a href="{{ route('sitemap') }}"
                                        aria-current="page">Sitemap</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="wsp-container list-type">
                            <h2 class="wsp-services-title  mb-4">Solutions</h2>
                            <ul class="wsp-services-list">
                                @foreach (allSolutionData() as $service)
                                    <li><a
                                            href="{{ route('solution.detail', $service->slug) }}">{{ $service->title }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div> <br>
                    </div>
                    <div class="col-md-3">
                        <div class="wsp-container list-type">
                            <h2 class="wsp-services-title  mb-4">Services</h2>
                            <ul class="wsp-services-list">
                                @foreach (allServicesData() as $service)
                                    <li><a href="{{ route('detail', $service->slug) }}">{{ $service->title }}</a></li>
                                @endforeach
                            </ul>
                        </div> <br>
                    </div>
                    <div class="col-md-3">
                        <div class="wsp-container  list-type">
                            <h2 class="wsp-portfolioss-title  mb-4">Technology</h2>
                            <ul class="wsp-portfolioss-list">
                                @foreach (allTechnologyData() as $service)
                                    <li><a
                                            href="{{ route('technology.detail', $service->slug) }}">{{ $service->short_title }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <p></p>
                    </div>
                    <div class="col-md-8">
                        <div class="wsp-container  list-type">
                            <h2 class="wsp-portfolioss-title  mb-4">Blog</h2>
                            <ul class="wsp-portfolioss-list">
                                @foreach ($blog as $b)
                                    <li><a
                                            href="{{  route('blog.detail', $b->slug) }}">{{ $b->title }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <p></p>
                    </div>
                    <div class="col-md-4">
                        <div class="wsp-container  list-type">
                            <h2 class="wsp-portfolioss-title  mb-4">Portfolio</h2>
                            <ul class="wsp-portfolioss-list">
                                @foreach ($portfolio as $p)
                                    <li><a
                                            href="{{  route('portfolio.detail', $p->slug) }}">{{ $p->title }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

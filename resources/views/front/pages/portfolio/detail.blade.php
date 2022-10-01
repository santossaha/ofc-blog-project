@extends('front.layouts.default')
@section('title', $portfolio->meta_title)
@section('meta')
    <meta name="description" content="{{ $portfolio->meta_description }}" />
    <meta name="keywords" content="{{ $portfolio->meta_keyword }}">
    <meta name="robots" content="{{ $portfolio->meta_robots }}" />
    <link rel="canonical" href="{{ url()->current() }}" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="{{ $portfolio->meta_title }}" />
    <meta property="og:description" content="{{ $portfolio->meta_description }}" />
    <meta property="og:keywords" content="{{ $portfolio->meta_keyword }}" />
    <meta property="article:modified_time"
        content="{{ \Carbon\Carbon::parse($portfolio->updated_at)->format('Y-m-d') }}" />
    <meta property="og:image" content="{{ asset('sitebucket/portfolio/' . $portfolio->image) }}" />
    <meta property="og:image:width" content="750" />
    <meta property="og:image:height" content="375" />
    <meta name="twitter:card" content="summary_large_image" />
    <link rel="preload" as="image" href="{{ asset('front') }}/images/bg-shape2.png" />
    {{-- @include('front.layouts.includes.schema') --}}
@endsection
@push('css')
    <style>
        .pagination a.current {
            background: #b71a69;
            color: #fff;
        }

        .portfolio-about,
        .portfolio-challenges {
            font-family: "Roboto", sans-serif !important;
        }

        @media (min-width: 991px) {
            .swiper-slide {
                /* width: 390.333px !important; */
                margin-right: 10px !important;
                margin-left: 10px !important;
            }

            .app-screenshot .app-shots {
                width: 80%;
            }

            .app-device img {
                width: 80%;
            }

        }

        @media (max-width: 991px) {
            .app-screenshot .swiper-container .swiper-slide {
                padding: 0 50px;
            }

            .app-device img {
                padding: 35px;
            }
        }

    </style>
@endpush
@section('content')
    <section class="sub-heading light-bg portfolio-detail-heading">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a title="Home" href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item" aria-current="page"><a title="Portfolio"
                                    href="{{ route('portfolio') }}">Portfolio</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $portfolio->title }}</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-8 pr-xl-5">
                    <div class="middle-content">
                        <h1>{{ $portfolio->title }}</h1>
                        <h6>{{ $portfolio->category->name }}</h6>
                        <div class="portfolio-about">
                            {!! $portfolio->about_description !!}
                            <div class="mt-5">
                                <a class="play-btn mr-3" href="javascript:">Do you have similar project?</a>
                                <a class="btn btn-danger" href="{{ route('contact-us') }}">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="app-device"><img src="{{ asset('sitebucket/portfolio/' . $portfolio->about_image) }}"
                            alt="{{ $portfolio->alt_tag ?? $portfolio->title }}" width="401" height="812"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-space mb-4 mb-md-0">
        <div class="container">
            <div class="row">
                <div class="col-md-8  portfolio-challenges">
                    <h2 class="mb-5">Challenges</h2>
                     {!! $portfolio->challenges_description !!}
                </div>
                <div class="col-md-4 text-center">
                    <a class="call_to_action" href="{{ route('contact-us') }}">
                    <img src="../front/images/call_to_action.gif" alt="call to action"  width="257" height="380" />
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                </div>
            </div>
            {{-- <div class="row mb-4">
            <div class="col-md-12">
            <p>This benefit have led millions of startups to build taxi/cab hire service providing mobile app similar to Taxi Booking Application, the opinion of many wannabe businessperson and startups. It has changed into one of the most attractive businesses in the global startup area. The idea of on demand taxi booking solutions, has managed to modify the operation of the traditional transportation business. The idea of MT Taxi Booking app business with just one tap ride request and booking has caught up the opinion of many wannabe businessperson and startups. It has changed into one of the most attractive businesses in the global startup area.</p>
            </div>
        </div> --}}
            <div class="portfolio-solution">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Solution</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="list-type mt-4">
                        <div class="col-md-12">
                            <ul class="row">
                                @foreach ($portfolio->solutions as $psolution)
                                    <li class="col-lg-6 col-md-12 mt-4">
                                        <div class="inner">
                                            <h5>{{ $psolution->title }}</h5>
                                            <p>{{ $psolution->description }} </p>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-space pb-0 mb-5 light-bg">
        <div class="container">
            <div class="row app-screenshot-control">
                <div class="col-md-12 d-flex align-items-center">
                    <h2>App Screenshot</h2>
                </div>
            </div>
            <div class="row app-screenshot app-screenshot-control mt-3">
                <div class="col-lg-12">
                    <div class="arrows d-flex align-items-center justify-content-between">
                        <!-- Add Arrows -->
                        <div class="swiper-button-prev"> <img src="{{ asset('front') }}/images/pre-swipe.png"
                                alt="previous swipe"  width="18" height="31" /> </div>
                        <div class="swiper-button-next"> <img src="{{ asset('front') }}/images/next-swipe.png"
                                alt="next swipe"  width="18" height="31" /></div>
                    </div>
                    <!-- Swiper -->
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            @foreach ($portfolio->screenshots as $screenshot)
                                <div class="swiper-slide">
                                    <div class="app-shots">
                                        <img class=""
                                            src="{{ asset('sitebucket/portfolio/screenshot/' . $screenshot->image) }}"
                                            alt="{{ $screenshot->alt_tag }}" width="401" height="812">
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-space">
        <div class="container">
            <div class="row rounded lets-talk p-md-5 p-3 m-0 mt-5">
                <div class="col-md-12 p-3">
                    <div class="row inner align-items-center">
                        <div class="col-lg-9 col-md-7 mt-3 mb-3">
                            <h3 class="text-white">Do you have an interesting project? </h3>
                            <span class="text-white">Let's talk about that!</span>
                        </div>
                        <div class="col-lg-3 col-md-5 mt-3 mb-3 text-md-right">
                            <a title="Contact Us" class="btn btn-danger" href="{{ route('contact-us') }}">Start
                                Project</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-space light-bg blog-sub">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-7">
                    <h2>Similar Portfolio List</h2>
                    <div class="title-text">
                        <p class="margin-none">On our incredible journey spanning several years, we’ve had extraordinary
                            success so far.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-5 mt-3 text-md-right">
                    <a title="Contact Us" class="btn" href="{{ route('portfolio') }}">All Portfolio</a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row portfolio-list">
                @foreach (recentPortfolioData(3, $portfolio->id) as $l)
                    <div class="col-lg-4 col-md-6 portfolio_div" data-url="{{ route('portfolio.detail', $l->slug) }}">
                        <div class="card stories-box">
                            <a class="card-img" href="{{ route('portfolio.detail', $l->slug) }}"><img
                                    class="card-img-top" src="{{ asset('sitebucket/portfolio/' . $l->image) }}"
                                    alt="{{ $l->title }}" width="401" height="812"></a>
                            <div class="card-body">
                                <h6><span class="icon icon-calendar"></span>{{ $l->category->sort_name }}</h6>
                                <h4><a href="{{ route('portfolio.detail', $l->slug) }}">{{ $l->title }}</a></h4>
                                <div class="tags">
                                    <ul>
                                        <li>{{ $l->platform }}</li>
                                        <li>{{ $l->language }}</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="overlay">
                                <div class="card-body">
                                    <h6><span class="icon icon-calendar"></span> {{ $l->category->sort_name }}</h6>
                                    <h4><a href="{{ route('portfolio.detail', $l->slug) }}">{{ $l->title }}</a></h4>
                                    <div class="tags-list">
                                        <ul>
                                            <li><span>Platform</span><span>{{ $l->platform }}</span></li>
                                            <li><span>Programming Language</span><span>{{ $l->language }}</span></li>
                                            <li><span>Database</span><span>{{ $l->db }}</span></li>
                                            <li><span>Tools</span><span>{{ $l->tools }}</span></li>
                                        </ul>
                                    </div>
                                    <!-- <a class="btn" href="{{ route('portfolio.detail', $l->slug) }}">Read more</a> -->
                                    <a class="btn" href="{{ route('portfolio.detail', $l->slug) }}"
                                        style="min-width:100px;"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
@push('js')
@endpush

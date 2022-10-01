@extends('front.layouts.default')
@section('title', $solution->meta_title)
@section('meta')
    <meta name="description" content="{{ $solution->meta_description }}" />
    <meta name="keywords" content="{{ $solution->meta_keyword }}">
    <meta name="robots" content="{{ $solution->meta_robots }}" />
    <link rel="canonical" href="{{ route('solution.detail', $solution->slug) }}" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="{{ $solution->meta_title }}" />
    <meta property="og:description" content="{{ $solution->meta_description }}" />
    <meta property="og:keywords" content="{{ $solution->meta_keyword }}" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="article:modified_time"
        content="{{ \Carbon\Carbon::parse($solution->updated_at)->format('Y-m-d') }}" />
    <meta property="og:image" content="{{ asset('sitebucket/solution/' . $solution->image) }}" />
    <meta property="og:image:width" content="750" />
    <meta property="og:image:height" content="375" />
    <meta name="twitter:card" content="summary_large_image" />
    <link rel="preload" as="image" href="{{ asset('front') }}/images/bg-shape2.png" />
    {!! getFaqSchema($solution->faq->toArray()) !!}
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
    <section class="sub-heading light-bg solutions-detail-heading">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a title="Home" href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item" aria-current="page"><a title="Solutions"
                                    href="{{ route('solution') }}">Solutions</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $solution->title }}</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-8 pr-xl-5">
                    <div class="middle-content">
                        <h1>{{ $solution->title }}</h1>
                        <div class="title-text">
                            {!! $solution->about_description !!}
                            <div class="mt-5">
                                <a class="btn btn-danger" href="{{ route('contact-us') }}">Contact Us</a>
                                @if ($solution->video)
                                    <a class="play-btn ml-lg-5 ml-3" href="{{ $solution->video }}" target="_blank"><img
                                            src="{{ asset('front') }}/images/play.png" alt="{{ $solution->title }}" width="50" height="50">
                                        Watch The Video</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="app-device"><img src="{{ asset('sitebucket/solution/' . $solution->about_image) }}"
                            alt="{{ $solution->title }}" title="{{ $solution->title }}" width="380" height="285"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-space mb-4 mb-md-0">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h2 class="mb-5">{{ $solution->second_title }}</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    {!! $solution->second_description !!}
                </div>
                <div class="col-md-3 offset-md-1">
                    <h3 class="tag-border">Technology Stack</h3>
                    <div class="list-type technology-list mt-4">
                        <ul>
                            @foreach ($solution->technology as $tech)
                                <li>{{ $tech->name }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center pb-5 mb-0 mb-md-4">
                @foreach ($solution->solutions as $item)
                    <div class="col-lg-3 col-sm-6 mt-4">
                        <div class="app-box sm-box" title="Mobile App Development">
                            <div class="icon">
                                <img src="{{ asset('sitebucket/solution/' . $item->image) }}" alt="{{ $item->title }}"
                                    title="{{ $item->title }}" width="27" height="27">
                            </div>
                            <h3>{{ $item->title }}</h3>
                            <p>{{ $item->description }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="section-space pb-5 pb-xl-0 light-bg">
        <div class="container">
            <div class="row dev-solution">
                <div class="col-lg-5 col-md-4 mobile-swipe">
                    <!-- Swiper -->
                    <img src="{{ asset('sitebucket/solution/mobile-bg.png') }}" alt="Mobile background"
                        title="Mobile background" class="dev-frame">
                    <div class="screen-swipe swiper-container">
                        <div class="swiper-wrapper">
                            @foreach ($solution->screenshots as $item)
                                <div class="swiper-slide">
                                    <div class="app-device"><img
                                            src="{{ asset('sitebucket/solution/' . $item->image) }}"
                                            alt="{{ $item->title }}" title="{{ $item->title }}" width="423" height="778"></div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-8 pl-xl-3 pr-xl-5">
                    <div class="">
                        <h2 class="mb-5 pr-lg-5 pr-0">Custom {{ $solution->title }} Development For All</h2>
                    </div>
                    <!-- Swiper -->
                    <div class="swiper-container dev-solution-content">
                        <div class="swiper-wrapper">
                            @foreach ($solution->screenshots as $item)
                                <div class="swiper-slide">
                                    <div class="middle-content">
                                        <div class="title-text">
                                            <h5>{{ $item->title }}</h5>
                                            <p>{{ $item->description }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="control w-100 d-flex align-items-center justify-content-between">
                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>
                        <div class="arrows d-flex align-items-center justify-content-between">
                            <!-- Add Arrows -->
                            <div class="swiper-button-prev"> <img src="{{ asset('sitebucket/solution/pre-swipe.png') }}"
                                    alt="previous swipe" width="18" height="31" /></div>
                            <div class="swiper-button-next"> <img src="{{ asset('sitebucket/solution/next-swipe.png') }}"
                                    alt="next swipe" width="18" height="31" /></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-space">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <h2>Full Feature List</h2>
                    <div class="title-text">
                        <p>{{ $solution->feature_title }}</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($solution->feature_list as $item)
                    <div class="col-lg-3 col-sm-6 mt-4">
                        <div class="card feature-list">
                            <span class="card-img"><img class="card-img-top"
                                    src="{{ asset('sitebucket/solution/' . $item->image) }}" alt="{{ $item->title }}"
                                    title="{{ $item->title }}" width="56" height="56"></span>
                            <div class="card-body">
                                <h4>{{ $item->title }}</h4>
                                <p>{{ $item->description }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row rounded lets-talk p-md-5 p-3 m-0 mt-5">
                <div class="col-md-12 p-3">
                    <div class="row inner align-items-center">
                        <div class="col-lg-9 col-md-7 mt-3 mb-3">
                            <h5 class="text-white">Do you have an interesting project?</h5>
                            <h2 class="text-white">Let's talk about that!</h2>
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
    <section class="section-space light-bg">
        <div class="container">
            <div class="row mb-4">
                <div class="col-md-9">
                    <h2>Our customers say</h2>
                    <div class="title-text">
                        <p class="margin-none">{{ $solution->customer_title }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                @foreach (recentTestimonialData(2) as $t)
                    <div class="col-md-6 mt-4">
                        <div class="testimonials-box">
                            <span class="quote-icon"><img src="{{ asset('front') }}/images/quotes.png"
                                    alt="customer reviews" title="customer reviews" width="34" height="27"></span>
                            <p>{{ $t->description }}</p>
                            <div class="user-say">
                                <span class="user-icon">
                                    <img src="{{ $t->image??asset('front/images/avtar.png') }}" alt="customers" title="customers"
                                        class="w-100" width="64" height="64">
                                </span>
                                <span class="user-info">
                                    <strong>{{ $t->name }}</strong>
                                    {{ $t->short_title }}
                                </span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="section-space">
        <div class="container">
            <div class="row mb-4">
                <div class="col-md-9">
                    <h2>Frequently Asked Questions</h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="accordion faq" id="accordionExample">
                @foreach ($solution->faq as $key => $faq)
                    <div class="card border-left-0 border-right-0 border-bottom-0 border-top">
                        <div class="card-header border-0 rounded-0 p-0" id="heading{{ $key + 1 }}">
                            <a href="javascript:" class="btn-link d-block p-4 {{ $key != 0 ? 'collapsed ' : '' }}"
                                @if ($key == 0) aria-expanded="true" @else aria-expanded="false" @endif data-toggle="collapse" data-target="#collapse{{ $key + 1 }}"
                                aria-controls="collapse{{ $key + 1 }}">
                                {{ $faq->question }}
                            </a>
                        </div>
                        <div id="collapse{{ $key + 1 }}" class="collapse @if ($key == 0) show @endif"
                            aria-labelledby="heading{{ $key + 1 }}" data-parent="#accordionExample">
                            <div class="card-body">
                                {!! $faq->answer !!}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="section-space light-bg blog-sub">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-7">
                    <h2>Similar solution of the list</h2>
                    <div class="title-text">
                        <p class="margin-none">{{ $solution->solution_list_title }}</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-5 mt-3 text-md-right">
                    <a title="Contact Us" class="btn" href="{{ route('solution') }}">All Solutions</a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center mt-4">
                @foreach (recentSolutionData(3, $solution->id) as $item)
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
                                @php $small = substr($item->about_description, 0, 100); @endphp
                                <p>{!! substr(html_entity_decode(strip_tags($item->about_description)), 0, 100) . '...' !!}</p>
                                <div>
                                    <a class="more-btn" href="{{ route('solution.detail', $item->slug) }}">
                                        Explore
                                        more</a>
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

@extends('front.layouts.default')
@section('title', $technology->meta_title)
@section('meta')
    <meta name="description" content="{{ $technology->meta_description }}" />
    <meta name="keywords" content="{{ $technology->meta_keyword }}">
    <meta name="robots" content="{{ $technology->meta_robots }}" />
    <link rel="canonical" href="{{ route('technology.detail', $technology->slug) }}" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="{{ $technology->meta_title }}" />
    <meta property="og:description" content="{{ $technology->meta_description }}" />
    <meta property="og:keywords" content="{{ $technology->meta_keyword }}" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="article:modified_time"
        content="{{ \Carbon\Carbon::parse($technology->updated_at)->format('Y-m-d') }}" />
    <meta property="og:image" content="{{ asset('sitebucket/technology/' . $technology->image) }}" />
    <meta property="og:image:width" content="554" />
    <meta property="og:image:height" content="554" />
    <meta name="twitter:card" content="summary_large_image" />
    <link rel="preload" as="image" href="{{ asset('front') }}/images/bg-shape3.png" />
    {!! getFaqSchema($technology->faq->toArray()) !!}
    {{-- @include('front.layouts.includes.schema') --}}
@endsection
@push('css')
 <link href="{{ asset('front/css/technologies.css') }}" rel="stylesheet">
    <style>
        .blog_sec_img {
            width: 100% !important;
            height: 110px !important;
        }
        .blog_tech_sec .blog-box {
            padding: 10px;
        }
        .blog_tech_sec .card-body {
            text-align: center;
        }
    </style>
@endpush
@section('content')
    <section class="sub-heading light-bg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a title="Home" href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item"><a title="Service" href="{{ route('technology') }}">Technology</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $technology->short_title }}</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-7">
                    <h1>{{ $technology->title }}</h1>
                    <div class="title-text">
                        <p>{{ $technology->short_description }}</p>
                    </div>
                </div>
                <div class="col-lg-5 text-lg-right">
                    <div class="technology-sidebar-img d-flex align-items-center justify-content-center ml-lg-auto">
                        <img src="{{ asset('sitebucket/technology/' . $technology->image) }}" alt="Flutter Detail" width="100" height="100" />
                    </div>
                </div>
            </div>
                     <div class="service-experience-info" id="counter">
                <div class="row">
                    <div class="col-sm-6 col-lg-3">
                        <div class="info-box">
                            <strong class="count"><span class="counter-value" data-count="11">0</span>+</strong>
                            <span class="info-text">Years Experience</span>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="info-box">
                            <strong class="count"><span class="counter-value" data-count="300">0</span>+</strong>
                            <span class="info-text">Dedicated Team</span>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="info-box">
                            <strong class="count"><span class="counter-value" data-count="600">0</span>+</strong>
                            <span class="info-text">Happy Clients</span>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="info-box">
                            <strong class="count"><span class="counter-value" data-count="2500">0</span>+</strong>
                            <span class="info-text">Completed Projects</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-space primary-bg hire-testimonial-section technologies">
        <div class="container">
            <div class="row align-items-center why-hire">
                <div class="col-lg-8 pb-5 pb-lg-0">
                    <div class="middle-content">
                        <h2>{{ $technology->about_title }}</h2>
                        <div class="title-text">
                            {!! $technology->about_description !!}
                            <div>
                                <!--<a class="btn btn-danger" href="">Hire dedicated mobile app developers</a>-->
                                                                <a class="btn btn-danger" href="{{ route('contact-us') }}">{{ btnTecnology()[$technology->slug][0]??'Hire now' }}</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="swiper-container testimonials-slider">
                        <div class="swiper-wrapper">
                            @foreach (recentTestimonialData(2) as $t)
                                <div class="swiper-slide">
                                    <div class="testimonials-box">
                                        <p>{{ $t->description }}</p>
                                        <div class="start-review d-flex">
                                            @php
                                                $number =5;
                                            if($loop->first){
                                            $number =4;}
                                            @endphp
                                            @for($i=0;$i<$number;$i++)
                                            <i class="fas fa-star mr-1" style="color:#ffad0b"></i>
                                            @endfor
                                        </div>
                                        <div class="user-say">
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
                </div>
            </div>
        </div>
    </section>
        <section class="explore-services section-space">
        <div class="container">
            <div class="row">
                <div class="col-12 pb-4 mb-2">
                    <h2>Explore our services</h2>
                    <div class="title-text">
                        <p>We offer a broader spectrum of technology solutions to tick all the right boxes for our clients’ needs.</p>
                    </div>
                </div>
            </div>
            <div class="explore-service-block">
                @php $s = 0; @endphp
                    @foreach ($technology->sub_services as $key => $app)
                        @if ($app->type == 'technology_service')
                        <div class="row align-items-lg-center">
                            <div class="col-lg-8 explor-content-col">
                                <div class="content-block">
                                    <h3 class="heading"> {{ $app->title }}</h3>
                                    {!! $app->description !!}
                                    <div>
                                        <a class="btn btn-danger" href="{{ route('contact-us') }}">{{ btnTecnology()[$technology->slug][$s+1]??'Read more' }}</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 explor-image-col pb-5 pb-lg-0">
                                <div class="image-block">
                                    <img src="{{ asset('sitebucket/technology') . '/' . $app->image }}" alt="{{ $app->title }}" width="350" height="375">
                                </div>
                            </div>
                        </div>
                        @php $s++; @endphp
                        @endif
                    @endforeach
            </div>
        </div>
    </section>
    <section class="section-space light-bg">
        <div class="container">
            <h2 class="mb-4 mb-md-5">
                {{ strpos($technology->short_title, 'App') !== false? $technology->short_title: $technology->short_title . ' App' }}
                Development Expertise</h2>
            <div class="row flex-wrap align-items-center app-dev-list">
                @foreach ($technology->expertises as $item)
                    <div class="icon">
                        <a title="{{ $item->title }}" class="platforms-logo expertise-logo" style="cursor: auto;">
                            <img src="{{ asset('sitebucket/technology/expertise/' . $item->image) }}"
                                alt="{{ $item->title }}" width="120" height="120">
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="section-space">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>{{ $technology->app_dev_title }}</h2>
                </div>
            </div>
            <div class="row justify-content-center why-mobiletech mt-3">
                @foreach ($technology->sub_services as $app)
                    @if ($app->type == 'technology_app')
                        <div class="col-xl-3 col-lg-3 col-sm-6 col-12 mt-4">
                            <div class="app-box" title="{{ $app->title }}">
                                <div class="icon">
                                    <img src="{{ asset('sitebucket/technology/' . $app->image) }}"
                                        alt="{{ $app->title }}" width="40" height="40">
                                </div>
                                <h3>{{ $app->title }}</h3>
                                <p>{{ $app->description }}</p>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>
    <section class="section-space light-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-8">
                    <h2>Success stories</h2>
                    <div class="title-text">
                        <p>{{ $technology->stories_title }}</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 mt-3 text-md-right">
                    <a title="Explore More Stories" class="btn" href="{{ route('portfolio') }}">Explore More
                        Stories</a>
                </div>
            </div>
            <div class="row">
                @foreach (recentPortfolioDataRelative($technology->short_title) as $p)
                    <div class="col-lg-4 col-md-6">
                        <div class="card stories-box">
                            <a class="card-img" href="{{ route('portfolio.detail', $p->slug) }}"><img
                                    class="card-img-top" src="{{ asset('sitebucket/portfolio/' . $p->image) }}"
                                    alt="{{ $p->title }}" width="401" height="812"></a>
                            <div class="card-body">
                                <h6><span class="icon icon-calendar"></span>{{ $p->category->sort_name }}</h6>
                                <h4><a href="{{ route('portfolio.detail', $p->slug) }}">{{ $p->title }}</a></h4>
                                <div class="tags">
                                    <ul>
                                        <li>{{ $p->platform }}</li>
                                        <li>{{ $p->language }}</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="overlay">
                                <div class="card-body">
                                    <h6><span class="icon icon-calendar"></span>{{ $p->category->sort_name }}</h6>
                                    <h4><a href="{{ route('portfolio.detail', $p->slug) }}">{{ $p->title }}</a></h4>
                                    <div class="tags-list">
                                        <ul>
                                            <li><span>Platform</span><span>{{ $p->platform }}</span></li>
                                            <li><span>Programming Language</span><span>{{ $p->language }}</span></li>
                                            <li><span>Database</span><span>{{ $p->db }}</span></li>
                                            <li><span>Tools</span><span>{{ $p->tools }}</span></li>
                                        </ul>
                                    </div>
                                    <!-- <a class="btn" href="{{ route('portfolio.detail', $p->slug) }}">Read more</a> -->
                                    <a class="btn" href="{{ route('portfolio.detail', $p->slug) }}"
                                        style="min-width:100px;"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
<section class="section-space p-0 light-bg">
     <div class="container">
            <div class="row rounded lets-talk p-md-5 p-3 m-0">
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
                    <h2>Frequently Asked Questions</h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="accordion faq pb-4" id="accordionExample">
                @foreach ($technology->faq as $key => $faq)
                    <div class="card border-left-0 border-right-0 border-bottom-0 border-top">
                        <div class="card-header border-0 rounded-0 p-0" id="heading{{ $key + 1 }}">
                            <a class="btn-link d-block p-4 {{ $key != 0 ? 'collapsed ' : '' }}" @if ($key == 0) aria-expanded="true" @else aria-expanded="false" @endif
                                href="javascript:" data-toggle="collapse" data-target="#collapse{{ $key + 1 }}"
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
    <section class="section-space blog-sub">
        <div class="container blog_tech_sec">
            <div class="row">
                <div class="col-md-9">
                    <h2>Featured insights</h2>
                    <div class="title-text">
                        <p>{{ $technology->insight_title }}</p>
                    </div>
                </div>
                <div class="col-md-3 mt-3 text-md-right">
                    <a title="All Blogs" class="btn" href="{{ route('blog') }}">All Blogs</a>
                </div>
            </div>
            <div class="row justify-content-center">
                @foreach (recentPostDataRelative($technology->short_title) as $rblog)
                    <div class="col-lg-4 col-sm-6 mt-4 blog_div" data-url="{{ route('blog.detail', $rblog->slug) }}">
                        <div class="card blog-box">
                            <a class="card-img blog_sec_img" href="{{ route('blog.detail', $rblog->slug) }}">
                                <img class="card-img-top" src="../sitebucket/blog/{{ $rblog->image }}"
                                    alt="{{ $rblog->front_image_alt }}" title="{{ $rblog->front_image_title }}" width="360" height="360">
                            </a>
                            <div class="card-body">
                                <h6><span
                                        class="icon icon-calendar"></span>{{ date('F d, Y', strtotime($rblog->publish_date)) }}
                                    &nbsp;<i class="fas fa-circle"
                                        style="font-size: 3px;vertical-align: middle;margin-bottom: 2px;"></i>&nbsp;
                                    {{ getEstimateReadingTime($rblog->description) }}
                                </h6>
                                <h4><a href="{{ route('blog.detail', $rblog->slug) }}">{{ $rblog->title }}</a></h4>
                                {{-- <p>{{ substr(strip_tags($rblog->description), 0, 93) }}</p> --}}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
     <section class="section-space client-brand service-client">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="swiper-container client-brand-slder">
                        <div class="swiper-wrapper">
                            @foreach (allClientsData() as $c)
                                <div class="swiper-slide">
                                    <img src="{{ asset('sitebucket/client/' . $c->image) }}"
                                        alt="{{ $c->alt_image }}" width="200" height="100">
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-space cta-section start-project">
        <div class="container">
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
@endsection
@push('js')
    <script>
        $(document).on('click', '.explore-services-tab', function(event) {
            /*event.preventDefault();*/
            $('.explore-services-tab').removeClass('active');
            $(this).addClass('active');
        });
    </script>
@endpush

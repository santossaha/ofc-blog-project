@extends('front.layouts.default')
@section('title', $service->meta_title)
@section('meta')
    <meta name="description" content="{{ $service->meta_description }}" />
    <meta name="keywords" content="{{ $service->meta_keyword }}">
    <meta name="robots" content="{{ $service->meta_robots }}" />
    <link rel="canonical" href="{{ url()->current() }}" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="{{ $service->meta_title }}" />
    <meta property="og:description" content="{{ $service->meta_description }}" />
    <meta property="og:keywords" content="{{ $service->meta_keyword }}" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="article:modified_time" content="{{ \Carbon\Carbon::parse($service->updated_at)->format('Y-m-d') }}" />
    <meta property="og:image" content="{{ asset('sitebucket/service/' . $service->about_image) }}" />
    <meta property="og:image:width" content="750" />
    <meta property="og:image:height" content="375" />
    <meta name="twitter:card" content="summary_large_image" />
    <link rel="preload" as="image" href="{{ asset('front') }}/images/bg-graphic.png" />
    {!! getFaqSchema($service->faq->toArray()) !!}
    @php
       $path ='front.pages.service.schema.'.$service->slug;
      @endphp
      @include($path)
@endsection
@push('css')
    <link href="{{ asset('front/css/service-detail.css') }}" rel="stylesheet">
@endpush
@section('content')
    <section class="sub-heading light-bg service-title-section">
        <div class="container">
            <div class="row align-items-lg-center mb-4">
                <div class="col-lg-6 pb-4 pb-lg-0">
                    <div class="content-block">
                        <div class="row">
                            <div class="col-12">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a title="Home" href="{{ route('home') }}">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">{{ $service->title }}</li>
                                    </ol>
                                </nav>
                            </div>
                            <div class="col-lg-12">
                                <h1>{{ $service->title }}</h1>
                            </div>
                            <div class="col-lg-12">
                                <div class="title-text">
                                    <p>{{ $service->short_description }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="image-block">
                        <img src="{{ asset('sitebucket/service/' . $service->about_image) }}" alt="{{ $service->title }}" width="610" height="517">
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
    <section class="section-space primary-bg hire-testimonial-section">
        <div class="container">
            <div class="row align-items-center why-hire">
                <div class="col-lg-8 pb-5 pb-lg-0">
                    <div class="middle-content">
                        <h2>{{ $service->about_title}}</h2>
                        <div class="title-text">
                            {!! $service->about_description !!}
                            <div>
                                <a class="btn btn-danger" href="{{ route('contact-us') }}">{{ button()[$service->slug][0]??'Hire now' }}</a>
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
                    <h2>Creating Endless Opportunities for your Business</h2>
                    <div class="title-text">
                        <p>We inspire creativity and translate your vision into mission-critical solutions with best practices, an experienced team of <strong> best mobile app developers</strong> and exceptional support. </p>
                    </div>
                </div>
            </div>
            <div class="explore-service-block">
                @foreach ($service->sub_services as $key => $app)
                    @if ($app->type == 'service')
                        <div class="row align-items-lg-center">
                            <div class="col-lg-8 explor-content-col ">
                                <div class="content-block">
                                    <h3 class="heading">{{ $app->title }}</h3>
                                    {!! $app->description !!}
                                    <div>
                                        <a class="btn btn-danger" href="{{ route('contact-us') }}">{{ button()[$service->slug][$key+1]??'Read more' }}</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 explor-image-col pb-5 pb-lg-0">
                                <div class="image-block">
                                    <img src="{{ asset('sitebucket/service') . '/' . $app->image }}" alt="{{ $app->title }}" width="350" height="375">
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>
    <section class="section-space light-bg solution-deliver-section">
        <div class="container">
            <div class="row mb-4 mb-lg-0">
                <div class="col-lg-9 col-md-8">
                    <h2>Solutions we deliver</h2>
                    <div class="title-text">
                        <p>We offer a broader spectrum of technology solutions to tick all the right boxes for our clients’ needs.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 mt-3 text-md-right">
                    <a title="Explore More Stories" class="btn" href="{{ route('portfolio') }}">Explore More Stories</a>
                </div>
            </div>
            <div class="row">
                @foreach (recentSolutionData() as $solution)
                <div class="col-lg-4 pb-5 pb-lg-0">
                    <div class="solution-card">
                        <div class="img-box">
                            <img src="sitebucket/solution/{{ $solution->about_image }}" alt="image" width="380" height="285">
                        </div>
                        <div class="content-box">
                            <h3 class="heading">{{ $solution->title }}</h3>
                            <p class="short-desc">{!! substr(html_entity_decode(strip_tags($solution->about_description)), 0, 100) . '...' !!}</p>
                            <a title="Read More" class="btn" href="{{ route('solution.detail',$solution->slug) }}">Read more</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="section-space cta-section get-demo pb-0">
        <div class="container">
            <div class="row rounded lets-talk p-md-5 p-3 m-0 mt-5">
                <div class="col-md-12 p-3">
                    <div class="row inner align-items-center">
                        <div class="col-lg-8 col-md-7 mt-3 mb-3">
                            <h3>Have a mobile app development </h3>
                            <span>challenge to address?</span>
                        </div>
                        <div class="col-lg-4 col-md-5 mt-3 mb-3 text-md-right">
                            <a title="Contact Us" class="btn btn-danger" href="{{ route('contact-us') }}">We love to hear from you</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-space why-us-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>{{ $service->app_dev_title }}</h2>
                </div>
            </div>
            <div class="row justify-content-center why-mobiletech mt-3">
                @foreach ($service->sub_services as $app)
                    @if ($app->type == 'service_app')
                        <div class="col-xl-3 col-lg-3 col-sm-6 col-12 mt-4">
                            <div class="app-box" title="{{ $app->title }}">
                                <div class="icon">
                                    <img src="{{ asset('sitebucket/service/' . $app->image) }}"
                                        alt="{{ $app->title }}" width="64" height="64">
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
    <section class="section-space light-bg expertise-section">
        <div class="container">
            <h2 class="mb-4 mb-md-4">{{ $service->title }} Expertise</h2>
            <div class="row flex-wrap align-items-center app-dev-list">
                @foreach ($technology_list as $item)
                    <div class="icon">
                        <a title="{{ $item->title }}" class="platforms-logo"
                            href="{{ route('technology.detail', $item->slug) }}">
                            <img src="{{ asset('sitebucket/technology/' . $item->image) }}" alt="{{ $item->title }}" width="58" height="58">
                            <span>{{ $item->short_title }} </span>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="section-space success-stories-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-8">
                    <h2>Success stories</h2>
                    <div class="title-text">
                        <p>{{ $service->stories_title }}</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 mt-3 text-md-right">
                    <a title="Explore More Stories" class="btn" href="{{ route('portfolio') }}">Explore More
                        Stories</a>
                </div>
            </div>
            <div class="row">
                @foreach (recentPortfolioData() as $p)
                    <div class="col-lg-4 col-md-6 portfolio_div" data-url="{{ route('portfolio.detail', $p->slug) }}">
                        <div class="card stories-box">
                            <a class="card-img" href="{{ route('portfolio.detail', $p->slug) }}"><img
                                    class="card-img-top" src="{{ asset('sitebucket/portfolio/' . $p->image) }}"
                                    alt="{{ $p->title }}" width="401" height="812"></a>
                            <div class="card-body">
                                <span class="h6"><span class="icon icon-calendar"></span>{{ $p->category->sort_name }}</span>
                                <h3><a href="{{ route('portfolio.detail', $p->slug) }}">{{ $p->title }}</a></h3>
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
        <section class="section-space cta-section free-quote">
        <div class="container">
            <div class="row rounded lets-talk p-md-5 p-3 m-0 mt-5">
                <div class="col-md-12 p-3">
                    <div class="row inner align-items-center">
                        <div class="col-lg-9 col-md-7 mt-3 mb-3">
                            <h3>Want to give your app idea the wings of reality?</h3>
                            <span>Partner with us for end-to-end mobile app development services.</span>
                        </div>
                        <div class="col-lg-3 col-md-5 mt-3 mb-3 text-md-right">
                            <a title="Contact Us" class="btn btn-danger" href="{{ route('contact-us') }}">Get a Free Quote</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @php
    $custom_industries = [
        ['image' => 'indus_icon_automotive.png', 'name' => 'Automotive'],
        ['image' => 'indus_icon_job.png', 'name' => 'Job'],
        ['image' => 'indus_icon_real.png', 'name' => 'Real Estate'],
        ['image' => 'indus_icon_hosp.png', 'name' => 'Hospitality'],
        ['image' => 'indus_icon_travel.png', 'name' => 'Travel & Tourism'],
        ['image' => 'indus_icon_leaning.png', 'name' => 'Learning & Education'],
        ['image' => 'indus_icon_Oill.png', 'name' => 'Oil & Natural Gas'],
        ['image' => 'indus_icon_banking.png', 'name' => 'Banking / Finance'],
        ['image' => 'indus_icon_datingl.png', 'name' => 'Dating'],
        ['image' => 'indus_icon_transport.png', 'name' => 'Transport'],
    ];
    $white_custom_industries = [['image' => 'white_indus_icon_automotive.png', 'name' => 'Automotive'], ['image' => 'white_indus_icon_job.png', 'name' => 'Job'], ['image' => 'white_indus_icon_real.png', 'name' => 'Real Estate'], ['image' => 'white_indus_icon_hosp.png', 'name' => 'Hospitality'], ['image' => 'white_indus_icon_travel.png', 'name' => 'Travel & Tourism'], ['image' => 'white_indus_icon_leaning.png', 'name' => 'Learning & Education'], ['image' => 'white_indus_icon_Oill.png', 'name' => 'Oil & Natural Gas'], ['image' => 'white_indus_icon_banking.png', 'name' => 'Banking / Finance'], ['image' => 'white_indus_icon_datingl.png', 'name' => 'Dating'], ['image' => 'white_indus_icon_transport.png', 'name' => 'Transport']];
    @endphp

    <section class="section-space light-bg serve-various-industries-section">
        <div class="container">
            <h2 class="mb-3 mb-md-4">We cater our services for various industries</h2>
            <div class="row flex-wrap align-items-center app-dev-list five-icon">
                @foreach ($custom_industries as $key => $i)
                    <div class="icon">
                        <a title="{{ $i['name'] }}" class="platforms-logo a-platform">
                            <img class="black-icon" src="{{ asset('sitebucket') }}/industry/{{ $i['image'] }}"
                                alt="{{ $i['name'] }}" width="80" height="80">
                            <img class="white-icon"
                                src="{{ asset('sitebucket') }}/industry/{{ $white_custom_industries[$key]['image'] }}"
                                alt="{{ $i['name'] }}" width="80" height="80">
                            <span>{{ $i['name'] }}</span>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="section-space">
        <div class="container">
            <div class="row mb-4">
                <div class="col-md-9">
                    <h2>Mobile app development FAQs</h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="accordion faq pb-4" id="accordionExample">
                @foreach ($service->faq as $key => $faq)
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
                            <h3>Do you have an interesting project?</h3>
                            <span>Let's talk about that!</span>
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

@extends('front.layouts.default')
@section('title', $page->detail->meta_title)
@section('meta')
    <meta name="description" content="{{ $page->detail->meta_description }}" />
    <meta name="keywords" content="{{ $page->detail->meta_keyword }}">
    <meta name="robots" content="{{ $page->detail->meta_robots }}" />
    {{-- <link rel="canonical" href="{{ route('services') }}" /> --}}
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
    @include('front.layouts.includes.aboutus')
@endsection
@section('content')
    <section class="sub-heading light-bg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a title="Home" href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item">About Us</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-7">
                    <h1>About Us</h1>
                    <div class="title-text">
                        <p>We are a leading-edge mobile software and IoT solutions provider in India and the United States
                            with award-winning teams of designers and developers.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <h2 class="mb-3">Who we are?</h2>
                    <div class="pr-lg-5">
                        <p>We are a leading-edge mobile and IoT solutions provider. As a leading <strong>mobile app
                                development company</strong> in India and the US, we help our clients handle complex
                            business tasks with innovative IT and mobile software solutions. </p>
                        <p>Our customer base involves clients at both domestic and global levels. They invest in our
                            leading-edge and sophisticated technology solutions to accomplish business operations with
                            acquirable results. With our offerings, we strive to lend a helping hand to our clientele in
                            achieving targeted outcomes.</p>
                        <p class="mb-0">As an end-to-end service provider, we specialize in developing both
                            Android & iPhone applications that enhance productivity and user-engagement for our partners.
                        </p>
                        <p>Speaking of our Android & <strong>iPhone app services in India</strong> and the US, we deliver
                            custom solutions to minimize or reduce the latency of services to benefit customers. We excel in
                            offering comprehensive solutions without compromising quality from design to development and
                            deployment to support and maintenance.</p>
                    </div>
                </div>
                <div class="col-lg-5 mt-lg-0 mt-4">
                    <div class="dis-img">
                        <img src="{{ asset('front') }}/images/about-us.jpg" alt="mobile app development company"
                            title="right-img" width="538" height="504" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="client-brand section-space pt-0 service-client">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-1 col-md-2 col-3">
                    <h3 class="text-left border-bold">Our<br /> Clients</h3>
                </div>
                <div class="col-xl-11 col-md-10 col-9">
                    <div class="swiper-container client-brand-slder">
                        <div class="swiper-wrapper">
                            @foreach (allClientsData() as $c)
                                <div class="swiper-slide">
                                    <img src="{{ asset('sitebucket/client/' . $c->image) }}" alt="{{ $c->alt_image }}"
                                        title="{{ $c->alt_image }}" width="200" height="200">
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-space light-bg">
        <div class="container">
            <div>
                <h2>Vision & Mission</h2>
                <div class="title-text">
                    <p>To offer A-Z mobile apps and IoT solutions to our clientele for every niche as an end-to-end partner.
                    </p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-sm-6 mt-4 main-div">
                    <a class="app-box" title="Relationship" href="javascript:">
                        <div class="icon">
                            <img class="w-50" src="{{ asset('front') }}/images/partnership-handshake.svg"
                                alt="Relationship" width="34" height="34">
                        </div>
                        <h3>Relationship</h3>
                        <p class="max">At Expert App Devs, we invest our time and efforts to cultivate and
                            nurture client relationships. We assert importance on the quality of services we offer above
                            everything; thus, delivering more effective and impressive work.</p>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6 mt-4 main-div">
                    <a class="app-box" title="Excellence at work" href="javascript:">
                        <div class="icon">
                            <img class="w-50" src="{{ asset('front') }}/images/trophy.svg"
                                alt="Excellence at work" width="34" height="34">
                        </div>
                        <h3>Excellence at work</h3>
                        <p class="max">No matter what business requirement you come up with, we, at Expert App
                            Devs, work tirelessly towards improving your product and service in different ways. We envision
                            a positive attitude towards achieving your goals.</p>
                        {{-- <p>First, we work to assess our client requirements based on deep market research. At this stage, we leave no stone unturned to look at all ends to collect relevant data. Next, our experts formulate a strategy for prototyping and wireframing. We come up with the final result and launch it after proper testing and quality analysis in the final stage.</p> --}}
                    </a>
                </div>
                <div class="col-lg-4 col-sm-12 mt-4 main-div">
                    <a class="app-box" title="Team spirit" href="javascript:">
                        <div class="icon">
                            <img class="w-50" src="{{ asset('front') }}/images/team.svg" alt="Team spirit" width="34" height="34">
                        </div>
                        <h3>Team Spirit</h3>
                        <p class="max">An engaged and motivated workforce is what boosts the business’s bottom
                            line. Our experienced and skilled developers take this as their motto to maintain higher morale
                            and outperform with greater productivity.</p>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="section-space">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Our Achievement</h2>
                    <div class="title-text">
                        <p>Our award-winning app designers and developers have worked with their heads and hearts together
                            to serve multiple clients and win their trust on our incredible journey so far. We count it as a
                            crowning achievement and pride ourselves on it.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="counter-info" id="counter-home">
                        <div class="counter-txt">
                            <div class="number"><span class="counter-value" data-count="2500">0</span>+</div>
                            <h5>PROJECT COMPLETED</h5>
                        </div>
                        <div class="counter-txt">
                            <div class="number"><span class="counter-value" data-count="600">0</span>+</div>
                            <h5>CLIENTS SERVE</h5>
                        </div>
                        <div class="counter-txt">
                            <div class="number"><span class="counter-value" data-count="11">0</span>+</div>
                            <h5>YEARS IN BUSINESS</h5>
                        </div>
                        <div class="counter-txt">
                            <div class="number"><span class="counter-value" data-count="300">0</span>+</div>
                            <h5>Our Team</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-container recognitions-slder">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="{{ asset('front') }}/images/clutch2.png" alt="clutch 2019" height="126" width="127">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('front') }}/images/clutch.png" alt="clutch 2019" width="177" height="136">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('front') }}/images/microsoft-gold-partner.png" alt="Microsoft gold partner" width="265" height="91">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-space pb-5 light-bg">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-md-8">
                    <h2>Our customers say</h2>
                    <div class="title-text">
                        <p>We aren’t boasting! See what our customers have to say about Expert App Devs and how leveraging
                            our services has helped their businesses grow.</p>
                    </div>
                </div>
                <div class="col-12 customers-say">
                    <div class="swiper-container client-brand-slder">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="{{ asset('front') }}/images/nationa-geographic.png" alt="National Geographic" width="200" height="200">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('front') }}/images/ny-stock-exchange.png"
                                    alt="New York Stock Exchange" width="200" height="200">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('front') }}/images/nestle.png" alt="Nestlé" width="200" height="200">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('front') }}/images/abb.png" alt="ABB Group" width="200" height="200">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('front') }}/images/gea.png" alt="GEA Group" width="200" height="200">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('front') }}/images/stingsports.png" alt="Sting Sports" width="200" height="200">
                            </div>
                        </div>
                    </div>
                    <div class="our-testimonial">
                        <div class="swiper-container customers-top">
                            <div class="swiper-wrapper">
                                @foreach (allTestimonialData() as $t)
                                    <div class="swiper-slide">
                                        <div class="swiper-slide-container">
                                            <span class="quote-icon"><img
                                                    src="{{ asset('front') }}/images/quotes.png" alt="quotes" width="40" height="40"></span>
                                            <p>{{ $t->description }}</p>
                                            <div class="user-say">
                                                <span class="user-icon">
                                                    <img src="{{ $t->image??'front/images/avtar.png' }}" alt="User" class="w-100" width="52" height="52">
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
                        <!-- Add Arrows -->
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-space">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <h2>Need a consultation?</h2>
                    <div class="title-text">
                        <p class="margin-none">Have queries or want to know how we can help you with our services? Drop
                            us a line! We are available round the clock.</p>
                    </div>
                </div>
                <div class="col-md-3 mt-3 text-md-right">
                    <a title="Contact Us" class="btn btn-danger" href="{{ route('contact-us') }}">Contact Us</a>
                </div>
            </div>
        </div>
    </section>
@endsection

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

    <meta property="og:url" content="{{ url()->current() }}" />

    <!-- <meta property="article:modified_time" content="2018-12-27T08:53:36+00:00" /> -->

    <meta property="og:image" content="{{ asset('front/images/') }}/logo-black.jpg" />

    {{-- <meta property="og:image:width" content="750" /> --}}

    {{-- <meta property="og:image:height" content="375" /> --}}

    <meta name="twitter:card" content="summary_large_image" />



    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/vegas/2.4.0/vegas.css">

   - {{-- @include('front.layouts.includes.schema') --}}

@endsection

@push('css')
    <style type="text/css">
        @media (min-width: 768px) {

            .mobile {

                display: none;

            }

            .desktop {

                display: block !important;

            }

        }

        .desktop {

            display: none;

        }

        .blog_sec_img {

            width: 100% !important;

            height: 110px !important;

        }

        .blog_home_sec .blog-box {

            padding: 20px;

        }

        .blog_home_sec .card-body {

            text-align: left;

        }

        .banner.app-development {

            background-image: unset;

        }

        .banner.app-development .container-fulid .row a img {

            width: 100%;

            height: 100%;

            object-fit: cover;

            text-align: center;

            margin: 0 auto;

        }

    </style>
@endpush

@section('content')

    <section class=" banner app-development">

        <div class="container-fulid">

            <div class="row">

                <div class="col-12  d-none">

                    {{-- <a href="{{ route('contact-us') }}" target="_blank" rel="noopener noreferrer">

            <img src="{{ asset('front/images/merry-chirstmas.webp') }}"

               alt="mobile app development christmas offer" class="desktop">

            <img src="{{ asset('front/images/merry-chirstmas-mobile.webp') }}"

               alt="mobile app development christmas offer" class="mobile">

            </a> --}}

                </div>

            </div>

        </div>

    </section>

    <section class="home-banner" style="background-image: url(front/images/banner-main.jpg);">

        <div class="container">

            <div class="row">

                <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12">

                    <div class="banner-content">

                        <div class="title-wrapper position-relative">

                            <h6>Your Mobility Strategy</h6>

                        </div>

                        <h1>Get Top-notch, Extensively, Innovative Developers From Us.</h1>

                        <p class="mb-0">ExpertAppDevs has always prioritized its clients' product needs.</p>
                        <p>Our developers will customize the best-in-class mobile applications within your budget and in
                            accordance with your business model.</p>

                        <div class="btn-wrapper">

                            <a href="#" title="Get a Free Quote" class="primary-btn">Get a Free Quote <span
                                    class="ml-2"><i class="fa fa-arrow-right" aria-hidden="true"></i></span></a>

                        </div>

                    </div>

                </div>

                <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">

                    <div class="img-wrap">

                        <img src="{{ 'front/images/mobile-banner.png' }}" alt="mobile-banner">

                    </div>

                </div>

            </div>

        </div>

    </section>

    <section class="recognitions-section">

        <div class="container">

            <div class="logos-recognitions">

                <div class="row">

                    <div class="col-md-12">

                        <div class="swiper-container recognitions-slder">

                            <div class="swiper-wrapper">

                                <div class="swiper-slide">

                                    <img src="{{ asset('front') }}/images/clutch2.png" alt="clutch 2019"
                                        title="clutch 2019">

                                </div>

                                <div class="swiper-slide">

                                    <img src="{{ asset('front') }}/images/clutch.png" alt="clutch 2019"
                                        title="clutch 2019">

                                </div>

                                <div class="swiper-slide">

                                    <img src="{{ asset('front') }}/images/microsoft-gold-partner.png"
                                        alt="Microsoft gold partner" title="Microsoft gold partner">

                                </div>

                                <div class="swiper-slide">

                                    <img src="{{ asset('front') }}/images/clutch2.png" alt="clutch 2019"
                                        title="clutch 2019">

                                </div>

                                <div class="swiper-slide">

                                    <img src="{{ asset('front') }}/images/clutch.png" alt="clutch 2019"
                                        title="clutch 2019">

                                </div>

                                <div class="swiper-slide">

                                    <img src="{{ asset('front') }}/images/cio-applications-top-25-cyber-security-companies-01.png"
                                        alt="Microsoft gold partner" title="Microsoft gold partner">

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <div class="container">

            <div class="row">

                <div class="col-12">

                    <h2>Recognitions</h2>

                    <div class="title-text">

                        <p>We don't simply create apps; we create tools to help you grow your business. We provide
                            high-quality apps all over the world.
                        </p>

                    </div>

                </div>

            </div>

            <div class="row">

                <div class="col-12">

                    <div class="counter-info" id="counter">

                        <div class="counter-txt">

                            <div class="inner-content">

                                <div class="img-wrap wow zoomIn" data-wow-delay="0.2s" data-wow-duration="5s">

                                    <img src="{{ 'front/images/calendar-alt.png' }}" alt="calendar-alt">

                                </div>

                                <div class="right-content-img">

                                    <div class="number"><span class="counter-value" data-count="11">0</span>+</div>

                                    <h5>YEARS IN BUSINESS</h5>

                                </div>

                            </div>

                        </div>

                        <div class="counter-txt">

                            <div class="inner-content">

                                <div class="img-wrap wow zoomIn" data-wow-delay="0.2s" data-wow-duration="5s">

                                    <img src="{{ 'front/images/users.png' }}" alt="users">

                                </div>

                                <div class="right-content-img">

                                    <div class="number"><span class="counter-value" data-count="300">0</span>+
                                    </div>

                                    <h5>Team strength</h5>

                                </div>

                            </div>

                        </div>

                        <div class="counter-txt">

                            <div class="inner-content">

                                <div class="img-wrap wow zoomIn" data-wow-delay="0.2s" data-wow-duration="5s">

                                    <img src="{{ 'front/images/repeat.png' }}" alt="repeat">

                                </div>

                                <div class="right-content-img">

                                    <div class="number"><span class="counter-value" data-count="90">0</span>%</div>

                                    <h5>Repeat business</h5>

                                </div>

                            </div>

                        </div>



                        <div class="counter-txt">

                            <div class="inner-content">

                                <div class="img-wrap wow zoomIn" data-wow-delay="0.2s" data-wow-duration="5s">

                                    <img src="{{ 'front/images/mobile-alt.png' }}" alt="mobile-alt">

                                </div>

                                <div class="right-content-img">

                                    <div class="number"><span class="counter-value" data-count="2500">0</span>+
                                    </div>

                                    <h5>Mobile Apps Delivered</h5>

                                </div>

                            </div>

                        </div>

                        <div class="counter-txt">

                            <div class="inner-content">

                                <div class="img-wrap wow zoomIn" data-wow-delay="0.2s" data-wow-duration="5s">

                                    <img src="{{ 'front/images/smile.png' }}" alt="smile">

                                </div>

                                <div class="right-content-img">

                                    <div class="number"><span class="counter-value" data-count="600">0</span>+
                                    </div>

                                    <h5>Happy clients</h5>

                                </div>

                            </div>

                        </div>

                        <div class="counter-txt">

                            <div class="inner-content">

                                <div class="img-wrap wow zoomIn" data-wow-delay="0.2s" data-wow-duration="5s">

                                    <img src="{{ 'front/images/time.png' }}" alt="pencil-ruler">

                                </div>

                                <div class="right-content-img">

                                    <div class="number"><span class="counter-value" data-count="90">0</span>%</div>

                                    <h5>Ontime Delivery</h5>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <section class="explore-section position-relative">

        <div class="container position-relative">

            <div class="row">

                <div class="col-12">

                    <h2>Hire The Best App Developers </h2>

                    <div class="title-text">

                        <p>Our squad possesses experience in fulfilling the intended goals and shape ideas in accordance
                            with market demand.</p>

                    </div>

                </div>

            </div>

            <div class="row">

                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">

                    <div class="inner-explore-box position-relative">

                        <div class="img-wrap mb-3 wow fadeInDown" data-wow-delay="0.2s" data-wow-duration="1s">

                            <img src="{{ 'front/images/mobile.png' }}" alt="mobile" class="black-icon">

                            <img src="{{ 'front/images/white-mobile.png' }}" alt="mobile" class="white-icon">

                        </div>

                        <div class="pattern-wrap">

                            <img src="{{ 'front/images/e-dots.png' }}" alt="mobile">

                        </div>

                        <h4 class="mb-2">Mobile App <br>Development</h4>

                        <p>Mobile apps assist to drive a digital process and model, which in turn reduces retail costs and
                            increases profitability.</p>

                        <div class="arrow-blue">

                            <a href="#" title="arrow"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                        </div>

                    </div>

                </div>

                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">

                    <div class="inner-explore-box position-relative">

                        <div class="img-wrap mb-3 wow fadeInDown" data-wow-delay="0.2s" data-wow-duration="1s">

                            <img src="{{ 'front/images/android.png' }}" alt="mobile" class="black-icon">

                            <img src="{{ 'front/images/white-android.png' }}" alt="mobile" class="white-icon">

                        </div>

                        <div class="pattern-wrap">

                            <img src="{{ 'front/images/e-dots.png' }}" alt="mobile">

                        </div>

                        <h4 class="mb-2">Android Mobile App <br>Development</h4>

                        <p>Our tech-obsessed Android mobile app developers are always here to help you create dependable,
                            perfect, and effective Android apps. Our sleek and smooth apps are performance and speed
                            optimized across many platforms.</p>

                        <div class="arrow-blue">

                            <a href="#" title="arrow"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                        </div>

                    </div>

                </div>

                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">

                    <div class="inner-explore-box position-relative">

                        <div class="img-wrap mb-3 wow fadeInDown" data-wow-delay="0.2s" data-wow-duration="1s">

                            <img src="{{ 'front/images/apple-alt.png' }}" alt="mobile" class="black-icon">

                            <img src="{{ 'front/images/white-apple-alt.png' }}" alt="mobile" class="white-icon">

                        </div>

                        <div class="pattern-wrap">

                            <img src="{{ 'front/images/e-dots.png' }}" alt="mobile">

                        </div>

                        <h4 class="mb-2">iPhone App <br>Development</h4>

                        <p>You'd want to collaborate with a mobile app development company that has extensive expertise in
                            developing iPhone and iPad apps. Our top custom mobile app developers and designers guarantee
                            feature-rich applications of many sorts, including eCommerce.</p>

                        <div class="arrow-blue">

                            <a href="#" title="arrow"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                        </div>

                    </div>

                </div>

                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">

                    <div class="inner-explore-box position-relative">

                        <div class="img-wrap mb-3 wow fadeInDown" data-wow-delay="0.2s" data-wow-duration="1s">

                            <img src="{{ 'front/images/gamepad.png' }}" alt="mobile" class="black-icon">

                            <img src="{{ 'front/images/white-gamepad.png' }}" alt="mobile" class="white-icon">

                        </div>

                        <div class="pattern-wrap">

                            <img src="{{ 'front/images/e-dots.png' }}" alt="mobile">

                        </div>

                        <h4 class="mb-2">Game Development</h4>

                        <p>We design technologies and platforms that improve performance, allow access to more features, and
                            produce demonstrable outcomes. Our worldwide team will lead, create, and execute people-inspired
                            technical and architectural decisions. </p>

                        <div class="arrow-blue">

                            <a href="#" title="arrow"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                        </div>

                    </div>

                </div>

                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">

                    <div class="inner-explore-box position-relative">

                        <div class="img-wrap mb-3 wow fadeInDown" data-wow-delay="0.2s" data-wow-duration="1s">

                            <img src="{{ 'front/images/cloud.png' }}" alt="mobile" class="black-icon">

                            <img src="{{ 'front/images/white-cloud.png' }}" alt="mobile" class="white-icon">

                        </div>

                        <div class="pattern-wrap">

                            <img src="{{ 'front/images/e-dots.png' }}" alt="mobile">

                        </div>

                        <h4 class="mb-2">IoT Development</h4>

                        <p>We provide top IoT services to assist businesses and organizations throughout the world in
                            realizing the many benefits of IoT. We have expertise in combining edge devices, gateways, and
                            cloud platforms to provide a precisely built IoT ecosystem that allows enterprises to maximize
                            revenues.</p>

                        <div class="arrow-blue">

                            <a href="#" title="arrow"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                        </div>

                    </div>

                </div>

                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">

                    <div class="inner-explore-box position-relative">

                        <div class="img-wrap mb-3 wow fadeInDown" data-wow-delay="0.2s" data-wow-duration="1s">

                            <img src="{{ 'front/images/mobile-alt.png' }}" alt="mobile" class="black-icon">

                            <img src="{{ 'front/images/white-mobile-alt.png' }}" alt="mobile" class="white-icon">

                        </div>

                        <div class="pattern-wrap">

                            <img src="{{ 'front/images/e-dots.png' }}" alt="mobile">

                        </div>

                        <h4 class="mb-2">Cross-Platform App <br>Development</h4>

                        <p>Our expertise in developing cross-platform mobile apps and online experiences utilizing industry
                            standard technologies such as HTML5, CSS3, and JavaScript for mobile applications and flexible
                            and adaptable approaches for websites is unrivaled in the market.</p>

                        <div class="arrow-blue">

                            <a href="#" title="arrow"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <section class="section-space solutions-section">

        <div class="container">

            <div class="row align-items-center">

                <div class="col-lg-9 col-md-8">

                    <h2>Upscale Your Business</h2>

                    <div class="title-text">

                        <p class="margin-none">We have a team of skilled, committed, and energetic mobile app
                            programmers for all platforms that strive to create one-of-a-kind mobile apps.

                        </p>

                    </div>

                </div>

                <div class="col-lg-3 col-md-4 mt-3 text-md-right">

                    <a title="View More Solution" class="btn" href="{{ route('solution') }}">Explore More
                        Stories</a>

                </div>

            </div>

            <div class="row">

                @foreach (recentSolutionData() as $solution)
                    <div class=" d-none col-lg-4 col-sm-6 mt-sm-3 mb-sm-3  mt-2 mb-2">

                        <div class="card solutions-list-box">

                            <div class="card-body">

                                <h6>{{ $solution->sub_title }}</h6>

                                <h4>{{ $solution->title }}</h4>

                                <div class="tags">

                                    <ul>

                                        @foreach ($solution->technology as $st)
                                            <li>{{ $st->name }}</li>
                                        @endforeach

                                    </ul>

                                </div>

                                <p>{!! substr(html_entity_decode(strip_tags($solution->about_description)), 0, 100) . '...' !!}</p>

                                <div>

                                    <a class="more-btn" href="{{ route('solution.detail', $solution->slug) }}">

                                        Explore more</a>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="col-lg-4 col-md-6 portfolio_div"
                        data-url="{{ route('solution.detail', $solution->slug) }}">

                        <div class="card stories-box">

                            <a class="card-img" href="{{ route('solution.detail', $solution->slug) }}"><img
                                    class="card-img-top" src="sitebucket/solution/{{ $solution->about_image }}"
                                    alt="{{ $solution->title }}" title="{{ $solution->title }}"></a>

                            <div class="card-body">

                                <h4><a
                                        href="{{ route('solution.detail', $solution->slug) }}">{{ $solution->title }}</a>

                                </h4>

                                <div class="title-text">

                                    <p>{!! substr(html_entity_decode(strip_tags($solution->about_description)), 0, 100) . '...' !!}</p>

                                </div>

                                <div class="btn-wrap">

                                    <a title="Read more" class="btn" href="#">Read more</a>

                                </div>

                            </div>

                        </div>

                    </div>
                @endforeach

            </div>

        </div>

    </section>

    <!--<section class="section-space light-bg">

       <div class="container">

          <h2>Platforms we work with</h2>

          <div class="title-text">

             <p>Technology transcends boundaries, and so do our mobile app development services. As an end-to-end

                partner, we provide

                comprehensive solutions across multiple platforms.

             </p>

          </div>

          <div class="swiper-container platforms-slder">

             <div class="swiper-wrapper">

                @foreach ($technology as $item)
    <div class="swiper-slide">

                   <a title="{{ $item->title }}" class="platforms-logo text-center"

                      href="{{ route('technology.detail', $item->slug) }}">

                   <img src="sitebucket/technology/{{ $item->image }}" alt="{{ $item->title }}"

                      title="{{ $item->title }}">

                   <span>{{ $item->short_title }}</span>

                   </a>

                </div>
    @endforeach

             </div>

          </div>

       </div>

    </section>-->

    <section class="section-space light-bg">

        <div class="container">

            <h2>Platforms We Work With</h2>

            <div class="title-text">

                <p>Technology transcends boundaries, and so do our mobile app development services. As an end-to-end

                    partner, we provide

                    comprehensive solutions across multiple platforms.

                </p>

            </div>

            <div class="row platforms-slder">

                <div class="col-md-12 d-flex flex-wrap justify-content-between">

                    @foreach ($technology as $item)
                        <div class="swiper-slide w-auto">

                            <a title="{{ $item->title }}" class="platforms-logo text-center"
                                href="{{ route('technology.detail', $item->slug) }}">

                                <img src="sitebucket/technology/{{ $item->image }}" alt="{{ $item->title }}"
                                    title="{{ $item->title }}">

                                <span>{{ $item->short_title }}</span>

                            </a>

                        </div>
                    @endforeach

                </div>

            </div>

        </div>

    </section>



    <section class="section-space">

        <div class="container">

            <div class="row">

                <div class="col-lg-9 col-md-8">

                    <h2>Success Stories</h2>

                    <div class="title-text">

                        <p>On our incredible journey spanning several years, we’ve had extraordinary success so far. We

                            strive to achieve more.

                        </p>

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
                                    class="card-img-top" src="sitebucket/portfolio/{{ $p->image }}"
                                    alt="{{ $p->title }}" title="{{ $p->title }}"></a>

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

                        </div>

                    </div>
                @endforeach

            </div>

        </div>

    </section>

    <section class="section-space client-bg" style="background-image: url(front/images/custom-say-bg.jpg);">

        <div class="container">

            <div class="row justify-content-center text-center">

                <div class="col-md-8">

                    <h2>Our Customers Say</h2>

                    <div class="title-text">

                        <p>Being a customer-centric organization, we devote all our resources to serve our customers to the

                            best of our abilities. Here’s what they opine about our services.

                        </p>

                    </div>

                </div>

                <div class="col-12 customers-say">

                    <div class="our-testimonial">

                        <div class="swiper-container customers-top">

                            <div class="swiper-wrapper">

                                @foreach (allTestimonialData() as $t)
                                    <div class="swiper-slide">

                                        <div class="swiper-slide-container">

                                            <span class="quote-icon"><img src="front/images/quotes.png"
                                                    alt="customer reviews" title="customer reviews"></span>

                                            <p>{{ $t->description }}</p>

                                            <div class="user-say">

                                                <span class="user-icon">

                                                    <img src="{{ $t->image }}" alt="customers" title="customers"
                                                        class="w-100">

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

                    <div class="swiper-container  client-brand-slder">

                        <!-- <div class="swiper-container customers-thumbs"> -->

                        <div class="swiper-wrapper">

                            @foreach (allClientsData() as $c)
                                <div class="swiper-slide">

                                    <img src="sitebucket/client/{{ $c->image }}" alt="{{ $c->alt_image }}"
                                        title="{{ $c->alt_image }}">

                                </div>
                            @endforeach

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <section class="section-space">

        <div class="container blog_home_sec">

            <div class="row">

                <div class="col-md-9">

                    <h2>Featured Insights</h2>

                    <div class="title-text">

                        <p>Get an insight into various topics to develop a deeper understanding of technology, services, and

                            solutions.

                        </p>

                    </div>

                </div>

                <div class="col-md-3 mt-3 text-md-right">

                    <a title="All Blogs" class="btn" href="{{ route('blog') }}">All Blogs</a>

                </div>

            </div>

            <div class="row justify-content-center">

                @foreach (recentPostData() as $rblog)
                    <div class="col-lg-4 col-sm-6 mt-4 blog_div" data-url="{{ route('blog.detail', $rblog->slug) }}">

                        <div class="card blog-box">

                            <a class="card-img blog_sec_img" href="{{ route('blog.detail', $rblog->slug) }}">

                                {{-- <img class="card-img-top" src="sitebucket/blog/{{ $rblog->front_image }}" alt="{{ $rblog->front_image_alt }}" title="{{ $rblog->front_image_title }}"> --}}

                                <img class="card-img-top" src="sitebucket/blog/{{ $rblog->image }}"
                                    alt="{{ $rblog->front_image_alt }}" title="{{ $rblog->front_image_title }}">

                            </a>

                            <div class="card-body">

                                <h6><span
                                        class="icon icon-calendar"></span>{{ date('F d, Y', strtotime($rblog->publish_date)) }}

                                    &nbsp;<i class="fas fa-circle"
                                        style="font-size: 3px;vertical-align: middle;margin-bottom: 2px;"></i>&nbsp;

                                    {{ getEstimateReadingTime($rblog->description) }}

                                </h6>

                                <h4><a href="{{ route('blog.detail', $rblog->slug) }}">{{ $rblog->title }}</a></h4>

                                {{-- <p>{!! substr(html_entity_decode(strip_tags($rblog->description)), 0, 100) !!}</p> --}}

                            </div>

                        </div>

                    </div>
                @endforeach

            </div>

        </div>

    </section>

    <section class="section-space light-bg need-consultation">

        <div class="container">

            <div class="row justify-content-center text-center">

                <div class="col-md-12">

                    <h2>Need a Consultation?</h2>

                    <div class="title-text">

                        <p class="margin-none">Have queries or questions about our mobile app design and development

                            services? We are available round the

                            clock. Reach out to us now!

                        </p>

                        <p class="margin-none d-none">Have queries or questions about our services? We are available round

                            the

                            clock. Reach out to us now!

                        </p>

                        <a title="Contact Us" class="btn btn-danger mt-3" href="{{ route('contact-us') }}">Contact
                            Us</a>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>

    <script type="https://cdnjs.cloudflare.com/ajax/libs/vegas/2.4.0/vegas.min.js"></script>

    <script type="text/javascript">
        new WOW().init();



        (function($) {

            $.fn.extend({

                rotaterator: function(options) {



                    var defaults = {

                        fadeSpeed: 500,

                        pauseSpeed: 100,

                        child: null

                    };



                    var options = $.extend(defaults, options);



                    return this.each(function() {

                        var o = options;

                        var obj = $(this);

                        var items = $(obj.children(), obj);

                        items.each(function() {
                            $(this).hide();
                        })

                        if (!o.child) {
                            var next = $(obj).children(':first');

                        } else {
                            var next = o.child;

                        }

                        $(next).fadeIn(o.fadeSpeed, function() {

                            $(next).delay(o.pauseSpeed).fadeOut(o.fadeSpeed, function() {

                                var next = $(this).next();

                                if (next.length == 0) {

                                    next = $(obj).children(':first');

                                }

                                $(obj).rotaterator({
                                    child: next,
                                    fadeSpeed: o.fadeSpeed,
                                    pauseSpeed: o.pauseSpeed
                                });

                            })

                        });

                    });

                }

            });

        })(jQuery);





        $(document).ready(function() {

            $('#rotate').rotaterator({
                fadeSpeed: 1000,
                pauseSpeed: 1000
            });

        });
    </script>



@endsection

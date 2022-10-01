@extends('front.layouts.default')
@section('title', 'React Native App Development Company in USA - Expert App Devs ')
@section('meta')
    <meta name="description"
        content="Expert App Devs is one of the top React native app development companies based in the US. We provide the best quality mobile app services as per your requirements. Hire React native  app developers on an hourly and monthly basis Now!" />
@endsection
@push('css')
    <link href="{{ asset('/theme/vendors/general/sweetalert2/dist/sweetalert2.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('front/css/landing.css') }}" rel="stylesheet">
@endpush
@section('content')
    <section class="mt-5 section-space">
        <div class="container landing">
            <div class="row justify-content-center text-center">
                <div class="col-lg-6 title-text">
                    <h1 class="font-weight-bold">
                        <p id="display"></p> React Native Development Company
                    </h1>
                    <div class="row justify-content-center d-none">
                        <form id="contactUsForm" class="email-send mx-2">
                            <div class="input-group ">
                                <input type="email" class="form-control email" placeholder="Enter Your Email" name="email">
                                <div class="input-group-append">
                                    <button class="btn btn-primary rounded-pill btn-submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="text-center mt-3">
                        <button class="btn rounded-pill ">
                            <span><i class='fas fa-phone'></i></span>
                            <span><a href="tel:16232422622" class="text-white">+1-623-242-2622</a></span>
                        </button>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <form id="landingForm">
                                <div class="form-group">
                                    <input type="text" name="name" placeholder="Enter Your Name" class="form-control name">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" placeholder="Enter Your Email"
                                        class="form-control emailform">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="phone" placeholder="Enter Your Phone"
                                        class="form-control phone">
                                </div>
                                <div class="form-group">
                                    <textarea name="abhot" placeholder="About your project"
                                        class="form-control about"></textarea>
                                </div>
                                <div class="col-sm-4 text-right d-flex justify-content-end form-submit align-items-end">
                                    <button class="btn">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="client-brand d-none">
        <div class="container">
            <div class="row">
                <div class="col-md-4 bg-dark">
                    <img data-src="{{ asset('front/images/1720.png') }}" class="lazy" />
                </div>
                <div class="col-md-4 bg-dark">
                    <img data-src="{{ asset('front/images/1720.png') }}" class="lazy" />
                </div>
                <div class="col-md-4 bg-dark">
                    <img data-src="{{ asset('front/images/1720.png') }}" class="lazy" />
                </div>
            </div>
        </div>
    </section>
    <section class="section-space  light-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <h2 class="mb-2">React Native Mobile Application Development</h2>
                    <div class="">
                        <div class="title-text ">
                            <p class="margin-none text-justify pb-3">Developing mobile applications on React Native can help
                                you
                                reduce development costs and
                                reach out to a broader audience. With React Native, you can develop mobile apps for various
                                platforms without spending time, money, and resources on individual development.</p>
                            <p class="margin-none text-justify">At Expert App Devs, we offer expert React Native Mobile
                                Application Development services.With proven expertise in cross-platform
                                mobile app development, we provide React Native Mobile App Services that align with
                                your business requirements.</p>
                            <div class="list-type mt-2">
                                <ul>
                                    <li>Native App Development</li>
                                    <li>Hybrid App Development</li>
                                    <li>Server-Side API Integration</li>
                                    <li>Prototype and Wireframe Development</li>
                                    <li>UX/UI Design and Development</li>
                                    <li>Migration Solutions</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="dis-img pt-3">
                        <img src="{{ asset('front\images\React-Native-Mobile-Applicatio-Development.webp') }}"
                            alt="right-img" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-space  message ">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-lg-7 col-12">
                    <h2 class="">Our proven approach allows us to deliver projects on time and within budget
                    </h2>
                    <ul class="title-text">
                        <li class="font-weight-bold ">
                            <p class="margin-none text-justify ">
                                We put a dedicated project manager on every client’s project so
                                there’s a
                                single point of
                                contact throughout the development process.
                            </p>
                        </li>
                        <li class=" font-weight-bold ">
                            <p class="margin-none text-justify ">Our project managers will listen to what’s needed and
                                work with our
                                developers to make it
                                happen.
                            </p>
                        </li>
                        <li class=" font-weight-bold ">
                            <p class="margin-none text-justify ">We’ll even let you know&nbsp;when there may be an
                                alternative way to
                                approach that can
                                create even better results. </p>
                        </li>
                        <li class=" font-weight-bold ">
                            <p class="margin-none text-justify ">Our rapid prototyping process lets you see your project
                                as it grows
                                from concept to reality
                                so you are in the loop at all times. </p>
                        </li>
                        <li class=" font-weight-bold ">
                            <p class="margin-none text-justify ">We’re confident that clients who invest with us will see
                                their business
                                grow
                                due to the
                                multiplying effect of custom software development.</p>
                        </li>
                    </ul>
                </div>
                <div class="col-md-5 col-lg-5 col-12 " id="ready-call">
                    <div class="card ">
                        <div class="card-body ">
                            <h3 class="text-center pt-3 mb-4">Ready to get started? Give us a call!</h3>
                            <p class="text-center">
                                <button class="btn rounded-pill mt-2">
                                    <span><i class='fas fa-phone'></i></span>
                                    <span><a href="tel:16232422622" class="text-white">+1-623-242-2622</a></span>
                                </button>
                            </p>
                        </div>
                    </div>
                    <form id="contactUsForm1"
                        class="email-send mx-2 d-none align-self-end  mt-md-5 mt-lg-5  pt-md-5 pt-lg-5  mt-4">
                        <div class="input-group ">
                            <input type="email" class="form-control email1" placeholder="Enter Your Email" name="email">
                            <div class="input-group-append">
                                <button class="btn btn-primary rounded-pill btn-submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="section-space light-bg d-none">
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
                                alt="Relationship">
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
                                alt="Excellence at work">
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
                            <img class="w-50" src="{{ asset('front') }}/images/team.svg" alt="Team spirit">
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
    <section class="section-space light-bg">
        <div class="container">
            <div class="row portfolio-list">
                @if (isset($portfolio) && !empty($portfolio))
                    @foreach ($portfolio as $p)
                        <div class="col-lg-4 col-md-6 portfolio_div" data-url="{{ route('portfolio.detail', $p->slug) }}">
                            <div class="card stories-box">
                                <a class="card-img" href="{{ route('portfolio.detail', $p->slug) }}"><img
                                        class="card-img-top" src="{{ asset('sitebucket/portfolio/' . $p->image) }}"
                                        alt="{{ $p->alt_tag ?? $p->title }}" title="{{ $p->title }}"></a>
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
                                        <h6><span class="icon icon-calendar"></span> {{ $p->category->sort_name }}</h6>
                                        <h4><a href="{{ route('portfolio.detail', $p->slug) }}">{{ $p->title }}</a>
                                        </h4>
                                        <div class="tags-list">
                                            <ul>
                                                <li><span>Platform</span><span>{{ $p->platform }}</span></li>
                                                <li><span>Programming Language</span><span>{{ $p->language }}</span></li>
                                                <li><span>Database</span><span>{{ $p->db }}</span></li>
                                                <li><span>Tools</span><span>{{ $p->tools }}</span></li>
                                            </ul>
                                        </div>
                                        <!-- <a class="btn" href="{{ route('portfolio.detail', $p->slug) }}">Read  more</a> -->
                                        <a class="btn" href="{{ route('portfolio.detail', $p->slug) }}"
                                            style="min-width:100px;"><i class="fa fa-arrow-right"
                                                aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
    <section class="choose d-none ">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4 col-lg-4">
                    <div class="card border-0" style="width: 18rem;">
                        <img src="https://www.coretechs.com/wp-content/uploads/2020/08/gil_illustration.png"
                            class="card-img-top text-center rounded-circle mx-auto d-block" alt="">
                        <div class="card-body">
                            <h5 class="card-title text-center">Card title</h5>
                            <p class="card-text text-center">Some quick example text to build on the card title and make up
                                the
                                bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4"></div>
                <div class="col-12 col-md-4 col-lg-4"></div>
            </div>
        </div>
    </section>
    <section class="section container-fluid" id="gmb_wrapper">
        <div class="container-fluid container-lg">
            <div class="row justify-content-center justify-content-lg-start">
                <div class="col-12 customers-say my-5">
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
                <div class="col-11 offset-lg-2 col-lg-9">
                    <div class="card shadow ">
                        <div id="gmb_circle">
                            <div id="inner_circle">
                                <div class="star_wrapper">
                                    <!-- Generator: Adobe Illustrator 24.2.1, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 50"
                                        style="enable-background:new 0 0 50 50;" xml:space="preserve">
                                        <style>
                                            .star {
                                                fill: #EDC82E;
                                            }
                                        </style>
                                        <g>
                                            <g>
                                                <path class="star"
                                                    d="M26.96,9.36l4.45,9.02l9.96,1.45c1.79,0.26,2.5,2.46,1.21,3.72l-7.2,7.02l1.7,9.92
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   c0.31,1.79-1.58,3.13-3.16,2.3L25,38.11l-8.91,4.68c-1.58,0.84-3.47-0.5-3.16-2.3l1.7-9.92l-7.2-7.02
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   c-1.29-1.26-0.58-3.46,1.21-3.72l9.96-1.45l4.45-9.02C23.85,7.74,26.16,7.76,26.96,9.36z">
                                                </path>
                                            </g>
                                        </g>
                                    </svg>
                                    <!-- Generator: Adobe Illustrator 24.2.1, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 50"
                                        style="enable-background:new 0 0 50 50;" xml:space="preserve">
                                        <style>
                                            .star {
                                                fill: #EDC82E;
                                            }
                                        </style>
                                        <g>
                                            <g>
                                                <path class="star"
                                                    d="M26.96,9.36l4.45,9.02l9.96,1.45c1.79,0.26,2.5,2.46,1.21,3.72l-7.2,7.02l1.7,9.92
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   c0.31,1.79-1.58,3.13-3.16,2.3L25,38.11l-8.91,4.68c-1.58,0.84-3.47-0.5-3.16-2.3l1.7-9.92l-7.2-7.02
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   c-1.29-1.26-0.58-3.46,1.21-3.72l9.96-1.45l4.45-9.02C23.85,7.74,26.16,7.76,26.96,9.36z">
                                                </path>
                                            </g>
                                        </g>
                                    </svg>
                                    <!-- Generator: Adobe Illustrator 24.2.1, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 50"
                                        style="enable-background:new 0 0 50 50;" xml:space="preserve">
                                        <style>
                                            .star {
                                                fill: #EDC82E;
                                            }
                                        </style>
                                        <g>
                                            <g>
                                                <path class="star"
                                                    d="M26.96,9.36l4.45,9.02l9.96,1.45c1.79,0.26,2.5,2.46,1.21,3.72l-7.2,7.02l1.7,9.92
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   c0.31,1.79-1.58,3.13-3.16,2.3L25,38.11l-8.91,4.68c-1.58,0.84-3.47-0.5-3.16-2.3l1.7-9.92l-7.2-7.02
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   c-1.29-1.26-0.58-3.46,1.21-3.72l9.96-1.45l4.45-9.02C23.85,7.74,26.16,7.76,26.96,9.36z">
                                                </path>
                                            </g>
                                        </g>
                                    </svg>
                                    <!-- Generator: Adobe Illustrator 24.2.1, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 50"
                                        style="enable-background:new 0 0 50 50;" xml:space="preserve">
                                        <style>
                                            .star {
                                                fill: #EDC82E;
                                            }
                                        </style>
                                        <g>
                                            <g>
                                                <path class="star"
                                                    d="M26.96,9.36l4.45,9.02l9.96,1.45c1.79,0.26,2.5,2.46,1.21,3.72l-7.2,7.02l1.7,9.92
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   c0.31,1.79-1.58,3.13-3.16,2.3L25,38.11l-8.91,4.68c-1.58,0.84-3.47-0.5-3.16-2.3l1.7-9.92l-7.2-7.02
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   c-1.29-1.26-0.58-3.46,1.21-3.72l9.96-1.45l4.45-9.02C23.85,7.74,26.16,7.76,26.96,9.36z">
                                                </path>
                                            </g>
                                        </g>
                                    </svg>
                                    <!-- Generator: Adobe Illustrator 24.2.1, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 50"
                                        style="enable-background:new 0 0 50 50;" xml:space="preserve">
                                        <style>
                                            .star {
                                                fill: #EDC82E;
                                            }
                                        </style>
                                        <g>
                                            <g>
                                                <path class="star"
                                                    d="M26.96,9.36l4.45,9.02l9.96,1.45c1.79,0.26,2.5,2.46,1.21,3.72l-7.2,7.02l1.7,9.92
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   c0.31,1.79-1.58,3.13-3.16,2.3L25,38.11l-8.91,4.68c-1.58,0.84-3.47-0.5-3.16-2.3l1.7-9.92l-7.2-7.02
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   c-1.29-1.26-0.58-3.46,1.21-3.72l9.96-1.45l4.45-9.02C23.85,7.74,26.16,7.76,26.96,9.36z">
                                                </path>
                                            </g>
                                        </g>
                                    </svg>
                                </div><!-- .star_wrapper -->
                                <div>
                                    <span class="large mr-3">4.9</span><span>Google<br>Rating</span>
                                </div><!-- .row -->
                            </div><!-- #inner_circle -->
                        </div><!-- #gmb_circle -->
                        <div class="card-body">
                            <div id="quoteCarousel" class="carousel" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="quotation">
                                                    <p class="text">
                                                        <span class="quote-icon"><img src="front/images/quotes.png"
                                                                alt="customer reviews" title="customer reviews"></span>
                                                        EAD acted as our true partners during the entire React Native app
                                                        development. They kept us updated about the progress and
                                                        developments. They even managed to complete the development well
                                                        within the timeline defined. We were able to penetrate the market
                                                        earlier than expected with a brilliant app. <span
                                                            class="quote-icon"><img src="front/images/quotesend.png"
                                                                alt="customer reviews" title="customer reviews"></span>
                                                    </p>
                                                    <p><strong>- Chris Rogers</strong></p>
                                                </div><!-- .quotation -->
                                            </div><!-- .col -->
                                        </div><!-- .row -->
                                    </div><!-- .carousel-item -->
                                    <div class="carousel-item active">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="quotation">
                                                    <p class="text"> <span class="quote-icon"><img
                                                                src="front/images/quotes.png" alt="customer reviews"
                                                                title="customer reviews"></span>
                                                        They hand-held us right from validation to the post-development
                                                        phase. It was incredible to see them throw in such brilliance into
                                                        the development as well as the planning phases. Their organization
                                                        is commendable and so is the meticulousness of their planning. We
                                                        are so happy with the end result. We are seeing an incredible growth
                                                        in our user base
                                                        <span class="quote-icon"><img src="front/images/quotesend.png"
                                                                alt="customer reviews" title="customer reviews"></span>
                                                    </p>
                                                    <p><strong>- Sharon Nelson</strong></p>
                                                </div><!-- .quotation -->
                                            </div><!-- .col -->
                                        </div><!-- .row -->
                                    </div><!-- .carousel-item -->
                                    <div class="carousel-item">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="quotation">
                                                    <p class="text"> <span class="quote-icon"><img
                                                                src="front/images/quotes.png" alt="customer reviews"
                                                                title="customer reviews"></span>
                                                        The qualified team of developers, designers and strategists at EAD
                                                        go in-depth into the niche before producing the app solutions. Their
                                                        understanding of the market needs, user experience requirements as
                                                        well as the usage was commendable. They knew how to offer the best
                                                        market-fit app for our company. We would recommend them for all your
                                                        React Native requirements.
                                                        <span class="quote-icon"><img src="front/images/quotesend.png"
                                                                alt="customer reviews" title="customer reviews"></span>
                                                    </p>
                                                    <p><strong>- Mark Livingstone</strong></p>
                                                </div><!-- .quotation -->
                                            </div><!-- .col -->
                                        </div><!-- .row -->
                                    </div><!-- .carousel-item -->
                                    <div class="carousel-item">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="quotation">
                                                    <p class="text"> <span class="quote-icon"><img
                                                                src="front/images/quotes.png" alt="customer reviews"
                                                                title="customer reviews"></span>
                                                        We truly love the flexibility and depth & breadth of experience
                                                        displayed by the React Native team at EAD. They could match our
                                                        requirements and goals with capable and scalable solutions. By
                                                        outsourcing our work to them, we could easily manage to focus on our
                                                        core without worrying about getting the app on-time.
                                                        <span class="quote-icon"><img src="front/images/quotesend.png"
                                                                alt="customer reviews" title="customer reviews"></span>
                                                    </p>
                                                    <p><strong>- James</strong></p>
                                                </div><!-- .quotation -->
                                            </div><!-- .col -->
                                        </div><!-- .row -->
                                    </div>
                                </div><!-- .carousel-inner -->
                                <ol class="carousel-indicators">
                                    <li class="" data-target="#quoteCarousel" data-slide-to="0">
                                    </li>
                                    <li class="active" data-target="#quoteCarousel" data-slide-to="1">
                                    </li>
                                    <li class="" data-target="#quoteCarousel" data-slide-to="2">
                                    </li>
                                    <li class="" data-target="#quoteCarousel" data-slide-to="3">
                                    </li>
                                </ol>
                            </div><!-- #quoteCarousel -->
                        </div><!-- .card-body -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="talk">
        <div class="container">
            <div class="row mt-5 mb-5">
                <div class="col-md-12 col-12 col-lg-12">
                    <h2 class="font-weight-bolder">Discover the possibilities with Expert Dev Apps</h2>
                    <h5 class="pt-2 font-weight-bolder d-none">Calling 202-540-0002 will connect you with
                        Gil Austin, President of Coretechs..</h5>
                    <p class="text-justify pt-2">With an experience ranging over 10+ years, EAD has aced the software
                        development space with innovative and reliable solutions. With a proven methodology, and strategic
                        process, we partner with you to give your business the competitive edge. Connect to explore the
                        possible opportunities and solutions for your business.
                    </p>
                    <div class="text-center">
                        <a title="Hire Dedicated Developers" class="btn rounded-pill btn-lg "
                            href="{{ route('contact-us') }}">Hire Dedicated Developers</a>
                        <button class="btn rounded-pill ">
                            <span><i class='fas fa-phone'></i></span>
                            <span><a href="tel:16232422622" class="text-white">+1-623-242-2622</a></span>
                        </button>
                    </div>
                </div>
                <div class="col-md-4 col-12 col-lg-4 d-none">
                    <img src="https://www.coretechs.com/wp-content/uploads/2020/08/gil_illustration.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="d-none">
        <div class="row">
            <div class="col-12">
                <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
                    <path d="M0.00,49.99 C150.00,150.00 271.49,-49.99 500.00,49.99 L500.00,0.00 L0.00,0.00 Z"
                        style="stroke: none; fill: red;"></path>
                </svg>
            </div>
        </div>
    </section>
@endsection
@push('js')
    <script src="{{ asset('/theme/vendors/general/sweetalert2/dist/sweetalert2.min.js') }}" type="text/javascript">
    </script>
    <script src="{{ asset('/theme/vendors/custom/js/vendors/sweetalert2.init.js') }}" type="text/javascript"></script>
    <!-- jsDeliver -->
    <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.lazy/1.7.9/jquery.lazy.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.lazy/1.7.9/jquery.lazy.plugins.min.js"></script>
    <!-- cdnjs -->
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.plugins.min.js">
    </script>
    <script>
        $(function() {
            $('.lazy').lazy();
        });
    </script>
    <script>
        $('.d-none-landing-page').remove();
    </script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('.btn-submit').click(function(e) {
            e.preventDefault();
            if ($('.email').val()) {
                var email = $('.email').val();
            } else {
                var email = $('.email1').val();
            }
            $.ajax({
                url: "{{ route('landing-email') }}",
                type: "POST",
                data: {
                    email: email,
                },
                success: function(data) {
                    if ($.isEmptyObject(data.error)) {
                        swal.fire({
                            title: "Email!",
                            text: data.success,
                            buttonsStyling: true,
                            confirmButtonText: "Ok",
                        }).then(function() {
                            document.getElementById("contactUsForm").reset();
                            document.getElementById("contactUsForm1").reset();
                        });
                    } else {
                        swal.fire({
                            title: "Erorrs!",
                            text: data.error,
                            buttonsStyling: true,
                            confirmButtonText: "Ok",
                        })
                    }
                }
            });
        });
    </script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('.form-submit').click(function(e) {
            e.preventDefault();
            var name = $('.name').val();
            var email = $('.emailform').val();
            var phone = $('.phone').val();
            var about = $('.about').val();
            $.ajax({
                url: "{{ route('landingform') }}",
                type: "POST",
                data: {
                    email: email,
                    name: name,
                    phone: phone,
                    about: about,
                },
                success: function(data) {
                    if ($.isEmptyObject(data.error)) {
                        swal.fire({
                            title: "Send Form!",
                            text: data.success,
                            buttonsStyling: true,
                            confirmButtonText: "Ok",
                        }).then(function() {
                            document.getElementById("landingForm").reset();
                        });
                    } else {
                        swal.fire({
                            title: "Erorrs!",
                            text: data.error,
                            buttonsStyling: true,
                            confirmButtonText: "Ok",
                        })
                    }
                }
            });
        });
    </script>
@endpush
@push('footer')
    <li class="footer-contact-list">
        <div class="footer-contact-info">
            <span><i class="fas fa-map-marker-alt"></i></span>
            <span>Suite 1-454 7558 W. Thunderbird Road Peoria, <br> Phoenix, AZ 85381, USA
            </span>
        </div>
    </li>
    <li class="footer-contact-list">
        <div class="footer-contact-info">
            <span><i class='fas fa-phone'></i></span>
            <span><a href="tel:16232422622">+1-623-242-2622</a></span>
        </div>
        <div class="footer-contact-info">
            <span><i class="fa fa-envelope"></i></span>
            <span><a href="mailto:sales@expertappdevs.com">sales@expertappdevs.com</a></span>
        </div>
    </li>
@endpush

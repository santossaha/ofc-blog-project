@extends('front.layout.app')
 @push('meta')
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="description" content="{{ $page->meta_description }}" />
    <meta name="keywords" content="{{ $page->meta_keyword }}">
    <meta name="robots" content="{{ $page->meta_robots }}" />
    <link rel="canonical" href="{{ url()->current() }}" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="{{ $page->meta_title }}" />
    <meta property="og:description" content="{{ $page->meta_description }}" />
    <meta property="og:keywords" content="{{ $page->meta_keyword }}" />
    <meta property="og:image:width" content="750" />
    <meta property="og:image:height" content="375" />
    <meta name="twitter:card" content="summary_large_image" />
@endpush
 @section('content')
        <!-- ./Page header -->
        <header class="section header text-contrast app-landing-header">
            <div class="shape-wrapper">
                <div class="shape shape-background shape-main bg-darkBlue gradient-darkBlue"></div>
            </div>
            <div class="container">
                <div class="row gap-y align-items-center">
                    <div class="col-md-7 col-lg-7">
                        <p class="lead d-flex align-items-center my-0"><i class="fas fa-award font-md me-3"></i>About Us</p>
                        <h1 class="bold text-contrast font-lg display-lg-4 mb-3">Energized Partner For Ingenious IT Solutions<span class="d-block light font-lg"></span></h1>
                        <p class="">New York Mobile Tech is an outcome of a strong foundation of tech-savvy minds committed to quality IT solutions. We are empowered with years of experience in different technologies and industry domains. The team at NewYork Mobile Tech creates valuable and dedicated tech solutions for worldwide industries.</p>
                        <div class="nav mt-5 align-items-center"><a href="#" class="btn btn-rounded btn-lg text-white btn-gradient-darkPinkOrange shadow me-3 px-4 text-capitalize">Get Started - It's Free</a></div>
                    </div>
                    <div class="col-md-5 col-lg-5 ms-lg-auto position-relatice">
                        <div class="device-twin ms-auto align-items-center">
                            <div class="mockup absolute right aos-init aos-animate" data-aos="fade-right">
                                <div class="screen"><img src="{{asset('front/img')}}/aboutus/about-ny-mobile-tech.png" alt="about ny mobile tech"></div><span class="button"></span>
                            </div>
                            <div class="iphone-x front ms-0">
                                <div class="screen shadow-box"><img src="{{asset('front/img')}}/aboutus/book-appointment.png" alt="book appointment"></div>
                                <div class="notch"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        
        <x-front.partner-slider-list />

        <x-front.customer-success-number-record />

        <div class="position-relative">
            <div class="shape-divider shape-divider-bottom shape-divider-fluid-x text-contrast"><svg viewBox="0 0 2880 48" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z"></path>
                </svg></div>
        </div><!-- ./Overview - Floating boxes -->

        <!-- <x-front.choose-us></x-front.choose-us> -->
        <section class="section overview">
            <div class="container">
                <div class="row align-items-center gap-y">
                    <div class="col-lg-6 text-center text-md-start">
                        <div class="section-heading mb-3"> <img class="w-50px" src="{{ asset('front/img') }}/statue-of-liberty.svg" alt="statue of liberty"> <span class="badge bg-contrast text-primary shadow-sm px-4 py-2 rounded-pill bold mb-2">Benefits</span>
                            <h2> A Dedicated <span class="bold"> Team For Powerful Solutions</span></h2>
                            <p class="">We are known for delivering impressive designs, intuitive customer experiences, and excellent interfaces for an app. As a leading mobile app development agency in NewYork, we assist our clients with our strong app development expertise and marketing strategies. With our quality codes, agile approach and testing procedures, we have achieved many positive reviews from our clients</p>
                        </div>
                        <p>We follow a zero-error policy and ensure bug-free projects with strict testing environments. You share your app development idea with us, and our expert team will ensure to deliver an innovative, customer-centric, interactive, market-ready app to you.</p>
                        <a class="btn btn-rounded btn-primary bw-2 bold text-contrast" href="#" target="_blank">Get a Free Quote</a>
                    </div>
                    <div class="col-lg-6">
                        <div class="row gap-y">
                            <div class="col-6 col-sm-5 col-md-6 mt-6 ms-lg-auto">
                                <div data-aos="fade-up" class="aos-init">
                                    <div class="card rounded p-2 p-sm-4 shadow-hover text-center text-md-start">
                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="70" height="70" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g>
                                        <g xmlns="http://www.w3.org/2000/svg">
                                            <g>
                                                <path d="M451.72,237.26c-17.422-8.71-50.087-8.811-51.469-8.811c-4.142,0-7.5,3.358-7.5,7.5c0,4.142,3.358,7.5,7.5,7.5    c8.429,0.001,32.902,1.299,44.761,7.228c1.077,0.539,2.221,0.793,3.348,0.793c2.751,0,5.4-1.52,6.714-4.147    C456.927,243.618,455.425,239.113,451.72,237.26z" fill="#ff914b" data-original="#ff914b" class=""></path>
                                            </g>
                                        </g>
                                        <g xmlns="http://www.w3.org/2000/svg">
                                            <g>
                                                <path d="M489.112,344.041l-30.975-8.85c-1.337-0.382-2.271-1.62-2.271-3.011v-10.339c2.52-1.746,4.924-3.7,7.171-5.881    c10.89-10.568,16.887-24.743,16.887-39.915v-14.267l2.995-5.989c3.287-6.575,5.024-13.936,5.024-21.286v-38.65    c0-4.142-3.358-7.5-7.5-7.5H408.27c-26.244,0-47.596,21.352-47.596,47.596v0.447c0,6.112,1.445,12.233,4.178,17.699l3.841,7.682    v12.25c0,19.414,9.567,36.833,24.058,47.315l0.002,10.836c0,1.671,0,2.363-6.193,4.133l-15.114,4.318l-43.721-15.898    c0.157-2.063-0.539-4.161-2.044-5.742l-13.971-14.678v-24.64c1.477-1.217,2.933-2.467,4.344-3.789    c17.625-16.52,27.733-39.844,27.733-63.991v-19.678c5.322-11.581,8.019-23.836,8.019-36.457v-80.19c0-4.142-3.358-7.5-7.5-7.5    H232.037c-39.51,0-71.653,32.144-71.653,71.653v16.039c0,12.621,2.697,24.876,8.019,36.457v16.931    c0,28.036,12.466,53.294,32.077,69.946v25.22l-13.971,14.678c-1.505,1.581-2.201,3.679-2.044,5.742l-46.145,16.779    c-3.344,1.216-6.451,2.863-9.272,4.858l-7.246-3.623c21.57-9.389,28.403-22.594,28.731-23.25c1.056-2.111,1.056-4.597,0-6.708    c-5.407-10.814-6.062-30.635-6.588-46.561c-0.175-5.302-0.341-10.311-0.658-14.771c-2.557-35.974-29.905-63.103-63.615-63.103    s-61.059,27.128-63.615,63.103c-0.317,4.461-0.483,9.47-0.658,14.773c-0.526,15.925-1.182,35.744-6.588,46.558    c-1.056,2.111-1.056,4.597,0,6.708c0.328,0.656,7.147,13.834,28.76,23.234l-20.127,10.063C6.684,358.176,0,368.991,0,381.02    v55.409c0,4.142,3.358,7.5,7.5,7.5s7.5-3.358,7.5-7.5V381.02c0-6.312,3.507-11.987,9.152-14.81l25.063-12.531l8.718,8.285    c6.096,5.793,13.916,8.688,21.739,8.688c7.821,0,15.645-2.897,21.739-8.688l8.717-8.284l8.172,4.086    c-3.848,6.157-6.032,13.377-6.032,20.94v57.725c0,4.142,3.358,7.5,7.5,7.5c4.142,0,7.5-3.358,7.5-7.5v-57.725    c0-10.296,6.501-19.578,16.178-23.097l48.652-17.691l20.253,30.381c2.589,3.884,6.738,6.375,11.383,6.835    c0.518,0.051,1.033,0.076,1.547,0.076c4.098,0,8.023-1.613,10.957-4.546l12.356-12.356v78.124c0,4.142,3.358,7.5,7.5,7.5    c4.142,0,7.5-3.358,7.5-7.5v-78.124l12.356,12.356c2.933,2.934,6.858,4.547,10.957,4.547c0.513,0,1.029-0.025,1.546-0.076    c4.646-0.46,8.795-2.951,11.384-6.835l20.254-30.38l48.651,17.691c9.676,3.519,16.178,12.801,16.178,23.097v57.725    c0,4.142,3.358,7.5,7.5,7.5c4.142,0,7.5-3.358,7.5-7.5v-57.725c0-10.428-4.143-20.208-11.093-27.441l1.853-0.529    c1.869-0.534,4.419-1.265,6.979-2.52l19.149,19.149v69.066c0,4.142,3.358,7.5,7.5,7.5c4.142,0,7.5-3.358,7.5-7.5v-69.066    l19.016-19.016c1.011,0.514,2.073,0.948,3.191,1.267l30.976,8.85c7.07,2.02,12.009,8.567,12.009,15.921v62.044    c0,4.142,3.358,7.5,7.5,7.5c4.142,0,7.5-3.358,7.5-7.5v-62.044C512,360.371,502.588,347.892,489.112,344.041z M48.115,330.794    c-14.029-5.048-21.066-11.778-24.07-15.453c2.048-5.354,3.376-11.486,4.275-17.959c4.136,9.917,11.063,18.383,19.795,24.423    V330.794z M91.08,351.092c-6.397,6.078-16.418,6.077-22.813-0.001l-6.975-6.628c1.177-2.205,1.824-4.705,1.824-7.324v-7.994    c5.232,1.635,10.794,2.517,16.558,2.517c5.757,0,11.316-0.886,16.557-2.512l-0.001,7.988c0,2.62,0.646,5.121,1.824,7.327    L91.08,351.092z M79.676,316.662c-22.396,0-40.615-18.22-40.615-40.615c0-4.142-3.358-7.5-7.5-7.5c-0.42,0-0.83,0.043-1.231,0.11    c0.022-0.645,0.043-1.291,0.065-1.93c0.167-5.157,0.328-10.028,0.625-14.206c0.958-13.476,6.343-25.894,15.163-34.968    c8.899-9.156,20.793-14.198,33.491-14.198s24.591,5.042,33.491,14.198c8.82,9.074,14.205,21.492,15.163,34.968    c0.296,4.177,0.458,9.047,0.628,14.203c0.015,0.443,0.03,0.892,0.045,1.338c-8.16-12.572-20.762-21.837-37.045-27.069    c-15.043-4.833-27.981-4.534-28.527-4.52c-1.964,0.055-3.828,0.877-5.191,2.291l-13.532,14.034    c-2.875,2.982-2.789,7.73,0.193,10.605s7.73,2.788,10.605-0.193l11.26-11.677c9.697,0.474,40.894,4.102,53.027,30.819    C116.738,302.04,99.816,316.662,79.676,316.662z M111.229,330.819l0.001-8.945c8.725-6.007,15.662-14.457,19.801-24.449    c0.899,6.458,2.226,12.576,4.27,17.918C132.314,318.983,125.244,325.773,111.229,330.819z M183.403,209.145v-18.608    c0-1.129-0.255-2.244-0.746-3.261c-4.826-9.994-7.273-20.598-7.273-31.518V139.72c0-31.239,25.415-56.653,56.653-56.653h104.769    v72.692c0,10.92-2.447,21.524-7.273,31.518c-0.491,1.017-0.746,2.132-0.746,3.261v21.355c0,20.311-8.165,39.15-22.991,53.047    c-1.851,1.734-3.772,3.36-5.758,4.875c-0.044,0.03-0.086,0.063-0.129,0.094c-13.889,10.545-30.901,15.67-48.667,14.519    C213.201,281.965,183.403,248.897,183.403,209.145z M225.632,360.056c-0.052,0.052-0.173,0.175-0.418,0.149    c-0.244-0.024-0.34-0.167-0.381-0.229l-23.325-34.988l7.506-7.887l35.385,24.187L225.632,360.056z M256.095,331.113    l-40.615-27.762v-14c10.509,5.681,22.276,9.234,34.791,10.044c1.977,0.128,3.942,0.191,5.901,0.191    c14.341,0,28.143-3.428,40.538-9.935v13.7L256.095,331.113z M287.357,359.978c-0.041,0.062-0.137,0.205-0.381,0.229    c-0.245,0.031-0.365-0.098-0.418-0.149l-18.767-18.767l35.385-24.188l7.507,7.887L287.357,359.978z M424.308,353.65l-17.02-17.019    c0.297-1.349,0.465-2.826,0.464-4.455l-0.001-3.165c4.723,1.55,9.701,2.47,14.852,2.624c0.578,0.018,1.151,0.026,1.727,0.026    c5.692,0,11.248-0.86,16.536-2.501v3.02c0,1.496,0.188,2.962,0.542,4.371L424.308,353.65z M452.591,305.196    c-7.949,7.714-18.45,11.788-29.537,11.446c-21.704-0.651-39.361-19.768-39.361-42.613v-14.021c0-1.165-0.271-2.313-0.792-3.354    l-4.633-9.266c-1.697-3.395-2.594-7.195-2.594-10.991v-0.447c0-17.974,14.623-32.596,32.596-32.596h64.673v31.15    c0,5.034-1.19,10.075-3.441,14.578l-3.786,7.572c-0.521,1.042-0.792,2.189-0.792,3.354v16.038    C464.924,287.126,460.544,297.478,452.591,305.196z" fill="#ff914b" data-original="#ff914b" class=""></path>
                                            </g>
                                        </g>
                                        <g xmlns="http://www.w3.org/2000/svg">
                                            <g>
                                                <path d="M472.423,380.814c-4.142,0-7.5,3.358-7.5,7.5v48.115c0,4.142,3.358,7.5,7.5,7.5c4.142,0,7.5-3.358,7.5-7.5v-48.115    C479.923,384.173,476.565,380.814,472.423,380.814z" fill="#ff914b" data-original="#ff914b" class=""></path>
                                            </g>
                                        </g>
                                        <g xmlns="http://www.w3.org/2000/svg">
                                            <g>
                                                <path d="M39.577,390.728c-4.142,0-7.5,3.358-7.5,7.5v38.201c0,4.142,3.358,7.5,7.5,7.5c4.142,0,7.5-3.358,7.5-7.5v-38.201    C47.077,394.087,43.719,390.728,39.577,390.728z" fill="#ff914b" data-original="#ff914b" class=""></path>
                                            </g>
                                        </g>
                                        <g xmlns="http://www.w3.org/2000/svg">
                                            <g>
                                                <path d="M317.532,158.475c-28.366-28.366-87.715-22.943-111.917-19.295c-7.623,1.149-13.155,7.6-13.155,15.339v17.278    c0,4.142,3.358,7.5,7.5,7.5c4.142,0,7.5-3.358,7.5-7.5v-17.279c0-0.255,0.168-0.473,0.392-0.507    c9.667-1.457,28.85-3.705,48.725-2.38c23.388,1.557,40.328,7.428,50.349,17.45c2.929,2.929,7.678,2.929,10.606,0    C320.461,166.152,320.461,161.403,317.532,158.475z" fill="#ff914b" data-original="#ff914b" class=""></path>
                                            </g>
                                        </g>
                                        <g xmlns="http://www.w3.org/2000/svg">
                                            <g>
                                                <path d="M167.884,396.853c-4.142,0-7.5,3.358-7.5,7.5v32.077c0,4.142,3.358,7.5,7.5,7.5c4.142,0,7.5-3.358,7.5-7.5v-32.077    C175.384,400.212,172.026,396.853,167.884,396.853z" fill="#ff914b" data-original="#ff914b" class=""></path>
                                            </g>
                                        </g>
                                        <g xmlns="http://www.w3.org/2000/svg">
                                            <g>
                                                <path d="M344.306,396.853c-4.142,0-7.5,3.358-7.5,7.5v32.077c0,4.142,3.358,7.5,7.5,7.5c4.142,0,7.5-3.358,7.5-7.5v-32.077    C351.806,400.212,348.448,396.853,344.306,396.853z" fill="#ff914b" data-original="#ff914b" class=""></path>
                                            </g>
                                        </g>
                                        
                                        </g></svg>
                                        <p class="bold mb-0">Dedicated Team</p>
                                        <p class="small text-muted">Our experienced team and industry-expert developers create reliable and high-performing apps.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-5 col-md-6 me-lg-auto">
                                <div data-aos="fade-up" class="aos-init">
                                    <div class="text-contrast bg-info-gradient card rounded p-2 p-sm-4 shadow-hover text-center text-md-start"><svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bar-chart"><line x1="12" y1="20" x2="12" y2="10"></line><line x1="18" y1="20" x2="18" y2="4"></line><line x1="6" y1="20" x2="6" y2="16"></line></svg>
                                        <p class="bold mb-0">Efficiency</p>
                                        <p class="small text-contrast">Efficacy is the top factor for the apps we build. We ensure a quick and complete solution.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-5 col-md-6 ms-lg-auto">
                                <div data-aos="fade-up" class="aos-init">
                                    <div class="card rounded p-2 p-sm-4 shadow-hover text-center text-md-start"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="56" height="56" x="0" y="0" viewBox="0 0 511.96 511.96" style="enable-background:new 0 0 512 512" xml:space="preserve" class="mb-3"><g><g xmlns="http://www.w3.org/2000/svg"><path d="m327.191 176.441c4.143 0 7.5-3.357 7.5-7.5v-9.844c0-4.143-3.357-7.5-7.5-7.5s-7.5 3.357-7.5 7.5v9.844c0 4.143 3.358 7.5 7.5 7.5z" fill="#ff914b" data-original="#ff914b" class=""></path><path d="m262.573 176.441c4.143 0 7.5-3.357 7.5-7.5v-9.844c0-4.143-3.357-7.5-7.5-7.5s-7.5 3.357-7.5 7.5v9.844c0 4.143 3.358 7.5 7.5 7.5z" fill="#ff914b" data-original="#ff914b" class=""></path><path d="m294.809 236.033c14.507 0 26.309-11.803 26.309-26.31 0-4.143-3.357-7.5-7.5-7.5s-7.5 3.357-7.5 7.5c0 6.236-5.073 11.31-11.309 11.31s-11.309-5.073-11.309-11.31c0-4.143-3.357-7.5-7.5-7.5s-7.5 3.357-7.5 7.5c0 14.507 11.802 26.31 26.309 26.31z" fill="#ff914b" data-original="#ff914b" class=""></path><path d="m465.649 402.17c4.143 0 7.5-3.357 7.5-7.5v-23.26c0-21.484-13.722-40.393-34.216-47.073l-92.745-29.218v-29.837c21.644-15.981 32.289-42.124 31.37-68.577 17.207 1.322 35.956-8.878 35.956-28.397v-15.658c0-7.5-2.928-14.326-7.694-19.407.097-.482.149-21.393.149-21.393 0-4.143-3.357-7.5-7.5-7.5s-7.5 3.357-7.5 7.5v12.4h-104.99c-12.406 0-22.5-10.094-22.5-22.5v-64.25c0-12.406 10.094-22.5 22.5-22.5h50.91c29.82 0 54.08 24.26 54.08 54.08v10.08c0 4.143 3.357 7.5 7.5 7.5s7.5-3.357 7.5-7.5v-10.08c.001-38.091-30.989-69.08-69.079-69.08h-50.91c-18.482 0-33.873 13.442-36.936 31.062h-12.575c-28.948 0-52.5 23.552-52.5 52.5 0 0 .042 48.998.104 49.389-4.93 5.111-7.973 12.054-7.973 19.699v15.658c0 19.216 18.662 29.871 35.958 28.397-1.65 26.301 10.056 52.84 31.37 68.577v30.136l-67.474 25.219c-6.566 2.464-12.296 6.698-16.567 12.245l-43.453 56.407v-25.104c0-6.774-3.014-12.855-7.767-16.983v-31.061c0-12.699-10.332-23.031-23.031-23.031s-23.03 10.332-23.03 23.031v25.544c-15.796 0-23.296 8.863-23.296 22.5v63.188c0 9.973 6.526 18.448 15.529 21.389v25.738c0 36.074 46.595 51.75 69.011 21.14l39.709-47.976v56.796c0 4.143 3.357 7.5 7.5 7.5h295.09c4.143 0 7.5-3.357 7.5-7.5v-77.1c0-4.143-3.357-7.5-7.5-7.5s-7.5 3.357-7.5 7.5v69.6h-47.123v-99.512c0-4.143-3.357-7.5-7.5-7.5s-7.5 3.357-7.5 7.5v6.071h-217.966v-7.74c0-4.143-3.357-7.5-7.5-7.5s-7.5 3.357-7.5 7.5v28.36l-51.497 62.219c-12.278 14.82-42.223 15.268-42.223-11.858v-24.626h23.828v8.031c0 4.143 3.357 7.5 7.5 7.5s7.5-3.357 7.5-7.5v-13.548c4.755-4.129 7.771-10.211 7.771-16.988v-13.507l55.332-71.827c2.564-3.33 6.007-5.873 9.944-7.351l68.496-25.602 40.585 30.559c2.934 2.209 6.8 1.701 9.502-.36l40.31-30.352 94.247 29.691c14.231 4.64 23.794 17.816 23.794 32.789v23.26c0 4.144 3.358 7.501 7.5 7.501zm-69.623 16.35v47.421h-128.756c-4.143 0-7.5 3.357-7.5 7.5s3.357 7.5 7.5 7.5h128.757v16.02h-217.967v-16.02h56.53c4.143 0 7.5-3.357 7.5-7.5s-3.357-7.5-7.5-7.5h-56.53v-47.421zm-318.92-102.377c0-4.429 3.603-8.031 8.03-8.031 4.429 0 8.031 3.603 8.031 8.031v25.544h-16.061zm-23.295 48.044c0-4.136 3.364-7.5 7.5-7.5h32.124c4.136 0 7.5 3.364 7.5 7.5v8.563h-23.562c-4.143 0-7.5 3.357-7.5 7.5s3.357 7.5 7.5 7.5h23.562v16.063h-23.562c-4.143 0-7.5 3.357-7.5 7.5s3.357 7.5 7.5 7.5h23.562v8.563c0 5.001-3.033 7.16-7.495 7.496l-32.129.004c-4.136 0-7.5-3.364-7.5-7.5zm344.704-195.879c0 7.388-6.01 13.397-13.397 13.397h-7.559v-42.453h7.559c7.388 0 13.397 6.01 13.397 13.397zm-199.546-84.746c0-20.678 16.822-37.5 37.5-37.5h12.011v55.688.002c0 12.406-10.094 22.5-22.5 22.5h-6.421-20.59zm5.529 98.143c-7.388 0-13.397-6.01-13.397-13.397v-15.658c0-7.388 6.01-13.397 13.397-13.397h7.561v42.453h-7.561zm22.561 21.597v-64.077c11.813-.336 22.277-6.151 28.922-15 6.847 9.116 17.746 15.025 29.999 15.025h76.577l.002 64.052c0 82.414-135.5 82.318-135.5 0zm104.129 70.634v22.912l-36.378 27.412-36.381-27.413v-22.91c17.884 10.73 53.55 10.063 72.759-.001z" fill="#ff914b" data-original="#ff914b" class=""></path><path d="m79.835 214.355c3.536 2.928 7.072 2.928 10.607 0l31.062-31.063c2.929-2.93 2.929-7.678-.001-10.607-2.928-2.928-7.677-2.928-10.606 0l-25.758 25.76-10.228-10.229c-2.93-2.928-7.678-2.928-10.607 0-2.929 2.93-2.929 7.678 0 10.607z" fill="#ff914b" data-original="#ff914b" class=""></path><path d="m61.311 263.5h63.187c12.406 0 22.5-10.094 22.5-22.5v-8.563h23.563c7.92-.063 11.42-6.104 5.333-12.773l-28.896-29.226v-44.396c0-12.406-10.094-22.5-22.5-22.5h-63.187c-12.406 0-22.5 10.094-22.5 22.5v94.958c0 12.406 10.093 22.5 22.5 22.5zm-7.5-117.458c0-4.136 3.364-7.5 7.5-7.5h63.187c4.136 0 7.5 3.364 7.5 7.5v47.479c0 1.975.778 3.869 2.167 5.273l18.434 18.644h-13.101c-4.143 0-7.5 3.357-7.5 7.5v16.062c0 4.136-3.364 7.5-7.5 7.5h-63.187c-4.136 0-7.5-3.364-7.5-7.5z" fill="#ff914b" data-original="#ff914b" class=""></path></g></g></svg>
                                        <p class="bold mb-0">Reliance in Customer</p>
                                        <p class="small text-muted">Our clients are valuable to us! So we deliver high-end products to engage our customers for the long term.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-5 col-md-6 mt-n6 me-lg-auto">
                                <div data-aos="fade-up" class="aos-init">
                                    <div class="card rounded p-2 p-sm-4 shadow-hover text-center text-md-start"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="70" height="70" x="0" y="0" viewBox="0 0 128 128" style="enable-background:new 0 0 70 70" xml:space="preserve" class=""><g><g xmlns="http://www.w3.org/2000/svg"><path id="_x35_" d="m112.33 23.72c-2.324 1.871-4.846 3.515-7.70 4.876 1.984 6.009 3.203 13.067 3.402 20.636h15.732c-.51-9.779-4.678-18.567-11.168-25.059-.141-.142-.311-.312-.454-.453zm11.623 29.509h-15.732c-.17 7.285-1.332 14.088-3.203 19.955-.057.228-.143.454-.227.681 2.693 1.36 5.215 3.005 7.539 4.876 2.381-2.297 4.479-4.933 6.18-7.768 3.176-5.244 5.103-11.282 5.443-17.744zm-14.683 28.175c-1.842-1.445-3.799-2.692-5.867-3.798-1.984 4.705-4.508 8.589-7.371 11.31-.793.766-2.041.737-2.807-.057s-.736-2.069.057-2.834c2.523-2.382 4.707-5.812 6.492-10.063-.17-.057-.34-.113-.51-.198-3.602-1.36-7.484-2.183-11.537-2.381v.538c0 1.105-.879 2.013-1.984 2.013s-2.014-.907-2.014-2.013v-2.607-18.085h-9.383c-1.105 0-1.984-.907-1.984-2.013s.879-1.984 1.984-1.984h9.383v-16.129c-3.146-.17-6.236-.652-9.184-1.475-1.445-.396-2.834-.85-4.195-1.389-1.984 6.038-3.117 13.238-3.117 20.977 0 1.105-.908 2.013-2.014 2.013-1.077 0-1.984-.907-1.984-2.013 0-8.334 1.275-16.101 3.429-22.62-.85-.454-1.672-.907-2.494-1.39-.963-.566-1.275-1.785-.708-2.721.567-.964 1.787-1.276 2.722-.709.623.368 1.246.737 1.898 1.049.426-1.021.879-2.013 1.389-2.977 1.389-2.777 3.033-5.188 4.818-7.144-3.316 1.049-6.434 2.523-9.297 4.366-.936.595-2.154.312-2.75-.596-.595-.936-.34-2.183.595-2.778 3.346-2.154 7.029-3.854 10.941-5.017 3.799-1.105 7.824-1.701 11.963-1.701 11.678 0 22.223 4.705 29.877 12.359 7.652 7.653 12.387 18.227 12.387 29.877 0 7.993-2.211 15.448-6.066 21.798-3.969 6.576-9.666 11.991-16.496 15.591-.992.538-2.184.142-2.693-.822s-.143-2.183.822-2.692c1.729-.906 6.067-3.826 5.698-3.685zm-12.077-66.699c1.787 1.956 3.402 4.366 4.818 7.144.482.964.936 1.956 1.391 2.977 2.068-1.077 4.025-2.353 5.867-3.771-3.572-2.778-7.654-4.96-12.076-6.35zm3.942 57.515.084-.227c1.758-5.471 2.834-11.877 3.006-18.765h-16.498v16.129c4.535.227 8.9 1.162 12.953 2.692.17.057.312.114.455.171zm3.09-22.989c-.172-7.002-1.277-13.465-3.09-18.992-.143.057-.313.113-.455.17-4.053 1.531-8.418 2.467-12.953 2.693v16.129zm-16.498-36.028v15.874c4.053-.198 7.936-1.049 11.537-2.409.17-.057.34-.113.48-.17-.396-.992-.822-1.928-1.275-2.835-2.92-5.698-6.66-9.496-10.742-10.46zm-3.998 15.874v-15.874c-4.082.964-7.822 4.762-10.715 10.46-.453.907-.879 1.843-1.303 2.835 1.275.481 2.551.935 3.883 1.275 2.607.737 5.328 1.163 8.135 1.304z" fill="#ff914b" data-original="#ff914b"></path><path id="_x34_" d="m24.684 57.452 4.025 12.67 7.71-5.612-8.646-9.723zm4.818-6.747 9.864 11.112 9.836-11.112.028-.028c.708-.85 1.984-.936 2.806-.198l5.358 4.621 12.841 5.612c2.664 1.162 4.762 3.005 6.207 5.272 1.475 2.324 2.268 5.045 2.268 7.937v7.285c0 1.105-.906 2.013-2.012 2.013-1.078 0-1.984-.907-1.984-2.013v-7.285c0-2.154-.566-4.139-1.615-5.782-1.049-1.616-2.551-2.92-4.451-3.771l-11.111-4.847-4.592 14.456c-.397 1.304-1.984 1.786-3.062.992l-8.532-6.208v13.946c0 1.105-.878 2.013-1.984 2.013-1.105 0-2.012-.907-2.012-2.013v-13.945l-8.504 6.208s-.539.283-.595.283c-1.049.341-2.155-.227-2.495-1.275l-4.592-14.456-11.112 4.847c-1.899.851-3.401 2.154-4.422 3.771-1.077 1.644-1.644 3.628-1.644 5.782v32.995c0 1.105-.879 2.013-1.984 2.013s-2.013-.907-2.013-2.013v-32.996c0-2.892.794-5.612 2.268-7.937 1.446-2.268 3.572-4.11 6.208-5.272l12.84-5.612 5.357-4.621c.822-.737 2.098-.651 2.807.198zm-14.06 38.608c0-1.105.907-1.984 1.984-1.984 1.105 0 2.013.879 2.013 1.984v17.603c0 1.105-.907 2.013-2.013 2.013-1.077 0-1.984-.907-1.984-2.013zm35.49-34.526-8.646 9.723 7.71 5.612 4.025-12.67z" fill="#ff914b" data-original="#ff914b"></path><path id="_x33_" d="m83.332 86.054h-44.333c-1.701 0-3.345 1.474-3.628 3.117l-5.613 31.919c-.283 1.615.681 2.919 2.381 2.919h43.341c1.984 0 3.883-1.7 4.223-3.628l5.586-31.89c.027-.142.057-.312.057-.482 0-1.191-.852-1.955-2.014-1.955zm-23.442 16.865c1.105 0 2.013.907 2.013 2.013s-.907 1.984-2.013 1.984-1.984-.879-1.984-1.984.878-2.013 1.984-2.013zm-20.891-20.862h44.333c.369 0 .736.028 1.105.113 2.92.51 4.904 2.92 4.904 5.839 0 .397-.057.766-.113 1.162l-5.584 31.919c-.682 3.798-4.281 6.916-8.164 6.916h-43.341c-3.628 0-6.406-2.749-6.406-6.378 0-.396.028-.794.085-1.247l5.612-31.89c.624-3.543 3.968-6.434 7.569-6.434z" fill="#ff914b" data-original="#ff914b"></path><path id="_x32_" d="m28.624 114.031c1.105 0 2.013.879 2.013 1.984 0 .142-.028.283-.057.425l-.822 4.649c-.028.17-.028.368-.028.538 0 .624.17 1.162.51 1.56.312.396.794.651 1.389.765.142.028.312.028.482.057l.028 3.997h-18.738c-1.304 0-2.636-.368-3.713-1.077s-1.899-1.729-2.239-3.09l-1.814-7.342c-.255-1.077.397-2.154 1.474-2.409.142-.057.312-.057.481-.057zm-2.381 3.997h-16.13l1.219 4.875c.057.284.255.511.539.681.425.283.963.425 1.53.425h12.756c-.284-.736-.425-1.53-.425-2.381 0-.396.028-.794.085-1.247z" fill="#ff914b" data-original="#ff914b"></path><path id="_x31_" d="m30.636 47.077-.68 5.159c-.17 1.105-1.162 1.871-2.24 1.729-1.105-.17-1.871-1.162-1.729-2.268l1.049-7.653-.51-.453c-1.899-1.673-3.345-3.686-4.309-5.953-.992-2.268-1.474-4.762-1.474-7.427v-12.104c0-5.414 1.871-9.922 5.159-13.125 3.26-3.175 7.909-4.988 13.464-4.988 5.528 0 10.177 1.813 13.437 4.988 3.288 3.203 5.159 7.711 5.159 13.125v12.104c0 2.551-.454 5.074-1.474 7.427-.964 2.268-2.41 4.28-4.309 5.953l-.51.453 1.049 7.653c.142 1.105-.624 2.098-1.701 2.268-1.105.143-2.097-.623-2.239-1.729l-.708-5.159c-.907.624-1.814 1.105-2.778 1.474-3.317 1.305-8.561 1.305-11.877 0-.965-.368-1.872-.85-2.779-1.474zm-5.839-30.274c2.069.681 6.52 1.305 8.816-4.337.425-1.021 1.587-1.502 2.608-1.077.567.227.878.624 1.105 1.162.028.028 3.657 10.432 16.639 7.172v-1.615c0-4.28-1.417-7.824-3.94-10.262-2.523-2.466-6.208-3.856-10.658-3.856-4.479 0-8.164 1.39-10.687 3.855-2.239 2.183-3.628 5.245-3.883 8.958zm29.168 7.03c-10.403 2.268-15.959-2.807-18.539-6.491-3.26 4.394-7.767 4.28-10.687 3.571v9.298c0 2.126.397 4.11 1.134 5.84.737 1.729 1.842 3.288 3.316 4.563l2.41 2.154c1.049.936 2.126 1.615 3.288 2.069 2.324.936 6.605.936 8.929 0 1.162-.454 2.239-1.134 3.316-2.069l2.41-2.154c1.445-1.275 2.466-2.665 3.203-4.394.85-1.843 1.219-3.997 1.219-6.01v-6.377z" fill="#ff914b" data-original="#ff914b"></path></g></g></svg>
                                        <p class="bold mb-0">Affordable and Dedicated</p>
                                        <p class="small text-muted">We always keep an eye on quality and offer the products at best possible costs to our clients.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="section overview bg-light">
            <div class="container">
                <div class="row align-items-center gap-y">
                    <div class="col-lg-12 text-center text-md-start">
                        <div class="section-heading mb-3"> <img class="w-50px" src="{{ asset('front/img') }}/statue-of-liberty.svg" alt="statue of liberty"> <span class="badge bg-contrast text-primary shadow-sm px-4 py-2 rounded-pill bold mb-2">Benefits</span>
                            <h2> Empowering <span class="bold">Business With Impactful Apps</span></h2>
                        </div>
                        <p>Nurturing and empowering businesses with technology and innovation is the key motto of NewYork Mobile Tech. We accelerate the growth with our technological capabilities, modern infrastructure, and customized IT solutions. Our team is committed to developing phenomenal tech solutions to level up your business.</p>

                        <p>Bringing success to you is our priority; also, we work to make you successful with modern tech solutions. Our clients trust and hire us for our value-based approach, obsession, commitment, and integrity. Over the years, we have developed and delivered top-notch and high-performing products to the market.</p>

                        <p>Share your business needs and project ideas with us, and we will assist you in creating the perfect fit, reliable, and market-ready solution for your business</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section bg-light">
            <div class="container-fluid bring-to-front pb-0">
                <div class="row">
                    <div class="col-md-12 mx-auto">
                        <div class="swiper-container" data-sw-pagination="false" data-sw-nav-arrows="false" data-sw-show-items="4">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide"><img src="{{ asset('front/img') }}/aboutus/telemedicine-app.jpg" alt="telemedicine app" class="img-responsive shadow-lg rounded"></div>
                                <div class="swiper-slide"><img src="{{ asset('front/img') }}/aboutus/chat-application.jpg" alt="chat application" class="img-responsive shadow-lg rounded"></div>
                                <div class="swiper-slide"><img src="{{ asset('front/img') }}/aboutus/grocery-delivery-app.jpg" alt="grocery delivery app" class="img-responsive shadow-lg rounded"></div>
                                <div class="swiper-slide"><img src="{{ asset('front/img') }}/aboutus/sports-trainer-app.png" alt="sports trainer app" class="img-responsive shadow-lg rounded"></div>
                                <div class="swiper-slide"><img src="{{ asset('front/img') }}/aboutus/appoiment-app.png" alt="appoiment app" class="img-responsive shadow-lg rounded"></div>
                                <div class="swiper-slide"><img src="{{ asset('front/img') }}/aboutus/event-management-app.jpg" alt="event management app" class="img-responsive shadow-lg rounded"></div>
                                <div class="swiper-slide"><img src="{{ asset('front/img') }}/aboutus/box-deliver-app.jpg" alt="box deliver app" class="img-responsive shadow-lg rounded"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <x-front.hire-developer></x-front.hire-developer>

@endsection

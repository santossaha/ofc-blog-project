@extends('front.layout.app')
@push('meta')
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="description" content="{{ $service->meta_description }}" />
    <meta name="keywords" content="{{ $service->meta_keyword }}">
    <meta name="robots" content="{{ $service->meta_robots }}" />
    <link rel="canonical" href="{{ url()->current() }}" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="{{ $service->meta_title }}" />
    <meta property="og:description" content="{{ $service->meta_description }}" />
    <meta property="og:keywords" content="{{ $service->meta_keyword }}" />
    <meta property="article:modified_time" content="{{ \Carbon\Carbon::parse($service->updated_at)->format('Y-m-d') }}" />
    <meta property="og:image" content="{{ asset('sitebucket/service/' . $service->image) }}" />
    <meta property="og:image:width" content="750" />
    <meta property="og:image:height" content="375" />
    <meta name="twitter:card" content="summary_large_image" />
@endpush
@section('content')
    {{-- <!-- @include('front.service.header') --> --}}
    <x-front.service-detail :title="$service->title" :icon="''" :shortDescription="$service->short_description" serviceImage="''" >
        <div class="device-twin ms-auto align-items-center">
            <div class="mockup absolute" data-aos="fade-left">
                <div class="screen"><img src="{{asset('front/img')}}/screens/app/iphone_service_02.jpg" alt="..."></div><span class="button"></span>
            </div>
            <div class="iphone-x light front me-0">
                <div class="screen shadow-box"><img src="{{asset('front/img')}}/screens/app/iphone_service_01.jpg" alt="..."></div>
                <div class="notch"></div>
            </div>
        </div>
    </x-front.service-detail>
    <!-- :serviceImage="getImage(!blank($service->app_process_image) ? $service->app_process_image : '../front/img/screens/app/2.png')" -->
    
    <x-front.partner-slider-list />
    
    <x-front.service-about-with-count-box  :aboutTitle="$service->about_title" :icon="$service->icon" :aboutImage="getImage(!blank($service->about_image) ? $service->about_image : 'default-testimonial.jpg')" :aboutDescription="$service->about_description" />

    <x-front.contact-schedule >
        <div class="mb-5">
            <img class="w-50px" src="{{asset('front/img')}}/statue-of-liberty.svg" alt="statue of liberty"> <span class="badge bg-contrast shadow-sm py-2 px-3 text-primary rounded-pill"><span class="text-secondary">Fill</span> in the form</span>
            <h2 class="bold">{{$service->benefit_head_title??""}}</h2>
            <p class="lead text-muted">{{$service->benefit_head_description??""}}</p>
        </div>
        <div class="row">
            @foreach($service->serviceBenefits as $benefit)
            <x-front.contact-schedule-benefit :benefitTitle="$benefit->title" :benefitDescription="$benefit->description" />
            @endforeach
        </div>
    </x-front.contact-schedule>

    <section class="section bg-light">
        <div class="container">
            <h4 class="bold text-center mb-5">Part of our happy customers</h4>
            <div class="row gap-y">
                @for($i=0; $i < 4; $i++)
                <div class="col-md-3 col-xs-4 col-6 px-md-5"><img src="{{ asset('front/img').getClintImageList()[$i]['image_path'] }}" alt="{{getClintImageList()[$i]['image_alt']}}" class="img-responsive mx-auto op-7" style="max-height: 60px;"></div>
                @endfor
            </div>
        </div>
    </section>
    

    <!-- ./App features -->
    <section id="features" class="section features">    <!-- bg-contrast edge top-left -->
        <div class="container">
            <div class="section-heading text-center">
                <h2 class="bold">{{$service->feature_head_title??'Why Hire NewYork Mobile Tech for Android app development?'}}</h2>
            </div>
            <div class="row gap-y text-center text-md-start">
                @foreach($service->serviceFeatures as $feature)
                <div class="col-md-4">
                    <div class="card shadow-hover lift-hover">
                        <div class="card-body p-5">
                            @if(!blank($feature['image']))
                            <img src="{{isset($feature['image'])?getImage($feature['image']):'https://www.manektech.com/front/images/Microsoft-gold-partner.webp'}}" class="img-responsive mb-3" alt="" style="max-height: 36px">
                            @else
                            <svg class="mb-3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="56" height="56" x="0" y="0" viewBox="0 0 64 64" style="enable-background:new 0 0 512 512" xml:space="preserve"><g><path xmlns="http://www.w3.org/2000/svg" d="m8 60.886h48a7.009 7.009 0 0 0 7-7 1 1 0 0 0 -1-1h-2v-32a6.006 6.006 0 0 0 -6-6h-2.184a3 3 0 0 0 -2.817-2h-5.199a11.988 11.988 0 0 0 -23.6 0h-5.2a3 3 0 0 0 -2.816 2h-2.184a6.006 6.006 0 0 0 -6 6v32h-2a1 1 0 0 0 -1 1 7.009 7.009 0 0 0 7 7zm50-40v32h-2v-33a1 1 0 0 0 -1-1h-3v-2h2a4 4 0 0 1 4 4zm-32 32h-16v-32h2v27a3 3 0 0 0 3 3h34a3.005 3.005 0 0 0 3-3v-27h2v32h-16a1 1 0 0 0 -1 1v1h-10v-1a1 1 0 0 0 -1-1zm6-25.886a12 12 0 0 0 10.446-6.114h7.554v27a1 1 0 0 1 -1 1h-34a1 1 0 0 1 -1-1v-27h7.555a12 12 0 0 0 10.445 6.114zm17-12.115a1 1 0 0 1 1 1v3h-6.658a11.943 11.943 0 0 0 .658-3.885c0-.039-.005-.076-.006-.115zm-17-9.885a10 10 0 1 1 -10 10 10.011 10.011 0 0 1 10-10zm-17 9.885h5.006c0 .039-.006.076-.006.115a11.943 11.943 0 0 0 .658 3.886h-6.658v-3a1 1 0 0 1 1-1.001zm-9 6a4 4 0 0 1 4-4h2v2h-3a1 1 0 0 0 -1 1v33h-2zm19 34v1a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-1h21.9a5.008 5.008 0 0 1 -4.9 4h-48a5.008 5.008 0 0 1 -4.9-4z" fill="#ff914b" data-original="#ff914b" class=""></path><path xmlns="http://www.w3.org/2000/svg" d="m17 28.885h2v8h-2z" fill="#ff914b" data-original="#ff914b" class=""></path><path xmlns="http://www.w3.org/2000/svg" d="m22 36.885h4a1 1 0 0 0 1-1v-6a1 1 0 0 0 -1-1h-4a1 1 0 0 0 -1 1v6a1 1 0 0 0 1 1zm1-6h2v4h-2z" fill="#ff914b" data-original="#ff914b" class=""></path><path xmlns="http://www.w3.org/2000/svg" d="m29 28.885h2v8h-2z" fill="#ff914b" data-original="#ff914b" class=""></path><path xmlns="http://www.w3.org/2000/svg" d="m33 28.885h2v8h-2z" fill="#ff914b" data-original="#ff914b" class=""></path><path xmlns="http://www.w3.org/2000/svg" d="m38 36.885h4a1 1 0 0 0 1-1v-6a1 1 0 0 0 -1-1h-4a1 1 0 0 0 -1 1v6a1 1 0 0 0 1 1zm1-6h2v4h-2z" fill="#ff914b" data-original="#ff914b" class=""></path><path xmlns="http://www.w3.org/2000/svg" d="m45 28.885h2v8h-2z" fill="#ff914b" data-original="#ff914b" class=""></path><path xmlns="http://www.w3.org/2000/svg" d="m17 38.885h2v8h-2z" fill="#ff914b" data-original="#ff914b" class=""></path><path xmlns="http://www.w3.org/2000/svg" d="m38 46.885h4a1 1 0 0 0 1-1v-6a1 1 0 0 0 -1-1h-4a1 1 0 0 0 -1 1v6a1 1 0 0 0 1 1zm1-6h2v4h-2z" fill="#ff914b" data-original="#ff914b" class=""></path><path xmlns="http://www.w3.org/2000/svg" d="m45 38.885h2v8h-2z" fill="#ff914b" data-original="#ff914b" class=""></path><path xmlns="http://www.w3.org/2000/svg" d="m30 46.885h4a1 1 0 0 0 1-1v-6a1 1 0 0 0 -1-1h-4a1 1 0 0 0 -1 1v6a1 1 0 0 0 1 1zm1-6h2v4h-2z" fill="#ff914b" data-original="#ff914b" class=""></path><path xmlns="http://www.w3.org/2000/svg" d="m21 38.885h2v8h-2z" fill="#ff914b" data-original="#ff914b" class=""></path><path xmlns="http://www.w3.org/2000/svg" d="m25 38.885h2v8h-2z" fill="#ff914b" data-original="#ff914b" class=""></path><path xmlns="http://www.w3.org/2000/svg" d="m28.707 17.293-2.293-2.293 2.293-2.293-1.414-1.414-3 3a1 1 0 0 0 0 1.414l3 3z" fill="#ff914b" data-original="#ff914b" class=""></path><path xmlns="http://www.w3.org/2000/svg" d="m27.528 14h8.944v2h-8.944z" transform="matrix(.447 -.894 .894 .447 4.273 36.913)" fill="#ff914b" data-original="#ff914b" class=""></path><path xmlns="http://www.w3.org/2000/svg" d="m36.707 18.707 3-3a1 1 0 0 0 0-1.414l-3-3-1.414 1.414 2.293 2.293-2.293 2.293z" fill="#ff914b" data-original="#ff914b" class=""></path></g></svg>
                            @endif

                            <h5 class="bold">{{$feature['title']}}</h5>
                            <p class="">{{$feature['description']}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <x-front.company-profile />

    <!-- ./Tons of benefits -->
    <section id="features" class="section features">
        <div class="container">
            <div class="section-heading text-center">
                <h2 class="bold">Awards & Recognition</h2>
                <p class="lead">We have achieved several awards for our outstanding and unique web and mobile app development service and support to our valuable clients. Our awards signify our efficiency and digitalization expertise.</p>
            </div>
            <div class="swiper-container" data-sw-show-items="5" data-sw-space-between="30" data-sw-autoplay="2500" data-sw-loop="true">
                <div class="swiper-wrapper align-items-center">
                    <div class="swiper-slide"><img src="https://www.manektech.com/front/images/Microsoft-gold-partner.webp" class="img-responsive m-auto" alt="" style="max-height: 100px"></div>
                    <div class="swiper-slide"><img src="https://www.manektech.com/front/images/top-custom-software.webp" class="img-responsive m-auto" alt="" style="max-height: 100px"></div>
                    <div class="swiper-slide"><img src="https://www.manektech.com/front/images/smc.webp" class="img-responsive m-auto" alt="" style="max-height: 100px"></div>
                    <div class="swiper-slide"><img src="https://www.manektech.com/front/images/m-developer2.webp" class="img-responsive m-auto" alt="" style="max-height: 100px"></div>
                    <div class="swiper-slide"><img src="https://www.manektech.com/front/images/deliver-clutch.webp" class="img-responsive m-auto" alt="" style="max-height: 100px"></div>
                    <div class="swiper-slide"><img src="https://www.manektech.com/front/images/clutch.webp" class="img-responsive m-auto" alt="" style="max-height: 100px"></div>
                    <div class="swiper-slide"><img src="https://topsoftwarecompanies.co/badges/top-software-developers.png" class="img-responsive m-auto" alt="" style="max-height: 100px"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- ./Expertise -->
    <section class="section b-b bg-light">
        <div class="container">
            <div class="section-heading text-center">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="56" height="56" x="0" y="0" viewBox="0 0 128 128" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><g xmlns="http://www.w3.org/2000/svg"><path d="m103.651 68.757-8.293-16.7a36.517 36.517 0 0 0 -37.748-35.695 36.827 36.827 0 0 0 -35.187 33.87 36.421 36.421 0 0 0 11.752 29.554 24.014 24.014 0 0 1 7.834 17.624v10.809a1.75 1.75 0 0 0 1.75 1.75h32.48a1.75 1.75 0 0 0 1.75-1.75v-13.864h3.132a14.27 14.27 0 0 0 14.254-14.255v-3.13h3.185a5.685 5.685 0 0 0 5.091-8.213zm-3.234 3.68a2.146 2.146 0 0 1 -1.857 1.033h-4.935a1.75 1.75 0 0 0 -1.75 1.75v4.88a10.766 10.766 0 0 1 -10.754 10.755h-4.882a1.75 1.75 0 0 0 -1.75 1.75v13.864h-28.98v-9.059a27.524 27.524 0 0 0 -8.968-20.2 32.942 32.942 0 0 1 -10.626-26.732 33.291 33.291 0 0 1 31.811-30.618 33.018 33.018 0 0 1 34.139 32.64 1.753 1.753 0 0 0 .183.759l8.469 17.055a2.148 2.148 0 0 1 -.1 2.123z" fill="#ff914b" data-original="#ff914b"></path><path d="m74.225 40.209-10.12-1.47-4.526-9.171a1.75 1.75 0 0 0 -3.139 0l-4.526 9.171-10.121 1.47a1.75 1.75 0 0 0 -.97 2.985l7.324 7.139-1.729 10.08a1.751 1.751 0 0 0 2.54 1.844l9.051-4.757 9.053 4.759a1.749 1.749 0 0 0 2.538-1.846l-1.729-10.08 7.323-7.139a1.75 1.75 0 0 0 -.97-2.985zm-9.455 8.26a1.749 1.749 0 0 0 -.5 1.549l1.285 7.491-6.728-3.537a1.751 1.751 0 0 0 -1.629 0l-6.728 3.537 1.285-7.491a1.749 1.749 0 0 0 -.5-1.549l-5.443-5.306 7.522-1.093a1.752 1.752 0 0 0 1.318-.957l3.357-6.813 3.365 6.817a1.749 1.749 0 0 0 1.317.957l7.522 1.093z" fill="#ff914b" data-original="#ff914b"></path></g></g></svg>
                <h2 class="bold">Our Expertise</h2>
                <!-- <p class="lead text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, assumenda autem consequatur cum dignissimos dolores doloribus eius eum iusto laborum quasi quidem sapiente sit.</p> -->
            </div>
            <div class="row">
                <div class="col-md-4 col-lg-4">
                    <nav id="sw-nav-developers" class="h-100 nav flex-md-column justify-content-between justify-content-md-start nav-pills nav-pills-light nav-fill">
                        {{! $no=1 }}
                        @foreach($service->serviceExpertises as $key => $expertise)
                        <a class="nav-item nav-link text-md-start pe-5 lead {{($loop->first)?'active':''}}" href="#" data-step="{{$no++}}">{{$expertise->title}}</a>    
                        @endforeach
                    </nav>
                </div>
                
                <div class="col-md-8 ps-2 ps-md-5 ps-lg-5">
                        <div class="swiper-container mt-4 mt-md-0 our-xpertise-slider" data-sw-navigation="#sw-nav-developers">
                            <div class="swiper-wrapper line-numbers">
                            @foreach($service->serviceExpertises as $expertise)
                            <div class="swiper-slide">
                                @if(!blank($expertise['image']))
                                <img src="{{isset($expertise['image'])?getImage($expertise['image']):'https://www.manektech.com/front/images/Microsoft-gold-partner.webp'}}" class="img-responsive" alt="" style="max-height: 65px">
                                @else
                                <i data-feather="code" width="65" height="65" class="stroke-primary me-2 my-3"></i>
                                @endif
                                <h2> {{$expertise['title']}} </h2>
                                {!! $expertise['description'] !!}
                                
                                <a href="#" class="btn btn-rounded text-white btn-gradient-darkPinkOrange mt-5">Learn More<i class="fa fa-long-arrow-alt-right ms-3"></i></a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- ./Expertise -->

    <!-- ./Process of development -->
    <section class="section">
        <div class="container bring-to-front pb-0">
            <div class="section-heading text-center w-75 mx-auto">
                <h2>Services We Offer</h2>
                <!-- <p class="">When you're looking for a template you want it to stand-out. Dashcore comes with hundreds of customizable features addressed to developers and designers.</p> -->
            </div>
            <div class="shadow bg-contrast p-3 rounded">
                <nav class="nav nav-tabs tabs-clean slide d-inline-flex mb-4 w-100">
                    @foreach($service->serviceAppes as $appPoint)
                    <a class="nav-item nav-link {{($loop->first)?'active':''}}" data-bs-toggle="tab" href="#{{makeSlug($appPoint->short_title)}}">{{$appPoint->short_title}}</a>
                    @endforeach
                    <!-- <a class="nav-item nav-link active" data-bs-toggle="tab" href="#designers">UI/UX Design</a>-->
                </nav>
                <div class="tab-content">
                    @foreach($service->serviceAppes as $appPoint)
                    <div class="tab-pane {{($loop->first)?'active':''}}" id="{{makeSlug($appPoint->short_title)}}">
                        <div class="row gap-y">
                            <div class="col-lg-6">
                                <h2 class="bold mb-4">{{$appPoint->title}}</h2>
                                {!!$appPoint->description!!}

                                <a href="javascript:;" class="btn text-white btn-gradient-darkPinkOrange btn-rounded ms-3">Let's chat about your development needs</a>
                            </div>
                            <div class="col-lg-6">
                                <figure class="px-2">
                                    @if(!blank($appPoint['image']))
                                    <img src="{{isset($appPoint['image'])?getImage($appPoint['image']):'../front/img/screens/developer.png'}}" class="img-responsive shadow rounded" alt="{{$appPoint->title}}">
                                    @else
                                    <img src="../front/img/screens/developer.png" class="img-responsive shadow rounded" alt="...">
                                    @endif
                                </figure>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <x-front.customer-success-number-record />

    <div class="position-relative">
        <div class="shape-divider shape-divider-bottom shape-divider-fluid-x text-contrast"><svg viewBox="0 0 2880 48" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z"></path>
        </svg> </div>
    </div>
    <!-- ./CounterBox -->
    <!-- <section class="section app-download">
        <div class="container bring-to-front">
            <div class="shadow-lg bg-contrast p-5 rounded">
                <div class="row gap-y">
                    @foreach(getCounterBox() as $counterRow)
                    <div class="col-6 col-md-3">
                        <div class="d-flex align-items-center">
                            <i data-feather="{{$counterRow['image']}}" class="stroke-primary me-2" width="36" height="36"></i> 
                            <span class="counter bold text-darker font-md">{{$counterRow['number']}}</span>
                        </div>
                        <p class="text-secondary m-0">{{$counterRow['title']}}</p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section> -->

    <section class="bg-white edge top-left whychoose">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading text-center mb-0">
                        <h2 class="bold">{{$service->hire_head_title}}</h2>
                        <p class="lead text-primary">{{$service->hire_head_description}}</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="table-wrapper custom-pricing-table-wrapper">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th class="text-center">
                                        <svg class="mb-2" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="25" height="25" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path xmlns="http://www.w3.org/2000/svg" d="m256 0c-141.164062 0-256 114.835938-256 256s114.835938 256 256 256 256-114.835938 256-256-114.835938-256-256-256zm121.75 388.414062c-4.160156 4.160157-9.621094 6.253907-15.082031 6.253907-5.460938 0-10.925781-2.09375-15.082031-6.253907l-106.667969-106.664062c-4.011719-3.988281-6.25-9.410156-6.25-15.082031v-138.667969c0-11.796875 9.554687-21.332031 21.332031-21.332031s21.332031 9.535156 21.332031 21.332031v129.835938l100.417969 100.414062c8.339844 8.34375 8.339844 21.824219 0 30.164062zm0 0" fill="#ff914b" data-original="#ff914b" class=""></path></g></svg>
                                        <h4 class="bold mb-0">Full-Time Hiring</h4>
                                    </th>
                                    <th class="text-center">
                                        <svg class="mb-2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="25" height="25" x="0" y="0" viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><g xmlns="http://www.w3.org/2000/svg"><path d="m11.577 3.923c-4.454 0-8.077 3.623-8.077 8.077s3.623 8.077 8.077 8.077c.372 0 .673-.301.673-.673v-14.808c0-.371-.301-.673-.673-.673z" fill="#ff914b" data-original="#ff914b" class=""/></g><g xmlns="http://www.w3.org/2000/svg"><path d="m12 24c-6.617 0-12-5.383-12-12s5.383-12 12-12 12 5.383 12 12-5.383 12-12 12zm0-22c-5.514 0-10 4.486-10 10s4.486 10 10 10 10-4.486 10-10-4.486-10-10-10z" fill="#ff914b" data-original="#ff914b" class=""/></g></g></svg>
                                        <h4 class="bold mb-0">Part-Time Hiring</h4>
                                    </th>
                                    <th class="text-center">
                                        <svg class="mb-2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="25" height="25" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g>
                                            <g xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <path d="M347.216,301.211l-71.387-53.54V138.609c0-10.966-8.864-19.83-19.83-19.83c-10.966,0-19.83,8.864-19.83,19.83v118.978    c0,6.246,2.935,12.136,7.932,15.864l79.318,59.489c3.569,2.677,7.734,3.966,11.878,3.966c6.048,0,11.997-2.717,15.884-7.952    C357.766,320.208,355.981,307.775,347.216,301.211z" fill="#ff914b" data-original="#ff914b" class=""/>
                                                </g>
                                            </g>
                                            <g xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <path d="M256,0C114.833,0,0,114.833,0,256s114.833,256,256,256s256-114.833,256-256S397.167,0,256,0z M256,472.341    c-119.275,0-216.341-97.066-216.341-216.341S136.725,39.659,256,39.659c119.295,0,216.341,97.066,216.341,216.341    S375.275,472.341,256,472.341z" fill="#ff914b" data-original="#ff914b" class=""/>
                                                </g>
                                            </g>
                                            <g xmlns="http://www.w3.org/2000/svg">
                                            </g>
                                            <g xmlns="http://www.w3.org/2000/svg">
                                            </g>
                                            <g xmlns="http://www.w3.org/2000/svg">
                                            </g>
                                            <g xmlns="http://www.w3.org/2000/svg">
                                            </g>
                                            <g xmlns="http://www.w3.org/2000/svg">
                                            </g>
                                            <g xmlns="http://www.w3.org/2000/svg">
                                            </g>
                                            <g xmlns="http://www.w3.org/2000/svg">
                                            </g>
                                            <g xmlns="http://www.w3.org/2000/svg">
                                            </g>
                                            <g xmlns="http://www.w3.org/2000/svg">
                                            </g>
                                            <g xmlns="http://www.w3.org/2000/svg">
                                            </g>
                                            <g xmlns="http://www.w3.org/2000/svg">
                                            </g>
                                            <g xmlns="http://www.w3.org/2000/svg">
                                            </g>
                                            <g xmlns="http://www.w3.org/2000/svg">
                                            </g>
                                            <g xmlns="http://www.w3.org/2000/svg">
                                            </g>
                                            <g xmlns="http://www.w3.org/2000/svg">
                                            </g>
                                            </g></svg>
                                        <h4 class="bold mb-0">Hourly Hiring</h4>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row" class="scope text-end">View Hire</th>
                                    <td class="text-center text-primary">8 Hours</td>
                                    <td class="text-center text-primary">4 Hours</td>
                                    <td class="text-center text-primary">Hour Basis</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="scope text-end">Hiring Period <br>(Min)</th>
                                    <td class="text-center text-primary">1 Month</td>
                                    <td class="text-center text-primary">1 Month</td>
                                    <td class="text-center text-primary">25 Hours</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="scope text-end">Methodology</th>
                                    <td class="text-center text-primary" colspan="3">Agile</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="scope text-end">Communication</th>
                                    <td class="text-center text-primary" colspan="3">Phone, Chat, E-mail</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="scope text-end">Project Trackers</th>
                                    <td class="text-center text-primary" colspan="3">Daily Reports, Basecamp, Jira, Redmine etc.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ./>Hire Android App developers -->
    <!-- <section class="bg-light edge top-left whychoose">
        <div class="container pt-0">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading text-center mb-0">
                        <h2 class="bold">{{$service->hire_head_title??"Hire Developers"}}</h2>
                        <p class="lead text-secondary">{{$service->hire_head_description??""}}</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach(hireDeveloper() as $keyHire => $hire)
                <div class="col-md-4 mt-5">
                    <div class="card text-center border">
                        <div class="pricing card-header p-5 d-flex align-items-center flex-column {{($keyHire%2!=0)?'bg-primary text-contrast':'bg-light'}}">
                            <h4 class="bold mb-0 {{($keyHire%2!=0)?'text-contrast':''}}">{{$hire['year']}}</h4>
                            <p>{{$hire['description']}}</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            @foreach($hire['future_list'] as $futureHireItem)
                            <li class="list-group-item {{(!$futureHireItem['visible'])?'strike-through':''}}">{{$futureHireItem['name']}}</li>
                            @endforeach
                        </ul>
                        <div class="card-body"><a href="{{ route('contact-us') }}" class="btn btn-rounded {{($keyHire%2!=0)?'btn-primary':'btn-outline-primary'}}">Hire Now<i class="fa fa-long-arrow-alt-right ms-3"></i></a></div>
                    </div>
                </div>
                @endforeach    
            </div>
        </div>
    </section> -->
    <!-- <div class="position-relative">
        <div class="shape-divider shape-divider-bottom shape-divider-fluid-x text-darker">
            <svg viewBox="0 0 2880 48" xmlns="http://www.w3.org/2000/svg"><path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z"></path></svg>
        </div>
    </div> -->

    <section class="section bg-light">
        <div class="container pb-5">
            <div class="section-heading text-center w-75 mx-auto">
            <div class="d-flex align-items-center mb-3 justify-content-center"><img class="w-50px" src="{{ asset('front/img') }}/statue-of-liberty.svg" alt="statue of liberty"><span class="badge bg-contrast shadow-sm py-2 px-3 text-primary rounded-pill"><span class="text-secondary">Our</span> Project</span></div>
                <h2 class="bold">Success Stories </h2>
                <p class="lead text-muted">Take a look at how you can take advantage of the tons of features included with
                    our template.</p>
            </div>
            <div class="row gap-y">
                @if(count($portfolioList) > 0)
                @foreach($portfolioList as $portfolio)
                <x-front.portfolio-list :title="$portfolio->title"  :description="readMore($portfolio->description)" :image="(!blank($portfolio->image) && empty($portfolio->image)) ? getImage($portfolio->image) : 'https://picsum.photos/350/200/?random&gravity=south'" :url="route('portfolio.detail', $portfolio->slug)" />
                @endforeach
                @else
                <x-front.portfolio-list :title="'Micro-Savings Mobile App'"  :description="'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry'" :image="'https://picsum.photos/350/200/?random&gravity=south'" :url="route('portfolio.detail', '1')" />
                <x-front.portfolio-list :title="'SaaS based Holiday App'"  :description="'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry'" :image="'https://picsum.photos/350/200/?random&gravity=south'" :url="route('portfolio.detail', '1')" />
                <x-front.portfolio-list :title="'Micrographia Identification'"  :description="'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry'" :image="'https://picsum.photos/350/200/?random&gravity=south'" :url="route('portfolio.detail', '1')" />
                @endif
            </div>
        </div>
    </section>
    <section class="bg-darker">
        <div class="container">
            <div class="section-heading">
                <div class="row">
                    <div class="col-12 col-md-10 col-lg-8 mx-auto text-center"><span
                            class="badge badge-light badge-pill text-uppercase bold px-4 py-2 mb-4">Get started</span>
                        <h2 class="text-contrast">Turning dreams into reality <span class="typed"
                                data-strings='["Money", "Time", "Costs"]'></span></h2>
                        <p class="lead text-muted">At Expert App Devs, we don't just build apps. We turn your dreams into reality. Connect with us today!</p>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <p class="handwritten highlight font-md">Available For Hire!!!</p>
                <a  href="{{route('contact-us')}}" class="btn btn-lg text-white btn-gradient-darkPinkOrange px-4">Hire Developer</a>
            </div>
        </div>
    </section>
    <div class="position-relative">
        <div class="shape-divider shape-divider-bottom shape-divider-fluid-x text-contrast"><svg viewBox="0 0 2880 48"
                xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z"></path>
            </svg></div>
    </div>

    <!-- Extend Core -->
    <x-front.trending-technology />

    <!-- ./Testimonials -->
    <section class="bg-light b-t pt-0 mt-8">
        <div class="container">
            <div class="section-heading text-center">
                <h2 class="bold mt-3">Customer reviews</h2>
            </div>
            <div class="testimonials-slider">
                <div class="swiper-container">
                    <div class="swiper-wrapper text-center w-50">
                        @foreach (getTestimonial() as $tl)
                            <x-front.testimonial-list :name="$tl->name" :short_title="$tl->short_title" :description="$tl->description"
                                :image="getImage(!blank($tl->image) ? $tl->image : 'default-testimonial.jpg')" />
                        @endforeach
                    </div>
                </div>
                <div class="swiper-button swiper-button-prev rounded-circle shadow"><i data-feather="arrow-left"></i>
                </div>
                <div class="swiper-button swiper-button-next rounded-circle shadow"><i data-feather="arrow-right"></i>
                </div>
            </div>
        </div>
    </section><!-- ./Testimonials -->

    <section class="section">
        <div class="container">
            <div class="section-heading">
                <div class="d-flex align-items-center mb-3"><img class="w-50px" src="{{ asset('front/img') }}/statue-of-liberty.svg" alt="statue of liberty"> <span class="badge bg-contrast shadow-sm py-2 px-4 text-primary rounded-pill"><span class="text-secondary">We</span> serve</span></div>
                <h2 class="bold">Different Industries</h2>
            </div>
            <div class="row gap-y text-center text-md-start">
                @if(count($industriList) > 0)
                @foreach($industriList as $industri)
                <x-front.industri-list :title="$industri->title"  :shortDescription="$industri->short_description" :icon="$industri->icon??''"  />
                @endforeach
                @else
                <x-front.industri-list :title="'Media and Entertainment'"  :shortDescription="'Creating highly functional and the most demanding apps for the dynamic media and entertainment sector.'" :icon="''"  />
                <x-front.industri-list :title="'Automobiles'"  :shortDescription="'We develop revolutionary and successful app solutions to meet the demands of the automobile industry.'" :icon="''"  />
                <x-front.industri-list :title="'Education'"  :shortDescription="'Our experts create scalable and cutting-edge to deliver maximum productivity in the education domain.'" :icon="''"  />
                @endif
            </div>
        </div>
    </section>
    

    <section class="section features-carousel b-b">
        <div class="container">
            <div class="cards-wrapper">
                <div class="swiper-container" data-sw-autoplay="3500" data-sw-loop="true" data-sw-nav-arrows=".features-nav" data-sw-show-items="1" data-sw-space-between="30" data-sw-breakpoints='{"768": {"slidesPerView": 3}, "992": {"slidesPerView": 4}}'>
                    <div class="swiper-wrapper px-1">
                        @if(count($solutionSliderList) > 0)
                        
                        @foreach ($solutionSliderList as $key => $solution)
                        @php $c=1+$key; @endphp
                        <a href="{{route('solution.detail', $solution->slug)}}" class="swiper-slide px-2 px-sm-1">
                            <div class="card border-0 shadow">
                                <div class="card-body">
                                    <div class="logo mx-auto my-3">
                                        <img src="{{ (!blank($solution->icon) && empty($solution->icon)) ? getImage($solution->icon) : asset('front/img') . '/automate-social/icons/' . $c . '.svg'}}" class="img-responsive" alt="">
                                    </div>
                                    <hr class="w-50 mx-auto my-3">
                                    <p class="bold mt-4">{{ $solution->title }}</p>
                                    <p class="regular small text-secondary">
                                        @foreach ($solution->solution_technology as $st)
                                            {{ $st->name."," }}
                                        @endforeach
                                    </p>
                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-around">
                                    <div class="roi">
                                        <p class="text-darkBlue small mt-0">{{ $solution->short_description }}</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        @endforeach
                        @else
                        <div class="swiper-slide px-2 px-sm-1">
                                <div class="card border-0 shadow">
                                    <div class="card-body">
                                        <div class="logo mx-auto my-3"><img src="{{asset('front/img')}}/automate-social/icons/1.svg" class="img-responsive" alt=""></div>
                                        <hr class="w-50 mx-auto my-3">
                                        <p class="bold mt-4">Service Provider Solution</p>
                                        <p class="regular small text-secondary">Android iOS React Native </p>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-around">
                                        <div class="roi">
                                            <p class="mb-0">Due to pandemic situations prevailing all over the world, the customer demands for services at home ...
                                            </p>
                                            <p class="text-primary small mt-0">Explore more</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide px-2 px-sm-1">
                                <div class="card border-0 shadow">
                                    <div class="card-body">
                                        <div class="logo mx-auto my-3"><img src="{{asset('front/img')}}/automate-social/icons/2.svg" class="img-responsive" alt=""></div>
                                        <hr class="w-50 mx-auto my-3">
                                        <p class="bold mt-4">Ecommerce App Solution</p>
                                        <p class="regular small text-secondary">Android, iOS</p>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-around">
                                        <div class="roi">
                                            <p class=" mb-0">Are you looking to launch your own online eCommerce store? Are you looking for a mobile app for your...
                                            </p>
                                            <p class="text-primary small mt-0">Explore more</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide px-2 px-sm-1">
                                <div class="card border-0 shadow">
                                    <div class="card-body">
                                        <div class="logo mx-auto my-3"><img src="{{asset('front/img')}}/automate-social/icons/3.svg" class="img-responsive" alt=""></div>
                                        <hr class="w-50 mx-auto my-3">
                                        <p class="bold mt-4">Food Delivery Solution</p>
                                        <p class="regular small text-secondary">iOS,Android</p>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-around">
                                        <div class="roi">
                                            <p class=" mb-0">Are you looking for an online food ordering and delivery solution like Zomato or UberEats? Then, our...
                                            </p>
                                            <p class="text-primary small mt-0">Explore more</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide px-2 px-sm-1">
                                <div class="card border-0 shadow">
                                    <div class="card-body">
                                        <div class="logo mx-auto my-3"><img src="{{asset('front/img')}}/automate-social/icons/4.svg" class="img-responsive" alt=""></div>
                                        <hr class="w-50 mx-auto my-3">
                                        <p class="bold mt-4">Taxi Booking Solution</p>
                                        <p class="regular small text-secondary">iOS, Android</p>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-around">
                                        <div class="roi">
                                            <p class="mb-0">Our Taxi Booking product is a perfect solution for you to develop your own on-demand online Taxi Boo...
                                            </p>
                                            <p class="text-primary small mt-0">Explore more</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div><!-- Add Arrows -->
                    <div class="text-primary features-nav features-nav-next">
                        <span class="text-uppercase small">Next</span> 
                        <i class="features-nav-icon fas fa-long-arrow-alt-right"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ./Process of Development -->
    <section class="section text-contrast advanced-automation-solution overflow-hidden">
        <div class="container">
            <div class="section-heading text-center">
                <h2 class="bold text-contrast">Our Blog</h2>
                <p class="lead">Putting our full and finest efforts to keep you updated with our latest news archives, tech pieces, and hand-picked information. We make sure you get the latest industry insights and technology updates once they happen.</p>
            </div>
            <div class="row gap-y">
                @foreach (getBlog() as $blog)
                    <x-front.blog-list :title="$blog->title" :publishBy="$blog->publish_by" :publishDate="$blog->publish_date" :description="readMore($blog->description)"
                        :blogImage="(!blank($blog->image) && empty($blog->image)) ? getImage($blog->image) : 'https://picsum.photos/350/200/?random&gravity=north'" :blogDetailUrl="route('blog.detail', $blog->slug)" />
                @endforeach
            </div>
        </div>
    </section>

    <!-- ./FAQs -->
    <x-front.faq :faqTitle="$service->home_description" :faqDescription="$service->short_description">
        @foreach ($service->faqs as $faq)
            <x-front.faq-list :question="$faq->question" :answer="$faq->answer" :fid="$loop->index + 1" />
        @endforeach
    </x-front.faq>
    <!-- ./Download -->
    <x-front.hire-developer />
@endsection
@push('js')
    <script src="{{ asset('front/js/jquery.validate.js') }}"></script>
    <script src="{{ asset('front/js/front-script.js') }}"></script>
@endpush

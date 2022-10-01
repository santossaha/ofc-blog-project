@extends('front.layout.app')
@push('meta')
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="description" content="{{ $hireDetail->meta_description }}" />
    <meta name="keywords" content="{{ $hireDetail->meta_keyword }}">
    <meta name="robots" content="{{ $hireDetail->meta_robots }}" />
    <link rel="canonical" href="{{ url()->current() }}" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="{{ $hireDetail->meta_title }}" />
    <meta property="og:description" content="{{ $hireDetail->meta_description }}" />
    <meta property="og:keywords" content="{{ $hireDetail->meta_keyword }}" />
    <meta property="og:image:width" content="750" />
    <meta property="og:image:height" content="375" />
    <meta name="twitter:card" content="summary_large_image" />

@endpush
@section('content')
        <x-front.service-detail :title="$hireDetail->title" :icon="$hireDetail->icon" :shortDescription="$hireDetail->description" serviceImage="{{asset('front/img').'/screens/app/2.png'}}"  >
            <div class="device-twin ms-auto align-items-center">
                <div class="mockup absolute" data-aos="fade-left">
                    <div class="screen"><img src="{{asset('front/img')}}/screens/app/we_serve_02.png" alt="..."></div><span class="button"></span>
                </div>
                <div class="iphone-x light front me-0">
                    <div class="screen shadow-box"><img src="{{asset('front/img')}}/screens/app/we_serve_01.png" alt="..."></div>
                    <div class="notch"></div>
                </div>
            </div>
        </x-front.service-detail>
        <!-- ./App Landing - page header -->

        <x-front.partner-slider-list />

        <section class="section bg-primary text-contrast">
            <div class="container bring-to-front">
                <div class="row g-3">
                    @foreach(customerSuccessNumberRecoardList() as $k => $successNumber)
                    @if($k <= 3)
                    <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                        <div class="rounded border shadow-box shadow-hover p-2 p-sm-3 d-flex align-items-center flex-wrap bg-contrast">
                            <img src="{{asset('front/img').$successNumber['icon'] }}" alt="{{$successNumber['alt']}}" width="45" hight="45" class="me-2" />
                            <div class="text-start">
                                <p class="counter font-md bold m-0 text-dark">{{$successNumber['number']}}<span>{{$successNumber['sign']}}</span></p>
                                <p class="m-0 text-dark">{{$successNumber['name']}}</p>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>
        </section>
        
        <!-- Begin Content With CTA Form -->
        <div class="section formWithImg-bg">
            <div class="container bring-to-front">
                <div class="row align-items-center gap-y">
                    <div class="col-md-5 ms-md-auto">
                        <div class="mb-3">
                            <h2>{{$hireDetail->about_title}}</h2>
                            <p class="lead text-primary">{!!$hireDetail->about_description!!}</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <x-front.contact-form />
                    </div>
                </div>
            </div>
        </div>
        <!-- End Content With CTA Form -->
        
        <!-- ./Counters -->
        <section class="section counters bg-primary text-contrast">
            <div class="container">
                <div class="section-heading text-center">
                    <h2 class="bold text-contrast">Numbers say more than words</h2>
                    <p class="lead">The vital stats we have achieved are enough to demonstrate our success record and customer satisfaction rate.</p>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-12 text-center">
                        <div class="rounded border shadow-box shadow-hover p-2 p-sm-3 d-flex align-items-center flex-wrap bg-contrast">
                            <svg xmlns="http://www.w3.org/2000/svg" width="33.509" height="38" viewBox="0 0 33.509 38" class="feather feather-user me-4"><defs><style>.a{fill:#17313b;}.b{fill:#ff3d2e;}</style></defs><path class="a" d="M26.255,26.945A10.811,10.811,0,0,1,19,29.709,10.343,10.343,0,0,1,8.291,19C8.291,12.782,12.782,8.464,19,8.464a10.672,10.672,0,0,1,7.255,2.591l1.382,1.209,5.873-5.873L31.955,5.009A18.138,18.138,0,0,0,19,0C7.945,0,0,7.945,0,18.827S8.118,38,19,38a18.851,18.851,0,0,0,13.127-5.009l1.382-1.382-5.873-5.873-1.382,1.209Z"/><circle class="b" cx="6.391" cy="6.391" r="6.391" transform="translate(12.264 12.609)"/></svg>
                            <div class="text-start">
                                <p class="counter bold font-md mt-0 mb-0 text-dark" style="visibility: visible;">30<span>+</span></p>
                                <p class="m-0 text-dark">CLIENT REVIEWS ON CLUTCH</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-12 text-center">
                        <div class="rounded border shadow-box shadow-hover p-2 p-sm-3 d-flex align-items-center flex-wrap bg-contrast">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30.6" height="30.6" viewBox="0 0 30.6 30.6" class="feather feather-user me-4"><defs><style>.c{fill:#3a7af3;}</style></defs><path class="c" d="M12.28,10.761s-1.7-.169-1.7,1.345v6.725H22.1v2.018a.964.964,0,0,1-1.02,1.008h-10.2V30.6h12.24s7.411-1.144,7.48-8.743v-11.1ZM30.259,0H8.16C.169,1.883,0,8.44,0,8.44V30.6H8.5V10.424a2.072,2.072,0,0,1,1.7-2.017H30.261V0Z" transform="translate(0)"/></svg>
                            <div class="text-start">
                                <p class="counter bold font-md mt-0 mb-0 text-dark" style="visibility: visible;">30<span>+</span></p>
                                <p class="m-0 text-dark">CLIENT REVIEWS ON GOODFIRMS</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-12 text-center">
                        <div class="rounded border shadow-box shadow-hover p-2 p-sm-3 d-flex align-items-center flex-wrap bg-contrast">
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.2" viewBox="0 0 32 32" width="32" height="32" class="feather feather-user me-4"><defs><style>.s0{fill:#6fda44;}</style></defs><path id="Layer" fill-rule="evenodd" class="s0" d="m31 14c0 3.8-3 6.8-6.8 6.8-1.7 0-3.3-0.5-4.6-1.3l-1.5 7.1h-3.5l2.1-9.8c-1-1.3-1.8-2.7-2.5-4.1v1.5c0 3.7-3 6.6-6.6 6.6-3.6 0-6.6-2.9-6.6-6.6v-8.9h3.4v8.9q0 0.7 0.3 1.2 0.2 0.6 0.7 1.1 0.4 0.4 1 0.7 0.6 0.2 1.2 0.2 0.6 0 1.2-0.2 0.6-0.3 1.1-0.7 0.4-0.5 0.6-1.1 0.3-0.5 0.3-1.2v-8.9h3.4c0.7 2.3 1.8 5.1 3.4 7.4 1-3.4 3.4-5.5 6.6-5.5 3.8 0 6.8 3.1 6.8 6.8zm-3.4 0c0-1.8-1.5-3.3-3.4-3.3-2.5 0-3.3 2.4-3.5 3.8h-0.1l-0.2 1.4c1.1 0.9 2.4 1.5 3.8 1.5 1.9 0 3.4-1.5 3.4-3.4z"/></svg>
                            <div class="text-start">
                                <p class="counter bold font-md mt-0 mb-0 text-dark" style="visibility: visible;">30<span>+</span></p>
                                <p class="m-0 text-dark">CLIENT REVIEWS ON UPWORK</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="position-relative">
            <div class="shape-divider shape-divider-bottom shape-divider-fluid-x text-primary"><svg viewBox="0 0 2880 48" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z"></path>
                </svg></div>
        </div>
        <!-- Begin Hiring Process -->
        <section class="hiring-process-wrapper">
            <div class="container pt-0 pb-0">
                <div class="section-heading text-center mx-auto">
                    <h2>Process of Hiring Reliable & Efficient Mobile App Developers</h2>
                </div>
               <div class="row">
                  <!-- <div class="col-lg-2 offset-lg-2 d-none d-lg-flex flex-column align-items-start justify-content-center pl-0 step no-satisfaction">
                     <img loading="lazy" src="front/img/hire-team.svg" alt="Satisfaction" class="mb-3">
                     <h5 class="mb-3 regularBoldFont title">Requirement not Fulfilled</h5>
                     <p class="regular-text">If your requirements are not fulfilled yet, you should go for the new resource.</p>
                  </div>
                  <div class="col-lg-2 d-none d-lg-block px-0 pt-5">
                     <div class="h-100 dashed-line"></div>
                  </div>
                  <div class="col-10 col-md-6 col-lg-4 offset-1 offset-md-3 offset-lg-0 px-0">
                     <div class="row mx-0 step line-parent">
                        <div class="col-11 col-sm-5 col-md-6 offset-1 offset-md-0 d-md-flex align-items-md-start justify-content-md-center px-0"><span class="regular-text step-title">Step - 1</span><img loading="lazy" src="front/img/hire-inquire.svg" alt="Inquiry" width="160" height="47"></div>
                        <div class="col-11 col-sm-6 offset-1 offset-sm-0 px-0 pb-xl-5 mb-5">
                           <h5 class="mb-3 regularBoldFont title">Understanding Requirements</h5>
                           <p class="regular-text">Let us know your project ideas and requirements. We ensure your project's privacy and security.</p>
                        </div>
                     </div>
                     <div class="row mx-0 step line-parent">
                        <div class="col-11 col-sm-5 col-md-6 offset-1 offset-md-0 d-md-flex align-items-md-start justify-content-md-center px-0"><span class="regular-text step-title">Step - 2</span><img loading="lazy" src="front/img/hire-select-cv.svg" alt="Select CV" width="170" height="92"></div>
                        <div class="col-11 col-sm-6 offset-1 offset-sm-0 px-0 pb-xl-5 mb-5">
                           <h5 class="mb-3 regularBoldFont title">Select Developer</h5>
                           <p class="regular-text">Shortlist the developer as per your project needs by reviewing their CVs.</p>
                        </div>
                     </div>
                     <div class="row mx-0 step line-parent">
                        <div class="col-11 col-sm-5 col-md-6 offset-1 offset-md-0 d-md-flex align-items-md-start justify-content-md-center px-0"><span class="regular-text step-title">Step - 3</span><img loading="lazy" src="front/img/hire-interview.svg" alt="Interview" width="162" height="70"></div>
                        <div class="col-11 col-sm-6 offset-1 offset-sm-0 px-0 pb-xl-5 mb-5">
                           <h5 class="mb-3 regularBoldFont title">Take Interview</h5>
                           <p class="regular-text">Take the interview of the hired developer at your convenience over the phone or via video call.</p>
                        </div>
                     </div>
                     <div class="row mx-0 step line-parent">
                        <div class="col-11 col-sm-5 col-md-6 offset-1 offset-md-0 d-md-flex align-items-md-start justify-content-md-center px-0"><span class="regular-text step-title">Step - 4</span><img loading="lazy" src="front/img/hire-team.svg" alt="Inquiry" width="152" height="54"></div>
                        <div class="col-11 col-sm-6 offset-1 offset-sm-0 px-0 pb-xl-5 mb-5">
                           <h5 class="mb-3 regularBoldFont title">Hire a Developer and Add to Your Team</h5>
                           <p class="regular-text">Once you are done with the interview process, hire the resource for your project.</p>
                        </div>
                        <span class="down-arrow"></span>
                     </div>
                  </div> -->
                    <div class="col-lg-12 text-center">
                        <img src="{{ asset('front/img') }}/process.png" class="img-fluid" alt="Process">
                    </div>
               </div>
            </div>
            <div class="container grid-line-wrapper pt-0 pb-0">
               <div class="row">
                  <div class="col p-0"></div>
                  <div class="col p-0"></div>
                  <div class="col p-0"></div>
                  <div class="col p-0"></div>
                  <div class="col p-0"></div>
                  <div class="col p-0"></div>
                  <div class="col p-0"></div>
                  <div class="col p-0"></div>
                  <div class="col p-0"></div>
                  <div class="col p-0"></div>
                  <div class="col p-0"></div>
                  <div class="col p-0"></div>
               </div>
            </div>
        </section>
        <!-- End Hiring Process -->

        <!-- Begin CTA(Download CV) -->
        <section class="section app-download">
            <div class="container bring-to-front pt-0">
                <div class="shadow-lg bg-primary p-5 rounded">
                    <div class="section-heading text-center">
                        <p class="badge bg-contrast text-dark rounded-pill shadow-sm bold py-2 px-4">Start today</p>
                        <h2 class="bold text-contrast">Hire Professional App Developers</h2>
                        <p class="text-contrast">Our custom mobile app development services are tailored to your specific needs and goals. As a result of our customized solutions, we hope to help you uncover earnings and expand your business operations.</p>
                    </div>
                    <nav class="nav flex-column flex-md-row justify-content-center align-items-center mt-5">
                        <a href="{{route('contact-us')}}" class="nav-link py-3 px-4 btn btn-rounded btn-download btn-dark text-contrast me-0 me-md-4 mb-4 mb-md-0">
                            <p class="ms-2"><span class="d-block bold text-contrast">Hire hourly Developer</span></p>
                        </a>
                        <a href="{{route('contact-us')}}" class="nav-link py-3 px-4 btn btn-rounded btn-download btn-light text-darker">
                            <p class="ms-2"><span class="d-block bold text-darker">Hire Monthly Developer</span></p>
                        </a></nav>
                </div>
            </div>
        </section>
        <!-- End CTA(Download CV) -->

        <!-- Begin Hire Dedicated Developer -->
        @if(count($hireDetail->features) > 0)
        @foreach($hireDetail->features as $k => $featureRow)
        <section class="section {{($k%2==0)?'bg-light':''}}">
            <div class="container bring-to-front">
                <div class="section-heading text-start mx-auto mb-0">
                    <h2>{{$featureRow->title}}</h2>
                    <p class="lead text-primary">{!!$featureRow->description!!}</p>
                </div>
            </div>
        </section>
        @endforeach
        @endif
        
        <!-- End Still Look Developer -->

        <!-- Begin Candidate -->
        <section class="section">
            <div class="container bring-to-front pt-0">
                <div class="section-heading text-start mx-auto mb-5">
                    <h2>{{$hireDetail->schedule_head_title}}</h2>
                    <p class="lead text-primary">{!!$hireDetail->schedule_head_description!!}</p>
                </div>
                <div class="row gap-y">
                    @foreach($hireDetail->sechdules as $scheduleRow)
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="candidate-box rounded border shadow-box shadow-hover p-2 p-sm-3 bg-contrast h-100">
                            <div class="icon-part mb-3">
                                <img src="front/img/skill/icon-box-screening.svg" class="img-fluid" alt="">
                            </div>
                            <div class="content-part">
                                <h3 class="bold">{{$scheduleRow['title']}}</h3>
                                <p class="lead text-primary">{{$scheduleRow['description']}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="candidate-box rounded border shadow-box shadow-hover p-2 p-sm-3 bg-contrast h-100">
                            <div class="icon-part mb-3">
                                <img src="front/img/skill/icon-box-screening.svg" class="img-fluid" alt="">
                            </div>
                            <div class="content-part">
                                <h3 class="bold">Candidates screening</h3>
                                <p class="lead text-primary">Being a top development company, Turing will help you to hire dedicated mobile app developers who will fit in your company culturally.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="candidate-box rounded border shadow-box shadow-hover p-2 p-sm-3 bg-contrast h-100">
                            <div class="icon-part mb-3">
                                <img src="front/img/skill/icon-box-task.svg" class="img-fluid" alt="">
                            </div>
                            <div class="content-part">
                                <h3 class="bold">Test task</h3>
                                <p class="lead text-primary">We verify if the candidate really wants to work at your company and can spend 5+ hours to prove it by rigorous tests. It helps us to see a developer's caliber.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="candidate-box rounded border shadow-box shadow-hover p-2 p-sm-3 bg-contrast h-100">
                            <div class="icon-part mb-3">
                                <img src="front/img/skill/icon-box-test.svg" class="img-fluid" alt="">
                            </div>
                            <div class="content-part">
                                <h3 class="bold">Technical test</h3>
                                <p class="lead text-primary">Developers are asked skill-related questions and made to solve tricky problems. We use open questions. The goal is not only to test developers’ knowledge but also to find out their way of thinking.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="candidate-box rounded border shadow-box shadow-hover p-2 p-sm-3 bg-contrast h-100">
                            <div class="icon-part mb-3">
                                <img src="front/img/skill/icon-matching.svg" class="img-fluid" alt="">
                            </div>
                            <div class="content-part">
                                <h3 class="bold">Giving specific feedback</h3>
                                <p class="lead text-primary">We provide explicit feedback on both the test task and the technical test after checking the developer's expertise.</p>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </section>
        <!-- End Candidate -->
        
        <!-- Begin FAQ -->
        <section class="section bg-light">
            <div class="container">
                <div class="section-heading text-start mx-auto mb-5">
                    <h2>{{$hireDetail->faq_title}}</h2>
                </div>
                <div class="row gap-y">
                    <div class="col-lg-12">
                        <div class="accordion accordion-clean" id="faqs-accordion">
                            @foreach ($hireDetail->faqs as $faq)
                            <x-front.faq-list :question="$faq->question" :answer="$faq->answer" :fid="$loop->index + 1" />
                            @endforeach
                            <!-- <div class="card mb-3">
                                <div class="card-header"><a href="#" class="card-title btn collapsed" data-bs-toggle="collapse" data-bs-target="#v1-q4" aria-expanded="false"><i class="fas fa-angle-down angle"></i>Can I suggest a new feature?</a></div>
                                <div id="v1-q4" class="collapse" data-bs-parent="#faqs-accordion" style="">
                                    <div class="card-body">Definitely <span class="bold">Yes</span>, you can contact us to let us know your needs. If your suggestion represents any value to both we can include it as a part of the theme or you can request a custom build by an extra cost. Please note it could take some time in order for the feature to be implemented.</div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End FAQ -->

        <!-- Begin Hire CTA -->
        <section class="section gradient overlay alpha-8 bg-gradient-darkBlue image-background cover text-contrast block bg-contrast" style="background-image: url(https://picsum.photos/350/200/?random&amp;gravity=south)">
            <div class="container py-5 py-4">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h2 class="text-contrast">Hire <span class="bold">{{$hireDetail->cta_title}}</span></h2>
                        <p>{{$hireDetail->cta_description}}</p>
                    </div>
                    <div class="col-md-4 ms-md-auto">
                        <p class="handwritten highlight font-md mb-4">Why wait?</p><a href="javascript:;" class="btn text-white btn-gradient-darkPinkOrange btn-rounded ms-3">Hire Developer</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Hire CTA -->

        <!-- Begin All Technology Wise Hiring -->
        <section class="section">
            <div class="container bring-to-front">
                <div class="section-heading text-start mx-auto mb-5">
                    <h2>All Technology wise hiring</h2>
                </div>
                <div class="row align-items-center gap-y">
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <div class="technology-icon w-100">
                            <a title="" class="rounded border shadow-box shadow-hover p-3 d-flex flex-column justify-content-center align-items-center flex-wrap w-100 gap-3" href="#">
                                <img src="{{asset('front/img')}}/skill/react-js.svg" alt="reactjs" width="50" height="50">
                                <span class="bold text-dark">React.js </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <div class="technology-icon w-100">
                            <a title="" class="rounded border shadow-box shadow-hover p-3 d-flex flex-column justify-content-center align-items-center flex-wrap w-100 gap-3" href="#">
                                <img src="{{asset('front/img')}}/skill/node-js.svg" alt="nodejs" width="50" height="50">
                                <span class="bold text-dark">Node.js </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <div class="technology-icon w-100">
                            <a title="" class="rounded border shadow-box shadow-hover p-3 d-flex flex-column justify-content-center align-items-center flex-wrap w-100 gap-3" href="#">
                                <img src="{{asset('front/img')}}/skill/python.svg" alt="python" width="50" height="50">
                                <span class="bold text-dark">Python </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <div class="technology-icon w-100">
                            <a title="" class="rounded border shadow-box shadow-hover p-3 d-flex flex-column justify-content-center align-items-center flex-wrap w-100 gap-3" href="#">
                                <img src="{{asset('front/img')}}/skill/aws.svg" alt="aws" width="50" height="50">
                                <span class="bold text-dark">AWS </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <div class="technology-icon w-100">
                            <a title="" class="rounded border shadow-box shadow-hover p-3 d-flex flex-column justify-content-center align-items-center flex-wrap w-100 gap-3" href="#">
                                <img src="{{asset('front/img')}}/skill/js.svg" alt="javascript" width="50" height="50">
                                <span class="bold text-dark">JavaScript </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <div class="technology-icon w-100">
                            <a title="" class="rounded border shadow-box shadow-hover p-3 d-flex flex-column justify-content-center align-items-center flex-wrap w-100 gap-3" href="#">
                                <img src="{{asset('front/img')}}/skill/react-native.svg" alt="react native" width="50" height="50">
                                <span class="bold text-dark">React Native </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <div class="technology-icon w-100">
                            <a title="" class="rounded border shadow-box shadow-hover p-3 d-flex flex-column justify-content-center align-items-center flex-wrap w-100 gap-3" href="#">
                                <img src="{{asset('front/img')}}/skill/postgre-sql.svg" alt="postgresql" width="50" height="50">
                                <span class="bold text-dark">PostgreSQL </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <div class="technology-icon w-100">
                            <a title="" class="rounded border shadow-box shadow-hover p-3 d-flex flex-column justify-content-center align-items-center flex-wrap w-100 gap-3" href="#">
                                <img src="{{asset('front/img')}}/skill/ruby.svg" alt="ruby" width="50" height="50">
                                <span class="bold text-dark">Ruby on Rails </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <div class="technology-icon w-100">
                            <a title="" class="rounded border shadow-box shadow-hover p-3 d-flex flex-column justify-content-center align-items-center flex-wrap w-100 gap-3" href="#">
                                <img src="{{asset('front/img')}}/skill/java.svg" alt="java" width="50" height="50">
                                <span class="bold text-dark">Java</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <div class="technology-icon w-100">
                            <a title="" class="rounded border shadow-box shadow-hover p-3 d-flex flex-column justify-content-center align-items-center flex-wrap w-100 gap-3" href="#">
                                <img src="{{asset('front/img')}}/skill/angular.svg" alt="angular" width="50" height="50">
                                <span class="bold text-dark">Angular</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <div class="technology-icon w-100">
                            <a title="" class="rounded border shadow-box shadow-hover p-3 d-flex flex-column justify-content-center align-items-center flex-wrap w-100 gap-3" href="#">
                                <img src="{{asset('front/img')}}/skill/golang.svg" alt="golang" width="50" height="50">
                                <span class="bold text-dark">Golang</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <div class="technology-icon w-100">
                            <a title="" class="rounded border shadow-box shadow-hover p-3 d-flex flex-column justify-content-center align-items-center flex-wrap w-100 gap-3" href="#">
                                <img src="{{asset('front/img')}}/skill/php.svg" alt="php" width="50" height="50">
                                <span class="bold text-dark">PHP</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <div class="technology-icon w-100">
                            <a title="" class="rounded border shadow-box shadow-hover p-3 d-flex flex-column justify-content-center align-items-center flex-wrap w-100 gap-3" href="#">
                                <img src="{{asset('front/img')}}/skill/machine-learning.svg" alt="machine learning
                                " width="50" height="50">
                                <span class="bold text-dark">Machine Learning</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <div class="technology-icon w-100">
                            <a title="" class="rounded border shadow-box shadow-hover p-3 d-flex flex-column justify-content-center align-items-center flex-wrap w-100 gap-3" href="#">
                                <img src="{{asset('front/img')}}/skill/android.svg" alt="android" width="50" height="50">
                                <span class="bold text-dark">Android</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <div class="technology-icon w-100">
                            <a title="" class="rounded border shadow-box shadow-hover p-3 d-flex flex-column justify-content-center align-items-center flex-wrap w-100 gap-3" href="#">
                                <img src="{{asset('front/img')}}/skill/django.svg" alt="django" width="50" height="50">
                                <span class="bold text-dark">Django</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <div class="technology-icon w-100">
                            <a title="" class="rounded border shadow-box shadow-hover p-3 d-flex flex-column justify-content-center align-items-center flex-wrap w-100 gap-3" href="#">
                                <img src="{{asset('front/img')}}/skill/ios.svg" alt="ios" width="50" height="50">
                                <span class="bold text-dark">iOS</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <div class="technology-icon w-100">
                            <a title="" class="rounded border shadow-box shadow-hover p-3 d-flex flex-column justify-content-center align-items-center flex-wrap w-100 gap-3" href="#">
                                <img src="{{asset('front/img')}}/skill/laravel.svg" alt="laravel" width="50" height="50">
                                <span class="bold text-dark">Laravel</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <div class="technology-icon w-100">
                            <a title="" class="rounded border shadow-box shadow-hover p-3 d-flex flex-column justify-content-center align-items-center flex-wrap w-100 gap-3" href="#">
                                <img src="{{asset('front/img')}}/skill/magento.svg" alt="magento" width="50" height="50">
                                <span class="bold text-dark">Magento</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <div class="technology-icon w-100">
                            <a title="" class="rounded border shadow-box shadow-hover p-3 d-flex flex-column justify-content-center align-items-center flex-wrap w-100 gap-3" href="#">
                                <img src="{{asset('front/img')}}/skill/asp-net.svg" alt="asp net" width="50" height="50">
                                <span class="bold text-dark">ASP.NET</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <div class="technology-icon w-100">
                            <a title="" class="rounded border shadow-box shadow-hover p-3 d-flex flex-column justify-content-center align-items-center flex-wrap w-100 gap-3" href="#">
                                <img src="{{asset('front/img')}}/skill/c.svg" alt="c sharp" width="50" height="50">
                                <span class="bold text-dark">C#</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <div class="technology-icon w-100">
                            <a title="" class="rounded border shadow-box shadow-hover p-3 d-flex flex-column justify-content-center align-items-center flex-wrap w-100 gap-3" href="#">
                                <img src="{{asset('front/img')}}/skill/react-node.svg" alt="react node" width="50" height="50">
                                <span class="bold text-dark">React/Node</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection
@push('js')
    <script src="{{ asset('front/js/jquery.validate.js') }}"></script>
    <script src="https://www.google.com/recaptcha/api.js?render=6LefrjghAAAAAC1RZIzOViPebvpEcymjDa3nSjhz"></script>
    <script src="{{ asset('front/js/front-script.js') }}"></script>
@endpush
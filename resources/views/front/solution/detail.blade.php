@extends('front.layout.app')
@push('meta')
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="description" content="{{ $solutionDetail->meta_description }}" />
    <meta name="keywords" content="{{ $solutionDetail->meta_keyword }}">
    <meta name="robots" content="{{ $solutionDetail->meta_robots }}" />
    <link rel="canonical" href="{{ url()->current() }}" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="{{ $solutionDetail->meta_title }}" />
    <meta property="og:description" content="{{ $solutionDetail->meta_description }}" />
    <meta property="og:keywords" content="{{ $solutionDetail->meta_keyword }}" />
    <meta property="article:modified_time" content="{{ \Carbon\Carbon::parse($solutionDetail->updated_at)->format('Y-m-d') }}" />
    <meta property="og:image" content="{{ asset('sitebucket/service/' . $solutionDetail->image) }}" />
    <meta property="og:image:width" content="750" />
    <meta property="og:image:height" content="375" />
    <meta name="twitter:card" content="summary_large_image" />
@endpush
@section('content')

    <!-- <x-front.service-detail :title="$solutionDetail->title" :icon="$solutionDetail->icon" :shortDescription="$solutionDetail->short_description" serviceImage="../front/img/screens/app/2.png"  /> -->
    
    <header class="section header text-contrast app-landing-header">
        <div class="shape-wrapper">
            <div class="shape shape-background shape-main bg-darkBlue gradient-darkBlue"></div>
        </div>
        <div class="container">
            <div class="row gap-y align-items-center">
                <div class="col-md-7 col-lg-7">
                    <p class="lead d-flex align-items-center my-0"><i class="fas fa-award font-md me-3"></i>Dashboard included</p>
                    <h2 class="bold text-contrast font-lg display-lg-4 mb-3">{{$solutionDetail->title}}<span class="d-block light font-lg"></span></h2>
                    <div class="tags">
                        <ul>
                        @foreach ($solutionDetail->solution_technology as $st)
                            <li class="text-contrast bg-primary">{{ $st->name }}</li>
                        @endforeach
                        </ul>
                    </div>
                    
                    <p class="lead">{!!$solutionDetail->description!!}</p>
                    <div class="nav mt-5 align-items-center"><a href="{{route('contact-us')}}" class="btn btn-rounded btn-lg text-white btn-gradient-darkPinkOrange shadow me-3 px-4 text-capitalize">Get Started - It's Free</a></div>
                    <div class="row g-3 mt-3">
                        @for($i=0;$i<=2;$i++)
                        <div class="col-md-4 col-6">
                            <div class="rounded border shadow-box shadow-hover p-2 p-sm-1 d-flex align-items-center flex-wrap bg-contrast">
                                <img src="{{asset('front/img').customerSuccessNumberRecoardList()[$i]['icon'] }}" alt="{{customerSuccessNumberRecoardList()[$i]['alt']}}" width="45" hight="45" class="me-2" />
                                <div class="text-start">
                                    <p class="counter font-md bold m-0 text-dark">{{customerSuccessNumberRecoardList()[$i]['number']}}</p>
                                    <p class="m-0 text-dark">{{customerSuccessNumberRecoardList()[$i]['name']}}</p>
                                </div>
                            </div>
                        </div>
                        @endfor
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="device-twin ms-auto align-items-center">
                        <div class="mockup absolute" data-aos="fade-left">
                            <div class="screen"><img src="{{(!blank($solutionDetail->image)) ? getImage($solutionDetail->image) : asset('front/img').'/screens/app/mobile-app-development-company-usa.png'}}" alt="..."></div><span class="button"></span>
                        </div>
                        <div class="iphone-x light front me-0">
                            <div class="screen shadow-box"><img src="{{(!blank($solutionDetail->image2)) ? getImage($solutionDetail->image2) : asset('front/img').'/screens/app/mobile-app-development-company-in-usa.png'}}" alt="..."></div>
                            <div class="notch"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header><!-- ./Partners -->

    <div class="position-relative">
        <div class="shape-divider shape-divider-bottom shape-divider-fluid-x text-contrast"><svg viewBox="0 0 2880 48" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z"></path>
            </svg></div>
    </div>

    <section class="section with-promo anime-background my-6">
        <div class="shapes-container">
            <div class="static-shape shape-main right"></div>
        </div>
        <div class="container">
            <div class="row gap-y align-items-center">
                <div class="col-md-6">
                    <figure class="figure-box mockup ms-md-0">
                        <div class="screens cutout bottom-left" data-aos="fade-up">
                            <img src="{{(!blank($solutionDetail->about_image)) ? getImage($solutionDetail->about_image) : asset('front/img').'/payment-services/security.png'}}" alt=""></div>
                        <!-- <div class="promo-box card shadow top-right">
                            <div class="circle-icon icon-lg bg-success p-2 rounded-circle center-flex shadow"><i data-feather="shield" class="stroke-contrast"></i></div>
                            <div class="card-body">
                                <p class="small text-primary mb-3">You're Safe</p>
                                <p class="text-dark bold">Just smile</p>
                                <p class="small">All transactions are protected with e2e encryption</p>
                            </div>
                        </div> -->
                        <div class="shapes-container">
                            <div class="shape pattern pattern-dots"></div>
                        </div>
                    </figure>
                </div>
                <div class="col-md-6">
                    <div class="section-heading mb-1">
                        <h2 class="heading-line bold"><span class="light">{{$solutionDetail->about_title}}</span><br></h2>
                        <!-- <p class="lead mb-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus eius modi saepe voluptas.</p> -->
                    </div>
                    <p class="mb-5">{!!$solutionDetail->about_description!!}
                    </p><a href="#!" class="btn btn-rounded btn-outline-primary bw-2 me-3">Learn More</a>
                </div>
                
            </div>
        </div>
    </section>

    <!-- Begin Screenshot -->
    <section class="section bg-white">
        <div class="container">
            <div class="row align-items-center dev-solution">
                <div class="col-lg-5 col-md-4 mobile-swipe">
                    <!-- Swiper -->
                    <img src="{{asset('front/img')}}/solution/mobile-bg.png" alt="Mobile background"
                    title="Mobile background" class="dev-frame">
                    <div class="screen-swipe swiper-container">
                        <div class="swiper-wrapper">
                            @if(isset($solutionDetail->screenshots))
                            @if(count($solutionDetail->screenshots) > 0)
                            @foreach($solutionDetail->screenshots as $ssRow)
                            <div class="swiper-slide"><div class="app-device"><img class="img-responsive" src="{{(!blank($ssRow->image)) ? getImage($ssRow->image) : asset('front/img').'/screens/app/mobile-app-development-company-usa.png'}}" alt="..."></div></div>
                            @endforeach
                            @else
                            @for($i=1;$i<=5;$i++)
                            <div class="swiper-slide"><div class="app-device"><img class="img-responsive" src="{{asset('front/img')}}/screens/app/{{in_array($i,[1,2])?($i==1)?'mobile-app-development-company-usa':'mobile-app-development-company-in-usa':'portfolio_details_0'.$i}}.png" alt="..."></div></div>
                            @endfor
                            @endif
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-8 pl-xl-3 pr-xl-5">
                    <div class="section-heading mb-5">
                        <h2 class="heading-line bold"><span class="light"></span><br>{{$solutionDetail->screenshot_head_title}}</h2>
                    </div>

                    <!-- Swiper -->
                    <div class="swiper-container dev-solution-content">
                        <div class="swiper-wrapper">
                            @if(count($solutionDetail->screenshots) > 0)
                            @foreach($solutionDetail->screenshots as $ssRow)
                            <div class="swiper-slide">
                                <div class="middle-content">
                                    <div class="title-text">
                                    <h5>{{$ssRow->title}}</h5>
                                    <p>{!!$ssRow->description!!}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @else
                            @for($i=1;$i<=5;$i++)
                            <div class="swiper-slide">
                                <div class="middle-content">
                                    <div class="title-text">
                                    <h5>Registration Process</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab dolore excepturi explicabo.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet aut autem eum laudantium quas recusandae.Assumenda consequuntur debitis delectus, ducimus enim et eveniet facilis harum ipsa magni non odit pariatur placeat.</p>
                                    <p>Customers and service providers can quickly add the necessary details and sign up into the system.</p>
                                    </div>
                                </div>
                            </div>
                            @endfor
                            @endif
                        </div>
                    </div>
                    <div class="control w-100 d-flex align-items-center justify-content-between">
                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>
                        <div class="arrows d-flex align-items-center justify-content-between">
                            <!-- Add Arrows -->
                            <div class="swiper-button-prev"> <img src="{{asset('front/img')}}/pre-swipe.png"
                                alt="previous swipe" width="18" height="31" /></div>
                            <div class="swiper-button-next"> <img src="{{asset('front/img')}}/next-swipe.png"
                                alt="next swipe" width="18" height="31" /></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>    
    <!-- End Screenshot -->

    <!-- Begin CTA Section -->
    <x-front.company-profile />

    <!-- End CTA Section -->

    @if(count($solutionDetail->benifits) > 0)
    @foreach($solutionDetail->benifits as $k => $benifitRow)
    <section class="section {{($k%2==0)?'bg-light':''}}">
        <div class="container bring-to-front">
            <div class="section-heading text-start mx-auto mb-0">
                <h2>{{$benifitRow->title}}</h2>
                <p class="lead text-primary">{!!$benifitRow->description!!}</p>
            </div>
        </div>
    </section>
    @endforeach
    @endif
    <!-- Begin Solution Section -->

    <section id="features" class="section app-safety">
        <div class="shapes-container">
            <div class="shape shape-circle">
                <div data-aos="fade-up-left" class="aos-init"></div>
            </div>
            <div class="shape shape-triangle aos-init" data-aos="fade-up-right" data-aos-delay="200">
                <div></div>
            </div>
            <div class="shape pattern pattern-dots"></div>
        </div>
        <div class="container bring-to-front">
            <div class="section-heading text-center">
                <h2 class="bold">{{ $solutionDetail->feture_head_title }}</h2>
                <p class="lead text-primary">{!! $solutionDetail->feture_head_description !!}</p>
            </div>
            <div class="row gap-y text-center text-md-start">
                @if(count($solutionDetail->feture_list) > 0)
                @foreach($solutionDetail->feture_list as $fetureRow)
                <div class="col-md-4 mb-3">
                    <div class="card shadow-hover lift-hover h-100">
                        <div class="card-body p-5">
                        @if(!blank($fetureRow['image']))
                            <img src="{{isset($fetureRow['image'])?getImage($fetureRow['image']):'https://www.manektech.com/front/images/Microsoft-gold-partner.webp'}}" class="img-responsive mb-3" alt="" style="max-height: 36px">
                            @else
                                <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 512 512" fill="none" class="mb-3">
                                    <path d="M199 40H141C135.477 40 131 44.478 131 50C131 55.522 135.477 60 141 60H199C204.523 60 209 55.522 209 50C209 44.478 204.523 40 199 40Z" fill="#FF4A01"></path>
                                    <path d="M170 452C167.37 452 164.79 453.069 162.93 454.93C161.07 456.79 160 459.37 160 462C160 464.63 161.07 467.21 162.93 469.069C164.79 470.929 167.37 472 170 472C172.63 472 175.21 470.93 177.07 469.069C178.93 467.21 180 464.63 180 462C180 459.37 178.93 456.79 177.07 454.93C175.21 453.07 172.63 452 170 452Z" fill="#FF4A01"></path>
                                    <path d="M482 172H340V50C340 22.43 317.57 0 290 0H50C22.43 0 0 22.43 0 50V210.172C0 215.694 4.477 220.172 10 220.172C15.523 220.172 20 215.694 20 210.172V100H320V172H282C265.458 172 252 185.458 252 202V412H20V300.172C20 294.65 15.523 290.172 10 290.172C4.477 290.172 0 294.65 0 300.172V462C0 489.57 22.43 512 50 512H482C498.542 512 512 498.542 512 482V202C512 185.458 498.542 172 482 172ZM20 80V50C20 33.458 33.458 20 50 20H290C306.542 20 320 33.458 320 50V80H20ZM20 462V432H252V482C252 485.506 252.61 488.87 253.72 492H50C33.458 492 20 478.542 20 462ZM282 492C276.486 492 272 487.514 272 482V202C272 196.486 276.486 192 282 192H304V492H282ZM324 492V192H356V492H324ZM492 482C492 487.514 487.514 492 482 492H376V192H482C487.514 192 492 196.486 492 202V482Z" fill="#FF4A01"></path>
                                    <path d="M434 384C413.047 384 396 401.047 396 422C396 442.953 413.047 460 434 460C454.953 460 472 442.953 472 422C472 401.047 454.953 384 434 384ZM434 440C424.075 440 416 431.925 416 422C416 412.075 424.075 404 434 404C443.925 404 452 412.075 452 422C452 431.925 443.925 440 434 440Z" fill="#FF4A01"></path>
                                    <path d="M10 265.17C12.63 265.17 15.21 264.109 17.07 262.24C18.93 260.38 20 257.8 20 255.17C20 252.54 18.93 249.96 17.07 248.1C15.21 246.241 12.63 245.17 10 245.17C7.37 245.17 4.79 246.24 2.93 248.1C1.07 249.96 0 252.54 0 255.17C0 257.81 1.07 260.38 2.93 262.24C4.79 264.109 7.37 265.17 10 265.17Z" fill="#FF4A01"></path>
                                    <path d="M135.808 312.105C131.187 309.083 124.989 310.377 121.965 314.999C118.942 319.621 120.237 325.818 124.86 328.842C139.042 338.12 148.55 340.594 161.334 341.125V353.384C161.334 358.906 165.811 363.384 171.334 363.384C176.857 363.384 181.334 358.906 181.334 353.384V340.137C204.842 335.345 218.575 315.881 221.633 297.694C225.579 274.223 213.296 253.814 190.341 245.701C187.381 244.655 184.356 243.56 181.335 242.422V190.109C189.546 192.085 194.392 196.263 194.721 196.554C196.504 198.201 198.859 199.189 201.477 199.189C207 199.189 211.477 194.712 211.477 189.189C211.477 186.28 210.232 183.665 208.249 181.838C207.652 181.287 197.687 172.306 181.334 169.751V158.617C181.334 153.095 176.857 148.617 171.334 148.617C165.811 148.617 161.334 153.095 161.334 158.617V170.191C159.272 170.592 157.161 171.1 154.995 171.752C139.909 176.297 128.634 189.216 125.571 205.468C122.783 220.263 127.507 234.517 137.899 242.667C143.745 247.252 151.08 251.437 161.334 255.906V321.122C151.951 320.661 146.005 318.775 135.808 312.105V312.105ZM150.241 226.93C145.747 223.405 143.825 216.6 145.225 209.171C146.538 202.206 151.879 193.59 161.333 190.743C161.525 190.685 161.142 190.798 161.333 190.743V233.796C157.112 231.625 153.313 229.338 150.241 226.93ZM183.674 264.557C204.035 271.753 202.779 289.202 201.909 294.378C200.217 304.441 193.225 315.137 181.333 319.371V263.723C182.103 263.999 182.882 264.276 183.674 264.557V264.557Z" fill="#FF4A01"></path>
                                </svg>
                            @endif
                            <h5 class="bold">{{$fetureRow['title']}}</h5>
                            <p class="">{{$fetureRow['description']}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
                @else
                @for($i=1;$i<=6;$i++)
                <div class="col-md-4 mb-3">
                    <div class="card shadow-hover lift-hover h-100">
                        <div class="card-body p-5"><i data-feather="star" width="36" height="36" class="mb-3 stroke-primary"></i>
                            <h5 class="bold">Talent Shortage</h5>
                            <p class="">Ab ad aliquam assumenda beatae commodi distinctio dolore dolorum earum error et, exercitationem</p>
                        </div>
                    </div>
                </div>
                @endfor
                @endif
            </div>
        </div>
    </section>
    <!-- End Solution Section -->

     <!-- ./FAQs -->
     <x-front.faq :faqTitle="$solutionDetail->faq_head_title" :faqDescription="$solutionDetail->faq_head_description">
        @foreach ($solutionDetail->faqs as $faq)
            <x-front.faq-list :question="$faq->question" :answer="$faq->answer" :fid="$loop->index + 1" />
        @endforeach
    </x-front.faq>


    <!-- Begin Call To Action -->
    <x-front.wait-box />
@endsection
@push('js')
    <script src="{{ asset('front/js/jquery.validate.js') }}"></script>
    <script src="{{ asset('front/js/front-script.js') }}"></script>
@endpush

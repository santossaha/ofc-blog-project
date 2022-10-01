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
<header class="section header text-contrast app-landing-header">
        <div class="shape-wrapper">
            <div class="shape shape-background shape-main bg-darkBlue gradient-darkBlue"></div>
            <!-- <div class="shape shape-background shape-top gradient gradient-primary-dark"></div> -->
        </div>
        <div class="container">
            <div class="row gap-y align-items-center">
                <div class="col-md-7 col-lg-7">
                    <p class="lead d-flex align-items-center my-0"><i class="fas fa-award font-md me-3"></i>Contact Us</p>
                    <h1 class="bold text-contrast font-lg display-lg-4 mb-3">1We are setting new facets in different web and app development solutions!</h1>
                    <p class="">Being a renowned app development company NewYork, we always keep our commitment to project quality, dedication, and timely delivery. Contact us to get successful tech solutions as per your project needs.</p>
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

<x-front.service-about-with-count-box  :aboutTitle="'Get the very best of us by doing the best of you'" :icon="'icon'" :aboutImage="'default-testimonial.jpg'" :aboutDescription="'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis dolores dolorum, error est excepturi exercitationem hic iusto minus nam officia optio quasi tempore voluptatibus. Aut dolore in nostrum quae voluptatem!'" />


<section class="section app-safety">
    <div class="shapes-container">
        <div class="shape shape-circle">
            <div data-aos="fade-up-left"></div>
        </div>
        <div class="shape shape-triangle" data-aos="fade-up-right" data-aos-delay="200">
            <div></div>
        </div>
        <div class="shape pattern pattern-dots"></div>
    </div>
    <div class="container bring-to-front">
        <div class="row gap-y align-items-center justify-content-between">

            <div class="col-md-6 ms-md-auto order-md-last">

                <div class="ms-lg-auto text-center text-md-start"><i data-feather="activity" width="36" height="36" class="stroke-primary"></i>
                    <p class="small text-darkBlue bold">Send us a message!</p>
                    <h2 class="bold">Scale up your business with profit-generating, reliable, and market-ready apps.</h2>
                    <!-- <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis dolores dolorum, error est excepturi exercitationem hic iusto minus nam officia optio quasi tempore voluptatibus. Aut dolore in nostrum quae voluptatem!</p> -->
                </div>

                <div class="d-flex mt-md-5"><i class="fas fa-map-marker font-l text-primary me-3"></i>
                    <div class="flex-fill">2715 Elm Drive, New York,<span class="d-block">NY New York - 10013</span></div>
                </div>
                <div class="d-flex my-4"><i class="fas fa-phone font-l text-primary me-3"></i>
                    <div class="flex-fill"><span class="d-block"><a href="tel:+1-123-456-7890">(123) 456-7890</a></span> <span class="d-block"><a href="tel:+1-987-654-3201">(987) 654-3201</a></span></div>
                </div>
                <div class="d-flex"><i class="fas fa-envelope font-l text-primary me-3"></i>
                    <div class="flex-fill"><a href="mail:support@newyorkmobiletech.com">support@newyorkmobiletech.com</a></div>
                </div>
                <hr class="my-4">
                <nav class="nav justify-content-center justify-content-md-start">
                @foreach(getSocialMedia() as $social)
                <a href="{{$social['url']}}" class="btn btn-circle btn-secondary btn-sm {{(!$loop->last)?'me-3':''}}">
                    <i class="fab {{$social['class']}}"></i>
                </a>
                @endforeach
                </nav>
            </div>
            <div class="col-md-6 col-lg-5" data-aos="fade-right">
                <div class="card shadow-lg">
                    <x-front.contact-form />
                </div>
            </div>
        </div>
    </div>
</section>

<x-front.partner-slider-list />

<!-- <div class="section">
    <div class="container bring-to-front">
        <div class="row align-items-center gap-y">
            <div class="col-md-6">
                <div class="shadow bg-contrast p-4 rounded">
                    <div class="section-heading">
                        <p class="text-uppercase">Get in touch</p>
                        <h2 class="font-md bold">We'd like to hear from you</h2>
                    </div>
                    <p class="lead mb-5">Don't hesitate to get in contact with us no matter your request. We are here to help you.</p>

                    <div class="row g-3">
                        @foreach(customerSuccessNumberRecoardList() as $customerSuccess)
                        <div class="col-6">
                            <div class="rounded border shadow-box shadow-hover p-2 p-sm-3 d-flex align-items-center flex-wrap bg-contrast">
                                <div class="text-start">
                                    <p class="counter font-md bold m-0 text-dark"><span class="counter">{{$customerSuccess['number']}}</span> {{$customerSuccess['sign']}}</p>
                                    <p class="m-0">{{$customerSuccess['name']}}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-5 ms-md-auto">
                <div class="contactImg-part">
                    <img src="front/img/contact-img-03.png" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>
</div> -->


<section class="section gradient overlay alpha-8 bg-gradient-darkBlue image-background cover text-contrast block bg-contrast" style="background-image: url(https://picsum.photos/350/200/?random&gravity=south)">
    <div class="container py-5 py-4">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h2 class="text-contrast">Looking <span class="bold">for a product</span></h2>
                <p>-market fit for your idea?</p>
            </div>
            <div class="col-md-4 ms-md-auto">
                <p class="handwritten highlight font-md mb-4">Why wait?</p><a href="javascript:;" class="btn text-white btn-gradient-darkPinkOrange btn-rounded ms-3">Consult with us now</a>
            </div>
        </div>
    </div>
</section>

<!-- ./Testimonials -->
<section class="bg-light b-t pt-0">
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

@endsection
@push('js')
    <script src="{{ asset('front/js/jquery.validate.js') }}"></script>
    <script src="https://www.google.com/recaptcha/api.js?render=6LefrjghAAAAAC1RZIzOViPebvpEcymjDa3nSjhz"></script>
    <script src="{{ asset('front/js/front-script.js') }}"></script>
@endpush

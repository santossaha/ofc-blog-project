@extends('front.layout.app')
@push('meta')
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="description" content="{{ $industri->meta_description }}" />
    <meta name="keywords" content="{{ $industri->meta_keyword }}">
    <meta name="robots" content="{{ $industri->meta_robots }}" />
    <link rel="canonical" href="{{ url()->current() }}" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="{{ $industri->meta_title }}" />
    <meta property="og:description" content="{{ $industri->meta_description }}" />
    <meta property="og:keywords" content="{{ $industri->meta_keyword }}" />
    <meta property="article:modified_time" content="{{ \Carbon\Carbon::parse($industri->updated_at)->format('Y-m-d') }}" />
    <meta property="og:image" content="{{ asset('sitebucket/industri/' . $industri->image) }}" />
    <meta property="og:image:width" content="750" />
    <meta property="og:image:height" content="375" />
    <meta name="twitter:card" content="summary_large_image" />
    <!-- <link rel="preload" as="image" href="{{ asset('front/img') }}/bg-shape2.png" /> -->
@endpush
@section('content')


    <x-front.service-detail :title="$industri->title" :icon="$industri->icon" :shortDescription="$industri->short_description" :serviceImage="''" >
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

    <x-front.partner-slider-list />

    <x-front.service-about-with-count-box  aboutTitle="Industry title"  aboutDescription="indistry Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, assumenda autem consequatur cum dignissimos dolores doloribus eius eum iusto laborum quasi quidem sapiente sit." />

    <x-front.features-tool-list />

    <section class="section why-us">
        <div class="shapes-container">
            <div class="absolute shape-background top right"></div>
        </div>
        <div class="container">
            <div class="section-heading text-center">
                <h2 class="bold">Delivers Business</h2>
                <p class="lead text-secondary">Our mission is to provide you with an all-in-one template so you don't have to look aside in order to get what you need</p>
            </div>
            <div class="row gap-y">
                <div class="col-md-5 position-relative">
                    <ul class="list-unstyled why-icon-list">
                        <li class="list-item">
                            <div class="d-flex align-items-start">
                                <div class="rounded-circle bg-success shadow-success text-contrast p-3 icon-xl d-flex align-items-center justify-content-center me-3">
                                    <i data-feather="dollar-sign" width="36" height="36" class="dollar-sign"></i>
                                </div>
                                <div class="flex-fill">
                                    <h5 class="bold">Holistic Approach</h5>
                                    <p class="my-0">Helping the real estate companies that have multiple offices including wholly owned subsidiary offices, licensee locations or franchisees, we build compelling <a href="#" class="text-primary"> Read more</a>
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="list-item">
                            <div class="d-flex align-items-start">
                                <div class="rounded-circle bg-alternate shadow-alternate text-contrast p-3 icon-xl d-flex align-items-center justify-content-center me-3">
                                    <i data-feather="thumbs-up" width="36" height="36" class="thumbs-up"></i>
                                </div>
                                <div class="flex-fill">
                                    <h5 class="bold">Powerful Solutions</h5>
                                    <p class="my-0">To guide the real estate owners with the right skills for selling their properties to millennials seeking a delightful and satisfied online service, our team is capable of <a href="#" class="text-primary"> Read more</a>
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="list-item">
                            <div class="d-flex align-items-start">
                                <div class="rounded-circle bg-danger shadow-danger text-contrast p-3 icon-xl d-flex align-items-center justify-content-center me-3">
                                    <i data-feather="pie-chart" width="36" height="36" class="pie-chart"></i>
                                </div>
                                <div class="flex-fill">
                                    <h5 class="bold">Cutting-edge Technology</h5>
                                    <p class="my-0">Introducing the concepts of VR and 3D technology, we are stepping in to create stellar websites with advanced views of the property being sold. A full-slate <a href="#" class="text-primary"> Read more</a>
                                    </p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-md-7">
                    <figure data-aos="fade-left"><img src="{{ asset('front/img') }}/automate-social/build.svg" class="img-responsive" alt=""></figure>
                </div>
            </div>

        </div>
    </section>

    <x-front.contact-schedule >
        <div class="mb-5">
            <p class="text-primary bold">Fill in the form</p>
            <h2 class="bold">Let's Talk With Our Digital Experts</h2>
            <p class="lead text-muted">Do you want to create future-ready user experiences? Our professional digital experts will assist you with industry expertise and the most proficient app design and development.</p>
        </div>
        <div class="row">
            <x-front.contact-schedule-benefit benefitTitle="benefit title" benefitDescription="benefit description" />
        </div>
    </x-front.contact-schedule>

    <x-front.customer-success-number-record />

    <section class="bg-darker">
        <div class="container pb-5">
            <div class="section-heading text-center w-75 mx-auto">
                <h2 class="text-contrast bold">Success Stories </h2>
                <p class="lead text-muted">Take a look at how you can take advantage of the tons of features included with
                    our template.</p>
            </div>
            <div class="row gap-y">
                @foreach($portfolioList as $portfolio)
                <x-front.portfolio-list :title="$portfolio->title"  :description="readMore($portfolio->description)" :image="getImage(!blank($portfolio->image) ? $portfolio->image : 'default-testimonial.jpg')" :url="route('portfolio.detail', $portfolio->slug)" />
                @endforeach
            </div>
            <div class="d-flex align-items-center mb-3 justify-content-center"> <a class="btn btn-rounded btn-primary bw-2 bold text-contrast mt-5" href="#" target="_blank">Get a Free Quote</a> </div>
        </div>
    </section>

    <x-front.trending-technology />

    <section class="bg-light b-t pt-0 mt-8">
        <div class="container">
            <div class="section-heading text-center">
                <h2 class="bold mt-3">Customer reviews</h2>
            </div>
            <div class="testimonials-slider">
                <div class="swiper-container">
                    <div class="swiper-wrapper text-center w-50">
                        @foreach (getTestimonial() as $tl)
                        <x-front.testimonial-list :name="$tl->name" :short_title="$tl->short_title" :description="$tl->description" :image="getImage(!blank($tl->image) ? $tl->image : 'default-testimonial.jpg')" />
                        @endforeach
                    </div>
                </div>
                <div class="swiper-button swiper-button-prev rounded-circle shadow"><i data-feather="arrow-left"></i>
                </div>
                <div class="swiper-button swiper-button-next rounded-circle shadow"><i data-feather="arrow-right"></i>
                </div>
            </div>
        </div>
    </section>

    <!-- ./Process of Development -->
    <section class="section why-us">
        <div class="container">
            <div class="section-heading text-center">
                <h2 class="bold">Blogs</h2>
                <p class="lead text-secondary">Our mission is to provide you with an all-in-one template so you don't have
                    to look aside in order to get what you need</p>
            </div>
            <div class="row gap-y">
                @foreach (getBlog() as $blog)
                <x-front.blog-list :title="$blog->title" :publishBy="$blog->publish_by" :publishDate="$blog->publish_date" :description="readMore($blog->description)" :blogImage="(!blank($blog->image) && empty($blog->image)) ? getImage($blog->image) : 'https://picsum.photos/350/200/?random&gravity=north'" :blogDetailUrl="route('blog.detail', $blog->slug)" />
                @endforeach
            </div>
        </div>
    </section>
    
    <x-front.hire-developer />
       
@endsection
@push('js')
    <script src="{{ asset('front/js/jquery.validate.js') }}"></script>
    <script src="{{ asset('front/js/front-script.js') }}"></script>
@endpush

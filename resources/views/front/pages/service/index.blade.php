@extends('front.layouts.default')
@section('title', $page->detail->meta_title)
@section('meta')
    <meta name="description" content="{{ $page->detail->meta_description }}" />
    <meta name="keywords" content="{{ $page->detail->meta_keyword }}">
    <meta name="robots" content="{{ $page->detail->meta_robots }}" />
    <link rel="canonical" href="{{ url()->current() }}" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="{{ $page->detail->meta_title }}" />
    <meta property="og:description" content="{{ $page->detail->meta_description }}" />
    <meta name="keywords" content="{{ $page->detail->meta_keyword }}">
    <meta property="article:modified_time" content="2018-12-27T08:53:36+00:00" />
    <meta property="og:image" content="{{ asset('front/images/') }}/logo-black.jpg" />
    <meta property="og:image:width" content="750" />
    <meta property="og:image:height" content="375" />
    <meta name="twitter:card" content="summary_large_image" />
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "name": "Expert App Devs",
            "image": "https://www.expertappdevs.com/front/images/expert-app-devs.svg",
            "@id": "https://www.expertappdevs.com/#organization",
            "url": "https://www.expertappdevs.com/",
            "telephone": "+91 701-616-6822",
            "priceRange": "$$$",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "4th Floor, Timber Point",
                "addressLocality": "Prahaladnagar Road, Ahmedabad, Gujarat, India",
                "postalCode": "380015",
                "addressCountry": "+91",
                "addressRegion": "91"
            },
            "sameAs": [
                "https://www.facebook.com/ExpertAppDevs",
                "https://www.instagram.com/expertappdevs/",
                "https://twitter.com/ExpertAppDevs",
                "https://www.linkedin.com/company/expert-app-devs/",
                "https://www.youtube.com/channel/UCqJtHff6w43-wV0tRPtBTsw"
            ]
        }
    </script>
    <!-- Organization Schema: -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "name": "Expert App Devs",
            "url": "https://www.expertappdevs.com/",
            "logo": "https://www.expertappdevs.com/front/images/expert-app-devs.svg",
            "sameAs": [
                "https://www.facebook.com/ExpertAppDevs",
                "https://www.instagram.com/expertappdevs/",
                "https://twitter.com/ExpertAppDevs",
                "https://www.linkedin.com/company/expert-app-devs/",
                "https://www.youtube.com/channel/UCqJtHff6w43-wV0tRPtBTsw"
            ],
            "contactPoint": [{
                "@type": "ContactPoint",
                "telephone": "+91 701-616-6822",
                "contactType": "sales",
                "email": "sales@expertappdevs.com",
                "areaServed": ["US", "GB", "CA", "AU", "DE", "KW", "NZ", "QA", "SA", "SG", "AE"],
                "availableLanguage": "en"
            }]
        }
    </script>
@endsection
@push('css')
    <style>
        .pagination a.current {
            background: #b71a69;
            color: #fff;
        }

    </style>
@endpush
@section('content')
    <!--comfort security part start-->
    <section class="sub-heading light-bg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a title="Home" href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Services</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-7">
                    <h1>Services</h1>
                    <div class="title-text">
                        <p>We help you make your business more adaptable and competitive with our array of IT and business
                            technology services.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-space pb-0">
        <div class="container">
            <div class="row justify-content-center">
                @foreach ($service as $item)
                    <div class="col-lg-4 col-sm-6 mt-4">
                        <a class="app-box" title="{{ $item->title }}"
                            href="{{ route('detail', $item->slug) }}">
                            <div class="icon">
                                <img src="{{ asset('sitebucket/technology/icon') . '/' . $item->icon }}"
                                    alt="{{ $item->title }}">
                            </div>
                            <h3>{{ $item->title }}</h3>
                            <p>{{ $item->short_description }}</p>
                        </a>
                    </div>
                @endforeach
            </div>
            {{-- <div class="row">
            <div class="col-md-12">
                <ul class="pagination justify-content-between">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i> PREV</a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item"><a class="page-link" href="#">6</a></li>
                    <li class="page-item"><a class="page-link" href="#">7</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">NEXT <i class="fas fa-chevron-right"></i></a>
                    </li>
                </ul>
            </div>
        </div> --}}
        </div>
    </section>
    <section class="section-space">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <h2>Need a consultation?</h2>
                    <div class="title-text">
                        <p class="margin-none">We would be more than happy to be of help. Simply write to us about your
                            ideas, and we will get back to you.</p>
                    </div>
                </div>
                <div class="col-md-3 mt-3 text-md-right">
                    <a title="Contact Us" class="btn btn-danger" href="{{ route('contact-us') }}">Contact Us</a>
                </div>
            </div>
        </div>
    </section>
@endsection

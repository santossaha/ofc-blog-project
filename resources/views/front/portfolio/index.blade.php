@extends('front.layout.app')
@push('meta')
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="description" content="{{ $pageDetail->meta_description }}" />
    <meta name="keywords" content="{{ $pageDetail->meta_keyword }}">
    <meta name="robots" content="{{ $pageDetail->meta_robots }}" />
    <link rel="canonical" href="{{ url()->current() }}" />
    <meta property="og:url" content="{{ url()->current() }}" />

    
    @if ($portfolioList->currentPage() == 1 && $portfolioList->currentPage() < $portfolioList->lastPage())
        <link rel="next" href="{{ route('portfolio') }}/page/{{ $portfolioList->currentPage() + 1 }}" />
    @elseif($portfolioList->currentPage() > 1 && $portfolioList->currentPage() < $portfolioList->lastPage())
        <link rel="prev" href="{{ route('portfolio') }}/page/{{ $portfolioList->currentPage() - 1 }}" />
        <link rel="next" href="{{ route('portfolio') }}/page/{{ $portfolioList->currentPage() + 1 }}" />
    @elseif($portfolioList->currentPage() > 1 && $portfolioList->currentPage() == $portfolioList->lastPage())
        <link rel="prev" href="{{ route('portfolio') }}/page/{{ $portfolioList->currentPage() - 1 }}" />
    @endif

    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="{{ $pageDetail->meta_title }}" />
    <meta property="og:description" content="{{ $pageDetail->meta_description }}" />
    <meta property="og:keywords" content="{{ $pageDetail->meta_keyword }}" />
    <meta property="og:image:width" content="750" />
    <meta property="og:image:height" content="375" />
    <meta name="twitter:card" content="summary_large_image" />
@endpush
@section('content')
<header class="header section parallax image-background overlay overlay-primary alpha-8 text-contrast" style="background-image: url('front/img/bg/grid.jpg')">
    <div class="container overflow-hidden">
        <div class="row">
            <div class="col-md-8">
                <p class="lead bold">We Serve!</p>
                <!-- <h1 class="display-4 text-contrast light">Industries we serve</h1> -->
                <h1 class="text-contrast"><span class="typed bold display-4 display-md-3" data-strings='["Real Estate & Property", "Banking & Finance", "Education", "Automobiles"]'></span></h1>
                <p class="lead text-contrast">Get in touch and let us know how we can help. Fill out the form and we’ll be in touch as soon as possible.</p>
                <!-- <nav class="nav mt-5"><a href="#" class="btn btn-rounded btn-contrast btn-lg px-5">Explore More</a></nav> -->
            </div>
        </div>
    </div>
</header>
<div class="position-relative">
    <div class="shape-divider shape-divider-bottom shape-divider-fluid-x text-contrast">
        <svg viewBox="0 0 2880 48" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z"></path>
        </svg></div>
</div>
@if(count($portfolioList)==0)
<div class="section">
    <div class="container-wide bring-to-front">
        <div class="row gap-y align-items-center">
            <div class="col-12 col-lg-5 mx-auto">
                <div class="section-heading"><span class="bold py-2">
                    
                    <h2 class="mt-3">Portfolio Data Not Found</h2>
                </div>
            </div>
        </div>
    </div>
</div>
@else
@foreach ($portfolioList as $key => $portfolio)
@if($key%2==0)
<div class="section">
    <div class="container-wide bring-to-front">
        <div class="row gap-y align-items-center">
            <div class="col-12 col-lg-6 ps-0 position-relative">
                <div class="device-twin free-width align-items-center mt-4 mt-lg-0">
                    <div class="browser shadow" data-aos="fade-end"><img src="{{(!blank($portfolio->image)) ? getImage($portfolio->image) : asset('front/img').'/screens/dash/4.png'}}" alt="..."></div>
                    <div class="front iphone-x absolute d-none d-sm-block" data-aos="fade-up" data-aos-delay=".5" style="right: 0; bottom: -1.5rem;">
                        <div class="screen"><img src="{{(!blank($portfolio->about_image)) ? getImage($portfolio->about_image) : asset('front/img').'/screens/app/mobile-app-development-company-usa.png'}}" alt="..."></div>
                        <div class="notch"></div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-5 mx-auto">
                <div class="section-heading"><span class="bold py-2">
                    <i data-feather="bar-chart" class="stroke-primary me-2"></i> <span class="bold text-info">Dashboard included</span></span>
                    <h2 class="mt-3">{{$portfolio->title}}</h2>
                    <div class="tags">
                        <ul>
                            <li>{{$portfolio->platform}}</li>
                            <li>{{$portfolio->language}}</li>
                        </ul>
                    </div>
                    <p class="lead">{!!$portfolio->description!!}</p>
                </div>
                <a href="{{route('portfolio.detail', $portfolio->slug)}}" class="btn px-4 btn-rounded btn-primary mt-4">Learn more</a>
            </div>
        </div>
    </div>
</div>
@else
<div class="section bg-light edge top-right">
    <div class="container-wide bring-to-front">
        <div class="row gap-y align-items-center">
            <div class="col-12 col-lg-5 mx-auto">
                <div class="section-heading"><span class="bold py-2"><i data-feather="bar-chart" class="stroke-primary me-2"></i> <span class="bold text-info">Dashboard included</span></span>
                    <h2 class="mt-3">{{$portfolio->title}}</h2>
                    <div class="tags">
                        <ul>
                            <li>{{$portfolio->platform}}</li>
                            <li>{{$portfolio->language}}</li>
                        </ul>
                    </div>
                    <p class="lead">{!!$portfolio->description!!}</p>
                </div>
                <a href="{{route('portfolio.detail', $portfolio->slug)}}" class="btn px-4 btn-rounded btn-primary mt-4">Learn more</a>
            </div>
            <div class="col-12 col-lg-6 ps-0 position-relative">
                <div class="device-twin free-width align-items-center mt-4 mt-lg-0">
                    <div class="browser shadow" data-aos="fade-end"><img src="{{(!blank($portfolio->image)) ? getImage($portfolio->image) : asset('front/img').'/screens/dash/4.png'}}" alt="..."></div>
                    <div class="front iphone-x absolute d-none d-sm-block" data-aos="fade-up" data-aos-delay=".5" style="right: 0; bottom: -1.5rem;">
                        <div class="screen"><img src="{{(!blank($portfolio->about_image)) ? getImage($portfolio->about_image) : asset('front/img').'/screens/app/mobile-app-development-company-usa.png'}}" alt="..."></div>
                        <div class="notch"></div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
@endif
@endforeach
@endif
<div class="section">
    <div class="container pt-0 pb-0">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                <nav aria-label="Page navigation example">
                    @if ($portfolioList->lastPage() > 1)
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                        <a class="page-link {{ $portfolioList->currentPage() == 1 ? ' d-none' : '' }}" href="{{ $portfolioList->currentPage() - 1 == 1 ? route('portfolio') : route('portfolio.page', $portfolioList->currentPage() - 1) }}" tabindex="-1" aria-disabled="true"><span aria-hidden="true">&laquo;</span></a>
                        </li>

                        @for ($i = 1; $i <= $portfolioList->lastPage(); $i++)
                            @if ($i == 1)
                                <li class="page-item {{ $portfolioList->currentPage() == $i ? ' active' : '' }}"><a
                                        class="page-link" href="{{ route('portfolio') }}">{{ $i }}</a>
                                </li>
                            @else
                                <li class="page-item {{ $portfolioList->currentPage() == $i ? ' active' : '' }}"><a
                                        class="page-link"
                                        href="{{ route('portfolio.page', $i) }}">{{ $i }}</a>
                                </li>
                            @endif
                        @endfor

                        @if ($portfolioList->currentPage() !== $portfolioList->lastPage())
                        <li class="page-item">
                        <a class="page-link {{ ($portfolioList->currentPage() == $portfolioList->lastPage()) ? ' d-none' : '' }}" href="{{ route('portfolio.page', $portfolioList->currentPage() + 1) }}"><span aria-hidden="true">&raquo;</span></a>
                        </li>
                        @endif
                    </ul>
                    @endif
                    </nav>
            </div>
        </div>
    </div>
</div>

<x-front.hire-developer />

@endsection
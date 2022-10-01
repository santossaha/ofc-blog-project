@extends('front.layouts.default')
@section('title', $page->meta_title)
@section('meta')
    <meta name="description" content="{{ $page->meta_description }}" />
    <meta name="keywords" content="{{ $page->meta_keyword }}">
    @if (Request::fullUrl() == route('portfolio'))
        <meta name="robots" content="{{ $page->meta_robots }}" />
    @else
        <meta name="robots" content="noindex, nofollow" />
    @endif
    <!-- Relation link meta tag -->
    <link rel="canonical" href="{{ Request::fullUrl() }}" />
    @if ($portfolio->currentPage() == 1 && $portfolio->currentPage() < $portfolio->lastPage())
        <link rel="next" href="{{route('portfolio') }}/page/{{ $portfolio->currentPage() + 1 }}" />
    @elseif($portfolio->currentPage() > 1 && $portfolio->currentPage() < $portfolio->lastPage())
        <link rel="prev" href="{{ route('portfolio') }}/page/{{ $portfolio->currentPage() - 1 }}" />
        <link rel="next" href="{{ route('portfolio') }}/page/{{ $portfolio->currentPage() + 1 }}" />
    @elseif($portfolio->currentPage() > 1 && $portfolio->currentPage() == $portfolio->lastPage())
        <link rel="prev" href="{{ route('portfolio') }}/page/{{ $portfolio->currentPage() - 1 }}" />
    @endif
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="{{ $page->meta_title }}" />
    <meta property="og:description" content="{{ $page->meta_description }}" />
    <meta name="keywords" content="{{ $page->meta_keyword }}">
    <meta property="article:modified_time" content="2018-12-27T08:53:36+00:00" />
    <meta property="og:image" content="{{ asset('front/images/') }}/logo-black.jpg" />
    <meta property="og:image:width" content="750" />
    <meta property="og:image:height" content="375" />
    <meta name="twitter:card" content="summary_large_image" />
    <link rel="preload" as="image" href="{{ asset('front') }}/images/bg-shape3.png" />
@endsection
@push('css')
    <link href="{{ asset('front/css/portfolio.css') }}" rel="stylesheet">
    <style></style>
@endpush
@section('content')
    <!--comfort security part start-->
    <section class="sub-heading light-bg portfolio-title-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a title="Home" href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Portfolio</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-7">
                    <h1>Portfolio</h1>
                    <div class="title-text">
                        <p>We only believe in what the eyes can see. Check out some of the projects that our clients have
                            worked with us on, and we successfully delivered.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-space py-0">
        <div class="container">
            <div class="row portfolio-list">
                @if (isset($portfolio) && count($portfolio) != 0)
                    @foreach ($portfolio as $p)
                        <div class="col-12 portfolio_div_new">
                             <!--<div class="col-12 portfolio_div" data-url="{{ route('portfolio.detail', $p->slug) }}">-->
                            <div class="card stories-box">
                                <div class="row flex-row-reverse align-items-lg-center">
                                    <div class="col-lg-4" >
                                        <a class="portfolio-img" href="{{ route('portfolio.detail', $p->slug) }}">
                                            <img class="card-img-top" src="{{ asset('sitebucket/portfolio/' . $p->image) }}" alt="{{ $p->alt_tag ?? $p->title }}" title="{{ $p->title }}" width="401" height="812">
                                        </a>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="card-body portfolio-body pr-md-5">
                                            <h6><span class="icon icon-calendar"></span>{{ $p->category->sort_name }}</h6>
                                            <h4><a href="{{ route('portfolio.detail', $p->slug) }}">{{ $p->title }}</a></h4>
                                           <p class="story-desc">{!! substr(html_entity_decode(strip_tags($p->about_description),), 0, 320,) !!}...</p>
                                            <div class="tags">
                                                <ul>
                                                    <li>{{ $p->platform }}</li>
                                                    <li>{{ $p->language }}</li>
                                                </ul>
                                            </div>
                                            <div class="story-btn-block">
                                                <a class="start-project-btn" href="{{ route('contact-us') }}">Start Project</a>
                                                <a class="explore-btn" href="{{ route('portfolio.detail', $p->slug) }}">
                                                    <img src="{{ asset('front') }}/images/icon-plus.png" alt="plus icon" width="14" height="14">
                                                    <span>Explore more</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
            </div>
            @if ($portfolio->lastPage() > 1)
                <div class="row">
                    <div class="col-md-12">
                        <ul class="pagination justify-content-between">
                            <li class="page-item">
                                <a class="page-link {{ $portfolio->currentPage() == 1 ? ' d-none' : '' }}"
                                    href="{{ (($portfolio->currentPage() - 1==0) or ($portfolio->currentPage() - 1==1))?route('portfolio'):route('portfolio.page',$portfolio->currentPage() - 1) }}" tabindex="-1"><i
                                        class="fas fa-chevron-left"></i> PREV</a>
                            </li>
                            @for ($i = 1; $i <= $portfolio->lastPage(); $i++)
                                @if ($i == 1)
                                <li class="page-item {{ $portfolio->currentPage() == $i ? ' active' : '' }}"><a
                                        class="page-link" href="{{ route('portfolio') }}">{{ $i }}</a>
                                </li>
                            @else
                                <li class="page-item {{ $portfolio->currentPage() == $i ? ' active' : '' }}"><a
                                        class="page-link"
                                        href="{{ route('portfolio.page', $i) }}">{{ $i }}</a>
                                </li>
                            @endif
                            @endfor
                            @if ($portfolio->currentPage() !== $portfolio->lastPage())
                            <li class="page-item">
                                <a class="page-link"
                                    href="{{ route('portfolio.page', $portfolio->currentPage() + 1) }}">NEXT <i
                                        class="fas fa-chevron-right"></i></a>
                            </li>
                        @else
                            <li class="page-item">&nbsp;</li>
                        @endif
                        </ul>
                    </div>
                </div>
            @endif
        @else
            <h3>No Data !</h3>
            @endif
        </div>
    </section>

    <section class="section-space client-brand service-client">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="swiper-container client-brand-slder">
                        <div class="swiper-wrapper">
                            @foreach (allClientsData() as $c)
                                <div class="swiper-slide">
                                    <img src="{{ asset('sitebucket/client/' . $c->image) }}"
                                        alt="{{ $c->alt_image }}" width="200" height="100">
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-space cta-section start-project">
        <div class="container">
            <div class="row rounded lets-talk p-md-5 p-3 m-0 mt-5">
                <div class="col-md-12 p-3">
                    <div class="row inner align-items-center">
                        <div class="col-lg-9 col-md-7 mt-3 mb-3">
                            <h5 class="text-white">Do you have an interesting project?</h5>
                            <h2 class="text-white">Let's talk about that!</h2>
                        </div>
                        <div class="col-lg-3 col-md-5 mt-3 mb-3 text-md-right">
                            <a title="Contact Us" class="btn btn-danger" href="{{ route('contact-us') }}">Start
                                Project</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('js')
@endpush

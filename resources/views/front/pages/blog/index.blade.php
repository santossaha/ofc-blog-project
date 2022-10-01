@extends('front.layouts.default')
@section('title', $page->detail->meta_title)
@section('meta')
    <meta name="description" content="{{ $page->detail->meta_description }}" />
    <meta name="keywords" content="{{ $page->detail->meta_keyword }}">
    @if (Request::fullUrl() == route('blog'))
        <meta name="robots" content="{{ $page->detail->meta_robots }}" />
    @else
        <meta name="robots" content="noindex, nofollow" />
    @endif
    <!-- Relation link meta tag -->
    <link rel="canonical" href="{{ Request::fullUrl() }}" />
    @if ($blogs->currentPage() == 1 && $blogs->currentPage() < $blogs->lastPage())
        <link rel="next" href="{{ route('blog') }}/page/{{ $blogs->currentPage() + 1 }}" />
    @elseif($blogs->currentPage() > 1 && $blogs->currentPage() < $blogs->lastPage())
        <link rel="prev" href="{{ route('blog') }}/page/{{ $blogs->currentPage() - 1 }}" />
        <link rel="next" href="{{ route('blog') }}/page/{{ $blogs->currentPage() + 1 }}" />
    @elseif($blogs->currentPage() > 1 && $blogs->currentPage() == $blogs->lastPage())
        <link rel="prev" href="{{ route('blog') }}/page/{{ $blogs->currentPage() - 1 }}" />
    @endif
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="{{ $page->detail->meta_title }}" />
    <meta property="og:description" content="{{ $page->detail->meta_description }}" />
    <meta name="keywords" content="{{ $page->detail->meta_keyword }}">
    {{-- <meta property="og:url" content="{{ route('services') }}" /> --}}
    <meta property="article:modified_time" content="2018-12-27T08:53:36+00:00" />
    <meta property="og:image" content="{{ asset('front/images/') }}/logo-black.jpg" />
    {{-- <meta property="og:image" content="{{ asset('front/images/') }}/1200-60.png" /> --}}
    {{-- <meta property="og:image" content="{{ asset('front/images/') }}/600-315.png" /> --}}
    <meta property="og:image:width" content="600" />
    <meta property="og:image:height" content="315" />
    <meta name="twitter:card" content="summary_large_image" />
    <link rel="preload" as="image" href="{{ asset('front') }}/images/bg-shape3.png" />
    {{-- @include('front.layouts.includes.schema') --}}
@endsection
@push('css')
    <style>
        .pagination a.current {
            background: #b71a69;
            color: #fff;
        }

        .blog_sec_img {
            width: 100% !important;
            height: 138px !important;
        }

        .blog-box {
            padding: 10px;
        }

        .card-body {
            text-align: center;
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
                            <li class="breadcrumb-item active" aria-current="page">Blog</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-7">
                    <h1>Blog</h1>
                    <div class="title-text">
                        <p>Check out our recent articles to help you stay abreast with the latest trends in the mobile app
                            development.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-space py-4">
        <div class="container">
            <div class="row">
                @foreach ($blogs as $blog)
                    <div class="col-lg-4 col-sm-6 mt-sm-3 mb-sm-3  mt-2 mb-2 blog_div"
                        data-url="{{ route('blog.detail', $blog->slug) }}">
                        <div class="card blog-box">
                            <a class="card-img blog_sec_img" href="{{ route('blog.detail', $blog->slug) }}"
                                target="_blank">
                                {{-- <img class="card-img-top"  src="{{ asset('sitebucket/blog') }}/{{ $blog->front_image }}" alt="{{ $blog->front_image_alt }}" title="{{ $blog->front_image_title }}" width="360" height="138"> --}}
                                <img class="card-img-top" src="{{ asset('sitebucket/blog') }}/{{ $blog->image }}"
                                    alt="{{ $blog->front_image_alt }}" title="{{ $blog->front_image_title }}" width="360" height="138">
                            </a>
                            <div class="card-body">
                                <h6><span
                                        class="icon icon-calendar"></span>{{ date('F d, Y', strtotime($blog->publish_date)) }}
                                    &nbsp;<i class="fas fa-circle"
                                        style="font-size: 3px;vertical-align: middle;margin-bottom: 2px;"></i>&nbsp;
                                    {{ getEstimateReadingTime($blog->description) }}
                                </h6>
                                <h4><a href="{{ route('blog.detail', $blog->slug) }}">{{ $blog->title }}</a></h4>
                                {{-- <p>{!! substr(html_entity_decode(strip_tags($blog->description)), 0, 100) . ' ...' !!}</p> --}}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            @if ($blogs->lastPage() > 1)
                <div class="row">
                    <div class="col-md-12">
                        <ul class="pagination justify-content-between">
                            <li class="page-item">
                                <a class="page-link {{ $blogs->currentPage() == 1 ? ' d-none' : '' }}"
                                    href="{{ $blogs->currentPage() - 1 == 1 ? route('blog') : route('blog.page', $blogs->currentPage() - 1) }}"
                                    tabindex="-1"><i class="fas fa-chevron-left"></i> PREV</a>
                            </li>
                            @for ($i = 1; $i <= $blogs->lastPage(); $i++)
                                @if ($i == 1)
                                    <li class="page-item {{ $blogs->currentPage() == $i ? ' active' : '' }}"><a
                                            class="page-link" href="{{ route('blog') }}">{{ $i }}</a>
                                    </li>
                                @else
                                    <li class="page-item {{ $blogs->currentPage() == $i ? ' active' : '' }}"><a
                                            class="page-link"
                                            href="{{ route('blog.page', $i) }}">{{ $i }}</a>
                                    </li>
                                @endif
                            @endfor
                            {{-- <li class="page-item"><a class="page-link {{ $blogs->currentPage() == $blogs->lastPage() ? ' d-none' : '' }}" href="{{ route('blog.page', $blogs->currentPage() + 1) }}">NEXT <i  class="fas fa-chevron-right"></i></a></li> --}}
                            @if ($blogs->currentPage() !== $blogs->lastPage())
                                <li class="page-item">
                                    <a class="page-link"
                                        href="{{ route('blog.page', $blogs->currentPage() + 1) }}">NEXT <i
                                            class="fas fa-chevron-right"></i></a>
                                </li>
                            @else
                                <li class="page-item">&nbsp;</li>
                            @endif
                        </ul>
                    </div>
                </div>
            @endif
        </div>
    </section>
@endsection

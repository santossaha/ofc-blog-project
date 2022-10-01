@extends('front.layouts.default')
@section('title', $category->meta_title)
@section('meta')
    @php
    $array = ['general','ai-application-development', 'mobile-app-development', 'android-app-development', 'iphone-app-development', 'cross-platform-mobile-app-development', 'mobile-game-development', 'iot-application-development', 'flutter', 'react-native', 'ios-app-development', 'python-development'];
    $robotsContent = 'noindex, nofollow';
    if (Request::fullUrl() == route('category.blog', $category->slug) && !in_array($category->slug, $array)) {
        $robotsContent = 'index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1';
    }
    @endphp
    <!-- This site is optimized with the Yoast SEO plugin v14.9 - https://yoast.com/wordpress/plugins/seo/ -->
    <!-- This site is optimized with the Yoast SEO plugin v14.9 - https://yoast.com/wordpress/plugins/seo/ -->
    <meta name="description" content="{{ $category->meta_description }}" />
    <meta name="robots" content='{{ $robotsContent }}' />
    <!-- Relation link meta tag -->
    <link rel="canonical" href="{{ Request::fullUrl() }}" />
    @if ($blogs->currentPage() == 1 && $blogs->currentPage() < $blogs->lastPage())
        <link rel="next"
            href="{{ route('category.blog.page', ['slug' => $category->slug, 'page' => $blogs->currentPage() + 1]) }}" />
    @elseif($blogs->currentPage() > 1 && $blogs->currentPage() < $blogs->lastPage())
        <link rel="prev"
            href="{{ route('category.blog.page', ['slug' => $category->slug, 'page' => $blogs->currentPage() - 1]) }}" />
        <link rel="next"
            href="{{ route('category.blog.page', ['slug' => $category->slug, 'page' => $blogs->currentPage() + 1]) }}" />
    @elseif($blogs->currentPage() > 1 && $blogs->currentPage() == $blogs->lastPage())
        <link rel="prev"
            href="{{ route('category.blog.page', ['slug' => $category->slug, 'page' => $blogs->currentPage() - 1]) }}" />
    @endif
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="{{ $data['title'] }}" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:image:width" content="750" />
    <meta property="og:image:height" content="375" />
    <meta name="twitter:card" content="summary_large_image" />
@endsection
@push('css')
    <style>
        .pagination a.current {
            background: #b71a69;
            color: #fff;
        }

        .blog_cat_left {
            width: 20%;
            float: left;
            padding: 25px 0 0 0;
        }

        .blog_cat_left a {
            width: 103px;
            height: 103px;
            overflow: hidden;
        }

        .blog_cat_right {
            width: 80%;
            float: right;
        }

    </style>
@endpush
@section('content')
    <section class="sub-heading light-bg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb" id="breadcrumbs">
                            <li class="breadcrumb-item"> <a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item"> <a href="{{ route('blog') }}">Blog</a></li>
                            <!--  <li class="breadcrumb-item active" aria-current="page"><a href="{{ $data['main'] }}"> <span class="breadcrumb_last" aria-current="page">{{ $data['breadcrumb_last'] }}</span></a> </span></li> -->
                            <li class="breadcrumb-item active" aria-current="page"><span
                                    class="breadcrumb_last">{{ $data['title'] }}</span></li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-7">
                    <h1>{{ $data['title'] }}</h1>
                    <!-- <div class="title-text"><p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p></div> -->
                </div>
            </div>
        </div>
    </section>
    <section class="section-space  cate-blog-section">
        <div class="container">
            <div class="row blog-detail">
                <div class="col-md-8">
                    @foreach ($blogs as $blog)
                        <div class="blog-list blog_div" data-url="{{ route('blog.detail', $blog->slug) }}">
                            <div class="blog-list-content" style="display: flex;">
                                <!-- <div class="blog_cat_left"> -->
                                <div class="col-md-2 col-sm-12 blog_cat_left">
                                    <a href="{{ route('blog.detail', $blog->slug) }}">
                                        <img src="{{ asset('sitebucket/blog') }}/{{ $blog->front_image }}"
                                            alt="{{ $blog->front_image_alt }}" title="{{ $blog->front_image_title }}">
                                    </a>
                                </div>
                                <!-- <div class="blog-content mt-4 blog_cat_right"> -->
                                <div class="col-md-10 col-sm-12 blog_cat_right blog-content mt-4">
                                    <h3>{{ $blog->title }}</h3>
                                    <p>{!! substr(html_entity_decode(strip_tags($blog->description)), 0, 200) . ' ...' !!}</p>
                                    {{-- <a href="{{ route('blog.detail', $blog->slug) }}" class="btn">Read More</a> --}}
                                </div>
                            </div>
                        </div>
                    @endforeach
                    @if (count($blogs) == 0)
                        <h2 class="no-blog">No Blog Post Yet</h2>
                    @endif
                </div>
                @include('front.pages.blog.sidebar')
            </div>
            {{-- <div class="row">
                <div class="col-12">
                    <div class="pagination">
                    @if ($blogs->lastPage() > 1)
                        <a href="{{ $blogs->currentPage() - 1 == 1 ? $data['main'] : url()->current() . '/page/' . ($blogs->currentPage() - 1) }}" class="{{ $blogs->currentPage() == 1 ? ' d-none' : '' }}"><i class="fa fa-long-arrow-left ml-5" aria-hidden="true"></i>Previous</a>
                    @for ($i = 1; $i <= $blogs->lastPage(); $i++)
                    @if ($i == 1)
                        <a class="page-numbers {{ $blogs->currentPage() == $i ? ' current' : '' }}" href="{{ $data['main'] }}">{{ $i }}</a>
                    @else
                        <a class="page-numbers {{ $blogs->currentPage() == $i ? ' current' : '' }}" href="{{ url()->current() . '/page/' . $i }}">{{ $i }}</a>
                    @endif
                    @endfor
                        <a class="next page-numbers {{ $blogs->currentPage() == $blogs->lastPage() ? ' d-none' : '' }}" href="{{ url()->current() . '/page/' . ($blogs->currentPage() + 1) }}" >Next<i class="fa fa-long-arrow-right"aria-hidden="true"></i></a>
                    @endif
                    </div>
                </div>
            </div> --}}
            @if ($blogs->lastPage() > 1)
                <div class="row">
                    <div class="col-md-12">
                        <ul class="pagination justify-content-between">
                            @if ($blogs->currentPage() > 1)
                                <li class="page-item">
                                    <a class="page-link {{ $blogs->currentPage() == 1 ? ' d-none' : '' }}"
                                        href="{{ $blogs->currentPage() - 1 == 1 ? $data['main'] : $blogs->currentPage() - 1 }}"
                                        tabindex="-1"><i class="fas fa-chevron-left"></i> PREV</a>
                                </li>
                            @else
                                <li class="page-item">&nbsp;</li>
                            @endif
                            @for ($i = 1; $i <= $blogs->lastPage(); $i++)
                                @if ($i == 1)
                                    <li class="page-item {{ $blogs->currentPage() == $i ? ' active' : '' }}"><a
                                            class="page-link" href="{{ $data['main'] }}">{{ $i }}</a>
                                    </li>
                                @else
                                    <li class="page-item {{ $blogs->currentPage() == $i ? ' active' : '' }}"><a
                                            class="page-link"
                                            href="{{ $data['main'] . '/page/' . $i }}">{{ $i }}</a></li>
                                @endif
                            @endfor
                            @if ($blogs->currentPage() !== $blogs->lastPage())
                                <li class="page-item">
                                    <a class="page-link"
                                        href="{{ $data['main'] . '/page/' . ($blogs->currentPage() + 1) }}">NEXT <i
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
    <section class="section-space border-top">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <h2>Need a consultation?</h2>
                    <div class="title-text">
                        <p class="margin-none">Do you have any queries hitting your mind? Write to us and we will be on
                            our toes to get you instant solutions and transform your dreams into real-time amazing mobile
                            applications.</p>
                    </div>
                </div>
                <div class="col-md-3 mt-3 text-md-right">
                    <a title="Contact Us" class="btn btn-danger" href="{{ route('contact-us') }}">Contact Us</a>
                </div>
            </div>
        </div>
    </section>
@endsection

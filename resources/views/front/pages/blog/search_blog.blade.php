@extends('front.layouts.default')
@section('title', $data['title'])
@section('meta')
    <!-- This site is optimized with the Yoast SEO plugin v14.9 - https://yoast.com/wordpress/plugins/seo/ -->
    <meta name="robots" content="noindex, follow" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="{{ $data['title'] }}" />
    <meta property="og:url" content="{{ $data['main'] }}" />
    <meta property="og:image:width" content="750" />
    <meta property="og:image:height" content="375" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="You searched for test |" />
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
    <section class="baner_sec allsec_inner_banner rocket-lazyload lazyloaded"
        style="background-image: url({{ asset('front/images/service_banner.jpg') }});" data-ll-status="loaded">
        <div class="banner_overlay"></div>
        <div class="inrall_bnrcnt">
            <div class="container">
                <div class="row blog-detail">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="ban_inner_text">
                            <h1>{{ $data['banner_titile'] }}</h1>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="blog">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    @foreach ($blogs as $blog)
                        <div class="blog-list">
                            <div class="blog-list-content">
                                <div class="blog-content">
                                    <h3>{{ $blog->title }}</h3>
                                    <p>{{ substr(strip_tags($blog->description), 0, 300) }}</p>
                                    <a href="{{ route('blog.detail', $blog->slug) }}" class="btn">Read More</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                @include('front.pages.blog.sidebar')
            </div>
        </div>
    </section>
    <div class="pagination">
        @if ($blogs->lastPage() > 1)
            <a href="{{ $data['main'] . '/page/' . ($blogs->currentPage() - 1) . '/?s=' . $data['search'] }}"
                class="{{ $blogs->currentPage() == 1 ? ' d-none' : '' }}"><i class="fa fa-long-arrow-left ml-5"
                    aria-hidden="true"></i>Previous</a>
            @for ($i = 1; $i <= $blogs->lastPage(); $i++)
                <a class="page-numbers {{ $blogs->currentPage() == $i ? ' current' : '' }}"
                    href="{{ $data['main'] . '/page/' . $i . '/?s=' . $data['search'] }}">{{ $i }}</a>
            @endfor
            <a class="next page-numbers {{ $blogs->currentPage() == $blogs->lastPage() ? ' d-none' : '' }}"
                href="{{ $data['main'] . '/page/' . ($blogs->currentPage() + 1) . '/?s=' . $data['search'] }}">Next<i
                    class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
        @endif
    </div>
@endsection

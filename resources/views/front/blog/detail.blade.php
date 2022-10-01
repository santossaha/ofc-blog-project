@extends('front.layout.app')
@push('meta')
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="description" content="{{ $blogDetail->meta_description }}" />
    <meta name="keywords" content="{{ $blogDetail->meta_keyword }}">
    <meta name="robots" content="{{ $blogDetail->meta_robots }}" />
    <link rel="canonical" href="{{ url()->current() }}" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="{{ $blogDetail->meta_title }}" />
    <meta property="og:description" content="{{ $blogDetail->meta_description }}" />
    <meta property="og:keywords" content="{{ $blogDetail->meta_keyword }}" />
    <meta property="article:modified_time" content="{{ \Carbon\Carbon::parse($blogDetail->updated_at)->format('Y-m-d') }}" />
    <meta property="og:image" content="{{ asset('sitebucket/blog/' . $blogDetail->image) }}" />
    <meta property="og:image:width" content="750" />
    <meta property="og:image:height" content="375" />
    <meta name="twitter:card" content="summary_large_image" />
@endpush
@section('content')
<header class="section header text-contrast app-landing-header">
    <div class="shape-wrapper">
        <div class="shape shape-background shape-main bg-darkBlue gradient-darkBlue"></div>
    </div>
    <div class="container">
        <div class="row gap-y align-items-center">
            <div class="col-md-7 col-lg-7">
                <h1 class="bold text-contrast font-lg display-lg-4 mb-3">{{$blogDetail->title}}<span class="d-block light font-lg"></span></h1>
                <div class="tags">
                    <ul>
                        @foreach($blogDetail->categories as $cat)
                        <li class="text-contrast bg-primary">{{$cat->name}}</li>
                        @endforeach
                    </ul>
                </div>
                <p class="lead ">{{$blogDetail->front_image_title}}</p>
            </div>
            <div class="col-md-5">
                <div class="device-twin ms-auto align-items-center">
                    <div class="mockup absolute" data-aos="fade-left">
                        <div class="screen"><img src="{{asset('front/img')}}/screens/app/we_serve_02.png" alt="..."></div><span class="button"></span>
                    </div>
                    <div class="iphone-x light front me-0">
                        <div class="screen shadow-box"><img src="{{asset('front/img')}}/screens/app/we_serve_01.png" alt="..."></div>
                        <div class="notch"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<section class="blog-post" id="blog-post">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="blog-post-nav mb-3"><a href="{{route('blogs')}}"><i class="fas fa-long-arrow-alt-left"></i></a> 
                <!-- <a href="{{route('blogs')}}"><span class="badge badge-pill badge-light">Category</span></a> -->
            </div>
                <div class="media"><img class="me-3 rounded-circle icon-lg" src="{{asset('front/img')}}/avatar/author.jpg" alt="">
                    <div class="media-body small"><span class="author">by <a href="#">{{$blogDetail->publish_by}}</a></span> <span class="d-block text-secondary">{{date('M d, Y', strtotime($blogDetail->created_at))}}</span></div>
                </div>
                <hr class="mb-5">
                <p>{!! $blogDetail->description !!}</p>
            </div>
        </div>
    </div>
</section>

<!-- <section class="bg-light b-t">
    <div class="container">
        <h4>Recommended Posts</h4>
        <div class="row gap-y">
            <div class="col-md-6 col-lg-4">
                <div class="card card-blog shadow-box shadow-hover border-0"><a href="blog-post.html"><img class="card-img-top img-responsive" src="https://picsum.photos/350/200/?random&gravity=north" alt=""></a>
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="author d-flex align-items-center"><img class="author-picture rounded-circle icon-md shadow-box" src="../front/img/avatar/user.png" alt="...">
                                <p class="small bold my-0">Jenny Oliver</p>
                            </div>
                            <nav class="nav"><a href="javascript:;" class="d-flex align-items-center text-secondary me-3 blog-action blog-favorite"><i class="fas fa-heart text-danger me-2"></i> <span class="small">347</span> </a><a href="javascript:;" class="d-flex align-items-center text-secondary blog-action blog-bookmark"><i class="far fa-bookmark me-2"></i> <span class="small">73</span></a></nav>
                        </div>
                        <hr>
                        <p class="card-title regular"><a href="blog-post.html">Discover the Beauty of DashCore</a></p>
                        <p class="card-text text-secondary"></p>
                        <p class="bold small text-secondary my-0"><small>May 14 2021</small></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card card-blog shadow-box shadow-hover border-0"><a href="blog-post.html"><img class="card-img-top img-responsive" src="https://picsum.photos/350/200/?random&gravity=south" alt=""></a>
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="author d-flex align-items-center"><img class="author-picture rounded-circle icon-md shadow-box" src="../front/img/avatar/user.png" alt="...">
                                <p class="small bold my-0">Jennifer Wells</p>
                            </div>
                            <nav class="nav"><a href="javascript:;" class="d-flex align-items-center text-secondary me-3 blog-action blog-favorite"><i class="far fa-heart me-2"></i> <span class="small">415</span> </a><a href="javascript:;" class="d-flex align-items-center text-secondary blog-action blog-bookmark"><i class="fas fa-bookmark text-warning me-2"></i> <span class="small">98</span></a></nav>
                        </div>
                        <hr>
                        <p class="card-title regular"><a href="blog-post.html">Extending DashCore Template</a></p>
                        <p class="card-text text-secondary"></p>
                        <p class="bold small text-secondary my-0"><small>May 14 2021</small></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card card-blog shadow-box shadow-hover border-0"><a href="blog-post.html"><img class="card-img-top img-responsive" src="https://picsum.photos/350/200/?random&gravity=east" alt=""></a>
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="author d-flex align-items-center"><img class="author-picture rounded-circle icon-md shadow-box" src="../front/img/avatar/user.png" alt="...">
                                <p class="small bold my-0">Roger Sanchez</p>
                            </div>
                            <nav class="nav"><a href="javascript:;" class="d-flex align-items-center text-secondary me-3 blog-action blog-favorite"><i class="far fa-heart me-2"></i> <span class="small">152</span> </a><a href="javascript:;" class="d-flex align-items-center text-secondary blog-action blog-bookmark"><i class="far fa-bookmark me-2"></i> <span class="small">13</span></a></nav>
                        </div>
                        <hr>
                        <p class="card-title regular"><a href="blog-post.html">5 Reasons to Choose DashCore</a></p>
                        <p class="card-text text-secondary"></p>
                        <p class="bold small text-secondary my-0"><small>May 14 2021</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->

@endsection
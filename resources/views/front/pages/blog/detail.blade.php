@extends('front.layouts.default') @section('title', $blog->meta_title) @section('meta')
<meta name="description" content="{{ $blog->meta_description }}" />
<meta name="keywords" content="{{ $blog->meta_keyword }}" />
<meta name="robots" content="{{ $blog->meta_robots }}" />
<meta name="viewport" content="width=device-width,minimum-scale=1" />
<link rel="canonical" href="{{ url()->current() }}" />
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="article" />
<meta property="og:title" content="{{ $blog->meta_title }}" />
<meta property="og:description" content="{{ $blog->meta_description }}" />
<meta property="og:keywords" content="{{ $blog->meta_keyword }}" />
<meta property="og:url" content="{{ url()->current() }}" />
<meta property="article:published_time" content="{{ $blog->publish_date }}" />
<meta property="article:modified_time" content="{{ \Carbon\Carbon::parse($blog->updated_at)->format('Y-m-d') }}" />
<meta property="og:image" content="{{ asset('sitebucket/blog') . '/' . $blog->image }}" />
<meta property="og:image:width" content="750" />
<meta property="og:image:height" content="375" />
<meta name="twitter:card" content="summary_large_image" />
<link rel="preload" as="image" href="{{ asset('front') }}/images/bg-shape3.png" />
<script src='https://platform-api.sharethis.com/js/sharethis.js#property=58aed4a7ca58b80012159a5c&product=unknown'
    async='async'></script>
<!-- Schema scripts -->
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BlogPosting",
        "mainEntityOfPage": {
            "@type": "WebPage",
            "@id": "{{ $blog->slug }}"
        },
        "headline": "{{ $blog->title }}",
        "description": "{{ $blog->meta_description }}",
        "image": "{{ asset('sitebucket/blog') . '/' . $blog->image }}",
        "author": {
            "@type": "Person",
            "name": "Jignen Pandya",
            "url": "https://www.expertappdevs.com/author/jignen-pandya"
        },
        "publisher": {
            "@type": "Organization",
            "name": "Expert App Devs",
            "logo": {
                "@type": "ImageObject",
                "url": "https://www.expertappdevs.com/front/images/expert-app-devs.svg"
            }
        },
        "datePublished": "{{ $blog->publish_date }}",
        "dateModified": "{{ \Carbon\Carbon::parse($blog->updated_at)->format('Y-m-d') }}"
    }
</script>
{!! getBlogBreadcumsSchema(blogCategoryIds($blog->id), $blog->id) !!}
@endsection
@push('css')
<style>
    .section-space p,
    .section-space p span,
    .section-space p span span {
        line-height: unset !important;
    }

    label.error {
        color: red;
    }

    .blog-sidebar-links {
        background: #f7f7f7;
        border: 1px solid #F7f7f7;
        padding: 20px;
        border-radius: 5px;
    }

    .blog-sidebar-links>ul li a:before {
        content: '';
        width: 7px;
        height: 2px;
        background: #14c4dc;
        position: absolute;
        top: 13px;
        left: 0;
    }

    .blog-sidebar-links>ul li a {
        position: relative;
        padding-left: 15px;
    }

    .mobile-app-guide a {
        padding: 10px;
        color: #ffffff;
        padding: 15px;
        border-radius: 05px;
    }

    .mobile-app-guide a svg {
        width: 20px;
    }

    .mobile-app-guide a {
        -webkit-animation: glowing 1500ms infinite;
        -moz-animation: glowing 1500ms infinite;
        -o-animation: glowing 1500ms infinite;
        animation: glowing 1500ms infinite;
    }

    @-webkit-keyframes glowing {
        0% {
            background-color: #1e326f;
            -webkit-box-shadow: 0 0 3px #1e326f;
        }

        50% {
            background-color: #32e5fd;
            -webkit-box-shadow: 0 0 3px #32e5fd;
        }

        100% {
            background-color: #1e326f;
            -webkit-box-shadow: 0 0 3px #1e326f;
        }
    }

    @-moz-keyframes glowing {
        0% {
            background-color: #1e326f;
            -moz-box-shadow: 0 0 3px #1e326f;
        }

        50% {
            background-color: #32e5fd;
            -moz-box-shadow: 0 0 3px #32e5fd;
        }

        100% {
            background-color: #1e326f;
            -moz-box-shadow: 0 0 3px #1e326f;
        }
    }

    @-o-keyframes glowing {
        0% {
            background-color: #1e326f;
            box-shadow: 0 0 3px #1e326f;
        }

        50% {
            background-color: #32e5fd;
            box-shadow: 0 0 3px #32e5fd;
        }

        100% {
            background-color: #1e326f;
            box-shadow: 0 0 3px #1e326f;
        }
    }

    @keyframes glowing {
        0% {
            background-color: #1e326f;
            box-shadow: 0 0 3px #1e326f;
        }

        50% {
            background-color: #32e5fd;
            box-shadow: 0 0 3px #32e5fd;
        }

        100% {
            background-color: #1e326f;
            box-shadow: 0 0 3px #1e326f;
        }
    }

    @media (max-width: 991px) {
        .heading-title-update:before {
            margin: 0 0 15px 0;
        }
    }

    .heading-title-update {
        color: #1e326f;
    }

    .heading-title-update:before {
        content: "";
        max-width: 92px;
        height: 4px;
        background: #ffad0b;
        display: block;
        margin: 0 0 14px 0;
    }

    @media (min-width: 768px) {
        .title-size {
            font-size: 36px !important;
        }
    }

    @media (max-width: 767px) {
        .title-size {
            font-size: 26px !important;
        }

        .blog-usp-card-col {
            margin-top: 20px;
        }
    }
</style>
@endpush @section('content')
<section class="sub-heading blog-detail-heading light-bg">
    <div class="container">
        <div class="row justify-content-start">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a title="Home" href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item"><a title="Home" href="{{ route('blog') }}">Blog</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $blog->title }}</li>
                    </ol>
                </nav>
            </div>
            <div class="col-lg-12">
                <h1 class="font-weight-bolder title-size">{{ $blog->title }}</h1>
                <div class="row">
                    <div class="col-md-6 col-lg-6 col-12">
                        <a href="{{ route('author') }}">
                            <span class="h6 "> <img class="mr-2 rounded-circle"
                                    src="{{ asset('front') }}/images/jignen-pandya.jpg" title="Jignen Pandya"
                                    alt="Jignen Pandya" style="width:41px; height:41px; object-fit: cover;">
                                Jignen Pandya</span>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-6 col-12 p-md-2 p-lg-2">
                        <div class="d-flex  flex-lg-row-reverse flex-md-row-reverse">
                            <span class="h6 mr-3">{{ date('F d, Y', strtotime($blog->updated_at)) }}</span>
                            <span class="h6 mr-3">{{ getEstimateReadingTime($blog->description) }}</span>
                        </div>
                    </div>
                </div>
                <div class="row blog-detail-banner">
                    <div class="col-lg-8">
                        <img src="{{ asset('sitebucket/blog') . '/' . $blog->image }}"
                            title="{{ $blog->image_title }}" alt="{{ $blog->image_alt }}" width="750"
                            height="375" />
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-space mt-5">
    <div class="container">
        <div class="row justify-content-start blog-detail">
            <div class="col-lg-8">
                <div class="blog-sidebar-links mb-2">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="mb-0">Table of content</h3>
                    </div>
                    <ul id="loopadd" class="mb-0">
                    </ul>
                    <div class="social-icon">
                        <ul class="mb-0">
                            <li><a rel="nofollow" target="_blank" title="linkedin"
                                    href="https://www.linkedin.com/company/expert-app-devs/"> <svg
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="14"
                                        height="17">
                                        <path
                                            d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"
                                            fill="#14c4dc" />
                                    </svg> </a></li>
                            <li><a rel="nofollow" target="_blank" title="twitter"
                                    href="https://twitter.com/ExpertAppDevs"> <svg xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 512 512" width="16" height="16">
                                        <path
                                            d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"
                                            fill="#14c4dc" />
                                    </svg> </a></li>
                            <li><a rel="nofollow" target="_blank" title="facebook"
                                    href="https://www.facebook.com/ExpertAppDevs"> <svg
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" width="10"
                                        height="17">
                                        <path
                                            d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"
                                            fill="#14c4dc" />
                                    </svg> </a>
                            </li>
                        </ul>
                    </div>
                </div>
                {!! $blog->description !!}
                <div class="inner">
                    <div class="social-icon mt-5">
                        <h5>Share on</h5>
                        <div class="sharethis-inline-share-buttons"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-center blog-usp-card-col">
                <a class="call_to_action" href="{{ route('contact-us') }}">
                    <img src="../front/images/call_to_action.gif" alt="call to action" width="257"
                        height="380" />
                </a>
                <div class="mobile-app-guide mt-5">
                    <a title="Download Mobile App Development Guide" class="" href="#"
                        data-toggle="modal" data-target="#exampleModal"> <svg xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 384 512">
                            <path
                                d="M320 464C328.8 464 336 456.8 336 448V416H384V448C384 483.3 355.3 512 320 512H64C28.65 512 0 483.3 0 448V416H48V448C48 456.8 55.16 464 64 464H320zM256 160C238.3 160 224 145.7 224 128V48H64C55.16 48 48 55.16 48 64V192H0V64C0 28.65 28.65 0 64 0H229.5C246.5 0 262.7 6.743 274.7 18.75L365.3 109.3C377.3 121.3 384 137.5 384 154.5V192H336V160H256zM88 224C118.9 224 144 249.1 144 280C144 310.9 118.9 336 88 336H80V368C80 376.8 72.84 384 64 384C55.16 384 48 376.8 48 368V240C48 231.2 55.16 224 64 224H88zM112 280C112 266.7 101.3 256 88 256H80V304H88C101.3 304 112 293.3 112 280zM160 240C160 231.2 167.2 224 176 224H200C226.5 224 248 245.5 248 272V336C248 362.5 226.5 384 200 384H176C167.2 384 160 376.8 160 368V240zM192 352H200C208.8 352 216 344.8 216 336V272C216 263.2 208.8 256 200 256H192V352zM336 224C344.8 224 352 231.2 352 240C352 248.8 344.8 256 336 256H304V288H336C344.8 288 352 295.2 352 304C352 312.8 344.8 320 336 320H304V368C304 376.8 296.8 384 288 384C279.2 384 272 376.8 272 368V240C272 231.2 279.2 224 288 224H336z"
                                fill="#ffffff" />
                        </svg> Download Mobile App Development Guide</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-start blog-detail">
        <div class="col-lg-8 blog-info-wrapper">
        </div>
    </div>
</section>
<section class="section-space border-top">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="h2">Need a consultation?</div>
                <div class="title-text">
                    <p class="margin-none">Drop us a line! We are here to answer your questions 24/7.</p>
                </div>
            </div>
            <div class="col-md-3 mt-3 text-md-right">
                <a title="Contact Us" class="btn btn-danger" href="{{ route('contact-us') }}">Contact Us</a>
            </div>
        </div>
    </div>
</section>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header ">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="contactForm">
                    <div class="row">
                        <div class="col-lg-12">
                            <h5 class="modal-title mb-2" id="exampleModalLabel">Subscription</h5>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-label-group">
                                <label>Name <span>*</span></label>
                                <input type="text" class="form-control mb-2" placeholder="Your Name"
                                    name="name">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-label-group">
                                <label>Email address <span>*</span></label>
                                <input type="email" class="form-control mb-2"
                                    placeholder="Enter your email address" name="email">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-label-group">
                                <label>Phone <span>*</span></label>
                                <input type="text" class="form-control mb-2" placeholder="Enter your phone number"
                                    name="phone">
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-12 text-right">
                            <button class="btn" type="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@push('js')
    <script>
        var h2tag = document.getElementsByTagName('h2');
        let text = "";
        for (let i = 0; i < h2tag.length; i++) {
            var links = "#h2tage_" + (i + 1)
            text += "<li><a href=" + links + ">" + h2tag[i].innerText + "</a></li>";
            h2tag[i].id = "h2tage_" + (i + 1);
        }
        $('#loopadd').append(text);
    </script>
    <script src="{{ asset('front/js/validate.js') }}"></script>
    <script>
        $(function() {
            $("#contactForm").submit(function(e) {
                e.preventDefault();
            }).validate({
                rules: {
                    email: {
                        required: true,
                        email: true,
                    },
                    name: {
                        required: true,
                    },
                    phone: {
                        required: true,
                        number: true,
                        minlength: 10,
                    }
                },
                submitHandler: function(form) {
                    var name = $("input[name='name']").val();
                    var email = $("input[name='email']").val();
                    var phone = $("input[name='phone']").val();
                    request = $.ajax({
                        url: "{{ route('subscription.store') }}",
                        type: "POST",
                        data: {
                            _token: "{{ csrf_token() }}",
                            email: email,
                            name: name,
                            phone: phone,
                        },
                        success: function(data) {
                            $('#exampleModal').modal('toggle');
                            document.getElementById("contactForm").reset();
                            var link = document.createElement('a');
                            link.href = data;
                            link.download = "guide-on-mobile-app-development.pdf";
                            link.click();
                        }
                    });
                }
            });
        });
    </script>
@endpush
@endsection

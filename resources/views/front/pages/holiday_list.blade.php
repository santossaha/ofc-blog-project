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
    <link rel="preload" as="image" href="{{ asset('front') }}/images/bg-shape3.png" />
    {{-- @include('front.layouts.includes.schema') --}}
@endsection
@push('css')
    <style>
        .holiday:before {
            display: table;
            content: " ";
        }

        .holiday-col {
            margin-bottom: 100px;
        }

        .holiday_cover {
            float: left;
            width: 100%;
            border-radius: 20px;
            position: relative;
            float: left;
            width: 100%;
            height: 279px;
        }

        .h-second {
            text-align: center;
            width: 100%;
            float: left;
            position: absolute;
            bottom: 20px;
        }

        .h-second {
            text-align: center;
            width: 100%;
            float: left;
            position: absolute;
            bottom: 20px;
        }

        .h_read_more a {
            display: inline-block;
            font-size: 14px;
            line-height: 28px;
            color: #fff;
        }

        a {
            transition: all ease .6s;
            -moz-transition: all ease .6s;
            -webkit-transition: all ease .8s;
            -o-transition: all ease .6s;
            -ms-transition: all ease .6s;
            outline: 0;
        }

        .gbtn,
        a,
        a:focus,
        a:hover,
        li,
        ul {
            text-decoration: none;
        }

        .h_read_more {
            width: 100%;
        }

        a {
            background-color: transparent;
        }

        .h_back_img {
            position: absolute;
            top: -50px;
            left: 0;
            right: 0;
            margin: 0 auto;
            text-align: center;
        }

        .h_back_img img {
            filter: drop-shadow(0 0 30px rgba(0, 0, 0, .15));
        }

        img {
            max-width: 100%;
        }

        img {
            vertical-align: middle;
        }

        img {
            border: 0;
        }

        .h_info {
            width: 100%;
            text-align: center;
            position: absolute;
            height: 100%;
            top: 45px;
        }

        .h_info p {
            width: 100%;
            font-size: 18px;
            font-weight: 900;
            color: #252525;
            line-height: 28px;
            text-transform: uppercase;
            margin: 0;
            padding: 0;
            font-family: Lato, sans-serif !important;
            letter-spacing: 2px;
        }

        .holiday h2::after {
            background-color: unset;
        }

        .h_info h2 {
            font-size: 80px;
            line-height: 80px;
            font-weight: 900;
            margin: 0 0 5px;
            font-family: Lato, sans-serif !important;
        }

        .h-second p {
            width: 100%;
            color: #fff;
            font-size: 22px;
            line-height: 28px;
            margin: 0 0 5px;
            text-transform: capitalize;
        }

    </style>
@endpush
@section('content')
    <section class="sub-heading light-bg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a title="Home" href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item">Holiday List</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-7">
                    <h1>Holiday List</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="section-space  bg-light">
        <div class="container">
            <div class="row holiday">
                <div class="col-md-4 col-lg-3 col-sm-6 col-xs-6 holiday-col">
                    <a href="https://en.wikipedia.org/wiki/Makar_Sankranti" target="_blank" rel="nofollow">
                        <div class="holiday_cover " style="background-color:#16a085;">
                            <div class="h-second">
                                <p>Utrayan</p>
                            </div>
                            <div class="h_back_img"> <img src="{{ asset('assets/media/hoilday/h_back_cover.svg') }}"
                                    alt="img" width="213" height="224">
                                <div class="h_info">
                                    <p>JAN</p>
                                    <h2 style="color:#16a085;">14</h2>
                                    <p>FRIDAY </p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-lg-3 col-sm-6 col-xs-6 holiday-col">
                    <a href="https://en.wikipedia.org/wiki/Makar_Sankranti" target="_blank" rel="nofollow">
                        <div class="holiday_cover " style="background-color:#e67e22;">
                            <div class="h-second">
                                <p>Vasi Uttarayan</p>
                            </div>
                            <div class="h_back_img"> <img src="{{ asset('assets/media/hoilday/h_back_cover.svg') }}"
                                    alt="img" width="213" height="224">
                                <div class="h_info">
                                    <p>JAN</p>
                                    <h2 style="color:#e67e22;">15</h2>
                                    <p>SATURDAY</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-lg-3 col-sm-6 col-xs-6 holiday-col">
                    <a href="https://en.wikipedia.org/wiki/Republic_Day_(India)" target="_blank" rel="nofollow">
                        <div class="holiday_cover " style="background-color:#2980b9;">
                            <div class="h-second">
                                <p>Republic Day</p>
                            </div>
                            <div class="h_back_img"> <img src="{{ asset('assets/media/hoilday/h_back_cover.svg') }}"
                                    alt="img" width="213" height="224">
                                <div class="h_info">
                                    <p>JAN</p>
                                    <h2 style="color:#2980b9;">26</h2>
                                    <p>WEDNESDAY</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-lg-3 col-sm-6 col-xs-6 holiday-col">
                    <a href="https://en.wikipedia.org/wiki/Holi" target="_blank" rel="nofollow">
                        <div class="holiday_cover " style="background-color:#c2272d;">
                            <div class="h-second">
                                <p>Dhuleti</p>
                            </div>
                            <div class="h_back_img"> <img src="{{ asset('assets/media/hoilday/h_back_cover.svg') }}"
                                    alt="img" width="213" height="224">
                                <div class="h_info">
                                    <p>mar</p>
                                    <h2 style="color:#c2272d;">18</h2>
                                    <p>FRIDAY</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-lg-3 col-sm-6 col-xs-6 holiday-col">
                    <a href="https://en.wikipedia.org/wiki/Raksha_Bandhan" target="_blank" rel="nofollow">
                        <div class="holiday_cover " style="background-color:#e74c3c;">
                            <div class="h-second">
                                <p>Rakshabandhan</p>
                            </div>
                            <div class="h_back_img"> <img src="{{ asset('assets/media/hoilday/h_back_cover.svg') }}"
                                    alt="img" width="213" height="224">
                                <div class="h_info">
                                    <p>Aug</p>
                                    <h2 style="color:#e74c3c;">11</h2>
                                    <p>THURSDAY </p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-lg-3 col-sm-6 col-xs-6 holiday-col">
                    <a href="https://en.wikipedia.org/wiki/Independence_Day_(India)" target="_blank" rel="nofollow">
                        <div class="holiday_cover " style="background-color:#6ab04c;">
                            <div class="h-second">
                                <p>Independence Day</p>
                            </div>
                            <div class="h_back_img"> <img src="{{ asset('assets/media/hoilday/h_back_cover.svg') }}"
                                    alt="img" width="213" height="224">
                                <div class="h_info">
                                    <p>aug</p>
                                    <h2 style="color:#6ab04c;">15</h2>
                                    <p>MONDAY</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-lg-3 col-sm-6 col-xs-6 holiday-col">
                    <a href="https://en.wikipedia.org/wiki/Krishna_Janmashtami" target="_blank" rel="nofollow">
                        <div class="holiday_cover " style="background-color:#ffa502;">
                            <div class="h-second">
                                <p>Krishna Janmastami</p>
                            </div>
                            <div class="h_back_img"> <img src="{{ asset('assets/media/hoilday/h_back_cover.svg') }}"
                                    alt="img" width="213" height="224">
                                <div class="h_info">
                                    <p>aug</p>
                                    <h2 style="color:#ffa502;">19</h2>
                                    <p>FRIDAY </p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-lg-3 col-sm-6 col-xs-6 holiday-col">
                    <a href="https://en.wikipedia.org/wiki/Diwali" target="_blank" rel="nofollow">
                        <div class="holiday_cover" style="background-color:#2c3e50;">
                            <div class="h-second">
                                <p>Diwali</p>
                            </div>
                            <div class="h_back_img"> <img src="{{ asset('assets/media/hoilday/h_back_cover.svg') }}"
                                    alt="img" width="213" height="224">
                                <div class="h_info">
                                    <p>Oct</p>
                                    <h2 style="color:#2c3e50;">24</h2>
                                    <p>MONDAY </p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-lg-3 col-sm-6 col-xs-6 holiday-col">
                    <a href="https://en.wikipedia.org/wiki/Diwali#Nav_Varas" target="_blank" rel="nofollow">
                        <div class="holiday_cover" style="background-color:#22a6b3;">
                            <div class="h-second">
                                <p>new year</p>
                            </div>
                            <div class="h_back_img"> <img src="{{ asset('assets/media/hoilday/h_back_cover.svg') }}"
                                    alt="img" width="213" height="224">
                                <div class="h_info">
                                    <p>Oct</p>
                                    <h2 style="color:#22a6b3;">25</h2>
                                    <p>TUESDAY</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-lg-3 col-sm-6 col-xs-6 holiday-col">
                    <a href="https://en.wikipedia.org/wiki/Bhai_Dooj" target="_blank" rel="nofollow">
                        <div class="holiday_cover" style="background-color:#1dd1a1;">
                            <div class="h-second">
                                <p>bhai duj</p>
                            </div>
                            <div class="h_back_img"> <img src="{{ asset('assets/media/hoilday/h_back_cover.svg') }}"
                                    alt="img" width="213" height="224">
                                <div class="h_info">
                                    <p>Oct</p>
                                    <h2 style="color:#1dd1a1;">26</h2>
                                    <p>WEDNESDAY</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('js')
@endpush

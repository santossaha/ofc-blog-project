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
        .value h2 span {
            font: 300 36px/40px Lato, sans-serif !important;
            color: #4b5779 !important
        }

        .value h2 {
            letter-spacing: 2px !important;
            font: 400 36px/40px Lato, sans-serif !important
        }

        .value p {
            font: 300 19px/30px Lato, sans-serif;
            max-width: 800px;
            margin: 17px auto 72px;
            letter-spacing: .5px;
            color: #4b5779 !important
        }

        .value h2::after {
            contain: unset;
            background-color: unset;
            display: unset;
            margin: unset
        }

        .value .department {
            float: left;
            width: 100%;
            height: 100%;
            background-color: #fff;
            box-shadow: 0 0 10px 0 rgb(0 0 0 / 2%);
            padding: 28px 15px 15px 30px
        }

        .value .department ul {
            padding: 0 0 0 14px;
            list-style: none;
            margin: 0
        }

        .value .department ul li {
            position: relative;
            font: 400 14px/20px Lato, sans-serif;
            color: #323a45;
            margin-bottom: 14px;
            letter-spacing: .5px
        }

        .value .department ul li:before {
            content: "\2022";
            color: red;
            font-weight: 900;
            display: inline-block;
            width: 1.2em;
            margin-left: -1em
        }

        .accordion.accordion-toggle-plus .card .card-header .card-title.collapsed:after {
            color: #74788d;
            content: "\002B";
            font-size: 28px
        }

        .accordion.accordion-toggle-plus .card .card-header .card-title:after {
            position: absolute;
            font-family: LineAwesome;
            text-decoration: inherit;
            text-rendering: optimizeLegibility;
            text-transform: none;
            -moz-osx-font-smoothing: grayscale;
            -webkit-font-smoothing: antialiased;
            font-smoothing: antialiased;
            content: "\2212";
            font-size: 1.2rem;
            color: #1e326f;
            font-size: 28px
        }

        .accordion.accordion-toggle-plus .card .card-header .card-title {
            color: #1e326f;
            position: relative;
            font-size: 28px
        }

        .accordion.accordion-solid .card .card-header .card-title {
            font-size: 1.1rem;
            padding: 1.25rem;
            background-color: #f7f8fa;
            border-radius: 4px
        }

        .accordion .card .card-header .card-title {
            margin: 0;
            font-size: 1.1rem;
            font-weight: 500;
            padding: 1rem 1rem;
            color: #1e326f;
            display: flex;
            justify-content: flex-start;
            align-items: center
        }

        .accordion .card .card-header {
            cursor: pointer;
            margin: 0;
            padding: 0;
            border-bottom: 0
        }

        .accordion.accordion-toggle-plus .card .card-header .card-title:after {
            position: absolute;
            font-family: LineAwesome;
            text-decoration: inherit;
            text-rendering: optimizeLegibility;
            text-transform: none;
            -moz-osx-font-smoothing: grayscale;
            -webkit-font-smoothing: antialiased;
            font-smoothing: antialiased;
            content: "\2212";
            font-size: 1.2rem;
            color: #1e326f;
            font-size: 31px
        }

        .accordion .card .card-header .card-title:after {
            right: 1rem
        }

        .accordion.accordion-toggle-plus .card .card-header .card-title.collapsed:after {
            color: #74788d;
            content: "\002B"
        }

        .accordion .card {
            box-shadow: 0 0 5px 0 rgb(0 0 0 / 5%);
            border-radius: 3px
        }

        .accordion .card .card-header .card-title:hover {
            color: red
        }

        .current_opening {
            font: 300 32px/40px Lato, sans- !important;
            margin: 0 !important;
            margin-bottom: 25px !important
        }

        .job-qualification p {
            margin-top: 0;
            margin-bottom: 0
        }

        .modal.modal-fullscreen .modal-dialog {
            width: 100vw;
            height: 100vh;
            margin: 0;
            padding: 0;
            max-width: none
        }

        .modal.modal-fullscreen .modal-content {
            height: auto;
            height: 100vh;
            border-radius: 0;
            border: none;
            padding: 1%
        }

        .modal.modal-fullscreen .modal-body {
            overflow-y: auto
        }

        .modal-content {
            color: #fff;
            background-color: unset
        }

        .modal .modal-header .close {
            color: #74788d;
            background: unset
        }

        .modal .modal-header .close:hover {
            background: unset !important
        }

        .close-model {
            color: #1e326f;
            text-align: center;
            background: #fff url(../images/close-pop.png) no-repeat !important;
            right: 30px !important;
            top: 15px !important;
            width: 40px !important;
            height: 40px !important;
            padding-top: .2%;
            cursor: pointer;
            font-size: 24px;
            background-position: center center !important;
            background-size: 20px !important;
            border-radius: 50%
        }

        .modal-fullscreen {
            background-image: url("{{ asset('assets/media/bg/fancybox_overlay.png') }}")
        }

        .modal-body h2::after {
            background-color: unset
        }

        .modal-body h2 {
            color: #fff
        }

        .h2:hover,
        .modal-body h2:hover {
            color: #1e326f !important
        }

        label.error {
            color: red
        }

        .form-control.error {
            margin-bottom: 5px
        }

        strong {
            font-size: 24px;
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
                            <li class="breadcrumb-item">Career</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-7">
                    <h1>Career</h1>
                </div>
            </div>
        </div>
    </section>
    <!--comfort security part start-->
    <section class="section-space ">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 pt-5">
                    <div class="dis-img">
                        <img src="{{ asset('assets/media/career/screen1.webp') }}" alt="hire developers" width="458" height="480" />
                    </div>
                </div>
                <div class="col-lg-7 ">
                    <h2 class="mb-2">Join us to carve a better future</h2>
                    <div class="pr-lg-5">
                        <div class="title-text">
                            <p class="margin-none text-justify pb-3">
                                We are looking for talented and passionate people just like you. Join our team at Expert App
                                Devs to reimagine the software development landscape and create solutions that solve every
                                problem.
                            </p>
                            <p class="margin-none text-justify pb-3">
                                What’s the best part about joining our team? Equal opportunities, always curious, and a
                                drive to rank high on innovative solutions. We have built a strong team that takes pride in
                                being diverse and multi-lingual.
                            </p>
                            <p class="my-1">
                                <strong style="text-decoration: underline">Perks of joining the team</strong>
                            </p>
                            <p class="mb-1"><strong>Healthy you = Happy you</strong></p>
                            <p class="margin-none text-justify pb-3">
                                Assured health benefits and insurance that take care of you and your family. Our wellness
                                packages are all created to keep you happy and healthy
                            </p>
                            <p class="my-1"> <strong>Empowered Employees</strong></p>

                            <p class="margin-none text-justify pb-3">
                                We believe your ability and allow you to take important decisions related to the project. An
                                empowered employee with freehand has the best ideas and the most innovative solutions
                            </p>
                            <p class="my-1"><strong> Work with Fun</strong></p>
                            <p class="margin-none text-justify">
                                We work hard and we party harder. We make sure our employees are relaxed. We focus on team
                                bonding activities and other leisure things as well
                                Work during the week; Be lazy over the weekend.
                            </p>
                            <p class="margin-none text-justify">
                                If you want to take a job that you truly love, our team is waiting to onboard you.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="value full_width bg-light pb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 pt-3">
                    <h2 class="text-center">Living Our Values, <span>Empowering our people</span></h2>
                    <p class="text-center">Our core values inform everything we do, from how we work with each other to
                        how we solve engineering challenges. We live our values, and we empower teams to achieve their
                        goals. </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-6 ">
                    <div class="department">
                        <h5>Fun Workplace</h5>
                        <ul>
                            <li>Flat Job Hierarchy</li>
                            <li>Flexible Work Hours</li>
                            <li>Casual Dress Code</li>
                            <li>Disciplined Workplace Environment</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 ">
                    <div class="department">
                        <h5>Learning &amp; Development</h5>
                        <ul>
                            <li>Team Cohesion</li>
                            <li>Task Autonomy</li>
                            <li>Smooth Reporting</li>
                            <li>Extensive Training</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 ">
                    <div class="department">
                        <h5>HR Policies</h5>
                        <ul>
                            <li>Satisfactory Job Pay</li>
                            <li>Flexible Leave Policy</li>
                            <li>Monthly Paid Leaves</li>
                            <li>Bonus &amp; Incentives</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 ">
                    <div class="department">
                        <h5>Motivational </h5>
                        <ul>
                            <li>Team Appreciation</li>
                            <li>Individual Awards</li>
                            <li>Performance Rewards</li>
                            <li>Salary Appraisals</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-space bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-12">
                    <div class="kt-portlet ">
                        <div class="kt-portlet__head">
                            <div class="kt-portlet__head-label">
                                <h3 class="kt-portlet__head-title current_opening text-center">
                                    Current opening In Expert App Devs team
                                </h3>
                            </div>
                        </div>
                        <div class="kt-portlet__body">
                            <!--begin::Accordion-->
                            <div class="accordion accordion-solid accordion-toggle-plus" id="accordionExample6">
                                @foreach ($jobs as $key => $job)
                                    <div class="card border-0  mb-2">
                                        <div class="card-header bg-white" id="headingOne{{ $key }}">
                                            <div class="card-title bg-white collapsed" data-toggle="collapse"
                                                data-target="#collapseOne{{ $key }}" aria-expanded="false"
                                                aria-controls="collapseOne{{ $key }}">
                                                {{ $job->name }}
                                            </div>
                                        </div>
                                        <div id="collapseOne{{ $key }}" class="collapse "
                                            aria-labelledby="headingOne{{ $key }}"
                                            data-parent="#accordionExample6">
                                            <div class="card-body">
                                                <div class="faq-section">
                                                    <div class="job-qualification">
                                                        <p class="font-weight-bold">Experience :
                                                            <span>{{ $job->experience }}</span>
                                                        </p>
                                                        <p class="font-weight-bold">No of Openings :
                                                            <span>{{ $job->opening }} </span>
                                                        </p>
                                                        <p class="font-weight-bold">Send your cv to <a
                                                                href="mailto:{{ $job->email }}" title=""
                                                                class="text-danger font-weight-bold
                                                            ">{{ $job->email }}</a>
                                                        </p>
                                                        <p class="font-weight-bold">Skills <br> </p>
                                                        {!! $job->skill !!}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            <!--end::Accordion-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pb-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-2 mx-auto">
                    <button type="button" class="btn" data-toggle="modal"
                        data-target="#kt_modal_7">Apply</button>
                </div>
            </div>
        </div>
        <div class="modal modal-fullscreen modal-stick-to-bottom  fade" id="kt_modal_7" role="dialog" data-backdrop="false">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-white" id="exampleModalLabel">
                        </h5>
                        <div class="font-weight-bold close-model" data-dismiss="modal" aria-label="Close">X
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-7 col-md-6 col-sm-12 col-xs-12 get-info-left">
                                    <h2>Ready to work with us? Tell us more.</h2>
                                    <form action="{{ route('applyjob') }}" enctype="multipart/form-data"
                                        id="main_service_frm" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div class="form-label-group">
                                                    <input type="text" class="form-control bg-white" name="name"
                                                        placeholder="Your name">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div class="form-label-group">
                                                    <select name="apply_for" class="form-control">
                                                        <option value="">Apply for</option>
                                                        @foreach ($jobs as $job)
                                                            <option value="{{ $job->name }}">{{ $job->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12"> <input type="email"
                                                    class="form-control bg-white" name="email" placeholder="Your Email">
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12"> <input type="tel"
                                                    class="form-control bg-white" name="phone" placeholder="Phone Number">
                                            </div>
                                            <div class="col-md-6 col-sm-7 col-xs-7">
                                                <label class="text-white">Upload your files - 20MB max.
                                                    (Optional)</label>
                                                <div class="custom-file mb-2">
                                                    <input type="file" class="custom-file-input" id="customFile"
                                                        name="file">
                                                    <label class="custom-file-label" for="customFile">No file
                                                        chosen</label>
                                                </div>
                                            </div>
                                            <div class="col-md-5 col-sm-5 col-xs-5">
                                                <div class="submit_btn pt-4">
                                                    <button type="submit" class="btn">
                                                        Submit
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12 pull-right">
                                    <div class="openbox_contdetails pt-5">
                                        <a href="mailto:job@expertappdevs.com"
                                            class="text-white h2 d-block pt-2">job@expertappdevs.com</a>
                                        <a class="text-white h2 d-block" href="tel:917016166822">+91 701-616-6822 </a>
                                        <div class="social-icon">
                                            <ul>
                                                <li>
                                                    <a rel="nofollow" target="_blank" title="facebook"
                                                        href="https://www.facebook.com/ExpertAppDevs">
                                                        <i class="fab fa-facebook-f h4"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a rel="nofollow" target="_blank" title="instagram"
                                                        href="https://www.instagram.com/expertappdevs/">
                                                        <i class="fab fa-instagram h4"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a rel="nofollow" target="_blank" title="twitter"
                                                        href="https://twitter.com/ExpertAppDevs">
                                                        <i class="fab fa-twitter h4"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a rel="nofollow" target="_blank" title="linkedin"
                                                        href="https://www.linkedin.com/company/expert-app-devs/">
                                                        <i class="fab fa-linkedin-in h4"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a rel="nofollow" target="_blank" title="youtube"
                                                        href="https://www.youtube.com/channel/UCqJtHff6w43-wV0tRPtBTsw">
                                                        <i class="fab fa-youtube h4"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a rel="nofollow" target="_blank" title="skype"
                                                        href="skype:live:.cid.bb618fdf0616a929?chat">
                                                        <i class="fab fa-skype h4"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
@push('js')
    <script src="{{ asset('theme/vendors/general/jquery-validation/dist/jquery.validate.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $("#main_service_frm").validate({
                rules: {
                    name: "required",
                    apply_for: "required",
                    phone: {
                        required: true,
                        minlength: 10,
                        maxlength: 12,
                        digits: true,
                    },
                    email: {
                        required: true,
                        email: true
                    },
                }
            });
        });
    </script>
@endpush

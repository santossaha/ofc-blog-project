@extends('front.layout.app')
@push('meta')
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="description" content="{{ $portfolioDetail->meta_description }}" />
    <meta name="keywords" content="{{ $portfolioDetail->meta_keyword }}">
    <meta name="robots" content="{{ $portfolioDetail->meta_robots }}" />
    <link rel="canonical" href="{{ url()->current() }}" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="{{ $portfolioDetail->meta_title }}" />
    <meta property="og:description" content="{{ $portfolioDetail->meta_description }}" />
    <meta property="og:keywords" content="{{ $portfolioDetail->meta_keyword }}" />
    <meta property="article:modified_time" content="{{ \Carbon\Carbon::parse($portfolioDetail->updated_at)->format('Y-m-d') }}" />
    <meta property="og:image" content="{{ asset('sitebucket/service/' . $portfolioDetail->image) }}" />
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
                    <p class="lead d-flex align-items-center my-0"><i class="fas fa-award font-md me-3"></i>Dashboard included</p>
                    <h1 class="bold text-contrast font-lg display-lg-4 mb-3">{{$portfolioDetail->title}}<span class="d-block light font-lg"></span></h1>
                    <div class="tags">
                        <ul>
                            <li class="text-contrast bg-primary">{{$portfolioDetail->platform}}</li>
                            <li class="text-contrast bg-primary">{{$portfolioDetail->platform}}</li>
                            <li class="text-contrast bg-primary">{{$portfolioDetail->db}}</li>
                            <li class="text-contrast bg-primary">{{$portfolioDetail->tool}}</li>
                            <li class="text-contrast bg-primary">{{$portfolioDetail->portfolio_category}}</li>
                        </ul>
                    </div>
                    <p class="lead">{!!$portfolioDetail->description!!}</p>
                    <div class="nav mt-5 align-items-center"><a href="{{route('contact-us')}}" class="btn btn-rounded btn-primary bw-2 bold text-contrast">Get Started - It's Free</a></div>
                </div>
                <div class="col-md-5">
                    <div class="device-twin ms-auto align-items-center">
                        <div class="mockup absolute" data-aos="fade-left">
                            <div class="screen"><img src="{{(!blank($portfolioDetail->image)) ? getImage($portfolioDetail->image) : asset('front/img').'/screens/app/mobile-app-development-company-usa.png'}}" alt="..."></div><span class="button"></span>
                        </div>
                        <div class="iphone-x light front me-0">
                            <div class="screen shadow-box"><img src="{{(!blank($portfolioDetail->about_image)) ? getImage($portfolioDetail->about_image) : asset('front/img').'/screens/app/mobile-app-development-company-in-usa.png'}}" alt="..."></div>
                            <div class="notch"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="position-relative">
        <div class="shape-divider shape-divider-bottom shape-divider-fluid-x text-contrast"><svg viewBox="0 0 2880 48" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z"></path>
            </svg></div>
    </div>

    <!-- Begin Screenshot -->
    <section class="section bg-white">
        <div class="container">
            <div class="row align-items-center dev-solution">
                <div class="col-lg-5 col-md-4 mobile-swipe">
                    <!-- Swiper -->
                    <img src="{{asset('front/img')}}/solution/mobile-bg.png" alt="Mobile background"
                    title="Mobile background" class="dev-frame">
                    <div class="screen-swipe swiper-container">
                    <div class="swiper-wrapper">
                        @if(count($portfolioDetail->screenshots) > 0)
                        @foreach($portfolioDetail->screenshots as $ssRow)
                        <div class="swiper-slide"><div class="app-device"><img src="{{(!blank($ssRow->image)) ? getImage($ssRow->image) : asset('front/img').'/screens/app/mobile-app-development-company-in-usa.png'}}" alt="Registration Process" title="Registration Process" ></div></div>
                        @endforeach
                        @else
                        @for($i=1;$i<=5;$i++)
                        <div class="swiper-slide"><div class="app-device"><img src="{{asset('front/img')}}/screens/app/{{in_array($i,[1,2])?(($i==1)?'mobile-app-development-company-usa':'mobile-app-development-company-in-usa'):'portfolio_details_0'.$i}}.png" alt="Registration Process" title="Registration Process" ></div></div>
                        @endfor
                        @endif
                    </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-8 pl-xl-3 pr-xl-5">
                <div class="section-heading mb-5">
                    <h2 class="heading-line bold"><span class="light"></span><br>{{$portfolioDetail->screenshot_description}}</h2>                    
                </div>
                    <!-- Swiper -->
                    <div class="swiper-container dev-solution-content">
                    <div class="swiper-wrapper">
                        @if(count($portfolioDetail->screenshots) > 0)
                        @foreach($portfolioDetail->screenshots as $ssRow)
                        <div class="swiper-slide">
                            <div class="middle-content">
                                <div class="title-text">
                                <h5>{{$ssRow->title}}</h5>
                                <p>{!!$ssRow->description!!}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @else
                        @for($i=1;$i<=5;$i++)
                        <div class="swiper-slide">
                            <div class="middle-content">
                                <div class="title-text">
                                <h5>Registration Process {{$i}}</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab dolore excepturi explicabo.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet aut autem eum laudantium quas recusandae.Assumenda consequuntur debitis delectus, ducimus enim et eveniet facilis harum ipsa magni non odit pariatur placeat.</p>
                                <p>Customers and service providers can quickly add the necessary details and sign up into the system.</p>
                                </div>
                            </div>
                        </div>
                        @endfor
                        @endif
                    </div>
                    </div>
                    <div class="control w-100 d-flex align-items-center justify-content-between">
                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
                    <div class="arrows d-flex align-items-center justify-content-between">
                        <div class="swiper-button-prev"> <img src="{{asset('front/img')}}/pre-swipe.png"
                            alt="previous swipe" width="18" height="31" /></div>
                        <div class="swiper-button-next"> <img src="{{asset('front/img')}}/next-swipe.png"
                            alt="next swipe" width="18" height="31" /></div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Screenshot -->

    <!-- Begin CTA Section -->
    <x-front.company-profile />
    <!-- End CTA Section -->

    <!-- Begin The Big Idea -->
    <section class="section bg-light">
        <div class="container bring-to-front">
            <div class="section-heading text-start mx-auto mb-0">
                <h2>The Big Idea</h2>
                <p class="lead text-primary">{!! $portfolioDetail->about_description !!}</p>
            </div>
        </div>
    </section>
    <!-- End The Big Idea -->


    <!-- Begin Our Process Section -->
    <section class="section">
        <div class="container bring-to-front">
            <div class="section-heading text-start mx-auto mb-0">
                <h2>Process of development</h2>
                <p class="lead text-primary">{!! $portfolioDetail->process_description !!}</p>
            </div>
        </div>
    </section>
    <!-- End Our Process Section -->

    <!-- Begin Challenge Section -->
    <section class="section bg-light">
        <div class="container bring-to-front">
            <div class="section-heading text-start mx-auto mb-0">
                <h2>Challenges</h2>
                <p class="lead text-primary">{!! $portfolioDetail->challenges_description !!}</p>
            </div>
        </div>
    </section>
    <!-- End Challenge Section -->

    <!-- Begin Solution Section -->

    <section id="features" class="section app-safety">
        <div class="shapes-container">
            <div class="shape shape-circle">
                <div data-aos="fade-up-left" class="aos-init"></div>
            </div>
            <div class="shape shape-triangle aos-init" data-aos="fade-up-right" data-aos-delay="200">
                <div></div>
            </div>
            <div class="shape pattern pattern-dots"></div>
        </div>
        <div class="container bring-to-front">
            <div class="section-heading text-center">
                <h2 class="bold">Solution</h2>
                <p class="lead text-primary">{!! $portfolioDetail->solution_description !!}</p>
            </div>
            <div class="row gap-y text-center text-md-start">
                @if(count($portfolioDetail->solutions) > 0)
                @foreach($portfolioDetail->solutions as $solutionRow)
                <div class="col-md-4 mb-3">
                    <div class="card shadow-hover lift-hover h-100">
                        <div class="card-body p-5">
                            @if(!blank($solutionRow['image']))
                            <img src="{{isset($solutionRow['image'])?getImage($solutionRow['image']):'https://www.manektech.com/front/images/Microsoft-gold-partner.webp'}}" class="img-responsive mb-3" alt="" style="max-height: 36px">
                            @else
                             <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="56" height="56" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="mb-2"><g><path xmlns="http://www.w3.org/2000/svg" d="m321.89 342.472c-15.664-3.886-31.309-6.397-46.883-7.547 22.643-10.023 38.941-37.409 38.941-69.557 0-36.995-22.204-59.977-57.948-59.977s-57.948 22.982-57.948 59.977c0 32.078 16.227 59.417 38.793 69.493-15.74 1.119-31.359 3.656-46.799 7.627-34.203 8.791-53.04 27.502-53.04 52.684v100.828c0 4.418 3.582 8 8 8h221.988c4.418 0 8-3.582 8-8v-100.828c0-25.12-19.356-44.329-53.104-52.7zm-107.838-77.104c0-38.263 26.282-43.977 41.948-43.977s41.948 5.713 41.948 43.977c0 31.786-18.818 57.646-41.948 57.646s-41.948-25.86-41.948-57.646zm144.942 222.632h-34.438v-69.65c0-4.418-3.582-8-8-8s-8 3.582-8 8v69.65h-105.114v-69.65c0-4.418-3.582-8-8-8s-8 3.582-8 8v69.65h-34.437v-92.828c0-22.021 22.309-32.377 41.023-37.188 40.38-10.387 82.102-10.38 124.008.017 15.296 3.794 40.957 13.669 40.957 37.171v92.828zm-188.545-402.1 38.901 31.267-13.092 48.159c-1.31 4.812.451 9.813 4.484 12.74 4.03 2.928 9.33 3.057 13.5.329l41.758-27.334 41.759 27.335c2.001 1.31 4.261 1.96 6.517 1.96 2.445 0 4.886-.766 6.981-2.29 4.031-2.928 5.793-7.927 4.486-12.738l-13.094-48.161 38.9-31.267c3.885-3.121 5.4-8.2 3.859-12.945-1.542-4.738-5.753-7.956-10.729-8.197l-49.851-2.43-17.714-46.659h-.001c-1.766-4.659-6.13-7.669-11.113-7.669-4.986 0-9.35 3.012-11.115 7.669l-17.715 46.66-49.85 2.43c-4.979.243-9.19 3.462-10.729 8.203-1.539 4.738-.025 9.816 3.858 12.938zm60.186-7.721c4.725-.229 8.86-3.235 10.538-7.655l14.827-39.054 14.828 39.056c1.68 4.419 5.816 7.423 10.536 7.652l41.724 2.034-32.559 26.169c-3.687 2.962-5.267 7.825-4.025 12.387l10.96 40.311-34.95-22.878c-1.979-1.296-4.246-1.944-6.515-1.944-2.267 0-4.533.648-6.511 1.943l-34.951 22.88 10.959-40.31c1.241-4.563-.339-9.426-4.024-12.387l-32.56-26.17zm262.827 205.545c-1.406-4.321-5.248-7.257-9.786-7.478l-35.072-1.71-12.465-32.828c-1.613-4.25-5.593-6.996-10.139-6.996-4.548 0-8.528 2.747-10.141 6.997l-12.463 32.827-35.072 1.71c-4.539.221-8.381 3.156-9.789 7.483-1.403 4.324-.021 8.957 3.521 11.803l27.37 21.998-9.212 33.884c-1.193 4.386.412 8.947 4.091 11.621 1.913 1.39 4.139 2.088 6.369 2.088 2.059 0 4.121-.595 5.946-1.789l29.378-19.231 29.38 19.232c3.803 2.487 8.634 2.37 12.319-.303 3.672-2.672 5.277-7.229 4.087-11.617l-9.213-33.885 27.369-21.997c3.544-2.846 4.927-7.479 3.522-11.809zm-72.28-36.336.003.01c-.001-.004-.003-.008-.004-.012 0 .001 0 .001.001.002zm28.736 59.786c-3.361 2.703-4.802 7.139-3.67 11.299l6.536 24.04-20.846-13.646c-1.804-1.181-3.871-1.771-5.938-1.771s-4.137.591-5.941 1.771l-20.843 13.645 6.535-24.039c1.133-4.164-.31-8.601-3.672-11.301l-19.418-15.607 24.886-1.213c4.309-.211 8.081-2.952 9.61-6.982l8.843-23.292 8.843 23.29c1.529 4.031 5.302 6.773 9.611 6.984l24.884 1.213zm-327.345 10.356 27.365-21.995c3.546-2.846 4.93-7.479 3.524-11.812-1.406-4.321-5.248-7.257-9.786-7.478l-35.073-1.71-12.462-32.825c-1.612-4.251-5.593-6.998-10.14-6.998-4.548 0-8.528 2.747-10.141 6.997l-12.463 32.827-35.072 1.71c-4.539.221-8.381 3.156-9.789 7.483-1.403 4.324-.021 8.957 3.521 11.803l27.37 21.998-9.212 33.884c-1.193 4.386.412 8.947 4.091 11.621 1.913 1.39 4.139 2.088 6.369 2.088 2.059 0 4.121-.595 5.946-1.789l29.379-19.231 29.379 19.232c3.802 2.487 8.635 2.37 12.319-.303 3.672-2.672 5.276-7.229 4.087-11.617zm-12.654-10.356c-3.361 2.703-4.802 7.139-3.67 11.299l6.536 24.04-20.846-13.646c-1.804-1.181-3.871-1.771-5.938-1.771s-4.137.591-5.941 1.771l-20.843 13.645 6.535-24.039c1.133-4.164-.31-8.601-3.672-11.301l-19.418-15.607 24.886-1.213c4.309-.211 8.081-2.952 9.61-6.982l8.843-23.291 8.844 23.295c1.532 4.028 5.304 6.768 9.61 6.979l24.883 1.213zm-60.843-154.161 27.37 21.997-9.212 33.883c-1.193 4.387.412 8.948 4.091 11.622 1.913 1.39 4.139 2.088 6.369 2.088 2.059 0 4.121-.595 5.946-1.789l29.378-19.231 29.38 19.232c3.803 2.489 8.637 2.37 12.319-.303 3.672-2.671 5.277-7.229 4.087-11.617l-9.213-33.884 27.371-21.999c3.541-2.847 4.923-7.479 3.519-11.809-1.407-4.321-5.248-7.256-9.786-7.477l-35.073-1.71-12.463-32.828h-.001c-1.613-4.25-5.594-6.995-10.14-6.995s-8.525 2.746-10.14 6.996l-12.463 32.828-35.072 1.709c-4.539.221-8.38 3.156-9.789 7.484-1.402 4.322-.02 8.954 3.522 11.803zm45.487-5.18c4.306-.209 8.078-2.949 9.613-6.983l8.843-23.291 8.844 23.295c1.533 4.03 5.306 6.77 9.61 6.979l24.884 1.213-19.42 15.608c-3.361 2.703-4.802 7.138-3.67 11.298l6.536 24.041-20.844-13.644c-1.805-1.182-3.873-1.773-5.941-1.773s-4.137.591-5.94 1.772l-20.843 13.645 6.536-24.045c1.129-4.161-.312-8.594-3.672-11.295l-19.419-15.607zm236.957-6.629c-1.406 4.323-.025 8.958 3.52 11.809l27.369 21.998-9.212 33.883c-1.192 4.385.412 8.945 4.094 11.624 1.913 1.388 4.139 2.086 6.368 2.086 2.059 0 4.12-.594 5.944-1.789l29.379-19.231 29.38 19.232c3.804 2.489 8.638 2.371 12.315-.301 3.678-2.673 5.283-7.234 4.09-11.619l-9.212-33.884 27.37-21.999c3.544-2.85 4.925-7.484 3.521-11.803-1.404-4.325-5.247-7.262-9.788-7.483l-35.072-1.71-12.463-32.828c-.001-.002-.002-.004-.003-.006-1.615-4.246-5.595-6.989-10.138-6.989s-8.522 2.744-10.141 6.996l-12.463 32.828-35.071 1.709c-4.542.219-8.385 3.157-9.787 7.477zm49.006 6.629c4.309-.209 8.082-2.951 9.612-6.983l8.843-23.292 8.843 23.291c1.53 4.034 5.304 6.775 9.611 6.984l24.885 1.213-19.42 15.608c-3.361 2.703-4.802 7.138-3.67 11.298l6.535 24.04-20.843-13.644c-3.609-2.364-8.274-2.363-11.882-.001l-20.844 13.645 6.535-24.039c1.132-4.162-.309-8.598-3.671-11.301l-19.418-15.607z" fill="#ff914b" data-original="#ff914b"></path></g></svg>
                            @endif
                            <h5 class="bold">{{$solutionRow['title']}}</h5>
                            <p class="">{{$solutionRow['description']}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
                @else
                @for($i=1;$i<=6;$i++)
                <div class="col-md-4 mb-3">
                    <div class="card shadow-hover lift-hover h-100">
                        <div class="card-body p-5">
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="56" height="56" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="mb-2"><g><path xmlns="http://www.w3.org/2000/svg" d="m321.89 342.472c-15.664-3.886-31.309-6.397-46.883-7.547 22.643-10.023 38.941-37.409 38.941-69.557 0-36.995-22.204-59.977-57.948-59.977s-57.948 22.982-57.948 59.977c0 32.078 16.227 59.417 38.793 69.493-15.74 1.119-31.359 3.656-46.799 7.627-34.203 8.791-53.04 27.502-53.04 52.684v100.828c0 4.418 3.582 8 8 8h221.988c4.418 0 8-3.582 8-8v-100.828c0-25.12-19.356-44.329-53.104-52.7zm-107.838-77.104c0-38.263 26.282-43.977 41.948-43.977s41.948 5.713 41.948 43.977c0 31.786-18.818 57.646-41.948 57.646s-41.948-25.86-41.948-57.646zm144.942 222.632h-34.438v-69.65c0-4.418-3.582-8-8-8s-8 3.582-8 8v69.65h-105.114v-69.65c0-4.418-3.582-8-8-8s-8 3.582-8 8v69.65h-34.437v-92.828c0-22.021 22.309-32.377 41.023-37.188 40.38-10.387 82.102-10.38 124.008.017 15.296 3.794 40.957 13.669 40.957 37.171v92.828zm-188.545-402.1 38.901 31.267-13.092 48.159c-1.31 4.812.451 9.813 4.484 12.74 4.03 2.928 9.33 3.057 13.5.329l41.758-27.334 41.759 27.335c2.001 1.31 4.261 1.96 6.517 1.96 2.445 0 4.886-.766 6.981-2.29 4.031-2.928 5.793-7.927 4.486-12.738l-13.094-48.161 38.9-31.267c3.885-3.121 5.4-8.2 3.859-12.945-1.542-4.738-5.753-7.956-10.729-8.197l-49.851-2.43-17.714-46.659h-.001c-1.766-4.659-6.13-7.669-11.113-7.669-4.986 0-9.35 3.012-11.115 7.669l-17.715 46.66-49.85 2.43c-4.979.243-9.19 3.462-10.729 8.203-1.539 4.738-.025 9.816 3.858 12.938zm60.186-7.721c4.725-.229 8.86-3.235 10.538-7.655l14.827-39.054 14.828 39.056c1.68 4.419 5.816 7.423 10.536 7.652l41.724 2.034-32.559 26.169c-3.687 2.962-5.267 7.825-4.025 12.387l10.96 40.311-34.95-22.878c-1.979-1.296-4.246-1.944-6.515-1.944-2.267 0-4.533.648-6.511 1.943l-34.951 22.88 10.959-40.31c1.241-4.563-.339-9.426-4.024-12.387l-32.56-26.17zm262.827 205.545c-1.406-4.321-5.248-7.257-9.786-7.478l-35.072-1.71-12.465-32.828c-1.613-4.25-5.593-6.996-10.139-6.996-4.548 0-8.528 2.747-10.141 6.997l-12.463 32.827-35.072 1.71c-4.539.221-8.381 3.156-9.789 7.483-1.403 4.324-.021 8.957 3.521 11.803l27.37 21.998-9.212 33.884c-1.193 4.386.412 8.947 4.091 11.621 1.913 1.39 4.139 2.088 6.369 2.088 2.059 0 4.121-.595 5.946-1.789l29.378-19.231 29.38 19.232c3.803 2.487 8.634 2.37 12.319-.303 3.672-2.672 5.277-7.229 4.087-11.617l-9.213-33.885 27.369-21.997c3.544-2.846 4.927-7.479 3.522-11.809zm-72.28-36.336.003.01c-.001-.004-.003-.008-.004-.012 0 .001 0 .001.001.002zm28.736 59.786c-3.361 2.703-4.802 7.139-3.67 11.299l6.536 24.04-20.846-13.646c-1.804-1.181-3.871-1.771-5.938-1.771s-4.137.591-5.941 1.771l-20.843 13.645 6.535-24.039c1.133-4.164-.31-8.601-3.672-11.301l-19.418-15.607 24.886-1.213c4.309-.211 8.081-2.952 9.61-6.982l8.843-23.292 8.843 23.29c1.529 4.031 5.302 6.773 9.611 6.984l24.884 1.213zm-327.345 10.356 27.365-21.995c3.546-2.846 4.93-7.479 3.524-11.812-1.406-4.321-5.248-7.257-9.786-7.478l-35.073-1.71-12.462-32.825c-1.612-4.251-5.593-6.998-10.14-6.998-4.548 0-8.528 2.747-10.141 6.997l-12.463 32.827-35.072 1.71c-4.539.221-8.381 3.156-9.789 7.483-1.403 4.324-.021 8.957 3.521 11.803l27.37 21.998-9.212 33.884c-1.193 4.386.412 8.947 4.091 11.621 1.913 1.39 4.139 2.088 6.369 2.088 2.059 0 4.121-.595 5.946-1.789l29.379-19.231 29.379 19.232c3.802 2.487 8.635 2.37 12.319-.303 3.672-2.672 5.276-7.229 4.087-11.617zm-12.654-10.356c-3.361 2.703-4.802 7.139-3.67 11.299l6.536 24.04-20.846-13.646c-1.804-1.181-3.871-1.771-5.938-1.771s-4.137.591-5.941 1.771l-20.843 13.645 6.535-24.039c1.133-4.164-.31-8.601-3.672-11.301l-19.418-15.607 24.886-1.213c4.309-.211 8.081-2.952 9.61-6.982l8.843-23.291 8.844 23.295c1.532 4.028 5.304 6.768 9.61 6.979l24.883 1.213zm-60.843-154.161 27.37 21.997-9.212 33.883c-1.193 4.387.412 8.948 4.091 11.622 1.913 1.39 4.139 2.088 6.369 2.088 2.059 0 4.121-.595 5.946-1.789l29.378-19.231 29.38 19.232c3.803 2.489 8.637 2.37 12.319-.303 3.672-2.671 5.277-7.229 4.087-11.617l-9.213-33.884 27.371-21.999c3.541-2.847 4.923-7.479 3.519-11.809-1.407-4.321-5.248-7.256-9.786-7.477l-35.073-1.71-12.463-32.828h-.001c-1.613-4.25-5.594-6.995-10.14-6.995s-8.525 2.746-10.14 6.996l-12.463 32.828-35.072 1.709c-4.539.221-8.38 3.156-9.789 7.484-1.402 4.322-.02 8.954 3.522 11.803zm45.487-5.18c4.306-.209 8.078-2.949 9.613-6.983l8.843-23.291 8.844 23.295c1.533 4.03 5.306 6.77 9.61 6.979l24.884 1.213-19.42 15.608c-3.361 2.703-4.802 7.138-3.67 11.298l6.536 24.041-20.844-13.644c-1.805-1.182-3.873-1.773-5.941-1.773s-4.137.591-5.94 1.772l-20.843 13.645 6.536-24.045c1.129-4.161-.312-8.594-3.672-11.295l-19.419-15.607zm236.957-6.629c-1.406 4.323-.025 8.958 3.52 11.809l27.369 21.998-9.212 33.883c-1.192 4.385.412 8.945 4.094 11.624 1.913 1.388 4.139 2.086 6.368 2.086 2.059 0 4.12-.594 5.944-1.789l29.379-19.231 29.38 19.232c3.804 2.489 8.638 2.371 12.315-.301 3.678-2.673 5.283-7.234 4.09-11.619l-9.212-33.884 27.37-21.999c3.544-2.85 4.925-7.484 3.521-11.803-1.404-4.325-5.247-7.262-9.788-7.483l-35.072-1.71-12.463-32.828c-.001-.002-.002-.004-.003-.006-1.615-4.246-5.595-6.989-10.138-6.989s-8.522 2.744-10.141 6.996l-12.463 32.828-35.071 1.709c-4.542.219-8.385 3.157-9.787 7.477zm49.006 6.629c4.309-.209 8.082-2.951 9.612-6.983l8.843-23.292 8.843 23.291c1.53 4.034 5.304 6.775 9.611 6.984l24.885 1.213-19.42 15.608c-3.361 2.703-4.802 7.138-3.67 11.298l6.535 24.04-20.843-13.644c-3.609-2.364-8.274-2.363-11.882-.001l-20.844 13.645 6.535-24.039c1.132-4.162-.309-8.598-3.671-11.301l-19.418-15.607z" fill="#ff914b" data-original="#ff914b"></path></g></svg>
                            <h5 class="bold">Talent Shortage</h5>
                            <p class="">Ab ad aliquam assumenda beatae commodi distinctio dolore dolorum earum error et, exercitationem</p>
                        </div>
                    </div>
                </div>
                @endfor
                @endif
            </div>
        </div>
    </section>
    <!-- End Solution Section -->

    <!-- Begin Wait box -->
    <!-- <x-front.wait-box /> -->
    <x-front.hire-developer />
    <!-- End Wait box -->
    
@endsection
@push('js')
    <script src="{{ asset('front/js/jquery.validate.js') }}"></script>
    <script src="{{ asset('front/js/front-script.js') }}"></script>
@endpush

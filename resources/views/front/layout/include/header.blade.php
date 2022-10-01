<header class="header app-landing-2-header section">
    <div class="shapes-container">
        <!-- diagonal shapes -->
        <div class="shape shape-animated" data-aos="fade-down-right" data-aos-duration="1500" data-aos-delay="100"></div>
        <div class="shape shape-animated" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="100"></div>
        <div class="shape shape-animated" data-aos="fade-up-left" data-aos-duration="500" data-aos-delay="200"></div>
        <div class="shape shape-animated" data-aos="fade-up" data-aos-duration="500" data-aos-delay="200"></div><!-- animated shapes -->
        <div class="animation-shape shape-triangle">
            <div class="animation--rotating"></div>
        </div>
        <div class="animation-shape shape-cross">
            <div class="animation--rotating"></div>
        </div><!-- static shapes -->
        <div class="static-shape shape-ring shape-ring-1">
            <div class="animation animation--rotating"></div>
        </div>
        <div class="static-shape shape-ring shape-ring-2">
            <div class="animation animation--rotating-clockwise"></div>
        </div>
        <div class="static-shape pattern-dots-1"></div>
        <div class="static-shape pattern-dots-2"></div><!-- main shape -->
        <div class="static-shape background-shape-main"></div>
    </div>
    <div class="container">
        <div class="row align-items-center gap-y">
            <div class="col-md-6"><span class="rounded-pill shadow-sm bg-contrast text-dark bold py-2 px-4"><i class="far fa-lightbulb text-secondary me-2"></i> <span class="text-secondary">Our</span> Mobility Strategy</span>
                <h1 class="display-6 display-lg-4 mt-3"><span class="bold">{{config('settings.website_name')}}</span></h1>
                <p class="lead bold text-primary mt-0">Turning Ideas Into Fully-Featured <span class="head-line-2">Web & Mobile Apps </span></p>
                <p class="">Being a renowned web & mobile app development company in USA, we are committed to creating the best fit IT solutions for your business and bringing success to it. We ensure high-end and superior user experiences to make the apps successful.</p>
                <a href="{{route('contact-us')}}"><button type="submit" class="btn btn-primary more-link rounded-pill"><i data-feather="mail" class="d-inline d-md-none"></i> <span class="d-none d-md-inline">Get a Free Quote</span></button></a>
                <!-- <div class="hero-form shadow-lg rounded-pill border mt-5">
                    <form action="srv/register.php">
                        <div class="input-group-register"><input type="text" class="form-control rounded-pill" placeholder="Your Email"> <button type="submit" class="btn btn-primary more-link rounded-pill"><i data-feather="mail" class="d-inline d-md-none"></i> <span class="d-none d-md-inline">Get a Free Quote</span></button></div>
                    </form>
                </div> -->
            </div>
            <div class="col-md-6">
                <div class="device-twin ms-auto align-items-center">
                    <div class="mockup absolute" data-aos="fade-left">
                        <div class="screen"><img src="{{ asset('front/img') }}/screens/app/mobile-app-development-company-usa.png" alt="..."></div><span class="button"></span>
                    </div>
                    <div class="iphone-x light front me-0">
                        <div class="screen shadow-box"><img src="{{ asset('front/img') }}/screens/app/mobile-app-development-company-in-usa.png" alt="..."></div>
                        <div class="notch"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

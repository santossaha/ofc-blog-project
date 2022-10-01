<header class="section header text-contrast app-landing-header">
    <div class="shape-wrapper">
    <div class="shape shape-background shape-main bg-darkBlue gradient-darkBlue"></div>
    </div>
    <div class="container">
        <div class="row gap-y align-items-center">
            <div class="col-md-7 col-lg-7">
                <p class="lead d-flex align-items-center my-0"><i class="fas fa-award font-md me-3"></i>Top App Developer in New York</p>
                <h1 class="bold text-contrast font-lg display-lg-4 mb-3">{{$title}} <span class="d-block light font-lg"></span></h1>
            <p class="lead">{!!$shortDescription!!}</p>
                <div class="nav mt-5 align-items-center"><a href="{{route('contact-us')}}" class="btn btn-rounded btn-lg text-white btn-gradient-darkPinkOrange shadow me-3 px-4 text-capitalize">Get Started - It's Free</a></div>
            </div>
            <div class="col-md-5 col-lg-5 ms-lg-auto position-relatice">
                {{$slot}}
            </div>
        </div>
    </div>
</header>
<footer class="site-footer section bg-darker text-contrast">
    <div class="container">
        <div class="row gap-y text-center text-md-start">
            <div class="col-md-4 me-auto">
            <img src="{{!blank(config('settings.light_logo')) ? getImage(config('settings.light_logo')): 'front/img/logo-white.png'}}" alt="{{config('settings.website_name')}}" class="logo logo-white">
                <p>New York Mobile Tech is a reliable mobile and web app development company offering scalable, and market-ready IT solutions.</p>
            </div>
            <div class="col-md-2">
                <h6 class="bold py-2 text-contrast text-uppercase">Company</h6>
                <nav class="nav flex-column"><a class="nav-item py-2 text-contrast" href="{{route('about-us')}}">About</a> <a class="nav-item py-2 text-contrast" href="{{route('portfolio')}}">Portfolio</a> <a class="nav-item py-2 text-contrast" href="{{route('blogs')}}">Blog</a></nav>
            </div>
            <div class="col-md-2">
                <h6 class="bold py-2 text-contrast text-uppercase">Features</h6>
                <nav class="nav flex-column"><a class="nav-item py-2 text-contrast" href="#">Features</a> <a class="nav-item py-2 text-contrast" href="#">API</a> <a class="nav-item py-2 text-contrast" href="#">Customers</a></nav>
            </div>
            <div class="col-md-2">
                <h6 class="bold py-2 text-contrast text-uppercase">Resources</h6>
                <nav class="nav flex-column"><a class="nav-item py-2 text-contrast" href="#">Careers</a> <a class="nav-item py-2 text-contrast" href="#">Contact</a> <a class="nav-item py-2 text-contrast" href="#">Search</a></nav>
            </div>
            <div class="col-md-2">
                <h6 class="bold py-2 text-contrast text-uppercase text-md-end">Follow us</h6>
                <nav class="nav justify-content-end">
                    @foreach(getSocialMedia() as $social)
                    <a href="{{$social['url']}}" class="btn btn-circle btn-sm btn-light  {{(!$loop->last)?'me-2':''}}">
                        <i class="fab font-regular {{$social['class']}}"></i>
                    </a>
                    @endforeach
                </nav>
            </div>
        </div>
        <hr class="mt-5 bg-secondary op-5">
        <div class="row small align-items-center">
            <div class="col-md-4">
                <p class="mt-2 mb-0">© 2022 {{config('settings.website_name')}}. All Rights Reserved</p>
            </div>
        </div>
    </div>
</footer>

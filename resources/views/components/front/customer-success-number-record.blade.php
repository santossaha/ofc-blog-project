<div class="position-relative">
    <div class="shape-divider shape-divider-bottom shape-divider-fluid-x text-primary"><svg viewBox="0 0 2880 48" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z"></path>
        </svg></div>
</div>

<!-- ./Counters -->
<section class="section counters bg-primary text-contrast">
    <div class="container pb-9">
        <div class="section-heading text-center">
            <h2 class="bold text-contrast">Numbers say more than words</h2>
            <p class="lead">The strong stats are enough to describe our happy customers and success record</p>
        </div>
        <div class="row">
            @foreach(customerSuccessNumberRecoardList() as $customerSuccess)
            <div class="col-xs-4 col-md-2 text-center">
                <img src="{{asset('front/img').$customerSuccess['icon'] }}" alt="{{$customerSuccess['alt']}}" width="56" hight="56" class="me-2" />
                <p class="counter bold font-md mt-0">{{$customerSuccess['number']}}{{$customerSuccess['sign']}}</p>
                <p class="m-0">{{$customerSuccess['name']}}</p>
            </div>
            @endforeach
            <!-- <div class="col-xs-4 col-md-2 text-center"><i data-feather="box" width="36" height="36"></i>
                <p class="counter bold font-md mt-0">1+</p>
                <p class="m-0">Year In Business</p>
            </div>
            <div class="col-xs-4 col-md-2 text-center"><i data-feather="download-cloud" width="36" height="36"></i>
                <p class="counter bold font-md mt-0">200+</p>
                <p class="m-0">Team Strength</p>
            </div>
            <div class="col-xs-4 col-md-2 text-center"><i data-feather="anchor" width="36" height="36"></i>
                <p class="counter bold font-md mt-0">50+</p>
                <p class="m-0">Repeat business</p>
            </div>
            <div class="col-xs-4 col-md-2 text-center"><i data-feather="award" width="36" height="36"></i>
                <p class="counter bold font-md mt-0">100+</p>
                <p class="m-0">Mobile Apps Delivered</p>
            </div>
            <div class="col-xs-4 col-md-2 text-center"><i data-feather="user" width="36" height="36"></i>
                <p class="counter bold font-md mt-0">25+</p>
                <p class="m-0">Happy clients</p>
            </div>
            <div class="col-xs-4 col-md-2 text-center"><i data-feather="download-cloud" width="36" height="36"></i>
                <p class="counter bold font-md mt-0">93%</p>
                <p class="m-0">Ontime Delivery</p>
            </div> -->
        </div>
    </div>
</section>
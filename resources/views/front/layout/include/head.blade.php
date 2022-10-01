@php
$array_name = [config('app.url'),route('disclaimer'),route('privacy-policy'),route('data-security')];
@endphp
<nav class="st-nav navbar main-nav navigation {{(!in_array( Request::url(), $array_name))? 'dark-nav' :'dark-link'}} fixed-top" id="main-nav">
    <div class="container">
        <ul class="st-nav-menu nav navbar-nav">
            <li class="st-nav-section nav-item">
                <a href="{{config('app.url')}}" class="navbar-brand">
                    <img src="{{!blank(config('settings.logo')) ? getImage(config('settings.logo')): 'front/img/logo.png'}}" alt="{{config('settings.website_name')}}" class="logo logo-sticky" />
                    <img src="{{!blank(config('settings.light_logo')) ? ((config('app.url')== Request::url().'/')?getImage(config('settings.logo')):getImage(config('settings.light_logo'))): 'front/img/logo-white.png'}}" alt="{{config('settings.website_name')}}" class="logo logo-white {{(config('app.url')== Request::url())? 'd-none' :''}}">
                </a>
            </li>
            <li class="st-nav-section st-nav-primary stick-right nav-item">
                @foreach(frontHeader() as $main)
                <a class="st-root-link {{$main['class']}}" data-dropdown="{{$main['data-dropdown']??''}}" {{($main['class']=='nav-link')?'href='.route($main["routeName"]):''}}>{{$main['name']}}</a>
                @endforeach
                <!-- <a class="st-root-link item-products st-has-dropdown nav-link" data-dropdown="Services">Services</a>
                <a class="st-root-link item-company st-has-dropdown nav-link" data-dropdown="IndystriesWeServe">We Serve</a> 
                <a class="st-root-link nav-link" href="#">Portfolio</a> 
                <a class="st-root-link nav-link" href="#">Blog</a>
                <a class="st-root-link item-blog st-has-dropdown nav-link" data-dropdown="components">Company</a> -->
            </li>
            <li class="st-nav-section st-nav-secondary nav-item">
                <!-- <a class="btn btn-rounded btn-solid px-3" href="{{route('contact-us')}}" ><span class="d-md-none d-lg-inline">Get a Free Quote</span></a> -->
                <a href="{{route('contact-us')}}" class="btn btn-rounded btn-primary bw-2 bold text-contrast" href="#" target="_blank">Get a Free Quote</a>
            </li>
            <!-- Mobile Navigation -->
            <li class="st-nav-section st-nav-mobile nav-item">
                <button class="st-root-link navbar-toggler" type="button"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button>
                <div class="st-popup">
                    <div class="st-popup-container">
                        <a class="st-popup-close-button">Close</a>
                        <div class="st-dropdown-content-group">
                            <div class="row">
                                <div class="col me-4">
                                    <a class="regular text-success" href="#"><i class="fas fa-hand-holding-usd me-2"></i> We Serve </a><a class="regular text-warning" href="#"><i class="fas fa-hand-holding-usd me-2"></i> Portfolio </a>
                                </div>
                                <div class="col me-4">
                                    <a class="regular text-info" href="#"><i class="far fa-question-circle me-2"></i> Blog</a> <a class="regular text-info" href="#"><i class="far fa-building me-2"></i>Company</a>
                                </div>
                            </div>
                        </div>
                        <div class="st-dropdown-content-group border-top bw-2 overflow-y-scroll">
                            <h4 class="text-uppercase regular">Services</h4>
                            <div class="row">
                                <div class="col me-4">
                                    <a class="dropdown-item" target="_blank" href="#">iPhone App Development</a>
                                    <a class="dropdown-item" target="_blank" href="#">Android App Development</a>
                                    <a class="dropdown-item" target="_blank" href="#">UI/UX Design</a>
                                    <a class="dropdown-item" target="_blank" href="#">Cross-Platform App Development</a>
                                    <a class="dropdown-item" target="_blank" href="#">iOS App Design</a>
                                    <a class="dropdown-item" target="_blank" href="#">Mobile App Development</a>
                                    <a class="dropdown-item" target="_blank" href="#">Web App Development</a>
                                    <a class="dropdown-item" target="_blank" href="#">Enterprise App Development</a>
                                    <a class="dropdown-item" target="_blank" href="#">MVP for Startups</a>
                                    <a class="dropdown-item" target="_blank" href="#">Mobile App Consulting</a>
                                </div>
                            </div>
                        </div>
                        <div class="st-dropdown-content-group bg-light b-t">
                            <a href="{{route('hire-developer')}}">Hire Us<i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>

    <div class="st-dropdown-root">
        <div class="st-dropdown-bg">
            <div class="st-alt-bg"></div>
        </div>
        <div class="st-dropdown-arrow"></div>
        <div class="st-dropdown-container">
        @foreach(frontHeaderSub() as $sub)
            <div class="st-dropdown-section" data-dropdown="{{$sub['data-dropdown']}}">
                <div class="st-dropdown-content">
                    @if(isset($sub['div-section']))
                    <div class="st-dropdown-content-group">
                    <div class="row">
                        {{! $subManuListCount = count($sub['sub-menu-list'])/$sub['div-section'] }}
                        {{!- $colDiv=1 }}
                        <div class="col me-4">
                        @foreach($sub['sub-menu-list'] as $sKey => $sManu)
                        @if($subManuListCount < $colDiv)
                            {{!- $colDiv=1 }}
                        </div>
                        <div class="col me-4">
                        @endif
                            {{!- $colDiv = $colDiv+1 }}
                            <a class="dropdown-item" href="{{route($sub['routeName'], $sManu->slug)}}">{{$sManu->manu_name}}</a>
                        @endforeach
                        </div>
                    </div>
                    </div>
                        @if($sub['data-dropdown']=='Services')
                        <div class="st-dropdown-content-group">
                            <div class=""><a class="dropdown-item " href="{{route('hire-developer')}}"> <i class="fas fa-hand-holding-usd icon"></i> Hire mobile app developer </a> </div>
                        </div>
                        @endif
                        
                    @else
                    <div class="st-dropdown-content-group">
                        @foreach($sub['sub-menu-list'] as $subManu)
                        @if(isset($subManu['icon-class']))
                        <a class="dropdown-item" href="{{isset($subManu['routeName'])?route($subManu['routeName']):''}}">
                            <div class="d-flex align-items-center mb-3">
                                <div class="bg-dark text-contrast icon-md center-flex rounded-circle me-2">
                                    <i class="{{$subManu['icon-class']}}"></i>
                                </div>
                                <div class="flex-fill">
                                    <h3 class="link-title m-0">{{$subManu['name']}}</h3>
                                </div>
                            </div>
                        </a>
                        @endif
                        @endforeach
                    </div>
                    <div class="st-dropdown-content-group">
                        @foreach($sub['sub-menu-list'] as $subManu)
                        @if(!isset($subManu['icon-class']))
                        <a class="dropdown-item" href="{{isset($subManu['routeName'])?route($subManu['routeName']):''}}">{{$subManu['name']}} </a>
                        @endif
                        @endforeach
                    </div>
                    @endif
                    
                </div>
            </div>
        @endforeach
        </div>
    </div>
</nav>   

   
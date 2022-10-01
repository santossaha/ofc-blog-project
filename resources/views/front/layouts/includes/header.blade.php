 <!-- header Start -->
 <header class="header">
   <div class="container">
       <nav class="navbar sub-navbar navbar-expand-lg navbar-light">
            <a title="Expert App Devs" class="navbar-brand" href="{{route('home')}}">
               <img src="{{ asset('front') }}/images/expert-app-devs.svg" alt="best mobile app development company" title="top mobile app development companies" width="300" height="62">
            </a>
           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon">
                   <span></span>
                   <span></span>
                   <span></span>
                   <span></span>
               </span>
           </button>
           <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item {{ activeFrontMenu('solution') }} {{ (Request::segment(1) == "solutions") ? "active" : "" }}">
                        <a title="Solutions" class="nav-link" href="{{ route('solution') }}">Solutions</a>
                    </li>
                    <li class="nav-item dropdown position-static {{ (Request::segment(1) == "mobile-app-development") ? "active" : "" }}">
                       {{-- <a title="Services" href="{{route('services')}}" class="nav-link dropdown-toggle" data-toggle="dropdown" data-target="{{route('services')}}">Services</a> --}}
                       <a title="Services" href="{{route('detail','mobile-app-development' )}}" class="nav-link dropdown-toggle" data-toggle="dropdown" data-target="{{route('detail','mobile-app-development' )}}">Services</a>
                       <div class="dropdown-menu w-100 top-auto">
                           <div class="container">
                               <div class="row justify-content-between">
                                   <div class="col-lg-4 info">
                                       <span class="mega-menu-title">Services</span>
                                   </div>
                                   <div class="col-lg-8 col-xl-8">
                                        <div class="row">
                                            <div class="col-lg-6">
                                              <ul class="nav flex-column">
                                                @foreach(allServicesDataArray() as $s)
                                                @if($loop->odd)
                                                  <li class="nav-item {{ activeFrontMenu($s->slug) }}">
                                                       <a title="{{ $s->title }}" class="nav-link" href="{{route('detail',$s->slug )}}">{{ $s->title }}</a>
                                                   </li>
                                                   @endif
                                                @endforeach
                                               </ul>
                                            </div>
                                            <div class="col-lg-6">
                                              <ul class="nav flex-column">
                                                @foreach(allServicesDataArray() as $s)
                                                @if($loop->even)
                                                  <li class="nav-item {{ activeFrontMenu($s->slug) }}">
                                                       <a title="{{ $s->title }}" class="nav-link" href="{{route('detail',$s->slug )}}">{{ $s->title }}</a>
                                                   </li>
                                                   @endif
                                                @endforeach
                                              </ul>
                                            </div>
                                        </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                    </li>
                    <li class="nav-item dropdown position-static {{ activeFrontMenu('technology') }} {{ (Request::segment(1) == "technologies" )? "active" : "" }}">
                      <a title="Technology" href="{{ route('technology') }}" class="nav-link dropdown-toggle" data-toggle="dropdown" data-target="#">Technology</a>
                      <div class="dropdown-menu w-100 top-auto">
                          <div class="container">
                              <div class="row justify-content-between">
                                  <div class="all-technology d-flex flex-wrap">
                                      @foreach(allTechnologyData() as $t)
                                      <div class="icon {{ activeFrontMenu($t->slug) }}">
                                          <a title="{{$t->title}}" class="platforms-logo" href="{{route('technology.detail',$t->slug)}}">
                                            <img src="{{ asset("sitebucket/technology")."/".$t->image }}" alt="{{$t->title}}" title="{{$t->title}}">
                                            <span>{{$t->short_title}}</span>
                                          </a>
                                      </div>
                                      @endforeach
                                       <div class="icon ">
                                        <a title="contact us" class="platforms-logo" href="{{route('contact-us')}}">
                                          <img src="{{asset('front/images/contact_ico_menu.png')}}" alt="contact us" title="contact us">
                                          <span>contact us</span>
                                        </a>
                                    </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                    </li>
                    <li class="nav-item {{ activeFrontMenu('portfolio') }}">
                       <a title="Portfolio" class="nav-link" href="{{ route('portfolio') }}">Portfolio</a>
                    </li>
                    <li class="nav-item {{ activeFrontMenu('blog') }} {{ (Request::segment(1) != "" && isset($blog)) ? "active" : "" }}">
                       <a title="Blog" class="nav-link" href="{{route('blog')}}">Blog</a>
                    </li>
                    <li class="nav-item {{ activeFrontMenu('about-us') }}">
                        <a title="About" class="nav-link" href="{{route('about-us')}}">About</a>
                    </li>
                    <li class="nav-item btn">
                       <a title="Contact Us" class="nav-link" href="{{ route('contact-us') }}">Contact Us</a>
                    </li>
               </ul>
           </div>
       </nav>
   </div>
</header>

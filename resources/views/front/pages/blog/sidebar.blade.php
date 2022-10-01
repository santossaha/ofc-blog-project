{{-- <div class="col-md-4 pull-right"> --}}
{{-- <div class="widget top">
        <div class="search">
            <form method="get" action="{{ route('home') }}">
                <input class="searchText" name="s" type="text" placeholder="Search here..">
                <input class="searchBtn" type="submit" alt="Search" value="" style="background-image: url({{ asset('front/images/searchicon.png') }});">
            </form>
        </div>
    </div> --}}
{{-- <div class="widget">
        <h3>Recent Posts</h3>
        <div class="widget-wapper">
            @foreach (recentPostData() as $recent)
            <div class="recent-post">
                <div class="thumb-img">
                    <img src="{{ asset('sitebucket/blog')."/".$recent->image }}" alt="post_img" class="lazyloaded"
                        data-ll-status="loaded"><noscript><img src="{{ asset('sitebucket/blog')."/".$recent->image }}"
                            alt="post_img"></noscript>
                </div>
                <div class="rec-text">
                    <a href="{{ route('blog.detail',$recent->slug) }}">{{ $recent->title }}</a>
                </div>
            </div>
            @endforeach
        </div>
    </div> --}}
<div class="col-md-4 order-1 order-md-2 mt-4 mt-md-0 d-none">
    <div class="sidebar-detail ml-md-auto">
        <h2 class="mb-4 d-flex align-items-center flex-wrap" id="cat-toggal">Category <span class="cate-button"></span>
        </h2>
        <ul class="cat-inner">
            @foreach (blogCategoryData() as $c)
                <li> <a href="{{ route('category.blog', $c->slug) }}"
                        class="{{ isset($blog->id) && in_array($c->id, blogCategoryIds($blog->id)) ? 'active' : '' }} {{ isset($data['category_name']) && $c->name == $data['category_name'] ? 'active' : '' }}">{{ $c->name }}
                        [{{ count($c->blogs) }}] </a></li>
            @endforeach
        </ul>
    </div>
    @if (in_array(Route::currentRouteName(), ['blog.detail']))
        <div class="sidebar-detail ml-md-auto mt-4 d-sm-block">
            <a class="twitter-timeline" data-width="500" data-height="500" data-theme="light"
                href="https://twitter.com/ExpertAppDevs?ref_src=twsrc%5Etfw" data-chrome="nofooter">Tweets by
                ExpertAppDevs</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
    @endif
</div>
{{-- <div class="col-md-4 order-3 order-md-2 mt-4 mt-md-0 d-sm-none" style="display: block !important;">
        @if (in_array(Route::currentRouteName(), ['blog.detail']))
        <div class="sidebar-detail ml-md-auto mt-4" >
            <a class="twitter-timeline" data-width="500" data-height="500" data-theme="light" href="https://twitter.com/ExpertAppDevs?ref_src=twsrc%5Etfw">Tweets by ExpertAppDevs</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
        @endif
    </div> --}}

@extends('front.layout.app')
@push('meta')
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="description" content="{{ $pageDetail->meta_description }}" />
    <meta name="keywords" content="{{ $pageDetail->meta_keyword }}">
    <meta name="robots" content="{{ $pageDetail->meta_robots }}" />
    <link rel="canonical" href="{{ url()->current() }}" />
    <meta property="og:url" content="{{ url()->current() }}" />

    
    @if ($blogList->currentPage() == 1 && $blogList->currentPage() < $blogList->lastPage())
        <link rel="next" href="{{ route('blogs') }}/page/{{ $blogList->currentPage() + 1 }}" />
    @elseif($blogList->currentPage() > 1 && $blogList->currentPage() < $blogList->lastPage())
        <link rel="prev" href="{{ route('blogs') }}/page/{{ $blogList->currentPage() - 1 }}" />
        <link rel="next" href="{{ route('blogs') }}/page/{{ $blogList->currentPage() + 1 }}" />
    @elseif($blogList->currentPage() > 1 && $blogList->currentPage() == $blogList->lastPage())
        <link rel="prev" href="{{ route('blogs') }}/page/{{ $blogList->currentPage() - 1 }}" />
    @endif

    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="{{ $pageDetail->meta_title }}" />
    <meta property="og:description" content="{{ $pageDetail->meta_description }}" />
    <meta property="og:keywords" content="{{ $pageDetail->meta_keyword }}" />
    <meta property="og:image:width" content="750" />
    <meta property="og:image:height" content="375" />
    <meta name="twitter:card" content="summary_large_image" />
@endpush
@section('content')
<header class="page header text-contrast bg-primary" style="">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1 class="bold display-md-4 text-contrast mb-4">Doorway Blog</h1>
                <p class="lead text-contrast">What our awesome community is talking about</p>
            </div>
        </div>
    </div>
</header>
<div class="position-relative">
    <div class="shape-divider shape-divider-bottom shape-divider-fluid-x text-contrast"><svg viewBox="0 0 2880 48" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z"></path>
        </svg></div>
</div>
<section class="section">
    <div class="container">
    <div class="row gap-y">
            <div class="col-lg-4">
                <h4 class="mb-3 bold">Search</h4>
                <form class="form search-box">
                    <div class="input-group">
                        <input type="text" name="blog_search" id="blog_search" class="form-control rounded-circle-left shadow-none" placeholder="Search form..." required> 
                        <button class="btn rounded-circle-right btn-contrast border-input" type="submit" data-loading-text="Searching ...">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </form>
            </div>
            <div class="col-lg-8">
                <h4 class="mb-3 bold">Tags</h4>
                <div class="tags">
                    <ul class="list-unstyled d-flex flex-wrap flex-row my-4">
                        @foreach($categoryes as $catRow)
                        <li><a href="#" class="badge rounded-pill badge-outline-dark me-2 blog_filter" data-filter="{{$catRow->id}}">{{$catRow->name}}</a></li>
                        @endforeach
                        
                    </ul>
                </div>
            </div>
        </div>
        <div class="row gap-y">
            <!-- @foreach ($blogList as $blog)
                <x-front.blog-list :title="$blog->title" :publishBy="$blog->publish_by" :publishDate="$blog->publish_date" :description="readMore($blog->description)"
                    :blogImage="(!blank($blog->image) && empty($blog->image)) ? getImage($blog->image) : 'https://picsum.photos/350/200/?random&gravity=north'" :blogDetailUrl="route('blog.detail', $blog->slug)" />
            @endforeach -->
        </div>
        <div class="row gap-y" id="blog-list-data">
            <!-- Results -->
        </div>
        <!-- Data Loader -->
        <div class="auto-load text-center">
            <svg version="1.1" id="L9" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                x="0px" y="0px" height="60" viewBox="0 0 100 100" enable-background="new 0 0 0 0" xml:space="preserve">
                <path fill="#000"
                    d="M73,50c0-12.7-10.3-23-23-23S27,37.3,27,50 M30.9,50c0-10.5,8.5-19.1,19.1-19.1S69.1,39.5,69.1,50">
                    <animateTransform attributeName="transform" attributeType="XML" type="rotate" dur="1s"
                        from="0 50 50" to="360 50 50" repeatCount="indefinite" />
                </path>
            </svg>
        </div>
       
        <!-- @if ($blogList->lastPage() > 1)
        <nav class="nav justify-content-center mt-5">
            <a class="btn btn-outline-primary btn-rounded me-5 {{ $blogList->currentPage() == 1 ? ' d-none' : '' }}" href="{{ $blogList->currentPage() - 1 == 1 ? route('blogs') : route('blogs.page', $blogList->currentPage() - 1) }}"><i class="fas fa-angle-left me-3"></i> Previous</a> 

            @if ($blogList->currentPage() !== $blogList->lastPage())
                <a class="btn btn-outline-primary btn-rounded {{ ($blogList->currentPage() == $blogList->lastPage()) ? ' d-none' : '' }}" href="{{ route('blogs.page', $blogList->currentPage() + 1) }}">Next <i class="fas fa-angle-right ms-3"></i></a>
            @endif
        </nav>
        @endif -->
    </div>
</section>
@endsection

@push('js')
<script>
    // $(document).on('keyup', '#blog_search',function(){
    //     console.log($('#blog_search').val());
        
    // });

    // function blogFilter(val){
    //     $("#blog-list-data").html('');
    //     page = 1;
    //     infinteLoadMore(page,val);
    // }
    $(document).on('click', '.blog_filter', function(){
        var val =$(this).attr('data-filter');
        console.log(val);
        $("#blog-list-data").html('');
        page = 1;
        infinteLoadMore(page,val);
    });

var ENDPOINT = "http://localhost.doorway.com/blogs/page/";
var page = 1;
var ajaxCall=true;
infinteLoadMore(page);
$(window).scroll(function () {
   
    if ($(window).scrollTop() + $(window).height() >= $(document).height()) {
        console.log('calling', page);
        console.log('ajaxCall', ajaxCall);
        if(ajaxCall){
            
            // if($('#blog_search').val()!=""){
            //     var page = 1;
            // }else{
            page++;
            // }
            ajaxCall=false;
            infinteLoadMore(page);
        }
    }
});
function infinteLoadMore(page, filterBy="") {
    console.log("filterBy",filterBy);
    if(filterBy!=""){
        var app_url=ENDPOINT + page +'/'+filterBy;
    }else{
        var app_url=ENDPOINT + page;
    }

    $.ajax({
        url: app_url,
        datatype: "html",
        type: "get",
        beforeSend: function () {
            $('.auto-load').show();
        }
    })
    .done(function (response) {
        ajaxCall=true;
        if (response.length == 0) {
            $('.auto-load').html("<h2>We don't have more data to display :</h2>");
            return;
        }
        $('.auto-load').hide();
        $("#blog-list-data").append(response);
    })
    .fail(function (jqXHR, ajaxOptions, thrownError) {
        console.log('Server error occured');
    });
}



</script>
@endpush
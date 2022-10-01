@extends('front.layouts.blog_view')

@section('content')
<section class="sub-heading blog-detail-heading light-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 id="blog_title"></h1>
                <span class="date" id="blog_publish_date"></span> <span class="by" id="blog_publish_by"></span>
            </div>
        </div>
        <div class="row blog-detail-banner">
            <div class="col-12">
                <img src="" id="blog_image" />
            </div>
        </div>
    
    </div>
</section>
<section class="section-space mt-5">
    <div class="container">
        <div class="row justify-content-center blog-detail">
            <div class="col-md-8 order-2 order-md-1 blog-info-wrapper" id="blog_description">

            </div>

        </div>
    </div>
</section>
@endsection
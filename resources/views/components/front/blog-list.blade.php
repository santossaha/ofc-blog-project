<div class="col-md-6 col-lg-4">
    <div class="card card-blog shadow-box shadow-hover border-0"><a href="{{$blogDetailUrl}}">
        <img class="card-img-top img-responsive" src="{{$blogImage}}" alt="{{$title}}"></a>
        <div class="card-body">
            <div class="d-flex align-items-center justify-content-between">
                <div class="author d-flex align-items-center">
                    <img class="author-picture rounded-circle icon-md shadow-box" src="{{ asset('front/img') }}/avatar/user.png" alt="...">
                    <p class="small bold my-0">{{$publishBy}}</p>
                </div>
                <nav class="nav">
                    <a href="javascript:;" class="d-flex align-items-center text-secondary me-3 blog-action blog-favorite">
                        <i class="fas fa-heart text-danger me-2"></i> 
                        <span class="small">347</span>
                    </a>
                    <a href="javascript:;" class="d-flex align-items-center text-secondary blog-action blog-bookmark">
                        <i class="far fa-bookmark text-warning me-2"></i> 
                        <span class="small">73</span>
                    </a>
                </nav>
            </div>
            <hr>
            <p class="card-title regular"><a class="text-primary" href="{{$blogDetailUrl}}">{{$title}}</a></p>
            <p class="card-text text-muted mt-0">{{$description}}</p>
            <p class="bold small text-primary my-0"><small>{{date('M d Y', strtotime($publishDate))}}</small></p>
        </div>
    </div>
</div>
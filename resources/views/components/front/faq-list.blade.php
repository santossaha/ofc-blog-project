<div class="card mb-3">
    <div class="card-header"><a href="#" class="card-title btn {{($fid!=1)?'collapsed':''}} " data-bs-toggle="collapse" data-bs-target="#v1-q{{$fid}}">
        <i class="fas fa-angle-down angle"></i> {{$question}}</a>
    </div>
    <div id="v1-q{{$fid}}" class="collapse {{($fid==1)?'show':''}}" data-bs-parent="#faqs-accordion">
        <div class="card-body">{!!$answer!!}</div>
    </div>
</div>
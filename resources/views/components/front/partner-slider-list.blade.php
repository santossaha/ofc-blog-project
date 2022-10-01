<section class="partners"><!-- pb-5 -->
    <div class="container pt-0 pb-5 b-b">
        <div class="swiper-container" data-sw-show-items="5" data-sw-space-between="30" data-sw-autoplay="2500"
            data-sw-loop="true">
            <div class="swiper-wrapper align-items-center">
                @foreach(getClintImageList() as $cltImg)
                <div class="swiper-slide">
                    <img src="{{ asset('front/img').$cltImg['image_path'] }}" class="img-responsive" alt="{{$cltImg['image_alt']}}" style="max-height: 60px">
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

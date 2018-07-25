 <!-- ##### Hero Area Start ##### -->
 <section class="hero-area">
    <div class="hero-slides owl-carousel">
        @foreach($homeBanners as $v)
        <!-- Single Hero Slide -->
        <div class="single-hero-slide bg-overlay img img-responsive" style="background-image: url('{{$v->image}}');">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-md-12">
                        <div class="hero-slides-content text-center">
                            <h2 data-animation="bounceInDown" class="title-regular" data-delay="100ms">{{$v->title}}</h2>
                            <h6 data-animation="bounceInUp" class="subtitle-regular size-26px" data-delay="400ms">{{$v->subtitle}}</h6>
                            @if($v->button)
                                <a href="#" class="btn cryptos-btn" data-animation="fadeInUp" data-delay="700ms">{!!$v->button!!}</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>
<!-- ##### Hero Area End ##### -->
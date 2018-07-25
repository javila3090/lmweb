@extends('layouts.base')

@section('content')

<!-- ##### Breadcumb Area End ##### -->
<div class="breadcumb-area">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12 col-md-12">
                <div class="breadcumb-text text-center">
                    <h2>Sobre nosotros</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### About Area Start ##### -->
<section class="cryptos-about-area section-padding-100-0">
    <div class="container">
        <div class="row align-items-center" >
            <div class="col-12 col-md-6">
                <div class="about-content mb-100">
                    <div class="section-heading wow bounceInUp">
                        <h3>{{$aboutUs->title}}</h3>
                        <h5>{{$aboutUs->subtitle}}</h5>
                        <p>{!!$aboutUs->content!!}</p>                        
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="about-thumbnail mb-100">
                    <img src="{{$aboutUs->image}}" class="img img-responsive wow bounceInDown">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### About Area End ##### -->

<div class="cryptos-guide-line section-padding-100-0 bg-img bg-overlay" style="background-image: url('img/lm_consulting_5.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 mb-50">
                <div class="about-thumbnail">
                    <img src="{{$mission->image}}" class="img img-responsive wow fadeInRightBig" data-wow-delay="0.4s" alt="">
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="section-heading white  wow fadeInLeftBig" data-wow-delay="0.5s">
                    <h3 class="mb-4">{{$mission->title}}</h3>
                    <h5 class="mb-2 text-justify" style="font-weight: bolder;">{!!$mission->content!!}</h5>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ##### About Area Start ##### -->
<section class="cryptos-video-area section-padding-100-0 mb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md-6">
                <div class="about-content mb-100">
                    <div class="section-heading wow flipInY">
                        <h3>{{$vision->title}}</h3>
                        <h5>{{$vision->subtitle}}</h5>
                        <p>{!!$vision->content!!}</p>                    
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="video-area wow flipInX">
                    <img src="{{$vision->image}}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ##### About Area End ##### -->

@if($clients)
<section class="cryptos-blog-area section-padding-50-120" id="clients">
    <div class="container">
        <div class="row align-items-center">
            <div class="container">
                <div class="section-heading text-center mx-auto">
                    <h3>{{$clients->title}}</h3>
                </div>
                <section class="customer-logos slider">
                    @foreach($clientBanners as $item)
                    <div class="slide wow rotateIn" data-wow-delay="0.5s"><img src="{{$item->image}}"></div>
                    @endforeach
                </section>
            </div>
        </div>
    </div>
</section>
@endif

@if($partners)
<section class="cryptos-blog-area section-padding-50-120">
    <div class="container">
        <div class="row align-items-center">
            <div class="container">
                <div class="section-heading text-center mx-auto">
                    <h3>{{$partners->title}}</h3>
                </div>                
                <div class="guideline-content wow rollIn">
                    @foreach($partnerBanners as $item)  
                    <div class="col-12 col-md-3">                  
                        <div class="single-step d-flex">                            
                            <div class="step-content">
                                <img src="{{$item->image}}">
                            </div>
                        </div>                    
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endif

@endsection
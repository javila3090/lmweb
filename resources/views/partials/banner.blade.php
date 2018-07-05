<div id="carousel-example-generic2" class="carousel slide carousel-fullscreen carousel-fade" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        @foreach( $homeBanners as $v )
        <li data-target="#carousel-example-generic" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
        @endforeach
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        @foreach($homeBanners as $v)
        <div class="item {{ $loop->first ? ' active' : '' }}" style="background-image: url('{{$v->image}}');">
            <div class="overlay"></div>
            <div class="carousel-caption">
                <h1 class="super-heading wow bounceInDown" data-wow-delay="0.5s">{{$v->title}}</h1>
                <h1 class="super-heading wow bounceInLeft" data-wow-delay="1s">{{$v->subtitle}}</h1>
                <br/>
                <p class="super-paragraph wow bounceInRight" data-wow-delay="1s" style="font-size: 20px; line-height: 1.5;">{{$v->caption}}</p>
            </div>
        </div>        
        @endforeach
    </div>
</div>
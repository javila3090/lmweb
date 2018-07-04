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
                <p class="super-paragraph wow bounceInUp" data-wow-delay="1s">{{$v->subtitle}}</p>
            </div>
        </div>        
        @endforeach
    </div>
</div>
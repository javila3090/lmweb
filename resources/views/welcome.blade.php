@extends('layouts.base')

@section('content')
<script type='text/javascript'>var centreGot = false;</script>
{!! $map['map_js'] !!}

<!-- About -->
<section id="about" class="home-section bg-white">
  <div class="container">
    <div class="row">
      <div class="col-md-offset-2 col-md-8">
        <div class="section-heading">
          <h2>{{$aboutUs->title}}</h2>
          <div class="heading-line"></div>
          <p>{{$aboutUs->subtitle}}</p>
        </div>
      </div>
    </div>
    <div class="row wow fadeInUp">
      <div class="col-md-6 about-img">
        <img src="{{$aboutUs->image}}" alt="" class="img img-responsive img-circle">
      </div>

      <div class="col-md-6 content">
        <p>
          {!!$aboutUs->content!!}
        </p>
      </div>
    </div>
  </div>
</section>

<!-- Parallax 1 -->
<section id="parallax1" class="home-section parallax" data-stellar-background-ratio="0.5">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div>
          <h2 class="wow bounceInDown" data-wow-delay="0.5s">CONOCE LAS OFERTAS QUE TENEMOS PARA TI</h2>
          <p class="lead wow bounceInUp" data-wow-delay="1s">¡Agenda tu sesión GRATIS!</p>          
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-2 col-md-offset-5">
        <button class="btn btn-theme btn-lg btn-block size-12px"><b>Promociones</b></button>
      </div>
    </div>
  </div>
</section>

<!-- Team -->
<section id="services" class="home-section bg-white">
  <div class="container">
    <div class="row">
      <div class="col-md-offset-2 col-md-8">
        <div class="section-heading">
          <h2>Servicios</h2>
          <div class="heading-line"></div>            
        </div>
      </div>
    </div>
    @foreach ($servicesBanners->chunk(4) as $chunk)
    <div class="row">
      @foreach($chunk as $item)
      <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" style="margin-top: 50px;">
        <div class="box-team wow bounceInUp" data-wow-delay="0.1s">
          <img src="{{$item->image}}" alt="" class="img-circle img-responsive" style="height:300px; width:100%;"/>
          <div class="super-paragraph" style="min-height: 50px; text-transform: uppercase; line-height: 1.2; font-size: 20px; font-weight: bold;"><p>{{$item->title}}</p></div>
          <button data-toggle="collapse" class="btn btn-theme" data-target="#{{$item->id}}">Ver más</button>
          <div id="{{$item->id}}" class="collapse text-left" style="padding-top: 20px;">
            <div class="col-md-12"> 
              {!!$item->caption!!}
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    @endforeach
  </div>
</section>

<!-- Gallery -->
<section id="gallery" class="home-section bg-gray">
  <div class="container">
    <div class="row">
      <div class="col-md-offset-2 col-md-8">
        <div class="section-heading">
          <h2>{{$gallery->title}}</h2>
          <div class="heading-line"></div>
          <p>{{$gallery->subtitle}}</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">

        @include('partials.gallery')

      </div>
    </div>
  </div>
</section>

<!-- Parallax 2 -->
<section id="parallax2" class="home-section parallax" data-stellar-background-ratio="0.5">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <ul class="clients" style="padding: 20px;">

        </ul>
      </div>
    </div>
  </div>
</section>

<!-- Contact -->
<section id="contact" class="home-section bg-gray">
  <div class="container">
    <div class="row">
      <div class="col-md-offset-2 col-md-8">
        <div class="section-heading">
          <h2>{{$contact->title}}</h2>
          <div class="heading-line"></div>
          <h3>{{$contact->subtitle}}</h3>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6">
        <div id="sendmessage">Su mensaje ha sido enviado</div>
        <div id="errormessage"></div>

        <form action="" method="post" class="form-horizontal contactForm" role="form">
          <div class="col-md-offset-2 col-md-8">
            <div class="form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Su nombre" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
              <div class="validation"></div>
            </div>
          </div>

          <div class="col-md-offset-2 col-md-8">
            <div class="form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Su email" data-rule="email" data-msg="Please enter a valid email" />
              <div class="validation"></div>
            </div>
          </div>

          <div class="col-md-offset-2 col-md-8">
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validation"></div>
            </div>
          </div>

          <div class="col-md-offset-2 col-md-8">
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Mensaje"></textarea>
              <div class="validation"></div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-offset-2 col-md-8">
              <button type="submit" class="btn btn-theme btn-lg btn-block">Enviar mensaje</button>
            </div>
          </div>
        </form>

      </div>
      <div class="col-md-6">
        {!! $map['map_html'] !!} 
      </div>
    </div>

  </div>
</section>

<!-- Bottom widget -->
<section id="bottom-widget" class="home-section bg-white">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="contact-widget wow bounceInLeft">
          <i class="fa fa-map-marker fa-4x"></i>
          <h5>Dirección</h5>
          <p>
            {{$companyInfo->address}}
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="contact-widget wow bounceInUp">
          <i class="fa fa-phone fa-4x"></i>
          <h5>Teléfonos</h5>
          <p>
            {{$companyInfo->phone_1}}<br />{{$companyInfo->phone_2}}
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="contact-widget wow bounceInRight">
          <i class="fa fa-envelope fa-4x"></i>
          <h5>Correo electrónico</h5>
          <p>
            {{$companyInfo->email_1}}<br />{{$companyInfo->email_2}}
          </p>
        </div>
      </div>
    </div>
    <div class="row mar-top30">
      <div class="col-md-12">
        <h5>Búscanos en redes sociales</h5>
        <ul class="social-network">
          <li><a href="#">
            <span class="fa-stack fa-2x">
              <i class="fa fa-circle fa-stack-2x"></i>
              <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
            </span></a>
          </li>
          <li><a href="#">
            <span class="fa-stack fa-2x">
              <i class="fa fa-circle fa-stack-2x"></i>
              <i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
            </span></a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>
@endsection
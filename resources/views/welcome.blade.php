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
    <div class="row">
      <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
        <div class="box-team wow bounceInUp" data-wow-delay="0.1s">
          <img src="img/trat-1.jpg" alt="" class="img-circle img-responsive" />
          <h4>Médico</h4>
          <button data-toggle="collapse" class="btn btn-theme" data-target="#medico">Ver más</button>
          <div id="medico" class="collapse" style="padding-top: 20px;">
            Lorem ipsum dolor text....
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" data-wow-delay="0.3s">
        <div class="box-team wow bounceInUp">
          <img src="img/trat-2.jpg" alt="" class="img-circle img-responsive" />
          <h4>Estético</h4>
          <button data-toggle="collapse" class="btn btn-theme" data-target="#estetico">Ver más</button>
          <div id="estetico" class="collapse" style="padding-top: 20px;">
            Lorem ipsum dolor text....
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" data-wow-delay="0.5s">
        <div class="box-team wow bounceInUp">
          <img src="img/trat-3.jpg" alt="" class="img-circle img-responsive" />
          <h4>Depilación</h4>
          <button data-toggle="collapse" class="btn btn-theme" data-target="#depilacion">Ver más</button>
          <div id="depilacion" class="collapse" style="padding-top: 20px;">
            Lorem ipsum dolor text....
          </div>  
        </div>
      </div>
      <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" data-wow-delay="0.7s">
        <div class="box-team wow bounceInUp">
          <img src="img/trat-4.jpg" alt="" class="img-circle img-responsive" />
          <h4>Spa</h4>
          <button data-toggle="collapse" class="btn btn-theme" data-target="#spa">Ver más</button>
          <div id="spa" class="collapse" style="padding-top: 20px;">
            Lorem ipsum dolor text....
          </div>  
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-3 col-md-4 col-md-offset-4 col-lg-4 col-lg-offset-4" data-wow-delay="0.7s" style="margin-top: 50px;">
        <div class="box-team wow bounceInUp">
          <img src="img/trat-4.jpg" alt="" class="img-circle img-responsive" />
          <h4>Spa</h4>
          <button data-toggle="collapse" class="btn btn-theme" data-target="#spa">Ver más</button>
          <div id="spa" class="collapse" style="padding-top: 20px;">
            Lorem ipsum dolor text....
          </div>  
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Services -->
<section id="promociones" class="home-section bg-white">
  <div class="container">
    <div class="row">
      <div class="col-md-offset-2 col-md-8">
        <div class="section-heading">
          <h2>{{$services->title}}</h2>
          <div class="heading-line"></div>
          <p>{{$services->subtitle}}</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div id="carousel-service" class="service carousel slide">

          <!-- slides -->
          <div class="carousel-inner">
            @foreach( $servicesBanners as $v )
            <div class="item {{ $loop->first ? ' active' : '' }}">
              <div class="row">
                <div class="col-sm-12 col-md-offset-2 col-md-4">
                  <div class="wow bounceInLeft">
                    <h4>{{$v->title}}</h4>
                    <p>{!!$v->caption!!}</p>
                  </div>
                </div>
                <div class="col-sm-12 col-md-5">
                  <div class="screenshot wow bounceInRight">
                    <img src="{{$v->image}}" class="img-responsive" alt="" />
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
          <br/>
          <br/>
          <!-- Indicators -->
          <ol class="carousel-indicators">
            @foreach( $servicesBanners as $v )
            <li data-target="#carousel-service" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
            @endforeach
          </ol>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Works -->
<section id="portfolio" class="home-section bg-gray">
  <div class="container">
    <div class="row">
      <div class="col-md-offset-2 col-md-8">
        <div class="section-heading">
          <h2>Works</h2>
          <div class="heading-line"></div>
          <p>We’ve been building unique digital products, platforms, and experiences for the past 6 years.</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">

        <ul id="og-grid" class="og-grid">
          <li>
            <a href="#" data-largesrc="img/works/1.jpg" data-title="Portfolio title" data-description="Duo te dico volutpat, unum elit oblique per id. Ne duo mollis sapientem intellegebat. Per at augue vidisse percipit, pri vocibus assueverit interesset ut, no dolore luptatum incorrupte nec. In mentitum forensibus nec, nibh eripuit ut pri, tale illud voluptatum ut sea. Sed oratio repudiare ei, cum an magna labitur, eu atqui augue mei. Pri consul detracto eu, solet nusquam accusam ex vim, an movet interesset necessitatibus mea.">
              <img src="img/works/thumbs/1.jpg" alt=""/>
            </a>
          </li>
          <li>
            <a href="#" data-largesrc="img/works/2.jpg" data-title="Portfolio title" data-description="Mea an eros periculis dignissim, quo mollis nostrum elaboraret et. Id quem perfecto mel, no etiam perfecto qui. No nisl legere recusabo nam, ius an tale pericula evertitur, dicat phaedrum qui in. Usu numquam legendos in, voluptaria sadipscing ut vel. Eu eum mandamus volutpat gubergren, eos ad detracto nominati, ne eum idque elitr aliquam.">
              <img src="img/works/thumbs/2.jpg" alt=""/>
            </a>
          </li>
          <li>
            <a href="#" data-largesrc="img/works/3.jpg" data-title="Portfolio title" data-description="Vim ad persecuti appellantur. Eam ignota deterruisset eu, in omnis fierent convenire sed. Ne nulla veritus vel, liber euripidis in eos. Postea comprehensam vis in, detracto deseruisse mei ea. Ex sadipscing deterruisset concludaturque quo.">
              <img src="img/works/thumbs/3.jpg" alt="img01"/>
            </a>
          </li>
          <li>
            <a href="#" data-largesrc="img/works/4.jpg" data-title="Portfolio title" data-description="In mentitum forensibus nec, nibh eripuit ut pri, tale illud voluptatum ut sea. Sed oratio repudiare ei, cum an magna labitur, eu atqui augue mei. Pri consul detracto eu, solet nusquam accusam ex vim, an movet interesset necessitatibus mea.">
              <img src="img/works/thumbs/4.jpg" alt="img01"/>
            </a>
          </li>
          <li>
            <a href="#" data-largesrc="img/works/5.jpg" data-title="Portfolio title" data-description="Duo te dico volutpat, unum elit oblique per id. Ne duo mollis sapientem intellegebat. Per at augue vidisse percipit, pri vocibus assueverit interesset ut, no dolore luptatum incorrupte nec. In mentitum forensibus nec, nibh eripuit ut pri, tale illud voluptatum ut sea">
              <img src="img/works/thumbs/5.jpg" alt="img01"/>
            </a>
          </li>
          <li>
            <a href="#" data-largesrc="img/works/6.jpg" data-title="Portfolio title" data-description="Id elit saepe pro. In atomorum constituam definitionem quo, at torquatos sadipscing eum, ut eum wisi meis mentitum. Probo feugiat ea duo. An usu platonem instructior, qui dolores inciderint ad. Te elit essent mea, vim ne atqui legimus invenire, ad dolor vitae sea.">
              <img src="img/works/thumbs/6.jpg" alt="img01"/>
            </a>
          </li>
          <li>
            <a href="#" data-largesrc="img/works/7.jpg" data-title="Portfolio title" data-description="Duo te dico volutpat, unum elit oblique per id. Ne duo mollis sapientem intellegebat. Per at augue vidisse percipit, pri vocibus assueverit interesset ut, no dolore luptatum incorrupte nec. In mentitum forensibus nec, nibh eripuit ut pri, tale illud voluptatum ut sea. Sed oratio repudiare ei, cum an magna labitur, eu atqui augue mei.">
              <img src="img/works/thumbs/7.jpg" alt="img01"/>
            </a>
          </li>
          <li>
            <a href="#" data-largesrc="img/works/8.jpg" data-title="Portfolio title" data-description="No nisl legere recusabo nam, ius an tale pericula evertitur, dicat phaedrum qui in. Usu numquam legendos in, voluptaria sadipscing ut vel. Eu eum mandamus volutpat gubergren, eos ad detracto nominati, ne eum idque elitr aliquam.">
              <img src="img/works/thumbs/8.jpg" alt="img01"/>
            </a>
          </li>
          <li>
            <a href="#" data-largesrc="img/works/9.jpg" data-title="Portfolio title" data-description="Lorem ipsum dolor sit amet, ex pri quod ferri fastidii. Mazim philosophia eum ad, facilisis laboramus te est. Eam magna fabellas ut. Ne vis diceret accumsan salutandi, pro in impedit accusamus dissentias, ut nonumy eloquentiam ius.">
              <img src="img/works/thumbs/9.jpg" alt="img01"/>
            </a>
          </li>
          <li>
            <a href="#" data-largesrc="img/works/10.jpg" data-title="Portfolio title" data-description="Duo te dico volutpat, unum elit oblique per id. Ne duo mollis sapientem intellegebat. Per at augue vidisse percipit, pri vocibus assueverit interesset ut, no dolore luptatum incorrupte nec. In mentitum forensibus nec, nibh eripuit ut pri, tale illud voluptatum ut sea. Sed oratio repudiare ei, cum an magna labitur, eu atqui augue mei. Pri consul detracto eu, solet nusquam accusam ex vim.">
              <img src="img/works/thumbs/10.jpg" alt="img01"/>
            </a>
          </li>
          <li>
            <a href="#" data-largesrc="img/works/11.jpg" data-title="Portfolio title" data-description="Vim ad persecuti appellantur. Eam ignota deterruisset eu, in omnis fierent convenire sed. Ne nulla veritus vel, liber euripidis in eos. Postea comprehensam vis in, detracto deseruisse mei ea. Ex sadipscing deterruisset concludaturque quo.">
              <img src="img/works/thumbs/11.jpg" alt="img01"/>
            </a>
          </li>
          <li>
            <a href="#" data-largesrc="img/works/12.jpg" data-title="Portfolio title" data-description="Mea an eros periculis dignissim, quo mollis nostrum elaboraret et. Id quem perfecto mel, no etiam perfecto qui. No nisl legere recusabo nam, ius an tale pericula evertitur, dicat phaedrum qui in. Usu numquam legendos in, voluptaria sadipscing ut vel. Eu eum mandamus volutpat gubergren, eos ad detracto nominati, ne eum idque elitr aliquam.">
              <img src="img/works/thumbs/12.jpg" alt="img01"/>
            </a>
          </li>
        </ul>

      </div>
    </div>
  </div>
</section>

<!-- Parallax 2 -->
<section id="parallax2" class="home-section parallax" data-stellar-background-ratio="0.5">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <ul class="clients">
          <li class="wow fadeInDown" data-wow-delay="0.3s"><a href="#"><img src="img/clients/1.png" alt="" /></a></li>
          <li class="wow fadeInDown" data-wow-delay="0.6s"><a href="#"><img src="img/clients/2.png" alt="" /></a></li>
          <li class="wow fadeInDown" data-wow-delay="0.9s"><a href="#"><img src="img/clients/3.png" alt="" /></a></li>
          <li class="wow fadeInDown" data-wow-delay="1.1s"><a href="#"><img src="img/clients/4.png" alt="" /></a></li>
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
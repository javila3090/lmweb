 <!-- Navigation -->
 <nav class="navbar navbar-default" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        <span class="sr-only">Toggle nav</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <!-- Logo text or image -->
      <a class="navbar-brand" href="{{url('/')}}"><img src="{{$companyInfo->logo}}" width="100" style="margin-top: -10px;"></a>
      @if(\Auth::user())
      <a class="navbar-brand" href="{{url('/admin')}}" style="color: black; font-size: 26px;" title="Ir al administrador" target="_blank"><i class="fa fa-user"></i></a>
      @endif

    </div>
    <div class="navigation collapse navbar-collapse navbar-ex1-collapse">
      <ul class="nav navbar-nav">
        <li class="current"><a href="#carousel-example-generic2">Inicio</a></li>
        <li><a href="#about">Nosotros</a></li>
        <li><a href="#services">Servicios</a></li>
        <li><a href="#gallery">Galería</a></li>
        <li><a href="#promociones">Promociones</a></li>
        <li><a href="#contact">Contacto</a></li>
      </ul>
    </div>
  </div>
</nav>
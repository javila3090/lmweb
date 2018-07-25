        <div class="cryptos-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="cryptosNav">

                        <!-- Logo -->
                        <a class="nav-brand" href="/"><img src="{{asset('img/logo-lm.png')}}" class="img img-responsive"></a>


                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul class="smooth-scroll ">
                                    <li><a href="/">Inicio</a></li>
                                    <li><a href="/nosotros">Nosotros</a>
                                        <!--<ul class="dropdown">
                                            <li><a href="nosotros">Sobre Nosotros</a></li>
                                            <li><a href="about-us.html">Vision</a></li>
                                            <li><a href="blog.html">Mision</a></li>
                                            <li><a href="nosotros#clientes">Clientes</a></li>
                                            <li><a href="elements.html">Socios</a></li>
                                        </ul>-->
                                    </li>
                                    <!--<li><a href="#">Mega Menu</a>
                                        <div class="megamenu">
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="#">- Home</a></li>
                                                <li><a href="#">- About us</a></li>
                                                <li><a href="#">- Services</a></li>
                                                <li><a href="#">- Testimonials</a></li>
                                                <li><a href="#">- News</a></li>
                                                <li><a href="#">- About us</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="#">- Contact</a></li>
                                                <li><a href="#">- Faq</a></li>
                                                <li><a href="#">- Terms &amp; Conditions</a></li>
                                                <li><a href="#">- Careers</a></li>
                                                <li><a href="#">- Newsletter &amp; Exchange</a></li>
                                                <li><a href="#">- Terms &amp; Conditions</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="#">- About us</a></li>
                                                <li><a href="#">- Testimonials</a></li>
                                                <li><a href="#">- Contact</a></li>
                                                <li><a href="#">- Terms &amp; Conditions</a></li>
                                                <li><a href="#">- Newsletter &amp; Exchange</a></li>
                                                <li><a href="#">- Contact</a></li>
                                            </ul>
                                            <div class="single-mega cn-col-4">
                                                <div class="megamenu-slides owl-carousel">
                                                    <img src="img/bg-img/bg-1.jpg" alt="">
                                                    <img src="img/bg-img/bg-1.jpg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </li>-->
                                    <li><a href="/servicios">Servicios</a></li>
                                    <li><a href="/blog">Blog</a></li>
                                    <li><a href="/contacto">Contacto</a></li>
                                    @if(\Auth::user())
                                    <li><a href="/admin">Admin</a></li>
                                    <li>
                                        <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        Salir
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                    @endif
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
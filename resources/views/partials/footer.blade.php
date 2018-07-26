    <footer class="footer-area">
        <!-- Main Footer Area -->
        <div class="main-footer-area section-padding-50-0 bg-img bg-overlay" style="background-image: url(img/bg-img/bg-1.jpg);">
            <div class="container">
                <div class="row">

                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-4">
                        <div class="footer-widget mb-100">
                            <div class="widget-title">
                                <a href="#"><img src="img/logo-lm.png" alt=""></a>
                            </div>
                            @if(!empty($companyInfo))
                            <p style="color: white; !important">
                                {!!$companyInfo->review!!}
                            </p>
                            <div class="footer-social-info">
                                <a href="https://facebook.com/{!!$companyInfo->facebook!!}"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="https://twitter.com/{!!$companyInfo->twitter!!}"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="https://instagram.com/{!!$companyInfo->instagram!!}"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </div>
                            @endif
                        </div>
                    </div>

                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-4">

                    </div>

                    <!-- Footer Widget Area -->
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="footer-widget mb-100">
                            <div class="widget-title">
                                <h6>Enlaces rápidos</h6>
                            </div>
                            <nav>
                                <ul class="useful-links d-flex justify-content-between flex-wrap">
                                    <li><a href="/">Inicio</a></li>
                                    <li><a href="#">Nosotros</a></li>
                                    <li><a href="servicios">Servicios</a></li>
                                    <li><a href="contacto">Contacto</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bottom Footer Area -->
        <div class="bottom-footer-area">
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center">
                    <div class="col-12">
                        <p style="color: white;"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> LM Consulting | </i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
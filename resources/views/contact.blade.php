 @extends('layouts.base')

@section('content')
<script type='text/javascript'>var centreGot = false;</script>
{!! $map['map_js'] !!}
 <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 col-md-6">
                    <div class="breadcumb-text">
                        <h2>Contacto</h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcumb Thumb Area -->
        <div class="breadcumb-thumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcumb-thumb">
                            <img src="img/bg-img/breadcumb.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <div class="contact-map-area section-padding-100-0">
        <!-- ##### Google Maps ##### -->
        <div class="map-area">
            {!! $map['map_html'] !!}
        </div>
    </div>

    <!-- ##### Contact Area Start ##### -->
    <section class="contact-area section-padding-100-0">
        <div class="container">
            <div class="row">

                <!-- Contact Information -->
                <div class="col-12 col-lg-6">
                    <div class="contact-information mb-100">

<!-- Single Contact Info -->
                        <div class="single-contact-info d-flex">
                            <div class="contact-icon mr-15">
                                <i class="fa fa-map"></i>
                            </div>
                            <p>{!!$companyInfo->address!!}</p>
                        </div>

                        <!-- Single Contact Info -->
                        <div class="single-contact-info d-flex">
                            <div class="contact-icon mr-15">
                                <i class="fa fa-phone"></i>
                            </div>
                            <p>{!!$companyInfo->phone_1!!} @if($companyInfo->phone_2) / {!!$companyInfo->phone_2!!}@endif</p>
                        </div>

                        <!-- Single Contact Info -->
                        <div class="single-contact-info d-flex">
                            <div class="contact-icon mr-15">
                                <i class="fa fa-envelope-o"></i>
                            </div>
                            <p>{!!$companyInfo->email_1!!}<br>{!!$companyInfo->email_2!!}</p>
                        </div>                        

                        <!-- Contact Social Info -->
                        <div class="contact-social-info d-flex mt-50 mb-50 text-center">
                            <a href="https://facebook.com/{!!$companyInfo->facebook!!}"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a>
                            <a href="https://twitter.com/{!!$companyInfo->twitter!!}"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a>
                            <a href="https://instagram.com/{!!$companyInfo->instagram!!}"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a>
                        </div>

                        
                    </div>
                </div>

                <!-- Contact Form Area -->
                <div class="col-12 col-lg-6">
                    <div class="contact-form-area mb-100">
                        <form action="#" method="post">
                            <input type="text" class="form-control" id="name" placeholder="Nombre">
                            <input type="email" class="form-control" id="email" placeholder="E-mail">
                            <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Mensaje"></textarea>
                            <button class="btn cryptos-btn btn-2 mt-30" type="submit">Enviar mensaje</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Contact Area End ##### -->
@endsection
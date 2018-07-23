<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>LM Consulting</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

</head>

<body>
    <!-- ##### Preloader ##### -->
    <div id="preloader">
        <i class="circle-preloader"></i>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <!--<div class="top-header">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-12 h-100">
                        <div class="top-header-content h-100 d-flex align-items-center justify-content-between">
                            <!-- Top Headline
                            <div class="top-headline">
                                <p>Welcome to <span>Cryptos</span></p>
                            </div>
                            <!-- Top Login & Faq & Earn Monery btn
                            <div class="login-faq-earn-money">
                                <a href="#">Login | Register</a>
                                <a href="#">FAQ</a>
                                <a href="#" class="active">Earn Money</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->

        <!-- Menú -->
        @include('partials.menu')
    </header>
    <!-- ##### Header Area End ##### -->

      @section('content')
      @show

    <!-- ##### Footer Area Start ##### -->
    @include('partials.footer')

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>
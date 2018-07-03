<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Lipocero</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/modern-business.css" rel="stylesheet">

</head>

<body >

  <!-- Menú -->
  @include('partials.menu')

  <!-- Banner -->
  @include('partials.banner')

  <!-- Page Content -->
  <div class="container">

    @section('content')
    @show

  </div>
  <!-- /.container -->

  <!-- Footer -->
  @include('partials.footer')

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript">
    var $document = $(document),
    $element = $('#navbar');

    $document.scroll(function() {
      if ($document.scrollTop() >= 20) {
        $element.stop().css({
          top: '0px'
        });
      } else {
        $element.stop().css({
          top: '-200px'
        });
      }
    });
  </script>

</body>

</html>

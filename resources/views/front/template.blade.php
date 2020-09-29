<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/assets/img/favicon.png" rel="icon">
  <link href="/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="/assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="/assets/vendor/aos/aos.css" rel="stylesheet">
  <script src="/assets/vendor/jquery/jquery.min.js"></script>
  <!-- Template Main CSS File -->
  <link href="/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Arsha - v2.2.0
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="/">CovMedia</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="/assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
            @if (session('user_token'))
                <li><a href="/admin">{{\App\Http\Controllers\Fun\Auth::getName(session('user_token'))}}</a></li>
            @else
                <li><a href="/auth">Login</a></li>
                <li><a href="/auth/register">Register</a></li>
            @endif

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  @yield('content')

      <!-- ======= Footer ======= -->
      <footer id="footer">


        <div class="container footer-bottom clearfix">
          <div class="copyright">
            &copy; Copyright <strong><span>CovMedia</span></strong>. All Rights Reserved
          </div>
          <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
            Designed by <a href="https://bootstrapmade.com/">MochJuangPp</a>
          </div>
        </div>
      </footer><!-- End Footer -->

      <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
      <div id="preloader"></div>

      <!-- Vendor JS Files -->
      <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
      <script src="/assets/vendor/php-email-form/validate.js"></script>
      <script src="/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
      <script src="/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
      <script src="/assets/vendor/venobox/venobox.min.js"></script>
      <script src="/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
      <script src="/assets/vendor/aos/aos.js"></script>

      <!-- Template Main JS File -->
      <script src="/assets/js/main.js"></script>

    </body>

    </html>


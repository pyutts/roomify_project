<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Home | Roomify</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="{{ asset('/admin/images/logos/icon.jpg') }}" rel="icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('/home/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('/home/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('/home/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('/home/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('/home/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  <link href="{{asset('/home/css/main.css')}}" rel="stylesheet">

</head>

<body class="sarter-page-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    @include('home.components.navbar_login')
    @yield('navbar_login')
  </header>

  <main class="main">
  @yield('section_home')
  @yield('section_home_login')
  </main>

  <footer id="footer" class="footer">
    @include('home.components.footer')
    @yield('footer')
  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{asset('/home/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('/home/vendor/php-email-form/validate.js ')}}"></script>
  <script src="{{asset('/home/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('/home/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('/home/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{asset('/home/vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
  <script src="{{asset('/home/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('/home/vendor/swiper/swiper-bundle.min.js')}}"></script>

  <!-- Main JS File -->
  <script src="{{asset('/home/js/main.js')}}"></script>

</body>

</html>

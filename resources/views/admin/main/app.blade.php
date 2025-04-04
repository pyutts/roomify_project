
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Dashboard | Roomify</title>
    <meta
      content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
      name="viewport"
    />
    <link
      rel="icon"
      href="{{asset ('/admin/img/kaiadmin/favicon.ico')}}"
      type="image/x-icon"
    />

    <!-- Fonts and icons -->
    <script src="{{asset ('/admin/js/plugin/webfont/webfont.min.js')}}"></script>
    <script>
      WebFont.load({
        google: { families: ["Public Sans:300,400,500,600,700"] },
        custom: {
          families: [
            "Font Awesome 5 Solid",
            "Font Awesome 5 Regular",
            "Font Awesome 5 Brands",
            "simple-line-icons",
          ],
          urls: ["{{asset ('/admin/css/fonts.min.css')}}"],
        },
        active: function () {
          sessionStorage.fonts = true;
        },
      });
    </script>

    <link rel="stylesheet" href="{{asset ('/admin/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset ('/admin/css/plugins.min.css')}}" />
    <link rel="stylesheet" href="{{asset ('/admin/css/kaiadmin.min.css')}}" />
    <link rel="stylesheet" href="{{asset ('/admin/css/demo.css')}}" />
  </head>
  <body>

    <div class="wrapper">
      @include('admin.components.sidebar')
      @yield('sidebar')
    </div>

    <div class="main-panel">
      @include('admin.components.navbar')
      @yield('navbar')
    </div>
    
    <div class="container ">
      <div class="page-inner">
          @yield('content_users')
      </div>
    </div>
    
    <!--   Core JS Files   -->
    <script src="{{asset ('/admin/js/core/jquery-3.7.1.min.js')}}"></script>
    <script src="{{asset ('/admin/js/core/popper.min.js')}}"></script>
    <script src="{{asset ('/admin/js/core/bootstrap.min.js')}}"></script>
    <!-- jQuery Scrollbar -->
    <script src="{{asset ('/admin/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js')}}"></script>
    <!-- Kaiadmin JS -->
    <script src="{{asset ('/admin/js/kaiadmin.min.js')}}"></script>
    <!-- Kaiadmin DEMO methods, don't include it in your project! -->
    <script src="{{asset ('/admin/js/setting-demo2.js')}}"></script>
  </body>
</html>

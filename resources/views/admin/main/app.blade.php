<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Roomify</title>
  <link rel="shortcut icon" type="image/png" href="{{ asset('/admin/images/logos/icon.jpg') }}" />
  <link rel="stylesheet" href="{{ asset('/admin/css/styles.min.css') }}" />
</head>

<body>
  <form id="logoutForm" action="{{ route('users.logout') }}" method="POST" style="display: none;">
      @csrf
  </form>
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">

    <!-- Sidebar -->
    @include('admin.components.sidebar')

    <!-- Main Content -->
    <div class="body-wrapper">
      <!-- Navbar -->
      @include('admin.components.navbar')

      <!-- Content -->
      <div class="container-fluid">
        @yield('content_login')
        @yield('content_dashboard_admin')
        @yield('content_dashboard_hotel_onwers')
      </div>
    </div>
  </div>

  <script src="{{ asset('/admin/libs/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('/admin/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('/admin/js/sidebarmenu.js') }}"></script>
  <script src="{{ asset('/admin/js/app.min.js') }}"></script>
  <script src="{{ asset('/admin/libs/simplebar/dist/simplebar.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <script>
    $('#btnLogout').click(function (e) {
      e.preventDefault();

      Swal.fire({
        title: 'Apakah Anda Akan Logout?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#198754',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, logout!'
      }).then((result) => {
        if (result.isConfirmed) {
          $('#logoutForm').submit();
        }
      });
    });
  </script>

</body>
</html>

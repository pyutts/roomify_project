<div class="container-fluid container-xl position-relative d-flex align-items-center">
  <a href="index.html" class="d-flex align-items-center me-auto">
    <img src="{{ asset('/home/img/icon_full.png') }}" width="120" alt="Logo">
  </a>

  <nav id="navmenu" class="navmenu">
    <ul>
      <li><a href="#hero">Home</a></li>
      <li><a href="#services">Services</a></li>
      <li><a href="#services">Hotels</a></li>
      <li><a href="#services">My Bookings</a></li>
      <li><a href="#portfolio">About</a></li>
    </ul>
    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
  </nav>

  <!-- Hidden Logout Form -->
  <form id="logout-form" action="{{ route('users.logout') }}" method="POST" style="display: none;">
    @csrf
  </form>

  <!-- Dropdown for user -->
  <div class="dropdown ms-3">
    <a class="btn btn-getstarted dropdown-toggle d-flex align-items-center" href="#" role="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
      <i class="bi bi-person-circle me-2"></i> {{ session('users_username') }}
    </a>

    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
      <li><a class="dropdown-item" href="#"><i class="bi bi-person me-2"></i> Profil Saya</a></li>
      <li>
        <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
          <i class="bi bi-box-arrow-right me-2"></i> Logout
        </a>
      </li>
    </ul>
  </div>
</div>

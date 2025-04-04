<aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between" style="padding-left: 50px;">
          <a href="./index.html" class="logo-img"><br>
          <img src="{{asset('/admin/images/logos/icon_full.png')}}" width="150" alt="">
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <!-- sidebar menu -->
          <ul id="sidebarnav" style="list-style: none; padding: 0;">
              <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                <span class="hide-menu">Home</span>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="./dashboard.html" 
                  style="display: flex; align-items: center; padding: 10px; color: #333; text-decoration: none; border-radius: 5px; transition: background 0.3s, color 0.3s;" 
                  onmouseover="this.style.backgroundColor='#28a745'; this.style.color='white';"
                  onmouseout="this.style.backgroundColor='transparent'; this.style.color='#333';">
                  <i class="ti ti-layout-dashboard" style="margin-right: 10px;"></i>
                  <span class="hide-menu">Dashboard</span>
                </a>
              </li>

              <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                <span class="hide-menu">Management</span>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="./admin.html" 
                  style="display: flex; align-items: center; padding: 10px; color: #333; text-decoration: none; border-radius: 5px; transition: background 0.3s, color 0.3s;" 
                  onmouseover="this.style.backgroundColor='#28a745'; this.style.color='white';"
                  onmouseout="this.style.backgroundColor='transparent'; this.style.color='#333';">
                  <i class="ti ti-shield-lock" style="margin-right: 10px;"></i>
                  <span class="hide-menu">Admin</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="./users.html" 
                  style="display: flex; align-items: center; padding: 10px; color: #333; text-decoration: none; border-radius: 5px; transition: background 0.3s, color 0.3s;" 
                  onmouseover="this.style.backgroundColor='#28a745'; this.style.color='white';"
                  onmouseout="this.style.backgroundColor='transparent'; this.style.color='#333';">
                  <i class="ti ti-users" style="margin-right: 10px;"></i>
                  <span class="hide-menu">Users</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="./owners.html" 
                  style="display: flex; align-items: center; padding: 10px; color: #333; text-decoration: none; border-radius: 5px; transition: background 0.3s, color 0.3s;" 
                  onmouseover="this.style.backgroundColor='#28a745'; this.style.color='white';"
                  onmouseout="this.style.backgroundColor='transparent'; this.style.color='#333';">
                  <i class="ti ti-user-check" style="margin-right: 10px;"></i>
                  <span class="hide-menu">Hotel Owners</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="./hotels.html" 
                  style="display: flex; align-items: center; padding: 10px; color: #333; text-decoration: none; border-radius: 5px; transition: background 0.3s, color 0.3s;" 
                  onmouseover="this.style.backgroundColor='#28a745'; this.style.color='white';"
                  onmouseout="this.style.backgroundColor='transparent'; this.style.color='#333';">
                  <i class="ti ti-building" style="margin-right: 10px;"></i>
                  <span class="hide-menu">Hotels</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="./rooms.html" 
                  style="display: flex; align-items: center; padding: 10px; color: #333; text-decoration: none; border-radius: 5px; transition: background 0.3s, color 0.3s;" 
                  onmouseover="this.style.backgroundColor='#28a745'; this.style.color='white';"
                  onmouseout="this.style.backgroundColor='transparent'; this.style.color='#333';">
                  <i class="ti ti-bed" style="margin-right: 10px;"></i>
                  <span class="hide-menu">Rooms</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="./bookings.html" 
                  style="display: flex; align-items: center; padding: 10px; color: #333; text-decoration: none; border-radius: 5px; transition: background 0.3s, color 0.3s;" 
                  onmouseover="this.style.backgroundColor='#28a745'; this.style.color='white';"
                  onmouseout="this.style.backgroundColor='transparent'; this.style.color='#333';">
                  <i class="ti ti-calendar-event" style="margin-right: 10px;"></i>
                  <span class="hide-menu">Bookings</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="./payments.html" 
                  style="display: flex; align-items: center; padding: 10px; color: #333; text-decoration: none; border-radius: 5px; transition: background 0.3s, color 0.3s;" 
                  onmouseover="this.style.backgroundColor='#28a745'; this.style.color='white';"
                  onmouseout="this.style.backgroundColor='transparent'; this.style.color='#333';">
                  <i class="ti ti-wallet" style="margin-right: 10px;"></i>
                  <span class="hide-menu">Payments</span>
                </a>
              </li>

              <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                <span class="hide-menu">Reports</span>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="./reports.html" 
                  style="display: flex; align-items: center; padding: 10px; color: #333; text-decoration: none; border-radius: 5px; transition: background 0.3s, color 0.3s;" 
                  onmouseover="this.style.backgroundColor='#28a745'; this.style.color='white';"
                  onmouseout="this.style.backgroundColor='transparent'; this.style.color='#333';">
                  <i class="ti ti-file-text" style="margin-right: 10px;"></i>
                  <span class="hide-menu">Reports</span>
                </a>
              </li>
            </ul>


            <!-- end sidebar menu -->
            <div class="hide-menu bg-light position-relative mb-7 mt-5">
            <div class="d-flex">
            </div>
          </div>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
</aside>

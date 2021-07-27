<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="{{ asset('img/admin_user/gradd.png') }}" alt="Profile" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">System 30%</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('img/admin_user/khabby2.png') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Khaby Lame</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

            {{-- Aside Nav Items --}}
          <li class="nav-item">
            <a href="/home" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-header">QR CODE</li>
          <li class="nav-item">
            <a href="/generate_qr_code" class="nav-link">
              <i class="nav-icon fas fa-qrcode"></i>
              <p>
                Generate Passenger QR
              </p>
            </a>
          </li>
          <li class="nav-header">QUEUEING <span class="right badge badge-danger">Under Construction</span></li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-swatchbook"></i>
              <p>
                Current Vehicle Queueing
              </p>
            </a>
          </li>
          <li class="nav-header">TERMINAL</li>

          <li class="nav-item menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Profiles
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/profile_dispatcher" class="nav-link">
                  <i class="fas fa-id-badge nav-icon"></i>
                  {{-- Badge --}}
                  {{-- <span class="right badge badge-danger">New</span> --}}
                  <p>Dispatcher Profile</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/profile_vehicle" class="nav-link">
                  <i class="fas fa-truck-pickup nav-icon"></i>
                  <p>Vehicle Profile</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="/profile_dispatcher/account" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Dispatcher's Account
              </p>
            </a>
          </li>

          <li class="nav-header">MOBILE APP <span class="right badge badge-danger">Under Construction</span></li>

          <li class="nav-item">
            <a href="/try" class="nav-link">
              <i class="nav-icon fas fa-vr-cardboard"></i>
              <p>
                User Profiles
              </p>
            </a>
          </li>
          
          <li class="nav-header">REPORTS <span class="right badge badge-danger">Under Construction</span></li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-stream"></i>
              <p>
                Statistics
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-clipboard-list"></i>
              <p>
                Logs
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
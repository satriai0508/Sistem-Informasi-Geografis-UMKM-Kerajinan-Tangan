<!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <header class="topbar" data-navbarbg="skin6">
      <nav class="navbar top-navbar navbar-expand-md navbar-dark">
        <div class="navbar-header" data-logobg="skin6">
          <!-- ============================================================== -->
          <!-- Logo -->
          <!-- ============================================================== -->
          <div class="navbar-brand">
            <!-- Logo icon -->
            <a href="{{ route('home') }}" class="logo">
              <!-- Logo text -->
              <span class="logo-text logo-icon text-decoration-none text-dark fs-2">
                <i class="mdi mdi-home-map-marker"></i> {{ env('APP_NAME') }}
              </span>
            </a>
          </div>
          <!-- ============================================================== -->
          <!-- End Logo -->
          <!-- ============================================================== -->
          <!-- ============================================================== -->
          <!-- toggle and nav items -->
          <!-- ============================================================== -->
          <a class="
                nav-toggler
                waves-effect waves-light
                text-dark
                d-block d-md-none
              " href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
        </div>
        <!-- ============================================================== -->
        <!-- End Logo -->
        <!-- ============================================================== -->
        @include('admin.layouts.toggle')
      </nav>
    </header>
    <!-- ============================================================== -->
    <!-- End Topbar header -->
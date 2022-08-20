<!-- ============================================================== -->
<!-- Toggle -->
<!-- ============================================================== -->
<div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">

  <!-- ============================================================== -->
  <!-- Right side toggle and nav items -->
  <!-- ============================================================== -->
  <ul class="navbar-nav float-end ms-auto">
    <!-- ============================================================== -->
    <!-- User profile and search -->
    <!-- ============================================================== -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="mdi mdi-account-circle"></i>
        {{ auth()->user()->name }}
      </a>
      <ul class="dropdown-menu show" aria-labelledby="navbarDropdown"></ul>
    </li>
  </ul>
</div>
<!-- ============================================================== -->

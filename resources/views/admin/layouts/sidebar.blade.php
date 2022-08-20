<aside class="left-sidebar" data-sidebarbg="skin6">
  <!-- Sidebar scroll-->
  <div class="scroll-sidebar">
    <!-- Sidebar navigation-->
    <nav class="sidebar-nav">
      <ul id="sidebarnav">
        <!-- User Profile-->
        <li class="sidebar-item">
          <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('home') }}" aria-expanded="false"><i class="me-3 mdi mdi-view-dashboard fs-3" aria-hidden="true"></i><span class="hide-menu">Dashboard</span></a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/admin/peta" aria-expanded="false">
            <i class="me-3 mdi mdi-map-marker-multiple fs-3" aria-hidden="true"></i><span class="hide-menu">Peta</span></a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/admin/toko" aria-expanded="false">
            <i class="me-3 mdi mdi-store-24-hour fs-3" aria-hidden="true"></i><span class="hide-menu">Toko</span></a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/admin/produk" aria-expanded="false">
            <i class="me-3 mdi mdi-store fs-3" aria-hidden="true"></i><span class="hide-menu">Produk</span></a>
        </li>
        <li class="sidebar-item">
          <form action="{{ route('logout') }}" method="post">
            @csrf
            <button type="submit" class="sidebar-link waves-effect waves-dark sidebar-link btn btn-light bg-light d-flex justify-content-center" onclick="return confirm('Are you sure?')" aria-expanded="false" aria-hidden="true"><i class="me-3 mdi mdi-account-remove"></i> <span class="hide-menu">Log out</span></button>
          </form>
        </li>
      </ul>
    </nav>
    <!-- End Sidebar navigation -->
  </div>
  <!-- End Sidebar scroll-->
</aside>

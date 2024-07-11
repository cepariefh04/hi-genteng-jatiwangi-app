<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/dashboard">
      <div class="sidebar-brand-icon">
        <i class="fas fa-home"></i>
      </div>
      <div class="sidebar-brand-text mx-3">HI - Admin</div>
    </a>
    <hr class="sidebar-divider my-0">
    <li class="nav-item {{ Request::is('dashboard') ? 'active' : '' }}">
      <a class="nav-link" href="/dashboard">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
    </li>
    <hr class="sidebar-divider">
    <li class="nav-item">
			<a class="nav-link" href="/">
				<i class="fas fa-fw fa-home"></i>
				<span>Home Page</span></a>
		</li>
		<div class="sidebar-heading">Settings</div>
		<li class="nav-item">
			<a class="nav-link" href="/dashboard/setting">
				<i class="fas fa-fw fa-wrench"></i>
				<span>Setting Aplikasi</span></a>
		</li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item {{ Request::is('dashboard/produk*') ? 'active' : '' }}">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
        aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-fw fa-list"></i>
        <span>Produk</span>
      </a>
      <div id="collapseUtilities" class="collapse {{ Request::is('dashboard/produk*') || Request::is('dashboard/kategori*') ? 'show' : '' }}" aria-labelledby="headingUtilities"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Produk:</h6>
          <a class="collapse-item {{ Request::is('dashboard/produk*') ? 'active' : '' }}" href="/dashboard/produk">List Produk</a>
          <a class="collapse-item {{ Request::is('dashboard/kategori*') ? 'active' : '' }}" href="/dashboard/kategori">Kategori Produk</a>
        </div>
      </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>

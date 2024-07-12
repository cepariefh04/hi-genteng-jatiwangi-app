<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo me-auto">
        <a href="/"><img src="{{ asset('storage/'. $settings[0]->navbar_logo) }}" alt="" class="img-fluid"></a>
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto" href="/#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="/#about">Tentang Kami</a></li>
          <li><a class="nav-link scrollto {{ Request::is('detail-produk/*') ? 'active' : '' }}" href="/#produk">Produk</a></li>
          <li><a class="nav-link scrollto" href="/#contact">Kontak</a></li>
          @auth
          	<li><a class="nav-link scrollto" href="/dashboard/setting">Dashboard</a></li>
          @endauth
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
    </div>
  </header>

@extends('homepage.layouts.main-detail-produk')

@section('content')
  <!-- ======= Breadcrumbs ======= -->
  <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Detail Produk</h2>
        <ol>
          <li><a href="/">Home</a></li>
          <li><a href="/">Detail Produk</a></li>
          <li>{{ $product->nama }}</li>
        </ol>
      </div>
    </div>
  </section><!-- End Breadcrumbs -->

  <!-- ======= produk Details Section ======= -->
  <section id="produk-details" class="produk-details">
    <div class="container">

      <div class="row gy-4">
        <div class="col-lg-7">
          <div class="produk-details-slider">
            <div class="align-items-center">
              <div class="d-flex justify-content-center">
                <img src="{{ asset('storage/' . $product->foto) }}" alt="">
              </div>
            </div>
          </div>
          <div class="produk-thumbnails mt-4">
            <div class="row justify-content-center">
              <p class="text-secondary mb-0">Produk Lainnya</p>
              @foreach ($products as $p)
                @if ($product->id !== $p->id)
                  <div class="col-4 col-md-3 col-lg-2">
                    <a href="{{ $p->id }}">
                      <figure>
                        <img src="{{ asset('storage/' . $p->foto) }}" class="img-thumbnail" alt="Thumbnail">
                      </figure>
                    </a>
                  </div>
                @endif
              @endforeach
            </div>
          </div>
        </div>
        <div class="col-lg-5">
          <h1>{{ $product->nama }}</h1>
          <h4 class="text-success" id="harga" data-harga="{{ $product->harga }}"></h4>
          <div class="produk-info mb-2 shadow rounded-2">
            <h3>Informasi Produk</h3>
            <ul>
              <div class="row">
                <div class="col-lg-6">
                  <li><strong>Kategori</strong>: {{ $product->category->nama }}</li>
                  <li><strong>Bahan Baku</strong>: {{ $product->bahan_baku }}</li>
                  <li><strong>Panjang</strong>: {{ $product->panjang }}</li>
                  <li><strong>Lebar</strong>: {{ $product->lebar }}</li>
                </div>
                <div class="col-lg-6">
                  <li><strong>Ketebalan</strong>: {{ $product->ketebalan }}</li>
                  <li><strong>Berat</strong>: {{ $product->berat }}</li>
                  <li><strong>Jarak Reng</strong>: {{ $product->jarak_reng }}</li>
                  <li><strong>Volume</strong>: {{ $product->volume }} pcs/m<sup>2</sup></li>
                </div>
              </div>
            </ul>
            <div class="produk-description">
              <h3 class="text-center">Pesan Sekarang</h3>
              <a class="btn btn-outline-success btn-lg w-100"
              href="https://api.whatsapp.com/send?phone=62{{ $settings[0]->no_telepon }}" style="text-decoration: none;" class="float" target="_blank">
                <i class="bi bi-whatsapp"></i> +62{{ $settings[0]->no_telepon }}
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!-- End produk Details Section -->
  <script>
    function formatRupiah(angka) {
      if (angka != null) {
        return 'Rp' + angka.toString().replace(/\B(?=(\d{3})+(?!\d))/g, '.');
      }
      return '';
    }
    var hargaElement = document.getElementById('harga');
    var harga = hargaElement.dataset.harga;

    hargaElement.textContent = formatRupiah(harga);
  </script>
@endsection

@extends('homepage.layouts.main')

@section('content')
	@foreach ($settings as $setting)
		<!-- ======= About Section ======= -->
	<section id="about" class="about">
		<div class="container-fluid">
          <div class="section-title">
            <h2>Tentang Kami</h2>
            <p>H.I Genteng Jatiwangi</p>
          </div>
          <div class="row">
            <div class="col-lg-6 px-5">
                <img src="img/pabrik.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 px-5">
              {!! $setting->tentang_kami !!}
            </div>
          </div>
		</div>
	</section><!-- End About Section -->

	<!-- ======= produk Section ======= -->
	<section id="produk" class="produk">
		<div class="container">
			<div class="section-title">
				<h2>Produk</h2>
				<p>Berikut adalah produk-produk Kami</p>
			</div>

			<div class="row produk-container">
              @foreach ($products as $product)
                <div class="col-lg-4 col-md-6 produk-item filter-morando wow fadeInUp" data-wow-delay="0.1s">
                  <div class="produk-wrap text-center">
                    <a href="morando-detail.html" class="link-details" title="Lihat Detail">
                      <figure>
                        <img src="{{ asset('storage/' . $product->foto) }}" class="img-fluid" alt="">
                      </figure>
                    </a>

                    <div class="produk-info">
                      <h4><a href="morando-detail.html">{{ $product->nama }}</a></h4>
                      <p>Rp{{ $product->harga }}</p>
                    </div>
                  </div>
                </div>
              @endforeach
			</div>
		</div>
	</section><!-- End produk Section -->

	<!-- ======= Contact Section ======= -->
	<section id="contact" class="contact section-bg">
		<div class="container">
			<div class="section-title">
				<h2>Kontak</h2>
				<p>Untuk pemesanan, hubungi kontak dibawah ini</p>
			</div>
			<div class="row mt-5 justify-content-center">
				<div class="col-lg-10">
					<div class="info-wrap">
						<div class="row">
							<div class="col-lg-4 info">
								<i class="bi bi-geo-alt"></i>
								<h4>Alamat:</h4>
								<p>{{ $setting->alamat }}</p>
							</div>

							<div class="col-lg-4 info mt-4 mt-lg-0">
								<i class="bi bi-instagram"></i>
								<h4>Instagram:</h4>
								<p>
                                  <a href="https://www.instagram.com/{{ $setting->instagram }}" style="text-decoration: none;" class="float" target="_blank">
                                    {{ $setting->instagram }}
                                  </a>
                                </p>
							</div>

							<div class="col-lg-4 info mt-4 mt-lg-0">
								<i class="bi bi-whatsapp"></i>
								<h4>Whatsapp:</h4>
								<p>
									<a href="https://api.whatsapp.com/send?phone=62{{ $setting->no_telepon }}" style="text-decoration: none;" class="float" target="_blank">
										+62{{ $setting->no_telepon }}
									</a>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row mt-5 justify-content-center">
				<div class="col-lg-10">
					<div class="mb-5">
						<iframe src="{{ $setting->link_gmaps }}"
						width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					</div><!-- End Google Maps -->
				</div>
			</div>
		</div>
	</section><!-- End Contact Section -->
	@endforeach
@endsection
